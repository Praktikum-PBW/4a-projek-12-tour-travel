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
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body style="background-color: #EFE5D9;">
    <?php
    session_start();
    ?>
    <div class="container p-5">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card cardLog border-0 shadow rounded-3 my-5">
                    <div class="login card-body p-4 p-sm-5">
                        <?php
                if(isset($_SESSION['error'])){
                    ?>
                        <div class="alert alert-danger">
                            <?=$_SESSION['error']?>
                        </div>
                        <?php
                } ?>
                        <h1 class="card-title text-center mb-5 fs-5"><i class="bi bi-person-fill"></i><strong>Sign
                                In</strong></h1>
                        <hr class="w-25 mx-auto">
                        <form class="row g-3" action="proses.php" method="POST">
                            <div class="col">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" id="username"
                                    placeholder="Masukkan Username">
                            </div>
                            <div class="col-12">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password"
                                    placeholder="Masukkan Password">
                            </div>
                            <div class="text-center">
                                <p>belum punya akun? <a href="index.php?page=signup" style="color: black;">daftar
                                        disini!</a></p>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary btn-login text-uppercase fw-bold" name="masuk"
                                    type="submit">Sign In</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>