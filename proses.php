<?php
include "database.php";
$database = new database();

$aksi = $_GET["aksi"];
if($aksi == "tambah"){
    $database->Input_data_pelanggan($_POST['nama'],$_POST['jenis_kelamin'],$_POST['alamat'],$_POST['no_hp'],$_POST['email']);
    header('location:pelanggan-data.php');
    // include "all"
}elseif($aksi == "hapus"){ 	
    $database->Hapus_data_pelanggan($_GET['Id_pelanggan']);
   header('location:pelanggan-data.php');
}elseif($aksi == "update"){
    $database->Update_data_pelanggan($_POST['Id_pelanggan'],$_POST['nama'],$_POST['jenis_kelamin'],$_POST['alamat'],$_POST['no_hp'],$_POST['email']);
    header('location:pelanggan-data.php');


}elseif($aksi == "tambahteknisi"){
    $database->Input_data_teknisi($_POST['nama_teknisi'],$_POST['alamat'],$_POST['spesialis'],$_POST['no_hp']);    
    header('location:teknisi-data.php');
}elseif($aksi == "hapusteknisi"){
    $database->Hapus_data_teknisi($_GET['id_teknisi']);
    header('location:teknisi-data.php');
}elseif($aksi == "updateteknisi"){
    $database->Update_data_teknisi($_POST['id_teknisi'],$_POST['nama_teknisi'],$_POST['alamat'],$_POST['spesialis'],$_POST['no_hp']);
    header('location:teknisi-data.php');
}
?>