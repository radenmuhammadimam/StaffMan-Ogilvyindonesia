-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Bulan Mei 2018 pada 20.38
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ogilvyindonesia`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_file`
--

CREATE TABLE `tb_file` (
  `id_file` int(100) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `nama_project` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_file`
--

INSERT INTO `tb_file` (`id_file`, `id_perusahaan`, `nama_project`, `file`, `date`) VALUES
(7, 0, 'Vulnerability Assessment', 'uploads/Vulnerability Assessment.docx', '2018-05-08 17:10:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_file2`
--

CREATE TABLE `tb_file2` (
  `id_file` int(100) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `nama_project` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_file3`
--

CREATE TABLE `tb_file3` (
  `id_file` int(100) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `nama_project` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_file4`
--

CREATE TABLE `tb_file4` (
  `id_file` int(100) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `nama_project` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_file5`
--

CREATE TABLE `tb_file5` (
  `id_file` int(100) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `nama_project` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_file6`
--

CREATE TABLE `tb_file6` (
  `id_file` int(100) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `nama_project` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_file7`
--

CREATE TABLE `tb_file7` (
  `id_file` int(100) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `nama_project` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gaji`
--

CREATE TABLE `tb_gaji` (
  `nama_perusahaan` varchar(50) NOT NULL,
  `nama_project` varchar(50) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `basic_salary` int(100) NOT NULL,
  `project_salary` int(100) NOT NULL,
  `total_salary` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_gaji`
--

INSERT INTO `tb_gaji` (`nama_perusahaan`, `nama_project`, `tanggal`, `basic_salary`, `project_salary`, `total_salary`) VALUES
(' PT Pindad (Persero)', 'Vulnerability Assessment', '1 January 2018', 7000000, 50000000, 57000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(16) NOT NULL,
  `level` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `email`, `password`, `alamat`, `no_hp`, `level`) VALUES
(1, 'Raden Muhammad Imam', 'mrimrwdt@gmail.com', '1234', 'Bandung', '085712345678', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_file`
--
ALTER TABLE `tb_file`
  ADD PRIMARY KEY (`id_file`);

--
-- Indeks untuk tabel `tb_file2`
--
ALTER TABLE `tb_file2`
  ADD PRIMARY KEY (`id_file`);

--
-- Indeks untuk tabel `tb_file3`
--
ALTER TABLE `tb_file3`
  ADD PRIMARY KEY (`id_file`);

--
-- Indeks untuk tabel `tb_file4`
--
ALTER TABLE `tb_file4`
  ADD PRIMARY KEY (`id_file`);

--
-- Indeks untuk tabel `tb_file5`
--
ALTER TABLE `tb_file5`
  ADD PRIMARY KEY (`id_file`);

--
-- Indeks untuk tabel `tb_file6`
--
ALTER TABLE `tb_file6`
  ADD PRIMARY KEY (`id_file`);

--
-- Indeks untuk tabel `tb_file7`
--
ALTER TABLE `tb_file7`
  ADD PRIMARY KEY (`id_file`);

--
-- Indeks untuk tabel `tb_gaji`
--
ALTER TABLE `tb_gaji`
  ADD PRIMARY KEY (`nama_perusahaan`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_file`
--
ALTER TABLE `tb_file`
  MODIFY `id_file` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_file2`
--
ALTER TABLE `tb_file2`
  MODIFY `id_file` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_file3`
--
ALTER TABLE `tb_file3`
  MODIFY `id_file` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_file4`
--
ALTER TABLE `tb_file4`
  MODIFY `id_file` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_file5`
--
ALTER TABLE `tb_file5`
  MODIFY `id_file` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_file6`
--
ALTER TABLE `tb_file6`
  MODIFY `id_file` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_file7`
--
ALTER TABLE `tb_file7`
  MODIFY `id_file` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
