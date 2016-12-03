<div class="container theme-showcase" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">

      </div>

      <div class="row">
        <div class="col-md-5 col-md-offset-3">
<?php
$userid=$_SESSION['id'];
?>
<h3>Balance: <span class="label label-danger"><?php echo round($obj->balanceCheck($userid), 2, PHP_ROUND_HALF_DOWN); ?></span></h3>
<div class="row">
  <div class="col-md-9">
    paypal
    <div class="row">
      <div class="col-md-6">
        Amount:
      </div>
      <div class="col-md-6">
         <form action="<?php echo $paypal_url; ?>" method="post" name="frmPayPal1">
    <input type="hidden" name="business" value="<?php echo $paypal_id; ?>">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="item_name" value="smm-mart.com Payment">
    <input type="hidden" name="item_number" value="<?php echo time(); ?>">
    <!--<input type="hidden" name="credits" value="510">-->
    <input type="hidden" name="userid" value="<?php echo $_SESSION['id']; ?>">
    <!--<input type="hidden" name="amount" value="10">-->
    <input type="hidden" name="cpp_header_image" value="http://smm-mart.com/images/logo.png">
    <input type="hidden" name="no_shipping" value="1">
    <input type="hidden" name="currency_code" value="USD">
    <input type="hidden" name="handling" value="0">
    <input type="hidden" name="cancel_return" value="http://smm-mart.com/payment/paypal/cancel">
    <input type="hidden" name="return" value="http://smm-mart.com/payment/paypal/success">
    <!--<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
    <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">-->

       <input type="text" class="form-control" name="amount" >

       <button type="submit" class="btn btn-primary">Pay</button>

           </form>
      </div>
    </div>
  </div>
</div>

        </div>
        
      </div>

    </div> <!-- /container -->