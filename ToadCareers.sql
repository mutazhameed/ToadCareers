-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2015 at 02:50 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE IF NOT EXISTS `achievements` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  FULLTEXT KEY `search` (`name`,`description`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `applicants_vacancies`
--

CREATE TABLE IF NOT EXISTS `applicants_vacancies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `applicant_id` int(11) NOT NULL,
  `vacancy_id` int(11) NOT NULL,
  `years_of_experience` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `categories_lookup`
--

CREATE TABLE IF NOT EXISTS `categories_lookup` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=27 ;

--
-- Dumping data for table `categories_lookup`
--

INSERT INTO `categories_lookup` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Administrative Support', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Catering, Food Service', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Creative Art & Design', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Customer Services', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Engineering - Electrical - Power', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Engineering - Mechanical', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Executives / Managerial', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Finance & Accounts', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'General Management', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Health & Safety', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Human Resources & Administration', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Information Technology', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'IT – Network Administration', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'IT – Software & Web Designing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Labour / Workers', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Legal', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Marketing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Marketing – Advertisement – PR', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Product Development & Quality Control', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Product Development & Research', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'Production (Manufacturing & Maintenance)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Project Management', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Quality Assurance / Control', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'Research & Development (R&D)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'Sales', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'Supply Chain (Logistics, Procurement, Warehousing, Transport)', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `category_of_interests`
--

CREATE TABLE IF NOT EXISTS `category_of_interests` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `notifications` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE IF NOT EXISTS `certificates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `authority` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `license_num` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  FULLTEXT KEY `search` (`name`,`authority`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `companies_lookup`
--

CREATE TABLE IF NOT EXISTS `companies_lookup` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `companies_lookup`
--

INSERT INTO `companies_lookup` (`id`, `name`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Strosin, Collins and Beier', 'http://Bernier.info/sint-delectus-nihil-quaerat-id-nostrum-occaecati-tenetur.html', '2015-04-01 03:16:14', '2015-04-01 03:16:14'),
(2, 'Johnson LLC', 'http://www.Macejkovic.com/perspiciatis-autem-ut-aut-dolor-eum-consequuntur-quam', '2015-04-01 03:16:14', '2015-04-01 03:16:14'),
(3, 'Williamson-Kihn', 'http://www.Emmerich.com/dolores-in-et-et-quo-est-non', '2015-04-01 03:16:14', '2015-04-01 03:16:14'),
(4, 'Leuschke-Tromp', 'https://www.Conn.info/accusantium-aliquam-dignissimos-modi-vero-incidunt-est', '2015-04-01 03:16:14', '2015-04-01 03:16:14'),
(5, 'Ernser, Beier and Farrell', 'https://Sporer.net/voluptas-nemo-debitis-est-quia.html', '2015-04-01 03:16:14', '2015-04-01 03:16:14'),
(6, 'Trantow PLC', 'http://www.Ortiz.info/nihil-consectetur-ea-aut-esse-a-enim-vel.html', '2015-04-01 03:17:29', '2015-04-01 03:17:29'),
(7, 'Lakin PLC', 'https://Ryan.com/delectus-nihil-ut-quisquam-id-est-autem-id.html', '2015-04-01 03:17:29', '2015-04-01 03:17:29'),
(8, 'Batz, Fahey and Batz', 'https://www.Gutkowski.biz/deserunt-molestiae-iusto-accusamus-quia-sit', '2015-04-01 03:17:29', '2015-04-01 03:17:29'),
(9, 'Murray-Reynolds', 'http://Kutch.com/quis-cupiditate-delectus-cupiditate-illum-nihil', '2015-04-01 03:17:29', '2015-04-01 03:17:29'),
(10, 'Fritsch-Feest', 'http://www.Dibbert.com/', '2015-04-01 03:17:29', '2015-04-01 03:17:29');

-- --------------------------------------------------------

--
-- Table structure for table `countries_lookup`
--

CREATE TABLE IF NOT EXISTS `countries_lookup` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=240 ;

--
-- Dumping data for table `countries_lookup`
--

INSERT INTO `countries_lookup` (`id`, `name`, `code`, `created_at`, `updated_at`) VALUES
(1, 'United States', 'US', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Canada', 'CA', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Afghanistan', 'AF', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Albania', 'AL', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Algeria', 'DZ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'American Samoa', 'DS', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Andorra', 'AD', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Angola', 'AO', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Anguilla', 'AI', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Antarctica', 'AQ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Antigua and/or Barbuda', 'AG', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Argentina', 'AR', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Armenia', 'AM', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Aruba', 'AW', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Australia', 'AU', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Austria', 'AT', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Azerbaijan', 'AZ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Bahamas', 'BS', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Bahrain', 'BH', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Bangladesh', 'BD', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'Barbados', 'BB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Belarus', 'BY', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Belgium', 'BE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'Belize', 'BZ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'Benin', 'BJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'Bermuda', 'BM', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'Bhutan', 'BT', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'Bolivia', 'BO', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'Bosnia and Herzegovina', 'BA', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'Botswana', 'BW', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'Bouvet Island', 'BV', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'Brazil', 'BR', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'British lndian Ocean Territory', 'IO', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'Brunei Darussalam', 'BN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'Bulgaria', 'BG', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 'Burkina Faso', 'BF', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 'Burundi', 'BI', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 'Cambodia', 'KH', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'Cameroon', 'CM', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 'Cape Verde', 'CV', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 'Cayman Islands', 'KY', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 'Central African Republic', 'CF', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 'Chad', 'TD', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 'Chile', 'CL', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 'China', 'CN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 'Christmas Island', 'CX', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 'Cocos (Keeling) Islands', 'CC', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 'Colombia', 'CO', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 'Comoros', 'KM', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 'Congo', 'CG', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 'Cook Islands', 'CK', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 'Costa Rica', 'CR', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 'Croatia (Hrvatska)', 'HR', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 'Cuba', 'CU', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 'Cyprus', 'CY', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 'Czech Republic', 'CZ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 'Denmark', 'DK', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 'Djibouti', 'DJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 'Dominica', 'DM', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 'Dominican Republic', 'DO', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 'East Timor', 'TP', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 'Ecudaor', 'EC', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 'Egypt', 'EG', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 'El Salvador', 'SV', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 'Equatorial Guinea', 'GQ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 'Eritrea', 'ER', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 'Estonia', 'EE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 'Ethiopia', 'ET', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 'Falkland Islands (Malvinas)', 'FK', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 'Faroe Islands', 'FO', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 'Fiji', 'FJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 'Finland', 'FI', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 'France', 'FR', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 'France, Metropolitan', 'FX', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, 'French Guiana', 'GF', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 'French Polynesia', 'PF', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, 'French Southern Territories', 'TF', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, 'Gabon', 'GA', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, 'Gambia', 'GM', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, 'Georgia', 'GE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, 'Germany', 'DE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, 'Ghana', 'GH', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 'Gibraltar', 'GI', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, 'Greece', 'GR', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 'Greenland', 'GL', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 'Grenada', 'GD', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 'Guadeloupe', 'GP', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 'Guam', 'GU', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, 'Guatemala', 'GT', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, 'Guinea', 'GN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, 'Guinea-Bissau', 'GW', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, 'Guyana', 'GY', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, 'Haiti', 'HT', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, 'Heard and Mc Donald Islands', 'HM', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, 'Honduras', 'HN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, 'Hong Kong', 'HK', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, 'Hungary', 'HU', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, 'Iceland', 'IS', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, 'India', 'IN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, 'Indonesia', 'ID', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(101, 'Iran (Islamic Republic of)', 'IR', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, 'Iraq', 'IQ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, 'Ireland', 'IE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, 'Israel', 'IL', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(105, 'Italy', 'IT', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(106, 'Ivory Coast', 'CI', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(107, 'Jamaica', 'JM', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(108, 'Japan', 'JP', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(109, 'Jordan', 'JO', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(110, 'Kazakhstan', 'KZ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(111, 'Kenya', 'KE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(112, 'Kiribati', 'KI', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(113, 'Korea, Democratic People''s Republic of', 'KP', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(114, 'Korea, Republic of', 'KR', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(115, 'Kuwait', 'KW', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(116, 'Kyrgyzstan', 'KG', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(117, 'Lao People''s Democratic Republic', 'LA', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(118, 'Latvia', 'LV', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(119, 'Lebanon', 'LB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(120, 'Lesotho', 'LS', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(121, 'Liberia', 'LR', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(122, 'Libyan Arab Jamahiriya', 'LY', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(123, 'Liechtenstein', 'LI', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(124, 'Lithuania', 'LT', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(125, 'Luxembourg', 'LU', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(126, 'Macau', 'MO', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(127, 'Macedonia', 'MK', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(128, 'Madagascar', 'MG', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(129, 'Malawi', 'MW', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(130, 'Malaysia', 'MY', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(131, 'Maldives', 'MV', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(132, 'Mali', 'ML', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(133, 'Malta', 'MT', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(134, 'Marshall Islands', 'MH', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(135, 'Martinique', 'MQ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(136, 'Mauritania', 'MR', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(137, 'Mauritius', 'MU', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(138, 'Mayotte', 'TY', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(139, 'Mexico', 'MX', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(140, 'Micronesia, Federated States of', 'FM', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(141, 'Moldova, Republic of', 'MD', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(142, 'Monaco', 'MC', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(143, 'Mongolia', 'MN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(144, 'Montserrat', 'MS', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(145, 'Morocco', 'MA', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(146, 'Mozambique', 'MZ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(147, 'Myanmar', 'MM', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(148, 'Namibia', 'NA', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(149, 'Nauru', 'NR', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(150, 'Nepal', 'NP', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(151, 'Netherlands', 'NL', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(152, 'Netherlands Antilles', 'AN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(153, 'New Caledonia', 'NC', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(154, 'New Zealand', 'NZ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(155, 'Nicaragua', 'NI', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(156, 'Niger', 'NE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(157, 'Nigeria', 'NG', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(158, 'Niue', 'NU', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(159, 'Norfork Island', 'NF', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(160, 'Northern Mariana Islands', 'MP', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(161, 'Norway', 'NO', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(162, 'Oman', 'OM', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(163, 'Pakistan', 'PK', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(164, 'Palau', 'PW', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(165, 'Panama', 'PA', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(166, 'Papua New Guinea', 'PG', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(167, 'Paraguay', 'PY', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(168, 'Peru', 'PE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(169, 'Philippines', 'PH', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(170, 'Pitcairn', 'PN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(171, 'Poland', 'PL', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(172, 'Portugal', 'PT', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(173, 'Puerto Rico', 'PR', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(174, 'Qatar', 'QA', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(175, 'Reunion', 'RE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(176, 'Romania', 'RO', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(177, 'Russian Federation', 'RU', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(178, 'Rwanda', 'RW', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(179, 'Saint Kitts and Nevis', 'KN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(180, 'Saint Lucia', 'LC', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(181, 'Saint Vincent and the Grenadines', 'VC', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(182, 'Samoa', 'WS', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(183, 'San Marino', 'SM', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(184, 'Sao Tome and Principe', 'ST', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(185, 'Saudi Arabia', 'SA', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(186, 'Senegal', 'SN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(187, 'Seychelles', 'SC', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(188, 'Sierra Leone', 'SL', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(189, 'Singapore', 'SG', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(190, 'Slovakia', 'SK', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(191, 'Slovenia', 'SI', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(192, 'Solomon Islands', 'SB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(193, 'Somalia', 'SO', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(194, 'South Africa', 'ZA', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(195, 'South Georgia South Sandwich Islands', 'GS', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(196, 'Spain', 'ES', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(197, 'Sri Lanka', 'LK', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(198, 'St. Helena', 'SH', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(199, 'St. Pierre and Miquelon', 'PM', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(200, 'Sudan', 'SD', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(201, 'Suriname', 'SR', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(202, 'Svalbarn and Jan Mayen Islands', 'SJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(203, 'Swaziland', 'SZ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(204, 'Sweden', 'SE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(205, 'Switzerland', 'CH', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(206, 'Syrian Arab Republic', 'SY', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(207, 'Taiwan', 'TW', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(208, 'Tajikistan', 'TJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(209, 'Tanzania, United Republic of', 'TZ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(210, 'Thailand', 'TH', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(211, 'Togo', 'TG', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(212, 'Tokelau', 'TK', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(213, 'Tonga', 'TO', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(214, 'Trinidad and Tobago', 'TT', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(215, 'Tunisia', 'TN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(216, 'Turkey', 'TR', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(217, 'Turkmenistan', 'TM', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(218, 'Turks and Caicos Islands', 'TC', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(219, 'Tuvalu', 'TV', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(220, 'Uganda', 'UG', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(221, 'Ukraine', 'UA', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(222, 'United Arab Emirates', 'AE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(223, 'United Kingdom', 'GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(224, 'United States minor outlying islands', 'UM', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(225, 'Uruguay', 'UY', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(226, 'Uzbekistan', 'UZ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(227, 'Vanuatu', 'VU', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(228, 'Vatican City State', 'VA', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(229, 'Venezuela', 'VE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(230, 'Vietnam', 'VN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(231, 'Virigan Islands (British)', 'VG', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(232, 'Virgin Islands (U.S.)', 'VI', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(233, 'Wallis and Futuna Islands', 'WF', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(234, 'Western Sahara', 'EH', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(235, 'Yemen', 'YE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(236, 'Yugoslavia', 'YU', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(237, 'Zaire', 'ZR', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(238, 'Zambia', 'ZM', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(239, 'Zimbabwe', 'ZW', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  FULLTEXT KEY `search` (`name`,`description`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE IF NOT EXISTS `education` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `school` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `entrance_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `graduation_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` int(11) NOT NULL,
  `major` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `grade` int(11) NOT NULL,
  `activities_social` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  FULLTEXT KEY `search` (`school`,`major`,`activities_social`,`description`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE IF NOT EXISTS `experiences` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `company` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `end_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `current_job` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  FULLTEXT KEY `search` (`company`,`title`,`description`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `job_classification_lookup`
--

CREATE TABLE IF NOT EXISTS `job_classification_lookup` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `job_classification_lookup`
--

INSERT INTO `job_classification_lookup` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Junior level', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Senior level', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE IF NOT EXISTS `languages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `languages_lookup`
--

CREATE TABLE IF NOT EXISTS `languages_lookup` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  FULLTEXT KEY `search` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=65 ;

--
-- Dumping data for table `languages_lookup`
--

INSERT INTO `languages_lookup` (`id`, `name`, `created_at`, `updated_at`) VALUES
(3, 'Albanian', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Arabic', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Asturian', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Basque', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Bengali', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Bulgarian', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Cantonese', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Catalan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Corsican', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Croatian', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Czech', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Danish', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Dutch', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'English', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Estonian', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Faroese', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Farsi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Finnish', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'French', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Frisian', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Gaelic', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'Galician', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'German', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'Greek', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'Greenlandic', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'Hebrew', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'Hindi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'Hungarian', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'Icelandic', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'Irish', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'Italian', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'Japanese', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'Kurdish', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 'Latin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 'Latvian', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 'Macedonian', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'Malay', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 'Maltese', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 'Mandarin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 'Moroccan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 'Norwegian', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 'Polish', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 'Portuguese', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 'Punjabi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 'Romanian', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 'Russian', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 'Sami', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 'Sardinian', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 'Serbian', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 'Serbo Croat', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 'Slovak', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 'Slovakian', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 'Slovenian', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 'Somalian', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 'Spanish', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 'Swedish', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 'Tamil', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 'Thai', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 'Turkish', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 'Urdu', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 'Vietnamese', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 'Welsh', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_03_27_141932_create_vacancies_table', 1),
('2015_03_27_145146_create_users_table', 1),
('2015_03_27_155452_create_companies_lookup_table', 1),
('2015_03_27_155730_create_categories_lookup_table', 1),
('2015_03_27_155914_create_countries_lookup_table', 1),
('2015_03_29_091158_create_profiles_table', 1),
('2015_03_30_124208_create_applicants_vacancies_table', 1),
('2015_03_30_152128_create_education_table', 1),
('2015_03_31_081020_create_experiences_table', 1),
('2015_03_31_100926_create_achievements_table', 1),
('2015_03_31_103826_create_courses_table', 1),
('2015_03_31_103937_create_languages_table', 1),
('2015_03_31_105041_create_skills_table', 1),
('2015_03_31_105350_create_certificates_table', 1),
('2015_03_31_125328_create_languages_lookup_table', 1),
('2015_04_04_070158_create_password_reminders_table', 2),
('2015_04_04_130522_create_category_of_interests_table', 3),
('2015_04_04_142623_create_job_classification_lookup_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reminders`
--

CREATE TABLE IF NOT EXISTS `password_reminders` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_reminders_email_index` (`email`),
  KEY `password_reminders_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE IF NOT EXISTS `profiles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` int(11) NOT NULL,
  `nationality` int(11) NOT NULL,
  `residence` int(11) NOT NULL,
  `married` int(11) NOT NULL,
  `dob` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cv_file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `summary` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  FULLTEXT KEY `search` (`summary`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `first_name`, `last_name`, `gender`, `nationality`, `residence`, `married`, `dob`, `mobile`, `phone`, `address`, `cv_file`, `summary`, `created_at`, `updated_at`) VALUES
(1, 32, 'Demo', 'User', 0, 1, 1, 0, '', '', '', '', '', '', '2015-04-09 09:50:08', '2015-04-09 09:50:42');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  FULLTEXT KEY `search` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=33 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin@localhost.com', '$2y$10$ZpH5R.wYM7Rg9momNTDZ7e/yT9UWTgDsWzp01G2P29EV3cqvkIWq6', 1, 'W2ptMpdkS9cRRcfP6UYChwyesbcyoVDT23W7lQiBbzWfIIXeuEtptENJumz1', '2015-04-04 13:54:07', '2015-04-09 07:29:22'),
(32, 'demo@demo.com', '$2y$10$wpVMryQSNoyUoBD/JKosl.hnjddeJb5cTF71B/ee/8CbHBJ2aA49e', 0, 'EAlAooH3ikFfaOFNEuaCGacoxl6Io9FcAgo9yNZtcZaWblsK0MuJwBA4Bxgn', '2015-04-09 09:50:08', '2015-04-09 09:50:49');

-- --------------------------------------------------------

--
-- Table structure for table `vacancies`
--

CREATE TABLE IF NOT EXISTS `vacancies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `open_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `closing_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `classification` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `salary` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `summary` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `responsibilities` text COLLATE utf8_unicode_ci NOT NULL,
  `qualifications_experience` text COLLATE utf8_unicode_ci NOT NULL,
  `skills_knowledge` text COLLATE utf8_unicode_ci NOT NULL,
  `posted_user` int(11) NOT NULL,
  `closed` int(11) NOT NULL,
  `date_closed` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
