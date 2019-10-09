/*
Navicat MySQL Data Transfer

Source Server         : 本地
Source Server Version : 50719
Source Host           : localhost:3306
Source Database       : chenlicong

Target Server Type    : MYSQL
Target Server Version : 50719
File Encoding         : 65001

Date: 2019-04-01 09:09:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `clc_articles`
-- ----------------------------
DROP TABLE IF EXISTS `clc_articles`;
CREATE TABLE `clc_articles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `title` varchar(150) NOT NULL,
  `short_title` varchar(100) NOT NULL COMMENT '短标题',
  `category_id` int(11) NOT NULL COMMENT '分类id',
  `keywords` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL COMMENT '标签',
  `content` text NOT NULL,
  `author` varchar(63) DEFAULT NULL,
  `author_url` varchar(150) DEFAULT NULL,
  `clicks` int(11) unsigned NOT NULL DEFAULT '0',
  `comments` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '评论数',
  `is_recommend` tinyint(4) unsigned NOT NULL DEFAULT '0' COMMENT '是否推荐',
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  `delete` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of clc_articles
-- ----------------------------

-- ----------------------------
-- Table structure for `clc_article_categorys`
-- ----------------------------
DROP TABLE IF EXISTS `clc_article_categorys`;
CREATE TABLE `clc_article_categorys` (
  `id` int(11) NOT NULL,
  `name` varchar(31) NOT NULL,
  `alias` varchar(31) NOT NULL COMMENT '别名',
  `head` char(1) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `level` tinyint(4) unsigned DEFAULT '1' COMMENT '分类级别',
  `is_show` tinyint(4) unsigned DEFAULT '1',
  `sort` int(11) unsigned DEFAULT '0' COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of clc_article_categorys
-- ----------------------------

-- ----------------------------
-- Table structure for `clc_comments`
-- ----------------------------
DROP TABLE IF EXISTS `clc_comments`;
CREATE TABLE `clc_comments` (
  `id` int(11) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `article_id` int(11) unsigned NOT NULL,
  `content` varchar(255) NOT NULL,
  `create_time` int(11) NOT NULL,
  `create_ip` char(15) NOT NULL,
  `create_device` varchar(31) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of clc_comments
-- ----------------------------

-- ----------------------------
-- Table structure for `clc_levels`
-- ----------------------------
DROP TABLE IF EXISTS `clc_levels`;
CREATE TABLE `clc_levels` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `points` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '积分',
  `sort` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of clc_levels
-- ----------------------------

-- ----------------------------
-- Table structure for `clc_tags`
-- ----------------------------
DROP TABLE IF EXISTS `clc_tags`;
CREATE TABLE `clc_tags` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(31) NOT NULL,
  `number` int(11) NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `color` varchar(31) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of clc_tags
-- ----------------------------

-- ----------------------------
-- Table structure for `clc_users`
-- ----------------------------
DROP TABLE IF EXISTS `clc_users`;
CREATE TABLE `clc_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL COMMENT '用户名',
  `password` varchar(255) NOT NULL COMMENT '密码',
  `sex` tinyint(4) unsigned NOT NULL DEFAULT '1' COMMENT '性别',
  `email` varchar(255) DEFAULT NULL,
  `mobile` int(11) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL COMMENT '头像',
  `register_time` int(11) unsigned NOT NULL,
  `register_ip` char(15) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `is_admin` tinyint(4) unsigned zerofill DEFAULT '0000' COMMENT '是否管理员',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of clc_users
-- ----------------------------
