-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.36-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5328
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table vac_manage_documentation.sys_menu
CREATE TABLE IF NOT EXISTS `sys_menu` (
  `smn_menuid` int(11) NOT NULL AUTO_INCREMENT,
  `smn_menuname` varchar(50) DEFAULT NULL,
  `smn_icon` varchar(50) DEFAULT NULL,
  `smn_link` varchar(50) DEFAULT NULL,
  `smn_active` int(11) DEFAULT '1',
  PRIMARY KEY (`smn_menuid`),
  KEY `smn_menuname` (`smn_menuname`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table vac_manage_documentation.sys_menu: ~6 rows (approximately)
/*!40000 ALTER TABLE `sys_menu` DISABLE KEYS */;
INSERT INTO `sys_menu` (`smn_menuid`, `smn_menuname`, `smn_icon`, `smn_link`, `smn_active`) VALUES
	(1, 'Homepage', 'home', 'homepage', 1),
	(2, 'Frameworks Documentation', NULL, NULL, 1),
	(3, 'Knowledge', NULL, NULL, 1),
	(4, 'Settings', NULL, NULL, 1),
	(5, 'Logout', 'key', 'logout', 1),
	(6, 'Login', NULL, 'login', 0);
/*!40000 ALTER TABLE `sys_menu` ENABLE KEYS */;

-- Dumping structure for table vac_manage_documentation.sys_modules
CREATE TABLE IF NOT EXISTS `sys_modules` (
  `sm_id` int(11) NOT NULL AUTO_INCREMENT,
  `sm_modulename` varchar(50) DEFAULT NULL,
  `sm_modulepath` varchar(50) DEFAULT NULL,
  `sm_smn_menuid` int(11) DEFAULT NULL,
  `sm_active` int(11) DEFAULT '1',
  PRIMARY KEY (`sm_id`),
  KEY `sm_smn_menuid` (`sm_smn_menuid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table vac_manage_documentation.sys_modules: ~3 rows (approximately)
/*!40000 ALTER TABLE `sys_modules` DISABLE KEYS */;
INSERT INTO `sys_modules` (`sm_id`, `sm_modulename`, `sm_modulepath`, `sm_smn_menuid`, `sm_active`) VALUES
	(1, 'Django-Dev', 'python/', 3, 1),
	(2, 'Users', 'settings/#/md/set/users', 4, 1),
	(3, 'Doc and Content', 'settings/#/md/set/doccontent', 4, 1);
/*!40000 ALTER TABLE `sys_modules` ENABLE KEYS */;

-- Dumping structure for table vac_manage_documentation.sys_privileges
CREATE TABLE IF NOT EXISTS `sys_privileges` (
  `sp_pid` int(11) NOT NULL AUTO_INCREMENT,
  `sp_privilegename` varchar(50) DEFAULT NULL,
  `sp_accessmodules` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`sp_pid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table vac_manage_documentation.sys_privileges: ~3 rows (approximately)
/*!40000 ALTER TABLE `sys_privileges` DISABLE KEYS */;
INSERT INTO `sys_privileges` (`sp_pid`, `sp_privilegename`, `sp_accessmodules`) VALUES
	(1, 'admin', '1,2,3,4,5,6,7'),
	(2, 'userinternal', '4,5'),
	(3, 'userexternal', '4');
/*!40000 ALTER TABLE `sys_privileges` ENABLE KEYS */;

-- Dumping structure for table vac_manage_documentation.sys_users
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

-- Dumping data for table vac_manage_documentation.sys_users: 1 rows
/*!40000 ALTER TABLE `sys_users` DISABLE KEYS */;
INSERT INTO `sys_users` (`su_id`, `su_privilegeid`, `su_email`, `su_passwd`, `su_fullname`, `su_avatar`, `su_sex`, `su_dob`, `su_job_title`, `su_company`, `su_active`, `su_created_date`, `su_created_by`) VALUES
	(2, 1, 'admin@admin.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Administrator', NULL, NULL, NULL, NULL, NULL, 1, '2017-10-26 01:24:33', 'system');
/*!40000 ALTER TABLE `sys_users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
