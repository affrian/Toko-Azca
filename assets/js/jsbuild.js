
$(document).ready(function(){
			$(document).click(function(){
				$(".pop_cari").hide("slow");
			});
			
			// $("#loading").show("fast");
			// rupiahappend();
			// faktur pembelian
			faktur();
			// faktur penjualan
			fakpnj();
			// total_bl();
			// 
			// $(".tg").datepicker();
// ==============================file home.php
			// tombl keluar
			$(".keluar").click(function(){
				$(".cc").hide("slow");
				$(".menu").show("slow");
			});
			// menu transaksi pembelian
			$("#mn-beli").click(function(e){
				e.preventDefault();
				$("#frm_beli").slideDown("slow");
				$(".menu").hide("slow");
				hitung_append_pbl();
			});

			// menu transaksi input barang
			$("#mn-barang").click(function(e){
				e.preventDefault();
				$("#frm-brg").slideDown("slow");
				// alert(e);
				$(".menu").hide("slow");
			});

			//menu kategori 
			$("#mn-ktg").click(function(e){
				e.preventDefault();
				$("#frm-ktg").slideDown("slow");
				// alert(e);
				$(".menu").hide("slow");
			});

			// menu satuan
			$("#mn-stn").click(function(e){
				e.preventDefault();
				$("#frm-stn").slideDown("slow");
				// alert(e);
				$(".menu").hide("slow");
			});


			// menu admin
			$("#mn-adm").click(function(e){
				e.preventDefault();
				$("#frm-adm").slideDown("slow");
				// alert(e);
				$(".menu").hide("slow");
			});

				// menu customer
			$("#mn-cus").click(function(e){
				e.preventDefault();
				$("#frm-cus").slideDown("slow");
				// alert(e);
				$(".menu").hide("slow");
			});

			// menu supplier
			$("#mn-spl").click(function(e){
				e.preventDefault();
				$("#frm-spl").slideDown("slow");
				// alert(e);
				$(".menu").hide("slow");
			});

			// menu laporan
			$("#mn-lpr").click(function(e){
				e.preventDefault();
				$("#frm-lpr").slideDown("slow");
				// alert(e);
				$(".menu").hide("slow");
			});


			// menu laporan
			$("#mn-pnj").click(function(e){
				e.preventDefault();
				$("#frm_penjualan").show("slow");
				// alert(e);
				$(".menu").hide("slow");
				hitung_append();	
				// hitung_append();
			});
			
			// menu logout
			$("#logout").click(function(e){
				e.preventDefault();
				var a=confirm("Anda Yakin Akan Keluar??");
				if(a==true){
					$.ajax({
						url:"pro_logout.php",
						cache:false,
						success:function(html){
							if(html=="logout"){
								window.location="index.php";
							}
						}
					})
				}
			});
//===================================================file barang.php
				$(".price").divide();
				// $("#view_brg").hide();
				$("#barang").click(function(){
					$("#form_brg").slideUp("slow");
					$("#view_brg").show("slow");
					});

				$("#nama").keypress(function(e){
					var charcode= (e.which) ? e.which : event.keycode;
					if(charcode==13){
						$("#hrg_jual").focus();
					}
					});

				$("#hrg_jual").keypress(function(e){
					var charcode= (e.which) ? e.which : event.keycode;
					if(charcode==13){
						$("#hrg_beli").focus();
					}
					});

				$("#hrg_beli").keypress(function(e){
					var charcode= (e.which) ? e.which : event.keycode;
					if(charcode==13){
						$("#ket").focus();
					}
				});

				$("#input_brg").click(function(){
						$("#view_brg").hide("slow");
						// $("#view_brg").slideDown("slow");
						$("#form_brg").slideDown("slow");
						
					});

				$("#ktg_nama").click(function(){
					$("#cari_ktg").fadeOut("slow");
				});

				// $(document).on("click","li",function(){
				// 	$("#ktg_nama").val($(this).text());
				// 	$("#cari_ktg").fadeOut("slow");
				// 	$("#ktg_id").val($(this).attr("id"));
				// 	// alert("berhasil click");
				// }); 
				
				// $(".number").on("keyup",function(evt){
					// this.value=this.value.replace(/[^0-9/a-zA-Z]/g,'');
					// var val=$(this).val(/[^0-9]+$/);

				// });
// //============================================================ file kategori.php
				$("#view_ktg").hide();
				$("#kategori").click(function(){
						$("#form_ktg").hide("slow");
						$("#view_ktg").show("slow");
						// $("#view_ktg").slideUp("slow");
					});

				$("#input_ktg").click(function(){
						$("#view_ktg").slideDown("slow");
						$("#form_ktg").show("slow");
						$("#view_ktg").hide("slow");
					});

				$("#nm_ktg").keypress(function(e){
					var charcode= (e.which) ? e.which : event.keycode;
					if(charcode==13){
						$("#simpan_ktg").focus();
					}
				});
//===========================================================file satuan.php
				$("#view_stn").hide();
				$("#satuan").click(function(){
						$("#form_stn").slideUp("slow");
						$("#view_stn").show("slow");
					});

				$("#input_stn").click(function(){
						$("#view_stn").slideDown("slow");
						$("#form_stn").show("slow");
						$("#view_stn").hide("slow");
					});

				$("#nm_stn").keypress(function(e){
					var charcode= (e.which) ? e.which : event.keycode;
					if(charcode==13){
						$("#simpan_stn").focus();
					}
				});

// =====================================================file transaksi_pembelian.php
				$("#simpanbl").on("click",function(){
					// var bayar_akhir=parseInt($("#bayar_akhir").val());
					// console.log("bayar akhir:"+bayar_akhir);
					// var total_akhir=parseInt($("#total_akhir").val());
					// console.log("total akhir:"+total_akhir);
					var adm_nama=$("#adm_nama").val();
					var adm_id=$("#adm_id").val();
					var spl_nama=$("#spl_nama").val();
					var spl_id=$("#spl_id").val();
					var pbl_id=$("#pbl_id").val();
					// var kal_hasil_akhir=parseInt(bayar_akhir)-parseInt(total_akhir);

					// if(total_akhir>bayar_akhir){
						 // alert("Maaf Uang Pembayaran Kurang");
						// return false;
					// }else if(isNaN(bayar_akhir)||$.trim(bayar_akhir)==""){
						// alert("Pembayaran Belum di input");
						// return false;
					if($.trim(adm_nama)==""||$.trim(adm_id)==""||$.trim(spl_nama)==""||$.trim(spl_id)==""||$.trim(pbl_id)==""){
						alert("Nama Admin/Nama Supplier Tidak boleh Kosong!!");
					}else{
						// console.log("bayar terakhir banget:"+bayar_akhir);
						// if(!isNaN(kal_hasil_akhir)){
						// 	$("#kembalian_akhir").val(kal_hasil_akhir);
						// 	alert("KEMBALIAN:"+kal_hasil_akhir);
							// console.log("kembalian:"+kal_hasil_akhir);
							
							
							var data=$("#data-frm").serialize();
							// alert(data);
							$.ajax({
								url:"pro_trs_beli.php?cs=insert",
								type:"get",
								data:data,
								cache:false,
								beforeSend:function(){
									// alert(html);
									// $("#loading").css("background","url('img/trans_hitam.png')");
									$("#loding").show("fast").html("<img src='img/load.gif' style='margin-top:20%;width: 20%;height: 23%;margin-left:38%;'>");
								},
								success:function(html){

								// alert(html);
								$(".rm").remove();
								$("#total").val("");
								// $("#diskon_akhir").val("");
								// $("#total_akhir").val("");
								// $("#bayar_akhir").val("");
								// $("#kembalian_akhir").val("");
								// $("#adm_nama").val("");
								// $("#adm_id").val("");
								$("#spl_nama").val("");
								$("#spl_id").val("");
								$("#no_nota").val("");
								$("#ket_akhir").val("");
								append();
								faktur();
								$("#loading").hide("slow");
								$("#simpanbl").css("border","none");
								}
							});
							
							// var print=confirm("Apakah Anda Akan Mencetak Struk");
							// alert(print);
							// if(print==true){
							// 	console.log("cetak sedang berjalan");
								// alert("Rp."+kal_hasil_akhir);
							// }else{
							// 	alert("Rp."+kal_hasil_akhir);
							// }
						// }
						// return true;
					}
				});

				$("#diskon_akhir").on("keyup",function(){
					var diskon_akhir=$(this).val();
					var total_akhir=$("#total").val();
					var kal_diskon_akhir=parseInt(total_akhir)-parseInt(diskon_akhir);
					if(!isNaN(kal_diskon_akhir)){
						$("#total_akhir").val(kal_diskon_akhir);
						// console.log(kal_diskon_akhir);
					}else{
							$("#total_akhir").val("");
					}
				});


				$("#bayar_akhir").keypress(function(e){
					var charcode= (e.which)?e.which:event.keycode;
					if(charcode==13){
						$("#bayar_akhir").css("background-color","white");
						$("#bayar_akhir").css("border","none");
						$("#simpanbl").css("border","3px solid #05FF2C");
						$("#simpanbl").focus();
					}
				});

				$("#diskon_akhir").keypress(function(e){
					var charcode= (e.which)?e.which:event.keycode;
					if(charcode==13){
						$("#bayar_akhir").css("border","1px solid red");
						$("#bayar_akhir").css("background-color","#CDCDCD");
						$("#bayar_akhir").focus();
						// $("#bayar_akhir").focus();
					}
				});
				// var n=1;
				// var no=getno();
				// $(".diskon"+no).keypress(function(e){
				// 	// e.preventDefault();
				// 	var charcode= (e.which) ? e.which : event.keycode;
				// 	if(charcode==13){
						
				// 		alert(no);
				// 		// append();
				// 	}

				// });	
// ====================================================file admin.php
			// fungsi menampilkan menu form input admin
			$("#select_admin").click(function(){

				$.ajax({
					url:"pro_admin.php",
					type:"get",
					data:"cs=select",
					cache:false,
					success:function(html){
						// alert(html);
						$("#view_adm").load("pro_admin.php?cs=select");
						$("#view_adm").show("slow");
						$("#form_adm").hide("slow");
						$("#frm_c_pass").hide("slow");
						
					}

				});
			});
			// fungsi menampilkan data admin
			$("#input_admin").click(function(){
				$("#view_adm").hide("slow");
				$("#frm_c_pass").hide("slow");
				// $("#view_adm").hide("slow");
				$("#form_adm").show("slow");
		
			});

			// fungsi menu ubah password
			$("#c_pass").click(function(){
				$("#view_adm").hide("slow");
				$("#form_adm").hide("slow");
				$("#frm_c_pass").fadeIn("slow");
			});
			// fungsi simpan admin
			$("#adm_simpan").click(function(){
				var adm_id_m=$("#adm_id_m").val();
				var sts_id=$("#sts_id").val();
				var adm_nama_m=$("#adm_nama_m").val().toUpperCase();
				var adm_konfir=$("#adm_konfir").val();
				var pass1=$("#adm_pass").val();
				var pass2=$("#adm_konfir").val();
				if($.trim(sts_id)==""||$.trim(adm_nama)==""||$.trim(adm_konfir)==""){
					alert("Data Tidak Boleh Kosong!!");
				}else if(pass2!=pass1){
					alert("Password Harus Sama!!");
				}else{
					$.ajax({
						url:"pro_admin.php",
						type:"get",
						data:"cs=insert&adm_id_m="+adm_id_m+"&sts_id="+sts_id+"&adm_nama_m="+adm_nama_m+"&adm_konfir="+adm_konfir,
						cache:false,
						success:function(html){
							// alert(html);
							$("#adm_id_m").val("");
							$("#sts_id").val("");
							$("#adm_nama_m").val("");
							$("#adm_konfir").val("");
							$("#adm_pass").val("");
							
							$("#form_adm").hide("slow");
							$("#view_adm").load("pro_admin.php?cs=select");
							$("#view_adm").show("slow");
							// $(".nn").val("");
							$(".nn").remove();
							$("#sts_id").append('<option class="nn" selected="selected">===Pilih Status Admin===</option>');
							$(".fault").hide();
							$(".true").hide();
						}
					})
				}
			});


		$("#adm_konfir").keyup(function(){
			var pass1=$("#adm_pass").val();
			var pass2=$("#adm_konfir").val();
			if(pass2!=pass1){
				$(".fault").show();
				$(".fault").css("color","red");
				// alert("maaf password tidak sama");
			}else{
				$(".fault").hide();
				$(".true").show();
				$(".true").css("color","green");
			}
		});

		// hide menu menu data admin dan insert data
		$.ajax({
			url:"json.php",
			type:"get",
			dataType:"json",
			success:function(html){
				var json =JSON.parse(html);
				console.log("sts="+json);
				if(json==2){
					$("#select_admin").hide();
					$("#input_admin").hide();
					$("#form_adm").hide();
					$("#view_adm").hide();
					$("#frm_c_pass").show();
				}

			}
		});

		// bagian change password
		$("#adm_pass_awal").keyup(function(){
			var adm_pass_awal=$("#adm_pass_awal").val();
			$.ajax({
				url:"pro_admin.php",
				type:"get",
				data:"cs=ubah_pass&adm_pass_awal="+adm_pass_awal,
				cache:false,
				success:function(e){
					// e=e.split("|");
					// alert(e);
					e=e.split("|");
					console.log(e[0]);
					if(adm_pass_awal!=e[0]){
						$("#pass_awal_true").hide();
						// alert("Password Tidak Ditemukan!!");
						$("#pass_awal_false").show().css("color","red");
					}else{
						$("#pass_awal_false").hide();
						$("#pass_awal_true").show().css("color","green");
					}

				}
			});
		});

		// simpan perubahan password
		$("#adm_simpan_pass").click(function(){
			var adm_pass_awal=$("#adm_pass_awal").val();
			var adm_pass_baru=$("#adm_pass_baru").val();
			var adm_pass_br_kon=$("#adm_pass_br_kon").val();
			if($.trim(adm_pass_awal)==""||$.trim(adm_pass_baru)==""||$.trim(adm_pass_br_kon)==""){
				alert("Data Tidak Boleh Kosong");
			}else if(adm_pass_br_kon!=adm_pass_baru){
				alert("Password Konfirmasi Tidak Sama!!");
				$("#adm_pass_baru").val("");
				$("#adm_pass_br_kon").val("");
			}else{
					$.ajax({
					url:"pro_admin.php",
					type:"get",
					data:"cs=ubah_pass&adm_pass_awal="+adm_pass_awal,
					cache:false,
					success:function(e){
						e=e.split("|");
						// console.log(e[0]);
						if(adm_pass_awal!=e[0]){
							$("#pass_awal_true").hide();
							alert("Password Awal Tidak Ditemukan!!");
							$("#adm_pass_awal").focus();
							$("#pass_awal_false").show().css("color","red");
						}else{
							$.ajax({
								url:"pro_admin.php",
								type:"get",
								data:"cs=simpan_pass&adm_pass_br_kon="+adm_pass_br_kon,
								cache:false,
								success:function(html){
									// alert(html);
									$("#adm_pass_awal").val("");
									$("#adm_pass_baru").val("");
									$("#adm_pass_br_kon").val("");
									$("#pass_awal_false").hide();
									$("#pass_awal_true").show().css("color","green");
									$(".fault").hide();
									$(".true").hide();
								}
							});
							
						}

					}
				});
			}//tag tutup if else
		});//close tag adm_simpan_pass

	// mengecek password konfirmasi
	$("#adm_pass_br_kon").keyup(function(){
		var adm_pass_baru=$("#adm_pass_baru").val();
		var adm_pass_br_kon=$("#adm_pass_br_kon").val();

		if(adm_pass_br_kon!=adm_pass_baru){
			$("#kon_true").hide();
			$("#kon_false").show().css("color","red");
		}else{
			$("#kon_false").hide();
			$("#kon_true").show().css("color","green");
		}
	});

	//jika password awal di enter fokus ke password baru
	$("#adm_pass_awal").keypress(function(e){
		var charcode =(e.which)?e.which:event.keycode;
		if(charcode==13){
			$("#adm_pass_baru").focus();

		}
	});

	//jika password baru di enter fokus ke konfirmasi  password
	$("#adm_pass_baru").keypress(function(e){
		var charcode =(e.which)?e.which:event.keycode;
		if(charcode==13){
			$("#adm_pass_br_kon").focus();
		}
	});

	//jika konfirmasi  password di enter fokus ke button simpan
	$("#adm_pass_br_kon").keypress(function(e){
		var charcode =(e.which)?e.which:event.keycode;
		if(charcode==13){
			$("#adm_simpan_pass").focus();
		}
	});



// =========================================================file login.php
		$("#login").click(function(){
				// alert("ok");
				var lgn_user=$("#lgn_user").val().toUpperCase();
				var lgn_pass=$("#lgn_pass").val().toUpperCase();
				if($.trim(lgn_user)=="" && $.trim(lgn_pass)==""){
					alert("Username dan Password Tidak Boleh Kosong");
					$("#lgn_user").focus();
				}else if($.trim(lgn_user)==""){
					alert("UserName Boleh Kosong");
					$("#lgn_user").focus();
				}else if($.trim(lgn_pass)==""){
					alert("Password Boleh Kosong");
					$("#lgn_pass").focus();
				}else{
					$.ajax({
						url:"pro_login.php",
						type:"get",
						data:"lgn_user="+lgn_user+"&lgn_pass="+lgn_pass,
						cache:false,
						success:function(html){
							
							if(html=="Success"){
								$("#loading").slideDown();
								setInterval(function(){
									window.location='home.php';
								},600);
								
							}else{
								alert(html);
							}
							
						}
					});
				}
			});

		// focus to password 
		$("#lgn_user").keypress(function(e){
			var charcode=(e.which)?e.which:event.keycode;
			if(charcode==13){
				$("#lgn_pass").focus();
			}
		});

		// focus to button login
		$("#lgn_pass").keypress(function(e){
			var charcode=(e.which)?e.which:event.keycode;
			if(charcode==13){
				$("#login").focus();
			}
		});
// ========================================file customer.php
		// menu menampilkan form inputan costumer
		$("#select_cus").click(function(){
			$.ajax({
				url:"pro_customer.php",
				type:"get",
				data:"cs=select",
				cache:false,
				success:function(html){
					// alert(html);
					$("#form_cus").hide("slow");
					$("#view_cus").show("slow");
					$("#view_cus").load("pro_customer.php","cs=select");
				}
			});
			

		});

		// menu menampilkan data costumer
		$("#input_cus").click(function(){
			$("#view_cus").hide("slow");
			$("#form_cus").show("slow");
		});
		// menu simpan costumer
		$("#simpan_cus").click(function(){
			var cus_id=$("#cus_id").val();
			var nm_cus=$("#nm_cus").val().toUpperCase();
			var ket_cus=$("#ket_cus").val().toUpperCase();
			if($.trim(nm_cus)==""||$.trim(ket_cus)==""){
				alert("Data Masih Ada yang Kosong!!");
			}else{
				$.ajax({
					url:"pro_customer.php",
					type:"get",
					data:"cs=insert&cus_id="+cus_id+"&nm_cus="+nm_cus+"&cus_ket="+ket_cus,
					cache:false,
					success:function(html){
						// alert(html);
						$("#cus_id").val("");
						$("#ket_cus").val("");
						$("#nm_cus").val("");
					}
				});
			}

		});
		// fokus ke keterangan ketika di enter
		$("#nm_cus").keypress(function(e){
			var charcode=(e.which)?e.which:event.keycode;
			if(charcode==13){
				$("#ket_cus").focus();
			}

		});
// ============================================file frm_supplier.php
// menampilkan data supplier
	$("#supplier").click(function(){
		$.ajax({
			url:"pro_supplier.php",
			type:"get",
			data:"cs=select",
			cache:false,
			success:function(html){
				// alert(html);
				$("#form_spl").hide("slow");
				$("#view_spl").load("pro_supplier.php","cs=select");
				$("#view_spl").show("slow");
			}
		});
	})
//menmapilkan form inputan supplier
	$("#input_spl").click(function(){
		$("#view_spl").hide("slow");
		$("#form_spl").show("slow");
		// $("#view_spl").hide();
	});

// tombol simpan supplier
	$("#frm_spl_simpan").click(function(){
		var frm_spl_id=$("#frm_spl_id").val();
		var frm_spl_nama=$("#frm_spl_nama").val().toUpperCase();
		var frm_spl_telp=$("#frm_spl_telp").val();
		var frm_spl_ket=$("#frm_spl_ket").val();
		if($.trim(frm_spl_nama)==""||$.trim(frm_spl_telp)==""||$.trim(frm_spl_ket)==""){
			alert("Data Tidak Boleh Ada yang Kosong!!");
		}else{
			$.ajax({
				url:"pro_supplier.php",
				type:"get",
				data:"cs=insert&frm_spl_id="+frm_spl_id+"&frm_spl_nama="+frm_spl_nama+"&frm_spl_telp="+frm_spl_telp+"&frm_spl_ket="+frm_spl_ket,
				cache:false,
				success:function(html){
					// alert(html);
					$("#frm_spl_id").val("");
					$("#frm_spl_nama").val("");
					$("#frm_spl_telp").val("");
					$("#frm_spl_ket").val("");
					$("#frm_spl_nama").focus();
				}
			});
		}
	});
// jika input nama di enter foccus ke no telepon
	$("#frm_spl_nama").keypress(function(e){
		var charcode=(e.which)?e.which:event.keycode;
		if(charcode==13){
			$("#frm_spl_telp").focus();
		}
	});
//jika input telp di enter foccus ke keterangan
	$("#frm_spl_telp").keypress(function(e){
		var charcode=(e.which)?e.which:event.keycode;
		if(charcode==13){
			$("#frm_spl_ket").focus();
		}
	});

// =========================================file frm_laporan.php
	// menu laporan pembelian
	$("#lpr_pbl").click(function(){
		$("#form_lpr_pbl").show("slow");
		$("#form_lpr_pnj").hide("slow");
		$("#form_lpr_barang").hide("slow");
		$("#form_lpr_hpp_cus").hide("slow");
	});

// menu laporan penjalan
	$("#lpr_pnj").click(function(){
		$("#form_lpr_pbl").hide("slow");
		$("#form_lpr_pnj").show("slow");
		$("#form_lpr_barang").hide("slow");
		$("#form_lpr_hpp_cus").hide("slow");
	});
// menu laporan hpp pembelian
	$("#lpr_stok").click(function(){
		$("#form_lpr_pbl").hide("slow");
		$("#form_lpr_pnj").hide("slow");
		$("#form_lpr_barang").show("slow");
		$("#form_lpr_hpp_cus").hide("slow");
	});
// menu laporan hpp penjualan
	$("#lpr_hpp_cus").click(function(){
		$("#form_lpr_pbl").hide("slow");
		$("#form_lpr_pnj").hide("slow");
		$("#form_lpr_hpp_spl").hide("slow");
		$("#form_lpr_hpp_cus").show("slow");
	});


// =======================================================frm_trs_penjualan.php
				$("#frm_pnj_simpan").on("click",function(){
					var adm_nama=$("#frm_pnj_adm_nm").val();
					var adm_id=$("#frm_pnj_adm_id").val();
					var cs_nama=$("#frm_pnj_cs_nm").val();
					var cs_id=$("#frm_pnj_cs_id").val();
					var pnj_id=$("#frm_pnj_id").val();
					var frm_pnj_bayar_akhir=$("#frm_pnj_bayar_akhir").val();
					frm_pnj_total_akhir=$("#frm_pnj_total_akhir").val();

					frm_pnj_bayar_akhira=parseInt(frm_pnj_bayar_akhir);
					frm_pnj_total_akhira=parseInt(frm_pnj_total_akhir);
					if($.trim(adm_nama)==""||$.trim(adm_id)==""||$.trim(cs_nama)==""||$.trim(cs_id)==""||$.trim(pnj_id)==""){
						alert("Nama Admin/Nama customer Tidak boleh Kosong!!");
					}else if($.trim(frm_pnj_bayar_akhir)==""){
						alert("Pemabayaran Tidak boleh Kosong!!");
						$("#frm_pnj_bayar_akhir").focus();
					}else if(frm_pnj_bayar_akhira<frm_pnj_total_akhira){
						alert("Maaf Pembayaran Kurang!!");

					}else{
							
							var data=$("#data-frm-pnj").serialize();
							// alert(data);
							$.ajax({
								url:"pro_trs_penjualan.php?cs=insert",
								type:"get",
								data:data,
								cache:false,
								beforeSend:function(){
									// alert(html);
									// $("#loading").css("background","url('img/trans_hitam.png')");
									$("#frm_pnj_loading").show("fast").html("<img src='img/load.gif' style='margin-top:20%;width: 20%;height: 23%;margin-left:38%;'>");
								},
								success:function(html){

									// alert(html);
									$(".pnj_rm").remove();
									$("#frm_pnj_tot").val("");
									// $("#frm_pnj_adm_nm").val("");
									// $("#frm_pnj_adm_id").val("");
									$("#frm_pnj_cs_nm").val("");
									$("#frm_pnj_cs_id").val("");
									$("#frm_pnj_ket_akhir_pnj").val("");
									$("#frm_pnj_kembalian_akhir").val("");
									$("#frm_pnj_diskon_akhir").val("");
									$("#frm_pnj_total_akhir").val("");
									$("#frm_pnj_bayar_akhir").val("");

									pnj_append();
									fakpnj();
									$("#frm_pnj_loading").hide("slow");
									$("#frm_pnj_simpanl").css("border","none");
									$("#frm_pnj_kembalian_akhir").css("background-color","white");
								}
							});
					}
				});
	$("#frm_pnj_diskon_akhir").on("keyup",function(){
		var diskon_akhir=$(this).val();
		var total_akhir=$("#frm_pnj_tot").val();
		var kal_diskon_akhir=parseInt(total_akhir)-parseInt(diskon_akhir);
		if(!isNaN(kal_diskon_akhir)){
		// console.log(kal_diskon_akhir);
		$("#frm_pnj_total_akhir").val(kal_diskon_akhir);
		}
	});

	// keyup fungsi kalkulasi uang kembalian=uang_bayar-toal beli
	$("#frm_pnj_bayar_akhir").on("keyup",function(){
		var bayar_akhir=$(this).val();
		var total_akhir=$("#frm_pnj_total_akhir").val();
		var kal_kembalian_akhir=parseInt(bayar_akhir)-parseInt(total_akhir);
		if(!isNaN(kal_kembalian_akhir)){
		// console.log(kal_kembalian_akhir);
			$("#frm_pnj_kembalian_akhir").val(kal_kembalian_akhir);
			$("#frm_pnj_kembalian_akhir").css("background-color","green");
			$("#frm_pnj_kembalian_akhir").css("color","white");
		}
	});

// ======================================================file frm_laporan.php
	
	// ketika tombol cetak di laporan barang di klik 
	$('#lap_btn_brg').click(function(e){
		e.preventDefault();
		lpr_ktg_nama=$('#lpr_ktg_nama').val();
		lpr_ktg_id=$('#lpr_ktg_id').val();
		lap_brg_nm=$('#lap_brg_nm').val();
		lpr_brg_id=$('#lpr_brg_id').val();
		
		// if($.trim(lpr_ktg_nama)==""&&$.trim(lpr_ktg_id)==""&&$.trim(lap_brg_nm)==""&&$.trim(lpr_brg_id)==""){
		// 	alert('harus ada data yang di isi');
		// }else{
			$.ajax({
				url:'pro_lap_barang.php',
				type:'get',
				data:"lpr_ktg_id="+lpr_ktg_id+"&lpr_brg_id="+lpr_brg_id,
				cache:false,
				success:function(html){
					// alert();
						$('#lpr_ktg_nama').val("");
						$('#lpr_ktg_id').val("");
						$('#lap_brg_nm').val("");
						$('#lpr_brg_id').val("");
					var tab=window.open('pro_lap_barang.php?lpr_ktg_id='+lpr_ktg_id+'&lpr_brg_id='+lpr_brg_id,'_blank');
					// var tab2=window.open('ex.php?lpr_ktg_id='+lpr_ktg_id+'&lpr_brg_id='+lpr_brg_id,'_blank');
					// tab.focus();

				}
			});
		// }

	});//end

		// ketika tombol cetak di laporan barang di klik 
	$('#lap_ex_brg').click(function(e){
		e.preventDefault();
		lpr_ktg_nama=$('#lpr_ktg_nama').val();
		lpr_ktg_id=$('#lpr_ktg_id').val();
		lap_brg_nm=$('#lap_brg_nm').val();
		lpr_brg_id=$('#lpr_brg_id').val();
		
		// if($.trim(lpr_ktg_nama)==""&&$.trim(lpr_ktg_id)==""&&$.trim(lap_brg_nm)==""&&$.trim(lpr_brg_id)==""){
		// 	alert('harus ada data yang di isi');
		// }else{
			$.ajax({
				url:'pro_lap_barang.php',
				type:'get',
				data:"lpr_ktg_id="+lpr_ktg_id+"&lpr_brg_id="+lpr_brg_id,
				cache:false,
				success:function(html){
					// alert();
						$('#lpr_ktg_nama').val("");
						$('#lpr_ktg_id').val("");
						$('#lap_brg_nm').val("");
						$('#lpr_brg_id').val("");
					var tab=window.open('pro_lap_barang.php?lpr_ktg_id='+lpr_ktg_id+'&lpr_brg_id='+lpr_brg_id+"&ex=pdf",'_blank');
					// var tab2=window.open('ex.php?lpr_ktg_id='+lpr_ktg_id+'&lpr_brg_id='+lpr_brg_id,'_blank');
					// tab.focus();

				}
			});
		// }

	});//end


	// ketika tombol cetak di laporan pemeblian di klik 
	$('#lap_btn_pbl').click(function(e){
		e.preventDefault();
		lap_pbl_fak=$('#lap_pbl_fak').val();
		lap_tgl_awal_beli=$('#lap_tgl_awal_beli').val();
		lap_tgl_akhir_beli=$('#lap_tgl_akhir_beli').val();

		$('#lap_pbl_fak').val("");
		$('#lap_tgl_awal_beli').val("");
						$('#lap_tgl_akhir_beli').val("")
						
		var tab=window.open('pro_lap_pembelian.php?lap_pbl_fak='+lap_pbl_fak+'&lap_tgl_awal_beli='+lap_tgl_awal_beli+'&lap_tgl_akhir_beli='+lap_tgl_akhir_beli,'_blank');
	})

	// ketika tombol cetak di laporan penjualan di klik 
	$('#lap_btn_pnj').click(function(e){
		e.preventDefault();
		lap_pnj_fak=$('#lap_pnj_fak').val();
		lap_tgl_awal_pnj=$('#lap_tgl_awal_pnj').val();
		lap_tgl_akhir_pnj=$('#lap_tgl_akhir_pnj').val();

		$('#lap_pnj_fak').val("");
		$('#lap_tgl_awal_pnj').val("");
						$('#lap_tgl_akhir_pnj').val("")
						
		var tab=window.open('pro_lap_penjualan.php?lap_pnj_fak='+lap_pnj_fak+'&lap_tgl_awal_pnj='+lap_tgl_awal_pnj+'&lap_tgl_akhir_pnj='+lap_tgl_akhir_pnj,'_blank');
	})
}); //tag tutup jquery
// |================================================|
// |================FUNCTION========================|
// |================================================|
// ============================================================function file barang.php
		// function halaman barang
			function sub_hal_brg(sub){
				// alert(sub);
				$.ajax({
						url:"pro_barang.php",
						method:"get",
						data:"hal="+sub,
						cache:false,
						success:function(){
							// alert(sub);
							$("#view_brg").load("pro_barang.php?cs="+sub);

						}
					});
			}
		//function simpan barang 
			function simpan(){
				var brg_id=$("#brg_id").val();// id barang
				var stn_id=$("#stn_id").val();// id satuan
				
				var nm_ktg=$("#ktg_nama").val();// nama kategori
				var ktg=$("#ktg_id").val();// id kategori
				var nama=$("#nama").val().toUpperCase();// nama barang
				var hrg_jual=$("#hrg_jual").val();// harga jual
				var hrg_beli=$("#hrg_beli").val();// harga beli
				var ket=$("#ket").val();// keterangantrim
				// alert(ktg+"/"+nama+"/"+hrg_jual+"/"+hrg_beli+"/"+ket+"/"+brg_id+"/"+stn_id);
					if($.trim(nm_ktg)==""||$.trim(ktg)==""||$.trim(nama)==""||$.trim(hrg_jual)==""||
						$.trim(hrg_jual)==""||$.trim(hrg_beli)==""||$.trim(ket)==""){
						alert("Data Tidak Boleh Kosong!!");
					}else{
						// alert(ktg+"/"+nama+"/"+hrg_jual+"/"+hrg_beli+"/"+ket+"/"+brg_id+"/"+stn_id);
							$.ajax({
							url:"pro_barang.php",
							method:"get",
							data:"cs=insert&ktg="+ktg+"&stn_id="+stn_id+"&nama="+nama+"&hrg_jual="+hrg_jual+"&hrg_beli="+hrg_beli+"&ket="+ket+"&brg_id="+brg_id,
							cache:false,
							success:function(html){
								// alert(html);
								// alert(ktg+"/"+nama+"/"+hrg_jual+"/"+hrg_beli+"/"+ket+"/"+brg_id+"/"+stn_id);
								$("#ktg_nama").val("");
								$("#nama").val("");
								$("#hrg_jual").val("");
								$("#hrg_beli").val("");
								$("#ket").val("");
								$("#ktg_id").val("");
								$("#brg_id").val("");
								$("#stn_id").val("");
								$("#stn_nama").val("");
								// $("#view_brg").load("pro_barang.php?cs=select");
								// alert(ktg+"/"+nama+"/"+hrg_jual+"/"+hrg_beli+"/"+ket);
								}
							});
					}
				
				}// tag tutup simpan

		// function hapus barang
			function hapusbrg(id){
				var cf=confirm("Anda Yakin??");
				if(cf==true){
					// alert(id);
					$.ajax({
						url:"pro_barang.php",
						method:"get",
						data:"cs=delete&id="+id,
						success:function(){
							// alert(id);
							$("#view_brg").load("pro_barang.php?cs=select");
						}
					});
				}
			}// tag tutup hapusbrg

		// function ambil barang untuk edit
			function ambilbarang(b){
				// brg_id=$("#barang").val(b);	
				// alert(b);
				kd=$("#brg_id").val(b);
				// alert(kd);
				$.ajax({
					url:"pro_barang.php",
					data:"cs=ambilbarang&brg_id="+b,
					cache:false,
					success: function(e){
						// alert(b);
					// alert(e);	
					e=e.split("|");
					$("#nama").val(e[4]);
					$("#ktg_nama").val(e[3]);
					$("#hrg_jual").val(e[6]);
					$("#hrg_beli").val(e[5]);
					$("#ket").val(e[7]);
					$("#ktg_id").val(e[2]);

					$("#stn_id").val(e[8]);
					$("#stn_nama").val(e[9]);
					// $(".op").html('<option ="stn_id" value="'+e[8]+'">'+e[9]+'</option>');
					
					}
				}); // tutup ajax

				$("#view_brg").hide("slow");
				$("#form_brg").slideDown("slow");
			}

		// function wajib number
			function valid_angka_harga_jual(evt){
				var charcode= (evt.which) ? evt.which : event.keycode;
				if(charcode>31 &&(charcode <48||charcode>57)){
					alert("maaf harus angka");
					$("#hrg_jual").val("");
					return false;
				}
			return true;
			}// tag tutup number

			// function wajib number
			function valid_angka_harga_beli(evt){
				var charcode= (evt.which) ? evt.which : event.keycode;
				if(charcode>31 &&(charcode <48||charcode>57)){
					alert("maaf harus angka");
					$("#hrg_beli").val("");
					return false;
				}
			return true;
			}// tag tutup number

		// function cari kategori 
			function carikategori(){
				var ktg_nm=$("#ktg_nama").val();
				// alert(ktg_nama);
				$.ajax({
					url:"pro_barang.php",
					method:"get",
					data:"cs=cari_ktg&ktg_nm="+ktg_nm,
					cache:false,
					success:function(data){
						$("#cari_ktg").fadeIn();
						$("#cari_ktg").html(data);

					}
				});
			}// tag tutup cribarang

			function copyktg(ktg_id, ktg_nama){
				$("#ktg_id").val(ktg_id);
				$("#ktg_nama").val(ktg_nama);

			}

			// function cari kategori 
			function carisatuan(){
				var stn_nama=$("#stn_nama").val();
				// alert(ktg_nama);
				$.ajax({
					url:"pro_barang.php",
					method:"get",
					data:"cs=cari_satuan&stn_nama="+stn_nama,
					cache:false,
					success:function(data){
						$("#cari_stn").fadeIn();
						$("#cari_stn").html(data);

					}
				});
			}// tag tutup cribarang


			function copystn(stn_id, stn_nama){
				$("#stn_id").val(stn_id);
				$("#stn_nama").val(stn_nama);

			}

			function cek(a,b){
						console.log(a+","+b);
				}

