<?php
$this->view('shared/userHeader', 'User Cart');
?>

<p><!--display the data as a table-->

    <table>
        <tr><th>Product Name</th><th>Stock</th><th>Price</th><th>Action</th></tr>
    <?php

    foreach ($data['product'] as $item) {
        echo "<tr>
        <td type=name>$item->product_name</td>
        <td type=name>$item->product_units</td>
        <td type=name>$item->product_price</td>
        <td type=action>
        <a href='/Product/details/$item->product_id'>details</a> |
        <a href='/Cart/deleteFromCart/$item->product_id'>delete</a> |
        </td>
        </tr>";
    }

?>
</table>
</p>

<?php
$this->view('shared/footer');
?>