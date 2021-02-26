-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 25, 2018 at 06:26 AM
-- Server version: 5.7.22
-- PHP Version: 7.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_surabaya`
--

-- --------------------------------------------------------

--
-- Table structure for table `banjir`
--

CREATE TABLE `banjir` (
  `id` int(11) NOT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `x` double DEFAULT NULL,
  `y` double DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `foto` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banjir`
--

INSERT INTO `banjir` (`id`, `alamat`, `x`, `y`, `deskripsi`, `foto`) VALUES
(1, 'Jalan Wonokusumo', -7.223321, 112.752884, 'Ketinggian Banjir mencapai -+ 30 centimeter, sehingga menyulitkan pengendara untuk melintas', 'jl_Wonokusumo.jpg'),
(2, 'Jalan Sidotopo Lor', -7.231482, 112.753089, 'Ketinggian banjir -+ 20-30 centimeter, cukup menyulitkan pengendara khususnya pengendara motor\r\n', 'jl_SidotopoLor.jpg'),
(3, 'Jalan Tambaksari', -7.252631, 112.755036, 'Ketinggian banjir mencapai -+25 centimeter, pengendara motor kesulitan untuk melintasi jalan\r\n\r\n', 'jl_Tambaksari.jpg'),
(4, 'Jalan Manukan Lor ', -7.259684, 112.664645, 'Ketinggian banjir mencapai -+25 centimeter, pengendara motor kesulitan untuk melintasi jalan ini', 'jl_ManukanLor.jpg'),
(5, 'Jalan Kenjeran', -7.246933, 112.774903, 'Ketinggian banjir mencapai -+20 centimeter', 'jl_Kenjeran.jpg'),
(6, 'Jalan Setro Tengah', -7.244873, 112.773359, 'Ketinggian banjir mencapai -+50 centimeter, pengendara mengalami kesulitan karena tingginya banjir, sehingga banyak pengendara yang mesinnya kemasukan air', 'jl_SetroTengah.jpg'),
(7, 'Jalan Sidoluhur', -7.241685, 112.730714, 'Ketinggian banjir mencapai -+60 centimeter, tingginya banjir menyulitkan pengendara untuk melintas', 'jl_Sidoluhur.jpg'),
(8, 'Jalan Basuki Rahmat', -7.266553, 112.741147, 'Ketinggian banjir mencapai -+20 centimeter, pengendara masih bisa melintasi jalan ini', 'jl_BasukiRahmat.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jalan_rusak`
--

CREATE TABLE `jalan_rusak` (
  `id` int(11) NOT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `x` double DEFAULT NULL,
  `y` double DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `foto` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jalan_rusak`
--

INSERT INTO `jalan_rusak` (`id`, `alamat`, `x`, `y`, `deskripsi`, `foto`) VALUES
(1, 'Jalan Tembaan', -7.246563, 112.735345, 'Jalan Rusak di bagian tengah jalan, membahayakan pengendara dari kedua jalur', 'jl_Tembaan.jpg'),
(2, 'Jalan Pahlawan', -7.249647, 112.73756, 'Jalan Rusak di bagian ruas kiri jalan', 'jl_Pahlawan.jpg'),
(3, 'Jalan Kalianak', -7.229588, 112.708711, 'Jalan berlubang di berbagai sisi jalan', 'jl_Kalianak.jpg'),
(4, 'Jalan Ngagel Jaya Selatan', -7.293616, 112.759421, 'Jalan Rusak parah di bagian ruas kiri jalan', 'jl_NgagelJayaSelatan.jpg'),
(5, 'Jalan Mayjen HR Muhammad', -7.283888, 112.69133, 'Jalan Rusak ringan di sisi kiri jalan', 'jl_HRMuhammad.jpg'),
(6, 'Jalan Raya Wiyung', -7.313808, 112.695248, 'Jalan Rusak parah di bagian ruas kiri jalan, dan sudah memakan korban', 'jl_RayaWiyung.jpg'),
(7, 'Jalan Mayjen Sungkono', -7.288291, 112.707396, 'Jalan berlubang di bagian tengah jalan, terdapat potongan pohon dan ban sebagai penanda jalan rusak', 'jl_MayjenSungkono.jpg'),
(8, 'Jalan Jemur Andayani', -7.328318, 112.739342, 'Jalan berlubang di berbagai sisi jalan', 'jl_JemurAndayani.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kaki_lima_liar`
--

CREATE TABLE `kaki_lima_liar` (
  `id` int(11) NOT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `x` double DEFAULT NULL,
  `y` double DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `foto` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kaki_lima_liar`
--

INSERT INTO `kaki_lima_liar` (`id`, `alamat`, `x`, `y`, `deskripsi`, `foto`) VALUES
(1, 'Daerah Pasar Kedurus', -7.320232, 112.705427, 'Pedagang Kaki Lima berada di area bangunan yang mangkrak pembangunannya', 'daerah_pasar_Kedurus.jpg'),
(2, 'Jalan Anggrek', -7.34025, 112.698239, 'Pedagang Kaki Lima berada di pinggir jalan, sehingga mengganggu pengendara yang melintas', 'jl_Anggrek.jpg'),
(3, 'Jalan Kedung Doro', -7.263535, 112.73121, 'Pedagang Kaki Lima berjualan di trotoar, sehingga mengganggu pejalan kaki ', 'jl_KedungDoro.jpg'),
(4, 'Jalan Kedungsari', -7.268078, 112.735767, 'Pedagang Kaki Lima berjualan di trotoar, sehingga mengganggu pejalan kaki yang melintas', 'jl_Kedungsari.jpg'),
(5, 'Jalan Kedondong', -7.271946, 112.73857, 'Pedagang Kaki Lima berjualan di trotoar dan pinggir jalan, sehingga mengganggu pejalan kaki dan pengendara yang melintas', 'jl_Kedondong.jpg'),
(6, 'Jalan Nias', -7.27373, 112.750943, 'Pedagang Kaki Lima berjualan di sisi jalan dan mengganggu pengendara yang melintas', 'jl_Nias.jpg'),
(7, 'Jalan Tapak Siring', -7.262474, 112.753516, 'Pedagang Kaki Lima berada di trotoar , sehingga mengganggu aktivitas pejalan kaki yang melintas', 'jl_TapakSiring.jpg'),
(8, 'Jalan Indrakila', -7.260798, 112.756965, 'Pedagang Kaki Lima berjualan di kedua sisi jalan , sehingga menyulitkan pengendara yang melintas', 'jl_Indrakila.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kemacetan`
--

CREATE TABLE `kemacetan` (
  `id` int(11) NOT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `x` double DEFAULT NULL,
  `y` double DEFAULT NULL,
  `deskripsi` varchar(45) DEFAULT NULL,
  `foto` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kemacetan`
--

INSERT INTO `kemacetan` (`id`, `alamat`, `x`, `y`, `deskripsi`, `foto`) VALUES
(1, 'Jalan Pemuda', -7.266319, 112.751043, 'Kemacetan', NULL),
(2, 'Jalan Basuki Rachmat', -7.266925, 112.74118, 'Kemacetan', NULL),
(3, 'Jalan Tunjungan', -7.258835, 112.738615, 'Kemacetan', NULL),
(4, 'Jalan Blauran', -7.257217, 112.733777, 'Kemacetan', NULL),
(5, 'Jalan Mayjen HR Muhammad', -7.283976, 112.691419, 'Kemacetan', NULL),
(6, 'Jalan Kenjeran', -7.245366, 112.769034, 'Kemacetan', NULL),
(7, 'Jalan Undaan', -7.251419, 112.744874, 'Kemacetan', NULL),
(8, 'Jalan Dr. Ir. Soekarno', -7.280122, 112.780922, 'Kemacetan', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kriminal`
--

CREATE TABLE `kriminal` (
  `id` int(11) NOT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `x` double DEFAULT NULL,
  `y` double DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `foto` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kriminal`
--

INSERT INTO `kriminal` (`id`, `alamat`, `x`, `y`, `deskripsi`, `foto`) VALUES
(1, 'Kedungdoro', -7.261389, 112.739986, 'Penjambretan kepada pejalan kaki', 'krim_kedungdoro.jpg'),
(2, 'Pecindilan', -7.246618, 112.747423, 'jambret terhadap ibu-ibu yang sedang jalan', 'krim_pecindilan.jpg'),
(3, 'Kenjeran', -7.245435, 112.768976, 'tabrak lari', 'krim_kenjeran.jpg'),
(4, 'Ngagel', -7.289108, 112.744865, 'jambret dengan memecahkan kaca mobil', 'krim_ngagel.jpg'),
(5, 'Kapasan', -7.239952, 112.750058, 'jambret dengan melakukan menodongkan senjata tajam', 'krim_kapasan.jpg'),
(6, 'Pucang', -7.287117, 112.755822, 'menjambret orang yang membawa motor laki', 'krim_pucang.jpg'),
(7, 'Tegalsari', -7.28056, 112.74082, 'jambret terutama perempuan yang terlihat muda', 'krim_tegalsari.jpg'),
(8, 'Jalan Tidar', -7.256876, 112.723792, 'jambret dengan cara pembunuhan', 'krim_tidar.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lampu_jalan_rusak`
--

CREATE TABLE `lampu_jalan_rusak` (
  `id` int(11) NOT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `x` double DEFAULT NULL,
  `y` double DEFAULT NULL,
  `deskripsi` varchar(45) DEFAULT NULL,
  `foto` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lampu_jalan_rusak`
--

INSERT INTO `lampu_jalan_rusak` (`id`, `alamat`, `x`, `y`, `deskripsi`, `foto`) VALUES
(1, 'Jalan Dr. Ir. H. Soekarno', -7.280122, 112.780922, 'Lampu jalan mati', 'lampu_mer.jpg'),
(2, 'Jalan Rungkut Puskesmas 37', -7.322455, 112.769822, 'timing waktu tidak benar', 'lampu_rungkut_puskesmas.jpg'),
(3, 'Jalan Rungkut Asri Tengah 711', -7.331277, 112.775444, 'waktu hijau ada 2 pihak yang jalan', 'lampu_rungkut_asri.jpg'),
(4, 'Jalan Kenjeran', -7.245472, 112.769227, 'lampu hanya menunjukkan kuning mati hidup', 'lampu_kenjeran.jpg'),
(5, 'Jalan Ambengan', -7.256058, 112.750662, 'warna hijau tidak menyala', 'lampu_ambengan.jpg'),
(6, 'Jalan Ngaglik', -7.248863, 112.750351, 'lampu merahnya mati', 'lampu_ngaglik.jpg'),
(7, 'Jalan Pucang Anom 33', -7.284366, 112.755815, 'seluruh lampu mati', 'lampu_pucang.jpg'),
(8, 'Jalan Profesor Doktor Mustopo', -7.265769, 112.756745, 'ketiga warna nyala bersamaan', 'lampu_prof.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `parkir_liar`
--

CREATE TABLE `parkir_liar` (
  `id` int(11) NOT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `x` double DEFAULT NULL,
  `y` double DEFAULT NULL,
  `deskripsi` varchar(45) DEFAULT NULL,
  `foto` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parkir_liar`
--

INSERT INTO `parkir_liar` (`id`, `alamat`, `x`, `y`, `deskripsi`, `foto`) VALUES
(1, 'Jl. Raya Tenggilis,Kali Rungkut', -7.320741, 112.766928, 'Parkir liar disekitar indomaret Point', 'parkirip.jpg'),
(2, 'Surabaya, Sawunggaling, Wonokromo', -7.30188, 112.726698, 'Parkir liar disekitar jalan sawunggaling', 'parkirsawung.jpg'),
(3, 'Jl. Taman Bungkul 9-23, Darmo', -7.290937, 112.740212, 'Parkir liar disekitar taman bungkul ', 'parkirbungkul.jpg'),
(4, 'Embong Kaliasin, Genteng', -7.265676, 112.749294, 'Parkir liar didekat monumen kapal selam', 'parkirkapal.jpg'),
(5, 'Jl. Raya Kali Rungkut, SMA N 14 Surabaya', -7.315163, 112.765954, 'parkir liar didepan SMA N 14 Surabaya', 'parkirsman14.jpg'),
(6, 'Jl. Kusuma Bangsa No.96, RT.005/RW.04', -7.253317, 112.750014, 'parkir liar didepan hitech mall', 'parkirhitech.jpg'),
(7, 'Jl. Mayjen Yono Suwoyo, Pradahkalikendal', -7.286261, 112.679575, 'parkir liar dikawasan lenmarc', 'parkirlenmarc.jpg'),
(8, 'Jl. Raya Kali Rungkut, Kedaung Group', -7.318785, 112.769556, 'Parkir liar disekitar kedaung group', 'parkirkedaung.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pengemis`
--

CREATE TABLE `pengemis` (
  `id` int(11) NOT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `x` double DEFAULT NULL,
  `y` double DEFAULT NULL,
  `deskripsi` varchar(45) DEFAULT NULL,
  `foto` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pengemis`
--

INSERT INTO `pengemis` (`id`, `alamat`, `x`, `y`, `deskripsi`, `foto`) VALUES
(1, 'Jl. Panjang Jiwo', -7.306579, 112.761983, 'Banyak pengemis di lampu merah panjang jiwo', 'pengemispanjangjiwo.jpg'),
(2, 'Jl. Bratang Jaya No.102', -7.299369, 112.762084, 'Pengemis di Lampu merah Bratang', 'pengemisbratang.jpg'),
(3, 'Jl. Raya Jemursari', -7.327331, 112.732125, 'Pengemis disekitar lampu merah kereta', 'pengemisjemurkereta.jpg'),
(4, 'Telkom Rungkut, Kendangsari, Tenggilis Mejoyo', -7.329187, 112.744718, 'Pengemis disekitar lampu merah plaza telkom', 'pengemistelkom.jpg'),
(5, 'Jl. Rungkut Asri Tengah 711', -7.331339, 112.775418, 'Pengemis disekitar mc donald', 'pengemiskidul.jpg'),
(6, 'Raya Kedung Baruk No.114, Kedung Baruk', -7.311379, 112.780568, 'Pengemis di lampu merah kedung baruk', 'pengemisbaruk.jpg'),
(7, 'Jl. Sukosemolo No.45, Semolowaru', -7.301213, 112.781698, 'pengemis di somolowaru', 'pengemissomolowaru.jpg'),
(8, 'Jl. Raya Wadung Asri', -7.342705, 112.767956, 'Banyak pengemis di bawah jembatan tol ', 'pengemistol.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pohon_tumbang`
--

CREATE TABLE `pohon_tumbang` (
  `id` int(11) NOT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `x` double DEFAULT NULL,
  `y` double DEFAULT NULL,
  `deskripsi` varchar(45) DEFAULT NULL,
  `foto` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pohon_tumbang`
--

INSERT INTO `pohon_tumbang` (`id`, `alamat`, `x`, `y`, `deskripsi`, `foto`) VALUES
(1, 'Jl. Demak, Tembok Dukuh, Bubutan', -7.253167, 112.720381, 'Pohon tumbang di jalan demak dukuh', 'pohondukuh.jpg'),
(2, 'Jl. Dr. Ir. H. Soekarno, Klampis Ngasem', -7.283526, 112.780846, 'Pohon tumbang didepan disekitar putar balik', 'pohonsoekarnoputar.jpg'),
(3, 'Jl. Raya Tenggilis, Kendangsari', -7.320703, 112.750773, 'Pohon Tumbang didekat jalan ', 'pohonkendangsari.jpg'),
(4, 'Jl. Dr. Ir. H. Soekarno, Penjaringan Sari', -7.324323, 112.780951, 'Pohon menutupi jalan ir Soekarno', 'pohonsoekarno.jpg'),
(5, 'Jl. Raya Kedung Baruk', -7.309004, 112.770768, 'pohon tumbang didaerah kedung baruk', 'pohonbaruk.jpg'),
(6, 'Jl. Raya Sutorejo 122-90, Dukuh Sutorejo', -7.261097, 112.789336, 'Pohon tumbang didepan UMS', 'pohonums.jpg'),
(7, 'Jl. Raya Manyar, Menur Pumpungan, Sukolilo', -7.294216, 112.762368, 'Pohon tumbang dekat putar balik', 'pohonmanyar.jpg'),
(8, 'Jl. Ngagel Jaya Sel.No.137, Baratajaya,Gubeng', -7.293474, 112.758983, 'Pohon tumbang di daerah ngagel', 'pohonngagel.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sampah`
--

CREATE TABLE `sampah` (
  `id` int(11) NOT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `x` double DEFAULT NULL,
  `y` double DEFAULT NULL,
  `deskripsi` varchar(45) DEFAULT NULL,
  `foto` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sampah`
--

INSERT INTO `sampah` (`id`, `alamat`, `x`, `y`, `deskripsi`, `foto`) VALUES
(1, 'Sungai Karang Pilang', -7.336322, 112.704296, 'Sampah popok bayi menumpuk di sungai', 'sampah1.jpg'),
(2, 'Pasar Wonokromo', -7.302028, 112.737195, 'Sampah Menumpuk di akses masuk Block C', 'sampahwnk.jpg'),
(3, 'sungai kalimas', -7.288079, 112.744952, 'penumpukkkan sampah di pinggir sungai', 'kalimas.jpg'),
(4, 'Sungai Kawasan Kapas Jaya', -7.241424, 112.762835, 'sampah menumpuk disungai', 'sampahnumpuk.jpg'),
(5, 'jl.raya kalirungkut', -7.317636, 112.767298, 'penumpukkan sampah di sungai', 'kalirungkut.jpg'),
(6, 'Jl.Kaliwaru 1', -7.317662, 112.768282, 'sampah menumpuk dekat jembatan', 'kaliwaru.jpg'),
(7, 'Sumur Welut Rw1', -7.323982, 112.672982, 'membuang sampah di lahan kosong', 'sumurwelut.jpg'),
(8, 'Jepara, Bubutan, Kota Surabaya', -7.24127, 112.722191, 'terlihat tumpukkan sampah di pinggiran sungai', 'jepara.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nohp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `name`, `nik`, `email`, `nohp`) VALUES
('vari', 'vari', 'Varianto Angga', '12345678', 'variantoangga@gmail.com', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banjir`
--
ALTER TABLE `banjir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jalan_rusak`
--
ALTER TABLE `jalan_rusak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kaki_lima_liar`
--
ALTER TABLE `kaki_lima_liar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kemacetan`
--
ALTER TABLE `kemacetan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kriminal`
--
ALTER TABLE `kriminal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lampu_jalan_rusak`
--
ALTER TABLE `lampu_jalan_rusak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parkir_liar`
--
ALTER TABLE `parkir_liar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengemis`
--
ALTER TABLE `pengemis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pohon_tumbang`
--
ALTER TABLE `pohon_tumbang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sampah`
--
ALTER TABLE `sampah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banjir`
--
ALTER TABLE `banjir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jalan_rusak`
--
ALTER TABLE `jalan_rusak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kaki_lima_liar`
--
ALTER TABLE `kaki_lima_liar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kemacetan`
--
ALTER TABLE `kemacetan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kriminal`
--
ALTER TABLE `kriminal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `lampu_jalan_rusak`
--
ALTER TABLE `lampu_jalan_rusak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `parkir_liar`
--
ALTER TABLE `parkir_liar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pengemis`
--
ALTER TABLE `pengemis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pohon_tumbang`
--
ALTER TABLE `pohon_tumbang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sampah`
--
ALTER TABLE `sampah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
