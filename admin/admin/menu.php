<?php
if(isset($_SESSION['status'])== ""){
    $_SESSION['error'] = "Silahkan untuk login terlebih dahulu";
    header("Location: ../signin.php");
}
if(isset($_GET['page'])){
    
    include '../../lib/koneksi.php';
    
    $page = $_GET['page'];

    switch($page){
        case 'dashboard':
            include 'dashboard.php';
            break;
        case 'item':
            include 'item/index.php';
            break;
        case 'item_create':
            include 'item/create.php';
            break;
        case 'item_store':
            include 'item/store.php';
            break;
        case 'item_edit':
            include 'item/edit.php';
            break;
        case 'item_update':
            include 'item/update.php';
            break;
        case 'item_delete':
            include 'item/delete.php';
            break;
        case 'user':
            include 'user/index.php';
            break;
        case 'user_details':
            include 'user/details.php';
            break;
        case 'user_delete':
            include 'user/delete.php';
            break;
        case 'profile':
            include 'profile/index.php';
            break;
        case 'profile_edit':
            include 'profile/edit.php';
            break;
        case 'profile_update':
            include 'profile/update.php';
            break;
        case 'transaksi':
            include 'transaksi/index.php';
            break;
        case 'transaksi_delete':
            include 'transaksi/delete.php';
            break;
        case 'logout':
            include 'logout.php';
            break;
        default :
            echo "Maaf Halaman Tidak Ada";
            break;
    }   
}
?>