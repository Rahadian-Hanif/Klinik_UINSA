-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Des 2020 pada 06.49
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
(49, 'H96218060', 1, 1, '2020-12-25', 'HKTS7RgFe8', '09:45:19', 'selesai'),
(51, 'H96218060', 1, 2, '2020-12-25', 'gVYQh4aOHm', '20:19:53', 'selesai'),
(52, 'H96218059', 1, 3, '2020-12-25', '2xfF38BJSZ', '20:20:21', 'selesai'),
(53, 'H96218058', 1, 4, '2020-12-25', 'Img8nkCYD0', '20:20:29', 'selesai');

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
  `biaya` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rekamedis`
--

INSERT INTO `rekamedis` (`pasien_nim_nip`, `id`, `penanganan`, `tanggal`, `diagnosis`, `poli`, `biaya`) VALUES
('H96218058', 1, 'diberi obat sakit kepala dan anti nyeri', '2020-11-27', 'Trauma ringan', 'Poli Umum', ''),
('H96218060', 18, 'Cabut gigi', '2020-12-24', 'Gigi sakit dan ngilu', 'Poli Gigi', ''),
('H96218060', 19, 'periksa gigi dan pembersihan karang gigi', '2020-12-25', 'karang gigi', 'Poli Gigi', '200000'),
('H96218058', 20, 'er', '2020-12-25', 'wer', '', '15000'),
('H96218058', 21, 'sdffsd', '2020-12-25', 'sdfsfd', '', '15000'),
('H96218059', 22, 'vcb', '2020-12-27', 'vcb', 'Poli Gigi', '20000'),
('H96218059', 23, 'hg', '2020-12-27', 'fh', 'Poli Umum', '15000');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `rekamedis`
--
ALTER TABLE `rekamedis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

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
