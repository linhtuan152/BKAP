/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : ph1810lm

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-12-21 20:22:00
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
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tbl_categorys
-- ----------------------------
INSERT INTO tbl_categorys VALUES ('32', 'Món khai vị', 'uploads/15298996511528088988new_05.jpg', '1', '2018-12-17 17:57:58');
INSERT INTO tbl_categorys VALUES ('33', 'Thức ăn nhanh', 'uploads/y-y-tuong-kinh-doanh-do-an-vat-cho-sinh-vien-sieu-loi-nhuan.jpg', '1', '2018-12-17 23:16:19');
INSERT INTO tbl_categorys VALUES ('34', 'Mỳ', 'uploads/c08e93180a6aaf8878f27a930796aff9-mislide.png', '1', '2018-12-17 18:00:39');
INSERT INTO tbl_categorys VALUES ('35', 'Đồ uống', 'uploads/1530671967new_06.jpg', '1', '2018-12-17 18:01:32');
INSERT INTO tbl_categorys VALUES ('36', 'BBQ', 'uploads/Juje_kabab_2.jpg', '1', '2018-12-17 18:02:31');
INSERT INTO tbl_categorys VALUES ('37', 'Hải sản', 'uploads/hai-san-15277699572771476167814.jpg', '1', '2018-12-17 18:03:45');
INSERT INTO tbl_categorys VALUES ('38', 'Khác', 'uploads/af776e350e415928368687fe6cf02f38-b.jpg', '1', '2018-12-17 18:04:26');

-- ----------------------------
-- Table structure for `tbl_images`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_images`;
CREATE TABLE `tbl_images` (
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  `proid` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `datecreate` datetime DEFAULT NULL,
  PRIMARY KEY (`img_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_images
-- ----------------------------
INSERT INTO tbl_images VALUES ('2', '2', 'http://localhost:8080/ph1810lm-php/project1/admin/admin.php?view=editimages&id=2', '1', '2018-12-12 19:14:32');
INSERT INTO tbl_images VALUES ('3', '2', 'http://localhost:8080/ph1810lm-php/project1/admin/admin.php?view=addimages', '1', '2018-12-12 19:23:00');
INSERT INTO tbl_images VALUES ('4', '9', 'http://localhost:8080/ph1810lm-php/project1/admin/admin.php?view=addimages', '1', '2018-12-17 18:32:13');
INSERT INTO tbl_images VALUES ('8', '8', 'http://localhost:8080/ph1810lm-php/project1/admin/admin.php?view=editimages&id=2', '1', '2018-12-17 22:22:27');

-- ----------------------------
-- Table structure for `tbl_products`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_products`;
CREATE TABLE `tbl_products` (
  `proid` int(11) NOT NULL AUTO_INCREMENT,
  `catid` int(11) NOT NULL,
  `proname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `proprice` int(100) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `metakeyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `metadescription` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `datecreate` datetime NOT NULL,
  PRIMARY KEY (`proid`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tbl_products
-- ----------------------------
INSERT INTO tbl_products VALUES ('6', '33', 'Pizza Nova', '80000', 'uploads/1528694471ZWDx9d.jpg', 'ăn nhiều dễ béo', 'Pizza', 'Pizza', '1', '2018-12-19 19:08:18');
INSERT INTO tbl_products VALUES ('7', '33', 'Khoai tây chiên', '50000', 'uploads/1528694709gN1DL5.jpg', 'giòn tan :))', 'Khoai TC', 'Khoai TC', '1', '2018-12-17 23:38:25');
INSERT INTO tbl_products VALUES ('8', '33', 'Khoai tây lắc phô mai', '40000', 'uploads/1528966902ud3Xmw.jpg', 'hương vị đậm đà', 'Khoai LPM', 'Khoai LPM', '1', '2018-12-17 23:38:07');
INSERT INTO tbl_products VALUES ('29', '34', 'Mỳ thạch Hàn Quốc', '68000', 'uploads/153060112771IO2X.jpg', 'Mỳ thạch', 'Mỳ thạch', 'Mỳ thạch', '1', '2018-12-17 23:26:20');
INSERT INTO tbl_products VALUES ('30', '32', 'Cupcake Dâu Tây', '30000', 'uploads/15289554173_1024x1024.jpg', 'Dâu Tây', 'Dâu Tây', 'Dâu Tây', '1', '2018-12-17 23:40:16');
INSERT INTO tbl_products VALUES ('31', '32', 'Bánh Pie D0075', '175000', 'uploads/1.3.jpg', 'Bánh Pie', 'Bánh Pie', 'Bánh Pie', '1', '2018-12-19 19:06:46');
INSERT INTO tbl_products VALUES ('32', '32', 'Golden Grahams', '180000', 'uploads/1530255104foods-that-give-you-energy-209973-1511298452880-square.480x0c.jpg', 'Golden Grahams', 'Golden Grahams', 'Golden Grahams', '1', '2018-12-19 19:07:12');
INSERT INTO tbl_products VALUES ('33', '33', 'Curabitur Cursus Dignis', '90000', 'uploads/15306014066_1024x1024.jpg', 'Curabitur Cursus Dignis', 'Curabitur Cursus Dignis', 'Curabitur Cursus Dignis', '1', '2018-12-19 19:14:58');
INSERT INTO tbl_products VALUES ('34', '35', 'White Ice Cream', '20000', 'uploads/1529989950wKkkVt.jpg', 'White Ice Cream', 'White Ice Cream', 'White Ice Cream', '1', '2018-12-19 19:16:17');
INSERT INTO tbl_products VALUES ('35', '33', 'Humburger Onions', '30000', 'uploads/1528965668TYb8VU.jpg', 'Humburger Onions', 'Humburger Onions', 'Humburger Onions', '1', '2018-12-19 19:17:14');

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
