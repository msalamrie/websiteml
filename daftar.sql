-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 26 Nov 2024 pada 10.18
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daftar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `players`
--

CREATE TABLE `players` (
  `id` int NOT NULL,
  `team_id` int DEFAULT NULL,
  `player_name` varchar(255) NOT NULL,
  `game_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `players`
--

INSERT INTO `players` (`id`, `team_id`, `player_name`, `game_id`) VALUES
(1, 1, 'juki', '123'),
(2, 1, 'iki', '321'),
(3, 1, 'ama', '123'),
(4, 1, 'haha', '1234'),
(5, 2, 'juki', '123'),
(6, 2, 'iki', '321'),
(7, 2, 'ama', '123'),
(8, 2, 'haha', '1234'),
(9, 3, 'uki', '321'),
(10, 4, 'awi', '5421'),
(11, 4, 'ujan', '321'),
(12, 5, 'awi', '5421'),
(13, 5, 'ujan', '321'),
(14, 6, 'wa', '123'),
(15, 7, 'juki', '8787');

-- --------------------------------------------------------

--
-- Struktur dari tabel `teams`
--

CREATE TABLE `teams` (
  `id` int NOT NULL,
  `team_name` varchar(255) NOT NULL,
  `team_logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `teams`
--

INSERT INTO `teams` (`id`, `team_name`, `team_logo`) VALUES
(1, 'eeueue', 'uploads/logos/IMG-20240916-WA0027.jpg'),
(2, 'eeueue', 'uploads/logos/IMG-20240916-WA0027.jpg'),
(3, 'serigala', 'uploads/logos/IMG-20241026-WA0021.jpg'),
(4, 'jjuu', 'uploads/logos/IMG-20241027-WA0019.jpg'),
(5, 'jjuu', 'uploads/logos/IMG-20241027-WA0019.jpg'),
(6, 'kklu', 'uploads/logos/IMG-20241026-WA0015.jpg'),
(7, '123', 'uploads/logos/123.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'uki', 'marzukalamrie4@gmail.com', '$2y$10$yx4.xy3ITFKSaIU.Z7.C8uWEZyX4OoHlIf5RtsMZXbhS5QNVS2EBW', '2024-11-16 02:06:56'),
(2, 'juki', 'marzukalamrie@yahoo.com', '$2y$10$41RQ3VynBPwP15T1x3ZxrOFhIWx.poQFwyw5jNm7kmDiedJP1wN12', '2024-11-16 02:23:46');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`),
  ADD KEY `team_id` (`team_id`);

--
-- Indeks untuk tabel `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `players`
--
ALTER TABLE `players`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `players`
--
ALTER TABLE `players`
  ADD CONSTRAINT `players_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
