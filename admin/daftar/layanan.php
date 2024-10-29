<?php
    require_once('../../connect.php');
    require_once('../../function.php');
    require_once('../section/header.php');
    require_once('../section/sidebar.php');
    $jml_layanan = query("SELECT COUNT(id_layanan) as layanan FROM tb_layanan")[0];
?>

    <h2>Kelola Data Layanan</h2>
    <p>Jumlah data : <?php echo $jml_layanan['layanan']; ?></p>
    <a class="btn btn-warning" href="layanan.php">Refresh</a>
    <br><br>

    <table class="table">
        <thead class="thead-info">
            <tr>
                <th scope="col">Nomor</th>
                <th scope="col">Judul</th>
                <th style="width: -20px;" scope="col">Keterangan</th>
                <th class="text-center">Edit</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $query = "SELECT * FROM tb_layanan";
            $result = mysqli_query($conn, $query);
            while($row = mysqli_fetch_array($result)) {     
        ?>
            <tr>                    
                <td><?php echo $row['id_layanan']; ?></td>
                <td><?php echo $row['judul']; ?></td>
                <td><?php echo $row['keterangan']; ?></td>
                <td class="text-center"><a class="btn btn-primary bg-dark" href="updatelayanan.php?id=<?php echo $row['id_layanan']; ?>">Edit</a></td>
            </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
</div>
</div>

<?php
    require_once('../section/footer.php');
?>