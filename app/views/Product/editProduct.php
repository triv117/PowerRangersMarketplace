<html>
<head>
	<title>Edit a product</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>

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

<script>
profile_pic.onchange = evt => {
  const [file] = profile_pic.files
  if (file) {
    profile_pic_preview.src = URL.createObjectURL(file)
  }
}

file = "<?= \app\core\Model::$input->profile_pic ?>";
if (file != "") {
	document.getElementById("profile_pic_preview").src = "/images/" + file;
}
</script>
<?php $this->doFeedback('#form'); ?>

<a href="/Product/index/<?= $data['user']->user_id ?>">Cancel</a>

</body>
</html>