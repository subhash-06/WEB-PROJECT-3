
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
        header("location: seller_dashboard.php");
        
    } else {
        echo "Error deleting data: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
