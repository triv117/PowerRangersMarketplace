<?php
$this->view('shared/userHeader', 'Product index');
?>
<h1>List of products</h1>
<div class="col-md-11 mx-auto">
  <div class="row">
        </div>
            <div class="row">
                <table class="T">
                    
                    <tr><th>Id</th><th>Name</th><th>Category</th><th>Price</th><th>Action</th></tr>
                    <tbody>
                        <?php
                        foreach ($data['product'] as $product) {
                        echo "<tr>
                        <td type=name>$product->product_id</td>
                        <td type=name>$product->product_name</td>
                        <td type=name>$product->product_category</td>
                        <td type=name>$product->product_price</td>
                        <td type=action>
                            |<a href='/Product/details/$product->product_id'>details</a> |
                            <a href='/Cart/addToCart/$product->product_id'>add to cart</a> | 
                            <a href='/Wishlist/addToWishlist/$product->product_id'>add to wishlist</a> |
                        </td>
                        </tr>";
                        }
                    
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<a href='/User/account'>Back to user account</a>

<?php
$this->view('shared/footer');
?>