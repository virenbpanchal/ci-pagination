--
-- Database: `ci-pagination`
--

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

DROP TABLE IF EXISTS `country`;
CREATE TABLE IF NOT EXISTS `country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(255) NOT NULL,
  `country_code` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `country_name`, `country_code`) VALUES
(1, 'India', 'IN'),
(2, 'United States of America', 'US'),
(3, 'Canada', 'CN'),
(4, 'Mexico', 'MX'),
(5, 'United Kingdom', 'GB'),
(6, 'France', 'FR'),
(7, 'Italy', 'IT'),
(8, 'Germany', 'DE'),
(9, 'Spain', 'ES'),
(10, 'Russia', 'RU'),
(11, 'Australia', 'AU'),
(12, 'New Zealand', 'NZ'),
(13, 'Japan', 'JP'),
(14, 'Israel', 'IL'),
(15, 'Singapore', 'SG');
COMMIT;
