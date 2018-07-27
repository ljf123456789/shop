-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018-07-27 05:42:32
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buy`
--

-- --------------------------------------------------------

--
-- 表的结构 `advert`
--

CREATE TABLE `advert` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `pos` tinyint(4) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `advert`
--

INSERT INTO `advert` (`id`, `img`, `pos`, `url`) VALUES
(5, '1503018551915736891.jpg', 0, 'www.163.com'),
(4, '1494055336196815462.jpg', 1, 'www.baidu.com');

-- --------------------------------------------------------

--
-- 表的结构 `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `brand`
--

INSERT INTO `brand` (`id`, `name`, `class_id`) VALUES
(1, 'DELL', 1),
(2, '联想', 1),
(3, '三星', 2),
(6, 'x-box游戏机', 7),
(7, '苹果', 2),
(8, '雷蛇', 9);

-- --------------------------------------------------------

--
-- 表的结构 `class`
--

CREATE TABLE `class` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `class`
--

INSERT INTO `class` (`id`, `name`) VALUES
(9, '鼠标'),
(2, '手机'),
(1, '电脑');

-- --------------------------------------------------------

--
-- 表的结构 `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `shop_id` int(11) NOT NULL,
  `time` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `comment`
--

INSERT INTO `comment` (`id`, `user_id`, `content`, `shop_id`, `time`) VALUES
(8, 12, '               好好玩我要多买几个', 20, 1495087654),
(3, 6, '联想这款很好！！', 9, 1494668589),
(4, 7, '这个不行，老板态度不好', 9, 1494668598),
(9, 12, '是好货', 33, 1495087804),
(10, 12, '是好东西', 23, 1495087971),
(11, 13, '               很好玩', 28, 1495088050),
(12, 13, '               这个不行容易发烧！！！！', 23, 1495088085),
(13, 14, '               很好', 32, 1499998512),
(14, 12, '               好的', 20, 1501639803),
(15, 12, '               6666', 34, 1501639819),
(16, 12, '               很ok啊', 20, 1510542886),
(17, 12, '               11111', 24, 1512026986),
(18, 12, '               666', 20, 1523424395);

-- --------------------------------------------------------

--
-- 表的结构 `indent`
--

CREATE TABLE `indent` (
  `id` int(11) UNSIGNED NOT NULL,
  `code` varchar(50) CHARACTER SET utf8 NOT NULL,
  `user_id` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `status_id` int(11) NOT NULL DEFAULT '1',
  `touch_id` int(11) NOT NULL,
  `shop_id` int(10) UNSIGNED NOT NULL,
  `price` float UNSIGNED NOT NULL,
  `num` int(10) UNSIGNED NOT NULL,
  `confirm` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `indent`
--

INSERT INTO `indent` (`id`, `code`, `user_id`, `time`, `status_id`, `touch_id`, `shop_id`, `price`, `num`, `confirm`) VALUES
(6, '1495016401741366187', 12, 1495016401, 2, 3, 20, 9856, 2, 1),
(5, '1495016401741366187', 12, 1495016401, 2, 3, 31, 100, 10, 1),
(7, '1495016401741366187', 12, 1495016401, 2, 3, 14, 8585, 3, 1),
(8, '14950165822030729947', 12, 1495016582, 5, 8, 34, 300, 1, 1),
(9, '14950183581370197365', 12, 1495018358, 1, 3, 33, 100, 1, 1),
(10, '14950183581370197365', 12, 1495018358, 1, 3, 23, 8955, 1, 1),
(11, '14950183581370197365', 12, 1495018358, 1, 3, 13, 8956, 1, 1),
(12, '14950183581370197365', 12, 1495018358, 1, 3, 14, 8585, 1, 1),
(13, '1495086063633730261', 12, 1495086063, 1, 3, 33, 100, 1, 1),
(14, '14950861481481542584', 12, 1495086148, 1, 3, 34, 300, 1, 1),
(15, '1495088032358742906', 13, 1495088032, 1, 9, 28, 30, 4, 1),
(16, '1495088032358742906', 13, 1495088032, 1, 9, 16, 9852, 4, 1),
(17, '1495088068958894491', 13, 1495088068, 5, 9, 23, 8955, 2, 1),
(18, '1495088631262137994', 12, 1495088631, 1, 3, 33, 100, 2, 1),
(19, '1495088631262137994', 12, 1495088631, 1, 3, 22, 8522, 2, 1),
(20, '1495088631262137994', 12, 1495088631, 1, 3, 34, 300, 3, 1),
(21, '1499998445439873701', 14, 1499998445, 5, 10, 32, 20, 5, 1),
(22, '1499998445439873701', 14, 1499998445, 5, 10, 20, 9856, 8, 1),
(23, '1500273912149835376', 12, 1500273912, 1, 8, 33, 100, 2, 0),
(24, '1500273912149835376', 12, 1500273912, 1, 8, 20, 9856, 3, 0),
(25, '1500273912149835376', 12, 1500273912, 1, 8, 15, 8960, 3, 0),
(26, '1512007639124381973', 12, 1512007639, 1, 8, 34, 300, 3, 0),
(27, '15120080961331129880', 12, 1512008096, 1, 11, 34, 300, 1, 0),
(28, '15120108821167091084', 12, 1512010882, 1, 3, 22, 8522, 2, 0),
(29, '15120161101206088036', 12, 1512016110, 1, 3, 27, 30, 2, 0),
(30, '1512016302231299896', 12, 1512016302, 1, 3, 27, 30, 1, 0),
(31, '15120164762007687722', 13, 1512016476, 1, 32, 23, 8955, 2, 0),
(32, '1512016596372775414', 13, 1512016596, 1, 9, 23, 8955, 1, 0),
(33, '1512019720885690378', 12, 1512019720, 1, 3, 30, 562, 2, 0),
(34, '15120254671954661827', 12, 1512025467, 1, 8, 33, 100, 1, 0),
(35, '15120255871596927592', 13, 1512025587, 1, 9, 32, 20, 3, 0),
(36, '151202650635275829', 12, 1512026506, 1, 8, 20, 9856, 1, 0),
(37, '1512026708342352013', 12, 1512026708, 1, 3, 34, 300, 1, 0),
(38, '1512026976671537817', 12, 1512026976, 1, 3, 24, 100, 3, 1),
(39, '15120275671718023369', 12, 1512027567, 1, 8, 27, 30, 1, 0),
(40, '1512027910137729854', 12, 1512027910, 1, 8, 33, 100, 1, 0);

-- --------------------------------------------------------

--
-- 表的结构 `shop`
--

CREATE TABLE `shop` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `img` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `stock` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `shelf` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `shop`
--

INSERT INTO `shop` (`id`, `name`, `img`, `price`, `stock`, `brand_id`, `shelf`) VALUES
(11, '联想a3', '14946658361887583364.jpg', 1235, 20, 2, 0),
(9, '联想a1', '14946658431428794419.jpg', 2000, 20, 2, 1),
(10, '联想a2', '1494665850774710990.jpg', 1200, 20, 2, 1),
(12, '联想a4', '1494665857935512666.jpg', 8598, 60, 2, 1),
(13, '联想a5', '1494665864561523954.jpg', 8956, 252, 2, 1),
(14, 'DELL-1', '14946658761160647512.jpg', 8585, 26, 1, 1),
(15, 'DELL-2', '1494665884959421025.jpg', 8960, 27, 1, 1),
(16, 'DELL-3', '1494665890144949280.jpg', 9852, 26, 1, 1),
(19, 'DELL-5', '14946659792049860697.jpg', 9999, 30, 1, 1),
(18, 'DELL-4', '1494665914316419812.jpg', 302, 30, 1, 1),
(20, '苹果1', '1494662335557292525.jpg', 9856, 6, 7, 1),
(21, '苹果2', '1494662355266968592.jpg', 9999, 20, 7, 1),
(22, '苹果3', '1494662371183474244.jpg', 8522, 16, 7, 1),
(23, '苹果4', '14946624042005243823.jpg', 8955, 14, 7, 1),
(24, '苹果5', '14946624202038966570.jpg', 100, 7, 7, 1),
(25, '三星1', '14946624511263960415.jpg', 20, 20, 3, 0),
(26, '三星2', '14946624741785133229.jpg', 10, 30, 3, 1),
(27, '三星3', '1494662492997999936.jpg', 30, 16, 3, 1),
(28, '三星4', '1494662514642341399.jpg', 30, 6, 3, 1),
(29, '三星5', '14946625311255346524.jpg', 30, 20, 3, 1),
(30, '雷蛇1', '1494666165357229695.jpg', 562, 8, 8, 1),
(31, '雷蛇2', '1494666186705800793.jpg', 100, 0, 8, 1),
(32, '雷蛇3', '14946662011556929997.jpg', 20, 92, 8, 1),
(33, '雷蛇4', '14946662151487570588.jpg', 100, 22, 8, 1),
(34, '雷蛇5', '14946662291469248514.jpg', 300, 0, 8, 1);

-- --------------------------------------------------------

--
-- 表的结构 `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `status`
--

