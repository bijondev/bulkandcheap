<?php
session_start();
 include "mainclass.php";
define("base_url", "http://smm-mart.com/");
//define("base_url", "http://smm-mart.com/");

$paypal_url='https://www.paypal.com/cgi-bin/webscr'; // Test Paypal API URL
$paypal_id='khaled.london65@yahoo.com'; // Business email ID
$obj=new oopCrud;
$workstatus = array('pending','running','completed','rejected' );
function url_control($slug){
	if($_SERVER['REMOTE_ADDR'] == '127.0.0.1')
{
		$requestURI = explode('/', $_SERVER['REQUEST_URI']);
	//print_r($requestURI);
	return $requestURI[$slug+1];
	}
else
{
	$requestURI = explode('/', $_SERVER['REQUEST_URI']);
	//print_r($requestURI);
	return $requestURI[$slug];
}

}

?>