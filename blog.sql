/*
Navicat MySQL Data Transfer

Source Server         : 本地
Source Server Version : 50721
Source Host           : localhost:3306
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50721
File Encoding         : 65001

Date: 2021-02-01 16:47:00
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `blog_admin`
-- ----------------------------
DROP TABLE IF EXISTS `blog_admin`;
CREATE TABLE `blog_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account` varchar(32) COLLATE utf8_unicode_520_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_520_ci NOT NULL,
  `admin_name` varchar(50) COLLATE utf8_unicode_520_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `tel` varchar(11) COLLATE utf8_unicode_520_ci NOT NULL COMMENT '电话',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

-- ----------------------------
-- Records of blog_admin
-- ----------------------------
INSERT INTO `blog_admin` VALUES ('1', '2126234014', '$2y$10$kIZxSMcgbCAgCpiJLQNRh.8w6KkZAaMD9nVBVopxCpHX2FKGN9Sra', '鲸鱼', '2021-02-01 16:32:46', '2021-02-01 16:32:46', '13255075536');

-- ----------------------------
-- Table structure for `blog_article`
-- ----------------------------
DROP TABLE IF EXISTS `blog_article`;
CREATE TABLE `blog_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(60) COLLATE utf8_unicode_520_ci NOT NULL COMMENT '文章标题',
  `pic` varchar(50) COLLATE utf8_unicode_520_ci DEFAULT NULL COMMENT '文章图片',
  `user_id` int(32) NOT NULL COMMENT '作者id',
  `content` text COLLATE utf8_unicode_520_ci NOT NULL COMMENT '内容',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

-- ----------------------------
-- Records of blog_article
-- ----------------------------
INSERT INTO `blog_article` VALUES ('7', '111', '1', '111', '111', '2021-02-01 15:07:11', '2021-01-31 15:07:07');
INSERT INTO `blog_article` VALUES ('6', '6', '6', '1', '6', '2021-02-01 11:17:32', '2021-02-01 11:17:32');
INSERT INTO `blog_article` VALUES ('1', '1', null, '1', '111', '2021-02-01 16:24:07', '2021-02-01 16:24:07');
INSERT INTO `blog_article` VALUES ('2', '11', null, '11', '1', '2021-02-01 16:24:08', '2021-02-01 16:24:08');
INSERT INTO `blog_article` VALUES ('3', '11', null, '1', '1', '2021-02-01 16:24:10', '2021-02-01 16:24:10');
INSERT INTO `blog_article` VALUES ('8', '11', null, '11', '11', '2021-02-01 16:24:13', '2021-02-01 16:24:13');
INSERT INTO `blog_article` VALUES ('9', '1', null, '1', '1', '2021-02-01 16:24:15', '2021-02-01 16:24:15');
INSERT INTO `blog_article` VALUES ('10', '1', null, '1', '1', '2021-02-01 16:24:17', '2021-02-01 16:24:17');
INSERT INTO `blog_article` VALUES ('21', '2', null, '2', '2', '2021-02-01 15:16:17', null);

-- ----------------------------
-- Table structure for `blog_comment`
-- ----------------------------
DROP TABLE IF EXISTS `blog_comment`;
CREATE TABLE `blog_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` varchar(200) COLLATE utf8_unicode_520_ci NOT NULL,
  `created_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `article_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

-- ----------------------------
-- Records of blog_comment
-- ----------------------------
INSERT INTO `blog_comment` VALUES ('1', '11111', '2021-02-01 15:46:20', '2021-02-01 15:46:20', '6', '2');
INSERT INTO `blog_comment` VALUES ('2', '22222', '2021-02-01 15:46:22', '2021-02-01 15:46:22', '7', '2');
INSERT INTO `blog_comment` VALUES ('3', '1', '2021-02-01 15:46:33', '2021-02-01 15:46:33', '6', '1');
INSERT INTO `blog_comment` VALUES ('4', '2', '2021-01-29 16:22:17', '2021-02-01 16:22:21', '8', '1');
INSERT INTO `blog_comment` VALUES ('5', '3', '2021-01-29 16:22:38', '2021-02-01 16:22:42', '9', '2');
INSERT INTO `blog_comment` VALUES ('6', '4', '2021-01-29 16:22:55', '2021-01-31 16:22:59', '10', '1');

-- ----------------------------
-- Table structure for `blog_user`
-- ----------------------------
DROP TABLE IF EXISTS `blog_user`;
CREATE TABLE `blog_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account` varchar(32) COLLATE utf8_unicode_520_ci NOT NULL,
  `password` varchar(128) COLLATE utf8_unicode_520_ci NOT NULL,
  `username` varchar(32) COLLATE utf8_unicode_520_ci NOT NULL,
  `pic` varchar(256) COLLATE utf8_unicode_520_ci NOT NULL DEFAULT 'default.png',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

-- ----------------------------
-- Records of blog_user
-- ----------------------------
INSERT INTO `blog_user` VALUES ('1', '2126234014', '1', '连蓓', 'default.png');
INSERT INTO `blog_user` VALUES ('2', '1318792715', '23432', '老大', 'default.png');
