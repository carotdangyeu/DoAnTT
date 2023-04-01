SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `oto`
--
CREATE DATABASE IF NOT EXISTS `oto` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `oto`;

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE IF NOT EXISTS `chitiethoadon` (
  `mahd` varchar(20) NOT NULL,
  `tensp` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `phuongthucthanhtoan` int(11) NOT NULL,
  `id_hdct` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_hdct`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`mahd`, `tensp`, `soluong`, `gia`, `phuongthucthanhtoan`, `id_hdct`) VALUES
('1', 'Honda CR-Z', 1, 270000000, 3, 2),
('1', 'Honda Civic Type S', 1, 320000000, 3, 3),
('1', 'Honda FR-V', 1, 450000000, 3, 4),
('2', 'Honda Accord Tourer', 1, 370000000, 2, 5),
('2', 'Honda Stream', 1, 730000000, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE IF NOT EXISTS `danhmuc` (
  `madm` int(11) NOT NULL AUTO_INCREMENT,
  `tendm` varchar(50) NOT NULL,
  `dequi` int(11) NOT NULL,
  PRIMARY KEY (`madm`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`madm`, `tendm`, `dequi`) VALUES
(1, 'TOYOTA', 1),
(2, 'KIA', 1),
(3, 'HONDA', 1),
(4, 'FORD', 1),
(5, 'AUDI', 1),
(6, 'BMW', 1),
(7, 'LAMBORGHINI', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE IF NOT EXISTS `hoadon` (
  `mahd` int(11) NOT NULL AUTO_INCREMENT,
  `idnd` int(11) NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `dienthoai` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ngaydathang` date NOT NULL,
  `trangthai` int(11) NOT NULL,
  PRIMARY KEY (`mahd`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`mahd`, `idnd`, `hoten`, `diachi`, `dienthoai`, `email`, `ngaydathang`, `trangthai`) VALUES
(1, 2, 'ngoc123', 'ha noi', 978164307, 'ngoc123@gmail.com', '2014-06-03', 1),
(2, 3, 'sy1234', 'ha noi', 978164307, 'sy1234@gmail.com', '2014-06-05', 2);

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

CREATE TABLE IF NOT EXISTS `lienhe` (
  `idht` int(11) NOT NULL AUTO_INCREMENT,
  `chude` varchar(255) NOT NULL,
  `noidung` text NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `dienthoai` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ngaygui` date NOT NULL,
  PRIMARY KEY (`idht`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `hotro`
--

INSERT INTO `lienhe` (`idht`, `chude`, `noidung`, `hoten`, `dienthoai`, `email`, `ngaygui`) VALUES
(2, 'Ô tô', 'Làm ăn uy tín, chất lượng. Cảm ơn website rất nhiều.', 'Nguyễn Thành Đạt', 978164307, 'thanhdat21293@gmail.com', '2014-05-20');

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE IF NOT EXISTS `nguoidung` (
  `idnd` int(11) NOT NULL AUTO_INCREMENT,
  `tennd` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dienthoai` int(11) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `ngaydangky` date NOT NULL,
  `phanquyen` int(11) NOT NULL,
  PRIMARY KEY (`idnd`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`idnd`, `tennd`, `username`, `password`, `ngaysinh`, `gioitinh`, `email`, `dienthoai`, `diachi`, `ngaydangky`, `phanquyen`) VALUES
(1, 'administrator', 'admin', 'adm', '2014-05-02', 'nam', 'admin@gmail.com', 978164307, 'ha noi', '2014-05-26', 0),
(2, 'ngoc123', 'ngoc123', '25d55ad283aa400af464c76d713c07ad', '2014-05-02', 'nam', 'ngoc123@gmail.com', 978164307, 'ha noi', '2014-05-26', 1),
(3, 'sy1234', 'sy123', '25d55ad283aa400af464c76d713c07ad', '2014-05-02', 'nam', 'sy123@gmail.com', 978164307, 'ha noi', '2014-05-26', 1),
(4, 'hung123', 'hung123', '25d55ad283aa400af464c76d713c07ad', '2014-05-02', 'nam', 'hung123@gmail.com', 978164307, 'ha noi', '2014-05-26', 1),
(5, 'dung123', 'dung123', '25d55ad283aa400af464c76d713c07ad', '2014-05-02', 'nam', 'dung123@gmail.com', 978164307, 'ha noi', '2014-05-26', 1),
(6, 'hongngoc', 'hongngoc', '25d55ad283aa400af464c76d713c07ad', '1993-12-02', 'nam', 'hongngoc@gmail.com', 978164307, 'ha noi', '2014-06-01', 1);

-- --------------------------------------------------------


-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE IF NOT EXISTS `sanpham` (
  `idsp` int(11) NOT NULL AUTO_INCREMENT,
  `tensp` varchar(50) NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `mau` varchar(20) NOT NULL,
  `chitiet` text NOT NULL,
  `soluong` int(11) NOT NULL,
  `daban` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `khuyenmai1` int(11) NOT NULL,
  `khuyenmai2` varchar(255) NOT NULL,
  `madm` int(11) NOT NULL,
  `ngaycapnhat` date NOT NULL,
  `trangthai` int(11) NOT NULL,
  PRIMARY KEY (`idsp`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=84 ;

--
-- Dumping data for table `sanpham`
--
INSERT INTO `sanpham` (`idsp`, `tensp`, `hinhanh`, `mau`, `chitiet`, `soluong`, `daban`, `gia`, `khuyenmai1`, `khuyenmai2`, `madm`, `ngaycapnhat`, `trangthai`) VALUES
(1, 'Honda Insight ', 'product80.jpg', '', '', 20, 8, 250000000, 0, 'Túi rác tiện lợi', 3, '2022-05-20', 0),
(3, 'Toyota Proace City Verson', 'product.jpg', '', '', 20, 0, 560000000, 0, '', 1, '2022-05-20', 0),
(4, 'Toyota Corolla Sedan', 'product6.jpg', '', '', 20, 0, 254000000, 0, '', 1, '2022-05-20', 0),
(5, 'Toyota Mirai', 'product9.jpg', '', '', 20, 0, 232000000, 0, '', 1, '2022-05-20', 0),
(6, 'Toyota Prius Plug-in Hybrid', 'product12.jpg', '', '', 20, 0, 612000000, 0, '', 1, '2022-05-20', 0),
(7, 'Toyota C-HR', 'product25.jpg', '', '', 20, 0, 580000000, 30, 'Gối đệm cổ', 1, '2022-05-20', 0),
(8, 'Toyota Auris Touring Sports', 'product13.jpg', '', '', 20, 0, 490000000, 0, '', 1, '2022-05-20', 0),
(2, 'Honda e', 'product73.jpg', '', '', 20, 0, 230000000, 0, 'Tai nghe bluetooth', 3, '2014-05-26', 0),
(9, 'Honda Civic Tourer', 'product77.jpg', '', '', 20, 14, 160000000, 0, '', 3, '2022-05-20', 0),
(10, 'Honda CR-Z', 'product81.jpg', '', '', 20, 2, 270000000, 0, '', 3, '2022-05-20', 0),
(11, 'Honda Civic Type S', 'product79.jpg', '', '', 20, 2, 320000000, 0, '', 3, '2022-05-20', 0),
(12, 'Honda FR-V', 'product73.jpg', '', '', 20, 1, 450000000, 0, '', 3, '2022-05-20', 0),
(13, 'Honda Accord Tourer', 'product74.jpg', '', '', 20, 0, 370000000, 0, '', 3, '2022-05-20', 0),
(14, 'Honda Stream', 'product75.jpg', '', '', 20, 0, 730000000, 0, '', 3, '2022-05-20', 0),
(15, 'Honda Logo', 'product76.jpg', '', '', 20, 0, 720000000, 0, '', 3, '2022-05-20', 0),
(16, 'Honda HR-V', 'product77.jpg', '', '', 20, 1, 652000000, 0, '', 3, '2022-05-20', 0),
(17, 'Honda Civic Aero Deck', 'product78.jpg', '', '', 20, 0, 910000000, 0, '', 3, '2022-05-20', 0),
(18, 'Honda Integra R', 'product79.jpg', '', '', 20, 0, 780000000, 0, '', 3, '2022-05-20', 0),
(19, 'Honda Shuttle', 'product80.jpg', '', '', 20, 0, 680000000, 0, '', 3, '2022-05-20', 0),
(20, 'Honda Aerodeck Estate', 'product81.jpg', '', '', 20, 0, 430000000, 0, '', 3, '2022-05-20', 0),
(21, 'Honda Accord Coupe', 'product73.jpg', '', '', 20, 0, 450000000, 0, '', 3, '2022-05-20', 0),
(22, 'Honda Civic Coupe', 'product82.jpg', '', '', 20, 0, 255000000, 0, '', 3, '2022-05-20', 0),
(23, 'Honda Accord Aerodeck', 'product8.jpg', '', '', 20, 0, 320000000, 0, '', 3, '2022-05-20', 0),
(24, 'Honda Concerto', 'product83.jpg', '', '', 20, 0, 440000000, 0, '', 3, '2022-05-20', 0),
(25, 'Honda Civic Shuttle', 'product84.jpg', '', '', 20, 0, 260000000, 0, '', 3, '2022-05-20', 0),
(26, 'Ford Mustang Mach-E', 'product15.jpg', '', '', 20, 0, 820000000, 0, '', 4, '2022-05-20', 0),
(27, 'Ford Edge', 'product27.jpg', '', '', 20, 1, 910000000, 0, '', 4, '2022-05-20', 0),
(28, 'Ford C-MAX Energi', 'product28.jpg', '', '', 20, 0, 730000000, 0, '', 4, '2022-05-20', 0),
(29, 'Ford Mustang Fastback', 'product29.jpg', '', '', 20, 0, 900000000, 0, '', 4, '2022-05-20', 0),
(30, 'Ford Tourneo Courier', 'product30.jpg', '', '', 20, 0, 860000000, 0, '', 4, '2022-05-20', 0),
(32, 'Ford EcoSport', 'product31.jpg', '', '', 20, 0, 720000000, 0, '', 4, '2022-05-20', 0),
(33, 'Ford Transit Courier', 'product32.jpg', '', '', 20, 0, 615000000, 0, '', 4, '2022-05-20', 0),
(34, 'Ford Focus Electric', 'product33.jpg', '', '', 20, 0, 751000000, 0, '', 4, '2022-05-20', 0),
(35, 'Ford Tourneo Custom', 'product34.jpg', '', '', 20, 0, 516000000, 10, '', 4, '2022-05-20', 0),
(36, 'Ford B-MAX', 'product35.jpg', '', '', 20, 0, 860000000, 0, '', 4, '2022-05-20', 0),
(37, 'Ford Transit Custom Kombi', 'product36.jpg', '', '', 20, 0, 520000000, 0, '', 4, '2022-05-20', 0),
(38, 'Ford Transit Kombi', 'product37.jpg', '', '', 20, 0, 497000000, 0, '', 4, '2022-05-20', 0),
(39, 'Ford Transit Dubbele Cabine', 'product38.png', '', '', 20, 0, 358000000, 0, '', 4, '2022-05-20', 0),
(40, 'Ford Transit', 'product39.jpg', '', '', 20, 0, 320000000, 0, '', 4, '2022-05-20', 0),
(41, 'Ford Ka', 'product40.jpg', '', '', 20, 0, 290000000, 0, 'Miếng dán chống nắng', 4, '2022-05-20', 0),
(42, 'Ford C-MAX', 'product41.jpg', '', '', 20, 0, 520000000, 0, '', 4, '2022-05-20', 0),
(43, 'Audi e-tron Sportback', 'product42.jpg', '', '', 20, 0, 1320000000, 0, '', 5, '2022-05-20', 0),
(44, 'Audi Q3 Sportback', 'product43.jpg', '', '', 20, 1, 1190000000, 0, '', 5, '2022-05-20', 0),
(45, 'Audi RS5 Sportback', 'product44.jpg', '', '', 20, 0, 2500000000, 0, '', 5, '2022-05-20', 0),
(46, 'Audi Q8', 'product45.jpg', '', '', 20, 0, 4600000000, 0, '', 5, '2022-05-20', 0),
(47, 'BMW 2-series Gran Coupe', 'product50.jpg', '', '', 20, 0, 4150000000, 0, '', 6, '2022-05-20', 0),
(48, 'BMW iX3', 'product51.jpg', '', '', 20, 1, 2500000000, 0, '', 6, '2022-05-20', 0),
(49, 'BMW 8-series Cabrio', 'product52.png', '', '', 20, 1, 2110000000, 0, '', 6, '2022-05-20', 0),
(50, 'Lamborghini Urus', 'product71.jpg', '', '', 20, 0, 4390000000, 0, '', 7, '2022-05-20', 0),
(51, 'Lamborghini Aventador Roadster', 'product72.jpg', '', '', 20, 1, 5200000000, 0, '', 7, '2022-05-20', 0),
(52, 'Lamborghini Aventador', 'product85.jpg', '', '', 20, 0, 4820000000, 0, '', 7, '2022-05-20', 0),
(53, 'Lamborghini Gallardo Spyder', 'product86.jpg', '', '', 20, 0, 5140000000, 0, '', 7, '2022-05-20', 0),
(54, 'Lamborghini Murcielago Roadster', 'product87.jpg', '', '', 20, 0, 5120000000, 0, '', 7, '2022-05-20', 0),
(55, 'Samsung EB-L1G6LLUCSTD', 'product88.jpg', '', '', 20, 0, 90000000, 0, '', 7, '2022-05-20', 0),
(56, 'Samsung Pouch (EFC-1J9LCEGSTD)', 'product89.jpg', '', '', 20, 0, 83600000, 0, '', 7, '2022-05-20', 0),
(57, 'YSD- PW 037 ', 'product90.jpg', '', '', 20, 0, 85000000, 0, '', 7, '2022-05-20', 0),
(58, 'YSD- PW 006', 'product91.jpg', '', '', 20, 0, 70000000, 0, '', 7, '2022-05-20', 0),
(59, 'Kia ProCeed', 'product19.png', '', '', 20, 0, 625000000, 0, '', 2, '2022-05-20', 0),
(60, 'Kia XCeed', 'product20.png', '', '', 20, 1, 542000000, 0, '', 2, '2022-05-20', 0),
(61, 'Kia e-Soul', 'product21.png', '', '', 20, 1, 562000000, 0, '', 2, '2022-05-20', 0),
(62, 'Kia Stinger', 'product22.png', '', '', 20, 0, 668000000, 0, '', 2, '2022-05-20', 0),
(63, 'Kia Optima SW', 'product23.png', '', '', 20, 0, 722000000, 0, '', 2, '2022-05-20', 0),
(65, 'Kia Sorento Van', 'product25.jpg', '', '', 20, 0, 363000000, 0, '', 2, '2022-05-20', 0),
(66, 'Kia Carens', 'product26.jpg', '', '', 20, 0, 760000000, 0, '', 2, '2022-05-20', 0),
(67, 'Audi e-tron', 'product46.jpg', '', '', 20, 0, 2650000000, 0, '', 5, '2022-05-20', 0),
(68, 'Audi RS3 Limousine', 'product47.jpg', '', '', 20, 0, 4230000000, 0, '', 5, '2022-05-20', 0),
(69, 'Audi R8 Coupe', 'product48.jpg', '', '', 20, 0, 4500000000, 0, '', 5, '2022-05-20', 0),
(70, 'Audi Q2', 'product49.jpg', '', '', 20, 0, 3600000000, 0, '', 5, '2022-05-20', 0),
(71, 'BMW X7', 'product54.jpg', '', '', 20, 0, 1880000000, 0, '', 6, '2022-05-20', 0),
(72, 'BMW i8 Roadster', 'product55.jpg', '', '', 20, 0, 4360000000, 0, '', 6, '2022-05-20', 0),
(31, 'BMW i8 Coupe', 'product56.jpg', '', '', 20, 0, 5436000000, 0, '', 6, '2022-05-20', 0);
-- --------------------------------------------------------

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
