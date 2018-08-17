# MyShop
This is test sample of shop just to basic coding idea that we could make simple and sober Ecommerce website dynamically ..this is under process time by time i will improve and update it

Only thing to do just upload all the images in new folder and add name 'images'

database Query:

--
-- Database: `myshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(10) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'HP'),
(2, 'SAMSUNG'),
(3, 'DEL'),
(4, 'NOKIA'),
(5, 'IPAD'),
(6, 'SONY');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` int(10) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Computers'),
(2, 'Mobiles'),
(3, 'Laptops'),
(4, 'TVs'),
(5, 'Cameras'),
(6, 'Tablets'),
(7, 'E-books');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `brand_id` int(10) NOT NULL,
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_desc` text NOT NULL,
  `status` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `cat_id`, `brand_id`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_desc`, `status`, `date`) VALUES
(3, 3, 1, 'HP Laptop', 'hp3.png', 'hp2.png', 'hp1.jpg', 400, '<p>hello bhai best lapis this one</p>', 'on', '2017-10-03 03:49:40'),
(4, 3, 3, 'Dell Laptop', 'dell1.jpg', 'dell2.jpg', 'dell3.jpeg', 600, '<p>This is Dell Laptop</p>', 'on', '2017-10-03 04:18:19'),
(5, 3, 4, 'Samsung Laptop', 'IMG_1003.JPG', '', '', 400, '<p>sdfsdfgsdgmsfgkmfdmgkmfdsgfdgfdgfdgfdsgdfg</p>', 'on', '2018-03-07 23:24:26'),
(6, 3, 4, 'Nokia My Photos', 'IMG_1582.JPG', '', '', 600, '<p>dsg sekfsjdf ksjefljwf knseekfnlskfk kefjkwejfkjwekjfkjwe</p>', 'on', '2018-03-07 23:29:03'),
(7, 3, 6, 'Best Camera HD', 'jean-gerber-276169-unsplash.jpg', '', '', 800, '<p>This is Camera</p>', 'on', '2018-03-07 23:53:06'),
(8, 3, 5, 'Ipad Laptop', 'IMG_0776.JPG', '', '', 900, '<p>Ipad latest technology</p>', 'on', '2018-03-07 23:54:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

