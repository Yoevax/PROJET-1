-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 11, 2022 at 07:31 AM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `findme`
--

-- --------------------------------------------------------

--
-- Table structure for table `films`
--

CREATE TABLE `films` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`id`, `name`, `description`) VALUES
(1, 'Inception', ''),
(3, 'Le voyage de chihiro', ''),
(4, 'Get out', ''),
(5, 'Whiplash', ''),
(6, 'Don\'t look up', ''),
(7, 'Leon', 'Léon est un tueur professionnel redoutable et insaisissable. Il vit seul à New York avec sa plante verte et ses habitudes jusqu\'au jour où une petite Mathilda de douze ans sonne à sa porte et fait irruption dans sa vie.'),
(8, 'Pretty boy', ''),
(9, 'Le tombeau des lucioles', ''),
(10, 'Call me by your name', ''),
(11, 'Paperman', ''),
(12, 'Light out', ''),
(13, 'Parasite', ''),
(14, 'Love death robots', ''),
(15, 'Un monde sans femmes', ''),
(16, 'She and her cat', ''),
(17, 'Hair love', ''),
(18, 'The Neighbors Window', ''),
(19, 'Home Is Where', ''),
(20, 'Grind', ''),
(21, 'Joker', ''),
(22, 'La princesse Kaguya', ''),
(23, 'Alabama Monroe', ''),
(24, 'Lion', ''),
(25, 'La source des femmes', ''),
(27, 'Lost forest', '3 jeunes dealers, Tony et Sam, deux frères, ainsi que leur ami Vince, se réunissent dans une mystérieuse forêt pour un dernier coup. Malheureusement, ils vont y faire une découverte effroyable qui va remettre en cause leur amitié.'),
(28, 'Still', 'A melancholic man going through life in Paris struggles to find meaning as his memories, nightmares, and day-to-day existence converge into one.'),
(29, 'Retrospect', 'As two friends reminisce over their time in high school, they learn the importance of memories, as well as the importance of sometimes letting them go to embrace the future.'),
(30, 'Suffocate', 'Left for dead on an abandoned earth, a struggling man must accept his situation and reconcile with his unsettling past. | Available at: youtu.be/yLqUaGG8YF4'),
(31, 'The Last case', 'An old detective wakes up in an abadoned apartment with no memory of who he is and where he is. After seeing a dead body in the apartment, he has to question himself, if he might be a murderer...'),
(32, 'Every rose has its thorn', 'Anela feels alone and no matter where she is, she doesn\'t feel at home. This changes when she meets a man who gives her a completely new perspective on the world. But the initial dream turns more and more into a nightmare, because she notices how slowly love becomes an addiction...'),
(33, 'Partition libre', 'Dans l’histoire récente de l’alpinisme, l’aura de Patrick Bérhault n’a pas d’équivalent. Aucun autre alpiniste de haut-niveau n’aura suscité, dans le milieu alpin, autant d’engouement, et creusé dans son sillage une telle énergie nourrie de superlatifs. \"Extra-terrestre\", \"Humanissime\", \"l’indestructible\", se lisaient régulièrement à son endroit dans la presse alpine. Tous ceux qui l’ont croisé peuvent témoigner de cette lumière si particulière qu’il cristallisait autour de lui. Et tous les autres, tous les passionnés anonymes recevaient de ce qu’il dégageait, à la télévision, sur scène dans ses conférences, au travers de ses films, comme une énergie sans pareil. La force Bérhault.'),
(34, 'Instinct', 'Alors qu’elle se déséquipe de son matériel de plongée, Lindsey se fait sauvagement agresser sexuellement par Bruce, son moniteur. Elle se débat et dans l’agitation, ils tombent à l’eau. Bruce la saisit et l’attire dans les profondeurs de l’ocean. Dans cette spirale de violence, elle n’a aucun moyen de respirer.'),
(35, 'Finding beauty', 'A documentary about women and their experiences having ADHD/ADD. Women are often forgotten and underrepresented when it comes to diagnosing and talking about ADHD/ADD. The documentary unfolds some of the misconceptions about ADHD/ADD and shows it through the eye of women who have it. As well as showing how it feels to be inside the mind of a person with ADHD/ADD.'),
(36, 'Unlicensed', 'An unlicensed Private Investigator gets hired to find out who killed a doctor.'),
(37, 'Washing', 'An experimental short film that follows a girl washing dishes. Washing explores gender roles, control over women\'s bodies, suppression of emotions, and the loss of individuality.'),
(38, 'Unintentional', 'A young and successful restaurant owner was tasting her success, little did she know her nasty past contained some horrible consequences which could take away her everything….'),
(39, 'The bride', 'The mysterious tale of a mascara-tear-stained runaway bride who encounters a supportive stranger with a shoulder to cry on. However, through their conversation, she must face the true reality of her wedding day disaster…');

