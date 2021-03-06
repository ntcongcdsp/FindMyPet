-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2015 at 08:04 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `findmypet`
--

-- --------------------------------------------------------

--
-- Table structure for table `baiviet`
--

CREATE TABLE IF NOT EXISTS `baiviet` (
  `ID` int(11) NOT NULL,
  `TieuDe` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `TomTat` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `NoiDung` text COLLATE utf8_unicode_ci NOT NULL,
  `HinhAnh` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'logo.gif',
  `TenDN` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `IDDanhMuc` int(11) NOT NULL,
  `KiemDuyet` tinyint(1) NOT NULL,
  `NgayDang` date NOT NULL,
  `Loai` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Giong` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DacDiem` text COLLATE utf8_unicode_ci NOT NULL,
  `TinhCach` text COLLATE utf8_unicode_ci NOT NULL,
  `KhaNang` text COLLATE utf8_unicode_ci NOT NULL,
  `NguonGoc` text COLLATE utf8_unicode_ci NOT NULL,
  `TieuChuan` text COLLATE utf8_unicode_ci NOT NULL,
  `Ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Mau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Tuoi` int(11) NOT NULL,
  `DacDiemNhanDang` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `baiviet`
--

INSERT INTO `baiviet` (`ID`, `TieuDe`, `TomTat`, `NoiDung`, `HinhAnh`, `TenDN`, `IDDanhMuc`, `KiemDuyet`, `NgayDang`, `Loai`, `Giong`, `DacDiem`, `TinhCach`, `KhaNang`, `NguonGoc`, `TieuChuan`, `Ten`, `Mau`, `Tuoi`, `DacDiemNhanDang`) VALUES
(1, 'Tiêu chuẩn chó Alaskan Malamute', 'Là một trong ba dòng chó kéo xe chính hay còn gọi là chó tuyết gồm có Alaskan Malamute, Husky và Smo', 'Là một trong ba dòng chó kéo xe chính hay còn gọi là chó tuyết gồm có Alaskan Malamute, Husky và Smoyed. Cũng giống như bất kỳ giống chó khác, chó Alaska cũng có những tiêu chuẩn riêng để đánh giá, xét trên các tiêu chí về ngoại hình, vóc dáng hay màu sắc. Vậy tiêu chí để chọn lựa những chú Alaska đẹp, tiêu chuẩn là gì? Cùng điểm qua một vài đặc điểm cơ bản cũng như một số tiêu chí lý tưởng để đánh giá vẻ đẹp của những chú chó tuyết Alaska.\r\nNgoại hình tiêu chuẩn chó Alaska\r\n\r\n* Tầm vóc\r\n\r\n     Tiêu chuẩn về giống chó Alaskan Malamute có kích cỡ lý tưởng trọng lượng phải đạt từ 75 - 85 pounds (34 – 38,5 kg) và chiều cao từ 23 - 25 inches (58 – 63,5 cm).\r\n\r\nCấu trúc thân hình của Alaskan Malamute phải cân xứng với khung xương to, cơ thể không thừa cân, xương thì cân đối với kích cỡ. Tỷ lệcơ thể cân đối là chiều cao/chiều dài= 9/10 trong đó chiều dài được tính từ khớp xương vai tới mép sau xương chậu, còn chiều cao tính từ mặt đất đến đỉnh xương vai.\r\n\r\nNgực có chiều sâu bằng ½ chiều cao tính đến vai và điểm sâu nhất nằm ngay sau chân trước. Chó Alaska Malamute tốt phải nặng xương, cẳng chân khỏe, bàn chân tốt, ngực rộng, cơ bắp săn chắc, đôi vai vạm vỡ, cùng nhiều thuộc tính thể chất cần thiết khác giúp cho chúng hoạt động hiệu quả. Dáng đi cần phải vững chãi, cân bằng, không mỏi mệt. Chúng có một dáng vẻ kiêu hãnh, năng động, với thân mình luôn đứng vững chắc trên gan bàn chân, đầu ngẩng cao, đôi mắt lanh lợi.\r\n\r\n \r\n* Phần đầu\r\n\r\nĐầu rộng và sâu, cân đối với toàn bộ cơ thể, phần khung xương giữa hai tai hơi tròn, càng về phía mắt càng thuôn và hẹp dần. Hai mắt nằm xếch lên phía trên. Hình quả hạnh nhân với cỡ trung bình. Giữa hai mắt là một nếp nhăn nhỏ. Phần giao nhau giữa đầu và mõm hơi nghiêng nhẹ xuống dưới.\r\n\r\nMõm to và có phần đồ sộ so với đầu, mõm không dài, không nhọn, nhưng cũng không quá ngắn hoặc mập. Hai môi có viền mép đều phủ kín, hàm trên và dưới rộng, răng lớn. Răng cửa hàm trên luôn khớp với răng cửa hàm dưới. Răng nhô ra ngoài hay thụt vào đều bị xem là khuyết điểm.\r\n\r\nTai có cỡ vừa phải, nhưng phải nhỏ so với đầu. Tai hình tam giác, chỏm vành tai hơi tròn. Hai tai cách nhau một khoảng rộng, nằm trên gờ sau xương đầu, thẳng hàng với góc trên của mắt. Khi tai dựng thường hướng về phía trước. Thỉnh thoảng tai cụp vào đầu khi đang hoạt động hoặc làm việc. Chó có tai ở cao quá trên đầu là không đạt chuẩn.\r\n\r\n \r\n* Đường nét cơ thể\r\n\r\nCổ rất khỏe và hơi có hình vòng cung. Ngực rất phát triển. Cơ thể săn chắc, gọn gàng. Lưng thẳng và dốc nhẹ về phía hông.\r\n\r\nThắt lưng cứng và nhiều cơ bắp. Thắt lưng dài là không chuẩn vì có thể làm lưng yếu đi. Đuôi không quá cao hay quá thấp, phần mấu đuôi giáp với thân thẳng hàng với xương sống.\r\n\r\nKhi đứng, đuôi chó cong lên trên lưng, không cụt, cong sát vào lưng hay có lông ngắn như đuôi cáo. Ngược lại, đuôi chó Malamute rất dày lông và trông như chiếc lông vũ đang phấp phới.\r\n\r\n\r\n- Thân trước\r\n\r\nVai hơi xuôi, chân trước nặng xương và nhiều cơ, chân thẳng hàng với cổ chân khi nhìn từ phía trước. Cổ chân ngắn, khỏe và hơi dốc khi nhìn nghiêng. Bàn chân lớn, các ngón chân khít vào nhau và cong đều, móng chân ngắn, khỏe, gan đệm bàn chân dày và cứng. Ở giữa các ngón chân có 1 lớp lông bảo vệ tạo cho chó một vẻ ngoài vững chắc và gọn gàng\r\n\r\n\r\n- Thân sau\r\n\r\nHai chân sau rộng, cơ đùi rất phát triển. Khuỷu chân sau hơi cong, các khớp khuỷu chân sau cong và xuôi xuống. Nhìn từ phía sau, các chân sau khi đứng và di chuyển luôn đồng bộ với chân trước, cách chân trước không quá gần hoặc quá xa. Chó có móng đeo là không tốt, do đó nên cắt móng đeo sớm sau khi chó mới sinh.\r\n\r\nChân chó Malamute phải cho thấy một thể lực phi thường và một sức đẩy cực mạnh. Bất kỳ một dấu hiệu không khỏe mạnh nào ở cẳng chân, bàn chân, thân trước hay sau, khi đứng im hay di chuyển đều là khuyết điểm nghiêm trọng. Một số khuyết điểm có thể kể ra gồm: chân bẹt vẹo ra, khuỷu chân sau to, khuỷu chân yếu, vai quá thẳng và thiếu độ nghiêng, dáng đi cứng nhắc (hoặc không cân bằng và vững), tính tình hời hợt, chậm chạp, xương nhẹ và cơ thể không cân đối.\r\n\r\n \r\nMàu sắc tiêu chuẩn với chó Alaska Malamute\r\n\r\nChó Malamute có những màu thông thường với những sắc thái khác nhau gồm trắng pha xám đen, trắng pha xám lông chồn, trắng pha đen, trắng pha đỏ, hoặc trắng tuyền một màu.\r\n\r\nMàu trắng tuyền là màu đơn duy nhất được công nhận ở chó Malamute. Tất cả các màu khác phải có lớp dưới màu trắng, đồng thời được nhấn bởi màu trắng ở vùng mặt, ngực và chân. Thân mình có màu loang lỗ hoặc phân bố không đều là không tốt.\r\n\r\n Alaskan Malamute đẹp nhất là nhờ bộ lông dày mượt, đặc biệt cái đuôi xõa đều cong ngược trên lưng như một bông lau. Bộ lông kép dày gồm 2 lớp ngăn không cho cái lạnh buốt xương ngấm vào cơ thể. Lớp lông dài bên ngoài đặc biệt không thấm nước, lớp lông trong ngắn hơn nhưng rất dày, có cấu trúc như lông cừu nên việc chăm sóc bộ lông cho chúng đòi hỏi phải rất kiên trì.\r\n\r\nChiều dài lông tăng dần ở vai, cổ, lưng, mông, dọc theo đuôi. Vào mùa hè lông chó Malamute trở nên ngắn và thưa hơn. Nên để lông tự nhiên, không nên tỉa lông trừ vùng quanh móng chân để bàn chân trông gọn gàng sạch sẽ hơn. Vùng lông quanh cổ dài hơn hẳn so với các nơi khác để bảo vệ tối đa cho mặt.\r\n\r\nCác đường nét trên mặt tạo thành một đặc điểm khu biệt, với một chỏm lông trên đỉnh đầu, còn mặt thì có thể toàn màu trắng hoặc được điểm xuyết bởi một vệt lông dài khác màu. Đuôi rất dày lông, cong lên trên lưng trông như một chiếc lông vũ đang phấp phới.\r\n\r\nCặp mắt hình quả hạnh và luôn là màu nâu. Mắt đen được coi là tốt, ngược lại mắt xanh dương bị xem là một khuyết điểm lớn, biểu hiện của sự pha giống nên sẽ không đủ tiêu chuẩn trình diễn.\r\n\r\nTiêu chuẩn chó Alaska về đặc điểm của Mũi, môi, viền mắt phải màu đen đối với chó mọi màu lông, ngoại trừ chó lông đỏ thì những bộ phận trên có thể màu nâu. Chó có hiện tượng “mũi tuyết” với đường viền mũi nhạt hơn cũng được chấp nhận.', 'alaska-14-8-15.jpg', 'ntcong', 1, 1, '2015-08-14', 'Chó', '', '', '', '', '', '', '', '', 0, ''),
(2, 'Những Tiêu chuẩn của một con chó phú quốc tốt ', 'Thế nào là một con chó phú quốc tốt và được gọi là đạt tiêu chuẩn? Có rất nhiều người mua chó phú quốc về nuôi mà không biết như thế nào là một con chó phú quốc tốt......', '<p>C&aacute;c ti&ecirc;u chuẩn chọn ch&oacute; ph&uacute; quốc tốt Theo hiệp hội ch&oacute; Việt Nam v&agrave; những kinh nghiệm của những cụ gi&agrave; cao tuổi sinh sống tại h&ograve;n đảo ph&uacute; quốc, nơi được cho l&agrave; nguồn gốc của d&ograve;ng ch&oacute; săn nhanh nhẹn n&agrave;y. Với rất nhiều đặc điểm v&agrave; ti&ecirc;u ch&iacute; để đ&aacute;nh gi&aacute; thế n&agrave;o l&agrave; một ch&uacute; ch&oacute; ph&uacute; quốc đẹp, th&igrave; phần lớn l&agrave; dựa v&agrave;o đặc điểm h&igrave;nh d&aacute;ng b&ecirc;n ngo&agrave;i của ch&oacute;. Một phần nữa, l&agrave; ch&oacute; ph&uacute; quốc tốt hay kh&ocirc;ng c&ograve;n c&oacute; 1 phần dựa v&agrave;o gia phả, những ch&uacute; ch&oacute; đạt những giả cao trong c&aacute;c cuộc thi dog show. Nhưng h&ocirc;m nay, ch&uacute;ng ta chỉ đề cập đến c&aacute;c ti&ecirc;u ch&iacute; về h&igrave;nh d&aacute;ng b&ecirc;n ngo&agrave;i của ch&oacute; ph&uacute; quốc m&agrave; th&ocirc;i. Ti&ecirc;u Chuẩn đầu ch&oacute; Ph&uacute; Quốc Một con ch&oacute; ph&uacute; quốc đạt ti&ecirc;u chuẩn cần phải c&oacute; bộ thủ, bộ đầu c&oacute; những đặc điểm như sau: Đầu ch&oacute; phải d&agrave;i, thon, 2 t&agrave;i phải nhọn v&agrave; d&agrave;i lu&ocirc;n lu&ocirc;n dựng đứng v&agrave; ke nhau. Với nhiều ch&uacute; ch&oacute; ph&uacute; quốc m&agrave; tai cụp hoặc kh&ocirc;ng c&acirc;n đều đối xừng th&igrave; coi như l&agrave; hỏng. D&ugrave; m&agrave;u l&ocirc;ng thế n&agrave;o th&igrave; m&otilde;m ch&oacute; ph&uacute; quốc lu&ocirc;n c&oacute; m&agrave;u đen. Đ&ocirc;i mắt nh&igrave;n sắc lạnh v&agrave; c&oacute; m&agrave;u n&acirc;u. Ti&ecirc;u chuẩn của th&acirc;n h&igrave;nh ch&oacute; ph&uacute; quốc Để được đ&aacute;nh gi&aacute; l&agrave; một ch&uacute; ch&oacute; ph&uacute; quốc đạt ti&ecirc;u chuẩn th&igrave; nhất thiết ch&oacute; phải c&oacute; th&acirc;n h&igrave;nh thon gọn, cấu tr&uacute;c thon v&agrave; chắc khỏe. Lu&ocirc;n thể hiện sự nhanh nhẹn v&agrave; sắc b&eacute;n trong từng hoạt động của ch&oacute;. Ch&oacute; ph&uacute; quốc c&oacute; bụng thon, nhỏ. B&ecirc;n cạnh đ&oacute; l&agrave; phần ngực ch&oacute; to rộng v&agrave; nở, ngực s&acirc;u ngang bằng với khuỷu ch&acirc;n. Với ch&oacute; ph&uacute; quốc đạt ti&ecirc;u chuẩn th&igrave; ch&oacute; phải ch&oacute; chiều d&agrave;i th&acirc;n lu&ocirc;n lu&ocirc;n d&agrave;i hơn so với chiều cao của ch&oacute;. Ch&oacute; ph&uacute; quốc c&oacute; 4 ch&acirc;n thon gọn, kết cấu sương chắc khỏe, ch&acirc;n ch&oacute; lu&ocirc;n duỗi thẳng tắp khi đứng. Một đặc điểm rất nổi bật ở d&ograve;ng ch&oacute; săn ở đảo ph&uacute; quốc n&agrave;y đ&oacute; l&agrave; ở mỗi b&agrave;n ch&acirc;n của ch&uacute;ng, lu&ocirc;n c&oacute; m&agrave;ng giữ c&aacute;c ng&oacute;n ch&acirc;n giống như kiểu m&agrave;ng ở ch&acirc;n vịt. Vốn dĩ lo&agrave;i ch&oacute; đảo n&agrave;y sống ở v&ugrave;ng biển, n&ecirc;n việc ch&uacute;ng phải thường xuy&ecirc;n bơi lội đ&atilde; khiến ch&uacute;ng phải ph&aacute;t triển th&iacute;ch nghi với m&ocirc;i trường đặc biệt ở v&ugrave;ng đảo n&oacute; sống. Ti&ecirc;u chuẩn của đu&ocirc;i ch&oacute; ph&uacute; quốc Ch&oacute; ph&uacute; quốc l&agrave; phải c&oacute; đu&ocirc;i v&uacute;t cần c&acirc;u, l&uacute;c n&agrave;o đu&ocirc;i ch&oacute; cũng phải cong ở ph&iacute;a tr&ecirc;n lưng khoảng 1/4 v&ograve;ng tr&ograve;n hoặc cong 1/2 v&ograve;ng tr&ograve;n. V&agrave; đu&ocirc;i lu&ocirc;n được giữ c&acirc;n bằng trong khi ch&oacute; đang đứng. Ti&ecirc;u chuẩn m&agrave;u l&ocirc;ng của ch&oacute; ph&uacute; qu&ocirc;c Ch&oacute; ph&uacute; quốc c&oacute; rất nhiều m&agrave;u l&ocirc;ng nhưng phổ biến nhất vẫn l&agrave; c&aacute;c m&agrave;u như m&agrave;u đen, m&agrave;u v&agrave;ng, m&agrave;u vện cọp, Đối với những c&aacute;c thể ch&oacute; ph&uacute; quốc c&oacute; m&agrave;u trắng hoặc m&agrave;u đen trắng th&igrave; c&aacute;c chuy&ecirc;n gia cho rằng ch&uacute;ng kh&ocirc;ng tốt. L&ocirc;ng ch&oacute; c&oacute; độ ngắn khoảng 2cm, ngắn v&agrave; thẳng, l&ocirc;ng ch&oacute; lu&ocirc;n nằm s&aacute;t th&acirc;n. Mỗi khi n&oacute;i đến ch&oacute; ph&uacute; quốc th&igrave; kh&ocirc;ng thể bỏ qua đặc điểm n&agrave;y được đ&oacute; l&agrave; xo&aacute;y ở lưng. Nhiều người thường hay gọi đ&oacute; l&agrave; xo&aacute;y kiếm v&igrave; xo&aacute;y tr&ecirc;n lưng chạy dọc từ phần tr&ecirc;n bả vai đến tận cuối đu&ocirc;i, do ở phần giữa lưng c&oacute; c&aacute;c đ&aacute;m l&ocirc;ng mọc ngược tạo n&ecirc;n. Độ rộng của xo&aacute;y kiếm tr&ecirc;n lưng ch&oacute; ph&uacute; quốc t&ugrave;y thuộc v&agrave;o từng c&aacute; thể, nhưng tối thiểu l&agrave; khoảng 3 cm. Đối với nhiều người, họ cho rằng ch&oacute; ph&uacute; quốc l&agrave; loại ch&oacute; phong thủy, chủ nu&ocirc;i ch&oacute; n&agrave;y sẽ tạo th&ecirc;m được quyền uy cho gia chủ. Ch&oacute; ph&uacute; quốc thuần chủng sinh đẻ Đối với ch&oacute; ph&uacute; quốc đạt ti&ecirc;u chuẩn l&agrave; phải được đẻ v&agrave; sinh sản ở trong hang. Đ&acirc;y l&agrave; bản năng rất hoang d&atilde; của lo&agrave;i ch&oacute; xo&aacute;y ph&uacute; quốc n&agrave;y. Kể cả khi ch&oacute; ph&uacute; quốc được nu&ocirc;i trong đất liền đi chăng nữa, th&igrave; nhiều c&aacute; thể vấn c&oacute; th&oacute;i quen đ&agrave;o ổ c&aacute;t ở trong vườn để l&agrave;m ổ sinh đẻ. Ch&oacute; ph&uacute; quốc đ&agrave;o hang l&agrave;m ổ đẻ gần như đ&oacute; l&agrave; bản năng hoang d&atilde; của lo&agrave;i ch&oacute; n&agrave;y. Với những ti&ecirc;u chuẩn của ch&oacute; ph&uacute; quốc thuần chủng, bạn c&oacute; thể dựa v&agrave;o h&igrave;nh d&aacute;ng của ch&oacute; để c&oacute; thể tuyển chọn được một con ch&oacute; ph&uacute; quốc tốt nhất. Tất nhi&ecirc;n bạn phải c&oacute; một ch&uacute;t may mắn nữa nếu như bạn chọn ch&oacute; từ khi mới t&aacute;ch mẹ. Ch&uacute;c c&aacute;c bạn th&agrave;nh c&ocirc;ng ! ( Nguồn tổng hợp tr&ecirc;n Internet)</p>\r\n', 'phu-quoc-15-8-15.jpg', 'ntcong', 1, 1, '2015-08-21', 'Chó', 'Phú Quốc', '', '', '', 'Được tìm thấy và thuần hóa lần đầu tiên tại đảo Phú Quốc - Việt Nam', '', '', '', 0, ''),
(18, 'Chó Chihuahua', 'Chó Chihuahua là một trong những giống chó nuôi nhỏ nhất trên thế giới. Cái tên Chihuahua được đặt theo tên của bang Chihuahua ở Mexico. Giống chó này rất thông minh.', '<p>Chihuahua l&agrave; giống ch&oacute; nhỏ con c&oacute; đầu tr&ograve;n v&agrave; m&otilde;m ngắn. N&oacute; c&oacute; đ&ocirc;i mắt to tr&ograve;n, m&agrave;u sẫm gần như đen, đ&ocirc;i khi l&agrave; m&agrave;u đỏ ruby sẫm. Đ&ocirc;i tai đặc hiệu to đ&ugrave;ng lu&ocirc;n giữ vểnh. C&uacute;n con của Chihuahua ở phần th&oacute;p tr&ecirc;n đỉnh đầu c&oacute; một h&otilde;m mềm. Lỗ thủng n&agrave;y khi c&uacute;n lớn l&ecirc;n sẽ được xương sọ che phủ hết. Th&acirc;n h&igrave;nh chắc chắn, d&agrave;i hơn so với chiều cao, đu&ocirc;i uốn cong tr&ecirc;n lưng hoặc vắt sang một b&ecirc;n.</p>\r\n\r\n<p>Ở <a href="https://vi.wikipedia.org/wiki/Vi%E1%BB%87t_Nam">Việt Nam</a> rất phổ biến lo&agrave;i l&ocirc;ng ngắn, tuy vậy, ở nước ngo&agrave;i cả 2 loại l&ocirc;ng ngắn, l&ocirc;ng d&agrave;i đều được coi trọng như nhau. M&agrave;u l&ocirc;ng thường c&oacute; c&aacute;c loại m&agrave;u v&agrave;ng c&aacute;t, n&acirc;u hạt dẻ, m&agrave;u bạc, xanh th&eacute;p, n&acirc;u nhạt. Tuy vậy c&aacute;c m&agrave;u kh&aacute;c cũng đều được chấp nhận, kể cả m&agrave;u đen n&acirc;u v&agrave; pha trộn lẫn c&aacute;c m&agrave;u. Lo&agrave;i ch&oacute; n&agrave;y kh&aacute; khỏe mạnh so với th&acirc;n h&igrave;nh mảnh dẻ của ch&uacute;ng. Ch&uacute;ng c&oacute; lưng bằng v&agrave; 4 ch&acirc;n thẳng.</p>\r\n', 'Chihuahua.jpg', '', 1, 1, '2015-08-24', 'Chó', 'Chihuahua', 'Vì có thân hình quá nhỏ bé nên giống chó Chihuahua có khá nhiều vấn đề về sức khỏe. Do có chiếc mũi ngắn nên Chihuahua có thể thở khò khè và thậm chí có thể ngáy khi ngủ. Cặp mắt to quá khổ của chúng dẫn đến việc dễ mắc các bệnh màng sừng tuyến lệ hay đục thủy tinh thể thứ cấp. Dễ bị ngạt thở bởi dây xích cổ, dễ mắc các bệnh về răng lợi, thấp khớp, không chịu được lạnh, dễ bị căng thẳng. Không được để cho chúng liếm hoặc ăn các sản phẩm có độc tính, phân hoặc sô cô la. Nên cho ăn có chừng mực để tránh bị béo phì. Cún con Chihuahua khi đẻ ra đã có cái đầu khá to, vì vậy cần phải được mổ đẻ bởi các bác sĩ thú y giàu kinh nghiệm. Trong lúc bé, chúng dễ bị gãy xương hay các tai nạn khác. Một số dòng Chihuahua xương chẩm không phát triển hết nên trên sọ vẫn tồn tại lỗ hổng trong suốt đời. Việc này có thể càng làm cho chúng dễ bị tổn thương.', 'Chihuahua là giống chó rất thích hợp cho bầu bạn. Can đảm, cực kỳ sống động, kiêu hãnh và mạnh dạn, chúng luôn bày tỏ tình cảm và cũng đòi hỏi sự chăm sóc của người chủ. Các chuyển động của chúng rất thanh nhã và nhanh nhẹn để tránh bị dẫm phải. Chihuahua là giống chó có ý chí mạnh mẽ, đặc biệt trung thành và rất quấn chủ, thậm chí còn có thể biết ghen tỵ. Chúng đặc biệt thích được liếm mặt chủ. Luôn tỏ ra cảnh giác đối với người lạ. Khi có mặt người lạ, chúng luôn lẽo đẽo bám sát chủ nhân từng bước, tìm cách sao cho càng gần chủ càng tốt. Một số cá thể có thể hơi khó dạy dỗ, nhưng nhìn chung đây là giống chó thông minh, học khá nhanh, phản xạ tốt với các bài tập nhẹ nhàng. Chihuahua có hàm răng rất sắc như là vũ khí để tự vệ. Vì quá bé nhỏ nên khó trốn chạy, chúng có thể cắn lại khi bị trẻ con trêu chọc. Vì vậy nhà có trẻ nhỏ không nên nuôi giống chó này. Có thể sủa ầm ỹ và đòi hỏi chủ phải khá kiên trì trong việc dạy đi vệ sinh đúng chỗ. Cần phải tạo điều kiện cho chúng hòa đồng với các giống chó khác và với người lạ từ lúc còn nhỏ, vì Chihuahua là loại chó khá hung hăng. Đối với các chú Chihuahua khác thì quan hệ có vẻ tốt hơn.', '', 'Đây là giống chó lâu đời nhất ở châu Mỹ và là giống chó có thân hình nhỏ nhất trong mọi loài chó trên thế giới. Có nguồn gốc từ Mexico nhưng dường như chúng lại được thế giới biết đến nhờ công của những người Trung Quốc. Chúng chỉ được mang đến châu Âu vào những năm cuối của thế kỷ 19. Tên của giống chó này được lấy từ tên của bang Chihuahua của Mexico, nơi mà các nhà thám hiểm đã tìm ra chúng. Những người thổ dân da đỏ trước thời Colombo tìm ra châu Mỹ đã tin tưởng rằng giống chó này có liên hệ với các vị Thần thiêng liêng. Những chú chó Chihuahua quý nhất thường có trọng lượng nhỏ hơn 1,3 kg. Những con này có thể đứng gọn trong lòng bàn tay của người lớn. Loài Chihuahua lông dài thường được đánh giá riêng, tuy nhiên về cơ bản thì cũng giống như loài lông ngắn ngoại trừ mỗi tiêu chí về bộ lông. Chihuahua là loại chó làm bầu bạn rất phổ biến.', '', '', '', 0, ''),
(19, 'Chó Ngao Tây Tạng', 'Chó ngao Tây Tạng hay còn gọi là Ngao Tạng, tên tiếng Anh là Tibetan Mastiff, là một giống chó Ngao được người Tây Tạng nuôi và huấn luyện để bảo vệ gia súc và bảo vệ cuộc sống của những người dân bản', '<p><strong>Ch&oacute; ngao T&acirc;y Tạng</strong> hay c&ograve;n gọi l&agrave; <strong>Ngao Tạng,</strong> t&ecirc;n tiếng Anh l&agrave; <strong>Tibetan Mastiff,</strong> l&agrave; một <a href="https://vi.wikipedia.org/wiki/Gi%E1%BB%91ng_v%E1%BA%ADt_nu%C3%B4i">giống</a> ch&oacute; Ngao được người <a href="https://vi.wikipedia.org/wiki/T%C3%A2y_T%E1%BA%A1ng">T&acirc;y Tạng</a> nu&ocirc;i v&agrave; huấn luyện để bảo vệ <a href="https://vi.wikipedia.org/wiki/Gia_s%C3%BAc">gia s&uacute;c</a> v&agrave; bảo vệ cuộc sống của những người d&acirc;n bản địa tr&ecirc;n v&ugrave;ng n&uacute;i <a href="https://vi.wikipedia.org/wiki/Himalaya">Himalaya</a> khỏi những con th&uacute; hoang như <a href="https://vi.wikipedia.org/wiki/Ch%C3%B3_s%C3%B3i">ch&oacute; s&oacute;i</a>, <a href="https://vi.wikipedia.org/wiki/H%E1%BB%95">hổ</a>, <a href="https://vi.wikipedia.org/wiki/G%E1%BA%A5u">gấu</a> v&agrave; để canh g&aacute;c c&aacute;c <a href="https://vi.wikipedia.org/wiki/Tu_vi%E1%BB%87n">tu viện</a> ở T&acirc;y Tạng. Ch&uacute;ng c&oacute; t&iacute;nh c&aacute;ch như trung th&agrave;nh, lỳ lợm, đặc biệt chỉ nghe lời một chủ. Ch&oacute; ngao T&acirc;y Tạng được cho l&agrave; <em>Ch&uacute;a tể của thảo nguy&ecirc;n</em> v&agrave; được m&ocirc; tả l&agrave; <em>To hơn ch&oacute; s&oacute;i, mạnh hơn <a href="https://vi.wikipedia.org/wiki/B%C3%A1o_hoa">b&aacute;o hoa</a> v&agrave; nhanh hơn hươu nai</em>. C&oacute; khả năng ch&oacute; ngao T&acirc;y Tạng l&agrave; tổ ti&ecirc;n của 1 số giống ch&oacute; ngao ng&agrave;y nay.</p>\r\n\r\n<h2>Ph&aacute;t hiện</h2>\r\n\r\n<p>Lo&agrave;i ch&oacute; T&acirc;y Tạng được t&igrave;nh cờ ph&aacute;t hiện bởi hai nh&agrave; th&aacute;m hiểm người <a href="https://vi.wikipedia.org/wiki/%C3%9D">&Yacute;</a> tại ng&ocirc;i l&agrave;ng Jhangihe, toạ lạc ở độ cao rất lớn so với mực nước biển giữa khu tự trị T&acirc;y Tạng. Trong thế kỷ 15, sau khi th&aacute;m hiểm v&ugrave;ng n&uacute;i Himalaya, c&aacute;c nh&agrave; th&aacute;m hiểm thường mang ch&oacute; ngao T&acirc;y Tạng về nước như l&agrave; m&oacute;n qu&agrave; qu&yacute; cho Ho&agrave;ng gia. Năm 1820, vua <a href="https://vi.wikipedia.org/wiki/V%C6%B0%C6%A1ng_qu%E1%BB%91c_Li%C3%AAn_hi%E1%BB%87p_Anh_v%C3%A0_B%E1%BA%AFc_Ireland">Anh Quốc</a> l&agrave; <a href="https://vi.wikipedia.org/wiki/George_IV_c%E1%BB%A7a_Anh">George IV</a> được tặng 1 con; 14 năm sau, vua <a href="https://vi.wikipedia.org/wiki/William_IV_c%E1%BB%A7a_Anh">William IV</a> được tặng một cặp kh&aacute;c; tiếp đến năm 1847, một con ch&oacute; ngao T&acirc;y Tạng cũng được gửi tặng cho <a href="https://vi.wikipedia.org/wiki/Victoria_c%E1%BB%A7a_Anh">Victoria của Anh</a>&hellip;.</p>\r\n\r\n<h2>H&igrave;nh d&aacute;ng</h2>\r\n\r\n<p>Ch&oacute; ngao T&acirc;y Tạng c&oacute; k&iacute;ch thước kh&aacute; đồ sộ. Cao &iacute;t nhất 70&nbsp;cm đối với ch&oacute; đực. Nặng khoảng từ 64&ndash;82&nbsp;kg. L&ocirc;ng: Với bộ l&ocirc;ng 2 lớp, lớp l&ocirc;ng ngo&agrave;i mềm v&agrave; d&agrave;i c&ograve;n lớp l&ocirc;ng trong b&ocirc;ng như len. n&oacute; c&oacute; thể th&iacute;ch nghi với mọi thời tiết khắc nghiệt nhất. Ch&oacute; ngao T&acirc;y Tạng c&oacute; phần l&ocirc;ng ở cổ đặc trưng tr&ocirc;ng như bờm sư tử. M&agrave;u: đen, đen -n&acirc;u, đen -v&agrave;ng, x&aacute;m hoặc v&agrave;ng. Đu&ocirc;i: lu&ocirc;n cuộn cao tr&ecirc;n lưng. Đầu: phẳng, kh&ocirc;ng c&oacute; nếp nhăn. H&igrave;nh thế c&acirc;n đối v&agrave; oai vệ. Tấn c&ocirc;ng l&igrave; lợm, trung th&agrave;nh, đặc biệt chỉ nghe chủ, chỉ trung th&agrave;nh tuyệt đối với 1 chủ nh&acirc;n duy nhất. Ch&oacute; ngao T&acirc;y Tạng cũng trưởng th&agrave;nh rất chậm. Con c&aacute;i từ 3-4 năm mới bắt đầu chu k&igrave; sinh sản, c&ograve;n con đực cũng từ 3-5 năm mới ph&aacute;t dục v&agrave; c&oacute; khả năng giao phối. C&aacute;c nh&agrave; khoa học cho rằng đ&acirc;y ch&iacute;nh l&agrave; giống ch&oacute; săn tinh kh&ocirc;n nhất hiện nay, từng bị giới động vật học hiện đại cho l&agrave; đ&atilde; tuyệt chủng. Lo&agrave;i ch&oacute; n&agrave;y đ&atilde; hiện hữu c&aacute;ch đ&acirc;y 5000 năm v&agrave; được xem như l&agrave; giống ch&oacute; c&oacute; bộ Gen cổ xưa nhất tr&ecirc;n thế giới hiện nay.</p>\r\n\r\n<p>Ch&oacute; Ngao T&acirc;y Tạng được giới nu&ocirc;i ch&oacute; giới ưa th&iacute;ch.</p>\r\n', 'NgaoTayTang.jpg', 'ntcong', 1, 1, '2015-08-24', 'Chó', '', '', '', '', '', '', '', '', 0, ''),
(20, 'Chó Pitbull', 'Pit bull là một giống chó nhà có nguồn gốc từ châu Mỹ, được nuôi ở Anh và nuôi để làm vật giữ nhà và cũng được sử dụng trong những cuộc chọi chó. Chúng là giống chó được chọn giống từ loại chó bun Anh', '<p><strong>Pit bull</strong> l&agrave; một giống <a href="https://vi.wikipedia.org/wiki/Ch%C3%B3_nh%C3%A0">ch&oacute; nh&agrave;</a> c&oacute; nguồn gốc từ <a href="https://vi.wikipedia.org/wiki/Ch%C3%A2u_M%E1%BB%B9">ch&acirc;u Mỹ</a>, được nu&ocirc;i ở Anh v&agrave; nu&ocirc;i để l&agrave;m vật giữ nh&agrave; v&agrave; cũng được sử dụng trong những cuộc <a href="https://vi.wikipedia.org/wiki/Ch%E1%BB%8Di_ch%C3%B3">chọi ch&oacute;</a>. Ch&uacute;ng l&agrave; giống ch&oacute; được chọn giống từ loại <a href="https://vi.wikipedia.org/wiki/Ch%C3%B3_bun_Anh">ch&oacute; bun Anh</a> v&agrave; <a href="https://vi.wikipedia.org/wiki/Ch%C3%B3_s%E1%BB%A5c">ch&oacute; sục</a>. Đ&acirc;y l&agrave; giống ch&oacute; dữ, hiếu chiến, bền bỉ, gan lỳ được mệnh danh l&agrave; <em>s&aacute;t thủ m&aacute;u lạnh</em> hay c&ograve;n được gọi l&agrave; <em>ch&oacute; <a href="https://vi.wikipedia.org/wiki/Chi%E1%BA%BFn_binh">chiến binh</a></em> hay <em><a href="https://vi.wikipedia.org/wiki/V%C3%B5_s%C4%A9_gi%C3%A1c_%C4%91%E1%BA%A5u">v&otilde; sĩ gi&aacute;c đấu</a></em>.<a href="https://vi.wikipedia.org/wiki/Pit_bull#cite_note-giaoduc.net.vn-2">[2]</a> Thuật ngữ <em>Pit bull</em> bắt nguồn từ t&ecirc;n tiếng Anh gồm <em>pit</em> c&oacute; nghĩa l&agrave; c&aacute;i hố lớn v&agrave; <em>bull</em> c&oacute; nghĩa l&agrave; con <a href="https://vi.wikipedia.org/wiki/B%C3%B2_m%E1%BB%99ng">b&ograve; mộng</a>.<a href="https://vi.wikipedia.org/wiki/Pit_bull#cite_note-3">[3]</a> Giống ch&oacute; Pit bull đầu ti&ecirc;n được nu&ocirc;i ở Anh v&agrave;o thế kỷ thứ 18 d&ugrave;ng để đấu với c&aacute;c giống ch&oacute; kh&aacute;c trong <a href="https://vi.wikipedia.org/wiki/%C4%90%E1%BA%A5u_tr%C6%B0%E1%BB%9Dng">đấu trường</a> hay trong một c&aacute;i hố lớn để phục vụ cho những cuộc chiến m&aacute;u me.<a href="https://vi.wikipedia.org/wiki/Pit_bull#cite_note-Steven_K._Scott_2011-4">[4]</a> Ch&uacute;ng c&ograve;n được huấn luyện để đi săn.<a href="https://vi.wikipedia.org/wiki/Pit_bull#cite_note-5">[5]</a></p>\r\n\r\n<p>Theo nghĩa rộng nhất, thuật ngữ &quot;Pit Bull&quot; c&oacute; thể chỉ về một trong những giống bao gồm cả Mỹ Pit Bull Terrier, Staffordshire Bull Terrier, American Staffordshire Terrier, Bull Terrier, American Bully, American Bulldog, Dogo Argentino, Presa Canario, Cane Corso, hoặc bất kỳ hỗn hợp đ&oacute;. Pit Bull được tạo ra với giống lai tạo giữa con ch&oacute; ngao ở Anh v&agrave; ch&oacute; sục, nhưng mỗi Pit Bull giống ch&oacute; ri&ecirc;ng biệt c&oacute; một lịch sử ri&ecirc;ng biệt.</p>\r\n\r\n<p>L&agrave; giống ch&oacute; nhập ngoại c&oacute; nguồn gốc từ Mỹ, đặc t&iacute;nh rất hung dữ v&agrave; hiếu chiến<a href="https://vi.wikipedia.org/wiki/Pit_bull#cite_note-6">[6]</a> D&ograve;ng ch&oacute; n&agrave;y c&oacute; nguồn gốc từ ch&acirc;u Mỹ v&agrave; đang dần được nu&ocirc;i phổ biến ở Việt Nam. Được coi như hung thần của c&aacute;c loại ch&oacute; chọi, với sức mạnh của cơ thể cộng với h&agrave;m răng sắc nhọn, khi đ&atilde; xung trận Pitbull được v&iacute; như những chiến binh, ch&uacute;ng c&oacute; thể cắn nhau đến hơi thở cuối c&ugrave;ng. Pitbull được xem l&agrave; ch&uacute;a tể của c&aacute;c lo&agrave;i ch&oacute; chọi. Trong một số giống ch&oacute; chọi, Pitbull American được sử dụng trong c&aacute;c cuộc chọi ch&oacute; nhiều hơn cả v&agrave; trội về việc bảo vệ l&atilde;nh địa, bảo vệ chủ nh&acirc;n.<a href="https://vi.wikipedia.org/wiki/Pit_bull#cite_note-7">[7]</a> C&oacute; nguồn gốc từ Mỹ, c&oacute; trọng lượng trung b&igrave;nh từ 30 &ndash; 40&nbsp;kg, tr&ocirc;ng rất dũng m&atilde;nh v&agrave; sẵn s&agrave;ng tử chiến khi nhận được lệnh của chủ nh&acirc;n. Lo&agrave;i vật n&agrave;y c&oacute; thể đương đầu v&agrave; hạ gục những con ch&oacute; to hơn bản th&acirc;n nhiều lần v&agrave; kh&ocirc;ng biết sợ hay ch&ugrave;n bước trước bất k&igrave; đối thủ n&agrave;o.<a href="https://vi.wikipedia.org/wiki/Pit_bull#cite_note-8">[8]</a> Ở Hoa Kỳ, ch&uacute;ng được coi l&agrave; giống ch&oacute; nguy hiểm nhất v&agrave; được sử dụng trong chiến đấu.<a href="https://vi.wikipedia.org/wiki/Pit_bull#cite_note-9">[9]</a></p>\r\n', 'American_Pitbull.jpg', 'ntcong', 1, 1, '2015-08-24', 'Chó', 'Pitbull', 'Pit bull là một giống chó tầm trung bình và nhỏ, chúng cao từ 45 đến 55 cm, nặng từ 18 đến 22 kg và có sức mạnh cơ bắp hơn bất cứ giống chó nào khác.[4] Nhìn chung, Pit Bull có ngoại hình khá dữ dằn, chúng có khung xương vững chãi, cơ bắp săn chắc, vai trước vạm vỡ, đặc biệt là đôi mắt đỏ ngầu dữ tợn dưới cái trán to gồ, giống chó này được biết đến với ngoại hình đầy cơ bắp và đặc biệt gây ấn tượng với vẻ ngoài hung dữ.[2][10] Vẻ ngoài cơ bắp và chiến đấu khiến Pitbull dễ bị ác cảm do đó nhiều đồn thổi về giống chó Pit bull một phần vì ngoại hình dữ dằn của loài chó này.[10] Ở Việt Nam, nhiều người dân ở Hà Nội cũng rất thích nuôi loại chó này bất chấp nguy hiểm vì nhìn nó rất dữ tợn có thể trấn áp, uy hiếp được người khác vì chúng nhìn dữ dằn, hồng hộc lao đi như muốn nhảy chồm và dùng hàm răng xé tan bất cứ thứ gì.[11]\r\n\r\nLoài chó này còn có một cơ hàm khác biệt, có cấu tạo như khớp khóa, vì vậy khi nó đã cắn vật gì, hay đối thủ thì không dễ nhả ra.[10] Vết thương do chó căn để lại sẽ rất sâu và rộng vì hàm răng của chúng rất dài, sắc nhọn, ở mức độ nhẹ có thể mang tật, nặng hơn có thể nguy hiểm đến tính mạng.[12][12] Chó Pitt bull sở hữu lực cắn mạnh lên đến 250 pounds/1 inch vuông với bộ hàm khỏe và lực cắn mạnh,[13] lực cắn của chúng có thể lên đến 106.5 kg.[14] Chỉ cần một nhát cắn của một con pitbull bình thường cũng sẽ cướp đi sinh mạng của một con chó khác, ngay cả chó chăn cừu Đức cũng không đáng kể.[15] Một con Pitbull bình thường có thể cắn vào một vật và đu mình 30 phút không biết mệt, điều này xuất phát từ điểm nổi trội của Pitbull là chúng có thể lực tốt và thần kinh tốt, thậm chí một số con có thể kéo cả chiếc ô tô 4 bánh giống như một lực sĩ hạng nặng.[11]\r\n\r\nDo Pitbull phải vận động mạnh nên chúng ăn rất nhiều đạm. Loại thịt mà loài chó này thích nhất là thịt bò, mỗi bữa ăn Pitbull có thể ăn đến cả cân thịt bò.[10] Trong việc huấn luyện chó chiến đấu, thực đơn ăn uống của Pitbull cũng được quan tâm đặc biệt, một số người cho món ăn thường xuyên của Pitbull là cổ gà,người ta cho Pitbull ăn theo khẩu phần 12 chiếc cổ gà mỗi ngày, chia làm hai bữa. Cứ luộc nguyên cổ gà rồi cho Pitbull ăn, vừa đủ chất lại vừa luyện được răng. Thỉnh thoảng cho Pitbull ăn thịt chó để chúng dữ tợn hơn và tăng cường sức chiến đấu.[16]', 'Chó Pit bull bình thường rất thân thiện và hiền lành, trừ khi chúng bị đe dọa hoặc tấn công, ngoài ra Pit bull còn là loài chó rất trung thành, tình cảm với chủ. Tuy nhiên, điểm nổi bật của giống chó này chính là khả năng chiến đấu. Chúng chiến đấu rất hăng mỗi khi có đối thủ hoặc người lạ xâm nhập vào lãnh địa và sẵn sàng tấn công đối phương đến chết khi giao đấu[17] Dòng chó Pitbull được xếp vào danh mục các giống chó nguy hiểm nhất đối với con người trong tổng số hơn 400 loài chó hiện nay trên thế giới, Pitbull được đứng đầu trong số những loài nguy hiểm nhất,[10] sự nguy hiểm và ham mồi của giống chó này thể hiện ở chỗ khi đã ngoạm vật gì thì chỉ khi vật đó bị đứt lìa thì nó mới nhả ra và chuyển sang ngoạm chỗ khác[2] thậm chí chúng day nghiến vật đó cho đến chết.\r\n\r\nKhi bị Pit bull tấn công thì người ta sẽ thấy thương hại cho con chó đã dám tấn công Pitt bull, kể cả khi con chó đó to hơn gấp ba lần. Chúng ít khi bại trận trước những giống cho lớn hơn, hung dữ hơn, điểm nổi bật của chúng chính là sự bền bỉ không gì khuất phục được.[4] Pitbull có thể đương đầu và hạ gục những con chó to hơn bản thân nó nhiều lần, ngay cả chó sói trong các trận đấu trực diện,[13] nó không biết sợ hay lùi bước trước bất kì đối thủ nào, khi đã lâm trận, loài chó này còn cuồng hơn cả chó điên, chó dại. Do tập tính lãnh thổ cao, do đó theo bản năng nó có thể tấn công những con chó, thú khác đến cùng thậm chí là những con thú lớn hơn nó nhiều lần. Là loài chó dường như không có cảm giác đau đớn, lỳ đòn, điều này khiến loài chó này sẵn sàng tấn công bất cứ ai.[12]\r\n“ 	Thứ nhất, chúng gan lỳ và bền bỉ đến mức chúng chỉ chịu thua khi bị giết chết. Chúng không bao giờ bỏ cuộc hoặc tháo chạy khỏi một trận chiến. Thứ hai, chúng thường chiến thắng là do tìm được một chỗ hiểm trên cơ thể đối thủ và sau đó, khi hai hàm răng của chúng đã cắm vào chỗ hiểm thì chúng sẽ nghiến chặt hai hàm lại, nhất định không chịu nhả ra cho đến khi cuộc chiến kết thúc 	”\r\n\r\n—John Marsh, Nhà huấn luyện chó[4]\r\nPitt bull là giống chó ham mồi, hiếu chiến\r\n\r\nDòng chó Pitbull được xếp vào danh mục 11 giống chó nguy hiểm nhất đối với con người trong tổng số hơn 400 loài chó hiện nay trên thế giới. Thậm chí, theo bảng xếp hạng giống chó nguy hiểm thì loài Pitbull được đứng đầu trong số những loài nguy hiểm nhất. Loài chó này là bởi nó hội tụ đầy đủ nhất lợi thế chiến đấu của loài chó như một khung xương vững chắc, bộ hàm hộp không quá dài, một hệ cơ bắp mà không loại chó nào phát triển mạnh như nó, một hệ tuần hoàn với trái tim lớn và một chiến ý mãnh liệt, không biết sợ hay chùn bước trước bất kì đối thủ nào.[18]', 'Người ta nuôi và huấn luyện chó bằng nhiều bài cho đến khi vật nuôi đạt độ trưởng thành và hung dữ, đủ để xung trận. Để trở thành một chiến binh, Pitbull phải trải qua những bài huấn luyện công phu. Trung thành là bản tính có sẵn của Pitbull nên việc huấn luyện chỉ nhằm mục đích để cho chúng khỏe mạnh, bền sức và đặc biệt là càng hung dữ càng tốt. Để Pitbull chiến đấu tốt phải cho chúng trở về bản năng gốc, cho nên người ta không đưa chúng vào các trường huấn luyện chó, Pitbull sẽ trở nên ngoan ngoãn và mất hẳn bản năng chiến đấu của chúng.\r\n\r\nMỗi con Pitbull sẽ được chủ huấn luyện theo một cách riêng, nhưng đa phần đều trải qua những bài tập rất chung như quấn xích vào cổ để chạy, có con phải đeo chiếc xích to bằng cổ tay, tương đương trọng lượng cơ thể và tuy chiếc xích có thể nặng đến 40 kg nhưng pitbull vẫn nhấc lên nhẹ nhàng.[11] Người ta còn cho chúng chạy trên máy tập, kéo lò xo, kéo lốp xe, cắn thịt sống… Để có hàm cứng cáp, nướu dẻo như cao su, cơ bắp săn chắc, có người đã xây dựng một hệ thống bài tập tổng hợp cực kỳ nghiêm ngặt. Một đoạn dây cao su to được treo lên trần nhà, chó nhảy lên táp rồi treo lơ lửng, tiếp đến phải xé dừa khô, cắn cây chuối. Thậm chí, chó phải đeo lốp xe hơi lên cổ rồi chạy marathon, tập bơi, chạy bộ.[18]\r\n\r\nKhi đã áp dụng những bài tập đó cho Pitbull thì ngày nào cũng phải duy trì đầy đủ, bất chấp điều kiện thời tiết. Các bài tập khác đều có xích để giữ, riêng bài kéo lốp thì phải thả ra cho chúng chạy,[16] lúc thì để chạy theo xe, khi lại cho bơi xuống hồ nước, lúc lại cắn xé chiếc lốp cao su, ngày nào cũng phải dành hàng giờ đồng hồ đi bơi cùng những bài tập dẻo dai khác để tăng cường sức khỏe cho chúng.[19] Ngoài ra, để huấn luyện được một con chó chọi tốt, người chủ nuôi phải kích động thái độ hung dữ của vật nuôi bằng số động vật nhỏ như mèo để nó làm quen và trở lên ngày càng dữ tợn. Ngoài những bài tập thể lực, thỉnh thoảng chủ chó còn có một bài tập dã man, đó là thử chó. Trước mỗi trận đánh, chủ chó thường thử khả năng chiến đấu của Pitbull đồng thời kích thích thú tính của chúng bằng cách mua một con chó sắp bị thịt mang về thả ra cho Pitbull cắn. Thường thì những cuộc chiến không cân sức đó chỉ kéo dài chưa đến 5 phút là con vật hiến thân kia sẽ chết.[16]', '', '', '', '', 0, ''),
(30, 'Tìm gấp 1 bé husky bị lạc...', 'E bị lạc mất 1 bé husky màu nâu đỏ,mắt xanh,khoảng 2 tháng tuổi,nặng tầm 6kg(avatar của e là hình của bé),bé lạc vào tối ngày 11.5 lúc 7h30 ở khu vực đường số 53,Phạm Văn Chiêu,p14,Gò Vấp.Anh chị nào ', '<p>E bị lạc mất 1 b&eacute; husky m&agrave;u n&acirc;u đỏ,mắt xanh,khoảng 2 th&aacute;ng tuổi,nặng tầm 6kg,b&eacute; lạc v&agrave;o tối ng&agrave;y 11.5 l&uacute;c 7h30 ở khu vực đường số 53,Phạm Văn Chi&ecirc;u,p14,G&ograve; Vấp.Anh chị n&agrave;o thấy b&eacute; hoặc đang giữ đc b&eacute; th&igrave; xin gọi về số 0908068494.E sẽ chuộc về E xin cảm ơn v&agrave; hậu tạ.....</p>\r\n', '89670.jpg', 'ntcong', 2, 1, '2015-08-29', 'Chó', 'Husky', '', '', '', '', '', '', 'màu nâu đỏ', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE IF NOT EXISTS `binhluan` (
  `ID` int(11) NOT NULL,
  `IDBinhLuan` int(11) NOT NULL,
  `NoiDung` text COLLATE utf8_unicode_ci NOT NULL,
  `TenDN` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `Ho` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Ten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SoDienThoai` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `KiemDuyet` tinyint(1) NOT NULL DEFAULT '0',
  `NgayBinhLuan` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`ID`, `IDBinhLuan`, `NoiDung`, `TenDN`, `Ho`, `Ten`, `Email`, `SoDienThoai`, `KiemDuyet`, `NgayBinhLuan`) VALUES
(3, 1, 'Test bình luận 1', 'ntcong', '', 'Công', '', '0984775586', 0, '2015-08-17'),
(4, 2, 'Test bình luận 2 ádasdasdasdasdasd oh yeahcsascacasc', 'dmtri', 'Đặng Minh', '', 'abc@yahoo.com', '', 1, '2015-08-16'),
(11, 30, 'Mình có nhìn thấy em này', '', 'Nguyễn', 'Công', 'cong@gmail.com', '123123', 1, '2015-09-03'),
(12, 30, 'hello baby', 'ntcong', 'Nguyễn Thành', 'Công', 'ntcong.cdsp@gmail.com', '0984775586', 1, '2015-09-03');

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE IF NOT EXISTS `danhmuc` (
  `ID` int(11) NOT NULL,
  `TenDanhMuc` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MoTa` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`ID`, `TenDanhMuc`, `MoTa`) VALUES
(1, 'BaiViet', 'Bài viết về những kiến thức cơ bản của thú cưng'),
(2, 'TinMat', 'Tin mất thú cưng'),
(3, 'TinTim', 'Tin tìm chủ của thú cưng');

-- --------------------------------------------------------

--
-- Table structure for table `phanquyen`
--

CREATE TABLE IF NOT EXISTS `phanquyen` (
  `MaPhanQuyen` int(11) NOT NULL,
  `MoTa` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phanquyen`
--

INSERT INTO `phanquyen` (`MaPhanQuyen`, `MoTa`) VALUES
(1, 'Admin'),
(2, 'Thành viên'),
(3, 'Khách');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `ID` int(11) NOT NULL,
  `TenFile` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`ID`, `TenFile`) VALUES
(1, '1.jpg'),
(2, '2.jpg'),
(3, '3.jpg'),
(4, '4.jpg'),
(6, '6.jpg'),
(7, '7.jpg'),
(8, '8.jpg'),
(9, '9.jpg'),
(10, '14.jpg'),
(11, '12.jpg'),
(12, '16.jpg'),
(13, 'afghan hound.jpg'),
(14, '15.jpg'),
(15, '17.jpg'),
(16, 'Guide-Dogs_025-11.jpg'),
(17, '15.jpg'),
(18, '11.jpg'),
(19, '19.jpg'),
(20, '10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `TenDN` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `MaPhanQuyen` int(11) NOT NULL,
  `Ho` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Ten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `SoDienThoai` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `TrangThai` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`TenDN`, `MatKhau`, `MaPhanQuyen`, `Ho`, `Ten`, `Email`, `DiaChi`, `SoDienThoai`, `TrangThai`) VALUES
('1', 'á', 2, '', '', '', '', '', 1),
('a', 'b', 2, '', '', 'abc@gmail.com', '', '', 1),
('dmtri', '123456', 1, 'Đăng Minh', 'Trí', 'milomoli2134@gmail.com', '', '01662220123', 1),
('mtdung', '123456', 1, 'Mai Tiến', 'Dũng', 'maidungqb92@gmail.com', '', '0962658391', 1),
('ntcong', '123456', 1, 'Nguyễn Thành', 'Công', 'ntcong.cdsp@gmail.com', '181 Trần Phú, Huế', '0984775586', 1),
('ptnha', '123456', 1, 'Phan Thị Ngọc', 'Hà', 'haptngocha@gmail.com', '', '0977316891', 1),
('test', '123', 2, 'Nguyễn Thành', 'Công', 'ntcong.cdsp@gmail.com', '181 Trần Phú, Huế', '0984775586', 1),
('thanhvien', '1', 2, 'Thành', 'Viên', 'thanhvien@gmail.com', '12 Lê Lợi, Huế', '0984775586', 1);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `ID` int(11) NOT NULL,
  `Link` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`ID`, `Link`) VALUES
(1, 'https://www.youtube.com/embed/Cs4OUFAr5Hc'),
(2, 'https://www.youtube.com/embed/MveqXxB12YA'),
(3, 'https://www.youtube.com/embed/GF60Iuh643I'),
(4, 'https://www.youtube.com/embed/fk9iJougDFE'),
(6, 'https://www.youtube.com/embed/w3Z3A-qEBVo'),
(7, 'https://www.youtube.com/embed/4YVxxMqGe88');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`ID`), ADD KEY `IDDanhMuc` (`IDDanhMuc`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`ID`), ADD KEY `IDBinhLuan` (`IDBinhLuan`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`MaPhanQuyen`), ADD UNIQUE KEY `MaPhanQuyen` (`MaPhanQuyen`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`TenDN`), ADD KEY `MaPhanQuyen` (`MaPhanQuyen`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `phanquyen`
--
ALTER TABLE `phanquyen`
  MODIFY `MaPhanQuyen` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
