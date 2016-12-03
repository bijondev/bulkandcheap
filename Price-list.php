<div class="container theme-showcase" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <form class="form-horizontal" role="form" method="post" action="<?php echo base_url?>php_action.php" >
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" placeholder="" name="title">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Price</label>
    <div class="col-sm-1">
      <input type="text" class="form-control" placeholder="" name="price" >
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" name="submit-new-price" >add</button>
    </div>
  </div>
</form>
      </div>

      <div class="row">
        <div class="col-md-12">

<table class="table table-striped">
<tr>
  <th>Title</th>
  <th>price</th>
  <th></th>
</tr>
<?php

$result=$obj->showData("_tbl_price_list");
//print_r($result);
if (!empty($result)) {

foreach($result as $values_reels){
extract($values_reels);
?>
<tr>
  <td><?php echo $_title; ?></td>
  <td><?php echo $_price; ?></td>
  <td><a href="<?php echo base_url?>edit-Price-list/<?php echo $_pl_id; ?>" type="button" class="btn btn-primary btn-xs">Edit</a></td>
</tr>

<?php } } ?>
</table>
        </div>
        
      </div>

    </div> <!-- /container -->