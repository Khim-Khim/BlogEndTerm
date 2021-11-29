-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 29, 2021 lúc 09:48 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `datablog`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `status`
--

CREATE TABLE `status` (
  `id_status` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `id_page` bigint(20) UNSIGNED NOT NULL,
  `hot` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `status`
--

INSERT INTO `status` (`id_status`, `user_id`, `id_page`, `hot`, `title`, `description`, `image`, `video`, `created_at`, `updated_at`) VALUES
(2, 1, 2, 1, 'vân vận', '<p>fsdfsgrew</p>', 'vanvavn.jpg', 'vanvavn.jpg', '2021-11-11 11:07:59', '2021-11-29 01:05:50'),
(3, 1, 1, 0, 'sapa', 'sapa', 'sapa.jpg', 'sapa.mp4', '2021-11-11 11:07:27', '2021-11-29 01:05:28'),
(6, 1, 1, 1, 'Đà Lạt ngày vào đông', 'còn gì thú vị hơn những ngày Đà Lạt đã vào đông, bên ly sữa', 'sapa.jpg', 'sapa.mp4', '2021-11-11 11:10:05', '2021-11-11 11:10:05'),
(8, 1, 2, 1, 'Kinh nghiệm chuẩn bị đồ đi phượt', ' Trước mỗi chuyến đi việc chuẩn bị đồ đạc mang theo là vô cùng quan trọng, nhiều quá thì sẽ khiến trọng lượng bị tăng dẫn tới việc cồng kềnh cho chuyến đi, nhưng ít quá thì khi bạn cần lại không có để sử dụng, tất cả mọi thứ nên vừa đủ. Việc lựa chọn ĐỦ n', 'chuan-bi-do-khi-di-phuot-2.jpg', 'diphuot.mp4', '2021-11-17 06:49:39', '2021-11-17 06:49:39'),
(9, 2, 2, 1, '13 kinh nghiệm khi đi phượt bằng xe máy: Lưu ý quan trọng rất ít người biết', 'Đã rất nhiều lần bạn tìm hiểu những lưu ý khi đi phượt bằng xe máy nhưng lại cảm thấy thất vọng vì những điều ấy không phù hợp với bạn ? Bạn hoang mang mỗi lần lên kế hoặc đi phượt chỉ vì có quá ít kinh nghiệm đi du lịch bụi ? Bạn gặp không ít khó khăn tr', 'nam-ro-lo-trinh-152806j8.jpg', 'lotrinh.mp4', '2021-11-17 06:49:39', '2021-11-29 00:55:28'),
(10, 1, 3, 1, 'Điểm Danh Top 20 Món Ăn Ngon Ở Hà Nội Phải Thử Ít Nhất Một Lần', 'Mỗi vùng đất có những nét đẹp ẩm thực và hương vị đặc trưng riêng tạo nên cái hồn của nơi đó. Hà Nội cũng vậy, nới đây có rất nhiều món ăn ngon và độc đáo tạo nên nét đẹp riêng của Hà Thành chẳng thể lẫn vào đâu được. Nếu có cơ hội đến với Hà Nội, bạn nhấ', 'phở-min-1-750x500.jpg', 'hanoi.mp4', '2021-11-17 07:15:19', '2021-11-17 07:15:19'),
(11, 2, 3, 0, 'Ăn gì sài Gòn? Top Món ngon Sài Gòn (TP. HCM) cho bạn CHIẾN TỚI BẾN!!', 'Món ngon Sài Gòn – Sài Gòn là thành phố trẻ trung năng động. Nơi đây không chỉ có người Sài Gòn gốc mà còn có dân nhập cư trên khắp mọi miền của Tổ quốc. Bởi vậy, Sài Gòn không chỉ có một nền văn hoá đa dạng mà ẩm thực Sài Gòn cũng cực kỳ phong phú.', 'Mon-ngon-Sai-Gon.jpg', 'saigon.mp4', '2021-11-17 07:15:19', '2021-11-17 07:15:19'),
(12, 2, 4, 1, 'Kinh nghiệm du lịch Đà Lạt tự túc 2021 hơn cả hướng dẫn viên\r\n', 'Dù đã đi du lịch Đà Lạt tận những 4 lần chỉ trong vài năm ngắn ngủi, nhưng mình vẫn thấy Đà Lạt là sự lựa chọn tuyệt vời cho những ai muốn trốn tránh cái nóng oi bức của mùa hè. Cảm giác được thăm thú, vãn cảnh và đắm chìm trong vẻ đẹp của thiên nhiên, qu', 'kinh-nghiem-du-lich-da-lat-1.jpg', 'dalat.mp4', '2021-11-17 07:24:09', '2021-11-17 07:24:09'),
(13, 2, 4, 0, 'Kinh nghiệm du lịch Hội An tự túc 2021 khám phá phổ cổ', 'Hội An luôn được xếp vào danh sách những địa điểm hấp dẫn của Việt Nam. Không chỉ là khách du lịch trong nước mà khách quốc tế đều rất ấn tượng với vẻ đẹp bình yên cùng với nền văn hóa giao thoa Đông – Tây của phố cổ. Tới đây dù dài hay ngắn cũng đủ để bạ', 'kinh-nghiem-du-lich-hoi-an-2017-e1495288514311.jpg', 'hoian.mp4', '2021-11-17 07:24:09', '2021-11-17 07:24:09');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`),
  ADD KEY `status_user_id_foreign` (`user_id`),
  ADD KEY `status_page_id_foreign` (`id_page`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `status`
--
ALTER TABLE `status`
  MODIFY `id_status` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `status`
--
ALTER TABLE `status`
  ADD CONSTRAINT `status_page_id_foreign` FOREIGN KEY (`id_page`) REFERENCES `idpage` (`id`),
  ADD CONSTRAINT `status_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
