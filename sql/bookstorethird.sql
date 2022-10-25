-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2020 at 01:30 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstorethird`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `booklist`
--

CREATE TABLE `booklist` (
  `book_id` int(11) NOT NULL,
  `cover` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `book_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `summary` text COLLATE utf8_unicode_ci NOT NULL,
  `book_price` int(11) NOT NULL,
  `author` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_date` date NOT NULL,
  `modified_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `booklist`
--

INSERT INTO `booklist` (`book_id`, `cover`, `book_name`, `summary`, `book_price`, `author`, `category_id`, `created_date`, `modified_date`) VALUES
(3, 'tec1.jpg', 'The Nature of Technology', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 50, 'W.Brian Arthur', 1, '2019-12-21', '2019-12-26'),
(4, 'tec2.jpg', 'What Technology Wants', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 100, 'David Spiegelhhalter', 1, '2019-12-21', '2019-12-21'),
(5, 'tec23.jpg', 'Python(Programming Basics for Absolute Beginners)', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 50, 'David Spiegelhhalter', 1, '2019-12-21', '2019-12-21'),
(6, 'tec4.jpg', 'Operating Systems', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 70, 'David Spiegelhhalter', 1, '2019-12-21', '2019-12-21'),
(7, 'tec5.jpg', 'The Story of Technology', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 40, 'David Spiegelhhalter', 1, '2019-12-21', '2019-12-21'),
(9, 'tec7.jpg', 'Fluent Python', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 43, 'David Spiegelhhalter', 1, '2019-12-21', '2019-12-21'),
(10, 'tec8.jpg', 'The Trust Technology', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 21, 'David Spiegelhhalter', 1, '2019-12-21', '2019-12-21'),
(11, 'tec9.jpg', 'Food Packaging Science and Technology ', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 41, 'David Spiegelhhalter', 1, '2019-12-21', '2019-12-21'),
(12, 'tec10.jpg', 'The age of Living Machines', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 15, 'David Spiegelhhalter', 1, '2019-12-21', '2019-12-21'),
(13, 'tec12.jpg', 'Web Development & Beyond', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 53, 'David Spiegelhhalter', 1, '2019-12-21', '2019-12-21'),
(14, 'tec11.jpg', 'Web Development', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 32, 'David Spiegelhhalter', 1, '2019-12-21', '2019-12-21'),
(15, 'tec13.jpg', 'Enterprise Web Development', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 31, 'David Spiegelhhalter', 1, '2019-12-21', '2019-12-21'),
(16, 'tec14.jpg', 'MySQL', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 80, 'David Spiegelhhalter', 1, '2019-12-21', '2019-12-21'),
(17, 'tec15.jpg\"', 'PHP for Absolute Beginners', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 53, 'David Spiegelhhalter', 1, '2019-12-21', '2019-12-21'),
(18, 'bio.jpeg', 'Wark Zuckerberg', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 23, 'David Spiegelhhalter', 4, '2019-12-21', '2019-12-21'),
(19, 'bio1.jpeg', 'Albery Einstein', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 18, 'David Spiegelhhalter', 4, '2019-12-21', '2019-12-21'),
(20, 'bio2.jpeg', 'Mother Teresa', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 14, 'David Spiegelhhalter', 4, '2019-12-21', '2019-12-21'),
(21, 'bio3.jpeg', 'Barack Obama', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 45, 'David Spiegelhhalter', 4, '2019-12-21', '2019-12-21'),
(22, 'bio4.jpeg', 'Biography books', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 33, 'David Spiegelhhalter', 4, '2019-12-21', '2019-12-21'),
(23, 'bio5.jpeg', 'Biography of Bill Gates', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 46, 'David Spiegelhhalter', 4, '2019-12-21', '2019-12-21'),
(24, 'bio6.jpeg', 'Linus Trvalds Biography', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 35, 'David Spiegelhhalter', 4, '2019-12-21', '2019-12-21'),
(25, 'bio7.jpeg', 'Stephen Hawking', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 34, 'David Spiegelhhalter', 4, '2019-12-21', '2019-12-21'),
(26, 'bio8.jpeg', 'the Lady Aung San Suu Kyi', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 56, 'David Spiegelhhalter', 4, '2019-12-21', '2019-12-21'),
(27, 'bio9.jpeg', 'ဗိုလ္ခ်ဳပ္ေအာင္ဆန္း', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 60, 'David Spiegelhhalter', 4, '2019-12-21', '2019-12-21'),
(28, 'bio2.jpeg', '', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 0, 'David Spiegelhhalter', 4, '2019-12-21', '2019-12-21'),
(29, 'bio10.jpeg', 'Than Shwes Burma', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 46, 'David Spiegelhhalter', 4, '2019-12-21', '2019-12-21'),
(30, 'bio11.jpeg', 'U Thant', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 58, 'David Spiegelhhalter', 4, '2019-12-21', '2019-12-21'),
(31, 'bio12.jpeg', 'Christopher Columbus', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 37, 'David Spiegelhhalter', 4, '2019-12-21', '2019-12-21'),
(33, 'h1.jpg', 'World History', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 35, 'David Spiegelhhalter', 2, '2019-12-21', '2019-12-21'),
(34, 'h2.jpeg', 'Illuminated History Books', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 20, 'David Spiegelhhalter', 2, '2019-12-21', '2019-12-21'),
(35, 'h3.jpeg', 'African Dominion', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 26, 'David Spiegelhhalter', 2, '2019-12-21', '2019-12-21'),
(36, 'h12.jpeg', 'ေျမပုံကေျပာေသာ ျမန္မာ့သမိုင္း', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 30, 'David Spiegelhhalter', 2, '2019-12-21', '2019-12-21'),
(37, 'h5.jpeg', 'Titans of History', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 18, 'David Spiegelhhalter', 2, '2019-12-21', '2019-12-21'),
(38, 'h6.jpeg', 'Ancient Indian History and Civilization', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 21, 'David Spiegelhhalter', 2, '2019-12-21', '2019-12-21'),
(39, 'h7.jpeg', 'American History', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 11, 'David Spiegelhhalter', 2, '2019-12-21', '2019-12-21'),
(40, 'h8.jpeg', 'A History of Myanmar since Ancient Times', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 43, 'David Spiegelhhalter', 2, '2019-12-21', '2019-12-21'),
(42, 'h10.jpeg', 'ျမန္မာ့သမိုင္း၀င္ျဖစ္ရပ္မ်ား(၁၀၀)', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 27, 'David Spiegelhhalter', 2, '2019-12-21', '2019-12-21'),
(43, 'h11.jpeg', 'Myanmar A Political History', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 25, 'David Spiegelhhalter', 2, '2019-12-21', '2019-12-21'),
(44, 'lan1.jpeg', 'The Definitiove Book of Body Language', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 25, 'David Spiegelhhalter', 3, '2019-12-21', '2019-12-21'),
(45, 'lan2.jpeg', 'The Language of Life', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 45, 'David Spiegelhhalter', 3, '2019-12-21', '2019-12-21'),
(46, 'lan3.jpeg', 'I Want To Learn English', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 42, 'David Spiegelhhalter', 3, '2019-12-21', '2019-12-21'),
(47, 'lan4.jpeg', 'English Language Learners', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 22, 'David Spiegelhhalter', 3, '2019-12-21', '2019-12-21'),
(48, 'lan5.jpeg', 'Many Languages,One Classroom', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 42, 'David Spiegelhhalter', 3, '2019-12-21', '2019-12-21'),
(49, 'lan6.jpeg', 'Japanese Learning', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 14, 'David Spiegelhhalter', 3, '2019-12-21', '2019-12-21'),
(51, 'lan8.jpeg', 'Chinese for Beginners', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 58, 'David Spiegelhhalter', 3, '2019-12-21', '2019-12-21'),
(52, 'lan9.jpeg', 'Chinese Learning for Beginners', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 53, 'David Spiegelhhalter', 3, '2019-12-21', '2019-12-21'),
(53, 'lan10.jpeg', 'Korean Grammar for Speaking', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 32, 'David Spiegelhhalter', 3, '2019-12-21', '2019-12-21'),
(54, 'lan11.jpeg', 'Integrated Korean', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 12, 'David Spiegelhhalter', 3, '2019-12-21', '2019-12-21'),
(55, 'lan12.jpeg', 'Italian Dialogues', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 43, 'David Spiegelhhalter', 3, '2019-12-21', '2019-12-21'),
(56, 'photo1.jpeg', 'The Art of Photography', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 32, 'David Spiegelhhalter', 5, '2019-12-21', '2019-12-21'),
(57, 'photo2.jpeg', 'The Art of iPhone Photography', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 11, 'David Spiegelhhalter', 5, '2019-12-21', '2019-12-21'),
(58, 'photo3.jpeg', 'Photography Beginners', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 54, 'David Spiegelhhalter', 5, '2019-12-21', '2019-12-21'),
(59, 'photo4.jpeg', 'DSLR Photography Beginners', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 38, 'David Spiegelhhalter', 5, '2019-12-21', '2019-12-21'),
(60, 'photo5.jpeg', 'Digital Photography', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 28, 'David Spiegelhhalter', 5, '2019-12-21', '2019-12-21'),
(61, 'photo6.jpeg', 'DSLR Photography for Beginners', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 47, 'David Spiegelhhalter', 5, '2019-12-21', '2019-12-21'),
(62, 'photo7.jpeg', 'Learning to See Creatively', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 21, 'David Spiegelhhalter', 5, '2019-12-21', '2019-12-21'),
(63, 'photo8.jpeg', 'The Art of Learning', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 41, 'David Spiegelhhalter', 5, '2019-12-21', '2019-12-21'),
(64, 'free11.jpeg', 'Buddhism', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 0, 'David Spiegelhhalter', 10, '2019-12-21', '2019-12-21'),
(66, 'free9.jpeg', 'Introduction to Buddhism', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 0, 'David Spiegelhhalter', 10, '2019-12-21', '2019-12-21'),
(67, 'free8.jpeg', 'Buddism Beginner\'s Guide to Understanding', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 0, 'David Spiegelhhalter', 10, '2019-12-21', '2019-12-21'),
(68, 'free7.jpeg', 'Betty Cocker\'s Cook Book for Boys and Girls', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 0, 'David Spiegelhhalter', 10, '2019-12-21', '2019-12-21'),
(69, 'free6.jpeg', 'Food and  Cooking', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 0, 'David Spiegelhhalter', 10, '2019-12-21', '2019-12-21'),
(70, 'free5.jpeg', 'SHORT STORIES for Kids', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 0, 'David Spiegelhhalter', 10, '2019-12-21', '2019-12-21'),
(72, 'free3.jpg', 'Monster ABC', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 0, 'David Spiegelhhalter', 10, '2019-12-21', '2019-12-21'),
(73, 'free2.jpeg', 'Everybody Has Something to Give', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 0, 'David Spiegelhhalter', 10, '2019-12-21', '2019-12-21'),
(74, 'free1.jpeg', 'Bible Story Book For Kids', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 0, 'David Spiegelhhalter', 10, '2019-12-21', '2019-12-21'),
(75, 'free.png', 'The Art of Statistics Learning from Data', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 0, 'David Spiegelhhalter', 10, '2019-12-21', '2019-12-21'),
(76, 'free.jpeg', 'Gabriella,I Love You More', 'In a markup language, with the purpose of displaying on a screen and printing, it is possible to directly embed not only the document content, but also the document structure and layout information, and the character font and size.  Which of the following is classified into such a markup language?', 0, 'David Spiegelhhalter', 10, '2019-12-21', '2019-12-21'),
(87, 'free5.jpeg', 'Carton', 'bottle or carton, a small cake (or the packaging from a cake), a hardboiled egg, chips made of pieces of yellow card in a bag or box) Optiona', 45, 'author', 16, '2020-01-06', '2020-01-07'),
(88, 'tec19.jpg', ' Learn Android', 'It was initially developed by Android Inc. (a firm later purchased by Google) and lately broadened to the Open Handset Alliance. Google acquired Android Inc in July 2005 and Android the operating system was made available for distribution on 5 November 2007.', 32, 'author', 1, '2020-01-06', '2020-01-06'),
(89, 'bio.jpeg', 'A Biography of the  Facebook Billionarie', 'Mark Zuckerberg is co-founder and CEO of the social-networking website Facebook, as well as one of the world youngest billionaires.', 454, 'author', 1, '2020-01-07', '2020-01-07');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `remark` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` date NOT NULL,
  `modified_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `name`, `remark`, `created_date`, `modified_date`) VALUES
