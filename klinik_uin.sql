-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jan 2021 pada 00.24
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik_uin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `pasien_nip_nim` varchar(10) DEFAULT NULL,
  `cht` text NOT NULL,
  `pengirim` varchar(20) NOT NULL,
  `waktu` datetime NOT NULL,
  `pegawai_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `chat`
--

INSERT INTO `chat` (`id`, `pasien_nip_nim`, `cht`, `pengirim`, `waktu`, `pegawai_id`) VALUES
(23, 'H96218058', 'P', 'Hanif Aristyo R', '2020-12-28 07:14:14', 1),
(24, 'H96218060', 'p', 'Dendy Suryadi', '2020-12-31 06:12:37', 1),
(25, 'H96218060', 'pak saya mau tanya', 'Dendy Suryadi', '2020-12-31 06:12:51', 1),
(28, 'H96218060', 'Passwordnya ???', 'dr Hernandes', '2020-12-31 13:25:56', 1),
(29, 'H96218058', 'Sesuai aplikasi ya pak', 'Hanif Aristyo R', '2020-12-31 14:18:39', 1),
(30, 'H96218058', 'ha?', 'dr Hernandes', '2021-01-01 19:49:01', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `nim_nip` varchar(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `alamat` text,
  `tgl_lahir` date NOT NULL,
  `riwayat` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`nim_nip`, `nama`, `password`, `alamat`, `tgl_lahir`, `riwayat`) VALUES
('H96218058', 'Hanif Aristyo R', '81dc9bdb52d04dc20036dbd8313ed055', 'Citraland', '2000-08-02', 'Insomnia'),
('H96218059', 'BUDI Doremi', '81dc9bdb52d04dc20036dbd8313ed055', 'Citraland', '2000-05-02', 'Alergi kacang dan udang'),
('H96218060', 'Dendy Suryadi', '81dc9bdb52d04dc20036dbd8313ed055', 'Bukitmas', '1999-04-02', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `status` varchar(10) NOT NULL,
  `posisi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `alamat`, `username`, `password`, `status`, `posisi`) VALUES
