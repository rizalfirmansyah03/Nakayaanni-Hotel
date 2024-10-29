<?php
    require_once('../../connect.php');
    require_once('../../function.php');
    require_once('../section/header.php');
    require_once('../section/sidebar.php');
    $jml_infokamar = query("SELECT COUNT(id_infokamar) as infokamar FROM tb_infokamar")[0];
?>

    <h2>Kelola Data Informasi Kamar</h2>
    <p>Jumlah data : <?php echo $jml_infokamar['infokamar']; ?></p>
    <a class="btn btn-warning" href="inforoom.php">Refresh</a>
    <br><br>

    <table class="table">
        <thead class="thead-info">
            <tr>
                <th class="text-center">Nomor</th>
                <th class="text-center">Nama Room</th>
                <th>Keterangan</th>
                <th class="text-center">Edit</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $query = "SELECT * FROM tb_infokamar";
            $result = mysqli_query($conn, $query);
            while($row = mysqli_fetch_array($result)) {     
        ?>
            <tr>                    
                <td class="text-center"><?php echo $row['id_infokamar']; ?></td>
                <td class="text-center"><?php echo $row['nama_room']; ?></td>
                <td><?php echo $row['keterangan']; ?></td>
                <td class="text-center"><a class="btn btn-primary bg-dark" href="updateinforoom.php?id=<?php echo $row['id_infokamar']; ?>">Edit</a></td>
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