-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 04, 2018 at 03:54 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `authorlink`
--

CREATE TABLE `authorlink` (
  `author` varchar(50) NOT NULL,
  `link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authorlink`
--

INSERT INTO `authorlink` (`author`, `link`) VALUES
('Aldous Huxley', 'https://en.wikipedia.org/wiki/Aldous_Huxley'),
('Alice Sebold', 'https://www.thriftbooks.com/a/alice-sebold/196669/'),
('Alistair MacLean', 'https://www.amazon.com/Way-Dusty-Death-Alistair-MacLean/dp/0006151353/ref=sr_1_1?s=books&ie=UTF8&qid=1524505835&sr=1-1&keywords=the+way+to+dusty+death'),
('Benjamin Busch', 'https://www.amazon.com/Dust-Memoir-Benjamin-Busch/dp/0062014854/ref=sr_1_1?s=books&ie=UTF8&qid=1524502008&sr=1-1&keywords=dust+to+dust+benjamin+busch'),
('Christopher Wallace', 'https://en.wikipedia.org/wiki/The_Notorious_B.I.G.'),
('Dan Brown', 'http://danbrown.com/#author-section'),
('Desmond Bagley', 'https://www.amazon.com/Snow-Tiger-Desmond-Bagley/dp/0008211272/ref=sr_1_1?s=books&ie=UTF8&qid=1524509411&sr=1-1&keywords=the+snow+tiger+desmond+bagley'),
('Diana Gabaldon', 'https://www.thriftbooks.com/a/diana-gabaldon/196403/'),
('E.L. James', 'https://www.thriftbooks.com/a/el-james/199751/'),
('Elizabeth George', 'https://www.amazon.com/This-Body-Death-Inspector-Lynley/dp/0061160911/ref=sr_1_1?s=books&ie=UTF8&qid=1524505863&sr=1-1&keywords=this+body+of+death+elizabeth+george'),
('Enid Blyton', 'https://en.wikipedia.org/wiki/Enid_Blyton'),
('Frances Itani', 'https://www.amazon.com/Deafening-Frances-Itani/dp/080214165X/ref=sr_1_1?s=books&ie=UTF8&qid=1524501967&sr=1-1&keywords=deafening+by+frances'),
('Gary Chapman', 'https://www.amazon.com/Love-Languages-Secret-that-Lasts/dp/080241270X/ref=sr_1_1?s=books&ie=UTF8&qid=1524505898&sr=1-1&keywords=5+love+languages'),
('Gymboree', 'https://www.goodreads.com/author/show/965770.Gymboree'),
('Ian St Jamess', 'https://www.biblio.com/ian-st-james/author/82214'),
('Jen Sincero', 'https://jensincero.com/'),
('John Townsend', 'https://www.amazon.com/Boundaries-Updated-Expanded-When-Control/dp/0310351804/ref=sr_1_1?s=books&ie=UTF8&qid=1524507586&sr=1-1&keywords=Boundaries%3A+When+to+Say+Yes%2C+How+to+Say+No+to+Take+Control+of+Your+Life'),
('K. M. Golland', 'https://www.amazon.com/Temptation-Book-1/dp/1495271684/ref=sr_1_1?s=books&ie=UTF8&qid=1524505761&sr=1-1&keywords=temptation+golland'),
('Khaled Hosseini', 'https://www.thriftbooks.com/a/khaled-hosseini/197536/'),
('Kristin Hannah', 'https://www.thriftbooks.com/a/kristin-hannah/196808/'),
('Lee Child', 'https://www.thriftbooks.com/a/lee-child/196352/'),
('Paulo Coelho', 'https://www.thriftbooks.com/a/paulo-coelho/197080/'),
('R.K.Lilley', 'https://www.thriftbooks.com/a/rk-lilley/463673/'),
('Richard Castle', 'https://en.wikipedia.org/wiki/Richard_Castle'),
('Stephenie Meyer', 'https://www.thriftbooks.com/a/stephenie-meyer/197776/'),
('Stieg Larsson', 'https://www.thriftbooks.com/a/stieg-larsson/196663/'),
('Sylvia Day', 'https://www.thriftbooks.com/a/sylvia-day/200117/'),
('Tatiana de Rosnay ', 'https://www.goodreads.com/author/show/305400.Tatiana_de_Rosnay'),
('Willard F. Harley', 'https://www.amazon.com/His-Needs-Her-Participants-Guide/dp/0800721004/ref=sr_1_2?s=books&ie=UTF8&qid=1524507615&sr=1-2&keywords=His+Needs%2C+Her+Needs&dpID=5167yhQbRxL&preST=_SY291_BO1,204,203,200_QL40_&dpSrc=srch'),
('William Golding', 'https://www.amazon.com/Lord-Flies-William-Golding/dp/0399501487'),
('William Paul Young', 'http://wmpaulyoung.com/wm-paul-young-about/'),
('Yann Martel', 'https://www.thriftbooks.com/a/yann-martel/197485/');

-- --------------------------------------------------------

--
-- Table structure for table `author_cart`
--

CREATE TABLE `author_cart` (
  `title` varchar(40) NOT NULL DEFAULT '',
  `author` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author_cart`
--

INSERT INTO `author_cart` (`title`, `author`) VALUES
('Snow Tiger', 'Desmond Bagley'),
('Temptationssss', 'K. M. Golland');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `isbn` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `availability` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`isbn`, `title`, `author`, `category`, `picture`, `description`, `availability`) VALUES
('0001047973', 'Brave New World', 'Aldous Huxley', 'Fiction', 'BraveNewWorld.jpg', 'Brave New World is a dystopian novel by English author Aldous Huxley.                                ', 0),
('0001047974', 'Baby Play', 'Gymboree', 'Drama', 'babyplays.jpg', 'All new parents are eager to help their baby discover the world around them, and BABY PLAY was designed to help parents.', 0),
('0001047975', 'Deafening', 'Frances Itani', 'Novel', 'Deafening.jpg', '                        Author Frances Itani brings the reader to a small, pre-World War I Ontario town called Deseronto. Test                         ', 3),
('0001047976', 'Cold New Dawn', 'Ian St Jamess', 'Romance', 'cold new dawn.jpg', 'Overlong, conventional novelizing about post-WW II Britain.', 3),
('0001047977', 'Temptationssss', 'K. M. Golland', 'Romance', 'temptation.jpg', '        test        ', 3),
('0001047978', 'Snow Tiger', 'Desmond Bagley', 'Thriller', 'snowtiger2.jpg', ' \"Snow is not a wolf in sheep\'s clothing – it is a tiger in lamb\'s clothing\".', 3),
('0001047979', 'Dust to Dust', 'Benjamin Busch', 'Mystery', 'dusttodust.png', 'It sets the scene for an apparent lack of understanding in today\'s world.', 4),
('0001047980', 'The Resurrection Club', 'Christopher Wallace', 'Thriller', 'recurssion.png', 'Mediocre PR consultant Charles Kidd might just have found his meal ticket in charming new client Peter Dexters plans for the Edinburgh Festival. ', 5),
('0001047981', 'This Body of Death', 'Elizabeth George', 'Thriller', 'thisbodyofdeath.png', 'DI Thomas Lynley is still on compassionate leave after the murder of his wife.', 5),
('0001047982', 'The Way to Dusty Death', 'Alistair MacLean', 'Thriller', 'thewaytodustydeath.png', 'The title is a quotation from the famous soliloquy in Act 5, Scene 5 in Shakespeare’s play Macbeth.', 5),
('0001047984', 'Boundaries: When to Say Yes, How to Say No to Take Control of Your Life', 'John Townsend', 'Drama', 'boundaries.jpg', 'A CBA Bestseller, Gold Medallion Book Award Winner -- Christians often focus so much on being loving and giving.', 5),
('0001047985', 'His Needs, Her Needs', 'Willard F. Harley', 'romance', 'hisher.jpg', 'Marriage works best when couples appreciate that men and women have different relational and emotional needs.', 5),
('0001047986', 'You Are a Badass', 'Jen Sincero', 'Drama', 'badass.png', 'With over 2 million copies in print Jen Sinceros You are a Badass has inspired even the snarkiest of skeptics.', 3),
('0001047987', 'Lord of the Flies', 'William Golding', 'Thriller', 'lord.jpg', 'New description', 5),
('0062315005', 'The Alchemist', 'Paulo Coelho', 'Drama', 'Alchemist.jpg', 'Paulo Coelhos masterpiece tells the mystical story of Santiago an Andalusian shepherd boy who yearns to travel in search of a worldly treasure. His quest will lead him to riches far different and far more satisfying than he ever imagined. Santiagos journey teaches us about the essential wisdom of listening to our hearts of recognizing opportunity and learning to read the omens strewn along lifes path and most importantly to follow our dreams.', 4),
('030745455X', 'The Girl Who Played with Fire', 'Stieg Larsson', 'Thriller', 'TheGirlWhoPlayedWithFire.jpg', 'Mikael Blomkvist crusading publisher of the magazine Millennium has decided to run a story that will expose an extensive sex trafficking operation. On the eve of its publication the two reporters responsible for the article are murdered and the fingerprints found on the murder weapon belong to his friend the troubled genius hacker Lisbeth Salande', 5),
('0316038377', 'Twilight', 'Stephenie Meyer', 'Romance', 'Twilight.jpg', 'Bella Swan moves to Forks a small and perpetually rainy town in Washington which could have been the most boring move she ever made. But once she meets the mysterious and alluring Edward Cullen Bellas life takes a thrilling and terrifying turn. Up until now Edward has managed to keep his vampire identity a secret in the small community he lives in but now nobody is safe and especially Bella because she is the person Edward holds most dear.', 2),
('0316044938', 'The Lovely Bones', 'Alice Sebold', 'Fiction', 'TheLovelyBones.jpg', 'It is the story of a teenage girl who, after being raped and murdered watches from her personal Heaven as her family and friends struggle to move on with their lives while she comes to terms with her own death. The novel received critical praise and became an instant bestseller.', 4),
('0345483448', 'Summer Island', 'Kristin Hannah', 'Novel', 'SummerIsland.jpg', 'On Mystic Lake returns with a poignant and luminous novel about a mother and daughter and about the complex ties that bind them and the past that separates them and the healing that comes with forgiveness. ', 5),
('0345803485', 'Fifty Shades of Grey', 'E.L. James', 'Romance', 'FiftyShadesofGrey.jpg', 'When literature student Anastasia Steele goes to interview young entrepreneur Christian Grey, she encounters a man who is beautiful, brilliant, and intimidating. The unworldly, innocent Ana is startled to realize she wants this man and, despite his enigmatic reserve, finds she is desperate to get close to him. Unable to resist Anas quiet beauty, wit, and independent spirit, Grey admits he wants her tooâ€”but on his own terms.', 5),
('0425263916', 'Reflected in You', 'Sylvia Day', 'Romance', 'ReflectedInYou.jpg', 'As beautiful and flawless on the outside as he was damaged and tormented on the inside. He was a bright, scorching flame that singed me with the darkest of pleasures. I couldnt stay away. I didnt want to. He was my addiction... my every desire... mine. My past was as violent as his, and I was just as broken. We would never work. ', 5),
('0440215625', 'Dragonfly in Amber', 'Diana Gabaldon', 'Novel', 'DragonFlyInAmber.jpg', 'For twenty years, Claire Randall has kept her secrets. But now she is returning with her grown daughter to the mysteries of Scotlandâ€™s mist-shrouded Highlands. Here Claire plans to reveal a truth as shocking as the events that gave it birth: the secret of an ancient circle of standing stones, the secret of a love that transcends centuries, and the truth of a man named Jamie Fraserâ€”a Highland warrior whose gallantry once drew the young Claire from the security of her century to the dangers of his.', 5),
('0440246016', 'Bad Luck and Trouble', 'Lee Child', 'Mystery', 'BadLuckAndTrouble.jpg', 'From a helicopter high above the California desert a man is sent freecfalling into the night and Jack Reacher is plunged into the heart of a conspiracy that is killing old friends. Reacher has no phone and no address and no ties. But a woman from his former military unit has found him using a signal only the eight members of their elite team would know.', 5),
('0615752179', 'Mile High', 'R.K.Lilley', 'Romance', 'MileHigh.jpg', 'James has initiated Bianca into a dark and drugging world of passion and pain. He taught her about her own submissive masochistic nature and she fell swiftly and deeply in love with the undeniably charming and impossibly beautiful Mr. Cavendish but a painful misunderstanding and the return of the brutally violent demons of her past have combined to overwhelm Bianca and confused and hurt she pushes him away', 5),
('0676973779', 'Life of Pi', 'Yann Martel', 'Novel', 'LifeOfPi.jpg', 'One boy. One boat. One tiger. After the tragic sinking of a cargo ship a solitary lifeboat remains bobbing on the wild blue Pacific. The only survivors from the wreck are a sixteen year old boy named Pi and a hyena and a zebra with a broken leg and a female orangutan and a 450 pound Royal Bengal tiger. The scene is set for one of the most extraordinary and beloved works of fiction in recent years.', 5),
('0964729237', 'The Shack', 'William Paul Young', 'Fiction', 'TheShack.jpg', 'Mackenzie Allen Philips youngest daughter Missy has been abducted during a family vacation and evidence that she may have been brutally murdered is found in an abandoned shack deep in the Oregon wilderness. Four years later in the midst of his Great Sadness Mack receives a suspicious note apparently from God inviting him back to that shack for a weekend.', 5),
('10001017983', '5 Love Languages', 'Gary Chapman', 'Romance', '5LoveLanguages.jpg', 'It outlines five ways to express and experience love.AAA', 5),
('1401324436', 'Heat Rises', 'Richard Castle', 'Thriller', 'HeatRises.jpg', 'The Tough and sexy and professional Nikki Heat carries a passion for justice as she leads one of top homicide squads of New York City.', 5),
('159463193X', 'The Kite Runner', 'Khaled Hosseini', 'Drama', 'KiteRunner.jpg', 'The unforgettable and heartbreaking story of the unlikely friendship between a wealthy boy and the son of the servant of his father who get caught in the tragic sweep of history. The Kite Runner transports readers to Afghanistan at a tense and crucial moment of change and destruction.', 5),
('3333679', 'The Rain Watcher', 'Tatiana de Rosnay ', 'Drama', 'TheRainWatcher.jpg', 'The Rain Watcher is a powerful family drama set in Paris as the Malegarde family gathers to celebrate the fathers 70th birthday. Their hidden fears and secrets are slowly unraveled as the City of Light undergoes a stunning natural disaster.', 4),
('44444444', 'Da Vinci Code', 'Dan Brown', 'Thriller', 'BadLuckAndTrouble.jpg', 'Dan Brown is good', 0),
('67790066', 'Secret Sevenss', 'Enid Blyton', 'Novel', 'Enid Blyton.jpg', 'Good Book for children', 2);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `isbn` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`isbn`, `name`) VALUES
('0001047977', 'user2'),
('0001047978', 'user2');

-- --------------------------------------------------------

--
-- Table structure for table `cart_expand`
--

CREATE TABLE `cart_expand` (
  `isbn` varchar(30) NOT NULL,
  `title` varchar(40) DEFAULT NULL,
  `availability` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_expand`
--

INSERT INTO `cart_expand` (`isbn`, `title`, `availability`) VALUES
('0001047977', 'Temptationssss', 3),
('0001047978', 'Snow Tiger', 3);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `name` varchar(30) NOT NULL,
  `title` varchar(30) NOT NULL,
  `doi` date DEFAULT NULL,
  `dor` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`name`, `title`, `doi`, `dor`) VALUES
('user2', 'Snow Tiger', '2018-11-28', '2018-12-08'),
('user2', 'Twilight', '2018-11-28', '2018-12-08');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `email` varchar(100) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` binary(60) NOT NULL,
  `Phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`email`, `name`, `password`, `Phone`) VALUES
