<?php
include "database.php";
$database = new database();

$aksi = $_GET["aksi"];
if($aksi == "tambah"){
    $database->Input_data_pelanggan($_POST['nama'],$_POST['jenis_kelamin'],$_POST['alamat'],$_POST['no_hp'],$_POST['email']);
    header('location:pelanggan-data.php');
}elseif($aksi == "hapus"){ 	
    $database->Hapus_data_pelanggan($_GET['Id_pelanggan']);
   header('location:pelanggan-data.php');
}elseif($aksi == "update"){
    $database->Update_data_pelanggan($_POST['Id_pelanggan'],$_POST['nama'],$_POST['jenis_kelamin'],$_POST['alamat'],$_POST['no_hp'],$_POST['email']);
    header('location:pelanggan-data.php');
}
?>