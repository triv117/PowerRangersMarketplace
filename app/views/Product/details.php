<html>
<head>
	<title>Product Detail</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>
<h1>Product information</h1>
 
<dl>
	<dt>
		Product Name:
	</dt>
	<dd>
		<?= $data['product_name']->product_name ?>
	</dd>
	<dt>
		Product Description:
	</dt>
	<dd>
		<?= $data['product_description']->product_description ?>
	</dd>
	<dt>
		Product Units:
	</dt>
	<dd>
		<?= $data['product_units']->product_units ?>
	</dd>
	<dt>
		Product Price:
	</dt>
	<dd>
		<?= $data['product_price']->product_price ?>
	</dd>
	<dt>
		Product Manufacturer:
	</dt>
	<dd>
		<?= $data['product_manufacturer']->product_manufacturer ?>
	</dd>
	<dt>
		Product Rating:
	</dt>
	<dd>
		<?= $data['product_rating']->product_rating ?>
	</dd>
	<dt>
		Product Category:
	</dt>
	<dd>
		<?= $data['product_category']->product_category ?>
	</dd>
</dl>



<!-- <script>
file = "" + "<?= $data['animal']->profile_pic ?>"
if (file != "") {
	document.getElementById("profile_pic_preview").src = "/images/" + file;
}
</script> -->

<a href="/Product/index/<?= $data['user']->user_id ?>">Back to index</a>

</body>
</html>