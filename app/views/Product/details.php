<?php
$this->view('shared/merchantHeader', 'Product details');
?>

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

<button type= "submit" value="Submit" class="btn btn-primary"><a style="color:white" href="\Wishlist\addToWishlist">Add to Wishlist</a></button>

<!-- <script>
file = "" + "<?= $data['animal']->profile_pic ?>"
if (file != "") {
	document.getElementById("profile_pic_preview").src = "/images/" + file;
}
</script> -->

<a href="/Product/index">Back to index</a>

<?php
$this->view('shared/footer');
?>