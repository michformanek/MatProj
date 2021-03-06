-- Adminer 4.1.0 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `answers`;
CREATE TABLE `answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `question_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

TRUNCATE `answers`;
INSERT INTO `answers` (`id`, `text`, `question_id`) VALUES
(1,	'enim non nisi. Aenean eget metus. In',	23),
(2,	'ante lectus convallis est, vitae sodales nisi',	5),
(3,	'venenatis lacus. Etiam',	79),
(4,	'nonummy ultricies ornare, elit elit',	94),
(5,	'magna. Sed eu eros. Nam consequat dolor vitae',	67),
(6,	'non, lobortis quis, pede. Suspendisse',	77),
(7,	'Duis elementum, dui quis accumsan convallis, ante lectus',	100),
(8,	'urna justo faucibus lectus, a',	5),
(10,	'dui. Suspendisse ac metus vitae velit egestas',	85),
(11,	'justo eu arcu. Morbi sit',	99),
(12,	'risus quis diam luctus lobortis. Class aptent taciti sociosqu ad',	78),
(13,	'semper rutrum. Fusce dolor',	24),
(14,	'Nullam scelerisque neque sed sem egestas blandit. Nam',	15),
(15,	'amet lorem semper auctor.',	95),
(16,	'arcu et pede. Nunc sed',	4),
(17,	'odio semper cursus.',	77),
(18,	'dictum ultricies ligula. Nullam enim. Sed nulla ante, iaculis',	79),
(19,	'ipsum primis in faucibus orci luctus et ultrices posuere cubilia',	28),
(20,	'eros. Proin ultrices. Duis volutpat nunc sit amet metus.',	70),
(21,	'libero nec ligula consectetuer rhoncus. Nullam velit',	81),
(22,	'convallis ligula. Donec luctus aliquet odio. Etiam',	40),
(23,	'nisi magna sed dui. Fusce aliquam, enim nec tempus',	26),
(24,	'vitae, aliquet nec, imperdiet nec, leo.',	99),
(25,	'metus vitae velit egestas lacinia. Sed congue, elit sed consequat',	51),
(26,	'ac tellus. Suspendisse sed dolor. Fusce mi lorem, vehicula',	7),
(27,	'in, hendrerit consectetuer, cursus et, magna. Praesent interdum ligula eu',	88),
(28,	'at fringilla purus mauris a nunc. In',	58),
(29,	'purus gravida sagittis. Duis gravida. Praesent eu',	50),
(30,	'a tortor. Nunc',	91),
(31,	'nunc sed pede. Cum sociis natoque',	13),
(32,	'rutrum lorem ac risus. Morbi',	31),
(33,	'auctor vitae, aliquet nec, imperdiet nec, leo. Morbi neque',	42),
(34,	'adipiscing lobortis risus. In',	55),
(35,	'Nam tempor diam dictum sapien. Aenean massa. Integer',	39),
(37,	'ipsum. Donec sollicitudin adipiscing ligula. Aenean',	58),
(38,	'tempus scelerisque, lorem ipsum sodales purus, in',	47),
(39,	'Sed congue, elit',	98),
(40,	'dignissim lacus. Aliquam',	7),
(41,	'gravida sagittis. Duis gravida. Praesent eu nulla at sem molestie',	85),
(42,	'Nunc mauris elit, dictum eu,',	28),
(43,	'primis in faucibus orci luctus et',	53),
(44,	'Pellentesque ultricies dignissim lacus. Aliquam rutrum',	32),
(45,	'imperdiet, erat nonummy ultricies',	36),
(46,	'egestas rhoncus. Proin nisl sem, consequat nec, mollis vitae,',	70),
(47,	'feugiat non, lobortis',	18),
(48,	'neque vitae semper egestas,',	36),
(49,	'nisi magna sed dui. Fusce aliquam, enim nec tempus scelerisque,',	33),
(50,	'volutpat. Nulla facilisis. Suspendisse commodo',	35),
(51,	'Etiam bibendum fermentum metus. Aenean sed',	3),
(52,	'id sapien. Cras dolor dolor, tempus',	59),
(53,	'fames ac turpis egestas. Fusce',	32),
(54,	'Pellentesque ut ipsum ac mi eleifend egestas.',	65),
(55,	'nec, leo. Morbi neque tellus, imperdiet non, vestibulum',	80),
(56,	'vulputate velit eu sem.',	79),
(57,	'hymenaeos. Mauris ut quam vel sapien imperdiet ornare. In',	52),
(58,	'cursus purus. Nullam',	54),
(59,	'semper erat, in consectetuer ipsum nunc id',	23),
(60,	'sit amet orci. Ut sagittis lobortis mauris.',	47),
(61,	'sem semper erat, in consectetuer ipsum nunc',	30),
(63,	'Donec egestas. Duis ac',	13),
(65,	'quam dignissim pharetra. Nam ac',	92),
(66,	'eu elit. Nulla facilisi. Sed neque. Sed eget lacus.',	13),
(67,	'ligula consectetuer rhoncus. Nullam velit dui, semper et,',	19),
(68,	'iaculis enim, sit amet ornare lectus justo eu',	14),
(69,	'id, mollis nec, cursus a, enim. Suspendisse aliquet, sem ut',	19),
(70,	'ornare sagittis felis. Donec tempor, est ac mattis semper,',	74),
(71,	'consectetuer euismod est arcu ac orci. Ut semper pretium',	90),
(72,	'ut eros non enim commodo hendrerit. Donec',	62),
(75,	'malesuada fringilla est. Mauris eu turpis. Nulla aliquet.',	91),
(76,	'fringilla euismod enim. Etiam',	6),
(77,	'Mauris quis turpis vitae purus',	70),
(78,	'Aliquam ornare, libero at auctor',	21),
(79,	'erat. Sed nunc est, mollis non, cursus non,',	40),
(80,	'sit amet nulla.',	22),
(81,	'est, mollis non, cursus',	90),
(82,	'neque. In ornare sagittis',	7),
(83,	'ut ipsum ac',	21),
(84,	'erat vitae risus. Duis a mi fringilla mi lacinia mattis.',	52),
(85,	'diam eu dolor egestas rhoncus. Proin nisl sem,',	32),
(86,	'Ut semper pretium neque. Morbi quis urna. Nunc quis',	38),
(87,	'ipsum ac mi eleifend egestas. Sed pharetra, felis',	20),
(88,	'consequat nec, mollis vitae,',	57),
(89,	'imperdiet ornare. In faucibus. Morbi vehicula. Pellentesque',	20),
(90,	'orci. Phasellus dapibus',	92),
(91,	'morbi tristique senectus et',	22),
(92,	'pede sagittis augue, eu tempor erat neque non quam.',	85),
(93,	'Vivamus rhoncus. Donec est.',	44),
(94,	'Donec tempus, lorem fringilla ornare',	25),
(95,	'egestas. Sed pharetra, felis',	65),
(96,	'feugiat nec, diam. Duis',	58),
(98,	'gravida mauris ut',	48),
(99,	'nec tellus. Nunc lectus pede, ultrices a, auctor',	47),
(100,	'sollicitudin commodo ipsum. Suspendisse',	100),
(101,	'sf',	0),
(102,	'sf',	0),
(103,	'asd',	0),
(104,	';ljb',	0),
(106,	'as;l',	9),
(107,	'sad',	12),
(108,	';jn',	12),
(110,	';;ljn',	12),
(112,	'khb',	87),
(113,	'khb',	87),
(115,	'sd',	1),
(116,	'sd',	1),
(117,	'sd',	1),
(118,	'sd',	1),
(119,	'asd',	19),
(120,	'i',	19),
(124,	'asd',	101),
(139,	'as',	102),
(140,	'as',	102),
(141,	'as',	102),
(143,	'asd',	101),
(144,	';lljn',	112),
(148,	'4',	115),
(149,	'46',	115),
(150,	'Ani jedno',	115),
(160,	'adipiscing non, luctus sit amet, smaz',	87),
(161,	'asd',	11),
(162,	'asdasd',	11),
(163,	'asdasdasd',	11),
(164,	'ipvy',	119),
(165,	'ůslabjf',	120),
(166,	'ůslabjfsdfsdf',	120),
(167,	'ůslabjfsdfsdfztejtr',	120),
(169,	'as\'pdfn',	25),
(176,	'\'lfdkh',	128),
(177,	'\'lfdkh',	128),
(178,	'\'lfdkhr',	128),
(179,	'\'lfdkhret',	128),
(180,	'\'lfdkhretrt',	128),
(186,	'asd',	132),
(187,	'asdas',	132),
(191,	'asdasdad',	132),
(195,	'k.k j',	133),
(196,	'k.k j',	133),
(197,	'k.k j',	133),
(198,	'k.k j',	133),
(199,	'k.k j',	133),
(200,	'sa',	34),
(201,	'sad',	34),
(202,	'sad',	34),
(216,	'lknl;kn',	136),
(217,	'lknl;kn',	136),
(218,	'lknl;kn',	136),
(219,	'lknl;kn',	136),
(220,	'lknl;kn',	136),
(221,	'sdfdsf',	132),
(222,	'ms;klagm;lkm',	132),
(223,	'slkángsdgáskm',	25),
(230,	'sfg',	25),
(232,	'cdedceedc',	25),
(233,	'rffrcrf',	138),
(234,	'fcrfccfrrfcgt th',	138),
(235,	'TCP uses port numbers to provide reliable transportation of IP packets.',	131),
(236,	'TCP and UDP port numbers are used by application layer protocols.',	131),
(237,	'TCP uses windowing and sequencing to provide reliable transfer of data.',	131),
(238,	'TCP is a connection-oriented protocol. UDP is a connectionless protocol.',	131),
(239,	'UDP uses windowing and acknowledgments for reliable transfer of data.',	131),
(240,	'It encodes frames into electrical, optical, or radio wave signals.',	134),
(241,	'It accepts frames from the physical media.',	134),
(242,	'It encapsulates upper layer data into frames.',	134),
(243,	'It defines the media access method performed by the hardware interface.',	134),
(244,	'The configuration changes will be removed and the original configuration will be restored.',	139),
(245,	'The new configuration will be stored in flash memory.',	139),
(246,	'The current IOS file will be replaced with the newly configured file.',	139),
(247,	'The new configuration will be loaded if the switch is restarted.',	139),
(248,	'A ping from the host to 127.0.0.1 would not be successful.',	140),
(249,	'The host will have to use ARP to determine the correct address of the default gateway.',	140),
(250,	'The host cannot communicate with other hosts in the local network.',	140),
(251,	'The host cannot communicate with hosts in other networks.',	140),
(252,	'The switch will not forward packets initiated by the host.',	140),
(253,	'sadklggfldhsaf',	142),
(254,	'asdffsdaf',	142),
(255,	'asdasd',	143),
(256,	'df\nsdf',	25);

DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `groups_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

TRUNCATE `groups`;
INSERT INTO `groups` (`id`, `name`, `user_id`) VALUES
(1,	'4.E',	1),
(3,	'df',	3),
(4,	'Skupina',	3),
(5,	'',	4);

DROP TABLE IF EXISTS `questions`;
CREATE TABLE `questions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `test_id` int(11) NOT NULL,
  `text` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `test_id` (`test_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

TRUNCATE `questions`;
INSERT INTO `questions` (`id`, `test_id`, `text`) VALUES
(2,	9,	'mi fringilla mi lacinia'),
(3,	9,	'rhoncus. Nullam velit dui, semper'),
(5,	7,	'non, dapibus rutrum, justo. Praesent luctus.'),
(6,	5,	'tellus non magna. Nam ligula'),
(7,	6,	'massa non ante bibendum ullamcorper. Duis cursus, diam'),
(8,	5,	'dui, in sodales elit erat vitae risus. Duis a mi'),
(9,	1,	'tristique pellentesque, tellus sem mollis dui,'),
(10,	2,	'vitae odio sagittis'),
(13,	5,	'Proin vel arcu eu odio tristique pharetra. Quisque'),
(14,	5,	'egestas, urna justo faucibus lectus,'),
(15,	9,	'nonummy ultricies ornare, elit elit fermentum'),
(16,	4,	'Cras sed leo. Cras vehicula aliquet libero. Integer in'),
(17,	5,	'egestas, urna justo faucibus lectus, a sollicitudin orci'),
(18,	4,	'montes, nascetur ridiculus mus. Proin vel arcu'),
(19,	8,	'vitae nibh. Donec est mauris, rhoncus id,'),
(20,	6,	'in faucibus orci luctus et ultrices posuere cubilia'),
(21,	3,	'tortor. Integer aliquam adipiscing lacus. Ut nec urna et'),
(22,	6,	'mollis non, cursus non, egestas'),
(23,	2,	'malesuada fames ac'),
(24,	4,	'Phasellus in felis. Nulla tempor augue ac ipsum. Phasellus vitae'),
(25,	10,	'vitae sodales nisi mdsfagna sed dui. Fusce aliquam,'),
(26,	9,	'Phasellus dolor elit, pellentesque a, facilisis'),
(27,	6,	'aliquam eros turpis non enim. Mauris quis turpis vitae purus'),
(28,	9,	'laoreet lectus quis massa. Mauris vestibulum, neque sed'),
(29,	4,	'odio. Phasellus at augue'),
(30,	2,	'ac tellus. Suspendisse sed dolor. Fusce mi lorem, vehicula'),
(31,	1,	'adipiscing. Mauris molestie pharetra nibh. Aliquam ornare,'),
(32,	9,	'pede, nonummy ut, molestie in,'),
(33,	5,	'pede, malesuada vel, venenatis'),
(34,	10,	'consectetuer euismod est arcu ac orci. Ut semper pretium'),
(35,	7,	'a felis ullamcorper viverra. Maecenas iaculis aliquet diam. Sed diam'),
(36,	6,	'mi fringilla mi lacinia'),
(37,	8,	'erat eget ipsum.'),
(38,	3,	'molestie sodales. Mauris blandit enim consequat'),
(39,	7,	'dapibus gravida. Aliquam tincidunt, nunc ac mattis ornare, lectus'),
(40,	2,	'Nulla interdum. Curabitur dictum.'),
(41,	5,	'neque. Sed eget lacus. Mauris non dui nec'),
(42,	9,	'vel nisl. Quisque'),
(43,	2,	'Cum sociis natoque penatibus'),
(44,	1,	'ipsum. Phasellus vitae mauris sit amet lorem semper'),
(45,	6,	'In tincidunt congue turpis. In condimentum. Donec at arcu. Vestibulum'),
(46,	8,	'vestibulum, neque sed dictum eleifend, nunc risus'),
(47,	3,	'justo. Proin non massa non'),
(48,	4,	'euismod urna. Nullam lobortis quam a felis ullamcorper viverra. Maecenas'),
(49,	4,	'ante dictum mi, ac mattis velit justo nec ante.'),
(50,	1,	'pulvinar arcu et pede. Nunc sed orci lobortis augue scelerisque'),
(51,	8,	'Cum sociis natoque penatibus et magnis dis'),
(52,	9,	'Donec feugiat metus sit'),
(53,	8,	'Vestibulum accumsan neque et nunc. Quisque ornare tortor'),
(54,	6,	'velit. Quisque varius. Nam'),
(55,	4,	'est, mollis non, cursus non, egestas'),
(56,	3,	'ante bibendum ullamcorper. Duis cursus, diam at'),
(57,	2,	'iaculis nec, eleifend non, dapibus rutrum, justo. Praesent'),
(58,	3,	'faucibus. Morbi vehicula. Pellentesque tincidunt tempus'),
(59,	10,	'lobortis, nisi nibh lacinia orci,'),
(60,	6,	'egestas ligula. Nullam'),
(61,	5,	'Nam interdum enim non nisi. Aenean eget'),
(62,	9,	'arcu iaculis enim, sit amet ornare lectus justo eu'),
(63,	5,	'ornare tortor at risus. Nunc'),
(64,	3,	'est, congue a, aliquet'),
(65,	6,	'mollis. Integer tincidunt'),
(66,	5,	'erat volutpat. Nulla facilisis. Suspendisse commodo tincidunt'),
(67,	2,	'sociis natoque penatibus et magnis dis parturient montes, nascetur'),
(68,	3,	'Integer tincidunt aliquam arcu. Aliquam ultrices'),
(69,	9,	'dui. Cum sociis natoque penatibus et'),
(70,	6,	'vestibulum, neque sed dictum eleifend, nunc risus varius orci,'),
(71,	8,	'lorem, sit amet ultricies sem magna nec quam.'),
(72,	4,	'in, tempus eu, ligula. Aenean'),
(73,	8,	'consectetuer, cursus et, magna. Praesent interdum ligula'),
(74,	8,	'dolor dapibus gravida. Aliquam tincidunt, nunc ac mattis'),
(75,	6,	'Nunc sed orci lobortis'),
(76,	2,	'commodo tincidunt nibh. Phasellus nulla. Integer'),
(77,	7,	'ipsum ac mi eleifend egestas. Sed'),
(78,	2,	'In lorem. Donec elementum, lorem ut aliquam iaculis, lacus'),
(79,	8,	'et, lacinia vitae, sodales at,'),
(80,	1,	'lectus quis massa.'),
(81,	2,	'est. Nunc ullamcorper, velit in aliquet'),
(82,	7,	'Fusce aliquam, enim nec tempus scelerisque, lorem ipsum sodales purus,'),
(83,	6,	'pede, ultrices a, auctor non, feugiat nec, diam. Duis'),
(84,	2,	'pellentesque a, facilisis non, bibendum'),
(85,	6,	'tincidunt aliquam arcu. Aliquam ultrices iaculis odio. Nam interdum'),
(86,	9,	'at, egestas a, scelerisque sed, sapien. Nunc pulvinar'),
(87,	10,	'ac nulla. In tincidasdsdunt congue'),
(88,	2,	'mi enim, condimentum eget, volutpat ornare, facilisis eget,'),
(89,	7,	'netus et malesuada fames ac turpis'),
(90,	5,	'dapibus ligula. Aliquam erat volutpat. Nulla dignissim. Maecenas ornare egestas'),
(91,	2,	'Lorem ipsum dolor sit'),
(92,	4,	'vel, venenatis vel, faucibus id, libero. Donec consectetuer mauris'),
(93,	7,	'lacus. Aliquam rutrum lorem ac risus.'),
(94,	9,	'dui augue eu tellus. Phasellus elit pede, malesuada'),
(95,	9,	'Aenean sed pede nec ante blandit viverra. Donec tempus, lorem'),
(96,	6,	'ut eros non enim commodo hendrerit.'),
(97,	8,	'at lacus. Quisque purus sapien, gravida non, sollicitudin'),
(98,	6,	'nec ante blandit viverra. Donec tempus, lorem fringilla ornare placerat,'),
(99,	7,	'Phasellus dolor elit, pellentesque a, facilisis non, bibendum sed,'),
(100,	1,	'ante blandit viverra. Donec tempus, lorem fringilla'),
(101,	15,	';sbd'),
(102,	15,	';sbd'),
(103,	15,	';sbd'),
(104,	15,	';kj ;k n'),
(105,	0,	''),
(106,	0,	'Asfd'),
(107,	0,	'asd'),
(108,	0,	'kjhv'),
(109,	17,	''),
(110,	17,	''),
(111,	17,	''),
(112,	17,	''),
(113,	17,	''),
(114,	17,	''),
(115,	18,	'Kolik je 6-2?'),
(116,	18,	''),
(117,	77,	'ASdASDASd;alsbjd;asjd'),
(118,	77,	'ASdASDASd;las\'jbfnasd'),
(123,	44,	''),
(125,	44,	''),
(126,	44,	''),
(127,	44,	''),
(131,	105,	'Which three statements characterize the transport layer protocols? (Choose three.)'),
(132,	108,	'sadlkn/./m'),
(133,	108,	'lkn'),
(134,	105,	'What is an important function of the physical layer of the OSI model?'),
(136,	108,	'Cisco blhoasd\\'),
(137,	108,	''),
(138,	10,	''),
(139,	105,	'After making configuration changes, a network administrator issues a copy running-config startup-config command in a Cisco switch. What is the result of issuing this command?'),
(140,	105,	'What will happen if the default gateway address is incorrectly configured on a host?'),
(142,	90,	''),
(143,	114,	'dasdsad');

DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `group_id` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `group_id` (`group_id`),
  CONSTRAINT `students_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

TRUNCATE `students`;
INSERT INTO `students` (`id`, `name`, `group_id`) VALUES
(1,	'Václav Branda',	1),
(4,	'Michal Formánek',	1),
(5,	'Ondřej Filipi',	1),
(6,	'Ondřej Bergman',	1),
(7,	'Libor Adámek',	1),
(8,	'Student 1',	4),
(9,	'Student 2',	4),
(10,	'Student 3',	4);

DROP TABLE IF EXISTS `tests`;
CREATE TABLE `tests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `shared` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `tests_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

TRUNCATE `tests`;
INSERT INTO `tests` (`id`, `name`, `user_id`, `shared`, `created_at`) VALUES
(1,	'massa rutrum magna.ss',	1,	1,	'2015-01-26 07:43:13'),
(2,	'massa rutrum magna.ss',	1,	1,	'2015-01-26 07:43:13'),
(3,	'massa rutrum magna.ss',	1,	1,	'2015-01-26 07:43:13'),
(4,	'massa rutrum magna.ss',	1,	1,	'2015-01-26 07:43:13'),
(6,	'massa rutrum magna.ss',	1,	1,	'2015-01-26 07:43:13'),
(7,	'massa rutrum magna.ss',	1,	1,	'2015-01-26 07:43:13'),
(9,	'massa rutrum magna.ss',	1,	1,	'2015-01-26 07:43:13'),
(10,	'asdsdjb/lm',	3,	1,	'2015-01-27 13:34:03'),
(11,	'massa rutrum magna.ss',	1,	1,	'2015-01-26 07:43:13'),
(12,	'massa rutrum magna.ss',	1,	1,	'2015-01-26 07:43:13'),
(13,	'massa rutrum magna.ss',	1,	1,	'2015-01-26 07:43:13'),
(14,	'massa rutrum magna.ss',	1,	1,	'2015-01-26 07:43:13'),
(16,	'massa rutrum magna.ss',	2,	1,	'2015-01-26 07:43:13'),
(20,	'massa rutrum magna.ss',	1,	1,	'2015-01-26 07:43:13'),
(21,	'massa rutrum magna.ss',	1,	1,	'2015-01-26 07:43:13'),
(23,	'massa rutrum magna.ss',	1,	1,	'2015-01-26 07:43:13'),
(24,	'massa rutrum magna.ss',	1,	1,	'2015-01-26 07:43:13'),
(25,	'massa rutrum magna.ss',	1,	1,	'2015-01-26 07:43:13'),
(27,	'massa rutrum magna.ss',	1,	1,	'2015-01-26 07:43:13'),
(28,	'massa rutrum magna.ss',	2,	1,	'2015-01-26 07:43:13'),
(30,	'massa rutrum magna.ss',	1,	1,	'2015-01-26 07:43:13'),
(32,	'massa rutrum magna.ss',	1,	1,	'2015-01-26 07:43:13'),
(35,	'massa rutrum magna.ss',	1,	1,	'2015-01-26 07:43:13'),
(36,	'massa rutrum magna.ss',	1,	1,	'2015-01-26 07:43:13'),
(37,	'massa rutrum magna.ss',	2,	1,	'2015-01-26 07:43:13'),
(38,	'massa rutrum magna.ss',	1,	1,	'2015-01-26 07:43:13'),
(41,	'massa rutrum magna.ss',	1,	1,	'2015-01-26 07:43:13'),
(43,	'massa rutrum magna.ss',	1,	1,	'2015-01-26 07:43:13'),
(45,	'massa rutrum magna.ss',	2,	1,	'2015-01-26 07:43:13'),
(47,	'massa rutrum magna.ss',	1,	1,	'2015-01-26 07:43:13'),
(48,	'massa rutrum magna.ss',	2,	1,	'2015-01-26 07:43:13'),
(50,	'massa rutrum magna.ss',	2,	1,	'2015-01-26 07:43:13'),
(51,	'massa rutrum magna.ss',	1,	1,	'2015-01-26 07:43:13'),
(52,	'massa rutrum magna.ss',	2,	1,	'2015-01-26 07:43:13'),
(53,	'massa rutrum magna.ss',	2,	1,	'2015-01-26 07:43:13'),
(54,	'massa rutrum magna.ssdfg',	1,	1,	'2015-01-27 13:54:21'),
(55,	'massa rutrum magna.ss',	1,	1,	'2015-01-26 07:43:13'),
(56,	'massa rutrum magna.ss',	1,	1,	'2015-01-26 07:43:13'),
(57,	'massa rutrum magna.ss',	2,	1,	'2015-01-26 07:43:13'),
(58,	'massa rutrum magna.ss',	1,	1,	'2015-01-26 07:43:13'),
(59,	'massa rutrum magna.ss',	1,	1,	'2015-01-26 07:43:13'),
(60,	'massa rutrum magna.ss',	2,	1,	'2015-01-26 07:43:13'),
(61,	'massa rutrum magna.ss',	2,	1,	'2015-01-26 07:43:13'),
(65,	'massa rutrum magna.ss',	2,	1,	'2015-01-26 07:43:13'),
(66,	'massa rutrum magna.ss',	2,	1,	'2015-01-26 07:43:13'),
(70,	'massa rutrum magna.ss',	2,	1,	'2015-01-26 07:43:13'),
(71,	'massa rutrum magna.ss',	2,	1,	'2015-01-26 07:43:13'),
(73,	'massa rutrum magna.ss',	1,	1,	'2015-01-26 07:43:13'),
(75,	'massa rutrum magna.ss',	1,	1,	'2015-01-26 07:43:13'),
(76,	'massa rutrum magna.ss',	1,	1,	'2015-01-26 07:43:13'),
(79,	'massa rutrum magna.ss',	2,	1,	'2015-01-26 07:43:13'),
(80,	'massa rutrum magna.ss',	1,	1,	'2015-01-26 07:43:13'),
(81,	'massa rutrum magna.ss',	2,	1,	'2015-01-26 07:43:13'),
(83,	'massa rutrum magna.ss',	2,	1,	'2015-01-26 07:43:13'),
(84,	'massa rutrum magna.ss',	2,	1,	'2015-01-26 07:43:13'),
(85,	'massa rutrum magna.ss',	1,	1,	'2015-01-26 07:43:13'),
(86,	'massa rutrum magna.ss',	1,	1,	'2015-01-26 07:43:13'),
(87,	'massa rutrum magna.ss',	2,	1,	'2015-01-26 07:43:13'),
(90,	'Random test form',	1,	1,	'2015-01-28 12:56:00'),
(92,	'massa rutrum magna.ss',	2,	1,	'2015-01-26 07:43:13'),
(95,	'massa rutrum magna.ss',	2,	1,	'2015-01-26 07:43:13'),
(96,	'massa rutrum magna.ss',	1,	1,	'2015-01-26 07:43:13'),
(97,	'massa rutrum magna.ss',	2,	1,	'2015-01-26 07:43:13'),
(99,	'massa rutrum magna.ss',	2,	1,	'2015-01-26 07:43:13'),
(100,	'massa rutrum magna.ss',	2,	1,	'2015-01-26 07:43:13'),
(105,	'CCNA Final Exam',	3,	1,	'2015-02-02 14:26:26'),
(108,	'Pokusny test spolu s ultrapokusnym odesilanim',	3,	1,	'2015-02-02 08:53:42'),
(110,	'',	3,	0,	'2015-01-27 13:49:02'),
(112,	'jyb h h lh l j j njnnyknkn  h , b ',	3,	0,	'2015-02-02 14:53:07'),
(113,	'',	5,	0,	'2015-02-16 09:40:00'),
(114,	'Testicek',	6,	1,	'2015-02-16 10:20:40');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_czech_ci NOT NULL DEFAULT 'guest',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

TRUNCATE `users`;
INSERT INTO `users` (`id`, `username`, `fullname`, `password`, `email`, `role`) VALUES
(1,	'asd',	'Karel Novak',	'$2y$10$RAzj5NWXYauVMBxI2rAyWOU0X7ucC8CH0xXeohiZB21cAE6QyFqDO',	'asd@asd.cz',	'user'),
(2,	'Venca Brandů',	'',	'$2y$10$YF1J4vfOIbH1PQYKmBUfOOpwabm4H.6lZoPYZB9ntvHF0.XQuFAa2',	'pepa@zdepa.cz',	'user'),
(3,	'administrator',	'administrator',	'$2y$10$2GSttFmMPQoUVQF8vEu3luxDuezCql/AF4jlNIGw4h2VI5nCL/riK',	'admin@testovator.test',	'user'),
(4,	'podfukar',	'Karel Novák',	'$2y$10$QRxQtnHfLSrR9.p6f5az1.FsAab4RV.TDa5gt6a4FAjS4K.s1cJxW',	'karel@novak.cz',	'user'),
(5,	'uzivatel',	'BFU',	'$2y$10$DitoA8S/64wZ9PuN.Z/pPOSf0/iBJxHlHqT.R8a.9Td2EePn72.Gi',	'uzivatel@uzivatel.cz',	'guest'),
(6,	'uzivatel2',	'BFU',	'$2y$10$PJ./h9DbpdSn3odIOeLcTO.Bp6YYcj9kXfaNXaYRP2U0.vUyiLuWa',	'uzivatel@uzivatel.cz',	'user');

DROP TABLE IF EXISTS `answers`;
CREATE TABLE `answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `question_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `question_id` (`question_id`),
  CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

TRUNCATE `answers`;
INSERT INTO `answers` (`id`, `text`, `question_id`) VALUES
(1,	'První odpověď na první otázku',	1),
(2,	'Druhá odpověď na první otázku',	1),
(3,	'Třetí odpověď na první otázku¨',	1),
(4,	'Čtvrtá odpověď na první otázku',	1),
(5,	'První odpověď na druhou otázku',	2),
(6,	'Druhá odpověď na druhou otázku',	2),
(7,	'Třetí odpověď na druhou otázku',	2),
(8,	'Čtvrtá odpověď na druhou otázku',	2),
(9,	'Pátá odpověď na druhou otázku',	2);

DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `groups_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

TRUNCATE `groups`;
INSERT INTO `groups` (`id`, `name`, `user_id`) VALUES
(1,	'4.E',	1),
(2,	'4.D',	1),
(3,	'Sítě',	3);

DROP TABLE IF EXISTS `questions`;
CREATE TABLE `questions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `test_id` int(11) NOT NULL,
  `text` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `test_id` (`test_id`),
  CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`test_id`) REFERENCES `tests` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

