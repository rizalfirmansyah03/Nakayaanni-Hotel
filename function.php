<?php
    require("connect.php");

    function query($query)
    {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function room($id)
    {
        global $conn;
        $query = "SELECT r.id_room AS 'idr', r.nama_room AS 'nr', ik.id_infokamar AS 'idik', ik.nama_room AS 'nir', ik.gambar AS 'gambar', ik.keterangan AS 'ket' FROM tb_room AS r INNER JOIN tb_infokamar AS ik ON (r.id_room = ik.id_room) WHERE r.id_room = '$id'";
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function tambahInfoRoom($data)
    {

        global $conn;
        $author = 1;

        // ambil data dari tiap elemen dalam form
        $id_infokamar = htmlspecialchars($data["id_infokamar"]);
        $id_room = htmlspecialchars($data["id_room"]);
        $nama_room = htmlspecialchars($data["nama_room"]);
        $gambar = htmlspecialchars($data["gambar"]);
        $keterangan = htmlspecialchars($data["keterangan"]);

        $nama_destinasi = htmlspecialchars($data["nama_destinasi"]);
        $keterangan = htmlspecialchars($data["keterangan"]);

        $file_name = $_FILES['upload_gambar']['name'];
        $file_temp_name = $_FILES['upload_gambar']['tmp_name'];

        move_uploaded_file($file_temp_name, 'asset/' . $file_name . '');


        $query = "INSERT INTO tb_infokamar (id_infokamar, id_room, nama_room, gambar, keterangan) VALUES ('$id_infokamar','$id_room','$nama_room','$file_name','$keterangan')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function limitfasilitas()
    {
        global $conn; 
        $query = "SELECT * FROM tb_fasilitas";
        $result = mysqli_query($conn, $query);
        $jumlah_data = mysqli_num_rows($result);

        return $jumlah_data;
    }

    function fasilitas($halaman_awal, $batas)
    {
        global $conn; 
        $query = "SELECT * FROM tb_fasilitas LIMIT $halaman_awal, $batas ";
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function carifasilitas($keyword)
    {
        $query = "SELECT * FROM tb_fasilitas WHERE nama_fasilitas LIKE '%$keyword%'";
        return query($query);
    }

    function fitur($id)
    {
        global $conn;
        $query = "SELECT * FROM tb_fitur WHERE id_fitur = '$id'";
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function layanan($id)
    {
        global $conn;
        $query = "SELECT * FROM tb_layanan WHERE id_layanan = '$id'";
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function limitfitur()
    {
        global $conn; 
        $query = "SELECT * FROM tb_fitur";
        $result = mysqli_query($conn, $query);
        $jumlah_data = mysqli_num_rows($result);

        return $jumlah_data;
    }

    function pagingfitur($halaman_awal, $batas)
    {
        global $conn; 
        $query = "SELECT * FROM tb_fitur LIMIT $halaman_awal, $batas ";
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function carijenisfitur($keyword)
    {
        $query = "SELECT * FROM tb_fitur WHERE jenis_fitur LIKE '%$keyword%'";
        return query($query);
    }

    function limitkotakpesan()
    {
        global $conn; 
        $query = "SELECT * FROM tb_kontak";
        $result = mysqli_query($conn, $query);
        $jumlah_data = mysqli_num_rows($result);

        return $jumlah_data;
    }

    function pagingkotakpesan($halaman_awal, $batas)
    {
        global $conn; 
        $query = "SELECT * FROM tb_kontak LIMIT $halaman_awal, $batas ";
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function carikotakpesan($keyword)
    {
        $query = "SELECT * FROM tb_kontak WHERE nama LIKE '%$keyword%' OR email LIKE '%$keyword%' OR subjek LIKE '%$keyword%'";
        return query($query);
    }

    function limitpesan()
    {
        global $conn; 
        $query = "SELECT r.nama_room, p.nik, p.id_room, p.nama, p.no_hp, p.cek_in, p.cek_out FROM tb_pesan as p INNER JOIN tb_room as r ON (r.id_room = p.id_room)";
        $result = mysqli_query($conn, $query);
        $jumlah_data = mysqli_num_rows($result);

        return $jumlah_data;
    }

    function pagingpesan($halaman_awal, $batas)
    {
        global $conn; 
        $query = "SELECT r.nama_room, p.nik, p.id_room, p.nama, p.no_hp, p.cek_in, p.cek_out FROM tb_pesan as p INNER JOIN tb_room as r ON (r.id_room = p.id_room) ORDER BY p.cek_in ASC LIMIT $halaman_awal, $batas ";
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function caripesan($keyword)
    {
        $query = "SELECT r.nama_room, p.nik, p.id_room, p.nama, p.no_hp, p.cek_in, p.cek_out FROM tb_pesan as p INNER JOIN tb_room as r ON (r.id_room = p.id_room) WHERE nik LIKE '%$keyword%' OR nama LIKE '%$keyword%' OR nama_room LIKE '%$keyword%'";
        return query($query);
    }

    function tgl_indo($tgl){
		$tanggal = substr($tgl,8,2);
		$bulan = getBulan(substr($tgl,5,2));
		$tahun = substr($tgl,0,4);
		return $tanggal.' '.$bulan.' '.$tahun;
	}

	function getBulan($bln){
		switch ($bln) {
			case 1:
				return "Januari";
				break;
			case 2:
				return "Februari";
				break;
			case 3:
				return "Maret";
				break;
			case 4:
				return "April";
				break;
			case 5:
				return "Mei";
				break;
			case 6:
				return "Juni";
				break;
			case 7:
				return "Juli";
				break;
			case 8:
				return "Agustus";
				break;
			case 9:
				return "September";
				break;
			case 10:
				return "Oktober";
				break;
			case 11:
				return "November";
				break;
			case 12:
				return "Desember";
				break;
		}
	}
?>