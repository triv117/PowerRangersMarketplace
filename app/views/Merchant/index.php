<html>
<head>
	<title>Main</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>
<p>Welcome to PowerRangers marketplace(Better than pamazon)merchant<p>
<div class="col-md-11 mx-auto">
  <div class="row">
  </div>
    <div class="row">
        <table class="table table-bordered table-hovered mt-4 mx-3">
            <a href='/Product/addProduct/$product->merchant_id'>add</a> 
            <tr><th>Id</th><th>Name</th><th>Category</th><th>Price</th><th>Action</th></tr>
            <tbody>
                <?php
                foreach ($data as $product) {
                echo "<tr>
                <td type=t>$product->product_id</td>
                <td type=name>$product->product_name</td>
                <td type=name>$product->product_category</td>
                <td type=name>$product->product_price</td>
                <td type=action>
                    |
                    <a href='/Product/editProduct/$product->merchant_id'>edit</a> | 
                    <a href='/Product/viewProduct/$product->merchant_id'>details</a> |
                    <a href='/Product/removeProduct/$product->merchant_id'>delete</a> |
                </td>
                </tr>";
                }
            
            ?>
            </tbody>
        </table>
    </div>
  </div>

</body>
</html>