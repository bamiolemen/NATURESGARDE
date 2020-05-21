-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2020 at 10:39 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthgarde`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(8, 'HealthGarde', 'wellness', '2020-05-01 14:11:24', '2020-05-03 15:34:50'),
(9, 'SwissGarde', 'specialty', '2020-05-01 14:11:47', '2020-05-03 15:35:00');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `lname`, `email`, `phone_number`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Best', 'olumese', 'bestolumese@gmail.com', NULL, 'ddd', 'dddd', '2020-05-03 12:24:39', '2020-05-03 12:24:39');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(17, '2014_10_12_000000_create_users_table', 1),
(18, '2014_10_12_100000_create_password_resets_table', 1),
(19, '2020_04_27_020947_create_categories_table', 1),
(20, '2020_04_27_030809_create_products_table', 1),
(21, '2020_05_01_181541_add_limit_table', 2),
(22, '2020_05_01_213327_create_contacts_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `price` bigint(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `featured` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `limit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `slug`, `content`, `price`, `quantity`, `category_id`, `featured`, `user_id`, `created_at`, `updated_at`, `limit`) VALUES
(3, 'Aloe Vera', 'aloe-vera', 'This potent nutrient-rich supplement containing aloe vera, Vitamin C, Ginseng, Green Tea, and Sunderland (a traditional African herb called cancer bush), is a powerful wellness booster. It helps to improve the general health of the body, supports the digestive system, promotes a healthy immune system, thereby protecting against illness. Turmeric contains bioactive compounds with strong medicinal properties. It is a strong natural anti-inflammatory compound that can dramatically increase the antioxidant capacity of the body.', 9500, 10, 8, 'uploads/products/1588317216aloe_vite.jpg', 1, '2020-05-01 14:13:36', '2020-05-01 14:13:36', 9),
(4, 'Omega Plus', 'omega-plus', 'A special blend of Omega 3, 6, and 9 essential oils combined with anti-oxidant rich garlic oil to support cell health and therefore overall body well being. These fatty acids promote the health of the heart, brain, vascular system, skeleton, and eyes. Ideal for pregnant women to support fetal eyes and brain development. It can assist in managing healthy cholesterol levels.', 8000, 8, 8, 'uploads/products/1588317287omega_plus.jpg', 1, '2020-05-01 14:14:47', '2020-05-01 14:15:21', NULL),
(5, 'Pro-B', 'pro-b', 'A healthy gut ensures optimal absorption of all nutrients, including supplementation. This daily health probiotic formula containing 4 strains of probiotic flora that promotes gut health. 70% of the body’s immune cells reside in the gut and gut health is key for these cells to operate optimally.', 8500, 9, 8, 'uploads/products/1588317367pro_b.jpg', 1, '2020-05-01 14:16:07', '2020-05-01 14:16:07', NULL),
(6, '40 Plus for Women', '40-plus-for-women', 'Isoflavones from soya beans have been used in traditional Eastern medicine for 500+ years and has been reported to provide a number of health benefits. These include the promotion of heart health and the maintenance of bone health in post-menopausal women, as well as help to alleviate menopause symptoms.', 7200, 7, 8, 'uploads/products/1588317807HGI_07_40_plus_woman.jpg', 1, '2020-05-01 14:23:27', '2020-05-03 15:36:36', NULL),
(7, 'Defender', 'defender', 'This anti-oxidant rich formulation of selected Vitamins, Minerals, Bioflavonoids, Grape seeds Extract and Selenium helps to boost the body’s natural immune system, especially in times of chronic stress.', 7200, 7, 8, 'uploads/products/1588317934defender.jpg', 1, '2020-05-01 14:25:34', '2020-05-03 15:36:28', NULL),
(8, 'Stress Garde', 'stress-garde', 'B-complex vitamins can help to reduce fatigue, boost your mood and promote cognitive performance. Vitamin C helps to reduce stress because it allows the body to quickly clear out cortisol, a primary stress hormone that increases sugars in the bloodstream. Vitamin C helps to regulate cortisol and prevent blood pressure from spiking in response to stressful situations. Vitamin C and E are strong anti-oxidants that neutralize free radicals in the body that damage cells and stress and anxiety produce more free radicals.', 8000, 8, 8, 'uploads/products/1588318009HGI_18_stress_garde.jpg', 1, '2020-05-01 14:26:49', '2020-05-03 15:36:52', NULL),
(9, 'African P Plus Moringa', 'african-p-plus-moringa', 'African P plus Moringa is a natural blend of African Potato, a medical plant that contains Sterols and Sterolins, combined with the nutritious Moringa Oleifera that is rich in antioxidants and bioactive plant compounds.', 8000, 8, 8, 'uploads/products/1588318050african_p.jpg', 1, '2020-05-01 14:27:30', '2020-05-03 15:37:09', NULL),
(10, 'Eyegarde', 'eyegarde', 'Support your eye health with anti-oxidant rich Goji Berry combined with Lutein, Zeaxanthin, and Beta-Carotene. This soothing formula contains nutrients that help to protect, maintain, and improve blood circulation to the eyes. It can be especially beneficial for aging eyes, continuous eye strain, and dry eyes.', 7200, 7, 8, 'uploads/products/1588318487HGI_11_eye_garde.jpg', 1, '2020-05-01 14:34:47', '2020-05-03 15:37:20', NULL),
(11, 'CalMag Plus', 'calmag-plus', 'This mineral-rich formulation combines the bone health power of Calcium, Magnesium with Vitamin C, D3 and Zinc.', 8000, 8, 8, 'uploads/products/1588318520calmag.jpg', 1, '2020-05-01 14:35:20', '2020-05-03 15:37:29', NULL),
(12, 'Memory Garde', 'memory-garde', 'This unique blend combines the benefits of Choline and other minerals to support brain function and can help boost enhanced memory and concentration.', 8500, 8, 8, 'uploads/products/1588318762memory_garde.jpg', 1, '2020-05-01 14:39:22', '2020-05-03 15:37:43', NULL),
(13, 'Seavital', 'seavital', 'Kelp is an excellent source of marine iodine, potassium, magnesium, iron, and calcium that helps many-body systems to function normally and promote overall wellbeing. Iodine helps promote the normal function of the thyroid, which plays a key role in regulating body metabolism and energy production. Guarana naturally stimulates the central nervous system, which may increase alertness and boost energy levels.', 8500, 8, 8, 'uploads/products/1588318805sea_vital.jpg', 1, '2020-05-01 14:40:05', '2020-05-03 15:37:52', NULL),
(14, 'DiaGarde', 'diagarde', 'DiaGarde is a specially formulated nutritional supplement to benefit people that struggle with raised blood sugar levels, such as in the case of Diabetes. Cinnamon with Red Leaf Vine extracts helps to stabilize blood sugar levels, thereby lowering the risk of cell damage that can be caused by consistently high blood sugar levels.', 7200, 7, 8, 'uploads/products/1588318860dia_garde copy.jpg', 1, '2020-05-01 14:41:00', '2020-05-03 15:38:01', NULL),
(15, 'A & R Garde', 'a-r-garde', 'This potent herbal formula contains bio-rich ingredients such as Glucosamine, Chrondroitin, and MSM in combination with special bone health Vitamins and Minerals. The formulation promotes healthy cartilage to improve cushioning in joints. The anti-inflammatory properties can assist with cartilage repair and pain relief in joints.', 9000, 9, 8, 'uploads/products/1588318896a&r_garde.jpg', 1, '2020-05-01 14:41:36', '2020-05-03 15:38:16', NULL),
(16, 'Hair, Skin & Nails', 'hair-skin-nails', 'An anti-oxidant rich formula prived strong nutritions that benefit skin, hair, and nail health. The ingredients help to firm and increase skin elasticity, fight dullness, and uneven texture. The phytoestrogens in soybean helps to fight signs of aging and vitamin E that can help to renew dead skin cells and also form new skin cells.', 8000, 8, 8, 'uploads/products/1588318939HGI_14_hair_skin_nails.jpg', 1, '2020-05-01 14:42:19', '2020-05-03 15:38:32', NULL),
(17, 'Kardiogarde', 'kardiogarde', 'Optimize and support the health of your heart with this specially formulated product packed with an array of heart healthy nutrients. In addition to regular exercise, a healthy diet, and stress management, this product may help maintain normal cholesterol and blood pressure levels. It may also support healthy blood circulation thereby assisting in heart health.', 8500, 8, 8, 'uploads/products/1588318982kardio_garde.jpg', 1, '2020-05-01 14:43:02', '2020-05-03 15:38:44', NULL),
(18, '40 Plus for Men', '40-plus-for-men', 'This complex multi-vitamin and mineral supplement provides essential minerals and vitamins to help cellular health, which boost over all vitality and health, especially for men over the age of 40. It contains a combination of botanical ingredients such as Saw Palmetto to promote male vitality. It may support prostate and urinary tract health and could be beneficial for men who suffer from prostate problems.', 7200, 7, 8, 'uploads/products/158831902040_plus_men.jpg', 1, '2020-05-01 14:43:40', '2020-05-03 15:36:07', NULL),
(19, 'Super Cider Plus', 'super-cider-plus', 'A special herbal blend that can help stabilize body ph, thereby promoting the immune system. This formula can help to boost fat metabolism and aid with weight management when combined with a healthy eating plan and lifestyle. Apple Cider Vinegar and Green Tea can promote stable blood sugar levels.', 7200, 7, 8, 'uploads/products/1588319095HGI_25_slimgarde_super_cider.jpg', 1, '2020-05-01 14:44:55', '2020-05-03 15:36:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Best', 'bestolumese@gmail.com', '$2y$10$Y4zLAfHXArss1o9Gow7mVuJOcELHozAhEOc0lQA8A931.RYUAy..a', 0, NULL, '2020-05-01 13:26:12', '2020-05-01 13:26:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
