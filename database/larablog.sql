-- phpMyAdmin SQL Dump
-- version 4.0.10.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 03, 2018 at 09:26 AM
-- Server version: 5.1.73
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `larablog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `slug`, `created_at`, `updated_at`) VALUES
(4, 'Eat', '<p>Sample descriptions</p>', 'eat', '2018-06-08 04:00:00', '2018-06-22 15:24:00'),
(2, 'Shop', 'Shop description, and it has a bit long text.', 'shop', '2018-06-08 04:00:00', '2018-06-08 04:00:00'),
(3, 'Travel', 'Travel description with a pretty cool text.', 'travel', '2018-06-08 04:00:00', '2018-06-08 04:00:00'),
(1, 'Uncategorized', 'This is where all the uncategorized post go.', 'uncategorized', '2018-06-12 04:00:00', '2018-06-12 04:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_06_05_105031_create_posts_table', 1),
(4, '2018_06_05_105310_create_categories_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `slug` text COLLATE utf8_unicode_ci NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=252 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `category_id`, `slug`, `title`, `content`, `created_at`, `updated_at`) VALUES
(251, 3, 3, 'quisquam-omnis-sit-qui-', 'Qui quisquam quis ', 'Exercitationem quis repellendus consequatur eum vel quo inventore. Alias dolorem et nemo deleniti inventore. Sunt delectus quo qui magnam autem.', '2018-06-24 16:33:42', '2018-06-24 16:33:42'),
(250, 4, 4, 'dicta-eaque-enim-fuga-', 'Harum delectus tenetur aspernatur ', 'Eum officia recusandae ut reprehenderit. Qui tempore placeat aut commodi qui repudiandae impedit. Odit quos rem consequatur quo vel consectetur pariatur excepturi. Mollitia voluptas modi aperiam ea cupiditate. Quas molestiae sit ipsum laborum dolorem.', '2018-06-24 16:33:42', '2018-06-24 16:33:42'),
(247, 2, 2, 'quae-veritatis-ut-harum-quibusdam-dolore-', 'Omnis saepe harum ', 'Explicabo modi doloremque fugiat est et dignissimos consequuntur in. Et voluptatem voluptates veniam repellat sed repudiandae. Ut quam voluptas velit delectus sit quia.', '2018-06-24 16:33:42', '2018-06-24 16:33:42'),
(249, 4, 4, 'eum-soluta-reiciendis-similique-commodi-aut-necessitatibus-', 'Nisi quibusdam ', 'Animi eum explicabo facilis blanditiis eaque. Ipsum eius nesciunt incidunt ipsam molestias laborum alias hic.', '2018-06-24 16:33:42', '2018-06-24 16:33:42'),
(248, 1, 1, 'explicabo-unde-nihil-voluptate-', 'Adipisci facere sit expedita amet vero ut ', 'Sit voluptatem similique aut. Assumenda velit excepturi repudiandae rem velit. Minus similique voluptates quo dolores eligendi. Quia quis voluptatem quae esse dolores.', '2018-06-24 16:33:42', '2018-06-24 16:33:42'),
(245, 2, 2, 'in-adipisci-sunt-id-dolore-odio-', 'Sunt est perferendis assumenda provident ea ipsam ut ', 'Pariatur accusamus et qui quam dolorem enim culpa sed. Et consequuntur est praesentium voluptas porro dolorem officiis eius. Voluptatem asperiores aspernatur blanditiis praesentium.', '2018-06-24 16:33:42', '2018-06-24 16:33:42'),
(246, 1, 1, 'labore-sapiente-dignissimos-corporis-atque-sequi-non-non-odio-', 'Omnis aspernatur dolor ', 'Ipsa minus repellat totam aut. Quam recusandae unde aut. Corporis fugit et quis tempora iusto.', '2018-06-24 16:33:42', '2018-06-24 16:33:42'),
(244, 4, 4, 'et-ipsum-cum-consequatur-', 'Quo ut et optio quisquam ', 'Saepe occaecati debitis sunt ut sunt est fuga exercitationem. Dolorem consequatur et possimus earum vel. Delectus quia quia et placeat commodi at.', '2018-06-24 16:33:42', '2018-06-24 16:33:42'),
(242, 3, 3, 'cum-hic-eligendi-', 'Ut minus ', 'Dolorem ab accusantium et eum sunt quisquam totam. Autem eveniet non nisi commodi rerum culpa rem officiis. Quibusdam ad qui veritatis minima nihil nisi.', '2018-06-24 16:33:42', '2018-06-24 16:33:42'),
(169, 2, 2, '', 'Sint quod ', 'Quaerat ut totam ut quod est corrupti incidunt. Beatae illum et sed sed dignissimos. Voluptatem quia veritatis eaque cupiditate perferendis omnis.', '2018-06-05 15:35:06', '2018-06-05 15:35:06'),
(168, 2, 1, '', 'Repellat doloremque ipsam hic ', 'Tenetur adipisci a molestiae nisi qui autem sed ut. Nesciunt ducimus sit temporibus commodi. Qui minima consequatur aut quae. Facere iure aliquid qui cumque omnis.', '2018-06-05 15:35:06', '2018-06-05 15:35:06'),
(167, 4, 2, '', 'Libero asperiores perferendis et doloremque voluptatem cumque laboriosam ', 'Voluptas rerum beatae iusto provident nihil ab. Fugit molestias doloribus reiciendis aut ad. Corrupti porro id praesentium architecto impedit dignissimos. At soluta dolorem aspernatur a quaerat qui in.', '2018-06-05 15:35:06', '2018-06-05 15:35:06'),
(166, 1, 4, '', 'Voluptas maiores ut ', 'Sit consectetur ullam numquam. Qui adipisci qui mollitia explicabo doloremque optio sed. Nam vel et necessitatibus aperiam aut. Asperiores et voluptate temporibus facilis eum et. Laborum alias illo maiores architecto veritatis rerum dolores.', '2018-06-05 15:35:06', '2018-06-05 15:35:06'),
(165, 4, 1, '', 'Qui deserunt aspernatur ', 'Natus placeat maxime repudiandae similique illo aut numquam. Cupiditate perferendis illo aspernatur et. Et et pariatur quisquam maiores mollitia.', '2018-06-05 15:35:06', '2018-06-05 15:35:06'),
(164, 3, 1, '', 'Est dolorum laborum ', 'Odit id debitis sit voluptatum ut qui qui. Magni ut amet atque voluptas corrupti. Dicta fuga et veritatis saepe. Est expedita possimus et ipsum officia sint et.', '2018-06-05 15:35:06', '2018-06-05 15:35:06'),
(163, 3, 3, '', 'Delectus aut totam est at ', 'Ducimus impedit quasi corporis sequi delectus et ut. Tempora architecto occaecati error amet voluptatem laudantium. Voluptatem cupiditate qui maxime culpa et. Omnis dolorem doloremque in ipsa.', '2018-06-05 15:35:06', '2018-06-05 15:35:06'),
(162, 4, 3, '', 'Ut est repellat laudantium perspiciatis ', 'Saepe optio quam voluptas magni ipsa doloremque aperiam. Illo maiores totam consequatur esse voluptatem dolor eum. Est corporis iste veritatis est.', '2018-06-05 15:35:06', '2018-06-05 15:35:06'),
(161, 1, 4, '', 'Dolor voluptas minus ', 'Suscipit necessitatibus qui nobis voluptatem itaque. Qui temporibus quia optio ullam hic neque. Atque dicta est vero non. Exercitationem maxime aperiam sunt nihil delectus.', '2018-06-05 15:35:06', '2018-06-05 15:35:06'),
(160, 1, 1, '', 'Ullam reprehenderit distinctio enim quisquam sed non ', 'Laudantium id quae quo quae consectetur dignissimos. Labore voluptatem quis nemo recusandae temporibus recusandae rem. Omnis accusantium aut fugit nobis et ex illo. Tempora optio ipsam voluptas beatae officiis.', '2018-06-05 15:35:06', '2018-06-05 15:35:06'),
(159, 2, 2, '', 'Veritatis atque aperiam ', 'Quidem voluptatem tempore debitis quia accusantium dicta et. Inventore dolorem perspiciatis est quod voluptas nesciunt. Facilis dolorem omnis neque in voluptatem quas. Placeat repudiandae minus ad temporibus cum minima est.', '2018-06-05 15:35:06', '2018-06-05 15:35:06'),
(158, 5, 2, '', 'Ab unde voluptate ', 'Praesentium dignissimos perspiciatis deleniti omnis nihil velit eius. Alias rerum natus quos reiciendis. Alias et rem magnam vero iusto debitis sit impedit. Eaque in explicabo similique eos esse.', '2018-06-05 15:35:06', '2018-06-05 15:35:06'),
(157, 2, 4, '', 'Velit mollitia quia quo id ', 'Nihil dolorum saepe molestias sed. Cupiditate rem a adipisci accusamus. Dolorum est eligendi pariatur quod. Tempora consequatur perferendis sit recusandae aspernatur. Velit eveniet et quia culpa.', '2018-06-05 15:35:06', '2018-06-05 15:35:06'),
(156, 2, 1, '', 'Vero qui recusandae natus reprehenderit quia laborum ', 'Quia neque incidunt quia nam excepturi nemo aliquam. Voluptas eum et facere numquam sunt.', '2018-06-05 15:35:06', '2018-06-05 15:35:06'),
(155, 1, 2, '', 'Dolor ab ', 'Dolorem sapiente corporis quia aut a. Ex dolor aliquam autem qui aliquid qui ab ut. Doloribus ea aut distinctio qui.', '2018-06-05 15:35:06', '2018-06-05 15:35:06'),
(154, 3, 1, '', 'Beatae unde ullam ', 'Magnam blanditiis dolores reiciendis illum. Id ullam perspiciatis dolores. Quia alias voluptas veritatis sit magni ea saepe.', '2018-06-05 15:35:06', '2018-06-05 15:35:06'),
(153, 4, 3, '', 'Perspiciatis nihil architecto ', 'Commodi eligendi numquam ab nesciunt tempora. Earum qui aut quaerat nesciunt.', '2018-06-05 15:35:06', '2018-06-05 15:35:06'),
(152, 5, 2, '', 'Esse suscipit quis ex provident ut ', 'Esse ad voluptatem molestiae ut necessitatibus optio. Qui cum suscipit dolorem soluta quidem dolorem et. Quo ab voluptatibus et quia expedita suscipit. Et voluptatum et aut sed sed adipisci.', '2018-06-05 15:35:06', '2018-06-05 15:35:06'),
(151, 1, 1, '', 'Et aliquid ', 'Delectus veniam aliquid consequatur eius laborum quisquam. Sed ipsum quis nobis optio eos aperiam porro. Necessitatibus veniam enim nesciunt eos eum veniam exercitationem sunt.', '2018-06-05 15:35:06', '2018-06-05 15:35:06'),
(223, 3, 3, 'Quia fugit vero culpa consequatur voluptates soluta voluptas ', 'Sapiente eos voluptates ', 'Fugit ullam ut in alias. Ut laborum at ullam enim. Non sunt cumque velit fugiat voluptatem ad. Natus voluptas exercitationem excepturi qui necessitatibus nihil maiores.', '2018-06-24 16:29:53', '2018-06-24 16:29:53'),
(222, 4, 4, 'Qui saepe architecto natus numquam ', 'Dolore ab quos ', 'Est impedit impedit voluptates sed fuga cupiditate odit. Repellat enim quia veritatis rerum et. Qui alias aut quae esse architecto iusto. Non amet facere alias. Sunt est aut repellendus harum veritatis est deleniti.', '2018-06-24 16:29:53', '2018-06-24 16:29:53'),
(243, 1, 1, 'accusamus-quam-', 'Nulla in vel ', 'Aperiam sit vero nulla et possimus omnis eum est. Sed consequuntur architecto quia soluta. Omnis consequatur id sed vitae repellendus.', '2018-06-24 16:33:42', '2018-06-24 16:33:42'),
(233, 3, 3, 'Quaerat-Voluptatem-Quos-', 'Magni fugit rerum nisi fuga ', 'Non illo velit veniam excepturi ratione. Minus nemo quisquam dolores sit nulla voluptas perferendis. Dolorem rem vero et enim et perspiciatis voluptatem. Quos voluptas impedit repellat amet quam consequatur cupiditate.', '2018-06-24 16:31:44', '2018-06-24 16:31:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'john@example.com', 'test', 'test', '2018-06-08 04:00:00', '2018-06-08 04:00:00'),
(2, 'Mary Moe', 'mary@example.com', 'test', 'test', '2018-06-08 04:00:00', '2018-06-08 04:00:00'),
(3, 'test', 'test@gamil.com', '$2y$10$IMZZOL/QRhLdHMVmObXIV..NS02n0JyBe7ngtkzvmvoAXG2bMvVkm', '2kQiO1M43CQDq1qU5EA0qR6kjtxmCg6whUSDfL6l7jKylsa8TTgj5WYzUUsJ', '2018-07-02 13:37:45', '2018-07-02 13:37:45'),
(4, 'Arjay', 'arjay.otis@gmail.com', '$2y$10$RlWaPpBrBgBMmdMV7bs97utNQVIinzY./KyA0KVWRBqQhPFYvdeQ6', 'AEimuylsOfMHXx9nCtjuFWLX8zraOXqh5xYPw3kHPFwHYooOZS4ecybL605G', '2018-07-02 13:53:46', '2018-07-02 13:53:46'),
(5, 'Melchor', 'mel@test.com', '$2y$10$8bv9P6nTUTKLdnBTBeoyoOBy7Kj26Dn3cD8.QDtf.YEoCVyVHFMaS', 'VPU3urHH1h4cqw2tkgRUQ0EIezvtqnNDpov10EOT4xD8ULMe5rwdG4WoW5vk', '2018-07-02 16:45:24', '2018-07-02 16:45:24');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
