<?php
$this->view('shared/userHeader', 'Edit User');
?>
<h1>Edit user Information</h1>
<form action='' method='post' enctype='multipart/form-data'>

    <label>User First Name:</label><br>
    <input type="text" name="user_fname" placeholder="Enter user name"/><hr>

    <label>User Last Name:</label><br>
    <input type="text" name="user_lname" placeholder="Enter user name"/><hr>

    <label>User Email:</label><br>
    <input type="text" name="user_email" placeholder="Enter user email"/><hr>

    <label>User Phone:</label><br>
    <input type="number" name="user_phone" placeholder="Enter user phone number"/><hr>

    <label>User Address:</label><br>
    <input type="text" name="user_address" placeholder="Enter user address"/><hr>

    <label>User City:</label><br>
    <input type="text" name="user_city" placeholder="Enter user city"/><hr>

    <label>User Country:</label><br>
    <input type="text" name="user_country" placeholder="Enter user country"/><hr>

    <label>User Region:</label><br>
    <input type="text" name="user_region" placeholder="Enter user region"/><hr>

    <label>User Postal Code:</label><br>
    <input type="text" name="user_zip" placeholder="Enter user postal code"/><hr>

  <input type="submit" name="action" value="Update" />

  <a href="User/account">Cancel</a>
</form>


<?php
$this->view('shared/footer');
?>