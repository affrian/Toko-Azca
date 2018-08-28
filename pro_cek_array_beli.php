<?php 
	$brg_beli_id=$_GET['brg_beli_id'];
	if(count(array_unique($brg_beli_id))<count($brg_beli_id)){
		echo "Tidak Boleh Ada Nama Barang Yang Sama!!";
		// print_r($pnj_brg_id);
	}else{
		
	}


 ?>
