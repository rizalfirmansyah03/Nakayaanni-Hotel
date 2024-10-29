<?php 
    include("../../connect.php");

    $id_fitur = $_POST["id_fitur"];
    $jenis_fitur = $_POST["jenis_fitur"];
    
    mysqli_query($conn,"UPDATE tb_fitur SET jenis_fitur='$jenis_fitur' WHERE id_fitur= '$id_fitur'");
    header("location: fitur.php");
?>