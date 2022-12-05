<html>
<head>
	<title>Register a new user</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>

<?php
	if(isset($_GET['error'])){ ?>
<div class="alert alert-danger" role="alert">
  <?= $_GET['error'] ?>
</div>
<?php	}
?>



<form action='' method='post'>
	<label>Username:</label><br>
	<input type="text" name="user_username"/><hr>

	<label>Password:</label><br>
	<input type="password" name="user_password"/><hr>

	<label>Password confirmation:</label><br>
	<input type="password" name="user_password_confirmation"/><hr>

	<label>First name:</label><br>
	<input type="text" name="user_fname"/><hr>

	<label>Last name:</label><br>
	<input type="text" name="user_lname"/><hr>

	<label>Email:</label><br>
	<input type="text" name="user_email"/><hr>

	<label>Phone number:</label><br>
	<input type="text" name="user_phone"/><hr>

	<label>Address:</label><br>
	<input type="text" name="user_address"/><hr>

	<label>City:</label><br>
	<input type="text" name="user_city"/><hr>

	<label>Country:</label><br>
	<input type="text" name="user_country"/><hr>

	<label>Region:</label><br>
	<input type="text" name="user_region"/><hr>

	<label>Zip:</label><br>
	<input type="text" name="user_zip"/><hr>

	<input type="submit" name="action" value="Register" />

</form>
<a href="User/account">Cancel</a>

</body>
</html>