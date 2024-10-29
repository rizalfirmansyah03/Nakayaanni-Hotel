<?php

include("../../connect.php");
include("../../function.php"); 


    $id_infokamar = $_POST["id_infokamar"];
    $id_room = $_POST["id_room"];
    $nama_room = $_POST["nama_room"];
    $keterangan = $_POST["keterangan"];

    $file_temp_name = $_FILES['gmbr']['tmp_name'];
    $file_name = $_FILES['gmbr']['name'];

    if ($file_name) {
        unlink('../../asset/' . $gambar);

        move_uploaded_file($file_temp_name, '../../asset/' .$file_name .'');

        $query = "UPDATE tb_infokamar SET id_room='$id_room', nama_room='$nama_room', gambar='$file_name', keterangan = '$keterangan' WHERE id_infokamar= '$id_infokamar'";

        mysqli_query($conn, $query);
        header("location: inforoom.php");

        return mysqli_affected_rows($conn);
        

    } else {
        
        $query = "UPDATE tb_infokamar SET id_room = '$id_room', nama_room='$nama_room', keterangan = '$keterangan' WHERE id_infokamar= '$id_infokamar'";
        
        mysqli_query($conn, $query);
        header("location: inforoom.php");
        return mysqli_affected_rows($conn);
    }
?>