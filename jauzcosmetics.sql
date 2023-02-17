-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-02-2023 a las 12:40:40
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.0.19

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `address_user`
--

CREATE TABLE `address_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `address_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `products` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT json_array() CHECK (json_valid(`products`)),
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cart_product`
--

CREATE TABLE `cart_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(1, '1_0.jpg', 1, '2023-02-17 08:59:33', '2023-02-17 08:59:33'),
(2, '1_1.jpg', 1, '2023-02-17 08:59:33', '2023-02-17 08:59:33'),
(3, '1_2.jpg', 1, '2023-02-17 08:59:33', '2023-02-17 08:59:33'),
(4, '1_3.jpg', 1, '2023-02-17 08:59:33', '2023-02-17 08:59:33'),
(5, '1_4.jpg', 1, '2023-02-17 08:59:33', '2023-02-17 08:59:33'),
(6, '1_5.jpg', 1, '2023-02-17 08:59:33', '2023-02-17 08:59:33'),
(7, '2_0.jpg', 2, '2023-02-17 09:00:56', '2023-02-17 09:00:56'),
(8, '2_1.jpg', 2, '2023-02-17 09:00:56', '2023-02-17 09:00:56'),
(9, '2_2.jpg', 2, '2023-02-17 09:00:56', '2023-02-17 09:00:56'),
(10, '2_3.jpg', 2, '2023-02-17 09:00:56', '2023-02-17 09:00:56'),
(11, '2_4.jpg', 2, '2023-02-17 09:00:56', '2023-02-17 09:00:56'),
(12, '2_5.jpg', 2, '2023-02-17 09:00:56', '2023-02-17 09:00:56'),
(13, '3_0.jpg', 3, '2023-02-17 09:02:27', '2023-02-17 09:02:27'),
(14, '3_1.jpg', 3, '2023-02-17 09:02:27', '2023-02-17 09:02:27'),
(15, '3_2.jpg', 3, '2023-02-17 09:02:27', '2023-02-17 09:02:27'),
(16, '3_3.jpg', 3, '2023-02-17 09:02:27', '2023-02-17 09:02:27'),
(17, '3_4.jpg', 3, '2023-02-17 09:02:27', '2023-02-17 09:02:27'),
(18, '3_5.jpg', 3, '2023-02-17 09:02:27', '2023-02-17 09:02:27'),
(19, '4_0.jpg', 4, '2023-02-17 09:07:27', '2023-02-17 09:07:27'),
(20, '4_1.jpg', 4, '2023-02-17 09:07:27', '2023-02-17 09:07:27'),
(21, '4_2.jpg', 4, '2023-02-17 09:07:27', '2023-02-17 09:07:27'),
(22, '4_3.jpg', 4, '2023-02-17 09:07:27', '2023-02-17 09:07:27'),
(23, '4_4.jpg', 4, '2023-02-17 09:07:27', '2023-02-17 09:07:27'),
(24, '4_5.jpg', 4, '2023-02-17 09:07:27', '2023-02-17 09:07:27'),
(25, '5_0.jpg', 5, '2023-02-17 09:08:32', '2023-02-17 09:08:32'),
(26, '5_1.jpg', 5, '2023-02-17 09:08:32', '2023-02-17 09:08:32'),
(27, '5_2.jpg', 5, '2023-02-17 09:08:32', '2023-02-17 09:08:32'),
(28, '5_3.jpg', 5, '2023-02-17 09:08:32', '2023-02-17 09:08:32'),
(29, '5_4.jpg', 5, '2023-02-17 09:08:32', '2023-02-17 09:08:32'),
(30, '5_5.jpg', 5, '2023-02-17 09:08:32', '2023-02-17 09:08:32'),
(31, '6_0.jpg', 6, '2023-02-17 10:21:17', '2023-02-17 10:21:17'),
(32, '6_1.jpg', 6, '2023-02-17 10:21:17', '2023-02-17 10:21:17'),
(33, '6_2.jpg', 6, '2023-02-17 10:21:17', '2023-02-17 10:21:17'),
(34, '6_3.jpg', 6, '2023-02-17 10:21:17', '2023-02-17 10:21:17'),
(35, '6_4.jpg', 6, '2023-02-17 10:21:17', '2023-02-17 10:21:17'),
(36, '6_5.jpg', 6, '2023-02-17 10:21:17', '2023-02-17 10:21:17'),
(37, '7_0.jpg', 7, '2023-02-17 10:24:13', '2023-02-17 10:24:13'),
(38, '7_1.jpg', 7, '2023-02-17 10:24:13', '2023-02-17 10:24:13'),
(39, '7_2.jpg', 7, '2023-02-17 10:24:13', '2023-02-17 10:24:13'),
(40, '7_3.jpg', 7, '2023-02-17 10:24:13', '2023-02-17 10:24:13'),
(41, '7_4.jpg', 7, '2023-02-17 10:24:13', '2023-02-17 10:24:13'),
(42, '7_5.jpg', 7, '2023-02-17 10:24:13', '2023-02-17 10:24:13'),
(43, '8_0.jpg', 8, '2023-02-17 10:26:57', '2023-02-17 10:26:57'),
(44, '8_1.jpg', 8, '2023-02-17 10:26:57', '2023-02-17 10:26:57'),
(45, '8_2.jpg', 8, '2023-02-17 10:26:57', '2023-02-17 10:26:57'),
(46, '8_3.jpg', 8, '2023-02-17 10:26:57', '2023-02-17 10:26:57'),
(47, '8_4.jpg', 8, '2023-02-17 10:26:57', '2023-02-17 10:26:57'),
(48, '8_5.jpg', 8, '2023-02-17 10:26:57', '2023-02-17 10:26:57'),
(49, '9_0.jpg', 9, '2023-02-17 10:29:14', '2023-02-17 10:29:14'),
(50, '9_1.jpg', 9, '2023-02-17 10:29:14', '2023-02-17 10:29:14'),
(51, '9_2.jpg', 9, '2023-02-17 10:29:14', '2023-02-17 10:29:14'),
(52, '9_3.jpg', 9, '2023-02-17 10:29:14', '2023-02-17 10:29:14'),
(53, '9_4.jpg', 9, '2023-02-17 10:29:14', '2023-02-17 10:29:14'),
(54, '9_5.jpg', 9, '2023-02-17 10:29:14', '2023-02-17 10:29:14'),
(55, '10_0.jpg', 10, '2023-02-17 10:34:24', '2023-02-17 10:34:24'),
(56, '10_1.jpg', 10, '2023-02-17 10:34:24', '2023-02-17 10:34:24'),
(57, '10_2.jpg', 10, '2023-02-17 10:34:24', '2023-02-17 10:34:24'),
(58, '10_3.jpg', 10, '2023-02-17 10:34:24', '2023-02-17 10:34:24'),
(59, '10_4.jpg', 10, '2023-02-17 10:34:24', '2023-02-17 10:34:24'),
(60, '10_5.jpg', 10, '2023-02-17 10:34:24', '2023-02-17 10:34:24'),
(61, '11_0.jpg', 11, '2023-02-17 10:36:46', '2023-02-17 10:36:46'),
(62, '11_1.jpg', 11, '2023-02-17 10:36:46', '2023-02-17 10:36:46'),
(63, '11_2.jpg', 11, '2023-02-17 10:36:46', '2023-02-17 10:36:46'),
(64, '11_3.jpg', 11, '2023-02-17 10:36:46', '2023-02-17 10:36:46'),
(65, '11_4.jpg', 11, '2023-02-17 10:36:46', '2023-02-17 10:36:46'),
(66, '11_5.jpg', 11, '2023-02-17 10:36:46', '2023-02-17 10:36:46'),
(67, '12_0.jpg', 12, '2023-02-17 10:40:10', '2023-02-17 10:40:10'),
(68, '12_1.jpg', 12, '2023-02-17 10:40:10', '2023-02-17 10:40:10'),
(69, '12_2.jpg', 12, '2023-02-17 10:40:10', '2023-02-17 10:40:10'),
(70, '12_3.jpg', 12, '2023-02-17 10:40:10', '2023-02-17 10:40:10'),
(71, '12_4.jpg', 12, '2023-02-17 10:40:10', '2023-02-17 10:40:10'),
(72, '12_5.jpg', 12, '2023-02-17 10:40:10', '2023-02-17 10:40:10');

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
(9, '2023_02_03_085959_create_cart_product_table', 1),
(10, '2023_02_03_112531_create_cart_product_order_table', 1),
(11, '2023_02_06_082141_create_products_table', 1),
(12, '2023_02_10_094924_create_img_products_table', 1),
(13, '2023_02_15_095107_create_address_user_table', 1);

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
(1, 'MAC Powerpoint Delineador', 18.80, 20, 'Una edición limitada de delineadores resistentes al agua y de larga duración en tonos exclusivos con acabados metálicos.  Completa tu look con una brillante selección de tres tonos resistentes al agua, de larga duración y con acabados metálicos.  Suave de aplicar. No se transfiere, no se emborrona y no se mueve. Dibuja la línea. Potencia tus ojos. Se hace notar. Dura y dura. Cada uno de ellos está listo para ser regalado en un envase de edición limitada con burbujas y lazos, todo ello sostenible.', 'Maquillaje', '2023-02-17 08:59:33', '2023-02-17 08:59:33'),
(2, 'MAC Paleta de Sombras Amber Times Nine', 33.20, 20, 'Una paleta amplia que ofrece una gama de colores con tonos ámbar.  Proporciona una serie de texturas de mates a satinadas y nacaradas para crear una variedad de looks tanto de día como de noche. Los tonos saturados, blandos y suaves se alojan en un paleta que se lleva a cualquier lugar. Modo de uso: Aplicar en los párpados con los dedos, una brocha o un aplicador con punta de espuma.', 'Maquillaje', '2023-02-17 09:00:56', '2023-02-17 09:00:56'),
(3, 'MAC Barra de Labios Líquida mate Power Kiss', 24.00, 20, '¡Sentir para creer! Powder Kiss, el mate reinventado, aumenta la familia con Powder Kiss Liquid Lipcolour. Una barra de labios mate, ligera y aterciopelada con 10 horas de hidratación.  Gracias a su textura cremosa, similar a una mousse, aporta la cobertura necesaria de una sola pasada dejando un efecto difuminado de alto impacto.  Su textura cremosa proporciona una hidratación inmediata que se mantiene elástica sobre los labios durante todo el día, impidiendo que tus labios se resequen o descamen.  Cuenta con un aplicador en forma de reloj de arena perfecto para lograr una alta precisión.', 'Maquillaje', '2023-02-17 09:02:27', '2023-02-17 09:02:27'),
(4, 'L\'OREAL Infalible 32H Fresh Wear base de maquillaje', 8.95, 20, 'La base de maquillaje de larga duración y alta cobertura Infalible 32H Fresh Wear de L\'Oréal Paris lo resiste todo y cuida tu piel con su fórmula antioxidante con vitamina C y SPF 25.   32 horas como recién aplicado. Su nueva fórmula con pigmentos finos ultra-concentrados que se adaptan perfectamente al tono de tu piel, permite conseguir una cobertura impecable que dura 32H, como recién aplicado. ¡Se te olvidará que lo llevas puesto!', 'Maquillaje', '2023-02-17 09:07:27', '2023-02-17 09:07:27'),
(5, 'L\'OREALInfalible 24 Fresh To Wear Base de Maquillaje Compacto', 9.98, 20, '¡La base de maquillaje que estabas esperando! Infallible 24h Fresh To Wear de L`Oreal París ofrece una cobertura como nunca antes habías visto con un acabado muy natural. Su textura en polvo compacto es capaz de unificar el tono de la piel y difuminar todas las imperfecciones faciales. La duración es uno de sus puntos fuertes. ¡Olvídate de los retoques!', 'Maquillaje', '2023-02-17 09:08:32', '2023-02-17 09:08:32'),
(6, 'NARS Colorete en Polvo', 27.98, 20, 'El colorete en polvo de Nars es el imprescindible que no puede faltar en cualquier neceser de maquillaje. Estos icónicos productos nos ofrecen una amplia variedad de tonos naturales que sientan bien a todo tipo de pieles aportando un efecto de buena cara al instante. Gracias a sus fórmulas ricas en pigmentos micronizados, estos polvos ofrecen un color traslúcido y modulable que se integra fácilmente con cada pasada. ¡Disfruta del blush más vendido en Estados Unidos!', 'Maquillaje', '2023-02-17 10:21:17', '2023-02-17 10:21:17'),
(7, 'IT COSMETICS Base de Maquillaje', 25.40, 20, '¡Es la primera base de maquillaje que contiene un 90% de ingredientes que cuidan la piel, para un resultado luminoso y saludable! Su fórmula contiene sérum iluminador con: 2% de Niacinamida: Ilumina y reduce las manchas oscuras, los poros dilatados y la textura áspera de la piel. Ácido hialurónico: Rellena e hidrata instantáneamente el aspecto de la piel. Extracto de té verde: protege la piel de los agresores ambientales.', 'Maquillaje', '2023-02-17 10:24:13', '2023-02-17 10:24:13'),
(8, 'LANCÔME Lash Idôle', 18.65, 20, 'Descubre la nueva máscara de pestañas Lash Idôle de Lancôme. La máscara más revolucionaria del mercado, que no se aglutina y que se enfoca en cada pestaña para obtener pestañas más completas, levantadas y extendidas al instante.', 'Maquillaje', '2023-02-17 10:26:57', '2023-02-17 10:26:57'),
(9, 'CLARINS Aceite de Labios', 14.21, 20, 'Clarins Aceite de Labios Confort es una aceite con color que nutre, repara y proporciona a tus labios un brillo excepcional de inmediato. Su fórmula esta constituida por un coctel excepcional de aceites de jojoba bio, avellana y rosa mosqueta bio, que aporta a los labios una película hidratante, nutritiva, protectora y reparadora. Para todas las mujeres que buscan un producto que no solo realce sus labios, sino que también los cuide y embellezca y para aquellas que deseen añadir un brillo extra a su barra de labios habitual. Su fórmula ultraligera no es pegajosa, contiene un 93% de ingredientes de origen natural.', 'Maquillaje', '2023-02-17 10:29:14', '2023-02-17 10:29:14'),
(10, 'URBAN Spray Fijador', 21.04, 20, 'Spray fijador de maquillaje que ilumina, hidrata y cuida tu piel.  Formulado con vitamina C y agua de cactus, el nuevo spray fijador le dará un jugoso giro a la icónica fórmula de Urban Decay. Este spray fijador no sólo mantiene el maquillaje en su sitio hasta 16 horas, sino que también cuida tu piel con ingredientes que la hidratarán y la revitalizarán para mantener una piel fresca y luminosa antes y después de maquillarte.', 'Maquillaje', '2023-02-17 10:34:24', '2023-02-17 10:34:24'),
(11, 'GUERLAIN Meteoritos Poudre Bille', 37.85, 20, 'Météorites Poudres Billes de Guerlain son toda una constelación de polvos multicolor diseñados para aportar un extra de luminosidad y frescor a nuestro rostro. Estas perlas están diseñadas bajo la tecnología Stardust, una técnica capaz de transformar la luz invisible en un auténtico destello. Su combinación de tonalidades y acabados reduce las rojeces, refresca el cutis, minimiza imperfecciones y atrapa la luz.   Sin duda un producto estrella que se ha convertido en todo un clásico imprescindible desde su nacimiento en 1987.', 'Maquillaje', '2023-02-17 10:36:46', '2023-02-17 10:36:46'),
(12, 'SISLEY Phyto Eye Twist', 27.30, 20, 'SISLEY PHYTO EYE TWIST: Phyto Eye Twist es un maquillaje para los párpados \"todo en uno\": sombra, lápiz y eyeliner. Con una mina ultrasensorial, suave y fundente y una textura sensorial de muy larga duración.  Los jumbo de Sisley Phyto Eye Twist son waterproof, no se mueven de su sitio y se pueden combinar los tonos para crear un maquillaje a medida, o usar como base para una sombra en polvo.  Formato ultraligero, muy práctico, sin necesidad de sacapuntas, fácil de guardar en el neceser de maquillaje.  Diseño de cebra a juego con los Phyto Lip Twist y Phyto Blush Éclat de Sisley.', 'Maquillaje', '2023-02-17 10:40:10', '2023-02-17 10:40:10');

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
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `address_user`
--
ALTER TABLE `address_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `address_user_user_id_foreign` (`user_id`),
  ADD KEY `address_user_address_id_foreign` (`address_id`);

--
-- Indices de la tabla `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `cart_product`
--
ALTER TABLE `cart_product`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de la tabla `address_user`
--
ALTER TABLE `address_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cart_product`
--
ALTER TABLE `cart_product`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `address_user`
--
ALTER TABLE `address_user`
  ADD CONSTRAINT `address_user_address_id_foreign` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`),
  ADD CONSTRAINT `address_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
