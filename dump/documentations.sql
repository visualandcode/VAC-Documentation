-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.23-0ubuntu0.18.04.1 - (Ubuntu)
-- Server OS:                    Linux
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table kct-knowledge.sys_menu
CREATE TABLE IF NOT EXISTS `sys_menu` (
  `smn_menuid` int(11) NOT NULL AUTO_INCREMENT,
  `smn_menuname` varchar(50) DEFAULT NULL,
  `smn_link` varchar(50) DEFAULT NULL,
  `smn_active` int(11) DEFAULT '1',
  PRIMARY KEY (`smn_menuid`),
  KEY `smn_menuname` (`smn_menuname`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table kct-knowledge.sys_menu: ~5 rows (approximately)
/*!40000 ALTER TABLE `sys_menu` DISABLE KEYS */;
INSERT INTO `sys_menu` (`smn_menuid`, `smn_menuname`, `smn_link`, `smn_active`) VALUES
	(1, 'Homepage', 'homepage', 1),
	(2, 'Frameworks Documentation', NULL, 1),
	(3, 'Knowledge', NULL, 1),
	(4, 'Settings', NULL, 1),
	(5, 'Logout', 'logout', 1),
	(6, 'Login', 'login', 0);
/*!40000 ALTER TABLE `sys_menu` ENABLE KEYS */;

-- Dumping structure for table kct-knowledge.sys_modules
CREATE TABLE IF NOT EXISTS `sys_modules` (
  `sm_id` int(11) NOT NULL AUTO_INCREMENT,
  `sm_modulename` varchar(50) DEFAULT NULL,
  `sm_modulepath` varchar(50) DEFAULT NULL,
  `sm_smn_menuid` int(11) DEFAULT NULL,
  `sm_active` int(11) DEFAULT '1',
  PRIMARY KEY (`sm_id`),
  KEY `sm_smn_menuid` (`sm_smn_menuid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table kct-knowledge.sys_modules: ~6 rows (approximately)
/*!40000 ALTER TABLE `sys_modules` DISABLE KEYS */;
INSERT INTO `sys_modules` (`sm_id`, `sm_modulename`, `sm_modulepath`, `sm_smn_menuid`, `sm_active`) VALUES
	(1, 'ws-worksaurus v1.0', 'v1/', 2, 1),
	(2, 'ws-worksaurus v2.0', 'v2/', 2, 1),
	(3, 'ws-worksaurus v3.0', 'v3/', 2, 1),
	(4, 'ws-worksaurus v4.0', 'v4/', 2, 1),
	(5, 'Django-Dev', 'python/', 3, 1),
	(6, 'Users', 'settings/#/md/set/users', 4, 1),
	(7, 'Doc and Content', 'settings/#/md/set/doccontent', 4, 1);
/*!40000 ALTER TABLE `sys_modules` ENABLE KEYS */;

-- Dumping structure for table kct-knowledge.sys_privileges
CREATE TABLE IF NOT EXISTS `sys_privileges` (
  `sp_pid` int(11) NOT NULL AUTO_INCREMENT,
  `sp_privilegename` varchar(50) DEFAULT NULL,
  `sp_accessmodules` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`sp_pid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table kct-knowledge.sys_privileges: ~2 rows (approximately)
/*!40000 ALTER TABLE `sys_privileges` DISABLE KEYS */;
INSERT INTO `sys_privileges` (`sp_pid`, `sp_privilegename`, `sp_accessmodules`) VALUES
	(1, 'admin', '1,2,3,4,5,6,7'),
	(2, 'userinternal', '4,5'),
	(3, 'userexternal', '4');
/*!40000 ALTER TABLE `sys_privileges` ENABLE KEYS */;

-- Dumping structure for table kct-knowledge.sys_users
CREATE TABLE IF NOT EXISTS `sys_users` (
  `su_id` int(11) NOT NULL AUTO_INCREMENT,
  `su_privilegeid` int(11) DEFAULT NULL COMMENT '1=admin,2=usersinternal,3=usersexternal',
  `su_email` varchar(255) DEFAULT NULL,
  `su_passwd` varchar(255) DEFAULT NULL,
  `su_fullname` varchar(255) DEFAULT NULL,
  `su_avatar` varchar(255) DEFAULT NULL,
  `su_sex` varchar(30) DEFAULT NULL,
  `su_dob` date DEFAULT NULL,
  `su_job_title` varchar(100) DEFAULT NULL,
  `su_company` varchar(255) DEFAULT NULL,
  `su_active` int(11) DEFAULT '1',
  `su_created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `su_created_by` varchar(50) DEFAULT 'system',
  PRIMARY KEY (`su_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- Dumping data for table kct-knowledge.sys_users: 12 rows
/*!40000 ALTER TABLE `sys_users` DISABLE KEYS */;
INSERT INTO `sys_users` (`su_id`, `su_privilegeid`, `su_email`, `su_passwd`, `su_fullname`, `su_avatar`, `su_sex`, `su_dob`, `su_job_title`, `su_company`, `su_active`, `su_created_date`, `su_created_by`) VALUES
	(6, 2, 'test@kct.co.id', '81dc9bdb52d04dc20036dbd8313ed055', 'Test User', NULL, NULL, NULL, NULL, NULL, 1, '2017-10-26 01:24:33', 'system'),
	(4, 1, 'wili@kct.co.id', '81dc9bdb52d04dc20036dbd8313ed055', 'Wiliarko M.', 'defaults/avatar-0.jpg', 'Female', NULL, NULL, NULL, 1, '2017-05-04 21:20:15', 'system'),
	(2, 1, 'vidi@kct.co.id', '81dc9bdb52d04dc20036dbd8313ed055', 'Vidi Meylan', 'defaults/avatar-0.jpg', 'Female', NULL, NULL, NULL, 1, '2017-05-04 19:55:15', 'system'),
	(3, 2, 'cahya@kct.co.id', '81dc9bdb52d04dc20036dbd8313ed055', 'Cahya Dyzin', 'SelfAvatar_Blue002.jpg', 'Male', NULL, NULL, NULL, 1, '2017-05-04 20:24:39', 'system'),
	(7, 1, 'vidi@kct.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Vidi', NULL, NULL, NULL, NULL, NULL, 1, '2018-01-04 07:31:00', 'system'),
	(8, 1, 'ikhsan@kct.co.id', '81dc9bdb52d04dc20036dbd8313ed055', 'Ikhsan', 'defaults/avatar-0.jpg', NULL, NULL, NULL, NULL, 1, '2018-01-11 23:32:00', 'system'),
	(9, 1, 'roso.sasongko@kct.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Roso Sasongko', NULL, NULL, NULL, NULL, NULL, 1, '2018-01-17 13:37:20', 'system'),
	(10, 2, 'test2@kct.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Nurfarid8924', 'defaults/avatar-0.jpg', NULL, NULL, NULL, NULL, 1, '2018-02-14 22:30:36', 'system'),
	(1, 1, 'roso@kct.co.id', '81dc9bdb52d04dc20036dbd8313ed055', 'Roso Sasongko', 'default-avatar-ginger-guy.png', 'Male', '1985-07-03', 'Programmer', 'Kreasindo Cipta Teknologi', 1, '2017-04-28 10:52:36', 'system'),
	(5, 1, 'said@kct.co.id', '81dc9bdb52d04dc20036dbd8313ed055', 'Said M Fahmi', 'avatar-0.jpg', 'Male', NULL, NULL, NULL, 1, '2017-08-05 05:12:15', 'system'),
	(11, 1, 'wahyu@kct.co.id', '81dc9bdb52d04dc20036dbd8313ed055', 'Ahmad Wahyudin', NULL, NULL, NULL, NULL, NULL, 1, '2017-10-26 01:24:33', 'system'),
	(12, 4, 'wahyu@ext.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Ahmad Wahyudin', NULL, NULL, NULL, NULL, NULL, 1, '2017-10-26 01:24:33', 'system');
/*!40000 ALTER TABLE `sys_users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
