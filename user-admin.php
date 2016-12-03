<div class="container theme-showcase" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">

      </div>

      <div class="row">
        <div class="col-md-12">

<table class="table table-striped">
<tr>
  <th>Full Name</th>
  <th>Email</th>
  <th>Others</th>

</tr>
<?php
$id="user";
$table="_tbl_user";
$field="_user_type";
$result=$obj->getByIdAll($id,$table,$field);
//print_r($result);
if (!empty($result)) {

foreach($result as $values_reels){
extract($values_reels);
?>
<tr>
  <td><?php echo $_full_name; ?></td>
  <td><?php echo $_email; ?></td>
  <td><a href="<?php echo base_url?>admin-payment/<?php echo $_id; ?>" type="button" class="btn btn-success btn-xs">Payment</a>
  <a href="<?php echo base_url?>admin-payment-history/<?php echo $_id; ?>" type="button" class="btn btn-info btn-xs">Order History</a>
  </td>
</tr>

<?php } } ?>
</table>
        </div>
        
      </div>

    </div> <!-- /container -->