<?php

$kode=$_POST['kode'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$email=$_POST['email'];
$hobi=$_POST['hobi'];
$hp=$_POST['hp'];

include "koneksi_data.php";

$simpan=$koneksi->query("insert into anggota(kode,nama,jenis_kelamin,email,hobi,alamat,hp) 
            values ('$kode', '$nama', '$jenis_kelamin', '$alamat', '$email', '$hobi', '$hp')");

if($simpan==true){

    header("location:menampilkan_data.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>