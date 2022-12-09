<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Merchant Registration</title>
    <link rel="stylesheet" href="/resources/styles/userregistrationstyle.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
    <?php
        if(isset($_GET['error'])){ ?>
            <div class="alert alert-danger" role="alert">
              <?= $_GET['error'] ?>
            </div>
        <?php   }
    ?>

  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action='' method='post'>
        <div class="user-details">
          <div class="input-box">
            <span class="details">Merchant name</span>
            <input type="text" name="merchant_name" placeholder="Enter merchant name" required>
          </div>      
          <div class="input-box">
            <span class="details">Merchant email</span>
            <input type="text" name="merchant_email" placeholder="Enter merchant email" required>
          </div>
          <div class="input-box">
            <span class="details">Merchant phone</span>
            <input type="text" name="merchant_phone" placeholder="Enter merchant phone" required>
          </div>        
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" name="merchant_address" placeholder="Enter merchant address" required>
          </div>
          <div class="input-box">
            <span class="details">City</span>
            <input type="text" name="user_city" placeholder="Enter merchant city" required>
          </div>
          <div class="input-box">
            <span class="details">Country</span>
            <input type="text" name="merchant_country" placeholder="Enter merchant country" required>
          </div>
          <div class="input-box">
            <span class="details">Region</span>
            <input type="text" name="merchant_region" placeholder="Enter merchant region" required>
          </div>
          <div class="input-box">
            <span class="details">Postal Code</span>
            <input type="text" name="merchant_zip" placeholder="Enter merchant postal code" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="action" value="Register">
        </div>
        <div class="cancel-reg">
            <a href="/User/account">Cancel</a>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
