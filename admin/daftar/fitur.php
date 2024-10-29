<?php
    require_once('../../connect.php');
    require_once('../../function.php');
    require_once('../section/header.php');
    require_once('../section/sidebar.php');
    $jml_fitur = query("SELECT COUNT(id_fitur) as 'fitur' FROM tb_fitur")[0];
?>

    <h2>Kelola Data Fitur</h2>
    <p>Jumlah data : <?php echo $jml_fitur['fitur']; ?></p>
    <a class="btn btn-warning" href="fitur.php">Refresh</a>
    <br><br>

    <form class="form-inline" action="" method="POST">
        <input type="text" name="keyword" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button type="submit" class="btn btn-primary my-2 my-sm-0" name="cari">Search</button>
    </form>
    <br>

    <table class="table">
        <thead class="thead-info">
            <tr>
                <th>Nomor</th>
                <th>Judul</th>
                <th class="text-center">Edit</th>
                <th class="text-center">Hapus</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $batas = 4;
            $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
            $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

            $previous = $halaman - 1;
            $next = $halaman + 1;

            $jumlah_data = limitfitur();
            $total_halaman = ceil($jumlah_data / $batas);
            $jml_informasi = pagingfitur($halaman_awal, $batas);
            $no = $halaman_awal + 1;

            if (isset($_POST["cari"])) {
                $jml_informasi = carijenisfitur($_POST["keyword"]);
            }
            foreach ($jml_informasi as $hasil) {
        ?>
                <tr>
                    <th scope="row"><?php echo $no; ?></th>                
                    <td><?php echo $hasil['jenis_fitur']; ?></td>
                    <td class="text-center"><a class="btn btn-primary bg-dark" href="updatefitur.php?id=<?php echo $hasil['id_fitur']; ?>">Edit</a></td>
                    <td class="text-center"><a class="btn btn-primary bg-danger" href="hapusfitur.php?id=<?php echo $hasil['id_fitur']; ?>" onclick=" return confirm ('Apakah anda ingin menghapus data ini?');">Hapus</a>
                </tr>
        <?php
                $no++;
            }
        ?>
        </tbody>
    </table>
    
    <nav>
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" <?php if ($halaman > 1) {
                    echo "href='fitur.php?halaman=$previous'";
                } ?>>Previous</a>
            </li>
            <?php for ($x = 1; $x <= $total_halaman; $x++) { ?>
                <li class="page-item"><a class="page-link" href="fitur.php?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
            <?php } ?>
            <li class="page-item">
                <a class="page-link" <?php if ($halaman < $total_halaman) {
                    echo "href='fitur.php?halaman=$next'";
                } ?>>Next</a>
            </li>
        </ul>
    </nav>
</div>
</div>

<?php
require_once('../section/footer.php');
?>