<html>
<head>
	<title>Add a product</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>


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

	<label>Product picture:</label><br>
    <input type="file" name="product_pic" id="product_pic"/>
    <img id='product_pic_preview' src='/images/blank.jpg' style="max-width:200px;max-height:200px" /><hr>

	<input type="submit" name="action" value="Add new product" />
</form>

<script>
	product_pic.onchange = evt => {
    const [file] = product_pic.files
    if (file) {
        product_pic_preview.src = URL.createObjectURL(file)
    }
}
</script>

<a href="/Product/index">Back to index</a>

</body>
</html>