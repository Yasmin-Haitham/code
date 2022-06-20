-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2022 at 07:08 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `BookTitle` varchar(100) NOT NULL,
  `ISBN` int(13) UNSIGNED NOT NULL,
  `BookAuthor` varchar(100) NOT NULL,
  `BookCopies` int(100) UNSIGNED NOT NULL,
  `Bookgenre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`BookTitle`, `ISBN`, `BookAuthor`, `BookCopies`, `Bookgenre`) VALUES
('What I talk about when I talk about running', 1231234, 'Murakami', 150, 'Short story'),
('The midnight library ', 11335577, 'Matt Haig', 12, 'Adventure'),
('The bastard of Istanbul ', 12342638, 'Elif Shafak', 20, 'novel'),
('David Copperfield ', 16423453, 'Charles Dickens', 65, 'Adventure'),
('1984', 19841984, 'George Orwell', 19, 'mystery '),
('A brief history of time', 22334455, 'Steven Hawking', 34, 'Science'),
('The Hunger games', 22881199, 'Suzanne Collins', 14, 'Adventure'),
('Harry Potter and the cursed child', 22991155, 'JK Rowling', 27, 'Adventure'),
('The perks of being a wallflower', 22991188, 'Stephen chbosky', 11, 'romance'),
('The world according to bob', 28319283, 'James bowen', 9, 'comedy'),
('The prisoner of Zelda ', 33882299, 'Anthony Hope', 21, 'Fiction'),
('Letters to Milena', 45678876, 'Franz Kafka', 10, 'mystery '),
('To kill a mocking bird', 46437372, 'Harper Lee', 34, 'novel'),
('The revenge of the living dummy', 55774488, 'RL Stine', 44, 'Horror'),
('Black Beauty ', 77448833, 'Anna Sewel', 58, 'romance'),
('One of us is lying', 87654789, 'Karen M McManus', 87, 'mystery '),
('Catching Fire', 87783872, 'Suzanne Collins', 81, 'Adventure'),
('Lord of the files', 88443399, 'Sir William Golding', 45, 'educational '),
('The Inheritance Games', 227733881, 'Jennifer Lynn Barnes', 62, 'mystery '),
('Confess', 234567898, 'Colleen Hoover', 82, 'mystery '),
('An Absolutely remarkable thing', 338822993, 'Hank Green', 33, 'novel'),
('1Q84', 364572830, 'Haruki Murakami', 2, 'mystery '),
('The adventures of Sherlock holmes', 382749438, 'Arthur Conan Doyle', 10, 'Adventure'),
('The Best of Me', 765432232, 'Nicholas Sparks ', 34, 'romance'),
('Turtles all the way down', 938475628, 'John Green', 8, 'novel'),
('The rest of us just live here', 998837444, 'Patrick Ness', 87, 'Adventure'),
('Kafka on The Shore', 3456789123, 'Murakami', 20, 'Novel'),
('the hitchhiker\'s guide to the galaxy', 4294967295, 'Douglas Adams', 3, 'comic books');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`) VALUES
(0, 'UserOne', 'userOne@gmail.com', 'a9d402bfcde5792a8b531b3a82669585', 'Admin'),
(0, 'UserTwo', 'userTwo@gmail.com', '7174d803762cfa8e4f16e1dc452fdad9', 'USER'),
(0, 'UserThree', 'UserThree@gmail.com', 'c7b13c12f9023a6e8f1ee72c9214f32a', 'USER'),
(0, 'UserFour', 'UserFour@gmail.com', 'da936e9d8f7eef98d7f514a2d3b4e2b7', 'USER'),
(0, 'UserFive', 'UserFive@gmail.com', '874dd3d05e5aad4f0913ff0dc300a8a0', 'USER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`ISBN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
