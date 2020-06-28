-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jun 2020 pada 10.32
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newmut`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `belitiket`
--

CREATE TABLE `belitiket` (
  `transaction_id` bigint(20) NOT NULL,
  `id_rute` varchar(50) DEFAULT NULL,
  `id_tiket` varchar(50) DEFAULT NULL,
  `id_ktp` int(11) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_tlp` varchar(50) DEFAULT NULL,
  `tgl_brngkt` date DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `belitiket`
--

INSERT INTO `belitiket` (`transaction_id`, `id_rute`, `id_tiket`, `id_ktp`, `nama`, `alamat`, `no_tlp`, `tgl_brngkt`, `created_at`, `updated_at`) VALUES
(38, 'TRV-5002', 'TK202006001', 459034690, 'salas', 'muju', '084584586099', '2020-06-08', '2020-06-08 20:29:53', '0000-00-00'),
(39, 'TRAVEL-5000', 'TK202006002', 2147483647, 'Test 2', 'Kroya', '08429289384', '2020-06-16', '2020-06-08 20:31:04', '0000-00-00'),
(40, 'TRV-5001', 'TK202006003', 2147483647, 'Test Malam', 'Solo Jawa tengah', '0817613764767', '2020-06-10', '2020-06-09 00:13:26', '0000-00-00'),
(41, 'TRV-5002', 'TK202006004', 657575765, 'Teguh', 'kebumen', '08676767', '2020-06-20', '2020-06-13 12:45:11', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `departement`
--

CREATE TABLE `departement` (
  `id_departement` varchar(50) NOT NULL,
  `id_supir` varchar(50) DEFAULT NULL,
  `id_rute` varchar(50) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `jumlah_penumpang` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `departement`
--

INSERT INTO `departement` (`id_departement`, `id_supir`, `id_rute`, `tanggal`, `jumlah_penumpang`) VALUES
('DPR-0002', '1', '1', '0000-00-00 00:00:00', '3'),
('DPR-0003', '2', '1', '0000-00-00 00:00:00', '3'),
('DPR-0004', '1', '2', '0000-00-00 00:00:00', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `user_id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `user_password` varchar(50) DEFAULT NULL,
  `user_active` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`user_id`, `nama`, `user_name`, `email`, `user_password`, `user_active`) VALUES
(1, 'david', 'david', 'davidyuan620@gmail.com', 'david1234', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobil`
--

CREATE TABLE `mobil` (
  `id` int(11) NOT NULL,
  `nama_mobil` text NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `tipe` text NOT NULL,
  `ongkos` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mobil`
--

INSERT INTO `mobil` (`id`, `nama_mobil`, `kapasitas`, `tipe`, `ongkos`) VALUES
(1, 'APV', 7, 'Kecil - 7 Kursi', 850000),
(2, 'GRAND MAX', 7, 'Kecil - 7 Kursi', 850000),
(3, 'LUXIO', 7, 'Kecil - 7 Kursi', 850000),
(4, 'ISUZU ELF SHORT', 12, 'Sedang - 12 Kursi', 1000000),
(5, 'MITSHUIBISHI CANTER ', 12, 'Sedang - 12 Kursi', 1000000),
(6, 'ISUZU ELF LONG ', 18, 'Besar - 18 Kursi', 1250000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id_ktp` varchar(50) NOT NULL,
  `id_rute` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_tlp` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `jumlah_tiket` int(11) NOT NULL,
  `total` float NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id_ktp`, `id_rute`, `nama`, `no_tlp`, `alamat`, `jumlah_tiket`, `total`, `deskripsi`) VALUES
('1', '1', 'aji', '851515', 'buntu', 0, 0, 'buntu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rute`
--

CREATE TABLE `rute` (
  `id_rute` varchar(50) NOT NULL,
  `tujuan` text NOT NULL,
  `harga` double NOT NULL,
  `stock_tiket` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rute`
--

INSERT INTO `rute` (`id_rute`, `tujuan`, `harga`, `stock_tiket`) VALUES
('TRV-5001', 'cilacap - solo / jam 17.00', 270000, 3),
('TRV-5002', 'cilacap - semarang / Jam 17.00', 450000, 4),
('TRV-5003', 'cilacap - jakarta / Jam 17.00', 200000, 12),
('TRV-5004', 'cilacap - semarang / Jam 17.00', 200000, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `supir`
--

CREATE TABLE `supir` (
  `id_supir` int(11) NOT NULL,
  `nama_supir` text NOT NULL,
  `mobil` text NOT NULL,
  `image` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `supir`
--

INSERT INTO `supir` (`id_supir`, `nama_supir`, `mobil`, `image`, `status`) VALUES
(3, 'ifan', 'Avanza', 'ular_png.jpg', 'reas'),
(4, 'aji', 'xenia', 'unta_png.jpg', 'supir');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_total`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_total` (
`id_departement` varchar(50)
,`id_supir` int(11)
,`nama_supir` text
,`mobil` text
,`id_rute` varchar(50)
,`tanggal` datetime
,`tujuan` text
,`harga` double
,`jumlah_penumpang` varchar(50)
,`total` double
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_tiket`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_tiket` (
`transaction_id` bigint(20)
,`id_tiket` varchar(50)
,`tujuan` text
,`harga` double
,`nama` varchar(100)
,`id_ktp` int(11)
,`no_tlp` varchar(50)
,`alamat` text
,`tgl_brngkt` date
,`created_at` datetime
);

-- --------------------------------------------------------

--
-- Struktur untuk view `view_total`
--
DROP TABLE IF EXISTS `view_total`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_total`  AS  select `departement`.`id_departement` AS `id_departement`,`supir`.`id_supir` AS `id_supir`,`supir`.`nama_supir` AS `nama_supir`,`supir`.`mobil` AS `mobil`,`rute`.`id_rute` AS `id_rute`,`departement`.`tanggal` AS `tanggal`,`rute`.`tujuan` AS `tujuan`,`rute`.`harga` AS `harga`,`departement`.`jumlah_penumpang` AS `jumlah_penumpang`,`rute`.`harga` * `departement`.`jumlah_penumpang` AS `total` from (`supir` join (`rute` join `departement` on(`rute`.`id_rute` = `departement`.`id_rute`)) on(`supir`.`id_supir` = `departement`.`id_supir`)) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_tiket`
--
DROP TABLE IF EXISTS `v_tiket`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_tiket`  AS  select `belitiket`.`transaction_id` AS `transaction_id`,`belitiket`.`id_tiket` AS `id_tiket`,`rute`.`tujuan` AS `tujuan`,`rute`.`harga` AS `harga`,`belitiket`.`nama` AS `nama`,`belitiket`.`id_ktp` AS `id_ktp`,`belitiket`.`no_tlp` AS `no_tlp`,`belitiket`.`alamat` AS `alamat`,`belitiket`.`tgl_brngkt` AS `tgl_brngkt`,`belitiket`.`created_at` AS `created_at` from (`rute` join `belitiket` on(`rute`.`id_rute` = `belitiket`.`id_rute`)) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `belitiket`
--
ALTER TABLE `belitiket`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `id_rute` (`id_rute`);

--
-- Indeks untuk tabel `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`id_departement`),
  ADD KEY `id_supir` (`id_supir`),
  ADD KEY `id_rute` (`id_rute`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indeks untuk tabel `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_ktp`),
  ADD KEY `id_rute` (`id_rute`);

--
-- Indeks untuk tabel `rute`
--
ALTER TABLE `rute`
  ADD PRIMARY KEY (`id_rute`);

--
-- Indeks untuk tabel `supir`
--
ALTER TABLE `supir`
  ADD PRIMARY KEY (`id_supir`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `belitiket`
--
ALTER TABLE `belitiket`
  MODIFY `transaction_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `supir`
--
ALTER TABLE `supir`
  MODIFY `id_supir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
