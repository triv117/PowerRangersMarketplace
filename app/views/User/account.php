<?php
$this->view('shared/userHeader', 'User Index');
?>

<p>Welcome!</p>
<p><!--display the data as a table-->
    <table>
        <tr><th>Product Name</th></tr>
    <?php

    foreach ($data as $item) {
        echo "<tr>
        <td type=name>$item->product_name</td>
        </tr>";
    }

?>
</table>
</p>
<button type= "submit" value="Submit" class="btn btn-primary"><a style="color:white" href="\User\edit">Edit Account</a></button>
<button type= "submit" value="Submit" class="btn btn-primary"><a style="color:white" href="\Merchant\register">Register Merchant</a></button>
<button type= "submit" value="Submit" class="btn btn-primary"><a style="color:white" href="\Merchant\register">Login as a Merchant</a></button>
<button class="btn btn-primary"><a style="color:white" href="\User\logout">Log Out</a></button>

<?php
$this->view('shared/footer');
?>