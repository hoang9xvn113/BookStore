-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 04, 2021 lúc 03:10 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bookstore`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `user` text NOT NULL,
  `password` text NOT NULL,
  `permission` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id`, `user`, `password`, `permission`) VALUES
(3, 'admin', 'admin', 1),
(4, 'hoang9xvn123', '1234567', 0),
(5, 'zxc', '123', 0),
(6, 'hoang123', '123456', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `book`
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
  `number_click` int(11) DEFAULT 0,
  `update_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `book`
--

INSERT INTO `book` (`id`, `name`, `genre_id`, `author`, `price`, `content`, `amount`, `image`, `status`, `number_click`, `update_at`) VALUES
(1, 'Đi tìm lẽ sống', 2, 'Lương Lê', '300000', 'asdasdasdas', 24, 'di-tim-le-song.webp', 0, 8, '2021-09-27'),
(2, 'Hai số phận', 2, 'Lương Lê', '50000', 'Tìm hai số phận', 11, 'hai-so-phan.jpg', 0, 10, '2021-09-27'),
(3, 'Bố già', 1, 'Ngọc Thứ Lang', '30000', 'asdasdasdasd', 75, 'bo-gia.webp', 0, 4, '2021-09-28'),
(4, 'Đắc nhân tâm', 5, 'Dale Carnegie', '300000', 'ắc nhân tâm của Dale Carnegie là quyển sách duy nhất về thể loại self-help liên tục đứng đầu danh mục sách bán chạy nhất (best-selling Books) do báo The New York Times bình chọn suốt 10 năm liền.', 10, 'dac-nhan-tam.jpg', 1, 25, '2021-10-01'),
(5, 'Thôi miên bằng ngôn từ', 5, ' Joe Vitale', '300000', '“Bản chất ngôn từ là phép thuật và kể từ thời cổ đại đến ngày nay ngôn từ vẫn giữ được hầu hết quyền năng phép thuật của chúng”.', 10, 'thoi-mien-bang-ngon-tu.jpg', 0, 23, '2021-10-01'),
(6, 'Cẩm nang cấu trúc tiếng anh', 3, 'Trang Anh', '80000', 'Cuốn sách CẨM NANG CẤU TRÚC TIẾNG ANH gồm 25 phần, mỗi phần là một phạm trù kiến thức trong tiếng Anh được trình bày một cách ngắn gọn, đơn giản, cô đọng', 10, 'cam-nang-cau-truc-tieng-anh.webp', 0, 6, '2021-10-01'),
(7, 'Giải thích ngữ pháp tiếng anh', 3, ' Mai Lan Hương', '90000', 'Ngữ pháp Tiếng Anh tổng hợp các chủ điểm ngữ pháp trọng yếu mà học sinh cần nắm vững. Các chủ điểm ngữ pháp được trình bày rõ ràng, chi tiết. Sau mỗi chủ điểm ngữ pháp là phần bài tập & đáp án nhằm giúp các em củng cố kiến thức đã học, đồng thời tự kiểm tra kết quả.\r\n\r\nSách Giải Thích Ngữ Pháp Tiếng Anh, tác Mai Lan Hương – Hà Thanh Uyên, là cuốn sách ngữ pháp đã được phát hành và tái bản rất nhiều lần trong những năm qua.', 60, 'giai-thich-ngu-phap-tieng-anh.jpg', 1, 24, '2021-10-02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `sex` int(11) NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `account_id` int(11) NOT NULL,
  `update_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `name`, `sex`, `phone`, `email`, `account_id`, `update_at`) VALUES
