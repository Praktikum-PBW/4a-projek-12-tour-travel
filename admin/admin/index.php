<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T&T</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <style>

    </style>
</head>

<body style="background-color: #EFE5D9;">
    <?php
    session_start();
    ?>
    <?php
    if ($_SESSION['status'] == "admin"){
    ?>
    <div style="height:100vh;" class="container-fluid d-flex flex-column flex-md-row p-0">
        <nav style="background-color: #EFE5D9;" class="navbar navbar-expand-md d-md-block navbar-light ms-2 me-2">
            <a class="navbar-brand" href="#">
                <img src="../../assets/images/flight.png" alt="logo" style="height: 30px; width: 30px;"> T&T</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle Navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div style="width: 205px;" class="collapse navbar-collapse bg-light" id="navbarSupportedContent">
                <ul style="background-color: #EFE5D9;"
                    class="navbar-nav w-100 d-flex flex-md-column text-center text-md-start">
                    <li class="text-center">
                        <br><a href="index.php?page=profile&id_cust=<?= $_SESSION['id_cust']?>" class="nav-link"
                            aria-current="page"><img src="../../assets/images/<?=$_SESSION['thumbnail']?>"
                                class="img-thumbnail rounded-circle center" style="width: 50px; height: 50px;"
                                alt=""><br><?=$_SESSION['nama_cust']?></a>
                    </li>
                    <hr>
                    <li>
                        <a href="index.php?page=dashboard" class="nav-link" aria-current="page"><i
                                class="bi bi-bar-chart-fill"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="index.php?page=user" class="nav-link" aria-current="page"><i
                                class="bi bi-person-lines-fill"></i> Data
                            User</a>
                    </li>
                    <li>
                        <a href="index.php?page=item" class="nav-link" aria-current="page"><i
                                class="bi bi-box2-fill"></i> Data Item</a>
                    </li>
                    <li>
                        <a href="index.php?page=transaksi" class="nav-link" aria-current="page"><i
                                class="bi bi-stickies-fill"></i> Data Transaksi</a>
                    </li>
                    <hr>
                    <li>
                        <a href="index.php?page=logout" class="nav-link" aria-current="page"><i
                                class="bi bi-box-arrow-left"></i> Log
                            Out</a>
                    </li>
                </ul>
            </div>
        </nav>
        <main style="background-color: #F6EFE7;" class="col-md-9 ms-sm-auto col-lg-12 px-md-4 py-3">
            <?php
        include "menu.php" ; 
        ?>
        </main>
    </div>
    <?php
    }else{
    ?>
    <script>
    alert('Anda belum Log In!');
    window.location.replace('../signin.php')
    </script>";
    <?php
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>