-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июл 05 2024 г., 15:33
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `thefinals`
--

-- --------------------------------------------------------

--
-- Структура таблицы `contestants`
--

CREATE TABLE `contestants` (
  `login` text NOT NULL,
  `nickname` text NOT NULL,
  `password` text NOT NULL,
  `avatar` text NOT NULL,
  `sponsor` text NOT NULL,
  `loadout` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `contestants`
--

INSERT INTO `contestants` (`login`, `nickname`, `password`, `avatar`, `sponsor`, `loadout`) VALUES
('0', '', '0', 'avatars/THE FINALS ｜ Season 2 ｜ Trailer.jpg', '', ''),
('1', 'ghbdtn', '1', 'avatars/cont_img.jpg', 'icons/im3.png', 'loadouts/lo14.png'),
('2', '2', '2', 'avatars/thefinals.jpg', 'icons/im8.png', 'loadouts/lo12.png'),
('3', '3', '3', '', '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `contestants`
--
ALTER TABLE `contestants`
  ADD PRIMARY KEY (`login`(20));
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
