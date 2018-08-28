<style>
		.img{
			margin-top: 25%;
			width: 20%;
			height: 20%;
			margin-left:35%;
		}
	</style>
<div class="cc" id="frm_beli" style="display: none;">
	<div class="head" style="margin-left: 90%"><button type="button" class="btn btn-danger keluar"><span class="fa fa-fw fa-close" ></span>  CLOSE</button></div>
	<div class="posisi">
	<form action="" id="data-frm">
		<div class="trans_beli form-horizontal" style="background-color:#7DE6E1;border-radius:20px;min-height: 220px;padding: 10px">
			<table>
				<tr>
					<td colspan="2"><b><p style="font-size: 25px;"><?php echo date('d/m/Y'); ?></p></b></td>
				</tr>
				<tr>
					<td><b>Kode Pembelian</b></td>
					<td><b>:</b></td>
					<td><input type="text" name="pbl_id" id="pbl_id" class="form-control"></td>
				</tr>
				<tr>
					<td><b>Nama Admin</b></td>
					<td><b>:</b></td>
					<td><input type="text" name="adm_nama" id="adm_nama" class="form-control" placeholder="Masukan Nama Admin" value="<?php echo $_SESSION['adm_nama'] ?>">
						<input type="text" id="adm_id" name="adm_id" class="adm_id" value="<?php echo $_SESSION['adm_id'] ?>"  hidden="true" >
						<div class="pop_cari" id="cari_admin"	></div>	
					</td>
				</tr>
				<tr>
					<td><b>Nama Supplier</b></td>
					<td><b>:</b></td>
					<td><input type="text" name="spl_nama" id="spl_nama" class="form-control" onkeyup="cari_spl()" placeholder="Masukan Nama Supplier" autocomplete="off">
						<input type="text" id="spl_id" name="spl_id" class="spl_id" hidden="true" >
						<div class="pop_cari" id="cari_spl"	></div>
					</td>
				</tr>
				<tr>
					<td><b>No Nota</b></td>
					<td><b>:</b></td>
					<td><input type="text" name="no_nota" id="no_nota" class="form-control" required="required" placeholder="Masukan No Nota"  maxlength="15"></td>
				</tr>
			</table>
			<!-- <div style="margin-left: 80%" ><button type="button" class="btn btn-primary btn-lg" onclick="append()"><span class="fa fa-plus fa-lg" ></span> TAMBAH FORM</button></div> -->
		</div>

		<div class="trans_dt_beli" style="background-color: #3B8E36;min-height: 200px;border-radius: 20px;padding:5px;">
			<!-- <div class="dt" style="margin-left: 15px;margin-top: 15px;"> -->
				<table width="100%" class="tbl">
					<tr>
						<!-- <td><b>No</b></td> -->
						<td><b>Nama Barang</b></td>
						<td><b>Satuan</b></td>
						<td><b>Harga</b></td>
						<td><b>Jumlah Beli</b></td>
						<td><b>Diskon</b></td>
						<td><b>Subtotal</b></td>
						<!-- <td><b>Total Diskon</b></td> -->
						<td><b>Action</b></td>
					</tr>
					
					<!-- tempat append -->
					
				</table>
			<!-- </div> -->
		</div>


		<div class="trans_beli_footer form-horizontal" style="background-color:#7DE6E1;border-radius:20px;min-height: 220px;padding:10px;">
			<table style="position: absolute;">
				<tr>
					<td><b>Keterangan :</b></td>
				</tr>
				<tr>
					<td><textarea class="form-control" name="ket_akhir" id="ket_akhir" cols="33" rows="4" maxlength="25"></textarea></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td><button type="button" class="btn btn-primary simpanbl" id="simpanbl" style="width:100%"><span class="fa fa-save fa-lg"></span>  SAVE</button></td>
				</tr>
			</table>
			<table width="45%" style="margin-left:55%">
				<tr>
					<td><b>Total Pembelian</b></td>
					<td><b>:</b></td>
					<td><b><input type="text" name="total" class="form-control price" id="total" placeholder="Total Pembelian"></b></td>
				</tr>
			</table>
		</div>
	</form>	
	</div>	
	
</div>

<div id="loading" style="background:url('img/trans_hitam.png');width: 100%;color: red;height: 100%;position: absolute;z-index: 1;display: none;">
	
	</div>