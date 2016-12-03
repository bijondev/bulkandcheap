<?php
include "config.php";
date_default_timezone_set("Asia/Dhaka");
/******************************************Login Check**************************************************/
if (isset($_POST['submit_login'])) {
	extract($_POST);
	$result=$obj->dbloginCheck($username, $password);
	//print_r($result);
	if ($result!=0) {
			extract($result);
	$_SESSION['fullname']=$_full_name;
	$_SESSION['email']=$_email;
	$_SESSION['usertype']=$_user_type;
	$_SESSION['password']=$_paw;
	$_SESSION['id']=$_id;
header("Location: ".base_url);
 } 
 else{
 	header("Location: ".base_url."error");
}
}

/***************************************Register*********************************************/
if (isset($_POST['submit_register'])) {
	extract($_POST);
			$contact_data = array(
			'_id' =>0, 
			'_email' =>isset($_POST["username"])?$_POST["username"]:NULL,
			'_full_name' =>isset($_POST["fullname"])?$_POST["fullname"]:NULL,
			'_paw' =>md5(isset($_POST["password"])?$_POST["password"]:NULL),
			'_user_type' =>"user",
			'_status' =>"yes"
			);
			//echo $i;

			if ($obj->dbRowInsert("_tbl_user", $contact_data)) {
			header("Location: ".base_url);
			}
			else{
			header("Location: ".base_url."register/?msg=error");
			}
}

/******************************************Edit Price List**************************************************/
if(isset($_POST['submitt-edit-price'])){
extract($_POST);

$form_data = array(
'_title' => $title,
'_price' => $price
);
//echo $priceid;
$actorid=$obj->dbRowUpdate("_tbl_price_list", $form_data, "WHERE _pl_id = '$priceid'");
if ($actorid) {
header("Location: ".base_url."edit-Price-list/".$priceid);
}
else{
	//echo "error...........";
header("Location: ".base_url."edit-Price-list/".$priceid);
}
}

/******************************************Edit Order**************************************************/
if(isset($_POST['submitt-edit-order'])){
extract($_POST);

$form_data = array(
'_link' => $link,
'_start_count' => $startcount,
'_work_status' => $workstatus,
'_remains' => $remains
);
echo $priceid;
$actorid=$obj->dbRowUpdate("_tbl_order", $form_data, "WHERE _oid = '$orderid'");
if ($actorid) {
header("Location: ".base_url."edit-order/".$orderid);
}
else{
	//echo "error...........";
header("Location: ".base_url."edit-order/".$orderid);
}
}
/***************************************Admin Payment*********************************************/
if (isset($_POST['submitt-admin-payment'])) {

	$paymentid=time();
	extract($_POST);
					$contact_data = array(
			'_pid' =>$paymentid, 
			'_user_id' =>$userid,
			'_payment_type' =>$payment_type,
			'_amount' =>$amount,
			'_status' =>"yes"
			);
			//echo $i;

			if ($obj->dbRowInsert("_tbl_payment", $contact_data)) {
			    header("Location: ".base_url."/user");
			}
			else{
			//echo "error";
				header("Location: ".base_url."/user/error");
			}

}

/***************************************Add price list*********************************************/
if (isset($_POST['submit-new-price'])) {
	extract($_POST);
			$contact_data = array(
			'_pl_id' =>0, 
			'_title' =>isset($_POST["title"])?$_POST["title"]:NULL,
			'_price' =>isset($_POST["price"])?$_POST["price"]:NULL
			);
			//echo $i;

			if ($obj->dbRowInsert("_tbl_price_list", $contact_data)) {
			header("Location: ".base_url."Price-list");
				//echo "--Oky--";
			}
			else{
			header("Location: ".base_url."Price-list/error");
			}
}
?>