<?php 
	$array=array('a','b','c','d','e');
	// $cetak=array_count_values($array);
	$cetak2=array_unique($array);
	// print_r($cetak);
	print_r($cetak2);
	if(count(array_unique($array))<count($array)){
		echo "data ada yang sama";
	}else{
		echo 'data tidak sama!!';
	}

 ?>