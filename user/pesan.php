<?php
if (isset($_GET['no_items'])){
    $no_items = $_GET['no_items'];

    $query = mysqli_query($koneksi, "SELECT * FROM tb_items WHERE no_items='$no_items'");
    $data = mysqli_fetch_array($query);
    ?>
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <h4>Detail Wisata</h4>
            <form id="pesan_proses" action="" method="post" autocomplete="off">
                <input type="" name="id_cust" value="<?= $_SESSION['id_cust'] ?>" hidden>
                <input type="" name="no_items" value="<?= $no_items ?>" hidden>
                <input type="" id="harga" name="harga" value="<?= $data['harga'] ?>" onkeyup="sum();" hidden>
                <div class="mt-2">
                    <label for="jmlh_tiket" class="form-label">Jumlah Tiket</label>
                    <input type="number" name="jmlh_tiket" id="jmlh_tiket" class="form-control"
                        placeholder="Masukkan Jumlah Pesan" onkeyup="sum();" required>
                </div>
                <div class="mt-2">
                    <label for="tgl_berangkat" class="form-label">Tanggal Keberangkatan</label>
                    <input type="date" name="tgl_berangkat" id="tgl_berangkat" class="form-control"
                        placeholder="Masukkan Tanggal Keberangkatan" required>
                </div>
                <div class="mt-2">
                    <label for="via_bayar" class="form-label">Metode Bayar</label>
                    <select name="via_bayar" id="via_bayar" class="form-select" required>
                        <option value="" selected hidden>Pilih Metode Pembayaran</option>
                        <option value="BCA">BCA</option>
                        <option value="BRI">BRI</option>
                        <option value="BNI">BNI</option>
                        <option value="OVO">OVO</option>
                        <option value="GOPAY">GO-PAY</option>
                    </select>
                </div>
                <div class="mt-2">
                    <label for="biaya_admin" class="form-label">Biaya Admin</label>
                    <input type="number" name="biaya_admin" id="biaya_admin" class="form-control"
                        placeholder="Biaya Admin" onkeyup="sum();" readonly>
                </div>
                <div class="mt-2">
                    <label for="total" class="form-label">Total</label>
                    <input type="number" name="total" id="total" class="form-control" placeholder="Total" readonly>
                </div>
                <input type="submit" value="Pesan" name="pesan" class="btn btn-primary mt-2" onclick="insert();">
            </form>
        </div>
    </div>
</div>
<?php
}
?>
<script type="text/javascript">
function sum() {
    let harga = document.getElementById('harga').value;
    let a = 2 / 100;
    let jumlah = document.getElementById('jmlh_tiket').value;
    let biaya_admin = (parseInt(harga) * parseInt(jumlah)) * a;
    let result = parseInt(harga) * parseInt(jumlah) + parseInt(biaya_admin);
    if (!isNaN(result)) {
        document.getElementById('total').value = result;
    }
    if (!isNaN(biaya_admin)) {
        document.getElementById('biaya_admin').value = biaya_admin;
    }
}
// Prevent form from submit or refresh
let form = document.getElementById("pesan_proses");

function handleForm(event) {
    event.preventDefault();
}
form.addEventListener('submit', handleForm);
// Function
function insert() {
    $(document).ready(function() {
        $.ajax({
            // Action
            url: 'pesan_proses.php',
            // Method
            type: 'POST',
            data: {
                // Get value
                id_cust: $("input[name=id_cust]").val(),
                no_items: $("input[name=no_items]").val(),
                jmlh_tiket: $("input[name=jmlh_tiket]").val(),
                tgl_berangkat: $("input[name=tgl_berangkat]").val(),
                via_bayar: $("select[name=via_bayar]").val(),
                biaya_admin: $("input[name=biaya_admin]").val(),
                total: $("input[name=total]").val(),
                action: "insert"
            },
            success: function(response) {
                // Response is the output of action file
                if (response == 1) {
                    alert(
                        "Transaksi Berhasil, untuk melihat rincian pembelian kunjungi bagian detail"
                    );
                    window.location.replace('indexs.php?page=home');
                }
            }
        });
    });
}
</script>