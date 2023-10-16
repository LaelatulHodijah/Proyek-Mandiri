-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Okt 2023 pada 09.33
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyek_mandiri`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `tempat_lahir` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `angkatan` enum('2022','2023') NOT NULL,
  `agama` varchar(20) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `file1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pendaftar`
--

INSERT INTO `pendaftar` (`id`, `nis`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `angkatan`, `agama`, `prodi`, `jurusan`, `jabatan`, `file1`) VALUES
(1, 19753018, 'Ilham', 'Sukadana', '2018-11-03', 'L', 'Sukadana', '', '', '', '', '', ''),
(6, 21753019, 'Laelatul Hodijah', 'Jakarta', '2010-05-10', 'P', 'Lampung Timur', '2022', 'Islam', '', '', '', ''),
(7, 213445, 'lal', 'lampunh', '2023-10-16', 'P', 'lampung', '2023', 'Budha', 'mi', 'ekbis', 'Calon Wakil Presiden', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'default.svg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `name`, `photo`) VALUES
(4, '21753019', 'hodijah2208@gmail.com', '$2y$10$YQ6/06hDlifVp.hTHtNb5OZfKCN2yV3iwUiJuNwySpYbJ86WqfI5q', 'lala', 'default.svg'),
(8, '21753000', 'admin@gmail.com', '$2y$10$lLOym5/z9qZNUaqC.cCoWOaKfc/fSyaB3WSsqKw15Jl1quzXQmmdm', 'admin', 'default.svg'),
(9, '21753001', 'admin2@gmail.com', 'Y?G\Z?*???Y??t?????Y?????s???', 'Admin pemira', 'default.svg'),
(12, '21753002', 'admin2@gmail.com', '$2y$10$v7QKxDWqdaLPd/o0KSjACuF3YMNc08Cbw0UkFvjXeu057C9UhclXy', 'Laelatul Hodijah', 'default.svg'),
(13, '21753020', 'lulu@gmail.com', '$2y$10$zzjddp6hL5JJ9o9YHzxyse8xqod5DRz/vKtTctGCsxoXPRfg2S5g2', 'lulu', 'default.svg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
