<h1 class="mt-2 ms-2">Selamat Datang, <?=$_SESSION['nama_cust'] ?>!</h1>
<hr style="color: black;">
<!-- Status Box -->
<div class="row ms-2 me-4">
    <div class="col-md-3 m-2">
        <a style="color: black;
    text-decoration: none;" href="index.php?page=user" id="dataDashboard">
            <div style="background-color: white;"
                class="row p-2 shadow-sm d-flex justify-content-around align-items-center rounded">
                <div class="col-8">
                    <?php
                    $dataUser = mysqli_query($koneksi, "SELECT * FROM tb_user");
                    $dataUser = mysqli_num_rows($dataUser);
                    ?>
                    <h3 class="fs-2"><?= $dataUser ?></h3>
                    <p class="fs-5 fw-bold" name>Data User</p>
                </div>
                <div class="col-4">
                    <img src="../../assets/images/user.png" style="height: 100%; width: 100%;" id="dataAdmin">
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-3 m-2">
        <a style="color: black;
    text-decoration: none;" href="index.php?page=item" id="dataDashboard">
            <div style="background-color: white;"
                class="row p-2 shadow-sm d-flex justify-content-around align-items-center rounded">
                <div class="col-8">
                    <?php
                    $dataItem = mysqli_query($koneksi, "SELECT * FROM tb_items");
                    $dataItem = mysqli_num_rows($dataItem);
                    ?>
                    <h3 class="fs-2"><?= $dataItem ?></h3>
                    <p class="fs-5 fw-bold" name>Data Item</p>
                </div>
                <div class="col-4">
                    <img src="../../assets/images/items.png" style="height: 100%; width: 100%;">
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-3 m-2">
        <a style="color: black;
    text-decoration: none;" href="index.php?page=transaksi" id="dataDashboard">
            <div style="background-color: white;"
                class="row p-2 shadow-sm d-flex justify-content-around align-items-center rounded">
                <div class="col-8">
                    <?php
                    $dataTransaksi = mysqli_query($koneksi, "SELECT * FROM tb_transaksi");
                    $dataTransaksi = mysqli_num_rows($dataTransaksi);
                    ?>
                    <h3 class="fs-2"><?= $dataTransaksi ?></h3>
                    <p class="fs-5 fw-bold" name>Data Transaksi</p>
                </div>
                <div class="col-4">
                    <img src="../../assets/images/transaction.png" style="height: 100%; width: 100%;">
                </div>
            </div>
        </a>
    </div>
</div>