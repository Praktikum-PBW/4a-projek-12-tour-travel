<?php
if (isset($_GET['id'])){
    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "DELETE FROM tb_transaksi WHERE id='$id'");

    if($query){
        header("Location: index.php?page=transaksi");
    }else{
        echo "gagal";
    }
}
?>