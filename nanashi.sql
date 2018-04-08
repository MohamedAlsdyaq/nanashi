-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2017 at 03:29 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nanashi2`
--

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE `favorite` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `1` int(11) NOT NULL,
  `2` int(11) NOT NULL,
  `3` int(11) NOT NULL,
  `4` int(11) NOT NULL,
  `5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id` int(11) NOT NULL,
  `user1` int(11) DEFAULT NULL,
  `user2` int(11) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `user1`, `user2`, `created_at`, `updated_at`, `status`) VALUES
(11454, 178, 169, '2016-10-22 18:44:28', '2016-10-22 18:44:28', 0),
(11455, 178, 168, '2016-10-22 18:46:01', '2016-10-22 18:46:01', 0),
(11457, 162, 178, '2016-10-22 18:46:46', '2016-10-22 18:46:46', 0),
(11458, 178, 162, '2016-10-22 19:04:02', '2016-10-22 19:04:02', 0),
(11459, 178, 172, '2016-10-23 15:55:52', '2016-10-23 15:55:52', 0),
(11460, 185, 162, '2017-01-24 16:06:10', '2017-01-24 16:06:10', 0);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `like_id` int(11) NOT NULL,
  `liker` int(11) NOT NULL,
  `tweet_owner` int(11) DEFAULT NULL,
  `tweet_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`like_id`, `liker`, `tweet_owner`, `tweet_id`) VALUES
(1, 169, 162, 73),
(2, 169, 169, 30),
(3, 169, 162, 64),
(4, 169, 169, 30),
(5, 169, 162, 73),
(6, 169, 169, 28),
(7, 169, 169, 28),
(8, 169, 169, 85),
(9, 169, 169, 86),
(10, 169, 169, 90),
(11, 169, 169, 86),
(12, 169, 169, 85),
(13, 169, 169, 90),
(14, 169, 169, 90),
(15, 169, 169, 86),
(16, 169, 162, 100),
(17, 169, 162, 98),
(18, 169, 169, 101);

-- --------------------------------------------------------

--
-- Table structure for table `lists`
--

