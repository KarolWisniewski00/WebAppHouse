-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 15 Paź 2023, 23:37
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `apart`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `flats`
--

CREATE TABLE `flats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `segment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surface` double(8,2) NOT NULL,
  `price_surface` double(8,2) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `file_pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_priv` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `flats`
--

INSERT INTO `flats` (`id`, `segment`, `flat`, `surface`, `price_surface`, `status`, `price`, `file_pdf`, `file_priv`, `created_at`, `updated_at`) VALUES
(1, 'floor-1', 'room-2', 46.00, 7700.00, 'avaiable', 354200.00, 'pdfs/vzIEDm1vqIxeUQqx9DtmGBymnzBrObrI9T7sjo8c.pdf', NULL, '2023-10-13 14:37:22', '2023-10-13 14:37:22'),
(2, 'floor-1', 'room-1', 31.30, 7700.00, 'avaiable', 241010.00, 'pdfs/EwU0nbQPr5DdpIv9xMoiy4SWW1YjWS1EPKkkZVHD.pdf', NULL, '2023-10-13 14:38:51', '2023-10-13 14:38:51'),
(3, 'floor-1', 'room-2', 49.30, 7700.00, 'avaiable', 37961.00, 'pdfs/dphBguXQ4gKstxBaLDoUTz64kKOc6xb2er58UpNM.pdf', NULL, '2023-10-13 14:39:57', '2023-10-13 15:19:56'),
(4, 'floor-1', 'room-2', 46.00, 7700.00, 'avaiable', 354200.00, 'pdfs/qp78I3CsjwV1n9WYOYRi3ROGtXj3ga57uRAtse4h.pdf', NULL, '2023-10-13 14:40:46', '2023-10-13 14:40:46'),
(5, 'floor-1', 'room-1', 31.40, 7700.00, 'avaiable', 241780.00, 'pdfs/4OJextf72TfcrOn1IcDibHYCuknAHI7mnBBudN2H.pdf', NULL, '2023-10-13 14:41:42', '2023-10-13 14:41:42'),
(6, 'floor-1', 'room-2', 39.30, 7700.00, 'avaiable', 302610.00, 'pdfs/eM0gD8xXplzlRIxCq3pAVeFB4sHqUmi5RfyytCX7.pdf', NULL, '2023-10-13 14:42:29', '2023-10-13 14:42:29'),
(7, 'floor-1', 'room-2', 39.30, 7700.00, 'avaiable', 302610.00, 'pdfs/XO0Dhei7XnsF1RLf54qInlXUL7SVsyT09C1tGTzY.pdf', NULL, '2023-10-13 14:43:17', '2023-10-13 14:43:17'),
(8, 'floor-1', 'room-2', 48.10, 7700.00, 'avaiable', 370370.00, 'pdfs/6Tu1n53pT2K9WO8w7xJW0mzjuQMq6zHFoTMmHIBB.pdf', NULL, '2023-10-13 14:44:08', '2023-10-13 14:44:08'),
(9, 'floor-1', 'room-4', 73.50, 7700.00, 'avaiable', 565950.00, 'pdfs/JiY5RyLqdUIm9D0bPOypvXP0VHndlcycGHSgSDK2.pdf', NULL, '2023-10-13 14:45:15', '2023-10-13 14:45:15'),
(10, 'floor-1', 'room-2', 48.20, 7700.00, 'avaiable', 371140.00, 'pdfs/k0p2v3EvB48xl5mYiSc1gVw3NgkarNtKofwFwtLu.pdf', NULL, '2023-10-13 14:46:00', '2023-10-13 14:46:00'),
(11, 'floor-1', 'room-4', 73.90, 7700.00, 'avaiable', 569030.00, 'pdfs/yeu7MVRGrfaCAPHzOVXhA8isrTwPuYip7UD6ZelY.pdf', NULL, '2023-10-13 14:46:50', '2023-10-13 14:46:50'),
(12, 'floor-2', 'room-2', 39.30, 7700.00, 'avaiable', 302610.00, 'pdfs/iNNTdVnrNpqeIYcJhGhfm5BThGZYMNcp111wTRHu.pdf', NULL, '2023-10-13 15:05:22', '2023-10-13 15:05:22'),
(13, 'floor-2', 'room-2', 46.00, 7700.00, 'avaiable', 354200.00, 'pdfs/jJZTmzRt4Cq6tjar7HGQgtEI7Kb4JKVFG2iccfOw.pdf', NULL, '2023-10-13 15:06:17', '2023-10-13 15:06:17'),
(14, 'floor-2', 'room-1', 31.30, 7700.00, 'avaiable', 241010.00, 'pdfs/iUC6zucZvzSFDOApjXT1MMSU2KTXSzoOvaDsCV31.pdf', NULL, '2023-10-13 15:07:32', '2023-10-13 15:07:32'),
(15, 'floor-2', 'room-2', 49.30, 7700.00, 'avaiable', 379610.00, 'pdfs/vw2Ad9knhTRz5JyubJ87rGulUIs2dbB1zMV0YS3O.pdf', NULL, '2023-10-13 15:08:36', '2023-10-13 15:08:36'),
(16, 'floor-2', 'room-2', 46.00, 7700.00, 'avaiable', 354200.00, 'pdfs/YWit1jEkIgpurTUr26KeW9wzI75LzbFe2JxFeyMq.pdf', NULL, '2023-10-13 15:09:25', '2023-10-13 15:09:25'),
(17, 'floor-2', 'room-1', 31.40, 7700.00, 'avaiable', 241780.00, 'pdfs/ZdKm0XrJrYZpcCZ1mCPoOTZDxkgu65JIbflnidUF.pdf', NULL, '2023-10-13 15:10:55', '2023-10-13 15:10:55'),
(18, 'floor-2', 'room-2', 39.30, 7700.00, 'avaiable', 302610.00, 'pdfs/Nh94WbF5tpoTuvqUFRUwMqp8s7mVbGy5nPvcRDww.pdf', NULL, '2023-10-13 15:11:59', '2023-10-13 15:11:59'),
(19, 'floor-2', 'room-2', 39.30, 7700.00, 'avaiable', 302610.00, 'pdfs/AeeICUkSa1piR0rUgV60Y1yRPljP4DkF1tA1Y6AI.pdf', NULL, '2023-10-13 15:12:46', '2023-10-13 15:12:46'),
(20, 'floor-2', 'room-2', 48.10, 7700.00, 'avaiable', 370370.00, 'pdfs/YAU6RWYDakbvetNzczE0lQVhWR1b5tLFBVu5D1cc.pdf', NULL, '2023-10-13 15:13:42', '2023-10-13 15:13:42'),
(21, 'floor-2', 'room-4', 73.50, 7700.00, 'avaiable', 565950.00, 'pdfs/uoTHmcNFJGiZupqIEsX35vcZ2KmyTkd1V5TaEmS0.pdf', NULL, '2023-10-13 15:14:53', '2023-10-13 15:14:53'),
(22, 'floor-2', 'room-2', 48.20, 7700.00, 'avaiable', 371140.00, 'pdfs/XDpKQsXCMTKGtDyZZSF92t3oPYnVGReYFuRD9sms.pdf', NULL, '2023-10-13 15:15:40', '2023-10-13 15:15:40'),
(23, 'floor-2', 'room-4', 73.90, 7700.00, 'avaiable', 569030.00, 'pdfs/ElQ8D4fv4X7TolCShFlX95ke9AvRkGm3LxAXC2le.pdf', NULL, '2023-10-13 15:16:20', '2023-10-13 15:16:20');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `floors`
--

CREATE TABLE `floors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file_pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `floors`
--

