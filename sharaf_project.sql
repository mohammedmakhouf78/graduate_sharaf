-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2022 at 11:32 AM
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
-- Database: `sharaf_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `address` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `open` time NOT NULL,
  `close` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `address`, `phone`, `email`, `open`, `close`) VALUES
(20, 'مطعم', '01020115643', 'mohamed@sharaf.com', '14:22:00', '07:25:00');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `date` date NOT NULL,
  `people_number` varchar(250) NOT NULL,
  `time` time NOT NULL,
  `user_id` int(11) NOT NULL,
  `table_id` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`date`, `people_number`, `time`, `user_id`, `table_id`, `id`) VALUES
('2022-03-18', '4', '13:44:00', 106, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`) VALUES
(6, 'بيتزا مارجريتا.', 'categories701110.jpeg'),
(7, 'بيتزا النقانق.', 'categories937630.jpeg'),
(8, 'بيتزا ذات الحواف المحشية.', 'categories382493.jpeg'),
(9, 'بيتزا كرات اللحم.', 'categories47979.jpeg'),
(10, 'بيتزا البيبيروني.', 'categories877883.jpeg'),
(11, 'بيتزا ذات الحواف المحشية.', 'categories401421.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `chefs`
--

CREATE TABLE `chefs` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `image` text NOT NULL,
  `job` varchar(250) NOT NULL,
  `facebook` varchar(250) NOT NULL,
  `twitter` varchar(250) NOT NULL,
  `linked_in` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chefs`
--

INSERT INTO `chefs` (`id`, `name`, `image`, `job`, `facebook`, `twitter`, `linked_in`) VALUES
(5, 'علي القاضي', 'chef450318.jpeg', 'طباخ ', '', '', ''),
(6, 'عبد الله الحجازي', 'chef219429.jpeg', 'طباخ عالمي', '', '', ''),
(7, 'عبد الرحمن بسيوني', 'chef837483.jpeg', 'مساعد شيف', '', '', ''),
(8, 'خلود حماد', 'chef706548.jpeg', 'طباخ حلويات', '', '', ''),
(9, 'شيماء على', 'chef550680.jpeg', 'مساعده', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `message` varchar(250) NOT NULL,
  `name` text NOT NULL,
  `job` varchar(250) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `message`, `name`, `job`, `user_id`) VALUES
(7, 'الغذاء الصحي هو الطعام الذي يكون به فائدة للجسم وغير مضر ويجب علي الجميع اتباع نظام غذائي جيد ', 'عبد الله الحجازي', 'طباخ حلويات', 93),
(8, '<div style=\"text-align: center;\"><span style=\"background-color: rgba(0, 0, 0, 0.05); font-size: 1rem;\">الغذاء الصحي هو الطعام الذي يكون به فائدة للجسم وغير مضر ويجب علي الجميع اتباع نظام غذائي جيد</span></div>', 'محمد شرف', 'رجل اعمال', 88),
(9, '<div style=\"text-align: right;\"><span style=\"background-color: rgba(0, 0, 0, 0.05); text-align: center; font-size: 1rem;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &n', 'انجي ', 'مهندس', 103);

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gallary`
--

CREATE TABLE `gallary` (
  `id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallary`
--

INSERT INTO `gallary` (`id`, `image`, `title`) VALUES
(15, 'gallary950573.jpeg', 'مطعم يحكي جمال النكهات الهنديه و يعطي الشرح الكامل والوافي للمطبخ الهندي ، اجمل مطعم بالنسبه لي وأصبح الأفضل للعديد من الأصدقاء. قد لا أعطي هذا المطعم حقه في التعبير لانه يستحق الكثير من الإطراء والاحترام .. مطعم جذبني فاصبحت ارتاده أسبوعياً وخصيصاً'),
(17, 'gallary442723.jpeg', 'مطعم يحكي جمال النكهات الهنديه و يعطي الشرح الكامل والوافي للمطبخ الهندي ، اجمل مطعم بالنسبه لي وأصبح الأفضل للعديد من الأصدقاء. قد لا أعطي هذا المطعم حقه في التعبير لانه يستحق الكثير من الإطراء والاحترام .. مطعم جذبني فاصبحت ارتاده أسبوعياً وخصيصاً '),
(18, 'gallary542300.jpeg', 'طاقم العمل الصديق والمهذب الذي يجعلك في كامل الأريحية والدقه في أخذ الطلب وتنفيذه لدى الشيف الممتاز الذي يمتاز به المطعم'),
(19, 'gallary511108.jpeg', 'شريحة لحم البقر'),
(20, 'gallary419536.jpeg', 'كبسة'),
(21, 'gallary991685.jpeg', 'كبسة'),
(22, 'gallary797915.jpeg', 'كبسة'),
(23, 'gallary737247.jpeg', 'لحم');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `first_name`, `last_name`, `email`, `phone`, `message`) VALUES
(1, 'cvccvcvcv', 'cxvcvcx', 'mmmm876@gmail.com', '12343234543', 'jgkdfjkgjfkdgkldfjgkdfklgjfdjgkldfj'),
(2, 'gogo', 'hager', 'go@go.com', '88874373678', 'mohamed sharaf'),
(3, 'bbbbbbbbbbbbb', 'nbbbbbbbbbbbb', 'mshshshshsh97@gmail.com', '786876867876', 'bfdhfdhdfhfdh');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `date` date NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `image`, `date`, `title`, `description`) VALUES
(34, 'على القاضي', 'news182069.jpeg', '2022-03-18', 'كفر الشيخ ', '<div style=\"text-align: center;\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(68, 68, 68); font-family: \" open=\"\" sans\";=\"\" font-size:=\"\" 1rem;\"=\"\">مطعم كان يبيع شاورما لذيذة لكن نظراً للأزمة الإقتصادية التي حصلت بأستراليا توقف عن صنع الشاورما لمساعدتهم. ملحوظة: الهندي الدب يسوي أفضل جباتي.</span></div>'),
(35, 'مصطفى ياقوت', 'news124504.jpeg', '2022-03-12', 'سيدي سالم', '<div style=\"text-align: center;\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;; font-size: 1rem;\">مطعم كان يبيع شاورما لذيذة لكن نظراً للأزمة الإقتصادية التي حصلت بأستراليا توقف عن صنع الشاورما لمساعدتهم. ملحوظة: الهندي الدب يسوي أفضل جباتي.</span></div>'),
(36, 'انجي ', 'news942431.jpeg', '2022-03-25', 'المحلة الكبرى', '<div style=\"text-align: center;\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;; font-size: 1rem;\">مطعم كان يبيع شاورما لذيذة لكن نظراً للأزمة الإقتصادية التي حصلت بأستراليا توقف عن صنع الشاورما لمساعدتهم. ملحوظة: الهندي الدب يسوي أفضل جباتي.</span></div>');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `title` text NOT NULL,
  `description` varchar(200) NOT NULL,
  `discount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `title`, `description`, `discount`) VALUES
(9, 'sliders881790.jpeg', 'وصفات كب كيك', 'نصف كوب من كلٍ من: الحليب، والزبدة اللينة الكوب من السكر الناعم. ملعقة صغيرة من الفانيلا السائلة. كوبان ونصف من سكر البودرة. ملعقتان كبيرتان من الحليب. نصف كوب من الزبدة اللينة. نصف كوب من البندق المج', 50),
(10, 'sliders428212.jpeg', 'وصفات كب كيك', 'نصف كوب من كلٍ من: الحليب، والزبدة اللينة الكوب من السكر الناعم. ملعقة صغيرة من الفانيلا السائلة. كوبان ونصف من سكر البودرة. ملعقتان كبيرتان من الحليب. نصف كوب من الزبدة اللينة. نصف كوب من البندق المج', 20),
(11, 'sliders487852.jpeg', 'وصفات كب كيك', 'نصف كوب من كلٍ من: الحليب، والزبدة اللينة الكوب من السكر الناعم. ملعقة صغيرة من الفانيلا السائلة. كوبان ونصف من سكر البودرة. ملعقتان كبيرتان من الحليب. نصف كوب من الزبدة اللينة. نصف كوب من البندق المج', 60),
(12, 'sliders368801.jpeg', 'وصفات كب كيك', 'نصف كوب من كلٍ من: الحليب، والزبدة اللينة الكوب من السكر الناعم. ملعقة صغيرة من الفانيلا السائلة. كوبان ونصف من سكر البودرة. ملعقتان كبيرتان من الحليب. نصف كوب من الزبدة اللينة. نصف كوب من البندق المج', 103);

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `id` int(11) NOT NULL,
  `chairs` int(11) NOT NULL,
  `is_booked` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`id`, `chairs`, `is_booked`) VALUES
(1, 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `password`, `email`, `name`, `is_admin`) VALUES
(88, '$2y$10$ICHC55Dq1WvGZ5Ep8VVise8sfm7gC.7hgvrvAOyPadu5rNKBGAzaG', 'anosa@a.com', 'restuant1', 1),
(93, '$2y$10$cnUOc2S5bzA4Xb1wER5PBe7XBEtM.rlbuLv116/bq1klRDyB62kDy', 'ho@ho.com', 'restuant2', 1),
(103, '$2y$10$BvdxwuX1qhLSoersf1x4AeJJ8WOkCzf6JsqLvJebwzeKbYGpWpvjy', 'mshshshshsh97@gmail.com', 'restuant3', 1),
(104, '$2y$10$7fXKR.Vk10zFXsdHCNTcdOFj0iN1QHLh/0CHEqHVX.LuTMA.1VkNC', 'm@m.com', 'restuant4', 1),
(106, '$2y$10$VNIecPbv9S5DOqQ6eNZwB.rugamja3OBnB90rN4KMAxS5M9E71Ia.', 'r@r.com', 'restuant', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`,`email`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `table_id` (`table_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chefs`
--
ALTER TABLE `chefs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `gallary`
--
ALTER TABLE `gallary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`,`phone`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `chefs`
--
ALTER TABLE `chefs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gallary`
--
ALTER TABLE `gallary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `books_ibfk_2` FOREIGN KEY (`table_id`) REFERENCES `tables` (`id`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `food_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