('admin@gmail.com', 'admin', 0x2432792431302450526c35592e346e56437442366a6e50735a6e6274654853414a5168343643364e324b56654f6a56704c6b3034584d616a682e702e, 98732456),
('user1@gmail.com', 'user1', 0x243279243130245137746c4166633944494a426866716e633464584b4f7030616c6b4d482e323937663075314343555871346935703436656f373936, 123456),
('user@gmail.com', 'user2', 0x243279243130244e33663933384d38472e576a55726643726c794c62756351516b7a75535a637558624b4e63554d536a2e4b4d41665a6b74324c484f, 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `name` varchar(100) NOT NULL,
  `isbn` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`name`, `isbn`) VALUES
('user2', '0001047977'),
('user2', '0001047978'),
('user2', '0316038377');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authorlink`
--
ALTER TABLE `authorlink`
  ADD PRIMARY KEY (`author`);

--
-- Indexes for table `author_cart`
--
ALTER TABLE `author_cart`
  ADD PRIMARY KEY (`title`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`isbn`),
  ADD UNIQUE KEY `author` (`author`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`isbn`,`name`);

--
-- Indexes for table `cart_expand`
--
ALTER TABLE `cart_expand`
  ADD PRIMARY KEY (`isbn`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`name`,`title`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`name`,`isbn`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `authorlink`
--
ALTER TABLE `authorlink`
  ADD CONSTRAINT `FK_authorlink` FOREIGN KEY (`author`) REFERENCES `book` (`author`);

--
-- Constraints for table `cart_expand`
--
ALTER TABLE `cart_expand`
  ADD CONSTRAINT `FK_cart` FOREIGN KEY (`isbn`) REFERENCES `cart` (`isbn`),
  ADD CONSTRAINT `FK_cart_expand` FOREIGN KEY (`title`) REFERENCES `author_cart` (`title`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
