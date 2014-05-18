-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2014 at 04:08 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `simsimdig`
--

-- --------------------------------------------------------

--
-- Table structure for table `dft_pesertapel`
--

CREATE TABLE IF NOT EXISTS `dft_pesertapel` (
  `No` int(11) NOT NULL,
  `nm_Lengkap` longtext NOT NULL,
  `jns_kelamin` longtext NOT NULL,
  `kewarganegaraan` longtext NOT NULL,
  `tgl` date NOT NULL,
  `tempat` longtext NOT NULL,
  `asl_institusi` longtext NOT NULL,
  `jabatan` longtext NOT NULL,
  `no_hp` int(11) NOT NULL,
  `email` longtext NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dft_pesertapel`
--

INSERT INTO `dft_pesertapel` (`No`, `nm_Lengkap`, `jns_kelamin`, `kewarganegaraan`, `tgl`, `tempat`, `asl_institusi`, `jabatan`, `no_hp`, `email`) VALUES
(0, '', '', '', '0000-00-00', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `dpl_simdig`
--

CREATE TABLE IF NOT EXISTS `dpl_simdig` (
  `No` int(11) NOT NULL AUTO_INCREMENT,
  `tmp_pelatihan` longtext NOT NULL,
  `cpd` longtext NOT NULL,
  `no_hp` int(16) NOT NULL,
  `tgl_pelatihan` date NOT NULL,
  `kor_pelatihan` longtext NOT NULL,
  `lap_training` longtext NOT NULL,
  `link` longtext NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `dpl_simdig`
--

INSERT INTO `dpl_simdig` (`No`, `tmp_pelatihan`, `cpd`, `no_hp`, `tgl_pelatihan`, `kor_pelatihan`, `lap_training`, `link`) VALUES
(1, '', '', 0, '0000-00-00', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ev_instruktur`
--

CREATE TABLE IF NOT EXISTS `ev_instruktur` (
  `No` int(11) NOT NULL AUTO_INCREMENT,
  `Aspek` longtext NOT NULL,
  `Nilai` int(11) NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ev_instruktur`
--

INSERT INTO `ev_instruktur` (`No`, `Aspek`, `Nilai`) VALUES
(1, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `frm_plthn`
--

CREATE TABLE IF NOT EXISTS `frm_plthn` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Tempat` longtext NOT NULL,
  `Daerah` longtext NOT NULL,
  `Provinsi` longtext NOT NULL,
  `Tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Nama_CPD` longtext NOT NULL,
  `HP_PIC` int(16) NOT NULL,
  `Jml_Peserta` longtext NOT NULL,
  `Kor_pelatihan` longtext NOT NULL,
  `Staff1` longtext NOT NULL,
  `Staff2` longtext NOT NULL,
  `Mhs` longtext NOT NULL,
  `Ket` longtext NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `frm_plthn`
--

INSERT INTO `frm_plthn` (`ID`, `Tempat`, `Daerah`, `Provinsi`, `Tanggal`, `Nama_CPD`, `HP_PIC`, `Jml_Peserta`, `Kor_pelatihan`, `Staff1`, `Staff2`, `Mhs`, `Ket`) VALUES
(1, '', '', '', '2014-04-15 17:03:56', '', 0, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_karya`
--

CREATE TABLE IF NOT EXISTS `hasil_karya` (
  `No` int(11) NOT NULL AUTO_INCREMENT,
  `nama` longtext NOT NULL,
  `instansi` longtext NOT NULL,
  `video` longtext NOT NULL,
  `kode_kelas` longtext NOT NULL,
  `jdl_video` longtext NOT NULL,
  `jdl_simulasivisual` longtext NOT NULL,
  `jdl_bkdigital` longtext NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hasil_karya`
--

INSERT INTO `hasil_karya` (`No`, `nama`, `instansi`, `video`, `kode_kelas`, `jdl_video`, `jdl_simulasivisual`, `jdl_bkdigital`) VALUES
(1, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pmbg_instruktur`
--

CREATE TABLE IF NOT EXISTS `pmbg_instruktur` (
  `No` int(11) NOT NULL AUTO_INCREMENT,
  `Nama` longtext NOT NULL,
  `Fungsi` longtext NOT NULL,
  `Tgs_administratif` longtext NOT NULL,
  `Tgs_materi` longtext NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `pmbg_instruktur`
--

INSERT INTO `pmbg_instruktur` (`No`, `Nama`, `Fungsi`, `Tgs_administratif`, `Tgs_materi`) VALUES
(1, '', '', '', ''),
(2, 'nm', 'fungsi', 'tgs', 'materi'),
(3, 'nm', 'fungsi', 'tgs', 'materi'),
(4, 'nm', 'fungsi', 'tgs', 'materi'),
(5, 'test', 'tetst', 'tesa', 'test'),
(6, 'test', 'tetst', 'tesa', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `ups_simdig`
--

CREATE TABLE IF NOT EXISTS `ups_simdig` (
  `No` int(11) NOT NULL AUTO_INCREMENT,
  `tmp_pelatiahan` longtext NOT NULL,
  `cpd` longtext NOT NULL,
  `no_hp` int(16) NOT NULL,
  `tgl_pelatihan` date NOT NULL,
  `kor_pelatihan` longtext NOT NULL,
  `tgl_ujian` date NOT NULL,
  `tgl_remidi` date NOT NULL,
  `tgl_penhasilkar` date NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ups_simdig`
--

INSERT INTO `ups_simdig` (`No`, `tmp_pelatiahan`, `cpd`, `no_hp`, `tgl_pelatihan`, `kor_pelatihan`, `tgl_ujian`, `tgl_remidi`, `tgl_penhasilkar`) VALUES
(1, '', '', 0, '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
