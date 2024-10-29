<?php
    require_once('../../connect.php');
    require_once('../../function.php');
    require_once('../section/header.php');
    require_once('../section/sidebar.php');
    $jml_footer = query("SELECT COUNT(id_footer) as footer FROM tb_footer")[0];
?>

    <h2>Kelola Data Footer</h2>
    <p>Jumlah data : <?php echo $jml_footer['footer']; ?></p>
    <?php
        $query = "SELECT * FROM tb_footer";
        $result = mysqli_query($conn, $query);
        while($row = mysqli_fetch_array($result)) {     
    ?>
    <a class="btn btn-primary bg-dark" href="updatefooter.php?id=<?php echo $row["id_footer"]; ?>">Edit Footer</a>
    <a class="btn btn-warning" href="footertabel.php">Refresh</a>
    <br><br>

    <table class="table">
        <thead class="thead-info">
            <tr>
                <th>Telepon</th>
                <th>Email Reservasi</th>
                <th>Email Admin</th>
                <th>Alamat</th>
                <th>Kota</th>
            </tr>
        </thead>
        <tbody>
            <tr>                       
                <td><?php echo $row['telepon']; ?></td>
                <td><?php echo $row['emailreservasi']; ?></td>
                <td><?php echo $row['emailadmin']; ?></td>
                <td><?php echo $row['alamat']; ?></td>
                <td><?php echo $row['kota']; ?></td>
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