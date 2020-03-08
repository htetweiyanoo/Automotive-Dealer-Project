<?php 

	session_start();
	$id=$_GET['id'];
	echo $id;
	$_SESSION['cart'][$id]++;

	header("location:list.php");

 ?>