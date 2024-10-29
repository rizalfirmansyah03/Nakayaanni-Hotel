<?php
    require("connect.php");
    require("function.php"); 

    $room1 = room('1');
    $room2 = room('2');
    $room3 = room('3');
    $room4 = room('4');
    $room5 = room('5');
    $room6 = room('6');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="asset/nakayaanni.png" rel="icon">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <title>Hotel Nakayaanni</title>
        <style>
            .banner{
                background: url(asset/banner.jpeg) no-repeat center center;
                background-size: cover;
                padding-top: 10%;
                padding-bottom: 10%;
                color: #000;
            }
        </style>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #000000;">
            <a class="navbar-brand text-warning" href="index.php">Nakayaanni</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> 
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-pills">
                        <a class="nav-link text-warning" href="index.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-warning" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                        Rooms
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <?php foreach ($room1 as $hasil) { ?>
                            <a class="dropdown-item text-warning" href="room/singroom.php"><?php echo $hasil['nr']; ?></a>
                            <?php } ?>
                            <?php foreach ($room2 as $hasil) { ?>
                            <a class="dropdown-item text-warning" href="room/stdroom.php"><?php echo $hasil['nr']; ?></a>
                            <?php } ?>    
                            <?php foreach ($room3 as $hasil) { ?>
                            <a class="dropdown-item text-warning" href="room/sprroom.php"><?php echo $hasil['nr']; ?></a>
                            <?php } ?>
                            <?php foreach ($room4 as $hasil) { ?>
                            <a class="dropdown-item text-warning" href="room/dblroom.php"><?php echo $hasil['nr']; ?></a>
                            <?php } ?>
                            <?php foreach ($room5 as $hasil) { ?>
                            <a class="dropdown-item text-warning" href="room/delroom.php"><?php echo $hasil['nr']; ?></a>
                            <?php } ?>
                            <?php foreach ($room6 as $hasil) { ?>
                            <a class="dropdown-item text-warning" href="room/presroom.php"><?php echo $hasil['nr']; ?></a>
                            <?php } ?>
                        </div>
                    </li>
                    <li class="nav-pills">
                        <a class="nav-link text-warning" href="fasilitas.php">Fasilitas</a>
                    </li>
                    <li class="nav-tabs">
                        <a class="nav-link active text-warning" href="contact.php">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav my-2 my-lg-0">
                    <li class="nav-pills">
                        <a class="nav-link text-warning" href="admin/daftar/login.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>        
                            Admin
                        </a>
                    </li>
                </ul>    
            </div>
        </nav>

        <div class="jumbotron jumbotron-fluid banner">
            <div class="container text-center">
                <h1 class="display-6"></h1>
            </div>
        </div>
        
        <section class="homefovere" id="homefovere">
            <div class="container mt-5">
                <div class="row mb-2">
                    <div class="col-md text-center">
                        <h1 style = "font-family:geneva;">
                            Nakayaanni Hotel
                        </h1>
                        <hr>
                    </div>
                </div>
            </div>
        </section>
        <br>

        <div class="container">
            <div class="col-md-7 contactform">
                <h4 class="text-center">Kotak Pesan</h4>
                <hr>
                <form action="insertkontak.php" method="POST">
                    <div>
                        <p class="mb-4">Silakan anda isi form Kontak dibawah ini untuk menghubungi kami secara online.</p>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Subjek</label>
                        <input type="text" class="form-control" id="subjek" name="subjek" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Pesan</label>
                        <textarea name="pesan" id="pesan" name="pesan" class="form-control" rows="6" required></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-warning">Kirim</button>
                </form>
            </div>
        </div>
        <br>

        <section class="contactmaps" id="contactmaps">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-md text-center">
                        <h3 style = "font-family:geneva;">Maps Nakayaanni Hotel</h3>
                        <hr>
                    </div>
                    <div class="embed-responsive embed-responsive-21by9 mb-5">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3985.9183380201566!2d112.8876806142814!3d-2.533540038971767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de2bdc5bbd80a33%3A0x589dadda50c6d73d!2sPasir%20Putih%2C%20Kec.%20Mentawa%20Baru%20Ketapang%2C%20Kabupaten%20Kotawaringin%20Timur%2C%20Kalimantan%20Tengah%2074312!5e0!3m2!1sid!2sid!4v1649407033110!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    </body>


    <footer>
    <?php
        require("connect.php");

        $sql = "SELECT * FROM tb_footer";
        $hasil = mysqli_query($conn, $sql);
        while($rows = mysqli_fetch_array($hasil)) {
    ?>
        <div class="text-white" style="background-color: #000000;">
            <div class="row mb-8">
                <div class="col-md-5 mr-auto mt-2 mt-lg-0 contactform">
                    <h4 class="text-center">Contact</h4>
                    <hr class="bg-warning">
                    <center>
                        <li style='list-style-type: none;'>Telepon: </li>
                        <li style='list-style-type: none;' class="text-warning"><?php echo $rows["telepon"]; ?></li>
                        <li style='list-style-type: none;'>Email Reservasi: </li>
                        <li style='list-style-type: none;' class="text-warning"><?php echo $rows["emailreservasi"]; ?></li>
                        <li style='list-style-type: none;'>Email Admin:</li>
                        <li style='list-style-type: none;' class="text-warning"><?php echo $rows["emailadmin"]; ?></li>
                        <br>
                        <a href="https://www.instagram.com/rizalfirman_03/" target="_blank" class="text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                            </svg>
                        </a>
                        <a href="https://wa.me/6285754730736" target="_blank" class="text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                            </svg>
                        </a>
                        <a href="https://www.facebook.com/profile.php?id=100006261495298" target="_blank" class="text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                            </svg>
                        </a>
                        <a href="https://twitter.com/yourfullsunday?s=08" target="_blank" class="text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                            </svg>
                        </a>
                    </center>
                    <hr class="bg-warning">
                </div>

                <div class="col-md-5 my-2 my-lg-0 contactalamat text-dark">
                    <h4 class="text-center text-white">Alamat</h4>
                    <hr class="bg-warning">
                    <div class="card bg-light mb-3">
                        <div class="card-body">
                            <h5 class="card-title text-center">NAKAYAANNI Hotel</h5>
                        </div>
                        <ul class="list-group text-center">
                            <li class="list-group-item bg-light" style = "font-family:times new roman;">
                                <?php echo $rows["alamat"]; ?><br>
                                <?php echo $rows["kota"]; ?>
                            </li>
                        </ul>
                    </div>
                    <hr class="bg-warning">
                </div>
            </div>
        </div>
    <?php } ?>
    </footer>
</html>