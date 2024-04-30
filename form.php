<?php
// Start the session
session_start();

// Check if the session variable is set
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    // Redirect to the login page or handle the case when the session variable is not set
    header("Location: seller_login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Jeep's Infra Seller Register</title>
    <link rel="stylesheet" href="style_seller.css">
</head>

<body>
    <div class="wrapper">
        <div class="title">
            List your property
        </div>
        <form method="post" action="insert_card.php" enctype="multipart/form-data">
        <div class="field">
        <input type="text" id="seller_user_id" name="seller_user_id" value="<?php echo $_SESSION['username']; ?>">
                <label for="seller_user_id">Seller</label>
            </div>
            <div class="field">
                <input type="text" id="address" name="address" required>
                <label for="address">Address</label>
            </div>
            <div class="field">
                <input type="text" id="age" name="age" required>
                <label for="age">Age of the Property</label>
            </div>
            <div class="field">
                <input type="text" id="bed" name="bed" required>
                <label for="bed">Number of Beds</label>
            </div>
            <div class="field">
                <input type="text" id="ad" name="ad" required>
                <label for="ad">Number of Bathrooms</label>
            </div>
            <div class="field">
                <input type="text" id="garden" name="garden" required>
                <label for="garden">Garden Available? (Yes/No)</label>
            </div>
            <div class="field">
                <input type="text" id="pa" name="pa" required>
                <label for="pa">Parking Available? (Yes/No)</label>
            </div>
            <div class="field">
                <input type="text" id="tax" name="tax" required>
                <label for="tax">Selling Price?</label>
            </div>
            <div class="field">
                <input type="file" id="file" name="file" required>
            </div>
            <div class="field">
                <input type="submit" value="Creating Listing">
            </div>
            <div class="signup-link">
                Want to logout? <a href="logout.php">Logout</a>
            </div>    
            <div class="signup-link">
               Back to Dashboard? <a href="seller_dashboard.php">Home</a>
            </div>
        </form>
    </div>
</body>

</html>
