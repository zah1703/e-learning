-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Bulan Mei 2023 pada 06.40
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_mahasiswa`
--

CREATE TABLE `db_mahasiswa` (
  `id` int(11) NOT NULL,
  `NRP` varchar(20) NOT NULL,
  `Nama` text NOT NULL,
  `Jenis_Kelamin` text NOT NULL,
  `Jurusan` varchar(20) NOT NULL,
  `Email` text NOT NULL,
  `Alamat` text NOT NULL,
  `No_Hp` varchar(20) NOT NULL,
  `Asal_SMA` text NOT NULL,
  `Matkul_Favorit` text NOT NULL,
  `Foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `db_mahasiswa`
--

INSERT INTO `db_mahasiswa` (`id`, `NRP`, `Nama`, `Jenis_Kelamin`, `Jurusan`, `Email`, `Alamat`, `No_Hp`, `Asal_SMA`, `Matkul_Favorit`, `Foto`) VALUES
(5, '3122500001', 'Ade Hafis Rabbani', 'Laki-Laki', 'IT', 'hafis@gmail.com', 'Surabaya', '085678901234', 'SMA N 1 Surabaya', 'ASD', '6475e50e51e50.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_materi`
--

CREATE TABLE `list_materi` (
  `id` int(11) NOT NULL,
  `dosen_id` int(11) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `deskripsi` varchar(225) NOT NULL,
  `file` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `list_materi`
--

INSERT INTO `list_materi` (`id`, `dosen_id`, `judul`, `deskripsi`, `file`) VALUES
(31, 1, 'WPW', 'pahami materi tsb', 'LATIHAN SOAL OS.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_tugas`
--

CREATE TABLE `list_tugas` (
  `id` int(11) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `dosen_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `list_tugas`
--

INSERT INTO `list_tugas` (`id`, `judul`, `deskripsi`, `dosen_id`) VALUES
(31, 'WPW', 'kerjakan praktikum 11 crud dasar deadline 1 juni', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `id` int(11) NOT NULL,
  `list_materi_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `tmp_name` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `size` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas`
--

CREATE TABLE `tugas` (
  `id` int(11) NOT NULL,
  `list_tugas_id` int(11) DEFAULT NULL,
  `name` varchar(200) NOT NULL,
  `tmp_name` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `size` varchar(50) NOT NULL,
  `nilai` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tugas`
--

INSERT INTO `tugas` (`id`, `list_tugas_id`, `name`, `tmp_name`, `type`, `size`, `nilai`) VALUES
(62, 31, 'LAPORAN PRAKTIKUM 14 (2) (1).docx', 'C:xampp	mpphp8CFA.tmp', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '224691', '100');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'dosen'),
(4, 'budi', 'budi', 'mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `db_mahasiswa`
--
ALTER TABLE `db_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `list_materi`
--
ALTER TABLE `list_materi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `list_tugas`
--
ALTER TABLE `list_tugas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dosen_id` (`dosen_id`);

--
-- Indeks untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `list_materi_id` (`list_materi_id`);

--
-- Indeks untuk tabel `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `list_tugas_id` (`list_tugas_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `db_mahasiswa`
--
ALTER TABLE `db_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `list_materi`
--
ALTER TABLE `list_materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `list_tugas`
--
ALTER TABLE `list_tugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `materi`
--
ALTER TABLE `materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tugas`
--
ALTER TABLE `tugas`
  ADD CONSTRAINT `tugas_ibfk_1` FOREIGN KEY (`list_tugas_id`) REFERENCES `list_tugas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