INSERT INTO `floors` (`id`, `file_pdf`, `created_at`, `updated_at`) VALUES
(1, 'pdfs/b6KBIYId780nDAOdNxhglrv08uBm1pADTZm9HvsK.jpg', '2023-09-03 18:21:10', '2023-10-13 14:31:58'),
(2, 'pdfs/RLOAqPFwprGnwOI60tAjlK6FZTuqPUBPBa76Y8HG.jpg', '2023-09-03 18:21:10', '2023-10-13 14:32:15'),
(3, 'pdfs/t5ekPIBgc59HbV5MOLyZzmiqZQcamV764bLx08Q2.jpg', '2023-09-03 18:21:10', '2023-10-13 14:32:29'),
(4, 'pdfs/OHUoWIQoIQGTjmCwSzDPBC1SE2eDSpFJZE79yXqu.jpg', '2023-09-03 18:21:10', '2023-10-13 14:32:38');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(11, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(12, '2019_08_19_000000_create_failed_jobs_table', 1),
(13, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(14, '2023_09_01_133142_create_sessions_table', 1),
(15, '2023_09_01_142001_create_flats_table', 1),
(17, '2023_09_03_153654_create_floors_table', 2),
(18, '2023_09_02_090339_create_settings_table', 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('CU3KOWEKQt4ia73XHhphv54NyLDUnstxj2DevRlf', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoieW5RVEVKOE91QUVVb2cyd2wzQTlSZ2V0T1d2UGo2ZUtzSlJYWW9odSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly9sb2NhbGhvc3QvYXBhcnQxL3B1YmxpYy9pbnZlc3QiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJEFTOU9MamJ1Z0lNLnlISW9HTUVCZy5xdkRLRnBJdURnTi9VZ3lDbkdTYnA5cXBBMmR4aTQuIjt9', 1697400707),
('EYs1YBrFLYGnaIsQdtKr1n6nbsWdUIHoFpJ08hnr', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWnpFY1pONWc4dU12RERQM3I0QXRIbjBNejVxd2RKdFI4T1JITUJYTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly9sb2NhbGhvc3QvYXBhcnQxL3B1YmxpYyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6NDA6Imh0dHA6Ly9sb2NhbGhvc3QvYXBhcnQxL3B1YmxpYy9kYXNoYm9hcmQiO319', 1697400688),
('LsUc9vJzZLIzVg80QPJNLA11Qw1sOIOzH7add9Kq', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiVFZjY3R4QTNickRIZ1lJUnR3YjBhQXhNTEI0UktGTEhJa01YWEQ1dCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly9sb2NhbGhvc3QvYXBhcnQxL3B1YmxpYy9jb250YWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRBUzlPTGpidWdJTS55SElvR01FQmcucXZES0ZwSXVEZ04vVWd5Q25HU2JwOXFwQTJkeGk0LiI7fQ==', 1697405738),
('rqWLp4xyxEhHO9MDI6tTFDa5XkgS3qSM62F6908D', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTmVIdjZyNFN6Uzd6T0x6UEttZTZoUjdWWE9FYmV6QlhoQnBzaTJLSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHA6Ly9sb2NhbGhvc3QvYXBhcnQxL3B1YmxpYy9pbnZlc3Qvc2hvdy82MCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1697401532),
('yJBqjwyRsTMkS4NASfBqjn1lQvWO4ZX086PdYIa7', 1, '::1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiRUJ1ZklWZkVvclpDQlFMdktTcHpIUjZaQUVTTktOSElKY1N2Z0pWOSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly9sb2NhbGhvc3QvYXBhcnQxL3B1YmxpYy9pbnZlc3QiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJEFTOU9MamJ1Z0lNLnlISW9HTUVCZy5xdkRLRnBJdURnTi9VZ3lDbkdTYnA5cXBBMmR4aTQuIjt9', 1697397218);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `settings`
--

INSERT INTO `settings` (`id`, `place`, `type`, `content`, `created_at`, `updated_at`) VALUES
(1, 'logo_w_pasku_nawigacyjnym', 'photo', 'logo.png', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(2, 'pin', 'pin', '2505', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(3, 'facebook_link_w_pasku_nawigacyjnym', 'text', 'https://www.facebook.com/people/Nowe-Inspiracje/100063527142284/', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(4, 'instagram_link_w_pasku_nawigacyjnym', 'text', '', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(5, 'zdjecie_1_karuzela_1_na_stronie_glownej', 'photo', '169736303951.jpg', '2023-09-08 17:30:17', '2023-10-15 09:43:59'),
(6, 'alt_zdjecie_1_karuzela_1_na_stronie_glownej', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(7, 'naglowek_1_karuzela_1_na_stronie_glownej', 'text', 'OSIEDLE LUXUR RESIDENCE', '2023-09-08 17:30:17', '2023-10-13 13:14:01'),
(8, 'paragraf_1_karuzela_1_na_stronie_glownej', 'text', 'THE FUTURE OF LUXORY', '2023-09-08 17:30:17', '2023-10-13 13:15:12'),
(9, 'przycisk_1_karuzela_1_na_stronie_glownej', 'text', 'Przycisk przykład', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(10, 'link_1_karuzela_1_na_stronie_glownej', 'text', '', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(11, 'zdjecie_2_karuzela_1_na_stronie_glownej', 'photo', '169736307352.jpg', '2023-09-08 17:30:17', '2023-10-15 09:44:33'),
(12, 'alt_zdjecie_2_karuzela_1_na_stronie_glownej', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(13, 'naglowek_2_karuzela_1_na_stronie_glownej', 'text', 'OSIEDLE LUXUR RESIDENCE', '2023-09-08 17:30:17', '2023-10-13 13:16:22'),
(14, 'paragraf_2_karuzela_1_na_stronie_glownej', 'text', 'NOWOCZESNE BUDOWNICTWO', '2023-09-08 17:30:17', '2023-10-13 13:16:53'),
(15, 'przycisk_2_karuzela_1_na_stronie_glownej', 'text', 'Inny przycisk', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(16, 'link_2_karuzela_1_na_stronie_glownej', 'text', '', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(17, 'zdjecie_3_karuzela_1_na_stronie_glownej', 'photo', '169736309134.jpg', '2023-09-08 17:30:17', '2023-10-15 09:44:51'),
(18, 'alt_zdjecie_3_karuzela_1_na_stronie_glownej', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(19, 'naglowek_3_karuzela_1_na_stronie_glownej', 'text', 'OSIEDLE LUXUR RESIDENCE', '2023-09-08 17:30:17', '2023-10-13 13:16:34'),
(20, 'paragraf_3_karuzela_1_na_stronie_glownej', 'text', 'INNOWACYJNE ROZWIĄZANIA', '2023-09-08 17:30:17', '2023-10-13 13:17:41'),
(21, 'przycisk_3_karuzela_1_na_stronie_glownej', 'text', 'Ostatni przycisk', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(22, 'link_3_karuzela_1_na_stronie_glownej', 'text', '', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(23, 'naglowek_ciemny_sekcji_1_na_stronie_glownej', 'text', 'Osiedle Luxor Residence', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(24, 'naglowek_jasny_sekcji_1_na_stronie_glownej', 'text', 'pewna inwestycja na przyszłość', '2023-09-08 17:30:17', '2023-09-21 09:29:04'),
(25, 'paragraf_sekcji_1_na_stronie_glownej', 'text', 'Osiedle Luxor Residence to najlepsze apartamenty na rynku pierwotnym w Piekarach Śląskich. Wysoki standard i lokalizacja blisko centrum miasta wraz z jego bogatą ofertą kulturalną, oświatową, handlową i gastronomiczną to bezsprzeczny plus tych nieruchomości. Wartym podkreślenia jest łatwy i szybki dostęp do przestrzeni rekreacyjnych – okolica bogata jest w trasy biegowe, parki, ścieżki rowerowe oraz infrastrukturę do uprawiania sportów wodnych. Pomimo niedalekiej odległości od centrum Piekar Śląskich osiedle ulokowano w cichej i spokojnej okolicy wolnej od dużego ruchu i tłumów. Idealna lokalizacja i wysoki standard nieruchomości sprawiają, że Luxor Residence to najlepsza i najbardziej przyszłościowa inwestycja w Piekarach Śląskich.', '2023-09-08 17:30:17', '2023-09-21 09:30:16'),
(26, 'ikona_po_lewej_sekcji_1_na_stronie_glownej', 'text', '<i class=\"fa-solid fa-map-location-dot p-2\"></i>', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(27, 'naglowek_ikony_po_lewej_sekcji_1_na_stronie_glownej', 'text', 'wygoda', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(28, 'paragraf_ikony_po_lewej_sekcji_1_na_stronie_glownej', 'text', 'Idealna lokalizacja to taka, która daje szybki i wygodny dostęp do bogatej oferty miasta i jego okolic. Liczne obiekty handlowo-usługowe, dostępność komunikacji miejskiej, bogata oferta kulturalno-oświatowa, bliska lokalizacja placówek medycznych i urzędów w połączeniu z cichą i spokojną okolicą oraz dostępem do terenów rekreacyjnych w znacznym stopniu wpływają na wygodę i komfort przyszłych mieszkańców Luxor Residence.', '2023-09-08 17:30:17', '2023-09-21 09:31:04'),
(29, 'ikona_po_prawej_sekcji_1_na_stronie_glownej', 'text', '<i class=\"fa-brands fa-pagelines p-2\"></i>', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(30, 'naglowek_ikony_po_prawej_sekcji_1_na_stronie_glownej', 'text', 'relaks', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(31, 'paragraf_ikony_po_prawej_sekcji_1_na_stronie_glownej', 'text', 'Apartamenty Luxor Residence położone są w bliskim sąsiedztwie licznych terenów rekreacyjnych. Parki, trasy biegowe, ścieżki rowerowe oraz zaplecze do uprawiania sportów wodnych (zbiorniki; Chechło-Nakło, Rogoźnik, Kozłowa Góra) jest na wyciągnięcie ręki, co sprawia, że przez cały rok można aktywnie korzystać z życia i dbać o swoje zdrowie.', '2023-09-08 17:30:17', '2023-09-21 09:31:24'),
(32, 'zdjecie_sekcji_1_na_stronie_glownej', 'photo', '169720312169.jpg', '2023-09-08 17:30:17', '2023-10-13 13:18:41'),
(33, 'alt_zdjecie_sekcji_1_na_stronie_glownej', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(34, 'zdjecie_sekcji_2_na_stronie_glownej', 'photo', '169720327248.jpg', '2023-09-08 17:30:17', '2023-10-13 13:21:12'),
(35, 'alt_zdjecie_sekcji_2_na_stronie_glownej', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(36, 'ikona_1_sekcji_2_na_stronie_glownej', 'text', '<i class=\"fa-solid fa-bell-slash p-2\"></i>', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(37, 'naglowek_ikony_1_sekcji_2_na_stronie_glownej', 'text', 'cisza', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(38, 'paragraf_ikony_1_sekcji_2_na_stronie_glownej', 'text', 'Wszyscy jesteśmy spragnieni ciszy. Oczekujemy jej zwłaszcza w miejscu zamieszkania. Dom ma być oazą, do której wracamy, by odpocząć i spędzić czas z bliskimi. Jednocześnie szukając ciszy, nie chcemy rezygnować z wygody i możliwości, jakie oferuje miasto i okoliczne tereny zielone. Luxor Residence to miejsce, które stanowi idealne połączenie obu tych aspektów.', '2023-09-08 17:30:17', '2023-09-21 09:33:32'),
(39, 'ikona_2_sekcji_2_na_stronie_glownej', 'text', '<i class=\"fa-solid fa-shield-halved p-2\"></i>', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(40, 'naglowek_ikony_2_sekcji_2_na_stronie_glownej', 'text', 'bezpieczeństwo', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(41, 'paragraf_ikony_2_sekcji_2_na_stronie_glownej', 'text', 'Plusem życia na przedmieściach jest ograniczony ruch, a co za tym idzie – większe bezpieczeństwo. Wysoki standard inwestycji Luxor Residence to także nacisk na jakość budowy, wykończenia oraz zabezpieczenia przeciwpożarowego.', '2023-09-08 17:30:17', '2023-09-21 09:33:40'),
(42, 'ikona_3_sekcji_2_na_stronie_glownej', 'text', '<i class=\"fa-solid fa-key p-2\"></i>', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(43, 'naglowek_ikony_3_sekcji_2_na_stronie_glownej', 'text', 'Inwestuj w wynajem', '2023-09-08 17:30:17', '2023-09-21 09:35:10'),
(44, 'paragraf_ikony_3_sekcji_2_na_stronie_glownej', 'text', 'Zmienna sytuacja gospodarcza powoduje, że na rynku rośnie grupa osób, które z różnych powodów wybierają najem zamiast zakupu na własność. Oznacza to, że inwestycja wolnych środków i działalność na rynku wynajmu jest doskonałą lokatą kapitału, która daje dużą stopę zwrotu oraz najlepiej chroni zainwestowane środki przed zgubnym wpływem inflacji.', '2023-09-08 17:30:17', '2023-09-21 09:35:19'),
(45, 'ikona_4_sekcji_2_na_stronie_glownej', 'text', '<i class=\"fa-solid fa-layer-group p-2\"></i>', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(46, 'naglowek_ikony_4_sekcji_2_na_stronie_glownej', 'text', 'Poszukiwane powierzchnie', '2023-09-08 17:30:17', '2023-09-21 09:35:40'),
(47, 'paragraf_ikony_4_sekcji_2_na_stronie_glownej', 'text', 'Rynek nieruchomości w Polsce preferuje mieszkania jedno- i dwupokojowe o powierzchni pomiędzy 30 m2 a 72 m2. Luxor Residence idealnie trafia w potrzeby klientów, oferując apartamenty w podanym przedziale metrażowym.', '2023-09-08 17:30:17', '2023-09-21 09:35:50'),
(48, 'ikona_5_sekcji_2_na_stronie_glownej', 'text', '<i class=\"fa-solid fa-cash-register p-2\"></i>', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(49, 'naglowek_ikony_5_sekcji_2_na_stronie_glownej', 'text', 'Cena', '2023-09-08 17:30:17', '2023-09-21 09:36:26'),
(50, 'paragraf_ikony_5_sekcji_2_na_stronie_glownej', 'text', 'Cena to tylko jeden aspektów decydujących o wartości nieruchomości. Liczy się również lokalizacja, okolica oraz jakość wykonania. Na cenę wpływa również dostępność inwestycji w danym rejonie. Biorąc pod uwagę powyższe aspekty, cena nieruchomości Luxor Residence jest szalenie atrakcyjna i pozwala na zakup wymarzonego mieszkania przy zachowaniu optymalnego stosunku jakości do ceny.', '2023-09-08 17:30:17', '2023-09-21 09:36:35'),
(51, 'ikona_6_sekcji_2_na_stronie_glownej', 'text', '<i class=\"fa-solid fa-wallet p-2\"></i>', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(52, 'naglowek_ikony_6_sekcji_2_na_stronie_glownej', 'text', 'Idealna inwestycja', '2023-09-08 17:30:17', '2023-09-21 09:36:44'),
(53, 'paragraf_ikony_6_sekcji_2_na_stronie_glownej', 'text', 'Lokalizacja i jakość wykonania to absolutnie najwyższa półka na rynku nieruchomości w Piekarach Śląskich. Atrakcyjna cena gwarantuje, że na Luxor Residence można zarobić w krótkiej perspektywie czasowej.', '2023-09-08 17:30:17', '2023-09-21 09:36:53'),
(54, 'naglowek_karuzela_2_na_stronie_glownej', 'text', 'Poznaj lepiej inwestycję Luxor Residence', '2023-09-08 17:30:17', '2023-09-25 09:06:02'),
(55, 'zdjecie_1_karuzela_2_na_stronie_glownej', 'photo', '169736312147.jpg', '2023-09-08 17:30:17', '2023-10-15 09:45:21'),
(56, 'zdjecie_2_karuzela_2_na_stronie_glownej', 'photo', '169736315315.jpg', '2023-09-08 17:30:17', '2023-10-15 09:45:53'),
(57, 'zdjecie_3_karuzela_2_na_stronie_glownej', 'photo', '169736318970.jpg', '2023-09-08 17:30:17', '2023-10-15 09:46:29'),
(58, 'zdjecie_4_karuzela_2_na_stronie_glownej', 'photo', '169736335871.jpg', '2023-09-08 17:30:17', '2023-10-15 09:49:18'),
(59, 'zdjecie_5_karuzela_2_na_stronie_glownej', 'photo', '169736337624.jpg', '2023-09-08 17:30:17', '2023-10-15 09:49:36'),
(60, 'zdjecie_6_karuzela_2_na_stronie_glownej', 'photo', '16972035664.jpg', '2023-09-08 17:30:17', '2023-10-13 13:26:06'),
(61, 'zdjecie_7_karuzela_2_na_stronie_glownej', 'photo', '169720354197.jpg', '2023-09-08 17:30:17', '2023-10-13 13:25:41'),
(62, 'zdjecie_8_karuzela_2_na_stronie_glownej', 'photo', '169720352632.jpg', '2023-09-08 17:30:17', '2023-10-13 13:25:26'),
(63, 'zdjecie_9_karuzela_2_na_stronie_glownej', 'photo', '169736342079.jpg', '2023-09-08 17:30:17', '2023-10-15 09:50:20'),
(64, 'zdjecie_10_karuzela_2_na_stronie_glownej', 'photo', '169736344364.jpg', '2023-09-08 17:30:17', '2023-10-15 09:50:43'),
(65, 'alt_zdjecie_1_karuzela_2_na_stronie_glownej', 'text', 'Ciche i nowoczesne windy w każdym budynku', '2023-09-08 17:30:17', '2023-09-29 13:17:27'),
(66, 'alt_zdjecie_2_karuzela_2_na_stronie_glownej', 'text', 'Pompa ciepła i ogrzewanie podłogowe - optymalne i ekonomiczne ciepło w każdym apartamencie', '2023-09-08 17:30:17', '2023-09-29 13:17:38'),
(67, 'alt_zdjecie_3_karuzela_2_na_stronie_glownej', 'text', 'W Luxor Residence wykorzystujemy wodę deszczową do celów gospodarczych (spłukiwanie toalet, podlewanie ogrodu)', '2023-09-08 17:30:17', '2023-09-29 13:17:45'),
(68, 'alt_zdjecie_4_karuzela_2_na_stronie_glownej', 'text', 'Twój rower zasługuje na godne traktowanie. Rowerownia jest dostępna w każdym budynku', '2023-09-08 17:30:17', '2023-09-29 13:18:01'),
(69, 'alt_zdjecie_5_karuzela_2_na_stronie_glownej', 'text', 'Parkingi podziemne to u nas standard', '2023-09-08 17:30:17', '2023-09-29 13:18:08'),
(70, 'alt_zdjecie_6_karuzela_2_na_stronie_glownej', 'text', 'Komórki lokatorskie to najważniejsze pomieszczenie dla każdego', '2023-09-08 17:30:17', '2023-09-29 13:18:15'),
(71, 'alt_zdjecie_7_karuzela_2_na_stronie_glownej', 'text', 'Przestronne i ustawne tarasy pozwalają na zaaranżowanie dodatkowego pomieszczenia', '2023-09-08 17:30:17', '2023-09-29 13:18:24'),
(72, 'alt_zdjecie_8_karuzela_2_na_stronie_glownej', 'text', 'Ogrody na dachu i przed budynkami gwarantują zieleń na wyciągnięcie ręki', '2023-09-08 17:30:17', '2023-09-29 13:18:31'),
(73, 'alt_zdjecie_9_karuzela_2_na_stronie_glownej', 'text', 'Nowoczesna przemyślana architektura to nasz znak firmowy', '2023-09-08 17:30:17', '2023-09-29 13:18:39'),
(74, 'alt_zdjecie_10_karuzela_2_na_stronie_glownej', 'text', 'Poszukiwane powierzchnie apartamentów dostępne', '2023-09-08 17:30:17', '2023-09-29 13:18:46'),
(75, 'naglowek_sekcji_3_na_stronie_glownej', 'text', 'Poznaj nasze wyjątkowe apartamenty', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(76, 'zdjecie_sekcji_3_na_stronie_glownej', 'photo', '169736346274.jpg', '2023-09-08 17:30:17', '2023-10-15 09:51:02'),
(77, 'alt_zdjecie_sekcji_3_na_stronie_glownej', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(78, 'naglowek_na_gorze_sekcji_3_na_stronie_glownej', 'text', 'NASZE WYJĄTKOWE APARTAMENTY', '2023-09-08 17:30:17', '2023-09-21 09:42:56'),
(79, 'paragraf_na_gorze_sekcji_3_na_stronie_glownej', 'text', 'O wysokiej jakości apartamentu świadczy wiele czynników. Po pierwsze zwraca uwagę funkcjonalność, która decyduje o tym, czy przestrzeń daje się zaplanować, urządzić i dopasować do potrzeb użytkownika. Dobrze przemyślany układ to podstawa udanego wykończenia wnętrz i radości z użytkowania nieruchomości. Po drugie duże znaczenie ma jakość wykonania prac budowlanych. Ich najwyższy poziom gwarantuje, że prace wykończeniowe uda się przeprowadzić szybciej i taniej. Często dzięki wysokiej jakości prac budowlanych architekt zyskuje dodatkowe możliwości zaplanowania idealnego wnętrza. Po trzecie liczy się metraż apartamentu, który musi stanowić kompromis pomiędzy możliwościami finansowymi nabywcy a maksymalną oczekiwaną funkcjonalnością. Luxor Residence to perfekcyjnie rozplanowana przestrzeń, najwyższa jakość wykonania oraz doskonałe pole do personalizacji gotowych wnętrz. W naszych apartamentach zaplanujesz sobie wygodne życie oraz skuteczny relaks dla ciała i ducha po dniu ciężkiej pracy. Luxor Residence to miejsce, do którego wraca się z niekłamaną przyjemnością.', '2023-09-08 17:30:17', '2023-09-21 09:44:09'),
(80, 'zdjecie_na_gorze_sekcji_3_na_stronie_glownej', 'photo', '169736349425.jpg', '2023-09-08 17:30:17', '2023-10-15 09:51:34'),
(81, 'alt_zdjecie_na_gorze_sekcji_3_na_stronie_glownej', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(82, 'naglowek_na_dole_sekcji_3_na_stronie_glownej', 'text', 'DESIGN BEZ GRANIC - ZNAJDŹ SWOJE WNĘTRZE', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(83, 'paragraf_na_dole_sekcji_3_na_stronie_glownej', 'text', 'Funkcjonalny rozkład naszych apartamentów to doskonała baza do tego, by stworzyć wnętrza zgodne z własnymi oczekiwaniami oraz możliwościami finansowymi. Nowoczesny loft? Styl glamour? Skandynawskie wnętrza? A może po prostu nowoczesne i funkcjonalne mieszkanie dla rodziny bądź singla? Prezentujemy kilka przykładowych projektów adaptacji wnętrz apartamentów Luxor Residence. Nasza projektantka jest do dyspozycji, chętnie doradzi i pomoże w realizacji wnętrz marzeń. Bogate doświadczenie projektantki oraz ogromna baza gotowych realizacji stanowią szerokie źródło inspiracji do spełnienia marzeń o idealnym lokum. Zapraszamy do galerii i przykładowych wizualizacji wnętrz apartamentów Luxor Residence.', '2023-09-08 17:30:17', '2023-09-21 09:44:37'),
(84, 'zdjecie_na_dole_sekcji_3_na_stronie_glownej', 'photo', '169720391148.jpg', '2023-09-08 17:30:17', '2023-10-13 13:31:51'),
(85, 'alt_zdjecie_na_dole_sekcji_3_na_stronie_glownej', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(86, 'naglowek_sekcji_ikon_na_stronie_glownej', 'text', 'LUKSUSOWE APARTAMENTY W PIEKARACH ŚLĄSKICH', '2023-09-08 17:30:17', '2023-09-21 09:44:56'),
(87, 'paragraf_1_sekcji_ikon_na_stronie_glownej', 'text', 'Osiedle Luxor Residence to idealnie położone osiedle, które zapewnia doskonały kompromis pomiędzy dostępem do tego, co ważne a komfortem życia. Bliskość centrum miasta wraz z jego ofertą pozwala na szeroki wybór szkół, sklepów i restauracji. Szybki i niczym nieskrępowany dostęp do terenów zielonych i rekreacyjnych daje możliwość odpoczynku i uprawiania różnych sportów. Najwyższa jakość wykonania, najlepsze materiały i funkcjonalny projekt to świetna baza pod luksusowy apartament i wymarzone wnętrza.  Luxor Residence to miejsce, które dopasowuje się do otoczenia, idealnie je uzupełniając oraz dodatkowo podnosząc jego atrakcyjność i funkcjonalność. Ta inwestycja to nowy wymiar jakości na rynku nieruchomości w Piekarach Śląskich. Doskonały projekt, nowoczesna i ciekawa architektura, wysokiej klasy materiały użyte do budowy to bezapelacyjny plus wyróżniający Luxor Residence na tle innych nieruchomości. Osiedle jest zespołem czterokondygnacyjnych budynków wyposażonych w przestronne balkony, windy, nowoczesne i ekonomiczne ogrzewanie z pomp ciepła oraz parkingi podziemne, komórki lokatorskie i rowerownię. Dostępne apartamenty mają powierzchnię od 30 m2 do 72 m2.', '2023-09-08 17:30:17', '2023-09-21 09:45:09'),
(88, 'ikona_1_sekcji_ikon_na_stronie_glownej', 'text', '<i class=\"fa-solid fa-tree\"></i>', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(89, 'paragraf_ikona_1_sekcji_ikon_na_stronie_glownej', 'text', 'zielona okolica', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(90, 'ikona_2_sekcji_ikon_na_stronie_glownej', 'text', '<i class=\"fa-solid fa-map-location-dot\"></i>', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(91, 'paragraf_ikona_2_sekcji_ikon_na_stronie_glownej', 'text', 'doskonała lokalizacja', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(92, 'ikona_3_sekcji_ikon_na_stronie_glownej', 'text', '<i class=\"fa-solid fa-bell-slash\"></i>', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(93, 'paragraf_ikona_3_sekcji_ikon_na_stronie_glownej', 'text', 'cicha okolica', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(94, 'ikona_4_sekcji_ikon_na_stronie_glownej', 'text', '<i class=\"fa-solid fa-key\"></i>', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(95, 'paragraf_ikona_4_sekcji_ikon_na_stronie_glownej', 'text', 'idealne pod wynajem', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(96, 'ikona_5_sekcji_ikon_na_stronie_glownej', 'text', '<i class=\"fa-solid fa-wallet\"></i>', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(97, 'paragraf_ikona_5_sekcji_ikon_na_stronie_glownej', 'text', 'najlepsza cena', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(98, 'ikona_6_sekcji_ikon_na_stronie_glownej', 'text', '<i class=\"fa-solid fa-shield\"></i>', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(99, 'paragraf_ikona_6_sekcji_ikon_na_stronie_glownej', 'text', 'pewna inwestycja', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(100, 'ikona_7_sekcji_ikon_na_stronie_glownej', 'text', '<i class=\"fa-solid fa-coins\"></i>', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(101, 'paragraf_ikona_7_sekcji_ikon_na_stronie_glownej', 'text', 'vat i amortyzacja', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(102, 'ikona_8_sekcji_ikon_na_stronie_glownej', 'text', '<i class=\"fa-regular fa-flag\"></i>', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(103, 'paragraf_ikona_8_sekcji_ikon_na_stronie_glownej', 'text', 'idealne na start', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(104, 'ikona_9_sekcji_ikon_na_stronie_glownej', 'text', '<i class=\"fa-solid fa-person-through-window\"></i>', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(105, 'paragraf_ikona_9_sekcji_ikon_na_stronie_glownej', 'text', 'duże okna', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(106, 'ikona_10_sekcji_ikon_na_stronie_glownej', 'text', '<i class=\"fa-solid fa-maximize\"></i>', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(107, 'paragraf_ikona_10_sekcji_ikon_na_stronie_glownej', 'text', 'poszukiwane metraze', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(108, 'ikona_11_sekcji_ikon_na_stronie_glownej', 'text', '<i class=\"fa-solid fa-user-tag\"></i>', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(109, 'paragraf_ikona_11_sekcji_ikon_na_stronie_glownej', 'text', 'idealne pod wynajem', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(110, 'ikona_12_sekcji_ikon_na_stronie_glownej', 'text', '<i class=\"fa-solid fa-scale-balanced\"></i>', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(111, 'paragraf_ikona_12_sekcji_ikon_na_stronie_glownej', 'text', 'przejrzysta prawna sytuacja inwestora', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(112, 'paragraf_2_sekcji_ikon_na_stronie_glownej', 'text', 'Jedna z podstawowych zasad rynku nieruchomości dla Kupujących, mówi o tym, że najważniejszym kryterium określającym wartość czy atrakcyjność nieruchomości jest po pierwsze: LOKALIZACJA, po drugie LOKALIZACJA, po trzecie LOKALIZACJA.', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(113, 'naglowek_sekcji_ostatniej_na_stronie_glownej', 'text', 'Komfort w doskonałym stylu', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(114, 'paragraf_sekcji_ostatniej_na_stronie_glownej', 'text', 'Zacisze Bobrowniki to nie tylko lokalizacja, ale również przyjazny klimat. Inwestycja obejmuje dwa budynki jednorodzinne dwulokalowe w zabudowie szeregowej. Mieszkania na parterze mają powierzchnię 55,12 m², natomiast na piętrze – 45,96 m² dodatkowo strych do własnej adaptacji ok. 15 m2 . Budynki wyróżnia atrakcyjna, nowoczesna architekturą, czystymi i prostymi liniami, szczególnie widocznymi w elementach zewnętrznych. Nasze budynki są zaprojektowane tak, aby wpisywały się idealnie w sąsiedztwo i zielone tereny. Stawiamy na połączenie elegancji z naturą zarówno przy doborze materiałów wykończeniowych jak i przy projekcie samej konstrukcji domu. Od samego początku zamysłem była prostota i funkcjonalność, bez nadmiernych ekstrawagancji. Nasze nieruchomości spełniają wszystkie warunki idealnego domu rodzinnego.', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(115, 'ikona_1_sekcji_ostatniej_na_stronie_glownej', 'text', '<i class=\"fa-solid fa-house\"></i>', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(116, 'naglowek_ikona_1_sekcji_ostatniej_na_stronie_glownej', 'text', 'Wysoki standard', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(117, 'paragraf_ikona_1_sekcji_ostatniej_na_stronie_glownej', 'text', 'Najwyższej jakości materiały i technologie użyte podczas budowy, wysokie standardy prowadzonych prac budowlanych, najwyższa jakość wykonania – to nasz znak rozpoznawczy. Rowerownia oraz komórka lokatorska stanowią miły i praktyczny dodatek.', '2023-09-08 17:30:17', '2023-09-21 09:47:26'),
(118, 'ikona_2_sekcji_ostatniej_na_stronie_glownej', 'text', '<i class=\"fa-solid fa-key\"></i>', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(119, 'naglowek_ikona_2_sekcji_ostatniej_na_stronie_glownej', 'text', 'PRYWATNOŚĆ ORAZ SPOKÓJ', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(120, 'paragraf_ikona_2_sekcji_ostatniej_na_stronie_glownej', 'text', 'Oddzielne wejścia, kameralne korytarze, akustyczne ściany garażowe, ciche i nowoczesne windy – wszystkie te rozwiązania przekładają się na codzienny komfort mieszkańców.', '2023-09-08 17:30:17', '2023-09-21 09:47:41'),
(121, 'ikona_3_sekcji_ostatniej_na_stronie_glownej', 'text', '<i class=\"fa-brands fa-hotjar\"></i>', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(122, 'naglowek_ikona_3_sekcji_ostatniej_na_stronie_glownej', 'text', 'OGRZEWANIE', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(123, 'paragraf_ikona_3_sekcji_ostatniej_na_stronie_glownej', 'text', 'Własne ogrzewanie z nowoczesnych pomp ciepła gwarantuje niskie koszty eksploatacji oraz pozwala na dopasowanie komfortu cieplnego do indywidualnych potrzeb.', '2023-09-08 17:30:17', '2023-09-21 09:48:01'),
(124, 'naglowek_na_stronie_wodna', 'text', 'wodna', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(125, 'paragraf_na_stronie_wodna', 'text', 'jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki. Pięć wieków później zaczął być używany przemyśle elektronicznym, pozostając praktycznie niezmienionym. Spopularyzował się w latach 60. XX w. wraz z publikacją arkuszy Letrasetu, zawierających fragmenty Lorem Ipsum, a ostatnio z zawierającym różne wersje Lorem Ipsum oprogramowaniem przeznaczonym do realizacji druków na komputerach osobistych, jak Aldus PageMaker', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(126, 'zdjecie_1_na_stronie_wodna', 'photo', 'wodna-1.jpg', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(127, 'zdjecie_2_na_stronie_wodna', 'photo', 'wodna-2.jpg', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(128, 'zdjecie_3_na_stronie_wodna', 'photo', 'wodna-3.jpg', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(129, 'alt_zdjecie_1_na_stronie_wodna', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(130, 'alt_zdjecie_2_na_stronie_wodna', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(131, 'alt_zdjecie_3_na_stronie_wodna', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(132, 'naglowek_na_stronie_kopernika', 'text', 'kopernika', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(133, 'paragraf_na_stronie_kopernika', 'text', 'jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki. Pięć wieków później zaczął być używany przemyśle elektronicznym, pozostając praktycznie niezmienionym. Spopularyzował się w latach 60. XX w. wraz z publikacją arkuszy Letrasetu, zawierających fragmenty Lorem Ipsum, a ostatnio z zawierającym różne wersje Lorem Ipsum oprogramowaniem przeznaczonym do realizacji druków na komputerach osobistych, jak Aldus PageMaker', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(134, 'zdjecie_1_na_stronie_kopernika', 'photo', 'kopernika-1.jpg', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(135, 'zdjecie_2_na_stronie_kopernika', 'photo', 'kopernika-2.jpg', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(136, 'zdjecie_3_na_stronie_kopernika', 'photo', 'kopernika-3.jpg', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(137, 'alt_zdjecie_1_na_stronie_kopernika', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(138, 'alt_zdjecie_2_na_stronie_kopernika', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(139, 'alt_zdjecie_3_na_stronie_kopernika', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(140, 'naglowek_na_stronie_dlugosza', 'text', 'Długosza', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(141, 'paragraf_na_stronie_dlugosza', 'text', 'jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki. Pięć wieków później zaczął być używany przemyśle elektronicznym, pozostając praktycznie niezmienionym. Spopularyzował się w latach 60. XX w. wraz z publikacją arkuszy Letrasetu, zawierających fragmenty Lorem Ipsum, a ostatnio z zawierającym różne wersje Lorem Ipsum oprogramowaniem przeznaczonym do realizacji druków na komputerach osobistych, jak Aldus PageMaker', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(142, 'zdjecie_1_na_stronie_dlugosza', 'photo', 'dlugosza-1.jpg', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(143, 'zdjecie_2_na_stronie_dlugosza', 'photo', 'dlugosza-2.jpg', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(144, 'zdjecie_3_na_stronie_dlugosza', 'photo', 'dlugosza-3.jpg', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(145, 'zdjecie_4_na_stronie_dlugosza', 'photo', 'dlugosza-4.jpg', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(146, 'alt_zdjecie_1_na_stronie_dlugosza', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(147, 'alt_zdjecie_2_na_stronie_dlugosza', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(148, 'alt_zdjecie_3_na_stronie_dlugosza', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(149, 'alt_zdjecie_4_na_stronie_dlugosza', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(150, 'naglowek_sekcji_1_na_stronie_o_inwestycji', 'text', 'Osiedle Luxor Residence', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(151, 'paragraf_1_sekcji_1_na_stronie_o_inwestycji', 'text', 'Apartamenty Luxor Residence to najbardziej prestiżowy adres na mapie Piekar Śląskich. Osiedle położone jest niedaleko centrum miasta, ale jednocześnie oferuje maksimum ciszy i spokoju oraz łatwy dostęp do malowniczych terenów zielonych i rekreacyjnych.', '2023-09-08 17:30:17', '2023-09-21 10:07:52'),
(152, 'paragraf_2_sekcji_1_na_stronie_o_inwestycji', 'text', 'Inwestycja podzielona jest na trzy etapy i składa się z trzech czterokondygnacyjnych budynków. Każdy z nich wyposażony jest w windy, nowoczesne i ekonomiczne ogrzewanie realizowane przez pompy ciepła, podziemne parkingi oraz duże tarasy, które przy sprzyjającej pogodzie stanowią dodatkowe pomieszczenie. Lokale na paterze posiadają własne ogrody do zagospodarowania. Natomiast dla mieszkańców ostatniej kondygnacji przewidziano ogrody na dachu budynku do własnej aranżacji.', '2023-09-08 17:30:17', '2023-09-21 10:08:02'),
(153, 'paragraf_3_sekcji_1_na_stronie_o_inwestycji', 'text', 'Lokalizacja apartamentów Luxor Residence zapewnia dostęp do rozbudowanej infrastruktury miejskiej, komunikacji, dróg publicznych oraz terenów rekreacyjnych i zielonych. Ścieżki spacerowe i biegowe, trasy rowerowe, jeziora, parki i lasy to raj dla osób lubiących aktywnie spędzać czas. Bliskość sąsiednich miast daje możliwość skorzystania z jeszcze szerszej oferty kulturalno-oświatowej regionu.', '2023-09-08 17:30:17', '2023-09-21 10:08:12'),
(154, 'paragraf_4_sekcji_1_na_stronie_o_inwestycji', 'text', 'Luxor Residence to projekt, który wyróżnia się na tle innych inwestycji w Piekarach Śląskich. Nasze lokale mają metraż od 30 m2 do 72 m2. W każdym z trzech budynków znajduje się 48 apartamentów zaprojektowanych idealnie pod potrzeby przyszłych mieszkańców.', '2023-09-08 17:30:17', '2023-09-21 10:08:23'),
(155, 'paragraf_5_sekcji_1_na_stronie_o_inwestycji', 'text', 'Zamieszkaj w mieście, ale ciesz się przyrodą i miej ją w zasięgu ręki. Zamieszkaj w Luxor Residence!', '2023-09-08 17:30:17', '2023-09-21 10:08:32'),
(156, 'zdjecie_sekcji_1_na_stronie_o_inwestycji', 'photo', '169720413985.jpg', '2023-09-08 17:30:17', '2023-10-13 13:35:40'),
(157, 'alt_zdjecie_sekcji_1_na_stronie_o_inwestycji', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(158, 'naglowek_sekcji_2_na_stronie_o_inwestycji', 'text', 'Dlaczego warto wybrać Luxor Residence:', '2023-09-08 17:30:17', '2023-09-21 10:14:13'),
(159, 'lista_1_sekcji_2_na_stronie_o_inwestycji', 'text', 'doskonała lokalizacja, która zapewnia dostęp do oferty miasta, świetna komunikacja oraz bezpośrednia bliskość terenów zielonych i rekreacyjnych;', '2023-09-08 17:30:17', '2023-09-21 10:18:15'),
(160, 'lista_2_sekcji_2_na_stronie_o_inwestycji', 'text', 'najwyższa jakość wykonania budynków;', '2023-09-08 17:30:17', '2023-09-21 10:19:00'),
(161, 'lista_3_sekcji_2_na_stronie_o_inwestycji', 'text', 'funkcjonalny projekt;', '2023-09-08 17:30:17', '2023-09-21 10:19:10'),
(162, 'lista_4_sekcji_2_na_stronie_o_inwestycji', 'text', 'najbardziej pożądane powierzchnie apartamentów (od 30 m2 do 72 m2);', '2023-09-08 17:30:17', '2023-09-21 10:19:19'),
(163, 'lista_5_sekcji_2_na_stronie_o_inwestycji', 'text', 'nowoczesne, ekologiczne i ekonomiczne ogrzewanie z pomp ciepła;', '2023-09-08 17:30:17', '2023-09-21 10:19:30'),
(164, 'lista_6_sekcji_2_na_stronie_o_inwestycji', 'text', 'podziemne parkingi;', '2023-09-08 17:30:17', '2023-09-21 10:19:39'),
(165, 'lista_7_sekcji_2_na_stronie_o_inwestycji', 'text', 'windy;', '2023-09-08 17:30:17', '2023-09-21 10:19:47'),
(166, 'lista_8_sekcji_2_na_stronie_o_inwestycji', 'text', 'ogrody dla lokali na parterze i ostatniej kondygnacji;', '2023-09-08 17:30:17', '2023-09-21 10:19:59'),
(167, 'lista_9_sekcji_2_na_stronie_o_inwestycji', 'text', 'przestronne tarasy, komórki lokatorskie oraz rowerownia.', '2023-09-08 17:30:17', '2023-09-21 10:20:10'),
(168, 'lista_10_sekcji_2_na_stronie_o_inwestycji', 'text', 'Zaciszne miejsce z dala od zgiełku miasta', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(169, 'lista_11_sekcji_2_na_stronie_o_inwestycji', 'text', 'Czyste i ekologiczne miejsce – bez smogu', '2023-09-08 17:30:17', '2023-09-08 17:30:17'),
(170, 'lista_12_sekcji_2_na_stronie_o_inwestycji', 'text', 'Bezpośredni kontakt z naturą', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(171, 'paragraf_1_sekcji_2_na_stronie_o_inwestycji', 'text', 'Kolorystyka otoczenia wpływa na nasze samopoczucie. Są kolory, w których czujemy się lepiej i spokojniej. Dlatego Luxor Residence przykłada szczególną wagę do tego, by mieszkańcy osiedla czuli się w nim komfortowo. Biel, odcienie szarości, drewno i zieleń – to znak rozpoznawczy inwestycji Luxor Residence. Dobór kolorów gwarantuje, że budynki idealnie wpasowują się w otoczenie, tworząc z nim idealną harmonię. Naturalne i przyjemne dla oka kolory dają poczucie spokoju i pozwalają na odpoczynek, a całość ma charakter ponadczasowej elegancji.', '2023-09-08 17:30:18', '2023-09-21 10:29:11'),
(172, 'paragraf_2_sekcji_2_na_stronie_o_inwestycji', 'text', '.', '2023-09-08 17:30:18', '2023-09-25 09:07:24'),
(173, 'zdjecie_sekcji_2_na_stronie_o_inwestycji', 'photo', '169720398152.jpg', '2023-09-08 17:30:18', '2023-10-13 13:33:01'),
(174, 'alt_zdjecie_sekcji_2_na_stronie_o_inwestycji', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(175, 'naglowek_karuzeli_1_na_stronie_o_inwestycji', 'text', 'Dlaczego warto wybrać Osiedle Luxor Residence?', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(176, 'zdjecie_1_karuzeli_1_na_stronie_o_inwestycji', 'photo', '169720475982.jpg', '2023-09-08 17:30:18', '2023-10-13 13:45:59'),
(177, 'alt_zdjecie_1_karuzeli_1_na_stronie_o_inwestycji', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(178, 'naglowek_zdjecie_1_karuzeli_1_na_stronie_o_inwestycji', 'text', 'PERFEKCYJNA LOKALIZACJA', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(179, 'paragraf_zdjecie_1_karuzeli_1_na_stronie_o_inwestycji', 'text', 'Apartamenty Luxor Residence to najbardziej prestiżowy adres na mapie Piekar Śląskich. Choć osiedle położone jest niedaleko centrum miasta, to oferuje maksimum ciszy i spokoju oraz łatwy dostęp do malowniczych terenów zielonych i rekreacyjnych.', '2023-09-08 17:30:18', '2023-09-29 18:00:05'),
(180, 'zdjecie_2_karuzeli_1_na_stronie_o_inwestycji', 'photo', '16972040238.jpg', '2023-09-08 17:30:18', '2023-10-13 13:33:43'),
(181, 'alt_zdjecie_2_karuzeli_1_na_stronie_o_inwestycji', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(182, 'naglowek_zdjecie_2_karuzeli_1_na_stronie_o_inwestycji', 'text', 'ZIELONA OKOLICA', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(183, 'paragraf_zdjecie_2_karuzeli_1_na_stronie_o_inwestycji', 'text', 'Możliwość kontaktu z naturą to prawo każdego człowieka. Idealna lokalizacja Luxor Residence gwarantuje dostęp do lasów, jezior i stawów oraz bogatej infrastruktury rekreacyjnej, która jest na wyciągnięcie ręki. Rezerwat Segiet, Śląski Ogród Botaniczny, zbiornik Kozłowa Góra wraz z lasami go otaczającymi to tylko wybrane elementy w bezpośrednim sąsiedztwie.', '2023-09-08 17:30:18', '2023-09-29 18:00:36'),
(184, 'zdjecie_3_karuzeli_1_na_stronie_o_inwestycji', 'photo', '169736358317.jpg', '2023-09-08 17:30:18', '2023-10-15 09:53:03'),
(185, 'alt_zdjecie_3_karuzeli_1_na_stronie_o_inwestycji', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(186, 'naglowek_zdjecie_3_karuzeli_1_na_stronie_o_inwestycji', 'text', 'NAJLEPSZA INWESTYCJA', '2023-09-08 17:30:18', '2023-09-29 18:03:23'),
(187, 'paragraf_zdjecie_3_karuzeli_1_na_stronie_o_inwestycji', 'text', 'Sytuacja gospodarcza powoduje, że nieruchomości to najpewniejsza i najlepsza inwestycja. Doskonała lokalizacja, nowoczesny projekt, najwyższa jakość wykonania oraz wysoki standard, na który składają się m.in. windy, ogrzewanie pompami ciepła, komórki lokatorskie oraz garaże podziemne – to gwarancja pomyślnej inwestycji.', '2023-09-08 17:30:18', '2023-09-29 17:56:53'),
(188, 'zdjecie_4_karuzeli_1_na_stronie_o_inwestycji', 'photo', '169720430663.jpg', '2023-09-08 17:30:18', '2023-10-13 13:38:26'),
(189, 'alt_zdjecie_4_karuzeli_1_na_stronie_o_inwestycji', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(190, 'naglowek_zdjecie_4_karuzeli_1_na_stronie_o_inwestycji', 'text', 'CENA', '2023-09-08 17:30:18', '2023-09-29 18:03:29'),
(191, 'paragraf_zdjecie_4_karuzeli_1_na_stronie_o_inwestycji', 'text', 'Cena to tylko jeden aspektów decydujących o wartości nieruchomości. Liczy się również lokalizacja, okolica oraz jakość wykonania. Na cenę wpływa też dostępność inwestycji w danym rejonie. Biorąc pod uwagę powyższe aspekty, cena nieruchomości Luxor Residence jest wysoce atrakcyjna i pozwala na zakup wymarzonego mieszkania przy zachowaniu optymalnego stosunku jakości do ceny.', '2023-09-08 17:30:18', '2023-09-29 17:57:26'),
(192, 'zdjecie_5_karuzeli_1_na_stronie_o_inwestycji', 'photo', '169736356087.jpg', '2023-09-08 17:30:18', '2023-10-15 09:52:40'),
(193, 'alt_zdjecie_5_karuzeli_1_na_stronie_o_inwestycji', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(194, 'naglowek_zdjecie_5_karuzeli_1_na_stronie_o_inwestycji', 'text', 'BEZPIECZNA LOKATA', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(195, 'paragraf_zdjecie_5_karuzeli_1_na_stronie_o_inwestycji', 'text', 'Kupując apartamenty w inwestycji Luxor Residence, zyskujesz gwarancję, że dzięki optymalnemu projektowi, bardzo dobrej lokalizacji, wysokiej jakości wykonania oraz licznym udogodnieniom dla mieszkańców Twoje pieniądze znajdą bezpieczną przystań.', '2023-09-08 17:30:18', '2023-09-29 17:57:46'),
(196, 'zdjecie_6_karuzeli_1_na_stronie_o_inwestycji', 'photo', '169736361341.jpg', '2023-09-08 17:30:18', '2023-10-15 09:53:33'),
(197, 'alt_zdjecie_6_karuzeli_1_na_stronie_o_inwestycji', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(198, 'naglowek_zdjecie_6_karuzeli_1_na_stronie_o_inwestycji', 'text', 'NOWOCZESNE WNĘTRZA', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(199, 'paragraf_zdjecie_6_karuzeli_1_na_stronie_o_inwestycji', 'text', 'Sprawą absolutnie najważniejszą jest projekt. W przypadku Luxor Residence stawiamy na nowoczesny wygląd naszych budynków oraz harmonijne i funkcjonalne wykorzystanie przestrzeni, którą oferujemy naszym klientom. Do dyspozycji przyszłych właścicieli mieszkań mamy lokale od 30 m2 do 72 m2 wraz z parkingami podziemnymi, windami, ekologicznym i ekonomicznym ogrzewaniem oraz idealną lokalizacją, która stanowi rozsądne połączenie ciszy i spokoju oraz łatwego dostępu do oferty Piekar Śląskich.', '2023-09-08 17:30:18', '2023-09-29 17:58:10'),
(200, 'zdjecie_7_karuzeli_1_na_stronie_o_inwestycji', 'photo', '169720478261.jpg', '2023-09-08 17:30:18', '2023-10-13 13:46:22'),
(201, 'alt_zdjecie_7_karuzeli_1_na_stronie_o_inwestycji', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(202, 'naglowek_zdjecie_7_karuzeli_1_na_stronie_o_inwestycji', 'text', 'DUŻE OKNA', '2023-09-08 17:30:18', '2023-09-29 18:03:34'),
(203, 'paragraf_zdjecie_7_karuzeli_1_na_stronie_o_inwestycji', 'text', 'Nowoczesna konstrukcja budynków wyróżnia się niebanalnymi oknami, których rozmiar zapewnia idealne nasłonecznienie wnętrz. Duże wymiary okien pozwalają też na obcowanie z naturą, która wydaje się jeszcze bliższa i bardziej dostępna.', '2023-09-08 17:30:18', '2023-09-29 17:58:27'),
(204, 'zdjecie_8_karuzeli_1_na_stronie_o_inwestycji', 'photo', '169720481143.jpg', '2023-09-08 17:30:18', '2023-10-13 13:46:51'),
(205, 'alt_zdjecie_8_karuzeli_1_na_stronie_o_inwestycji', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(206, 'naglowek_zdjecie_8_karuzeli_1_na_stronie_o_inwestycji', 'text', 'STREFA INWESTORA', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(207, 'paragraf_zdjecie_8_karuzeli_1_na_stronie_o_inwestycji', 'text', 'ZBIERAJ OWOCE SWOJEJ INWESTYCJI Czerpanie zysków z apartamentu jest bajecznie proste. Apartament będzie pracować na Ciebie przy minimum Twojego zaangażowania. Pozyskanie zainteresowanego wynajmem nie będzie specjalnie trudne, ponieważ obecnie rynek mieszkaniowy należy raczej do posiadaczy lokali. Na wysokość czynszu ma wpływ zarówno standard mieszkania, jak i jego lokalizacja ... Oznacza to, że do niemal każdego mieszkania, da się szybko znaleźć najmującego. Tak więc wynajem apartamentu zapewni inwestorowi stałe przychody – to taki „drugi dom”, który przynosi zyski przez cały rok ale też wygodna i bezpieczna inwestycja, więc ... skoro wiele lat pracowałeś / pracowałaś na to by mieć taki apartament – to pozwól, by Twój apartament pracował teraz na Ciebie.', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(208, 'zdjecie_9_karuzeli_1_na_stronie_o_inwestycji', 'photo', '169720483349.jpg', '2023-09-08 17:30:18', '2023-10-13 13:47:13'),
(209, 'alt_zdjecie_9_karuzeli_1_na_stronie_o_inwestycji', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(210, 'naglowek_zdjecie_9_karuzeli_1_na_stronie_o_inwestycji', 'text', 'TARASY I OGRODY', '2023-09-08 17:30:18', '2023-09-29 18:04:09'),
(211, 'paragraf_zdjecie_9_karuzeli_1_na_stronie_o_inwestycji', 'text', 'Mieszkańcy parteru i ostatniego piętra do swojej dyspozycji mają ogrody, które można zaaranżować według własnego uznania. Apartamenty na poszczególnych piętrach dysponują przestronnymi tarasami, które pozwalają na stworzenie dodatkowego pomieszczenia, w którym będzie mogło toczyć się życie mieszkańców.', '2023-09-08 17:30:18', '2023-09-29 17:59:06'),
(212, 'zdjecie_10_karuzeli_1_na_stronie_o_inwestycji', 'photo', '169736363496.jpg', '2023-09-08 17:30:18', '2023-10-15 09:53:54'),
(213, 'alt_zdjecie_10_karuzeli_1_na_stronie_o_inwestycji', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(214, 'naglowek_zdjecie_10_karuzeli_1_na_stronie_o_inwestycji', 'text', 'Ostatni nagłówek', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(215, 'paragraf_zdjecie_10_karuzeli_1_na_stronie_o_inwestycji', 'text', 'treść', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(216, 'zdjecie_sekcji_2_na_stronie_o_inwestycji', 'photo', '169736365377.jpg', '2023-09-08 17:30:18', '2023-10-15 09:54:13'),
(217, 'alt_zdjecie_sekcji_2_na_stronie_o_inwestycji', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(218, 'naglowek_sekcji_2_na_stronie_o_inwestycji', 'text', 'ARCHITEKTURA UBRANA W KOLORY', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(219, 'paragraf_sekcji_2_na_stronie_o_inwestycji', 'text', 'Elewacja budynku to istotny element, który stanowi o samym projekcie oraz wykonaniu budynku. Luxor Residence stawia na odcienie szarości, biel oraz naturalne drewno. To powoduje, że całość idealnie wpasowuje się w otoczenie, wygląda lekko i przyjemnie oraz koi zmysły.', '2023-09-08 17:30:18', '2023-10-02 11:10:47'),
(220, 'naglowek_karuzeli_2_na_stronie_o_inwestycji', 'text', 'Poznaj lepiej inwestycję osiedle sądowe', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(221, 'paragraf_karuzeli_2_na_stronie_o_inwestycji', 'text', 'Budynek Apartamenty Rzuty 3D Dlaczego warto?', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(222, 'zdjecie_1_karuzeli_2_na_stronie_o_inwestycji', 'photo', '1.jpg', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(223, 'zdjecie_2_karuzeli_2_na_stronie_o_inwestycji', 'photo', '169736368216.jpg', '2023-09-08 17:30:18', '2023-10-15 09:54:42'),
(224, 'zdjecie_3_karuzeli_2_na_stronie_o_inwestycji', 'photo', '169720708861.jpg', '2023-09-08 17:30:18', '2023-10-13 14:24:48'),
(225, 'zdjecie_4_karuzeli_2_na_stronie_o_inwestycji', 'photo', '169720710924.jpg', '2023-09-08 17:30:18', '2023-10-13 14:25:09'),
(226, 'zdjecie_5_karuzeli_2_na_stronie_o_inwestycji', 'photo', '169720712844.jpg', '2023-09-08 17:30:18', '2023-10-13 14:25:28'),
(227, 'zdjecie_6_karuzeli_2_na_stronie_o_inwestycji', 'photo', '169720716732.jpg', '2023-09-08 17:30:18', '2023-10-13 14:26:07'),
(228, 'zdjecie_7_karuzeli_2_na_stronie_o_inwestycji', 'photo', '169720718794.jpg', '2023-09-08 17:30:18', '2023-10-13 14:26:27'),
(229, 'zdjecie_8_karuzeli_2_na_stronie_o_inwestycji', 'photo', '169720720323.jpg', '2023-09-08 17:30:18', '2023-10-13 14:26:43'),
(230, 'zdjecie_9_karuzeli_2_na_stronie_o_inwestycji', 'photo', '16972072202.jpg', '2023-09-08 17:30:18', '2023-10-13 14:27:00'),
(231, 'zdjecie_10_karuzeli_2_na_stronie_o_inwestycji', 'photo', '169736372254.jpg', '2023-09-08 17:30:18', '2023-10-15 09:55:22'),
(232, 'alt_zdjecie_1_karuzeli_2_na_stronie_o_inwestycji', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(233, 'alt_zdjecie_2_karuzeli_2_na_stronie_o_inwestycji', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(234, 'alt_zdjecie_3_karuzeli_2_na_stronie_o_inwestycji', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(235, 'alt_zdjecie_4_karuzeli_2_na_stronie_o_inwestycji', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(236, 'alt_zdjecie_5_karuzeli_2_na_stronie_o_inwestycji', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(237, 'alt_zdjecie_6_karuzeli_2_na_stronie_o_inwestycji', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(238, 'alt_zdjecie_7_karuzeli_2_na_stronie_o_inwestycji', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(239, 'alt_zdjecie_8_karuzeli_2_na_stronie_o_inwestycji', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(240, 'alt_zdjecie_9_karuzeli_2_na_stronie_o_inwestycji', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(241, 'alt_zdjecie_10_karuzeli_2_na_stronie_o_inwestycji', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(242, 'naglowek_sekcji_ostatniej_na_stronie_o_inwestycji', 'text', 'Atrakcje w okolicy inwestycji', '2023-09-08 17:30:18', '2023-09-21 12:18:52'),
(243, 'paragraf_sekcji_ostatniej_na_stronie_o_inwestycji', 'text', 'Apartamenty Luxor Residence umiejscowione są w Piekarach Śląskich – mieście, które z pozoru wydaje się jedną z wielu lokalizacji na Górnym Śląsku. Rzeczywistość potrafi jednak zaskoczyć, ponieważ jego położenie oraz lokalizacja inwestycji dają dostęp do bogatego zaplecza terenów zielonych, tras rowerowych, zbiorników wodnych oraz zabytków wpisanych na listę UNESCO.', '2023-09-08 17:30:18', '2023-09-21 12:19:03'),
(244, 'zdjecie_1_sekcji_ostatniej_na_stronie_o_inwestycji', 'photo', '169626169081.jpg', '2023-09-08 17:30:18', '2023-10-02 15:48:10'),
(245, 'alt_zdjecie_1_sekcji_ostatniej_na_stronie_o_inwestycji', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(246, 'naglowek_zdjecie_1_sekcji_ostatniej_na_stronie_o_inwestycji', 'text', 'Rowerowe serce Śląska', '2023-09-08 17:30:18', '2023-09-21 12:22:07'),
(247, 'podtytul_zdjecie_1_sekcji_ostatniej_na_stronie_o_inwestycji', 'text', 'Leśno Rajza, Rezerwat Segiet, Świerklaniec', '2023-09-08 17:30:18', '2023-10-02 11:23:35'),
(248, 'paragraf_zdjecie_1_sekcji_ostatniej_na_stronie_o_inwestycji', 'text', 'Trudno o lepszą lokalizację dla rowerzystów. Osiedle Luxor Residence otaczają liczne tereny pokryte malowniczymi trasami rowerowymi. W bezpośrednim sąsiedztwie znajduje się Rezerwat Segiet, czy Srebrna Góra, a dziesiątki kilometrów ścieżek ciągnie się przez lasy otaczające pobliski Świerklaniec. To właśnie tutaj swój początek ma sieć ścieżek rowerowych „Leśno Rajza”, którą można dojechać m.in. do Koszęcina, Brynka czy kolorowych jeziorek powstałych po zalaniu kopalni Bibiela. Raptem dwa obroty korby dzielą nas od klimatycznych Tarnowskich Gór i słynących z koni Zbrosławic. Trasy rowerowe oferują szutry w najlepszej jakości, leśne urokliwe ścieżki oraz nadwodne widoki, które dostarczają zapierających dech w piersiach zachodów słońca.', '2023-09-08 17:30:18', '2023-09-21 12:19:52'),
(249, 'zdjecie_2_sekcji_ostatniej_na_stronie_o_inwestycji', 'photo', '16962617137.jpg', '2023-09-08 17:30:18', '2023-10-02 15:48:33'),
(250, 'alt_zdjecie_2_sekcji_ostatniej_na_stronie_o_inwestycji', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:18', '2023-09-08 17:30:18');
INSERT INTO `settings` (`id`, `place`, `type`, `content`, `created_at`, `updated_at`) VALUES
(251, 'naglowek_zdjecie_2_sekcji_ostatniej_na_stronie_o_inwestycji', 'text', 'Śląskie mazury', '2023-09-08 17:30:18', '2023-09-21 12:23:22'),
(252, 'podtytul_zdjecie_2_sekcji_ostatniej_na_stronie_o_inwestycji', 'text', 'Chechło-Nakło, Kozłowa Góra, Rogoźnik', '2023-09-08 17:30:18', '2023-10-02 11:24:00'),
(253, 'paragraf_zdjecie_2_sekcji_ostatniej_na_stronie_o_inwestycji', 'text', 'Kto by pomyślał, że mieszkając w centrum Śląska, raptem kilka kroków od domu znaleźć można tyle pięknych jezior. Zbiorniki w Rogoźniku, Kozłowej Górze i Chechle-Nakle to miejsca, w których można korzystać z czystej wody, piasku oraz uprawiać ulubione sporty wodne. Żagle, SUP-y, kajaki, rowerki wodne, morsowanie – to wszystko jest w zasięgu ręki mieszkańców osiedla Luxor Residence.', '2023-09-08 17:30:18', '2023-09-21 12:23:34'),
(254, 'zdjecie_3_sekcji_ostatniej_na_stronie_o_inwestycji', 'photo', '169626172817.jpg', '2023-09-08 17:30:18', '2023-10-02 15:48:48'),
(255, 'alt_zdjecie_3_sekcji_ostatniej_na_stronie_o_inwestycji', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(256, 'naglowek_zdjecie_3_sekcji_ostatniej_na_stronie_o_inwestycji', 'text', 'Zabytki poprzemysłowe i lista UNESCO', '2023-09-08 17:30:18', '2023-09-21 12:24:08'),
(257, 'podtytul_zdjecie_3_sekcji_ostatniej_na_stronie_o_inwestycji', 'text', 'Sztolnia Czarnego Pstrąga, Kopalnia Srebra, EC Szpombierki', '2023-09-08 17:30:18', '2023-10-02 11:24:37'),
(258, 'paragraf_zdjecie_3_sekcji_ostatniej_na_stronie_o_inwestycji', 'text', 'Piekary Śląskie to samo serce Śląska. Oznacza to dostęp do wielu ciekawych zabytków przemysłowych. W sąsiednich Tarnowskich Górach znajduje się Sztolnia Czarnego Pstrąga i Kopalnia Srebra wpisana na listę światowego dziedzictwa UNESCO. Odwiedzając Bytom, można skorzystać z Górnośląskiej Kolejki Wąskotorowej czy odwiedzić unikalny kompleks EC Szombierki.', '2023-09-08 17:30:18', '2023-09-21 12:24:25'),
(259, 'zdjecie_4_sekcji_ostatniej_na_stronie_o_inwestycji', 'photo', '169626174820.jpg', '2023-09-08 17:30:18', '2023-10-02 15:49:08'),
(260, 'alt_zdjecie_4_sekcji_ostatniej_na_stronie_o_inwestycji', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(261, 'naglowek_zdjecie_4_sekcji_ostatniej_na_stronie_o_inwestycji', 'text', 'Raj dla miłośników aktywnego życia', '2023-09-08 17:30:18', '2023-10-02 11:25:35'),
(262, 'podtytul_zdjecie_4_sekcji_ostatniej_na_stronie_o_inwestycji', 'text', 'Śląski Ogród Botaniczny, Żabie Doły, Kopiec Wyzwolenia', '2023-09-08 17:30:18', '2023-10-02 11:27:07'),
(263, 'paragraf_zdjecie_4_sekcji_ostatniej_na_stronie_o_inwestycji', 'text', 'Kopiec Wyzwolenia w Piekarach Śląskich, Śląski Ogród Botaniczny i Park Góra Powstańców Śląskich w Radzionkowie, Żabie Doły w Bytomiu, park w Świerklańcu, jezioro Chechło-Nakło to tylko kilka z licznych miejsc, w których można spędzić czas na łonie natury, odpocząć lub po prostu odbyć poranny jogging. Poza tym w bezpośrednim sąsiedztwie znajdują się liczne pola i lasy, które dają możliwość obcowania z przyrodą.', '2023-09-08 17:30:18', '2023-09-21 12:25:15'),
(264, 'zdjecie_5_sekcji_ostatniej_na_stronie_o_inwestycji', 'photo', 'sz5.jpg', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(265, 'alt_zdjecie_5_sekcji_ostatniej_na_stronie_o_inwestycji', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(266, 'naglowek_zdjecie_5_sekcji_ostatniej_na_stronie_o_inwestycji', 'text', 'OŚRODEK REKREACYJNO-NARCIARSKI DĘBOWIEC', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(267, 'podtytul_zdjecie_5_sekcji_ostatniej_na_stronie_o_inwestycji', 'text', '', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(268, 'paragraf_zdjecie_5_sekcji_ostatniej_na_stronie_o_inwestycji', 'text', 'Stok Dębowca to idealne całorocznie wykorzystane miejsce na piesze wędrówki, spacery a dla wygodnych na górę można dostać się kolejką kanapową. Zimą to miejsce zmienia się w doskonały i nowoczesny kompleks narciarski z trasą o długości 600 m gdzie znajdziesz mały wyciąg zaczepowy dla dzieci, trasę do nauki jazdy na nartach. Naśnieżanie, ratrakowanie zapewnia świetne warunki do jazdy na nartach, desce snowboardowej a wieczorne oświetlenie doda wyjątkowego klimatu, co idealnie się łączy z dużą dawką niezapomnianych widoków i podziwiania panoramy regionu. Nieopodal sprawdź również Park Linowy, plac zabaw dla dzieci wyposażony m.in. w piramidę wspinaczkową, huśtawki, skałkę i ściankę wspinaczkową, karuzelę, plac ćwiczeń.', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(269, 'zdjecie_6_sekcji_ostatniej_na_stronie_o_inwestycji', 'photo', 'sz6.jpg', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(270, 'alt_zdjecie_6_sekcji_ostatniej_na_stronie_o_inwestycji', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(271, 'naglowek_zdjecie_6_sekcji_ostatniej_na_stronie_o_inwestycji', 'text', 'WORKATION CZY HOME OFFICE', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(272, 'podtytul_zdjecie_6_sekcji_ostatniej_na_stronie_o_inwestycji', 'text', 'IDEALNE MIEJSCE DO PRACY ZDALNEJ', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(273, 'paragraf_zdjecie_6_sekcji_ostatniej_na_stronie_o_inwestycji', 'text', 'Czy zdarzyło Ci się spakować komputer, telefony do plecaków i wyjechać za miasto, by pracować zdalnie w otoczeniu natury? Przy innym stole, w innym wnętrzu, z nowym inspirującym widokiem za oknem, z możliwością napicia się kawy z innej filiżanki a także wyjścia na prywatny balkon – wtedy praca jest chyba znacznie przyjemniejsza. Nie zajmuje Nam przecież całego dnia ... Apartamenty Szyndzielnia to idealne miejsce na krótszą i dłuższą chwilę. Nowe, inne, bezpieczne i wygodne miejsce do pracy zdalnej, dzięki światłowodom i połączeniu wi-fi w każdym apartamencie. To z pewnością sprzyja osiągnięciu dobrego samopoczucia, większej motywacji oraz wewnętrznej równowagi. Po zamknięciu laptopa i wyciszeniu telefonu służbowego zaczyna się relaks. Robisz co chcesz, idziesz gdzie chcesz, niech praca będzie przyjemnością a nie obowiązkiem ... więc połącz przyjemne z pożytecznym.', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(274, 'zdjecie_7_sekcji_ostatniej_na_stronie_o_inwestycji', 'photo', 'sz7.jpg', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(275, 'alt_zdjecie_7_sekcji_ostatniej_na_stronie_o_inwestycji', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(276, 'naglowek_zdjecie_7_sekcji_ostatniej_na_stronie_o_inwestycji', 'text', 'UKOJENIE W NUTACH', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(277, 'podtytul_zdjecie_7_sekcji_ostatniej_na_stronie_o_inwestycji', 'text', 'CAVATINA HALL SALA KONCERTOWA', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(278, 'paragraf_zdjecie_7_sekcji_ostatniej_na_stronie_o_inwestycji', 'text', 'Cavatina Hall to nowy, nowoczesny i futurystyczny budynek sali koncertowej zlokalizowany w centrum Bielska-Białej z doskonałym dostępem do komunikacji miejskiej. Masz ochotę na doznania muzyczne wysokiej klasy ? Czekają Cię wspaniałe koncerty, niesamowici wykonawcy, muzyka pobudzająca zmysły i emocje, a to wszystko w perfekcyjnie zaprojektowanych nietuzinkowych przestrzeniach. Miejsce gwarantujące doznania zarówno dla melomanów jak i miłośników architektury. Z pewnością to jedna z najnowszych i najlepszych Sal Koncertowych w Polsce. Wypada doświadczyć całkiem nowych doznań muzycznych ...', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(279, 'zdjecie_8_sekcji_ostatniej_na_stronie_o_inwestycji', 'photo', 'sz8.jpg', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(280, 'alt_zdjecie_8_sekcji_ostatniej_na_stronie_o_inwestycji', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(281, 'naglowek_zdjecie_8_sekcji_ostatniej_na_stronie_o_inwestycji', 'text', 'Cygański las', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(282, 'podtytul_zdjecie_8_sekcji_ostatniej_na_stronie_o_inwestycji', 'text', '', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(283, 'paragraf_zdjecie_8_sekcji_ostatniej_na_stronie_o_inwestycji', 'text', 'Od lat jest popularnym miejscem wypoczynku mieszkańców Bielska, z szerokimi ścieżkami rowerowymi i szlakami turystycznymi. Dogodny dojazd, walory przyrodnicze obszaru i dobrze wytyczone trasy spacerowe czynią z Cygańskiego Lasu jeden z najczęściej odwiedzanych „naturalnych” rejonów miasta. Te swoiste zalety przyczyniły się do powstania ścieżki, wzdłuż której opisano odcinki oraz stanowiska dydaktyczne.', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(284, 'zdjecie_9_sekcji_ostatniej_na_stronie_o_inwestycji', 'photo', 'sz9.jpg', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(285, 'alt_zdjecie_9_sekcji_ostatniej_na_stronie_o_inwestycji', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(286, 'naglowek_zdjecie_9_sekcji_ostatniej_na_stronie_o_inwestycji', 'text', 'Najlepsza inwestycja', '2023-09-08 17:30:18', '2023-09-29 17:55:01'),
(287, 'podtytul_zdjecie_9_sekcji_ostatniej_na_stronie_o_inwestycji', 'text', '', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(288, 'paragraf_zdjecie_9_sekcji_ostatniej_na_stronie_o_inwestycji', 'text', 'Sytuacja gospodarcza powoduje, że nieruchomości to najpewniejsza i najlepsza inwestycja. Doskonała lokalizacja, nowoczesny projekt, najwyższa jakość wykonania oraz wysoki standard, na który składają się m.in. windy, ogrzewanie pompami ciepła, komórki lokatorskie oraz garaże podziemne – to gwarancja pomyślnej inwestycji.', '2023-09-08 17:30:18', '2023-09-29 17:55:17'),
(289, 'zdjecie_10_sekcji_ostatniej_na_stronie_o_inwestycji', 'photo', 'sz10.jpg', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(290, 'alt_zdjecie_10_sekcji_ostatniej_na_stronie_o_inwestycji', 'text', 'Opis zdjęcia w celu pozycjonowania +/- 4-8 słów', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(291, 'naglowek_zdjecie_10_sekcji_ostatniej_na_stronie_o_inwestycji', 'text', 'ZIELONA OKOLICA', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(292, 'podtytul_zdjecie_10_sekcji_ostatniej_na_stronie_o_inwestycji', 'text', '', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(293, 'paragraf_zdjecie_10_sekcji_ostatniej_na_stronie_o_inwestycji', 'text', 'Inwestycja zlokalizowana jest w Otulinie Parku Krajobrazowo-Przyrodniczego Beskidu Śląskiego. Niesamowicie widokowej, malowniczej i najlepszej dzielnicy miasta, w bezpośrednim sąsiedztwie Szyndzielni i stoku Dębowca, otoczona zielenią pobliskich gór, terenami rekreacyjnymi, trasami spacerowymi, rowerowymi. Okolica wręcz zaprasza do aktywnego wypoczynku, spacerów z rodziną, górskich wędrówek i sportów bez względu na porę roku.', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(294, 'naglowek_na_stronie_o_nas', 'text', 'O inwestorze', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(295, 'paragraf_na_stronie_o_nas', 'text', 'DGG Development to spółka założona przez osoby mieszkające w Piekarach Śląskich, których kilkunastoletnie doświadczenie w branży nieruchomości czyni profesjonalistami na rynku. W naszym portfolio znajduje się kilka udanych inwestycji deweloperskich. Poza tym przeprowadziliśmy dziesiątki udanych prac wykończeniowych, modernizacji i remontów dla wymagających klientów.', '2023-09-08 17:30:18', '2023-10-02 11:17:04'),
(296, 'zdjecie_na_stronie_o_nas', 'photo', 'logo2.png', '2023-09-08 17:30:18', '2023-09-08 17:30:18'),
(297, 'alt_zdjecie_na_stronie_o_nas', 'text', 'DGG Development to spółka założona przez osoby mieszkające w Piekarach Śląskich. Nasza najnowsza inwestycja – Luxor Residence – to perła w naszym portfolio', '2023-09-08 17:30:18', '2023-10-02 11:20:21'),
(298, 'paragraf_sekcji_2_na_stronie_o_inwestycji_mapa', 'text', 'Architektura budynku oraz jego kolorystyka muszą pasować do otoczenia. Mówimy tutaj o pozostałej zabudowie oraz terenach otaczających osiedle Luxor Residence. Wybrany przez nas projekt wtapia się w okolicę, idealnie ją uzupełniając i porządkując. Luxor Residence to powiew dyskretnego luksusu współgrającego z tym, co nasi projektanci zastali w miejscu inwestycji.', NULL, '2023-10-02 11:10:56'),
(299, 'naglowek_sekcji_2_na_stronie_o_inwestycji_mapa', 'text', 'Lokalizacja i otoczenie', NULL, '2023-10-02 11:11:49'),
(300, 'naglowek_4_karuzela_1_na_stronie_glownej', 'text', 'naglowek_4_karuzela_1_na_stronie_glownej', NULL, NULL),
(301, 'paragraf_4_karuzela_1_na_stronie_glownej', 'text', 'paragraf_4_karuzela_1_na_stronie_glownej', NULL, NULL),
(302, 'naglowek_5_karuzela_1_na_stronie_glownej', 'text', 'naglowek_5_karuzela_1_na_stronie_glownej', NULL, NULL),
(303, 'paragraf_5_karuzela_1_na_stronie_glownej', 'text', 'paragraf_5_karuzela_1_na_stronie_glownej', NULL, NULL),
(304, 'naglowek_6_karuzela_1_na_stronie_glownej', 'text', 'naglowek_6_karuzela_1_na_stronie_glownej', NULL, NULL),
(305, 'paragraf_6_karuzela_1_na_stronie_glownej', 'text', 'paragraf_6_karuzela_1_na_stronie_glownej', NULL, NULL),
(306, 'zdjecie_4_karuzela_1_na_stronie_glownej', 'photo', '169739302037.jpg', NULL, '2023-10-15 16:03:40'),
(307, 'zdjecie_5_karuzela_1_na_stronie_glownej', 'photo', '169739304919.jpg', NULL, '2023-10-15 16:04:09'),
(308, 'zdjecie_6_karuzela_1_na_stronie_glownej', 'photo', '169739308541.jpg', NULL, '2023-10-15 16:04:45'),
(309, 'strona_kontaktowa_napis_główny_ciemny', 'text', 'biuro', NULL, '2023-10-15 19:35:33'),
(310, 'strona_kontaktowa_napis_główny_jasny', 'text', 'sprzedaży', NULL, '2023-10-15 19:35:21'),
(311, 'strona_kontaktowa_ulica', 'text', 'ul.Sienkiewicza 1', NULL, NULL),
(312, 'strona_kontaktowa_miasto', 'text', '41-940 Piekary Śląskie', NULL, NULL),
(313, 'strona_kontaktowa_email', 'text', 'biurodgg@gmail.com', NULL, NULL),
(314, 'strona_kontaktowa_godziny_otwarcia_linia_1', 'text', 'poniedziałek: 9.00-18.00', NULL, NULL),
(315, 'strona_kontaktowa_godziny_otwarcia_linia_2', 'text', 'wtorek - piątek: 9.00-17.00', NULL, NULL),
(316, 'strona_kontaktowa_imie_i_nazwisko', 'text', 'Patryk Gogacz', NULL, NULL),
(317, 'strona_kontaktowa_dział', 'text', 'DZIAŁ SPRZEDAŻY', NULL, NULL),
(318, 'strona_kontaktowa_email_działu', 'text', 'sprzedazdgg@gmail.com', NULL, NULL),
(319, 'strona_kontaktowa_telefon_działu', 'text', '503517499', NULL, NULL),
(320, 'strona_kontaktowa_zdjecie', 'photo', 'partykgogacz.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Karol Wiśniewski', 'karol.wisniewski2901@gmail.com', NULL, '$2y$10$AS9OLjbugIM.yHIoGMEBg.qvDKFpIuDgN/UgyCnGSbp9qpA2dxi4.', NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-03 13:20:29', '2023-09-03 13:20:29'),
(2, 'Administrator', 'admin@admin', NULL, '$2y$10$EJ8N1kHiaerqJWwve5MKbeLxya8Gr.GuedgVyG0JNtxnN/OuxD88K', NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-03 13:23:05', '2023-09-03 13:23:05'),
(3, 'Bartek', 'bartek@bartek', NULL, '$2y$10$nLR9lQdms6/NG71EY8kzlOtjaWgtwdJGlK2yazjbkQySwakOVy5du', NULL, NULL, NULL, 'zpCZRv7l4QclioCXz99Q0jc6IREDFr9bJ5ty8iSdvYGhsWYYM32cQvZ1MHY3', NULL, NULL, '2023-09-03 13:24:21', '2023-09-03 13:24:21');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeksy dla tabeli `flats`
--
ALTER TABLE `flats`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `floors`
--
ALTER TABLE `floors`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeksy dla tabeli `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeksy dla tabeli `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeksy dla tabeli `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `flats`
--
ALTER TABLE `flats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT dla tabeli `floors`
--
ALTER TABLE `floors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT dla tabeli `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=321;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
