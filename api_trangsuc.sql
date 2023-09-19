-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 19, 2023 lúc 03:38 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `api_trangsuc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auth_key` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password_reset_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `username`, `email`, `phone`, `address`, `password`, `auth_key`, `password_reset_token`, `status`, `created_at`, `updated_at`) VALUES
(58, 'Do Thi Quynh', 'annhien1001@gmail.com', '0376419034', 'Hải Dương', '$2y$13$FG6WHPq5DvUo5KBcT1IVcOl/stLprSaZ89.AxzlGtwWjmgUzSg6Jq', 'zYU5uuCMA6L0yKzHRJ3gy2vNoBT93fl1', 'kapJoW1zqkGKV6wKDQdcVBIMv5vMaPXO_1692869341', 10, '2023-08-24 09:29:02', NULL),
(59, 'Do Thi Ly', 'doly@gmail.com', '0327589654', 'Hải Dương', '$2y$13$cNr5hqCgWWhpOjAz2ADeaOke17gywsV.X626ib1RW32ochRAKMQ9e', 'Cvvk8xbxj1XWkFRjEBFcR9b49RsLweua', '_AT8I3UvGBYb-H6pZUh9xDb_KaDFoc9Z_1692869390', 10, '2023-08-24 09:29:51', NULL),
(61, 'Nguyễn Viết Thanh', 'VietThanh@gmail.com', '0348596851', 'Hà Nội', '$2y$13$V0Y6rCy9fBbIwWkg8.off..f5BUHyk50uRb8aCWHN5GGaAoIvSu6K', 'gTjvoEX-Pmj6vj46a5YckcVqA4q4xfDG', 'BV_ARyka2-jSpxV3UVHh2dP0A3vqXDG9_1692869493', 10, '2023-08-24 09:31:34', NULL),
(67, 'Do Van Duy', 'duydo1118@gmail.com', '0333823775', 'Hải Dương', '$2y$13$qkrNXxzFUO0dqRbfx9IUoO46LwvGJxaH3TPRIfCPSrVbqcnr62rIq', 'cyjdgte3_LGDLLmurlL7Y0-s4W6qozvK', '5AKDp-WhBvzOAM1g-yfvweo7E_RLIa3H_1693469988', 0, '2023-08-31 08:19:49', NULL),
(68, 'Test', 'test@gmail.com', '0333823775', 'Hải Dương', '123456', 'cNz_Vw-aZg7ZtL345r8euukkLzW1dWFq', '0PbRTMkHJyyuK8St2egW4foedAGsnsgM_1693470024', 0, '2023-08-31 08:20:25', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `file` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `imageslide`
--

CREATE TABLE `imageslide` (
  `id` int(11) NOT NULL,
  `file` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `keyproduct`
--

CREATE TABLE `keyproduct` (
  `id` int(11) NOT NULL,
  `keyword_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `keyword`
--

CREATE TABLE `keyword` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rank` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menu`
--

INSERT INTO `menu` (`id`, `name`, `link`, `rank`, `created_at`, `updated_at`) VALUES
(1, 'HOME', '/', 1, '2023-08-16 09:05:57', NULL),
(2, 'SHOP', '/product', 1, '2023-08-16 09:07:17', NULL),
(3, 'BLOG', '/blog', 1, '2023-08-16 09:22:13', NULL),
(4, 'ABOUT US', '/about', 1, '2023-08-16 09:22:52', NULL),
(5, 'CONTACT', '/contact', 1, '2023-08-16 09:23:15', NULL),
(6, 'JEWELLERY', '/jewellery', 1, '2023-08-16 09:23:59', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` int(11) NOT NULL,
  `orders_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `unit_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orderdetails`
--

INSERT INTO `orderdetails` (`id`, `orders_id`, `product_id`, `number`, `unit_price`) VALUES
(42, 22, 1, 2, 135350),
(43, 22, 4, 5, 110250),
(44, 23, 4, 5, 110250),
(45, 23, 5, 2, 125250),
(46, 24, 1, 10, 135350);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ship` double DEFAULT NULL,
  `vat` double DEFAULT NULL,
  `total_money` double NOT NULL,
  `into_money` double NOT NULL,
  `total_number` int(11) NOT NULL,
  `booking_date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL,
  `discount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `full_name`, `address`, `phone`, `email`, `ship`, `vat`, `total_money`, `into_money`, `total_number`, `booking_date`, `created_at`, `update_at`, `discount`) VALUES
(22, 'Test', 'test', '0328569632', 'test@gmail.com', 15000, 1500, 821950, 838450, 7, '2023-08-31 13:35:20', '0000-00-00 00:00:00', NULL, 1000),
(23, 'Test', 'Hải Dương', '0333823775', 'test@gmail.com', 15000, 1500, 801750, 818250, 7, '2023-09-08 11:20:18', '0000-00-00 00:00:00', NULL, 1000),
(24, 'Test', 'Hải Dương', '0333823775', 'test@gmail.com', 15000, 1500, 1353500, 1370000, 10, '2023-09-12 21:00:30', '0000-00-00 00:00:00', NULL, 1000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `productgroup_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `describes` varchar(350) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detailed_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selling` tinyint(4) NOT NULL DEFAULT 0,
  `outstanding` tinyint(4) NOT NULL DEFAULT 0,
  `just_homed` tinyint(4) NOT NULL DEFAULT 0,
  `price` double NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `competitive_price` double NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'no-image.jpg',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `productgroup_id`, `name`, `code`, `describes`, `detailed_description`, `selling`, `outstanding`, `just_homed`, `price`, `quantity`, `competitive_price`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'JWDA Penant Lamp Brshed Steel', 'JWDA-Penant-Lamp-Brshed-Steel', 'In Stock', 'Karat Gold\r\n24K gold is called pure gold or fine gold. (99.99% pure) The color of fine gold is a bright yellow with a bit of orange. Some say it is too soft for jewelry application, but high karat gold is commonly worn in some parts of the world, and it is growing in popularity in designer jewelry. Most will prefer karat golds for their engagement rings, because of the needed hardness to hold a gemstone.\r\nGold Colors\r\nThe most popular color is yellow which is made by adding silver and some copper. The metals are melted together to form an alloy of the desired color and karat. It is very important that all the ingredients are pure and that the amounts of each are weighed very accurately to prevent porosity, which weakens the alloy.\r\nWhite alloys\r\nThere are two kinds of White Gold: Nickel based and Palladium based. Some people are allergic to Nickel, so Palladium white gold is a good alternative. Palladium white gold is the only legal alloy in Europe. It also self burnishes and keeps a polish.\r\nThe Most Expensive Diamond Color\r\nD colored diamonds are the rarest and most expensive of diamonds within the D-Z scale. Certain fancy colored diamonds will command the highest prices overall, and these will be discussed in separate tutorial. Many people enjoy diamonds in the near colorless range G-J, as they find a balance of size, clarity, and price to meet their needs.', 0, 0, 0, 135350, 10, 135350, 'medium-size/1-3.jpg', '2023-08-27 03:45:05', NULL),
(2, 4, 'Eius accusantium omnis', 'Eius-accusantium-omnis', 'Ring,Necklaces,Braid', 'Karat Gold\n24K gold is called pure gold or fine gold. (99.99% pure) The color of fine gold is a bright yellow with a bit of orange. Some say it is too soft for jewelry application, but high karat gold is commonly worn in some parts of the world, and it is growing in popularity in designer jewelry. Most will prefer karat golds for their engagement rings, because of the needed hardness to hold a gemstone.\nGold Colors\nThe most popular color is yellow which is made by adding silver and some copper. The metals are melted together to form an alloy of the desired color and karat. It is very important that all the ingredients are pure and that the amounts of each are weighed very accurately to prevent porosity, which weakens the alloy.\nWhite alloys\nThere are two kinds of White Gold: Nickel based and Palladium based. Some people are allergic to Nickel, so Palladium white gold is a good alternative. Palladium white gold is the only legal alloy in Europe. It also self burnishes and keeps a polish.\nThe Most Expensive Diamond Color\nD colored diamonds are the rarest and most expensive of diamonds within the D-Z scale. Certain fancy colored diamonds will command the highest prices overall, and these will be discussed in separate tutorial. Many people enjoy diamonds in the near colorless range G-J, as they find a balance of size, clarity, and price to meet their needs.', 0, 0, 0, 136230, 15, 136230, 'medium-size/1-1.jpg', '2023-08-27 03:45:23', NULL),
(3, 4, 'Pendant, Made of White', 'Pendant, Made-of-White', 'Ring,Necklaces,Braid', 'Karat Gold\r\n24K gold is called pure gold or fine gold. (99.99% pure) The color of fine gold is a bright yellow with a bit of orange. Some say it is too soft for jewelry application, but high karat gold is commonly worn in some parts of the world, and it is growing in popularity in designer jewelry. Most will prefer karat golds for their engagement rings, because of the needed hardness to hold a gemstone.\r\nGold Colors\r\nThe most popular color is yellow which is made by adding silver and some copper. The metals are melted together to form an alloy of the desired color and karat. It is very important that all the ingredients are pure and that the amounts of each are weighed very accurately to prevent porosity, which weakens the alloy.\r\nWhite alloys\r\nThere are two kinds of White Gold: Nickel based and Palladium based. Some people are allergic to Nickel, so Palladium white gold is a good alternative. Palladium white gold is the only legal alloy in Europe. It also self burnishes and keeps a polish.\r\nThe Most Expensive Diamond Color\r\nD colored diamonds are the rarest and most expensive of diamonds within the D-Z scale. Certain fancy colored diamonds will command the highest prices overall, and these will be discussed in separate tutorial. Many people enjoy diamonds in the near colorless range G-J, as they find a balance of size, clarity, and price to meet their needs.', 0, 0, 0, 120250, 10, 120250, 'medium-size/1-1.jpg', '2023-08-27 03:45:43', NULL),
(4, 1, 'Vitra Sunburst Clock', 'Vitra-Sunburst-Clock', 'Ring,Necklaces,Braid', 'Karat Gold\r\n24K gold is called pure gold or fine gold. (99.99% pure) The color of fine gold is a bright yellow with a bit of orange. Some say it is too soft for jewelry application, but high karat gold is commonly worn in some parts of the world, and it is growing in popularity in designer jewelry. Most will prefer karat golds for their engagement rings, because of the needed hardness to hold a gemstone.\r\nGold Colors\r\nThe most popular color is yellow which is made by adding silver and some copper. The metals are melted together to form an alloy of the desired color and karat. It is very important that all the ingredients are pure and that the amounts of each are weighed very accurately to prevent porosity, which weakens the alloy.\r\nWhite alloys\r\nThere are two kinds of White Gold: Nickel based and Palladium based. Some people are allergic to Nickel, so Palladium white gold is a good alternative. Palladium white gold is the only legal alloy in Europe. It also self burnishes and keeps a polish.\r\nThe Most Expensive Diamond Color\r\nD colored diamonds are the rarest and most expensive of diamonds within the D-Z scale. Certain fancy colored diamonds will command the highest prices overall, and these will be discussed in separate tutorial. Many people enjoy diamonds in the near colorless range G-J, as they find a balance of size, clarity, and price to meet their needs.', 0, 0, 0, 110250, 15, 110250, 'medium-size/1-9.jpg', '2023-08-27 03:46:02', NULL),
(5, 1, 'Swirl 1 Medium Pendant', 'Swirl-1-Medium-Pendant', 'Ring,Necklaces,Braid', 'Karat Gold\r\n24K gold is called pure gold or fine gold. (99.99% pure) The color of fine gold is a bright yellow with a bit of orange. Some say it is too soft for jewelry application, but high karat gold is commonly worn in some parts of the world, and it is growing in popularity in designer jewelry. Most will prefer karat golds for their engagement rings, because of the needed hardness to hold a gemstone.\r\nGold Colors\r\nThe most popular color is yellow which is made by adding silver and some copper. The metals are melted together to form an alloy of the desired color and karat. It is very important that all the ingredients are pure and that the amounts of each are weighed very accurately to prevent porosity, which weakens the alloy.\r\nWhite alloys\r\nThere are two kinds of White Gold: Nickel based and Palladium based. Some people are allergic to Nickel, so Palladium white gold is a good alternative. Palladium white gold is the only legal alloy in Europe. It also self burnishes and keeps a polish.\r\nThe Most Expensive Diamond Color\r\nD colored diamonds are the rarest and most expensive of diamonds within the D-Z scale. Certain fancy colored diamonds will command the highest prices overall, and these will be discussed in separate tutorial. Many people enjoy diamonds in the near colorless range G-J, as they find a balance of size, clarity, and price to meet their needs.', 0, 0, 0, 125250, 15, 125250, 'medium-size/1-3.jpg', '2023-08-27 03:46:25', NULL),
(6, 4, 'Light Inverted Pendant ', 'Light-Inverted-Pendant ', 'Ring,Necklaces,Braid', 'Karat Gold\r\n24K gold is called pure gold or fine gold. (99.99% pure) The color of fine gold is a bright yellow with a bit of orange. Some say it is too soft for jewelry application, but high karat gold is commonly worn in some parts of the world, and it is growing in popularity in designer jewelry. Most will prefer karat golds for their engagement rings, because of the needed hardness to hold a gemstone.\r\nGold Colors\r\nThe most popular color is yellow which is made by adding silver and some copper. The metals are melted together to form an alloy of the desired color and karat. It is very important that all the ingredients are pure and that the amounts of each are weighed very accurately to prevent porosity, which weakens the alloy.\r\nWhite alloys\r\nThere are two kinds of White Gold: Nickel based and Palladium based. Some people are allergic to Nickel, so Palladium white gold is a good alternative. Palladium white gold is the only legal alloy in Europe. It also self burnishes and keeps a polish.\r\nThe Most Expensive Diamond Color\r\nD colored diamonds are the rarest and most expensive of diamonds within the D-Z scale. Certain fancy colored diamonds will command the highest prices overall, and these will be discussed in separate tutorial. Many people enjoy diamonds in the near colorless range G-J, as they find a balance of size, clarity, and price to meet their needs.', 0, 0, 0, 1250250, 15, 1250250, 'medium-size/1-2.jpg', '2023-08-27 05:01:45', NULL),
(7, 4, 'WDA Penant Lamp Brshed', 'WDA-Penant-Lamp-Brshed', 'Ring,Necklaces,Braid', 'Karat Gold\r\n24K gold is called pure gold or fine gold. (99.99% pure) The color of fine gold is a bright yellow with a bit of orange. Some say it is too soft for jewelry application, but high karat gold is commonly worn in some parts of the world, and it is growing in popularity in designer jewelry. Most will prefer karat golds for their engagement rings, because of the needed hardness to hold a gemstone.\r\nGold Colors\r\nThe most popular color is yellow which is made by adding silver and some copper. The metals are melted together to form an alloy of the desired color and karat. It is very important that all the ingredients are pure and that the amounts of each are weighed very accurately to prevent porosity, which weakens the alloy.\r\nWhite alloys\r\nThere are two kinds of White Gold: Nickel based and Palladium based. Some people are allergic to Nickel, so Palladium white gold is a good alternative. Palladium white gold is the only legal alloy in Europe. It also self burnishes and keeps a polish.\r\nThe Most Expensive Diamond Color\r\nD colored diamonds are the rarest and most expensive of diamonds within the D-Z scale. Certain fancy colored diamonds will command the highest prices overall, and these will be discussed in separate tutorial. Many people enjoy diamonds in the near colorless range G-J, as they find a balance of size, clarity, and price to meet their needs.', 0, 0, 0, 602250, 15, 602250, 'medium-size/1-2.jpg', '2023-08-27 05:01:53', NULL),
(8, 1, 'Suspensions Aplomb Large', 'Suspensions-Aplomb-Large', 'Ring,Necklaces,Braid', 'Karat Gold\r\n24K gold is called pure gold or fine gold. (99.99% pure) The color of fine gold is a bright yellow with a bit of orange. Some say it is too soft for jewelry application, but high karat gold is commonly worn in some parts of the world, and it is growing in popularity in designer jewelry. Most will prefer karat golds for their engagement rings, because of the needed hardness to hold a gemstone.\r\nGold Colors\r\nThe most popular color is yellow which is made by adding silver and some copper. The metals are melted together to form an alloy of the desired color and karat. It is very important that all the ingredients are pure and that the amounts of each are weighed very accurately to prevent porosity, which weakens the alloy.\r\nWhite alloys\r\nThere are two kinds of White Gold: Nickel based and Palladium based. Some people are allergic to Nickel, so Palladium white gold is a good alternative. Palladium white gold is the only legal alloy in Europe. It also self burnishes and keeps a polish.\r\nThe Most Expensive Diamond Color\r\nD colored diamonds are the rarest and most expensive of diamonds within the D-Z scale. Certain fancy colored diamonds will command the highest prices overall, and these will be discussed in separate tutorial. Many people enjoy diamonds in the near colorless range G-J, as they find a balance of size, clarity, and price to meet their needs.', 0, 0, 0, 602250, 15, 602250, 'medium-size/1-7.jpg', '2023-08-27 05:01:40', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `productgroups`
--

CREATE TABLE `productgroups` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `productgroups`
--

INSERT INTO `productgroups` (`id`, `name`, `code`, `created_at`, `updated_at`) VALUES
(1, 'Nhẫn', 'nhan', '0000-00-00 00:00:00', NULL),
(2, 'Dây chuyền', 'day chuyen', '0000-00-00 00:00:00', NULL),
(3, 'Lắc chân', 'lac-chan', '0000-00-00 00:00:00', NULL),
(4, 'Hoa tai', 'hoa - tai ', '0000-00-00 00:00:00', NULL),
(5, 'Đồng Hồ', 'dong - ho', '0000-00-00 00:00:00', NULL),
(6, 'Kẹp cà vạt', 'kep-ca-vat', '2023-08-15 04:05:52', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `producttype`
--

CREATE TABLE `producttype` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `productgroup_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `caption` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `summary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trademark`
--

CREATE TABLE `trademark` (
  `id` int(11) NOT NULL,
  `namesp_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no-image.jpg',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `trademark`
--

INSERT INTO `trademark` (`id`, `namesp_id`, `name`, `code`, `logo`, `created_at`, `updated_at`) VALUES
(1, 1, 'Swarovski', 'swarovski', 'no-image.jpg', '2023-08-27 03:36:06', NULL),
(2, 2, 'Sokolov', 'sokolov', 'no-image.jpg', '2023-08-27 03:36:49', NULL),
(3, 3, 'Sokolov', 'sokolov', 'no-image.jpg', '2023-08-27 03:37:08', NULL),
(5, 4, 'Swarovski', 'swarovski', 'no-image.jpg', '2023-08-27 03:38:06', NULL),
(6, 5, 'Pandora', 'pandora', 'no-image.jpg', '2023-08-27 03:38:37', NULL),
(7, 6, 'Pandora', 'pandora', 'no-image.jpg', '2023-08-27 03:38:58', NULL),
(8, 7, 'Bvlgari', 'bvlgari', 'no-image.jpg', '2023-08-27 03:38:58', NULL),
(9, 8, 'Bvlgari', 'bvlgari', 'no-image.jpg', '2023-08-27 03:38:58', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trademarks`
--

CREATE TABLE `trademarks` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `userrole`
--

CREATE TABLE `userrole` (
  `id` int(11) NOT NULL,
  `role` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auth_key` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass_word_reset` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `imageslide`
--
ALTER TABLE `imageslide`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slide_id` (`slide_id`);

--
-- Chỉ mục cho bảng `keyproduct`
--
ALTER TABLE `keyproduct`
  ADD PRIMARY KEY (`id`),
  ADD KEY `keyword_id` (`keyword_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `keyword`
--
ALTER TABLE `keyword`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_id` (`orders_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productgroup_id` (`productgroup_id`);

--
-- Chỉ mục cho bảng `productgroups`
--
ALTER TABLE `productgroups`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `producttype`
--
ALTER TABLE `producttype`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productgroup_id` (`productgroup_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `trademark`
--
ALTER TABLE `trademark`
  ADD PRIMARY KEY (`id`),
  ADD KEY `namesp_id` (`namesp_id`);

--
-- Chỉ mục cho bảng `userrole`
--
ALTER TABLE `userrole`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT cho bảng `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `imageslide`
--
ALTER TABLE `imageslide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `keyproduct`
--
ALTER TABLE `keyproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `keyword`
--
ALTER TABLE `keyword`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `productgroups`
--
ALTER TABLE `productgroups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `producttype`
--
ALTER TABLE `producttype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `trademark`
--
ALTER TABLE `trademark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `userrole`
--
ALTER TABLE `userrole`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `imageslide`
--
ALTER TABLE `imageslide`
  ADD CONSTRAINT `imageslide_ibfk_1` FOREIGN KEY (`slide_id`) REFERENCES `slide` (`id`);

--
-- Các ràng buộc cho bảng `keyproduct`
--
ALTER TABLE `keyproduct`
  ADD CONSTRAINT `keyproduct_ibfk_1` FOREIGN KEY (`keyword_id`) REFERENCES `keyword` (`id`),
  ADD CONSTRAINT `keyproduct_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `orderdetails_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`productgroup_id`) REFERENCES `productgroups` (`id`);

--
-- Các ràng buộc cho bảng `trademark`
--
ALTER TABLE `trademark`
  ADD CONSTRAINT `trademark_ibfk_1` FOREIGN KEY (`namesp_id`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `userrole`
--
ALTER TABLE `userrole`
  ADD CONSTRAINT `userrole_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
