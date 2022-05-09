<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T&T</title>
    <link rel="icon" href="../assets/images/Logo.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body style="background-color:#4B4952">
    <?php
    session_start();
    ?>
    <?php
    if ($_SESSION['status'] == "user") {
        ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="../assets/images/flight.png" width="45" height="45"
                    class="d-inline-block align-text-center">T&T</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-list-columns-reverse"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php
                                include "../lib/koneksi.php";
                                $user_id = $_SESSION['id_cust'];
                                $query = mysqli_query($koneksi, "SELECT * FROM tb_transaksi JOIN tb_user ON tb_transaksi.user_id = tb_user.id_cust JOIN tb_items ON tb_transaksi.no_items = tb_items.no_items WHERE user_id ='$user_id'");
                                foreach($query as $data){
                            ?>
                            <?php
                                if($data['kd_transaksi'] == ""){
                            ?>
                            <li><a class="dropdown-item" href="#">Empty</a></li>
                            <?php
                                }else {
                            ?>
                            <li><a class="dropdown-item"
                                    href="indexs.php?page=invoice&kd_transaksi=<?= $data['kd_transaksi'] ?>"><i
                                        class="bi bi-wallet"></i> <?= $data['kd_transaksi'] ?></a>
                            </li>
                            <?php
                                }
                            ?>
                            <?php
                                }
                            ?>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="indexs.php?page=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="indexs.php?page=destinasi">Destination</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="indexs.php?page=about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="indexs.php?page=profile&id_cust=<?= $_SESSION['id_cust']?>">
                            <?=$_SESSION['nama_cust']?></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="../assets/images/signlog.png" style="height: 20px; width: 20px;" alt="">
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="index.php?page=logout">Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php
        include "menu.php" ; 
        ?>
    <?php
    } else{
    ?>
    <script>
    alert('Anda belum Log In!');
    window.location.replace('index.php?page=home')
    </script>";
    <?php
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>