-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2021 at 01:51 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yerazel_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `ListingKeyNumeric` varchar(255) DEFAULT NULL,
  `CurrentPrice` varchar(255) DEFAULT NULL,
  `LotSizeSquareFeet` varchar(255) DEFAULT NULL,
  `ListOfficeName` varchar(255) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `StateOrProvince` varchar(255) DEFAULT NULL,
  `PostalCode` varchar(255) DEFAULT NULL,
  `LotSizeUnits` varchar(255) DEFAULT NULL,
  `BedroomsTotal` varchar(255) DEFAULT NULL,
  `BathroomsFull` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `ListingKeyNumeric`, `CurrentPrice`, `LotSizeSquareFeet`, `ListOfficeName`, `City`, `StateOrProvince`, `PostalCode`, `LotSizeUnits`, `BedroomsTotal`, `BathroomsFull`, `created_at`, `updated_at`) VALUES
(1, '574602', '126550', '778', 'LEMUS PROPERTIES', 'LKEL', 'CA', '92530', 'SQFT', '3', '2', NULL, NULL),
(2, '574605', '1495', '4792', 'Benefit National Property Mgmt', 'MUR', 'CA', '92562', 'SQFT', '3', '2', NULL, NULL),
(3, '574608', '5200', '12305', 'Sotheby\'s International Realty', 'SM', 'CA', '90403', 'SQFT', '3', NULL, NULL, NULL),
(4, '574610', '25000', '435600', 'Crist Real Estate Inc', 'ANZA', 'CA', '92539', 'ACRS', NULL, NULL, NULL, NULL),
(5, '574616', '409000', '6200', 'First Team Real Estate', 'GG', 'CA', '92845', 'SQFT', '3', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `id` int(11) NOT NULL,
  `ListingKeyNumeric` varchar(100) NOT NULL,
  `CurrentPrice` varchar(255) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `StateOrProvince` varchar(255) DEFAULT NULL,
  `PostalCode` varchar(255) DEFAULT NULL,
  `LotSizeSquareFeet` varchar(255) DEFAULT NULL,
  `LotSizeUnits` varchar(255) DEFAULT NULL,
  `BedroomsTotal` varchar(255) DEFAULT NULL,
  `BathroomsFull` varchar(255) DEFAULT NULL,
  `PublicRemarks` text DEFAULT NULL,
  `Cooling` varchar(255) DEFAULT NULL,
  `HighSchoolDistrict` varchar(255) DEFAULT NULL,
  `ArchitecturalStyle` varchar(255) DEFAULT NULL,
  `ListAgentFirstName` varchar(255) DEFAULT NULL,
  `ListAgentLastName` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `ListingKeyNumeric`, `CurrentPrice`, `City`, `StateOrProvince`, `PostalCode`, `LotSizeSquareFeet`, `LotSizeUnits`, `BedroomsTotal`, `BathroomsFull`, `PublicRemarks`, `Cooling`, `HighSchoolDistrict`, `ArchitecturalStyle`, `ListAgentFirstName`, `ListAgentLastName`, `created_at`, `updated_at`) VALUES
(1, '574602', '126550', 'LKEL', 'CA', '92530', '778', 'SQFT', '3', '2', 'WOW!! Don\'t Miss Out On This One! This Property Has 3 Bedrooms, 2.5 Bathrooms, Formal Living Room, Formal Dining Room, Nice Master Bedrooms, A 2 Car Attached Garage, A Community Pool And Is Located Near Freeways, Schools And Shopping Centers.  ALL INFORMATION HEREIN DEEMED RELIABLE BUT NOT GUARANTEED. BUYERS TO SATISFY THEMSELVES WITH ALL THE INFORMATION PROVIDED HEREIN, ZONING, PERMITS, CONDITION OF THE SUBJECT PROPERTY, ETC. AND ANYTHING THAT BUYER’S DETERMINES IS IMPORTANT. PROPERTY BEING SOLD IN ITS AS-IS CONDITION. NO WARRANTIES EXPRESSED OR IMPLIED. AGAIN PLEASE UNDERSTAND THIS PROPERTY IS SOLD “AS IS.”', 'CA', NULL, NULL, 'DANNY', 'LEMUS', NULL, NULL),
(2, '574605', '1495', 'MUR', 'CA', '92562', '4792', 'SQFT', '3', '2', 'Affordable Murrieta home features neutral paint throughout, open kitchen to family room, granite countertops, island, refrigerator, lots of cabinet space, fireplace, master bath with his/her sinks, walk in closet, new water heater, new fence, newer a/c unit, no neighbors directly behind, and ready for move in.', 'CA', NULL, NULL, 'Jack', 'Rendell', NULL, NULL),
(3, '574608', '5200', 'SM', 'CA', '90403', '12305', 'SQFT', '3', NULL, 'Bright, beautifully maintained and upgraded townhouse with the feeling and style of a home. The first level welcomes you with an open living room, dining room combination and den (possible 4th bedroom) which all access the sunny atrium patio. The gourmet kitchen was recently upgraded with custom cabinets and top of quality stainless appliances. The master bedroom has vaulted ceilings, a window to the tree tops, walkin closet, new 3/4 bath and private patio. In addition to the 3 spacious bedrooms, plus den, this inviting unit has an additional, large bonus room and bath are ideal for a gym, office, gym or nanny room. There is direct access to a private 2 car garage. Prime location - Franklin school district, close to Montana Ave.  - 3 blocks to the park. Also available for sale at $1,145,000.', 'CA', NULL, 'MOD', 'Juanita', 'Fisher', NULL, NULL),
(4, '574610', '25000', 'ANZA', 'CA', '92539', '435600', 'ACRS', NULL, NULL, 'THIS COULD BE JUST THE PROPERTY YOU ARE LOOKING FOR, GREAT VIEWS, MOSTLY USEABLE, NOT FAR FROM PAVED COUNTY ROAD TO BRING YOU BACK TO THE HEART OF ANZA VALLEY COMMUNITY SERVICES, 4 SEASON CLIMATE, SEE SNOW ON THE SURROUNDING AREA MOUNTAINS,  LARGE POTENTIAL TURN AROUND HOMESITE, (SLIGHTLY RETURNING BACK TO NATURE, BUT ENOUGH LEFT TO DRIVE ON AND ON TO ENJOY THE VIEWS)  AT NIGHT, THE SMALL COMMUNITY OF ANZA AND ITS LIGHTS GIVE YOU A FEELING YOU HAVE JUST THE RIGHT PRIVACY.  NATURAL VEGETATION, CONSIST OF MANZANITA, RED-SHANK, AND BUCKWHEAT, (NO IN BLOOM)  THIS IS A BANK OWNED PARCEL, COME BUILD YOUR \"DREAM RANCH\" HERE.', NULL, NULL, NULL, 'Heather', 'Crist', NULL, NULL),
(5, '574616', '409000', 'GG', 'CA', '92845', '6200', 'SQFT', '3', '1', 'Lovely Eastgate home with some recent updates. New ceramic tiles at the exterior Entry, Foyer and also in the Kitchen. Freshly painted exterior and interior, with soothing neutral colors inside. The Kitchen has a brand new stove, oven and dishwasher. The Master Bathroom was recently taken down to the studs and was beautifully rebuilt and finished in a contemporary style. Dual pain windows throughout. Double car garage with direct access into the Kitchen, as well as the side yard.  Sunny Living room with sliding doors that open to the back yard that has a very large avacado tree that produces generously. The air conditioner also has an air filtration system. Large driveway with ample room your extra vehicles. Walking distance to schools.', 'CA', 'GG', 'RAN', 'Kevin', 'Smith', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
