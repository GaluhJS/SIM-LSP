-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 15 Jan 2018 pada 11.33
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lsp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `apl01`
--

CREATE TABLE `apl01` (
  `id_apl01` varchar(45) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `tempat_lahir` varchar(45) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jk` varchar(45) DEFAULT NULL,
  `kebangsaan` varchar(45) DEFAULT NULL,
  `alamat` text,
  `kd_pos` varchar(45) DEFAULT NULL,
  `tlp_rumah` varchar(45) DEFAULT NULL,
  `tlp_hp` varchar(45) DEFAULT NULL,
  `tlp_kantor` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `pendidikan_terakhir` varchar(45) DEFAULT NULL,
  `nama_lembaga` varchar(45) DEFAULT NULL,
  `jabatan` varchar(45) DEFAULT NULL,
  `alamat_perusahaan` text,
  `kd_pos_lembaga` varchar(45) DEFAULT NULL,
  `tlp_lembaga` varchar(45) DEFAULT NULL,
  `fax` varchar(45) DEFAULT NULL,
  `email_lembaga` varchar(45) DEFAULT NULL,
  `tujuan_asesmen` varchar(45) DEFAULT NULL,
  `skema_sertifikasi` varchar(45) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `apl01`
--

INSERT INTO `apl01` (`id_apl01`, `nama`, `tempat_lahir`, `tgl_lahir`, `jk`, `kebangsaan`, `alamat`, `kd_pos`, `tlp_rumah`, `tlp_hp`, `tlp_kantor`, `email`, `pendidikan_terakhir`, `nama_lembaga`, `jabatan`, `alamat_perusahaan`, `kd_pos_lembaga`, `tlp_lembaga`, `fax`, `email_lembaga`, `tujuan_asesmen`, `skema_sertifikasi`, `updated_at`, `created_at`) VALUES
('AP001', 'galuh', 'bogoe', '2018-01-02', 'P', 'info', 'PUNC', '0809', '0887878', '0987788', '0987788', 'galuh.js@gmail.com', 'sma', 'kjkl', 'bos', 'mana', '0989', '09987778', '99880', 'galuh@gmail.com', 'apa', 'aja', '2018-01-15 03:07:42', '2018-01-15 03:07:42'),
('AP002', 'galuh', 'lkjl', '2018-01-10', 'P', 'indo', 'dsjkl', '0809', '098098', '0980', '8908', 'jafars@gmail.com', 'jh', 'kjkl', 'bos', 'hahah', '098', '098', '980', 'galuh@gmail.com', 'lkj', 'jlk', '2018-01-15 03:18:38', '2018-01-15 03:18:38'),
('AP003', 'galuh', 'lkjl', '2018-01-10', 'P', 'indo', 'dsjkl', '0809', '098098', '0980', '8908', 'jafars@gmail.com', 'jh', 'kjkl', 'bos', 'ga', '0989', '09987778', '99880', 'galuh@gmail.com', 'apa', 'aja', '2018-01-15 03:19:28', '2018-01-15 03:19:28'),
('AP004', 'galuh', 'lkjl', '2018-01-10', 'P', 'indo', 'dsjkl', '0809', '098098', '0980', '8908', 'jafars@gmail.com', 'jh', 'kjkl', 'bos', 'majj', '0989', '09987778', '980', 'galuh@gmail.com', 'apa', 'aja', '2018-01-15 03:21:00', '2018-01-15 03:21:00'),
('AP005', 'galuh', 'lkjl', '2018-01-10', 'P', 'indo', 'dsjkl', '0809', '098098', '0980', '8908', 'jafars@gmail.com', 'jh', 'wwk', 'lkj', 'dfkjl', '098', '098', '980', 'galuh@gmail.com', 'lkj', 'jlk', '2018-01-15 03:21:39', '2018-01-15 03:21:39'),
('AP0099', 'galuh', 'lkjl', '2018-01-10', 'P', 'indo', 'dsjkl', '0809', '098098', '0980', '8908', 'jafars@gmail.com', 'jh', 'wwk', 'bos', 'dskljf', '0989', '09987778', '99880', 'galuh@gmail.com', 'lkj', 'aja', '2018-01-15 03:23:04', '2018-01-15 03:23:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_penilaian`
--

CREATE TABLE `detail_penilaian` (
  `id_penilaian` int(11) NOT NULL,
  `id_pertanyaan` int(11) NOT NULL,
  `penilaian` varchar(45) DEFAULT NULL,
  `v` varchar(45) DEFAULT NULL,
  `a` varchar(45) DEFAULT NULL,
  `t` varchar(45) DEFAULT NULL,
  `m` varchar(45) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `elemen`
--

CREATE TABLE `elemen` (
  `id_elemen` int(11) NOT NULL,
  `id_unit` varchar(45) NOT NULL,
  `elemen` varchar(45) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penilaian`
--

CREATE TABLE `penilaian` (
  `id_penilaian` int(11) NOT NULL,
  `id_apl01` varchar(45) NOT NULL,
  `nama_asesor1` varchar(45) DEFAULT NULL,
  `nama_asesor2` varchar(45) DEFAULT NULL,
  `tgl_waktu` varchar(45) DEFAULT NULL,
  `tuk` varchar(45) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id_pertanyaan` int(11) NOT NULL,
  `id_elemen` int(11) NOT NULL,
  `pertanyaan` text,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `unit`
--

CREATE TABLE `unit` (
  `id_unit` varchar(45) NOT NULL,
  `judul_unit` varchar(255) DEFAULT NULL,
  `jenis_standar` varchar(45) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `unit`
--

INSERT INTO `unit` (`id_unit`, `judul_unit`, `jenis_standar`, `updated_at`, `created_at`) VALUES
('asdf', 'asdf', 'ADSF', '2018-01-07 10:22:07', '2018-01-07 10:22:07'),
('asdfjlkj', 'adfjaj', 'ajajaj', '2018-01-07 12:28:03', '2018-01-07 12:28:03'),
('GALU.02.FASD', 'JKLADJS', 'ADSLFJ', '2018-01-07 12:53:12', '2018-01-07 12:53:12'),
('galuh', 'galuh', 'galuh', '2018-01-07 12:47:48', '2018-01-07 12:47:48'),
('GALUHSDF', 'FSALFJA', 'KLASDJF', '2018-01-07 12:52:39', '2018-01-07 12:52:39'),
('TIK.MM02.032.01', 'Membuat, memanipulasi, dan menggabung gambar 2D', 'SKKNI', '2018-01-07 16:26:20', '2018-01-07 16:26:20'),
('TIK.MM02.053.01', 'Membuat dan Memanipulasi Gambar-gambar', 'SKKNI', '2017-10-02 23:14:13', '2017-10-02 23:15:11'),
('TIK.MM02.070.01', 'Menggabungkan Gambar 2D ke Dalam Sajian Multimedia', 'SKKNI', '2018-01-07 12:47:15', '2018-01-07 12:47:15'),
('TIK.MM02.071.01', 'Menggabungkan Fotografi Digital ke Dalam Sajian Multimedia', 'SKKNI', '2018-01-07 15:17:53', '2018-01-07 15:17:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `remember_token` varchar(150) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `updated_at`, `created_at`) VALUES
(1, 'admingaluh', 'admingaluh@gmail.com', 'admingaluh', '', '2018-01-15 09:37:16', '0000-00-00 00:00:00'),
(2, 'galuhjs', 'galuh.js@gmail.com', '$2y$10$mx9nmaRwC8p0cwxpmoGnXOxE3GbINfEJs1RPGN7evdwasQWpXYL6i', 'hthWEZT7RzgbH9UO1LN8PQso49zYz0fjoCFNDQnXdZqZkfd7awjhQhvnWXIo', '2018-01-15 09:41:52', '2018-01-15 02:37:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apl01`
--
ALTER TABLE `apl01`
  ADD PRIMARY KEY (`id_apl01`);

--
-- Indexes for table `detail_penilaian`
--
ALTER TABLE `detail_penilaian`
  ADD KEY `fk_detail_penilaian_pertanyaan1_idx` (`id_pertanyaan`),
  ADD KEY `fk_detail_penilaian_penilaian1_idx` (`id_penilaian`);

--
-- Indexes for table `elemen`
--
ALTER TABLE `elemen`
  ADD PRIMARY KEY (`id_elemen`),
  ADD KEY `fk_elemen_unit1_idx` (`id_unit`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD KEY `fk_penilaian_apl011_idx` (`id_apl01`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id_pertanyaan`),
  ADD KEY `fk_pertanyaan_elemen1_idx` (`id_elemen`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id_unit`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `elemen`
--
ALTER TABLE `elemen`
  MODIFY `id_elemen` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id_pertanyaan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_penilaian`
--
ALTER TABLE `detail_penilaian`
  ADD CONSTRAINT `fk_detail_penilaian_penilaian1` FOREIGN KEY (`id_penilaian`) REFERENCES `penilaian` (`id_penilaian`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_detail_penilaian_pertanyaan1` FOREIGN KEY (`id_pertanyaan`) REFERENCES `pertanyaan` (`id_pertanyaan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `elemen`
--
ALTER TABLE `elemen`
  ADD CONSTRAINT `fk_elemen_unit1` FOREIGN KEY (`id_unit`) REFERENCES `unit` (`id_unit`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `penilaian`
--
ALTER TABLE `penilaian`
  ADD CONSTRAINT `fk_penilaian_apl011` FOREIGN KEY (`id_apl01`) REFERENCES `apl01` (`id_apl01`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD CONSTRAINT `fk_pertanyaan_elemen1` FOREIGN KEY (`id_elemen`) REFERENCES `elemen` (`id_elemen`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
