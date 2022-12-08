<?php
$this->view('shared/merchantHeader', 'Product details');
?>

<h1>Product information</h1>
 
<dl>
	<dt>
		Product ID:
	</dt>
	<dd>
		<?= $data->product_id ?>
	</dd>
	<dt>
		Product Name:
	</dt>
	<dd>
		<?= $data->product_name ?>
	</dd>
	<dt>
		Product Description:
	</dt>
	<dd>
		<?= $data->product_description ?>
	</dd>
	<dt>
		Product Units:
	</dt>
	<dd>
		<?= $data->product_units ?>
	</dd>
	<dt>
		Product Price:
	</dt>
	<dd>
		<?= $data->product_price ?>
	</dd>
	<dt>
		Product Manufacturer:
	</dt>
	<dd>
		<?= $data->product_manufacturer ?>
	</dd>
	<dt>
		Product Rating:
	</dt>
	<dt>
		Product Category:
	</dt>
	<dd>
		<?= $data->product_category ?>
	</dd>
</dl>
<script>
<?
if ($_SESSION["merchant_id"] =="") {
	<button type= "submit" value="Submit" class="btn btn-primary"><a style="color:white" href="\Wishlist\addToWishlist">Add to Wishlist</a></button>

}
?>
</script>


<a href="/Product/index">Back to index</a>

<?php
$this->view('shared/footer');
?>