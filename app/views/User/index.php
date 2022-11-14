<html>
<head>
	<title>Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>
<p>This is the index of the store.</p>
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

<form action='' method='post'>
	<label>Username:<input type="text" name="user_username" /></label><br>
	<label>Password:<input type="password" name="user_password" /></label><br>
	<!-- <input type="submit" name="action" value="Log in" /> -->
	<button type= "submit" name="action" value="Log in">Login</a></button>

</form>
<button type= "submit" value="Submit" class="btn btn-primary"><a style="color:white" href="\User\register">Register</a></button>

</body>
</html>