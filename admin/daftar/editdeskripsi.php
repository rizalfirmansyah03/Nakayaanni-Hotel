<?php 
    include("../../connect.php");

    $id_deskripsi = $_POST["id_deskripsi"];
    $deskripsi = $_POST["deskripsi"];
    
    mysqli_query($conn,"UPDATE tb_deskripsi SET deskripsi='$deskripsi' WHERE id_deskripsi= '$id_deskripsi'");
    header("location: deskripsi.php");
?>