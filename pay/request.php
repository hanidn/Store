<?php
/*
 * ZarinPal Advanced Class
 *
 * version 	: 1.0
 * link 	: https://vrl.ir/zpc
 *
 * author 	: milad maldar
 * e-mail 	: miladworkshop@gmail.com
 * website 	: https://miladworkshop.ir
*/
include("oop.php");
$oop=new store;
$payid=time().rand();
$timepay=time();
require_once("zarinpal_function.php");

$MerchantID 	= "test";
$Amount 		= 100;
$Description 	= "طراحی سایت";
$Email 			= "";
$Mobile 		= "";
$CallbackURL 	= "http://example.com/verify";
$ZarinGate 		= false;
$SandBox 		= false;

$zp 	= new zarinpal();
$result = $zp->request($MerchantID, $Amount, $Description, $Email, $Mobile, $CallbackURL, $SandBox, $ZarinGate);

if (isset($result["Status"]) && $result["Status"] == 100)
{
    $sql="INSERT INTO `sefaresh_tbl`(  `payid`, `timepay`) VALUES (?,?)";
    $data=array($payid,$timepay);
    $oop->Idu($sql,$data);
	// Success and redirect to pay
	$zp->redirect($result["StartPay"]);
} else {
	// error
	echo "خطا در ایجاد تراکنش";
	echo "<br />کد خطا : ". $result["Status"];
	echo "<br />تفسیر و علت خطا : ". $result["Message"];
}