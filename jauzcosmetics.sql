-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-02-2023 a las 20:32:07
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `jauzcosmetics`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cart_product_order`
--

CREATE TABLE `cart_product_order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
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
-- Estructura de tabla para la tabla `img_products`
--

CREATE TABLE `img_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `img_products`
--

INSERT INTO `img_products` (`id`, `name`, `product_id`, `created_at`, `updated_at`) VALUES
(1, '1_0.jpg', 1, NULL, NULL),
(2, '1_1.jpg', 1, NULL, NULL),
(3, '1_2.jpg', 1, NULL, NULL),
(4, '1_3.jpg', 1, NULL, NULL),
(5, '1_4.jpg', 1, NULL, NULL),
(6, '1_5.jpg', 1, NULL, NULL),
(7, '1', 1, NULL, NULL),
(8, '2_0.jpg', 2, NULL, NULL),
(9, '2_1.jpg', 2, NULL, NULL),
(10, '2_2.jpg', 2, NULL, NULL),
(11, '2_3.jpg', 2, NULL, NULL),
(12, '2_4.jpg', 2, NULL, NULL),
(13, '2_5.jpg', 2, NULL, NULL),
(14, '2', 2, NULL, NULL),
(15, '3_0.jpg', 3, NULL, NULL),
(16, '3_1.jpg', 3, NULL, NULL),
(17, '3_2.jpg', 3, NULL, NULL),
(18, '3_3.jpg', 3, NULL, NULL),
(19, '3_4.jpg', 3, NULL, NULL),
(20, '3_5.jpg', 3, NULL, NULL),
(21, '3', 3, NULL, NULL),
(22, '4_0.jpg', 4, NULL, NULL),
(23, '4_1.jpg', 4, NULL, NULL),
(24, '4_2.jpg', 4, NULL, NULL),
(25, '4_3.jpg', 4, NULL, NULL),
(26, '4_4.jpg', 4, NULL, NULL),
(27, '4_5.jpg', 4, NULL, NULL),
(28, '4', 4, NULL, NULL),
(29, '5_0.jpg', 5, NULL, NULL),
(30, '5_1.jpg', 5, NULL, NULL),
(31, '5_2.jpg', 5, NULL, NULL),
(32, '5_3.jpg', 5, NULL, NULL),
(33, '5_4.jpg', 5, NULL, NULL),
(34, '5_5.jpg', 5, NULL, NULL),
(35, '5', 5, NULL, NULL),
(36, '6_0.jpg', 6, NULL, NULL),
(37, '6_1.jpg', 6, NULL, NULL),
(38, '6_2.jpg', 6, NULL, NULL),
(39, '6_3.jpg', 6, NULL, NULL),
(40, '6_4.jpg', 6, NULL, NULL),
(41, '6_5.jpg', 6, NULL, NULL),
(42, '6', 6, NULL, NULL),
(43, '7_0.jpg', 7, NULL, NULL),
(44, '7_1.jpg', 7, NULL, NULL),
(45, '7_2.jpg', 7, NULL, NULL),
(46, '7_3.jpg', 7, NULL, NULL),
(47, '7_4.jpg', 7, NULL, NULL),
(48, '7_5.jpg', 7, NULL, NULL),
(49, '7', 7, NULL, NULL),
(50, '8_0.jpg', 8, NULL, NULL),
(51, '8_1.jpg', 8, NULL, NULL),
(52, '8_2.jpg', 8, NULL, NULL),
(53, '8_3.jpg', 8, NULL, NULL),
(54, '8_4.jpg', 8, NULL, NULL),
(55, '8_5.jpg', 8, NULL, NULL),
(56, '8', 8, NULL, NULL),
(57, '9_0.jpg', 9, NULL, NULL),
(58, '9_1.jpg', 9, NULL, NULL),
(59, '9_2.jpg', 9, NULL, NULL),
(60, '9_3.jpg', 9, NULL, NULL),
(61, '9_4.jpg', 9, NULL, NULL),
(62, '9_5.jpg', 9, NULL, NULL),
(63, '9', 9, NULL, NULL),
(64, '10_0.jpg', 10, NULL, NULL),
(65, '10_1.jpg', 10, NULL, NULL),
(66, '10_2.jpg', 10, NULL, NULL),
(67, '10_3.jpg', 10, NULL, NULL),
(68, '10_4.jpg', 10, NULL, NULL),
(69, '10_5.jpg', 10, NULL, NULL),
(70, '10', 10, NULL, NULL),
(71, '11_0.jpg', 11, NULL, NULL),
(72, '11_1.jpg', 11, NULL, NULL),
(73, '11_2.jpg', 11, NULL, NULL),
(74, '11_3.jpg', 11, NULL, NULL),
(75, '11_4.jpg', 11, NULL, NULL),
(76, '11_5.jpg', 11, NULL, NULL),
(77, '11', 11, NULL, NULL),
(78, '12_0.jpg', 12, NULL, NULL),
(79, '12_1.jpg', 12, NULL, NULL),
(80, '12_2.jpg', 12, NULL, NULL),
(81, '12_3.jpg', 12, NULL, NULL),
(82, '12_4.jpg', 12, NULL, NULL),
(83, '12_5.jpg', 12, NULL, NULL),
(84, '12', 12, NULL, NULL),
(85, '13_0.jpg', 13, '2023-02-19 16:10:13', '2023-02-19 16:10:13'),
(86, '13_1.jpg', 13, '2023-02-19 16:10:13', '2023-02-19 16:10:13'),
(87, '13_2.jpg', 13, '2023-02-19 16:10:13', '2023-02-19 16:10:13'),
(88, '13_3.jpg', 13, '2023-02-19 16:10:13', '2023-02-19 16:10:13'),
(89, '13_4.jpg', 13, '2023-02-19 16:10:13', '2023-02-19 16:10:13'),
(90, '13_5.jpg', 13, '2023-02-19 16:10:13', '2023-02-19 16:10:13'),
(91, '14_0.jpg', 14, '2023-02-19 16:14:20', '2023-02-19 16:14:20'),
(92, '14_1.jpg', 14, '2023-02-19 16:14:20', '2023-02-19 16:14:20'),
(93, '14_2.jpg', 14, '2023-02-19 16:14:20', '2023-02-19 16:14:20'),
(94, '14_3.jpg', 14, '2023-02-19 16:14:20', '2023-02-19 16:14:20'),
(95, '14_4.jpg', 14, '2023-02-19 16:14:20', '2023-02-19 16:14:20'),
(96, '14_5.jpg', 14, '2023-02-19 16:14:20', '2023-02-19 16:14:20'),
(97, '15_0.jpg', 15, '2023-02-19 16:19:41', '2023-02-19 16:19:41'),
(98, '15_1.jpg', 15, '2023-02-19 16:19:41', '2023-02-19 16:19:41'),
(99, '15_2.jpg', 15, '2023-02-19 16:19:41', '2023-02-19 16:19:41'),
(100, '15_3.jpg', 15, '2023-02-19 16:19:41', '2023-02-19 16:19:41'),
(101, '15_4.jpg', 15, '2023-02-19 16:19:41', '2023-02-19 16:19:41'),
(102, '15_5.jpg', 15, '2023-02-19 16:19:41', '2023-02-19 16:19:41'),
(103, '16_0.jpg', 16, '2023-02-19 16:24:07', '2023-02-19 16:24:07'),
(104, '16_1.jpg', 16, '2023-02-19 16:24:07', '2023-02-19 16:24:07'),
(105, '16_2.jpg', 16, '2023-02-19 16:24:07', '2023-02-19 16:24:07'),
(106, '16_3.jpg', 16, '2023-02-19 16:24:07', '2023-02-19 16:24:07'),
(107, '16_4.jpg', 16, '2023-02-19 16:24:07', '2023-02-19 16:24:07'),
(108, '16_5.jpg', 16, '2023-02-19 16:24:07', '2023-02-19 16:24:07'),
(109, '17_0.jpg', 17, '2023-02-19 16:28:49', '2023-02-19 16:28:49'),
(110, '17_1.jpg', 17, '2023-02-19 16:28:49', '2023-02-19 16:28:49'),
(111, '17_2.jpg', 17, '2023-02-19 16:28:49', '2023-02-19 16:28:49'),
(112, '17_3.jpg', 17, '2023-02-19 16:28:49', '2023-02-19 16:28:49'),
(113, '17_4.jpg', 17, '2023-02-19 16:28:49', '2023-02-19 16:28:49'),
(114, '17_5.jpg', 17, '2023-02-19 16:28:49', '2023-02-19 16:28:49'),
(115, '18_0.jpg', 18, '2023-02-19 16:51:10', '2023-02-19 16:51:10'),
(116, '18_1.jpg', 18, '2023-02-19 16:51:10', '2023-02-19 16:51:10'),
(117, '18_2.jpg', 18, '2023-02-19 16:51:10', '2023-02-19 16:51:10'),
(118, '18_3.jpg', 18, '2023-02-19 16:51:10', '2023-02-19 16:51:10'),
(119, '18_4.jpg', 18, '2023-02-19 16:51:10', '2023-02-19 16:51:10'),
(120, '18_5.jpg', 18, '2023-02-19 16:51:10', '2023-02-19 16:51:10'),
(121, '19_0.jpg', 19, '2023-02-19 16:55:16', '2023-02-19 16:55:16'),
(122, '19_1.jpg', 19, '2023-02-19 16:55:16', '2023-02-19 16:55:16'),
(123, '19_2.jpg', 19, '2023-02-19 16:55:16', '2023-02-19 16:55:16'),
(124, '19_3.jpg', 19, '2023-02-19 16:55:16', '2023-02-19 16:55:16'),
(125, '19_4.jpg', 19, '2023-02-19 16:55:16', '2023-02-19 16:55:16'),
(126, '19_5.jpg', 19, '2023-02-19 16:55:16', '2023-02-19 16:55:16'),
(127, '20_0.jpg', 20, '2023-02-19 16:58:34', '2023-02-19 16:58:34'),
(128, '20_1.jpg', 20, '2023-02-19 16:58:34', '2023-02-19 16:58:34'),
(129, '20_2.jpg', 20, '2023-02-19 16:58:34', '2023-02-19 16:58:34'),
(130, '20_3.jpg', 20, '2023-02-19 16:58:34', '2023-02-19 16:58:34'),
(131, '20_4.jpg', 20, '2023-02-19 16:58:34', '2023-02-19 16:58:34'),
(132, '20_5.jpg', 20, '2023-02-19 16:58:34', '2023-02-19 16:58:34'),
(133, '21_0.jpg', 21, '2023-02-19 17:01:52', '2023-02-19 17:01:52'),
(134, '21_1.jpg', 21, '2023-02-19 17:01:52', '2023-02-19 17:01:52'),
(135, '21_2.jpg', 21, '2023-02-19 17:01:52', '2023-02-19 17:01:52'),
(136, '21_3.jpg', 21, '2023-02-19 17:01:52', '2023-02-19 17:01:52'),
(137, '21_4.jpg', 21, '2023-02-19 17:01:52', '2023-02-19 17:01:52'),
(138, '21_5.jpg', 21, '2023-02-19 17:01:52', '2023-02-19 17:01:52'),
(139, '22_0.jpg', 22, '2023-02-19 17:05:38', '2023-02-19 17:05:38'),
(140, '22_1.jpg', 22, '2023-02-19 17:05:38', '2023-02-19 17:05:38'),
(141, '22_2.jpg', 22, '2023-02-19 17:05:38', '2023-02-19 17:05:38'),
(142, '22_3.jpg', 22, '2023-02-19 17:05:38', '2023-02-19 17:05:38'),
(143, '22_4.jpg', 22, '2023-02-19 17:05:38', '2023-02-19 17:05:38'),
(144, '22_5.jpg', 22, '2023-02-19 17:05:38', '2023-02-19 17:05:38'),
(145, '23_0.jpg', 23, '2023-02-19 17:10:15', '2023-02-19 17:10:15'),
(146, '23_1.jpg', 23, '2023-02-19 17:10:15', '2023-02-19 17:10:15'),
(147, '23_2.jpg', 23, '2023-02-19 17:10:15', '2023-02-19 17:10:15'),
(148, '23_3.jpg', 23, '2023-02-19 17:10:15', '2023-02-19 17:10:15'),
(149, '23_4.jpg', 23, '2023-02-19 17:10:15', '2023-02-19 17:10:15'),
(150, '23_5.jpg', 23, '2023-02-19 17:10:15', '2023-02-19 17:10:15'),
(151, '24_0.jpg', 24, '2023-02-19 17:13:52', '2023-02-19 17:13:52'),
(152, '24_1.jpg', 24, '2023-02-19 17:13:52', '2023-02-19 17:13:52'),
(153, '24_2.jpg', 24, '2023-02-19 17:13:52', '2023-02-19 17:13:52'),
(154, '24_3.jpg', 24, '2023-02-19 17:13:52', '2023-02-19 17:13:52'),
(155, '24_4.jpg', 24, '2023-02-19 17:13:52', '2023-02-19 17:13:52'),
(156, '24_5.jpg', 24, '2023-02-19 17:13:52', '2023-02-19 17:13:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_02_02_115606_create_carts_table', 1),
(7, '2023_02_02_125447_create_addresses_table', 1),
(8, '2023_02_02_125749_create_orders_table', 1),
(9, '2023_02_03_112531_create_cart_product_order_table', 1),
(10, '2023_02_06_082141_create_products_table', 1),
(11, '2023_02_10_094924_create_img_products_table', 1),
(12, '2023_02_17_081016_create_cart_product_table', 1),
(13, '2023_02_17_094421_create_trigger', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `total_price` double NOT NULL,
  `pago` enum('Credit card','Bizum','PayPal') COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
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
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` enum('Maquillaje','Accesorio') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `stock`, `description`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Delineador', 18.80, 20, 'Una edición limitada de delineadores resistentes al agua y de larga duración en tonos exclusivos con acabados metálicos.  Completa tu look con una brillante selección de tres tonos resistentes al agua, de larga duración y con acabados metálicos.  Suave de aplicar. No se transfiere, no se emborrona y no se mueve. Dibuja la línea. Potencia tus ojos. Se hace notar. Dura y dura. Cada uno de ellos está listo para ser regalado en un envase de edición limitada con burbujas y lazos, todo ello sostenible.', 'Maquillaje', NULL, NULL),
(2, 'Paleta de Sombras', 33.20, 10, 'Una paleta amplia que ofrece una gama de colores con tonos ámbar.  Proporciona una serie de texturas de mates a satinadas y nacaradas para crear una variedad de looks tanto de día como de noche. Los tonos saturados, blandos y suaves se alojan en un paleta que se lleva a cualquier lugar. Modo de uso: Aplicar en los párpados con los dedos, una brocha o un aplicador con punta de espuma.', 'Maquillaje', NULL, NULL),
(3, 'Barra de Labios Líquida', 24.00, 5, '¡Sentir para creer! Powder Kiss, el mate reinventado, aumenta la familia con Powder Kiss Liquid Lipcolour. Una barra de labios mate, ligera y aterciopelada con 10 horas de hidratación.  Gracias a su textura cremosa, similar a una mousse, aporta la cobertura necesaria de una sola pasada dejando un efecto difuminado de alto impacto.  Su textura cremosa proporciona una hidratación inmediata que se mantiene elástica sobre los labios durante todo el día, impidiendo que tus labios se resequen o descamen.  Cuenta con un aplicador en forma de reloj de arena perfecto para lograr una alta precisión.', 'Maquillaje', NULL, NULL),
(4, 'LOREAL Infalible 32H Fresh Wear base de maquillaje', 8.95, 4, 'La base de maquillaje de larga duración y alta cobertura Infalible 32H Fresh Wear de LOréal Paris lo resiste todo y cuida tu piel con su fórmula antioxidante con vitamina C y SPF 25.   32 horas como recién aplicado. Su nueva fórmula con pigmentos finos ultra-concentrados que se adaptan perfectamente al tono de tu piel, permite conseguir una cobertura impecable que dura 32H, como recién aplicado. ¡Se te olvidará que lo llevas puesto!', 'Maquillaje', NULL, NULL),
(5, 'LOREALInfalible 24 Fresh To Wear Base de Maquillaje Compacto', 9.98, 12, '¡La base de maquillaje que estabas esperando! Infallible 24h Fresh To Wear de LOreal París ofrece una cobertura como nunca antes habías visto con un acabado muy natural. Su textura en polvo compacto es capaz de unificar el tono de la piel y difuminar todas las imperfecciones faciales. La duración es uno de sus puntos fuertes. ¡Olvídate de los retoques!', 'Maquillaje', NULL, NULL),
(6, 'Colorete en Polvo', 27.98, 9, 'El colorete en polvo de Nars es el imprescindible que no puede faltar en cualquier neceser de maquillaje. Estos icónicos productos nos ofrecen una amplia variedad de tonos naturales que sientan bien a todo tipo de pieles aportando un efecto de buena cara al instante. Gracias a sus fórmulas ricas en pigmentos micronizados, estos polvos ofrecen un color traslúcido y modulable que se integra fácilmente con cada pasada. ¡Disfruta del blush más vendido en Estados Unidos!', 'Maquillaje', NULL, NULL),
(7, 'Base de Maquillaje', 25.40, 3, '¡Es la primera base de maquillaje que contiene un 90% de ingredientes que cuidan la piel, para un resultado luminoso y saludable! Su fórmula contiene sérum iluminador con: 2% de Niacinamida: Ilumina y reduce las manchas oscuras, los poros dilatados y la textura áspera de la piel. Ácido hialurónico: Rellena e hidrata instantáneamente el aspecto de la piel. Extracto de té verde: protege la piel de los agresores ambientales.', 'Maquillaje', NULL, NULL),
(8, 'LANCÔME Lash Idôle', 18.65, 2, 'Descubre la nueva máscara de pestañas Lash Idôle de Lancôme. La máscara más revolucionaria del mercado, que no se aglutina y que se enfoca en cada pestaña para obtener pestañas más completas, levantadas y extendidas al instante.', 'Maquillaje', NULL, NULL),
(9, 'Aceite de Labios', 14.21, 9, 'Clarins Aceite de Labios Confort es una aceite con color que nutre, repara y proporciona a tus labios un brillo excepcional de inmediato. Su fórmula esta constituida por un coctel excepcional de aceites de jojoba bio, avellana y rosa mosqueta bio, que aporta a los labios una película hidratante, nutritiva, protectora y reparadora. Para todas las mujeres que buscan un producto que no solo realce sus labios, sino que también los cuide y embellezca y para aquellas que deseen añadir un brillo extra a su barra de labios habitual. Su fórmula ultraligera no es pegajosa, contiene un 93% de ingredientes de origen natural.', 'Maquillaje', NULL, NULL),
(10, 'Spray Fijador', 21.04, 4, 'Spray fijador de maquillaje que ilumina, hidrata y cuida tu piel.  Formulado con vitamina C y agua de cactus, el nuevo spray fijador le dará un jugoso giro a la icónica fórmula de Urban Decay. Este spray fijador no sólo mantiene el maquillaje en su sitio hasta 16 horas, sino que también cuida tu piel con ingredientes que la hidratarán y la revitalizarán para mantener una piel fresca y luminosa antes y después de maquillarte.', 'Maquillaje', NULL, NULL),
(11, 'Meteoritos Poudre Bille', 37.85, 10, 'Météorites Poudres Billes de Guerlain son toda una constelación de polvos multicolor diseñados para aportar un extra de luminosidad y frescor a nuestro rostro. Estas perlas están diseñadas bajo la tecnología Stardust, una técnica capaz de transformar la luz invisible en un auténtico destello. Su combinación de tonalidades y acabados reduce las rojeces, refresca el cutis, minimiza imperfecciones y atrapa la luz.   Sin duda un producto estrella que se ha convertido en todo un clásico imprescindible desde su nacimiento en 1987.', 'Maquillaje', NULL, NULL),
(12, 'Phyto Eye Twist', 27.30, 20, 'SISLEY PHYTO EYE TWIST: Phyto Eye Twist es un maquillaje para los párpados \\\"todo en uno\\\": sombra, lápiz y eyeliner. Con una mina ultrasensorial, suave y fundente y una textura sensorial de muy larga duración.  Los jumbo de Sisley Phyto Eye Twist son waterproof, no se mueven de su sitio y se pueden combinar los tonos para crear un maquillaje a medida, o usar como base para una sombra en polvo.  Formato ultraligero, muy práctico, sin necesidad de sacapuntas, fácil de guardar en el neceser de maquillaje.  Diseño de cebra a juego con los Phyto Lip Twist y Phyto Blush Éclat de Sisley.', 'Maquillaje', NULL, NULL),
(13, 'Pack 3 Coleteros Espiral', 3.94, 12, 'El secreto de nuestros coleteros reside en su forma espiral. Debido a que distribuye la presión de manera uniforme en su cola de caballo, se obtiene un ajuste fuerte y cómodo. No deja rastros en tu cabello y es impermeable.', 'Accesorio', '2023-02-19 16:10:13', '2023-02-19 16:10:13'),
(14, 'Cepillo Extra-flexible Extreme', 3.99, 15, '1. DESENREDA: Con su estructura extra-flexible especialmente diseñada, podrás desenredar fácilmente tu melena sin tirones ni roturas.  2. MASAJEA Y EXFOLIA EL CUERO CABELLUDO: Sus púas se flexionan estimulando la raíz y el cuero cabelludo, incrementando el flujo sanguíneo y retirando las células muertas para favorecer el crecimiento del pelo y frenar su caída.  3. ANTIBACTERIAL: Propiedades antibacterianas debido a su novedoso material termoplástico y más fácil de limpiar por su estructura extraflexible.  4. ERGONÓMICO: Con su forma cóncava y extraflexible diseñado para adaptarse perfectamente a la forma de tu cabeza.  5. SECADO RÁPIDO: El diseño con ventilación abierta permite que la humedad se elimine de tu cabello más rápido y reduce el tiempo de secado. Se puede usar con secador manteniendo una distancia mínima de 15cm.', 'Accesorio', '2023-02-19 16:14:19', '2023-02-19 16:14:19'),
(15, 'Rizador Cabello en Espiral', 7.99, 15, 'Estos rulos pueden enrollar y rizar tu cabello fácilmente, creando ondas y rizos. Como no necesitan calor, son un buen sustituto de los productos de peinado térmico, ayudando a mantener tu cabello sano. No necesitas fijadores, ni planchas para rizos, solo necesitas tener el cabello húmedo, y....a usar los rulos en espiral para hacer unos rizos espectaculares.', 'Accesorio', '2023-02-19 16:19:41', '2023-02-19 16:19:41'),
(16, 'Set Clips Pétalos', 2.99, 22, 'Set de clips con forma de pétalo y efecto rubber disponible en varios colores.  Medidas: 6.8 cm', 'Accesorio', '2023-02-19 16:24:07', '2023-02-19 16:24:07'),
(17, 'Limpiador de Esponjas y Brochas', 7.55, 12, 'Vegano, libre de crueldad animal y sin gluten.  Esta mezcla súper concentrada de aceites de palma sostenibles, aloe nutritivo y aceite de coco ayuda a eliminar la suciedad, enjuaga y acondiciona tus herramientas más valiosas.  Las sutiles notas de lavanda calmante ayudan a elevar y eliminar el estrés. Una almohadilla de silicona texturizada elimina los residuos rebeldes.  La fórmula de grado profesional protege contra el 99,7% de los gérmenes hasta 24 horas después de la limpieza.  Fabricado en USA.', 'Accesorio', '2023-02-19 16:28:49', '2023-02-19 16:28:49'),
(18, 'Set 7 Esponjas Multicolor', 1.99, 30, 'Esponjas de maquillaje para aplicar bases fluidas y en crema.  Con textura ultrasuave, reparten de forma equilibrada el maquillaje. Para su uso, sumergirlas debajo del agua, escurrirlas y aplicar el producto sobre el rostro a toquecitos.', 'Accesorio', '2023-02-19 16:51:10', '2023-02-19 16:51:10'),
(19, 'Mini Limpiador Facial Electrónico', 8.95, 10, 'Dispositivo de limpieza y masaje facial con filamentos de silicona para realizar una limpieza suave y profunda. Elimina la suciedad, grasa y restos de maquillaje.   Apto para todo tipo de pieles.   Resistente al agua, incluso se puede meter en la ducha.   Recargable con cable USB.', 'Accesorio', '2023-02-19 16:55:16', '2023-02-19 16:55:16'),
(20, 'Set 3 Esponjas Ducha', 1.99, 12, 'Conjunto de 3 esponjas de ducha con encaje de polietileno suave.  Permiten la aplicación de un gel de ducha con ligera fricción sin irritar la piel, incluso las más delicadas. Ligeramente exfoliante, esta esponja de ducha ayuda a eliminar impurezas y células muertas, activa la regeneración celular, tonifica y suaviza la piel.', 'Accesorio', '2023-02-19 16:58:34', '2023-02-19 16:58:34'),
(21, 'Cepillo Corporal 2 en 1', 2.99, 34, 'Cepillo de silicona con diseño de doble cara. Por un lado, un cepillo con cerdas para limpiar la piel que sirve también de exfoliante suave diario. La otra cara del cepillo puede usarse como masajeador corporal, con la finalidad de estimular la circulación sanguínea y ayudar a reducir la celulitis en las zonas problemáticas.', 'Accesorio', '2023-02-19 17:01:52', '2023-02-19 17:01:52'),
(22, 'Set 24 Gomas Elasticas Finas Multicolor', 1.20, 20, 'Set de 24 gomitas para el pelo irrompibles, no rompen el cabello ni dan tirones.  Medidas: Diámetro de 5,5cm aprox.', 'Accesorio', '2023-02-19 17:05:38', '2023-02-19 17:05:38'),
(23, 'Venus ComfortGlide Breeze Recambios', 10.99, 22, 'Las maquinillas Venus ComfortGlide Breeze tienen 3 hojas para una depilación suave y apurada.  Los recambios para maquinilla vienen equipados con barras de gel incorporadas que liberan aceites corporales y una fragancia fresca para un deslizamiento cómodo e increíble.  Con un diseño pivotante que se ajusta a los contornos del cuerpo.  Todos los recambios Venus son compatibles con todos los mangos Venus (excepto Simply Venus y Venus para vello púbico).', 'Accesorio', '2023-02-19 17:10:15', '2023-02-19 17:10:15'),
(24, 'Kit Care & Rock', 12.95, 38, 'Una excelente selección de artículos personales e intransferibles, en un práctico neceser.  Ideal para llevar tus artículos de cuidado personal siempre contigo.', 'Accesorio', '2023-02-19 17:13:52', '2023-02-19 17:13:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_cart`
--

CREATE TABLE `product_cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `cart_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `rol` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Disparadores `users`
--
DELIMITER $$
CREATE TRIGGER `add_cart` AFTER INSERT ON `users` FOR EACH ROW BEGIN
            INSERT INTO `carts` SET user_id = NEW.id, created_at = NEW.created_at, updated_at = NEW.updated_at;
        END
$$
DELIMITER ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `cart_product_order`
--
ALTER TABLE `cart_product_order`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `img_products`
--
ALTER TABLE `img_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `img_products_product_id_foreign` (`product_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_address_id_foreign` (`address_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `product_cart`
--
ALTER TABLE `product_cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_cart_product_id_foreign` (`product_id`),
  ADD KEY `product_cart_cart_id_foreign` (`cart_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cart_product_order`
--
ALTER TABLE `cart_product_order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `img_products`
--
ALTER TABLE `img_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `product_cart`
--
ALTER TABLE `product_cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `img_products`
--
ALTER TABLE `img_products`
  ADD CONSTRAINT `img_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Filtros para la tabla `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_address_id_foreign` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`);

--
-- Filtros para la tabla `product_cart`
--
ALTER TABLE `product_cart`
  ADD CONSTRAINT `product_cart_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`),
  ADD CONSTRAINT `product_cart_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
