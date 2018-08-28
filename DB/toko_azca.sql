-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2018 at 03:24 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_azca`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adm_id` int(11) NOT NULL,
  `sts_id` int(11) NOT NULL DEFAULT '0',
  `adm_nama` varchar(25) DEFAULT NULL,
  `adm_pass` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adm_id`, `sts_id`, `adm_nama`, `adm_pass`) VALUES
(1, 1, 'ADMIN', '123456'),
(3, 2, 'WARI', 'wari');

-- --------------------------------------------------------

--
-- Table structure for table `admin_status`
--

CREATE TABLE `admin_status` (
  `sts_id` int(11) NOT NULL,
  `sts_status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_status`
--

INSERT INTO `admin_status` (`sts_id`, `sts_status`) VALUES
(1, 'ADMIN'),
(2, 'KARYAWAN');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `brg_id` int(11) NOT NULL,
  `ktg_id` int(11) DEFAULT NULL,
  `stn_id` int(11) DEFAULT NULL,
  `brg_nama` varchar(60) DEFAULT NULL,
  `brg_harga_bl` double DEFAULT NULL,
  `brg_harga_jual` double DEFAULT NULL,
  `brg_stok` int(11) DEFAULT NULL,
  `brg_ket` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`brg_id`, `ktg_id`, `stn_id`, `brg_nama`, `brg_harga_bl`, `brg_harga_jual`, `brg_stok`, `brg_ket`) VALUES
(1, 1, 5, 'DJARUM SUPER MLD HITAM ISI 12 ', 11000, 12500, 0, '12500'),
(2, 1, 5, 'DAJRUM SUPER MLD HITAM ISI 16', 16000, 17000, 0, '17000'),
(3, 1, 5, 'DJARUM SUPER MLD PUTIH ISI 20 ', 20000, 20500, 0, '20,500'),
(4, 1, 5, 'DJARUM SUPER MLD PUTIH ISI 12', 11000, 12500, 0, '12,500'),
(5, 1, 5, 'MALBORO FILTER BLACK ISI 20', 20000, 21500, 0, '21500'),
(6, 1, 5, 'MALBORO FILTER BLACK ISI 21', 12500, 14500, 0, '14500'),
(7, 1, 5, 'MALBORO MERAH ISI 20', 20000, 24500, 0, '24500'),
(8, 1, 5, 'MALBORO PUTIH ISI 20', 20000, 24500, 0, '24500'),
(9, 1, 5, 'MALBORO BLACK MENTOL ISI 20', 21000, 23500, 0, '23.500'),
(10, 1, 5, 'SAMPOERNA MILD MERAH ISI 16', 20000, 21500, 0, '21.500'),
(11, 1, 5, 'SAMPOERNA MILD MERAH ISI 12', 16500, 15500, 0, '15.500'),
(12, 1, 5, 'SAMPOERNA MILD MENTOL ISI 16', 19500, 20500, 0, '20.500'),
(13, 1, 5, 'SAMPOERNA EVOLUTION MENTOL ISI', 21500, 23000, 0, '23.000'),
(14, 1, 5, 'SAMPOERNA EVOLUTION MERAH ISI ', 22600, 24000, 0, '24.000'),
(15, 1, 5, 'MAGNUM MILD ISI 16', 14500, 15500, 0, '15.500'),
(16, 1, 1, 'JANCOK', 15500, 16500, 11, '16.500'),
(17, 1, 5, 'LA LIGHTS ISI 16', 17500, 18500, 0, '18500'),
(18, 1, 5, 'LA MENTOL ISI 16', 16800, 18500, 0, '18.500'),
(19, 1, 5, 'LA ICE ISI 16', 17700, 18500, 0, '18.500'),
(20, 1, 5, 'GUDANG GARAM SIGNATURE MILD IS', 15800, 17000, 0, '17.000'),
(21, 1, 5, 'STAR MILD ISI 16', 16800, 18000, 0, '18.000'),
(22, 1, 5, 'DUNHILL BLACK ISI 16', 15400, 17000, 0, '17.000'),
(23, 1, 5, 'DUNHILL PUTIH ISI 20', 19800, 21500, 0, '21.500'),
(24, 1, 5, 'DJI SAM SOE ISI 12', 14600, 16500, 0, 'Rp.2.000/BATANG.RP. 3.500/2 BATANG,RP.5.000/3 BATANG,RP. 6.500/4 BATANG, RP.9.500/6 BATANG'),
(25, 1, 5, 'DJI SAM SOE ISI 16', 19500, 20000, 0, 'Rp.2.000/BATANG.RP. 3.500/2 BATANG,RP.5.000/3 BATANG,RP. 6.500/4 BATANG, RP.9.500/6 BATANG'),
(26, 1, 5, 'GG MILD ISI 16', 14500, 15500, 0, '15.500'),
(27, 1, 5, 'CLASS MILD ISI 16', 17000, 19000, 0, '19.000'),
(28, 1, 5, 'WISMILAK SLIM ISI 16', 12500, 13500, 0, '13.500'),
(29, 1, 5, 'DJARUM SUPER ISI 16 ', 19500, 20500, 10, 'Rp.2.000/BATANG.RP. 3.500/2 BATANG,RP.5.000/3 BATANG,RP. 6.500/4 BATANG, RP.9.500/6 BATANG'),
(30, 1, 5, 'DJARUM SUPER ISI 12', 16000, 17000, 10, 'Rp.2.000/BATANG.RP. 3.500/2 BATANG,RP.5.000/3 BATANG,RP. 6.500/4 BATANG, RP.9.500/6 BATANG'),
(31, 1, 5, 'GUDANG GARAM FILTER/GARFIT ISI', 16000, 17000, 0, 'YANG BUNGKUS TIDAK DIECER,YANG DI ECER YANG KALENG'),
(32, 1, 5, 'GUDANG GARAM GILTER KALENG', 30000, 38000, 0, 'Rp.2.000/BATANG.RP. 3.500/2 BATANG,RP.5.000/3 BATANG,RP. 6.500/4 BATANG, RP.9.500/6 BATANG'),
(33, 1, 5, 'DJI SAM SOE BLACK/ REFIL ISI 1', 17000, 18500, 0, 'NO ECER '),
(34, 1, 5, 'NESLITE HITAM/ PUTIH/ HIJAU ISI 16', 11500, 12500, 0, 'NO ECER'),
(35, 1, 5, 'EXTREME ISI 16', 13800, 14500, 0, 'RP.1.000/BATANG '),
(36, 1, 5, 'SURYA PRO PUTIH/PRO MERAH ISI 16', 14500, 15500, 0, 'NO ECER'),
(37, 1, 5, 'FORTE ORIGINAL ISI 20', 14000, 15000, 0, 'NO ECER'),
(38, 1, 5, 'FORTE MENTOL ISI 20', 13500, 15000, 0, 'NO ECER'),
(39, 1, 5, 'LA BOLD ISI 20', 20000, 21500, 0, 'NO ECER'),
(40, 1, 5, 'LA BOLD ISI 12', 11500, 12500, 0, 'NO ECER'),
(41, 1, 5, 'HALIM ISI 20', 10000, 11000, 0, 'NO ECER'),
(42, 1, 5, 'LUCKY STRIKE ISI 16', 12800, 14500, 0, 'NO ECER'),
(43, 1, 5, 'DJINGGO LAMA/MINAK DJINGGO ISI 10', 7000, 8500, 0, 'RP.1.000/BATANG'),
(44, 1, 5, 'SAMPOERNA KRETEK COKELAT ISI 12', 7500, 10000, 0, 'NO ECER'),
(45, 1, 5, 'SAMPOERNA KRETEK HIJAU ISI 12', 11500, 12500, 0, 'RP.1.500/BATANG,RP.2.500/2 BATANG RP.5.000/4 BATANG,RP.7000/6 BATANG,'),
(46, 1, 5, 'SRIWEDARI ISI 12', 800, 1500, 0, 'NO ECER'),
(47, 1, 5, 'GUDANG GARAM MERAH ISI 12', 11000, 13000, 0, 'RP.1.500/BATANG,RP.5.000/4 BATANGRP.7.500/6 BATANG/SETENGAH ,'),
(48, 1, 5, 'DJARUM COKELAT ISI 12', 11800, 13500, 0, 'RP.1.500/BATANG,RP.5.000/4 BATANGRP.7.500/6 BATANG/SETENGAH ,'),
(49, 1, 5, 'APACHE KRETEK/BUNGKUS COKELAT  ISI 10 ', 7600, 8500, 0, 'RP. 1.000/BATANG'),
(50, 1, 5, 'APACHE KRETEK/BUNGKUS COKELAT  ISI 12', 9500, 10000, 0, 'RP.1.000/BATANG'),
(51, 1, 5, 'APACHE KRETEK/BUNGKUS COKELAT  ISI 20', 16000, 17000, 0, 'RP.1.000/BATANG'),
(52, 1, 5, 'APACHE FILTER ISI 12', 11500, 13000, 0, 'RP.1.500/BATANG,RP.2.500/2 BATANG,RP. 5000/4 BATANG,RP. 7000/6 BATANG,'),
(53, 1, 5, 'APACHE FILTER ISI 16', 14500, 16000, 0, 'RP.1.500/BATANG,RP.2.500/2 BATANG,RP. 5000/4 BATANG,RP. 7000/6 BATANG,RP. 9.000/8 BATANG'),
(54, 1, 5, 'APACHE BLACK GOLD ISI 12', 13000, 13500, 0, 'NO ECER'),
(55, 1, 5, 'DJARUM COKELAT FILTER ISI 12', 12000, 13500, 0, 'NO ECER'),
(56, 1, 5, 'GUDANG GARAM SURYA ISI 16', 19000, 21000, 0, 'no ecer'),
(57, 4, 1, 'MARIMAS SEMUA RASA ', 2000, 3000, 100, 'RP.3.000/RENCENG (ISI 10),RP. 500/PCS,RP.2000/5 PCS,'),
(58, 4, 1, 'FRENTA SEMUA RASA', 2500, 3500, 0, 'RP.3.500/RENCENG ISI 10,RP. 500/PCS,RP.2000/5 PCS,'),
(59, 4, 1, 'TOP ICE ', 2500, 3000, 1, 'RP.3.000/RENCENG (ISI 10),RP. 500/PCS,RP.2000/5 PCS,'),
(60, 1, 1, 'TEA JUS SEMUA RASA', 2000, 3000, 0, 'RP.3.000/RENCENG (ISI 10),RP. 500/PCS,RP.2000/5 PCS,'),
(61, 4, 1, 'TEH SISRI', 2000, 3000, 0, 'RP.3.000/RENCENG (ISI 10),RP. 500/PCS,RP.2000/5 PCS,'),
(62, 4, 1, 'JAS JUS ', 2000, 3000, 0, 'RP.3.000/RENCENG (ISI 10),RP. 500/PCS,RP.2000/5 PCS,'),
(63, 4, 1, 'NUTRISARI', 9500, 11000, 0, 'RP.11.000/RENCENG ISI 10,RP.1.500/PCS,RP.2.500/2PCS.RP.5000/4PCS,RP.2.000/SEDUH.'),
(64, 4, 1, 'POP ICE', 8000, 9500, 0, 'RP.9.500/RENCENG ISI 10,RP.1.000/PCS,'),
(65, 4, 1, 'KOPI ABC PLUS', 3500, 5000, 0, 'RP.5.000/RENCENG ISI 10,RP.1000/PCS,RP.1.500/2 PCS,RP.2.000/3PCS,'),
(66, 4, 1, 'KOPI TOP PLUS ', 3500, 5000, 0, 'RP.5.000/RENCENG ISI 10,RP.1000/PCS,RP.1.500/2 PCS,RP.2.000/3PCS,\r\n2 RENCENG+GELAS 1PCS'),
(67, 4, 1, 'KOPI TOP SUSU', 8000, 9500, 0, 'RP.9.500/ RENCENG ISI 12,RP.1.000/PCS.'),
(68, 4, 1, 'KOPI TOP MOCCA', 8000, 9500, 0, 'RP.9.500/ RENCENG ISI 12,RP.1.000/PCS.'),
(69, 3, 1, 'KOPI TOP WHITE', 8000, 9500, 0, 'RP.9.500/ RENCENG ISI 12,RP.1.000/PCS.'),
(70, 4, 1, 'KOPI TOP TORAJA', 8500, 9500, 0, 'RP.9.500/ RENCENG ISI 12,RP.1.000/PCS.'),
(71, 4, 1, 'KOPI TOP SUSU KENTAL MANIS ', 8500, 9500, 0, 'RP.9.500/ RENCENG ISI 12,RP.1.000/PCS.'),
(72, 4, 1, 'KOPI ABC SUSU', 10000, 11000, 0, 'RP.11.000/RENCENG ISI 10,RP.1.500/PCS,RP.2.500/2 PCS,RP.5.000/4 PCS,'),
(73, 4, 1, 'KOPI KAPAL API MIX', 10000, 11000, 0, 'RP.11.000/RENCENG ISI 10,RP.1.500/PCS,RP.2.500/2 PCS,RP.5.000/4 PCS,'),
(74, 4, 1, 'KOPI TORA SUSU', 9500, 10500, 0, 'RP.10.500/RENCENG ISI 10,RP.1.500/PCS,RP.2.500/2 PCS,RP.5.000/4 PCS,'),
(75, 4, 1, 'ENERGEN', 11000, 12500, 0, 'RP.12.500/RENCENG ISI 10,RP.1.500/PCS,'),
(76, 4, 1, 'PRIMA ', 8000, 9000, 0, 'RP.9.000/RENCENG ISI 10,RP.1.000/PCS,'),
(77, 4, 1, 'GOWEL', 8000, 9000, 0, 'RP.9.000/RENCENG ISI 10,RP.1.000/PCS,'),
(78, 4, 1, 'MILO', 13500, 14500, 0, 'RP.14.500/RENCENG ISI 10,RP.1.500/PCS,'),
(79, 3, 1, 'CERELAC', 11000, 12000, 0, 'RP. 12.000/RENCENG ISI 8,RP.2.000/PCS,'),
(80, 4, 1, 'DANCAU ', 26500, 29000, 0, 'RP.29.000/RENCENG ISI 10,RP.3.500/PCS'),
(81, 4, 1, 'KOPI TORABIKA CREAMILATE', 12500, 14500, 0, 'RP.14.500/RENCENG ISI10,RP.1500/PCS,'),
(82, 4, 1, 'KOPI TORABIKA CAPOCINO', 13500, 14500, 0, 'RP.14.500/RENCENG ISI 10,RP.2.000/PCS,'),
(83, 4, 1, 'KOPI GOODDAY CAPOCINNO GRANULLE', 14000, 15000, 0, 'RP.15.000/RENCENG ISI 10,RP.2.000/PCS'),
(84, 4, 1, 'KOPI INDOCAFFE CAPOCINNO ', 15500, 17000, 0, 'RP.17.000/RENCENG ISI 10,RP.2.000/PCS,'),
(85, 4, 1, 'KOPI INDOCAFFE MIX', 10000, 11000, 0, 'RP.11.000/RENCENG ISI 10,RP.1.1500/PCS,RP.2.500/2PCS,RP.5.00/4 PCS'),
(86, 4, 1, 'KOPI TORACAFFE', 13500, 14500, 0, 'RP.14.500/RENCENG ISI 10,RP.1500/PCS'),
(87, 4, 1, 'KOPI BENG-BENG DRINK ', 13500, 15000, 0, 'RP.15000/RENCENG ISI 10,RP.2.000/PCS,'),
(88, 4, 1, 'KOPI TORABIKA SUSU ESPRESSO', 13500, 15000, 0, 'RP.15000/RENCENG ISI 10,RP.2.000/PCS,'),
(89, 4, 1, 'KOPI LUWAK WHITE COFFE ', 9500, 10500, 0, 'RP.10.500/RENCENG ISI 10,RP.1.500/PCS,RP.2.500/PCSRP.5.000/4PCS'),
(90, 4, 1, 'KOPI LUWAK KOPI GULA', 8000, 9500, 0, 'RP.9500/RENCENG ISI 10,RP.1000/PCS'),
(91, 4, 1, 'KOPI CHOCOLATOS COKELAT', 15500, 17500, 0, 'RP.17500/RENCENG ISI 10,RP.2.000/PCS,'),
(92, 4, 1, 'KOPI CHOCOLATOS MACHALATE', 15500, 17500, 0, 'RP.17500/RENCENG ISI 10,RP.2.000/PCS,'),
(93, 4, 1, 'KOPI KAPAL API FREESCO MOCCA', 8000, 9500, 0, 'RP.9.500/RENCENG ISI 12,RP.1.000/PCS,'),
(94, 4, 1, 'KOPI KAPAL API MOCCA', 10000, 11000, 0, 'RP.11.000/RENCENG ISI 10,RP.1.500/PCS,RP.2.500/2 PCS,RP.5.000/4 PCS,'),
(95, 4, 1, 'ANGET SARI SUSU JAHE ', 8000, 9000, 0, 'RP.9000/RENCENG ISI 10,RP.1000/PCS'),
(96, 4, 1, 'SUSU JAHE SIDO MUNCUL', 10500, 12000, 0, 'RP.12.000/RENCENG ISI 10,RP.1.500/PCS,RP.2.500/2 PCS,'),
(97, 4, 1, 'FINE CHOCO', 12500, 14500, 0, 'RP.14.500/RENCENG ISI 10,RP,1500/PCS,'),
(98, 4, 1, 'KOPI TORRABICA DUO ', 8000, 9000, 0, 'RP.9000/RENCENG ISI 10,RP.1000/PCS,'),
(99, 4, 1, 'KOPI TORABICA JAHE SUSU', 8500, 9500, 0, 'RP.9.500/RENCENG ISI 10,RP.1.000/PCS'),
(100, 4, 1, 'KOPI TORABICA TORAMOCCA', 10000, 11000, 0, 'RP.11.000/RENCENG ISI 10,RP.1.500/PCS,RP.2.500/2 PCS,RP.5.000/4 PCS,'),
(101, 4, 1, 'KOPI ABC WHITE ', 9500, 10500, 0, 'RP.10.500/RENCENG ISI 12,RP.1500/PCS,RP.2.500/ 2 PCS,RP.5.000/ 4PCS,RP.5500/6 PCS '),
(102, 4, 1, 'KOPI GOODDAY FREZE', 16500, 18000, 0, 'RP.18.000/RENCENG  ISI 10,RP.2.000/PCS,'),
(103, 4, 1, 'KOPI KAPAL API 6.5 GRAM  ', 3500, 5000, 0, 'RP.5.000/RENCENG ISI 10,RP.1000/PCS,RP.1.500/2PCS,RP.2.000/3PCS,'),
(104, 4, 1, 'KOPI KAPAL API 65 GRAM', 45000, 48000, 0, 'RP.48.000/RENCENG ISI 10,RP.5.000/PCS'),
(105, 4, 1, 'KOPI GOODDAY MOCCACHINO ', 9500, 11000, 0, 'RP.11.000/RENCENG ISI 10,RP.1.500/PCS,RP.2.500/2 PCS,RP.5000/4 PCS'),
(116, 5, 1, 'MASAKO AYAM/SAPI', 4500, 5500, 0, 'RP.500/PCS,RP.5500/RENCENG ISI 12 PCS'),
(117, 5, 1, 'MUINYAK SAYUR CURAH', 2500, 3500, 0, 'MINYAK SAYUR CURAH'),
(118, 5, 1, 'SIKAT GIGI', 1000, 3000, 0, 'ecer/grosir'),
(119, 3, 2, 'TARO', 5000, 5600, 0, 'mmmmmm'),
(120, 4, 1, 'LARUTAN', 5000, 8000, 0, 'Keterangan2'),
(124, 1, 5, 'FORTE', 15000, 20000, 0, 'SASASA');

-- --------------------------------------------------------

--
-- Table structure for table `costumer`
--

CREATE TABLE `costumer` (
  `cst_id` int(11) NOT NULL,
  `cst_nama` varchar(20) NOT NULL,
  `cst_ket` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `costumer`
--

INSERT INTO `costumer` (`cst_id`, `cst_nama`, `cst_ket`) VALUES
(1, 'CS', 'JOMIN TMUR'),
(3, 'WARI', 'CIKAMPEK'),
(4, 'DANI', 'BAYUR ');

-- --------------------------------------------------------

--
-- Table structure for table `dt_pembelian`
--

CREATE TABLE `dt_pembelian` (
  `pbl_id` varchar(20) DEFAULT NULL,
  `brg_id` int(11) DEFAULT NULL,
  `dt_pbl_jumbel` double DEFAULT NULL,
  `dt_pbl_subtot` double DEFAULT NULL,
  `dt_pbl_diskon` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dt_pembelian`
