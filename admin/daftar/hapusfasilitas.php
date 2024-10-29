<?php
    require_once("../../connect.php");
    $id = $_GET["id"]; 
    $query = "DELETE FROM tb_fasilitas WHERE id_fasilitas = '$id'";
    if(mysqli_query($conn, $query)){
        header("Location: fasilitas.php");
    }else{
        echo "Hapus data gagal";
    }
?>