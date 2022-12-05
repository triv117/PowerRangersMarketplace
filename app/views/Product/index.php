<html>
<head>
	<title>Products</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>
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



</body>
</html>