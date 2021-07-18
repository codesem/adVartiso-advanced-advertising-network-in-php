-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 22 avr. 2021 à 11:00
-- Version du serveur :  10.3.28-MariaDB
-- Version de PHP : 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pr_project`
--

-- --------------------------------------------------------

--
-- Structure de la table `pr_announcements`
--

CREATE TABLE `pr_announcements` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` enum('publisher','advertiser') COLLATE utf8_persian_ci NOT NULL DEFAULT 'publisher',
  `title` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `content` text CHARACTER SET utf8 DEFAULT NULL,
  `status` enum('1','2') COLLATE utf8_persian_ci NOT NULL DEFAULT '1',
  `created` varchar(20) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Structure de la table `pr_banlist`
--

CREATE TABLE `pr_banlist` (
  `id` int(10) NOT NULL,
  `ip_address` varchar(150) DEFAULT NULL,
  `reason` varchar(200) DEFAULT NULL,
  `status` enum('1','2') NOT NULL DEFAULT '1',
  `created` varchar(300) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pr_campaigns`
--

CREATE TABLE `pr_campaigns` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL DEFAULT 0,
  `cat_id` int(10) DEFAULT 0,
  `image` varchar(300) DEFAULT NULL,
  `url` varchar(600) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `description` varchar(600) DEFAULT NULL,
  `views` varchar(100) NOT NULL DEFAULT '0',
  `clicks` varchar(100) NOT NULL DEFAULT '0',
  `price` decimal(20,5) DEFAULT 0.00000,
  `camp_price` decimal(20,5) DEFAULT 0.00000,
  `camp_views` varchar(100) NOT NULL DEFAULT '0',
  `camp_clicks` varchar(100) NOT NULL DEFAULT '0',
  `camp_country` varchar(15000) DEFAULT 'United States, United Kingdom, Germany, France, Italy, Turkey, India, Brazil, Spain, Canada, Australia, Netherlands, Andorra, United Arab Emirates, Afghanistan, Antigua and Barbuda, Albania, Algeria, Armenia, Angola, Argentina, Austria, Aruba, Azerbaijan, Bosnia and Herzegovina, Barbados, Bangladesh, Belgium, Burkina Faso, Bulgaria, Bahrain, Burundi, Benin, Brunei, Bolivia, Bahamas, Bhutan, Botswana, Belarus, Belize, Democratic Republic of the Congo, Central African Republic, Congo, Switzerland, Ivory Coast, Chile, Cameroon, China, Colombia, Costa Rica, Cuba, Cape Verde, Cyprus, Czech Republic, Djibouti, Denmark, Dominica, Dominican Republic, Ecuador, Estonia, Egypt, Western Sahara, Eritrea, Ethiopia, Finland, Fiji, Micronesia<, Gabon, Grenada, Georgia, Ghana, Gibraltar, Greenland, Gambia, Guinea, Guadeloupe, Equatorial Guinea, Greece, Guatemala, Guinea Bissau, Guyana, Hong Kong, Honduras, Croatia, Haiti, Hungary, Indonesia, Ireland, Israel, Isle of Man, Iraq, Iran, Iceland, Jamaica, Jordan, Japan, Kenya, Kyrgyzstan, Cambodia, Kiribati, Comoros, Saint Kitts and Nevis, North Korea, South Korea, Kuwait, Kazakhstan, Laos, Lebanon<, Saint Lucia, Liechtenstein, Sri Lanka, Liberia, Lesotho, Lithuania, Luxembourg, Latvia, Libya, Morocco, Monaco, Moldova, Montenegro, Madagascar, Macedonia, Mali, Myanmar, Mongolia, Martinique, Mauritania, Malta, Mauritius, Maldives, Malawi, Mexico, Malaysia, Mozambique, Namibia, Niger, Nigeria, Nicaragua, Norway, Nepal, New Zealand, Oman, Panama, Peru, French Polynesia, Papua New Guinea, Philippines<, Pakistan, Poland, Puerto Rico, Palestine, Portugal, Palau, Paraguay, Qatar, Romania, Serbia, Russia, Rwanda, Saudi Arabia, Solomon Islands, Seychelles, Sudan, Sweden, Singapore, Slovenia, Slovakia, Sierra Leone, San Marino, Senegal, Somalia, Suriname, Sao Tome and Principe, El Salvador, Syria<, Swaziland, Chad, Togo, Thailand, Tajikistan, Turkmenistan, Tunisia, Tonga<, East Timor, Trinidad and Tobago, Tuvalu, Taiwan, Tanzania, Ukraine, Uganda, Scotland, Uruguay, Uzbekistan, Saint Vincent and the Grenadines, Venezuela, Virgin Islands, Vietnam, Vanuatu, Samoa, Yemen, South Africa, Zambia, Zimbabwe',
  `camp_device` varchar(15000) DEFAULT 'PC, MOBILE',
  `camp_size` varchar(50) DEFAULT NULL,
  `camp_type` enum('text_banner','img_banner','popup','direct') DEFAULT NULL,
  `method` enum('views','clicks') DEFAULT NULL,
  `status` enum('1','2','3','4','5') NOT NULL DEFAULT '2',
  `filter` varchar(100) DEFAULT 'clean',
  `created` varchar(300) DEFAULT NULL,
  `ago` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pr_categories`
--

CREATE TABLE `pr_categories` (
  `id` int(10) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `status` enum('1','2') NOT NULL DEFAULT '1',
  `created` varchar(300) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pr_categories`
--

INSERT INTO `pr_categories` (`id`, `name`, `description`, `status`, `created`) VALUES
(1, 'cat one', NULL, '1', '13/09/18 , 08:47 AM'),
(2, 'cat two', NULL, '1', '12/09/18 , 17:26 PM'),
(3, 'cat three', NULL, '1', '12/09/18 , 17:26 PM'),
(4, 'cat four', NULL, '1', '12/09/18 , 17:26 PM'),
(5, 'cat five', 'cat five', '1', '27/03/21 , 19:50 PM');

-- --------------------------------------------------------

--
-- Structure de la table `pr_config`
--

CREATE TABLE `pr_config` (
  `config_id` int(11) NOT NULL,
  `header` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `value` text CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Déchargement des données de la table `pr_config`
--

INSERT INTO `pr_config` (`config_id`, `header`, `value`) VALUES
(1, 'name', 'AdVartiso'),
(2, 'ref_percent', '5'),
(3, 'min_deposit', '5'),
(4, 'sumbole', '$'),
(5, 'min_withdraw', '10.00'),
(6, 'reCAPTCHA_site_key', NULL),
(7, 'reCAPTCHA_secret_key', NULL),
(8, 'meta_perfix', '|'),
(9, 'icon_url', 'https://advrtiso.000webhostapp.com/template/uploads/images/advartiso-icon.svg'),
(10, 'site_description', 'Advanced Advertising Network'),
(11, 'site_title', 'Advanced Advertising Network'),
(12, 'protected_usernames', 'admin, support, username'),
(13, 'language', 'en_US'),
(14, 'support_email', 'support@projects.codsem.com'),
(15, 'head_code', NULL),
(16, 'footer_code', NULL),
(17, 'body_code', NULL),
(18, 'currency', 'USD'),
(19, 'sumbole_position', 'before'),
(20, 'amount_decimal', '5'),
(21, 'sizes', '728x90,468x60,300x250,300x600,120x600,200x200,125x125,690x500'),
(22, 'app_version', '3.0.0'),
(23, 'countries', 'United States, United Kingdom, Germany, France, Italy, Turkey, India, Brazil, Spain, Canada, Australia, Netherlands, Andorra, United Arab Emirates, Afghanistan, Antigua and Barbuda, Albania, Algeria, Armenia, Angola, Argentina, Austria, Aruba, Azerbaijan, Bosnia and Herzegovina, Barbados, Bangladesh, Belgium, Burkina Faso, Bulgaria, Bahrain, Burundi, Benin, Brunei, Bolivia, Bahamas, Bhutan, Botswana, Belarus, Belize, Democratic Republic of the Congo, Central African Republic, Congo, Switzerland, Ivory Coast, Chile, Cameroon, China, Colombia, Costa Rica, Cuba, Cape Verde, Cyprus, Czech Republic, Djibouti, Denmark, Dominica, Dominican Republic, Ecuador, Estonia, Egypt, Western Sahara, Eritrea, Ethiopia, Finland, Fiji, Micronesia<, Gabon, Grenada, Georgia, Ghana, Gibraltar, Greenland, Gambia, Guinea, Guadeloupe, Equatorial Guinea, Greece, Guatemala, Guinea Bissau, Guyana, Hong Kong, Honduras, Croatia, Haiti, Hungary, Indonesia, Ireland, Israel, Isle of Man, Iraq, Iran, Iceland, Jamaica, Jordan, Japan, Kenya, Kyrgyzstan, Cambodia, Kiribati, Comoros, Saint Kitts and Nevis, North Korea, South Korea, Kuwait, Kazakhstan, Laos, Lebanon<, Saint Lucia, Liechtenstein, Sri Lanka, Liberia, Lesotho, Lithuania, Luxembourg, Latvia, Libya, Morocco, Monaco, Moldova, Montenegro, Madagascar, Macedonia, Mali, Myanmar, Mongolia, Martinique, Mauritania, Malta, Mauritius, Maldives, Malawi, Mexico, Malaysia, Mozambique, Namibia, Niger, Nigeria, Nicaragua, Norway, Nepal, New Zealand, Oman, Panama, Peru, French Polynesia, Papua New Guinea, Philippines<, Pakistan, Poland, Puerto Rico, Palestine, Portugal, Palau, Paraguay, Qatar, Romania, Serbia, Russia, Rwanda, Saudi Arabia, Solomon Islands, Seychelles, Sudan, Sweden, Singapore, Slovenia, Slovakia, Sierra Leone, San Marino, Senegal, Somalia, Suriname, Sao Tome and Principe, El Salvador, Syria<, Swaziland, Chad, Togo, Thailand, Tajikistan, Turkmenistan, Tunisia, Tonga<, East Timor, Trinidad and Tobago, Tuvalu, Taiwan, Tanzania, Ukraine, Uganda, Scotland, Uruguay, Uzbekistan, Saint Vincent and the Grenadines, Venezuela, Virgin Islands, Vietnam, Vanuatu, Samoa, Yemen, South Africa, Zambia, Zimbabwe		'),
(24, 'home_sec_desc', 'Advanced Advertising Network'),
(25, 'adv_support_email', 'adv@projects.codsem.com'),
(26, 'pub_support_email', 'pub@projects.codsem.com'),
(27, 'meta_img', ''),
(28, 'logo_url', 'https://advrtiso.000webhostapp.com/template/uploads/images/home-logo.svg'),
(29, 'users_logo_url', 'https://advrtiso.000webhostapp.com/template/uploads/images/home-logo.svg'),
(30, 'account_activate_email', '2'),
(31, 'mailer_option', 'smtp'),
(32, 'mailer_username', NULL),
(33, 'mailer_host', NULL),
(34, 'mailer_port', NULL),
(35, 'mailer_use', NULL),
(36, 'mailer_pass', NULL),
(37, 'min_views', '1000'),
(38, 'min_clicks', '1000'),
(39, 'enable_search_index', '1'),
(40, 'enable_referrals', '1'),
(41, 'admin_percent', '15'),
(42, 'keywords', 'keyword1,keyword2'),
(43, 'landing', 'adfancy'),
(44, 'mode_demo', '2'),
(45, 'cpc_direct', '0.009'),
(46, 'cpm_text_banner', '0.25'),
(47, 'cpc_text_banner', '0.002'),
(48, 'cpc_popup', '0.01'),
(49, 'cpm_img_banner', '0.33'),
(50, 'cpc_img_banner', '0.008'),
(51, 'pop_clicks', '1000'),
(52, 'pop_views', '1000'),
(53, 'direct_hits', '1000'),
(54, 'captcha_type', 'recaptcha'),
(55, 'captcha_signup', '2'),
(56, 'captcha_login', '2'),
(57, 'captcha_forgot', '2'),
(58, 'fb_link', '#'),
(59, 'insta_link', '#'),
(60, 'tweet_link', '#'),
(61, 'pin_link', NULL),
(62, 'default_link_banner', 'https://projects.codsem.com/advartiso/'),
(63, 'default_link_text_banner', 'https://projects.codsem.com/advartiso/'),
(64, 'default_title_text_banner', 'Place Your Ad Here'),
(65, 'default_description_text_banner', 'Your Ad Here For The Best Result'),
(66, 'default_link_popup', 'https://projects.codsem.com/advartiso/'),
(67, 'default_link_direct', 'https://projects.codsem.com/advartiso/'),
(68, 'default_728x90_img_banner', 'https://advrtiso.000webhostapp.com/template/uploads/banners/default-728x90.png'),
(69, 'default_468x60_img_banner', 'https://advrtiso.000webhostapp.com/template/uploads/banners/default-468x60.png'),
(70, 'default_300x250_img_banner', 'https://advrtiso.000webhostapp.com/template/uploads/banners/default-300x250.png'),
(71, 'default_300x600_img_banner', 'https://advrtiso.000webhostapp.com/template/uploads/banners/default-300x600.png'),
(72, 'default_120x600_img_banner', 'https://advrtiso.000webhostapp.com/template/uploads/banners/default-120x600.png'),
(73, 'default_200x200_img_banner', 'https://advrtiso.000webhostapp.com/template/uploads/banners/default-200x200.png'),
(74, 'default_125x125_img_banner', 'https://advrtiso.000webhostapp.com/template/uploads/banners/default-125x125.png'),
(75, 'default_690x500_img_banner', 'https://advrtiso.000webhostapp.com/template/uploads/banners/default-690x500.png'),
(76, 'popup_width', '800'),
(77, 'popup_height', '700'),
(78, 'popup_seen_timer', '6'),
(79, 'adchoice_icon', 'https://advrtiso.000webhostapp.com/template/uploads/images/adchoice.svg'),
(80, 'adchoice_link', 'https://projects.codsem.com/advartiso/'),
(81, 'enable_img_banner', '1'),
(82, 'enable_txt_banner', '1'),
(83, 'enable_popup', '1'),
(84, 'enable_direct', '1'),
(85, 'browsers', 'Internet Explorer,Mozilla Firefox,Opera,Google Chrome,Apple Safari,Netscape,Edge,Other'),
(86, 'platforms', 'Linux,Mac,Windows,Other'),
(87, 'max_ip_clicks', '1'),
(88, 'max_ip_views', '1');

-- --------------------------------------------------------

--
-- Structure de la table `pr_currencies`
--

CREATE TABLE `pr_currencies` (
  `id` int(10) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `symbol` varchar(200) DEFAULT NULL,
  `status` enum('1','2') NOT NULL DEFAULT '1',
  `created` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pr_currencies`
--

INSERT INTO `pr_currencies` (`id`, `name`, `symbol`, `status`, `created`) VALUES
(1, 'USD', '$', '1', NULL),
(2, 'EUR', '&#8364;', '1', NULL),
(3, 'GBP', '&#163;', '1', NULL),
(4, 'INR', '&#8377;', '1', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `pr_deposite_methods`
--

CREATE TABLE `pr_deposite_methods` (
  `id` int(10) NOT NULL,
  `methods` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `name` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `account` varchar(12000) CHARACTER SET utf8 DEFAULT NULL,
  `public_key` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `secret_key` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `tax_percent` int(10) NOT NULL DEFAULT 0,
  `ipn_url` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `status` enum('1','2') CHARACTER SET utf8 DEFAULT '1' COMMENT '1=active, 2=inactive',
  `created` varchar(20) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pr_deposite_methods`
--

INSERT INTO `pr_deposite_methods` (`id`, `methods`, `name`, `account`, `public_key`, `secret_key`, `tax_percent`, `ipn_url`, `status`, `created`) VALUES
(1, 'coinbase', 'Coinbase', NULL, NULL, NULL, 0, 'ipn/cbs_handler', '2', ''),
(2, 'paypal', 'PayPal', '', NULL, NULL, 0, 'ipn/ppl_handler', '1', ''),
(3, 'stripe', 'Stripe', NULL, NULL, NULL, 0, NULL, '2', ''),
(4, 'bank', 'Bank Transfer', '<p><strong>bank number:</strong> <em>16</em></p>\r\n\r\n<p><strong>bank: </strong><em>15455</em></p>\r\n', NULL, NULL, 0, NULL, '2', NULL),
(5, 'paytm', 'PayTM', NULL, NULL, NULL, 0, 'ipn/ptm_handler', '2', '');

-- --------------------------------------------------------

--
-- Structure de la table `pr_invoice`
--

CREATE TABLE `pr_invoice` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL DEFAULT 0,
  `method_id` int(10) DEFAULT 0,
  `amount` decimal(20,5) NOT NULL DEFAULT 0.00000,
  `total` decimal(20,5) NOT NULL DEFAULT 0.00000,
  `token` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `status_text` varchar(300) DEFAULT 'N/A',
  `txn_id` varchar(300) NOT NULL DEFAULT 'N/A',
  `status` enum('1','2') CHARACTER SET utf8 NOT NULL DEFAULT '2' COMMENT '1=paid,2=unpaid',
  `created` varchar(20) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pr_link`
--

CREATE TABLE `pr_link` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) NOT NULL DEFAULT 0,
  `cat_id` int(10) NOT NULL DEFAULT 0,
  `url` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `fraud` int(10) DEFAULT 0,
  `hits` int(10) NOT NULL DEFAULT 0,
  `earn` decimal(20,3) NOT NULL DEFAULT 0.000,
  `site_type` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `status` enum('1','2','3','4','5') NOT NULL DEFAULT '2' COMMENT '1=active, 2=pending, 3=banned, 4=rejected',
  `modified` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `created` varchar(20) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pr_notifications`
--

CREATE TABLE `pr_notifications` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `type` enum('deposit','referral','withdrawal','campaign','website') NOT NULL DEFAULT 'deposit',
  `role` enum('publisher','advertiser') NOT NULL DEFAULT 'publisher',
  `title` varchar(300) DEFAULT NULL,
  `amount` decimal(20,5) NOT NULL DEFAULT 0.00000,
  `status` enum('1','2') NOT NULL DEFAULT '1',
  `isread` enum('1','2') NOT NULL DEFAULT '2',
  `created` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pr_pages`
--

CREATE TABLE `pr_pages` (
  `id` int(10) NOT NULL,
  `link` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `short` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `protect` enum('1','2') COLLATE utf8_unicode_ci NOT NULL DEFAULT '2',
  `status` enum('1','2') COLLATE utf8_unicode_ci DEFAULT '1',
  `created` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `pr_pages`
--

INSERT INTO `pr_pages` (`id`, `link`, `title`, `content`, `short`, `protect`, `status`, `created`) VALUES
(1, 'terms-conditions', 'Terms & Conditions', 'Terms & Conditions', NULL, '1', '1', '14/04/21 , 23:39 PM	\r\n'),
(2, 'privacy-policy', 'Privacy Policy\r\n', 'Privacy Policy', NULL, '1', '1', '14/04/21 , 23:39 PM	\r\n'),
(3, 'about-us', 'About us', '<p>About-us</p>\r\n', 'About-us\r\n', '1', '1', '14/04/21 , 23:39 PM	\r\n'),
(4, 'faqs', 'Faqs', '<p>faq</p>\r\n', 'faq\r\n', '1', '1', '14/04/21 , 23:39 PM	\r\n'),
(5, 'order-return', 'Order Return', '<p>Order Return</p>\r\n', 'Order Return\r\n', '1', '1', '14/04/21 , 23:39 PM	\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `pr_payments`
--

CREATE TABLE `pr_payments` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL DEFAULT 0,
  `txn_id` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `item_number` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `payment_gross` decimal(20,3) DEFAULT 0.000,
  `currency_code` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `type` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `payment_status` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `created` varchar(20) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pr_plugins`
--

CREATE TABLE `pr_plugins` (
  `id` int(10) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `description` varchar(12000) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `screen` varchar(300) DEFAULT NULL,
  `version` varchar(100) DEFAULT NULL,
  `icon` varchar(300) DEFAULT NULL,
  `created` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pr_stats`
--

CREATE TABLE `pr_stats` (
  `id` int(10) NOT NULL,
  `zone_id` int(10) NOT NULL DEFAULT 0,
  `camp_id` int(10) DEFAULT 0,
  `pub_id` int(10) NOT NULL DEFAULT 0,
  `adv_id` int(10) NOT NULL DEFAULT 0,
  `referral_id` int(10) NOT NULL DEFAULT 0,
  `url` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `ad_type` enum('img_banner','text_banner','popup','direct') CHARACTER SET utf8 DEFAULT NULL COMMENT '1=banner,2=popup,3=direct',
  `ip` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `country` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `referer_domain` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `referer` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `adm_earn` decimal(20,5) NOT NULL DEFAULT 0.00000,
  `pub_earn` decimal(20,5) NOT NULL DEFAULT 0.00000,
  `adv_spend` decimal(20,5) NOT NULL DEFAULT 0.00000,
  `ref_earn` decimal(20,5) NOT NULL DEFAULT 0.00000,
  `views` int(10) NOT NULL DEFAULT 0,
  `clicks` int(10) NOT NULL DEFAULT 0,
  `status` enum('1','2','3','4') CHARACTER SET utf8 DEFAULT NULL COMMENT '1=Earn,2= IP Changed, 3=Don''t count,4= Fraud',
  `created` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `ago` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pr_templates`
--

CREATE TABLE `pr_templates` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL DEFAULT 0,
  `name` varchar(250) DEFAULT NULL,
  `title` varchar(300) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `link` varchar(600) DEFAULT NULL,
  `status` enum('1','2') NOT NULL DEFAULT '1',
  `created` varchar(300) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pr_themes`
--

CREATE TABLE `pr_themes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `author` varchar(300) DEFAULT NULL,
  `screen` varchar(300) DEFAULT NULL,
  `version` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `status` enum('1','2') CHARACTER SET utf8 NOT NULL DEFAULT '2' COMMENT '1=active,2=inactive',
  `created` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pr_themes`
--

INSERT INTO `pr_themes` (`id`, `name`, `author`, `screen`, `version`, `status`, `created`) VALUES
(1, 'advanced', 'Qutescripts', 'images/theme.png', '1.0.0', '1', '21/04/18 , 09:20 AM');

-- --------------------------------------------------------

--
-- Structure de la table `pr_uploads`
--

CREATE TABLE `pr_uploads` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL DEFAULT 0,
  `name` varchar(300) DEFAULT NULL,
  `path` varchar(600) DEFAULT NULL,
  `type` enum('png','jpeg','gif','jpg','svg','zip') DEFAULT 'png',
  `status` enum('1','2') NOT NULL DEFAULT '1',
  `created` varchar(300) DEFAULT NULL,
  `ago` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pr_user`
--

CREATE TABLE `pr_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role` enum('admin','publisher','advertiser') CHARACTER SET utf8 DEFAULT 'publisher',
  `status` enum('1','2') COLLATE utf8_persian_ci DEFAULT '1' COMMENT '1=active, 2=inactive',
  `username` varchar(200) COLLATE utf8_persian_ci DEFAULT NULL,
  `password` varchar(200) COLLATE utf8_persian_ci DEFAULT NULL,
  `email` varchar(300) COLLATE utf8_persian_ci DEFAULT NULL,
  `parent_id` int(11) UNSIGNED DEFAULT NULL,
  `ad_balance` decimal(20,5) NOT NULL DEFAULT 0.00000,
  `pub_earnings` decimal(20,5) NOT NULL DEFAULT 0.00000,
  `adm_earnings` decimal(20,5) NOT NULL DEFAULT 0.00000,
  `referral_earnings` decimal(20,5) NOT NULL DEFAULT 0.00000,
  `first_name` varchar(250) COLLATE utf8_persian_ci DEFAULT NULL,
  `last_name` varchar(250) COLLATE utf8_persian_ci DEFAULT NULL,
  `country` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `address` varchar(300) COLLATE utf8_persian_ci DEFAULT NULL,
  `reset` int(11) NOT NULL DEFAULT 0,
  `login_ip` varchar(500) COLLATE utf8_persian_ci DEFAULT NULL,
  `register_ip` varchar(500) COLLATE utf8_persian_ci DEFAULT NULL,
  `created` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `modified` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `isactivated` enum('1','2') COLLATE utf8_persian_ci NOT NULL DEFAULT '1',
  `token` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Structure de la table `pr_withdrawal`
--

CREATE TABLE `pr_withdrawal` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT 0,
  `method_id` int(10) NOT NULL DEFAULT 0,
  `amount` decimal(20,5) UNSIGNED NOT NULL DEFAULT 0.00000,
  `fee` decimal(20,5) NOT NULL DEFAULT 0.00000,
  `account` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `tx` varchar(1000) COLLATE utf8_persian_ci DEFAULT 'N/A',
  `status` enum('1','2','3','4') COLLATE utf8_persian_ci NOT NULL DEFAULT '2' COMMENT '1=Approved, 2=Pending, 3=Complete, 4=Denied',
  `created` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `ago` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Structure de la table `pr_withdraw_methods`
--

CREATE TABLE `pr_withdraw_methods` (
  `id` int(10) NOT NULL,
  `name` varchar(300) DEFAULT NULL,
  `methods` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `type` enum('api','manual') CHARACTER SET utf8 DEFAULT 'manual',
  `fee` decimal(20,5) DEFAULT 0.00000,
  `minimum` decimal(20,5) DEFAULT 0.00000,
  `api` varchar(300) DEFAULT NULL,
  `status` enum('1','2') DEFAULT '1' COMMENT '1= active,2=inactive'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pr_withdraw_methods`
--

INSERT INTO `pr_withdraw_methods` (`id`, `name`, `methods`, `type`, `fee`, `minimum`, `api`, `status`) VALUES
(1, 'PayPal', 'paypal', 'manual', 0.00000, 10.00000, NULL, '1'),
(2, 'BTC', 'btc', 'manual', 0.00000, 15.00000, NULL, '1');

-- --------------------------------------------------------

--
-- Structure de la table `pr_zones`
--

CREATE TABLE `pr_zones` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL DEFAULT 0,
  `site_id` int(10) NOT NULL DEFAULT 0,
  `name` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `type` enum('banner','popup','direct') NOT NULL DEFAULT 'banner',
  `ad_type` enum('img_banner','text_banner','popup','direct') NOT NULL DEFAULT 'img_banner',
  `size` varchar(100) CHARACTER SET utf8 DEFAULT 'N/A',
  `filter` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `balance` decimal(20,5) NOT NULL DEFAULT 0.00000,
  `cpm` decimal(20,5) NOT NULL DEFAULT 0.00000,
  `views` varchar(100) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `clicks` varchar(100) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `status` enum('1','2') CHARACTER SET utf8 NOT NULL DEFAULT '1' COMMENT '1=active,2=inactive',
  `token` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `created` varchar(20) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `pr_announcements`
--
ALTER TABLE `pr_announcements`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pr_banlist`
--
ALTER TABLE `pr_banlist`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pr_campaigns`
--
ALTER TABLE `pr_campaigns`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pr_categories`
--
ALTER TABLE `pr_categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pr_config`
--
ALTER TABLE `pr_config`
  ADD PRIMARY KEY (`config_id`);

--
-- Index pour la table `pr_currencies`
--
ALTER TABLE `pr_currencies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_2` (`id`),
  ADD KEY `id` (`id`);

--
-- Index pour la table `pr_deposite_methods`
--
ALTER TABLE `pr_deposite_methods`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pr_invoice`
--
ALTER TABLE `pr_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pr_link`
--
ALTER TABLE `pr_link`
  ADD UNIQUE KEY `link_id` (`id`);

--
-- Index pour la table `pr_notifications`
--
ALTER TABLE `pr_notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Index pour la table `pr_pages`
--
ALTER TABLE `pr_pages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pr_payments`
--
ALTER TABLE `pr_payments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pr_plugins`
--
ALTER TABLE `pr_plugins`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pr_stats`
--
ALTER TABLE `pr_stats`
  ADD PRIMARY KEY (`id`);
  
--
-- Index pour la table `pr_templates`
--
ALTER TABLE `pr_templates`
  ADD PRIMARY KEY (`id`);
  
--
-- Index pour la table `pr_themes`
--
ALTER TABLE `pr_themes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pr_uploads`
--
ALTER TABLE `pr_uploads`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pr_user`
--
ALTER TABLE `pr_user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Index pour la table `pr_withdrawal`
--
ALTER TABLE `pr_withdrawal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `pr_withdraw_methods`
--
ALTER TABLE `pr_withdraw_methods`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pr_zones`
--
ALTER TABLE `pr_zones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `pr_announcements`
--
ALTER TABLE `pr_announcements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pr_banlist`
--
ALTER TABLE `pr_banlist`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pr_campaigns`
--
ALTER TABLE `pr_campaigns`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pr_categories`
--
ALTER TABLE `pr_categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `pr_config`
--
ALTER TABLE `pr_config`
  MODIFY `config_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT pour la table `pr_currencies`
--
ALTER TABLE `pr_currencies`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `pr_deposite_methods`
--
ALTER TABLE `pr_deposite_methods`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `pr_invoice`
--
ALTER TABLE `pr_invoice`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pr_link`
--
ALTER TABLE `pr_link`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pr_notifications`
--
ALTER TABLE `pr_notifications`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pr_pages`
--
ALTER TABLE `pr_pages`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `pr_payments`
--
ALTER TABLE `pr_payments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pr_plugins`
--
ALTER TABLE `pr_plugins`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pr_stats`
--
ALTER TABLE `pr_stats`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pr_templates`
--
ALTER TABLE `pr_templates`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
  
--
-- AUTO_INCREMENT pour la table `pr_themes`
--
ALTER TABLE `pr_themes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `pr_uploads`
--
ALTER TABLE `pr_uploads`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pr_user`
--
ALTER TABLE `pr_user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pr_withdrawal`
--
ALTER TABLE `pr_withdrawal`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pr_withdraw_methods`
--
ALTER TABLE `pr_withdraw_methods`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `pr_zones`
--
ALTER TABLE `pr_zones`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
