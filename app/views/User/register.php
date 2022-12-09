<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> User Registration</title>
    <link rel="stylesheet" href="/resources/styles/userregistrationstyle.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
	<?php
		if(isset($_GET['error'])){ ?>
			<div class="alert alert-danger" role="alert">
			  <?= $_GET['error'] ?>
			</div>
		<?php	}
	?>

  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action='' method='post'>
        <div class="user-details">
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="user_username" placeholder="Enter your username" required>
          </div>      
          <div class="input-box">
            <span class="details">First name</span>
            <input type="text" name="user_fname" placeholder="Enter your first name" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="user_password" placeholder="Enter your password" required>
          </div>        
          <div class="input-box">
            <span class="details">Last name</span>
            <input type="text" name="user_lname" placeholder="Enter your last name" required>
          </div>
          <div class="input-box">
            <span class="details">Password confirmation</span>
            <input type="password" name="user_password_confirmation" placeholder="Confirm your password" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="user_email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone number</span>
            <input type="text" name="user_phone" placeholder="Enter your phone number" required>
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" name="user_address" placeholder="Enter your address" required>
          </div>
          <div class="input-box">
            <span class="details">City</span>
            <input type="text" name="user_city" placeholder="Enter your city" required>
          </div>
          <div class="input-box">
            <span class="details">Country</span>
            <input type="text" name="user_country" placeholder="Enter your country" required>
          </div>
          <div class="input-box">
            <span class="details">Region</span>
            <input type="text" name="user_region" placeholder="Enter your region" required>
          </div>
          <div class="input-box">
            <span class="details">Postal Code</span>
            <input type="text" name="user_zip" placeholder="Enter your postal code" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="action" value="Register">
        </div>
        <div class="cancel-reg">
         	<a href="/User/index">Cancel</a>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
