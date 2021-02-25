/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100417
 Source Host           : localhost:3306
 Source Schema         : bookshop

 Target Server Type    : MySQL
 Target Server Version : 100417
 File Encoding         : 65001

 Date: 25/02/2021 14:09:08
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for shop_customer
-- ----------------------------
DROP TABLE IF EXISTS `shop_customer`;
CREATE TABLE `shop_customer`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '用户名',
  `pw` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '登录密码',
  `tname` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '直实姓名',
  `phone` char(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '用户手机',
  `tel` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '固定电话',
  `qq` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '用户QQ',
  `email` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '用户email',
  `atime` int(10) UNSIGNED NULL DEFAULT 0 COMMENT '用户注册时间',
  `ltime` int(10) UNSIGNED NULL DEFAULT 0 COMMENT '用户上次登录时间',
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '用户地址',
  `company` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '用户公司',
  `country` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `region` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 24 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of shop_customer
-- ----------------------------
INSERT INTO `shop_customer` VALUES (6, 'user001', '98dcbf57fd76b1f742a6441fb7974b04', '', '', '', '490198372', 'user001@eduwork.cn', 1597907137, 1598594532, '3 Wootoona CT.Mulgrave', '', '', '');
INSERT INTO `shop_customer` VALUES (7, 'user020', '123456', '', '', '', '490198373', 'user002@eduwork.cn', 1597907167, 1597907417, '3 Wootoona CT.Mulgrave', '', '', '');
INSERT INTO `shop_customer` VALUES (8, 'user003', '8a716f9db0acc9add7c515c882c1e090', '', '', '', '490198374', 'user003@lmonkey.com', 1597907201, 1597915338, '3 Wootoona CT.Mulgrave', '', '', '');
INSERT INTO `shop_customer` VALUES (13, 'user111', '123456', '', '1881888888', '', '490198375', 'user008@ewshop.cn', 1598594848, 1598594848, '3 Wootoona CT.Mulgrave', '', '', '');
INSERT INTO `shop_customer` VALUES (15, 'user010', 'cf0c076bc5a22e1d1be3dc1420eddbc6', 'Simon', '0416481373', '', '5801983726', 'user010@eduwork.cn', 1598595019, 1598859466, '3 Wootoona CT.Mulgrave', '', '', '');
INSERT INTO `shop_customer` VALUES (16, 'php', 'eyJpdiI6InJSaWJGRVZmQkNqdXdYZmlWejQyOGc9PSIsInZhbHVlIjoiNlc1MllUcFZyRmhwY3JUQldvWnJUUT09IiwibWFjIjoiNTE0MWJjOTExMDg1MGM0NWNkOWIwNDlkZWZjMDVjYmZjODE0NmJhOTNlMjkxNzAyOGVhNGI4ZGE1ZGM0OTlhYyJ9', NULL, NULL, NULL, NULL, '490198372@qq.com', 0, 0, 'Shenben St', 'ABC', 'China', 'Heilongjiang');
INSERT INTO `shop_customer` VALUES (17, 'php', 'eyJpdiI6Im94bit6RUc5OTBhdW9mOXlWdHFnV0E9PSIsInZhbHVlIjoibjc5TnhsNTEvRTNUNEpJeVMwYmUrQT09IiwibWFjIjoiZDZmYmQ1NDAwMDgwNmVkNmI1YWJmOGUxMjBjMzVjZTRiNjQ0MWFmN2ZkMWYzZWI0NWI4NjY5MDMxZGM1YmUzMSJ9', NULL, NULL, NULL, NULL, '490198372@qq.com', 0, 0, 'Shenben St', 'ABC', 'China', 'Heilongjiang');
INSERT INTO `shop_customer` VALUES (18, 'user001', 'eyJpdiI6IkFoVC9LVmZMRmlieVpCRlhmTWo2MEE9PSIsInZhbHVlIjoiT0d5cVFHUkpDYW1QNUZWTkM4c3dMQT09IiwibWFjIjoiNjc5MzVmZWNjMTc1MTQ2NzZjZjkxNzdmMjY3ODFjYzI2NjBmODRjYmMwMDg0ZWU5OWJmZDI2ZDdmOGU4MDIwYiJ9', NULL, NULL, NULL, NULL, '490198372@qq.com', 0, 0, 'Shenben St', 'ABC', 'China', 'Heilongjiang');
INSERT INTO `shop_customer` VALUES (19, 'simon2', 'eyJpdiI6InJXdElqZTlmOGF2dEo2OGZMcGNOT2c9PSIsInZhbHVlIjoiSmtsem1wSUhBZFFpQlVOaXJWeXRHdz09IiwibWFjIjoiOTk1ZTJmNzBlMjllOWM1MGJkMzc4MGQzNjNhYThkYjg2ODQwNTliMzEzNGQyNTExODBiMzQyZGE2YjNlOGFhYyJ9', NULL, NULL, NULL, NULL, '490198372@qq.com', 0, 0, 'Shenben St', 'ABC', 'China', 'Heilongjiang');
INSERT INTO `shop_customer` VALUES (20, 'simon7', 'eyJpdiI6InB5cVlYR2w0eVltMDV1NDg3QmdlcVE9PSIsInZhbHVlIjoiUjBxS2NNakxvUlp6bFpuNlFVL2dUdz09IiwibWFjIjoiZTAwNzQwZjQwNGE1ZDdmNThmMTY5N2ZlODhiODI3YzgxZjk0MmQyYTY0YmJlOGFkN2U4ZTkzM2I0ZTI1YzJjNiJ9', NULL, NULL, NULL, NULL, '490198372@qq.com', 0, 0, 'Shenben St', 'ABC', 'China', 'Heilongjiang');
INSERT INTO `shop_customer` VALUES (21, 'simon7', 'eyJpdiI6ImhnY01WTkZGUkE3ZDc0RVpKZk8rZVE9PSIsInZhbHVlIjoiRVlRM1pRT3RaZFBkY2JUdkNjdnlxZz09IiwibWFjIjoiYTc4MTQxN2JkYjE0ZTMxZWZjNWI2ZjJiZGYyMjIxYWIxYzA5NTE0MDUzZmI3ZDE5NTVkZDc2NThhZjRhOGM2YSJ9', NULL, NULL, NULL, NULL, '490198372@qq.com', 0, 0, 'Shenben St', 'ABC', 'China', 'Heilongjiang');
INSERT INTO `shop_customer` VALUES (22, 'user001', 'eyJpdiI6Iitya251RTVTYlN3bk5xKzVBdzZRc0E9PSIsInZhbHVlIjoiQzBSd00vUTd0VUlsenZJRjdCRDRGZz09IiwibWFjIjoiMzk0YzU2ZDM3N2UwZWY3N2FmN2RhMWJlYzZmNjBiOWM5OWEyMzEwMGY5ZWRjNzBkZjg0M2RhYTYwMTkyYTEwYSJ9', NULL, NULL, NULL, NULL, '490198372@qq.com', 0, 0, 'Shenben St', 'ABC', 'China', 'Heilongjiang');
INSERT INTO `shop_customer` VALUES (23, 'simon8', 'eyJpdiI6InNmV1JROUkwVmFld1gvQkdBUHRvM2c9PSIsInZhbHVlIjoiOHl1WkNHOU9KVWlOaXl5T2JNQk9LUT09IiwibWFjIjoiY2YxNjg1ZGJjMDc0NjMxMDgxZjAyNmUwOTFmODBjODZjYzQ1ODNkYjk4YTFhMzczOGQ0ZWZjYTY2YmU4YWEyOSJ9', NULL, NULL, NULL, NULL, '490198372@qq.com', 0, 0, 'Shenben St', 'ABC', 'China', 'Heilongjiang');

-- ----------------------------
-- Table structure for shop_customer_permission
-- ----------------------------
DROP TABLE IF EXISTS `shop_customer_permission`;
CREATE TABLE `shop_customer_permission`  (
  `id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of shop_customer_permission
-- ----------------------------
INSERT INTO `shop_customer_permission` VALUES (8, 3);
INSERT INTO `shop_customer_permission` VALUES (7, 3);
INSERT INTO `shop_customer_permission` VALUES (7, 4);
INSERT INTO `shop_customer_permission` VALUES (7, 2);
INSERT INTO `shop_customer_permission` VALUES (6, 1);
INSERT INTO `shop_customer_permission` VALUES (6, 2);

-- ----------------------------
-- Table structure for shop_customer_role
-- ----------------------------
DROP TABLE IF EXISTS `shop_customer_role`;
CREATE TABLE `shop_customer_role`  (
  `id` int(11) NOT NULL COMMENT '用户表在关联表中的外键',
  `role_id` int(11) NOT NULL COMMENT '角色表在关联表的外键'
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of shop_customer_role
-- ----------------------------
INSERT INTO `shop_customer_role` VALUES (6, 1);
INSERT INTO `shop_customer_role` VALUES (6, 2);
INSERT INTO `shop_customer_role` VALUES (6, 3);

-- ----------------------------
-- Table structure for shop_migrations
-- ----------------------------
DROP TABLE IF EXISTS `shop_migrations`;
CREATE TABLE `shop_migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of shop_migrations
-- ----------------------------
INSERT INTO `shop_migrations` VALUES (4, '2014_10_12_000000_create_users_table', 1);

-- ----------------------------
-- Table structure for shop_permission
-- ----------------------------
DROP TABLE IF EXISTS `shop_permission`;
CREATE TABLE `shop_permission`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '权限表',
  `per_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '权限的名称',
  `per_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '权限对应的路由',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 10 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of shop_permission
-- ----------------------------
INSERT INTO `shop_permission` VALUES (1, 'Access Vip Shop', 'App\\Http\\Controllers\\Admin\\LoginController@index');
INSERT INTO `shop_permission` VALUES (2, 'Setting', 'App\\Http\\Controllers\\Admin\\UserController@create');
INSERT INTO `shop_permission` VALUES (3, 'Notice', 'App\\Http\\Controllers\\Admin\\UserController@edit');
INSERT INTO `shop_permission` VALUES (4, 'Collect', 'App\\Http\\Controllers\\Admin\\LoginController@welcome');
INSERT INTO `shop_permission` VALUES (5, 'Pre_order', 'App\\Http\\Controllers\\Admin\\ArticleController@create');

-- ----------------------------
-- Table structure for shop_product
-- ----------------------------
DROP TABLE IF EXISTS `shop_product`;
CREATE TABLE `shop_product`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '商品id',
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '商品名称',
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '商品描述',
  `logo` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '商品logo',
  `money` decimal(10, 1) UNSIGNED NOT NULL DEFAULT 0 COMMENT '商品商城价',
  `smoney` decimal(10, 1) UNSIGNED NOT NULL DEFAULT 0 COMMENT '商品市场价',
  `wlmoney` decimal(5, 1) UNSIGNED NOT NULL DEFAULT 0 COMMENT '商品物流价',
  `mark` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '商品货号',
  `weight` decimal(7, 2) NOT NULL COMMENT '商品尺寸',
  `state` tinyint(1) UNSIGNED NOT NULL DEFAULT 1 COMMENT '商品状态',
  `atime` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '商品发布时间',
  `num` smallint(5) UNSIGNED NOT NULL COMMENT '商品库存数',
  `sellnum` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '商品销售数',
  `clicknum` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '商品点击数',
  `collectnum` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '商品收藏数',
  `asknum` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '商品咨询数',
  `commentnum` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '商品评价数',
  `istuijian` tinyint(1) UNSIGNED NOT NULL DEFAULT 0 COMMENT '商品推荐',
  `istj` tinyint(1) UNSIGNED NOT NULL DEFAULT 0 COMMENT '特价商品',
  `cid` smallint(5) UNSIGNED NOT NULL COMMENT '商品分类id',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `product_cid`(`cid`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 900 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of shop_product
-- ----------------------------
INSERT INTO `shop_product` VALUES (761, '《产品经理手册》', '<div id=\"detail-tag-id-2\" class=\"book-detail-item\" style=\"margin: 0px 20px; padding: 20px 0px 0px; overflow: hidden; color: #666666; font-family: tahoma, arial, \'Microsoft YaHei\', \'Hiragino Sans GB\', u5b8bu4f53, sans-serif; font-size: 12px; background-color: #ffffff;\">\r\n<div class=\"item-mc\" style=\"margin: 0px; padding: 18px 10px 0px;\">\r\n<div class=\"book-detail-content\" style=\"margin: 0px; padding: 0px; line-height: 24px; font-size: 14px;\"><span style=\"margin: 0px; padding: 0px; color: red;\">适读人群 ：本书针对于JavaScript语言的初学者、对ES6标准（在此标准中开发了诸多JavaScript新特性）的新技术研究者以及JavaScript开发者中的对基础知识、底层原理、优化效率的求知者。</span><br />\r\n<p style=\"margin: 0px; padding: 0px;\">本书内容是纯JavaScript语言部分，和浏览器无关，包括JavaScript基本语法、数据类型、流程控制、函数、对象、数组和内置对象，所有知识点都是为了学习DOM编程、Node.js、JS框架等JavaScript高级部分做准备。本书虽然是JavaScript的基础部分，但全书内容都需要牢牢掌握，才能更好地晋级学习。</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"detail-tag-id-3\" class=\"book-detail-item\" style=\"margin: 0px 20px; padding: 20px 0px 0px; overflow: hidden; color: #666666; font-family: tahoma, arial, \'Microsoft YaHei\', \'Hiragino Sans GB\', u5b8bu4f53, sans-serif; font-size: 12px; background-color: #ffffff;\">\r\n<div class=\"item-mt\" style=\"margin: 0px; padding: 0px; height: 25px; border-bottom: 3px solid #e4393c;\">\r\n<h3 style=\"margin: 0px; padding: 0px 0px 0px 20px; font-size: 14px; line-height: 28px; width: 99px; height: 25px; overflow: hidden; color: #ffffff; background: url(\'//static.360buyimg.com/item/unite/1.0.103/components/book/css/i/item.sprite.png\') 0px -13px no-repeat;\">内容简介</h3>\r\n</div>\r\n<div class=\"item-mc\" style=\"margin: 0px; padding: 18px 10px 0px;\">\r\n<div class=\"book-detail-content\" style=\"margin: 0px; padding: 0px; line-height: 24px; font-size: 14px;\">\r\n<p style=\"margin: 0px; padding: 0px;\">本书的重点是JavaScript语言的基础语法，它是JavaScript能够实现高级特效的必要前提。本书通过*通俗的方式讲解了JavaScript语言中的变量、数据结构、运算符、语句、函数、对象等知识。虽然本书内容只是JavaScript的基础，和网页没有关系，并不能实现太多页面中的特效，但本书能够起到**的作用，能够带你走进JavaScript的微妙世界，是学习前端*核心的内容。本书是&ldquo;跟兄弟连学HTML5系列教程&rdquo;的第二本书，在知识体系方面需要先掌握系列图书**本《细说网页制作》中的一部分内容，同时为读者之后学习同系列其他图书做铺垫。<br /><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"http://shop.eduwork.cn/uploads/article/2020-0820-5f3e17b77b5c0.png\" alt=\"cp1.png\" width=\"400\" height=\"400\" /></p>\r\n</div>\r\n</div>\r\n</div>', '2020-0820-5f3e17d6ed7e8.png', 45.0, 76.0, 8.0, '3443', 0.00, 1, 1597904854, 32, 4, 0, 10, 0, 0, 0, 1, 19);
INSERT INTO `shop_product` VALUES (760, '《Linux私房菜》', '<div id=\"detail-tag-id-2\" class=\"book-detail-item\" style=\"margin: 0px 20px; padding: 20px 0px 0px; overflow: hidden; color: #666666; font-family: tahoma, arial, \'Microsoft YaHei\', \'Hiragino Sans GB\', u5b8bu4f53, sans-serif; font-size: 12px; background-color: #ffffff;\">\r\n<div class=\"item-mc\" style=\"margin: 0px; padding: 18px 10px 0px;\">\r\n<div class=\"book-detail-content\" style=\"margin: 0px; padding: 0px; line-height: 24px; font-size: 14px;\"><span style=\"margin: 0px; padding: 0px; color: red;\">适读人群 ：本书针对于JavaScript语言的初学者、对ES6标准（在此标准中开发了诸多JavaScript新特性）的新技术研究者以及JavaScript开发者中的对基础知识、底层原理、优化效率的求知者。</span><br />\r\n<p style=\"margin: 0px; padding: 0px;\">本书内容是纯JavaScript语言部分，和浏览器无关，包括JavaScript基本语法、数据类型、流程控制、函数、对象、数组和内置对象，所有知识点都是为了学习DOM编程、Node.js、JS框架等JavaScript高级部分做准备。本书虽然是JavaScript的基础部分，但全书内容都需要牢牢掌握，才能更好地晋级学习。</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"detail-tag-id-3\" class=\"book-detail-item\" style=\"margin: 0px 20px; padding: 20px 0px 0px; overflow: hidden; color: #666666; font-family: tahoma, arial, \'Microsoft YaHei\', \'Hiragino Sans GB\', u5b8bu4f53, sans-serif; font-size: 12px; background-color: #ffffff;\">\r\n<div class=\"item-mt\" style=\"margin: 0px; padding: 0px; height: 25px; border-bottom: 3px solid #e4393c;\">\r\n<h3 style=\"margin: 0px; padding: 0px 0px 0px 20px; font-size: 14px; line-height: 28px; width: 99px; height: 25px; overflow: hidden; color: #ffffff; background: url(\'//static.360buyimg.com/item/unite/1.0.103/components/book/css/i/item.sprite.png\') 0px -13px no-repeat;\">内容简介</h3>\r\n</div>\r\n<div class=\"item-mc\" style=\"margin: 0px; padding: 18px 10px 0px;\">\r\n<div class=\"book-detail-content\" style=\"margin: 0px; padding: 0px; line-height: 24px; font-size: 14px;\">\r\n<p style=\"margin: 0px; padding: 0px;\">本书的重点是JavaScript语言的基础语法，它是JavaScript能够实现高级特效的必要前提。本书通过*通俗的方式讲解了JavaScript语言中的变量、数据结构、运算符、语句、函数、对象等知识。虽然本书内容只是JavaScript的基础，和网页没有关系，并不能实现太多页面中的特效，但本书能够起到**的作用，能够带你走进JavaScript的微妙世界，是学习前端*核心的内容。本书是&ldquo;跟兄弟连学HTML5系列教程&rdquo;的第二本书，在知识体系方面需要先掌握系列图书**本《细说网页制作》中的一部分内容，同时为读者之后学习同系列其他图书做铺垫。<br /><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"http://shop.eduwork.cn/uploads/article/2020-0820-5f3e1775d9749.png\" alt=\"yjs2.png\" width=\"400\" height=\"400\" /></p>\r\n</div>\r\n</div>\r\n</div>', '2020-0820-5f3e177b79824.png', 55.0, 76.0, 9.0, '323', 0.00, 1, 1597904763, 23, 0, 0, 0, 0, 0, 0, 1, 18);
INSERT INTO `shop_product` VALUES (759, '《Linux命令大全》', '<div id=\"detail-tag-id-2\" class=\"book-detail-item\" style=\"margin: 0px 20px; padding: 20px 0px 0px; overflow: hidden; color: #666666; font-family: tahoma, arial, \'Microsoft YaHei\', \'Hiragino Sans GB\', u5b8bu4f53, sans-serif; font-size: 12px; background-color: #ffffff;\">\r\n<div class=\"item-mc\" style=\"margin: 0px; padding: 18px 10px 0px;\">\r\n<div class=\"book-detail-content\" style=\"margin: 0px; padding: 0px; line-height: 24px; font-size: 14px;\"><span style=\"margin: 0px; padding: 0px; color: red;\">适读人群 ：本书针对于JavaScript语言的初学者、对ES6标准（在此标准中开发了诸多JavaScript新特性）的新技术研究者以及JavaScript开发者中的对基础知识、底层原理、优化效率的求知者。</span><br />\r\n<p style=\"margin: 0px; padding: 0px;\">本书内容是纯JavaScript语言部分，和浏览器无关，包括JavaScript基本语法、数据类型、流程控制、函数、对象、数组和内置对象，所有知识点都是为了学习DOM编程、Node.js、JS框架等JavaScript高级部分做准备。本书虽然是JavaScript的基础部分，但全书内容都需要牢牢掌握，才能更好地晋级学习。</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"detail-tag-id-3\" class=\"book-detail-item\" style=\"margin: 0px 20px; padding: 20px 0px 0px; overflow: hidden; color: #666666; font-family: tahoma, arial, \'Microsoft YaHei\', \'Hiragino Sans GB\', u5b8bu4f53, sans-serif; font-size: 12px; background-color: #ffffff;\">\r\n<div class=\"item-mt\" style=\"margin: 0px; padding: 0px; height: 25px; border-bottom: 3px solid #e4393c;\">\r\n<h3 style=\"margin: 0px; padding: 0px 0px 0px 20px; font-size: 14px; line-height: 28px; width: 99px; height: 25px; overflow: hidden; color: #ffffff; background: url(\'//static.360buyimg.com/item/unite/1.0.103/components/book/css/i/item.sprite.png\') 0px -13px no-repeat;\">内容简介</h3>\r\n</div>\r\n<div class=\"item-mc\" style=\"margin: 0px; padding: 18px 10px 0px;\">\r\n<div class=\"book-detail-content\" style=\"margin: 0px; padding: 0px; line-height: 24px; font-size: 14px;\">\r\n<p style=\"margin: 0px; padding: 0px;\">本书的重点是JavaScript语言的基础语法，它是JavaScript能够实现高级特效的必要前提。本书通过*通俗的方式讲解了JavaScript语言中的变量、数据结构、运算符、语句、函数、对象等知识。虽然本书内容只是JavaScript的基础，和网页没有关系，并不能实现太多页面中的特效，但本书能够起到**的作用，能够带你走进JavaScript的微妙世界，是学习前端*核心的内容。本书是&ldquo;跟兄弟连学HTML5系列教程&rdquo;的第二本书，在知识体系方面需要先掌握系列图书**本《细说网页制作》中的一部分内容，同时为读者之后学习同系列其他图书做铺垫。<br /><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"http://shop.eduwork.cn/uploads/article/2020-0820-5f3e173057489.png\" alt=\"yjs1.png\" width=\"400\" height=\"400\" /></p>\r\n</div>\r\n</div>\r\n</div>', '2020-0820-5f3e1745869a5.png', 55.0, 98.0, 5.0, '2332', 0.00, 1, 1597904709, 32, 0, 0, 0, 0, 0, 0, 1, 18);
INSERT INTO `shop_product` VALUES (758, '《Java程序设计》', '<div id=\"detail-tag-id-2\" class=\"book-detail-item\" style=\"margin: 0px 20px; padding: 20px 0px 0px; overflow: hidden; color: #666666; font-family: tahoma, arial, \'Microsoft YaHei\', \'Hiragino Sans GB\', u5b8bu4f53, sans-serif; font-size: 12px; background-color: #ffffff;\">\r\n<div class=\"item-mc\" style=\"margin: 0px; padding: 18px 10px 0px;\">\r\n<div class=\"book-detail-content\" style=\"margin: 0px; padding: 0px; line-height: 24px; font-size: 14px;\"><span style=\"margin: 0px; padding: 0px; color: red;\">适读人群 ：本书针对于JavaScript语言的初学者、对ES6标准（在此标准中开发了诸多JavaScript新特性）的新技术研究者以及JavaScript开发者中的对基础知识、底层原理、优化效率的求知者。</span><br />\r\n<p style=\"margin: 0px; padding: 0px;\">本书内容是纯JavaScript语言部分，和浏览器无关，包括JavaScript基本语法、数据类型、流程控制、函数、对象、数组和内置对象，所有知识点都是为了学习DOM编程、Node.js、JS框架等JavaScript高级部分做准备。本书虽然是JavaScript的基础部分，但全书内容都需要牢牢掌握，才能更好地晋级学习。</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"detail-tag-id-3\" class=\"book-detail-item\" style=\"margin: 0px 20px; padding: 20px 0px 0px; overflow: hidden; color: #666666; font-family: tahoma, arial, \'Microsoft YaHei\', \'Hiragino Sans GB\', u5b8bu4f53, sans-serif; font-size: 12px; background-color: #ffffff;\">\r\n<div class=\"item-mt\" style=\"margin: 0px; padding: 0px; height: 25px; border-bottom: 3px solid #e4393c;\">\r\n<h3 style=\"margin: 0px; padding: 0px 0px 0px 20px; font-size: 14px; line-height: 28px; width: 99px; height: 25px; overflow: hidden; color: #ffffff; background: url(\'//static.360buyimg.com/item/unite/1.0.103/components/book/css/i/item.sprite.png\') 0px -13px no-repeat;\">内容简介</h3>\r\n</div>\r\n<div class=\"item-mc\" style=\"margin: 0px; padding: 18px 10px 0px;\">\r\n<div class=\"book-detail-content\" style=\"margin: 0px; padding: 0px; line-height: 24px; font-size: 14px;\">\r\n<p style=\"margin: 0px; padding: 0px;\">本书的重点是JavaScript语言的基础语法，它是JavaScript能够实现高级特效的必要前提。本书通过*通俗的方式讲解了JavaScript语言中的变量、数据结构、运算符、语句、函数、对象等知识。虽然本书内容只是JavaScript的基础，和网页没有关系，并不能实现太多页面中的特效，但本书能够起到**的作用，能够带你走进JavaScript的微妙世界，是学习前端*核心的内容。本书是&ldquo;跟兄弟连学HTML5系列教程&rdquo;的第二本书，在知识体系方面需要先掌握系列图书**本《细说网页制作》中的一部分内容，同时为读者之后学习同系列其他图书做铺垫。<br /><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"http://shop.eduwork.cn/uploads/article/2020-0820-5f3e16d8e9a3d.png\" alt=\"java3.png\" width=\"400\" height=\"400\" /></p>\r\n</div>\r\n</div>\r\n</div>', '2020-0820-5f3e16f27f829.png', 108.0, 135.0, 12.0, '2222', 0.00, 1, 1597904626, 30, 2, 1, 0, 0, 0, 0, 1, 16);
INSERT INTO `shop_product` VALUES (757, '《Java核心编程》', '<div id=\"detail-tag-id-2\" class=\"book-detail-item\" style=\"margin: 0px 20px; padding: 20px 0px 0px; overflow: hidden; color: #666666; font-family: tahoma, arial, \'Microsoft YaHei\', \'Hiragino Sans GB\', u5b8bu4f53, sans-serif; font-size: 12px; background-color: #ffffff;\">\r\n<div class=\"item-mc\" style=\"margin: 0px; padding: 18px 10px 0px;\">\r\n<div class=\"book-detail-content\" style=\"margin: 0px; padding: 0px; line-height: 24px; font-size: 14px;\"><span style=\"margin: 0px; padding: 0px; color: red;\">适读人群 ：本书针对于JavaScript语言的初学者、对ES6标准（在此标准中开发了诸多JavaScript新特性）的新技术研究者以及JavaScript开发者中的对基础知识、底层原理、优化效率的求知者。</span><br />\r\n<p style=\"margin: 0px; padding: 0px;\">本书内容是纯JavaScript语言部分，和浏览器无关，包括JavaScript基本语法、数据类型、流程控制、函数、对象、数组和内置对象，所有知识点都是为了学习DOM编程、Node.js、JS框架等JavaScript高级部分做准备。本书虽然是JavaScript的基础部分，但全书内容都需要牢牢掌握，才能更好地晋级学习。</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"detail-tag-id-3\" class=\"book-detail-item\" style=\"margin: 0px 20px; padding: 20px 0px 0px; overflow: hidden; color: #666666; font-family: tahoma, arial, \'Microsoft YaHei\', \'Hiragino Sans GB\', u5b8bu4f53, sans-serif; font-size: 12px; background-color: #ffffff;\">\r\n<div class=\"item-mt\" style=\"margin: 0px; padding: 0px; height: 25px; border-bottom: 3px solid #e4393c;\">\r\n<h3 style=\"margin: 0px; padding: 0px 0px 0px 20px; font-size: 14px; line-height: 28px; width: 99px; height: 25px; overflow: hidden; color: #ffffff; background: url(\'//static.360buyimg.com/item/unite/1.0.103/components/book/css/i/item.sprite.png\') 0px -13px no-repeat;\">内容简介</h3>\r\n</div>\r\n<div class=\"item-mc\" style=\"margin: 0px; padding: 18px 10px 0px;\">\r\n<div class=\"book-detail-content\" style=\"margin: 0px; padding: 0px; line-height: 24px; font-size: 14px;\">\r\n<p style=\"margin: 0px; padding: 0px;\">本书的重点是JavaScript语言的基础语法，它是JavaScript能够实现高级特效的必要前提。本书通过*通俗的方式讲解了JavaScript语言中的变量、数据结构、运算符、语句、函数、对象等知识。虽然本书内容只是JavaScript的基础，和网页没有关系，并不能实现太多页面中的特效，但本书能够起到**的作用，能够带你走进JavaScript的微妙世界，是学习前端*核心的内容。本书是&ldquo;跟兄弟连学HTML5系列教程&rdquo;的第二本书，在知识体系方面需要先掌握系列图书**本《细说网页制作》中的一部分内容，同时为读者之后学习同系列其他图书做铺垫。<br /><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"http://shop.eduwork.cn/uploads/article/2020-0820-5f3e16a03b32e.png\" alt=\"java2.png\" width=\"400\" height=\"400\" /></p>\r\n</div>\r\n</div>\r\n</div>', '2020-0820-5f3e16c2aba88.png', 32.0, 76.0, 9.0, '1221', 0.00, 1, 1597904578, 43, 0, 1, 0, 0, 0, 0, 1, 16);
INSERT INTO `shop_product` VALUES (754, '《人工智能》', '<img src=\"http://shop.eduwork.cn/uploads/article/2020-0820-5f3e156693783.jpg\" alt=\"qq2.jpg\" width=\"750\" height=\"6028\" />', '2020-0820-5f3e156b2c657.png', 45.0, 79.0, 8.0, '0089', 0.00, 1, 1597904235, 2330, 2, 2, 0, 0, 0, 0, 1, 14);
INSERT INTO `shop_product` VALUES (755, '《机器学习》', '<img src=\"http://shop.eduwork.cn/uploads/article/2020-0820-5f3e15b549484.jpg\" alt=\"34.jpg\" width=\"800\" height=\"1800\" />', '2020-0820-5f3e15bc69891.png', 76.0, 98.0, 0.0, '7645', 0.00, 1, 1597904316, 28, 2, 3, 0, 0, 0, 0, 1, 14);
INSERT INTO `shop_product` VALUES (756, '《Java从入门到精通》', '<div id=\"detail-tag-id-2\" class=\"book-detail-item\" style=\"margin: 0px 20px; padding: 20px 0px 0px; overflow: hidden; color: #666666; font-family: tahoma, arial, \'Microsoft YaHei\', \'Hiragino Sans GB\', u5b8bu4f53, sans-serif; font-size: 12px; background-color: #ffffff;\">\r\n<div class=\"item-mc\" style=\"margin: 0px; padding: 18px 10px 0px;\">\r\n<div class=\"book-detail-content\" style=\"margin: 0px; padding: 0px; line-height: 24px; font-size: 14px;\"><span style=\"margin: 0px; padding: 0px; color: red;\">适读人群 ：本书针对于JavaScript语言的初学者、对ES6标准（在此标准中开发了诸多JavaScript新特性）的新技术研究者以及JavaScript开发者中的对基础知识、底层原理、优化效率的求知者。</span><br />\r\n<p style=\"margin: 0px; padding: 0px;\">本书内容是纯JavaScript语言部分，和浏览器无关，包括JavaScript基本语法、数据类型、流程控制、函数、对象、数组和内置对象，所有知识点都是为了学习DOM编程、Node.js、JS框架等JavaScript高级部分做准备。本书虽然是JavaScript的基础部分，但全书内容都需要牢牢掌握，才能更好地晋级学习。</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"detail-tag-id-3\" class=\"book-detail-item\" style=\"margin: 0px 20px; padding: 20px 0px 0px; overflow: hidden; color: #666666; font-family: tahoma, arial, \'Microsoft YaHei\', \'Hiragino Sans GB\', u5b8bu4f53, sans-serif; font-size: 12px; background-color: #ffffff;\">\r\n<div class=\"item-mt\" style=\"margin: 0px; padding: 0px; height: 25px; border-bottom: 3px solid #e4393c;\">\r\n<h3 style=\"margin: 0px; padding: 0px 0px 0px 20px; font-size: 14px; line-height: 28px; width: 99px; height: 25px; overflow: hidden; color: #ffffff; background: url(\'//static.360buyimg.com/item/unite/1.0.103/components/book/css/i/item.sprite.png\') 0px -13px no-repeat;\">内容简介</h3>\r\n</div>\r\n<div class=\"item-mc\" style=\"margin: 0px; padding: 18px 10px 0px;\">\r\n<div class=\"book-detail-content\" style=\"margin: 0px; padding: 0px; line-height: 24px; font-size: 14px;\">\r\n<p style=\"margin: 0px; padding: 0px;\">本书的重点是JavaScript语言的基础语法，它是JavaScript能够实现高级特效的必要前提。本书通过*通俗的方式讲解了JavaScript语言中的变量、数据结构、运算符、语句、函数、对象等知识。虽然本书内容只是JavaScript的基础，和网页没有关系，并不能实现太多页面中的特效，但本书能够起到**的作用，能够带你走进JavaScript的微妙世界，是学习前端*核心的内容。本书是&ldquo;跟兄弟连学HTML5系列教程&rdquo;的第二本书，在知识体系方面需要先掌握系列图书**本《细说网页制作》中的一部分内容，同时为读者之后学习同系列其他图书做铺垫。<br /><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"http://shop.eduwork.cn/uploads/article/2020-0820-5f3e166233a12.png\" alt=\"java1.png\" width=\"400\" height=\"400\" /></p>\r\n</div>\r\n</div>\r\n</div>', '2020-0820-5f3e1687b16e5.png', 118.0, 159.0, 0.0, '1322', 0.00, 1, 1597904519, 12, 0, 0, 0, 0, 0, 0, 1, 16);
INSERT INTO `shop_product` VALUES (753, '《区块链》', '<img src=\"http://shop.eduwork.cn/uploads/article/2020-0820-5f3e1522b0b1e.jpg\" alt=\"qq.jpg\" width=\"750\" height=\"13291\" />', '2020-0820-5f3e152e57d13.png', 32.0, 76.0, 0.0, '0121', 0.00, 1, 1597904174, 12, 0, 0, 0, 0, 0, 0, 1, 14);
INSERT INTO `shop_product` VALUES (752, '《细说JavaScript》', '<span style=\"color: #666666; font-family: tahoma, arial, \'Microsoft YaHei\', \'Hiragino Sans GB\', u5b8bu4f53, sans-serif; font-size: 14px; background-color: #ffffff;\">通过本书的学习，能快速上手网站前端开发。为了使HTML5语言能被读者更好地掌握和应用，同时作为&ldquo;跟兄弟连学HTML5系列教程&rdquo;的**本入门级图书，本书对HTML语言的知识点进行了详细的阐述和分析，包括HTML5和CSS3的语法、各种页面布局方法、流行的前端框架Bootstrap等内容。不仅有通俗易懂的语法讲解，也用贴切的小案例实验，使读者能轻松掌握新知识，且可以快速上手前端技术操作。本书适合对前端技术开发感兴趣的初学者阅读，也可以作为从事前端技术工作的开发人员的参考书，或作为大学生学习HTML5的教材。同时，本书也为读者之后学习同系列其他图书奠定基础。</span>', '2020-0820-5f3e092c2d07f.png', 68.0, 98.0, 0.0, '0004', 0.00, 1, 1597881600, 100, 0, 0, 0, 0, 0, 0, 1, 23);
INSERT INTO `shop_product` VALUES (751, '《细说网页制作》', '<span style=\"margin: 0px; padding: 0px; font-family: tahoma, arial, \'Microsoft YaHei\', \'Hiragino Sans GB\', u5b8bu4f53, sans-serif; font-size: 14px; background-color: #ffffff; color: red;\">适读人群 ：应用广泛，主要是针对于零基础的编程学员或PHP、UI、Java和IOS其他开发师等，他们都适合学习此本读物。</span><br style=\"color: #666666; font-family: tahoma, arial, \'Microsoft YaHei\', \'Hiragino Sans GB\', u5b8bu4f53, sans-serif; font-size: 14px; background-color: #ffffff;\" />\r\n<p style=\"margin: 0px; padding: 0px; color: #666666; font-family: tahoma, arial, \'Microsoft YaHei\', \'Hiragino Sans GB\', u5b8bu4f53, sans-serif; font-size: 14px; background-color: #ffffff;\">本书不仅有通俗易懂的语法讲解，也用贴切的小案例实验，使读者能轻松掌握新知识，且可以快速上手前端技术操作。本书适合对前端技术开发感兴趣的初学者阅读，也可以作为从事前端技术工作的开发人员的参考书，或作为大学生学习HTML5的教材。<br /><br />通过本书的学习，能快速上手网站前端开发。为了使HTML5语言能被读者更好地掌握和应用，同时作为&ldquo;跟兄弟连学HTML5系列教程&rdquo;的**本入门级图书，本书对HTML语言的知识点进行了详细的阐述和分析，包括HTML5和CSS3的语法、各种页面布局方法、流行的前端框架Bootstrap等内容。不仅有通俗易懂的语法讲解，也用贴切的小案例实验，使读者能轻松掌握新知识，且可以快速上手前端技术操作。本书适合对前端技术开发感兴趣的初学者阅读，也可以作为从事前端技术工作的开发人员的参考书，或作为大学生学习HTML5的教材。同时，本书也为读者之后学习同系列其他图书奠定基础。</p>', '2020-0820-5f3e08d935cc4.png', 38.0, 58.0, 9.0, '0003', 0.00, 1, 1597881600, 999, 0, 1, 0, 0, 0, 1, 1, 15);
INSERT INTO `shop_product` VALUES (749, '《细说PHP》第4版', '<img src=\"http://shop.eduwork.cn/uploads/article/2020-0820-5f3e0578c11f0.jpg\" alt=\"e12ca4af36580fb1.jpg\" width=\"750\" height=\"8100\" />', '2020-0820-5f3e059c25d7b.png', 108.0, 158.0, 0.0, '0001', 0.00, 1, 1597881600, 20, 0, 1, 0, 0, 0, 1, 1, 16);
INSERT INTO `shop_product` VALUES (750, '《细说PHP》第2版', '<table style=\"color: #666666; font-family: tahoma, arial, \'Microsoft YaHei\', \'Hiragino Sans GB\', u5b8bu4f53, sans-serif; font-size: 12px; background-color: #ffffff; border: 1px solid #cccccc;\" border=\"0\" width=\"99%\" cellspacing=\"0\" cellpadding=\"6\">\r\n<tbody>\r\n<tr>\r\n<td style=\"line-height: 20px; padding: 10px;\" colspan=\"2\" align=\"left\">\r\n<p style=\"margin: 0px; padding: 0px;\">PHP是开发Web应用系统理想的工具，易于使用、功能强大、成本低廉、高安全性、开发速度快且执行灵活。全书以实用为目标设计，包含PHP开发主流的各项技术，对每一个知识点都进行了深入详细的讲解，并附有大量的实例代码，图文并茂。系统地介绍了PHP的相关技术及其在实际Web开发中的应用。全书共六个部分，分为30个章节，每一章都是PHP独立知识点的总结。内容涵盖了动态网站开发的前台技术（HTML CSS）、PHP编程语言的语法、PHP的常用功能模块和实用技巧、MySQL数据库的设计与应用、PHP面向对象的程序设计思想、数据库抽象层PDO、Smarty模板技术、Web开发的设计模式、自定义框架BroPHP、Web项目开发整个流程等目前PHP开发中主流的技术。每一章中都有大量的实用示例，以及详尽的注释，加速读者的理解和学习，也为每章的技术点设置了大量的自测试题。后以一个比较完整的、采用面向对象思想，以及通过MVC模式设计，并结合Smarty模板，基于BroPHP框架的CMS系统为案例，详细介绍了Web系统开发从设计到部署的各个细节，便于更好地进行开发实践。</p>\r\n<div>&nbsp;</div>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>', '2020-0820-5f3e084e2b714.png', 78.0, 118.0, 10.0, '0002', 0.00, 1, 1597104000, 100, 0, 0, 0, 0, 0, 1, 1, 25);

-- ----------------------------
-- Table structure for shop_role
-- ----------------------------
DROP TABLE IF EXISTS `shop_role`;
CREATE TABLE `shop_role`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '角色表',
  `role_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '角色名称',
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 13 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of shop_role
-- ----------------------------
INSERT INTO `shop_role` VALUES (1, 'Admin', NULL, NULL, NULL);
INSERT INTO `shop_role` VALUES (12, 'Developer', NULL, NULL, NULL);
INSERT INTO `shop_role` VALUES (9, 'Manager', NULL, NULL, NULL);
INSERT INTO `shop_role` VALUES (10, 'vip1', NULL, NULL, NULL);
INSERT INTO `shop_role` VALUES (11, 'vip2', NULL, NULL, NULL);

-- ----------------------------
-- Table structure for shop_role_permission
-- ----------------------------
DROP TABLE IF EXISTS `shop_role_permission`;
CREATE TABLE `shop_role_permission`  (
  `role_id` int(11) NOT NULL COMMENT '角色表在关联表中的外键',
  `permission_id` int(11) NOT NULL COMMENT '权限表在关联表中的外键'
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of shop_role_permission
-- ----------------------------
INSERT INTO `shop_role_permission` VALUES (9, 5);
INSERT INTO `shop_role_permission` VALUES (9, 4);
INSERT INTO `shop_role_permission` VALUES (10, 4);
INSERT INTO `shop_role_permission` VALUES (9, 3);
INSERT INTO `shop_role_permission` VALUES (11, 4);
INSERT INTO `shop_role_permission` VALUES (11, 3);
INSERT INTO `shop_role_permission` VALUES (11, 2);
INSERT INTO `shop_role_permission` VALUES (11, 1);
INSERT INTO `shop_role_permission` VALUES (2, 5);
INSERT INTO `shop_role_permission` VALUES (2, 1);
INSERT INTO `shop_role_permission` VALUES (1, 3);
INSERT INTO `shop_role_permission` VALUES (1, 2);
INSERT INTO `shop_role_permission` VALUES (1, 1);
INSERT INTO `shop_role_permission` VALUES (10, 3);
INSERT INTO `shop_role_permission` VALUES (9, 2);
INSERT INTO `shop_role_permission` VALUES (10, 2);
INSERT INTO `shop_role_permission` VALUES (10, 1);
INSERT INTO `shop_role_permission` VALUES (9, 1);

-- ----------------------------
-- Table structure for shop_user_role
-- ----------------------------
DROP TABLE IF EXISTS `shop_user_role`;
CREATE TABLE `shop_user_role`  (
  `user_id` int(11) NOT NULL COMMENT '用户表在关联表中的外键',
  `role_id` int(11) NOT NULL COMMENT '角色表在关联表的外键'
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of shop_user_role
-- ----------------------------
INSERT INTO `shop_user_role` VALUES (26, 1);
INSERT INTO `shop_user_role` VALUES (26, 2);

-- ----------------------------
-- Table structure for shop_users
-- ----------------------------
DROP TABLE IF EXISTS `shop_users`;
CREATE TABLE `shop_users`  (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '' COMMENT '//用户名',
  `user_pass` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '' COMMENT '//密码',
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '邮箱',
  `phone` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '电话',
  `status` int(11) NULL DEFAULT 1 COMMENT '用户状态  1 启用 0禁用',
  `active` tinyint(4) NULL DEFAULT 0 COMMENT '账号是否激活 0 未激活  1 激活',
  `token` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '验证账号有效性',
  `expire` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '账号激活是否过期时间',
  PRIMARY KEY (`user_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 33 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '//管理员' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of shop_users
-- ----------------------------
INSERT INTO `shop_users` VALUES (1, 'admin', 'eyJpdiI6IkVtTEtKYzJKQUF3TnMvZzByZ3JHeHc9PSIsInZhbHVlIjoiMm9LN1RRMEUrWDB5cFNyMUgxbWtMZz09IiwibWFjIjoiM2MxY2Y4YWU2ZGFiMDUyOGI2YTE3N2E0Mzc5MjY0YzdhMjhlMDM4M2FiNmNiOWY5MWFiNmNjMzU2MmQ0NTAzMyJ9', 'admin', NULL, 0, 0, NULL, NULL);
INSERT INTO `shop_users` VALUES (32, 'admin3', 'eyJpdiI6InpmakpuM3NlWWtUcnRkbHFNZXIvanc9PSIsInZhbHVlIjoiMWc5M20zOXJGK1kyS2hKNVZEOEFOQT09IiwibWFjIjoiNWM1MDYzM2ZlNDU2ODRkMTY3MzlhYTFiMzI5MDU3NTdhNTY1MTA4MWY4OGE1ZjQxMGViYTg1OGNiNjBmZGQwZCJ9', 'admin1@qq.com', NULL, 1, 0, NULL, NULL);
INSERT INTO `shop_users` VALUES (31, 'admin35', '123456789', 'admin34@qq.com', NULL, 1, 0, NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