(1, 'Technology', '', '2019-12-21', '2019-12-21'),
(2, 'History', '', '2019-12-21', '2019-12-21'),
(3, 'Language', '', '2019-12-21', '2019-12-21'),
(4, 'Biographies & Memoirs', '', '2019-12-21', '2019-12-21'),
(5, 'Arts & Photographies', '', '2019-12-21', '2019-12-21'),
(10, 'Free books', '', '2019-12-26', '2019-12-26'),
(16, 'Carton', '', '2020-01-06', '2020-01-07');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `book_id`, `qty`) VALUES
(24, 10, 13, 1),
(25, 10, 17, 2),
(26, 11, 27, 1),
(27, 12, 4, 1),
(28, 12, 10, 1),
(29, 12, 7, 1),
(30, 13, 21, 1),
(31, 13, 26, 1),
(32, 13, 27, 1),
(33, 13, 19, 1),
(34, 14, 5, 1),
(35, 15, 87, 1),
(36, 16, 88, 10),
(37, 17, 36, 1),
(38, 18, 9, 4),
(39, 18, 5, 1),
(40, 18, 29, 5),
(41, 18, 44, 1),
(42, 18, 47, 1),
(43, 19, 52, 1),
(44, 20, 62, 1),
(45, 20, 60, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `customer_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_date` date NOT NULL,
  `modified_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`order_id`, `user_id`, `customer_name`, `phone`, `address`, `status`, `created_date`, `modified_date`) VALUES
(10, 17, 'zin zin thin zaw', '09260313026', 'Yinnyein        ', 0, '2020-01-05', '2020-01-06'),
(11, 18, 'Mg Hsu Nyi', '09771178590', 'Thaton        ', 1, '2020-01-06', '2020-01-06'),
(12, 20, 'Ma Nandar Aung', '09425339783', 'Yangon        ', 0, '2020-01-06', '2020-01-06'),
(13, 20, 'Ma Nandar Aung', '09425339783', 'Yangon        ', 1, '2020-01-06', '2020-01-06'),
(14, 21, 'Mon Aung', '09425347525', 'Myawlamyine       ', 1, '2020-01-06', '2020-01-06'),
(15, 17, 'zin zin thin zaw', '09260313026', ' Yangon       ', 0, '2020-01-06', '2020-01-06'),
(16, 21, 'Mon Aung', '09425347525', 'Yangon        ', 1, '2020-01-06', '2020-01-06'),
(17, 29, 'Poe Thinzar Kyaw', '09771178590', ' Paung       ', 0, '2020-01-06', '2020-01-06'),
(18, 24, 'Ei Shwe Zin', '09260332668', 'Thaton        ', 0, '2020-01-06', '2020-01-06'),
(19, 17, 'zin zin thin zaw', '09260313024', '        ', 0, '2020-01-06', '2020-01-06'),
(20, 17, 'zin zin', '09425339783', 'Yangon        ', 0, '2020-01-06', '2020-01-06');

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `user_id` int(11) NOT NULL,
  `account_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`user_id`, `account_name`, `email`, `password`) VALUES
