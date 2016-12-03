<div class="container theme-showcase" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">

      </div>

      <div class="row">
        <div class="col-md-12">

<table class="table table-striped">
<tr>
  <th>Order Id</th>
  <th>Date</th>
  <th>Link</th>
  <th>Start Count</th>
  <th>Quantaty</th>
  <th>Service Type</th>
  <th>Status</th>
  <th>Remain</th>
  <th></th>
</tr>
<?php
$id=  "";
$table="_tbl_order";
$field="  _work_status";
$result=$obj->getByIdAll($id,$table,$field);
//print_r($result);
if (!empty($result)) {

foreach($result as $values_reels){
extract($values_reels);
date_default_timezone_set('Asia/Dhaka');
?>
<tr>
  <td><?php echo $_oid; ?></td>
  <td><?php echo date( 'F j Y H:i:s', $_date); ?></td>
  <td><?php echo $_link; ?></td>
  <td><?php echo $_start_count; ?></td>
  <td><?php echo $_qty; ?></td>
  <td><?php echo $_pl_title; ?></td>
  <td><?php echo "<span class=\"label label-danger\">Pending</span>"; ?></td>
  <td><?php echo $_remains; ?></td>
  <td><a href="<?php echo base_url?>edit-order/<?php echo $_oid; ?>" type="button" class="btn btn-primary btn-xs">Edit</a></td>
</tr>

<?php } } ?>
</table>
        </div>
        
      </div>

    </div> <!-- /container -->