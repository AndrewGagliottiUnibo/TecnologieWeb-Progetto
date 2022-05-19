-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 19, 2022 alle 18:50
-- Versione del server: 10.4.22-MariaDB
-- Versione PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cacplus`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `client_id`) VALUES
(36, 0, '4fac1085053e89659bc5'),
(37, 0, '634462d2b6214478b5e7'),
(38, 0, '15791a5f76dbe98c9af2'),
(39, 0, 'dc8496a0bb20a6571011'),
(40, 0, 'e8b7b8111000b7ec6730'),
(41, 0, '9cd82b1c9818072eac99'),
(42, 0, 'd48a34413d7271632316'),
(43, 0, '0a488883e878bc1b1285'),
(44, 0, '558269ea07832a9dbd5b'),
(45, 0, '953984251696b17b50b2'),
(46, 0, '0ecca5e00ded6fdca789'),
(47, 0, '22c8a1921abb2cdc2483'),
(48, 0, '26734ddc6ce1def4da34'),
(49, 0, '53956c38449372894ca1'),
(51, 0, '84a8211c661b8fdb1885'),
(52, 0, 'cf299665c5e6cdc4fd86'),
(53, 0, 'd2808de110701d188080'),
(54, 0, '9f555e0bdfdcbca79367'),
(55, 0, 'eb7dc184599f11404c4a'),
(56, 0, '3f168b2b2ab16101f031'),
(57, 0, ''),
(59, 0, '10'),
(69, 0, '8');

-- --------------------------------------------------------

--
-- Struttura della tabella `cart_item`
--

CREATE TABLE `cart_item` (
  `id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `cart_item`
--

INSERT INTO `cart_item` (`id`, `cart_id`, `product_id`, `quantity`) VALUES
(33, 59, 6, 1),
(47, 59, 1, 4),
(68, 69, 1, 2),
(69, 69, 4, 1),
(70, 69, 6, 1),
(71, 69, 9, 1),
(72, 69, 10, 1),
(73, 69, 5, 1),
(74, 69, 7, 1),
(75, 69, 8, 2);

-- --------------------------------------------------------

--
-- Struttura della tabella `login_attempts`
--

