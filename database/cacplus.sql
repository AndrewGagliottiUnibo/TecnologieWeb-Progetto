-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 20, 2022 alle 17:40
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT per la tabella `cart_item`
--
ALTER TABLE `cart_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT per la tabella `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT per la tabella `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT per la tabella `notifications_admin`
--
ALTER TABLE `notifications_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

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