//==========================================================function kategori.php
			// function halaman kategori
				function sub_hal_ktg(sub){
					// alert(sub);
					$.ajax({
							url:"pro_kategori.php",
							method:"get",
							data:"hal="+sub,
							cache:false,
							success:function(){
								// alert(sub);
								$("#view_ktg").load("pro_kategori.php?cs="+sub);

							}
						});
				}
			// function simpan kategori
				function simpanktg(){
					var nm_ktg=$("#nm_ktg").val().toUpperCase();
					var id_kategori=$("#id_kategori").val();
					// alert(ktg+"/"+nama+"/"+hrg_jual+"/"+hrg_beli+"/"+ket);
						if(nm_ktg==""){
							alert("Data Tidak Boleh Kosong!!");
						}else{
								$.ajax({
								url:"pro_kategori.php",
								method:"get",
								data:"cs=insert&nm_ktg="+nm_ktg+"&id_kategori="+id_kategori,
								cache:false,
								success:function(){
									$("#nm_ktg").val("");
									$("#id_kategori").val("");
									// $("#view_brg").load("pro_barang.php?cs=select");
									// alert(ktg+"/"+nama+"/"+hrg_jual+"/"+hrg_beli+"/"+ket);
									}
								});
						}
					
					}
			// function edit kategori
				function hapusktg(id_ktg){
					var cf=confirm("Anda Yakin??");
					if(cf==true){
						// alert(id_ktg);
						$.ajax({
							url:"pro_kategori.php",
							method:"get",
							data:"cs=delete&id_ktg="+id_ktg,
							success:function(){
								// alert(id_ktg);
								$("#view_ktg").load("pro_kategori.php?cs=select");
							}
						});
					}
				}

			// function edit kategori
				function editktg(id_ktg){
					// alert(id_ktg);
					// var ktg_id=$("#ktg_id").val(id_ktg);
					$.ajax({
						url:"pro_kategori.php",
						method:"GET",
						data:"cs=ambil_ktg&ktg_id="+id_ktg,
						cache:false,
						success:function(hasil){
							// alert(id_ktg);
							hasil=hasil.split("|");
							$("#id_kategori").val(hasil[0]);
							$("#nm_ktg").val(hasil[1]);
							$("#view_ktg").slideDown("slow");
							$("#form_ktg").show("slow");
							$("#view_ktg").hide("slow");
						}

					});
				}
