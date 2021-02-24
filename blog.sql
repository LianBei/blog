/*
Navicat MySQL Data Transfer

Source Server         : 本地
Source Server Version : 50721
Source Host           : localhost:3306
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50721
File Encoding         : 65001

Date: 2021-02-24 16:59:43
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
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

-- ----------------------------
-- Records of blog_article
-- ----------------------------
INSERT INTO `blog_article` VALUES ('1', '企业微信发布重大更新-微信社群营销管理扩展功能3万企业已率先解锁！', '201610181739277776.jpg', '1', '12月23日，企业微信年度大会召开，今年的核心方向是「社群」。\r\n\r\n同期，企业微信3.1.0版本更新，释放了三大重磅社群功能：\r\n\r\n① 客户群人数扩容，由200人增加到500人,\r\n②外部红包功能开放，支持在客户群和客户单聊发送红包\r\n③ 外部群支持将微信用户设置成群管理员\r\n\r\n企业微信的群聊可以设置个人微信为群管理员，意味着教培机构可以在班级群选举班长、社区团购可以在群内选拔团长等，改动虽小，但意义巨大.\r\n除了这些最新发布的功能之外，其实企业微信早在社群功能储备了许多「超能力」：\r\n\r\n新成员入群自动发送「入群欢迎语」\r\n可以支持1000人「加入群聊」的群活码\r\n自动防止用户发广告和刷屏的「防骚扰」和「黑名单」\r\n@群管理员就可以触发关键词「自动回复」\r\n可以将重复进群的客户一键移除的「群成员去重复」\r\n可以统计不同群聊消息数的「群聊据统计」\r\n经常有人问我，除了官方给出的功能，有没有什么安全且合规的工具，可以实现更多增强能力？\r\n\r\n答案是：有的，并且它还是免费的，这款工具早已经实现了：\r\n\r\n根据客户地理位置分配附近的群聊\r\n按客户标签发送入群邀请\r\n一键发起40人的群聊\r\n追踪特定链接在群聊里的打开者和次数\r\n制定群SOP，定时提醒发送\r\n群抽奖、群打卡、群红包\r\n这款工具叫做「微伴助手」，微伴助手完全基于企业微信的官方接口，以合规的方式实现了 60 多项客户管理能力，也是目前最主流的企业微信营销社群管理工具。', '2021-02-23 17:49:52', '2021-02-23 17:49:52');
INSERT INTO `blog_article` VALUES ('2', '快速制作动画视频软件 – 万彩动画大师，限时送激活码', '2', '2', '平时在公司需要制作一些动画视频时，很多小伙伴都觉得很难，无从下手。这里给大家说说一款实用性很强的动画视频制作利器——万彩动画大师（www.animiz.cn），操作比 AE、Flash、Premiere 简单得多！你不需要任何的基础，使用它制作动画视频可谓省时省力！它适用于制作动画宣传片、微信动画视频、短视频、广告片、营销动画、趣味课件动画、微课视频等，无论是新手还是专业人士，都同样可以用它来“轻松快速”制作出满意的动画作品\r\n万彩动画大师特色功能\r\n万彩动画大师（www.animiz.cn）这款动画视频制作工具的功能非常完善的了，软件里面也有不少特色功能，而且非常受欢迎哦：\r\n\r\n（1）表情多样，种类繁多的动静态动画角色 （Flash, PNG 和GIF），并且每个角色里面有N种动作，增加动画视频的趣味性跟互动性。\r\n（2）语音合成（输入文字，可选择不同角色，转换为粤语、普通话、各地方言、英文的语音），并能调节音量和音速。\r\n（3）可为加入的元素（如文字、图片等）设置各种炫酷的动画效果\r\n另外，它还有时下很火的“手绘动画”效果\r\n（4）提供上传在线视频功能（可分享到微信朋友圈）\r\n（5）输出成GIF动图（包括透明背景GIF）。\r\n', '2021-02-11 17:09:52', '2021-02-23 17:10:01');
INSERT INTO `blog_article` VALUES ('3', '12', '4WN1kelmlpj1xJVgNPoaurhq6g5yzJEKGWW9e10S.png', '2', '1231234', '2021-02-24 14:51:52', '2021-02-24 14:51:52');

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
INSERT INTO `blog_comment` VALUES ('1', '牛', '2021-02-03 13:39:24', '2021-02-03 13:39:24', '1', '2');
INSERT INTO `blog_comment` VALUES ('2', '太棒了', '2021-02-03 13:39:33', '2021-02-03 13:39:33', '2', '2');
INSERT INTO `blog_comment` VALUES ('3', '太厉害了', '2021-02-03 13:39:48', '2021-02-03 13:39:48', '3', '1');
INSERT INTO `blog_comment` VALUES ('4', '说的太有道理了', '2021-02-03 13:40:10', '2021-02-03 13:40:10', '4', '3');
INSERT INTO `blog_comment` VALUES ('5', '3', '2021-02-03 13:40:20', '2021-02-03 13:40:20', '1', '1');
INSERT INTO `blog_comment` VALUES ('6', '4', '2021-02-03 13:40:25', '2021-02-03 13:40:25', '2', '3');

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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

-- ----------------------------
-- Records of blog_user
-- ----------------------------
INSERT INTO `blog_user` VALUES ('1', '1', '$2y$10$kIZxSMcgbCAgCpiJLQNRh.8w6KkZAaMD9nVBVopxCpHX2FKGN9Sra', '连蓓', 'default.png');
INSERT INTO `blog_user` VALUES ('2', '2', '2', '老大', 'default.png');
INSERT INTO `blog_user` VALUES ('3', '3', '3', '⁮杨倩', 'default.png');
INSERT INTO `blog_user` VALUES ('4', '4', '4', '洪国忠', 'default.png');
INSERT INTO `blog_user` VALUES ('5', '12', '12', '12', 'default.png');
INSERT INTO `blog_user` VALUES ('6', '42', '42', '42', 'default.png');
