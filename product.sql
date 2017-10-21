-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2017 at 02:47 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productID` int(11) NOT NULL,
  `productName` varchar(233) NOT NULL,
  `productCategory` varchar(22) NOT NULL,
  `productOverview` varchar(233) NOT NULL,
  `productDetail` varchar(2555) NOT NULL,
  `productCost` int(11) NOT NULL,
  `productDisc` int(11) NOT NULL,
  `productFixCost` int(11) NOT NULL,
  `productPic1` varchar(233) NOT NULL,
  `productPic2` varchar(233) NOT NULL,
  `productPic3` varchar(233) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `productName`, `productCategory`, `productOverview`, `productDetail`, `productCost`, `productDisc`, `productFixCost`, `productPic1`, `productPic2`, `productPic3`) VALUES
(1, 'Catur Simpson', 'papan', 'Catur yang memakai tokoh The Simpson sebagai bidan bidannya', 'Suatu hari ada seekor buaya dan burung penyanyi. Mereka hidup dihutan dan bersahabat sangat akrab. Suatu ketika burung penyanyi bernyanyi dihadapan buaya dengan bertengger di hidungnya. Karena sangat asiknya mereka bernyanyi dan mendengarkan suara merdu.', 100000, 10, 90000, 'assets/images/p1.jpg', 'assets/images/p2.jpg', 'assets/images/p3.jpg'),
(2, 'Pedang Pedangan', 'laki', 'Permainan yang pasti disukai oleh semua lelaki segala umur', 'harum mawar... di taman...\r\nmenusuk hingga ke dalam... sukma...\r\nyang menjadi tumpuan rindu, cinta bersama...\r\n\r\ndi sore itu...\r\nmenuju senja...\r\nbersama...\r\nhati yang terlukaaa...\r\ntertusuk pilu menganga luka itu\r\ndiantara senyum yang menapaki jejak kenangan\r\ndi sore yang gelap ditutupi awan\r\nbersama setangkup bunga cerita yang kian\r\nmerambat di dinding penantian\r\nada yang mati, saat itu dalam kerinduaan...\r\nyang tak terobati...', 30000, 0, 30000, 'assets/images/p2.jpg', 'assets/images/p3.jpg', 'assets/images/p4.jpg'),
(3, 'Berbie', 'perempuan', 'Di malam hari\r\nMenuju pagi\r\nSedikit cemas\r\nBanyak rindunya', 'Tak terasa gelap pun jatuh\r\nDiujung malam menuju pagi yang dingin\r\nHanya ada sedikit bintang malam ini\r\nMungkin karena kau sedang cantik-cantiknya\r\n\r\nLalu mataku merasa malu\r\nSemakin dalam ia malu kali ini\r\nKadang juga ia takut\r\nTatkala harus berpapasan ditengah pelariannya', 50000, 10, 45000, 'assets/images/p3.jpg', 'assets/images/p4.jpg', 'assets/images/p6.jpg'),
(4, 'Ukulele', 'laki', 'Gitar kecil dengan suara yang unik', 'Ada warna coklat, merah, putih, biru, hitam', 175000, 10, 157500, '', '', ''),
(5, 'Monopoli', 'papan', 'Belajar jual beli', 'Ada orang-orangan, 2 dadu, kartu kesempatan, uang-uangan, miniatur rumah hotel dan kota', 75000, 5, 71250, '', '', ''),
(6, 'Teddy Bear', 'perempuan', 'Boneka beruang besar', 'Ada berbagai macam ekspresi seperti sedang bermain, ke sekolah, belanja ke mall, makan, dll', 350000, 10, 315000, '', '', ''),
(7, 'Ular Tangga', 'papan', 'Permainan jaman dulu yang tidak ketinggalan jaman', 'Ada papan permainan, 2 dadu, dan 4 karakter', 30000, 0, 30000, '', '', ''),
(8, 'Othello', 'papan', 'Seperti catur namun dengan bulatan-bulatan', 'Ada bulatan putih dan hitam', 50000, 5, 47500, '', '', ''),
(9, 'Four Horses', 'papan', 'Lawan 3 kuda lainnya untuk mencapai titik target menggunakan dadu', 'Ada 4 kuda berwarna merah, kuning, hijau, biru', 80000, 0, 80000, '', '', ''),
(10, 'Scrabble', 'papan', 'Mainan untuk mengasah kemampuan berpikir dan kosakata anak', 'Ada banyak huruf dan soal-soal', 100000, 25, 75000, '', '', ''),
(11, 'Ouija', 'papan', 'Papan pemanggil setan', 'Dari kayu, ada ringnya untuk mengarahkan ke karakter', 500000, 10, 450000, '', '', ''),
(12, 'Tarot', 'papan', 'Kartu pembaca nasib', 'Bergambar banyak', 250000, 0, 250000, '', '', ''),
(13, 'Werewolf', 'papan', 'Kartu untuk bermain werewolf', 'Ada banyak karakter seperti werewolf, villager, hunter, seer, lover, doctor, guardian, dll', 175000, 0, 175000, '', '', ''),
(14, 'Twister', 'papan', 'Permainan memutar jarum dengan 12 tantangan di tiap pointnya', 'Tantangan tidak berbahaya bagi anak-anak', 150000, 15, 127500, '', '', ''),
(15, 'Tamiya', 'laki', 'Mobil keren bermesin', 'Tersedia semua warna', 150000, 0, 150000, '', '', ''),
(16, 'Drum Kecil', 'laki', 'Tertarik menjadi drummer, suka pukul-pukul sambil nyanyi?', 'Ada 2 bulatan besar dan kecil, juga ada piringannya, ada 2 stik nya juga', 50000, 0, 50000, '', '', ''),
(17, 'Pistol Air', 'laki', 'Bermain tembak-tembakan ala film action dengan peluru air, buat musuhmu basah kuyup!', 'Tersedia berbagai macam warna dan ukuran', 250000, 10, 225000, '', '', ''),
(18, 'Motor motoran', 'laki', 'Ingin menjadi pembalap? Dapatkan segera berbagai serinya', 'Ada motor matic, bebek, sport, trill', 500000, 10, 450000, '', '', ''),
(19, 'Robot', 'laki', 'Bisa bersuara, mengeluarkan laser, ada sayapnya', 'Berwarna putih dengan mata biru', 300000, 0, 300000, '', '', ''),
(20, 'Transformer', 'laki', 'Mobil ukuran sedang bisa diubah menjadi transformer', 'Ada karakter bumblebee, optimus, ironhide, megatron, frenzy', 250000, 0, 250000, '', '', ''),
(21, 'UNO Stacko', 'laki', 'Bermain UNO dengan cara baru yang lebih asyik', 'Memiliki karakter yang sama dengan versi kartunya', 150000, 25, 112500, '', '', ''),
(22, 'Helikopter', 'laki', 'Bisa diterbangkan', 'Ada remote control nya', 200000, 20, 160000, '', '', ''),
(23, 'Masak Masakan', 'perempuan', 'Belajar memasak dengan alat masak kecil', 'Ada panci, kompor, spatula, blender, talenan, pisau tumpul, dll', 85000, 0, 85000, '', '', ''),
(24, 'Playdoh', 'perempuan', 'Permainan membuat makanan seperti kue, burger, pizza dari lilin warna-warni', 'Lilin mainan berwarna merah, oranye, kuning, hijau, biru, ungu, hitam, putih', 200000, 25, 150000, '', '', ''),
(25, 'Kamera', 'perempuan', 'Didalamnya ada gambar-gambar pemandangan', 'Bisa berbunyi dan mengeluarkan cahaya', 25000, 0, 25000, '', '', ''),
(26, 'Dandan', 'perempuan', 'Belajar dandan', 'Bedak, eyeshadow, pensil alis, blush on, lipstik', 350000, 30, 245000, '', '', ''),
(27, 'Papan Gambar', 'perempuan', 'Belajar menggambar', 'Ada spidol dan penghapusnya', 75000, 0, 75000, '', '', ''),
(28, 'Boneka Bayi', 'perempuan', 'Belajar menjadi ibu', 'Ada boneka bayi, botol susu, dot, popok mainan, tempat makan, bak mandi, bebek karet, kasur bayi', 500000, 25, 375000, '', '', ''),
(29, 'Lego Little Pony', 'perempuan', 'Bisa menyusun Lego menjadi dunia Little Pony', 'Ada banyak rumah, kandang, kuda, anak perempuan dari lego', 750000, 20, 600000, '', '', ''),
(30, 'Aksesoris Cantik', 'perempuan', 'Bisa membuat gelang, kalung, cincin mainan', 'Ada manik-manik, karet, tali, liontin', 250000, 10, 225000, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`),
  ADD KEY `productCategory` (`productCategory`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
