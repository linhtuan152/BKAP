/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : ph1810lm

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-12-05 19:19:52
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `tbl_categorys`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_categorys`;
CREATE TABLE `tbl_categorys` (
  `catid` int(11) NOT NULL AUTO_INCREMENT,
  `catname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `datecreate` datetime DEFAULT NULL,
  PRIMARY KEY (`catid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tbl_categorys
-- ----------------------------
INSERT INTO tbl_categorys VALUES ('1', 'Món khai vị', '', '1', '2018-12-05 19:04:42');
INSERT INTO tbl_categorys VALUES ('2', 'Thức ăn nhanh', '', '1', '2018-12-05 19:17:46');
INSERT INTO tbl_categorys VALUES ('3', 'Mỳ', '', '1', '2018-12-05 19:18:25');

-- ----------------------------
-- Table structure for `tbl_products`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_products`;
CREATE TABLE `tbl_products` (
  `proid` int(11) NOT NULL AUTO_INCREMENT,
  `catid` int(11) NOT NULL,
  `proname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `proprice` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `metakeyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `metadescription` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `datecreate` datetime DEFAULT NULL,
  PRIMARY KEY (`proid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tbl_products
-- ----------------------------

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` char(32) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `gender` tinyint(1) DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `desscription` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO users VALUES ('1', 'admin', 'Doan van Nang', '987654321', 'dvnang@gmail.com', '1', 'ha noi', 'mo ta');
INSERT INTO users VALUES ('3', 'admin2', 'Doan van Nang', '123456', 'dvnang@gmail.com', '1', 'ha noi', 'mo ta');
INSERT INTO users VALUES ('4', 'admin3', 'Doan van Nang3', '123455', 'dvnang1@gmail.com', '1', 'ha noi1', 'mo ta1');
INSERT INTO users VALUES ('5', 'admin4', 'Doan van Nang', '123456', 'dvnang@gmail.com', '1', 'ha noi', 'mo ta');
INSERT INTO users VALUES ('6', 'admin5', 'Doan van Nang1', '123455', 'dvnang1@gmail.com', '1', 'ha noi1', 'mo ta1');