(5, 'Nguyễn Văn Hoàng', 0, '0303030303', 'admin@admin.vn', 4, '2021-10-01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL,
  `reply` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `update_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `message`, `reply`, `status`, `update_at`) VALUES
(1, 'Nguyễn Văn Hoàng', 'admin@admin.vn', 'test', '', 0, '2021-10-02'),
(2, 'Nguyễn Văn Hoàng', 'admin@admin.vn', 'test1', '', 0, '2021-10-02'),
(5, 'Nguyễn Tấn Tường', '1851061726@e.tlu.edu.vn', 'Lzxczxczxczxcz', 'asdasdasdasd', 1, '2021-10-04'),
(6, 'Nguyễn Tấn Tường', '1851061726@e.tlu.edu.vn', 'zxcazxcasdasd', '', 0, '2021-10-04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `genre`
--

CREATE TABLE `genre` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `genre`
--

INSERT INTO `genre` (`id`, `name`, `status`, `update_at`) VALUES
(1, 'Sách Văn Học', 0, '2021-09-26 12:52:48'),
(2, 'Sách Kinh Tế', 1, '2021-09-26 13:20:13'),
(3, 'Sách ngoại ngữ', 1, '2021-10-01 09:03:44'),
(4, 'Sách thiếu nhi', 1, '2021-10-01 09:04:17'),
(5, 'Sách kĩ năng', 1, '2021-10-01 09:04:23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `import_order`
--

CREATE TABLE `import_order` (
  `id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `creation_date` date NOT NULL DEFAULT current_timestamp(),
  `receive_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `import_order`
--

INSERT INTO `import_order` (`id`, `supplier_id`, `creation_date`, `receive_date`, `status`) VALUES
(1, 7, '2021-09-29', '2000-12-11', 0),
(2, 7, '2021-09-29', '2021-09-29', 1),
(3, 7, '2021-09-29', '2021-09-29', 1),
(4, 7, '2021-09-29', '2021-09-29', 1),
(5, 7, '2021-09-29', '2021-09-29', 1),
(6, 7, '2021-10-02', '2021-10-02', 1),
(7, 8, '2021-10-04', '2021-10-04', 1),
(8, 7, '2021-10-04', '0000-00-00', -1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `import_order_detail`
--

CREATE TABLE `import_order_detail` (
  `import_order_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL DEFAULT 1,
  `price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `import_order_detail`
--

INSERT INTO `import_order_detail` (`import_order_id`, `book_id`, `amount`, `price`) VALUES
(2, 1, 1, '10000'),
(3, 1, 1, '10000'),
(4, 1, 1, '10000'),
(4, 2, 1, '10000'),
(5, 1, 1, '10000'),
(5, 3, 5, '50000'),
(6, 3, 60, '10000'),
(6, 7, 50, '10000'),
(7, 1, 10, '10000'),
(7, 2, 10, '10000'),
(7, 3, 10, '10000'),
(7, 4, 10, '10000'),
(7, 5, 10, '10000'),
(7, 6, 10, '10000'),
(7, 7, 10, '10000'),
(8, 7, 1, '10000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sale_order`
--

CREATE TABLE `sale_order` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `address` text NOT NULL,
  `purchase_date` date NOT NULL DEFAULT current_timestamp(),
  `delivery_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sale_order`
--

INSERT INTO `sale_order` (`id`, `customer_id`, `address`, `purchase_date`, `delivery_date`, `status`) VALUES
(1, 5, 'zxcxz', '2021-10-03', '2021-10-03', 1),
(6, 5, '', '2021-10-03', '2021-11-03', 1),
(7, 5, 'Ha noi', '2021-10-03', '0000-00-00', -1),
(8, 5, 'zxc', '2021-10-03', '0000-00-00', 0),
(9, 3, 'asdas', '2021-10-04', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sale_order_detail`
--

CREATE TABLE `sale_order_detail` (
  `sale_order_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sale_order_detail`
--

INSERT INTO `sale_order_detail` (`sale_order_id`, `book_id`, `amount`) VALUES
(1, 1, 1),
(1, 5, 1),
(6, 1, 21),
(6, 5, 10),
(6, 6, 30),
(7, 1, 8),
(7, 2, 9),
(7, 3, 6),
(7, 4, 8),
(7, 5, 5),
(7, 6, 2),
(7, 7, 10),
(8, 1, 1),
(8, 2, 1),
(8, 3, 1),
(8, 4, 1),
(8, 5, 1),
(8, 6, 1),
(8, 7, 1),
(9, 6, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `supplier`
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
-- Đang đổ dữ liệu cho bảng `supplier`
--

INSERT INTO `supplier` (`id`, `name`, `phone`, `email`, `address`, `status`) VALUES
(7, 'Kim Đồng', '0303030304', 'KimDong@gmail.com', 'Hà Nội', 1),
(8, 'Hà Nội', '0404040404', 'admin@admin.vn', 'Hà Nội', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `name` date NOT NULL,
  `test` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `test`
--

INSERT INTO `test` (`id`, `name`, `test`) VALUES
(1, '0000-00-00', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user` (`user`) USING HASH;

--
-- Chỉ mục cho bảng `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`) USING HASH;

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`) USING HASH;

--
-- Chỉ mục cho bảng `import_order`
--
ALTER TABLE `import_order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `import_order_detail`
--
ALTER TABLE `import_order_detail`
  ADD PRIMARY KEY (`import_order_id`,`book_id`);

--
-- Chỉ mục cho bảng `sale_order`
--
ALTER TABLE `sale_order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sale_order_detail`
--
ALTER TABLE `sale_order_detail`
  ADD PRIMARY KEY (`sale_order_id`,`book_id`);

--
-- Chỉ mục cho bảng `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`) USING HASH;

--
-- Chỉ mục cho bảng `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `import_order`
--
ALTER TABLE `import_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `sale_order`
--
ALTER TABLE `sale_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
