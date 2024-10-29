-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Bulan Mei 2022 pada 18.05
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utspemweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_deskripsi`
--

CREATE TABLE `tb_deskripsi` (
  `id_deskripsi` int(2) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_deskripsi`
--

INSERT INTO `tb_deskripsi` (`id_deskripsi`, `deskripsi`) VALUES
(1, 'Selamat Datang!! Nakayaanni Hotel merupakan hotel mewah berbintang 5 dengan menawarkan fasilitas yang memadai dan tentunya view of city yang sangat cantik. Fasilitas yang ditersedia yaitu Open Restaurant, Café dan Lounge yang menyajikan menu internasional dan nusantara setiap harinya. Fasilitas lain yang tersedia yaitu HallRoom, SwimmingPool, ATM Center, Club, Layanan Parkir Valet, Laundry, wellness seperti GYM, SPA, dan Billiard. Selain itu, terdapat fasilitas untuk ibadah Mushola. Dengan memberikan fasilitas serta layanan yang ramah dapat menjadikan Nakayaanni Hotel sangat cocok untuk pilihan Anda.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_fasilitas`
--

CREATE TABLE `tb_fasilitas` (
  `id_fasilitas` int(2) NOT NULL,
  `nama_fasilitas` varchar(30) NOT NULL,
  `gambar_fasilitas` varchar(100) NOT NULL,
  `keterangan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_fasilitas`
--

INSERT INTO `tb_fasilitas` (`id_fasilitas`, `nama_fasilitas`, `gambar_fasilitas`, `keterangan`) VALUES
(1, 'Restaurant, Café dan Lounge', 'resto.jpg', 'Waroeng Rizal adalah restaurant and café bintang 5 yang juga di lengkap dengan lounge mewah. Waroeng Rizal Restarurant and café lounge menyajikan 2 jenis menu buffet, yaitu buffet ala western dan Indoensia. setiap harinya dengan harga terjangkau dan ramah dikantong. Di Waroeng Rizal ini Anda bisa memakan semua hidangan buffet sebanyak apapun atau all you can eat.'),
(2, 'HallRoom', 'hall.webp', 'Ballroom di Nakayaanni hotel mampu menampung menampung hingga 600 tamu dalam pengaturan gaya teater dan dapat dipisah menjadi 3 ruang pertemuan kecil untuk konferensi, seminar dan pertemuan. Ballroom dapat mengakomodasi 400 tamu untuk makan malam dan sangat sesuai untuk pesta pernikahan dan perayaan lainnya. Staff kami yang handal dan profesional akan selalu membantu Anda untuk memastikan suksesnya acara Anda.'),
(3, 'Mushola', 'mushola.jpeg', 'Nakayaanni hotel juga memfasilitasi mushola untuk tempat sholat dan beribadah umat muslim disekitarnya. Mushola ini didesain minimalis dan dilengkapi dengan tempat wudhu. Mushola Nakayaanni Hotel juga menjadi tujuan warga sekitar untuk menunaikan ibadah sunnah dan wajid disela-sela kesibukan.'),
(4, 'SwimmingPool', 'pool.webp', 'Swimming pool di Nakayaanni Hotel salah satu kolam renang yang mewah, yang terletak di setiap lantai kelipatan 5 tersedia untuk dewasa dan anak-anak dengan view pemandangan kota yang sangat cantik. Anda dapat berenang lama dengan santai di kolam renang kami atau bersantai di Lounge kami di pinggir kolam renang dengan minuman kegemaran Anda.'),
(5, 'GYM', 'gym.png', 'GYM and fitness center di Nakayaanni Hotel merupakan fasilitas terbaik di kota Sampit yang dibuka selama 7 hari, 24 jam menawarkan berbagai fasilitas olahraga untuk anda yang sering berolahraga. Fasilitas yang tersedia adalah alat cardiovascular, free weights, treadmill, static bicycle, stability balls, adjustable benches, serta technogym equipment dengan pelatih pribadi. Dan juga menyediakan berbagai kelas di pusat kebugaran setiap harinya meliputi kelas pilates, tai chi, yoga, zumba, body comb'),
(6, 'Billiard', 'billiard.jpg', '96 biliard merupakan salah satu fasilitas Nakayaanni Hotel yang digemari tamu hotel. Terletak di lantai tiga, Anda dapat bermain  biliiard dengan meja yang tersedia yaitu 24 meja (Carom table and pocket billiard table).'),
(7, 'SPA', 'spa.jpg', 'Fasilitas SPA disediakan bagi wisatawan atau tamu hotel yang menginap dengan memberikan kenyamanan bagi setiap tamu hotel. Perawatan SPA di Nakayaanni Hotel menawarkan berbagai treatment trandisional hingga modern yaitu Mulai dari paket perawatan yang kita kombinasikan dengan treatment lainnya seperti foot dan body massage, body scrub, flower bath serta facial. Dan juga ada salon yang melayani perawatan rambut, sehingga anda  tidak perlu keluar hotel untuk perawatan rambut.'),
(8, 'ATM Center', 'atm.jpeg', 'ATM center di Nakayaanni Hotel menyediakan ATM bersama yaitu untuk Bank BCA, BRI, BNI, Mandiri, BTN, Mega, Danamon, Maybank, dan Bank Kalteng. Untuk memberikan kemudahan dan kenyamanan tamu hotel dengan layanan 24 jam.'),
(9, 'Club', 'club.jpg', 'Oxana Karaoke and Club merupakan tempat hiburan di Nakayaanni Hotel terletak di lantai 4. Dengan memberikan suguhan music DJ yang berkelas dengan berbagai event yang berbeda-beda. Layanan Oxana Karaoke and Club ini hanya dibuka malam hari saja.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_fitur`
--

CREATE TABLE `tb_fitur` (
  `id_fitur` int(2) NOT NULL,
  `jenis_fitur` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_fitur`
--

INSERT INTO `tb_fitur` (`id_fitur`, `jenis_fitur`) VALUES
(1, 'Wi-Fi Gratis'),
(2, 'Pendingin Ruangan'),
(3, 'Tempat tidur khas NAKAYAANNI'),
(4, 'Meja Kerja'),
(5, 'Coffeemaker dengan kopi dan teh gratis'),
(6, 'Kamar mandi modern dengan perlengkapan mandi gratis dan pengering rambut'),
(7, '42” flat-screen HDTV'),
(8, 'Telepon dengan voicemail, ditambah panggilan lokal dan bebas pulsa gratis'),
(9, 'Setrika/papan setrika'),
(10, '100% bebas asap rokok');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_footer`
--

CREATE TABLE `tb_footer` (
  `id_footer` int(2) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `emailreservasi` varchar(30) NOT NULL,
  `emailadmin` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_footer`
--

INSERT INTO `tb_footer` (`id_footer`, `telepon`, `emailreservasi`, `emailadmin`, `alamat`, `kota`) VALUES
(1, '415.771.3000', 'reservation@nakayaanni.com', 'rizalfirman433@gamil.com', 'Jl. Jendral Sudirman KM. 5.5, Mentawa Baru Hulu', 'Sampit, Kabupaten Kotawaringin Timur, Kalimantan Tengah 74322');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_infokamar`
--

CREATE TABLE `tb_infokamar` (
  `id_infokamar` int(2) NOT NULL,
  `id_room` int(2) NOT NULL,
  `nama_room` varchar(30) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `keterangan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_infokamar`
--

INSERT INTO `tb_infokamar` (`id_infokamar`, `id_room`, `nama_room`, `gambar`, `keterangan`) VALUES
(1, 1, 'Single Room', 'single.jpg', 'Single Room juga merupakan tipe kamar paling yang paling umum di hotel kami. Kamar ini terdiri dari satu ruangan yang berisi 1 tempat tidur single bed. Dengan harga yang murah sangat cocok untuk anda seorang backpacker atau solo traveler.'),
(2, 2, 'Standard Room', 'standar.jpg', 'Standar Room juga merupakan jenis kamar paling dasar di hotel kami. Dengan harga yang relatif murah dan cocok untuk Anda yang ingin mencari pengalaman menginap dengan jangka waktu singkat. Terdapat tempat tidur lebih besar dari pada Single Room.'),
(3, 3, 'Superior Room', 'superior.jpg', 'Superior Room merupakan tipe kamar dengan letak ruangan yang di lantai atas dan lebih luas dari Standar Room. Kamar ini menawarkan tempat tidur dengan ukuran 2 queen bed. Sangat cocok untuk menginap sambil traveling.'),
(4, 4, 'Double Room', 'double.jpg', 'Double Room merupakan tipe kamar dengan memiliki tempat tidur berukuran besar yang muat untuk dua orang. Tempat tidur yang ditawarkan pada kamar ini berukuran king bed, Jika anda sedang berbulan madu lebih cocok menggunakan double room ini.'),
(5, 5, 'Deluxe Room', 'deluxe.jpg', 'Deluxe Room merupakan kamar yang memiliki satu level di atas tipe Superior dan Double. Tipe kamar ini cocok untuk keluarga dengan ukuran tempat tidur 2 king bed. Ditambah luas kamar sekitar 40 meter persegi dengan tambahan fasiltas ruang keluarga.'),
(6, 6, 'Presidential Suite', 'presidential.jpg', 'Presidential Suite juga merupakan jenis kamar royal paling luas dan mewah di hotel kami. Kamar ini menyediakan fasilitas yang lebih lengkap jika dibandingkan tiap tipe kamar sebelumnya seperti Fasilitas seperti dua area tempat tidur, dua ruang tamu dan ruang keluarga, dan furniture dengan menggunakan kualitas terbaik.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kontak`
--

CREATE TABLE `tb_kontak` (
  `id_kontak` int(5) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `subjek` varchar(30) DEFAULT NULL,
  `pesan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kontak`
--

INSERT INTO `tb_kontak` (`id_kontak`, `nama`, `email`, `subjek`, `pesan`) VALUES
(26, 'Muhammad Rizal Firmansyah', 'rizalfirman433@gmail.com', 'Pengalaman', 'Hotelnya keren');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_layanan`
--

CREATE TABLE `tb_layanan` (
  `id_layanan` int(2) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_layanan`
--

INSERT INTO `tb_layanan` (`id_layanan`, `judul`, `keterangan`) VALUES
(1, 'Kenyamanan', 'Kenyamanan adalah hal utama yang kami tawarkan, untuk itu segala kebutuhan menginap telah kami siapkan khusus untuk Anda.'),
(2, 'Harga Terbaik', 'Kami menawarkan kamar memiliki budget berkualitas dengan penawaran harga terbaik tanpa dipungut biaya transaksi lainnya.'),
(3, 'Makanan', 'Restoran kami siap melayani pembeli atau konsumen selama 24 jam penuh, dengan menu makanan yang beragam untuk Anda.'),
(4, 'Kualitas', 'Kami menjamin segala kualitas dari layanan yang kami sediakan untuk Anda, untuk memberi pengalaman menginap yang super mewah.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `nik` varchar(16) NOT NULL,
  `id_room` int(2) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_hp` bigint(12) NOT NULL,
  `cek_in` date NOT NULL,
  `cek_out` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pesan`
--

INSERT INTO `tb_pesan` (`nik`, `id_room`, `nama`, `no_hp`, `cek_in`, `cek_out`) VALUES
('6202040803030001', 4, 'Muhammad Rizal Firmansyah', 85754730736, '2022-05-06', '2022-05-07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_room`
--

CREATE TABLE `tb_room` (
  `id_room` int(2) NOT NULL,
  `nama_room` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_room`
--

INSERT INTO `tb_room` (`id_room`, `nama_room`) VALUES
(1, 'Single Room'),
(2, 'Standard Room\r\n'),
(3, 'Superior Room\r\n'),
(4, 'Double Room\r\n'),
(5, 'Deluxe Room'),
(6, 'Presidential Suite');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username_` char(30) NOT NULL,
  `password_` char(30) NOT NULL,
  `waktu_buat` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`id_admin`, `nama`, `username_`, `password_`, `waktu_buat`) VALUES
(1, 'Rizal', 'rizalfirman', '12345', '2022-04-08 08:54:46'),
(3, 'Muhammad Rizal Firmansyah', 'rizalfirman1234', '123456', '2022-04-14 02:36:22');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_deskripsi`
--
ALTER TABLE `tb_deskripsi`
  ADD PRIMARY KEY (`id_deskripsi`);

--
-- Indeks untuk tabel `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indeks untuk tabel `tb_fitur`
--
ALTER TABLE `tb_fitur`
  ADD PRIMARY KEY (`id_fitur`);

--
-- Indeks untuk tabel `tb_footer`
--
ALTER TABLE `tb_footer`
  ADD PRIMARY KEY (`id_footer`);

--
-- Indeks untuk tabel `tb_infokamar`
--
ALTER TABLE `tb_infokamar`
  ADD PRIMARY KEY (`id_infokamar`),
  ADD KEY `id_room` (`id_room`);

--
-- Indeks untuk tabel `tb_kontak`
--
ALTER TABLE `tb_kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indeks untuk tabel `tb_layanan`
--
ALTER TABLE `tb_layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indeks untuk tabel `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `id_room` (`id_room`);

--
-- Indeks untuk tabel `tb_room`
--
ALTER TABLE `tb_room`
  ADD PRIMARY KEY (`id_room`);

--
-- Indeks untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_admin`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_footer`
--
ALTER TABLE `tb_footer`
  MODIFY `id_footer` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_kontak`
--
ALTER TABLE `tb_kontak`
  MODIFY `id_kontak` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_infokamar`
--
ALTER TABLE `tb_infokamar`
  ADD CONSTRAINT `tb_infokamar_ibfk_1` FOREIGN KEY (`id_room`) REFERENCES `tb_room` (`id_room`);

--
-- Ketidakleluasaan untuk tabel `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD CONSTRAINT `tb_pesan_ibfk_1` FOREIGN KEY (`id_room`) REFERENCES `tb_room` (`id_room`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
