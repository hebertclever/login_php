-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22/08/2023 às 01:26
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `formulario_hebert`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `url_img` varchar(255) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `url_img`, `bio`, `phone`) VALUES
(1, 'Drewell', 'wJ7\"vl8,3Hy', 'adrewell0@jimdo.com', 'http://dummyimage.com/223x100.png/dddddd/000000', NULL, NULL),
(2, 'Flanders', 'bA6=Mgc>VX49#', 'gflanders1@goo.gl', 'http://dummyimage.com/223x100.png/ff4444/ffffff', NULL, NULL),
(3, 'Casham', 'wQ4@tRC8l*~Go', 'gcasham2@people.com.cn', 'http://dummyimage.com/106x100.png/cc0000/ffffff', NULL, NULL),
(4, 'Kingsland', 'qL4!ZAWQU(', 'gkingsland3@bbc.co.uk', 'http://dummyimage.com/194x100.png/cc0000/ffffff', NULL, NULL),
(5, 'Wingeat', 'fU7,h}w~Az*X', 'awingeat4@boston.com', 'http://dummyimage.com/168x100.png/5fa2dd/ffffff', NULL, NULL),
(6, 'Splevings', 'kC7&V0FLwE@(', 'lsplevings5@parallels.com', 'http://dummyimage.com/248x100.png/cc0000/ffffff', NULL, NULL),
(7, 'Rudloff', 'zJ7}9()D', 'arudloff6@netvibes.com', 'http://dummyimage.com/168x100.png/cc0000/ffffff', NULL, NULL),
(8, 'O\'Geaney', 'qX7(vQ`JHTp5', 'logeaney7@squidoo.com', 'http://dummyimage.com/250x100.png/ff4444/ffffff', NULL, NULL),
(9, 'Jewett', 'nH8)Iu?n)c4', 'gjewett8@symantec.com', 'http://dummyimage.com/235x100.png/dddddd/000000', NULL, NULL),
(10, 'Bader', 'kV1\'>lUJy@', 'dbader9@ow.ly', 'http://dummyimage.com/224x100.png/cc0000/ffffff', NULL, NULL),
(11, 'Danbury', 'lP4,,sGQp4iVa0', 'ddanburya@jiathis.com', 'http://dummyimage.com/103x100.png/5fa2dd/ffffff', NULL, NULL),
(12, 'Dener', 'gD5>npZ~w$', 'gdenerb@sohu.com', 'http://dummyimage.com/218x100.png/5fa2dd/ffffff', NULL, NULL),
(13, 'Axby', 'eY6}5~BZZ', 'eaxbyc@yale.edu', 'http://dummyimage.com/172x100.png/5fa2dd/ffffff', NULL, NULL),
(14, 'Heselwood', 'dJ4}v\'n`p', 'cheselwoodd@addtoany.com', 'http://dummyimage.com/113x100.png/cc0000/ffffff', NULL, NULL),
(15, 'Henricsson', 'xT1(y!43exalBp~', 'thenricssone@sun.com', 'http://dummyimage.com/160x100.png/cc0000/ffffff', NULL, NULL),
(16, 'Kench', 'zJ1>qE\"_', 'mkenchf@unesco.org', 'http://dummyimage.com/184x100.png/5fa2dd/ffffff', NULL, NULL),
(17, 'Mahmood', 'sA5.5pgvd/', 'rmahmoodg@yelp.com', 'http://dummyimage.com/113x100.png/cc0000/ffffff', NULL, NULL),
(18, 'Grastye', 'sR0&\'7$g{#', 'sgrastyeh@buzzfeed.com', 'http://dummyimage.com/237x100.png/5fa2dd/ffffff', NULL, NULL),
(19, 'Dillimore', 'eB3=+Dyg6{50p3', 'cdillimorei@ning.com', 'http://dummyimage.com/106x100.png/5fa2dd/ffffff', NULL, NULL),
(20, 'Tomlin', 'hD0R}.Ot', 'stomlinj@rediff.com', 'http://dummyimage.com/116x100.png/cc0000/ffffff', NULL, NULL),
(21, 'Plows', 'rE2}Cd*Z', 'cplowsk@freewebs.com', 'http://dummyimage.com/222x100.png/5fa2dd/ffffff', NULL, NULL),
(22, 'Beardon', 'fD7&Ii+EN', 'ebeardonl@pbs.org', 'http://dummyimage.com/185x100.png/ff4444/ffffff', NULL, NULL),
(23, 'Elwell', 'uN5>62,67YKiW*sV', 'nelwellm@kickstarter.com', 'http://dummyimage.com/227x100.png/cc0000/ffffff', NULL, NULL),
(24, 'Skule', 'eQ7#W1<vOtF}*~O0', 'cskulen@opensource.org', 'http://dummyimage.com/100x100.png/ff4444/ffffff', NULL, NULL),
(25, 'Hofler', 'xR4>0%}%C/', 'ahoflero@etsy.com', 'http://dummyimage.com/209x100.png/dddddd/000000', NULL, NULL),
(26, 'Tunkin', 'oQ3,P@_jUBhe1C', 'ktunkinp@jalbum.net', 'http://dummyimage.com/209x100.png/cc0000/ffffff', NULL, NULL),
(27, 'Bushrod', 'mQ7!=$ll', 'cbushrodq@sitemeter.com', 'http://dummyimage.com/225x100.png/5fa2dd/ffffff', NULL, NULL),
(28, 'Mattin', 'mR5<m,*jA', 'mmattinr@blogger.com', 'http://dummyimage.com/222x100.png/5fa2dd/ffffff', NULL, NULL),
(29, 'Manifould', 'bZ9$}o}Hdx1LA<m', 'imanifoulds@example.com', 'http://dummyimage.com/216x100.png/ff4444/ffffff', NULL, NULL),
(30, 'Ambrogiotti', 'jL5}EyifK', 'wambrogiottit@ox.ac.uk', 'http://dummyimage.com/185x100.png/5fa2dd/ffffff', NULL, NULL),
(31, 'Mears', 'zI7~\'Ttl=um', 'gmearsu@nifty.com', 'http://dummyimage.com/201x100.png/cc0000/ffffff', NULL, NULL),
(32, 'Mertel', 'eX9?q`atT~ufo', 'smertelv@ovh.net', 'http://dummyimage.com/226x100.png/dddddd/000000', NULL, NULL),
(33, 'Deering', 'iE4_rBJfd1%yD.y', 'ddeeringw@mediafire.com', 'http://dummyimage.com/220x100.png/cc0000/ffffff', NULL, NULL),
(34, 'Blessed', 'uX8&#e+Re=_I3PvZ', 'rblessedx@soup.io', 'http://dummyimage.com/231x100.png/5fa2dd/ffffff', NULL, NULL),
(35, 'Cordsen', 'iG1}nN{SYh2wT', 'rcordseny@umn.edu', 'http://dummyimage.com/170x100.png/cc0000/ffffff', NULL, NULL),
(36, 'Wallett', 'fB5}_|EK98EF', 'vwallettz@xrea.com', 'http://dummyimage.com/184x100.png/cc0000/ffffff', NULL, NULL),
(37, 'Thomassin', 'jL4@zH5\'C', 'pthomassin10@aboutads.info', 'http://dummyimage.com/180x100.png/ff4444/ffffff', NULL, NULL),
(38, 'Clendening', 'dI4\'3Dqz.', 'jclendening11@fema.gov', 'http://dummyimage.com/156x100.png/5fa2dd/ffffff', NULL, NULL),
(39, 'Fisby', 'kD2\"t<>S', 'lfisby12@foxnews.com', 'http://dummyimage.com/224x100.png/5fa2dd/ffffff', NULL, NULL),
(40, 'Hargrove', 'aK8%pe#9\"$', 'mhargrove13@blog.com', 'http://dummyimage.com/188x100.png/ff4444/ffffff', NULL, NULL),
(41, 'Hurleston', 'sU6&~e*Yxm\'|', 'mhurleston14@army.mil', 'http://dummyimage.com/107x100.png/5fa2dd/ffffff', NULL, NULL),
(42, 'Yukhnin', 'oV3_g}GH', 'vyukhnin15@seattletimes.com', 'http://dummyimage.com/176x100.png/5fa2dd/ffffff', NULL, NULL),
(43, 'Vertey', 'qG0\"V|QYr|E', 'svertey16@trellian.com', 'http://dummyimage.com/207x100.png/dddddd/000000', NULL, NULL),
(44, 'Tolworth', 'uA4~@%m%@', 'etolworth17@webs.com', 'http://dummyimage.com/233x100.png/dddddd/000000', NULL, NULL),
(45, 'Matresse', 'bY3(8XpJPwTt@*2', 'hmatresse18@statcounter.com', 'http://dummyimage.com/199x100.png/dddddd/000000', NULL, NULL),
(46, 'Pirson', 'kU5\'Sq4Ar', 'rpirson19@rediff.com', 'http://dummyimage.com/195x100.png/5fa2dd/ffffff', NULL, NULL),
(47, 'Pitceathly', 'qB2)ct$%>0N?Ysv', 'wpitceathly1a@ft.com', 'http://dummyimage.com/157x100.png/5fa2dd/ffffff', NULL, NULL),
(48, 'Harrow', 'bZ3)0EK$0b', 'sharrow1b@ovh.net', 'http://dummyimage.com/161x100.png/ff4444/ffffff', NULL, NULL),
(49, 'Jeffreys', 'jR0\"94<dV*%b.', 'tjeffreys1c@godaddy.com', 'http://dummyimage.com/117x100.png/dddddd/000000', NULL, NULL),
(50, 'Seneschal', 'aV9&L#{y59swpgus', 'jseneschal1d@hexun.com', 'http://dummyimage.com/205x100.png/ff4444/ffffff', NULL, NULL),
(51, 'Lorenz', 'aJ1/4\"S+,GO+', 'nlorenz1e@cornell.edu', 'http://dummyimage.com/126x100.png/5fa2dd/ffffff', NULL, NULL),
(52, 'Hebert', '5cb34c2d838ad8cb41f60ff46248e4fa', 'hebertclever@gmail.com', 'capitao-america.jpg', 'Desenvolvedor Web', '13992046840'),
(53, '', 'd41d8cd98f00b204e9800998ecf8427e', '', NULL, NULL, NULL),
(61, '', '$2y$10$R4UU1GhHD9Ww1zjoiA4XzuodO', 'eyplan@gmail.com', NULL, NULL, NULL),
(62, '', '$2y$10$ToHe3.CutP3UjJpCtQKIt.N2X', 'eyplan15@gmail.com', NULL, NULL, NULL),
(63, '', '$2y$10$SOk5iSRangfj.Qz/o/gHZOW4C', 'eyplan18@gmail.com', NULL, NULL, NULL),
(65, '', '$2y$10$EUQyc325W2wV4na67RPJR.gXC', 'maneirasdigitais@gmail.com', NULL, NULL, NULL),
(66, '', '$2y$10$LDGADsgYePWgATDoOgqTx.KBT', 'joao@gmail.com', NULL, NULL, NULL),
(67, '', '$2y$10$sz3kWLXAAsZP6dUfsG3d6.MZzsUVx4KjuOnE1nc2uFLuJV6EE21R6', 'bahia@gmail.com', NULL, NULL, NULL),
(68, '', '$2y$10$ETAeE/vfuVF8lp1aRcgftOu/w.E6MGyGQpfDhOe6Qk6HPe3Mjq4Ua', 'jotaqueste@gmail.com', NULL, NULL, NULL),
(69, '', '$2y$10$gMxT/08kjziFmM29CNWNZ.Ub6Hio77lGZW21CwNMD5e83C0Tc/num', 'kova@gmail.com', NULL, NULL, NULL),
(70, 'Maicon ', '$2y$10$A3vUWNtPc/CXX0sIdKrBou2ayGc6F4ORiqOOSgDRlPDlx8r7nvd8K', 'maicon@gmail.com', 'uploads/Captura de tela 2023-07-19 223952.png', 'Desenvolvedor Web Full-Stack', '94992892762'),
(71, 'Joao', '$2y$10$jGVVCF.eNlCQbwFJI8yI/OZ42NhRGrqEZ/CibZK5HqL0X.qxhP8OS', 'joaosilva@gmail.com', '', 'Desenvolvedor Web Full-Stack', '13695428524'),
(72, 'Maria', '$2y$10$SDCokzbXSzS99GrR1lqJe.K4AkrTXbEM8CnZEDoASYj1G459bDhj6', 'maria@gmail.com', 'uploads/Captura de tela 2023-08-21 074805.png', 'Cozinheira de comida doces', '36656965825982');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
