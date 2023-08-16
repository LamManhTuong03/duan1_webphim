-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 11, 2023 lúc 11:05 AM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_nhanh`
--

CREATE TABLE `chi_nhanh` (
  `id` int(11) NOT NULL,
  `ten_chi_nhanh` varchar(199) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chi_nhanh`
--

INSERT INTO `chi_nhanh` (`id`, `ten_chi_nhanh`) VALUES
(1, 'Cầu Giấy'),
(2, 'Bà Triệu'),
(3, 'Mỹ Đình'),
(4, 'CGV Vincom Bắc Từ Liêm'),
(6, 'CGV Vincom Nguyễn Chí Thanh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_nhanh_phim`
--

CREATE TABLE `chi_nhanh_phim` (
  `id` int(11) NOT NULL,
  `id_phim` int(11) NOT NULL,
  `id_chi_nhanh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chi_nhanh_phim`
--

INSERT INTO `chi_nhanh_phim` (`id`, `id_phim`, `id_chi_nhanh`) VALUES
(24, 1, 1),
(25, 2, 2),
(26, 3, 3),
(27, 4, 4),
(28, 9, 6),
(31, 18, 3),
(32, 20, 6),
(33, 21, 2),
(34, 1, 2),
(35, 2, 4),
(36, 11, 2),
(37, 12, 2),
(38, 15, 3),
(40, 1, 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `id_nguoi_dung` int(11) NOT NULL,
  `id_phim` int(11) NOT NULL,
  `ngay_binh_luan` datetime NOT NULL,
  `noi_dung` varchar(2555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `id_nguoi_dung`, `id_phim`, `ngay_binh_luan`, `noi_dung`) VALUES
(26, 1, 1, '2022-11-12 06:31:24', 'ffsfsdfsfsf'),
(28, 2, 1, '2022-11-14 17:19:51', 'dfdsfsdfsdfsdf'),
(29, 3, 1, '2022-11-14 17:19:51', '111111111111111111'),
(32, 1, 1, '2022-11-14 17:34:16', '4444444'),
(35, 1, 1, '2022-11-14 17:34:31', '55555'),
(37, 1, 1, '2022-11-14 17:35:15', '~~~~~~'),
(39, 1, 1, '2022-11-14 17:35:56', 'tuong ngu'),
(42, 1, 1, '0000-00-00 00:00:00', '2345'),
(44, 1, 1, '2022-11-14 17:42:34', '2345'),
(46, 1, 1, '2022-11-14 17:42:43', 'sssss'),
(48, 1, 1, '2022-11-14 17:44:03', '12345'),
(50, 1, 1, '2022-11-14 17:44:23', '55555 nguuuu'),
(51, 1, 1, '2022-11-14 17:44:26', '55555 nguuuu'),
(52, 3, 1, '2022-11-14 18:09:49', 'dssss'),
(53, 3, 1, '2022-11-14 18:09:53', 'dssss'),
(54, 3, 1, '2022-11-14 18:10:00', 'ngu vl'),
(55, 3, 1, '2022-11-14 18:10:02', 'ngu vl'),
(56, 3, 1, '2022-11-14 18:10:29', 'dgdgd'),
(57, 3, 1, '2022-11-14 18:10:37', 'dgdgd'),
(58, 3, 2, '2022-11-14 18:11:41', 'vfd'),
(59, 3, 2, '2022-11-14 18:11:45', 'vfd'),
(60, 3, 3, '2022-11-14 18:11:51', 'gdgfdgffhgfh'),
(61, 3, 3, '2022-11-14 18:11:53', 'hgfhfhfh'),
(62, 3, 3, '2022-11-14 18:12:00', 'ngu vcl\r\n'),
(63, 3, 3, '2022-11-14 18:12:05', 'hahzhaahaa'),
(64, 3, 12, '2022-11-14 18:12:17', 'hihihi'),
(65, 3, 12, '2022-11-14 18:12:21', 'hjaghaaa'),
(66, 3, 12, '2022-11-14 18:12:25', 'ahihihihih'),
(67, 3, 11, '2022-11-14 18:12:35', 'kkkkk'),
(68, 3, 11, '2022-11-14 18:12:40', 'huhuhuhuh'),
(69, 3, 11, '2022-11-14 18:12:45', 'abc'),
(70, 3, 11, '2022-11-14 18:12:49', 'xyz'),
(71, 3, 4, '2022-11-14 18:58:35', 'sssss'),
(72, 3, 4, '2022-11-14 18:58:38', 'sssss'),
(73, 3, 13, '2022-11-14 18:59:11', 'fdfddd'),
(74, 3, 13, '2022-11-14 18:59:13', 'fdfddd'),
(75, 3, 13, '2022-11-14 18:59:17', 'hiihihihi'),
(76, 8, 13, '2022-11-15 10:39:58', 'dfdgdgd'),
(77, 8, 13, '2022-11-15 10:40:01', 'dfdgdgd'),
(78, 8, 13, '2022-11-15 10:42:12', 'dfdgdgd'),
(79, 8, 13, '2022-11-15 10:42:19', 'dfdgdgd'),
(80, 8, 1, '2022-11-16 10:17:21', 'ddddd'),
(81, 8, 1, '2022-11-16 10:17:24', 'ddddd'),
(82, 8, 1, '2022-11-16 10:20:18', 'ddddd'),
(83, 3, 4, '2022-11-16 10:20:32', 'abc'),
(84, 3, 4, '2022-11-16 10:20:34', 'abc'),
(85, 3, 1, '2022-11-17 11:00:13', 'dÃ¨'),
(86, 3, 1, '2022-11-17 11:00:17', 'dÃ¨'),
(87, 8, 15, '2022-11-17 11:08:09', 'adfaadafd'),
(88, 8, 15, '2022-11-17 11:08:11', 'adfaadafd'),
(89, 8, 10, '2022-11-17 11:17:02', 'abc'),
(91, 6, 1, '2022-11-17 15:35:55', 'sadawdaw'),
(92, 3, 12, '2022-12-02 09:39:26', 'phim hay quÃ¡'),
(93, 3, 12, '2022-12-02 09:39:32', 'phim hay quÃ¡'),
(94, 3, 9, '2022-12-02 09:44:19', 'tuyá»‡t vá»i\r\n'),
(95, 3, 9, '2022-12-02 09:44:22', 'tuyá»‡t vá»i\r\n'),
(96, 8, 1, '2022-12-05 15:38:28', 'gfgfgfhfhhdg'),
(97, 8, 1, '2022-12-05 15:38:30', 'gfgfgfhfhhdg'),
(98, 8, 2, '2022-12-09 16:08:15', 'phim ráº¥t hay'),
(99, 2, 3, '2022-12-10 11:33:11', 'Phim ráº¥t hay\r\n'),
(100, 2, 3, '2022-12-10 11:33:16', 'Phim ráº¥t hay\r\n'),
(101, 8, 1, '2022-12-18 10:21:16', 'Phim rất hay'),
(102, 8, 1, '2022-12-18 10:21:19', 'Phim rất hay');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khung_gio_chieu`
--

CREATE TABLE `khung_gio_chieu` (
  `id` int(11) NOT NULL,
  `gio_bat_dau` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khung_gio_chieu`
--

INSERT INTO `khung_gio_chieu` (`id`, `gio_bat_dau`) VALUES
(1, '09:45:00'),
(3, '15:50:00'),
(4, '17:45:00'),
(5, '20:30:00'),
(6, '10:25:00'),
(7, '05:35:00'),
(8, '18:36:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khung_gio_phong_chieu`
--

CREATE TABLE `khung_gio_phong_chieu` (
  `id` int(11) NOT NULL,
  `id_phong_chieu` int(11) NOT NULL,
  `id_khung_gio_chieu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khung_gio_phong_chieu`
--

INSERT INTO `khung_gio_phong_chieu` (`id`, `id_phong_chieu`, `id_khung_gio_chieu`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 3, 5),
(6, 4, 6),
(17, 1, 8),
(18, 1, 7),
(19, 1, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lich_chieu`
--

CREATE TABLE `lich_chieu` (
  `id` int(11) NOT NULL,
  `id_chi_nhanh_phim` int(11) NOT NULL,
  `id_khung_gio_chieu` int(11) NOT NULL,
  `id_ngay_chieu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `lich_chieu`
--

INSERT INTO `lich_chieu` (`id`, `id_chi_nhanh_phim`, `id_khung_gio_chieu`, `id_ngay_chieu`) VALUES
(36, 24, 2, 1),
(37, 24, 1, 1),
(38, 24, 3, 1),
(39, 24, 4, 1),
(40, 34, 1, 1),
(41, 34, 8, 1),
(42, 34, 1, 2),
(43, 24, 1, 2),
(45, 24, 8, 6),
(46, 24, 4, 7),
(47, 25, 2, 2),
(48, 25, 5, 1),
(49, 25, 6, 6),
(50, 35, 3, 1),
(51, 35, 5, 2),
(53, 26, 1, 1),
(54, 24, 2, 2),
(55, 26, 2, 2),
(56, 26, 8, 6),
(57, 27, 1, 1),
(58, 27, 3, 2),
(59, 31, 1, 7),
(60, 31, 1, 2),
(61, 32, 3, 2),
(62, 32, 8, 7),
(63, 28, 3, 2),
(64, 36, 8, 7),
(66, 37, 1, 1),
(67, 38, 4, 6),
(68, 33, 4, 7),
(69, 24, 7, 1),
(70, 34, 5, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_phim`
--

CREATE TABLE `loai_phim` (
  `id` int(11) NOT NULL,
  `ten_loai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loai_phim`
--

INSERT INTO `loai_phim` (`id`, `ten_loai`) VALUES
(1, 'Hành động'),
(2, 'Kinh dị'),
(3, 'Tình cảm'),
(9, 'Drama'),
(10, 'Kịch tính'),
(11, 'Hoạt hình');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ngay_chieu`
--

CREATE TABLE `ngay_chieu` (
  `id` int(11) NOT NULL,
  `ngay` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `ngay_chieu`
--

INSERT INTO `ngay_chieu` (`id`, `ngay`) VALUES
(1, '2022-11-05'),
(2, '2022-12-18'),
(6, '2022-12-20'),
(7, '2023-01-03'),
(8, '2022-12-05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoi_dung`
--

CREATE TABLE `nguoi_dung` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `vai_tro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nguoi_dung`
--

INSERT INTO `nguoi_dung` (`id`, `email`, `password`, `username`, `vai_tro`) VALUES
(1, 'loicurly_19@gmail.com', '202cb962ac59075b964b07152d234b70', 'Phạm Văn Lợi', 0),
(2, 'truongbq31@gmail.com', '202cb962ac59075b964b07152d234b70', 'Trường Kendy', 1),
(6, 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 'Nguyễn Văn A', 0),
(7, 'admin22@gmail.com', '202cb962ac59075b964b07152d234b70', 'Lâm Mạnh Tường', 0),
(8, 'tuongngu@gmail.com', '202cb962ac59075b964b07152d234b70', 'Tường Rất Ngu', 1),
(9, 'truongkd31@gmail.com', '202cb962ac59075b964b07152d234b70', 'Truongbq31', 1),
(10, 'abc@abc.com', '202cb962ac59075b964b07152d234b70', 'Bùi Quang Trường', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phim`
--

CREATE TABLE `phim` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `link_demo` varchar(255) NOT NULL,
  `id_loai_phim` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phim`
--

INSERT INTO `phim` (`id`, `name`, `rate`, `description`, `img`, `link_demo`, `id_loai_phim`) VALUES
(1, 'Avatar 2', '5', 'Avatar: Dòng chảy của nước là một bộ phim điện ảnh thuộc thể loại khoa học viễn tưởng và sử thi của Mỹ năm 2022. Tác phẩm do James Cameron đạo diễn, viết kịch bản và hợp tác sản xuất với 20th Century Studios. Đây là phần phim thứ hai trong loạt phim Avata', 'avatar.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/bf4yyStDWHE\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 1),
(2, 'Thám tử HenRy', '4', 'Bộ phim mở đầu khi thám tử Hên Ry đang phá một vụ án giết người và liên tục đưa ra những phán đoán sai và phi logic. Tiếp theo đó ngài thám tử bừng tỉnh thì mới nhận ra đó là một giấc mơ. Đến đây, câu chuyện thực sự mới bắt đầu: chị Liễu đến tìm thám tử đ', 'henry.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/pY8YEKjh7B4\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 2),
(3, 'Trùm cuối siêu đẳng', '5', 'Mắc kẹt trong vòng lặp thời gian của ngày anh bị giết, một cựu đặc nhiệm phải lật mở bí ẩn đằng sau cái chết đột ngột của anh.', 'trumcuoi.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/TUAYQ4tK-3I\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 1),
(4, 'Giang Lăng 2021', '4', 'Giang Lăng kể về Gil-seok điều hành băng đảng ngầm lớn nhất Gangneung. Min-seok, một trùm băng đảng từ Seoul, người đang nhắm đến quyền sở hữu khu nghỉ mát lớn nhất ở Gangneung, xuất hiện trước mặt anh. Hai người đàn ông coi trọng hòa bình, trung thành và', 'xahoiden.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/jbo0NPuvJB0\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 1),
(9, 'Doraemon', '4', 'Doraemon được mua bản quyền và được cập nhật phát sóng mới nhất trên ứng dụng giải trí POPS. Đây là bộ phim hoạt hình chuyển thể từ truyện tranh hấp dẫn nhất Nhật Bản: Doraemon của tác giả Fujiko Fujio sáng tác từ năm 1969.', 'f52d39e6eacda16328b78c0c845f8470.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/dd_R1GQwKlY\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 11),
(11, 'Dragon super super hero', '5', 'Dragon super super hero', 'd24c0cac91e6c5f7f020b886dd45be31.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/wHAaKXtfSOg\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 11),
(12, 'Naruto', '5', 'Naruto Shippuden hay còn được gọi với cái tên quen thuộc Naruto phần 2 là phần tiếp theo của bộ phim hoạt hình nổi tiếng Naruto, lấy bối cảnh hai năm rưỡi sau khi Naruto rời làng Lá. Naruto Shippuden tiếp tục theo chân chàng ninja trẻ tuổi Naruto Uzumaki ', '9af7188fd0a06855c1c12cbad33b34c9.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/kUn12IczZyY\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 11),
(15, 'Naruto Remake', '4', 'Trong vài tháng qua, đã có khá nhiều tin đồn trong cộng đồng người hâm mộ về việc bộ anime của Naruto cũng như Shippuden đang được làm lại. Vì vào ngày 3 tháng 10 năm 2022, Viz đã phát hành một đoạn anime ngắn có tựa đề Road of Naruto nhân kỷ niệm 20 năm ', 'c5978ea5b3e296e95fa4a467057fd028.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/yKELA1qBAKA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 11),
(18, 'VÔ HẠN - INFINITE 2021', '1', 'Vô Hạn Infinite 2021 Full HD Vietsub Thuyết Minh Năm 1985 , thành phố Mexico , Heinrich Treadway cố gắng trốn thoát khỏi nhà chức trách và một người đàn ông, Bathurst. Anh và các cộng sự của mình, Abel và Leona nói về \"Quả trứng\" mà Treadway đã đánh cắp t', 'Poster-vo-han-infinite-id_2721_152049589gCSke.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/NW36TxUEc7U\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 3),
(20, 'Giấc Mơ Của Mẹ', '4', 'Giấc mơ của mẹ là bộ phim thuộc thể loại tình cảm gia đình, nội dung xoay quanh câu chuyện của Bà Thanh (NSND Hồng Vân) - người mẹ tần tảo sớm khuya chăm lo cho chồng và ba người con. Dù hy sinh và giành hết tâm huyết để vun vén cho gia đình nhưng giữa bà', 'tải xuống.jfif', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/7r4OusCHXJU\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 3),
(21, 'Con Hư Tại Mẹ', '3', 'Con Hư Tại Mẹ', 'images.jfif', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/4VG9Lb_BPHQ\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong_chieu`
--

CREATE TABLE `phong_chieu` (
  `id` int(11) NOT NULL,
  `ten_phong` varchar(199) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phong_chieu`
--

INSERT INTO `phong_chieu` (`id`, `ten_phong`) VALUES
(1, 'cinema 1'),
(2, 'cinema 2 '),
(3, 'cinema 3'),
(4, 'Cinema 5'),
(7, 'Cinema 6'),
(8, 'Cinema 4');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ve`
--

CREATE TABLE `ve` (
  `id` int(11) NOT NULL,
  `id_lich_chieu` int(11) NOT NULL,
  `id_nguoi_dung` int(11) NOT NULL,
  `ghe_ngoi` text NOT NULL,
  `ngay_dat` varchar(99) NOT NULL,
  `gia` int(22) NOT NULL,
  `ma_hoa_don` varchar(20) NOT NULL,
  `trang_thai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `ve`
--

INSERT INTO `ve` (`id`, `id_lich_chieu`, `id_nguoi_dung`, `ghe_ngoi`, `ngay_dat`, `gia`, `ma_hoa_don`, `trang_thai`) VALUES
(162, 40, 6, 'A1,A2 ', '07:13 am 18-12-2022', 40000, 'S84LVZNR7Q', 1),
(163, 53, 6, 'A3,A4 ', '07:14 am 18-12-2022', 40000, 'T1QAH9XSRE', 1),
(164, 36, 6, 'B1,B2 ', '07:37 am 18-12-2022', 40000, 'AXNFZQKHB1', 0),
(165, 42, 6, 'B2 ', '07:40 am 18-12-2022', 20000, 'X4O2EZ3RNP', 0),
(166, 41, 6, 'A3,A4 ', '07:44 am 18-12-2022', 40000, 'AZQBERFIN1', 0),
(167, 43, 6, 'C5,C6 ', '07:44 am 18-12-2022', 40000, 'VFLP3ENMH9', 0),
(168, 54, 6, 'A5,A6 ', '07:45 am 18-12-2022', 40000, '57XKBTCFR4', 0),
(169, 45, 6, 'C3,A1,A2,A5,A6,C4 ', '07:45 am 18-12-2022', 120000, 'TEMC8KIL4X', 0),
(170, 46, 6, 'F5,F6 ', '07:46 am 18-12-2022', 40000, 'F9E64THM1D', 1),
(171, 47, 6, 'A2,A3,A6 ', '07:46 am 18-12-2022', 60000, 'P2XR8QDLAC', 1),
(172, 48, 6, 'A1,A2,E4,E5 ', '07:46 am 18-12-2022', 80000, '572Q1XD4N6', 0),
(173, 50, 6, 'D1,D2 ', '07:46 am 18-12-2022', 40000, 'V8M0XI6O4Z', 0),
(174, 51, 6, 'C1,C2 ', '07:47 am 18-12-2022', 40000, 'KXA18Q4H7S', 0),
(175, 49, 6, 'C3,C4 ', '07:47 am 18-12-2022', 40000, '68V7OSNBKL', 0),
(176, 66, 6, 'A3,A4 ', '08:01 am 18-12-2022', 40000, 'E20BFIRNP6', 0),
(177, 55, 6, 'A3,A4 ', '08:02 am 18-12-2022', 40000, '9CTS052HZX', 0),
(178, 55, 6, 'A1,A2 ', '08:02 am 18-12-2022', 40000, '0NQK9L35E4', 0),
(179, 56, 6, 'E5,E6 ', '08:02 am 18-12-2022', 40000, 'VFDITB9Q57', 0),
(180, 40, 2, 'D5,D6 ', '08:04 am 18-12-2022', 100000, 'K18NALXVMP', 0),
(181, 43, 2, 'E3,E4 ', '08:04 am 18-12-2022', 100000, '4IE70O9M3H', 0),
(182, 56, 2, 'D1,D2 ', '08:05 am 18-12-2022', 100000, 'C78O2ANXSL', 1),
(183, 68, 2, 'C3,C4 ', '08:07 am 18-12-2022', 100000, '4T38DSB0NX', 1),
(185, 64, 6, 'B1,B2,C2,C1,E4,D4 ', '08:12 am 18-12-2022', 300000, '7RNO80QA42', 0),
(186, 40, 8, 'C3,C4 ', '15:40 pm 18-12-2022', 100000, '1L2H6Z4NMI', 0),
(187, 40, 8, 'D3,D4 ', '15:42 pm 18-12-2022', 100000, 'XQ926R35A7', 1),
(188, 40, 8, 'F6,F5 ', '15:42 pm 18-12-2022', 100000, 'A7T216BNEO', 1),
(189, 59, 8, 'D3,C3,C4,D4 ', '16:14 pm 18-12-2022', 200000, 'QCH2FOT31X', 0),
(190, 60, 2, 'B3,B4 ', '17:14 pm 18-12-2022', 100000, '5K0ET9CSPV', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chi_nhanh`
--
ALTER TABLE `chi_nhanh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chi_nhanh_phim`
--
ALTER TABLE `chi_nhanh_phim`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khung_gio_chieu`
--
ALTER TABLE `khung_gio_chieu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khung_gio_phong_chieu`
--
ALTER TABLE `khung_gio_phong_chieu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lich_chieu`
--
ALTER TABLE `lich_chieu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loai_phim`
--
ALTER TABLE `loai_phim`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ngay_chieu`
--
ALTER TABLE `ngay_chieu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phim`
--
ALTER TABLE `phim`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phong_chieu`
--
ALTER TABLE `phong_chieu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ve`
--
ALTER TABLE `ve`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chi_nhanh`
--
ALTER TABLE `chi_nhanh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `chi_nhanh_phim`
--
ALTER TABLE `chi_nhanh_phim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT cho bảng `khung_gio_chieu`
--
ALTER TABLE `khung_gio_chieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `khung_gio_phong_chieu`
--
ALTER TABLE `khung_gio_phong_chieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `lich_chieu`
--
ALTER TABLE `lich_chieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT cho bảng `loai_phim`
--
ALTER TABLE `loai_phim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `ngay_chieu`
--
ALTER TABLE `ngay_chieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `phim`
--
ALTER TABLE `phim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `phong_chieu`
--
ALTER TABLE `phong_chieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `ve`
--
ALTER TABLE `ve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
