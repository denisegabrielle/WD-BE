-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2024 at 08:17 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corememories`
--

-- --------------------------------------------------------

--
-- Table structure for table `islandcontents`
--

CREATE TABLE `islandcontents` (
  `islandContentID` int(4) NOT NULL,
  `islandOfPersonalityID` int(4) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `content` varchar(300) NOT NULL,
  `color` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandcontents`
--

INSERT INTO `islandcontents` (`islandContentID`, `islandOfPersonalityID`, `image`, `content`, `color`) VALUES
(1, 1, 'shared/assets/imgs/li1.png', 'A heartwarming Christmas celebration with family, filled with laughter, shared stories, and timeless traditions. From decorating the tree to enjoying festive meals, every moment is a cherished memory, creating a season of love and togetherness.', '#FFDADB'),
(2, 1, 'shared/assets/imgs/li2.png', ' A joyful New Year gathering with relatives, where we reflect on the past and set new goals together. Laughter fills the air as we celebrate family bonds, share resolutions, and create memories that will last throughout the year.', '#FFDADB'),
(3, 1, 'shared/assets/imgs/li3.png', 'A celebration of the love and memories shared with the one I care for. From quiet moments to exciting adventures, every experience strengthens our bond. Together, we create a story of love, laughter, and unwavering support that lasts through all seasons.', '#FFDADB'),
(4, 2, 'shared/assets/imgs/nn1.png', 'A peaceful sunset at the beach, where the sky turns to gold and the waves gently kiss the shore. The soft colors reflect on the water, creating a moment of calm and reflection, as the day fades and memories of tranquility linger in the air.', '#DDFFD6'),
(5, 2, 'shared/assets/imgs/nn2.png', 'Immersed in the heart of the forest, camping beneath towering trees and listening to the soothing rush of waterfalls. Surrounded by nature\'s raw beauty, these moments bring peace, adventure, and a deeper connection to the wild world around us.', '#DDFFD6'),
(6, 2, 'shared/assets/imgs/nn3.png', 'A vibrant meadow filled with blooming flowers, each one a burst of color and life. The delicate fragrance of fresh blooms fills the air, while a carefully arranged bouquet captures the essence of nature’s beauty, bringing joy and serenity to every moment.', '#DDFFD6'),
(7, 3, 'shared/assets/imgs/mh1.png', 'Memories of exploring musical instruments, from the gentle strum of a guitar to the soulful hum of a violin. Each sound brings a sense of wonder, creativity, and the joy of turning simple notes into heartfelt melodies.', '#FFFCF2'),
(8, 3, 'shared/assets/imgs/mh2.png', 'Unforgettable memories of singing my heart out, whether on stage under bright lights or in karaoke sessions. Each song carries emotions, laughter, and the joy of expressing myself through music in front of a cheering crowd.', '#FFFCF2'),
(9, 3, 'shared/assets/imgs/mh3.png', 'Heartfelt memories of singing for the Lord, where every note becomes a prayer and every melody an offering. Filled with faith and gratitude, these moments bring peace and a deep connection to His presence through the gift of music.', '#FFFCF2'),
(10, 4, 'shared/assets/imgs/cc1.png', 'Memories of friends enjoying board games and lively rounds of beach volleyball by the ocean. Whether strategizing over a board or diving into the sand for a volleyball match, every game is filled with laughter, friendly competition, and unforgettable moments.', '#FFECFB'),
(11, 4, 'shared/assets/imgs/cc2.png', 'Memories of gathering with friends for study sessions, tackling assignments and sharing knowledge. In the quiet corners of libraries or cozy study rooms, we supported each other, turned learning into teamwork, and made every challenge a little easier with laughter and collaboration.', '#FFECFB'),
(12, 4, 'shared/assets/imgs/cc3.png', 'Cherished moments of friends coming together over a meal, where the food was just the beginning. Conversations flowed easily, bonds deepened, and every shared dish made the time together even more memorable.', '#FFECFB');

