-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 19, 2016 at 08:19 AM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a8427774_ortoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `Contacta`
--

CREATE TABLE `Contacta` (
  `nombre` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `apellidos` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `telefono` int(9) NOT NULL,
  `mail` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `message` text COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`mail`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `Contacta`
--

INSERT INTO `Contacta` VALUES('Enrique', 'Recuero', 662295520, 'enriquerecuero@gmail.com', 'Cuando tenemos una actividad diaria intensa y sentimos una dolencia, por pequeña que sea, se nos hace un mundo, así que recurrimos primero a los amigos. En mi caso tuve la suerte de acertar con un equipo de técnicos que no solo me dieron confianza, sino que me han devuelto a la vida activa. Parece un milagro pero no es un milagro, es profesionalidad...');
INSERT INTO `Contacta` VALUES('isabel', 'Rodriguez', 614660228, 'isabel.roruiz@alumnos.upm.es', 'asfdafgadfgafdsg');

-- --------------------------------------------------------

--
-- Table structure for table `Date`
--

CREATE TABLE `Date` (
  `nombre` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `apellidos` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `DNI` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `nacimiento` date NOT NULL,
  `telefono` int(9) NOT NULL,
  `correo` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `resumen` text COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`DNI`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `Date`
--

INSERT INTO `Date` VALUES('isabel', 'Rodriguez', '06034041Z', '1996-02-26', 617660227, 'issaa260296@gmail.com', '2017-02-26', '12:00:00', 'asdasfd<rg');
INSERT INTO `Date` VALUES('Jesus', 'Rodriguez Ruiz', '02234045A', '1990-02-26', 617550889, 'junior9067@gmail.com', '2016-02-26', '12:00:00', 'kfjdbgnsjkgfbnsjlkdfn');
INSERT INTO `Date` VALUES('anita', 'alvarez', '00000000V', '1997-12-14', 617660227, 'anita@gmail.com', '2016-05-26', '13:00:00', 'fhdkgbjasjkdfnoajsdmn');

-- --------------------------------------------------------

--
-- Table structure for table `Newsletter`
--

CREATE TABLE `Newsletter` (
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Newsletter`
--

INSERT INTO `Newsletter` VALUES('isabel.roruiz@alumnos.upm.es');
