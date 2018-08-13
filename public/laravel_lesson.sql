-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 14 2018 г., 02:15
-- Версия сервера: 5.7.20
-- Версия PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `laravel_lesson`
--

-- --------------------------------------------------------

--
-- Структура таблицы `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `introtext` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `brands`
--

INSERT INTO `brands` (`id`, `title`, `alias`, `introtext`, `created_at`, `updated_at`) VALUES
(1, 'Adidas', 'Adidas', 'Немецкий промышленный концерн, специализирующийся на выпуске спортивной обуви, одежды и инвентаря.', NULL, NULL),
(2, 'Armani', 'Armani', 'Итальянская компания, специализирующаяся на производстве одежды и различных аксессуаров.', NULL, NULL),
(3, 'Atlas for Men', 'Atlas for Men', 'Каталог одежды Atlas For Men, созданный в 1999 году, предлагает мужчинам, любящим отдых на свежем воздухе, коллекцию одежды и аксессуаров для прогулок и занятий спортом по выгодным ценам', NULL, NULL),
(4, 'Henderson', 'Henderson', 'Дом моды HENDERSON более 20 лет предлагает мужчинам элегантную и стильную одежду для работы и отдыха. Сегодня HENDERSON присутствует в 160 крупнейших торговых центрах, расположенных более чем в 55 городах России.', NULL, NULL),
(5, 'Hugo Boss', 'Hugo Boss', 'немецкая компания-производитель модной одежды. Штаб-квартира — в городе Метцинген (земля Баден-Вюртемберг, Германия).', NULL, NULL),
(6, 'Oodji', 'Oodji', 'Российская компания, управляющая сетью магазинов молодёжной одежды. Основана в 1998 году в Санкт-Петербурге.', NULL, NULL),
(7, 'Puma', 'Puma', 'промышленная компания Германии, специализирующаяся на выпуске спортивной обуви, одежды, инвентаря и парфюмерии', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`, `alias`, `description`, `created_at`, `updated_at`) VALUES
(4, 'Рубашки', 'Rubashki', 'Как правило, состоит из воротника, полочек, спинки, кокетки, рукавов, ластовицы (треугольный кусок ткани, вшитый у основания рукава, между полочкой и спинкой). Различают рубашки с коротким (до локтя) и длинным (до запястья) рукавом.', NULL, NULL),
(5, 'Куртки', 'Kurtki', 'Вид одежды, предназначенной для защиты от ветра, холода и дождя', NULL, NULL),
(6, 'Футболки', 'Futbolki', 'Футболки - это одежда, которая подходит каждому. К больщому разнообразию цветов и дизайнов добавляются различные актуальные принты и мотивы. Наши футболки подчеркнут Вашу индивидуальность', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `introtext` mediumtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `menus`
--

INSERT INTO `menus` (`id`, `title`, `path`, `introtext`, `created_at`, `updated_at`) VALUES
(3, 'Главная', '/', 'Главная страница сайта с товарами', NULL, NULL),
(4, 'Новости', '/dashboard/news', 'Страница с новостями', NULL, NULL),
(5, 'Товары', '/dashboard/products', 'Редактирование товаров', NULL, NULL),
(6, 'Категории', '/dashboard/category', 'Редактирование категорий', NULL, NULL),
(7, 'Бренды', '/dashboard/brands', 'Редактирование брендов', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_07_21_141819_create_categories_table', 1),
(5, '2018_07_21_163414_create_news_table', 2),
(6, '2018_07_21_165043_create_brands_table', 3),
(7, '2018_07_21_165549_create_products_table', 4),
(8, '2018_07_21_171255_create_orders_table', 5),
(11, '2018_07_21_173017_add_news_columns', 6),
(12, '2018_07_21_185022_add_news_img_columns', 6),
(13, '2018_07_21_190551_change_products_add_column', 7),
(14, '2018_07_24_030411_create_menus_table', 8),
(15, '2018_08_01_222523_add_products_brands_column', 9),
(16, '2018_08_08_232650_change_orders_table', 10);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `introtext` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'noimage.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `alias`, `introtext`, `text`, `created_at`, `updated_at`, `user_id`, `img`) VALUES
(24, 'Супер новость!!!', '05-08-2018-super-novost', 'Наконец-то появилась.....', 'мсчяммм ям мяыв вым м амм 4м4335ее3е  еку пку п354 ее4 авымыв уа 3а43 3 ававываа 44', '2018-08-05 18:38:19', '2018-08-05 18:38:19', 1, '1533505098_3.jpg'),
(25, 'Новая мода', '05-08-2018-novaya-moda', 'fdf', 'dsfffffffffffffffffffffffffffffffs  fddssssssssssssssssssssssssssssss dsfffffffffffffffffffffffffffffffs  fddssssssssssssssssssssssssssssss dsfffffffffffffffffffffffffffffffs  fddssssssssssssssssssssssssssssss dsfffffffffffffffffffffffffffffffs  fddssssssssssssssssssssssssssssss dsfffffffffffffffffffffffffffffffs  fddssssssssssssssssssssssssssssss dsfffffffffffffffffffffffffffffffs  fddssssssssssssssssssssssssssssss dsfffffffffffffffffffffffffffffffs  fddssssssssssssssssssssssssssssss dsfffffffffffffffffffffffffffffffs  fddssssssssssssssssssssssssssssss dsfffffffffffffffffffffffffffffffs  fddssssssssssssssssssssssssssssss dsfffffffffffffffffffffffffffffffs  fddssssssssssssssssssssssssssssss dsfffffffffffffffffffffffffffffffs  fddssssssssssssssssssssssssssssss dsfffffffffffffffffffffffffffffffs  fddssssssssssssssssssssssssssssss dsfffffffffffffffffffffffffffffffs  fddssssssssssssssssssssssssssssss dsfffffffffffffffffffffffffffffffs  fddssssssssssssssssssssssssssssss dsfffffffffffffffffffffffffffffffs  fddssssssssssssssssssssssssssssss dsfffffffffffffffffffffffffffffffs  fddssssssssssssssssssssssssssssss dsfffffffffffffffffffffffffffffffs  fddssssssssssssssssssssssssssssss dsfffffffffffffffffffffffffffffffs  fddssssssssssssssssssssssssssssss dsfffffffffffffffffffffffffffffffs  fddssssssssssssssssssssssssssssss dsfffffffffffffffffffffffffffffffs  fddssssssssssssssssssssssssssssss dsfffffffffffffffffffffffffffffffs  fddssssssssssssssssssssssssssssss dsfffffffffffffffffffffffffffffffs  fddssssssssssssssssssssssssssssss dsfffffffffffffffffffffffffffffffs  fddssssssssssssssssssssssssssssss dsfffffffffffffffffffffffffffffffs  fddssssssssssssssssssssssssssssss dsfffffffffffffffffffffffffffffffs  fddssssssssssssssssssssssssssssss dsfffffffffffffffffffffffffffffffs  fddssssssssssssssssssssssssssssss dsfffffffffffffffffffffffffffffffs  fddssssssssssssssssssssssssssssss dsfffffffffffffffffffffffffffffffs  fddssssssssssssssssssssssssssssss dsfffffffffffffffffffffffffffffffs  fddssssssssssssssssssssssssssssss dsfffffffffffffffffffffffffffffffs  fddssssssssssssssssssssssssssssss dsfffffffffffffffffffffffffffffffs  fddssssssssssssssssssssssssssssss dsfffffffffffffffffffffffffffffffs  fddssssssssssssssssssssssssssssss dsfffffffffffffffffffffffffffffffs  fddssssssssssssssssssssssssssssss dsfffffffffffffffffffffffffffffffs  fddssssssssssssssssssssssssssssss dsfffffffffffffffffffffffffffffffs  fddssssssssssssssssssssssssssssss dsfffffffffffffffffffffffffffffffs  fddssssssssssssssssssssssssssssss', '2018-08-05 18:39:58', '2018-08-05 18:39:58', 1, '1533505198_5.jpg'),
(26, 'Огогогого', '05-08-2018-ogogogogo', 'счяс', 'авыаваыаау аац423к 454 5425 45 543 5345 25куцк е цукпп3 е53е53', '2018-08-05 18:40:34', '2018-08-06 14:58:53', 1, '1533578333_9.jpg'),
(27, 'Большие скидки', '05-08-2018-bol-shie-skidki', 'Срочно', 'Срочно все в магазин! Продаем все в два раза дешевле', '2018-08-05 19:42:08', '2018-08-06 14:57:52', 3, '1533578272_1.jpg'),
(28, 'gf', '05-08-2018-gf', 'tryythghhnfhhtr tytrytg et', 'tryythghhnfhhtr tytrytg ettryythghhnfhhtr tytrytg ettryythghhnfhhtr tytrytg ettryythghhnfhhtr tytrytg ettryythghhnfhhtr tytrytg ettryythghhnfhhtr tytrytg ettryythghhnfhhtr tytrytg ettryythghhnfhhtr tytrytg ettryythghhnfhhtr tytrytg ettryythghhnfhhtr tytrytg ettryythghhnfhhtr tytrytg ettryythghhnfhhtr tytrytg ettryythghhnfhhtr tytrytg ettryythghhnfhhtr tytrytg ettryythghhnfhhtr tytrytg ettryythghhnfhhtr tytrytg ettryythghhnfhhtr tytrytg ettryythghhnfhhtr tytrytg ettryythghhnfhhtr tytrytg ettryythghhnfhhtr tytrytg ettryythghhnfhhtr tytrytg ettryythghhnfhhtr tytrytg ettryythghhnfhhtr tytrytg et', '2018-08-05 19:56:59', '2018-08-05 19:56:59', 3, '1533509819_2.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cart` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_guest` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `old_price` double(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `brand_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `alias`, `thumb`, `description`, `price`, `old_price`, `quantity`, `images`, `created_at`, `updated_at`, `category_id`, `brand_id`) VALUES
(28, 'Рубашка Henderson', 'Rubashka Henderson', 'henderson1.jpg', 'Узор: однотонный, Силуэт: приталенный, Стиль: классический, Состав: хлопок', 1995.00, 2095.00, 7, 'noimage.png', NULL, NULL, 4, 4),
(29, 'Рубашка Oodji', 'Rubashka Oodji', 'oodji1.jpg', 'Рукав: длинный, Узор: однотонный, Состав: хлопок', 799.00, 899.00, 200, 'noimage.png', NULL, NULL, 4, 6),
(30, 'Рубашка ARMANI', 'Rubashka ARMANI', 'armani1.jpg', 'Состав: хлопок', 8800.00, 8900.00, 1, 'noimage.png', NULL, NULL, 4, 2),
(31, 'Рубашка Hugo Boss', 'Rubashka Hugo Boss', 'hugoboss1.jpg', 'Рукав: короткий, Узор: однотонный, Сезон: весна, лето, Силуэт: прямой', 6790.00, 6890.00, 5, 'noimage.png', NULL, NULL, 4, 5),
(32, 'Куртка Atlas for Men', 'Kurtka Atlas for Men', 'atlasformen1.jpg', 'Сезон: весна, лето, осень, Материал верха: текстиль, Состав: полиэстер, хлопок', 2499.00, 2500.00, 2, 'noimage.png', NULL, NULL, 5, 3),
(33, 'Куртка ARMANI', 'Kurtka ARMANI', 'armani2.jpg', 'Размер: 50 (RU)', 23600.00, 24000.00, 2, 'noimage.png', NULL, NULL, 5, 2),
(34, 'Куртка Oodji', 'Kurtka Oodji', 'oodji2.jpg', 'Модель: пилот, Сезон: весна, осень, Материал верха: искусственная кожа, Состав: полиэстер', 3499.00, 3599.00, 2, 'noimage.png', NULL, NULL, 5, 6),
(35, 'Куртка  HUGO BOSS', 'Kurtka  HUGO BOSS', 'hugoboss2.jpg', 'Сезон: весна, лето, осень, Материал верха: текстиль, Состав: полиэстер, хлопок', 28000.00, 28199.00, 12, 'noimage.png', NULL, NULL, 5, 5),
(36, 'Куртка PUMA', 'Kurtka PUMA', 'Puma1.jpg', 'Сезон: весна, осень, Капюшон: да, Состав: полиамид, полиэстер', 9580.00, 10000.00, 3, 'noimage.png', NULL, NULL, 5, 7),
(37, 'Футболка PUMA', 'Futbolka PUMA', 'Puma2.jpg', 'Состав: полиэстер', 690.00, 1490.00, 7, 'noimage.png', NULL, NULL, 6, 7),
(38, 'Футболка Henderson', 'Futbolka Henderson', 'henderson2.jpg', 'Футболка HENDERSON Sport с С-образной горловиной и коротким рукавом. Изделие обеспечивает удобство и свободу движений во время любых тренировок благодаря эластичной ткани с инновационной бесшовной технологией вязки Seamless Comfort. Такой материал создает ощущение второй кожи. Технология Quick Dry быстро отводит и испаряет влагу с поверхности кожи. Изделие имеет максимальную воздухопроницаемость благодаря специальным переплетениям в тканях Air Pro, что позволяет коже дышать при высоких нагрузках. Внутренний шов горловины обработан тесьмой с логотипом HENDERSON Sport для максимального удобства и защиты от трения во время движения. Светоотражающие принты Reflective Details - логотип HENDERSON Sport и пунктирная линия по бокам - позволяют быть заметным в условиях низкой освещенности. Такая футболка будет исключительно удобной для фитнеса и тренировок в спортивном зале.', 595.00, 1999.00, 2, 'noimage.png', NULL, NULL, 6, 4),
(39, 'Футболка adidas', 'Futbolka adidas', 'adidas1.jpg', 'Размер: 54 (RU)', 1690.00, 1690.00, 1, 'noimage.png', NULL, NULL, 6, 1),
(45, 'Куртка Армани', '13-08-2018-kurtka-armani', '1534192824_3.jpg', 'Отличная куртка', 8000.00, 7897.00, 4, '1534192824_3.jpg', '2018-08-13 17:40:24', '2018-08-13 18:15:16', 5, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'dmitry', 'Vyssokanov@mail.ru', '$2y$10$8LOsgWHPS.awc3b4dmpijeY1ZcfXiblhIDDcAeCkCwF.49mLHvJ6K', NULL, '2018-07-21 15:40:32', '2018-07-21 15:40:32'),
(2, 'vda', 'Vyssokanov@list.ru', '$2y$10$hQPbi7R5pZSB06zlQMSSgOh7xi.w0JKy2SaPKPCIi3koZX2GPDPhu', NULL, '2018-07-30 18:19:48', '2018-07-30 18:19:48'),
(3, 'DarkDemon', 'DVyssokanov@alabuga.ru', '$2y$10$OAK.CLGsvANPh7lpxWy9XO9aWSV7EWngBs.u0IHYsaSogH7t9.Bl.', NULL, '2018-08-05 19:40:31', '2018-08-05 19:40:31');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_alias_unique` (`alias`);

--
-- Индексы таблицы `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_user_id_foreign` (`user_id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`),
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