TRUNCATE `questions`;
INSERT INTO `questions` (`id`, `test_id`, `text`) VALUES
(1,	1,	'První otázka'),
(2,	1,	'Druhá otázka'),
(10,	6,	'');

DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `group_id` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `group_id` (`group_id`),
  CONSTRAINT `students_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

TRUNCATE `students`;
INSERT INTO `students` (`id`, `name`, `group_id`) VALUES
(1,	'Libor Adámek',	1),
(2,	'Václav Branda',	1),
(3,	'Tomáš Budina',	1),
(4,	'Ondřej Bergman',	1),
(5,	'Maťěj Kozák',	1),
(6,	'Martin Šustr',	1),
(7,	'Michal Skalický',	1),
(8,	'Martin Quarda',	1),
(9,	'Jan Šmída',	1),
(10,	'Pavel Veselý',	1),
(11,	'Jiří Rojkovič',	1),
(12,	'Františel Jarolím',	1),
(13,	'Jan Horáček',	1),
(14,	'Jan Čučiak',	1),
(15,	'Petr Netušil',	1),
(16,	'René Peichl',	1),
(17,	'Pavel Žáček',	1),
(18,	'Jiří Burian',	1),
(19,	'Michael Vodák',	1),
(20,	'Jan Novák',	1),
(21,	'Radim Dočkal',	1),
(22,	'Ondřej Filipi',	1),
(23,	'Jakub Černík',	1),
(24,	'Tomáš Musil',	1),
(25,	'Václav Branda',	1),
(26,	'Daniel Kopecký',	1),
(27,	'Michal Formánek',	1),
(28,	'David Havlík',	1),
(29,	'Adam Krupa',	2),
(30,	'Jakub Růžička',	2),
(31,	'Daniel Kohout',	2),
(32,	'Stanislav Hladík',	2),
(33,	'Václav Fikejz',	2),
(34,	'Petr Hes',	2),
(35,	'Dominik Stach',	2),
(36,	'Michal Hons',	2),
(37,	'František Hrabaň',	2),
(38,	'David Sklenář',	2),
(39,	'Vojtěch Jindra',	2),
(40,	'Jan Hroch',	2),
(41,	'Martin Karlík',	2),
(42,	'Lukáš Bartoš',	2),
(43,	'Tomáš Barvíř',	2),
(44,	'Květa Zachařová',	2),
(46,	'Vojtěch Šimberský',	2),
(47,	'Tomáš Rohlík',	2),
(48,	'Matěj Nevole',	2),
(49,	'Matouš Dvořák',	2),
(52,	'Vít Lupínek',	2),
(53,	'Jonáš Macek',	2),
(54,	'Morgan Brazier',	3),
(55,	'Kenneth Dorsey',	3),
(56,	'Justine Shoffner',	3),
(57,	'Carie Bovee',	3),
(58,	'Loise Music',	3),
(59,	'Pamula Wissing',	3),
(60,	'Loma Morreale',	3),
(61,	'Efren Peltz',	3),
(62,	'Alyson Steinert',	3),
(63,	'Romana Sulik',	3);

DROP TABLE IF EXISTS `tests`;
CREATE TABLE `tests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `shared` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `tests_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

TRUNCATE `tests`;
INSERT INTO `tests` (`id`, `name`, `user_id`, `shared`, `created_at`) VALUES
(1,	'Vzorový test',	1,	1,	'2015-02-16 12:47:55'),
(6,	'CCNA Final Exam',	3,	0,	'2015-02-16 13:34:57');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_czech_ci NOT NULL DEFAULT 'guest',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

TRUNCATE `users`;
INSERT INTO `users` (`id`, `username`, `fullname`, `password`, `email`, `role`) VALUES
(1,	'administrator',	'administrator',	'$2y$10$mnukiPESpEirCF7avGwv0uc7Kt6oNisa9SQPC6YukLig/z/3pWlzS',	'administrator@testovator.test',	'user'),
(2,	'binarova',	'Jana Binarová',	'$2y$10$WaEbyoHCqM/6K4E7Fff.5.eb9/gOS4BN8Ch9oC7g1BnYEP8.AHYEW',	'binarova@testovator.test',	'user'),
(3,	'privratsky',	'Zdeněk Přívratský',	'$2y$10$kzpf1K8q78noiyOe/nV./egUcuvWMRp2g9ef177IQzuNAF1UotXmO',	'privratsky@testovator.test',	'user'),
(4,	'dvorak',	'Miroslav Dvořák',	'$2y$10$bZzZ9GcH9QPA4K1rvoAACesTrnRRBWjoGdBpk5b/.srmgWtJ1qd4G',	'dvorak@testovator.test',	'guest');

-- 2015-02-16 14:11:10
