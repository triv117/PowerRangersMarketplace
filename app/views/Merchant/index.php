<?php
$this->view('shared/merchantHeader', 'Merchant Index');
?>
<h1>Welcome</h1><br>

    <button type= "submit" value="Submit" class="btn btn-primary"><a style="color:white" href='/Product/addProduct/$product->merchant_id'>Add new product</a></button>
    <button type= "submit" value="Submit" class="btn btn-primary"><a style="color:white" href="\Merchant\edit">Edit Account</a></button>
    <button type= "submit" value="Submit" class="btn btn-primary"><a style="color:white" href="\Merchant\changeAdmin">Change Admin</a></button>
    <hr>
    <h3>List of products</h3><br>
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
                            |<a href='/Product/editProduct/$product->product_id'>edit</a> | 
                            <a href='/Product/details/$product->product_id'>details</a> |
                            <a href='/Product/removeProduct/$product->product_id'>delete</a> |
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
<?php
$this->view('shared/footer');
?>