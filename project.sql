-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 06 Des 2017 pada 14.55
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `picture_so`
--

CREATE TABLE `picture_so` (
  `id_picture` int(12) NOT NULL,
  `picture` text NOT NULL,
  `create_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `picture_so`
--

INSERT INTO `picture_so` (`id_picture`, `picture`, `create_at`, `update_at`) VALUES
(2, '2-min2.jpg', '2017-12-03', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_contact`
--

CREATE TABLE `tabel_contact` (
  `id_contact` int(12) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `maps` text NOT NULL,
  `create_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_gallery`
--

CREATE TABLE `tabel_gallery` (
  `id_gallery` int(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` text NOT NULL,
  `create_at` date NOT NULL,
  `update_at` date NOT NULL,
  `slug` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_gallery`
--

INSERT INTO `tabel_gallery` (`id_gallery`, `judul`, `keterangan`, `foto`, `create_at`, `update_at`, `slug`) VALUES
(2, 'Reuni Perusahaan', 'di sekitar kenangan yang muncul', 'ground3.jpg', '2017-12-03', '0000-00-00', 'Reuni Perusahaan'),
(3, 'pentas seni', 'okay', 'oj21.png', '2017-12-04', '0000-00-00', 'pentas seni');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_header`
--

CREATE TABLE `tabel_header` (
  `id_header` int(12) NOT NULL,
  `nama_perusahaan` text NOT NULL,
  `tagline` text NOT NULL,
  `logo` text NOT NULL,
  `create_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_layanan`
--

CREATE TABLE `tabel_layanan` (
  `id_layanan` int(12) NOT NULL,
  `layanan` text NOT NULL,
  `picture` text NOT NULL,
  `create_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_sejarah`
--

CREATE TABLE `tabel_sejarah` (
  `id_sejarah` int(12) NOT NULL,
  `foto_sejarah` text NOT NULL,
  `sejarah` text NOT NULL,
  `create_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_strukturorganisasi`
--

CREATE TABLE `tabel_strukturorganisasi` (
  `id_strukturorganisasi` int(12) NOT NULL,
  `name` varchar(50) NOT NULL,
  `posisi` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  `foto` text NOT NULL,
  `create_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_strukturorganisasi`
--

INSERT INTO `tabel_strukturorganisasi` (`id_strukturorganisasi`, `name`, `posisi`, `status`, `foto`, `create_at`, `update_at`) VALUES
(1, 'Didit Setia Budi S.Kom', 'KETUA', 'pejabat', '_MG_3336_copy-iloveimg-compressed2.jpg', '2017-12-02', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_visimisi`
--

CREATE TABLE `tabel_visimisi` (
  `id_visimisi` int(12) NOT NULL,
  `foto_visimisi` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `create_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_visimisi`
--

INSERT INTO `tabel_visimisi` (`id_visimisi`, `foto_visimisi`, `visi`, `misi`, `create_at`, `update_at`) VALUES
(6, 'bg-img-41.jpg', '                                                                                                                <h6 style="text-align: justify;"><span style="color: rgb(51, 51, 51); background-color: rgb(254, 254, 254);"><font face="Times New Roman">Mewujudkan pembinaan pengelolaan keuangan BLU yang efektif dan efisien dalam rangka mendukung peningkatan pelayanan kepada masyarakat.</font></span></h6>\r\n                                                                                                                                                                   ', '                                                                                                                <h6 style="text-align: justify;"><span style="color: rgb(51, 51, 51); background-color: rgb(254, 254, 254);"><font face="Times New Roman">Meningkatkan pelayanan kepada masyarakat dalam rangka meningkatkan kesejahteraan umum dan mencerdaskan kehidupan bangsa melalui fleksibilitas dalam pengelolaan keuangan berdasarkan prinsip ekonomi dan produktivitas serta penerapan praktek bisnis yang sehat.</font></span></h6>\r\n                                                                                                                                                                     ', '2017-12-01', '2017-12-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `picture_so`
--
ALTER TABLE `picture_so`
  ADD PRIMARY KEY (`id_picture`);

--
-- Indexes for table `tabel_contact`
--
ALTER TABLE `tabel_contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `tabel_gallery`
--
ALTER TABLE `tabel_gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `tabel_header`
--
ALTER TABLE `tabel_header`
  ADD PRIMARY KEY (`id_header`);

--
-- Indexes for table `tabel_layanan`
--
ALTER TABLE `tabel_layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `tabel_sejarah`
--
ALTER TABLE `tabel_sejarah`
  ADD PRIMARY KEY (`id_sejarah`);

--
-- Indexes for table `tabel_strukturorganisasi`
--
ALTER TABLE `tabel_strukturorganisasi`
  ADD PRIMARY KEY (`id_strukturorganisasi`);

--
-- Indexes for table `tabel_visimisi`
--
ALTER TABLE `tabel_visimisi`
  ADD PRIMARY KEY (`id_visimisi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `picture_so`
--
ALTER TABLE `picture_so`
  MODIFY `id_picture` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tabel_contact`
--
ALTER TABLE `tabel_contact`
  MODIFY `id_contact` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tabel_gallery`
--
ALTER TABLE `tabel_gallery`
  MODIFY `id_gallery` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tabel_header`
--
ALTER TABLE `tabel_header`
  MODIFY `id_header` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tabel_layanan`
--
ALTER TABLE `tabel_layanan`
  MODIFY `id_layanan` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tabel_sejarah`
--
ALTER TABLE `tabel_sejarah`
  MODIFY `id_sejarah` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tabel_strukturorganisasi`
--
ALTER TABLE `tabel_strukturorganisasi`
  MODIFY `id_strukturorganisasi` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tabel_visimisi`
--
ALTER TABLE `tabel_visimisi`
  MODIFY `id_visimisi` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
