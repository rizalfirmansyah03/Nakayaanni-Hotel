<?php 
    include("../../connect.php");

    $id_footer = $_POST["id_footer"];
    $telepon = $_POST["telepon"];
    $emailreservasi = $_POST["emailreservasi"];
    $emailadmin = $_POST["emailadmin"];
    $alamat = $_POST["alamat"];
    $kota = $_POST["kota"];
    
    mysqli_query($conn,"UPDATE tb_footer SET telepon='$telepon', emailreservasi='$emailreservasi', emailadmin='$emailadmin', alamat='$alamat', kota='$kota' WHERE id_footer= '$id_footer'");
    header("location: footertabel.php");
?>