<?php 
	$pnj_brg_id=$_GET['pnj_brg_id'];
	if(count(array_unique($pnj_brg_id))<count($pnj_brg_id)){
		echo "Tidak Boleh Ada Nama Barang Yang Sama!!";
		// print_r($pnj_brg_id);
	}else{
		
	}


 ?>
