<?php
include_once("koneksi.php");
$cs=$_GET['cs'];
switch ($cs){
 	case 'select':
 		echo"
				<h1><b><p class='text-center' >DATA CUSTOMER</p></b></h1><br/>
 			<table id='tablestn' class='display' width='100%'> 
 				<thead>
 					<tr>
 						<th><b>No.</b></th>
 						<th><b>Nama Customer</b></th>
 						<th>Keterangan</b></th>
 						<th><b>Aksi</b></th>
 					</tr>
 				</thead>";
 			echo"<tbody>";
 			$no=1;
 			$query=mysql_query("SELECT * FROM costumer ORDER BY cst_id ASC")or die(mysql_error());
 				while($array=mysql_fetch_array($query)){
 					extract($array);
 					echo"<tr align='left'><td>".$no."</td><td>".$cst_nama."</td><td>".$cst_ket."</td><td><button class='btn btn-danger' onclick='hapuscus(".$cst_id.")'><span class='fa fa-close fa-lg'> </span> DELETE</button><button class='btn btn-primary' onclick='editcus(".$cst_id.")'><span class='fa fa-edit fa-lg'> </span> UPDATE</button></td></tr>";

 					$no++;
 				}
 					
 			echo"</tbody>";
 			echo"</table>";

 		break;

 	case'insert':
 		$cus_id=$_GET['cus_id'];
 		$nm_cus=$_GET['nm_cus'];
 		$cus_ket=$_GET['cus_ket'];
 		$sql=mysql_query("SELECT * FROM costumer WHERE cst_id='$cus_id'")or die(mysql_error());
 		$ketemu=mysql_num_rows($sql);
 		if($ketemu>0){
 			$update=mysql_query("UPDATE costumer SET cst_nama='$nm_cus',cst_ket='$cus_ket' WHERE cst_id='$cus_id'")or die(mysql_error());
 		}else{
 			$insert=mysql_query("INSERT INTO costumer VALUES (NULL,'$nm_cus','$cus_ket')") or die(mysql_error());	
 		}
 		
 		break;

 	case'delete':
 		$id_cus=$_GET['id_cus'];
 		mysql_query("DELETE FROM costumer WHERE cst_id='$id_cus'")or die(mysql_error());
 		break;

 	case'ambilcus':
 		$cus_id=$_GET['cus_id'];
 		$sql=mysql_query("SELECT * FROM costumer WHERE cst_id='$cus_id'")or die(mysql_error());
 		$array=mysql_fetch_array($sql)or die(mysql_error());
 		echo "$array[cst_id]|$array[cst_nama]|$array[cst_ket]|";
 		break;

 
 } 



 ?>
 <script>
 	$(document).ready(function(){
			$("#tablestn").DataTable({ordering:false});
	});		

	
 </script>