// ======================================function satuan.php
			// function halaman satuan 
				function sub_hal_stn(sub){
						// alert(sub);
						$.ajax({
								url:"pro_satuan.php",
								method:"get",
								data:"hal="+sub,
								cache:false,
								success:function(){
									// alert(sub);
									$("#view_stn").load("pro_satuan.php?cs="+sub);

								}
							});
					}
				// function simpan satuan
					function simpanstn(){
						var nm_stn=$("#nm_stn").val().toUpperCase();
						var satuan_id=$("#satuan_id").val()
						// alert(stn+"/"+nama+"/"+hrg_jual+"/"+hrg_beli+"/"+ket);
							if(nm_stn==""){
								alert("Data Tidak Boleh Kosong!!");
							}else{
									$.ajax({
									url:"pro_satuan.php",
									method:"get",
									data:"cs=insert&nm_stn="+nm_stn+"&satuan_id="+satuan_id,
									cache:false,
									success:function(){
										$("#nm_stn").val("");
										$("#satuan_id").val("");
										// $("#view_stn").load("pro_barang.php?cs=select");
										// alert(stn+"/"+nama+"/"+hrg_jual+"/"+hrg_beli+"/"+ket);
										}
									});
							}
						
						}
				// function hapus satuan
					function hapusstn(id_stn){
						var cf=confirm("Anda Yakin??");
						if(cf==true){
							// alert(id_stn);
							$.ajax({
								url:"pro_satuan.php",
								method:"get",
								data:"cs=delete&id_stn="+id_stn,
								success:function(){
									// alert(id_stn);
									$("#view_stn").load("pro_satuan.php?cs=select");
								}
							});
						}
					}
				// function edit satuan
					function editstn(id_stn){
						// alert(id_stn);
						$.ajax({
							url:"pro_satuan.php",
							method:"GET",
							data:"cs=ambil_stn&stn_id="+id_stn,
							cache:false,
							success:function(hasil){
								hasil=hasil.split("|");
								$("#satuan_id").val(hasil[0]);
								$("#nm_stn").val(hasil[1]);

								$("#view_stn").slideDown("slow");
								$("#form_stn").show("slow");
								$("#view_stn").hide("slow");
							}

						});

					}

