<?php 
    include("../../connect.php");  
    error_reporting(0); 
    session_start(); 
    session_destroy();
    if (isset($_SESSION['nama'])) {
    header("Location: register.php");
    }
 
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $username_ = $_POST['username_'];
        $password_ = $_POST['password_'];
        $cpassword_ = $_POST['cpassword_'];
 
        if ($password_ == $cpassword_) {
            $query = "SELECT * FROM tb_users WHERE username_='$username_'";
            $result = mysqli_query($conn, $query);
            if (!$result->num_rows > 0) {
                $query = "INSERT INTO tb_users (nama, username_, password_) VALUES ('$nama', '$username_', '$password_')";
                $result = mysqli_query($conn, $query);
                if ($result) {
                    echo "
                        <script>
                            alert('Registrasi Berhasil')
                            document.location.href = 'informasi.php';
                        </script>
                    ";
                    $nama = "";
                    $username_ = "";
                    $_POST['password_'] = "";
                    $_POST['cpassword_'] = "";
                } else {
                    echo "
                        <script>
                            alert('Woops! Terjadi kesalahan.')
                        </script>
                    ";
                }
            } else {
                echo "
                    <script>
                        alert('Woops! Username Sudah Terdaftar.')
                    </script>
                ";
            }
        } else {
            echo "
                <script>
                    alert('Password_ Tidak Sesuai')
                </script>
            ";
        }   
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <title>Responsi Basdat</title>
        <style>
            .form-border {
                background: -webkit-linear-gradient(right, #ffc107, #ffc107);
                height: 1px;
                width: 100%;
            }
            .form-content {
                background: #f8f9fa;
                border: none;
                outline: none;
                padding-top: 14px;
            }
            #card-content {
                padding: 12px 44px;
            }
            #card-title {
                font-family: "Raleway Thin", sans-serif;
                letter-spacing: 4px;
                padding-bottom: 23px;
                padding-top: 13px;
                text-align: center;
            }
            #submit-btn {
                background: -webkit-linear-gradient(right, #ffc107, #ffc107);
                border: none;
                border-radius: 21px;
                box-shadow: 0px 1px 8px #0dcaf0;
                color: white;
                font-family: "Raleway SemiBold", sans-serif;
                height: 42.3px;
                width: 153px;
            }
            .banner{
                background: url(../../asset/banner.jpeg) no-repeat center center;
                background-size: cover;
                padding-top: 10%;
                padding-bottom: 10%;
                color: #000;
            }
        </style>
    </head>
    <body>
        <div class="jumbotron jumbotron-fluid banner">
            <h1 class="display-6"></h1>
        </div>
        <div id="card-content">
            <div id="card-title">
                <h2>LOGIN</h2>
            </div>
            <form action="register.php" method="post" class="form">
                <table align="center">
                    <div class="form-border"></div>
                    <tr><td><input type="text" placeholder="Nama" name="nama" value="<?php echo $nama; ?>" required class="form-content"></td></tr>

                    <tr><td><input type="text" placeholder="Username" name="username_" value="<?php echo $username_; ?>" required class="form-content"></td></tr>

                    <tr><td><input type="password" placeholder="Password" name="password_" value="<?php echo $_POST['password_']; ?>" required class="form-content"></td></tr>

                    <tr><td><input type="password" placeholder="Confirm Password" name="cpassword_" value="<?php echo $_POST['cpassword_']; ?>" required class="form-content"></td></tr>
                </table>
                <center>
                    <br>
                    <input id="submit-btn" type="submit" name="submit" value="Register">
                </center>
            </form>
        </div>
    </body>
    <footer>
        <div class="text-warning" style="background-color: #000000;">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <br>    
                        <p>Nakayaanni Hotel</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</html>