<div class="container theme-showcase" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">

      </div>

      <div class="row">
        <div class="col-md-5 col-md-offset-3">

<form role="form" action="<?php echo base_url?>php_action.php" method="post" >
    <?php
$id=  url_control(2);
$table="_tbl_order";
$field="_oid";
$result=$obj->getByIdAll($id,$table,$field);

//$result=$obj->showData("_tbl_price_list");
//print_r($result);
if (!empty($result)) {

foreach($result as $values_reels){
extract($values_reels);
?>
<input type="hidden" name="orderid" value="<?php echo $_oid; ?>" >
  <div class="form-group">
    <label for="exampleInputEmail1">Link</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $_link; ?>" name="link" placeholder="">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Start Count</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="startcount" value="<?php echo $_start_count; ?>"  placeholder="">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Status</label>
    <select class="form-control" name="workstatus" >
  <option value="">--select--</option>
<?php
foreach ($workstatus as $key) { ?>
  <option <?php if($key==$_work_status){echo "selected";} ?> value="<?php echo $key; ?>" ><?php echo $key; ?></option>";
  <?php
}
?>
</select>

  </div>

    <div class="form-group">
    <label for="exampleInputPassword1">Remain</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="remains" value="<?php echo $_remains; ?>"  placeholder="">
  </div>
 <?php } } ?>
  <button type="submit" name="submitt-edit-order" class="btn btn-default">Save</button>
</form>

        </div>
        
      </div>

    </div> <!-- /container -->