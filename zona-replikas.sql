-- phpMyAdmin SQL Dump
-- version 3.3.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 28, 2014 at 12:54 PM
-- Server version: 5.1.46
-- PHP Version: 5.3.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zona-replikas`
--

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `id_komentar` int(11) NOT NULL AUTO_INCREMENT,
  `id_target` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `komentar_date` datetime NOT NULL,
  PRIMARY KEY (`id_komentar`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_target`, `id_user`, `komentar`, `komentar_date`) VALUES
(1, 1, 3, 'Media queries We use the following media queries to create the key breakpoints in our grid system.', '2014-02-27 06:36:56'),
(2, 1, 2, 'Liquid error: undefined method `join'' for # We occasionally expand on these media queries to include a max-width to limit CSS to a narrower set of devices.', '2014-02-27 06:37:15');

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE IF NOT EXISTS `posting` (
  `id_posting` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `posting` text NOT NULL,
  `posting_date` datetime NOT NULL,
  PRIMARY KEY (`id_posting`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `posting`
--

INSERT INTO `posting` (`id_posting`, `id_user`, `posting`, `posting_date`) VALUES
(1, 2, 'Bootstrap includes a responsive, mobile first fluid grid system that appropriately scales up to 12 columns as the device or viewport size increases. It includes predefined classes for easy layout options, as well as powerful mixins for generating more semantic layouts. Media queries We use the following media queries to create the key breakpoints in our grid system. Liquid error: undefined method `join'' for # We occasionally expand on these media queries to include a max-width to limit CSS to a narrower set of devices. Liquid error: undefined method `join'' for #', '2014-02-27 06:36:21'),
(2, 1, 'Use any button to trigger a dropdown menu by placing it within a .btn-group and providing the proper menu markup.', '2014-02-27 07:25:30');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `foto_user` varchar(150) NOT NULL,
  `role` enum('admin','siswa','user') NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_user`, `email`, `foto_user`, `role`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin', 'admin@zona-replikas.com', 'admin.jpg', 'admin'),
(2, '1101.eiji', '14d60b9d8c3c46e1451e186ede16ec54bfe7eee0', 'Zainu Rochim', '1101.eiji@zona-replikas.com', 'eiji.jpg', 'siswa'),
(3, '1101.fauzi', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Fauzi Fathurrahman', '1101.fauzi@zona-replikas.com', 'fauzi.jpg', 'siswa');
