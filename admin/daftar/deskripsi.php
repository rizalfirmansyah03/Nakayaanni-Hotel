<?php
    require_once('../../connect.php');
    require_once('../../function.php');
    require_once('../section/header.php');
    require_once('../section/sidebar.php');
    $jml_deskripsi = query("SELECT COUNT(id_deskripsi) as deskripsi FROM tb_deskripsi")[0];
?>

    <h2>Kelola Data Deskripsi</h2>
    <p>Jumlah data : <?php echo $jml_deskripsi['deskripsi']; ?></p>
    <?php
        $query = "SELECT * FROM tb_deskripsi";
        $result = mysqli_query($conn, $query);
        while($row = mysqli_fetch_array($result)) {     
    ?>
    <a class="btn btn-primary bg-dark" href="updatedeskripsi.php?id=<?php echo $row["id_deskripsi"]; ?>">Edit Deskripsi</a>
    <a class="btn btn-warning" href="deskripsi.php">Refresh</a>
    <br><br>

    <table class="table">
        <thead class="thead-info">
            <tr>
                <th scope="col">Nomor</th>
                <th style="width: -20px;" scope="col">Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            <tr>                    
                <td><?php echo $row['id_deskripsi']; ?></td>
                <td><?php echo $row['deskripsi']; ?></td>
            </tr>
        </tbody>
    </table>
    <?php
        }
    ?>
</div>
</div>

<?php
    require_once('../section/footer.php');
?>