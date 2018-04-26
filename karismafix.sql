-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11 Apr 2018 pada 03.58
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karismafix`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `atk`
--

CREATE TABLE `atk` (
  `idatk` varchar(255) NOT NULL,
  `jatk` varchar(255) DEFAULT NULL,
  `matk` varchar(255) DEFAULT NULL,
  `stokatk` int(11) DEFAULT NULL,
  `hargaatk` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `atk`
--

INSERT INTO `atk` (`idatk`, `jatk`, `matk`, `stokatk`, `hargaatk`) VALUES
('ATK001', 'Pensil', 'Faber Castel', 14, 4000),
('ATK002', 'Pensil', '2B', 14, 3000),
('ATK003', 'Kotak Pensil', 'Snowp', 15, 13000),
('ATK004', 'Tip-X', 'Kenko', 10, 4500),
('ATK005', 'Kotak Pensil', 'CHT', 12, 11000),
('ATK006', 'Gunting', 'Kenko', 10, 12000),
('ATK007', 'Gunting', 'Kenko', 9, 16000),
('ATK008', 'Penghapus', 'Faber Castle', 56, 2500),
('ATK009', 'Peghapus', 'Snowboard', 40, 4500),
('ATK010', 'Pulpen', 'Pilot', 30, 3000),
('ATK12341', 'dvsdv', 'sdfs', 23, 0),
('ATK1313', 'sdfsdf', 'sdfsdfsd', 123, 1212),
('ATK21', 'sefd', 'sdf', 234, 1231);

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `isbn` int(11) DEFAULT NULL,
  `idpgr` varchar(255) DEFAULT NULL,
  `kodebk` varchar(255) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `kota` varchar(255) DEFAULT NULL,
  `tahun` varchar(255) DEFAULT NULL,
  `stokbk` int(11) DEFAULT NULL,
  `hargabk` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`isbn`, `idpgr`, `kodebk`, `judul`, `kota`, `tahun`, `stokbk`, `hargabk`) VALUES
(15135, 'P002', 'JB009', 'Buku Saku Biologi SMA', 'Bogor', '2011', 5, 67000),
(15434, 'P006', 'JB010', 'Buku Saku Kimia SMA', 'Tanggerang', '2012', 5, 47000),
(23532, 'P007', 'JB003', 'Novel Over The Rain', 'Bekasi', '2014', 40, 54000),
(24645, 'P002', 'JB009', 'Akulah Beo', 'Balikpapan', '2012', 24, 53300),
(35250, 'P003', 'JB006', 'Sejarah Singkat Pelajaran', 'Samarinda', '2015', 10, 73900),
(36236, 'P008', 'JB001', 'Einsten', 'Bekasi', '2007', 17, 66700),
(42656, 'P010', 'JB004', 'Buku Saku Fisika SMA', 'Tenggarong', '2006', 10, 60000),
(43153, 'P003', 'JB003', 'Finally You', 'Tenggarang', '2015', 9, 57300),
(43353, 'P007', 'JB003', 'Buku Pintar TOEFL', 'Bandung', '2016', 24, 60500),
(45252, 'P008', 'JB004', 'Perahu Kertas', 'Yogyakarta', '2011', 6, 64000),
(53153, 'P009', 'JB001', 'Kamus Bahasa Jepang', 'Medan', '2014', 5, 47000),
(56274, 'P005', 'JB007', 'Lokking For You', 'Aceh', '2016', 3, 45200),
(62366, 'P002', 'JB003', 'Tabel Periodik', 'Bekasi', '2015', 15, 76500),
(62456, 'P003', 'JB002', 'Everything Is Alright', 'Bogor', '2014', 12, 37400),
(62560, 'P001', 'JB004', 'Pria Yang Tidak Sempurna', 'Yogyakarta', '2016', 14, 54500),
(63455, 'P001', 'JB010', 'Kamus Bahasa Mandarin', 'Medan', '2011', 3, 83000),
(63567, 'P003', 'JB010', 'Pangeran Karim', 'Samarinda', '2013', 14, 50000),
(65735, 'P006', 'JB003', 'Buku Pintar Agama', 'Aceh', '2007', 23, 57200),
(73622, 'P010', 'JB002', 'Chan-Pi', 'Bekasi', '2011', 10, 86000),
(74742, 'P002', 'JB001', 'Attila Raja Barbar', 'Tenggarong', '2014', 36, 72200),
(75676, 'P006', 'JB008', 'Meredam Dendam', 'Tanggerang', '2006', 20, 99900),
(76573, 'P007', 'JB004', 'Belajar Bentuk', 'Jakarta', '2012', 16, 54400),
(78784, 'P008', 'JB005', 'Buku Sakti Listening', 'Bandung', '2011', 21, 42500),
(79687, 'P010', 'JB005', '121 Indonesia\'s Scandal', 'Bogor', '2011', 10, 45500),
(86387, 'P002', 'JB009', 'LARA', 'Jakarta', '2015', 4, 80000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabat`
--

