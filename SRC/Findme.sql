-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.01:8889
-- Généré le : mar. 18 oct. 2022 à 23:10
-- Version du serveur : 5.7.34
-- Version de PHP : 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `findme`
--

-- --------------------------------------------------------

--
-- Structure de la table `films`
--

CREATE TABLE `films` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `films`
--

INSERT INTO `films` (`id`, `name`, `description`) VALUES
(1, 'Inception', 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O., but his tragic past may doom the project and his team to disaster.'),
(3, 'Le voyage de chihiro', 'Tale of the fanciful adventures of a ten-year-old girl named Chihiro, who discovers a secret world when she and her family get lost and venture through a hillside tunnel. When her parents undergo a mysterious transformation, Chihiro must fend for herself as she encounters strange spirits, assorted creatures and a grumpy sorceress who seeks to prevent her from returning to the human world.'),
(4, 'Get out', 'Chris and his girlfriend Rose go upstate to visit her parents for the weekend. At first, Chris reads the family\'s overly accommodating behavior as nervous attempts to deal with their daughter\'s interracial relationship, but as the weekend progresses, a series of increasingly disturbing discoveries lead him to a truth that he never could have imagined.'),
(5, 'Whiplash', 'A promising young drummer enrolls at a cut-throat music conservatory where his dreams of greatness are mentored by an instructor who will stop at nothing to realize a student\'s potential.'),
(6, 'Don\'t look up', 'Astronomy student Kate discovers the existence of an unidentified comet. Her professor, Dr Mindy, calculates that the trajectory of the asteroid crosses that of the Earth and that an impact will take place in about six months, killing all life in the process. They travel to the White House to present their findings. However The White House has other plans and are trying to silence Dr Mindy and Kate. In their attempt to inform the population through a television program, nothing really changes. Nobody seems interested and they will soon find out why.'),
(7, 'Leon', 'Léon (Reno) lives a lonely life in New York, working as a professional hitman for the mob. Near-silent and utterly ruthless, Léon doesn\'t seem to possess an ounce of humanity. But when his 12-year-old neighbour, Mathilda (Portman), arrives home to find her entire family massacred by a drug dealer (Oldman), Léon takes her in and, as per her request, teaches her the tools of his trade so that she can exact her revenge on her family\'s killer.'),
(8, 'Pretty boy', 'Sean is taken to a motel and is given a prostitute for his 18th birthday by his father. He must sleep with her to \"fix\" his questionable homosexuality.'),
(9, 'Le tombeau des lucioles', 'The story of Seita and Setsuko, two young Japanese siblings, living in the declining days of World War II. When an American firebombing separates the two children from their parents, the two siblings must rely completely on one another while they struggle to fight for their survival'),
(10, 'Call me by your name', 'It\'s the summer of 1983 in the north of Italy, and Elio Perlman (Timothée Chalamet), a precocious 17-year-old young man, spends his days in his family\'s 17th-century villa transcribing and playing classical music, reading, and flirting with his friend Marzia (Esther Garrel). Elio enjoys a close relationship with his father (Michael Stuhlbarg), an eminent professor specializing in Greco-Roman culture, and his mother Annella (Amira Casar), a translator, who favor him with the fruits of high culture in a setting that overflows with natural delights. While Elio\'s sophistication and intellectual gifts suggest he is already a fully-fledged adult, there is much that yet remains innocent and unformed about him, particularly about matters of the heart. One day, Oliver (Armie Hammer), a 24-year-old American college graduate student working on his doctorate, arrives as the annual summer intern tasked with helping Elio\'s father. Amid the sun-drenched splendor of the setting, Elio and Oliver discover the heady beauty of awakening desire over the course of a summer that will alter their lives forever.'),
(11, 'Paperman', 'An animated short that follows the story of a lonely young man in mid-century New York City, whose destiny takes an unexpected turn after a chance meeting with a beautiful woman on his morning commute. Convinced the girl of his dreams is gone forever, he gets a second chance when he spots her in a skyscraper window across the avenue from his office. With only his heart, imagination and a stack of papers to get her attention, his efforts are no match for what the fates have in store for him.'),
(12, 'Light out', 'When you are all alone in a small dark room, what do you fear the most? Is it the temporary blindness or is it the uneasy deep feeling that someone, or rather something, is observing your every move?'),
(13, 'Parasite', 'After his rich friend asks him to fake qualifications and take his tutor role to a rich teenage girl so none will try to date her in his absence, the poor lead takes up the offer & enters the rich yet gullible family. He then cons his way into the family, dates his friend\'s crush & schemes to get all his family get a job under the family. When the owners leave the house on vacation they move in & undergo a bizarre encounter which changes the lives of everyone.'),
(14, 'Love death robots', 'Love, Death + Robots is a 5-time Emmy winning animation anthology series produced by Blur Studio. Launched in March of 2019 on Netflix, Love, Death + Robots delivers a variety of style and story unlike anything else, spanning the genres of science fiction, fantasy, comedy, horror, and more. Created by Tim Miller with David Fincher as executive producer, the series brings together a global team of directors and animation studios to push and expand the medium. Eighteen shorts in all, Love, Death + Robots has something for everyone.'),
(15, 'Un monde sans femmes', 'Une petite station balnéaire de la Côte Picarde, la dernière semaine d\'août. En leur remettant les clefs d\'un appartement de location, Sylvain fait la connaissance d\'une jeune mère et de sa fille, aussi séduisantes l\'une que l\'autre. L\'occasion rêvée de sortir ne serait-ce que quelques jours d\'une vie solitaire dont les femmes sont désespérément absentes.'),
(16, 'She and her cat', 'The story occurs over the span of a year. On a rainy Spring day, She finds Chobi outside and brings him home with her. Chobi falls in love with his owner because of her kindness and beauty. During the summer Chobi gets a girlfriend, Mimi. Mimi loves Chobi and wants to marry him, but he refuses because he is in love with Her. On an autumn day, She has a long conversation over the phone. When it is over She cries and becomes depressed. Chobi does not understand what the conversation was about or what happened but concludes that it was not her fault. He stands by Her and comforts her. Time goes on and it becomes winter. She continues going to work and moves on with her life. In the end, She and Chobi are happy with their life together and say in unison, \"I think that the both of us probably like this world.\"'),
(17, 'Hair love', 'A father tries to do his daughter\'s hair for the first time.'),
(18, 'The Neighbors Window', 'It tells the story of a middle aged woman with small children whose life is shaken up when two free-spirited twenty-somethings move in across the street.'),
(19, 'Home Is Where', 'Kate lives in New York. It\'s her story. The story of a girl who falls in love too quickly - almost instantly to be fair. She\'s not crazy, she\'s not stupid - quite on the contrary. But in matters of love, she just has not been taught about the boundaries. The games. The delays. The rules. And everyone keeps reminding her: there are rules. A lot of rules. Thus nobody knows how to deal with this obviously too sincere, too romantic, too intact girl. As the situation becomes unbearable, Kate, hopeless, chooses desperate measures...'),
(20, 'Grind', 'This format-bending profile of Robert Wilmote reveals the story of a Liberian refugee forced to flee the most drastic and terrible circumstances imaginable. Having narrowly escaped the ravages of war in Africa, Robert\'s struggles continue in the U.S. when he succumbs to the gangster lifestyle, only to become a convicted felon in Newark, New Jersey. At his absolute bottom, Robert knew he was meant for greater good. Through dramatic reenactments, featuring Robert himself, we discover how Robert\'s passion for fitness and helping others empowered him to transcend a life of violence and become a local legend.'),
(21, 'Joker', 'Arthur Fleck works as a clown and is an aspiring stand-up comic. He has mental health issues, part of which involves uncontrollable laughter. Times are tough and, due to his issues and occupation, Arthur has an even worse time than most. Over time these issues bear down on him, shaping his actions, making him ultimately take on the persona he is more known as...Joker.'),
(22, 'La princesse Kaguya', 'Found inside a shining stalk of bamboo by an old bamboo cutter and his wife, a tiny girl grows rapidly into an exquisite young lady. The mysterious young princess enthralls all who encounter her, but ultimately she must confront her fate, the punishment for her crime.'),
(23, 'Alabama Monroe', 'Elise and Didier fall in love at first sight. She has her own tattoo shop and he plays the banjo in a bluegrass band. They bond over their shared enthusiasm for American music and culture, and dive headfirst into a sweeping romance that plays out on and off stage - but when an unexpected tragedy hits their new family, everything they know and love is tested. An intensely moving portrait of a relationship from beginning to end, propelled by a soundtrack of foot-stomping bluegrass, The Broken Circle Breakdown is a romantic melodrama of the highest order'),
(24, 'Lion', 'A five-year-old Indian boy is adopted by an Australian couple after getting lost hundreds of kilometers from home. 25 years later, he sets out to find his lost family.'),
(25, 'La source des femmes', 'The story takes place in current times, in a small village somewhere between North Africa and the Middle East. The women fetch water from a mountaintop spring in the blazing sun. They’ve done that since the beginning of time. Leila, a young bride, urges the women to launch a love strike: no more cuddling, no more sex until the men run water into the village.'),
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
-- Structure de la table `mtm_films_reponses`
--

CREATE TABLE `mtm_films_reponses` (
  `id` int(11) NOT NULL,
  `id_films` int(11) NOT NULL,
  `id_reponses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `mtm_films_reponses`
--

INSERT INTO `mtm_films_reponses` (`id`, `id_films`, `id_reponses`) VALUES
(1, 1, 14),
(4, 23, 14),
(5, 23, 2),
(7, 23, 9),
(8, 23, 4),
(21, 22, 7),
(22, 22, 3),
(23, 22, 14),
(24, 22, 5),
(66, 10, 14),
(67, 10, 10),
(68, 10, 4),
(69, 10, 5),
(70, 6, 14),
(71, 6, 7),
(72, 6, 2),
(73, 6, 1),
(74, 6, 8),
(75, 32, 13),
(76, 32, 16),
(77, 32, 4),
(78, 35, 3),
(79, 35, 1),
(80, 35, 7),
(81, 35, 16),
(82, 4, 14),
(83, 4, 4),
(84, 4, 2),
(85, 4, 13),
(86, 20, 5),
(87, 20, 1),
(88, 20, 7),
(89, 20, 9),
(90, 20, 16),
(91, 17, 3),
(92, 17, 7),
(93, 17, 8),
(94, 17, 16),
(95, 19, 2),
(96, 19, 4),
(97, 19, 9),
(98, 19, 10),
(99, 19, 15),
(100, 1, 2),
(101, 1, 1),
(102, 1, 4),
(103, 1, 5),
(104, 1, 7),
(105, 1, 11),
(106, 34, 16),
(107, 34, 3),
(108, 34, 7),
(109, 34, 5),
(110, 34, 11),
(111, 21, 14),
(112, 21, 2),
(113, 21, 4),
(114, 21, 7),
(115, 21, 11),
(116, 25, 1),
(117, 25, 5),
(118, 25, 4),
(119, 25, 14),
(120, 25, 9),
(121, 7, 2),
(122, 7, 4),
(123, 7, 11),
(124, 7, 14),
(125, 9, 5),
(126, 9, 3),
(127, 9, 9),
(128, 9, 14),
(129, 3, 3),
(130, 3, 2),
(131, 3, 14),
(132, 3, 7),
(133, 12, 13),
(134, 12, 2),
(135, 12, 4),
(136, 12, 14),
(137, 24, 1),
(138, 24, 3),
(139, 24, 5),
(140, 24, 2),
(141, 24, 9),
(142, 24, 14),
(143, 27, 15),
(144, 27, 2),
(145, 27, 13),
(146, 14, 2),
(147, 14, 4),
(148, 14, 5),
(149, 14, 16),
(150, 14, 11),
(151, 14, 7),
(152, 11, 3),
(153, 11, 2),
(154, 11, 5),
(155, 11, 10),
(156, 11, 16),
(157, 13, 2),
(158, 13, 7),
(159, 13, 14),
(160, 33, 1),
(161, 33, 5),
(162, 33, 15),
(163, 33, 7),
(164, 8, 5),
(165, 8, 9),
(166, 8, 15),
(167, 29, 5),
(168, 29, 16),
(169, 29, 9),
(170, 16, 3),
(171, 16, 16),
(172, 16, 5),
(173, 16, 7),
(174, 16, 9),
(175, 28, 4),
(176, 28, 16),
(177, 28, 9),
(178, 30, 4),
(179, 30, 2),
(180, 30, 13),
(181, 30, 16),
(182, 39, 5),
(183, 39, 7),
(184, 39, 9),
(185, 39, 16),
(186, 31, 2),
(187, 31, 13),
(188, 31, 16),
(189, 18, 1),
(190, 18, 16),
(191, 18, 9),
(192, 38, 5),
(193, 38, 4),
(194, 38, 16),
(195, 38, 7),
(196, 36, 1),
(197, 36, 4),
(198, 36, 2),
(199, 36, 5),
(200, 36, 16),
(201, 36, 9),
(202, 15, 2),
(203, 15, 15),
(204, 15, 9),
(205, 5, 2),
(206, 5, 14),
(207, 5, 9),
(208, 5, 5),
(209, 5, 4),
(210, 5, 7);

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`id`, `name`) VALUES
(1, 'Who you want to watch a movie with?'),
(2, 'What are you looking for?'),
(3, 'How much time have you got ?');

-- --------------------------------------------------------

--
-- Structure de la table `reponses`
--

CREATE TABLE `reponses` (
  `id` int(11) NOT NULL,
  `name` varchar(350) NOT NULL,
  `id_question` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reponses`
--

INSERT INTO `reponses` (`id`, `name`, `id_question`) VALUES
(1, 'My parents (careful what you choose..)', 1),
(2, 'My better half', 1),
(3, 'My children (but pls I don\'t want to watch Frozen)', 1),
(4, 'My friend (I do have some, honest)', 1),
(5, 'No-one. I like my own company!', 1),
(6, 'I don\'t care! I just want to watch a movie. Surprise me!', 1),
(7, 'I want something inspiring! Something that will make me think', 2),
(8, 'I want to laugh my socks off', 2),
(9, 'Pass me the tissues and make me weep', 2),
(10, 'What\'s like to fall in love? Remind me.', 2),
(11, 'I want action!', 2),
(12, 'I want to be fifteen again, show me a teen movie.', 2),
(13, 'Scare me! Even more than when I look at my bills.', 2),
(14, 'All the time in the world! More than an hour', 3),
(15, 'My lunch break. Less than an hour', 3),
(16, 'Time for a power-nap! Less than 30min ', 3);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `favoriteMovie` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `username`, `favoriteMovie`) VALUES
(78, 'yoeva@outlook.be', '123456789', 'yoeva', 'Lord of the rings');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mtm_films_reponses`
--
ALTER TABLE `mtm_films_reponses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_mtm_films` (`id_films`),
  ADD KEY `FK_mtm_reponses` (`id_reponses`);

--
-- Index pour la table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reponses`
--
ALTER TABLE `reponses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_questions` (`id_question`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `films`
--
ALTER TABLE `films`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT pour la table `mtm_films_reponses`
--
ALTER TABLE `mtm_films_reponses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;

--
-- AUTO_INCREMENT pour la table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `reponses`
--
ALTER TABLE `reponses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `mtm_films_reponses`
--
ALTER TABLE `mtm_films_reponses`
  ADD CONSTRAINT `FK_mtm_films` FOREIGN KEY (`id_films`) REFERENCES `films` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_mtm_reponses` FOREIGN KEY (`id_reponses`) REFERENCES `reponses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reponses`
--
ALTER TABLE `reponses`
  ADD CONSTRAINT `FK_questions` FOREIGN KEY (`id_question`) REFERENCES `questions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
