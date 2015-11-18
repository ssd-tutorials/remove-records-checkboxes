-- phpMyAdmin SQL Dump
-- version 3.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 02, 2011 at 08:51 AM
-- Server version: 5.1.44
-- PHP Version: 5.3.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `books`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `price` decimal(6,2) NOT NULL DEFAULT '0.00',
  `category` varchar(100) DEFAULT NULL,
  `author` varchar(200) DEFAULT NULL,
  `qty` tinyint(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` VALUES(1, 'Logo Design Now (Midi Series)', 17.49, 'Design', 'Julius Wiedemann', 10);
INSERT INTO `books` VALUES(2, 'PHP and MySQL Web Development', 17.70, 'Web Programming', 'Luke Welling', 5);
INSERT INTO `books` VALUES(3, 'Composition: From Snapshots to Great Shots', 9.00, 'Photography', 'Laurie Excell', 11);
INSERT INTO `books` VALUES(4, 'From Still to Motion: A Photographer''s Guide to Creating Video \r\nwith Your DSLR', 18.48, 'Photography and Video', 'James Ball', 3);
INSERT INTO `books` VALUES(5, 'Sams Teach Yourself HTML5 Mobile Application Development \r\nin 24 Hours', 22.94, 'Web Programming', 'Jennifer Kyrnin', 8);
INSERT INTO `books` VALUES(6, 'Customised Mobile Application Development: Using XHTML \r\nParser for Google Android Platform', 37.40, 'Web Programming', 'Kaustubh Duraphe', 7);
INSERT INTO `books` VALUES(7, 'Mobile Commerce Application Development', 55.05, 'Web Programming', 'Lei-Da Chen', 1);
