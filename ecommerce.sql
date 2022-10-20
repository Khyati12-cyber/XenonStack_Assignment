

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

-- Database: `ecommerce`


CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `products` (`id`, `name`, `price`) VALUES
(1, 'Guess 1875', 3000),
(2, 'Guest Watch', 2500),
(3, 'Panerai Watch', 3500),
(4, 'Nonos Watch', 1800),
(5, 'Levis', 1800),
(6, 'louis philippe t-shirt', 2500),
(7, 'Highlander t-shirt', 500),
(8, 'GUCCI White t-Shirt', 2300),
(9, 'Nike White Sneaker', 8000),
(10, 'Nike White Shoes', 7500),
(11, 'Nike Yellow Sneaker', 7000),
(12, 'Nike Brown Sneaker', 6000),
(13, 'Beats Headphone', 22500),
(14, 'Zolo Headphone', 4500),
(15, 'Sony Speaker', 10500),
(16, 'Airpods', 15000);



CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(20) NOT NULL,
  `contact` int(12) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `users` (`id`, `email`, `name`, `contact`,'city','address', `password`) VALUES
(65, 'sharew5m123@gmail.com', 'reys', 789425631,'jhansi','kharar', 'Kg12345678@');

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

