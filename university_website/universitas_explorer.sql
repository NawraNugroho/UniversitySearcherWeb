-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2020 at 10:05 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `universitas_explorer`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_touruniversitas`
--

CREATE TABLE `daftar_touruniversitas` (
  `id` int(11) NOT NULL,
  `nama_universitas` varchar(50) NOT NULL,
  `tour_guide` varchar(30) NOT NULL,
  `nama_depan` varchar(50) NOT NULL,
  `nama_belakang` varchar(50) NOT NULL,
  `sekolah_asal` varchar(50) NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `alamat_sekolah` text NOT NULL,
  `nomer_whatsapp` varchar(15) NOT NULL,
  `email` text NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `peserta_tour` varchar(10) NOT NULL,
  `nama_pendamping` varchar(30) NOT NULL,
  `ketersedian_waktu` time NOT NULL,
  `nambah_pendamping` varchar(15) NOT NULL,
  `hari` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_touruniversitas`
--

INSERT INTO `daftar_touruniversitas` (`id`, `nama_universitas`, `tour_guide`, `nama_depan`, `nama_belakang`, `sekolah_asal`, `kelas`, `alamat_sekolah`, `nomer_whatsapp`, `email`, `jenis_kelamin`, `peserta_tour`, `nama_pendamping`, `ketersedian_waktu`, `nambah_pendamping`, `hari`) VALUES
(1, '', 'Perempuan', 'Davina', 'Mahera', 'SMAN 28 JAKARTA', '11', 'Jl. Raya Ragunan No.33, RT.6/RW.7, Jati Padang, Kec. Ps. Minggu, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12540', '08124573891', 'davinamaher@gmail.com', 'Perempuan', '2', 'Ninda Syahputri', '00:00:00', '', '0000-00-00'),
(2, 'Universitas Indonesia', 'Laki-laki', 'Nino', 'Salim', 'SMAN 28 JAKARTA', '11', 'Jl. Raya Ragunan No.33, RT.6/RW.7, Jati Padang, Kec. Ps. Minggu, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12540', '08124573891', 'nino21salim@gmail.com', 'laki-laki', '3', 'Ibu dan Bapak', '09:00:00', '', '0000-00-00'),
(3, 'Universitas Indonesia', 'laki-laki', 'Novi', 'Setiawan', 'SMPN 13 JAKARTA', '9', 'Jl. Tirtayasa Raya Blok O/1, Melawai, Kec. Kebayoran Baru, Kota Jakarta Selatan Prov. D.K.I. Jakarta', '082256876691', 'novithe213!@gmail.com', 'laki-laki', '1 Personal', '0', '00:00:00', 'Nunu', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `formulir`
--

CREATE TABLE `formulir` (
  `id` int(11) NOT NULL,
  `namauniversitas` varchar(50) NOT NULL,
  `semester` varchar(30) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `ekskuldanclub` text NOT NULL,
  `namadepan` varchar(30) NOT NULL,
  `namabelakang` varchar(30) NOT NULL,
  `nomer_whatsapp` varchar(15) NOT NULL,
  `email` text NOT NULL,
  `ketersedianwaktu` datetime NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `nim_mahasiswa` varchar(30) NOT NULL,
  `daftar_tourguide` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formulir`
--

INSERT INTO `formulir` (`id`, `namauniversitas`, `semester`, `jurusan`, `ekskuldanclub`, `namadepan`, `namabelakang`, `nomer_whatsapp`, `email`, `ketersedianwaktu`, `jenis_kelamin`, `nim_mahasiswa`, `daftar_tourguide`) VALUES
(4, 'Universitas Telkom', '8', 'Kedokteran', 'Tari', 'Santosa', 'Arjuna', '008', 'santosa@telkom.com', '2019-09-05 00:00:00', 'laki-laki', '1300212345', ''),
(5, 'Universitas terbaiq', '2222', 'matematika', 'apapun', 'Aku', 'Balqis', '0808080808080', 'www@gmail.com', '2019-09-05 00:00:00', 'perempuan', '8765322', ''),
(6, 'Universitas Bina Nusantara', '5', 'Ekonomi', 'renang', 'Salsa', 'Nadia', '08114567828', 'salsa21@gmail.com', '2019-09-06 12:00:00', 'Perempuan', '08978797', ''),
(7, 'Universitas Indonesia', '4', 'Psikologi', 'Pencak Silat', 'Salsa', 'Nabila', '081357985244', 'salsa321nabil@gmail.com', '0000-00-00 00:00:00', 'perempuan', '', ''),
(8, 'Universitas Indonesia', '4', 'Psikologi', 'Pencak Silat', 'Salsa', 'Nabila', '081357985244', 'salsa321nabil@gmail.com', '0000-00-00 00:00:00', 'perempuan', '', ''),
(9, 'Universitas Indonesia', '4', 'Psikologi', 'Pencak Silat', 'Salsa', 'Nabila', '081357985244', 'salsa321nabil@gmail.com', '0000-00-00 00:00:00', 'perempuan', '002356788', ''),
(10, 'Universitas Islam Bandung', '', '', '', 'Nadhila', 'Putri Sabhira', '082256876691', 'nadhilacantik12@gmail.com', '0000-00-00 00:00:00', 'perempuan', '', ''),
(11, 'Universitas Airlangga', '5', 'Ekonomi', 'English Club dan Kegiatan Sosial', 'Nur', 'Khafifah', '081115758863', 'nur21khafifah@gmail.com', '0000-00-00 00:00:00', 'perempuan', '001257797898', '');

-- --------------------------------------------------------

--
-- Table structure for table `info_universitas`
--

CREATE TABLE `info_universitas` (
  `id` int(11) NOT NULL,
  `top` int(11) NOT NULL,
  `nama_univ` text NOT NULL,
  `provinsi` int(11) NOT NULL,
  `kota` text NOT NULL,
  `alamat` text NOT NULL,
  `deskripsi` text NOT NULL,
  `website` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info_universitas`
--

INSERT INTO `info_universitas` (`id`, `top`, `nama_univ`, `provinsi`, `kota`, `alamat`, `deskripsi`, `website`) VALUES
(1, 1, 'Institut Teknologi Bandung', 2, 'Bandung', 'Jl. Ganesha No.10, Lb. Siliwangi, Kecamatan Coblong, Kota Bandung, Jawa Barat 40132', 'Sejak tanggal 14 Oktober 2013 ITB menjadi Perguruan Tinggi Negeri Badan Hukum (PTN BH) yang memiliki otonomi pengelolaan dalam akademik dan nonakademik. Memiliki 27 program studi yang terakreditasi secara internasional (sebelas dari ABET, sebelas dari ASIIN).	', 'https://www.itb.ac.id/'),
(2, 2, 'Universitas Gadjah Mada', 4, 'Yogyakarta', 'Bulaksumur, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281', 'Didirikan oleh Pemerintah Republik Indonesia pada tanggal 19 Desember 1949 berdasarkan Peraturan Pemerintah Nomor 23 Tahun 1949. Kampus UGM yang terletak di Yogyakarta merupakan universitas pertama yang didirikan oleh Pemerintah Republik Indonesia setelah Indonesia merdeka.', 'https://ugm.ac.id/'),
(3, 3, 'Institut Pertanian Bogor', 2, 'Bogor', ' Kampus IPB Dramaga, Jl. Raya Dramaga, Babakan, Dramaga, Babakan, Kec. Dramaga, Bogor, Jawa Barat 16680\r\n', 'Sebelum diresmikan pada tahun 1963, IPB adalah sebuah fakultas pertanian pada Universitas Indonesia. Presiden Pertama Indonesia, melakukan peletakkan batu pertama pembangunan kampus sekaligus menandai peresmian Institut Pertanian Bogor sebagai sebuah perguruan tinggi mandiri.\r\n\r\n', 'https://ipb.ac.id/'),
(4, 4, 'Institut Teknologi Sepuluh November', 5, 'Surabaya', 'Jl. Raya ITS, Keputih, Kec. Sukolilo, Kota SBY, Jawa Timur 60111', 'Awalnya didirikan oleh YPTT yang diketuai oleh dr. Angka Nitisastro pada tanggal 10 November 1957. Nama ITS mulai digunakan dalam Peraturan Pemerintah No. 9 tahun 1961.', 'https://its.ac.id/'),
(5, 5, 'Universitas Indonesia', 1, 'Jakarta Pusat', 'Jl. Salemba Raya No.4, RW.5, Kenari, Kec. Senen, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10430', 'Khusus untuk Fakultas Kedokteran dan Kedokteran Gigi program S1/sarjana sejak 2013, lalu pindah ke kampus utama UI Depok untuk urusan akademis. Urusan administrasi tetap di Jakarta Pusat.', 'https://www.ui.ac.id/kampus-salemba.html'),
(6, 5, 'Universitas Indonesia', 2, 'Depok', 'Jl. Margonda Raya, Pondok Cina, Kecamatan Beji, Kota Depok, Jawa Barat 16424', 'Dibangun pada pertengahan tahun 1980-an untuk mengakomodasi modernisasi universitas menuju visi UI universitas riset kelas dunia. Saat ini, Kampus Depok adalah kampus utama UI.', 'https://www.ui.ac.id/tentang-ui/kampus-depok.html'),
(7, 6, 'Universitas Diponegoro', 3, 'Semarang', 'Jl. Prof.H.Soedarto S.H, Tembalang, Kec. Tembalang, Kota Semarang, Jawa Tengah 50275\r\n', 'Didirikan pada tahun 1956 sebagai Perguruan Tinggi Swasta dan baru mendapat status sebagai Perguruan Tinggi Negeri pada tahun 1961. Kata Diponegoro diambil dari nama pahlawan nasional.', 'https://undip.ac.id/'),
(8, 7, 'Universitas Airlangga', 5, 'Surabaya', 'Jl. Airlangga No.4 - 6, Airlangga, Kec. Gubeng, Kota SBY, Jawa Timur 60115', 'Universitas ini didirikan tanggal 10 November 1954 bertepatan dengan hari pahlawan yang ke-9. Berdasarkan data 30 September 2015, terdapat 38.047 mahasiswa yang terdaftar di Unair.', 'https://unair.ac.id/'),
(9, 8, 'Universitas Hasanuddin', 6, 'Makassar', 'Jl. Perintis Kemerdekaan KM.10, Tamalanrea Indah, Kec. Tamalanrea, Kota Makassar, Sulawesi Selatan 90245', 'Semula merupakan pengembangan dari Fakultas Ekonomi Universitas Indonesia ketika Bung Hatta masih menjadi Wakil Presiden. Kampus UNHAS semula dibangun di Kampus Baraya.', 'https://unhas.ac.id/'),
(10, 9, 'Universitas Brawijaya', 5, 'Malang', 'Jl. Veteran Malang, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Berdiri pada tahun 1963 melalui Ketetapan Menteri Pendidikan dan Ilmu Pengetahuan no.1 tanggal 5 Januari 1963. Tanggal tersebut kemudian ditetapkan sebagai Dies Natalis UB.', 'https://ub.ac.id/'),
(11, 10, 'Universitas Padjadjaran', 2, 'Sumedang', 'Jl. Raya Bandung Sumedang KM.21, Hegarmanah, Kec. Jatinangor, Kabupaten Sumedang, Jawa Barat 45363', 'Pada 20 Oktober 2014, Universitas ini berubah status menjadi Perguruan Tinggi Negeri Badan Hukum dari Badan Layanan Umum. Peresmian itu ditandai dengan peraturan pemerintah.', 'https://unpad.ac.id/'),
(12, 11, 'Universitas Andalas', 7, 'Padang', 'Limau Manis, Pauh, Padang City, West Sumatra 25175', 'Perguruan tinggi negeri Indonesia yang terletak di Kota Padang, Sumatra Barat, Indonesia. Universitas ini merupakan universitas tertua di luar Pulau Jawa yang dibuka secara resmi pada tanggal 23 Desember 1955 oleh Wakil Presiden Mohammad Hatta.', 'https://www.unand.ac.id/id/'),
(13, 12, 'Universitas Sebelas Maret', 3, 'Surakarta', 'Jl. Ir. Sutami No.36 A, Pucangsawit, Kec. Jebres, Kota Surakarta, Jawa Tengah 57126', 'Sebelas Maret pukul 10.00 WIB, dengan dibacanya Keputusan Presiden Republik Indonesia tentang pembukaan Universitas Negeri Surakarta Sebelas Maret, maka Universitas Sebelas Maret (UNS) resmi berdiri sebagai Perguruan Tinggi Negeri di Solo.', 'https://uns.ac.id/id/'),
(14, 13, 'Universitas Sumatra Utara', 8, 'Medan', 'Jl. Abdul Hakim No.1, Padang Bulan, Kec. Medan Baru, Kota Medan, Sumatera Utara 20222', 'Universitas Sumatra Utara adalah salah satu universitas terbaik di pulau Sumatra. USU juga adalah universitas pertama dan satu satunya punya jurusan D3 Statistika di dunia serta di pulau Sumatra yang mempunyai Fakultas Kedokteran.', 'https://www.usu.ac.id/id/'),
(15, 14, 'Universitas Telkom', 2, 'Bandung', 'Jl. Telekomunikasi Jl. Terusan Buah Batu, Sukapura, Kec. Dayeuhkolot, Bandung, Jawa Barat 40257', 'Terusan Buahbatu, di kawasan Bandung Technoplex (BT-Plex). Kampus lainnya berlokasi di daerah Gegerkalong Hilir, sebelah utara Kota Bandung, di kompleks perkantoran PT. Telkom.', 'https://telkomuniversity.ac.id/'),
(16, 15, 'Universitas Pendidikan Indonesia', 2, 'Bandung', 'Jl. Dr. Setiabudi No.229, Isola, Kec. Sukasari, Kota Bandung, Jawa Barat 40154', 'UPI adalah perguruan tinggi yang menganut sistem multikampus yaitu dengan 6 kampus yang tersebar di dua provinsi yaitu Jawa Barat dan Banten. Kampus utama UPI berlokasi di Jalan Setiabudhi 229, Bandung.', 'https://www.upi.edu/'),
(57, 16, 'Universitas Negeri Yogyakarta', 4, 'Yogyakarta', 'Jl. Colombo No.1, Karang Malang, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281', 'Dalam perkembangan UGM, ada beberapa fakultas yang menjadi cikal bakal lahirnya IKIP Yogyakarta, seperti Fakultas Pendidik (FIP), Fakultas Pendidikan Jasmani (FPD), dan Fakultas Keguruan dan Ilmu Pendidikan (FKIP).', 'http://www.uny.ac.id/'),
(58, 17, 'Universitas Islam Indonesia', 4, 'Yogyakarta', 'Kaliurang St No.Km. 14,5, Krawitan, Umbulmartani, Ngemplak, Sleman Regency, Special Region of Yogyakarta 55584', 'Universitas Islam Indonesia disingkat UII adalah perguruan tinggi swasta nasional tertua di Indonesia yang terletak di Yogyakarta. UII semula bernama Sekolah Tinggi Islam (STI) yang didirikan di Jakarta pada tanggal 8 Juli 1945 M.', 'http://www.uii.ac.id/'),
(59, 18, 'Universitas Negeri Semarang', 3, 'Semarang', 'Sekaran, Gunung Pati, Semarang City, Central Java 50229', 'UNNES merupakan salah satu perguruan tinggi eks-IKIP yang statusnya meningkat menjadi Universitas. Kampus utamanya terletak di daerah Sekaran (Gunungpati), wilayah selatan Kota Semarang, Jawa Tengah.\r\n\r\n', 'http://www.unnes.ac.id/'),
(60, 19, 'Universitas Negeri Malang', 5, 'Malang', 'Jl. Semarang No.5, Sumbersari, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Perguruan tinggi negeri yang terletak di Malang dan Blitar, Jawa Timur, Indonesia. Universitas yang didirikan pada tanggal 18 Oktober 1954 ini sebelumnya bernama PTPG Malang, lalu IKIP Malang yang membuatnya menjadi salah satu IKIP tertua di Indonesia.', 'http://www.um.ac.id/'),
(61, 20, 'Universitas Bina Nusantara', 9, 'Tangerang', 'Kav 21, Alam Sutera Jalan Jalur Sutera Barat Panunggangan Timur, RT.001/RW.004, Panunggangan, Kec. Pinang, Kota Tangerang, Banten 15143', 'Universitas Bina Nusantara, juga dikenal sebagai BINUS University, adalah universitas swasta di Indonesia. Kampus utama universitas terletak di Alam Sutera, Tangerang Selatan. Sebagian besar kampusnya berada di wilayah Jabodetabek.', 'https://binus.ac.id/');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL,
  `jurusan` text NOT NULL,
  `id_minat` int(11) NOT NULL,
  `id_universitas` int(11) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `jurusan`, `id_minat`, `id_universitas`, `rating`) VALUES
(1, 'Teknik Informatika', 4, 1, 1000),
(2, 'Teknik Informatika', 4, 4, 945),
(3, 'Teknik Informatika', 4, 7, 782),
(4, 'Pendidikan Dokter', 1, 5, 978),
(5, 'Pendidikan Dokter', 1, 2, 957),
(6, 'Pendidikan Dokter', 1, 8, 936),
(7, 'Pendidikan Dokter', 1, 7, 922),
(8, 'Pendidikan Dokter', 1, 10, 917),
(9, 'Pendidikan Dokter', 1, 11, 885),
(10, 'Teknik Elektro', 5, 1, 970),
(11, 'Teknik Elektro', 5, 4, 927),
(12, 'Teknik Elektro', 5, 2, 907),
(13, 'Teknik Elektro', 5, 6, 858),
(14, 'Teknik Elektro', 5, 10, 781),
(15, 'Teknik Elektro', 5, 9, 742),
(16, 'Ilmu Komputer', 4, 6, 910),
(17, 'Ilmu Komputer', 4, 2, 908),
(18, 'llmu Komputer', 4, 3, 818),
(19, 'Akuntansi', 3, 2, 955),
(20, 'Akuntansi', 3, 6, 914),
(21, 'Akuntansi', 3, 7, 852),
(22, 'Akuntansi', 3, 8, 797),
(23, 'Akuntansi', 3, 11, 795),
(24, 'Akuntansi', 3, 10, 794),
(25, 'Ekonomi Akuntansi', 3, 9, 788),
(26, 'Ilmu Hubungan Internasional', 2, 2, 937),
(27, 'Ilmu Hubungan Internasional', 2, 6, 888),
(28, 'Hubungan Internasional', 2, 7, 805),
(29, 'Ilmu Hubungan Internasional', 2, 8, 804),
(30, 'Ilmu Hubungan Internasional', 2, 11, 756),
(31, 'Ilmu Hubungan Internasional', 2, 9, 739),
(32, 'Psikologi', 2, 2, 903),
(33, 'Psikologi', 2, 6, 838),
(34, 'Psikologi', 1, 11, 754),
(35, 'Psikologi', 2, 8, 752),
(36, 'Psikologi', 2, 10, 732),
(37, 'Farmasi', 1, 2, 915),
(38, 'Farmasi', 1, 6, 899),
(39, 'Farmasi', 1, 1, 894),
(40, 'Farmasi', 1, 8, 847),
(41, 'Farmasi', 1, 11, 725),
(43, 'Manajemen', 3, 2, 931),
(44, 'Manajemen', 3, 6, 858),
(45, 'Manajemen', 3, 7, 802),
(46, 'Manajemen', 3, 8, 784),
(47, 'Ekonomi Manajemen', 3, 9, 762),
(48, 'Manajemen', 3, 11, 735),
(49, 'Manajemen', 3, 10, 719),
(50, 'Pendidikan Dokter', 1, 12, 919),
(51, 'Akuntansi', 3, 12, 842),
(52, 'Farmasi', 1, 12, 828),
(53, 'Manajemen', 3, 12, 805),
(54, 'Pendidikan Dokter Gigi', 1, 12, 818),
(55, 'Pendidikan Teknik Informatika', 14, 57, 732),
(56, 'Pendidikan Teknik Informatika & Komputer', 14, 59, 686),
(57, 'Pendidikan Teknik Informatika & Komputer', 14, 60, 686),
(58, 'Teknik Informatika', 4, 15, 829),
(59, 'Teknik Komputer', 5, 10, 795),
(60, 'Ilmu Komputer', 4, 14, 781),
(61, 'Ilmu Komputer', 4, 16, 796),
(62, 'Pendidikan Ilmu Komputer', 14, 16, 795),
(63, 'Teknik Kimia', 5, 1, 968),
(64, 'Teknik Fisika', 5, 1, 952),
(65, 'Teknik Perminyakan', 5, 1, 952),
(66, 'Teknik Lingkungan', 5, 1, 898),
(67, 'Teknik Farmasi', 5, 1, 894),
(68, 'Teknik Pertambangan', 5, 1, 892),
(69, 'Teknik Mesin', 5, 1, 884),
(71, 'Teknik Kimia', 5, 2, 905),
(72, 'Teknik Mesin & Biosistem', 5, 3, 712),
(73, 'Teknik Sipil & Lingkungam', 5, 3, 703),
(74, 'Sistem Informasi', 4, 4, 824),
(75, 'Sistem Informasi', 4, 8, 778),
(76, 'Teknologi Informasi', 4, 14, 794),
(77, 'Pendidikan Dokter', 1, 13, 854),
(78, 'Ilmu Administrasi Negara', 2, 13, 779),
(79, 'Teknik Kimia', 5, 13, 816),
(80, 'Ilmu Komunikasi', 2, 13, 739),
(81, 'Teknik Industri', 5, 13, 770),
(82, 'Pendidikan Matematika', 14, 13, 752),
(83, 'Pendidikan Bahasa Inggris', 14, 16, 759),
(84, 'Pendidikan Bahasa Inggris', 14, 57, 706),
(85, 'Pendidikan Bahasa & Sastra Indonesia', 14, 57, 698),
(86, 'Pendidikan Bahasa Inggris', 14, 59, 705),
(87, 'Pendidikan Bahasa Inggris', 14, 60, 705),
(88, 'Psikologi', 1, 12, 758),
(89, 'Psikologi', 2, 16, 739),
(90, 'Psikologi', 2, 59, 666),
(91, 'Psikologi', 2, 60, 666);

-- --------------------------------------------------------

--
-- Table structure for table `minat_bakat`
--

CREATE TABLE `minat_bakat` (
  `id` int(11) NOT NULL,
  `minat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `minat_bakat`
--

INSERT INTO `minat_bakat` (`id`, `minat`) VALUES
(1, 'Kesehatan'),
(2, 'Sosial & Humaniora'),
(3, 'Ekonomi & Bisnis'),
(4, 'Komputer & Teknologi'),
(5, 'Ilmu Teknik'),
(14, 'Keguruan & Pendidikan');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id` int(11) NOT NULL,
  `provinsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id`, `provinsi`) VALUES
(1, 'DKI Jakarta'),
(2, 'Jawa Barat'),
(3, 'Jawa Tengah'),
(4, 'DIY'),
(5, 'Jawa Timur'),
(6, 'Sulawesi Selatan'),
(7, 'Sumatra Barat'),
(8, 'Sumatra Utara'),
(9, 'Banten');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_touruniversitas`
--
ALTER TABLE `daftar_touruniversitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formulir`
--
ALTER TABLE `formulir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info_universitas`
--
ALTER TABLE `info_universitas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `info_provinsi` (`provinsi`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jurusan` (`id_universitas`),
  ADD KEY `jurusan_minat` (`id_minat`);

--
-- Indexes for table `minat_bakat`
--
ALTER TABLE `minat_bakat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_touruniversitas`
--
ALTER TABLE `daftar_touruniversitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `formulir`
--
ALTER TABLE `formulir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `info_universitas`
--
ALTER TABLE `info_universitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `minat_bakat`
--
ALTER TABLE `minat_bakat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `info_universitas`
--
ALTER TABLE `info_universitas`
  ADD CONSTRAINT `info_provinsi` FOREIGN KEY (`provinsi`) REFERENCES `provinsi` (`id`);

--
-- Constraints for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD CONSTRAINT `jurusan_minat` FOREIGN KEY (`id_minat`) REFERENCES `minat_bakat` (`id`),
  ADD CONSTRAINT `jurusan_univ` FOREIGN KEY (`id_universitas`) REFERENCES `info_universitas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
