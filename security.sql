/*
Navicat MySQL Data Transfer

Source Server         : Local
Source Server Version : 50154
Source Host           : localhost:3306
Source Database       : security

Target Server Type    : MYSQL
Target Server Version : 50154
File Encoding         : 65001

Date: 2011-09-05 12:37:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `hackme1`
-- ----------------------------
DROP TABLE IF EXISTS `hackme1`;
CREATE TABLE `hackme1` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of hackme1
-- ----------------------------
INSERT INTO `hackme1` VALUES ('1', 'admin', 'hackme1_secret_pwd11');

-- ----------------------------
-- Table structure for `hackme15`
-- ----------------------------
DROP TABLE IF EXISTS `hackme15`;
CREATE TABLE `hackme15` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of hackme15
-- ----------------------------
INSERT INTO `hackme15` VALUES ('1', 'admin', '0101100977381');
INSERT INTO `hackme15` VALUES ('2', 'demo', 'demo');

-- ----------------------------
-- Table structure for `hackme2`
-- ----------------------------
DROP TABLE IF EXISTS `hackme2`;
CREATE TABLE `hackme2` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of hackme2
-- ----------------------------
INSERT INTO `hackme2` VALUES ('1', 'admin', '01239129037863');

-- ----------------------------
-- Table structure for `hackme22`
-- ----------------------------
DROP TABLE IF EXISTS `hackme22`;
CREATE TABLE `hackme22` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of hackme22
-- ----------------------------
INSERT INTO `hackme22` VALUES ('1', 'admin', '98394817647');
INSERT INTO `hackme22` VALUES ('2', 'kevin', '928374674');

-- ----------------------------
-- Table structure for `hackme3`
-- ----------------------------
DROP TABLE IF EXISTS `hackme3`;
CREATE TABLE `hackme3` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of hackme3
-- ----------------------------
INSERT INTO `hackme3` VALUES ('1', 'admin', '01239129037863');
INSERT INTO `hackme3` VALUES ('2', 'john', 'mysupersecretpwd');
INSERT INTO `hackme3` VALUES ('3', 'jhonny', '9123981823123');

-- ----------------------------
-- Table structure for `hackme4`
-- ----------------------------
DROP TABLE IF EXISTS `hackme4`;
CREATE TABLE `hackme4` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of hackme4
-- ----------------------------
INSERT INTO `hackme4` VALUES ('1', 'admin', '12983890831');
INSERT INTO `hackme4` VALUES ('2', 'john', '958102394715');
INSERT INTO `hackme4` VALUES ('3', 'jhonny', '010192029938');

-- ----------------------------
-- Table structure for `hackme5`
-- ----------------------------
DROP TABLE IF EXISTS `hackme5`;
CREATE TABLE `hackme5` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of hackme5
-- ----------------------------
INSERT INTO `hackme5` VALUES ('1', 'admin', '937836198723');
INSERT INTO `hackme5` VALUES ('2', 'john', '74981923671');
INSERT INTO `hackme5` VALUES ('3', 'jhonny', '404810239@!!');

-- ----------------------------
-- Table structure for `hackme6`
-- ----------------------------
DROP TABLE IF EXISTS `hackme6`;
CREATE TABLE `hackme6` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of hackme6
-- ----------------------------
INSERT INTO `hackme6` VALUES ('1', 'admin', '00982810009');
INSERT INTO `hackme6` VALUES ('2', 'john', '87461826612');
INSERT INTO `hackme6` VALUES ('3', 'jhonny', '74666517297');

-- ----------------------------
-- Table structure for `hackme7`
-- ----------------------------
DROP TABLE IF EXISTS `hackme7`;
CREATE TABLE `hackme7` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of hackme7
-- ----------------------------
INSERT INTO `hackme7` VALUES ('1', 'demo', 'demo');

-- ----------------------------
-- Table structure for `hackme8`
-- ----------------------------
DROP TABLE IF EXISTS `hackme8`;
CREATE TABLE `hackme8` (
  `ip` varchar(255) DEFAULT NULL,
  `useragent` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of hackme8
-- ----------------------------
INSERT INTO `hackme8` VALUES ('127.0.0.1', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0');
INSERT INTO `hackme8` VALUES ('116.203.35.18', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.21) Gecko/20110830 Firefox/3.6.21');


-- ----------------------------
-- Table structure for `realistic1_admins`
-- ----------------------------
DROP TABLE IF EXISTS `realistic1_admins`;
CREATE TABLE `realistic1_admins` (
  `id` int(10) NOT NULL DEFAULT '0',
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of realistic1_admins
-- ----------------------------
INSERT INTO `realistic1_admins` VALUES ('1', 'gladiator', '482c811da5d5b4bc6d497ffa98491e38');

-- ----------------------------
-- Table structure for `realistic1_news`
-- ----------------------------
DROP TABLE IF EXISTS `realistic1_news`;
CREATE TABLE `realistic1_news` (
  `id` int(10) NOT NULL DEFAULT '0',
  `title` varchar(255) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of realistic1_news
-- ----------------------------
INSERT INTO `realistic1_news` VALUES ('1', 'DDoS Attacks', 'We are receiving a lot of DDoS attacks from the police, they want to stop us! Ahaha, they will never catch or stop us!');
INSERT INTO `realistic1_news` VALUES ('2', 'We want money!', 'We contacted US Government and we will not launch bomb only if they\'ll give us 900,000,000$ in 24 hours. They declined it, so you all will die within tomorrow.');

-- ----------------------------
-- Table structure for `realistic3`
-- ----------------------------
DROP TABLE IF EXISTS `realistic3`;
CREATE TABLE `realistic3` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `session_id` varchar(255) DEFAULT NULL,
  `rank_level` int(2) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of realistic3
-- ----------------------------
INSERT INTO `realistic3` VALUES ('2', 'demo', 'demo', 'jNmaJ11UiajNNABkk1j288JA', '1', '291.92.88.11');
INSERT INTO `realistic3` VALUES ('1', 'admin', '0x1337h4x0r', 'KajnnxmI18ajBAANmakjjah1901', '2', '888.10.73.11');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `rank` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'demo', 'bf61779ac9bac01d49f590b48f725228', '2');
