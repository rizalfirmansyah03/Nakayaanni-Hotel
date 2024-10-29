<?php
    include("../../connect.php"); 
    session_start();
    if (!isset($_SESSION['nama'])) {
        header("Location: login.php");
    } 
    $id = $_GET["id"];
    $psn = "SELECT * FROM tb_footer WHERE id_footer = '$id'";
    $hdata = mysqli_query ($conn, $psn); 
    while ($d= mysqli_fetch_array($hdata)){
?>
	
<!DOCTYPE html>
<html lang="en">
  	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="../../asset/nakayaanni.png" rel="icon">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <title>Hotel Nakayaanni</title>
  	</head>

    <body>
        <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #000000;">
            <a class="navbar-brand text-white" style = "font-family:times new roman;"><?php echo $_SESSION['nama'];?></a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
            <ul class="navbar-nav my-2 my-lg-0">
                <li class="nav-pills">
                    <a class="nav-link text-white" href="footertabel.php">  
                        Kembali
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="30" fill="currentColor" class="bi bi-backspace-reverse" viewBox="0 0 16 16">
                            <path d="M9.854 5.146a.5.5 0 0 1 0 .708L7.707 8l2.147 2.146a.5.5 0 0 1-.708.708L7 8.707l-2.146 2.147a.5.5 0 0 1-.708-.708L6.293 8 4.146 5.854a.5.5 0 1 1 .708-.708L7 7.293l2.146-2.147a.5.5 0 0 1 .708 0z"/>
                            <path d="M2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h7.08a2 2 0 0 0 1.519-.698l4.843-5.651a1 1 0 0 0 0-1.302L10.6 1.7A2 2 0 0 0 9.08 1H2zm7.08 1a1 1 0 0 1 .76.35L14.682 8l-4.844 5.65a1 1 0 0 1-.759.35H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h7.08z"/>
                        </svg>
                    </a>
                </li>
            </ul>    
        </nav>

        <div class="jumbotron jumbotron-fluid pb-1 bg-white">
            <div class="container text-center">
                <br>
                <h1 class="display-6" style="font-family:geneva;">Ubah Data</h1>
            </div>
        </div>

        <div>
			<main>
				<div class="container-fluid px-3 py-2">
                    <div class="card mb-4">
		                <div class="h5 card-header text-white" style="background-color: #000000;">
			                Ubah Data
	                    </div>

	                    <form action="editfooter.php" method="POST">
		                    <input type="hidden" name="id_footer" value="<?php echo $d['id_footer']; ?>">
		                    <ul style="background-color: #E4E9F7;">
			                    <div class="mb-3">
				                    <label for="telepon">Telepeon : </label>
                                    <input type="" class="form-control" name="telepon" id="telepon" required value="<?php echo $d["telepon"]; ?>">
		                        </div>
                                <div class="mb-3">
				                    <label for="emailreservasi">Email Reservasi : </label>
                                    <input type="" class="form-control" name="emailreservasi" id="emailreservasi" required value="<?php echo $d["emailreservasi"]; ?>">
		                        </div>
                                <div class="mb-3">
				                    <label for="emailadmin">Email Admin : </label>
                                    <input type="" class="form-control" name="emailadmin" id="emailadmin" required value="<?php echo $d["emailadmin"]; ?>">
		                        </div>
                                <div class="mb-3">
				                    <label for="alamat">Alamat : </label>
                                    <textarea type="text" class="form-control" rows="3" name="alamat" id="alamat" required ><?php echo $d["alamat"]; ?></textarea>
		                        </div>
                                <div class="mb-3">
				                    <label for="kota">Kota : </label>
                                    <textarea type="text" class="form-control" rows="3" name="kota" id="kota" required ><?php echo $d["kota"]; ?></textarea>
		                        </div>
			                    <div class="mb-3">
				                    <button type="submit" class="btn btn-success" name="submit">Ubah Data</button>
			                    </div>
		                    </ul>
	                    </form>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </main>
        </div>
    </body>

    <footer>
        <div class="text-white" style="background-color: #000000;">
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