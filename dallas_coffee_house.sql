-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2020 at 03:06 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dallas_coffee_house`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `user_id` int(100) NOT NULL,
  `item_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `item_id` varchar(5) NOT NULL,
  `type` text NOT NULL,
  `name` text NOT NULL,
  `description` varchar(100) NOT NULL,
  `quantity` int(50) NOT NULL,
  `price` int(100) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`item_id`, `type`, `name`, `description`, `quantity`, `price`, `deleted`) VALUES
('001', 'drinks', 'Assam tea', 'Only the finest tea leaves from Assam give you the intense taste.', 13, 15, 0),
('002', 'desserts', 'Rasgulla Sundae', 'Scoops of vanilla ice cream blending with rich Rasmalai.', 9, 20, 0),
('003', 'snacks', 'Chicken Biryani', 'Took all the time to better a Afghani touch.', 14, 20, 1),
('004', 'drinks', 'Aztec Coffee', 'Espresso with imported coffee beans with foamed milk.', 8, 12, 0),
('005', 'drinks', 'Ethiopian Coffee', 'Espresso brewed imported coffee beans and foamed milk.', 15, 15, 0),
('006', 'drinks', 'Cafe Americano', 'American Classic coffee', 16, 12, 0),
('007', 'desserts', 'Black Forest Cake', 'Black forest cake with a sinful layer of rich chocolate mousse.', 15, 20, 0),
('008', 'snacks', 'Chicken Cheese Burger', 'Juicy chicken patty between soft oatmeal buns with fresh veggies.', 12, 15, 0),
('009', 'snacks', 'Chicken Classic Burger', 'Juicy chicken patty stuffed between soft oatmeal buns along with fresh veggies.', 10, 15, 0),
('010', 'drinks', 'Café Frappe', 'Rich Creamy cold coffee.', 19, 12, 0),
('011', 'drinks', 'Café Latte', 'A light coffee accompanied by a shot of Espresso and steamed milk.', 17, 15, 0),
('012', 'drinks', 'Café Mocha', 'Espresso with chocolate and steamed milk.', 17, 12, 0),
('013', 'desserts', 'Black Forrest Cake', 'Smothered with whipped cream and topped off with juicy cherries.', 11, 20, 0),
('014', 'drinks', 'Classic Cappuccino', 'Espresso topped and steamed with foamed milk.', 19, 10, 0),
('015', 'snacks', 'Chicken Spicy Burger', 'Juicy chicken patty stuffed between soft oatmeal buns along with fresh veggies.', 14, 15, 0),
('016', 'drinks', 'Vanilla Cappuccino', 'Cappuccino enhanced with the delicate and subtle essence of Vanilla.', 20, 12, 0),
('017', 'desserts', 'Crackling Brownie', 'This is a dummy description!!I really didnt want to write this thing at all!!', 15, 15, 0),
('018', 'drinks', 'Classic Lemonade', 'A lemonade with mint and ginger that make for the perfect sip.', 20, 12, 0),
('019', 'drinks', 'Cold Cocoa Latte', 'Creamy ice cold chocolate milkshake.', 20, 14, 0),
('020', 'snacks', 'Veg Cheese Burger', 'Flavourful veggie patty stuffed between soft oatmeal buns with handpicked veggies.', 15, 15, 0),
('021', 'drinks', 'Cool Blue', 'A syrupy blue blend skating on crushed ice!', 19, 15, 0),
('022', 'drinks', 'Crunchy Frappe', 'A rich chocolaty meltdown loaded with crunchy oreos.', 20, 16, 0),
('023', 'drinks', 'Darjeeling Tea', 'Darjeeling tea with floral aroma and hints of spice.', 20, 12, 0),
('024', 'drinks', 'Dark Frappe', 'Make your cold coffee delightful with more chocolate and extra ice-cream.', 20, 20, 0),
('025', 'drinks', 'Devil\'s Own', 'Get aquainted with mix of Cafe Frappe loaded with chocolate and cream!', 20, 15, 0),
('026', 'drinks', 'Opener Espresso', 'Bold coffee served in a shot to re-energize.', 20, 15, 0),
('027', 'drinks', 'Filter Coffee', 'South Indian style coffee to remind you of coffee in Karnataka.', 20, 20, 0),
('028', 'drinks', 'Green Tea', 'Aromatic tea mixed with Jasmine bits that give a distinct fragrance and flavour.', 19, 13, 0),
('029', 'drinks', 'Gourmet Cocoa', 'Dark chocolate lovers this is a blend of gourmet Italian dark chocolate with hot milk.', 19, 22, 0),
('030', 'drinks', 'Cappuccino', 'Cappuccino made upside down with steamed milk and a coffee ring.', 20, 12, 0),
('031', 'drinks', 'Cappuccino(sf)', 'Sugar-free Cappuccino made upside down with steamed milk and a coffee ring.', 20, 15, 0),
('032', 'drinks', 'Kaapi Nirvana', 'Carribbean flavours topped with whipped creme and chocolate vermicelli.', 20, 20, 0),
('033', 'drinks', 'Khus Coconut Refresher', 'Refreshing coconut water with comforting coolness of khus and honey.', 20, 16, 0),
('034', 'drinks', 'Macchiato', 'Macchiato is bold espresso with foamed milk.', 20, 12, 0),
('035', 'drinks', 'Masala Chai', 'Tea with spices', 20, 15, 0),
('036', 'drinks', 'Rasmalai Delight', 'Creamy beverage sprinkled with almonds and rasmalai', 20, 18, 0),
('037', 'drinks', 'Sugarcane Refresher', 'Sugarcane juice with lemon and khus.', 20, 15, 0),
('038', 'drinks', 'Tropical Iceberg', 'Double shot of espresso brewed of imported coffee beans and topped with foamed milk.', 20, 12, 0),
('039', 'drinks', 'Vegan Shake', 'A cool coffee that tastes smooth and creamy without milk.', 20, 19, 0),
('040', 'snacks', 'Veg Classic Burger', 'Flavourful veggie patty stuffed between soft oatmeal buns with handpicked veggies.', 15, 15, 0),
('041', 'snacks', 'Veg Cheese Burger', 'Flavourful veggie patty stuffed between soft oatmeal buns with handpicked veggies.', 13, 15, 0),
('042', 'snacks', 'Cheese Toastizza', 'A mini toast pizza.', 15, 20, 0),
('043', 'snacks', 'Crispy Veg Wrap', 'We made veggies taste good. You can thank us later.', 15, 16, 0),
('044', 'snacks', 'Egg Wrap', 'Classic Indian egg bhurji.', 15, 14, 0),
('045', 'snacks', 'Garlic Bread', 'Buttery rich goodness infused with garlic.', 15, 13, 0),
('046', 'snacks', 'Munch-On Nachos', 'The crispiest of corn chips pampered with salsa from the land of Tex-Mex.', 15, 18, 0),
('047', 'snacks', 'Peppy Chicken Roll', 'Peppery chicken with capsicum and red onion in Malabar egg paratha.', 15, 20, 0),
('048', 'snacks', 'Chicken \'N\' Cheese', 'Roasted chicken with onions in soft bread topped with corn meal.', 15, 20, 0),
('049', 'snacks', 'Smoked Chicken', 'Smoked chicken topped veggies in a white bread topped with chipotle.', 15, 20, 0),
('050', 'snacks', 'Spinach \'N\' Corn', 'Spinach and corn with melted cheese in a soft bread topped with chipotle.', 15, 20, 0),
('051', 'snacks', 'Tandoori Chicken', 'Tandoori chicken with tomatoes in a soft bread with corn.', 15, 20, 0),
('052', 'snacks', 'Tandoori Paneer', 'Tandoori paneer with salad in a soft bread topped with corn.', 15, 20, 0),
('053', 'snacks', 'The Couch Potato', 'Potatoes meets onion rings under cornmeal bread for a spicy goodness.', 15, 15, 0),
('054', 'snacks', 'Veg Cutlet', 'Crispy vegetables and potato patty mixed with the spices and pepper.', 15, 12, 1),
('055', 'desserts', 'Mocha Butterscotch ', 'Melange of toffee and coffee all in one must have dessert cup.', 14, 12, 0),
('056', 'desserts', 'Cocoa Cake', 'Sinful and rich cocoa fantasy with extra chocolate sauce!', 14, 20, 0),
('057', 'desserts', 'Cocoa Pastry', 'Classic chocolate pre sliced pastry with cream & cocoa vermicelli.', 15, 15, 0),
('058', 'desserts', 'Dutch Truffle Cake', 'Dense chocolate cake with a decadent dutch truffle sauce.', 15, 20, 0),
('059', 'desserts', 'Cocoa Éclair', 'Original French dessert with choux pastry layered in molten chocolate.', 13, 12, 0),
('060', 'desserts', 'Fruit Trifle', 'Exotic cut fruit laden with creamy custard.', 15, 12, 0),
('061', 'desserts', 'Pineapple Delight', 'Airy sponge cake with dollops of pineapple mousse.', 15, 20, 0),
('062', 'desserts', 'Pineapple cake', 'Sponge cake covered in layer of pineapples and layer of pineapple mousse.', 15, 20, 0),
('063', 'desserts', 'Pineapple Pastry', 'Glazed pineapple mousse cake served with freshly whipped cream.', 15, 15, 0),
('064', 'desserts', 'Raspberry Dome', 'Sink into heavenly blend of raspberry and chocolate mousse.', 15, 15, 0),
('065', 'desserts', 'Chocolate icecream', 'Luscious and tempting chocolate ice cream.', 15, 12, 0),
('066', 'desserts', 'Hazelnut Kake', 'Hazelnut Karat Cake-a tasteful combination of white chocolate and hazelnuts', 15, 20, 0),
('067', 'desserts', 'Hazelnut Pastry', 'A delicious carrot cake put together white chocolate and hazelnuts.', 15, 15, 0),
('068', 'desserts', 'Nutty Brownie', 'Soft and gooey American fudge cake with crunchy walnuts.', 15, 12, 0),
('069', 'desserts', 'Indulgence Cake', 'Our signature chocolate cake with a layer of Butterscotch filling.', 15, 20, 0),
('070', 'desserts', 'Sizzle Brownie', 'Sizzling hot choco brownie served with vanilla ice cream and choco sauce.', 15, 15, 0),
('071', 'desserts', 'Vanila icecream', 'The original vanilla ice cream.', 15, 10, 0),
('072', 'drinks', 'Chai', 'Natural Tea', 8, 10, 0),
('073', 'drinks', 'Neem Tea', 'Herbal tea with good effects', 14, 10, 0),
('074', 'snacks', 'Classic Fries', 'Crispy fries with salt and pepper', 17, 10, 1),
('082', 'snacks', 'Spicy Tacos', 'Crispy tortillas with spicy filling', 20, 15, 0),
('083', 'snacks', 'Tacos', 'Crispy tortillas with spicy filling', 15, 15, 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `trans_id` varchar(50) NOT NULL,
  `item_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`trans_id`, `item_id`) VALUES
('1588989999', '001'),
('1588989999', '008'),
('1588989999', '008'),
('1588989999', '002'),
('1588989999', '002'),
('1589002804', '072'),
('1589002804', '073'),
('1589002804', '072'),
('1589004871', '001'),
('1589004871', '004'),
('1589005480', '001'),
('1589005686', '001'),
('1589008821', '013'),
('1589008821', '013'),
('1589008821', '013'),
('1589010106', '009'),
('1589010106', '015'),
('1589013310', '004'),
('1589013310', '012'),
('1589013310', '013'),
('1589013310', '004'),
('1589013310', '004');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `trans_id` varchar(50) NOT NULL,
  `user_id` int(100) NOT NULL,
  `date_of_order` date NOT NULL,
  `time_of_order` varchar(30) NOT NULL,
  `total_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`trans_id`, `user_id`, `date_of_order`, `time_of_order`, `total_price`) VALUES
