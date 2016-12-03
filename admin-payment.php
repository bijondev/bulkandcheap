<div class="container theme-showcase" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">

      </div>

      <div class="row">
        <div class="col-md-10">

<div class="row">
  <div class="col-md-9">
    <div class="row">

      <div class="col-md-6">
         <form action="<?php echo base_url?>php_action.php" method="post" name="frmPayPal1">
    <input type="hidden" name="userid" value="<?php echo $page=url_control(2); ?>">

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">Amount</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="amount" id="inputEmail3" placeholder="Enter payment amount">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-4 control-label">Payment Type</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="payment_type" id="inputPassword3" placeholder="enter payment type(paypal, credit card...)">
    </div>
  </div>

    <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submitt-admin-payment" class="btn btn-primary">Pay</button>
    </div>
  </div>

           </form>
      </div>
    </div>
  </div>
</div>

        </div>
        
      </div>

    </div> <!-- /container -->