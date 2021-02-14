<?php 
	$product_id=$_GET['pid'];
	$PatientID=$_SESSION['PatientID'];
	
	//insert query

	$sql=insert into add_To_cart(CartID,PatientID,ProductID,Quantity) values (select ) 
 ?>