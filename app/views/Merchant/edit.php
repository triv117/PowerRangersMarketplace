<html>
<head>
    <title>Add a merchant</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>
<h1>Edit Merchant Information</h1>
<form action='' method='post' enctype='multipart/form-data'>
    <label>Username:</label><br>
    <input type="text" name="merchant_username"/><hr>

    <label>Password:</label><br>
    <input type="password" name="merchant_password"/><hr>

    <label>Password confirmation:</label><br>
    <input type="password" name="merchant_password_confirmation"/><hr>

    <label>Merchant Name:</label><br>
    <input type="text" name="merchant_name" placeholder="Enter merchant name"/><hr>

    <label>Merchant Email:</label><br>
    <input type="text" name="merchant_email" placeholder="Enter merchant emal"/><hr>

    <label>Merchant Phone:</label><br>
    <input type="number" name="merchant_phone" placeholder="Enter merchant phone number"/><hr>

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

  <input type="submit" name="action" value="Update" />
</form>

<script>
profile_pic.onchange = evt => {
  const [file] = profile_pic.files
  if (file) {
    profile_pic_preview.src = URL.createObjectURL(file)
  }
}

file = "<?= \app\core\Model::$input->profile_pic ?>";
if (file != "") {
    document.getElementById("profile_pic_preview").src = "/images/" + file;
}
</script>
<?php $this->doFeedback('#form'); ?>

<a href="Merchant/index">Cancel</a>

</body>
</html>