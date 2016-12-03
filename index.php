<?php
include "config.php";
$page=url_control(1);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../assets/ico/favicon.ico">

    <title>smm-mart.com :: Welcome</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url?>css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="<?=base_url?>css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?=base_url?>js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?=base_url?>js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.1/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body role="document">

    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
      
        <div class="navbar-header">

          <a class="navbar-brand" href="<?=base_url?>">smm-mart.com</a>
        </div>
        
        <div class="navbar-collapse collapse">
                  <?php if (!empty($_SESSION)) { ?>
          <ul class="nav navbar-nav">

          <?php if(!empty($_SESSION['usertype']) && $_SESSION['usertype']=="user") { ?>
            <li <?php if ($page=="new-order") { echo "class=\"active\""; } ?> ><a href="<?php echo base_url?>new-order">New order</a></li>
            <li <?php if ($page=="order-history") { echo "class=\"active\""; } ?> ><a href="<?php echo base_url?>order-history">Order History</a></li>
            <li <?php if ($page=="balance") { echo "class=\"active\""; } ?> ><a href="<?php echo base_url?>balance">Balance</a></li>
            <li <?php if ($page=="faq") { echo "class=\"active\""; } ?> ><a href="<?php echo base_url?>faq">F.A.Q</a></li>
                      <?php } ?>
<?php if(!empty($_SESSION['usertype']) && $_SESSION['usertype']=="admin") { ?>
            <li <?php if ($page=="user") { echo "class=\"active\""; } ?> ><a href="<?php echo base_url?>user">User</a></li>
            <li <?php if ($page=="order-pending") { echo "class=\"active\""; } ?> ><a href="<?php echo base_url?>order-pending">Order Pending</a></li>
            <li <?php if ($page=="all-order") { echo "class=\"active\""; } ?> ><a href="<?php echo base_url?>all-order">All Order</a></li>
            <li <?php if ($page=="Price-list") { echo "class=\"active\""; } ?> ><a href="<?php echo base_url?>Price-list">Price List</a></li>
<?php } ?>

          </ul>
<?php } ?>
<?php if(!empty($_SESSION['fullname'])) { ?>
          <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['fullname']; ?></a></li>



        <li class="dropdown">
          <a href="logout.php" class="dropdown-toggle" data-toggle="dropdown">Logout </a>
        </li>
      </ul>
      <?php } ?>
        </div><!--/.nav-collapse -->


      </div>
    </div>

  <?php


switch ($page) {
  case "register":
    include "register.php";
    break;

  case "new-order":
    include "new-order.php";
    break;
      case "balance":
    include "balance.php";
    break;
      case "order-history":
    include "order-history.php";
    break;

    case "payment":
    include "payment.php";
    break;
    case "user":
    include "user-admin.php";
    break;
    case "admin-payment":
    include "admin-payment.php";
    break;

    case "admin-payment-history":
    include "admin-payment-history.php";
    break;

      case "Price-list":
      include "Price-list.php";
      break;

      case "order-pending":
      include "order-pending.php";
      break;

      case "edit-Price-list":
      include "edit-Price-list.php";
      break;

      case "edit-order":
      include "edit-order.php";
      break;
      case "all-order":
      include "all-order.php";
      break;
      case "faq":
      include "faq.php";
      break;
  default:
  if (empty($_SESSION['usertype'])) {
  	include "login.php";
  }else{
    if($_SESSION['usertype']=="user") { 
  	include "new-order.php";
  }
  else{
    include "user-admin.php";
  }
  }
    
}
  ?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?=base_url?>dist/js/bootstrap.min.js"></script>
    <script src="<?=base_url?>js/docs.min.js"></script>
  </body>
</html>
