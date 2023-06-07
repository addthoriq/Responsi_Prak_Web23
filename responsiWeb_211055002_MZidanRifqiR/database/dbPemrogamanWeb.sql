-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for tugas_pemrogaman_web
CREATE DATABASE IF NOT EXISTS `tugas_pemrogaman_web` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `tugas_pemrogaman_web`;

-- Dumping structure for table tugas_pemrogaman_web.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tugas_pemrogaman_web.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table tugas_pemrogaman_web.kategori
CREATE TABLE IF NOT EXISTS `kategori` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumping data for table tugas_pemrogaman_web.kategori: ~4 rows (approximately)
REPLACE INTO `kategori` (`id`, `nama_kategori`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Aksesoris', '2021-12-13 02:14:00', '2023-05-24 18:13:33', '2023-05-24 18:13:33'),
	(2, 'Filsafat', '2023-05-30 12:14:15', NULL, NULL),
	(3, 'Psikolog', '2023-05-30 12:14:21', NULL, NULL),
	(4, 'Agamis', '2023-05-30 12:14:28', NULL, NULL);

-- Dumping structure for table tugas_pemrogaman_web.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tugas_pemrogaman_web.migrations: ~4 rows (approximately)
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- Dumping structure for table tugas_pemrogaman_web.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tugas_pemrogaman_web.password_resets: ~0 rows (approximately)

-- Dumping structure for table tugas_pemrogaman_web.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tugas_pemrogaman_web.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table tugas_pemrogaman_web.produk
CREATE TABLE IF NOT EXISTS `produk` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_kategori` int NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `nama_produk` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `harga_jual` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Dumping data for table tugas_pemrogaman_web.produk: ~4 rows (approximately)
REPLACE INTO `produk` (`id`, `id_kategori`, `gambar`, `nama_produk`, `deskripsi`, `harga_jual`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 1, 'produk_1685474271.jpg', 'Tuhan Maha Asyik', 'TUHAN Maha Asyik mencoba membahas banyak hal di seputar ketuhanan dengan santai. Awalnya, ada narasi. Anak-anak sekolahan berdialog; mempertanyakan banyak hal dari soal hubungan wayang dengan dalang, persepsi orang terhadap sesuatu, hubungan manusia dengan Tuhan dan alam, fungsi doa, pengetahuan, hingga soal bahasa.', 59000, '2023-05-30 12:17:51', '2023-05-30 12:19:27', NULL),
	(2, 2, 'produk_1685474349.jpg', 'RE', 'Novel Re ini menceritakan mengenai kerasnya kehidupan seorang pelacur. Dalam menjalankan kegiatannya Re dipimpin oleh seorang germo bernama Mami Lani. Pertemuan antara Re dan Herman terjadi begitu saja. Herman adalah mahasiswa jurusan Kriminologi tingkat akhir yang sedang menyelesaikan skripsi.', 127000, '2023-05-30 12:19:09', NULL, NULL),
	(3, 3, 'produk_1685474418.jpg', 'Dunia Shopie', 'Dunia sophie adalah sebuah novel filsafat. berkisah tentang seorang gadis berusia 14 tahun yang sebelumnya hidup dengan wajar seperti anak-anak seusianya, hingga suatu ketika ia dikirimi surat misterius berisi pertanyaan-pertanyaan filsafat.', 150000, '2023-05-30 12:20:18', NULL, NULL),
	(4, 4, 'produk_1685474462.jpg', 'Filosofi Teras', 'Stoisisme, atau filosofi teras, adalah filsafat Yunani-Romawi kuno yang bisa membantu kita mengatasi emosi negatif dan menghasilkan mental yang tangguh dalam menghadapi naik-turunnya kehidupan.', 100000, '2023-05-30 12:21:02', NULL, NULL);

-- Dumping structure for table tugas_pemrogaman_web.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tugas_pemrogaman_web.users: ~0 rows (approximately)
REPLACE INTO `users` (`id`, `name`, `email`, `phone`, `address`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Zidan Rifqi', 'admin@gmail.com', '6281298669897', 'Gg. Cemani No.759-P, RT.48/RW.04, Warungboto, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55161', NULL, '$2a$12$yRzQ/7CA5Z5okZk0mzezfOqiAgxAJneUtHsipQORaZvcv95L3P6M6', '4LdGWX4lTtqufyU7L6DMCctw6Fxa2dVnzNbNij7Yp5MSIjw69huJQn4aq2ZJ', '2021-12-13 00:13:32', '2022-01-25 04:52:49');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
