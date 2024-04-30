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
         LOGIN AS SELLER
         </div>
         <form method="post" action="seller_login_submit.php">
            <div class="field">
               <input type="text" name="seller_user_id_login" id="seller_user_id_login" required>
               <label>User Name</label>
            </div>
            <div class="field">
               <input type="password" name="seller_password_login" id="seller_password_login" required>
               <label>Password</label>
            </div>
            <div class="content">
            </div>
            <div class="field">
               <input type="submit" value="Sign Up">
            </div>
            <div class="signup-link">
               Not a member? <a href="seller_register.php">Sign up</a>
            </div>
            <div class="signup-link">
               Back to Home? <a href="index.php">Home</a>
            </div>

         </form>
      </div>
   </body>
</html>