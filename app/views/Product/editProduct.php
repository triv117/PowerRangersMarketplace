<?php
$this->view('shared/merchantHeader', 'Edit product');
?>


<h1>Edit Product Information</h1>
<form action='' method='post' enctype="multipart/form-data">
	<label for="product_name">Product Name:</label><br>
    <input type="text" name="product_name" placeholder="Enter product name" value="<?=$data->product_name ?>" /><hr>

    <label for="product_description">Product Description:</label><br>
    <textarea rows="10" cols="75" name="product_description" placeholder="Enter product description"><?=$data->product_description ?></textarea><hr>

    <label for="product_units">Product Unit:</label><br>
    <input type="number" name="product_units" placeholder="Enter product unit" value="<?=$data->product_units ?>"/><hr>

    <label for="product_price">Product Price:</label><br>
    <input type="text" name="product_price" placeholder="Enter product price" value="<?=$data->product_price ?>"/><hr>

    <label for="product_manufacturer">Product Manufacturer:</label><br>
    <input type="text" name="product_manufacturer" placeholder="Enter product manufacturer" value="<?=$data->product_manufacturer ?>"/><hr>

    <label for="product_category">Product Category:</label><br>
    <input type="text" name="product_category" placeholder="Enter product category" value="<?=$data->product_category ?>"/><hr>

	<input type="submit" name="action" value="Modify product" />
</form>



<?php
$this->view('shared/footer');
?>