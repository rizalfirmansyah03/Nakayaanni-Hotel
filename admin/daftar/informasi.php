<?php
    // require_once('../../fungsi/function.php');
    require_once('../../connect.php');
    session_start();
    if (!isset($_SESSION['nama'])) {
        header("Location: login.php");
    } 
    require_once('../../function.php');
    require_once('../section/header.php');
    require_once('../section/sidebar.php');

    $jml_deskripsi = query("SELECT COUNT(id_deskripsi) as deskripsi FROM tb_deskripsi")[0];
    $jml_fitur = query("SELECT COUNT(id_fitur) as fitur FROM tb_fitur")[0];
    $jml_layanan = query("SELECT COUNT(id_layanan) as layanan FROM tb_layanan ")[0];
    $jml_fasilitas = query("SELECT COUNT(id_fasilitas) as fasilitas FROM tb_fasilitas ")[0];
    $jml_kontak = query("SELECT COUNT(id_kontak) as kontak FROM tb_kontak")[0];
    $jml_footer = query("SELECT COUNT(id_footer) as footer FROM tb_footer")[0];
    $jml_room = query("SELECT COUNT(id_room) as room FROM tb_room")[0];
    $jml_infokamar = query("SELECT COUNT(id_infokamar) as infokamar FROM tb_infokamar ")[0];
    $jml_nik = query("SELECT COUNT(nik) as NIK FROM tb_pesan")[0];
?>
    <center>
        <h2>Hai, <?php echo $_SESSION['nama'];?></h2>
        <p>Selamat datang di halaman admin Hotel Nakayaanni</p>
    </center>

    <div class="row">
        <div class="col-md-3" style="margin-left: 100px;">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">
                        <center>
                            <i class="fa fa-user"></i>
                            Jumlah Deskripsi
                        </center>
                    </h5>
                    <div class="panel-body">
                        <center>
                            <h1><?php echo number_format($jml_deskripsi['deskripsi']); ?></h1>
                        </center>
                    </div>
                    <a href="tbdeskripsi/deskripsi.php" class="card-link">
                        <center>
                            Daftar Deskripsi
                        </center>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-3" style="margin-left: 20px;">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">
                        <center>
                            <i class="fa fa-user"></i>
                            Jumlah Fitur
                        </center>
                    </h5>
                    <div class="panel-body">
                        <center>
                            <h1><?php echo number_format($jml_fitur['fitur']); ?></h1>
                        </center>
                    </div>
                    <a href="../isi/kategori.php" class="card-link">
                        <center>
                            Daftar Fitur
                        </center>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-3" style="margin-left: 20px;">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">
                        <center>
                            <i class="fa fa-user"></i>
                            Jumlah Layanan
                        </center>
                    </h5>
                    <div class="panel-body">
                        <center>

                            <h1><?php echo number_format($jml_layanan['layanan']); ?></h1>
                        </center>
                    </div>
                    <a href="../isi/destinasi.php" class="card-link">
                        <center>
                            Daftar Layanan
                        </center>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-3" style="margin-left: 100px; margin-top: 20px;">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">
                        <center>
                            <i class="fa fa-user"></i>
                            Jumlah Fasilitas
                        </center>
                    </h5>
                    <div class="panel-body">
                        <center>
                            <h1><?php echo number_format($jml_fasilitas['fasilitas']); ?></h1>
                        </center>
                    </div>
                    <a href="../isi/gallery.php" class="card-link">
                        <center>
                            Daftar Fasilitas
                        </center>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-3" style="margin-top: 20px; margin-left: 20px;">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">
                        <center>
                            <i class="fa fa-user"></i>
                            Jumlah Pesan
                        </center>
                    </h5>
                    <div class="panel-body">
                        <center>
                            <h1><?php echo number_format($jml_kontak['kontak']); ?></h1>
                        </center>
                    </div>
                    <a href="../isi/gallery.php" class="card-link">
                        <center>
                            Daftar Pesan
                        </center>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-3" style="margin-top: 20px; margin-left: 20px;">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">
                        <center>
                            <i class="fa fa-user"></i>
                            Jumlah footer
                        </center>
                    </h5>
                    <div class="panel-body">
                        <center>
                            <h1><?php echo number_format($jml_footer['footer']); ?></h1>
                        </center>
                    </div>
                    <a href="../isi/gallery.php" class="card-link">
                        <center>
                            Daftar Footer
                        </center>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-3" style="margin-left: 100px; margin-top: 20px;">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">
                        <center>
                            <i class="fa fa-user"></i>
                            Jumlah Room
                        </center>
                    </h5>
                    <div class="panel-body">
                        <center>
                            <h1><?php echo number_format($jml_room['room']); ?></h1>
                        </center>
                    </div>
                    <a href="../isi/gallery.php" class="card-link">
                        <center>
                            Daftar Room
                        </center>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-3" style="margin-top: 20px; margin-left: 20px;">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">
                        <center>
                            <i class="fa fa-user"></i>
                            Jumlah Info Kamar
                        </center>
                    </h5>
                    <div class="panel-body">
                        <center>
                            <h1><?php echo number_format($jml_infokamar['infokamar']); ?></h1>
                        </center>
                    </div>
                    <a href="../isi/gallery.php" class="card-link">
                        <center>
                            Daftar Info Kamar
                        </center>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-3" style="margin-top: 20px; margin-left: 20px;">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">
                        <center>
                            <i class="fa fa-user"></i>
                            Jumlah Reservasi
                        </center>
                    </h5>
                    <div class="panel-body">
                        <center>
                            <h1><?php echo number_format($jml_nik['NIK']); ?></h1>
                        </center>
                    </div>
                    <a href="../isi/gallery.php" class="card-link">
                        <center>
                            Daftar Reservasi
                        </center>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php
    require_once('../section/footer.php');
?>