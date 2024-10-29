<?php
    require_once('../../connect.php');
    require_once('../../function.php');
    require_once('../section/header.php');
    require_once('../section/sidebar.php');
    $jml_room = query("SELECT COUNT(id_room) as room FROM tb_room")[0];
?>

    <h2>Kelola Daftar Room</h2>
    <p>Jumlah data : <?php echo $jml_room['room']; ?></p>
    <a class="btn btn-warning" href="room.php">Refresh</a>
    <br><br>

    <table class="table text-center">
        <thead class="thead-info">
            <tr>
                <th>Nomor</th>
                <th>Nama Room</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $query = "SELECT * FROM tb_room";
            $result = mysqli_query($conn, $query);
            while($row = mysqli_fetch_array($result)) {     
        ?>
            <tr>                    
                <td><?php echo $row['id_room']; ?></td>
                <td><?php echo $row['nama_room']; ?></td>
                <td class="text-center"><a class="btn btn-primary bg-dark" href="updateroom.php?id=<?php echo $row['id_room']; ?>">Edit</a></td>
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