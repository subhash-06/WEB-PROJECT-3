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
         REGISTER AS SELLER
         </div>
         <form method = "post" action="seller_register_submit.php">
         <div class="field">
               <input type="text" name="seller_name" id="seller_name" required>
               <label>Name</label>
            </div>
            <div class="field">
               <input type="text" name="seller_user_id" id="seller_user_id" required>
               <label>User Name</label>
            </div>

            <div class="field">
               <input type="text" name="seller_email" id="seller_email" required>
               <label>Email Address</label>
            </div>
            <div class="field">
               <input type="password" name="seller_password" id="seller_password" required>
               <label>Password</label>
            </div>
            <div class="content">
            </div>
            <div class="field">
               <input type="submit" value="Sign Up">
            </div>
            <div class="signup-link">
               Already a member? <a href="seller_login.php">Login now</a>
            </div>
            <div class="signup-link">
               Back to Home? <a href="index.php">Home</a>
            </div>
         </form>
      </div>
   </body>
</html>