

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



--
-- Database: `user_registration`
--

-- 

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `login` (`username`, `password`) VALUES
('sampleuser1', 'samplepassword'),
('sampleuser2', 'testing'),
('testuser1', 'testpassword');

