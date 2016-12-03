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
$field="_work_status";
$result=$obj->showData("_tbl_order");
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
  <td>
  <?php 
if ($_work_status=="pending") {
echo "<span class=\"label label-danger\">".$_work_status."</span>";
}
elseif ($_work_status=="running") {
  echo "<span class=\"label label-warning\">".$_work_status."</span>";
}
elseif ($_work_status=="completed") {
  echo "<span class=\"label label-info\">".$_work_status."</span>";
}
elseif ($_work_status=="rejected") {
  echo "<span class=\"label label-default\">".$_work_status."</span>";
}
else
{
  echo "<span class=\"label label-success\">New</span>";
}
  ?>

  </td>
  <td><?php echo $_remains; ?></td>
  <td><a href="<?php echo base_url?>edit-order/<?php echo $_oid; ?>" type="button" class="btn btn-primary btn-xs">Edit</a></td>
</tr>

<?php } } ?>
</table>
        </div>
        
      </div>

    </div> <!-- /container -->