CREATE TABLE `lists` (
  `id` int(11) NOT NULL,
  `movie_id` int(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `tag` varchar(1000) DEFAULT NULL,
  `score` varchar(255) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `created_at` varchar(100) DEFAULT NULL,
  `updated_at` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lists`
--

INSERT INTO `lists` (`id`, `movie_id`, `user_id`, `tag`, `score`, `comment`, `created_at`, `updated_at`) VALUES
(148, 100, 178, 'watchlist', '3', NULL, '2016-10-15 08:45:10', '2016-10-15 09:13:37'),
(149, 862, 178, 'completed', '3', NULL, '2016-10-15 10:20:09', '2016-10-30 16:13:29'),
(150, 209112, 178, 'dropped', ' ', NULL, '2016-10-15 10:20:44', '2016-10-15 10:20:44'),
(151, 200, 178, 'completed', '4', NULL, '2016-10-17 16:06:04', '2016-10-17 16:06:14'),
(152, 207932, 178, 'completed', '3', NULL, '2016-10-17 16:58:35', '2016-10-17 16:58:52'),
(153, 238636, 178, 'watchlist', '3', NULL, '2016-10-18 17:25:03', '2016-10-18 17:26:17'),
(154, 862, 162, 'watchlist', '1', NULL, '2016-10-21 14:45:52', '2016-10-21 14:45:59'),
(155, 141267, 178, 'completed', '5', NULL, '2016-10-27 19:09:49', '2016-10-27 19:09:54'),
(156, 238, 178, 'completed', '3', NULL, '2016-10-28 12:31:22', '2016-10-28 12:31:28'),
(157, 861, 178, 'completed', '1', NULL, '2016-10-29 18:05:38', '2016-10-29 18:05:42'),
(158, 956, 184, '', '2', NULL, '2017-01-22 18:03:32', '2017-01-22 18:04:06'),
(159, 277834, 184, 'completed', '3', NULL, '2017-01-22 18:06:47', '2017-01-22 18:11:00'),
(160, 56292, 184, 'completed', '4', NULL, '2017-01-22 18:12:39', '2017-01-22 18:15:17');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `movie_name` varchar(255) NOT NULL,
  `movie_bio` varchar(1024) DEFAULT NULL,
  `movie_date` varchar(255) DEFAULT NULL,
  `movie_pic` varchar(1024) DEFAULT NULL,
  `genre1` varchar(100) DEFAULT '0',
  `genre2` varchar(100) DEFAULT '0',
  `genre3` varchar(100) DEFAULT '0',
  `movie_rate` varchar(100) DEFAULT NULL,
  `created_at` varchar(100) DEFAULT NULL,
  `updated_at` varchar(100) DEFAULT NULL,
  `movie_length` varchar(100) DEFAULT NULL,
  `dump` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `movie_name`, `movie_bio`, `movie_date`, `movie_pic`, `genre1`, `genre2`, `genre3`, `movie_rate`, `created_at`, `updated_at`, `movie_length`, `dump`) VALUES
(100, 'Lock, Stock and Two Smoking Barrels', 'A fast paced comedy about a card sharp and his unwillingly enlisted friends, who need to make a lot of cash quick after losing a sketchy poker match. To do this they decide to pull a heist on a small-time gang who happen to be operating out of the flat next door. Lots of British humor, off the wall characters, and a line up of unbelievable scenes put director Guy Ritchie on the map.', '1998-03-05', 'http://image.tmdb.org/t/p/w500/qV7QaSf7f7yC2lc985zfyOJIAIN.jpg', 'ACtion', '', '', '7.3', '2016-10-14 13:30:10', '2016-10-14 13:30:10', '105', NULL),
(200, 'Star Trek: Insurrection', 'When an alien race and factions within Starfleet attempt to take over a planet that has "regenerative" properties, it falls upon Captain Picard and the crew of the Enterprise to defend the planet''s people as well as the very ideals upon which the Federation itself was founded.', '1998-12-10', 'http://image.tmdb.org/t/p/w500/nIEquSmv8gGta4dwaQkh2rb0jFS.jpg', 'Action', 'Adventure', 'Thriller', '6.2', '2016-10-17 16:06:03', '2016-10-17 16:06:03', '103', NULL),
(238, 'The Godfather', 'The story spans the years from 1945 to 1955 and chronicles the fictional Italian-American Corleone crime family. When organized crime family patriarch Vito Corleone barely survives an attempt on his life, his youngest son, Michael, steps in to take care of the would-be killers, launching a campaign of bloody revenge.', '1972-03-15', 'http://image.tmdb.org/t/p/w500/d4KNaTrltq6bpkFS01pYtyXa09m.jpg', 'Action', '', '', '8.3', '2016-10-28 12:31:21', '2016-10-28 12:31:21', '175', NULL),
(861, 'Total Recall', 'Construction worker Douglas Quaid discovers a memory chip in his brain during a virtual-reality trip. He also finds that his past has been invented to conceal a plot of planetary domination. Soon, he''s off to Mars to find out who he is and who planted the chip.', '1990-06-01', 'http://image.tmdb.org/t/p/w500/ikYpJ0AjGBNnAYFnPJDUVIOcduR.jpg', 'Adventure', 'Science Fiction', '', '6.8', '2016-10-29 18:05:38', '2016-10-29 18:05:38', '113', NULL),
(862, 'Toy Story', 'Woody the cowboy is young Andy’s favorite toy. Yet this changes when Andy get the new super toy Buzz Lightyear for his birthday. Now that Woody is no longer number one he plans his revenge on Buzz. Toy Story is a milestone in film history for being the first feature film to use entirely computer animation.', '1995-10-30', 'http://image.tmdb.org/t/p/w500/uMZqKhT4YA6mqo2yczoznv7IDmv.jpg', 'Comedy', 'Family', '', '7.5', '2016-10-14 13:35:20', '2016-10-14 13:35:20', '81', NULL),
(956, 'Mission: Impossible III', 'Retired from active duty to train new IMF agents, Ethan Hunt is called back into action to confront sadistic arms dealer, Owen Davian. Hunt must try to protect his girlfriend while working with his new team to complete the mission.', '2006-05-03', 'http://image.tmdb.org/t/p/w500/qjy8ABAbWooV4jLG6UjzDHlv4RB.jpg', 'Action', 'Thriller', '', '6.4', '2017-01-22 18:03:31', '2017-01-22 18:03:31', '126', NULL),
(10910, 'Moulin Rouge', 'Fictional account of French artist Henri de Toulouse-Lautrec.', '1952-12-23', 'http://image.tmdb.org/t/p/w500/mdXL304JJhIioZiWp3KBng0te6l.jpg', 'Music', '', '', '3.7', '2016-10-14 13:28:36', '2016-10-14 13:28:36', '119', NULL),
(56292, 'Mission: Impossible - Ghost Protocol', 'In the 4th installment of the Mission Impossible series, Ethan Hunt (Cruise) and his team are racing against time to track down a dangerous terrorist named Hendricks (Nyqvist), who has gained access to Russian nuclear launch codes and is planning a strike on the United States. An attempt to stop him ends in an explosion causing severe destruction to the Kremlin and the IMF to be implicated in the bombing, forcing the President to disavow them. No longer being aided by the government, Ethan and his team chase Hendricks around the globe, although they might still be too late to stop a disaster.', '2011-12-07', 'http://image.tmdb.org/t/p/w500/s58mMsgIVOFfoXPtwPWJ3hDYpXf.jpg', 'Thriller', 'Adventure', '', '6.7', '2017-01-22 18:12:38', '2017-01-22 18:12:38', '133', NULL),
(95610, 'Bridget Jones''s Baby', 'Breaking up with Mark Darcy leaves Bridget Jones over 40 and single again. Feeling that she has everything under control, Jones decides to focus on her career as a top news producer. Suddenly, her love life comes back from the dead when she meets a dashing and handsome American named Jack. Things couldn''t be better, until Bridget discovers that she is pregnant. Now, the befuddled mom-to-be must figure out if the proud papa is Mark or Jack.', '2016-09-15', 'http://image.tmdb.org/t/p/w500/j8di6S3mUuFe5Yz8etRG8yG5EeE.jpg', 'Romance', '', '', '6.5', '2016-10-21 14:45:51', '2016-10-21 14:45:51', '123', NULL),
(141267, 'Johan Falk: Kodnamn Lisa', 'Five men break into Frank Wagner''s apartment. Frank is able to escape and seeks out the help of Johan Falk. Has someone leaked that Frank is working with the police? Frank and John do not know who knows what and who they can trust.', '2013-03-15', 'http://image.tmdb.org/t/p/w500/moWsHkIwsnpFtoT1kORa9rWNyKh.jpg', 'Crime', 'Thriller', '', '7.4', '2016-10-27 19:09:48', '2016-10-27 19:09:48', '106', NULL),
(207932, 'Inferno', 'After waking up in a hospital with amnesia, professor Robert Langdon and a doctor must race against time to foil a deadly global plot.', '2016-10-13', 'http://image.tmdb.org/t/p/w500/oFOG2yIRcluKfTtYbzz71Vj9bgz.jpg', 'Action', 'Mystery', 'Thriller', '5', '2016-10-17 16:58:34', '2016-10-17 16:58:34', '115', NULL),
(209112, 'Batman v Superman: Dawn of Justice', 'Fearing the actions of a god-like Super Hero left unchecked, Gotham City’s own formidable, forceful vigilante takes on Metropolis’s most revered, modern-day savior, while the world wrestles with what sort of hero it really needs. And with Batman and Superman at war with one another, a new threat quickly arises, putting mankind in greater danger than it’s ever known before.', '2016-03-23', 'http://image.tmdb.org/t/p/w500/cGOPbv9wA5gEejkUN892JrveARt.jpg', 'Adventure', 'Fantasy', '', '5.5', '2016-10-15 10:20:43', '2016-10-15 10:20:43', '151', NULL),
(238636, 'The Purge: Anarchy', 'Three groups of people are trying to survive Purge Night, when their stories intertwine and are left stranded in The Purge trying to survive the chaos and violence that occurs.', '2014-07-17', 'http://image.tmdb.org/t/p/w500/l1DRl40x2OWUoPP42v8fjKdS1Z3.jpg', 'Thriller', '', '', '6.6', '2016-10-18 17:25:02', '2016-10-18 17:25:02', '104', NULL),
(277834, 'Moana', 'In Ancient Polynesia, when a terrible curse incurred by Maui reaches an impetuous Chieftain''s daughter''s island, she answers the Ocean''s call to seek out the demigod to set things right.', '2016-11-23', 'http://image.tmdb.org/t/p/w500/z4x0Bp48ar3Mda8KiPD1vwSY3D8.jpg', 'Adventure', 'Comedy', 'Family', '6.5', '2017-01-22 18:06:45', '2017-01-22 18:06:45', '103', NULL),
(309283, 'Addicted to Love', 'Old Pop, a retired factory worker, lives in a former industrial area of Beijing with his extended family. He likes going to the market with his old colleague, Lao Chang. One day, he recognizes a face he had been unable to forget: his first love, Li Ying. An elegant old woman, Li Ying seems to have trouble remembering people, and her daughter is openly hostile to Old Pop. Despite these obstacles, the two elders start meeting in secret. Discovering that Li Ying has Alzheimer, Old Pop plays little games with her to exercise her mind. As in his award-winning first films, Liu Hao uses non-professional actors to recount an unusual love affair with a poetic and humorous touch.', '2010-10-18', 'http://image.tmdb.org/t/p/w500/xLrULTkNCk3QsiLa3muh4ARoA9g.jpg', '', '', '', '0', '2016-10-15 07:24:48', '2016-10-15 07:24:48', '0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tweets`
--

CREATE TABLE `tweets` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tweet` longtext NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `movie_id` int(11) DEFAULT '0',
  `type` varchar(10) DEFAULT NULL,
  `likes` int(11) NOT NULL DEFAULT '0',
  `created_at` varchar(200) DEFAULT NULL,
  `updated_at` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tweets`
--

INSERT INTO `tweets` (`id`, `user_id`, `tweet`, `name`, `movie_id`, `type`, `likes`, `created_at`, `updated_at`) VALUES
(183, 162, 'haha', NULL, 0, NULL, 0, '2016-10-12 00:35:17', '2016-10-12 00:35:17'),
(184, 178, 't', NULL, 0, NULL, 0, '2016-10-12 00:38:38', '2016-10-12 00:38:38'),
(185, 178, 'fkdj', 'asdfghjk', 0, NULL, 0, '2016-10-12 00:43:41', '2016-10-12 00:43:41'),
(186, 178, 'try !!', 'asdfghjk', 0, NULL, 0, '2016-10-12 01:13:47', '2016-10-12 01:13:47'),
(187, 178, 'test on toy story!!', 'asdfghjk', 0, NULL, 0, '2016-10-12 08:59:39', '2016-10-12 08:59:39'),
(188, 178, 'fd', 'asdfghjk', 0, NULL, 0, '2016-10-12 09:03:49', '2016-10-12 09:03:49'),
(189, 178, 'ds', 'asdfghjk', 0, NULL, 0, '2016-10-12 09:30:19', '2016-10-12 09:30:19'),
(190, 178, 'fd', 'asdfghjk', 0, NULL, 0, '2016-10-12 09:31:09', '2016-10-12 09:31:09'),
(191, 178, 'hi', 'asdfghjk', 0, NULL, 0, '2016-10-12 09:32:46', '2016-10-12 09:32:46'),
(192, 178, 'nok', 'asdfghjk', 0, NULL, 0, '2016-10-12 09:34:05', '2016-10-12 09:34:05'),
(193, 178, 'col-sm-xs', 'asdfghjk', 0, NULL, 0, '2016-10-12 09:49:16', '2016-10-12 09:49:16'),
(194, 178, 'ds', 'asdfghjk', 0, NULL, 0, '2016-10-12 10:26:44', '2016-10-12 10:26:44'),
(195, 178, 'test 2016', 'asdfghjk', 0, NULL, 0, '2016-10-12 10:26:58', '2016-10-12 10:26:58'),
(196, 178, 'fd', 'asdfghjk', 0, NULL, 0, '2016-10-12 10:28:17', '2016-10-12 10:28:17'),
(197, 178, 'ds', 'asdfghjk', NULL, NULL, 0, '2016-10-12 10:41:04', '2016-10-12 10:41:04'),
(198, 178, 'fds', 'asdfghjk', NULL, NULL, 0, '2016-10-12 10:45:27', '2016-10-12 10:45:27'),
(199, 178, 'test', 'asdfghjk', NULL, NULL, 0, '2016-10-12 21:09:23', '2016-10-12 21:09:23'),
(200, 178, 'to infinity and beyond', 'asdfghjk', 862, NULL, 0, '2016-10-12 22:17:06', '2016-10-12 22:17:06'),
(201, 178, 'good movie', 'asdfghjk', 238, NULL, 0, '2016-10-13 00:47:49', '2016-10-13 00:47:49'),
(202, 178, 'bad movie, totally waste of time !', 'asdfghjk', 861, NULL, 0, '2016-10-13 00:47:57', '2016-10-13 00:47:57'),
(203, 178, 's', 'asdfghjk', 862, NULL, 0, '2016-10-13 10:32:13', '2016-10-13 10:32:13'),
(204, 178, 'jk', 'asdfghjk', 862, NULL, 0, '2016-10-13 10:56:01', '2016-10-13 10:56:01'),
(205, 178, 'Memoirs of a Geisha is an American novel, and as such the attempt at West does East, especially on the complex and delicate subject of the geisha, is compelling, interesting, but also heavy-handed and ultimately ineffective (even more so in the case of the film). It is a wonderful introduction to geisha, Japanese culture, and the East for the uninitiated Western reader, and I can see why the book is popular, but I found it disappointing. For the reader already familiar with the culture, western influences are all too clear and the book comes off as a bit clunky and imperfect. I also had some problems with the general perception of the characters by readers versus the way the characters were actually portrayed in the book--Memoirs is far from the good-willed fairy tale that people assume it is. By all means, read it, but leave it open for critique and remember that a more authentic representation of eastern culture, especially in the details, will come from the east itself.\r\n\r\nA lot of my critique stems from the fact that this movie has attained such wide-spread fame and been made into a movie, to be sure. I feel like it is being perpetuated as something it is not. Even the introduction to the book (a faux translator''s note) perpetuates the myth that Memoirs is an accurate, beautiful, in-depth reflection of the life of a geisha, when in truth it is no more that historical fiction and is written by an outsider. Golden has done his research and is well-educated on his subjects, and I have no problem with people reading from, taking interest in, and even learning from this book; I do, however, think it is important that readers don''t conflate the American novel with Japanese reality. They aren''t the same thing, no matter how much research Golden did, and if we take the book as an accurate representation we''re actually underestimating and undervaluing geisha, Japan, and Japanese culture.\r\n\r\nBecause Golden attempts to write from within the geisha culture, as a Japanese woman, he must do more than report the "facts" of that life--he must also pretend to be a part of it. Pretend he does, acting out a role as if he has studied inflection, script, and motivation. He certainly knows what makes writing "Japanese" but his attempt to mimic it is not entirely successful. The emphasis on elements, the independent sentences, the visual details are too prevalent and too obvious, as if Golden is trying to call our attention to them and thus to the Japanese style of the text. He does manage to draw attention, but to me, at least, what I came away with was the sense that Golden was an American trying really hard to sound Japanese--that is, the effect betrayed the attempt and the obvious attempt ruined the sincerity of the novel, for me. I felt like I was being smacked over the head with beauty! wood! water! kimono! haiku! and I felt insulted and disappointed.\r\n\r\nThe problems that I saw in the text were certainly secondary to the purpose of the text: to entertain, to introduce Western readers to Japanese culture, and to sell books (and eventually a film). They may not be obvious to all readers and they aren''t so sever that the book isn''t worth reading. I just think readers need to keep in mind that what Golden writes is fiction. Historical fiction, yes, but still fiction, therefore we should look for a true representation of Japanese culture within Japanese culture itself and take Memoirs with a grain of salt.\r\n\r\nI also had problems with the rushed end of the book, the belief that Sayuri is a honest, good, modest, generous person when she really acts for herself and at harm to others throughout much of the book, the perpetuation of Hatsumomo as unjustified and cruel when she has all the reason in the world, and in general the public belief that Memoirs is some sort of fairy tale when in fact it is heavy-handed, biased, and takes a biased or unrelatistic view toward situations, characters, and love. However, all of those complains are secondary, in my view, to the major complain above, and should be come obvious to the reader.\r\n\r\nMemoirs goes quickly, is compelling, and makes a good read, and I don''t want to sound too unreasonably harsh on it. However, I believe the book has a lot of faults that aren''t widely acknowledged and I think we as readers need to keep them in mind. This is an imperfect Western book, and while it may be a fun or good book it is not Japanese, authentic, or entirely well done.', 'asdfghjk', 862, NULL, 0, '2016-10-13 10:56:08', '2016-10-13 10:56:08'),
(206, 162, 'Im kiea', 'kira', 0, NULL, 0, '2016-10-14 13:24:07', '2016-10-14 13:24:07'),
(207, 178, 'nd', 'asdfghjk', 10910, NULL, 0, '2016-10-14 13:28:36', '2016-10-14 13:28:36'),
(208, 178, 'fd', 'asdfghjk', 100, NULL, 0, '2016-10-14 13:30:10', '2016-10-14 13:30:10'),
(209, 178, 'dsa', 'asdfghjk', 862, NULL, 0, '2016-10-14 13:35:20', '2016-10-14 13:35:20'),
(210, 178, 'dsa', 'asdfghjk', 862, NULL, 0, '2016-10-14 13:35:24', '2016-10-14 13:35:24'),
(211, 178, 'dsa', 'asdfghjk', 862, NULL, 0, '2016-10-14 13:35:28', '2016-10-14 13:35:28'),
(212, 178, 'tofdlksjlkfdsjl', 'asdfghjk', 862, NULL, 0, '2016-10-14 13:35:44', '2016-10-14 13:35:44'),
(213, 178, '.fd', 'asdfghjk', 100, NULL, 0, '2016-10-15 06:14:16', '2016-10-15 06:14:16'),
(214, 178, '.fd', 'asdfghjk', 100, NULL, 0, '2016-10-15 06:14:17', '2016-10-15 06:14:17'),
(215, 178, '.fd', 'asdfghjk', 100, NULL, 0, '2016-10-15 06:14:17', '2016-10-15 06:14:17'),
(216, 178, 'this', 'asdfghjk', 309283, NULL, 0, '2016-10-15 07:24:48', '2016-10-15 07:24:48'),
(217, 178, '.', 'asdfghjk', 100, '2', 0, '2016-10-15 08:28:57', '2016-10-15 08:28:57'),
(218, 178, '.', 'asdfghjk', 100, '2', 0, '2016-10-15 08:32:07', '2016-10-15 08:32:07'),
(219, 178, '.', 'asdfghjk', 100, '2', 0, '2016-10-15 08:32:18', '2016-10-15 08:32:18'),
(220, 178, '.', 'asdfghjk', 100, '2', 0, '2016-10-15 08:32:38', '2016-10-15 08:32:38'),
(221, 178, 'kj', 'asdfghjk', 100, NULL, 0, '2016-10-15 08:33:01', '2016-10-15 08:33:01'),
(222, 178, '.', 'asdfghjk', 100, '2', 0, '2016-10-15 08:37:01', '2016-10-15 08:37:01'),
(223, 178, '.', 'asdfghjk', 100, '2', 0, '2016-10-15 08:39:26', '2016-10-15 08:39:26'),
(224, 178, '.', 'asdfghjk', 100, '2', 0, '2016-10-15 08:43:25', '2016-10-15 08:43:25'),
(225, 178, '.', 'asdfghjk', 100, '2', 0, '2016-10-15 08:43:53', '2016-10-15 08:43:53'),
(226, 178, '.', 'asdfghjk', 100, '2', 0, '2016-10-15 08:44:33', '2016-10-15 08:44:33'),
(227, 178, '.', 'asdfghjk', 100, '2', 0, '2016-10-15 08:44:37', '2016-10-15 08:44:37'),
(228, 178, '.', 'asdfghjk', 100, '2', 0, '2016-10-15 08:45:10', '2016-10-15 08:45:10'),
(229, 178, '.', 'asdfghjk', 100, '2', 0, '2016-10-15 08:45:18', '2016-10-15 08:45:18'),
(230, 178, '.', 'asdfghjk', 100, '2', 0, '2016-10-15 08:52:19', '2016-10-15 08:52:19'),
(231, 178, '.', 'asdfghjk', 100, '2', 0, '2016-10-15 08:53:14', '2016-10-15 08:53:14'),
(232, 178, '.', 'asdfghjk', 100, '2', 0, '2016-10-15 08:54:01', '2016-10-15 08:54:01'),
(233, 178, '.', 'asdfghjk', 100, '2', 0, '2016-10-15 08:55:23', '2016-10-15 08:55:23'),
(234, 178, '.', 'asdfghjk', 100, '2', 0, '2016-10-15 08:55:28', '2016-10-15 08:55:28'),
(235, 178, '.', 'asdfghjk', 100, '2', 0, '2016-10-15 08:55:32', '2016-10-15 08:55:32'),
(236, 178, '.', 'asdfghjk', 100, '2', 0, '2016-10-15 08:55:36', '2016-10-15 08:55:36'),
(237, 178, '.', 'asdfghjk', 100, '2', 0, '2016-10-15 08:56:02', '2016-10-15 08:56:02'),
(238, 178, '.', 'asdfghjk', 100, '2', 0, '2016-10-15 09:01:54', '2016-10-15 09:01:54'),
(239, 178, '.', 'asdfghjk', 100, '2', 0, '2016-10-15 09:03:20', '2016-10-15 09:03:20'),
(240, 178, '.', 'asdfghjk', 100, '2', 0, '2016-10-15 09:04:26', '2016-10-15 09:04:26'),
(241, 178, '.', 'asdfghjk', 100, '2', 0, '2016-10-15 09:04:51', '2016-10-15 09:04:51'),
(242, 178, '.', 'asdfghjk', 100, '2', 0, '2016-10-15 09:05:45', '2016-10-15 09:05:45'),
(243, 178, '.', 'asdfghjk', 100, '2', 0, '2016-10-15 09:13:17', '2016-10-15 09:13:17'),
(244, 178, '.', 'asdfghjk', 100, '2', 0, '2016-10-15 09:13:37', '2016-10-15 09:13:37'),
(245, 178, '.', 'asdfghjk', 862, '2', 0, '2016-10-15 10:20:09', '2016-10-15 10:20:09'),
(246, 178, '.', 'asdfghjk', 209112, '2', 0, '2016-10-15 10:20:44', '2016-10-15 10:20:44'),
(247, 178, '.', 'asdfghjk', 200, '2', 0, '2016-10-17 16:06:03', '2016-10-17 16:06:03'),
(248, 178, '.', 'asdfghjk', 200, '2', 0, '2016-10-17 16:06:13', '2016-10-17 16:06:13'),
(249, 178, '.', 'asdfghjk', 207932, '2', 0, '2016-10-17 16:58:34', '2016-10-17 16:58:34'),
(250, 178, '.', 'asdfghjk', 207932, '2', 0, '2016-10-17 16:58:51', '2016-10-17 16:58:51'),
(251, 178, 'i like this movie', 'asdfghjk', 207932, NULL, 0, '2016-10-17 17:00:25', '2016-10-17 17:00:25'),
(252, 178, '.', 'asdfghjk', 238636, '2', 0, '2016-10-18 17:25:02', '2016-10-18 17:25:02'),
(253, 178, '.', 'asdfghjk', 238636, '2', 0, '2016-10-18 17:25:07', '2016-10-18 17:25:07'),
(254, 178, '.', 'asdfghjk', 238636, '2', 0, '2016-10-18 17:25:14', '2016-10-18 17:25:14'),
(255, 178, '.', 'asdfghjk', 238636, '2', 0, '2016-10-18 17:25:17', '2016-10-18 17:25:17'),
(256, 178, '.', 'asdfghjk', 238636, '2', 0, '2016-10-18 17:25:19', '2016-10-18 17:25:19'),
(257, 178, '.', 'asdfghjk', 238636, '2', 0, '2016-10-18 17:25:55', '2016-10-18 17:25:55'),
(258, 178, '.', 'asdfghjk', 238636, '2', 0, '2016-10-18 17:26:17', '2016-10-18 17:26:17'),
(259, 178, '.', 'asdfghjk', 95610, '2', 0, '2016-10-21 14:45:51', '2016-10-21 14:45:51'),
(260, 178, '.', 'asdfghjk', 95610, '2', 0, '2016-10-21 14:45:59', '2016-10-21 14:45:59'),
(261, 178, 'test', 'asdfghjk', 0, NULL, 0, '2016-10-27 17:53:47', '2016-10-27 17:53:47'),
(262, 178, '.', 'asdfghjk', 141267, '2', 0, '2016-10-27 19:09:48', '2016-10-27 19:09:48'),
(263, 178, '.', 'asdfghjk', 141267, '2', 0, '2016-10-27 19:09:51', '2016-10-27 19:09:51'),
(264, 178, '.', 'asdfghjk', 141267, '2', 0, '2016-10-27 19:09:53', '2016-10-27 19:09:53'),
(265, 178, '.', 'asdfghjk', 238, '2', 0, '2016-10-28 12:31:21', '2016-10-28 12:31:21'),
(266, 178, '.', 'asdfghjk', 238, '2', 0, '2016-10-28 12:31:27', '2016-10-28 12:31:27'),
(267, 178, '.', 'test', 861, '2', 0, '2016-10-29 18:05:38', '2016-10-29 18:05:38'),
(268, 178, '.', 'test', 861, '2', 0, '2016-10-29 18:05:41', '2016-10-29 18:05:41'),
(269, 178, '.', 'test', 862, '2', 0, '2016-10-30 16:13:25', '2016-10-30 16:13:25'),
(270, 178, '.', 'test', 862, '2', 0, '2016-10-30 16:13:29', '2016-10-30 16:13:29'),
(271, 184, 'Hello There, Iam using Nanashi\r\n', 'mah', 0, NULL, 0, '2017-01-22 17:54:41', '2017-01-22 17:54:41'),
(272, 184, '.', 'mah', 956, '2', 0, '2017-01-22 18:03:31', '2017-01-22 18:03:31'),
(273, 184, '.', 'mah', 956, '2', 0, '2017-01-22 18:04:05', '2017-01-22 18:04:05'),
(274, 184, '.', 'mah', 277834, '2', 0, '2017-01-22 18:06:46', '2017-01-22 18:06:46'),
(275, 184, '.', 'mah', 277834, '2', 0, '2017-01-22 18:07:21', '2017-01-22 18:07:21'),
(276, 184, '.', 'mah', 277834, '2', 0, '2017-01-22 18:10:29', '2017-01-22 18:10:29'),
(277, 184, '.', 'mah', 277834, '2', 0, '2017-01-22 18:10:56', '2017-01-22 18:10:56'),
(278, 184, '.', 'mah', 277834, '2', 0, '2017-01-22 18:10:59', '2017-01-22 18:10:59'),
(279, 184, '.', 'mah', 56292, '2', 0, '2017-01-22 18:12:38', '2017-01-22 18:12:38'),
(280, 184, '.', 'mah', 56292, '2', 0, '2017-01-22 18:14:12', '2017-01-22 18:14:12'),
(281, 184, '.', 'mah', 56292, '2', 0, '2017-01-22 18:15:16', '2017-01-22 18:15:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` char(255) NOT NULL,
  `password` char(255) DEFAULT NULL,
  `active` enum('0','1','','') NOT NULL DEFAULT '0',
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pic` varchar(1024) NOT NULL DEFAULT '../default_pic.png',
  `bio` varchar(1024) DEFAULT 'Apparently, this user prefers to keep an air of mystery about them.',
  `birth` varchar(255) DEFAULT NULL,
  `place` varchar(255) DEFAULT NULL,
  `sex` varchar(20) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `updated_at` varchar(100) DEFAULT NULL,
  `created_at` varchar(100) DEFAULT NULL,
  `header` varchar(1000) DEFAULT '../header.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `active`, `email`, `pic`, `bio`, `birth`, `place`, `sex`, `remember_token`, `updated_at`, `created_at`, `header`) VALUES
(121, 'mohamed', '$2y$10$k8rje8991ISZAtzbwZQu5e5X8iXBbeNwWgiz0De/UAnDPN86irz.6', '0', 'mohamed.d.kamal.mk@hotmail.com', '0', '0', '-', '-', '-', 'LSscFZCTA0LSUfNy8fzOmc4nJxnOFku76U1HScgSVARlhq7AjopHtixulfBg', '2016-10-29 17:29:14', '2016-10-09 00:06:54', '../default_header.jpg'),
(168, 'nanashi', '1', '1', 'KHHJHB@gmail.com', '2016.219769.jpg', ' ', '', '', '-', NULL, NULL, NULL, '../default_header.jpg'),
(169, 'momo', '1', '1', 'nanashi101kamal@gmail.com', '2016.465672.jpg', ' ', '', '', '-', NULL, NULL, NULL, '../default_header.jpg'),
(171, 'lala', '1', '1', 'h@g.com', '0', ' ', '', '', '-', NULL, NULL, NULL, '../default_header.jpg'),
(175, 'mohamed', '123123123', '1', 'test123321testisgood@gmail.com', '../../img/default.jpg', ' ', '', '', '', NULL, NULL, NULL, '../default_header.jpg'),
(176, 'qwertyuio', '$2y$10$3zDYVcSrwvI3oOVtheUISOJ3PLsjlAKVffnH9m6Wse1tIwwvbj6D2', '0', 'qwertyu@ghjk.com', '0', '0', '-', '-', '-', NULL, '2016-10-08 20:35:15', '2016-10-08 20:35:15', '../default_header.jpg'),
(178, 'test', '$2y$10$ykBXhQM0rgsEqmkcor0XEOp./MA0nNshyu812tYqQdqsTV4VRPeJi', '0', 'example@example.com', '1477678425.jpg', 'Apparently, this user prefers to keep an air of mystery about them.', '-', '-', '-', 'nH6AqcueppHvvhJVzQGVsKzX2z05qApxgAyJPD9xRu8xmGhtUq7g2fBBttJo', '2016-10-30 16:13:48', '2016-10-09 10:42:04', '../default_header.jpg'),
(179, 'dfgvhjnkml,', '$2y$10$KWMLFkzbKfEfj81OiPyV6eFqp8LMy3rRsGSWqRs/gpDJa42mYcHD2', '0', 'example@example.comjvhdk', '../default_pic.png', '0', '-', '-', '-', 'glP3Ksobxhcxw9W0O55zaEeg11CV0klPn35uzv5H27JxYAfJ2OkoWyFyDxN7', '2016-10-10 00:49:26', '2016-10-09 23:05:33', '../default_header.jpg'),
(180, 'test b', '$2y$10$4l0NImnhMLtIsK3KyxvioOgTWYpbknrOUAZh.HGEOU2YHDvbUK1dy', '0', 'test@test.com', '../default_pic.png', '0', '-', '-', '-', 'LNct09paWWNixHr1dSUR4FK162i8M8yhKgVgXR8L6r0I9niFhP479ZICivPN', '2016-10-10 00:51:08', '2016-10-10 00:50:09', '../default_header.jpg'),
(181, 'mohamed12', '$2y$10$kjGChQk373A3OxmlsRR8Mezy6/jT1fdaZ.YYOeVdj8mPd25ZY4aAK', '0', '12@eeeee.com', '../default_pic.png', '0', '-', '-', '-', 'YG1Idy6rjS4eQ65AeeQt8QaOEbEBfqfvWwNQOZePW8qGlLn0Jnf6vlUlLHMg', '2016-10-10 00:52:16', '2016-10-10 00:51:43', '../default_header.jpg'),
(182, 'qwe', '$2y$10$QrcprrzR8JKl4lLRh5DNluSKYSRbmLq0FbuLsKoTi6rbMHmqTbvQm', '0', 'KHHJHB@gmail.comfdsfds', '../default_pic.png', '0', '-', '-', '-', NULL, '2016-10-10 00:52:42', '2016-10-10 00:52:42', '../default_header.jpg'),
(183, 'kira22', '$2y$10$7iVaOsyiyXrvA3NxLcFxy.WuStn5dvzc0ZeQwJZ2tdGQiVGDX2KxO', '0', 'm@m.com', '../default_pic.png', 'Apparently, this user prefers to keep an air of mystery about them.', NULL, NULL, NULL, NULL, '2017-01-09 15:52:09', '2017-01-09 15:52:09', '../header.jpg'),
(184, 'mah', '$2y$10$/pGHfVpck/hf59xT0vdPUuf2XZ25md3ZXDnyOjgXbyrdULCmFe6YS', '0', 'm@c.v', '../default_pic.png', 'Apparently, this user prefers to keep an air of mystery about them.', NULL, NULL, NULL, NULL, '2017-01-22 17:12:58', '2017-01-22 17:12:58', '../header.jpg'),
(185, 'account', '$2y$10$AB0pj.sMf1jIqSBkwIAcyufjfN2KdcygoL0ZhuH55IDWIPfZ3y33y', '0', 'm@m.m', '../default_pic.png', 'Apparently, this user prefers to keep an air of mystery about them.', NULL, NULL, NULL, NULL, '2017-01-23 15:35:01', '2017-01-23 15:35:01', '../header.jpg'),
(186, 'nanashi', '$2y$10$lqCjzZsD003mHnrfgH8syu39Or03vaB/s3naVIhKw5y6i096/kQui', '0', 'D@d.com', '../default_pic.png', 'Apparently, this user prefers to keep an air of mystery about them.', NULL, NULL, NULL, NULL, '2017-03-15 16:44:42', '2017-03-15 16:44:42', '../header.jpg'),
(187, 'tarou', '$2y$10$iTWIE9Pmq7qjDpSMYwxXLeRH90ruCoakCEvncXkobX0m7ArdJugG6', '0', 'malsdyaq@souq.com', '../default_pic.png', 'Apparently, this user prefers to keep an air of mystery about them.', NULL, NULL, NULL, NULL, '2017-03-17 12:50:13', '2017-03-17 12:50:13', '../header.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user1` (`user1`),
  ADD KEY `user2` (`user2`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`like_id`);

--
-- Indexes for table `lists`
--
ALTER TABLE `lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tweets`
--
ALTER TABLE `tweets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11461;
--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `lists`
--
ALTER TABLE `lists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;
--
-- AUTO_INCREMENT for table `tweets`
--
ALTER TABLE `tweets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=282;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
