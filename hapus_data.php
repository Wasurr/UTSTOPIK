<?php

$id=$_GET['id'];

include "koneksi_data.php";

$hapus=$koneksi->query("delete from anggota where anggota_id='$id'");

if($hapus==true){

    header("location:menampilkan_data.php?pesan=hapusBerhasil");

} else{
    echo "Error";
}


?>