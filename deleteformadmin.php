<?php
// Start the session
session_start();

// Check if the session variable is set
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    // Redirect to the login page or handle the case when the session variable is not set
    header("Location: admin_login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Jeep's Infra Delete Form</title>
    <link rel="stylesheet" href="style_seller.css">
</head>

<body>
    <div class="wrapper">
        <div class="title">
Delete Listing
        </div>
        <form method="post" action="delete_card_admin.php" enctype="multipart/form-data">
        <div class="field">
        <input type="text" id="card_id" name="card_id">
                <label for="card_id">Listing ID to Delete</label>
            </div>
            <div class="field">
                <input type="submit" value="Delete Listing">
            </div>
            <div class="signup-link">
               Back to Dashboard? <a href="admin_dashboard.php">Dashboard</a>
            </div>

        </form>
    </div>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $card_id = $_POST['card_id'];

    $conn = new mysqli("localhost", "hpalaparthi1", "hpalaparthi1", "hpalaparthi1");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("DELETE FROM cards WHERE id = ?");
    $stmt->bind_param("i", $card_id);

    if ($stmt->execute()) {
        echo "Data deleted successfully.";
        header("location: admin_dashboard.php");

    } else {
        echo "Error deleting data: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
</body>

</html>
