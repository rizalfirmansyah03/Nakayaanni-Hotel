<?php
    include("../connect.php");

    if(isset($_POST['submit'])){
        $nik = $_POST["nik"];
        $id_room = $_POST["id_room"];
        $nama = $_POST["nama"];
        $no_hp = $_POST["no_hp"];
        $cek_in = $_POST["cek_in"];
        $cek_out = $_POST["cek_out"];
        
        $query = "INSERT INTO tb_pesan SET 
                nik='$nik', 
                id_room='$id_room',
                nama='$nama', 
                no_hp='$no_hp', 
                cek_in='$cek_in', 
                cek_out='$cek_out'";
                
        if(mysqli_query($conn, $query)){ 
            header("Location: ../index.php");
        }else{
            echo "Tambah data gagal";
        }
    }
    mysqli_close($conn);
?>