//===========================function file transaksi_pembelian.php
				//hitung append pemeblian
				function hitung_append_pbl(){
					hitung=$(".pbl_hn").length;
					// alert(hitung);
					if(hitung<=0){
						append();
					}
				} 
				// function form dinamis
					var no=0;
					function append(){
							var tambah=no+1;
							cp='<tr class="pbl_hn rm remove'+tambah+'">';
								cp+='<td width="14%"><input type="text" class="form-control nm_brg'+tambah+'" name="nm_brg[]" placeholder="Masukan Nama Barang'+tambah+'" onkeyup="cari_brg_beli('+tambah+')">';
								cp+='<input type="text" name="brg_beli_id[]" class="brg_beli_id'+tambah+' barang_fb" hidden="true" ><div class="pop_cari cari_brg_beli'+tambah+'"></div></td>';
								cp+='<td width="14%"><input type="text" class="form-control satuan'+tambah+'" name="satuan[]" placeholder="Satuan'+tambah+'"></td>';
								cp+='<td width="14%"><input type="text" class="nominal'+tambah+' form-control harga'+tambah+'" name="harga[]" placeholder="Harga'+tambah+'"></td>';
								cp+='<td width="14%"><input type="text" class="form-control jumbel'+tambah+' number"  name="jumbel[]" placeholder="Jumlah Beli'+tambah+'" onkeyup="total_bl('+tambah+'),numberbl(event,'+tambah+')" onkeypress="enter_jumbel_fb(event,'+tambah+')"></td>';
								cp+='<td width="14%"><input type="text" class="form-control diskon'+tambah+'" name="diskon[]" placeholder="diskon'+tambah+'" onkeyup="diskon_bl('+tambah+'),numberdis(event,'+tambah+')" onkeypress="enter_diskon_fb(event,'+tambah+')"></td>';
								cp+='<td width="14%"><input type="text" class="nominal'+tambah+' tt form-control subtot'+tambah+'" name="subtot[]" placeholder="Subtotal'+tambah+'"></td>';
								cp+='<td width="14%"><input type="text" class="nominal'+tambah+' parenttot'+tambah+'" name="parenttot[]" placeholder="parenttot'+tambah+'" hidden="hidden">';
								cp+='<button class="btn btn-danger" type="button" onclick="remove('+tambah+')"><span class="fa fa-fw fa-close"></span></button></td>';
							cp+='</tr>';
							$('.tbl').append(cp);
							// rupiahappend(tambah);
							getno(tambah);
							no++;
					}

				// validasi jika textbox jumlah beli di enter
				function enter_jumbel_fb(e,no){
							var charcode= (e.which) ? e.which : event.keycode;
							var jbl_fb=$(".jumbel"+no).val();
							if(charcode==13){
								// alert(no);
								if($.trim(jbl_fb)==""){
									alert("Jumlah Beli Tidak Boleh Kosong!!"+no);
									$(".jumbel"+no).focus();
								}else{
									// var barang=$(".barang").length;
									// var ketemu=
										$.ajax({
											url:"pro_cek_array_beli.php",
											type:"get",
											data:$(".barang_fb").serialize(),
											cache:false,
											success:function(html){
												// alert(html);
												if(html!=""){
													alert(html);
													$(".jumbel"+no).val("");
													$(".brg_beli_id"+no).val("");
													$(".nm_brg"+no).val("");
													$(".satuan"+no).val("");
													$(".harga"+no).val("");
													$(".nm_brg"+no).focus();

												}else{
													// alert(no);
													// $(".diskon"+no).css("border","1px solid red");
													$(".diskon"+no).css("background-color","#CDCDCD");
													// $(".jumbel"+no).css("border","none");
													$(".jumbel"+no).css("background-color","white");
													$(".diskon"+no).focus();
												}
											}
										});
								}
							}
				}//close tag enter_jumbel

				// validasi jika text diskon di enter
				function enter_diskon_fb(e,no){
					var charcode= (e.which) ? e.which : event.keycode;
							var brg_beli_id=$(".brg_beli_id"+no).val();
							// alert(pnj_brg_id);
							if(charcode==13){
						
										$.ajax({
											url:"pro_cek_array_beli.php",
											type:"get",
											data:$(".barang_fb").serialize(),
											cache:false,
											success:function(html){
												if(html!=""){
													alert(html);
													$(".diskon"+no).val("");
												}else{
													// alert(no);
													append();
													// $(".diskon"+no).css("border","1px solid");
													$(".diskon"+no).css("background-color","white");
													no++;
													// $(".nm_brg"+no).css("border","1px solid red");
													$(".nm_brg"+no).css("background-color","#CDCDCD");
													$(".nm_brg"+no).focus();
												}
											}
										});
							}
				}//close tag enter_diskon

				// function cari barang
					function cari_brg_beli(no){
						var nm_brg=$(".nm_brg"+no).val();
						// alert(nm_brg);
						$.ajax({
							url:"pro_trs_beli.php",
							method:"GET",
							data:"cs=cari_barang&nm_brg="+nm_brg+"&no="+no,
							cache:false,
							success:function(hasil){
								$(".cari_brg_beli"+no).css("min-width","70%");
								$(".cari_brg_beli"+no).show("slow");
								$(".cari_brg_beli"+no).html(hasil);

							}
						});
					}


				// copy data barang pembelian
				function copy_brg_beli(no,id_brg,nm_brg,stn_brg,brg_harga_jual){
					// alert(no+"/"+id_brg+"/"+nm_brg+"/"+stn_brg+"/"+brg_harga_jual+"/"+brg_stok);
					$(".cari_brg_beli"+no).hide("fast");
					$(".brg_beli_id"+no).val(id_brg);
					$(".nm_brg"+no).val(nm_brg);
					$(".satuan"+no).val(stn_brg);
					$(".harga"+no).val(brg_harga_jual);
					// $(".brg_stok"+no).val(brg_stok);
					$(".cari_brg_beli"+no).hide("fast");

					$(".jumbel"+no).focus();
					// $(".jumbel"+no).css("border","1px solid red");
					$(".jumbel"+no).css("background-color","#CDCDCD");
					// $(".nm_brg"+no).css("border","none");
					$(".nm_brg"+no).css("background-color","white");
				}

				// functionremove form dinamis pembelian
					function remove(no){
						// alert(no);
						$('.remove'+no).remove();
						no--;

					}

					
				// function fatur pembelian
					function faktur(){
						$.ajax({
							url:"pro_trs_beli.php",
							mehod:"GET",
							data:"cs=faktur",
							cache:false,
							success:function(fak){
								$("#pbl_id").val(fak);

								// alert(fak);
							}
						});
					}
				// =================admin================
				// function cari admin
					function cari_admin(){
						var nm_adm=$("#adm_nama").val();
						// alert(nm_adm);
						$.ajax({
							url:"pro_trs_beli.php",
							method:"GET",
							data:"cs=cari_admin&nm_adm="+nm_adm,
							cache:false,
							success:function(data){
								$("#cari_admin").fadeIn();
								$("#cari_admin").html(data);
							}
						});

					}

				// copy id dan nama admin
					function copyadm(a,b){
						$("#adm_nama").val(b);
						$("#adm_id").val(a);
						$("#cari_admin").fadeOut();

					}
				// =================supplier===================
					function cari_spl(){
						var nm_spl=$("#spl_nama").val();
						// alert(nm_spl);
						$.ajax({
							url:"pro_trs_beli.php",
							method:"GET",
							data:"cs=cari_spl&nm_spl="+nm_spl,
							cache:false,
							success:function(data){
								$("#cari_spl").fadeIn();
								$("#cari_spl").html(data);
							}
						});

					}
				//copy id dan nama supplier 
					function copyspl(a,b){
						// removeLineBreaks();
						// alert(a+"/"+b);
						$("#spl_nama").val(b);
						$("#spl_id").val(a);
						$("#cari_spl").fadeOut();
					}
				//function fadeout admi
					function fadeout(){
						$("#cari_admin").fadeOut();
					}
				// function fadeout di detail pembelian barang
					function fadeout_dt_brg(no){
						$(".cari_brg_beli"+no).fadeOut();
					}
				// function kalkulasi jumlh beli *harga
					function jumbel_har(no){
						var jumbel=$(".jumbel"+no).val();
						var harga=$('.harga'+no).val();
						var subtot=parseInt(jumbel)*parseInt(harga);
						if(!isNaN(subtot)){
							$(".subtot"+no).val(subtot);
						}
						
					} 

				// function diskon subtotal-diskon
					function diskon_bl(no){
						var parenttot=($(".parenttot"+no).val() !='' ? $(".parenttot"+no).val():0);
						// console.log("parenttot:"+parenttot); 

						var diskon=($(".diskon"+no).val() !='' ? $(".diskon"+no).val():0);
						// console.log("diskon:"+diskon);

						var harga=($(".harga"+no).val() !='' ? $(".harga"+no).val():0);
						// console.log("harga:"+harga);

						var jumbel=($(".jumbel"+no).val() !='' ? $(".jumbel"+no).val():0);
						// console.log("jumbel:"+jumbel);
						// alert(subtot+"/"+diskon);
						var distot=parseInt(parenttot)-parseInt(diskon);
						if(!isNaN(distot)){
							// alert(distot);
							$(".subtot"+no).val(distot);
							// console.log("diskon:"+distot);
							// total_bl();
							var altot=0;
							$(".tt").each(function(){
								altot +=parseFloat($(this).val());
								
							});
							// console.log("altotatal:"+altot);
							if(!isNaN(altot)){
								$("#total").val(altot);
								// $("#total_akhir").val(altot);
								// $("#diskon_akhir").val(0);
							}
							
						}


						// return distot;
					}
				// function rupiah append
					// function rupiahappend(no){
					// 	$(".nominal"+no).divide();
					// }
				// kalkulasi total
				function total_bl(no){
					// console.log("no:"+no);
					var harga=($(".harga"+no).val() !='' ? $(".harga"+no).val():0);
					// console.log("harga:"+harga);

					var jumbel=($(".jumbel"+no).val() !='' ? $(".jumbel"+no).val():0);
					// console.log("jumbel:"+jumbel);

					// diskon
					var diskon=($(".diskon"+no).val() !='' ? $(".diskon"+no).val():0);
					// console.log("diskon:"+diskon);

					var parenttot=($(".parenttot"+no).val() !='' ? $(".parenttot"+no).val():0);
					// console.log("parenttot:"+parenttot);

					var kaldis=parseInt(parenttot)-parseInt(diskon);
					// console.log("kaldis:"+kaldis);
					// end diskon

					var subtot=(parseInt(harga)*parseInt(jumbel))-parseInt(diskon);
					// console.log("subtotal:"+subtot);
					// if(harga&&jumbel){
					 // jumbel=jumbel.replace(/[^0-9]/g,'');
					
						if(!isNaN(subtot)){
							$(".subtot"+no).val(subtot);
							$(".parenttot"+no).val(subtot);
							var altot=0;
							$(".tt").each(function(){
								altot +=parseFloat($(this).val());
								
							});
							// console.log("altotatal:"+altot);
							if(!isNaN(altot)){
								$("#total").val(altot);
								// $("#total_akhir").val(altot);
								// $("#diskon_akhir").val(0);
							}
							
						}
					// }

					// if(diskon){
					// 		$(".subtot"+no).val(kaldis);
					// 	}
					
				}
		// function wajib number jumbel
			function numberbl(evt,num){
				var charcode= (evt.which) ? evt.which : event.keycode;
				if(charcode>31 &&(charcode <48||charcode>57)){
					alert("maaf harus angka");
					$(".jumbel"+num).val("");
					return false;
				}
			return true;
			}// tag tutup number

			// function wajib number jumbel
			function numberdis(evt,num){
				var charcode= (evt.which) ? evt.which : event.keycode;
				if(charcode>31 &&(charcode <48||charcode>57)){
					alert("maaf harus angka");
					$(".diskon"+num).val("");
					return false;
				}
			return true;
			}// tag tutup number

			function numberdisakhir(evt){
				var charcode= (evt.which) ? evt.which : event.keycode;
				if(charcode>31 &&(charcode <48||charcode>57)){
					alert("maaf harus angka");
					$("#diskon_akhir").val("");
					return false;
				}
			return true;
			}// tag tutup number

			function numberbyrakhir(evt){
				var charcode= (evt.which) ? evt.which : event.keycode;
				if(charcode>31 &&(charcode <48||charcode>57)){
					alert("maaf harus angka");
					$("#bayar_akhir").val("");
					return false;
				}
			return true;
			}// tag tutup number


			


			function getno(no){
				
			
				// warna fokus di diskon ketika di klik
				$(".diskon"+no).click(function(e){
						$(".jumbel"+no).css("background-color","white");
						$(".diskon"+no).css("background-color","#CDCDCD");

				});			
			}

