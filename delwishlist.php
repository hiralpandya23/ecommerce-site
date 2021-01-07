<?php
ob_start();
session_start();
include("model/database.php");
$uid = $_SESSION['id'];
if(!isset($_SESSION['id']) & empty($_SESSION['id'])){
		header('location: login.php');
	}
if(isset($_GET['id']) & !empty($_GET['id'])){
	$pid = $_GET['id'];
	$a = new DB();
	$result1 = $a->wishlistdel($pid);
	if($result1){
		header('location: wishlist.php');
		//echo "redirect to wish list page";
	}
}else{
	header('location: wishlist.php');
}

?>