INSERT INTO `status` (`id`, `name`) VALUES
(1, '未发货'),
(2, '已发货'),
(3, '未付款'),
(5, '已付款');

-- --------------------------------------------------------

--
-- 表的结构 `touch`
--

CREATE TABLE `touch` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `addr` varchar(100) CHARACTER SET utf8 NOT NULL,
  `tel` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `touch`
--

INSERT INTO `touch` (`id`, `name`, `addr`, `tel`, `email`, `user_id`) VALUES
(1, '王老菊', '太空', '110', '8162358869@qq.com', 6),
(2, '小花', '宁波', '120', '3794125555@163.com', 6),
(3, '不好了', '月球2', '262266262', 'wwww@qq.com2', 12),
(8, 'wawa2', '火星2', '1252352362', '11@qq.com2', 12),
(9, '王老菊', '大红鹰', '525252', '632521331@163.com', 13),
(10, '凌佳峰', '123', '123', '123', 14),
(11, 'lll', '宁波', '17858955715', '8198078689@qq.com', 12),
(16, '11', '1', '1', '1', 15);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `isadmin` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `isadmin`) VALUES
(7, 'user28', 'd81f9c1be2e08964bf9f24b15f0e4900', 0),
(6, 'user11', '502e4a16930e414107ee22b6198c578f', 0),
(8, 'user4', '15de21c670ae7c3f6f3f1f37029303c9', 0),
(10, 'admin', '202cb962ac59075b964b07152d234b70', 1),
(11, 'wen', '202cb962ac59075b964b07152d234b70', 0),
(12, 'user1', '202cb962ac59075b964b07152d234b70', 0),
(13, 'user2', '202cb962ac59075b964b07152d234b70', 0),
(14, 'ljf', '202cb962ac59075b964b07152d234b70', 0),
(15, '1', 'c4ca4238a0b923820dcc509a6f75849b', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advert`
--
ALTER TABLE `advert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indent`
--
ALTER TABLE `indent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `touch`
--
ALTER TABLE `touch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `advert`
--
ALTER TABLE `advert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- 使用表AUTO_INCREMENT `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- 使用表AUTO_INCREMENT `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- 使用表AUTO_INCREMENT `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- 使用表AUTO_INCREMENT `indent`
--
ALTER TABLE `indent`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- 使用表AUTO_INCREMENT `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- 使用表AUTO_INCREMENT `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- 使用表AUTO_INCREMENT `touch`
--
ALTER TABLE `touch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
