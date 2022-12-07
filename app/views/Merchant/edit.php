<?php
$this->view('shared/merchantHeader', 'Edit Merchant');
?>
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

<?php
$this->view('shared/footer');
?>