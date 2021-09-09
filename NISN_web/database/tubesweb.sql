-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23 Apr 2019 pada 17.49
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubesweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`username`, `password`) VALUES
('m@gmail.com', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nisn` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nik` varchar(16) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `ibu_kandung` varchar(30) NOT NULL,
  `tahun_ajaran_id` year(4) NOT NULL,
  `sekolahlulusan` varchar(30) NOT NULL,
  `lampiran` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nisn`, `nama`, `email`, `tempat_lahir`, `tanggal_lahir`, `nik`, `jenis_kelamin`, `ibu_kandung`, `tahun_ajaran_id`, `sekolahlulusan`, `lampiran`) VALUES
('10', '1', '1@1', '1', '2019-04-02', '1', '1', '1', 2019, '1', ''),
('111111', '', '', '', '0000-00-00', '', '', 'ds', 0000, '', ''),
('@mkmk', 'mk', 'mm@mk', 'mm', '0000-00-00', 'mk', 'L', 'kmk', 2016, 'kn', 'SKPL_MariDoc.docx'),
('asasas', 'bn', 'k@k', 'k ', '0000-00-00', 'k', 'L', 'KNON', 2017, 'lknlk', 'praUTS.pptx'),
('mmmmm', 'mk', 'mkm@Km', 'MKMK', '0000-00-00', 'mk', 'P', 'lm', 2016, 'knk', 'SKPL_MariDoc.docx'),
('n,,,,', 'nkn', 'k@jb', 'knk', '0000-00-00', 'nk', 'L', 'kkn', 2016, 'kjbkj', 'UseCase_ClassDiagram_MariDoc.d');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
