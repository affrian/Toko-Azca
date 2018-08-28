<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
    <!-- PHP untuk memproses data dalam bentuk array yang dikirim oleh form -->
<?php
if(!empty($_POST['alltotal'])){
    echo '<pre>';
    echo 'Harga satuan:';
    print_r($_POST['satuan']);
    echo 'Harga jasa:';
    print_r($_POST['jasa']);
    echo 'Sub total:';
    print_r($_POST['subtotal']);
    echo 'All total: '.$_POST['alltotal'];
    echo '</pre>';
    exit;
}
?>

<!-- HTML -->
<form id="data">
    <div id="box">
        <p> Harga satuan : <input name="satuan[]" type="text" id="satuan-0" class="hitung"> </p>
        <p> Harga jasa : <input name="jasa[]" type="text" id="jasa-0" class="hitung"> </p>
        <p> Sub total (Tidak di isi) : <input name="subtotal[]" type="text" id="total-0" class="total" readonly="readonly"> </p>
    </div>
    <p> All total (Tidak di isi) : <input name="alltotal" type="text" id="total" readonly="readonly"> </p>
    <button id="tambah">Tambah</button>
    <button id="simpan">Simpan</button>
</form>
<div id="output"></div>

<!-- jQuery -->
<script src="../assets/jquery-3.2.1.js"></script><!-- jquery -->
<script>
    $(document).ready(function(e){
        // alert(e);
        // proses menambah inputan
        $('#tambah').click(function() {
            // alert(e);
            // var i = $('input').size() + 1,
            var i=0;
                input = '<div id="box' + i + '"><a href="#" id="hapus" color="red">hapus</a>';
                input += '<p> Harga satuan : <input name="satuan[]" type="text" id="satuan-' + i + '" class="hitung"> </p>';
                input += '<p> Harga jasa : <input name="jasa[]" type="text" id="jasa-' + i + '" class="hitung"> </p>';
                input += '<p> Sub total (Tidak di isi) : <input name="subtotal[]" type="text" id="total-' + i + '" class="total" readonly="readonly"> </p>';
                input += '</div>';

            $('#box').append(input);

            i++;
            // console.log(i);
            return false;

        });

        // proses menghapus inputan
        $('body').on('click', '#hapus', function() {

            $(this).parent('div').remove();

        });

        // proses menghitung total value inputan
        $('body').on('focus', '.hitung', function() {
            var aydi = $(this).attr('id'),
                berhitung = aydi.split('-');
            $(this).keydown(function() {
                // setTimeout(function() {
                    var satuan = ($('#satuan-' + berhitung[1]).val() != '' ? $('#satuan-' + berhitung[1]).val() : 0),
                        jasa = ($('#jasa-' + berhitung[1]).val() != '' ? $('#jasa-' + berhitung[1]).val() : 0),
                        subtotal = parseInt(satuan) + parseInt(jasa);
                    if (!isNaN(subtotal)) {
                        $('#total-' + berhitung[1]).val(subtotal);
                        var alltotal = 0;
                        $('.total').each(function(){
                            alltotal += parseFloat($(this).val());
                        });
                        $('#total').val(alltotal);
                    }
                // }, 50);
            });
        });

        // proses untuk mengirim semua data inputan yang ada di form menggunakan jquery POST atau GET ke server
        $('#simpan').click(function() {
            // contoh => var url_proses = proses.php
            var url_proses = "<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>";
            $.post(url_proses, $("#data").serialize(), function(response) {
                $('#output').html(response);
            });
            return false;
        });
    });

</script>
</body>
</html>