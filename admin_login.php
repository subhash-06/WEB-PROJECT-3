<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Jeep's Infra Admin Login</title>
      <link rel="stylesheet" href="style_seller.css">
      
   </head>
   <body>
      <div class="wrapper">
         <div class="title">
         ADMIN LOGIN
         </div>
         <form method="post" action="admin_login_submit.php">
            <div class="field">
               <input type="text" name="admin_user_id_login" id="admin_user_id_login" required>
               <label>User Name</label>
            </div>
            <div class="field">
               <input type="password" name="admin_password_login" id="admin_password_login" required>
               <label>Password</label>
            </div>
            <div class="content">
            </div>
            <div class="field">
               <input type="submit" value="Login">
            </div>
            <div class="signup-link">
               Back to Home? <a href="index.php">Home</a>
            </div>
         </form>
      </div>
   </body>
</html>