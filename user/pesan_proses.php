<?php
$conn = mysqli_connect("localhost", "root", "", "tour_travel");

// Choose a function depends on value of $_POST["action"]
if($_POST["action"] == "insert"){
  insert();
}

// Function
function insert(){
  global $conn;

  //id transaksi
  $query_idtrans = mysqli_query($conn, "SELECT max(kd_transaksi) as maxKdtrans FROM tb_transaksi");
  $data = mysqli_fetch_array($query_idtrans);
  $kodetrans = $data['maxKdtrans'];
  $urutan = (int) substr($kodetrans, 4, 3);
  $urutan++;
  $huruf = "TRVL";
  $kodetrans = $huruf . sprintf("%03s", $urutan);

  //Virtual account

  $va = date("mdY");
  $va = str_shuffle($va);

  $id_cust = htmlentities(htmlspecialchars(strip_tags(trim($_POST['id_cust']))));
  $no_items = htmlentities(htmlspecialchars(strip_tags(trim($_POST["no_items"]))));
  $jmlh_tiket = htmlentities(htmlspecialchars(strip_tags(trim($_POST["jmlh_tiket"]))));
  $tgl_berangkat = htmlentities(htmlspecialchars(strip_tags(trim($_POST["tgl_berangkat"]))));
  $via_bayar = htmlentities(htmlspecialchars(strip_tags(trim($_POST["via_bayar"]))));
  $biaya_admin = htmlentities(htmlspecialchars(strip_tags(trim($_POST["biaya_admin"]))));
  $total = htmlentities(htmlspecialchars(strip_tags(trim($_POST["total"]))));
  $tanggal = htmlentities(htmlspecialchars(strip_tags(trim(date("Y-m-d H:i:s")))));

  // Check if variable value is empty
  if(empty($jmlh_tiket) || empty($tgl_berangkat) || empty($via_bayar)){
    // Output
    echo "";
    exit;
  }
  // Insert value to database
  $query = "INSERT INTO tb_transaksi VALUES(null,'$kodetrans','$id_cust','$no_items','$jmlh_tiket','$tgl_berangkat','$via_bayar','$va','$biaya_admin','$total','$tanggal')";
  mysqli_query($conn, $query);
  // Output
  echo 1;
}
?>