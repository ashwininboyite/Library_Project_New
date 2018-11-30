-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2018 at 07:14 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library_proj`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `card_no` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pword` varchar(50) NOT NULL,
  `role` varchar(10) DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`card_no`, `name`, `uname`, `pword`, `role`) VALUES
('1', 'Nagarathna S. R', 'Nagarathna', 'AW1919', 'admin'),
('2', 'Ajaya Kumar', 'Ajaya', 'AW1920', 'admin'),
('3', 'Ashwini Patil', 'Ashwini', '1234', 'admin'),
('4', 'Parashurama M S', 'Parashu', 'AW1922', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `book_details`
--

CREATE TABLE `book_details` (
  `Book_id` varchar(25) NOT NULL,
  `Book_name` varchar(125) NOT NULL,
  `Book_deparment` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'YES',
  `Book_image` varchar(550) NOT NULL,
  `book_author` varchar(150) DEFAULT NULL,
  `published_year` date DEFAULT NULL,
  `edition` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_details`
--

INSERT INTO `book_details` (`Book_id`, `Book_name`, `Book_deparment`, `status`, `Book_image`, `book_author`, `published_year`, `edition`) VALUES
('Cs_11', 'Data Struture in C', 'CS', 'NO', 'images/cs_book1.png', 'Person', '2017-12-03', 2),
('Cs_12', 'Data Struture in C', 'CS', 'NO', 'images/cs_book1.png', 'Person', '2017-12-03', 2),
('Cs_13', 'Data Struture in C', 'CS', 'NO', 'images/cs_book1.png', 'Person', '2017-12-03', 2),
('Cs_21', 'Computer Organiztion', 'CS', 'NO', 'images/cs_book2.png', 'Carl Hamacher', '2017-05-03', 5),
('Cs_22', 'Computer Organiztion', 'CS', 'NO', 'images/cs_book2.png', 'Carl Hamacher', '2017-05-03', 5),
('Cs_23', 'Computer Organiztion', 'CS', 'NO', 'images/cs_book2.png', 'Carl Hamacher', '2017-05-03', 5),
('Cs_24', 'Computer Organiztion', 'CS', 'NO', 'images/cs_book2.png', 'Carl Hamacher', '2017-05-03', 5),
('Cs_31', 'Advance Computer Architecture', 'CS', 'NO', 'images/cs_book3.png', 'Kai Hwang and Naresh Jotwani', '2000-10-15', 3),
('Cs_32', 'Advance Computer Architecture', 'CS', 'YES', 'images/cs_book3.png', 'Kai Hwang and Naresh Jotwani', '2000-10-15', 3),
('Cs_33', 'Advance Computer Architecture', 'CS', 'NO', 'images/cs_book3.png', 'Kai Hwang and Naresh Jotwani', '2000-10-15', 3),
('Cs_34', 'Advance Computer Architecture', 'CS', 'YES', 'images/cs_book3.png', 'Kai Hwang and Naresh Jotwani', '2000-10-15', 3),
('Cs_35', 'Advance Computer Architecture', 'CS', 'YES', 'images/cs_book3.png', 'Kai Hwang and Naresh Jotwani', '2000-10-15', 3),
('Cs_41', 'Machine Learning', 'CS', 'YES', 'images/cs_book4.png', 'Tom M.Mitchell', '2011-01-20', 1),
('Cs_42', 'Machine Learning', 'CS', 'YES', 'images/cs_book4.png', 'Tom M.Mitchell', '2011-01-20', 1),
('Cs_43', 'Machine Learning', 'CS', 'YES', 'images/cs_book4.png', 'Tom M.Mitchell', '2011-01-20', 1),
('Cs_51', 'Information Security', 'CS', 'YES', 'images/cs_book5.png', 'Mark Stamp', '1997-12-20', 2),
('Cs_52', 'Information Security', 'CS', 'YES', 'images/cs_book5.png', 'Mark Stamp', '1997-12-20', 2),
('Cs_53', 'Information Security', 'CS', 'YES', 'images/cs_book5.png', 'Mark Stamp', '1997-12-20', 2),
('Cs_54', 'Information Security', 'CS', 'YES', 'images/cs_book5.png', 'Mark Stamp', '1997-12-20', 2),
('Cs_61', 'Computer Graphics', 'CS', 'YES', 'images/cs_book6.png', 'Donald D.Hearn', '2015-12-20', 2),
('Cs_62', 'Computer Graphics', 'CS', 'NO', 'images/cs_book6.png', 'Donald D.Hearn', '2015-12-20', 2),
('Cs_63', 'Computer Graphics', 'CS', 'YES', 'images/cs_book6.png', 'Donald D.Hearn', '2015-12-20', 2),
('Cs_71', 'Parallel Computing', 'CS', 'YES', 'images/cs_book7.png', 'Ananth Grama', '2016-05-01', 2),
('Cs_72', 'Parallel Computing', 'CS', 'YES', 'images/cs_book7.png', 'Ananth Grama', '2016-05-01', 2),
('Cs_81', 'Essential Guide to UI Design', 'CS', 'YES', 'images/cs_book8.png', 'Wilbert O.Galitz', '2012-03-01', 3),
('Cs_82', 'Essential Guide to UI Design', 'CS', 'YES', 'images/cs_book8.png', 'Wilbert O.Galitz', '2012-03-01', 3),
('Cs_83', 'Essential Guide to UI Design', 'CS', 'YES', 'images/cs_book8.png', 'Wilbert O.Galitz', '2012-03-01', 3),
('Cs_84', 'Essential Guide to UI Design', 'CS', 'YES', 'images/cs_book8.png', 'Wilbert O.Galitz', '2012-03-01', 3),
('cv_11', 'Strength of Material', 'civil', 'YES', 'images/civil_book1.png', 'B S Basavarajaiah', '2018-12-20', 3),
('cv_12', 'Strength of Material', 'civil', 'YES', 'images/civil_book1.png', 'B S Basavarajaiah', '2018-12-20', 3),
('cv_13', 'Strength of Material', 'civil', 'YES', 'images/civil_book1.png', 'B S Basavarajaiah', '2018-12-20', 3),
('cv_21', 'Mecanica De Materiales', 'civil', 'YES', 'images/civil_book2.png', 'Ferdinand P.Beer', '2014-11-20', 1),
('cv_22', 'Mecanica De Materiales', 'civil', 'YES', 'images/civil_book2.png', 'Ferdinand P.Beer', '2014-11-20', 1),
('cv_23', 'Mecanica De Materiales', 'civil', 'YES', 'images/civil_book2.png', 'Ferdinand P.Beer', '2014-11-20', 1),
('cv_31', 'Basic Structural Analysis', 'civil', 'YES', 'images/civil_book4.png', 'C S Reddy', '2011-11-10', 3),
('cv_32', 'Basic Structural Analysis', 'civil', 'YES', 'images/civil_book4.png', 'C S Reddy', '2011-11-10', 3),
('cv_33', 'Basic Structural Analysis', 'civil', 'YES', 'images/civil_book4.png', 'C S Reddy', '2011-11-10', 3),
('cv_41', 'Properties of concrete', 'civil', 'YES', 'images/civil_book5.png', 'A.M.Nevilla', '2014-11-20', 5),
('cv_42', 'Properties of concrete', 'civil', 'YES', 'images/civil_book5.png', 'A.M.Nevilla', '2014-11-20', 5),
('cv_43', 'Properties of concrete', 'civil', 'YES', 'images/civil_book5.png', 'A.M.Nevilla', '2014-11-20', 5),
('eee_11', 'Engineering Circuit Analysis', 'EEE', 'YES', 'images/eee_book1.png', 'William H', '2018-12-20', 8),
('eee_12', 'Engineering Circuit Analysis', 'EEE', 'YES', 'images/eee_book1.png', 'William H', '2018-12-20', 8),
('eee_13', 'Engineering Circuit Analysis', 'EEE', 'YES', 'images/eee_book1.png', 'William H', '2018-12-20', 8),
('eee_21', 'Electric Machines', 'EEE', 'YES', 'images/eee_book2.png', 'D.P.Kothari', '2001-11-10', 6),
('eee_22', 'Electric Machines', 'EEE', 'YES', 'images/eee_book2.png', 'D.P.Kothari', '2001-11-10', 6),
('eee_23', 'Electric Machines', 'EEE', 'YES', 'images/eee_book2.png', 'D.P.Kothari', '2001-11-10', 6),
('eee_31', 'Power System Analysis', 'EEE', 'YES', 'images/eee_book6.png', 'J.B.Gupta', '2008-04-01', 3),
('eee_32', 'Power System Analysis', 'EEE', 'YES', 'images/eee_book6.png', 'J.B.Gupta', '2008-04-01', 3),
('eee_33', 'Power System Analysis', 'EEE', 'YES', 'images/eee_book6.png', 'J.B.Gupta', '2008-04-01', 3),
('eee_34', 'Power System Analysis', 'EEE', 'YES', 'images/eee_book6.png', 'J.B.Gupta', '2008-04-01', 3),
('eee_41', 'Engineering Electromagnetic', 'EEE', 'YES', 'images/eee_book7.png', 'William K.Haryt', '2007-07-30', 7),
('eee_42', 'Engineering Electromagnetic', 'EEE', 'YES', 'images/eee_book7.png', 'William K.Haryt', '2007-07-30', 7),
('eee_43', 'Engineering Electromagnetic', 'EEE', 'YES', 'images/eee_book7.png', 'William K.Haryt', '2007-07-30', 7),
('is_11', 'Software Eng', 'ise', 'YES', 'images/is_book1.png', 'Ian Sommerville', '2018-12-20', 8),
('is_12', 'Software Eng', 'ise', 'YES', 'images/is_book1.png', 'Ian Sommerville', '2018-12-20', 8),
('is_13', 'Software Eng', 'ise', 'YES', 'images/is_book1.png', 'Ian Sommerville', '2018-12-20', 8),
('is_14', 'Software Eng', 'ise', 'YES', 'images/is_book1.png', 'Ian Sommerville', '2018-12-20', 8),
('is_21', 'Software testing', 'ise', 'YES', 'images/is_book2.png', 'Paul C jorgensen', '2011-02-20', 4),
('is_22', 'Software testing', 'ise', 'YES', 'images/is_book2.png', 'Paul C', '2011-02-20', 4),
('is_23', 'Software testing', 'ise', 'YES', 'images/is_book2.png', 'Paul C', '2011-02-20', 4),
('is_31', 'Cloud Computing', 'ise', 'YES', 'images/is_book3.png', 'RajKumar Buyya', '2014-11-20', 1),
('is_32', 'Cloud Computing', 'ise', 'YES', 'images/is_book3.png', 'RajKumar Buyya', '2014-11-20', 1),
('is_33', 'Cloud Computing', 'ise', 'YES', 'images/is_book3.png', 'RajKumar Buyya', '2014-11-20', 1),
('is_34', 'Cloud Computing', 'ise', 'YES', 'images/is_book3.png', 'RajKumar Buyya', '2014-11-20', 1),
('is_41', 'Python For Everybody', 'ise', 'YES', 'images/is_book4.png', 'Charles Severance', '2011-02-20', 3),
('is_42', 'Python For Everybody', 'ise', 'YES', 'images/is_book4.png', 'Charles Severance', '2011-02-20', 3),
('is_43', 'Python For Everybody', 'ise', 'YES', 'images/is_book4.png', 'Charles Severance', '2011-02-20', 3),
('mat_11', 'Higher Engineering Mathematics', 'Math', 'NO', 'images/math_book1.png', 'Dr B.S Grewal', '2018-12-10', 1),
('mat_12', 'Higher Engineering Mathematics', 'Math', 'YES', 'images/math_book1.png', 'Dr B.S Grewal', '2018-12-10', 1),
('mat_13', 'Higher Engineering Mathematics', 'Math', 'YES', 'images/math_book1.png', 'Dr B.S Grewal', '2018-12-10', 1),
('mat_14', 'Higher Engineering Mathematics', 'Math', 'YES', 'images/math_book1.png', 'Dr B.S Grewal', '2018-12-10', 1),
('mat_15', 'Higher Engineering Mathematics', 'Math', 'YES', 'images/math_book1.png', 'Dr B.S Grewal', '2018-12-10', 1),
('mat_21', 'Engineerning Maths 1', 'Math', 'YES', 'images/math_book2.png', 'Dr K.s.c', '2018-11-06', 5),
('mat_31', 'Engineerning Maths 2', 'Math', 'YES', 'images/math_book3.png', 'Dr K.S.C', '2018-11-06', 1),
('mat_41', 'Engineerning Maths 3', 'Math', 'YES', 'images/math_book4.png', 'Dr K.S.C', '2017-01-01', 3),
('mat_42', 'Engineerning Maths 3', 'Math', 'YES', 'images/math_book4.png', 'Dr K.S.C', '2017-01-01', 3),
('Mat_43', 'Engineerning Maths 3', 'Math', 'YES', 'images/math_book4.png', 'Dr K.S.C', '2017-01-01', 3),
('mat_44', 'Engineerning Maths 3', 'Math', 'YES', 'images/math_book4.png', 'Dr K.S.C', '2017-01-01', 3),
('Mat_45', 'Engineerning Maths 3', 'Math', 'YES', 'images/math_book4.png', 'Dr K.S.C', '2017-01-01', 3),
('mat_51', 'Engineerning Maths 4', 'Math', 'YES', 'images/math_book5.png', 'Dr K.S.C', '2015-12-03', 4),
('mat_61', 'Calculus and Linear Algebra', 'Math', 'YES', 'images/math_book6.png', 'Dr K.S.C', '2018-04-03', 6),
('Mat_71', 'Graph Theory and Automation', 'Math', 'YES', 'images/math_book7.png', 'DR. D S C', '2018-07-04', 7),
('mat_81', 'Automata Theory and Language and Computation', 'Math', 'YES', 'images/math_book8.png', 'Jhon E.Hopcroft', '2018-09-04', 8),
('mech_11', 'Mechanical Measurment', 'mec', 'YES', 'images/mec_book1.png', 'Thomas G Beckwith', '2008-11-20', 6),
('mech_12', 'Mechanical Measurment', 'mec', 'YES', 'images/mec_book1.png', 'Thomas G Beckwith', '2008-11-20', 6),
('mech_13', 'Mechanical Measurment', 'mec', 'YES', 'images/mec_book1.png', 'Thomas G Beckwith', '2008-11-20', 6),
('mec_21', 'Mechanics of Material', 'mec', 'YES', 'images/mec_book2.png', 'James M.Gere', '2014-01-20', 1),
('mec_22', 'Mechanics of Material', 'mec', 'YES', 'images/mec_book2.png', 'James M.Gere', '2014-01-20', 1),
('mec_23', 'Mechanics of Material', 'mec', 'YES', 'images/mec_book2.png', 'James M.Gere', '2014-01-20', 1),
('mec_31', 'Material Science and Engineering', 'mec', 'YES', 'images/mec_book3.png', 'William F Smith', '2001-11-10', 5),
('mec_32', 'Material Science and Engineering', 'mec', 'YES', 'images/mec_book3.png', 'William F Smith', '2001-11-10', 5),
('mec_33', 'Material Science and Engineering', 'mec', 'YES', 'images/mec_book3.png', 'William F Smith', '2001-11-10', 5),
('mec_41', 'Basic Thermodynamics', 'mec', 'YES', 'images/mec_book4.png', 'A Venkatesh', '2004-11-20', 5),
('mec_42', 'Basic Thermodynamics', 'mec', 'YES', 'images/mec_book4.png', 'A Venkatesh', '2004-11-20', 5),
('mec_43', 'Basic Thermodynamics', 'mec', 'YES', 'images/mec_book4.png', 'A Venkatesh', '2004-11-20', 5);

-- --------------------------------------------------------

--
-- Table structure for table `borrower`
--

CREATE TABLE `borrower` (
  `card_no` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `ph_no` bigint(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `uname` varchar(25) NOT NULL,
  `pword` varchar(25) NOT NULL,
  `amount_details` int(11) DEFAULT '2000',
  `no_of_book_taken` int(11) DEFAULT '0',
  `role` varchar(10) DEFAULT 'Student'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrower`
--

INSERT INTO `borrower` (`card_no`, `name`, `ph_no`, `email`, `uname`, `pword`, `amount_details`, `no_of_book_taken`, `role`) VALUES
('1234', 'Ashwini', 9448402431, 'boyiteajit@gmail.com', 'ajitboyite@gmail.com', '1234', 2000, 3, 'Student'),
('12344', 'Aish', 9448402431, 'aish@gmail.com', 'ajitboyite@gmail.com', '1234', 2000, 1, 'Student'),
('1234567', 'manasa', 9448402431, 'manasa@gmail.com', 'manasa', '1234', 2000, 0, 'Student'),
('555', 'kavya', 9448402431, 'kavya@gmail.com', 'kavya', '1234', 2000, 0, 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

CREATE TABLE `issue` (
  `Book_id` varchar(25) NOT NULL,
  `card_no` varchar(25) NOT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  `admin_id` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue`
--

INSERT INTO `issue` (`Book_id`, `card_no`, `from_date`, `to_date`, `admin_id`) VALUES
('Cs_11', '1234', '2018-11-30', '2019-02-07', '3'),
('Cs_21', '1234', '2018-11-17', '2018-11-30', '3'),
('Cs_22', '1234', '2018-11-04', '2018-11-30', '3'),
('Cs_23', '1234', '2018-11-04', '2018-11-04', '3'),
('Cs_24', '1234', '2018-11-04', '2018-11-03', '3'),
('Cs_31', '12344', '2018-11-30', '2018-11-30', '3');

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `Book_id` varchar(25) DEFAULT NULL,
  `card_no` varchar(25) DEFAULT NULL,
  `amount_paid` int(11) DEFAULT NULL,
  `date_paid` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `renewal`
--

CREATE TABLE `renewal` (
  `Book_id` varchar(25) NOT NULL,
  `card_no` varchar(25) NOT NULL,
  `renewed` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE `reserve` (
  `Book_id` varchar(25) NOT NULL,
  `card_no` varchar(25) NOT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`card_no`),
  ADD KEY `card_no` (`card_no`),
  ADD KEY `card_no_2` (`card_no`);

--
-- Indexes for table `book_details`
--
ALTER TABLE `book_details`
  ADD PRIMARY KEY (`Book_id`);

--
-- Indexes for table `borrower`
--
ALTER TABLE `borrower`
  ADD PRIMARY KEY (`card_no`);

--
-- Indexes for table `issue`
--
ALTER TABLE `issue`
  ADD PRIMARY KEY (`Book_id`,`card_no`),
  ADD KEY `card_no` (`card_no`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD KEY `Book_id` (`Book_id`),
  ADD KEY `card_no` (`card_no`);

--
-- Indexes for table `renewal`
--
ALTER TABLE `renewal`
  ADD PRIMARY KEY (`Book_id`,`card_no`),
  ADD KEY `card_no` (`card_no`);

--
-- Indexes for table `reserve`
--
ALTER TABLE `reserve`
  ADD PRIMARY KEY (`Book_id`,`card_no`),
  ADD KEY `card_no` (`card_no`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `issue`
--
ALTER TABLE `issue`
  ADD CONSTRAINT `issue_ibfk_1` FOREIGN KEY (`Book_id`) REFERENCES `book_details` (`Book_id`),
  ADD CONSTRAINT `issue_ibfk_2` FOREIGN KEY (`card_no`) REFERENCES `borrower` (`card_no`),
  ADD CONSTRAINT `issue_ibfk_3` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`card_no`);

--
-- Constraints for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD CONSTRAINT `payment_details_ibfk_1` FOREIGN KEY (`Book_id`) REFERENCES `book_details` (`Book_id`),
  ADD CONSTRAINT `payment_details_ibfk_2` FOREIGN KEY (`card_no`) REFERENCES `borrower` (`card_no`);

--
-- Constraints for table `renewal`
--
ALTER TABLE `renewal`
  ADD CONSTRAINT `renewal_ibfk_1` FOREIGN KEY (`Book_id`) REFERENCES `book_details` (`Book_id`),
  ADD CONSTRAINT `renewal_ibfk_2` FOREIGN KEY (`card_no`) REFERENCES `borrower` (`card_no`);

--
-- Constraints for table `reserve`
--
ALTER TABLE `reserve`
  ADD CONSTRAINT `reserve_ibfk_1` FOREIGN KEY (`Book_id`) REFERENCES `book_details` (`Book_id`),
  ADD CONSTRAINT `reserve_ibfk_2` FOREIGN KEY (`card_no`) REFERENCES `borrower` (`card_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
