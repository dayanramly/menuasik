-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2015 at 03:31 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `menuasik`
--

-- --------------------------------------------------------

--
-- Table structure for table `tempatmakan`
--

CREATE TABLE IF NOT EXISTS `tempatmakan` (
`id` int(10) unsigned NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8_unicode_ci NOT NULL,
  `tipe` int(11) NOT NULL,
  `keunggulan` text COLLATE utf8_unicode_ci NOT NULL,
  `menu` text COLLATE utf8_unicode_ci NOT NULL,
  `foto` text COLLATE utf8_unicode_ci NOT NULL,
  `kontak` text COLLATE utf8_unicode_ci NOT NULL,
  `socmed` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tempatmakan`
--

INSERT INTO `tempatmakan` (`id`, `nama`, `alamat`, `deskripsi`, `tipe`, `keunggulan`, `menu`, `foto`, `kontak`, `socmed`, `user_id`) VALUES
(1, 'Nasi Goreng Flamboyan', 'Desa Penaruban RT 02/05, Kec. Kaligondang, Kab. Purbalinggga, Jawa Tengah.', '"NASI GORENG FLAMBOYAN" Legendanya Nasi Goreng Di Purbalingga “Nasi Goreng Flamboyan”, nama yang sudah tidak asing lagi bagi penikmat kuliner di Purbalingga. Warung makan yang menyajikan berbagai olahan nasi goreng ini dirintis oleh Bapak Herry Setiawan sejak 1980. Pengalamanya menjadi koki diberbagai restoran di Indonesia menjadikan dasar bagi Pak Herry Menciptakan berbagai olahan nasi goreng dengan rasa yang istimewa.', 1, '["Nasi goreng enak","Tempat makan murah"]', '{"makanan":{"1":{"nama":"Nasi Goreng","harga":"10000","deskripsi":"Nasi goreng special flamboyan plus telor"},"2":{"nama":"Nasi Goreng Balado Pedas","harga":"12000","deskripsi":"Nasi goreng flamboyan special plus sambah balado"}},"minuman":{"1":{"nama":"es Teh","harga":"2000","deskripsi":"Es teh special"},"2":{"nama":"es Jeruk","harga":"4000","deskripsi":"Es jeruk nikmat"}},"camilan":{"1":{"nama":"Pisang Bakar","harga":"4500","deskripsi":"Pisang bakar special"},"2":{"nama":"Onion Ring","harga":"4000","deskripsi":"Onion ring special"}}}', '', '{"telepon":"028171231","hp":"08612312321","bbm":"3241CAS","wa":"08531231231"}', '{"facebook":"http:\\/\\/facebook.com\\/nasigorengflamboyan","twitter":"@nasigorengflamboyan","gplus":"plus.google.com\\/nasigorengflamboyan","instagram":"@nasigorengflamboyan"}', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tempatmakan`
--
ALTER TABLE `tempatmakan`
 ADD PRIMARY KEY (`id`), ADD KEY `tempatmakan_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tempatmakan`
--
ALTER TABLE `tempatmakan`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tempatmakan`
--
ALTER TABLE `tempatmakan`
ADD CONSTRAINT `tempatmakan_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