// ===================================function admin.php
			// function hapus admin
			function hapusadm(adm_id_m){
				var cf=confirm("Anda Yakin??");
				if(cf==true){
					// alert(id);
					$.ajax({
						url:"pro_admin.php",
						method:"get",
						data:"cs=delete&adm_id_m="+adm_id_m,
						success:function(){
							// alert(id);
							$("#view_adm").load("pro_admin.php?cs=select");
						}
					});
				}
			}// tag tutup hapusadmin

			// function ambil barang untuk edit
			function ambiladm(adm_id_m){
				$.ajax({
					url:"pro_admin.php",
					data:"cs=ambiladm&adm_id_m="+adm_id_m,
					cache:false,
					success: function(e){
					// alert(e);	
					e=e.split("|");
					$("#adm_id_m").val(e[1]);
					// $("#sts_id").append('<option value="'+e[2]+'">'+e[3]+'</option>');
					$(".nn").val(e[2]);
					$(".nn").text(e[3]);
					$("#adm_nama_m").val(e[4]);
					$("#adm_pass").val(e[5]);
					$("#adm_konfir").val(e[5]);
					$("#adm_id_m").val(adm_id_m);
					}
				}); // tutup ajax

				$("#view_adm").hide("slow");
				// $("#view_adm").hide("slow");
				$("#form_adm").show("slow");
			}
