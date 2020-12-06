-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Des 2020 pada 14.21
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
  `pasien_nip_nim` varchar(10) DEFAULT NULL,
  `cht` varchar(255) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `waktu` datetime DEFAULT NULL,
  `pegawai_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `nim_nip` varchar(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` text,
  `tgl_lahir` date NOT NULL,
  `alergi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`nim_nip`, `nama`, `password`, `alamat`, `tgl_lahir`, `alergi`) VALUES
('H96218058', 'Hanif Aristyo R', '81dc9bdb52d04dc20036dbd8313ed055', 'Citraland', '2000-08-02', NULL),
('H96218059', 'BUDI Doremi', '81dc9bdb52d04dc20036dbd8313ed055', 'Citraland', '2000-05-02', 'kacang, udang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `alamat`, `username`, `password`, `status`) VALUES
(1, 'dr Hernandes', 'Wiyung no 9', 'Hernandes', 'e10adc3949ba59abbe56e057f20f883e', 'dokter');

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
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengunjung`
--

INSERT INTO `pengunjung` (`id`, `pasien_nim_nip`, `pegawai_id`, `no_pengunjung`, `tanggal`, `antrian`, `jam`) VALUES
(1, 'H96218058', 1, 1, '2020-12-06', 'h6d7uty4', '10:00:00'),
(5, 'H96218058', 1, 2, '2020-12-06', 'PR02pXBCN4', '14:47:30'),
(7, 'H96218059', 1, 3, '2020-12-06', 'Q8ya6O7BNt', '14:52:14');

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
('H96218058', 15, 'rytrty', '2020-12-18', 'rtytryrty');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `chat`
--
ALTER TABLE `chat`
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `pasien_nim_nip` (`pasien_nim_nip`),
  ADD KEY `pegawai_id` (`pegawai_id`);

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
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `rekamedis`
--
ALTER TABLE `rekamedis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
