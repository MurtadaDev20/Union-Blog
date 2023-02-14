-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2023 at 01:05 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `union`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(4, 'So_iraq@yahoo.com', 'olympics@1212');

-- --------------------------------------------------------

--
-- Table structure for table `catigories`
--

CREATE TABLE `catigories` (
  `id` int(11) NOT NULL,
  `catigoryName` varchar(100) NOT NULL,
  `catigoryName_en` varchar(100) NOT NULL,
  `catigoryDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `catigories`
--

INSERT INTO `catigories` (`id`, `catigoryName`, `catigoryName_en`, `catigoryDate`) VALUES
(277, 'الاخبار', 'News', '2022-11-09 23:44:31'),
(278, 'رياضة', 'Sports', '2022-11-15 23:55:03'),
(279, 'منوعات', 'Mix', '2022-11-15 23:55:08');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `username`, `email`, `text`) VALUES
(8, 'webe', 'walled.luqmman2001@gmail.com', ';oj;oj;ok');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `postTitle` varchar(200) NOT NULL,
  `postTitle_en` varchar(200) NOT NULL,
  `postCat` varchar(100) NOT NULL,
  `postImage` varchar(200) NOT NULL,
  `postContent` longtext NOT NULL,
  `postContent_en` longtext NOT NULL,
  `postDate` date NOT NULL DEFAULT current_timestamp(),
  `postAuthor` varchar(200) NOT NULL,
  `postAuthor_en` varchar(200) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `type` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `postTitle`, `postTitle_en`, `postCat`, `postImage`, `postContent`, `postContent_en`, `postDate`, `postAuthor`, `postAuthor_en`, `status`, `type`) VALUES
(151, 'التعادل يحسم مواجهة إسبانيا وألمانيا في المونديال', 'A tie decides the confrontation between Spain and Germany in the World Cup', '278', 'Doc-P-439376-638051798017190464.jpg', '<div id=\"ctl00_MainContent_ArticleDetails3_DivLeadText\" class=\"ShortDesc\" style=\"background-repeat: no-repeat; line-height: 36px; font-size: 18px; font-family: droid_arabic_kufibold; padding-bottom: 40px;\"><h2 class=\"u-inheritStyle\" style=\"background-repeat: no-repeat; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; font-size: inherit; text-decoration: inherit; display: inline; text-transform: inherit; font-style: inherit; line-height: inherit; width: inherit; height: inherit;\">حسم التعادل الإيجابي بنتيجة (1-1) مواجهة إسبانيا وألمانيا، مساء الأحد، ضمن منافسات الجولة الثانية بالمجموعة الخامسة، لنهائيات مونديال قطر 2022، في ملعب \"استاد البيت\".<br style=\"background-repeat: no-repeat;\"></h2></div><div class=\"LongDesc\" style=\"background-repeat: no-repeat; line-height: 36px; font-size: 18px; font-family: droid_arabic_kufiregular;\"><div style=\"background-repeat: no-repeat;\">وسجل لإسبانيا ألفارو موراتا في الدقيقة 62، بينما سجل نيكلاس فولكروج لألمانيا في الدقيقة 83.<br style=\"background-repeat: no-repeat;\"><br style=\"background-repeat: no-repeat;\">وبهذا التعادل رفع المنتخب الإسباني رصيده إلى 4 نقاط في صدارة المجموعة الخامسة، ورفع المنتخب الألماني رصيده إلى نقطة في ذيل ترتيب المجموعة.</div><div style=\"background-repeat: no-repeat;\"><div id=\"ctl00_MainContent_ArticleDetails3_DivLeadText\" class=\"ShortDesc\" style=\"background-repeat: no-repeat; line-height: 36px; font-family: droid_arabic_kufibold; padding-bottom: 40px;\"><h2 class=\"u-inheritStyle\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: inherit; font-size: inherit; background-repeat: no-repeat; padding: 0px; text-decoration: inherit; display: inline; text-transform: inherit; font-style: inherit; width: inherit; height: inherit;\">حسم التعادل الإيجابي بنتيجة (1-1) مواجهة إسبانيا وألمانيا، مساء الأحد، ضمن منافسات الجولة الثانية بالمجموعة الخامسة، لنهائيات مونديال قطر 2022، في ملعب \"استاد البيت\".<br style=\"background-repeat: no-repeat;\"></h2></div><div class=\"LongDesc\" style=\"background-repeat: no-repeat; line-height: 36px;\"><div style=\"background-repeat: no-repeat;\">وسجل لإسبانيا ألفارو موراتا في الدقيقة 62، بينما سجل نيكلاس فولكروج لألمانيا في الدقيقة 83.<br style=\"background-repeat: no-repeat;\"><br style=\"background-repeat: no-repeat;\">وبهذا التعادل رفع المنتخب الإسباني رصيده إلى 4 نقاط في صدارة المجموعة الخامسة، ورفع المنتخب الألماني رصيده إلى نقطة في ذيل ترتيب المجموعة.</div></div></div></div>', '<p><b>A positive tie was settled, with a score of (1-1), against Spain and Germany, on Sunday evening, in the second round of Group E, for the Qatar 2022 World Cup finals, at Al Bayt Stadium.</b></p><p>Alvaro Morata scored for Spain in the 62nd minute, while Niklas Volkrug scored for Germany in the 83rd minute.</p><p><br></p><p>With this tie, the Spanish national team raised its score to 4 points at the top of Group E, and the German national team raised its score to a point at the bottom of the group standings.</p><p><span style=\"font-weight: bolder;\">A positive tie was settled, with a score of (1-1), against Spain and Germany, on Sunday evening, in the second round of Group E, for the Qatar 2022 World Cup finals, at Al Bayt Stadium.</span></p><p>Alvaro Morata scored for Spain in the 62nd minute, while Niklas Volkrug scored for Germany in the 83rd minute.</p><p><br></p><p>With this tie, the Spanish national team raised its score to 4 points at the top of Group E, and the German national team raised its score to a point at the bottom of the group standings</p>', '2022-11-28', 'الاتحاد العراقي', 'union', 1, 0),
(152, 'أردوغان: لقائي مع السيسي استمر نحو 45 دقيقة وقررنا حل القضايا الثنائية', 'Erdogan: My meeting with Sisi lasted about 45 minutes, and we decided to resolve bilateral issues', '277', 'fd7b9b55-c7dd-42a7-8cc2-66593d7b2a07_16x9_1200x676.jpg', '<p>قال الرئيس التركي <b>رجب طيب أردوغان</b>، إن لقائي مع الرئيس المصري عبد الفتاح السيسي في الدوحة استمر نحو 45 دقيقة، وقررنا حل القضايا الثنائية باجتماعات الوزراء.</p><p><br></p><p>وقال أردوغان، حسبما نقلت عنه صحيفة \"أكسام\" التركية، إن \"اللقاء مع الرئيس المصري استغرق حوالي 45 دقيقة، وستكون هناك تطورات إيجابية مع القاهرة\".</p><p><br></p><p>وأضاف أردوغان في تصريحاته للصحيفة التركية أن العلاقات مع سوريا يمكن أن تعود إلى طبيعتها مثلما جرى مع مصر.</p><p><br></p><p>وأكد الرئيس التركي الأحد، أن العلاقات التي تجمع بين تركيا وسوريا قد تعود إلى نصابها، مشيرًا إلى أنه لا توجد خصومة دائمًا في السياسة.</p>', '<p>Turkish President <b>Recep Tayyip Erdogan</b> said that my meeting with Egyptian President Abdel Fattah El-Sisi in Doha lasted about 45 minutes, and we decided to resolve bilateral issues through ministerial meetings.</p><p><br></p><p>Erdogan said, according to the Turkish newspaper \"Axam\", that \"the meeting with the Egyptian president took about 45 minutes, and there will be positive developments with Cairo.\"</p><p><br></p><p>In his statements to the Turkish newspaper, Erdogan added that relations with Syria could return to normal, as happened with Egypt.</p><p><br></p><p>On Sunday, the Turkish President confirmed that the relations between Turkey and Syria may return to normal, noting that there is not always animosity in politics.</p>', '2022-11-28', 'الاتحاد العراقي', 'union', 1, 0),
(154, 'خبر سعيد لمنتخب عربي في المونديال', 'Good news for an Arab team in the World Cup', '278', 'Doc-P-439295-638050921093194888.jpg', '<p>زفّ مدرب المنتخب البلجيكي روبرتو مارتينيس، السبت، \"خبرا سعيدا\" للمنتخب المغربي، قبل المواجهة التي ستجمع بينهما، يوم غد الأحد، لحساب الجولة الثانية من منافسات المجموعة السادسة في كأس العالم 2022.</p><p>ونقل موقع \"بي سوكر\" عن مارتينيس قوله خلال مؤتمر صحفي يسبق مواجهة المغرب: \"لن يشارك المهاجم روميلو لوكاكو أساسيا.. في أحسن الأحوال قد يلعب بضعة دقائق، لكن ذلك سيعتمد على الحصة التدريبية اليوم\".</p><p><br></p><p>وأضاف: \"طبيّا، قلنا إنه سيكون جاهزا فقط للمباراة الثالثة، أمام كرواتيا\".</p>', '<div>Turkish President Recep Tayyip Erdogan said that my meeting with Egyptian President Abdel Fattah El-Sisi in Doha lasted about 45 minutes, and we decided to resolve bilateral issues through ministerial meetings.</div><div>Erdogan said, according to the Turkish newspaper \"Axam\", that \"the meeting with the Egyptian president took about 45 minutes, and there will be positive developments with Cairo.\"</div><div>In his statements to the Turkish newspaper, Erdogan added that relations with Syria could return to normal, as happened with Egypt.</div><div>On Sunday, the Turkish President confirmed that the relations between Turkey and Syria may return to normal, noting that there is not always animosity in politics.</div>', '2022-11-28', 'الاتحاد العراقي', 'union', 1, 0),
(155, 'مدرب بلجيكا يتجاهل العراق ومصر قبل مونديال قطر.. ما القصة؟', 'The Belgium coach ignores Iraq and Egypt before the Qatar World Cup.. What is the story?', '277', 'Doc-P-433079-637996017045280564.jpg', '<p><b>جاهل المدرب الإسباني روبرتو مارتينيز، المدير الفني لمنتخب بلجيكا الأول لكرة القدم، منتخبي العراق ومصر، خلال حديثه عن المباراة التي تُمثل للشياطين الحمُر أفضل استعداد لنهائيات كأس العالم قطر 2022.</b></p><p>وتستعد بلجيكا لمُلاقاة الجارة هولندا في دوري الأمم الأوروبية، يوم الأحد 25 سبتمبر/ أيلول الجاري، ثم ستُلاقي العراق وديًا يوم 15 نوفمبر<span style=\"background-color: rgb(255, 0, 255);\">/ تشرين الثاني، ومصر</span> يوم 18 من الشهر ذاته، قبل أيام م<span style=\"background-color: rgb(255, 255, 0);\">ن أول مبارياته</span>ا في كأس العالم ضد كندا في الجولة الأولى بدور المجموعات.</p>', '<p><b>Spanish coach Roberto Martinez, coach of the Belgium national football team, was ignorant of the teams of Iraq and Egypt, during his talk about the match that represents the Red Devils as the best preparation for the 2022 Qatar World Cup.</b></p><p>Belgium is preparing to meet the neighboring Netherlands in the European Nations League, on Sunday, September 25, then it will meet Iraq friendly on November 15, and Egypt on the 18th of the same month, days before its first match in the World Cup against Canada in the first round in the role of groups.</p>', '2022-11-28', 'الاتحاد العراقي', 'union', 1, 0),
(156, 'ايران.. اقالة مدرب المنتخب الوطني قبيل انطلاق المونديال', 'Iran .. dismissal of the national team coach before the start of the World Cup', '278', 'Doc-P-426139-637931488407876808.jpg', '<div id=\"ctl00_MainContent_ArticleDetails3_DivLeadText\" class=\"ShortDesc\" style=\"background-repeat: no-repeat; line-height: 36px; padding-bottom: 40px;\"><div id=\"ctl00_MainContent_ArticleDetails3_DivLeadText\" class=\"ShortDesc\" style=\"text-align: center; background-repeat: no-repeat; line-height: 36px; padding-bottom: 40px;\"><font face=\"droid_arabic_kufiregular\"><span style=\"font-size: 18px;\">أكدت وسائل اعلام ايرانية، اليوم الإثنين، أن مدرب المنتخب الوطني دراغان سكوتشيتش أقيل من منصبه قبل نحو أربعة أشهر من انطلاق نهائيات كأس العالم لكرة القدم في قطر.</span></font></div><div id=\"ctl00_MainContent_ArticleDetails3_DivLeadText\" class=\"ShortDesc\" style=\"text-align: center; background-repeat: no-repeat; line-height: 36px; padding-bottom: 40px;\"><font face=\"droid_arabic_kufiregular\"><span style=\"font-size: 18px;\">وقالت وكالة الجمهورية الإسلامية للأنباء \"إرنا\" إن \"الاتحاد الإيراني لكرة القدم قرر إقالة المدرب البالغ من العمر 53 عاما، وسيتم تعيين بديله في أقرب وقت\".</span></font></div><div id=\"ctl00_MainContent_ArticleDetails3_DivLeadText\" class=\"ShortDesc\" style=\"text-align: center; background-repeat: no-repeat; line-height: 36px; padding-bottom: 40px;\"><font face=\"droid_arabic_kufiregular\"><span style=\"font-size: 18px;\">وتأتي هذه الخطوة بعد أن قاد سكوتشيتش، الذي تولى منصبه خلفا ل‍مارك فيلموتس في شباط 2020، إيران للتأهل لكأس العالم بتصدر مجموعتها في التصفيات الآسيوية على حساب كوريا الجنوبية</span></font></div></div>', '<p>Iranian media confirmed today, Monday, that the coach of the national team, Dragan Skocic, was dismissed from his position, about four months before the start of the FIFA World Cup finals in Qatar.</p><p>\"The Iranian Football Federation has decided to dismiss the 53-year-old coach, and his replacement will be appointed as soon as possible,\" the Islamic Republic News Agency, \"IRNA\", said.</p><p><br></p><p>This step comes after Scocic, who took over from Marc Wilmots in February 2020, led Iran to qualify for the World Cup by topping its group in the Asian qualifiers at the expense of South Korea.</p>', '2022-11-28', 'الاتحاد العراقي', 'union', 1, 0),
(157, 'مرتضى لقمان', 'مرتضى لقمان', '279', 'photo_2023-02-11_15-23-25.jpg', '<p><span style=\"background-color: rgb(0, 255, 0);\"><b>مرتضى لقمان&nbsp;مرتضى لقمان&nbsp;مرتضى لقمان&nbsp;مرتضى لقمان&nbsp;مرتضى لقمان&nbsp;مرتضى لقمان</b></span></p><p><b>مرتضى لقمان&nbsp;مرتضى لق</b>مان</p><p>مرتضى لقمانرمرتضى لقمان&nbsp;مرتضى لقمانمرتضى لقمانمرتضى لقمان</p><p>مرتضى لقمانمرتضى لقمانمرتضى لقمانمرتضى لقمانمرتضى لقمانمرتضى لقمان</p><p style=\"text-align: center; \"><b>مرتضى لقمانمرتضى لقمانمرتضى لقمانمرتضى لقمانمرتضى لقمانمرتضى لقمان</b><br></p>', '<p>يي</p>', '2023-02-13', 'ييي', 'يي', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(200) NOT NULL,
  `visit_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `ip_address`, `visit_date`) VALUES
(8, '::1', '2022-11-25 12:17:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catigories`
--
ALTER TABLE `catigories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `catigoryName` (`catigoryName`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `catigories`
--
ALTER TABLE `catigories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=288;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