(17, 'zin zin thin zaw', 'zinnzinthinzaw@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(18, 'Hsu Nyi', 'hsunyi@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(19, 'Aye Aye', 'AyeAye123@gmail.com', 'b53ad28c6aa4e263cdee3a76cf0a9c00'),
(20, 'Nyi Ma Lay', 'nyimalay@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(21, 'mon aung', 'monaung@gmail.com', '0789133d6873404b3d52d78ccd122be9'),
(22, 'zin zin thin aung', 'zinzinthinaung@gmail.com', '7f31c778d8785a05d2de7f3e22c9468a'),
(23, 'Moe Lay', 'mooe123@gmail.com', '3f1d519b8d1caae3b419e06373a38a8c'),
(24, 'Ei Shwe Zin', 'eiei123@gamil.com', '25d55ad283aa400af464c76d713c07ad'),
(26, 'Shwe Zin', 'shwe@gamil.com', '1c63129ae9db9c60c3e8aa94d3e00495'),
(29, 'PoePoe', 'PoePoe@gamil.com', '25d55ad283aa400af464c76d713c07ad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booklist`
--
ALTER TABLE `booklist`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `category_foreigh` (`category_id`) USING BTREE;

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_foreign` (`order_id`),
  ADD KEY `book_foreign` (`book_id`);

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_foreign` (`user_id`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `booklist`
--
ALTER TABLE `booklist`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booklist`
--
ALTER TABLE `booklist`
  ADD CONSTRAINT `category` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `book_foreign` FOREIGN KEY (`book_id`) REFERENCES `booklist` (`book_id`),
  ADD CONSTRAINT `order_foreign` FOREIGN KEY (`order_id`) REFERENCES `order_table` (`order_id`);

--
-- Constraints for table `order_table`
--
ALTER TABLE `order_table`
  ADD CONSTRAINT `user_foreign` FOREIGN KEY (`user_id`) REFERENCES `user_account` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
