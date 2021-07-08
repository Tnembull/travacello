-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 06, 2021 at 09:14 AM
-- Server version: 10.5.9-MariaDB-log
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_nabilah`
--

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id` int(11) NOT NULL,
  `nama_file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diupload` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id`, `nama_file`, `judul`, `diupload`, `status`) VALUES
(1, 'bromo.jpg', 'Bromo', '2021-07-01 00:00:00', '1'),
(2, 'belitung.jpg', 'Belitung', '2021-07-05 00:41:42', '1'),
(4, 'pianemo.jpg', 'Pianemo', '2021-07-05 00:45:41', '1'),
(7, 'bandanaeira.jpg', 'Bandanaeira', '2021-07-05 01:16:32', '1'),
(8, 'wakatobi.jpg', 'Wakatobi', '2021-07-05 01:36:40', '1'),
(10, 'tana-toraja.jpg', 'Tana Toraja', '2021-07-06 01:27:13', '1'),
(11, 'toraja.jpg', 'Toraja', '2021-07-06 01:27:27', '1'),
(12, '9.png', 'Bali', '2021-07-06 01:28:23', '1');

-- --------------------------------------------------------

--
-- Table structure for table `paket_tour`
--

CREATE TABLE `paket_tour` (
  `id_paket_tour` int(11) NOT NULL,
  `nama_paket` varchar(100) NOT NULL,
  `gambar_paket` text NOT NULL,
  `harga_paket` int(11) NOT NULL,
  `itinerary_paket` text NOT NULL,
  `detail_paket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket_tour`
--

INSERT INTO `paket_tour` (`id_paket_tour`, `nama_paket`, `gambar_paket`, `harga_paket`, `itinerary_paket`, `detail_paket`) VALUES
(1, 'Paket Jogja 5 Hari 4 Malam', 'paket_biasa.jpg', 400000, '<p>Itinerary Wisata Paket Tour Jogja 5 Hari 4 Malam </p>', '<p>Syarat dan Pemesanan Paket Tour Jogja 5 Hari 4 Malam</p>'),
(2, 'Paket Tour Wisata Jogja 3D2N', 'Paket-3D.jpg', 300000, 'ITINERARY WISATA Paket Tour Wisata Jogja 3D2N', 'Syarat dan Ketentuan Pemesanan Paket Tour Wisata Jogja 3D2N'),
(3, 'Paket Wisata 4 Hari 3 Malam', 'Paket-4D.jpg', 600000, 'Goa Pindul – Pantai Indrayanti – Candi Ijo – Bukit Bintang ', 'Syarat dan Pemesanan Paket Wisata 4 Hari 3 Malam di Jogja');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id_review` int(11) NOT NULL,
  `nama_review` varchar(100) NOT NULL,
  `email_review` varchar(100) NOT NULL,
  `tlp_review` varchar(13) NOT NULL,
  `pesan_review` text NOT NULL,
  `rating` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id_review`, `nama_review`, `email_review`, `tlp_review`, `pesan_review`, `rating`) VALUES
(1, 'Bobby', 'bobbymalela@gmail.com', '813123123123', 'Mantep amat', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `id_tour` int(11) NOT NULL,
  `nama_tour` varchar(100) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `itinerary` text NOT NULL,
  `detail` text NOT NULL,
  `terms` text NOT NULL,
  `gambar` text NOT NULL,
  `pricing` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`id_tour`, `nama_tour`, `duration`, `itinerary`, `detail`, `terms`, `gambar`, `pricing`) VALUES
(1, 'Belitung', '3D2N', '<p>Day 01</p>\r\n\r\nTamu akan dijemput dibandara pagi hari.\r\nMenuju penginapan untuk menyimpan bagasi & mencicipi mie belitung / soto belitung.\r\nPantai burung mandi\r\nVihara dewi kwan im\r\nKota manggar\r\nMakan Siang\r\nPantai Serdang\r\nMuseum Kata (Kopi Kuli)\r\nSD laskarpelangi\r\nSunset di Tanjung Pendam\r\nMakan Malam\r\n\r\n<p>Day 02</p>\r\n\r\nBukit berahu\r\nPantai tanjungkelayang\r\nStart hoping island\r\nPulau pasir, pulau batu berlayar, pulau lengkuas, pulau kepayang\r\n(lunch-box + snorkling)\r\nPantai tanjungtinggi & sunset\r\nDinner\r\n\r\n<p>Day 3 Rumah Adat Danau Kaolin (B)</p>\r\n\r\nSarapan\r\nMengunjungi Rumah Adat Belitung dan Danau Kaolin\r\nPerjalanan kembali ke Bandara Hanandjoedin dan kembali ke kota masing-masing\r\n', '<ul>\r\n<li>Included Mobil + driver + BBM (antar jemput bandara) Hotel (1room ber2) Boat + Alat snorkel (life-jacket + goggle) Karcis masuk wisata 1x mie belitung 1x kopi manggar 1x nasi Box (pas hoping island) Breakfast Hotel + Lunch Dinner</li>\r\n<li>Not Included Asuransi Perjalanan (dapat kami bantu urus) Biaya keperluan pribadi saat tour Biaya optional tour (overtime/ di luar itinerari) Tip untuk guide dan tour leader Airport Tax</li>\r\n</ul>', '<ol> <li>Travacello berhak membatalkan trip dengan pertimbangan-pertimbangan tertentu di luar kemampuan Travacello, dan uang DP peserta akan dikembalikan 100%.</li> <li>Jadwal acara/Itinerary bisa berubah tergantung cuaca dan kondisi cuaca alam dan lalu lintas.</li> <li>Apabila destinasi tujuan tidak memungkinkan untuk dikunjungi karena bencana, cuaca yang tidak mendukung, penutupan tempat wisata, atau sebab lain diluar kendali kami, maka peserta tidak berhak meminta kompensasi atau pengembalian biaya yang telah dibayarkan.</li> <li>Tidak ada pengembalian Down Payment/Uang Muka atau uang yang sudah di bayarkan bagi peserta trip yang membatalkan keikutsertaannya.</li> <li>Membayar DP as Commitment fee minimal 50%, bisa dimulai dari Notes/event di-publish atau bisa juga langsung melunasi full.</li> <li>Harga sewaktu-waktu berubah apabila terjadi kenaikan BBM secara nasional atau kenaikan lain yang berhubungan dengan destinasi.</li> <li>Pembayaran dapat di lakukan melalui transfer ke REK BCA 065-331-1114 a/n Jonathan Thamrin. (lakukan konfirmasi setelah melakukan dp/pembayaran).</li> </ol>', 'belitung.jpg', 2250000),
(2, 'Bromo Sunrise', '2D1N', 'MEETING POINT\r\nBandara / Stasiun Malang\r\n\r\nDay 01\r\n23:30 Penjemputan di balai kota malang atau Masih dalam area malang kota\r\n00:00 Menuju View Point Sunrise Penanjakan. Estimasi perjalanan 3,5 Jam menggunakan Jeep Tertutup 4Ã—4. pananjakan berada diketinggian 2770Mdpl.\r\n\r\nDay 02\r\n03:30 Tiba di view point pananjakan (EnjoyingSunrise)\r\n06:00 Menuju kawah bromo, estimasi waktu 1 jam perjalanan\r\n07:00 Tiba di kaki Gn Bromo, Explore, Tracking + Hunting Foto\r\n09:00 Menuju Pasir berbisik, Savana dan Bukit Teletubis + HuntingFoto\r\n10:00 Kembali ke Malang (Meeting Point Awal yang disepakati)\r\n13:30 Tiba di malang kota, perjalanan berakhir. Sayonaraaaaa', 'Included \r\nBiaya tiket masuk taman nasional\r\nJeep explore bromo\r\n\r\nNot Included\r\nSnackTips \r\nGuide / Driver', 'Gada', 'bromo.jpg', 450000),
(3, 'Banda Naeira', '1D1N', '<ul>\r\n<li><strong>Meeting Point : Bandara Pattimura, Ambon (AMQ)</strong></li>\r\n</ul>\r\n<p><strong>Day 1</strong><br />\r\nMeeting point di bandara Ambon. Setelah berkumpul kemudian menuju ke pelabuhan Tulehu untuk menyeberang ke Banda Neira. Tiba di Banda Neira, check-in penginapan, istirahat, makan siang, dan city tour. Sore hari acara bebas hingga waktu makan malam.</p>\r\n<p><strong>Day 2</strong><br />\r\nSetelah sarapan bersiap untuk snorkeling ke pulau Hatta. Makan siang BBQ/box di pantai. Sore hari kembali ke penginapan. Waktu bebas hingga makan malam.</p>\r\n<p><strong>Day 3</strong><br />\r\nSnorkeling ke Pulau Rhun dan Ai setelah sarapan. Makan siang dilakukan di pulau (bbq/box). Kembali ke penginapan sore hari dan waktu bebas hingga makan malam.</p>\r\n<p><strong>Day 4</strong><br />\r\nSnorkeling ke Pulau Pisang dan main ke desa di Pulau Pisang. Makan siang nasi box di pulau. Sore hari menuju ke Pulau Banda Besar untuk spice tour, kemudian kembali ke Pulau Neira dan acara bebas hingga waktu makan malam.</p>\r\n<p><strong>Day 5</strong><br />\r\nCheck-out penginapan setelah sarapan dan kembali ke Ambon. Trip selesai.</p>\r\n<p>&nbsp;</p>\r\n<p>Aktivitas lain yang bisa dilakukan* :<br />\r\nâ€¢ Naik gunung api<br />\r\nâ€¢ Diving/discovery diving</p>\r\n<p><em>*harus melakukan konfirmasi diawal</em><br />\r\n<em>**Itinerary bisa berubah sewaktu waktu sesuai kondisi di lapangan</em></p>', '<li>\r\n						<div class=\"single_tour_departure_title\">Included</div>\r\n						<div class=\"single_tour_departure_content\">\r\n														<div class=\"one_half \">\r\n								<span class=\"ti-check\"></span>Tiket Ambon-Banda (fastboat)							</div>\r\n														<div class=\"one_half last\">\r\n								<span class=\"ti-check\"></span>Airport transfer Ambon							</div>\r\n														<div class=\"one_half \">\r\n								<span class=\"ti-check\"></span>Penginapan (AC-shared room, 2-3 people/room)							</div>\r\n														<div class=\"one_half last\">\r\n								<span class=\"ti-check\"></span>Kapal island hopping							</div>\r\n														<div class=\"one_half \">\r\n								<span class=\"ti-check\"></span>City tour Banda							</div>\r\n														<div class=\"one_half last\">\r\n								<span class=\"ti-check\"></span>Spice tour							</div>\r\n														<div class=\"one_half \">\r\n								<span class=\"ti-check\"></span>Meals 15x							</div>\r\n														<div class=\"one_half last\">\r\n								<span class=\"ti-check\"></span>Tour leader dari meeting point (Ambon)							</div>\r\n													</div>\r\n					</li>\r\n										\r\n										<li>\r\n						<div class=\"single_tour_departure_title\">Not Included</div>\r\n						<div class=\"single_tour_departure_content\">\r\n														<div class=\"one_half \">\r\n								<span class=\"ti-close\"></span>Tiket pesawat PP							</div>\r\n														<div class=\"one_half last\">\r\n								<span class=\"ti-close\"></span>Asuransi perjalanan (dapat dibantu)							</div>\r\n														<div class=\"one_half \">\r\n								<span class=\"ti-close\"></span>Overweight fastboat (max. 10kg/ pax)							</div>\r\n														<div class=\"one_half last\">\r\n								<span class=\"ti-close\"></span>Alat snorkeling							</div>\r\n														<div class=\"one_half \">\r\n								<span class=\"ti-close\"></span>Biaya keperluan pribadi pada saat di perjalanan, penginapan, dan pada saat tour							</div>\r\n														<div class=\"one_half last\">\r\n								<span class=\"ti-close\"></span>Biaya optional tour (overtime / di luar itinerari)							</div>\r\n														<div class=\"one_half \">\r\n								<span class=\"ti-close\"></span>Tip driver &amp; tour leader							</div>\r\n													</div>\r\n					</li>', '<ol>\r\n<li>Travacello berhak membatalkan trip dengan pertimbangan-pertimbangan tertentu di luar kemampuan Travacello, dan uang DP peserta akan dikembalikan 100%.</li>\r\n<li>Jadwal acara/Itinerary bisa berubah tergantung cuaca dan kondisi cuaca alam dan lalu lintas.</li>\r\n<li>Apabila destinasi tujuan tidak memungkinkan untuk dikunjungi karena bencana, cuaca yang tidak mendukung, penutupan tempat wisata, atau sebab lain di luar kendali kami, maka peserta tidak berhak meminta kompensasi atau pengembalian biaya yang telah dibayarkan.</li>\r\n<li>Tidak ada pengembalian Down Payment/Uang Muka atau uang yang sudah di bayarkan bagi peserta trip yang membatalkan keikutsertaannya.</li>\r\n<li>Membayar DP as Commitment fee minimal 50%, bisa dimulai dari Notes/event di-publish atau bisa juga langsung melunasi full.</li>\r\n<li>Harga sewaktu-waktu berubah apabila terjadi kenaikan BBM secara nasional atau kenaikan lain yang berhubungan dengan destinasi.</li>\r\n<li>Pembayaran dapat di lakukan melalui transfer ke REK BCA 065-331-1114 a/n Jonathan Thamrin.<br />\r\n(lakukan konfirmasi setelah melakukan dp/pembayaran).</li>\r\n</ol>', 'bandanaeira.jpg', 6500000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `picture` text NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `picture`, `nama`, `email`, `level`, `password`) VALUES
(1, 'nabilah', 'default.png', 'Nabilah Putri', 'nabilah@gmail.com', 1, '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'bulin', 'default.png', 'bulin mcd', 'bulin@gmail.com', 2, '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket_tour`
--
ALTER TABLE `paket_tour`
  ADD PRIMARY KEY (`id_paket_tour`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`);

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`id_tour`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `paket_tour`
--
ALTER TABLE `paket_tour`
  MODIFY `id_paket_tour` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `id_tour` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
