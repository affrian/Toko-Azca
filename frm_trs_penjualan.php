
<style>
		.img{
			margin-top: 25%;
			width: 20%;
			height: 20%;
			margin-left:35%;
		}
		#frm_pnj_pembayaran_akhir{
			background-color: #6EFF81;
			color: black;
		}
		#frm_pnj_pembayaran_akhir option{
			background-color: #6EFF81;
			color: black;
			font-weight: bold;
		}
	</style>
<div class="cc" id="frm_penjualan" style="display: none;">
	<div class="head" style="margin-left: 90%"><button type="button" class="btn btn-danger keluar"><span class="fa fa-fw fa-close" ></span>  CLOSE</button></div>
	<div class="posisi">
	<form action="" id="data-frm-pnj">
		<div class="trans_penjualan form-horizontal" style="background-color:#7DE6E1;border-radius:20px;min-height: 220px;padding: 10px">
			<table>
				<tr>
					<td colspan="2"><b><p style="font-size: 25px;"><?php echo date('d/m/Y'); ?></p></b></td>
				</tr>
				<tr>
					<td><b>Kode penjualan</b></td>
					<td><b>:</b></td>
					<td><input type="text" name="frm_pnj_id" id="frm_pnj_id" class="form-control"></td>
				</tr>
				<tr>
					<td><b>Nama Admin</b></td>
					<td><b>:</b></td>
					<td><input type="text" name="frm_pnj_adm_nm" id="frm_pnj_adm_nm" class="form-control" placeholder="Masukan Nama Admin" value="<?php echo $_SESSION['adm_nama']; ?>">
						<input type="text" id="frm_pnj_adm_id" name="frm_pnj_adm_id" class="frm_pnj_adm_id" value="<?php echo $_SESSION['adm_id']; ?>" hidden="true">
						<!-- <div class="pop_cari" id="frm_pnj_cari_admin"	></div>	 -->
					</td>
				</tr>
				<tr>
					<td><b>Nama Costumer</b></td>
					<td><b>:</b></td>
					<td><input type="text" name="frm_pnj_cs_nm" id="frm_pnj_cs_nm" class="form-control" onkeyup="pnj_cari_cs()" placeholder="Masukan Nama Supplier" >
						<input type="text" id="frm_pnj_cs_id" name="frm_pnj_cs_id" class="frm_pnj_cs_id" hidden="true">
						<div class="pop_cari" id="frm_pnj_cari_cs"	></div>
					</td>
				</tr>
			</table>
			<!-- <div style="margin-left: 80%" ><button type="button" class="btn btn-primary btn-lg" onclick="append()"><span class="fa fa-plus fa-lg" ></span> TAMBAH FORM</button></div> -->
		</div>

		<div class="trans_dt_penjualan" style="background-color: #3B8E36;min-height: 200px;border-radius: 20px;padding:5px;">
			<!-- <div class="dt" style="margin-left: 15px;margin-top: 15px;"> -->
				<table width="100%" class="pnj_tbl">
					<tr>
						<!-- <td><b>No</b></td> -->
						<td><b>Nama Barang</b></td>
						<td><b>Satuan</b></td>
						<td><b>Harga</b></td>
						<td><b>Jumlah penjualan</b></td>
						<td><b>Diskon</b></td>
						<td><b>Subtotal</b></td>
						<!-- <td><b>Total Diskon</b></td> -->
						<td><b>Action</b></td>
					</tr>
					
					<!-- tempat append -->
					
				</table>
			<!-- </div> -->
		</div>


		<div class="trans_penjualan_footer form-horizontal" style="background-color:#7DE6E1;border-radius:20px;min-height: 220px;padding:10px;">
			<table style="position: absolute;">
				<tr>
					<td><b>Keterangan :</b></td>
				</tr>
				<tr>
					<td><textarea class="form-control" name="frm_pnj_ket_akhir" id="frm_pnj_ket_akhir_pnj" cols="33" rows="4" maxlength="25"></textarea></td>
				</tr>
			</table>
			<table width="45%" style="margin-left:55%">
				<tr>
					<td><b>Total penjualan</b></td>
					<td><b>:</b></td>
					<td><b><input type="text" name="frm_pnj_tot" class="form-control price" id="frm_pnj_tot" placeholder="Total penjualan"></b></td>
				</tr>
				<tr>
					<td><b>Diskon</b></td>
					<td><b>:</b></td>
					<td><b><input type="text" name="frm_pnj_diskon_akhir" class="form-control price" id="frm_pnj_diskon_akhir" placeholder="Diskon" onkeyup="pnj_numberdisakhir(event)"></b></td>
				</tr>
				<tr>
					<td><b>Total Setelah Diskon</b></td>
					<td><b>:</b></td>
					<td><b><input type="text" name="frm_pnj_total_akhir" class="form-control price" id="frm_pnj_total_akhir" placeholder="Total Setelah diskon" style="background-color:red;color:black"></b></td>
				</tr>
				<tr>
					<td><b>Jumlah Bayar</b></td>
					<td><b>:</b></td>
					<td><b><input type="text" name="frm_pnj_bayar_akhir" class="form-control price" id="frm_pnj_bayar_akhir" placeholder="Masukan Jumlah bayaran" onkeyup="pnj_numberbyrakhir(event)"></b></td>
				</tr>
				<tr>
					<td><b>Kembalian</b></td>
					<td><b>:</b></td>
					<td><b><input type="text" name="frm_pnj_kembalian_akhir" class="form-control price" id="frm_pnj_kembalian_akhir" placeholder="Kembalian"></b></td>
				</tr>
			</table>

			<table width="30%">
				<tr>
					<td><button type="button" class="btn btn-primary" id="frm_pnj_simpan" style="width:100%"><span class="fa fa-save fa-lg"></span>  SAVE</button></td>
				</tr>
				<!-- <tr>
					<td><button type="button" class="btn btn-danger print" id="frm_pnj_print"	style="width:100%"><span class="fa fa-print fa-lg"></span>  PRINT</button></td>
				</tr> -->
			</table>
		</div>
	</form>	
	</div>	
	
</div>

<div id="frm_pnj_loading" style="width: 100%;color: red;height: 100%;position: absolute;z-index: 1;display: none;z-index:1;">
	
	</div>
