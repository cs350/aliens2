CREATE DATABASE IF NOT EXISTS aliendb;
GRANT ALL PRIVILEGES ON aliendb.* to 'alienuser'@'localhost' identified by 'alien';
--
-- Table structure for table `abduction_reports`
--
USE aliendb;

CREATE TABLE IF NOT EXISTS `abduction_reports` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state_abducted` varchar(2) NOT NULL,
  `activity` varchar(100) NOT NULL,
  `date_abducted` date NOT NULL,
  `days_gone` int(11) NOT NULL,
  `how_many` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ;

--
-- Dumping data for table `abduction_reports`
--
TRUNCATE TABLE abduction_reports;

INSERT INTO `abduction_reports` (`id`, `firstname`, `lastname`, `email`, `city`, `state_abducted`, `activity`, `date_abducted`, `days_gone`, `how_many`) VALUES
(1, 'Ann', 'Yakimo', 'annY@yahoo.com', 'Yuma', 'AZ', '', '2010-02-14', 0, 0),
(2, 'John', 'Smith', 'littleJohn@uaz.edu', 'Tuba City', 'AZ', '', '2009-12-25', 0, 0),
(3, 'Ben', 'Jacobs', 'rj@yahoo.com', 'Farmington', 'NM', '', '2009-010-31', 0, 0);
