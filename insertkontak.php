<?php
    include("connect.php");

    if(isset($_POST['submit'])){
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $subjek = $_POST["subjek"];
        $pesan = $_POST["pesan"];
        
        $query = "INSERT INTO tb_kontak SET  
                nama='$nama', 
                email='$email', 
                subjek='$subjek', 
                pesan='$pesan'";
                
        if(mysqli_query($conn, $query)){ 
            header("Location: contact.php");
        }else{
            echo "Tambah data gagal";
        }
    }
    mysqli_close($conn);
?>