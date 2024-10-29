<?php 
    include("../../connect.php");

    $id_room = $_POST["id_room"];
    $nama_room = $_POST["nama_room"];
    
    mysqli_query($conn,"UPDATE tb_room SET nama_room='$nama_room' WHERE id_room= '$id_room'");
    header("location: room.php");
?>