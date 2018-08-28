<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
	<link rel="shortcut icon" type="image/x-icon" href="#" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css" /><!-- css bootstrap -->
	<link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css" /><!-- css font awesome -->
	<link rel="stylesheet" href="../assets/jquery-ui/jquery-ui.min.css" /><!-- jquery ui css -->
	<link rel="stylesheet" href="../assets/datatables/media/css/jquery.dataTables.min.css" /><!-- css datatables -->
	<link rel="stylesheet" href="../assets/css/style.css" /><!-- csss external -->
</head>
<body >
		<?php
	/*===============================================================================
		Membuat Form Input Dinamis dengan PHP
		By: BliKomKom
		Website: http://www.komang.my.id
		Source code ini bisa anda gunakan dan modifikasi sesuai kebutuhan
	===============================================================================*/
	?>
	<div id="container">
		<h2>Input Data Karyawan</h2>
		<!-- tag buka form -->
			<form method="post" action="percobaan_pro.php">
				<!-- <input id="idf" value="1" /> -->
				<p>  Nama : <input name="nama_karyawan" class="nama_karyawan" type="text" id="nama" size="40"> </p>
			    <p>  Umur : <input name="umur_karyawan" class="umur_karyawan" type="text" id="nama" size="8"> </p>
				<button type="button"  onclick="tambahHobi(); return false;">Tambah Rincian Hobi</button>

			 	<!-- posisi append -->
			 	<div id="divHobi"></div>


			 	<button type="submit" class="simpan">Simpan</button>
			</form>
		<!-- tag tutup form -->
	</div>


	<!-- javascript -->
	<script src="../assets/jquery-3.2.1.js"></script><!-- jquery -->
	<script src="../assets/bootstrap/js/bootstrap.min.js" ></script><!-- js bootstrap -->
	<script type="text/javascript">
    $(document).ready(function() {
    	// e.preventDefault();
    	$(".simpan").click(function(e){
    		// e.preventDefault();
    		var rincian_hoby=[];
    		var jenis_hoby=[];

    		var nama_karyawan=$(".nama_karyawan").val();
    		var umur_karyawan=$(".umur_karyawan").val();
    		rincian_hoby+=$(".rincian_hoby").val();
    		jenis_hoby+=$('.jenis_hoby').val();

    		$.ajax({

    			url:"percobaan_pro.php",
    			method:"POST",
    			data:"rincian_hoby="+rincian_hoby+"&jenis_hoby="+jenis_hoby+"&nama_karyawan="+nama_karyawan+"&umur_karyawan="+umur_karyawan,
    			cache:false,
    			success:function(data){
    				alert(data);
    			}
    		});


    	});

     	
    });
    	var idf=1;
		function tambahHobi() {

	    		// var idf = document.getElementById("idf").value;
				var stre;
				stre="<p id='srow" + idf + "'>";
				stre+="<input type='text' size='40' class='rincian_hoby'  name='rincian_hoby[]' placeholder='Masukkan Hobi"+idf+"' />";
				stre+="<input type='text' size='30' class='jenis_hoby' name='jenis_hoby[]' placeholder='Utama/Sambilan' />";
				stre+="<a href='#' style=\"color:#3399FD;\" onclick='hapusElemen(\"#srow" + idf + "\"); return false;'>Hapus</a>";
				stre+="</p>";
	    		$("#divHobi").append(stre);	
	    		// idf = (idf-1) + 2;
	    		// idf = (idf-1) + 2;
	    		// 
	    		idf2=idf++;
	    		// document.getElementById("idf").value = idf2;
			}
		function hapusElemen(idf) {
	    		$(idf).remove();
			}
	</script>
</body>
</html>