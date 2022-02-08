-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Feb 08, 2022 alle 13:00
-- Versione del server: 10.4.21-MariaDB
-- Versione PHP: 8.0.12

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
(1, 0, '80cb180d085578194840');

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
(1, 1, 3, 2),
(2, 1, 9, 1);

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
(1, 'Cactus con miccia', '2.50', 'cactusMiccia', 'Cactus di porcellana attaccata ad una corda e pieno di polvere nera. Se lanciato alle spalle, può ostacolare gli inseguitori.\r\n\r\nE\' identico ad un comune cactus, tranne per la direzione in cui viene lanciato.', 1),
(2, 'Cactus morbidoso (Verde)', '10.00', 'morbidosoVerde', 'Chi non vorrebbe abbracciare un cactus e sentirsi al sicuro da ogni pericolo? Ora puoi!\r\n\r\nATTENZIONE: non è garantita la totale assenza di spine, tenere lontano dalla portata dei bambini.', 0),
(3, 'Cactus morbidoso (Rosso)', '10.00', 'morbidosoRosso', 'Chi non vorrebbe abbracciare un cactus e sentirsi al sicuro da ogni pericolo? Ora puoi!\r\n\r\nATTENZIONE: non è garantita la totale assenza di spine, tenere lontano dalla portata dei bambini.', 0),
(4, 'Bevanda Cac-tastica (0.5L)', '1.50', 'bevandaMezza', 'Sei assetato e hai bisogno di energie immediatamente? Acquista la nostra nuova bevanda energetica per non rimanere mai a secco!\r\n\r\n', 1),
(5, 'Bevanda Cac-tastica (1L)', '2.30', 'bevandaLitro', 'Sei assetato e hai bisogno di energie immediatamente? Acquista la nostra nuova bevanda energetica per non rimanere mai a secco!\r\n', 0),
(6, 'Mine-Cactus (Prodotto singolo)', '2.50', 'cactusMC', 'Il cactus digitale diviene finalmente realtà! Come non volerlo aggiungere alla propria collezione di loli.\r\n\r\nConfezione singola.', 0),
(7, 'Mine-Cactus (Full stack)', '100.00', 'cactusMC', 'Il cactus digitale diviene finalmente realtà! Come non volerlo aggiungere alla propria collezione di loli.\r\n\r\nConfezione full stack (x64)', 0),
(8, 'Cactus 404', '0.00', 'null', 'Il cactus introvabile: ordinalo a tuo rischio e pericolo.\r\n\r\nNon garantiamo rimborsi in caso di mancato ricevimento di questo articolo.', 1),
(9, 'Cactus', '1.00', 'cactusNormal', 'E\' un cactus.', 0),
(10, 'Cat-tus', '3.00', 'cattus', 'Le due cose più adorabili che possano esistere in un unico pacchetto formato convenienza.', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT per la tabella `cart_item`
--
ALTER TABLE `cart_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la tabella `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
