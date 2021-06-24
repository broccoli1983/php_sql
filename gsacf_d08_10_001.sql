-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2021 年 6 月 24 日 16:33
-- サーバのバージョン： 10.4.19-MariaDB
-- PHP のバージョン: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gsacf_d08_10_001`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `t_waste`
--

CREATE TABLE `t_waste` (
  `waste_id` int(12) NOT NULL,
  `waste_company` varchar(137) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waste_cutomer_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waste_division` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waste_tel` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waste_zip` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waste_address` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waste_material` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waste_weight` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waste_form` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waste_status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waste_create_date` datetime NOT NULL,
  `waste_update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `t_waste`
--

INSERT INTO `t_waste` (`waste_id`, `waste_company`, `waste_cutomer_name`, `waste_division`, `waste_tel`, `waste_zip`, `waste_address`, `waste_material`, `waste_weight`, `waste_form`, `waste_status`, `waste_create_date`, `waste_update_date`) VALUES
(1, '新日本製薬株式会社', '新日本　太朗', '物流課', '0927205800', '8100074', '福岡市中央区大手門1-4-7', 'プラスチック', '500', '容器状', '未回収', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'プレミアアンチエイジング株式会社', 'プレミア　花子', '商品開発課', '0300000000', '1000000', '東京都港区虎ノ門1-23-1 虎ノ門ヒルズ森タワー8階', 'プラスチック', '400', 'フレーク状', '回収中', '2021-06-22 00:00:00', '2021-06-22 00:00:00'),
(3, '株式会社Ｉ－ｎｅ', 'あいえぬい　太朗', '商品管理部', '0920000000', '8100001', '福岡県福岡市中央区天神2-11-1', 'プラスチック', '10', '板状', '回収済み', '2021-06-22 00:00:00', '2021-06-22 00:00:00');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `t_waste`
--
ALTER TABLE `t_waste`
  ADD PRIMARY KEY (`waste_id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `t_waste`
--
ALTER TABLE `t_waste`
  MODIFY `waste_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
