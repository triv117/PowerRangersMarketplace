<?php
$this->view('shared/merchantHeader', 'Product index');
?>

<table>
        <tr><th>Product Name</th><th>Stock</th><th>Price</th><th>Action</th></tr>
    <?php

    foreach ($data as $item) {
        echo "<tr>
        <td type=name>$item->product_name</td>
        <td type=name>$item->product_units</td>
        <td type=name>$item->product_price</td>
        <td type=action>
        <a href='/Product/details/$item->product_id'>details</a> |
        </td>
        </tr>";
    }

?>
</table>
</p>

<a href='/User/index'>Back to the user account</a>

<?php
$this->view('shared/footer');
?>