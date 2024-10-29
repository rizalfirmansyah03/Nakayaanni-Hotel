<?php
    require_once("../../connect.php");
    $id = $_GET["id"]; 
    $query = "DELETE FROM tb_kontak WHERE id_kontak = '$id'";
    if(mysqli_query($conn, $query)){
        header("Location: kontak.php");
    }else{
        echo "Hapus data gagal";
    }
?>