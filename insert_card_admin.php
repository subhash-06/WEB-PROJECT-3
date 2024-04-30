<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drop Users table PHP Script</title>
</head>

<body>
    <?php
session_start();
$username = $_SESSION['username'];

require("db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  // Get form data
  $seller_user_id = $_POST['seller_user_id'];
  $address = $_POST['address'];
  $age = $_POST['age'];
  $bed = $_POST['bed'];
  $ad = $_POST['ad'];
  $garden = $_POST['garden'];
  $pa = $_POST['pa'];
  $tax = $_POST['tax'];

  // Get file data
  $file_name = $_FILES['file']['name'];
  $file_tmp = $_FILES['file']['tmp_name'];

  // Create a new unique file name
  // $file_new_name = uniqid() . '-' . $file_name;

  // Set upload directory
  $upload_dir = 'img/';

  // Move file to upload directory
  move_uploaded_file($file_tmp, $upload_dir . $file_name);

  // Insert data into database
  $sql = "INSERT INTO cards (seller_user_id, address, age, bed, ad, garden, pa, tax, image)
          VALUES ('$seller_user_id','$address', '$age', '$bed', '$ad', '$garden', '$pa', '$tax', '$file_name')";

  if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
    header("Location: admin_dashboard.php");
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>
    <div>
        <a href="index.php"><input type="button" id="btn1" value="Home"></a>
    </div>
</body>

</html>