// =========================================function file customer.php
// function hapus costumer
		function hapuscus(id_cus){
			// alert(id_cus);
			var com=confirm("Anda Yakin Akan Menghapus Data Ini??");
			if(com==true){
				$.ajax({
					url:"pro_customer.php",
					type:"get",
					data:"cs=delete&id_cus="+id_cus,
					cache:false,
					success:function(html){
						// alert(html);
						$("#view_cus").load("pro_customer.php","cs=select");
					}
				})
			}
			
		}
//function edit cutomer
	function editcus(cus_id){
		$.ajax({
			url:"pro_customer.php",
			type:"get",
			data:"cs=ambilcus&cus_id="+cus_id,
			cache:false,
			success:function(html){
				// alert(html);
				html=html.split("|");
				$("#cus_id").val(html[0]);
				$("#nm_cus").val(html[1]);
				$("#ket_cus").val(html[2]);
				$("#view_cus").hide("slow");
				$("#form_cus").show("slow");
			}
		});

	} 
// =====================================================funnction frm_supplier.php
// function hapus data supplier
	function hapusspl(spl_id){
		var cf=confirm("Anda Yakin Akan Menghapus Data Ini??");
		if(cf==true){
			$.ajax({
				url:"pro_supplier.php",
				type:"get",
				data:"cs=delete&spl_id="+spl_id,
				cache:false,
				success:function(html){
					// alert(html);
					$("#view_spl").load("pro_supplier.php","cs=select");
				}
			});
		}
	}
