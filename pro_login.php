<?php 
session_start();
include_once("koneksi.php");
$lgn_user=$_GET['lgn_user'];
$lgn_pass=$_GET['lgn_pass'];

$query=mysql_query("SELECT * FROM admin WHERE adm_nama='$lgn_user' AND adm_pass='$lgn_pass' ")or die(mysql_error());
$ketemu=mysql_num_rows($query);
if($ketemu>0){
	$array=mysql_fetch_array($query);
	extract($array);
	$_SESSION['adm_id']=$adm_id;
	$_SESSION['adm_nama']=$adm_nama;
	$_SESSION['sts_id']=$sts_id;
	echo "Success";
	// $sts=array('id'=>$_SESSION['sts_id']);
	// vecho json_encode($_SESSION['sts_id']);
}else{
	echo "Data Tidak Ditemukan!!";
}


 ?>