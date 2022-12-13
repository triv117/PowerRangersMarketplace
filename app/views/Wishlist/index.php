<?php
$this->view('shared/userHeader', 'User Wishlist');
?>
<p><!--display the data as a table-->
    <table class="T">
        <tr><th>Product Name</th><th>Stock</th><th>Price</th><th>Action</th></tr>
    <?php

    foreach ($data['product'] as $product) {
        echo "<tr>
        <td type=name>$product->product_name</td>
        <td type=name>$product->product_units</td>
        <td type=name>$product->product_price</td>
        <td type=action>
        <a href='/Product/details/$product->product_id'>details</a> |
        <a href='/Wishlist/deleteFromWishlist/$product->product_id'>delete</a> |
        </td>
        </tr>";
    }

    ?>
    </table>
</p>
<?php
$this->view('shared/footer');
?>