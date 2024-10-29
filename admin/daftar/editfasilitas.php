<?php

include("../../connect.php");
include("../../function.php"); 

    $id_fasilitas = $_POST["id_fasilitas"];
    $nama_fasilitas = $_POST["nama_fasilitas"];
    $keterangan = $_POST["keterangan"];

    $file_temp_name = $_FILES['gmbr']['tmp_name'];
    $file_name = $_FILES['gmbr']['name'];

    if ($file_name) {
        unlink('../../asset/' . $gambar);

        move_uploaded_file($file_temp_name, '../../asset/' .$file_name .'');

        $query = "UPDATE tb_fasilitas SET nama_fasilitas='$nama_fasilitas', gambar_fasilitas='$file_name', keterangan = '$keterangan' WHERE id_fasilitas= '$id_fasilitas'";

        mysqli_query($conn, $query);
        header("location: fasilitas.php");

        return mysqli_affected_rows($conn);
        

    } else {
        
        $query = "UPDATE tb_fasilitas SET nama_fasilitas='$nama_fasilitas', keterangan = '$keterangan' WHERE id_fasilitas= '$id_fasilitas'";
        
        mysqli_query($conn, $query);
        header("location: fasilitas.php");
        return mysqli_affected_rows($conn);
    }
?>