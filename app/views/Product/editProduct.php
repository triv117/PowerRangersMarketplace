<?php
$this->view('shared/merchantHeader', 'Edit product');
?>


<h1>Edit Product Information</h1>
<form action='' method='post' enctype="multipart/form-data">
	<label for="product_name">Product Name:</label><br>
    <input type="text" name="name" placeholder="Enter product name"/><hr>

    <label for="product_description">Product Description:</label><br>
    <textarea rows="10" cols="75" name="description" placeholder="Enter product description"></textarea><hr>

    <label for="product_units">Product Unit:</label><br>
    <input type="number" name="units" placeholder="Enter product unit"/><hr>

    <label for="product_price">Product Price:</label><br>
    <input type="number" name="price" placeholder="Enter product price"/><hr>

    <label for="product_manufacturer">Product Manufacturer:</label><br>
    <input type="text" name="manufacturer" placeholder="Enter product manufacturer"/><hr>

    <label for="product_category">Product Category:</label><br>
    <input type="text" name="category" placeholder="Enter product category"/><hr>

	<input type="submit" name="action" value="Modify product" />
</form>


<a href="/Product/index/<?= $data['user']->user_id ?>">Cancel</a>

</body>
</html>