// function ambil data supplier
	function editspl(spl_id){
				$.ajax({
					url:"pro_supplier.php",
					type:"get",
					data:"cs=ambil_spl&spl_id="+spl_id,
					cache:false,
					success:function(html){
						// alert(html);
						html=html.split("|");
						$("#form_spl").show("slow");
						$("#view_spl").hide("slow");
						$("#frm_spl_id").val(html[0]);
						$("#frm_spl_nama").val(html[1]);
						$("#frm_spl_telp").val(html[3]);
						$("#frm_spl_ket").val(html[2]);

					}
				});
		}

	// function valid anggka spl_tlp
			function valid_angka_spl_tlp(evt){
				var charcode= (evt.which) ? evt.which : event.keycode;
				if(charcode>31 &&(charcode <48||charcode>57)){
					alert("maaf harus angka");
					$("#frm_spl_telp").val("");
					return false;
				}
			return true;
			}// tag tutup number
// ===================================================function file frm_trs_penjualan.php
// faktur penjualan
	function fakpnj(){
		$.ajax({
			url:"pro_trs_penjualan.php",
			type:"get",
			data:"cs=faktur",
			cache:false,
			success:function(html){
				$("#frm_pnj_id").val(html);
			}
		})
	}
// function cari admin
	function pnj_cari_admin(){
		var nm_adm=$("#frm_pnj_adm_nm").val();
		// alert(nm_adm);
		$.ajax({
			url:"pro_trs_penjualan.php",
			method:"GET",
			data:"cs=cari_admin&nm_adm="+nm_adm,
			cache:false,
			success:function(data){
				$("#frm_pnj_cari_admin").fadeIn();
				$("#frm_pnj_cari_admin").html(data);
			}
		});
	}
// function cari admin
	function pnj_cari_cs(){
		var nm_cs=$("#frm_pnj_cs_nm").val();
		// alert(nm_adm);
		$.ajax({
			url:"pro_trs_penjualan.php",
			method:"GET",
			data:"cs=cari_cs&nm_cs="+nm_cs,
			cache:false,
			success:function(data){
				$("#frm_pnj_cari_cs").fadeIn();
				$("#frm_pnj_cari_cs").html(data);
			}
		});
	}
// copy id dan nama admin ke formpenjualan
	function pnjcopyadm(a,b){
		$("#frm_pnj_adm_nm").val(b);
		$("#frm_pnj_adm_id").val(a);
		$("#frm_pnj_cari_admin").fadeOut();
	}//close tag pnjcopyadm

// copy id dan nama supplier ke formpenjualan
	function pnjcopycst(a,b){
		$("#frm_pnj_cs_nm").val(b);
		$("#frm_pnj_cs_id").val(a);
		$("#frm_pnj_cari_cs").fadeOut();
	}//close tag pnjcopyspl

// function form dinamis
	var pnj_no=0;
	function pnj_append(){
		var pnj_tambah=pnj_no+1;
			pnj_cp='<tr class="pnj_hn pnj_remove'+pnj_tambah+' pnj_rm" >';
				pnj_cp+='<td width="14%"><input type="text" class="form-control pnj_nm_brg'+pnj_tambah+'" name="pnj_nm_brg[]" placeholder="Masukan Nama Barang'+pnj_tambah+'" onkeyup="pnj_cari_brg('+pnj_tambah+')">';
				pnj_cp+='<input type="text" name="pnj_brg_id[]" class="pnj_brg_id'+pnj_tambah+'  barang" hidden="true"><div class="pop_cari pnj_cari_brg'+pnj_tambah+'"></div></td>';
				pnj_cp+='<td width="14%"><input type="text" class="form-control pnj_satuan'+pnj_tambah+'" name="pnj_satuan[]" placeholder="Satuan'+pnj_tambah+'"></td>';
				pnj_cp+='<td width="14%"><input type="text" class="pnj_nominal'+pnj_tambah+' form-control pnj_harga'+pnj_tambah+'" name="pnj_harga[]" placeholder="Harga'+pnj_tambah+'"></td>';
				pnj_cp+='<td width="14%"><input type="text"  id="ss-'+pnj_tambah+'"  class="form-control sd pnj_jumbel'+pnj_tambah+' pnj_number"  name="pnj_jumbel[]" placeholder="Jumlah Beli'+pnj_tambah+'" onkeyup="pnj_total('+pnj_tambah+'),pnj_number(event,'+pnj_tambah+')" onkeypress="enter_jumbel(event,'+pnj_tambah+')">';
				pnj_cp+='<input type="text" class="pnj_stok'+pnj_tambah+'"  name="pnj_stok[]" placeholder="pnj_stok'+pnj_tambah+'" hidden="true"></td>';
				pnj_cp+='<td width="14%"><input type="text" class="form-control pnj_diskon'+pnj_tambah+'" name="pnj_diskon[]" placeholder="diskon'+pnj_tambah+'" onkeyup="pnj_diskon('+pnj_tambah+'),pnj_numberdis(event,'+pnj_tambah+')" onkeypress="enter_diskon(event,'+pnj_tambah+')"  onclick="click_diskon('+pnj_tambah+')"></td>';
				pnj_cp+='<td width="14%"><input type="text" class="pnj_nominal'+pnj_tambah+' pnj_tt form-control pnj_subtot'+pnj_tambah+'" name="pnj_subtot[]" placeholder="Subtotal'+pnj_tambah+'"></td>';
				pnj_cp+='<td width="14%"><input type="text" class="pnj_nominal'+pnj_tambah+' pnj_parenttot'+pnj_tambah+'" name="pnj_parenttot[]" placeholder="parenttot'+pnj_tambah+'" hidden="true">';
				pnj_cp+='<button class="btn btn-danger" type="button" onclick="pnj_remove('+pnj_tambah+')"><span class="fa fa-fw fa-close"></span></button></td>';
			pnj_cp+='</tr>';
			$('.pnj_tbl').append(pnj_cp);
			pnj_no++;
	}//close tag pnj_append

// functionremove form dinamis pembelian
	function pnj_remove(pnj_no){
		// alert(no);
		$('.pnj_remove'+pnj_no).remove();
		pnj_no--;
		// alert(pnj_no);
	}//close tag pnj_remove

// hitung jumlah element sebelum di apppend
	function hitung_append(hitung){
		hitung=$(".pnj_hn").length;
		// alert(hitung);
		if(hitung<=0){
			pnj_append();
		}
	}//close tag hitung_append

// function cari barang
	function pnj_cari_brg(pnj_no){
		var pnj_nm_brg=$(".pnj_nm_brg"+pnj_no).val();
		// alert(pnj_nm_brg);
			$.ajax({
				url:"pro_trs_penjualan.php",
				type:"get",
				data:"cs=cari_barang&pnj_nm_brg="+pnj_nm_brg+"&pnj_no="+pnj_no,
				cache:false,
				success:function(hasil){
					$(".pnj_cari_brg"+pnj_no).css("min-width","70%");
					$(".pnj_cari_brg"+pnj_no).show("slow");
					$(".pnj_cari_brg"+pnj_no).html(hasil);
				}
			});
	}//close tag pnj_cari_brg

// copy data barang pembelian
	function pnj_copy_brg(no,id_brg,nm_brg,stn_brg,brg_harga_jual,brg_stok){
		// alert(no+"/"+id_brg+"/"+nm_brg+"/"+stn_brg+"/"+brg_harga_jual+"/"+brg_stok);
		$(".pnj_cari_brg"+no).hide("fast");
		$(".pnj_brg_id"+no).val(id_brg);
		$(".pnj_nm_brg"+no).val(nm_brg);
		$(".pnj_satuan"+no).val(stn_brg);
		$(".pnj_harga"+no).val(brg_harga_jual);
		$(".pnj_stok"+no).val(brg_stok);
		// $(".brg_stok"+no).val(brg_stok);
		$(".pnj_cari_brg"+no).hide("fast");

		$(".pnj_jumbel"+no).focus();
		// $(".jumbel"+no).css("border","1px solid red");
		$(".pnj_jumbel"+no).css("background-color","#CDCDCD");
		// $(".nm_brg"+no).css("border","none");
		$(".pnj_nm_brg"+no).css("background-color","white");
	}//close tag pnj_copy_brg

