-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Gostitelj: localhost
-- Čas nastanka: 26. maj 2015 ob 18.27
-- Različica strežnika: 10.0.17-MariaDB-0ubuntu1
-- Različica PHP: 5.6.4-4ubuntu6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Zbirka podatkov: `nlp`
--

-- --------------------------------------------------------

--
-- Struktura tabele `dogodki`
--

CREATE TABLE IF NOT EXISTS `dogodki` (
`id` int(11) NOT NULL,
  `kraj` varchar(100) NOT NULL,
  `drzava` varchar(60) NOT NULL DEFAULT 'zda',
  `cas` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `trajanje` int(11) NOT NULL,
  `opis` text NOT NULL,
  `ocividec` varchar(160) NOT NULL,
  `spol` enum('m','z','n') NOT NULL DEFAULT 'n',
  `email` varchar(120) NOT NULL,
  `opombe` varchar(250) NOT NULL,
  `slika` varchar(120) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indeksi zavrženih tabel
--

--
-- Indeksi tabele `dogodki`
--
ALTER TABLE `dogodki`
 ADD PRIMARY KEY (`id`), ADD KEY `kraj` (`kraj`,`drzava`,`cas`,`ocividec`,`email`), ADD KEY `created` (`created`,`modified`), ADD KEY `modified` (`modified`), ADD KEY `spol` (`spol`);

--
-- AUTO_INCREMENT zavrženih tabel
--

--
-- AUTO_INCREMENT tabele `dogodki`
--
ALTER TABLE `dogodki`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
