<?php
include_once("koneksi.php");
$cs=$_GET['cs'];
switch ($cs){
 	case 'select':
 		echo"
				<h1><b><p class='text-center' >DATA SATUAN BARANG</p></b></h1><br/>
 			<table id='tablestn' class='display' width='100%'> 
 				<thead>
 					<tr>
 						<th><b>No.</b></th>
 						<th><b>Nama Satuan</b></th>
 						<th><b>Aksi</b></th>
 					</tr>
 				</thead>";
 			echo"<tbody>";
 			$no=1;
 			$query=mysql_query("SELECT * FROM satuan ORDER BY stn_id ASC")or die(mysql_error());
 				while($array=mysql_fetch_array($query)){
 					extract($array);
 					echo"<tr align='left'><td>".$no."</td><td>".$stn_nama."</td><td><button class='btn btn-danger' onclick='hapusstn(".$stn_id.")'><span class='fa fa-close fa-lg'> </span> DELETE</button><button class='btn btn-primary' onclick='editstn(".$stn_id.")'><span class='fa fa-edit fa-lg'> </span> UPDATE</button></td></tr>";

 					$no++;
 				}
 					
 			echo"</tbody>";
 			echo"</table>";

 		break;

 	case'insert':
 		$nm_stn=$_GET['nm_stn'];
 		$satuan_id=$_GET['satuan_id'];
 		$sql=mysql_query("SELECT * FROM satuan WHERE stn_id='$satuan_id'")or die(mysql_error());
 		$ketemu=mysql_num_rows($sql);
 		if($ketemu>0){
 			$update=mysql_query("UPDATE satuan SET stn_nama='$nm_stn' WHERE stn_id='$satuan_id'")or die(mysql_error());
 		}else{
 			$insert=mysql_query("INSERT INTO satuan VALUES (NULL,'$nm_stn')") or die(mysql_error());	
 		}
 		
 		break;

 	case'delete':
 		$id_stn=$_GET['id_stn'];
 		mysql_query("DELETE FROM satuan WHERE stn_id='$id_stn'")or die(mysql_error());
 		break;

 	case'ambil_stn':
 		$stn_id=$_GET['stn_id'];
 		$sql=mysql_query("SELECT * FROM satuan WHERE stn_id='$stn_id'")or die(mysql_error());
 		$array=mysql_fetch_array($sql)or die(mysql_error());
 		echo "$array[stn_id]|$array[stn_nama]|";
 		break;

 
 } 



 ?>
 <script>
 	$(document).ready(function(){
			$("#tablestn").dataTable({ordering:false});
	});		

	
 </script>
