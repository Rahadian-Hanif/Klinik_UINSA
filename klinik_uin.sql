-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Des 2020 pada 03.19
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
(2, 'H96218058', 'tes', 'Hanif Aristyo R', '2020-12-20 04:37:55', 1),
(3, 'H96218059', 'tes', 'BUDI Doremi', '2020-12-20 05:03:35', 1),
(4, 'H96218059', 'tes2', 'BUDI Doremi', '2020-12-20 05:04:20', 1),
(5, 'H96218058', 'saya siapa', 'Hanif Aristyo R', '2020-12-20 05:26:10', 1),
(6, 'H96218058', 'lah mana saya tau', 'dr Hernandes\r\n', '2020-12-20 11:27:47', 1),
(7, 'H96218058', 'lah kok ngamok', 'Hanif Aristyo R', '2020-12-20 06:49:49', 1),
(9, 'H96218059', 'tes3', 'BUDI Doremi', '2020-12-20 10:54:07', 1),
(10, 'H96218058', 'qqq', 'Hanif Aristyo R', '2020-12-20 10:55:36', 1),
(11, 'H96218058', 'arista', 'Hanif Aristyo R', '2020-12-20 15:39:25', 1);

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
('H96218058', 'Hanif Aristyo R', '81dc9bdb52d04dc20036dbd8313ed055', 'Citraland', '2000-08-02', NULL),
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
(1, 'dr Hernandes', 'Wiyung no 9', 'Hernandes', 'e10adc3949ba59abbe56e057f20f883e', 'dokter', 'Poli Gigi');

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
(1, 'H96218058', 1, 1, '2020-12-06', 'h6d7uty4', '10:00:00', ''),
(5, 'H96218058', 1, 2, '2020-12-06', 'PR02pXBCN4', '14:47:30', ''),
(7, 'H96218059', 1, 3, '2020-12-06', 'Q8ya6O7BNt', '14:52:14', ''),
(9, 'H96218058', 1, 1, '2020-12-07', 'Tx1fVb2RIX', '09:43:14', ''),
(10, 'H96218058', 1, 1, '2020-12-11', 'MfazUYtwBx', '10:07:50', ''),
(16, 'H96218059', 1, 2, '2020-12-11', 'FGMUCrjbyz', '18:44:54', ''),
(17, 'H96218058', 1, 3, '2020-12-11', '7CIxHucwEi', '20:06:16', ''),
(18, 'H96218058', 1, 1, '2020-12-12', 'aUXePptLxc', '20:18:02', ''),
(19, 'H96218059', 1, 2, '2020-12-12', '8M6wYU2t93', '11:45:31', ''),
(20, 'H96218058', 1, 3, '2020-12-12', 'z2n4ik0bQ6', '13:17:56', ''),
(21, 'H96218059', 1, 1, '2020-12-15', 'GHRqnMz2UX', '10:06:11', ''),
(22, 'H96218058', 1, 1, '2020-12-14', 'tAyMUo2ZbB', '10:06:41', ''),
(23, 'H96218058', NULL, 1, '2020-12-17', 'rDg67Sh4YC', '23:31:40', ''),
(24, 'H96218059', NULL, 1, '2020-12-18', 'qbUBLwXPMZ', '18:40:16', ''),
(25, 'H96218058', NULL, 2, '2020-12-18', 'LgrMkD8Zz2', '18:42:43', ''),
(37, 'H96218058', NULL, 1, '2020-12-19', 'F2BDecgkLJ', '13:13:41', ''),
(38, 'H96218058', NULL, 1, '2020-12-20', 'g6os2XRyDx', '21:38:07', ''),
(39, 'H96218059', 1, 2, '2020-12-20', 'qAxejKiJDH', '21:50:08', ''),
(42, 'H96218058', 1, 1, '2020-12-21', 'FDECpxHajf', '10:46:02', 'selesai'),
(43, 'H96218059', 1, 2, '2020-12-21', 'ZecMj1BkPU', '11:16:07', 'selesai'),
(44, 'H96218058', 1, 3, '2020-12-21', 'W2fmZMGh6E', '15:25:20', 'selesai'),
(45, 'H96218058', NULL, 1, '2020-12-24', '14ozTBL8K3', '10:02:07', 'selesai'),
(46, 'H96218059', 1, 2, '2020-12-24', 'bVPi9Udnqa', '18:55:32', 'selesai'),
(47, 'H96218060', NULL, 3, '2020-12-24', 'FAWgTjfwEQ', '19:06:13', 'selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekamedis`
--

CREATE TABLE `rekamedis` (
  `pasien_nim_nip` varchar(10) NOT NULL,
  `id` int(11) NOT NULL,
  `penanganan` text NOT NULL,
  `tanggal` date NOT NULL,
  `diagnosis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rekamedis`
--

INSERT INTO `rekamedis` (`pasien_nim_nip`, `id`, `penanganan`, `tanggal`, `diagnosis`) VALUES
('H96218058', 1, 'diberi obat sakit kepala dan anti nyeri', '2020-11-27', 'Trauma ringan'),
('H96218058', 13, 'ewfasr', '2020-12-26', 'rew'),
('H96218058', 16, 'qqqq', '2020-12-07', 'qqqqq'),
('H96218058', 17, 'ertret\'rtye5r', '2020-12-15', 'ytrer5te\'ryttrye'),
('H96218060', 18, 'Cabut gigi', '2020-12-24', 'Gigi sakit dan ngilu');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `rekamedis`
--
ALTER TABLE `rekamedis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