('1588989999', 2, '2020-05-09', '04:06 am', 96.75),
('1589002804', 2, '2020-05-09', '07:40 am', 36.25),
('1589004871', 2, '2020-05-09', '08:14 am', 32.95),
('1589005480', 2, '2020-05-09', '08:24 am', 19.75),
('1589005686', 2, '2020-05-09', '01:28 am', 19.75),
('1589008821', 5, '2020-05-09', '02:20 am', 69.25),
('1589010106', 2, '2020-05-09', '02:41 am', 36.25),
('1589013310', 9, '2020-05-09', '03:35 am', 78.05);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(100) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `address` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `city` text NOT NULL,
  `zipcode` int(10) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email_id`, `password`, `first_name`, `last_name`, `address`, `dob`, `city`, `zipcode`, `admin`) VALUES
(2, 'shin@gmail.com', '6a7e08d0ea696ba3bd861484056910689b5b8a17', 'Shinpachi', 'zaraki', 'B/403,JM Darshan Building,Shiv Mandir Road, Ramnagar', '1989-09-07', 'Dallas', 42120, 0),
(4, 'laksh@gmail.com', 'e294610ccd0eef0e956df0d92e84122d6690dbb1', 'Lakshmeesha', 'Shetty', '7650 McCallum Boulevard, 416', '1997-08-09', 'Dallas', 75252, 1),
(5, 'sasuke@gmail.com', '480bacd92947326531ecf87da7dbf230710ef55a', 'Sasuke', 'uchiha', 'Shinobi Village', '2000-07-08', 'Dallas', 75252, 0),
(9, 'lakshmeesha.shetty@gmail.com', '6a422c83e4590a52f1fe68b708d59fa93ba48301', 'Lakshmeesha', 'Shetty', '7650 McCallum Boulevard, 416', '1997-02-14', 'Dallas', 75252, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `item_id` (`item_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD KEY `trans_id` (`trans_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`trans_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `menu` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`trans_id`) REFERENCES `transaction` (`trans_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `menu` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