--

INSERT INTO `dt_pembelian` (`pbl_id`, `brg_id`, `dt_pbl_jumbel`, `dt_pbl_subtot`, `dt_pbl_diskon`) VALUES
('PBL20180516001', 57, 120, 240000, 0),
('PBL20180516002', 57, 12, 24000, 0),
('PBL20180516002', 59, 12, 30000, 0),
('PBL20180519001', 16, 12, 186000, 0),
('PBL20180519001', 59, 1, 2000, 500),
('PBL20180521001', 30, 12, 192000, 0),
('PBL20180521001', 29, 12, 234000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `dt_penjualan`
--

CREATE TABLE `dt_penjualan` (
  `pnj_id` varchar(20) DEFAULT NULL,
  `brg_id` int(11) DEFAULT NULL,
  `dt_pnj_jumbel` double DEFAULT NULL,
  `dt_pnj_subtot` double DEFAULT NULL,
  `dt_pnj_diskon` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dt_penjualan`
--

INSERT INTO `dt_penjualan` (`pnj_id`, `brg_id`, `dt_pnj_jumbel`, `dt_pnj_subtot`, `dt_pnj_diskon`) VALUES
('PNJ20180516001', 57, 32, 96000, 0),
('PNJ20180516001', 59, 10, 30000, 0),
('PNJ20180519001', 16, 1, 16500, 0),
('PNJ20180519001', 59, 2, 6000, 0),
('PNJ20180521001', 30, 2, 34000, 0),
('PNJ20180521001', 29, 2, 41000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `ktg_id` int(11) NOT NULL,
  `ktg_nama` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`ktg_id`, `ktg_nama`) VALUES
(1, 'ROKOK'),
(2, 'KECANTIKAN'),
(3, 'MAKANAN'),
(4, 'MINUMAN'),
(5, 'BUMBU DAPUR'),
(6, 'PERLENGKAPAN MANDI'),
(7, 'AKSESORIS');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `pbl_id` varchar(20) NOT NULL,
  `adm_id` int(11) DEFAULT NULL,
  `spl_id` int(11) DEFAULT NULL,
  `pbl_nota` varchar(15) DEFAULT NULL,
  `pbl_tanggal` date DEFAULT NULL,
  `pbl_total` double DEFAULT NULL,
  `pbl_ket` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`pbl_id`, `adm_id`, `spl_id`, `pbl_nota`, `pbl_tanggal`, `pbl_total`, `pbl_ket`) VALUES
('PBL20180516001', 3, 2, 'as121212', '2018-05-16', 240000, ''),
('PBL20180516002', 3, 2, 'n0ta1213', '2018-05-16', 54000, 'asasas'),
('PBL20180519001', 1, 1, 'ASA12121', '2018-05-19', 188000, 'ASASA'),
('PBL20180521001', 3, 2, '', '2018-05-21', 426000, 'balanalaa');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `pnj_id` varchar(20) NOT NULL,
  `adm_id` int(11) DEFAULT NULL,
  `cst_id` int(11) DEFAULT NULL,
  `pnj_tanggal` date DEFAULT NULL,
  `pnj_total` double DEFAULT NULL,
  `pnj_ket` varchar(60) DEFAULT NULL,
  `pnj_total_akhir` double DEFAULT NULL,
  `pnj_diskon_akhir` double DEFAULT NULL,
  `pnj_bayar_akhir` double DEFAULT NULL,
  `pnj_kembalian_akhir` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`pnj_id`, `adm_id`, `cst_id`, `pnj_tanggal`, `pnj_total`, `pnj_ket`, `pnj_total_akhir`, `pnj_diskon_akhir`, `pnj_bayar_akhir`, `pnj_kembalian_akhir`) VALUES
('PNJ20180516001', 3, 1, '2018-05-16', 126000, 'percobaan', 126000, 0, 126000, 0),
('PNJ20180519001', 1, 1, '2018-05-19', 22500, '', 22000, 500, 120000, 98000),
('PNJ20180521001', 3, 1, '2018-05-21', 75000, 'asasas', 75000, 0, 80000, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `satuan`
--

CREATE TABLE `satuan` (
  `stn_id` int(11) NOT NULL,
  `stn_nama` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `satuan`
--

INSERT INTO `satuan` (`stn_id`, `stn_nama`) VALUES
(1, 'PCS'),
(2, 'BATANG'),
(3, 'PACK'),
(4, 'LITER'),
(5, 'BUNGKUS');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `spl_id` int(11) NOT NULL,
  `spl_nama` varchar(30) DEFAULT NULL,
  `spl_alamat` varchar(60) DEFAULT NULL,
  `spl_telp` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`spl_id`, `spl_nama`, `spl_alamat`, `spl_telp`) VALUES
(1, 'TOKO-IPAH', 'sukaati', '123'),
(2, 'TOKO-BINTANG', 'cikampek', '123'),
(3, 'TOKO-TIMUR', 'cikampek', '123'),
(4, 'TOKO-TELUR', 'cikampek', '123'),
(5, 'TOKO-TERIGU', 'cikampek cijalu pasar modern', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adm_id`),
  ADD KEY `Index 2` (`sts_id`);

--
-- Indexes for table `admin_status`
--
ALTER TABLE `admin_status`
  ADD PRIMARY KEY (`sts_id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`brg_id`),
  ADD KEY `fk_BARANG_KATEGORI1_idx` (`ktg_id`),
  ADD KEY `stn_id` (`stn_id`);

--
-- Indexes for table `costumer`
--
ALTER TABLE `costumer`
  ADD PRIMARY KEY (`cst_id`);

--
-- Indexes for table `dt_pembelian`
--
ALTER TABLE `dt_pembelian`
  ADD KEY `fk_DT_PEMBELIAN_PEMBELIAN1` (`pbl_id`),
  ADD KEY `fk_DT_PEMBELIAN_BARANG1_idx` (`brg_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`ktg_id`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`pbl_id`),
  ADD KEY `fk_PEMBELIAN_ADMIN1_idx` (`adm_id`),
  ADD KEY `fk_PEMBELIAN_SUPPLIER1_idx` (`spl_id`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`pnj_id`),
  ADD KEY `fk_PENJUALAN_COSTUMER1_idx` (`cst_id`),
  ADD KEY `fk_PENJUALAN_ADMIN1_idx` (`adm_id`);

--
-- Indexes for table `satuan`
--
ALTER TABLE `satuan`
  ADD PRIMARY KEY (`stn_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`spl_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `admin_status`
--
ALTER TABLE `admin_status`
  MODIFY `sts_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `brg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
--
-- AUTO_INCREMENT for table `costumer`
--
ALTER TABLE `costumer`
  MODIFY `cst_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `ktg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `satuan`
--
ALTER TABLE `satuan`
  MODIFY `stn_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `spl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
