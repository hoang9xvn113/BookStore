-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2021 at 09:18 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `user` text NOT NULL,
  `password` text NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `genre_id` int(11) NOT NULL,
  `author` text NOT NULL,
  `price` text NOT NULL DEFAULT '0',
  `content` text NOT NULL,
  `amount` int(11) NOT NULL DEFAULT 0,
  `image` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `update_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `genre_id`, `author`, `price`, `content`, `amount`, `image`, `status`, `update_at`) VALUES
(1, 'Đi tìm lẽ sống', 2, 'Lương Lê', '300000', 'asdasdasdas', 14, 'di-tim-le-song.webp', 1, '2021-09-27'),
(2, 'Hai số phận', 2, 'Lương Lê', '50000', 'Tìm hai số phận', 1, 'hai-so-phan.jpg', 1, '2021-09-27'),
(3, 'Bố già', 1, 'Ngọc Thứ Lang', '30000', 'asdasdasdasd', 5, 'bo-gia.webp', 1, '2021-09-28'),
(4, 'Đắc nhân tâm', 5, 'Dale Carnegie', '300000', 'ắc nhân tâm của Dale Carnegie là quyển sách duy nhất về thể loại self-help liên tục đứng đầu danh mục sách bán chạy nhất (best-selling Books) do báo The New York Times bình chọn suốt 10 năm liền.', 0, 'dac-nhan-tam.jpg', 1, '2021-10-01'),
(5, 'Thôi miên bằng ngôn từ', 5, ' Joe Vitale', '300000', '“Bản chất ngôn từ là phép thuật và kể từ thời cổ đại đến ngày nay ngôn từ vẫn giữ được hầu hết quyền năng phép thuật của chúng”.', 0, 'thoi-mien-bang-ngon-tu.jpg', 1, '2021-10-01'),
(6, 'Cẩm nang cấu trúc tiếng anh', 3, 'Trang Anh', '80000', 'Cuốn sách CẨM NANG CẤU TRÚC TIẾNG ANH gồm 25 phần, mỗi phần là một phạm trù kiến thức trong tiếng Anh được trình bày một cách ngắn gọn, đơn giản, cô đọng', 0, 'cam-nang-cau-truc-tieng-anh.webp', 1, '2021-10-01');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `sex` int(11) NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `user` text NOT NULL,
  `password` text NOT NULL,
  `update_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `sex`, `phone`, `email`, `user`, `password`, `update_at`) VALUES
(5, 'Nguyễn Văn Hoàng', 0, '0303030303', 'admin@admin.vn', 'admin', '123456', '2021-10-01');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `update_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `message`, `status`, `update_at`) VALUES
(1, 'Nguyễn Văn Hoàng', 'admin@admin.vn', 'test', 0, '2021-10-02'),
(2, 'Nguyễn Văn Hoàng', 'admin@admin.vn', 'test1', 0, '2021-10-02'),
(3, 'Nguyễn Văn Hoàng', 'admin@admin.vn', 'test1', 0, '2021-10-02');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id`, `name`, `status`, `update_at`) VALUES
(1, 'Sách Văn Học', 1, '2021-09-26 12:52:48'),
(2, 'Sách Kinh Tế', 1, '2021-09-26 13:20:13'),
(3, 'Sách ngoại ngữ', 1, '2021-10-01 09:03:44'),
(4, 'Sách thiếu nhi', 1, '2021-10-01 09:04:17'),
(5, 'Sách kĩ năng', 1, '2021-10-01 09:04:23');

-- --------------------------------------------------------

--
-- Table structure for table `import_order`
--

CREATE TABLE `import_order` (
  `id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `creation_date` date NOT NULL DEFAULT current_timestamp(),
  `receive_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `import_order`
--

INSERT INTO `import_order` (`id`, `supplier_id`, `creation_date`, `receive_date`, `status`) VALUES
(1, 7, '2021-09-29', '2000-12-11', 0),
(2, 7, '2021-09-29', '2021-09-29', 1),
(3, 7, '2021-09-29', '2021-09-29', 1),
(4, 7, '2021-09-29', '2021-09-29', 1),
(5, 7, '2021-09-29', '2021-09-29', 1);

-- --------------------------------------------------------

--
-- Table structure for table `import_order_detail`
--

CREATE TABLE `import_order_detail` (
  `import_order_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL DEFAULT 1,
  `price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `import_order_detail`
--

INSERT INTO `import_order_detail` (`import_order_id`, `book_id`, `amount`, `price`) VALUES
(2, 1, 1, '10000'),
(3, 1, 1, '10000'),
(4, 1, 1, '10000'),
(4, 2, 1, '10000'),
(5, 1, 1, '10000'),
(5, 3, 5, '50000');

-- --------------------------------------------------------

--
-- Table structure for table `sale_order`
--

CREATE TABLE `sale_order` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `address` text NOT NULL,
  `purchase_date` date NOT NULL DEFAULT current_timestamp(),
  `delivery_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sale_order_detail`
--

CREATE TABLE `sale_order_detail` (
  `sale_order_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `name`, `phone`, `email`, `address`, `status`) VALUES
(7, 'Kim Đồng', '0303030304', 'KimDong@gmail.com', 'Hà Nội', 1);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `name` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `name`) VALUES
(1, '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`) USING HASH;

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user` (`user`) USING HASH;

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`) USING HASH;

--
-- Indexes for table `import_order`
--
ALTER TABLE `import_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `import_order_detail`
--
ALTER TABLE `import_order_detail`
  ADD PRIMARY KEY (`import_order_id`,`book_id`);

--
-- Indexes for table `sale_order`
--
ALTER TABLE `sale_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale_order_detail`
--
ALTER TABLE `sale_order_detail`
  ADD PRIMARY KEY (`sale_order_id`,`book_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`) USING HASH;

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `import_order`
--
ALTER TABLE `import_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sale_order`
--
ALTER TABLE `sale_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
