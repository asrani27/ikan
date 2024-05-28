/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 50739 (5.7.39)
 Source Host           : localhost:3306
 Source Schema         : ryan_ikan

 Target Server Type    : MySQL
 Target Server Version : 50739 (5.7.39)
 File Encoding         : 65001

 Date: 29/05/2024 06:34:14
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for ikan
-- ----------------------------
DROP TABLE IF EXISTS `ikan`;
CREATE TABLE `ikan` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `jenis` varchar(255) DEFAULT NULL,
  `keadaan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ikan
-- ----------------------------
BEGIN;
INSERT INTO `ikan` (`id`, `nama`, `harga`, `jenis`, `keadaan`) VALUES (1, 'aaaa', 12000, 'aknk', 'kna');
INSERT INTO `ikan` (`id`, `nama`, `harga`, `jenis`, `keadaan`) VALUES (2, 'fggh', 345, 'rdgf', 'fgh');
COMMIT;

-- ----------------------------
-- Table structure for pegawai
-- ----------------------------
DROP TABLE IF EXISTS `pegawai`;
CREATE TABLE `pegawai` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nip` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jkel` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `alamat` text,
  `telp` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pegawai
-- ----------------------------
BEGIN;
INSERT INTO `pegawai` (`id`, `nip`, `nama`, `jkel`, `jabatan`, `alamat`, `telp`) VALUES (1, '132425', 'erwr', 'L', 'rew1', 'qwer1', 'qwerewr1');
COMMIT;

-- ----------------------------
-- Table structure for pemasaran
-- ----------------------------
DROP TABLE IF EXISTS `pemasaran`;
CREATE TABLE `pemasaran` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `usaha` varchar(255) DEFAULT NULL,
  `alamat` text,
  `ikan_id` int(11) DEFAULT NULL,
  `tujuan` varchar(255) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pemasaran
-- ----------------------------
BEGIN;
INSERT INTO `pemasaran` (`id`, `tanggal`, `nama`, `usaha`, `alamat`, `ikan_id`, `tujuan`, `jumlah`) VALUES (1, '2024-05-29', 'andi', 'toko ikan', 'jl a', 1, 'dsf', 121);
COMMIT;

-- ----------------------------
-- Table structure for pengambilan
-- ----------------------------
DROP TABLE IF EXISTS `pengambilan`;
CREATE TABLE `pengambilan` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `produk` varchar(255) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pengambilan
-- ----------------------------
BEGIN;
INSERT INTO `pengambilan` (`id`, `tanggal`, `nama`, `alamat`, `produk`, `lokasi`, `jumlah`) VALUES (1, '2024-05-29', 'budi', 'jl kayu tangi', 'ikan i', 'lj s adam', 100);
COMMIT;

-- ----------------------------
-- Table structure for petani
-- ----------------------------
DROP TABLE IF EXISTS `petani`;
CREATE TABLE `petani` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nomor` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` text,
  `jkel` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `keterangan` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of petani
-- ----------------------------
BEGIN;
INSERT INTO `petani` (`id`, `nomor`, `nama`, `alamat`, `jkel`, `tanggal`, `keterangan`) VALUES (1, '234213', 'Agus', 'Jl pangeran antasari', 'L', '2024-05-07', 'sdf');
COMMIT;

-- ----------------------------
-- Table structure for role_users
-- ----------------------------
DROP TABLE IF EXISTS `role_users`;
CREATE TABLE `role_users` (
  `user_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  UNIQUE KEY `role_users_user_id_role_id_unique` (`user_id`,`role_id`) USING BTREE,
  KEY `role_users_role_id_foreign` (`role_id`) USING BTREE,
  CONSTRAINT `role_users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `role_users_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of role_users
-- ----------------------------
BEGIN;
INSERT INTO `role_users` (`user_id`, `role_id`) VALUES (1, 1);
INSERT INTO `role_users` (`user_id`, `role_id`) VALUES (2, 2);
COMMIT;

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of roles
-- ----------------------------
BEGIN;
INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES (1, 'superadmin', '2020-12-23 23:17:35', '2020-12-23 23:17:35');
INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES (2, 'pemohon', '2022-10-19 14:20:54', '2022-10-19 14:20:54');
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `password` varchar(255) NOT NULL,
  `password_superadmin` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `api_token` varchar(255) DEFAULT NULL,
  `last_session` varchar(255) DEFAULT NULL,
  `change_password` int(1) unsigned DEFAULT '0' COMMENT '0: belum, 1: sudah',
  `nama_kelompok` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `users_username_unique` (`username`) USING BTREE,
  UNIQUE KEY `users_email_unique` (`email`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `password_superadmin`, `remember_token`, `created_at`, `updated_at`, `api_token`, `last_session`, `change_password`, `nama_kelompok`) VALUES (1, 'ryan', NULL, 'ryan', '2024-05-28 17:44:53', '$2y$10$E9xG1OtIFvBRbHqlwHCC3u48vO5eBf2OQ9wFNpi.qKOAzVqNDUdW2', NULL, NULL, '2024-05-28 17:44:53', '2024-05-28 17:44:53', '$2y$10$tjMANlV25IUwvKuPxEODW.3qE3zPSKjwhmgTcZUgsPDZRGcpgGAN.', NULL, 0, NULL);
INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `password_superadmin`, `remember_token`, `created_at`, `updated_at`, `api_token`, `last_session`, `change_password`, `nama_kelompok`) VALUES (2, 'ds', NULL, 'budi', '2023-12-17 20:15:46', '$2y$10$cvYyM/XU5m.wh0aKfsifh.5Ptdi.fu1jVLn/2ZsyViZO8aLflSvkK', NULL, NULL, '2023-12-17 20:15:46', '2023-12-17 20:15:46', NULL, NULL, 0, 'a`sdf');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
