<?php
$this->view('shared/merchantHeader', 'Change Admin');
?>
<form action='' method='post'>
	<label>Transfer to (username):<input type="text" name="user_username" /></label><br>
	<label>Password:<input type="password" name="user_password" /></label><br>
	<!-- <input type="submit" name="action" value="Log in" /> -->
	<button type= "submit" name="action" value="changeAdmin">Confirm</a></button>

	<a href="Merchant/index">Cancel</a>


</form>
<?php
$this->view('shared/footer');
?>