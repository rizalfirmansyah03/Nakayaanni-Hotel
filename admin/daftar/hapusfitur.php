<?php
    require_once("../../connect.php");
    $id = $_GET["id"]; 
    $query = "DELETE FROM tb_fitur WHERE id_fitur = '$id'";
    if(mysqli_query($conn, $query)){
        header("Location: fitur.php");
    }else{
        echo "Hapus data gagal";
    }
?>