-- --------------------------------------------------------

--
-- Table structure for table `islandsofpersonality`
--

CREATE TABLE `islandsofpersonality` (
  `islandOfPersonalityID` int(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `shortDescription` varchar(300) DEFAULT NULL,
  `longDescription` varchar(900) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandsofpersonality`
--

INSERT INTO `islandsofpersonality` (`islandOfPersonalityID`, `name`, `shortDescription`, `longDescription`, `color`, `image`, `status`) VALUES
(1, 'Loveband Isle', 'Loveband Isle is a special island that holds the essence of family and loved ones, where deep connections and unwavering support create a haven of warmth and love. It reflects the cherished bonds that make life truly meaningful.', 'Loveband Isle is a serene and meaningful island where the strongest bonds of family and loved ones are celebrated. It’s a place where support, understanding, and affection form the foundation of every connection. The island thrives on the deep, unconditional love shared among those closest to me, creating a nurturing environment where everyone feels valued and cared for. In Loveband Bay, every moment spent together is treasured, and the ties that bind are celebrated in the simplest acts of kindness and loyalty. This island reflects the importance of family and the love that makes every challenge easier and every joy sweeter.', '#FFB7B8', 'shared/assets/imgs/pi1.png', 'active'),
(2, 'Nature\'s Nook', 'Nature\'s Nook is a tranquil haven filled with lush greenery and the soothing sounds of nature. It embodies a deep love for the environment, offering peace and inspiration in its untouched beauty.', 'Nature’s Nook is my personal retreat, a peaceful island where I feel deeply connected to the natural world. It’s a place of tranquility, surrounded by lush greenery, flowing rivers, and a gentle breeze. Here, I find solace and renewal in nature’s simplicity, taking time to reflect and recharge. The island represents a quiet strength, reminding me of the importance of balance and growth. Nature’s Nook serves as my sanctuary, a reminder of the calming and restorative power of the earth, where I can always find peace and harmony.', '#BFFCB3', 'shared/assets/imgs/pi2.png', 'active'),
(3, 'Melody Haven', 'Melody Haven is a tranquil island where the power of music and harmony fills the air. It is a sanctuary where every note resonates with peace, creativity, and the joy of self-expression.', 'Melody Haven is a serene island where the essence of music and harmony envelops my being. Here, each note vibrates with tranquility, igniting my creativity and sparking profound self-expression. The island hums with an enchanting symphony, offering a refuge where melodies flow like a gentle breeze, calming and uplifting the soul. Whether through song, instrumental soundscapes, or the sheer joy of listening, Melody Haven is a sanctuary where I reconnect with the transformative power of music. This haven nurtures my spirit, allowing me to find my inner cadence and experience the pure bliss that only music can bring.', '#FFF5CE', 'shared/assets/imgs/pi3.png', 'active'),
(4, 'Camaraderie Coast ', 'Camaraderie Coast is an island where friendship and mutual respect create a strong sense of community. It thrives on collaboration, shared experiences, and the support that comes from true companionship.', 'Camaraderie Coast is an island where friendship and mutual respect form the heart of every connection. On this island, I am surrounded by individuals who value collaboration, celebrate shared moments, and offer unwavering support. It is a place where bonds are forged through understanding and kindness, creating a strong sense of community. The spirit of camaraderie thrives here, reminding me that together, we are stronger. Every day spent on Camaraderie Coast deepens my appreciation for the power of friendship, as we lift each other up and face life’s challenges united. This island is a reminder that the best journeys are those we take with others by our side.', '#D5BFD1', 'shared/assets/imgs/pi4.png', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `islandcontents`
--
ALTER TABLE `islandcontents`
  ADD PRIMARY KEY (`islandContentID`);

--
-- Indexes for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  ADD PRIMARY KEY (`islandOfPersonalityID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `islandcontents`
--
ALTER TABLE `islandcontents`
  MODIFY `islandContentID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  MODIFY `islandOfPersonalityID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
