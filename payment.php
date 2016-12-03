<?php
include "config.php";
//http://smm-mart.com/payment/paypal/cancel
$payment_type=url_control(3)
$item_no            = $_REQUEST['item_number'];
$item_transaction   = $_REQUEST['tx']; // Paypal transaction ID
$item_price         = $_REQUEST['amt']; // Paypal received amount
$item_currency      = $_REQUEST['cc']; // Paypal received currency type



//Rechecking the product price and currency details
if($payment_type="success")
{


				$contact_data = array(
			'_pid' =>$item_transaction, 
			'_user_id' =>$_SESSION['id'],
			'_payment_type' =>"paypal",
			'_amount' =>$item_price,
			'_status' =>"yes"
			);
			//echo $i;

			if ($obj->dbRowInsert("_tbl_payment", $contact_data)) {
			    echo "<h1>Welcome, Guest</h1>";
    echo "<h1>Payment Successful</h1>";
			}
			else{
			echo "error";
			}

    echo "<h1>Welcome, Guest</h1>";
    echo "<h1>Payment Successful</h1>";
}
else
{
    echo "<h1>Payment Failed</h1>";
}
?>