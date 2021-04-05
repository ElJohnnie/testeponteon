
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


-- Database: `testeponteon`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresarios`
--

DROP TABLE IF EXISTS `empresarios`;
CREATE TABLE IF NOT EXISTS `empresarios` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pai_id` bigint(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `empresarios_pai_id_foreign` (`pai_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `empresarios`
--

INSERT INTO `empresarios` (`id`, `nome`, `celular`, `estado`, `cidade`, `created_at`, `updated_at`, `pai_id`) VALUES
(1, '1', '(51) 98353-0072', 'RS', 'Paverama', '2021-04-05 16:12:39', '2021-04-05 16:12:39', NULL),
(2, '2', '(51) 98353-0071', 'PR', 'Apucarana', '2021-04-05 16:12:48', '2021-04-05 16:12:48', 1),
(3, '3', '(33) 33333-3333', 'RJ', 'Angra dos Reis', '2021-04-05 16:21:06', '2021-04-05 16:21:06', 1),
(4, '4', '(44) 54545-4545', 'PE', 'Abreu e Lima', '2021-04-05 16:22:51', '2021-04-05 16:22:51', 2),
(5, 'Jonatha Follmer', '(12) 31231-2312', 'PR', 'Abatiá', '2021-04-05 16:25:54', '2021-04-05 16:25:54', 2),
(6, '6', '(6', 'AM', 'Alvarães', '2021-04-05 16:26:07', '2021-04-05 16:26:07', 5),
(7, '7', '(78) 77878-7878', 'AC', 'Acrelândia', '2021-04-05 16:34:40', '2021-04-05 16:34:40', 1),
(8, '8', '(8', 'PE', 'Belém de Maria', '2021-04-05 16:34:50', '2021-04-05 16:34:50', 1),
(9, 'teste', '(14) 23123-1231', 'RJ', 'Angra dos Reis', '2021-04-05 16:35:13', '2021-04-05 16:35:13', 6),
(10, 'teste2', '(51) 98353-2131', 'AL', 'Água Branca', '2021-04-05 16:35:28', '2021-04-05 16:35:28', 9),
(11, 'Jonatha Follmer 5', '(11) 11111-1111', 'RS', 'Paverama', '2021-04-05 16:35:37', '2021-04-05 16:35:37', 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_01_172532_create_table_empresarios', 1),
(5, '2021_04_02_022538_create_table_pai', 1),
(6, '2021_04_04_001023_alter_table_empresarios', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pais`
--

DROP TABLE IF EXISTS `pais`;
CREATE TABLE IF NOT EXISTS `pais` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `pais`
--

INSERT INTO `pais` (`id`, `nome`, `created_at`, `updated_at`) VALUES
(1, '1', '2021-04-05 16:12:48', '2021-04-05 16:12:48'),
(2, '3', '2021-04-05 16:22:51', '2021-04-05 16:22:51'),
(5, 'Jonatha Follmer', '2021-04-05 16:26:07', '2021-04-05 16:26:07'),
(6, '8', '2021-04-05 16:35:13', '2021-04-05 16:35:13'),
(9, 'teste', '2021-04-05 16:35:28', '2021-04-05 16:35:28'),
(10, 'teste2', '2021-04-05 16:35:37', '2021-04-05 16:35:37');

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Panteon Teste', 'teste@ponteon.com', '2021-04-05 16:12:24', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'FoCLDkYXYUt0gb8RHgr7awnWv9WJFgX6QLU6W3uPonsQs58JSDJ2Wi3Wxrvh', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