(1, 'dr Hernandes', 'Wiyung no 9', 'Hernandes', 'e10adc3949ba59abbe56e057f20f883e', 'dokter', 'Poli Gigi'),
(2, 'dr Robby Saputra', 'Semolo waru', 'Robbysp', 'e10adc3949ba59abbe56e057f20f883e', 'dokter', 'Poli Umum'),
(3, 'Deny Yulianto', 'Jl Kendangsari No. 74', 'Deny', 'e10adc3949ba59abbe56e057f20f883e', 'saff', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengunjung`
--

CREATE TABLE `pengunjung` (
  `id` int(11) NOT NULL,
  `pasien_nim_nip` varchar(10) NOT NULL,
  `pegawai_id` int(11) DEFAULT NULL,
  `no_pengunjung` int(11) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `antrian` varchar(10) NOT NULL,
  `jam` time NOT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengunjung`
--

INSERT INTO `pengunjung` (`id`, `pasien_nim_nip`, `pegawai_id`, `no_pengunjung`, `tanggal`, `antrian`, `jam`, `status`) VALUES
(49, 'H96218060', 1, 1, '2020-12-25', 'HKTS7RgFe8', '09:45:19', 'selesai'),
(51, 'H96218060', 1, 2, '2020-12-25', 'gVYQh4aOHm', '20:19:53', 'selesai'),
(52, 'H96218059', 1, 3, '2020-12-25', '2xfF38BJSZ', '20:20:21', 'selesai'),
(53, 'H96218058', 1, 4, '2020-12-25', 'Img8nkCYD0', '20:20:29', 'selesai'),
(54, 'H96218058', 1, 1, '2020-12-27', 'Ms3rGChlLY', '19:56:14', 'selesai'),
(55, 'H96218059', 1, 2, '2020-12-27', 'kLv5f0wV8p', '19:58:30', 'selesai'),
(56, 'H96218059', 1, 3, '2020-12-27', 'JbRec5qEIk', '19:58:37', 'Menunggu'),
(57, 'H96218060', 1, 4, '2020-12-27', 'ZovmJtD0UQ', '19:58:44', 'Menunggu'),
(58, 'H96218058', NULL, 5, '2020-12-27', 'JF3Ro9a0pK', '20:05:08', 'Menunggu'),
(59, 'H96218058', 1, 1, '2020-12-28', 'yCqiGR9TzF', '09:15:34', 'selesai'),
(60, 'H96218059', 1, 2, '2020-12-28', 'PA94wj2vyk', '09:15:45', 'selesai'),
(61, 'H96218058', NULL, 3, '2020-12-28', 'ZLHGmswfOX', '09:47:44', 'selesai'),
(62, 'H96218058', NULL, 4, '2020-12-28', 'GCgOeaLRFP', '13:17:37', 'selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekamedis`
--

CREATE TABLE `rekamedis` (
  `pasien_nim_nip` varchar(10) NOT NULL,
  `id` int(11) NOT NULL,
  `penanganan` text NOT NULL,
  `tanggal` date NOT NULL,
  `diagnosis` text NOT NULL,
  `poli` varchar(25) NOT NULL,
  `biaya` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rekamedis`
--

INSERT INTO `rekamedis` (`pasien_nim_nip`, `id`, `penanganan`, `tanggal`, `diagnosis`, `poli`, `biaya`) VALUES
('H96218058', 1, 'diberi obat sakit kepala dan anti nyeri', '2020-11-27', 'Trauma ringan', 'Poli Umum', 15000),
('H96218060', 18, 'Cabut gigi', '2020-12-24', 'Gigi sakit dan ngilu', 'Poli Gigi', 20000),
('H96218060', 19, 'periksa gigi dan pembersihan karang gigi', '2020-12-25', 'karang gigi', 'Poli Gigi', 20000),
('H96218058', 20, 'er', '2020-12-25', 'wer', 'Poli Umum', 15000),
('H96218058', 21, 'sdffsd', '2020-12-25', 'sdfsfd', 'Poli Umum', 15000),
('H96218059', 22, 'vcb', '2020-12-27', 'vcb', 'Poli Gigi', 20000),
('H96218059', 23, 'hg', '2020-12-27', 'fh', 'Poli Umum', 15000),
('H96218058', 24, 'werwer', '2020-12-27', 'werewr', 'Poli Gigi', 20000),
('H96218060', 25, 'sakit kepala', '2020-12-28', 'trauma\r\n', 'Poli Gigi', 20000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pasien_nip_nim` (`pasien_nip_nim`),
  ADD KEY `pegawai_id` (`pegawai_id`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`nim_nip`) USING BTREE;

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `pasien_nim_nip` (`pasien_nim_nip`),
  ADD KEY `pegawai_id` (`pegawai_id`),
  ADD KEY `antrian` (`antrian`);

--
-- Indeks untuk tabel `rekamedis`
--
ALTER TABLE `rekamedis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pasien_nim_nip` (`pasien_nim_nip`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT untuk tabel `rekamedis`
--
ALTER TABLE `rekamedis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_ibfk_2` FOREIGN KEY (`pasien_nip_nim`) REFERENCES `pasien` (`nim_nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chat_ibfk_3` FOREIGN KEY (`pegawai_id`) REFERENCES `pegawai` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD CONSTRAINT `pengunjung_ibfk_3` FOREIGN KEY (`pasien_nim_nip`) REFERENCES `pasien` (`nim_nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengunjung_ibfk_4` FOREIGN KEY (`pegawai_id`) REFERENCES `pegawai` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rekamedis`
--
ALTER TABLE `rekamedis`
  ADD CONSTRAINT `rekamedis_ibfk_1` FOREIGN KEY (`pasien_nim_nip`) REFERENCES `pasien` (`nim_nip`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
