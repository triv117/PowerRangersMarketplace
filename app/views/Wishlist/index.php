<p><!--display the data as a table-->
    <a href="/Merchant/register">Add a new merchant</a>
    <table>
        <tr><th>Product Name</th><th>Stock</th><th>Price</th><th>Action</th></tr>
    <?php

    foreach ($data as $item) {
        echo "<tr>
        <td type=name>$item->product_name</td>
        <td type=name>$item->product_units</td>
        <td type=name>$item->product_price</td>
        <td type=action>
        <a href='/Wishlist/details/$item->product_id'>details</a> |
        <a href='/Wishlist/delete/$item->product_id'>delete</a> |s
        </td>
        </tr>";
    }

?>
</table>
</p>