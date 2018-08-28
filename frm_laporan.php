
<div class="cc" id="frm-lpr" style="display:none;">
		<div class="head" style="margin-left: 91%"><button type="button" class="btn btn-danger keluar"><span class="fa fa-fw fa-close" ></span>  CLOSE</button></div>
	
	<div class="posisi">
				<ul class="nav nav-tabs">
					<li><button type="button" name="lpr_pbl" class="btn btn-danger" id="lpr_pbl"> <span class="glyphicon glyphicon-book"></span> Laporan Pembelian</button></li>
					<li class="active"><button type="button" name="lpr_pnj" class="btn btn-success" id="lpr_pnj"><span class="glyphicon glyphicon-book"></span> Laporan Penjualan</button></li>
					<li class="active"><button type="button" name="lpr_stok" class="btn btn-danger" id="lpr_stok"><span class="glyphicon glyphicon-book"></span> Laporan Stok Barang</button></li>
				

					<!-- <li class="active"><button type="button" name="lpr_hpp_spl" class="btn btn-danger" id="lpr_hpp_spl"><span class="glyphicon glyphicon-book"></span> Laporan Hutang-Piutang Supplier</button></li>
					<li class="active"><button type="button" name="lpr_hpp_cus" class="btn btn-success" id="lpr_hpp_cus"><span class="glyphicon glyphicon-book"></span> Laporan Hutang-Piutang Customer</button></li> -->
					
					  
				</ul>
			<!--FORM  LAPORAN PEMBELIAN -->
			<div id="form_lpr_pbl" >
				<h1><p class="text-center">Laporan Pembelian</p></h1><hr />
				<form class="form-horizontal ">

				<div class="form-group">
				    <label for="inputPassword3" class="col-sm-1 col-md-2 col-lg-2 control-label"><p class="text-left">No Faktur laporan</p></label>
				    <div class="col-sm-4">
				      <input type="text" name="lap_pbl_fak" class="form-control tg" id="lap_pbl_fak" placeholder="No faktur Pembelian" required="required" style="text-transform: uppercase;" maxlength="20">
				    </div>
				</div>

				<div class="form-group">
				    <label for="inputPassword3" class="col-sm-1 col-md-2 col-lg-2 control-label"><p class="text-left">TanggaL Awal Pembelian</p></label>
				    <div class="col-sm-4">
				      <input type="date" name="lap_tgl_awal_beli" class="form-control" id="lap_tgl_awal_beli" placeholder="Tanggal Awal Pembelian" required="required" style="text-transform: uppercase;" maxlength="13">
				    </div>
				</div>

				<div class="form-group">
				    <label for="inputPassword3" class="col-sm-1 col-md-2 col-lg-2 control-label"><p class="text-left">TanggaL Akhir Pembelian</p></label>
				    <div class="col-sm-4">
				      <input type="date" name="lap_tgl_akhir_beli" class="form-control" id="lap_tgl_akhir_beli" placeholder="Tanggal Akhir Pembelian" required="required" style="text-transform: uppercase;" maxlength="13">
				    </div>
				</div>

				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-1">
				      <button type="button" id="lap_btn_pbl" class="btn btn-md btn-primary"><span class="fa fa-sw fa-print"></span> print</button>
				    </div>
				  </div>

				</form>	
			</div><!-- end fromlaporan pembelian -->

			<!--FORM  LAPORAN PENJUALAN-->
			<div id="form_lpr_pnj" style="display:none;">
				<h1><p class="text-center">Laporan penjualan</p></h1><hr />
				<form class="form-horizontal ">
				<div class="form-group">
				    <label for="inputPassword3" class="col-sm-1 col-md-2 col-lg-2 control-label"><p class="text-left">No Faktur laporan</p></label>
				    <div class="col-sm-4">
				      <input type="text" name="lap_pnj_fak" class="form-control" id="lap_pnj_fak" placeholder="No faktur penjualan" required="required" style="text-transform: uppercase;" maxlength="20">
				    </div>
				</div>
				<div class="form-group">
				    <label for="inputPassword3" class="col-sm-1 col-md-2 col-lg-2 control-label"><p class="text-left">TanggaL Awal penjualan</p></label>
				    <div class="col-sm-4">
				      <input type="date" name="lap_tgl_awal_pnj" class="form-control" id="lap_tgl_awal_pnj" placeholder="Tanggal Awal penjualan" required="required" style="text-transform: uppercase;" maxlength="13">
				    </div>
				</div>
				<div class="form-group">
				    <label for="inputPassword3" class="col-sm-1 col-md-2 col-lg-2 control-label"><p class="text-left">TanggaL Akhir penjualan</p></label>
				    <div class="col-sm-4">
				      <input type="date" name="lap_tgl_akhir_pnj" class="form-control" id="lap_tgl_akhir_pnj" placeholder="Tanggal Akhir penjualan" required="required" style="text-transform: uppercase;" maxlength="13">
				    </div>
				</div>
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-1">
				      <button type="button" id="lap_btn_pnj" class="btn btn-md btn-primary"><span class="fa fa-sw fa-print"></span> print</button>
				    </div>
				  </div>
				</form>	
			</div>


			<!--FORM  LAPORAN STOK BARANG-->
			<div id="form_lpr_barang" style="display:none;" >
				<h1><p class="text-center">Laporan Stok Barang</p></h1><hr />
				<form class="form-horizontal ">
				<div class="form-group">
				    <label for="inputEmail3" class="col-sm-1 col-md-2 col-lg-2 control-label"><p class="text-left">Kategori</p></label>
				    <div class="col-sm-4">
				    	<input placeholder="Masukan Kategori" type="text" id="lpr_ktg_nama" class="form-control" onkeyup="lpr_carikategori()" style="text-transform: uppercase;" autocomplete="off">
				    	<input type="text" id="lpr_ktg_id" hidden="true">
				    	<div class="pop_cari" id="lpr_cari_ktg"	></div>				     
				    </div>
				  </div>
				<div class="form-group">
				    <label for="inputPassword3" class="col-sm-1 col-md-2 col-lg-2 control-label"><p class="text-left">Nama Barang</p></label>
				    <div class="col-sm-4">
					    <input type="text" name="lap_brg_nm" class="form-control" id="lap_brg_nm" placeholder="Nama Barang" required="required" style="text-transform: uppercase;" maxlength="20" onkeyup="lpr_caribarang()">
					    <input type="text" id="lpr_brg_id" hidden="true">
				    	<div class="pop_cari" id="lpr_cari_barang"	></div>	
				    </div>
				</div>
				  <div class="form-group">
				  		<div class="col-sm-offset-2 col-sm-1">
						     <button type="button" id="lap_btn_brg" class="btn btn-md btn-primary" ><span class="fa fa-sw fa-print"></span> print</button>
					    </div>	
				  </div>

				   <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-1">
				    	<!-- <button type="button" id="lap_ex_brg" class="btn btn-md btn-primary" ><span class="fa fa-sw fa-file"></span>Export PDF</button> -->
				    </div>
				  </div>
				</form>	
			</div>
</div>	
</div>
