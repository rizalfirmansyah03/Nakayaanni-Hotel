<?php 
    include("../../connect.php");

    $id_layanan = $_POST["id_layanan"];
    $judul = $_POST["judul"];
    $keterangan = $_POST["keterangan"];
    
    mysqli_query($conn,"UPDATE tb_layanan SET judul='$judul', keterangan='$keterangan' WHERE id_layanan= '$id_layanan'");
    header("location: layanan.php");
?>