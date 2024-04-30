<?php
session_start();
$conn = new mysqli("localhost", "hpalaparthi1", "hpalaparthi1", "hpalaparthi1");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $buyer_user_id = $_POST['buyer_user_id_login'];
    $buyer_password = $_POST['buyer_password_login'];
    
    // Use prepared statements
    $sql = "select * from buyer_data where buyer_user_id = '$buyer_user_id' and buyer_password = '$buyer_password'";  
    // echo($sql);
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
      
    if($count == 1){  
        $_SESSION['username'] =  $buyer_user_id;
        header("location: buyer_dashboard.php");
    }  
    else{  
        header('Location: buyer_login.php?error=invalid');
        exit();  
    } 

}

$conn->close();
?>