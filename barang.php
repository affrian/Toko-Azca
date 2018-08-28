<div class="cc" id="frm-brg" style="display: none;">
		<div class="head" style="margin-left: 91%"><button type="button" class="btn btn-danger keluar"><span class="fa fa-fw fa-close" ></span>  CLOSE</button></div>
	
	<div class="posisi">
				<ul class="nav nav-tabs">
					<li role="presentation" class="active"><input type="button" name="input_brg" class="btn btn-danger" id="input_brg" value="Input Barang"></li>
					<li role="presentation"><input type="button" name="barang" class="btn btn-primary" id="barang" value="Barang" onclick="sub_hal_brg('select')"></li>
					  
				</ul>
			<div id="form_brg" >
				<h1><p class="text-center">MASTER BARANG</p></h1><hr />
				<form class="form-horizontal ">
					<input type="text" id="brg_id" hidden="true">
				  <div class="form-group">
				    <label for="inputEmail3" class="col-sm-1 col-md-2 col-lg-2 control-label"><p class="text-left">Kategori</p></label>
				    <div class="col-sm-4">
				    	<input placeholder="Masukan Kategori" type="text" id="ktg_nama" class="form-control" onkeyup="carikategori()" style="text-transform: uppercase;" autocomplete="off">
				    	<input type="text" id="ktg_id" hidden="true">
				    	<div class="pop_cari" id="cari_ktg"	></div>				     
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputPassword3" class="col-sm-1 col-md-2 col-lg-2 control-label"><p class="text-left">Nama Barang</p></label>
				    <div class="col-sm-4">
				      <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Barang" required="required" style="text-transform: uppercase;">
				    </div>
				  </div>
				    <div class="form-group">
				    <label for="inputPassword3" class="col-sm-1 col-md-2 col-lg-2 control-label"><p class="text-left">Satuan</p></label>
				    <div class="col-sm-4">
							<input placeholder="Masukan satuan" type="text" id="stn_nama" class="form-control" onkeyup="carisatuan()" autocomplete="off">
							<input placeholder="id satuan" type="text" id="stn_id" hidden="true">
							<div class="pop_cari" id="cari_stn"	></div>	
				    </div>
					
				  </div>
				   <div class="form-group">
				    <label for="inputPassword3" class="col-sm-1 col-md-2 col-lg-2 control-label"><p class="text-left">Harga Jual</p></label>
				    <div class="col-sm-4">
				      <input type="text" name="hrg_jual" class="price form-control" id="hrg_jual" placeholder="Harga Jual" required="required" onkeyup="valid_angka_harga_jual(event);">
				    </div>
				  </div>
				   <div class="form-group">
				    <label for="inputPassword3" class="col-sm-1 col-md-2 col-lg-2 control-label"><p class="text-left">Harga Beli</p></label>
				    <div class="col-sm-4">
				      <input type="text" name="hrg_beli" class="price form-control" id="hrg_beli" placeholder="Harga Beli" required="required" onkeyup="valid_angka_harga_beli(event)">
				    </div>
				  </div>
				   <div class="form-group">
				    <label for="inputPassword3" class="col-sm-1 col-md-2 col-lg-2 control-label"><p class="text-left">Keterangan</p></label>
				    <div class="col-sm-4">
				    	<!-- <input type="text"  id="ket" class="form-control"  required="required" style="height: 100px"> -->
				      <textarea name="ket" id="ket" cols="65" rows="9" required="required" class="form-control" placeholder="masukan Keterangan"></textarea>
				    </div>
				  </div>
				  
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-1">
				      <button type="button" onclick="simpan()" class="btn btn-md btn-primary"><span class="fa fa-sw fa-save"></span> Save</button>
				    </div>
				  </div>
				</form>	
			</div>
			<div class="row">
				<div id="view_brg" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"></div>
			</div>
			
</div>	
</div>