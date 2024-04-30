<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Jeep's Infra Buyer Register</title>
      <link rel="stylesheet" href="style_buyer.css">
   </head>
   <body>
      <div class="wrapper">
         <div class="title">
            REGISTER AS BUYER
                 </div>
                 <form method = "post" action="buyer_register_submit.php">
         <div class="field">
               <input type="text" name="buyer_name" id="buyer_name" required>
               <label>Name</label>
            </div>
            <div class="field">
               <input type="text" name="buyer_user_id" id="buyer_user_id" required>
               <label>User Name</label>
            </div>

            <div class="field">
               <input type="text" name="buyer_email" id="buyer_email" required>
               <label>Email Address</label>
            </div>
            <div class="field">
               <input type="password" name="buyer_password" id="buyer_password" required>
               <label>Password</label>
            </div>
            <div class="content">
            </div>
            <div class="field">
               <input type="submit" value="Sign Up">
            </div>
            <div class="signup-link">
               Already a member? <a href="buyer_login.php">Login now</a>
            </div>
            <div class="signup-link">
               Back to Home? <a href="index.php">Home</a>
            </div>
         </form>
      </div>
   </body>
</html>