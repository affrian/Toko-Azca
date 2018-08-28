<?php 
session_start();
if(empty($_SESSION['adm_nama'])){
	echo "<script>window.location='index.php';</script>";
}

 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Home|Toko Azca</title>
	<link rel="shortcut icon" type="image/x-icon" href="#" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" /><!-- css bootstrap -->
	<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css" /><!-- css font awesome -->
	<link rel="stylesheet" href="assets/jquery-ui/jquery-ui.min.css" /><!-- jquery ui css -->
	<link rel="stylesheet" href="assets/datatables/media/css/jquery.dataTables.min.css" /><!-- css datatables -->
	<link rel="stylesheet" href="assets/css/style.css" /><!-- csss external -->
	<link rel="stylesheet" href="assets/css/style_home.css" /><!-- csss external home -->
	<link rel="stylesheet" href="assets/sweetalert/dist/sweetalert.css" />
	<link rel="shortcut icon" type="image/x-icon" href="img/logo.png" />
</head>
<body id="main" >
	<div class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" >
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <!-- <a class="navbar-brand" href="#">Toko Azca House Online</a> -->
		    </div>

		     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
					<ul class="nav navbar-nav navbar-right hoverhm" >
			        <li >
			          <a href="#" ><?php echo "<b>Username:".$_SESSION['adm_nama']."</b>"; ?> </a>
			        
			        </li>
			         <li><a href="#" id="logout"><b>Logout <span class="glyphicon glyphicon-log-out"></span></b></a></li>
			      </ul>
		     </div>
		</div>
	</div>
	
	<?php 
		include_once("transaksi_pembelian.php");
		include_once("barang.php");
		include_once("kategori.php");
		include_once("satuan.php");
		include_once("admin.php");
		include_once("frm_customer.php");
		include_once("frm_supplier.php");
		include_once("frm_laporan.php");
		include_once("frm_trs_penjualan.php");
	 ?>

	<!-- divisi menu -->
	<div class="menu container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 border home_hover" id="mn-pnj"  >
				<img src="img/penjualan.png" alt="" style="width:35%;"/>
			 </div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 border home_hover" id="mn-beli">
					<img src="img/keranjang.png" alt="" style="width:35%;"/>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 border popup-show home_hover" id="mn-barang">
				<img src="img/produk.png" alt="" style="width:35%;"/>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 border home_hover" id="mn-lpr">
			 	<img src="img/laporan.png" alt="" style="width:35%;"/>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 border home_hover" id="mn-adm" >
				 <img src="img/admin.png" alt="" style="width:35%;"/>
				
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 border home_hover" id="mn-ktg" >
				<img src="img/kategori.png" alt="" style="width:35%;"/>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 border home_hover" id="mn-spl">
				<img src="img/supplier.png" alt="" style="width:30%;"/>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 border home_hover" id="mn-cus">
				<img src="img/customer.png" alt="" style="width:35%;"/>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 border popup-show home_hover" id="mn-stn">
				<img src="img/satuan.png" alt="" style="width:35%;"/>
			</div>
		</div>
	</div>

	<!-- javascript -->
	<script src="assets/jquery-3.2.1.js"></script><!-- jquery -->
	<script src="assets/bootstrap/js/bootstrap.min.js" ></script><!-- js bootstrap -->
	<script src="assets/jquery-ui/jquery-ui.min.js" ></script><!-- js jquery ui -->
	<script src="assets/datatables/media/js/jquery.dataTables.min.js" ></script><!-- js datatable -->
	<script src="assets/jquery-divider/number-divider.min.js"></script><!-- divider -->
	<script src="assets/js/jsbuild.js"></script>
	<script src="assets/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>