CREATE TABLE `jabat` (
  `idjabat` varchar(255) NOT NULL,
  `njabat` varchar(255) DEFAULT NULL,
  `gaji` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jabat`
--

INSERT INTO `jabat` (`idjabat`, `njabat`, `gaji`) VALUES
('J01', 'Direktur', 15000000),
('J02', 'Manager', 13000000),
('J03', 'CEO', 12000000),
('J04', 'Wakil Ketua', 10000000),
('J05', 'Staff', 9000000),
('J06', 'SPV', 8000000),
('J07', 'Bendahara', 6000000),
('J08', 'Pramuniaga', 5000000),
('J09', 'Cleaning Service', 3000000),
('J10', 'Security', 2000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenisatk`
--

CREATE TABLE `jenisatk` (
  `idjatk` varchar(255) DEFAULT NULL,
  `jatk` varchar(255) DEFAULT NULL,
  `stokjatk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenisatk`
--

INSERT INTO `jenisatk` (`idjatk`, `jatk`, `stokjatk`) VALUES
('JA001', 'Gunting', 30),
('JA002', 'Kertas', 23),
('JA003', 'Lem', 37),
('JA004', 'Penggaris', 54),
('JA005', 'Penghapus', 13),
('JA006', 'Pensil', 30),
('JA007', 'Pulpen', 54),
('JA008', 'Rautan', 21),
('JA009', 'Spidol', 52),
('JA010', 'Tip-X', 31);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenisbk`
--

CREATE TABLE `jenisbk` (
  `kdjb` varchar(255) NOT NULL,
  `namajb` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenisbk`
--

INSERT INTO `jenisbk` (`kdjb`, `namajb`) VALUES
('JB001', 'Pengetahuan'),
('JB002', 'Novel'),
('JB003', 'Pelajaran'),
('JB004', 'Buku Anak'),
('JB005', 'Agama'),
('JB006', 'Ekonomi'),
('JB007', 'Biografi'),
('JB008', 'Sosial Budaya'),
('JB009', 'Pertanian'),
('JB010', 'Kamus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kar`
--

CREATE TABLE `kar` (
  `idkar` varchar(255) NOT NULL,
  `nkar` varchar(255) DEFAULT NULL,
  `tlkar` date DEFAULT NULL,
  `ukar` int(11) DEFAULT NULL,
  `akar` varchar(255) DEFAULT NULL,
  `njkar` varchar(255) DEFAULT NULL,
  `telkar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kar`
--

INSERT INTO `kar` (`idkar`, `nkar`, `tlkar`, `ukar`, `akar`, `njkar`, `telkar`) VALUES
('K001', 'Abdul Rahman', '1985-11-23', 32, 'Jl. Kenari RT.10', 'SPV', '081346620866'),
('K002', 'Eka Yulia Astuti', '1990-06-10', 27, 'Jl. Pahlawan RT. 23', 'SPV', '081246663453'),
('K003', 'Doni Apriyadi', '1992-12-04', 25, 'Jl. Perjuangan RT.27', 'Pramuaniaga', '085244543555'),
('K004', 'Randy Hasnur', '1992-09-18', 25, 'Jl. Mawar RT.15', 'SPV', '081346657466'),
('K005', 'Dian Prima', '1997-06-13', 21, 'Jl. Mangga RT.20', 'Pramuaniaga', '081253626654'),
('K006', 'Antonia', '1996-01-14', 22, 'Jl. Jeruk RT.17', 'Pramuaniaga', '082353526667'),
('K007', 'Anggara', '1993-03-23', 25, 'Jl. MT Haryono RT.18', 'SPV', '081363563566'),
('K008', 'Rahmat Aditya', '1994-07-28', 24, 'Jl. Ir Soekarno RT.11', 'Pramuaniaga', '085354654664'),
('K009', 'Arrum Permata', '1995-11-20', 23, 'Jl. Pattimura RT.19', 'Pramuaniaga', '085267876844'),
('K010', 'Yuliani', '1992-08-18', 25, 'Jl. Ahmad Yani RT.15', 'SPV', '081275485878');

-- --------------------------------------------------------

--
-- Struktur dari tabel `merkatk`
--

CREATE TABLE `merkatk` (
  `idmatk` varchar(255) NOT NULL,
  `matk` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `merkatk`
--

INSERT INTO `merkatk` (`idmatk`, `matk`) VALUES
('MA001', 'Faber Castle'),
('MA002', '2B'),
('MA003', 'Snowp'),
('MA004', 'Kenko'),
('MA005', 'CHT'),
('MA006', 'Kanko'),
('MA007', 'SnowBoard'),
('MA008', 'Pilot'),
('MA009', 'Snowman'),
('MA010', 'Hi-Tech');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pgr`
--

CREATE TABLE `pgr` (
  `idpgr` varchar(255) NOT NULL,
  `npgr` varchar(255) DEFAULT NULL,
  `tlpgr` date DEFAULT NULL,
  `umur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pgr`
--

INSERT INTO `pgr` (`idpgr`, `npgr`, `tlpgr`, `umur`) VALUES
('P001', 'John Naughton', '1968-03-07', 50),
('P002', 'Valerie F', '1964-01-02', 54),
('P003', 'Karisma', '1970-03-03', 48),
('P004', 'Irham Ali S', '1969-07-08', 49),
('P005', 'Shana Priwer & Cynthia', '1965-07-28', 53),
('P006', 'Gerson Poyk', '1974-01-21', 44),
('P007', 'Hurani Widaningsi', '1980-01-31', 38),
('P008', 'M. Alfan Alfian', '1985-12-17', 33),
('P009', 'Bernando J. S', '1989-03-31', 29),
('P010', 'John Man', '1972-11-13', 46);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user` varchar(32) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `user`, `pass`, `nama`, `email`, `level`) VALUES
(1, 'admin', 'admin', 'Administrator', 'admin@admin.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atk`
--
ALTER TABLE `atk`
  ADD PRIMARY KEY (`idatk`);

--
-- Indexes for table `jabat`
--
ALTER TABLE `jabat`
  ADD PRIMARY KEY (`idjabat`);

--
-- Indexes for table `jenisbk`
--
ALTER TABLE `jenisbk`
  ADD PRIMARY KEY (`kdjb`);

--
-- Indexes for table `kar`
--
ALTER TABLE `kar`
  ADD PRIMARY KEY (`idkar`);

--
-- Indexes for table `merkatk`
--
ALTER TABLE `merkatk`
  ADD PRIMARY KEY (`idmatk`);

--
-- Indexes for table `pgr`
--
ALTER TABLE `pgr`
  ADD PRIMARY KEY (`idpgr`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
