<?php
$this->view('shared/merchantHeader', 'Add product');
?>


<h1>New Product Information</h1>
<form action='' method='post' enctype='multipart/form-data'>
	<label for="product_name">Product Name:</label><br>
    <input type="text" name="product_name" placeholder="Enter product name"/><hr>

    <label>Product Description:</label><br>
    <textarea rows="10" cols="75" name="product_description" placeholder="Enter product description"></textarea><hr>

    <label>Product Unit:</label><br>
    <input type="number" name="product_units" placeholder="Enter product unit"/><hr>

    <label>Product Price:</label><br>
    <input type="text" name="product_price" placeholder="Enter product price"/><hr>

    <label>Product Manufacturer:</label><br>
    <input type="text" name="product_manufacturer" placeholder="Enter product manufacturer"/><hr>

    <label>Product Category:</label><br>
    <input type="text" name="product_category" placeholder="Enter product category"/><hr>

	<input type="submit" name="action" value="Add new product" />
</form>


<a href="/Product/index">Back to index</a>
<?php
$this->view('shared/footer');
?>