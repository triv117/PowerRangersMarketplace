<?php
$this->view('shared/userHeader', 'User Index');
?>

<h1>Welcome</h1><hr>
<button type= "submit" value="Submit" class="btn btn-primary"><a style="color:white" href="\User\edit">Edit Account</a></button>
<button type= "submit" value="Submit" class="btn btn-primary"><a style="color:white" href="\Product\index">View Products</a></button>
<button type= "submit" value="Submit" class="btn btn-primary"><a style="color:white" href="\Merchant\register">Register Merchant</a></button>
<button class="btn btn-primary"><a style="color:white" href="\User\logout">Log Out</a></button>

<?php
$this->view('shared/footer');
?>