<?php
session_start();
$conn = new mysqli("localhost", "hpalaparthi1", "hpalaparthi1", "hpalaparthi1");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $seller_user_id = $_POST['admin_user_id_login'];
    $seller_password = $_POST['admin_password_login'];
    
    // Use prepared statements
    $sql = "select * from seller_data where seller_user_id = '$seller_user_id' and seller_password = '$seller_password'";  
    // echo($sql);
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
      
    if($count == 1){  
        $_SESSION['username'] =  $seller_user_id;
        header("location: admin_dashboard.php");
    }  
    else{  
        header('Location: admin_login.php?error=invalid');
        exit();  
    } 

}

$conn->close();
?>