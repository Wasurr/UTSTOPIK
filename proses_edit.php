<?php

include "koneksi_data.php";

$id=$_POST['anggota_id'];
$kode=$_POST['kode'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$email=$_POST['email'];
$hobi=$_POST['hobi'];
$hp=$_POST['hp'];

$ubah=$koneksi->query("update anggota set kode='$kode', nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat', email='$email', hobi='$hobi', hp='$hp' where anggota_id='$id'");

if($ubah==true){

    header("location:menampilkan_data.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>