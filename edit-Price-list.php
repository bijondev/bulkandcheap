<div class="container theme-showcase" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">

      </div>

      <div class="row">
        <div class="col-md-5 col-md-offset-3">

<form role="form" action="<?php echo base_url?>php_action.php" method="post" >
    <?php
$id=  url_control(2);
$table="_tbl_price_list";
$field="_pl_id";
$result=$obj->getByIdAll($id,$table,$field);

//$result=$obj->showData("_tbl_price_list");
//print_r($result);
if (!empty($result)) {

foreach($result as $values_reels){
extract($values_reels);
?>
<input type="hidden" name="priceid" value="<?php echo $_pl_id; ?>" >
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $_title; ?>" name="title" placeholder="">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Price</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="price" value="<?php echo $_price; ?>"  placeholder="">
  </div>

 <?php } } ?>
  <button type="submit" name="submitt-edit-price" class="btn btn-default">Save</button>
</form>

        </div>
        
      </div>

    </div> <!-- /container -->