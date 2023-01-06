-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2023 年 1 月 06 日 04:53
-- サーバのバージョン： 10.4.27-MariaDB
-- PHP のバージョン: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `student_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `alldatas`
--

CREATE TABLE `alldatas` (
  `id` int(10) NOT NULL,
  `grade` int(10) NOT NULL,
  `class` int(10) NOT NULL,
  `student_number` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `img_name` varchar(256) NOT NULL,
  `img_type` varchar(64) NOT NULL,
  `img_content` mediumblob NOT NULL,
  `img_size` int(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- テーブルのデータのダンプ `alldatas`
--

INSERT INTO `alldatas` (`id`, `grade`, `class`, `student_number`, `name`, `img_name`, `img_type`, `img_content`, `img_size`, `created_at`) VALUES
(10, 1, 1, 1, '宮地泰介', 'ダウンロード (1).jpeg', 'image/jpeg', 0x2f4170706c69636174696f6e732f58414d50502f78616d707066696c65732f74656d702f70687030434f6b6b77, 5209, '2023-01-05 12:02:12'),
(11, 1, 1, 2, '宮地素子', 'ダウンロード (2).jpeg', 'image/jpeg', 0x2f4170706c69636174696f6e732f58414d50502f78616d707066696c65732f74656d702f706870544435454a6e, 7286, '2023-01-05 12:02:39'),
(12, 1, 1, 5, '鈴木一郎', 'images (1).jpeg', 'image/jpeg', 0x2f4170706c69636174696f6e732f58414d50502f78616d707066696c65732f74656d702f706870745952624341, 6692, '2023-01-05 12:03:02'),
(13, 1, 1, 3, '山本佳之', 'images (2).jpeg', 'image/jpeg', 0x2f4170706c69636174696f6e732f58414d50502f78616d707066696c65732f74656d702f7068706e7051783968, 5993, '2023-01-05 12:29:51'),
(14, 1, 2, 1, '山田太郎', 'images.jpeg', 'image/jpeg', 0x2f4170706c69636174696f6e732f58414d50502f78616d707066696c65732f74656d702f706870436755315072, 7182, '2023-01-05 20:43:12'),
(16, 1, 2, 3, '山本佳之', 'images (4).jpeg', 'image/jpeg', 0x2f4170706c69636174696f6e732f58414d50502f78616d707066696c65732f74656d702f7068706241317a494b, 4848, '2023-01-05 20:52:43'),
(17, 1, 1, 15, '山田花子', '8967316_450_0.jpg', 'image/jpeg', 0x2f4170706c69636174696f6e732f58414d50502f78616d707066696c65732f74656d702f70687052765577324c, 153018, '2023-01-05 22:42:11'),
(18, 1, 1, 13, '乃木希典', 'images (3).jpeg', 'image/jpeg', 0x2f4170706c69636174696f6e732f58414d50502f78616d707066696c65732f74656d702f706870374144554a37, 7118, '2023-01-05 22:44:57'),
(19, 1, 1, 14, '鈴木一郎', 'images (5).jpeg', 'image/jpeg', 0x2f4170706c69636174696f6e732f58414d50502f78616d707066696c65732f74656d702f70687069394846494e, 5315, '2023-01-05 23:00:58'),
(20, 1, 2, 14, '山本義之', 'images (6).jpeg', 'image/jpeg', 0x2f4170706c69636174696f6e732f58414d50502f78616d707066696c65732f74656d702f70687074314f504439, 7523, '2023-01-05 23:04:54');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `alldatas`
--
ALTER TABLE `alldatas`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `alldatas`
--
ALTER TABLE `alldatas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
