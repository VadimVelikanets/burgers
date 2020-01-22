-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Янв 22 2020 г., 23:42
-- Версия сервера: 10.4.10-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `users`
--

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id_order` int(12) NOT NULL,
  `id_users` int(12) NOT NULL,
  `street` varchar(255) NOT NULL,
  `home` int(12) NOT NULL,
  `part` int(12) NOT NULL,
  `appt` int(12) NOT NULL,
  `floor` int(12) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id_order`, `id_users`, `street`, `home`, `part`, `appt`, `floor`, `comment`) VALUES
(1, 53, 'ул Одинцова 69', 61, 76, 67, 676, 'Pizza'),
(2, 53, 'ул Одинцова 69', 61, 78, 787, 89, 'burger'),
(3, 53, 'ул Одинцова 69', 61, 78, 89, 88, 'buter'),
(4, 53, 'ул Одинцова 69', 61, 78, 89, 88, 'buter'),
(5, 54, 'ул Одинцова 89', 8, 78, 78, 78, 'Hello'),
(6, 53, 'ул Одинцова 69', 8, 89, 9, 89, 'buy\r\n'),
(7, 53, 'ул Одинцова 69', 61, 78, 787, 7, 'cola'),
(8, 53, 'ул Одинцова 69', 61, 78, 787, 89, 'rolton'),
(9, 55, 'ул Одинцова 69', 61, 86, 5, 5, 'ваивав'),
(10, 55, 'ул Одинцова 69', 61, 86, 5, 5, 'ваивав'),
(11, 53, 'ул Одинцова 69', 8, 78, 787, 7, 'фффффф'),
(12, 53, 'ул Одинцова 69', 8, 78, 89, 7, 'гшгшгшгш'),
(13, 53, 'ул Одинцова 69', 8, 78, 89, 7, 'гшгшгшгш'),
(14, 53, 'ул Одинцова 69', 61, 78, 787, 7, 'eat'),
(15, 53, 'ул Одинцова 69', 61, 78, 78, 88, '123'),
(16, 54, 'ул Одинцова 69', 61, 86, 78, 5, 'opopop'),
(17, 53, 'ул Одинцова 89', 89, 78, 98, 898, '8778979'),
(18, 53, 'ул Одинцова 89', 89, 78, 98, 898, '8778979'),
(19, 53, 'ул Одинцова 89', 89, 78, 98, 898, '8778979'),
(20, 53, 'ул Одинцова 89', 89, 78, 98, 898, '8778979'),
(21, 53, 'ул Одинцова 69', 898, 898, 898, 898, 'hhhhhhh'),
(22, 56, 'ул Одинцова 69', 0, 76, 98, 98, 'jkjhjh'),
(23, 53, 'ул Одинцова 69', 61, 78, 787, 7, 'iiiiiiiii'),
(24, 56, 'ул Одинцова 69', 8, 86, 98, 5, 'щзщшщшщ'),
(25, 56, 'ул Одинцова 69', 89, 89, 67, 88, 'енен'),
(26, 56, 'ул Одинцова 69', 89, 89, 67, 88, 'енен'),
(27, 56, 'ул Одинцова 69', 89, 89, 67, 88, 'енен'),
(28, 56, 'ул Одинцова 69', 89, 89, 67, 88, 'енен'),
(29, 56, 'ул Одинцова 69', 0, 89, 5, 898, '6tyt'),
(30, 56, 'ул Одинцова 69', 61, 78, 787, 7, 'gsgag'),
(31, 56, 'ул Одинцова 69', 61, 78, 787, 7, 'gsgag'),
(32, 56, 'ул Одинцова 69', 61, 78, 787, 7, 'hjhkhk');

-- --------------------------------------------------------

--
-- Структура таблицы `orders2`
--

CREATE TABLE `orders2` (
  `id_order` int(12) NOT NULL,
  `id_users` int(12) NOT NULL,
  `street` varchar(12) NOT NULL,
  `house` int(12) NOT NULL,
  `corps` int(12) NOT NULL,
  `flat` int(12) NOT NULL,
  `flour` int(12) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `orders2`
--

INSERT INTO `orders2` (`id_order`, `id_users`, `street`, `house`, `corps`, `flat`, `flour`, `comment`) VALUES
(1, 42, 'ул Одинцова ', 61, 89, 89, 89, 'iuu');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `Id_users` int(12) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`Id_users`, `name`, `email`, `phone`) VALUES
(53, 'Вадим', 'velikanets@mail.ru', 375),
(54, 'Katya', 'vadosvelik@gmail.com', 2147483647),
(55, 'Вадим', 'abc@mail.ru', 375),
(56, 'Вадим', 'ludvelik67@gmail.com', 375);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_users` (`id_users`);

--
-- Индексы таблицы `orders2`
--
ALTER TABLE `orders2`
  ADD PRIMARY KEY (`id_order`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id_users`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT для таблицы `orders2`
--
ALTER TABLE `orders2`
  MODIFY `id_order` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `Id_users` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`Id_users`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
