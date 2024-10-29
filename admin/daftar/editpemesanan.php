<?php 
    include("../../connect.php");

    $nik = $_POST["nik"];
    $id_room = $_POST["id_room"];
    $nama = $_POST["nama"];
    $no_hp = $_POST["no_hp"];
    $cek_in = $_POST["cek_in"];
    $cek_out = $_POST["cek_out"];
    
    mysqli_query($conn,"UPDATE tb_pesan SET id_room='$id_room', nama='$nama', no_hp='$no_hp', cek_in='$cek_in', cek_out='$cek_out' WHERE nik = '$nik'");
    header("location: pemesanan.php");
?>