-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Nov 10, 2016 at 01:44 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kavoshabzar`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `About_id` int(11) NOT NULL,
  `text` text COLLATE utf8_persian_ci NOT NULL,
  `lang` varchar(10) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`About_id`, `text`, `lang`) VALUES
(1, 'Kavosh Abzar Arya , with high experience in the field of Oil-Gas , Power Plants &amp; Marine , is\n                leading supplier to various industries in Iran.The company main focus is to provide highly reliable\n                engineering products and quality services to meet and drive to exceed individual customer`s\n                specifications and requirements.\n\n                <br>\n                <br>\n\n                We value customers view &amp; commit to enthusiastically &amp; sincerely serve our customer. Our member\n                shall act in securing health, safety &amp; good environment in accordance with social value and\n                concerns.', 'en'),
(2, 'شرکت کاوش ابزار آریا با تجربه طولانی درزمینه نفت و گاز نیروگاه و صنایع دریایی در جهت جذب سازندگان موفق خارجی برای تامین نیازهای صنایع مختلف تلاش می نماید.\r\nهدف اصلی این شرکت تمرکز بر ارائه محصولات مهندسی قابل اطمینان ، هدایت مشتریان خود به سمت فناوری روز آمد مورد نیاز خود می باشد.\r\nما به نیاز و تعهد مشتریان ارزش می گذاریم . و با تمام توان در جهت تامین خواست های آنها قدم می گذاریم .\r\nهدف ما امینت ، سلامت ، ایمنی و محیط زیست مطابق با حفظ ارزشهای اجتماعی می باشد.', 'fa');

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `id` int(10) NOT NULL,
  `lang` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `theme` varchar(10) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `lang`, `theme`) VALUES
