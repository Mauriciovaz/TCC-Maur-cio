-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02-Dez-2020 às 22:18
-- Versão do servidor: 5.6.17
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tcc_mauricio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividade`
--

CREATE TABLE IF NOT EXISTS `atividade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `conteudo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `questao1` text COLLATE utf8_unicode_ci NOT NULL,
  `op1q1` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `op2q1` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `op3q1` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `op4q1` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `op5q1` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `questao2` text COLLATE utf8_unicode_ci NOT NULL,
  `op1q2` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `op2q2` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `op3q2` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `op4q2` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `op5q2` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `questao3` text COLLATE utf8_unicode_ci NOT NULL,
  `op1q3` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `op2q3` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `op3q3` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `op4q3` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `op5q3` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `correta1` int(11) NOT NULL,
  `correta2` int(11) NOT NULL,
  `correta3` int(11) NOT NULL,
  `feed1` text COLLATE utf8_unicode_ci NOT NULL,
  `feed2` text COLLATE utf8_unicode_ci NOT NULL,
  `feed3` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `atividade`
--

INSERT INTO `atividade` (`id`, `conteudo`, `questao1`, `op1q1`, `op2q1`, `op3q1`, `op4q1`, `op5q1`, `questao2`, `op1q2`, `op2q2`, `op3q2`, `op4q2`, `op5q2`, `questao3`, `op1q3`, `op2q3`, `op3q3`, `op4q3`, `op5q3`, `correta1`, `correta2`, `correta3`, `feed1`, `feed2`, `feed3`) VALUES
(5, 'Teste de atividade', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur arcu enim, accumsan elementum hendrerit nec, porta sed velit. Mauris sagittis tortor in purus convallis egestas. Aenean lorem risus, blandit ac purus ut, venenatis efficitur nisl. Nulla malesuada purus id pellentesque lobortis. Integer dictum bibendum lacus eget lacinia. Pellentesque eu scelerisque sapien. Pellentesque quis felis metus. Nulla turpis neque, ullamcorper eu dui quis, maximus laoreet purus. Morbi ac ultrices quam. Aenean non vulputate orci. Duis non viverra ante. Suspendisse pretium lacus sit amet auctor gravida.</p><p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam tincidunt ut lorem at ultricies. Nunc tempus ipsum dui, eu rutrum nibh vestibulum ut. Integer tortor velit, vulputate in tellus sed, sodales vestibulum libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nullam id tincidunt tellus, at pellentesque elit. Morbi sagittis, nisi et ultricies tempus, leo ipsum fringilla orci, vitae eleifend mi ipsum quis justo. Nam condimentum posuere vulputate. Nullam et bibendum turpis. Fusce maximus, orci vel venenatis placerat, neque nulla cursus velit, in blandit augue libero tincidunt justo.</p><p>Suspendisse pulvinar odio ut felis condimentum, ut sollicitudin massa ultricies. Aliquam feugiat eget lorem id rhoncus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Ut pulvinar metus at tincidunt vestibulum. Quisque laoreet ullamcorper tincidunt. Nam in quam egestas tellus mattis ornare vitae quis leo. Nulla vitae consequat tellus. Ut semper porta nibh, eu fringilla lectus eleifend id. Ut vel tellus at sapien feugiat facilisis a ac turpis. Nam vel massa eu nisl porta vulputate consequat a lectus. Donec id volutpat ipsum, id mattis dolor.</p><p>Quisque pretium ligula ut lacus euismod euismod. Donec eget purus dolor. Nullam non ipsum et arcu facilisis lobortis vel eget ex. Aliquam feugiat nisi efficitur quam interdum mollis. Quisque sapien justo, lacinia sed egestas a, ultrices sit amet tellus. Morbi pretium velit nec lacus pulvinar, eget aliquam ipsum imperdiet. Vivamus faucibus laoreet est, non efficitur ligula pellentesque sit amet. Suspendisse feugiat at urna consectetur euismod. Pellentesque hendrerit finibus arcu, nec accumsan enim porta et. Sed lacinia fermentum erat, id pharetra dui placerat nec. Pellentesque aliquam velit felis, vel pretium arcu rhoncus in. Proin sit amet ipsum eget sapien viverra pulvinar. Mauris at ligula nec libero tristique ornare sed ut odio. Donec sollicitudin tincidunt imperdiet. Aliquam nec est in ligula imperdiet pellentesque et in ipsum.</p><p>Phasellus id mi odio. Suspendisse hendrerit vel turpis ut luctus. Maecenas condimentum tortor at blandit congue. Nullam ornare orci bibendum, ultrices elit condimentum, vehicula purus. Sed venenatis feugiat tincidunt. Suspendisse vel tempus eros. Sed nec tincidunt elit. Maecenas placerat quam metus, ac convallis diam faucibus non. Vivamus interdum nisl massa, eget laoreet nisi sagittis id. Curabitur ut neque accumsan est bibendum ornare. Sed mattis suscipit metus, et cursus enim malesuada id. Quisque aliquet volutpat sapien posuere commodo. Maecenas a condimentum lacus. Vivamus pellentesque volutpat lacus, aliquet pretium urna. Suspendisse luctus accumsan rutrum. Sed ut lectus leo.</p>', '1', '2', '3', '4', '5', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur arcu enim, accumsan elementum hendrerit nec, porta sed velit. Mauris sagittis tortor in purus convallis egestas. Aenean lorem risus, blandit ac purus ut, venenatis efficitur nisl. Nulla malesuada purus id pellentesque lobortis. Integer dictum bibendum lacus eget lacinia. Pellentesque eu scelerisque sapien. Pellentesque quis felis metus. Nulla turpis neque, ullamcorper eu dui quis, maximus laoreet purus. Morbi ac ultrices quam. Aenean non vulputate orci. Duis non viverra ante. Suspendisse pretium lacus sit amet auctor gravida.</p><p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam tincidunt ut lorem at ultricies. Nunc tempus ipsum dui, eu rutrum nibh vestibulum ut. Integer tortor velit, vulputate in tellus sed, sodales vestibulum libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nullam id tincidunt tellus, at pellentesque elit. Morbi sagittis, nisi et ultricies tempus, leo ipsum fringilla orci, vitae eleifend mi ipsum quis justo. Nam condimentum posuere vulputate. Nullam et bibendum turpis. Fusce maximus, orci vel venenatis placerat, neque nulla cursus velit, in blandit augue libero tincidunt justo.</p><p>Suspendisse pulvinar odio ut felis condimentum, ut sollicitudin massa ultricies. Aliquam feugiat eget lorem id rhoncus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Ut pulvinar metus at tincidunt vestibulum. Quisque laoreet ullamcorper tincidunt. Nam in quam egestas tellus mattis ornare vitae quis leo. Nulla vitae consequat tellus. Ut semper porta nibh, eu fringilla lectus eleifend id. Ut vel tellus at sapien feugiat facilisis a ac turpis. Nam vel massa eu nisl porta vulputate consequat a lectus. Donec id volutpat ipsum, id mattis dolor.</p><p>Quisque pretium ligula ut lacus euismod euismod. Donec eget purus dolor. Nullam non ipsum et arcu facilisis lobortis vel eget ex. Aliquam feugiat nisi efficitur quam interdum mollis. Quisque sapien justo, lacinia sed egestas a, ultrices sit amet tellus. Morbi pretium velit nec lacus pulvinar, eget aliquam ipsum imperdiet. Vivamus faucibus laoreet est, non efficitur ligula pellentesque sit amet. Suspendisse feugiat at urna consectetur euismod. Pellentesque hendrerit finibus arcu, nec accumsan enim porta et. Sed lacinia fermentum erat, id pharetra dui placerat nec. Pellentesque aliquam velit felis, vel pretium arcu rhoncus in. Proin sit amet ipsum eget sapien viverra pulvinar. Mauris at ligula nec libero tristique ornare sed ut odio. Donec sollicitudin tincidunt imperdiet. Aliquam nec est in ligula imperdiet pellentesque et in ipsum.</p><p>Phasellus id mi odio. Suspendisse hendrerit vel turpis ut luctus. Maecenas condimentum tortor at blandit congue. Nullam ornare orci bibendum, ultrices elit condimentum, vehicula purus. Sed venenatis feugiat tincidunt. Suspendisse vel tempus eros. Sed nec tincidunt elit. Maecenas placerat quam metus, ac convallis diam faucibus non. Vivamus interdum nisl massa, eget laoreet nisi sagittis id. Curabitur ut neque accumsan est bibendum ornare. Sed mattis suscipit metus, et cursus enim malesuada id. Quisque aliquet volutpat sapien posuere commodo. Maecenas a condimentum lacus. Vivamus pellentesque volutpat lacus, aliquet pretium urna. Suspendisse luctus accumsan rutrum. Sed ut lectus leo.</p>', '1', '2', '3', '4', '5', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur arcu enim, accumsan elementum hendrerit nec, porta sed velit. Mauris sagittis tortor in purus convallis egestas. Aenean lorem risus, blandit ac purus ut, venenatis efficitur nisl. Nulla malesuada purus id pellentesque lobortis. Integer dictum bibendum lacus eget lacinia. Pellentesque eu scelerisque sapien. Pellentesque quis felis metus. Nulla turpis neque, ullamcorper eu dui quis, maximus laoreet purus. Morbi ac ultrices quam. Aenean non vulputate orci. Duis non viverra ante. Suspendisse pretium lacus sit amet auctor gravida.</p><p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam tincidunt ut lorem at ultricies. Nunc tempus ipsum dui, eu rutrum nibh vestibulum ut. Integer tortor velit, vulputate in tellus sed, sodales vestibulum libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nullam id tincidunt tellus, at pellentesque elit. Morbi sagittis, nisi et ultricies tempus, leo ipsum fringilla orci, vitae eleifend mi ipsum quis justo. Nam condimentum posuere vulputate. Nullam et bibendum turpis. Fusce maximus, orci vel venenatis placerat, neque nulla cursus velit, in blandit augue libero tincidunt justo.</p><p>Suspendisse pulvinar odio ut felis condimentum, ut sollicitudin massa ultricies. Aliquam feugiat eget lorem id rhoncus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Ut pulvinar metus at tincidunt vestibulum. Quisque laoreet ullamcorper tincidunt. Nam in quam egestas tellus mattis ornare vitae quis leo. Nulla vitae consequat tellus. Ut semper porta nibh, eu fringilla lectus eleifend id. Ut vel tellus at sapien feugiat facilisis a ac turpis. Nam vel massa eu nisl porta vulputate consequat a lectus. Donec id volutpat ipsum, id mattis dolor.</p><p>Quisque pretium ligula ut lacus euismod euismod. Donec eget purus dolor. Nullam non ipsum et arcu facilisis lobortis vel eget ex. Aliquam feugiat nisi efficitur quam interdum mollis. Quisque sapien justo, lacinia sed egestas a, ultrices sit amet tellus. Morbi pretium velit nec lacus pulvinar, eget aliquam ipsum imperdiet. Vivamus faucibus laoreet est, non efficitur ligula pellentesque sit amet. Suspendisse feugiat at urna consectetur euismod. Pellentesque hendrerit finibus arcu, nec accumsan enim porta et. Sed lacinia fermentum erat, id pharetra dui placerat nec. Pellentesque aliquam velit felis, vel pretium arcu rhoncus in. Proin sit amet ipsum eget sapien viverra pulvinar. Mauris at ligula nec libero tristique ornare sed ut odio. Donec sollicitudin tincidunt imperdiet. Aliquam nec est in ligula imperdiet pellentesque et in ipsum.</p><p>Phasellus id mi odio. Suspendisse hendrerit vel turpis ut luctus. Maecenas condimentum tortor at blandit congue. Nullam ornare orci bibendum, ultrices elit condimentum, vehicula purus. Sed venenatis feugiat tincidunt. Suspendisse vel tempus eros. Sed nec tincidunt elit. Maecenas placerat quam metus, ac convallis diam faucibus non. Vivamus interdum nisl massa, eget laoreet nisi sagittis id. Curabitur ut neque accumsan est bibendum ornare. Sed mattis suscipit metus, et cursus enim malesuada id. Quisque aliquet volutpat sapien posuere commodo. Maecenas a condimentum lacus. Vivamus pellentesque volutpat lacus, aliquet pretium urna. Suspendisse luctus accumsan rutrum. Sed ut lectus leo.</p>', '1', '2', '3', '4', '5', 1, 2, 3, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur arcu enim, accumsan elementum hendrerit nec, porta sed velit. Mauris sagittis tortor in purus convallis egestas. Aenean lorem risus, blandit ac purus ut, venenatis efficitur nisl. Nulla malesuada purus id pellentesque lobortis. Integer dictum bibendum lacus eget lacinia. Pellentesque eu scelerisque sapien. Pellentesque quis felis metus. Nulla turpis neque, ullamcorper eu dui quis, maximus laoreet purus. Morbi ac ultrices quam. Aenean non vulputate orci. Duis non viverra ante. Suspendisse pretium lacus sit amet auctor gravida.</p><p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam tincidunt ut lorem at ultricies. Nunc tempus ipsum dui, eu rutrum nibh vestibulum ut. Integer tortor velit, vulputate in tellus sed, sodales vestibulum libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nullam id tincidunt tellus, at pellentesque elit. Morbi sagittis, nisi et ultricies tempus, leo ipsum fringilla orci, vitae eleifend mi ipsum quis justo. Nam condimentum posuere vulputate. Nullam et bibendum turpis. Fusce maximus, orci vel venenatis placerat, neque nulla cursus velit, in blandit augue libero tincidunt justo.</p><p>&nbsp;</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur arcu enim, accumsan elementum hendrerit nec, porta sed velit. Mauris sagittis tortor in purus convallis egestas. Aenean lorem risus, blandit ac purus ut, venenatis efficitur nisl. Nulla malesuada purus id pellentesque lobortis. Integer dictum bibendum lacus eget lacinia. Pellentesque eu scelerisque sapien. Pellentesque quis felis metus. Nulla turpis neque, ullamcorper eu dui quis, maximus laoreet purus. Morbi ac ultrices quam. Aenean non vulputate orci. Duis non viverra ante. Suspendisse pretium lacus sit amet auctor gravida.</p><p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam tincidunt ut lorem at ultricies. Nunc tempus ipsum dui, eu rutrum nibh vestibulum ut. Integer tortor velit, vulputate in tellus sed, sodales vestibulum libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nullam id tincidunt tellus, at pellentesque elit. Morbi sagittis, nisi et ultricies tempus, leo ipsum fringilla orci, vitae eleifend mi ipsum quis justo. Nam condimentum posuere vulputate. Nullam et bibendum turpis. Fusce maximus, orci vel venenatis placerat, neque nulla cursus velit, in blandit augue libero tincidunt justo.</p><p>&nbsp;</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur arcu enim, accumsan elementum hendrerit nec, porta sed velit. Mauris sagittis tortor in purus convallis egestas. Aenean lorem risus, blandit ac purus ut, venenatis efficitur nisl. Nulla malesuada purus id pellentesque lobortis. Integer dictum bibendum lacus eget lacinia. Pellentesque eu scelerisque sapien. Pellentesque quis felis metus. Nulla turpis neque, ullamcorper eu dui quis, maximus laoreet purus. Morbi ac ultrices quam. Aenean non vulputate orci. Duis non viverra ante. Suspendisse pretium lacus sit amet auctor gravida.</p><p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam tincidunt ut lorem at ultricies. Nunc tempus ipsum dui, eu rutrum nibh vestibulum ut. Integer tortor velit, vulputate in tellus sed, sodales vestibulum libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nullam id tincidunt tellus, at pellentesque elit. Morbi sagittis, nisi et ultricies tempus, leo ipsum fringilla orci, vitae eleifend mi ipsum quis justo. Nam condimentum posuere vulputate. Nullam et bibendum turpis. Fusce maximus, orci vel venenatis placerat, neque nulla cursus velit, in blandit augue libero tincidunt justo.</p><p>&nbsp;</p>'),
(6, 'Teste', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in erat sollicitudin, scelerisque augue non, blandit diam. Suspendisse condimentum sed massa eget euismod. Praesent vestibulum justo condimentum, scelerisque purus non, suscipit nulla. Aliquam eros nibh, pellentesque eget nisl nec, ultrices tincidunt felis. Integer sodales sapien a fermentum commodo. In hendrerit, lectus nec ultricies maximus, ex purus mollis nisi, mattis ornare velit lectus sed metus. Duis sed ante pulvinar, placerat arcu vitae, vehicula ipsum. Vestibulum imperdiet vehicula mauris. Cras rutrum neque non ornare commodo. Nullam vel ornare lacus. Vestibulum eu magna arcu. Maecenas posuere justo tellus, a commodo felis tristique sed. Proin mauris quam, blandit non orci vel, placerat sollicitudin velit. In condimentum nisi vel felis ultricies, faucibus malesuada ligula tincidunt. Nunc erat augue, suscipit nec nisi vitae, condimentum tempor sem.</p>', '1', '2', '3', '4', '5', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in erat sollicitudin, scelerisque augue non, blandit diam. Suspendisse condimentum sed massa eget euismod. Praesent vestibulum justo condimentum, scelerisque purus non, suscipit nulla. Aliquam eros nibh, pellentesque eget nisl nec, ultrices tincidunt felis. Integer sodales sapien a fermentum commodo. In hendrerit, lectus nec ultricies maximus, ex purus mollis nisi, mattis ornare velit lectus sed metus. Duis sed ante pulvinar, placerat arcu vitae, vehicula ipsum. Vestibulum imperdiet vehicula mauris. Cras rutrum neque non ornare commodo. Nullam vel ornare lacus. Vestibulum eu magna arcu. Maecenas posuere justo tellus, a commodo felis tristique sed. Proin mauris quam, blandit non orci vel, placerat sollicitudin velit. In condimentum nisi vel felis ultricies, faucibus malesuada ligula tincidunt. Nunc erat augue, suscipit nec nisi vitae, condimentum tempor sem.</p>', '1', '2', '3', '4', '5', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in erat sollicitudin, scelerisque augue non, blandit diam. Suspendisse condimentum sed massa eget euismod. Praesent vestibulum justo condimentum, scelerisque purus non, suscipit nulla. Aliquam eros nibh, pellentesque eget nisl nec, ultrices tincidunt felis. Integer sodales sapien a fermentum commodo. In hendrerit, lectus nec ultricies maximus, ex purus mollis nisi, mattis ornare velit lectus sed metus. Duis sed ante pulvinar, placerat arcu vitae, vehicula ipsum. Vestibulum imperdiet vehicula mauris. Cras rutrum neque non ornare commodo. Nullam vel ornare lacus. Vestibulum eu magna arcu. Maecenas posuere justo tellus, a commodo felis tristique sed. Proin mauris quam, blandit non orci vel, placerat sollicitudin velit. In condimentum nisi vel felis ultricies, faucibus malesuada ligula tincidunt. Nunc erat augue, suscipit nec nisi vitae, condimentum tempor sem.</p>', '1', '2', '3', '4', '5', 1, 2, 3, '<p>A resposta correta &eacute; a alternativa 1</p>', '<p>Resposta correta: 2</p>', '<p>resposta correta: 3</p>'),
(7, 'SeminÃ¡rio de andamento', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dictum eget leo non tincidunt. Nullam convallis lacus id ultrices condimentum. Cras nibh neque, ultricies non libero ac, tristique aliquam nunc. Etiam odio leo, condimentum nec convallis in, vulputate et neque. Donec ornare ipsum tincidunt nisl ultrices, eget hendrerit enim pretium. Vestibulum orci metus, pharetra nec dui et, convallis fermentum justo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras elementum pellentesque nisl. Phasellus et nisi pretium, tincidunt nisi eu, condimentum erat. Ut mollis enim ac nibh ullamcorper, tempor pellentesque dolor bibendum. Pellentesque maximus magna sed efficitur pulvinar. Vivamus a risus et metus volutpat tempor a eu tortor. Nam pretium tristique leo, a fringilla sem porta id.</p>', '1', '2', '3', '4', '5', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dictum eget leo non tincidunt. Nullam convallis lacus id ultrices condimentum. Cras nibh neque, ultricies non libero ac, tristique aliquam nunc. Etiam odio leo, condimentum nec convallis in, vulputate et neque. Donec ornare ipsum tincidunt nisl ultrices, eget hendrerit enim pretium. Vestibulum orci metus, pharetra nec dui et, convallis fermentum justo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras elementum pellentesque nisl. Phasellus et nisi pretium, tincidunt nisi eu, condimentum erat. Ut mollis enim ac nibh ullamcorper, tempor pellentesque dolor bibendum. Pellentesque maximus magna sed efficitur pulvinar. Vivamus a risus et metus volutpat tempor a eu tortor. Nam pretium tristique leo, a fringilla sem porta id.</p>', '1', '2', '3', '4', '5', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dictum eget leo non tincidunt. Nullam convallis lacus id ultrices condimentum. Cras nibh neque, ultricies non libero ac, tristique aliquam nunc. Etiam odio leo, condimentum nec convallis in, vulputate et neque. Donec ornare ipsum tincidunt nisl ultrices, eget hendrerit enim pretium. Vestibulum orci metus, pharetra nec dui et, convallis fermentum justo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras elementum pellentesque nisl. Phasellus et nisi pretium, tincidunt nisi eu, condimentum erat. Ut mollis enim ac nibh ullamcorper, tempor pellentesque dolor bibendum. Pellentesque maximus magna sed efficitur pulvinar. Vivamus a risus et metus volutpat tempor a eu tortor. Nam pretium tristique leo, a fringilla sem porta id.</p>', '1', '2', '3', '4', '5', 1, 2, 3, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dictum eget leo non tincidunt. Nullam convallis lacus id ultrices condimentum. Cras nibh neque, ultricies non libero ac, tristique aliquam nunc. Etiam odio leo, condimentum nec convallis in, vulputate et neque. Donec ornare ipsum tincidunt nisl ultrices, eget hendrerit enim pretium. Vestibulum orci metus, pharetra nec dui et, convallis fermentum justo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras elementum pellentesque nisl. Phasellus et nisi pretium, tincidunt nisi eu, condimentum erat. Ut mollis enim ac nibh ullamcorper, tempor pellentesque dolor bibendum. Pellentesque maximus magna sed efficitur pulvinar. Vivamus a risus et metus volutpat tempor a eu tortor. Nam pretium tristique leo, a fringilla sem porta id.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dictum eget leo non tincidunt. Nullam convallis lacus id ultrices condimentum. Cras nibh neque, ultricies non libero ac, tristique aliquam nunc. Etiam odio leo, condimentum nec convallis in, vulputate et neque. Donec ornare ipsum tincidunt nisl ultrices, eget hendrerit enim pretium. Vestibulum orci metus, pharetra nec dui et, convallis fermentum justo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras elementum pellentesque nisl. Phasellus et nisi pretium, tincidunt nisi eu, condimentum erat. Ut mollis enim ac nibh ullamcorper, tempor pellentesque dolor bibendum. Pellentesque maximus magna sed efficitur pulvinar. Vivamus a risus et metus volutpat tempor a eu tortor. Nam pretium tristique leo, a fringilla sem porta id.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dictum eget leo non tincidunt. Nullam convallis lacus id ultrices condimentum. Cras nibh neque, ultricies non libero ac, tristique aliquam nunc. Etiam odio leo, condimentum nec convallis in, vulputate et neque. Donec ornare ipsum tincidunt nisl ultrices, eget hendrerit enim pretium. Vestibulum orci metus, pharetra nec dui et, convallis fermentum justo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras elementum pellentesque nisl. Phasellus et nisi pretium, tincidunt nisi eu, condimentum erat. Ut mollis enim ac nibh ullamcorper, tempor pellentesque dolor bibendum. Pellentesque maximus magna sed efficitur pulvinar. Vivamus a risus et metus volutpat tempor a eu tortor. Nam pretium tristique leo, a fringilla sem porta id.</p>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE IF NOT EXISTS `cadastro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `email`, `nome`, `senha`, `tipo`, `foto`) VALUES
(4, 'professor@gmail.com', 'Mauricio', 'senhateste', 'professor', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `materia`
--

CREATE TABLE IF NOT EXISTS `materia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `conteudo` text COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `materia`
--

INSERT INTO `materia` (`id`, `titulo`, `conteudo`, `foto`) VALUES
(3, 'Preenchimento', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur arcu enim, accumsan elementum hendrerit nec, porta sed velit. Mauris sagittis tortor in purus convallis egestas. Aenean lorem risus, blandit ac purus ut, venenatis efficitur nisl. Nulla malesuada purus id pellentesque lobortis. Integer dictum bibendum lacus eget lacinia. Pellentesque eu scelerisque sapien. Pellentesque quis felis metus. Nulla turpis neque, ullamcorper eu dui quis, maximus laoreet purus. Morbi ac ultrices quam. Aenean non vulputate orci. Duis non viverra ante. Suspendisse pretium lacus sit amet auctor gravida.</p><p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam tincidunt ut lorem at ultricies. Nunc tempus ipsum dui, eu rutrum nibh vestibulum ut. Integer tortor velit, vulputate in tellus sed, sodales vestibulum libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nullam id tincidunt tellus, at pellentesque elit. Morbi sagittis, nisi et ultricies tempus, leo ipsum fringilla orci, vitae eleifend mi ipsum quis justo. Nam condimentum posuere vulputate. Nullam et bibendum turpis. Fusce maximus, orci vel venenatis placerat, neque nulla cursus velit, in blandit augue libero tincidunt justo.</p><p>Suspendisse pulvinar odio ut felis condimentum, ut sollicitudin massa ultricies. Aliquam feugiat eget lorem id rhoncus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Ut pulvinar metus at tincidunt vestibulum. Quisque laoreet ullamcorper tincidunt. Nam in quam egestas tellus mattis ornare vitae quis leo. Nulla vitae consequat tellus. Ut semper porta nibh, eu fringilla lectus eleifend id. Ut vel tellus at sapien feugiat facilisis a ac turpis. Nam vel massa eu nisl porta vulputate consequat a lectus. Donec id volutpat ipsum, id mattis dolor.</p><p>Quisque pretium ligula ut lacus euismod euismod. Donec eget purus dolor. Nullam non ipsum et arcu facilisis lobortis vel eget ex. Aliquam feugiat nisi efficitur quam interdum mollis. Quisque sapien justo, lacinia sed egestas a, ultrices sit amet tellus. Morbi pretium velit nec lacus pulvinar, eget aliquam ipsum imperdiet. Vivamus faucibus laoreet est, non efficitur ligula pellentesque sit amet. Suspendisse feugiat at urna consectetur euismod. Pellentesque hendrerit finibus arcu, nec accumsan enim porta et. Sed lacinia fermentum erat, id pharetra dui placerat nec. Pellentesque aliquam velit felis, vel pretium arcu rhoncus in. Proin sit amet ipsum eget sapien viverra pulvinar. Mauris at ligula nec libero tristique ornare sed ut odio. Donec sollicitudin tincidunt imperdiet. Aliquam nec est in ligula imperdiet pellentesque et in ipsum.</p><p>Phasellus id mi odio. Suspendisse hendrerit vel turpis ut luctus. Maecenas condimentum tortor at blandit congue. Nullam ornare orci bibendum, ultrices elit condimentum, vehicula purus. Sed venenatis feugiat tincidunt. Suspendisse vel tempus eros. Sed nec tincidunt elit. Maecenas placerat quam metus, ac convallis diam faucibus non. Vivamus interdum nisl massa, eget laoreet nisi sagittis id. Curabitur ut neque accumsan est bibendum ornare. Sed mattis suscipit metus, et cursus enim malesuada id. Quisque aliquet volutpat sapien posuere commodo. Maecenas a condimentum lacus. Vivamus pellentesque volutpat lacus, aliquet pretium urna. Suspendisse luctus accumsan rutrum. Sed ut lectus leo.</p>', ''),
(4, 'Preenchimento 2', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur arcu enim, accumsan elementum hendrerit nec, porta sed velit. Mauris sagittis tortor in purus convallis egestas. Aenean lorem risus, blandit ac purus ut, venenatis efficitur nisl. Nulla malesuada purus id pellentesque lobortis. Integer dictum bibendum lacus eget lacinia. Pellentesque eu scelerisque sapien. Pellentesque quis felis metus. Nulla turpis neque, ullamcorper eu dui quis, maximus laoreet purus. Morbi ac ultrices quam. Aenean non vulputate orci. Duis non viverra ante. Suspendisse pretium lacus sit amet auctor gravida.</p><p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam tincidunt ut lorem at ultricies. Nunc tempus ipsum dui, eu rutrum nibh vestibulum ut. Integer tortor velit, vulputate in tellus sed, sodales vestibulum libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nullam id tincidunt tellus, at pellentesque elit. Morbi sagittis, nisi et ultricies tempus, leo ipsum fringilla orci, vitae eleifend mi ipsum quis justo. Nam condimentum posuere vulputate. Nullam et bibendum turpis. Fusce maximus, orci vel venenatis placerat, neque nulla cursus velit, in blandit augue libero tincidunt justo.</p><p>Suspendisse pulvinar odio ut felis condimentum, ut sollicitudin massa ultricies. Aliquam feugiat eget lorem id rhoncus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Ut pulvinar metus at tincidunt vestibulum. Quisque laoreet ullamcorper tincidunt. Nam in quam egestas tellus mattis ornare vitae quis leo. Nulla vitae consequat tellus. Ut semper porta nibh, eu fringilla lectus eleifend id. Ut vel tellus at sapien feugiat facilisis a ac turpis. Nam vel massa eu nisl porta vulputate consequat a lectus. Donec id volutpat ipsum, id mattis dolor.</p><p>Quisque pretium ligula ut lacus euismod euismod. Donec eget purus dolor. Nullam non ipsum et arcu facilisis lobortis vel eget ex. Aliquam feugiat nisi efficitur quam interdum mollis. Quisque sapien justo, lacinia sed egestas a, ultrices sit amet tellus. Morbi pretium velit nec lacus pulvinar, eget aliquam ipsum imperdiet. Vivamus faucibus laoreet est, non efficitur ligula pellentesque sit amet. Suspendisse feugiat at urna consectetur euismod. Pellentesque hendrerit finibus arcu, nec accumsan enim porta et. Sed lacinia fermentum erat, id pharetra dui placerat nec. Pellentesque aliquam velit felis, vel pretium arcu rhoncus in. Proin sit amet ipsum eget sapien viverra pulvinar. Mauris at ligula nec libero tristique ornare sed ut odio. Donec sollicitudin tincidunt imperdiet. Aliquam nec est in ligula imperdiet pellentesque et in ipsum.</p><p>Phasellus id mi odio. Suspendisse hendrerit vel turpis ut luctus. Maecenas condimentum tortor at blandit congue. Nullam ornare orci bibendum, ultrices elit condimentum, vehicula purus. Sed venenatis feugiat tincidunt. Suspendisse vel tempus eros. Sed nec tincidunt elit. Maecenas placerat quam metus, ac convallis diam faucibus non. Vivamus interdum nisl massa, eget laoreet nisi sagittis id. Curabitur ut neque accumsan est bibendum ornare. Sed mattis suscipit metus, et cursus enim malesuada id. Quisque aliquet volutpat sapien posuere commodo. Maecenas a condimentum lacus. Vivamus pellentesque volutpat lacus, aliquet pretium urna. Suspendisse luctus accumsan rutrum. Sed ut lectus leo.</p>', ''),
(5, 'Preenchimento 3', '<p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in erat sollicitudin, scelerisque augue non, blandit diam. Suspendisse condimentum sed massa eget euismod. Praesent vestibulum justo condimentum, scelerisque purus non, suscipit nulla. Aliquam eros nibh, pellentesque eget nisl nec, ultrices tincidunt felis. Integer sodales sapien a fermentum commodo. In hendrerit, lectus nec ultricies maximus, ex purus mollis nisi, mattis ornare velit lectus sed metus. Duis sed ante pulvinar, placerat arcu vitae, vehicula ipsum. Vestibulum imperdiet vehicula mauris. Cras rutrum neque non ornare commodo. Nullam vel ornare lacus. Vestibulum eu magna arcu. Maecenas posuere justo tellus, a commodo felis tristique sed. Proin mauris quam, blandit non orci vel, placerat sollicitudin velit. In condimentum nisi vel felis ultricies, faucibus malesuada ligula tincidunt. Nunc erat augue, suscipit nec nisi vitae, condimentum tempor sem.</strong></p><p>Aenean vestibulum nisl et scelerisque ullamcorper. In tempus, ex eu bibendum elementum, felis ante tristique tortor, nec tristique justo magna sit amet sem. Morbi quis pellentesque dolor. Curabitur vehicula metus quis augue sagittis, quis scelerisque sem rutrum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas faucibus a orci at imperdiet. Pellentesque ultricies varius odio eu ultrices. Phasellus quis ligula erat. Nam consectetur massa a velit vehicula placerat laoreet viverra dui. Donec arcu justo, accumsan non tincidunt vitae, ullamcorper eu erat. Cras pharetra nisl et tellus tempor convallis. Nam cursus tortor et condimentum posuere. Fusce faucibus, eros ut aliquet pharetra, enim erat bibendum odio, sit amet tincidunt tortor ex nec nibh. Quisque cursus, magna non dapibus lobortis, neque nibh consectetur nunc, ac dictum lorem sapien vel mi. Nam eget mollis ante. Integer turpis diam, rutrum finibus massa sed, imperdiet vehicula felis.</p><p>Etiam accumsan nulla nulla, vitae tempus erat aliquet id. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt elementum viverra. Quisque aliquet sit amet nisi quis sodales. Cras et dignissim lacus. Donec dapibus varius pharetra. Nulla vel consectetur ante. Ut ultrices mauris eget metus euismod fringilla. Suspendisse laoreet lobortis purus, vel molestie neque bibendum a. Suspendisse malesuada elit quis vulputate mattis. Proin ornare nisl imperdiet ante maximus pharetra. Donec consequat mi vitae mi egestas sagittis. Curabitur vel dapibus massa. Vestibulum aliquet nisl vitae erat consequat ornare id at ex. Duis risus sem, ultricies a nibh nec, commodo auctor lectus.</p><p>Ut rhoncus ipsum vitae elit gravida hendrerit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed in sagittis ligula, sit amet convallis leo. Cras nec viverra quam. Quisque suscipit cursus magna, vel porta lorem scelerisque vitae. Nullam sed ex vel ex maximus viverra non ut erat. Donec eget egestas metus. Nam dignissim purus nec felis tincidunt vehicula. Vestibulum ac purus vitae dui maximus tempor in sed turpis. Morbi rhoncus ac orci varius sagittis. Maecenas facilisis imperdiet gravida. Integer magna enim, commodo sit amet molestie ac, mattis sed tellus. Nullam eget pretium nulla.</p><p>Curabitur a felis leo. Curabitur massa leo, mattis sed ipsum sit amet, ornare fringilla magna. Vivamus vulputate viverra ex. Cras arcu nulla, faucibus sed pharetra vitae, facilisis non augue. Cras ligula metus, finibus ultrices libero at, accumsan molestie libero. Vivamus tincidunt sit amet purus a viverra. Vestibulum at lobortis nibh, a ullamcorper massa. Duis fermentum rhoncus libero, sed molestie erat imperdiet sit amet. Maecenas dolor erat, faucibus nec efficitur sagittis, aliquam vel velit. Fusce nec volutpat lectus, quis sagittis neque.</p><table border="1" cellspacing="1" cellpadding="1" style="width:500px"><tbody><tr><td>1</td><td>1</td></tr><tr><td>2</td><td>2</td></tr><tr><td>3</td><td>3</td></tr></tbody></table><p>&nbsp;</p>', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
