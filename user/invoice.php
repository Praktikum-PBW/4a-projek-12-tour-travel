<?php
    if(isset($_GET['kd_transaksi'])){
    $kd_transaksi = $_GET['kd_transaksi'];
    
    $query = mysqli_query($koneksi, "SELECT * FROM tb_transaksi JOIN tb_user ON tb_transaksi.user_id = tb_user.id_cust JOIN tb_items ON tb_transaksi.no_items = tb_items.no_items WHERE kd_transaksi ='$kd_transaksi'");
    $data = mysqli_fetch_array($query);

    if (mysqli_num_rows($query) == 1) {
?>
<div class="card" style="background-color: #79717A; color: white">
    <div class="card-body">
        <div class="container mb-5 mt-3">
            <div class="row d-flex align-items-baseline">
                <div class="col-xl-9">
                    <p style="color: white;font-size: 20px;">Invoice &gt;&gt;
                        <strong><?= $data['kd_transaksi']?></strong>
                    </p>
                </div>
            </div>
            <div class="container">
                <div class="col-md-12">
                    <div class="text-center">
                        <p class="pt-2">T&T</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-8">
                        <ul class="list-unstyled">
                            <li class="text-muted"><span style="color: white;">Pemesan :</span> <span
                                    style="color: white;"><?= $data['nama_cust']?></span>
                            </li>
                            <li class="text-muted"><span style="color: white;"><?= $data['alamat']?></span></li>
                            <li class="text-muted"><span style="color: white;">Indonesia</span></li>
                            <li class="text-muted"><span style="color: white;"> <?= $data['no_telp']?></span></li>
                        </ul>
                    </div>
                    <div class="col-xl-4">
                        <span style="color: white;" class="fw-bold">Invoice
                        </span>
                        <ul class="list-unstyled">
                            <li class="text-muted"><span style="color: white;" class="fw-bold">ID User:
                                    <?= $_SESSION['id_cust'] ?>
                                </span></li>
                            <li class="text-muted"><span style="color: white;" class="fw-bold">Creation Date:
                                    <?= $data['waktu_pesan']?></span></li>
                        </ul>
                    </div>
                </div>
                <div class="row my-2 justify-content-center">
                    <div class="col-md-2 mb-4 mb-md-0">
                        <div class="
                        bg-image
                        ripple
                        rounded-5
                        mb-4
                        overflow-hidden
                        d-block
                        " data-ripple-color="light">
                            <img src="../assets/images/<?= $data['thumbnail'] ?>" width="250px" height="150px"
                                alt="Elegant shoes and shirt" />
                            <a href="#!">
                                <div class="hover-overlay">
                                    <div class="mask" style="background-color: hsla(0, 0%, 98.4%, 0.2)"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md mb-4 mb-md-0">
                        <p class="fw-bold"><?= $data['tujuan_wisata'] ?></p>
                        <p class="mb-1">
                            <span class="me-2" style="color: white;">Tanggal
                                Berangkat</span><span style="padding-left: 10px; color:white;">:</span>
                            <span><?= $data['tgl_berangkat'] ?></span>
                        </p>
                        <p class="mb-1">
                            <span class="me-2">Jam
                                Berangkat</span><span style="padding-left: 37px;">:</span>
                            <span><?= $data['jam_berangkat'] ?></span>
                        </p>
                        <p class="mb-1">
                            <span class="me-2">Jam
                                Tiba</span><span style="padding-left: 78.5px;">:</span>
                            <span><?= $data['jam_tiba'] ?></span>
                        </p>
                        <p class="mb-1">
                            <span class="me-2">Jumlah Tiket</span>
                            <span style="padding-left: 47.5px;">:</span> <span><?= $data['jmlh_tiket'] ?></span>
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xl-8">
                        <p class="ms-3">Metode Pembayaran :</p>
                        <p style="font-size: 20px;" class="ms-3"><?= $data['via_bayar'] ?></p>
                        <p style="font-size: 30px;" class="ms-3"><i class=" fas fa-phone"></i><?= $data['va']?></p>
                    </div>
                    <div class="col-xl-3 mt-5">
                        <p class="text-black float-start"><b><span style="font-size: 30px;"
                                    class="text-black me-3">Total</span>
                                <br></b><span style="font-size: 30px;">Rp.
                                <?=number_format($data['total'])?></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    } else {
        header("Location:indexs.php?page=home");
    }
} else {
    header("Location:indexs.php?page=home");
}
?>