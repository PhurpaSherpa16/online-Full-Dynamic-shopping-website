-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2017 at 10:38 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mfs`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `product_type` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_rate` int(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `product_type`, `product_name`, `product_rate`, `quantity`, `image`) VALUES
(12, 5, 46, 'fruits', 'Grape', 200, 1, 'f9edfa286f905de03053f83eb4575a59.jpg'),
(13, 5, 40, 'herbs', 'Mint', 250, 1, 'ca8a196f97a48b2bb489f3e849a68418.jpg'),
(16, 5, 23, 'fruits', 'Yellow Mango', 250, 5, 'db50dbd3b6b6b81821b8ac3f5488e81f.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `email` varchar(300) NOT NULL,
  `delivery_address` varchar(300) NOT NULL,
  `mobile_number` int(50) NOT NULL,
  `order_date` date NOT NULL,
  `qty` int(10) NOT NULL,
  `rate` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`id`, `user_id`, `product_id`, `email`, `delivery_address`, `mobile_number`, `order_date`, `qty`, `rate`) VALUES
(1, 3, 18, 'ramshram@gmail.com', 'ktm', 12001233, '2017-10-31', 4, 200),
(2, 3, 32, 'ramshram@gmail.com', 'ktm', 12001233, '2017-10-31', 4, 500),
(4, 3, 39, 'ramshram@gmail.com', 'ktm', 2147483647, '2017-11-04', 5, 450),
(7, 3, 49, 'ramshram@gmail.com', 'butwal', 0, '2017-11-04', 1, 600),
(8, 3, 46, 'ramshram@gmail.com', 'singapor', 2147483647, '2017-11-04', 4, 200),
(16, 5, 38, 'shiva@gmai.com', 'ktm', 2147483647, '2017-11-04', 1, 60),
(20, 3, 53, 'ramshram@gmail.com', 'ktm', 2147483647, '2017-11-04', 1, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `ptype` varchar(50) NOT NULL,
  `rate` varchar(50) NOT NULL,
  `details` varchar(255) NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pname`, `ptype`, `rate`, `details`, `image`) VALUES
(17, 'Apple', 'fruits', '200', 'Good for health. can be eaten always', '9f6290f4436e5a2351f12e03b6433c3c.jpg'),
(18, 'Apple', 'fruits', '200', 'Apple', '739309eb5ae9f7fd40ec7d26f2038467.jpg'),
(19, 'mango', 'fruits', '150', 'Mango full of vitamin and protein.', 'aa00faf97d042c13a59da4d27eb32358.jpg'),
(20, 'banana', 'fruits', '100', 'full of protein', '72b302bf297a228a75730123efef7c41.jpg'),
(22, 'avacado', 'fruits', '300', 'Avocado is Incredibly Nutritious\r\nThey Contain More Potassium Than Bananas\r\nAvocado is Loaded With Heart-Healthy Monounsaturated Fatty Acids\r\nAvocados Are Loaded With Fiber', '5ac6ab7d541d2bfdf5618d0e6f33e16d.jpg'),
(23, 'Yellow Mango', 'fruits', '250', 'Lowers Cholesterol\r\nClears the Skin\r\nImproves Eye Health\r\nAlkalizes the Whole Body\r\nImproves Digestion', 'db50dbd3b6b6b81821b8ac3f5488e81f.jpg'),
(24, 'papaya', 'fruits', '180', 'Papaya is Delicious and Loaded With Nutrients\r\nPapaya Has Anti-Cancer Properties\r\nThe Antioxidants in Papaya May Improve Heart Health\r\nPapaya Fights Inflammation\r\nPapaya May Improve Digestion', '2d6128bc89c98dc7a4462e8b310997a4.jpg'),
(25, 'Pomegranate', 'fruits', '300', 'It Protects Against Skin Damage\r\nThe Fruit is Delicious and Versatile\r\nCombine the diced fruit with coconut milk and ice in a blender, then blend until smooth.', '50c5e70d567c77ae817b9263b98843a1.png'),
(26, 'Eel', 'meat', '800', 'full of protein\r\nProtects Against Skin Damage', 'c43242bf34240497eb14ca9c63e48ea0.jpg'),
(27, 'fish', 'meat', '700', 'low cholostrel\r\nbest for break fast\r\nprotein full\r\n', '334c5c66bc4c2d4865767e2668b84a32.jpg'),
(28, 'chicken', 'meat', '280', 'Protein full\r\nconsmue my all ', '742929dcb631403d7c1c1efad2ca2700.jpg'),
(29, 'Pork', 'meat', '300', 'Full of fat and best for sekuwa', '34e3f440dad631cf8d085c8c3eca894b.jpg'),
(31, 'Pirsa', 'meat', '1200', 'Calories: 59.\r\nCarbohydrates: 15 grams.\r\nFiber: 3 grams.\r\nProtein: 1 gram.\r\nVitamin C: 157% of the RDI.\r\nVitamin A: 33% of the RDI.\r\nFolate (Vitamin B9): 14% of the RDI.\r\nPotassium: 11% of the RDI.', '624cad368d080452b90c2f74ce15bada.jpg'),
(32, 'Alovera', 'herbs', '500', 'Vitamin C: 157% of the RDI.\r\nVitamin A: 33% of the RDI.\r\nFolate (Vitamin B9): 14% of the RDI.', 'edec7e84f35a9848a4834869ece0487d.jpg'),
(33, 'Basil', 'fruits', '350', 'by consuming Improve Digestion\r\nProtects Against Skin Damage\r\nused in salad', '64bf6a86230365619e9249e5b083aa46.jpg'),
(35, 'Potato', 'vegetables', '50', 'Calories: 59.\r\nCarbohydrates: 15 grams.', 'bb8e09a312941709ab85b7b147c74abc.jpg'),
(36, 'Capsium', 'vegetables', '80', 'Fiber: 3 grams.\r\nProtein: 1 gram.\r\nVitamin C: 157% of the RDI.\r\nVitamin A: 33% of the RDI.\r\nFolate (Vitamin B9): 14% of the RDI.\r\nPotassium: 11% of the RDI.', '84c03535b43e24ebba1ec465c1a1dee9.jpg'),
(37, 'Mushroom', 'vegetables', '450', 'Calories: 59.\r\nCarbohydrates: 15 grams.\r\nFiber: 3 grams.\r\nProtein: 1 gram.\r\nVitamin C: 157% of the RDI.\r\nVitamin A: 33% of the RDI.\r\nFolate (Vitamin B9): 14% of the RDI.\r\nPotassium: 11% of the RDI.', 'b93c3d9029fa42815abf0551db0cec98.jpg'),
(38, 'Spinach', 'vegetables', '60', 'Vitamin C: 157% of the RDI.\r\nVitamin A: 33% of the RDI.\r\nFolate (Vitamin B9): 14% of the RDI.', '4a112dd0513c5f5a9bc30097d9107a20.jpg'),
(39, 'Cardimom', 'herbs', '450', 'Fiber: 3 grams.\r\nProtein: 1 gram.\r\nFolate (Vitamin B9): 14% of the RDI.\r\nPotassium: 11% of the RDI.\r\nvitamin : D', 'f6d0117d25925fb7d93ddb7cd47ebcc2.jpg'),
(40, 'Mint', 'herbs', '250', 'Fiber: 3 grams.\r\nProtein: 1 gram.\r\nVitamin C: 157% of the RDI.\r\nVitamin A: 33% of the RDI.', 'ca8a196f97a48b2bb489f3e849a68418.jpg'),
(41, 'Gauva', 'fruits', '300', 'very healthy', 'Gauva.jpg'),
(46, 'Grape', 'fruits', '200', 'Calories: 59.\r\nCarbohydrates: 15 grams.\r\nFiber: 3 grams.\r\nProtein: 1 gram.\r\nVitamin C: 157% of the RDI.\r\nVitamin A: 33% of the RDI.\r\nFolate (Vitamin B9): 14% of the RDI.\r\nPotassium: 11% of the RDI.', 'f9edfa286f905de03053f83eb4575a59.jpg'),
(49, 'Prawn', 'meat', '600', 'Calories: 59.\r\nCarbohydrates: 15 grams.\r\nFiber: 3 grams.\r\nProtein: 1 gram.\r\nVitamin C: 157% of the RDI.\r\nVitamin A: 33% of the RDI.\r\nFolate (Vitamin B9): 14% of the RDI.\r\nPotassium: 11% of the RDI.', 'd04e06af2e1c35acbd9bade84a1a1371.jpg'),
(51, 'Motton', 'meat', '800', 'healthy food', '09bd106152b562048ace33326cd4bf95.jpg'),
(53, 'Crab', 'meat', '1000', 'very healty\r\nlow colostrel\r\n13%fat\r\nfull of vitamin D\r\nfull of vidatim E\r\ncannot consume by heart disease', '2d7acadf10224ffdabeab505970a8934.jpg'),
(54, 'strawberry', 'fruits', '500', 'full of vitamin d,\r\nfull of vitamin E; and \r\nbad for common cold', '495bf9840649ee1ec953d99f8e769889.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(10) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `lname`, `email`, `address`, `phone`, `password`, `type`) VALUES
(1, 'Phurpa', 'Sherpa', 'phurpasherpa900@gmail.com', 'KTM', '123456789', 'phurpa', 'admin'),
(3, 'Ram', 'Sharma', 'ramshram@gmail.com', 'Pokhara', '9878456532', 'ram123', 'normal'),
(5, 'Shiva', 'Jai', 'shiva@gmai.com', 'ktm', '9874661236', 'shiva', 'normal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_product_ibfk_1` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `register` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_product_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