(1, 'en', 'white');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Contact_id` int(11) NOT NULL,
  `name` text COLLATE utf8_persian_ci NOT NULL,
  `email` text COLLATE utf8_persian_ci NOT NULL,
  `subject` text COLLATE utf8_persian_ci NOT NULL,
  `message` text COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `omg`
--

CREATE TABLE `omg` (
  `Omg_id` int(11) NOT NULL,
  `text` text COLLATE utf8_persian_ci NOT NULL,
  `brief_desc` text COLLATE utf8_persian_ci NOT NULL,
  `lang` varchar(10) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `omg`
--

INSERT INTO `omg` (`Omg_id`, `text`, `brief_desc`, `lang`) VALUES
(1, 'Officine Meccaniche Gallaratesi S.p.A. was established in 1907 by a group of Milanese entrepreneurs.\nThe company’s main activity during its early years was centred around an engineering workshop and its annexed cast iron foundry and aimed at satisfying the increasing demands of the rapidly expanding Lombardy industry at the start of the century.During the following years, the company added the construction of machines to its production.\nThe first patent for an hollow disc rotary pump was registrered in 1918. The principle patented at the time is being used in a series of pumps still in production.\nThe 1950''s saw the design and production of the first plunger dosing pump. The range of dosing pumps has since been expanded with the introduction of a number of diaphragm dosing pumps during the 70''s.\nIn the same 1970’s, OMG expanded its activities to include the design and construction of package dosing systems, manufactured according to customer’s specifications and the main governing standards for Oil & Gas, chemical and petrochemical markets.\nDuring the 1980''s, OMG initiated the introduction of a formalised quality system, with the first complete quality system being adopted in 1992. In the spring of 1996, OMG quality system was certified as conforming to ISO 9001.\nUnlike other pump manufacturers, OMG has chosen to retain all design and construction activities in its property maintaining a higher level of quality control and greater manufacturing flexibility. This enables OMG to develop customized tailormade applications meeting all specific dosing requirements.', 'Officine Meccaniche Gallaratesi S.p.A. was established in 1907 by a group of Milanese entrepreneurs.', 'en'),
(2, 'شرکت OMG  توسط گروهی از کارآفرینان میلان درسال 1907 پایه گذاری شد.\n<br><br>\nفعالیت عمده شرکت در سالهای اولیه برگزاری ورک شاپ های مهندسی و ریخته گری آهن بود که این امر موجب گسترش صنعت در ایالت لومباردی در آغاز قرن شد.\n<br><br>\nسالهای بعد ساخت ماشین آلات برای تولیدات اضافه شد، همچنین اولین حق ثبت برای پمپ های سانتریفیوژ دیسک روتاری در سال 1918 اخذ شد که در تولید یک سری از پمپ ها هنوز استفاده می شود .\n<br><br>\nدر سال 1950 طراحی و تولید اولین دوزینگ پمپ پیستونی انجام شد .\n<br><br>\nو در دهه 70 محدوده این پمپ ها با معرفی تعدادی از پمپ های دوزینگ دیافراگمی افزایش یافت.\n<br><br>\nدر همان زمان شرکت OMG فعالیت های خود را به طراحی و ساخت پکیج های دوزینگ سیستم و تولید بر اساس مشخصات مورد نیاز مشتریان و استانداردهای اصلی حاکم بر بازارهای نفت و گاز و محصولات شیمیایی و پتروشیمی گسترش داد.\n<br><br>\nطی سالهای 1980 شرکت OMG آغاز به اخذ استانداردهای تضمین کیفیت نمود.که اولین گواهی کیفیت در سال 1992 کسب شد . در سال 1996 شرکت موفق به اخذ تاییدیه ISO 9001 شد.\n<br><br>\nبرخلاف دیگر کارخانه های پمپ سازی طراحی و ساخت تمامی پمپ ها ، شرکت OMG را قادر به توسعه برنامه های کاربردی سفارشی برای ساخت دوزینگ پمپ های خاص می سازد', 'شرکت OMG  توسط گروهی از کارآفرینان میلان درسال 1907 پایه گذاری شد.', 'fa');

-- --------------------------------------------------------

--
-- Table structure for table `optimarin`
--

CREATE TABLE `optimarin` (
  `Optimarin_id` int(11) NOT NULL,
  `lang` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `text` text COLLATE utf8_persian_ci NOT NULL,
  `brief_desc` text COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `optimarin`
--

INSERT INTO `optimarin` (`Optimarin_id`, `lang`, `text`, `brief_desc`) VALUES
(1, 'fa', 'OPTIMARIN A S در سال 1994 در شهر استاوانگر که در طول ساحل غربی نروژ قرار دارد تاسیس شده است و یکی از اولین شرکت های دنیا در زمینه ی تولید سیستم های سازگار با محیط زیست برای خالص کردن آب بالاست می باشد.\nبا وجود اینکه می دانیم روش های مختلفی برای خالص کردن آب بالاست وجود دارد (هم روش های شیمیایی و هم روش های سازگار با محیط زیست) انتخاب ما روشی بود که در آن از مواد شیمیایی استفاده نشود و هیچ پسماندی نداشته باشد که برای اقیانوس و محیط زیست مضر باشد. در سال 2000 ما افتخار نصب اولین سیستم سالم سازی آب بالاست را بر روی کشتی کروز پرنس رگال داشتیم.\nبعد از سال ها آزمایش، گسترش و ثبت فناوری های نوین، با توجه به راهنمای 8 و "قرارداد بین المللی مدیریت و کنترل بالاست و پسماند کشتی ها در سال 2004" بالاخره در سال 2009 تایید کلاس برای سیستم بالاست OPTIMARIN را بدست آوردیم،. OBS از تکنولوژی تایید شده ای استفاده می کند که مشخصاً از ملزومات دقیق تعیین شده در قرارداد IMO هم فراتر است. اما برای OPTIMARIN صرف یک تاییدیه کافی نمی باشد. ما با توجه به ISO 9001 / 2008 عمل می کنیم و در نظر داریم که سیستم خالص سازی با سازگارترین آب بالاست با محیط زیست را داشته باشیم.\nما در دفتر مرکزیمان در Sandnes امکانات آزمایشگاهی کاملی را برای بررسی عملکرد سیستم بالاست OPTIMARIN داریم که از آن برای آموزش فنی مشتریان و یا برای اهداف R&D داخلی استفاده می کنیم.\nبخش لاجیستیک ما یک انبار ابزار  استراتژیک اصلی در اروپا، در لوکزامبورگ با دسترسی عالی به فرودگاه، اسکله ها و حمل و نقل زمینی برای رساندن محصولاتمان به دست مشتریان در هر کجای دنیا، بنا کرده است.', 'OPTIMARIN A S در سال 1994 در شهر استاوانگر که در طول ساحل غربی نروژ قرار دارد تاسیس شده است و یکی از اولین شرکت های دنیا در زمینه ی تولید سیستم های سازگار با محیط زیست برای خالص کردن آب بالاست می باشد.\n'),
(2, 'en', 'Optimarin AS was founded in 1994 in Stavanger, a town along the west coast of Norway and we were one of the first companies in the world to develop a system for environmentally friendly purification of ballast water.\nAlthough we recognized that there were various methods for purifying ballast water, both chemical and environmentally friendly methods, we chose to pursue a solution that does not use any chemicals and leaves no residual products that are harmful to the ocean or the environment. In the year of 2000  we were honored by installing the world’s first ballast water treatment system on board the cruise ship Regal Princess.\nAfter several years of testing, developing and patenting new technology, we finally obtained type approval for the Optimarin Ballast System in 2009, in accordance with Guideline 8 and the ‘International Convention for the Control and Management of Ships’ Ballast Water and Sediments, 2004’. The Optimarin Ballast System (OBS) uses approved technology that significantly exceeds the stringent requirements set out in the IMO Convention. But for Optimarin, it is not enough to simply be approved. We operate in accordance with ISO 9001 / 2008 and our vision is to have the most environmentally friendly ballast water purification system in the world.\nAt our main office in Sandnes we have a fully operational Optimarin Ballast System test facility which may be used for training of customer’s technical personnel, or for internal R&D purposes.\nOur Logistics department has established a main warehouse facility strategically placed in Europe, in Luxemburg – with excellent connections to airports, shipping ports and land based transportation of our products on their way to our customers all over the world.', 'Optimarin AS was founded in 1994 in Stavanger, a town along the west coast of Norway and we were one of the first companies in the world to develop a system for environmentally friendly purification of ballast water.');

-- --------------------------------------------------------

--
-- Table structure for table `pressRelease`
--

CREATE TABLE `pressRelease` (
  `PressRelease_id` int(11) NOT NULL,
  `subject` text COLLATE utf8_persian_ci NOT NULL,
  `description` text COLLATE utf8_persian_ci NOT NULL,
  `image_name` text COLLATE utf8_persian_ci NOT NULL,
  `image_desc` text COLLATE utf8_persian_ci NOT NULL,
  `image_type` varchar(4) COLLATE utf8_persian_ci NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `pressRelease`
--

INSERT INTO `pressRelease` (`PressRelease_id`, `subject`, `description`, `image_name`, `image_desc`, `image_type`, `create_date`) VALUES
(1, 'News 1', 'desc of news 1', 'optimarin-banner', 'News 1', 'jpg', '2016-11-06 16:20:01'),
(2, 'News 2', 'desc of news 2', 'optimarin-banner', 'News 2', 'jpg', '2016-11-06 16:20:01');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `Slider_id` int(11) NOT NULL,
  `name` text COLLATE utf8_persian_ci NOT NULL,
  `description` text COLLATE utf8_persian_ci NOT NULL,
  `type` varchar(4) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`Slider_id`, `name`, `description`, `type`) VALUES
(1, 'kavoshabzar-background-1', 'Image Credit: Kavosh Abzar Aria', 'jpg'),
(2, 'kavoshabzar-background-2', 'Image Credit: Kavosh Abzar Aria', 'jpg'),
(3, 'kavoshabzar-background-3', 'Image Credit: Kavosh Abzar Aria', 'jpg'),
(4, 'kavoshabzar-background-4', 'Image Credit: Kavosh Abzar Aria', 'jpg'),
(5, 'kavoshabzar-background-5', 'Image Credit: Kavosh Abzar Aria', 'jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`About_id`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Contact_id`);

--
-- Indexes for table `omg`
--
ALTER TABLE `omg`
  ADD PRIMARY KEY (`Omg_id`);

--
-- Indexes for table `optimarin`
--
ALTER TABLE `optimarin`
  ADD PRIMARY KEY (`Optimarin_id`);

--
-- Indexes for table `pressRelease`
--
ALTER TABLE `pressRelease`
  ADD PRIMARY KEY (`PressRelease_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`Slider_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `About_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Contact_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `omg`
--
ALTER TABLE `omg`
  MODIFY `Omg_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `optimarin`
--
ALTER TABLE `optimarin`
  MODIFY `Optimarin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pressRelease`
--
ALTER TABLE `pressRelease`
  MODIFY `PressRelease_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `Slider_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
