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
				<p>  Nama : <input name="nama_karyawan" class="nn nama_karyawan" type="text" id="nama" size="40"> </p>
			    <p>  Umur : <input name="umur_karyawan" class="nn umur_karyawan" type="text" id="umur" size="8"> </p>
			    <p>  Umur : <input name="umur_karyawan" class="nn " type="text" id="umur" size="8"> </p>
			     <p>  Umur : <input name="umur_karyawan" class="nn " type="text" id="umur" size="8"> </p>
				<!-- <button type="button"  onclick="tambahHobi(); return false;">Tambah Rincian Hobi</button> -->

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
    	alert($(".nn").length);
    
    	$("#umur").keyup(function(){
    		var nama=$("#nama").val();
    		var umur=$("#umur").val();
    		var regex=/^[-_.@#$&*0-9a-zA-Z]$/g;
    		console.log("nama:"+nama.match(regex));
    		console.log("umur:"+umur.match(regex));
    	});

     	
    });
  
		// function wajib number
			// function number(evt){
			// 	// alert(evt);
			// 	var charcode= (evt.which) ? evt.which : event.keycode;
			// 	if(charcode>31 &&(charcode <48||charcode>57)){
			// 		alert("maaf harus angka");
			// 		// $("#prb_harga").val("");
			// 		return false;
			// 	}
			// return true;
			// }// tag tutup number
	</script>
</body>
</html>
