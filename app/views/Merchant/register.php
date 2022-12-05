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
<?php   }
?>

<h1>New Merchant Information</h1>
<form action='' method='post' enctype='multipart/form-data'>

    <label>Merchant Name:</label><br>
    <input type="text" name="merchant_name" placeholder="Enter merchant name"/><hr>

    <label>Merchant Email:</label><br>
    <input type="text" name="merchant_email" placeholder="Enter merchant emal"/><hr>

    <label>Merchant Phone:</label><br>
    <input type="text" name="merchant_phone" placeholder="Enter merchant phone number"/><hr>

    <label>Merchant Address:</label><br>
    <input type="text" name="merchant_address" placeholder="Enter merchant address"/><hr>

    <label>Merchant City:</label><br>
    <input type="text" name="merchant_city" placeholder="Enter merchant city"/><hr>

    <label>Merchant Country:</label><br>
    <input type="text" name="merchant_country" placeholder="Enter merchant country"/><hr>

    <label>Merchant Region:</label><br>
    <input type="text" name="merchant_region" placeholder="Enter merchant region"/><hr>

    <label>Merchant Postal Code:</label><br>
    <input type="text" name="merchant_zip" placeholder="Enter merchant postal code"/><hr>

	<input type="submit" name="action" value="Register" />
</form>

<a href="Merchant/index">Cancel</a>
</body>
</html>