<div class="container theme-showcase" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">

      </div>

      <div class="row">
        <div class="col-md-5 col-md-offset-3">
<?php
if (isset($_POST['submitt-new-order'])) {
$url=isset($_POST["link"])?$_POST["link"]:NULL;
if(filter_var($url, FILTER_VALIDATE_URL) === FALSE){
echo "<div class=\"alert alert-danger\">Enter Valid Link.</div>";
die();
}

  extract($_POST);
$userid=$_SESSION['id'];
if (isset($_POST["quantaty"])?$_POST["quantaty"]:NULL<100) {

  $price_list=$obj->getById($playlist,"_tbl_price_list", "_pl_id");
  date_default_timezone_set('Asia/Dhaka');
  //echo date('Y-m-d H:i:s');
  echo $date2= strtotime(date('Y-m-d H:i:s'));
  echo date( 'F j Y H:i:s', $date2);
$oid=time();
  //print_r($price_list);
$totalprice=($price_list['_price']*(isset($_POST["quantaty"])?$_POST["quantaty"]:NULL))/1000;
      $contact_data = array(
      '_oid' =>time(), 
      '_pl_id' =>isset($_POST["playlist"])?$_POST["playlist"]:NULL,
      '_pl_title' =>$price_list['_title'],
      '_link'=>isset($_POST["link"])?$_POST["link"]:NULL,
      '_date'=>$date2,
      '_user_id' =>$_SESSION['id'],
      '_qty' =>isset($_POST["quantaty"])?$_POST["quantaty"]:NULL,
      '_unite_price' =>$price_list['_price'],
      '_total_price' =>$totalprice,
      '_status' =>"yes"
      );
 $balance=$obj->balanceCheck($userid);
if ($balance<$totalprice) {
  echo "<div class=\"alert alert-danger\">Insufficient fund!</div>";
  die();
}
      if ($obj->dbRowInsert("_tbl_order", $contact_data)) {
      ?>
<div class="alert alert-success">
  <h3>Your order received!</h3>
  Order NUmber: <?php echo $oid; ?> <br />
  Type: <?php echo $price_list['_title']; ?> <br />
  link https: <?php isset($_POST["link"])?$_POST["link"]:NULL; ?> <br />
  Quantity: <?php echo isset($_POST["quantaty"])?$_POST["quantaty"]:NULL; ?> <br />
  Charge: <?php echo $totalprice; ?> <br />
  Balance: <?php echo round($obj->balanceCheck($userid), 2, PHP_ROUND_HALF_DOWN); ?>
</div>
      <?php
      }
      else{
      echo "<div class=\"alert alert-danger\">Error to save data!</div>";
      }
}

else{
  echo "<div class=\"alert alert-danger\">Please Order Min. 100 Qty.</div>";
}
}
?>
<form role="form" method="post" >
  <div class="form-group">
    <label for="exampleInputEmail1">Type</label>
    <select class="form-control" name="playlist" >
     <option>--Select--</option>
    <?php
$result=$obj->showData("_tbl_price_list");
//print_r($result);
if (!empty($result)) {

foreach($result as $values_reels){
extract($values_reels);
?>
  <option value="<?php echo isset($_pl_id)?$_pl_id:NULL; ?>" ><?php echo isset($_title)?$_title:NULL; ?> - (<?php echo isset($_price)?$_price:NULL; ?>)</option>
  <?php } } ?>

</select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Link</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="link" placeholder="Enter link">
  </div>

    <div class="form-group">
    <label for="exampleInputPassword1">Quantity</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="quantaty" placeholder="Enter Quantaty">
  </div>

  <button type="submit" name="submitt-new-order" class="btn btn-default">Submit</button>
</form>

        </div>
        
      </div>

    </div> <!-- /container -->