-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 11, 2020 lúc 04:08 PM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `comicwebsite`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `author`
--

CREATE TABLE `author` (
  `AuthorID` int(11) NOT NULL,
  `AuthorName` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `author`
--

INSERT INTO `author` (`AuthorID`, `AuthorName`) VALUES
(1, 'Eiichiro Oda'),
(2, 'Takahashi Yoichi'),
(3, 'Takeshi Obata'),
(4, 'Gosho Aoyama'),
(5, 'Fujiko F. Fujio'),
(6, 'Akira Toriyama'),
(7, 'Masaomi Kanzaki'),
(8, 'Kishimoto Masashi'),
(9, 'Inuoe Takehiko'),
(10, 'Kazuki Takahashi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chapter`
--

CREATE TABLE `chapter` (
  `ChapterID` int(11) NOT NULL,
  `ChapterName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ComicID` int(11) NOT NULL,
  `ChapterURL` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DateSubmitted` timestamp NOT NULL DEFAULT current_timestamp(),
  `ChapterView` int(11) NOT NULL DEFAULT 0,
  `ChapterImage` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chapter`
--

INSERT INTO `chapter` (`ChapterID`, `ChapterName`, `ComicID`, `ChapterURL`, `DateSubmitted`, `ChapterView`, `ChapterImage`) VALUES
(1, 'Chapter 1  Romance Dawn', 1, 'Chapter 1  Romance Dawn', '2019-12-16 18:35:18', 0, '001.jpg#002.jpg#003.jpg#004.jpg#005.jpg#006.jpg#007.jpg#008.jpg#009.jpg#010.jpg#011.jpg#012.jpg#013.jpg#014.jpg#015.jpg#016.jpg#017.jpg#018.jpg#019.jpg#020.jpg#021.jpg#022.jpg#023.jpg#024.jpg#025.jpg#026.jpg#027.jpg#028.jpg#029.jpg#030.jpg#031.jpg#032.jpg#033.jpg#034.jpg#035.jpg#036.jpg#037.jpg#038.jpg#039.jpg#040.jpg#041.jpg#042.jpg#043.jpg#044.jpg#045.jpg#046.jpg#047.jpg#048.jpg#049.jpg#050.jpg#051.jpg#052.jpg#053.jpg#054.jpg'),
(2, 'Chapter 2  They Call Him Strawhat Luffy', 1, 'Chapter 2  They Call Him Strawhat Luffy', '2019-12-16 18:35:55', 0, '001.jpg#002.jpg#003.jpg#004.jpg#005.jpg#006.jpg#007.jpg#008.jpg#009.jpg#010.jpg#011.jpg#012.jpg#013.jpg#014.jpg#015.jpg#016.jpg#017.jpg#018.jpg#019.jpg#020.jpg#021.jpg#022.jpg#023.jpg'),
(3, 'Chapter 3  Pirate Hunter Zoro Enters', 1, 'Chapter 3  Pirate Hunter Zoro Enters', '2019-12-16 18:36:21', 0, '001.jpg#002.jpg#003.jpg#004.jpg#005.jpg#006.jpg#007.jpg#008.jpg#009.jpg#010.jpg#011.jpg#012.jpg#013.jpg#014.jpg#015.jpg#016.jpg#017.jpg#018.jpg#019.jpg#020.jpg#021.jpg'),
(4, 'Chapter 4  Marine Lieutenant Axe Hand Morgan', 1, 'Chapter 4  Marine Lieutenant Axe Hand Morgan', '2019-12-16 18:36:40', 0, '001.jpg#002.jpg#003.jpg#004.jpg#005.jpg#006.jpg#007.jpg#008.jpg#009.jpg#010.jpg#011.jpg#012.jpg#013.jpg#014.jpg#015.jpg#016.jpg#017.jpg#018.jpg#019.jpg'),
(5, 'Chapter 5  Pirate King And The Great Swordsman', 1, 'Chapter 5  Pirate King And The Great Swordsman', '2019-12-16 18:37:03', 0, '001.jpg#002.jpg#003.jpg#004.jpg#005.jpg#006.jpg#007.jpg#008.jpg#009.jpg#010.jpg#011.jpg#012.jpg#013.jpg#014.jpg#015.jpg#016.jpg#017.jpg#018.jpg#019.jpg#020.jpg#021.jpg'),
(6, 'Chapter 6  The First Crew Member', 1, 'Chapter 6  The First Crew Member', '2019-12-16 18:37:25', 0, '001.jpg#002.jpg#003.jpg#004.jpg#005.jpg#006.jpg#007.jpg#008.jpg#009.jpg#010.jpg#011.jpg#012.jpg#013.jpg#014.jpg#015.jpg#016.jpg#017.jpg#018.jpg#019.jpg#020.jpg#021.jpg#022.jpg'),
(7, 'Chapter 7  Friends', 1, 'Chapter 7  Friends', '2019-12-16 18:37:41', 0, '001.jpg#002.jpg#003.jpg#004.jpg#005.jpg#006.jpg#007.jpg#008.jpg#009.jpg#010.jpg#011.jpg#012.jpg#013.jpg#014.jpg#015.jpg#016.jpg#017.jpg#018.jpg#019.jpg#020.jpg#021.jpg'),
(8, 'Chapter 8  Nami Enters', 1, 'Chapter 8  Nami Enters', '2019-12-16 18:37:55', 0, '001.jpg#002.jpg#003.jpg#004.jpg#005.jpg#006.jpg#007.jpg#008.jpg#009.jpg#010.jpg#011.jpg#012.jpg#013.jpg#014.jpg#015.jpg#016.jpg#017.jpg#018.jpg#019.jpg'),
(9, 'Chapter 9  Evil Woman', 1, 'Chapter 9  Evil Woman', '2019-12-16 18:38:23', 0, '001.jpg#002.jpg#003.jpg#004.jpg#005.jpg#006.jpg#007.jpg#008.jpg#009.jpg#010.jpg#011.jpg#012.jpg#013.jpg#014.jpg#015.jpg#016.jpg#017.jpg#018.jpg#019.jpg#020.jpg#021.jpg#022.jpg#023.jpg#024.jpg#025.jpg#026.jpg#027.jpg#028.jpg'),
(10, 'Chapter 10  What Happened At The Bar', 1, 'Chapter 10  What Happened At The Bar', '2019-12-16 18:38:41', 0, '001.jpg#002.jpg#003.jpg#004.jpg#005.jpg#006.jpg#007.jpg#008.jpg#009.jpg#010.jpg#011.jpg#012.jpg#013.jpg#014.jpg#015.jpg#016.jpg#017.jpg#018.jpg#019.jpg#020.jpg#021.jpg#022.jpg#023.jpg#024.jpg'),
(11, 'Vol.1 Chapter 1  Uzumaki Naruto', 8, 'Vol.1 Chapter 1  Uzumaki Naruto', '2019-12-18 13:21:28', 0, '001.jpg#002.jpg#003.jpg#004.jpg#005.jpg#006.jpg#007.jpg#008.jpg#009.jpg#010.jpg#011.jpg#012.jpg#013.jpg#014.jpg#015.jpg#016.jpg#017.jpg#018.jpg#019.jpg#020.jpg#021.jpg#022.jpg#023.jpg#024.jpg#025.jpg#026.jpg#027.jpg#028.jpg#029.jpg#030.jpg#031.jpg#032.jpg#033.jpg#034.jpg#035.jpg#036.jpg#037.jpg#038.jpg#039.jpg#040.jpg#041.jpg#042.jpg#043.jpg#044.jpg#045.jpg#046.jpg#047.jpg#048.jpg#049.jpg#050.jpg#051.jpg#052.jpg#053.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comic`
--

CREATE TABLE `comic` (
  `ComicID` int(11) NOT NULL,
  `Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `URL` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `AuthorID` int(11) NOT NULL,
  `Summary` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Status` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DateSubmitted` timestamp NOT NULL DEFAULT current_timestamp(),
  `LastUpdated` timestamp NOT NULL DEFAULT current_timestamp(),
  `View` int(11) NOT NULL DEFAULT 0,
  `CoverIMG` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PosterID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comic`
--

INSERT INTO `comic` (`ComicID`, `Name`, `URL`, `AuthorID`, `Summary`, `Status`, `DateSubmitted`, `LastUpdated`, `View`, `CoverIMG`, `PosterID`) VALUES
(1, 'One Piece', 'One Piece', 1, 'đvkhkụdshkfhks kdsjfksjdfhksdhf sdjfks jdhkshdfk sjhd skdjf hksdjfhk sjdhkf jshdkjf skd fhkjsdh', 'Hoàn thành', '2019-12-16 18:11:34', '2019-12-18 02:14:17', 0, 'onepiece-cover-image.jpg', 1),
(2, 'Captain Tsubasa', 'Captain Tsubasa', 2, 'ds sllsialjdij asidjaijsd ijasd asd  alsdklksaldalsk asd aksld a', 'Đang tiến hành', '2019-12-17 17:22:14', '2019-12-11 01:28:26', 0, 'giac-mo-san-co-cover-image.gif', 1),
(3, 'Cuốn sổ tử thần', 'Death note', 3, 'aaaaaaaaaaaaaaaaaa aaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaa aaaaaaaaaaaaa', 'Hoàn thành', '2019-12-17 17:26:15', '2019-12-15 23:08:20', 0, 'death-note-cover-image.jpg', 1),
(4, 'Thám tử lừng danh Conan', 'Detective Conan', 4, 'lajsdajsd alsidjaisdj oasdh aosud haous dhaoushd aosuh daush đauh ấd', 'Hoàn thành', '2019-12-17 17:29:43', '2019-12-17 07:30:18', 0, 'tham-tu-lung-danh-conan-cover-image.jpg', 1),
(5, 'Doraemon', 'Doraemon', 5, 'asdsjkj ajsdj kasjdk jasjd kajs dkajs kas đák jasjd ajsdk jaskdj kasj ', 'Hoàn thành', '2019-12-17 17:33:49', '2019-12-10 08:24:25', 0, 'doraemon-cover-image.jpg', 1),
(6, '7 viên ngọc rồng', 'Dragon Ball', 6, 'asdasdla alsidj aisdj iasd asdiaiuaisdu aisud iaud iauds iausd iausiua', 'Hoàn thành', '2019-12-17 17:36:21', '2019-12-04 02:31:27', 0, 'dragonball-cover-image.jpg', 1),
(7, 'Dấu ấn rồng thiêng', 'Dragon quest', 7, 'askdklsfkdlk sldkf lskdfl skdlfskd sjdlf sijdlfi jslidj lsidj flisjdl fi', 'Hoàn thành', '2019-12-17 17:38:37', '2019-12-05 06:36:47', 0, 'dragon-quest-dau-an-rong-thieng-cover-image.jpg', 1),
(8, 'Naruto', 'Naruto', 8, 'asd asd aksjd alijdl iasdi aisd asd ajsd alsd', 'Hoàn thành', '2019-12-17 17:40:53', '2019-12-20 13:41:30', 0, 'naruto-cover-image.jpg', 1),
(9, 'Slam dunk', 'Slam dunk', 9, 'askdalskdjlaksjd alskdjl aksjd lajsd aslkdjal skjladk jlakjsld k', 'Hoàn thành', '2019-12-17 17:43:24', '2019-12-09 17:00:00', 0, 'Slam-Dunk-cover-image.jpg', 1),
(10, 'Vua trò chơi', 'Yugioh', 10, 'asdasdlkl asldk ajsld jaksjd aksjd laksjdl ajlsdj lajsld kajlsdj ', 'Hoàn thành', '2019-12-17 17:45:16', '2019-12-09 06:33:35', 0, 'yu-gi-oh-cover-image.jpg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comic_genre`
--

CREATE TABLE `comic_genre` (
  `ComicID` int(11) NOT NULL,
  `GenreID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comic_genre`
--

INSERT INTO `comic_genre` (`ComicID`, `GenreID`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(2, 4),
(2, 6),
(3, 4),
(3, 7),
(3, 8),
(3, 9),
(3, 10),
(3, 11),
(4, 2),
(4, 8),
(4, 12),
(5, 2),
(5, 3),
(5, 13),
(5, 14),
(6, 1),
(6, 2),
(6, 3),
(6, 5),
(7, 1),
(7, 2),
(7, 5),
(8, 1),
(8, 3),
(8, 4),
(8, 5),
(9, 3),
(9, 6),
(10, 2),
(10, 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `genre`
--

CREATE TABLE `genre` (
  `GenreID` int(11) NOT NULL,
  `GenreName` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `genre`
--

INSERT INTO `genre` (`GenreID`, `GenreName`) VALUES
(1, 'Hành động'),
(2, 'Phiêu lưu'),
(3, 'Hài hước'),
(4, 'Drama'),
(5, 'Fantasy'),
(6, 'Thể thao'),
(7, 'Kinh dị'),
(8, 'Bí ẩn'),
(9, 'Tâm lý'),
(10, 'Siêu nhiên'),
(11, 'Bi kịch'),
(12, 'Trinh thám'),
(13, 'Đời thường'),
(14, 'Khoa học viễn tưởng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `UserAccount` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `UserPassword` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `UserImage` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Authority` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`UserID`, `UserAccount`, `UserPassword`, `UserImage`, `Authority`) VALUES
(1, 'nhnam', '123', 'praise_the_sun.jpg', 'admin'),
(2, 'qwertyuiopasdf', '123', 'praise_the_sun.jpg', 'guest');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`AuthorID`);

--
-- Chỉ mục cho bảng `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`ChapterID`),
  ADD KEY `chapter_comic_ComicID_fk` (`ComicID`);

--
-- Chỉ mục cho bảng `comic`
--
ALTER TABLE `comic`
  ADD PRIMARY KEY (`ComicID`),
  ADD KEY `comic_author_AuthorID_fk` (`AuthorID`),
  ADD KEY `comic_user_UserID_fk` (`PosterID`);

--
-- Chỉ mục cho bảng `comic_genre`
--
ALTER TABLE `comic_genre`
  ADD PRIMARY KEY (`ComicID`,`GenreID`),
  ADD KEY `comic_genre_genre_GenreID_fk` (`GenreID`);

--
-- Chỉ mục cho bảng `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`GenreID`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `author`
--
ALTER TABLE `author`
  MODIFY `AuthorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `chapter`
--
ALTER TABLE `chapter`
  MODIFY `ChapterID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `comic`
--
ALTER TABLE `comic`
  MODIFY `ComicID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `genre`
--
ALTER TABLE `genre`
  MODIFY `GenreID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chapter`
--
ALTER TABLE `chapter`
  ADD CONSTRAINT `chapter_comic_ComicID_fk` FOREIGN KEY (`ComicID`) REFERENCES `comic` (`ComicID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `comic`
--
ALTER TABLE `comic`
  ADD CONSTRAINT `comic_author_AuthorID_fk` FOREIGN KEY (`AuthorID`) REFERENCES `author` (`AuthorID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comic_user_UserID_fk` FOREIGN KEY (`PosterID`) REFERENCES `user` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `comic_genre`
--
ALTER TABLE `comic_genre`
  ADD CONSTRAINT `comic_genre_comic_ComicID_fk` FOREIGN KEY (`ComicID`) REFERENCES `comic` (`ComicID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comic_genre_genre_GenreID_fk` FOREIGN KEY (`GenreID`) REFERENCES `genre` (`GenreID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
