-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2021-05-21 11:28:46
-- 服务器版本： 10.4.18-MariaDB
-- PHP 版本： 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `CPT304`
--

-- --------------------------------------------------------

--
-- 表的结构 `accommodation`
--

CREATE TABLE `accommodation` (
  `acc_id` int(11) NOT NULL,
  `acc_name` text NOT NULL,
  `acc_country_id` int(11) NOT NULL,
  `acc_state_id` int(11) NOT NULL,
  `acc_holiday_id` int(11) NOT NULL,
  `acc_desc` text NOT NULL,
  `acc_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `accommodation`
--

INSERT INTO `accommodation` (`acc_id`, `acc_name`, `acc_country_id`, `acc_state_id`, `acc_holiday_id`, `acc_desc`, `acc_img`) VALUES
(1, 'Haide Apartment', 1, 1, 1, '1200RMB/month, 50m² with 1 bedroom, 1 living room, 1 bathroom, no kitchen', 'acc1.jpg'),
(2, 'Moon Bar villa', 1, 1, 2, '3600RMB/month, 189m² with 4 bedroom, 2 living room, 2 bathroom, 1 kitchen', 'acc2.jpg'),
(3, 'Sun Hotel', 1, 2, 3, '1300RMB/month, 78m² with 2 bedroom, 1 living room, 1 bathroom, 1 kitchen', 'acc3.jpg'),
(4, 'Dahai Hotel', 1, 2, 4, '1600RMB/month, 98m² with 3 bedroom, 1 living room, 1 bathroom, 1 kitchen', 'acc4.jpg'),
(5, 'Rain hotel', 1, 2, 3, '3300RMB/month, 98m² with 3 bedroom, 1 living room, 1 bathroom, 1 kitchen', 'acc5.jpg'),
(6, 'Hillton', 1, 2, 3, '5200RMB/month, 178m² with 3 bedroom, 1 living room, 1 bathroom, 1 kitchen', 'acc6.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `country_name` text NOT NULL,
  `country_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `country`
--

INSERT INTO `country` (`country_id`, `country_name`, `country_img`) VALUES
(1, 'China', 'China.jpg'),
(2, 'Thailand', 'Thailand.jpg'),
(3, 'Japan', 'Japan.jpg'),
(4, 'USA', 'USA.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_image` text NOT NULL,
  `customer_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_image`, `customer_ip`) VALUES
(5, 'Rianti', 'Riannti@gmail.com', 'rianti123', 'India', 'Calcuta', '8891822', 'Anywhere you want', 'member1.jpg', '::1'),
(6, 'James Bono', 'jamesbono@gmail.com', 'james1123', 'England', 'London', '555-2255-222', 'Hyde Park', 'member2.jpg', '::1'),
(7, '111', '111', '111', '111', '111', '111', '111', 'u=3072982730,2495778205&fm=26&gp=0.jpg', '192.168.64.1'),
(8, '1', '1', '1', '1', '1', '1', '1', 'u=3072982730,2495778205&fm=26&gp=0.jpg', '192.168.64.1');

-- --------------------------------------------------------

--
-- 表的结构 `holiday`
--

CREATE TABLE `holiday` (
  `holiday_id` int(11) NOT NULL,
  `holiday_name` text NOT NULL,
  `holiday_country_id` int(11) NOT NULL,
  `holiday_state_id` int(11) NOT NULL,
  `holiday_desc` text NOT NULL,
  `holiday_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `holiday`
--

INSERT INTO `holiday` (`holiday_id`, `holiday_name`, `holiday_country_id`, `holiday_state_id`, `holiday_desc`, `holiday_img`) VALUES
(1, 'National Holiday', 1, 1, 'National Day is a statutory holiday established by a country to commemorate the country itself. They are usually the independence of the country, the signing of the constitution, the birth of the head of state, or other significant anniversaries; some are the saint’s day of the country’s patron saint.', 'national_holiday.jpg'),
(2, 'Army Day', 1, 1, 'The Army Day generally refers to the August 1st Army Day. Army Day is the anniversary of the founding of the Chinese People’s Liberation Army. It is set on August 1st each year and is set up by the Chinese People’s Revolutionary Military Committee to commemorate the establishment of the Chinese Workers’ and Peasants’ Red Army.', 'army_day.jpg'),
(3, 'Water-Splashing Festival', 1, 2, 'The Songkran Festival is a comprehensive stage to show the traditional culture of Dai people\'s water culture, music and dance culture, food culture, costume culture and folk advocacy. It is an important window for studying the history of Dai people and has high academic value.', 'water-splashing.jpg'),
(4, 'Torchlight Festival', 1, 2, 'Known as the \"Oriental Carnival\". The time of the Torch Festival is also different for different ethnic groups. Most of them are held on June 24 of the lunar calendar. The main activities include bullfighting, sheep fighting, cockfighting, horse racing, wrestling, song and dance performances, and beauty pageants. In the new era, the Torch Festival has been given new folk functions and new forms have emerged.', 'torchlight.jpg'),
(5, 'Flower festival', 2, 3, 'February is the season of blooming flowers in the Chiang Mai region of northern Thailand. Every February, locals will hold a flower festival in Buak Hat Park to display the local unique tropical flowers. The festival also includes agricultural exhibitions, flower exhibitions, competitions and flower sales. Especially tourists who love orchids, don\'t miss this opportunity to see the local orchids.', 'flower.jpg'),
(6, 'The Queen\'s Birthday', 2, 3, 'There are five main entrances, with bucket tiles and loach ridges on the top, and the doors, bars and windows, all with finely carved fresh patterns, without vermilion finish, the walls are polished in one color, and the white stone terraces below are chiseled into granadilla patterns. Looking from the left and right, they are all white. Whitewashed wall, tiger skin stone below,', 'queen.jpg'),
(7, 'Ten Thousand Buddhas Day', 2, 4, 'Ten Thousand Buddhas Day is one of the three religious festivals in Thailand to commemorate important moments in the life of the Buddha. According to legend, this is the day when the founder of Buddhism, Shakyamuni, came to gather 1,250 arhats to promote the teachings for the first time. This is a legal holiday in Thailand. Thai men, women and children bring flowers, incense candles and alms to nearby monasteries', 'buddhas.jpg'),
(8, 'Pattaya International Music Festival', 2, 4, 'The annual Pattaya International Music Festival is one of the most important festivals in Pattaya since 2004. There will be wonderful music performances by well-known orchestras and pop singers from all over the world, attracting 400,000 music fans every year. Visitors can experience the Thai music culture firsthand and enjoy this super popular beach music festival in Thailand.', 'music.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `state`
--

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL,
  `state_name` text NOT NULL,
  `state_country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `state`
--

INSERT INTO `state` (`state_id`, `state_name`, `state_country_id`) VALUES
(1, 'Beijing', 1),
(2, 'Yunnan', 1),
(3, 'Metropolis', 2),
(4, 'Central', 2),
(5, 'Hokkaido', 3),
(6, 'Tokyo', 3),
(7, 'Maryland', 4),
(8, 'Alaska', 4);

-- --------------------------------------------------------

--
-- 表的结构 `weather`
--

CREATE TABLE `weather` (
  `weather_id` int(11) NOT NULL,
  `weather_desc` text NOT NULL,
  `weather_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `weather`
--

INSERT INTO `weather` (`weather_id`, `weather_desc`, `weather_img`) VALUES
(1, 'Sunny 18℃', 'sunny.jpg'),
(2, 'Rainy 28℃\r\n', 'rainy.jpg'),
(3, 'Snowy -6℃', 'snowy.jpg'),
(4, 'Windy 12℃', 'windy.jpg'),
(5, 'Rainy 23℃', 'rainy.jpg'),
(6, 'Cloudy 17℃', 'cloudy.jpg');

--
-- 转储表的索引
--

--
-- 表的索引 `accommodation`
--
ALTER TABLE `accommodation`
  ADD PRIMARY KEY (`acc_id`);

--
-- 表的索引 `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- 表的索引 `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- 表的索引 `holiday`
--
ALTER TABLE `holiday`
  ADD PRIMARY KEY (`holiday_id`);

--
-- 表的索引 `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- 表的索引 `weather`
--
ALTER TABLE `weather`
  ADD PRIMARY KEY (`weather_id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `accommodation`
--
ALTER TABLE `accommodation`
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用表AUTO_INCREMENT `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用表AUTO_INCREMENT `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用表AUTO_INCREMENT `holiday`
--
ALTER TABLE `holiday`
  MODIFY `holiday_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用表AUTO_INCREMENT `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用表AUTO_INCREMENT `weather`
--
ALTER TABLE `weather`
  MODIFY `weather_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 限制导出的表
--

--
-- 限制表 `accommodation`
--
ALTER TABLE `accommodation`
  ADD CONSTRAINT `accommodation_ibfk_1` FOREIGN KEY (`acc_id`) REFERENCES `holiday` (`holiday_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
