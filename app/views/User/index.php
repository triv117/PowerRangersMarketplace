<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login</title>
      <link rel="stylesheet" href="/resources/styles/loginstyle.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
   	<?php
			if(isset($_GET['error'])){ ?>
		<div class="alert alert-danger" role="alert">
		  <?= $_GET['error'] ?>
		</div>
		<?php	}
			if(isset($_GET['message'])){ ?>
		<div class="alert alert-success" role="alert">
		  <?= $_GET['message'] ?>
		</div>
		<?php	}
		?>


      <div class="center">
         <div class="container">
            <div class="text">
               Login Form
            </div>
            <form action='' method='post'>
               <div class="data">
                  <label>Username</label>
                  <input type="text" name="user_username" required>
               </div>
               <div class="data">
                  <label>Password</label>
                  <input type="password" name="user_password" required>
               </div>
               <div class="forgot-pass">
                  <a href="User/resetPassword">Forgot Password?</a>
               </div>
               <div class="btn">
                  <div class="inner"></div>
                  <button type="submit" name="action" value="Log in">Login</button>
               </div>
               <div class="signup-link">
                  Not a User? <a href="\User\register">Signup now</a>
               </div>
               <div class="cancel-login">
               	<a href="/Main/index">Cancel</a>
               </div>		
            </form>
         </div>
      </div>
   </body>
   
</html>