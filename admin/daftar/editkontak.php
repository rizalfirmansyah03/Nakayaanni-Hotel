<?php 
    include("../../connect.php");

    $id_kontak = $_POST["id_kontak"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $subjek = $_POST["subjek"];
    $pesan = $_POST["pesan"];
    
    mysqli_query($conn,"UPDATE tb_kontak SET nama='$nama', email='$email', subjek='$subjek', pesan='$pesan' WHERE id_kontak= '$id_kontak'");
    header("location: kontak.php");
?>