-- --------------------------------------------------------

--
-- Table structure for table `mtm_films_reponses`
--

CREATE TABLE `mtm_films_reponses` (
  `id` int(11) NOT NULL,
  `id_films` int(11) NOT NULL,
  `id_reponses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mtm_films_reponses`
--

INSERT INTO `mtm_films_reponses` (`id`, `id_films`, `id_reponses`) VALUES
(1, 1, 1),
(4, 23, 1),
(5, 23, 4),
(6, 23, 12),
(7, 23, 10),
(8, 23, 6),
(21, 22, 8),
(22, 22, 5),
(23, 22, 1),
(24, 22, 7),
(25, 22, 12);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `name`) VALUES
(1, 'Who you want to watch a movie with?'),
(2, 'What are you looking for?'),
(3, 'Ok. Will these do?'),
(4, 'How much time have you got ?');

-- --------------------------------------------------------

--
-- Table structure for table `reponses`
--

CREATE TABLE `reponses` (
  `id` int(11) NOT NULL,
  `name` varchar(350) NOT NULL,
  `id_question` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reponses`
--

INSERT INTO `reponses` (`id`, `name`, `id_question`) VALUES
(1, 'All the time in the world! More than an hour', 4),
(2, 'My parents (careful what you choose..)', 1),
(4, 'My better half', 1),
(5, 'My children (but pls I don\'t want to watch Frozen)', 1),
(6, 'My friend (I do have some, honest)', 1),
(7, 'No-one. I like my own company!', 1),
(8, 'I want to feel smarter! Show me something that will make me think', 2),
(9, 'I want to laugh my socks off', 2),
(10, 'Pass me the tissues and make me weep', 2),
(11, 'I don\'t know. Have you got more options?', 2),
(12, 'What\'s like to fall in love? Remind me.', 3),
(13, 'I want action!', 3),
(14, 'Scare me! Even more than when I look at my bills', 3),
(15, 'I want to be fifteen again, show me a teen movie.', 3),
(16, 'My lunch break. Less than an hour', 4),
(17, 'Time for a power-nap! Less than 30min ', 4),
(19, 'I don\'t care! I just want to watch a movie. Surprise me!', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `username`) VALUES
(1, 'yoeva@outlook.be', '1234', 'yoeva'),
(2, 'yousra@jjj.com', '5555', 'yousra'),
(3, 'yousra@jjj.com', '5555', 'yousra'),
(4, 'yousra@jjj.com', '5555', 'yousra'),
(5, 'yousra@jjj.com', '5555', 'yousra'),
(6, 'ggggm', '8898', 'dzds'),
(7, 'yousra@jjj.com', '5555', 'yousra'),
(8, 'yousra@jjj.com', '5555', 'yousra'),
(9, 'yousra@jjj.com', '5555', 'yousra'),
(10, 'ggggm', '8898', 'dzds'),
(11, 'yousra@jjj.com', '5555', 'yousra'),
(12, 'yousra@jjj.com', '5555', 'yousra'),
(13, 'yousra@jjj.com', '5555', 'yousra'),
(14, 'yousra@jjj.com', '5555', 'yousra'),
(15, 'yousra@jjj.com', '5555', 'yousra'),
(16, 'yousra@jjj.com', '5555', 'yousra'),
(17, 'yousra@jjj.com', '5555', 'yousra'),
(18, 'yousra@jjj.com', '5555', 'yousra'),
(19, 'yousra@jjj.com', '5555', 'yousra'),
(20, 'yousra@jjj.com', '5555', 'yousra');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mtm_films_reponses`
--
ALTER TABLE `mtm_films_reponses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_mtm_films` (`id_films`),
  ADD KEY `FK_mtm_reponses` (`id_reponses`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reponses`
--
ALTER TABLE `reponses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_questions` (`id_question`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `films`
--
ALTER TABLE `films`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `mtm_films_reponses`
--
ALTER TABLE `mtm_films_reponses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reponses`
--
ALTER TABLE `reponses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mtm_films_reponses`
--
ALTER TABLE `mtm_films_reponses`
  ADD CONSTRAINT `FK_mtm_films` FOREIGN KEY (`id_films`) REFERENCES `films` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_mtm_reponses` FOREIGN KEY (`id_reponses`) REFERENCES `reponses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reponses`
--
ALTER TABLE `reponses`
  ADD CONSTRAINT `FK_questions` FOREIGN KEY (`id_question`) REFERENCES `questions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