// kalkulasi totalpenjualan
	function pnj_total(no){
		// $(".sd").keyup(function() {
			// });
		// console.log("no:"+no);
		var pnj_harga=($(".pnj_harga"+no).val() !='' ? $(".pnj_harga"+no).val():0);
		// console.log("harga:"+harga);

		var pnj_jumbel=($(".pnj_jumbel"+no).val() !='' ? $(".pnj_jumbel"+no).val():0);
		// console.log("jumbel:"+jumbel);

		// diskon
		var pnj_diskon=($(".pnj_diskon"+no).val() !='' ? $(".pnj_diskon"+no).val():0);
		// console.log("diskon:"+diskon);

		var pnj_parenttot=($(".pnj_parenttot"+no).val() !='' ? $(".pnj_parenttot"+no).val():0);
		// console.log("parenttot:"+parenttot);

		var pnj_kaldis=parseInt(pnj_parenttot)-parseInt(pnj_diskon);
		// console.log("kaldis:"+kaldis);
		// end diskon

		var pnj_subtot=(parseInt(pnj_harga)*parseInt(pnj_jumbel))-parseInt(pnj_diskon);
		// console.log("subtotal:"+subtot);
		// if(harga&&jumbel){
		// jumbel=jumbel.replace(/[^0-9]/g,'');
		var pnj_stok=$(".pnj_stok"+no).val();
		var stok_int=parseInt(pnj_stok);
		var jumbel_int=parseInt(pnj_jumbel);

		if(jumbel_int>stok_int){
			$(".pnj_jumbel"+no).val("");
			alert("Maaf Barang Tidak Mencukupi Silahkan Cek Persedian Barang Anda!!");
		}else{
						$.ajax({
							url:"pro_cek_array.php",
							type:"get",
							data:$(".barang").serialize(),
							cache:false,
							success:function(html){
								if(html!=""){
									alert(html);
									$(".pnj_harga"+no).val("");
									$(".pnj_jumbel"+no).val(""); 
									$(".pnj_stok"+no).val("");
									$(".pnj_satuan"+no).val("");
									$(".pnj_brg_id"+no).val("");
									$(".pnj_nm_brg"+no).val("");
									$(".pnj_nm_brg"+no).focus();
								}else{
									if(!isNaN(pnj_subtot)){
											$(".pnj_subtot"+no).val(pnj_subtot);
											$(".pnj_parenttot"+no).val(pnj_subtot);
											var pnj_altot=0;

											$(".pnj_tt").each(function(){
											pnj_altot +=parseFloat($(this).val());					
											});
											// console.log("altotatal:"+altot);
										if(!isNaN(pnj_altot)){
											$("#frm_pnj_tot").val(pnj_altot);
											$("#frm_pnj_total_akhir").val(pnj_altot);
											$("#frm_pnj_diskon_akhir").val(0);
										}	
									}
								}
							}
						});
		}	
	}//close tag pnj_total

// function wajib number jumbel penjualan
	function pnj_number(evt,num){
		var charcode= (evt.which) ? evt.which : event.keycode;
		if(charcode>31 &&(charcode <48||charcode>57)){
			alert("maaf harus angka");
			$(".pnj_jumbel"+num).val("");
			return false;
			}
		return true;
	}// tag tutup number

// function diskon subtotal-diskon
	function pnj_diskon(no){
		var pnj_parenttot=($(".pnj_parenttot"+no).val() !='' ? $(".pnj_parenttot"+no).val():0);
		// console.log("pnj_parenttot:"+pnj_parenttot); 
		var pnj_diskon=($(".pnj_diskon"+no).val() !='' ? $(".pnj_diskon"+no).val():0);
		// console.log("pnj_diskon:"+pnj_diskon);
		var pnj_harga=($(".pnj_harga"+no).val() !='' ? $(".pnj_harga"+no).val():0);
		// console.log("pnj_harga:"+pnj_harga);
		var pnj_jumbel=($(".pnj_jumbel"+no).val() !='' ? $(".pnj_jumbel"+no).val():0);
		// console.log("pnj_jumbel:"+pnj_jumbel);
		// alert(subtot+"/"+pnj_diskon);
		var pnj_distot=parseInt(pnj_parenttot)-parseInt(pnj_diskon);
		if(!isNaN(pnj_distot)){
			// alert(distot);
			$(".pnj_subtot"+no).val(pnj_distot);
			// console.log("pnj_diskon:"+distot);
			// total_bl();
			var pnj_altot=0;
			$(".pnj_tt").each(function(){
				pnj_altot +=parseFloat($(this).val());	
			});
			// console.log("altotatal:"+altot);
			if(!isNaN(pnj_altot)){
				$("#frm_pnj_tot").val(pnj_altot);
				$("#frm_pnj_total_akhir").val(pnj_altot);
				$("#frm_pnj_diskon_akhir").val(0);
			}				
		}
	}//close tag pnj_diskon

// function wajib number jumbel
	function pnj_numberdis(evt,num){
		var charcode= (evt.which) ? evt.which : event.keycode;
		if(charcode>31 &&(charcode <48||charcode>57)){
			alert("maaf harus angka");
			$(".pnj_diskon"+num).val("");
			return false;
		}
	return true;
	}// tag tutup number

// validasi jika textbox jumlah beli di enter
function enter_jumbel(e,no){
			var charcode= (e.which) ? e.which : event.keycode;
			var jbl=$(".pnj_jumbel"+no).val();
			if(charcode==13){
				// alert(no);
				if($.trim(jbl)==""){
					alert("Jumlah Beli Tidak Boleh Kosong!!");
					$(".pnj_jumbel"+no).focus();
				}else{
					// var barang=$(".barang").length;
					// var ketemu=
						$.ajax({
							url:"pro_cek_array.php",
							type:"get",
							data:$(".barang").serialize(),
							cache:false,
							success:function(html){
								// alert(html);
								if(html!=""){
									alert(html);
								}else{
									// no++;
									// alert(no);
									// $(".diskon"+no).css("border","1px solid red");
									$(".pnj_diskon"+no).css("background-color","#CDCDCD");
									// $(".jumbel"+no).css("border","none");
									$(".pnj_jumbel"+no).css("background-color","white");
									$(".pnj_diskon"+no).focus();

								}
							}
						});
				}
			}
}//close tag enter_jumbel

// validasi jika text diskon di enter
function enter_diskon(e,no){
	var charcode= (e.which) ? e.which : event.keycode;
			var pnj_brg_id=$(".pnj_brg_id"+no).val();
			// alert(pnj_brg_id);
			pnj_stok=$(".pnj_stok"+no).val();
			pnj_stoka=parseInt(pnj_stok);
			pnj_jumbel=$(".pnj_jumbel"+no).val();
			pnj_jumbela=parseInt(pnj_jumbel);
			if(charcode==13){
				// ajax cek stok
				if(pnj_jumbela>pnj_stoka){
					$(".pnj_jumbel"+no).val("");
					alert("Maaf Barang Kurang!!");
					
				}else if(pnj_stoka==0){
					$(".pnj_jumbel"+no).val("");
					alert("Maaf Barang Kurang!!");

				}else if($.trim(pnj_jumbela)==""){
					$(".pnj_jumbel"+no).focus();
					alert("Jumlah Beli Tidak Boleh Kosong!!");
					
				}else{
						$.ajax({
							url:"pro_cek_array.php",
							type:"get",
							data:$(".barang").serialize(),
							cache:false,
							success:function(html){
								if(html!=""){
									alert(html);
								}else{
									// alert(no);
									pnj_append();
									// $(".diskon"+no).css("border","1px solid");
									$(".pnj_diskon"+no).css("background-color","white");
									no++;
									// $(".nm_brg"+no).css("border","1px solid red");
									$(".pnj_nm_brg"+no).css("background-color","#CDCDCD");
									$(".pnj_nm_brg"+no).focus();
								}
							}
						});

				}
			
			}
}//close tag enter_diskon

// pewarnaan jika textbox diskon diklik
function click_diskon(no){
	$(".pnj_jumbel"+no).css("background-color","white");
	$(".pnj_diskon"+no).css("background-color","#CDCDCD");
}//close tag click_diskon

function pnj_numberdisakhir(evt){
	var charcode= (evt.which) ? evt.which : event.keycode;
	if(charcode>31 &&(charcode <48||charcode>57)){
		alert("maaf harus angka");
		$("#frm_pnj_diskon_akhirfrm_pnj_bayar_akhir").val("");
		return false;
	}
	return true;
}// tag tutup number

function pnj_numberbyrakhir(evt){
	var charcode= (evt.which) ? evt.which : event.keycode;
	if(charcode>31 &&(charcode <48||charcode>57)){
		alert("maaf harus angka");
		$("#frm_pnj_bayar_akhir").val("");
		return false;
	}		
	return true;
}// tag tutup number
// =============================================================================filel frm_laporan.php
// function cari kategori
function lpr_carikategori(){
	var lpr_ktg_nama=$('#lpr_ktg_nama').val();
	$.ajax({
		url:'pro_laporan.php',
		type:'get',
		data:"cs=ambil_ktg&lpr_ktg_nama="+lpr_ktg_nama,
		cache:false,
		success:function(html){
			console.log(lpr_ktg_nama);
			$('#lpr_cari_ktg').show();
			$('#lpr_cari_ktg').load('pro_laporan.php?cs=ambil_ktg&lpr_ktg_nama='+lpr_ktg_nama);
		}

	});
}

// function cari nama barang
function lpr_caribarang(){
	var lap_brg_nm=$('#lap_brg_nm').val();
	$.ajax({
		url:'pro_laporan.php',
		type:'get',
		data:"cs=ambil_brg&lap_brg_nm="+lap_brg_nm,
		cache:false,
		success:function(html){
			// alert(lap_brg_nm);
			$('#lpr_cari_barang').show();
			$('#lpr_cari_barang').load('pro_laporan.php?cs=ambil_brg&lap_brg_nm='+lap_brg_nm);
		}

	});
}

// function ambil data kategori
function lpr_copy_ktg(lpr_ktg_id,lpr_ktg_nama){
	$('#lpr_ktg_id').val(lpr_ktg_id);
	$('#lpr_ktg_nama').val(lpr_ktg_nama);
	$('#lpr_cari_ktg').hide();

}

// function ambil data barang
function lpr_copy_brg(lpr_brg_id,lap_brg_nm){
	$('#lpr_brg_id').val(lpr_brg_id);
	$('#lap_brg_nm').val(lap_brg_nm);
	$('#lpr_cari_barang').hide();

}