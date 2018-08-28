<?php 
session_start();
include_once("koneksi.php");
$cs=$_GET['cs'];
switch ($cs) {
// menampilkan data admin
	case 'select':
 		echo"
			<h1><b><p class='text-center' >DATA ADMIN</p></b></h1><br/>
 			<table id='tampil_admin' class='display' width='100%'> 
 				<thead>
 					<tr>
 						<th><b>No.</b></th>
 						<th><b>Status User</b></th>
 						<th><b>Nama </b></th>
 						<th><b>Aksi</b></th>
 					</tr>
 				</thead>";
 			echo"<tbody>";
 			$no=1;
 			$query=mysql_query("SELECT * FROM admin INNER joIN admin_status ON admin.sts_id=admin_status.sts_id ORDER BY admin.adm_id ASC")or die(mysql_error());
 				while($array=mysql_fetch_array($query)){
 					extract($array);
 					echo"<tr align='left'>
 						<td>".$no."</td>
 						<td>".$sts_status."</td>
 						<td>".$adm_nama."</td>
 						<td><button class='btn btn-danger' onclick='hapusadm(".$adm_id.")'><span class='fa fa-fw fa-save'></span>Hapus</button>
 						</td></tr>";

 					$no++;
 				}
 					
 			echo"</tbody>";
 			echo"</table>";

 	break;
// insert data admin ke database
 	case'insert':
 		if(isset($_GET['adm_id_m'])){
 			$adm_id_m=$_GET['adm_id_m'];
 		}
 		$sts_id=$_GET['sts_id'];
 		$adm_nama_m=$_GET['adm_nama_m'];
 		$adm_konfir=$_GET['adm_konfir'];
 		$view=mysql_query("SELECT * FROM admin WHERE adm_id='$adm_id_m'")or die(mysql_error());
 		$ketemu=mysql_num_rows($view);
	 		if($ketemu>0){
	 			$update=mysql_query("UPDATE admin SET sts_id='$sts_id',adm_nama='$adm_nama_m',adm_pass='$adm_konfir' WHERE adm_id='$adm_id_m'")or die(mysql_error());
	 		}else{
	 			$insert=mysql_query("INSERT INTO admin VALUES (NULL,'$sts_id','$adm_nama_m','$adm_konfir')") or die(mysql_error());
	 		}

 		
 	break;
// delete data admin
	case'delete':
 		$adm_id_m=$_GET['adm_id_m'];
 		mysql_query("DELETE FROM admin WHERE adm_id='$adm_id_m'")or die(mysql_error());
 		break;
// ambil id admin untuk fungsi pengeditan
 	case'ambiladm':
 			$adm_id_m=$_GET['adm_id_m'];
 			$query=mysql_query("SELECT * FROM admin
 				INNER JOIN admin_status ON admin_status.sts_id=admin.sts_id 
 				WHERE adm_id='$adm_id_m'")or die(mysql_error());
 			$arr=mysql_fetch_array($query);

 			echo "$arr[adm_id]||$arr[sts_id]|$arr[sts_status]|$arr[adm_nama]|$arr[adm_pass]|";
 	break;
// menampilkan password admin berdasarkan session adm_id
 	case'ubah_pass':
 		$sess_adm_id=$_SESSION['adm_id'];
 		$adm_pass_awal=$_GET['adm_pass_awal'];
 		$query=mysql_query("SELECT adm_pass FROM admin WHERE adm_id='$sess_adm_id' AND adm_pass='$adm_pass_awal'") or die(mysql_error());
 		$ketemu=mysql_num_rows($query);
 		$array=mysql_fetch_array($query);
 			echo "$array[adm_pass]|";
 	break;
// menyimpan password perubahan
 	case'simpan_pass':
 		$sess_adm_id=$_SESSION['adm_id'];
 		$adm_pass_br_kon=$_GET['adm_pass_br_kon'];
 		$query=mysql_query("UPDATE admin set adm_pass='$adm_pass_br_kon' WHERE adm_id='$sess_adm_id'")or die(mysql_error());
 	break;

}


 ?>



  <script>
 $(document).ready(function(){
		$("#tampil_admin").dataTable({ordering:false});
});	

 </script>
