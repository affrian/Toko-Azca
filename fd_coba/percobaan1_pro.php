<?php 
	// include_once("koneksi.php");
	// $conn=mysql_connect("localhost","root","")or die(mysql_error());
	// $db=mysql_select_db("tutorial")or die (mysql_error());
	// data yang di teriam
	$item_nama=$_POST['item_nama'];
	$item_code=$_POST['item_code'];
	$item_desc=$_POST['item_desc'];
	$item_price=$_POST['item_price'];

	$hitung=count($item_nama);

	echo "data ada=".$hitung;
		// for ($i=0;$i<$hitung;$i++) { 
		// 	$item_nama2=$_POST['item_nama'][$i];
		// 	$item_code2=$_POST['item_code'][$i];
		// 	$item_desc2=$_POST['item_desc'][$i];
		// 	$item_price2=$_POST['item_price'][$i];
		// 	$query=mysql_query("INSERT INTO item VALUES(NULL,'$item_nama2','$item_code2','$item_desc2','$item_price2')")or die(mysql_error());
		// }
	
	

 ?>