CREATE TABLE `login_attempts` (
  `user_id` int(11) NOT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `login_attempts`
--

INSERT INTO `login_attempts` (`user_id`, `time`) VALUES
(4, '1651069886'),
(5, '1651069920'),
(6, '1651070020'),
(7, '1651070459');

-- --------------------------------------------------------

--
-- Struttura della tabella `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(128) NOT NULL,
  `salt` char(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `members`
--

INSERT INTO `members` (`id`, `admin`, `username`, `email`, `password`, `salt`) VALUES
(1, 0, 'test_user', 'test@example.com', '00807432eae173f652f2064bdca1b61b290b52d40e429a7d295d76a71084aa96c0233b82f1feac45529e0726559645acaed6f3ae58a286b9f075916ebf66cacc', 'f9aab579fc1b41ed0c44fe4ecdbfcdb4cb99b9023abb241a6db833288f4eea3c02f76e0d35204a8695077dcf81932aa59006423976224be0390395bae152d4ef'),
(8, 0, 'gatto', 'gatto@gatto.it', '0685c52e4acd7cfb256d414810783280a89342ee94b8e89ae65fa5f1f87c85716209634d96bdbcea732ec8f105397a4f53c36a2ab55b2048f7a82d6d1f84e3b7', '4d22aba1930fdb858b981f22285bf7e0b1fee9f0aa47f46bee66dd68e7df4ffc767146cde2cf458c1af43f5b382365ef1d0d86e17b09c198a0bf4e9d9e5518a1'),
(9, 0, 'cane', 'cane@cane.it', 'ec35db0ae3bc6ba83c00500b50b7d4d1a686be95059f398ab3d505d3847f605181da351eef288366175d3d52b422cdb56548a2bc6e08d2d35b8ff0266c1e3ee0', '0c274891afee3f0723383a04b6e19faca02c9b66bd125cd627397dbbc19fa14b3c23a4db43d4bf200c419b29c5252d01eec2d459942b5625925e9b0a46f414c0'),
(10, 1, 'mago', 'mago@mago.it', 'f07afe777001339f9b7763078bc4222e3e5d69a48676b58ed3b24f49dc43fa0a439ec9358896f2ae9413e2c980550132e255e37d3dd0a5223ba1d3279738c636', '9c508ef6ebc80505b507810b6d02241b41d8afb3d30cf13687052e32f76bf9a26af4a5653f728b5de8ab8a9859d10aa26ecedd8335c11b99b7c4d42678918ce4');

-- --------------------------------------------------------

--
-- Struttura della tabella `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `message` text NOT NULL,
  `datetime` datetime NOT NULL,
  `new` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `notifications_admin`
--

CREATE TABLE `notifications_admin` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `message` text NOT NULL,
  `datetime` datetime NOT NULL,
  `new` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `notifications_admin`
--

INSERT INTO `notifications_admin` (`id`, `user`, `message`, `datetime`, `new`) VALUES
(7, 8, 'Un ordine è stato effetuato', '2022-05-18 08:48:59', 1),
(8, 8, 'Un ordine è stato effetuato', '2022-05-18 08:49:03', 1),
(9, 8, 'Un ordine è stato effetuato', '2022-05-18 08:50:47', 1),
(10, 8, 'Un ordine è stato effetuato', '2022-05-18 08:52:45', 1),
(11, 8, 'Un ordine è stato effetuato', '2022-05-18 08:52:46', 1),
(12, 8, 'Un ordine è stato effetuato', '2022-05-18 08:52:51', 1),
(13, 8, 'Un ordine è stato effetuato', '2022-05-18 08:53:05', 1),
(14, 8, 'Un ordine è stato effetuato', '2022-05-18 08:53:07', 1),
(15, 8, 'Un ordine è stato effetuato', '2022-05-18 08:53:08', 1),
(16, 8, 'Un ordine è stato effetuato', '2022-05-18 08:53:39', 1),
(17, 8, 'Un ordine è stato effetuato', '2022-05-18 08:53:40', 1),
(18, 8, 'Un ordine è stato effetuato', '2022-05-18 08:53:45', 1),
(19, 8, 'Un ordine è stato effetuato', '2022-05-18 08:55:04', 1),
(20, 8, 'Un ordine è stato effetuato', '2022-05-18 08:55:05', 1),
(21, 8, 'Un ordine è stato effetuato', '2022-05-18 08:55:10', 1),
(22, 8, 'Un ordine è stato effetuato', '2022-05-18 08:55:40', 1),
(23, 8, 'Un ordine è stato effetuato', '2022-05-18 08:55:50', 1),
(24, 8, 'Un ordine è stato effetuato', '2022-05-18 08:55:53', 1),
(25, 8, 'Un ordine è stato effetuato', '2022-05-18 08:55:54', 1),
(26, 8, 'Un ordine è stato effetuato', '2022-05-18 08:56:27', 1),
(27, 8, 'Un ordine è stato effetuato', '2022-05-18 08:56:28', 1),
(28, 8, 'Un ordine è stato effetuato', '2022-05-18 08:57:27', 1),
(29, 8, 'Un ordine è stato effetuato', '2022-05-18 08:58:30', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `highlighted` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `description`, `highlighted`) VALUES
(1, 'Cactus con miccia', '2.50', 'cactusMiccia.png', 'Cactus di porcellana attaccata ad una corda e pieno di polvere nera. Se lanciato alle spalle, può ostacolare gli inseguitori.\r\n\r\nE\' identico ad un comune cactus, tranne per la direzione in cui viene lanciato.', 1),
(2, 'Cactus morbidoso (Verde)', '10.00', 'morbidosoVerde.png', 'Chi non vorrebbe abbracciare un cactus e sentirsi al sicuro da ogni pericolo? Ora puoi!\r\n\r\nATTENZIONE: non è garantita la totale assenza di spine, tenere lontano dalla portata dei bambini.', 0),
(3, 'Cactus morbidoso (Rosso)', '10.00', 'morbidosoRosso.png', 'Chi non vorrebbe abbracciare un cactus e sentirsi al sicuro da ogni pericolo? Ora puoi!\r\n\r\nATTENZIONE: non è garantita la totale assenza di spine, tenere lontano dalla portata dei bambini.', 0),
(4, 'Bevanda Cac-tastica (0.5L)', '1.50', 'bevandaMezza.png', 'Sei assetato e hai bisogno di energie immediatamente? Acquista la nostra nuova bevanda energetica per non rimanere mai a secco!\r\n\r\n', 1),
(5, 'Bevanda Cac-tastica (1L)', '2.30', 'bevandaLitro.png', 'Sei assetato e hai bisogno di energie immediatamente? Acquista la nostra nuova bevanda energetica per non rimanere mai a secco!\r\n', 0),
(6, 'Mine-Cactus (Prodotto singolo)', '2.50', 'cactusMC.png', 'Il cactus digitale diviene finalmente realtà! Come non volerlo aggiungere alla propria collezione di loli.\r\n\r\nConfezione singola.', 0),
(7, 'Mine-Cactus (Full stack)', '100.00', 'cactusMC.png', 'Il cactus digitale diviene finalmente realtà! Come non volerlo aggiungere alla propria collezione di loli.\r\n\r\nConfezione full stack (x64)', 0),
(8, 'Cactus 404', '0.00', 'null.jpg', 'Il cactus introvabile: ordinalo a tuo rischio e pericolo.\r\n\r\nNon garantiamo rimborsi in caso di mancato ricevimento di questo articolo.', 1),
(9, 'Cactus lungo', '1.00', 'cactusNormal.png', 'E\' un cactus di forma allungata che aspira come gli uomini a raggiungere il cielo.', 0),
(10, 'Cat-tus', '3.00', 'cattus.png', 'Le due cose più adorabili che possano esistere in un unico pacchetto formato convenienza.', 0),
(11, 'Dipint-cactus', '15.00', 'cactusPaint.jpg', 'Dipinto a tema cactus che simboleggia l\'amore infinito e la devozione verso i cactus.', 0),
(12, 'Composizione di cactus', '7.00', 'cactusComposito.jpg', 'Composizione di cactus di differenti origini.', 0),
(13, 'Cactus parruccoso', '1.00', 'cactusParrucco.jpg', 'Cactus a forma di parrucca estraibile e indossabile.', 0),
(14, 'Collan-actus', '350.00', 'cactusGioiello.jpg', 'Collana in argento che simboleggia la devozione verso i cactus.', 0);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `cart_item`
--
ALTER TABLE `cart_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_id` (`cart_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indici per le tabelle `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `notifications_admin`
--
ALTER TABLE `notifications_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT per la tabella `cart_item`
--
ALTER TABLE `cart_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT per la tabella `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT per la tabella `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT per la tabella `notifications_admin`
--
ALTER TABLE `notifications_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT per la tabella `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `cart_item`
--
ALTER TABLE `cart_item`
  ADD CONSTRAINT `cart_item_ibfk_1` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`id`),
  ADD CONSTRAINT `cart_item_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
