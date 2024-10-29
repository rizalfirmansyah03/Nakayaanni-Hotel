<?php
    require_once('../../connect.php');
    require_once('../../function.php');
    require_once('../section/header.php');
    require_once('../section/sidebar.php');
    $jml_pesan = query("SELECT COUNT(nik) as 'pesan' FROM tb_pesan")[0];
?>

    <h2>Kelola Data Pemesanan Kamar</h2>
    <p>Jumlah data : <?php echo $jml_pesan['pesan']; ?></p>
    <a class="btn btn-warning" href="pemesanan.php">Refresh</a>
    <br><br>

    <form class="form-inline" action="" method="POST">
        <input type="text" name="keyword" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button type="submit" class="btn btn-primary my-2 my-sm-0" name="cari">Search</button>
    </form>
    <br>

    <table class="table">
        <thead class="thead-info">
            <tr class="text-center">
                <th>Nomor</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>No.Hp</th>
                <th>Chek In</th>
                <th>Chek Out</th>
                <th>Kamar</th>
                <th>Edit</th>
                <th>Hapus</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $batas = 5;
            $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
            $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

            $previous = $halaman - 1;
            $next = $halaman + 1;

            $jumlah_data = limitpesan();
            $total_halaman = ceil($jumlah_data / $batas);
            $jml_informasi = pagingpesan($halaman_awal, $batas);
            $no = $halaman_awal + 1;

            if (isset($_POST["cari"])) {
                $jml_informasi = caripesan($_POST["keyword"]);
            }
            foreach ($jml_informasi as $hasil) {
                $input1 = tgl_indo($hasil['cek_in']);
                $input2 = tgl_indo($hasil['cek_out']);
        ?>
                <tr>
                    <th class="text-center" scope="row"><?php echo $no; ?></th>                
                    <td class="text-center"><?php echo $hasil['nik']; ?></td>
                    <td><?php echo $hasil['nama']; ?></td>
                    <td class="text-center"><?php echo $hasil['no_hp']; ?></td>
                    <td class="text-center"><?php echo $input1; ?></td>
                    <td class="text-center"><?php echo $input2; ?></td>
                    <td class="text-center"><?php echo $hasil['nama_room']; ?></td>
                    <td class="text-center"><a class="btn btn-primary bg-dark" href="updatepemesanan.php?id=<?php echo $hasil['nik']; ?>">Edit</a></td>
                    <td class="text-center"><a class="btn btn-primary bg-danger" href="hapuspemesanan.php?id=<?php echo $hasil['nik']; ?>" onclick=" return confirm ('Apakah anda ingin menghapus data ini?');">Hapus</a>
                </tr>
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
                    echo "href='pemesanan.php?halaman=$previous'";
                } ?>>Previous</a>
            </li>
            <?php for ($x = 1; $x <= $total_halaman; $x++) { ?>
                <li class="page-item"><a class="page-link" href="pemesanan.php?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
            <?php } ?>
            <li class="page-item">
                <a class="page-link" <?php if ($halaman < $total_halaman) {
                    echo "href='pemesanan.php?halaman=$next'";
                } ?>>Next</a>
            </li>
        </ul>
    </nav>
</div>
</div>

<?php
require_once('../section/footer.php');
?>