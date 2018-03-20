-- MySQL dump 10.13  Distrib 5.7.12, for osx10.9 (x86_64)
--
-- Host: 127.0.0.1    Database: web90db1
-- ------------------------------------------------------
-- Server version	5.6.33

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `category_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `catname` varchar(100) NOT NULL,
  `catdescription` varchar(250) NOT NULL,
  `client_id` int(7) unsigned zerofill NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `updated_last` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`category_id`),
  KEY `name` (`client_id`,`catname`)
) ENGINE=MyISAM AUTO_INCREMENT=137 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (127,'Bengal Dishes','Cooked With Garlic, Tomato, Green Pepper, Fresh Corriander And Boiled Egg',0000023,0,'2017-03-14 09:10:30',0),(125,'Bhuna Dishes','Onion, Tomatoes',0000023,0,'2017-03-14 08:56:12',0),(135,'Big Value Meals','',0000023,0,'2017-03-14 13:38:08',0),(102,'Biryani Specialties','Chicken, Meat, Prawn or Veg cooked Tilda Basmati rice',0000023,0,'2017-04-21 09:49:28',0),(128,'Bombay Dishes','Cooked With Tomato, Green Peppers, Fresh Coriander, Garlic And Potatoes ',0000023,0,'2017-03-14 09:13:16',0),(115,'Ceylon Dishes','Fairly Hot with Coconut',0000023,0,'2017-03-13 16:40:31',0),(104,'Chef&#039;s Recommendations','',0000023,0,'2017-04-21 09:57:37',0),(130,'Chilli Bhuna','Thick consistency, cooked with various herbs and spices with added chilli pickle to give it a unique flavour',0000023,0,'2017-04-19 09:29:48',0),(124,'Dansak Dishes','Hot, Sweet &amp; Sour With Lentils',0000023,0,'2017-03-14 08:48:05',0),(111,'Desserts','',0000023,0,'2016-12-15 09:11:14',0),(133,'Devil Flamin&#039; Naga','Cooked with garlic, onion, green pepper and fresh corriander with dorset naga sauce&lt;br /&gt;\r\nPlease be aware - EXTREMELY HOT DISH!!!',0000023,0,'2017-04-25 16:37:03',0),(112,'Dupiaza Dishes','Diced Onions, Green Peppers &amp; Tomatoes',0000023,0,'2017-03-13 16:16:44',0),(129,'Garlic Bhuna','Cooked with chopped garlic, fresh herbs, onions &amp; spices',0000023,0,'2017-04-19 09:26:56',0),(103,'House Specials','',0000023,0,'2016-12-15 09:09:04',0),(131,'Jalfrezi','Cooked with fresh chilli, onion and green pepper, strongly spiced to give a fairly hot flavour',0000023,0,'2017-04-19 09:25:52',0),(119,'Kashmir Dishes','Mild And Creamy With Coconut &amp; Banana',0000023,0,'2017-03-14 17:26:00',0),(132,'Korai','Tender pieces of Chicken or Lamb cooked in a thick succelent spicy sauce with onions, green peppers and peeled tomatoes',0000023,0,'2017-04-19 09:24:49',0),(117,'Korma Dishes','Mild &amp; Creamy With Coconut',0000023,0,'2017-03-13 16:49:03',0),(121,'Madras Dishes','Fairly Hot',0000023,0,'2017-03-13 17:23:36',0),(118,'Malaya Dishes','Mild &amp; Creamy With Coconut &amp; Pineapple',0000023,0,'2017-03-13 17:15:04',0),(120,'Medium Curry Dishes','',0000023,0,'2017-03-13 17:18:11',0),(134,'Mishti Jal Korma','Sweet and Hot dish cooked with Coconut, Cream and Chilli',0000023,0,'2017-04-19 09:22:56',0),(126,'Panir Dishes','Cooked with our Chef&#039;s own recipe of spices with added cheese',0000023,0,'2017-04-19 09:22:13',0),(114,'Pathia Dishes','Hot, Sweet &amp; Sour',0000023,0,'2017-03-13 16:25:17',0),(116,'Phal Dishes','Extremely Hot',0000023,0,'2017-03-13 16:45:01',0),(109,'Pickels &amp; Curry Sauces','',0000023,0,'2016-12-15 09:10:55',0),(108,'Rice Varieties','',0000023,0,'2017-04-21 10:19:40',0),(123,'Rogan Dishes','Medium with Fried Tomatoes Topping',0000023,0,'2017-03-14 08:43:48',0),(113,'Sag Dishes','Cooked With Spinach',0000023,0,'2017-03-13 16:21:09',0),(99,'Starters','Starters served with salad &amp; mint sauce',0000023,0,'2017-04-25 14:46:30',0),(110,'Sundries','',0000023,0,'2016-12-15 09:11:04',0),(100,'Tandoori Main Course (HO)','All Tandoori dishes are marinated in various herds and spice cooked freshly in a clay oven to give it a unique flavour. Served with salad and mint sauce',0000023,0,'2017-04-21 09:39:48',0),(106,'Traditional Dishes','',0000023,1,'2017-04-21 10:06:08',0),(107,'Vegetable Dishes','',0000023,0,'2016-12-15 09:10:22',0),(105,'Vegetarian Specials','',0000023,0,'2017-04-21 10:01:44',0),(122,'Vindaloo Dishes','Very Hot',0000023,0,'2017-05-05 12:01:09',0);
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `client` (
  `client_id` int(7) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `description` varchar(254) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `cuisine` int(11) NOT NULL DEFAULT '1',
  `postcode` varchar(50) NOT NULL,
  `town` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `website` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mypass` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `edited` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name_resto` varchar(100) NOT NULL,
  `status` enum('yes','no') NOT NULL DEFAULT 'yes',
  `last_invoice` date NOT NULL DEFAULT '0000-00-00',
  `charge` double(4,2) NOT NULL DEFAULT '0.50',
  `mincharge` int(11) NOT NULL,
  `equipment_rental` double(4,2) NOT NULL DEFAULT '20.00',
  `payment_terms` varchar(50) DEFAULT NULL,
  `preferred_currency` char(3) NOT NULL DEFAULT 'GBP',
  `exchange_rate` decimal(8,4) NOT NULL,
  `image` varchar(100) NOT NULL,
  `title` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `nickname` varchar(25) NOT NULL,
  `address2` varchar(150) NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` int(11) NOT NULL,
  `disabled` int(11) NOT NULL DEFAULT '0',
  `mobile` varchar(100) NOT NULL,
  `delivery_time` int(11) NOT NULL DEFAULT '30',
  `vat` double(4,2) NOT NULL DEFAULT '17.50',
  `greeting` varchar(250) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `email_verified` tinyint(1) NOT NULL DEFAULT '0',
  `updated_by` int(11) NOT NULL,
  `updated_last` datetime NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client`
--

LOCK TABLES `client` WRITE;
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
INSERT INTO `client` VALUES (0000023,'','logo.gif',5,'BS24 9DD','Weston-super-Mare','2 Aller Parade','','chutneys@chutneystakeaway.co.uk','5563dd165fb08233afbe596f0a36fc03','01934 813551','01934 815338','0000-00-00 00:00:00','2017-07-09 05:54:07','Chutney\'s Takeaway','yes','0000-00-00',0.00,0,20.00,NULL,'GBP',0.0000,'',0,'Chutney&#039;s','','Takeaway','admin','','',0,0,'',30,0.00,'',0,0,0,'2016-12-15 09:02:45');
/*!40000 ALTER TABLE `client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cuisine`
--

DROP TABLE IF EXISTS `cuisine`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cuisine` (
  `cuisine_id` int(11) NOT NULL AUTO_INCREMENT,
  `cuisine` varchar(150) NOT NULL,
  PRIMARY KEY (`cuisine_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cuisine`
--

LOCK TABLES `cuisine` WRITE;
/*!40000 ALTER TABLE `cuisine` DISABLE KEYS */;
INSERT INTO `cuisine` VALUES (1,'Bangladeshi'),(2,'Burgers'),(3,'Chinese'),(4,'Halal'),(5,'Indian'),(14,'Chicken'),(7,'Japanese'),(8,'Kebab'),(9,'Lebanese'),(10,'Pizza'),(11,'Salads'),(12,'Soups'),(13,'Sushi');
/*!40000 ALTER TABLE `cuisine` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address2` varchar(200) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `status` enum('Yes','No') NOT NULL DEFAULT 'Yes',
  `email` varchar(100) NOT NULL,
  `mypass` varchar(100) NOT NULL,
  `name_title` varchar(10) NOT NULL,
  `email_verified` tinyint(4) NOT NULL,
  `cus_from` varchar(255) DEFAULT '',
  `date_registered` date DEFAULT NULL,
  PRIMARY KEY (`customer_id`),
  UNIQUE KEY `phone` (`phone`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES (1,'Jeff','Green','25 Canada Square, Level 33','Canary Wharf','020 8099 2088','London','E14 5LB',NULL,'Yes','jeff.green@indigo21.com','166ee015c0e0934a8781e0c86a197c6e','1',0,NULL,NULL),(2,'Mechelle','Niezas','351 Wilmslow Road','Fallowfield','02075170341','Manchester','M14 6XS',NULL,'Yes','mechelle.niezas@indigo21.com','72ec3994e0bef885422f35f27f9eb42e','2',0,NULL,NULL),(3,'Aileen','So','180 Great Western Street   ','Burnage','02074078401','Manchester','M14 4LH',NULL,'Yes','aileen.so@indigo21.com','b807023f87e63b8ada92f79f546ff9cc','2',0,NULL,NULL),(4,'Sarah','Timbang','180 Great Western Street   ','Canary Wharf','02075185896','Manchester','E14 5LB',NULL,'Yes','sarah.timbang@indigo21.com','9e9d7a08e048e9d604b79460b54969c3','3',0,NULL,NULL),(5,'Name','0','New Hampshire','','0124345122','Kent','3fdfc',NULL,'Yes','','','',0,NULL,NULL),(6,'Abdul Kareem Jabar','0','Bag End','','02071001114','The Shire','',NULL,'Yes','','','',0,NULL,NULL),(7,'Fe Ang Park','0','Incheon','Busan','020702345','South Korea','',NULL,'Yes','','','',0,NULL,NULL),(8,'Bob Uy','0','Parc Chateau','Ortigas Centre','+632 6311525','Pasig City, Philippines','1550',NULL,'Yes','','','',0,NULL,NULL),(9,'Michelle Soh','0','Ralph St','','0000000000','Loughton','pwu 13ad',NULL,'Yes','','','',0,NULL,NULL),(10,'Michelle Soh','0','Ralph St','','89785','Loughton','pwu 13ad',NULL,'Yes','','','',0,NULL,NULL),(11,'Sheila ','0','25 canada square','','07850783192','london','ec14 5lb',NULL,'Yes','','','',0,NULL,NULL),(12,'Nicola Bridgette','0','','','07779717283','','',NULL,'Yes','','','',0,NULL,NULL),(13,'Aileen','So','Address 1','Address 2','123456789','City','Post Code',NULL,'Yes','aileen.so@indigo21.com','b807023f87e63b8ada92f79f546ff9cc','2',0,NULL,NULL),(14,'Ron','Que','Elisha','Indigo','987654321','Pasig','123456789',NULL,'Yes','ronwaldo.querol@elishatelecom.com','e70812387ca71bb503f9678b68632e99','3',0,NULL,NULL),(15,'Joy','0','Unit 1506 Centerpoint Building','Garnet Rd Julia Vargas','anonymous','Pasig','1440',NULL,'Yes','','','',0,NULL,NULL),(16,'Keavin Mutuc','0','12 Eastwood Ln','','08450045333','Kent','AV1 3YL',NULL,'Yes','','','',0,NULL,NULL),(17,'John Fifield','0','1 the mall','','07483250130','','',NULL,'Yes','','','',0,NULL,NULL),(18,'test','tes','test','Level 33 Canary Wharf','2070991117','London','E14 5LB',NULL,'Yes','support@indigo21.com','434990c8a25d2be94863561ae98bd682','1',0,NULL,NULL),(19,'Ian','Wilkinson','12 Anyroad','Anywhere','1122334455','Brighton','BRI 123',NULL,'Yes','ukwilky@gmail.com','cc03e747a6afbbcbf8be7668acfebee5','1',0,NULL,NULL),(20,'jon','snow','test','test','5678','test','test',NULL,'Yes','joy.babelonia@indigo21.com','5a665206e6374a1b3b95e05d1ae9ecd8','1',0,NULL,NULL),(21,'chuchie','ignacio','test address 1','test address 2','123','city','123',NULL,'Yes','chuchie.ignacio@indigo21.com','64995bf60a51da1df00916fd7141d072','2',1,NULL,NULL),(22,'Joene One','Floresca One','4376 Montojo street','test','09232232321','Makati','1204',NULL,'Yes','joenefloresca@gmail.com','5f4dcc3b5aa765d61d8327deb882cf99','1',1,NULL,NULL),(23,'Joene Tol','Floresca','1234 Address','addr','092223232','Makati','1204','','Yes','joene@yahoo.com','5f4dcc3b5aa765d61d8327deb882cf99','1',0,NULL,NULL);
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_addon`
--

DROP TABLE IF EXISTS `menu_addon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu_addon` (
  `addon_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `menu_category_id` int(11) NOT NULL,
  `addon_group_name` varchar(50) NOT NULL,
  `addon_name` varchar(50) NOT NULL,
  `addon_price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`addon_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_addon`
--

LOCK TABLES `menu_addon` WRITE;
/*!40000 ALTER TABLE `menu_addon` DISABLE KEYS */;
INSERT INTO `menu_addon` VALUES (1,3,20,93,'Extra Pepperoni','Regular',35.00),(2,3,20,93,'Extra Pepperoni','Large',45.00),(3,3,20,93,'Extra Pepperoni','New Yorker',65.00),(4,8,20,93,'','chicken strips',35.00),(5,8,20,93,'','shrimp',60.00),(6,4,20,93,'EXTRA MOZZARELLA CHEESE','Regular',35.00),(7,4,20,93,'EXTRA MOZZARELLA CHEESE','Large',65.00),(8,4,20,93,'EXTRA MOZZARELLA CHEESE','New Yorker',95.00),(9,4,20,93,'EXTRA PINEAPPLE BITS','Regular',25.00),(10,4,20,93,'EXTRA PINEAPPLE BITS','Large',35.00),(11,4,20,93,'EXTRA PINEAPPLE BITS','New Yorker',45.00),(12,4,20,93,'EXTRA HAM','Regular',35.00),(13,4,20,93,'EXTRA HAM','Large',45.00),(14,4,20,93,'EXTRA HAM','New Yorker',65.00),(15,10,19,92,'Group Addon 1','addon1',10.00),(16,10,19,92,'Group Addon 1','addon2',15.00),(17,10,19,92,'Group Addon 2','Addon A',12.00),(18,10,19,92,'Group Addon 2','Addon B',13.00),(19,13,19,96,'Extra Egg','Whole egg',2.50),(20,13,19,96,'Extra Egg','Half egg',1.50);
/*!40000 ALTER TABLE `menu_addon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_price`
--

DROP TABLE IF EXISTS `menu_price`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu_price` (
  `price_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) NOT NULL,
  `price_type` tinyint(1) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `opt_type` varchar(50) NOT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`price_id`)
) ENGINE=MyISAM AUTO_INCREMENT=270 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_price`
--

LOCK TABLES `menu_price` WRITE;
/*!40000 ALTER TABLE `menu_price` DISABLE KEYS */;
INSERT INTO `menu_price` VALUES (1,1,1,0.00,'',0),(2,2,1,450.00,'',0),(3,3,2,380.00,'12\"',0),(4,3,2,400.00,'14\"',0),(5,4,2,345.00,'10\" Regular Pizza',0),(6,4,2,565.00,'14\" Large Pizza',0),(7,4,2,785.00,'18\" New Yorker Pizza',0),(8,5,1,40.00,'',0),(9,6,1,60.00,'',0),(10,7,2,40.00,'',0),(11,8,1,295.00,'',0),(12,9,2,55.00,'Raspberry',0),(13,9,2,65.00,'Lemon',0),(14,10,1,2.65,'',0),(15,11,1,3.85,'',0),(16,12,2,2.65,'Pt',0),(17,12,2,4.35,'Qt',0),(18,13,2,2.65,'Pt',0),(19,13,2,4.35,'Qt',0),(20,15,1,15.00,'',0),(21,16,1,60.00,'',0),(22,17,2,2.50,'Pt',0),(23,17,2,4.75,'Qt',0),(24,18,2,2.75,'Pt',0),(25,18,2,3.75,'Qt',0),(26,19,1,3.20,'',0),(27,20,1,3.50,'',0),(28,21,1,3.20,'',0),(29,22,1,3.20,'',0),(30,23,1,3.20,'',0),(31,24,1,2.95,'',0),(32,25,1,2.50,'',0),(33,26,1,2.40,'',0),(34,27,1,6.20,'',0),(35,28,1,6.30,'',0),(36,29,1,6.90,'',0),(37,30,1,10.95,'',0),(38,31,1,8.95,'',0),(39,32,1,7.50,'',0),(40,33,1,7.50,'',0),(41,34,1,6.95,'',0),(42,35,1,7.55,'',0),(43,36,1,5.95,'',0),(44,37,1,6.55,'',0),(45,38,1,6.95,'',0),(46,39,1,9.95,'',0),(47,40,1,11.95,'',0),(48,41,1,7.95,'',0),(49,42,1,8.50,'',0),(50,43,1,7.20,'',0),(51,44,1,7.80,'',0),(52,45,1,7.95,'',0),(53,46,1,11.95,'',0),(54,47,1,5.95,'',0),(55,48,1,7.50,'',0),(56,49,1,6.95,'',0),(57,50,1,5.95,'',0),(58,51,1,8.50,'',0),(59,52,1,4.95,'',0),(60,53,1,4.50,'',0),(61,54,0,0.00,'',0),(62,55,2,4.80,'Chicken',0),(63,55,2,5.20,'Lamb',0),(64,55,2,5.50,'Prawn',0),(65,56,1,2.80,'',0),(66,57,1,2.80,'',0),(67,58,1,2.80,'',0),(68,59,1,2.80,'',0),(69,60,1,3.15,'',0),(70,61,1,3.15,'',0),(71,62,1,2.80,'',0),(72,63,1,3.20,'',0),(73,64,1,1.95,'',0),(74,65,1,2.20,'',0),(75,66,1,2.50,'',0),(76,67,1,2.50,'',0),(77,68,1,2.50,'',0),(78,69,1,2.50,'',0),(79,70,1,2.50,'',0),(80,71,1,0.75,'',0),(81,72,1,0.75,'',0),(82,73,1,1.95,'',0),(83,74,1,2.50,'',0),(84,75,1,1.95,'',0),(85,76,1,1.95,'',0),(86,77,1,1.75,'',0),(87,78,1,1.20,'',0),(88,79,1,2.80,'',0),(89,80,1,2.80,'',0),(90,81,1,2.80,'',0),(91,82,1,2.80,'',0),(92,83,1,2.80,'',0),(93,84,1,3.50,'',0),(94,85,1,2.80,'',0),(95,86,1,2.80,'',0),(96,87,1,4.20,'',0),(97,88,1,2.80,'',0),(98,89,1,2.80,'',0),(99,90,1,2.80,'',0),(100,91,1,2.80,'',0),(101,92,1,0.75,'',0),(102,93,1,0.75,'',0),(103,94,1,0.75,'',0),(104,95,1,0.75,'',0),(105,96,1,0.75,'',0),(106,97,1,3.50,'',0),(107,98,1,2.95,'',0),(108,99,1,2.95,'',0),(109,100,1,3.50,'',0),(110,101,1,3.50,'',0),(111,102,1,3.95,'',0),(112,103,1,2.75,'',0),(113,104,1,2.50,'',0),(114,105,1,2.50,'',0),(115,106,1,2.95,'',0),(116,107,1,2.50,'',0),(117,108,1,2.95,'',0),(118,109,1,3.20,'',0),(119,110,1,3.20,'',0),(120,111,1,3.20,'',0),(121,112,1,1.80,'',0),(122,113,1,1.80,'',0),(123,114,1,1.30,'',0),(124,115,1,1.30,'',0),(125,116,1,1.30,'',0),(126,117,1,1.30,'',0),(127,118,1,1.30,'',0),(128,119,1,0.70,'',0),(129,120,1,4.95,'',0),(130,121,1,4.95,'',0),(131,122,1,4.95,'',0),(132,123,1,4.95,'',0),(133,124,1,4.95,'',0),(134,125,1,4.95,'',0),(135,126,1,4.95,'',0),(136,127,1,4.95,'',0),(137,128,1,2.50,'',0),(138,129,1,3.20,'',0),(139,130,1,3.25,'',0),(140,131,1,3.25,'',0),(141,132,1,3.95,'',0),(142,133,1,2.95,'',0),(143,134,1,8.95,'',0),(144,135,1,8.95,'',0),(145,136,1,8.20,'',0),(146,137,1,8.30,'',0),(147,138,1,5.95,'',0),(148,139,1,6.50,'',0),(149,140,1,7.10,'',0),(150,141,1,7.10,'',0),(151,142,1,6.50,'',0),(152,143,1,7.10,'',0),(153,144,1,8.50,'',0),(154,145,1,8.50,'',0),(155,146,1,7.20,'',0),(156,147,1,7.80,'',0),(157,148,1,7.50,'',0),(158,149,1,5.30,'',0),(159,150,1,5.90,'',0),(160,151,1,5.95,'',0),(161,152,1,8.95,'',0),(162,153,1,6.30,'',0),(163,154,1,6.90,'',0),(164,155,1,5.30,'',0),(165,156,1,5.90,'',0),(166,157,1,8.95,'',0),(167,158,1,6.30,'',0),(168,159,1,6.90,'',0),(169,160,1,5.30,'',0),(170,161,1,5.90,'',0),(171,162,1,5.95,'',0),(172,163,1,8.95,'',0),(173,164,1,6.30,'',0),(174,165,1,6.90,'',0),(175,166,1,5.30,'',0),(176,167,1,5.90,'',0),(177,168,1,5.95,'',0),(178,169,1,8.95,'',0),(179,170,1,6.30,'',0),(180,171,1,6.90,'',0),(181,172,1,5.50,'',0),(182,173,1,6.10,'',0),(183,174,1,6.15,'',0),(184,175,1,9.15,'',0),(185,176,1,6.50,'',0),(186,177,1,7.10,'',0),(187,178,1,5.30,'',0),(188,179,1,5.90,'',0),(189,180,1,5.95,'',0),(190,181,1,8.95,'',0),(191,182,1,6.30,'',0),(192,183,1,6.90,'',0),(193,184,1,5.50,'',0),(194,185,1,6.10,'',0),(195,186,1,5.50,'',0),(196,187,1,5.20,'',0),(197,188,1,5.90,'',0),(198,189,1,5.95,'',0),(199,190,1,8.50,'',0),(200,191,1,6.30,'',0),(201,192,1,6.90,'',0),(202,193,1,5.30,'',0),(203,194,1,5.90,'',0),(204,195,1,5.95,'',0),(205,196,1,8.95,'',0),(206,197,1,6.30,'',0),(207,198,1,6.90,'',0),(208,199,1,5.30,'',0),(209,200,1,5.90,'',0),(210,201,1,5.95,'',0),(211,202,1,8.95,'',0),(212,203,1,6.30,'',0),(213,204,1,6.90,'',0),(214,205,1,5.30,'',0),(215,206,1,5.90,'',0),(216,207,1,5.95,'',0),(217,208,1,8.95,'',0),(218,209,1,6.30,'',0),(219,210,1,6.90,'',0),(220,211,1,5.30,'',0),(221,212,1,5.90,'',0),(222,213,1,5.95,'',0),(223,214,1,5.95,'',0),(224,215,1,8.95,'',0),(225,216,1,6.30,'',0),(226,217,1,6.90,'',0),(227,218,1,5.30,'',0),(228,219,1,5.90,'',0),(229,220,1,5.95,'',0),(230,221,1,8.95,'',0),(231,222,1,6.30,'',0),(232,223,1,6.90,'',0),(233,224,1,6.80,'',0),(234,225,1,7.40,'',0),(235,226,1,8.50,'',0),(236,227,1,7.60,'',0),(237,228,1,8.20,'',0),(238,229,1,6.95,'',0),(239,230,1,6.30,'',0),(240,231,1,6.90,'',0),(241,232,1,6.30,'',0),(242,233,1,6.90,'',0),(243,234,1,6.50,'',0),(244,235,1,6.50,'',0),(245,236,1,6.50,'',0),(246,237,1,7.10,'',0),(247,238,1,9.95,'',0),(248,239,1,6.50,'',0),(249,240,1,7.10,'',0),(250,241,1,7.95,'',0),(251,242,1,6.50,'',0),(252,243,1,7.10,'',0),(253,244,1,7.95,'',0),(254,245,1,9.95,'',0),(255,246,1,6.50,'',0),(256,247,1,7.10,'',0),(257,248,1,10.95,'',0),(258,249,1,7.50,'',0),(259,250,1,8.10,'',0),(260,251,1,7.95,'',0),(261,252,1,6.50,'',0),(262,253,1,7.10,'',0),(263,254,1,12.95,'',0),(264,255,1,24.95,'',0),(265,256,1,6.10,'',0),(266,257,2,2.50,'Meat or Veg',0),(267,257,2,3.20,'Prawn Puree',0),(268,257,2,3.25,'Chicken or Aloo Chat',0),(269,258,1,12.00,'',0);
/*!40000 ALTER TABLE `menu_price` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menus` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `menu_name` varchar(250) NOT NULL,
  `price_type` tinyint(1) NOT NULL,
  `menu_category` int(10) NOT NULL,
  `menu_description` text NOT NULL,
  `menu_image` varchar(255) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `updated_last` datetime NOT NULL,
  `updated_by` int(10) NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=259 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,20,'New York&#039;s Finest',1,93,'gweitsdgjkghjkdfhdjkfhgkjdfhgjksg','',0,'2016-08-02 14:39:53',20),(2,20,'Meat Lovers',1,93,'hfgksjdghjkdfhd','',1,'2016-08-02 14:54:28',20),(3,20,'Garden Special',2,93,'yelloooooooow','',0,'2016-08-02 15:53:56',20),(4,20,'Hawaiian',2,93,'Ham, pineapple and bacon.','93_1469591692_thumb.png',0,'2016-08-16 09:03:42',20),(5,20,'Rocky Road Ice Cream',1,94,'update it','',0,'2016-08-03 16:59:53',20),(6,20,'Chocolate Ice Cream',1,94,'Delicious Chocolate flavored ice cream','',0,'2016-08-03 17:00:26',20),(7,20,'Vanilla Ice Cream',2,94,'Vanilla flavored ice cream','',0,'2016-08-08 16:54:07',20),(8,20,'CHARLIE CHAN CHICKEN PASTA',1,93,'Tender chicken strips, shiitake mushrooms and roasted peanuts sauteed in a spicy oriental sauce garnished with spring onions\r\n','',0,'2016-08-04 08:59:33',20),(9,20,'SOLA ICED TEA',2,95,'SOLA ICED TEA','',0,'2016-08-08 16:46:12',20),(10,19,'Vegetable Roll (for 2)',1,92,'A cleansing mouthful of fresh vegetables that makes a delectable appetizer or a fine addition to asian-influenced meals','',0,'2016-08-10 08:48:12',19),(11,19,'Fried Wonton',1,92,'Fried wontons are a crispy, crunchy, and delicious appetizer','',0,'2016-08-10 08:49:20',19),(12,19,'Wonton Soup',2,96,'A simple, light &#039;Chinese dumpling&#039; classic ...whether in soup or fried, wontons will always bring you that mysteriously delicious taste of the Far East','96_chinese.jpg',0,'2016-08-15 17:08:29',19),(13,19,'Chicken Egg Drop Soup',2,96,'Special Chicken egg soup','',0,'2016-08-11 16:30:29',19),(17,19,'Vegetable Fried Rice',2,98,'','98_vegrice.jpg',0,'2016-08-15 16:35:55',19),(18,19,'Brown Rice',2,98,'','98_asian-1239294_640.jpg',0,'2016-08-15 17:06:47',19),(15,19,'Bottled Water',1,97,'Cold bottled water','97_bottle.jpg',0,'2016-08-15 16:36:28',19),(16,19,'Coke in can',1,97,'cold coke in can','97_can-87995_640.jpg',0,'2016-08-15 17:07:34',19),(19,23,'Tandoori Chicken',1,99,'','',0,'2017-04-21 09:24:46',23),(20,23,'Lamb Tikka (HO)',1,99,'','',0,'2017-04-21 09:27:42',23),(21,23,'Chicken Tikka (HO)',1,99,'','',0,'2017-04-21 09:25:44',23),(22,23,'Sheesh Kebab',1,99,'','',0,'2017-03-13 14:01:48',23),(23,23,'Shami Kebab',1,99,'','',0,'2017-03-13 14:02:15',23),(24,23,'Cocktail Kebab',1,99,'','',1,'2016-12-15 09:16:03',23),(25,23,'Onion Bhaji (V)',1,99,'','',0,'2017-04-21 09:28:17',23),(26,23,'Samosa',1,99,'','',1,'2016-12-15 09:16:49',23),(27,23,'Tandoori Chicken',1,100,'','',0,'2017-04-21 09:40:26',23),(28,23,'Chicken Tikka',1,100,'','',0,'2017-03-13 14:09:53',23),(29,23,'Lamb Tikka',1,100,'','',0,'2017-03-13 14:10:23',23),(30,23,'King Prawn Tikka',1,100,'','',0,'2017-03-13 14:10:56',23),(31,23,'Tandoori Mixed Grill',1,100,'','',0,'2017-03-13 14:11:38',23),(32,23,'Shaslick (Chicken or Lamb)',1,100,'','',0,'2017-04-21 09:41:28',23),(33,23,'Garlic Chicken Tikka',1,100,'','',0,'2017-03-13 14:13:17',23),(34,23,'Chicken Tikka Balti',1,101,'','',0,'2017-03-13 14:14:17',23),(35,23,'Lamb Tikka Balti',1,101,'','',0,'2017-03-13 14:14:59',23),(36,23,'Chicken Balti',1,101,'','',0,'2017-03-13 14:15:33',23),(37,23,'Lamb Balti',1,101,'','',0,'2017-03-13 14:16:29',23),(38,23,'Prawn Balti',1,101,'','',0,'2017-03-13 14:17:00',23),(39,23,'King Prawn Balti',1,101,'','',0,'2017-03-13 14:17:50',23),(40,23,'Tandoori King Prawn Balti',1,101,'','',0,'2017-03-13 14:18:43',23),(41,23,'Chutney Special Balti',1,101,'','',1,'2016-12-15 09:28:12',23),(42,23,'Balti Nepali (Chicken and Lamb) (N)',1,101,'Traditional Nepali dish cooked in a fairly hot spicy sauce with added coconut cream','',0,'2017-04-21 09:48:01',23),(43,23,'Chicken Biryani',1,102,'','',0,'2017-03-13 14:21:01',23),(44,23,'Lamb Biryani',1,102,'','',0,'2017-03-13 14:21:32',23),(45,23,'Prawn Biryani',1,102,'','',0,'2017-03-13 14:21:51',23),(46,23,'King Prawn Biryani',1,102,'','',0,'2017-03-13 14:22:25',23),(47,23,'Vegetable Biryani',1,102,'','',0,'2017-03-13 14:23:18',23),(48,23,'Butter Chicken',1,103,'Tandoori chicken barbecued then cooked in a rich butter sauce','',0,'2017-03-13 14:28:15',23),(49,23,'Chicken Makhon',1,103,'Cooked in mild sauce','',0,'2017-04-21 09:50:56',23),(50,23,'Chut Bangla Korma',1,103,'Cooked in a traditional Bengali way with very mild spices','',1,'2016-12-15 09:38:05',23),(51,23,'Dakha Korai (Chicken or Lamb)',1,104,'Lamb or chicken cooked medium spicy sauce with garlic, green pepper, onions, corriander in Bangladeshi style','',0,'2017-04-18 09:37:30',23),(52,23,'Vegetable Balti',1,105,'','',0,'2017-04-21 10:03:31',23),(53,23,'Vegetable Chilli Bhuna',1,105,'','',1,'2016-12-15 09:40:32',23),(54,23,'Korma Dishes',0,106,'','',1,'2016-12-15 09:42:09',23),(55,23,'Korma Dishes',2,106,'','',0,'2016-12-15 10:05:02',23),(56,23,'Mix Veg Curry',1,107,'','',0,'2017-03-13 13:32:13',23),(57,23,'Mix Veg Bhaji',1,107,'','',0,'2017-03-13 13:35:17',23),(58,23,'Mushroom Bhaji',1,107,'','',0,'2017-03-13 13:35:49',23),(59,23,'Cauliflower Bhaji',1,107,'','',0,'2017-03-13 13:36:38',23),(60,23,'Bhindi Bhaji',1,107,'','',0,'2017-03-13 13:37:22',23),(61,23,'Chana Bhaji',1,107,'','',0,'2017-03-13 13:38:10',23),(62,23,'Sag Bhaji',1,107,'','',0,'2017-03-13 13:38:41',23),(63,23,'Pineapple Bhaji',1,107,'','',0,'2017-03-13 13:39:08',23),(64,23,'Boiled Rice',1,108,'','',0,'2017-03-13 13:41:21',23),(65,23,'Pilau Rice',1,108,'','',0,'2017-03-13 13:41:49',23),(66,23,'Garlic Pilau Rice',1,108,'','',0,'2017-03-13 13:42:19',23),(67,23,'Mix Veg Rice',1,108,'','',0,'2017-03-13 13:42:40',23),(68,23,'Mushroom Rice',1,108,'','',0,'2017-03-13 13:43:00',23),(69,23,'Egg Fried Rice',1,108,'','',0,'2017-03-13 13:43:40',23),(70,23,'Fried Rice',1,108,'','',0,'2017-03-13 13:45:20',23),(71,23,'Mango Chutney',1,109,'','',0,'2017-03-13 13:48:18',23),(72,23,'Mint Sauce',1,109,'','',0,'2017-03-13 13:48:56',23),(73,23,'Nan Bread',1,110,'','',0,'2017-03-13 13:51:11',23),(74,23,'Peshwari Nan',1,110,'','',0,'2017-03-13 13:51:28',23),(75,23,'Banana Fritter (with syrup 2 pieces)',1,111,'','',0,'2017-04-21 10:25:26',23),(76,23,'Pineapple Fritter (with syrup 2 pieces)',1,111,'','',0,'2017-04-21 10:26:41',23),(77,23,'Cheesecake (1 slice)',1,111,'','',0,'2017-04-21 10:28:57',23),(78,23,'Battered Mars Bars',1,111,'','',0,'2017-03-13 13:55:51',23),(79,23,'ALOO BHAJI ',1,107,'Spicy chips','',0,'2017-04-18 09:40:54',23),(80,23,'BOMBAY ALOO',1,107,'','',0,'2017-03-13 14:40:40',23),(81,23,'ALOO GOBI',1,107,'','',0,'2017-03-13 14:41:15',23),(82,23,'Sag Aloo',1,107,'','',0,'2017-03-13 14:42:09',23),(83,23,'Tarka Dall',1,107,'','',0,'2017-03-13 14:42:43',23),(84,23,'Sag Panir',1,107,'','',0,'2017-03-13 14:43:06',23),(85,23,'Sag Dall',1,107,'','',0,'2017-03-13 14:43:38',23),(86,23,'Chilli Rice',1,108,'','',0,'2017-03-13 14:46:12',23),(87,23,'Chicken Fried Rice',1,108,'','',0,'2017-03-13 14:46:55',23),(88,23,'Aloo Rice',1,108,'','',0,'2017-03-13 14:45:39',23),(89,23,'Special Fried Rice',1,108,'','',0,'2017-03-13 14:47:50',23),(90,23,'Pineapple Rice',1,108,'','',0,'2017-03-13 14:48:33',23),(91,23,'Keema Rice',1,108,'','',0,'2017-03-13 14:51:40',23),(92,23,'Onion Sauce ',1,109,'','',0,'2017-03-13 14:53:55',23),(93,23,'Lime Pickle',1,109,'','',0,'2017-04-21 10:21:04',23),(94,23,'Chilli Pickle',1,109,'','',0,'2017-03-13 14:54:52',23),(95,23,'Chilli Sauce',1,109,'','',0,'2017-03-13 14:55:32',23),(96,23,'Garlic Sauce',1,109,'','',0,'2017-03-13 14:56:07',23),(97,23,'Mossala Sauce',1,109,'','',0,'2017-03-13 14:56:57',23),(98,23,'Korma Sauce',1,109,'','',0,'2017-03-13 14:57:32',23),(99,23,'Madras Sauce',1,109,'','',0,'2017-03-13 14:59:20',23),(100,23,'Balti Sauce',1,109,'','',0,'2017-03-13 14:58:53',23),(101,23,'Jalfrezi Sauce',1,109,'','',0,'2017-03-13 15:00:13',23),(102,23,'Devil&#039;s Flamin Naga Sauce',1,109,'','',0,'2017-03-13 15:00:45',23),(103,23,'Keema Nan',1,110,'','',0,'2017-03-13 15:02:04',23),(104,23,'Chilli Nan',1,110,'','',0,'2017-03-13 15:02:36',23),(105,23,'Stuffed Nan Veg',1,110,'','',0,'2017-03-13 15:03:10',23),(106,23,'Tikka Nan ',1,110,'','',0,'2017-03-13 15:03:51',23),(107,23,'Garlic Nan',1,110,'','',0,'2017-03-13 15:04:15',23),(108,23,'Cheese Nan',1,110,'','',0,'2017-03-13 15:04:47',23),(109,23,'Garlic Cheese Nan',1,110,'','',0,'2017-03-13 15:06:16',23),(110,23,'Keeme, Garlic, &amp; Chilli Nan',1,110,'','',0,'2017-03-13 15:07:01',23),(111,23,'Cheese, Onion, Garlic Nan',1,110,'','',0,'2017-03-13 15:07:59',23),(112,23,'Paratha',1,110,'','',0,'2017-03-13 15:08:35',23),(113,23,'Paratha',1,110,'','',1,'2017-03-13 15:09:16',23),(114,23,'Chapati',1,110,'','',0,'2017-03-13 15:09:47',23),(115,23,'Puree',1,110,'','',0,'2017-03-13 15:10:29',23),(116,23,'RAITA (CUCUMBER, ONION)',1,110,'','',1,'2017-03-13 16:11:16',23),(117,23,'Raita',1,110,'Cucumber, onion','',0,'2017-04-18 09:41:28',23),(118,23,'Green Salad',1,110,'','',0,'2017-03-13 15:12:30',23),(119,23,'Papadom',1,110,'','',0,'2017-03-13 15:13:09',23),(120,23,'Vegetable Chilli Balti',1,105,'','',0,'2017-03-13 15:16:51',23),(121,23,'Vegetable Jalfrezi',1,105,'','',0,'2017-03-13 15:17:47',23),(122,23,'Vegetable Koria',1,105,'','',0,'2017-03-13 15:18:34',23),(123,23,'Vegetable Dupiaza',1,105,'','',0,'2017-03-13 15:19:58',23),(124,23,'Vegetable Pathia',1,105,'','',0,'2017-03-13 15:20:37',23),(125,23,'Garlic Mushrooms',1,105,'','',0,'2017-03-13 15:22:34',23),(126,23,'Mixed vegetable Mossala ',1,105,'','',0,'2017-03-13 15:23:43',23),(127,23,'Sag Walla Dall',1,105,'','',0,'2017-03-13 15:24:30',23),(128,23,'Samosa',1,99,'Meat or Veg','',1,'2017-04-18 09:33:32',23),(129,23,'Samosa',1,99,'Prawn puree','',1,'2017-04-18 09:34:17',23),(130,23,'Samosa',1,99,'Chicken Or Aloo Chat','',1,'2017-03-13 15:34:43',23),(131,23,'Chicken Pakora ',1,99,'','',0,'2017-03-13 15:36:04',23),(132,23,'Tandoori Mix',1,99,'','',0,'2017-03-13 15:37:09',23),(133,23,'Prawn Cocktail',1,99,'','',0,'2017-03-13 15:40:40',23),(134,23,'Chutney Special Balti',1,101,'Chicken, Lamb, Prawn, Mushroom','',0,'2017-04-18 09:26:04',23),(135,23,'Chutneys Special Biryani',1,102,'','',0,'2017-03-13 15:46:30',23),(136,23,'Tandoori Chicken Biryani',1,102,'','',0,'2017-03-13 15:47:24',23),(137,23,'Malaya Chicken Biryani',1,102,'Cooked with pineapple','',0,'2017-04-18 09:34:46',23),(138,23,'Mushroom Biryani (V)',1,102,'','',0,'2017-03-13 15:48:59',23),(139,23,'Chicken Tikka Mossala',1,103,'','',0,'2017-03-13 15:52:38',23),(140,23,'Lamb Tikka Mossala',1,103,'','',0,'2017-03-13 15:53:21',23),(141,23,'Tandoori King Prawn Mossala',1,103,'Mossalas are cooked with almonds, coconut, nuts and sultanas in a mild sauce','',0,'2017-04-18 09:35:32',23),(142,23,'Chicken Tikka Passanda',1,103,'','',0,'2017-03-13 15:57:52',23),(143,23,'Lamb Passanda',1,103,'Passanda&#039;s are cooked in a very mild and creamy sauce','',0,'2017-04-18 09:36:03',23),(144,23,'DAKHA KORAI (CHICKEN OR LAMB)',1,103,'LAMB OR CHICKEN COOKED MEDIUM SPICY SAUCE WITH GARLIC, GREEN PEPPER, ONIONS, CORRIANDER IN BAGLADESHI STYLE ','',1,'2017-03-13 16:00:18',23),(145,23,'MURGI BAHAR',1,104,'Grilled chicken finely chopped and cooked with mince meat in a medium spiced sauce topped with fried onions','',0,'2017-04-18 09:38:42',23),(146,23,'Chicken Naga Jall',1,104,'Onion, potato and hot naga sauce, fairly hot','',0,'2017-04-21 09:59:09',23),(147,23,'Lamb Naga Jall',1,104,'Onion, potato and hot naga sauce, fairly hot','',0,'2017-04-21 09:59:43',23),(148,23,'Garlic Tikka Massala ',1,104,'Diced chicken bbq with garlic sauce, cooked with onions and green chilli, fairly hot','',0,'2017-04-18 09:40:34',23),(149,23,'Chicken',1,112,'','',0,'2017-03-13 16:17:42',23),(150,23,'Lamb',1,112,'','',0,'2017-03-13 16:18:06',23),(151,23,'Prawn',1,112,'','',0,'2017-03-13 16:18:42',23),(152,23,'King Prawn',1,112,'','',0,'2017-03-13 16:19:17',23),(153,23,'Chicken Tikka',1,112,'','',0,'2017-03-13 16:19:57',23),(154,23,'Lamb Tikka',1,112,'','',0,'2017-03-13 16:20:23',23),(155,23,'Chicken',1,113,'','',0,'2017-03-13 16:22:02',23),(156,23,'Lamb',1,113,'','',0,'2017-03-13 16:22:27',23),(157,23,'King Prawn',1,113,'','',0,'2017-03-13 16:23:28',23),(158,23,'Chicken Tikka',1,113,'','',0,'2017-03-13 16:23:56',23),(159,23,'Lamb Tikka ',1,113,'','',0,'2017-03-13 16:24:28',23),(160,23,'Chicken',1,114,'','',0,'2017-03-13 16:26:04',23),(161,23,'Lamb',1,114,'','',0,'2017-03-13 16:28:42',23),(162,23,'Prawn',1,114,'','',0,'2017-03-13 16:29:40',23),(163,23,'King Prawn',1,114,'','',0,'2017-03-13 16:30:20',23),(164,23,'Chicken Tikka',1,114,'','',0,'2017-03-13 16:30:48',23),(165,23,'Lamb Tikka',1,114,'','',0,'2017-03-13 16:31:18',23),(166,23,'Chicken',1,115,'','',0,'2017-03-13 16:41:31',23),(167,23,'Lamb',1,115,'','',0,'2017-03-13 16:42:12',23),(168,23,'Prawn',1,115,'','',0,'2017-03-13 16:42:37',23),(169,23,'King Prawn',1,115,'','',0,'2017-03-13 16:43:10',23),(170,23,'Chicken Tikka',1,115,'','',0,'2017-03-13 16:43:34',23),(171,23,'Lamb Tikka',1,115,'','',0,'2017-03-13 16:44:06',23),(172,23,'Chicken',1,116,'','',0,'2017-03-13 16:45:51',23),(173,23,'Lamb',1,116,'','',0,'2017-03-13 16:46:14',23),(174,23,'Prawn',1,116,'','',0,'2017-03-13 16:46:40',23),(175,23,'King Prawn',1,116,'','',0,'2017-03-13 16:47:13',23),(176,23,'Chicken Tikka',1,116,'','',0,'2017-03-13 16:47:49',23),(177,23,'Lamb Tikka',1,116,'','',0,'2017-03-13 16:48:17',23),(178,23,'Chicken',1,117,'','',0,'2017-03-13 16:49:39',23),(179,23,'Lamb',1,117,'','',0,'2017-03-13 16:50:06',23),(180,23,'Prawn',1,117,'','',0,'2017-03-13 16:50:36',23),(181,23,'King Prawn',1,117,'','',0,'2017-03-13 16:51:15',23),(182,23,'Chicken Tikka',1,117,'','',0,'2017-03-13 16:51:46',23),(183,23,'Lamb Tikka',1,117,'','',0,'2017-03-13 16:52:23',23),(184,23,'Chicken',1,118,'','',0,'2017-03-13 17:15:40',23),(185,23,'Lamb',1,118,'','',0,'2017-03-13 17:16:06',23),(186,23,'Chicken',1,119,'','',0,'2017-03-13 17:17:30',23),(187,23,'Chicken',1,120,'','',0,'2017-03-13 17:19:58',23),(188,23,'Lamb',1,120,'','',0,'2017-03-13 17:20:43',23),(189,23,'Prawn',1,120,'','',0,'2017-03-13 17:21:13',23),(190,23,'King Prawn',1,120,'','',0,'2017-03-13 17:21:38',23),(191,23,'Chicken Tikka',1,120,'','',0,'2017-03-13 17:22:04',23),(192,23,'Lamb Tikka',1,120,'','',0,'2017-03-13 17:22:34',23),(193,23,'Chicken',1,121,'','',0,'2017-03-13 17:24:06',23),(194,23,'Lamb',1,121,'','',0,'2017-03-13 17:24:29',23),(195,23,'Prawn',1,121,'','',0,'2017-03-13 17:25:05',23),(196,23,'King Prawn',1,121,'','',0,'2017-03-13 17:25:35',23),(197,23,'Chicken Tikka',1,121,'','',0,'2017-03-13 17:25:59',23),(198,23,'Lamb Tikka',1,121,'','',0,'2017-03-13 17:26:33',23),(199,23,'Chicken',1,122,'','',0,'2017-03-14 08:39:29',23),(200,23,'Lamb',1,122,'','',0,'2017-03-14 08:40:45',23),(201,23,'Prawn',1,122,'','',0,'2017-03-14 08:41:08',23),(202,23,'King Prawn',1,122,'','',0,'2017-03-14 08:41:44',23),(203,23,'Chicken Tikka',1,122,'','',0,'2017-03-14 08:42:18',23),(204,23,'Lamb Tikka',1,122,'','',0,'2017-03-14 08:42:38',23),(205,23,'Chicken',1,123,'','',0,'2017-03-14 08:44:23',23),(206,23,'Lamb',1,123,'','',0,'2017-03-14 08:45:05',23),(207,23,'Prawn',1,123,'','',0,'2017-03-14 08:45:34',23),(208,23,'King Prawn',1,123,'','',0,'2017-03-14 08:46:10',23),(209,23,'Chicken Tikka',1,123,'','',0,'2017-03-14 08:46:40',23),(210,23,'Lamb Tikka',1,123,'','',0,'2017-03-14 08:47:17',23),(211,23,'Chicken',1,124,'','',0,'2017-03-14 08:49:02',23),(212,23,'Lamb',1,124,'','',0,'2017-03-14 08:49:31',23),(213,23,'Lamb',1,124,'','',1,'2017-03-14 08:49:54',23),(214,23,'Prawn',1,124,'','',0,'2017-03-14 08:50:39',23),(215,23,'King Prawn',1,124,'','',0,'2017-03-14 08:51:15',23),(216,23,'Chicken Tikka',1,124,'','',0,'2017-03-14 08:51:38',23),(217,23,'Lamb Tikka',1,124,'','',0,'2017-03-14 08:53:46',23),(218,23,'Chicken',1,125,'','',0,'2017-03-14 08:55:40',23),(219,23,'Lamb',1,125,'','',0,'2017-03-14 08:56:49',23),(220,23,'Prawn',1,125,'','',0,'2017-03-14 08:57:15',23),(221,23,'King Prawn',1,125,'','',0,'2017-03-14 08:57:40',23),(222,23,'Chicken Tikka',1,125,'','',0,'2017-03-14 08:58:03',23),(223,23,'Lamb Tikka',1,125,'','',0,'2017-03-14 08:58:44',23),(224,23,'Chicken Tikka Panir',1,126,'','',0,'2017-03-14 09:01:55',23),(225,23,'Lamb Tikka Panir',1,126,'','',0,'2017-03-14 09:02:20',23),(226,23,'Chutneys Special Panir',1,126,'Chicken &amp; Lamb','',0,'2017-03-14 09:03:42',23),(227,23,'Chicken Shanti Cheese',1,126,'Bhuna Style Cooked With Spicy Chesse Toppings','',0,'2017-04-21 10:51:29',23),(228,23,'Lamb Shanti Cheese',1,126,'Bhuna Style Cooked With Spicy Cheese Toping','',0,'2017-04-21 10:51:48',23),(229,23,'Chicken Joll',1,126,'Very Hot, Cooked with Pineapple','',0,'2017-03-14 09:08:29',23),(230,23,'Chicken',1,127,'','',0,'2017-03-14 09:11:02',23),(231,23,'Lamb',1,127,'','',0,'2017-03-14 09:11:27',23),(232,23,'Chicken',1,128,'','',0,'2017-03-14 09:13:56',23),(233,23,'Lamb',1,128,'','',0,'2017-03-14 09:14:28',23),(234,23,'Keema Peas',1,128,'Minced Lembo Cooked With Onion, Fresh Corriander And Sweet Peas','',0,'2017-03-14 09:21:29',23),(235,23,'Keeme Aloo',1,128,'Mince Lambooked with Onion , Fresh Corriander, Tomatoes Anf Potatoes, Fairly Spicy Dishes','',0,'2017-03-14 09:20:03',23),(236,23,'Garlic Chicken Bhuna',1,129,'','',0,'2017-03-14 09:24:10',23),(237,23,'Garlic Prawn Bhuna',1,129,'','',0,'2017-03-14 09:24:42',23),(238,23,'Garlic King Prawn Bhuna',1,129,'','',0,'2017-04-21 10:53:35',23),(239,23,'Chicken Tikka Chilli Bhuna',1,130,'','',0,'2017-03-14 09:28:09',23),(240,23,'Lamb Tikka Chilli Bhuna ',1,130,'','',0,'2017-03-14 09:29:04',23),(241,23,'Prawn Chilli Bhuna',1,130,'','',0,'2017-03-14 09:29:53',23),(242,23,'Chicken Tikka Jalfrezi',1,131,'','',0,'2017-03-14 09:31:34',23),(243,23,'Lamb Tikka Jalfrezi',1,131,'','',0,'2017-03-14 09:32:26',23),(244,23,'Prawn Jalfrezi',1,131,'','',0,'2017-03-14 09:33:11',23),(245,23,'King Prawn Jalfrezi',1,131,'','',0,'2017-03-14 09:33:47',23),(246,23,'Chicken Tikka Korai',1,132,'','',0,'2017-03-14 09:35:38',23),(247,23,'Lamb Tikka Korai',1,132,'','',0,'2017-03-14 09:36:11',23),(248,23,'Tandoori King Prawn Korai',1,132,'','',0,'2017-03-14 09:36:49',23),(249,23,'Chicken Tikka',1,133,'','',0,'2017-03-14 09:38:39',23),(250,23,'Lamb Tikka',1,133,'','',0,'2017-03-14 09:39:15',23),(251,23,'Kabuli Gusht',1,133,'Lamb cooked in traditional afghan style with onion, tomatoes and chick peas','',0,'2017-04-18 09:42:27',23),(252,23,'Chicken',1,134,'','',0,'2017-03-14 09:51:42',23),(253,23,'Lamb',1,134,'','',0,'2017-03-14 09:52:02',23),(254,23,'Set Meal For One',1,135,'Starter: Vegetable Samosa&lt;br /&gt;\r\nMain Meal: Chicken Dupiaza&lt;br /&gt;\r\nSide Dish: Bombay Aloo, Pilau Rice&lt;br /&gt;\r\nDessert: Pineapple Fritter in syrup','',0,'2017-04-25 14:56:02',23),(255,23,'Set Meal For Two',1,135,'Starter: Onion Bhaji, Chikken Tikka&lt;br /&gt;\r\nMain Meal: Chicken Korma, Lamb Bhuna&lt;br /&gt;\r\nSide Dish: Sag Aloo, Vegetable Curry, 2 Pilau Rice, 1 Nan&lt;br /&gt;\r\nDessert: 2 Banana Fritter in syrup','',0,'2017-04-25 14:58:17',23),(256,23,'Lamb',1,119,'','',0,'2017-03-14 16:25:12',23),(257,23,'Samosa',2,99,'','',0,'2017-04-25 15:32:34',23),(258,19,'q',1,136,'','',0,'2017-04-25 14:29:28',19);
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address1` varchar(250) NOT NULL,
  `address2` varchar(250) NOT NULL,
  `city` varchar(100) NOT NULL,
  `postcode` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `client_id` int(11) NOT NULL,
  `order_date` datetime NOT NULL,
  `cookie` varchar(255) NOT NULL,
  `taken_order` tinyint(4) NOT NULL,
  `note` varchar(255) NOT NULL,
  `delivery_time` datetime DEFAULT NULL,
  `mode` varchar(25) NOT NULL,
  `status` tinyint(4) DEFAULT '0',
  `date_modified` datetime NOT NULL,
  `data_from` varchar(10) DEFAULT 'web',
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,3,'Aileen','So','170 Great Western Street   ','Burnage','Manchester','','02074078401',23,'2017-05-02 09:07:03','1493712149',1,'green gate','2017-05-02 12:00:00','cash',1,'2017-05-05 12:06:23','web'),(2,3,'Aileen','So','180 Great Western Street   ','Burnage','Manchester','','02074078401',23,'2017-05-02 09:22:57','1493712674',1,'use doorbell','2017-05-02 15:00:00','cash',2,'2017-05-05 08:52:48','web'),(3,3,'Aileen','So','180 Great Western Street   ','Burnage','Manchester','','02074078401',23,'2017-05-02 11:28:41','1493720848',1,'','2017-05-02 20:00:00','cash',0,'2017-05-05 09:19:39','web'),(4,0,'','','','','','','',23,'0000-00-00 00:00:00','1493826726',0,'','0000-00-00 00:00:00','',0,'0000-00-00 00:00:00','web'),(5,3,'Aileen','So','180 Great Western Street   ','Burnage','Manchester','','02074078401',23,'2017-05-05 14:26:12','1493987865',1,'','2017-05-05 14:25:00','cash',1,'2017-05-05 14:27:25','web'),(6,23,'Joene','Floresca','1234 Address','addr','Makati','1204','092223232',23,'2017-05-05 21:49:47','1488192762',0,'',NULL,'',0,'0000-00-00 00:00:00','web'),(7,23,'Joene','Floresca','1234 Address','addr','Makati','1204','092223232',23,'2017-05-05 21:50:43','1488192762',0,'',NULL,'',0,'0000-00-00 00:00:00','web'),(8,23,'Joene','Floresca','1234 Address','addr','Makati','1204','092223232',23,'2017-05-05 21:59:55','1488192762',0,'',NULL,'',0,'0000-00-00 00:00:00','app'),(9,23,'Joene','Floresca','1234 Address','addr','Makati','1204','092223232',23,'2017-07-16 20:42:29','1488192762',0,'',NULL,'',0,'0000-00-00 00:00:00','app');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders_addon`
--

DROP TABLE IF EXISTS `orders_addon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders_addon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `addon_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders_addon`
--

LOCK TABLES `orders_addon` WRITE;
/*!40000 ALTER TABLE `orders_addon` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders_addon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders_item`
--

DROP TABLE IF EXISTS `orders_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `addon` tinyint(4) DEFAULT NULL,
  `quantity` varchar(100) NOT NULL,
  `client_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders_item`
--

LOCK TABLES `orders_item` WRITE;
/*!40000 ALTER TABLE `orders_item` DISABLE KEYS */;
INSERT INTO `orders_item` VALUES (1,1,254,263,0,'1',23),(2,1,148,157,0,'2',23),(3,2,19,26,0,'2',23),(4,3,20,27,0,'1',23),(5,3,27,34,0,'1',23),(6,3,43,50,0,'1',23),(7,4,19,26,0,'2',23),(8,5,19,26,0,'1',23),(9,6,230,1,0,'1',23),(10,6,231,1,0,'1',23),(11,6,205,1,0,'1',23),(12,7,224,1,0,'2',23),(13,8,230,1,0,'1',23),(14,8,231,1,0,'4',23),(15,9,254,1,0,'2',23);
/*!40000 ALTER TABLE `orders_item` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-07-22 18:14:15
