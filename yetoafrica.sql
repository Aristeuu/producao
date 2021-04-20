-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Dez-2020 às 13:46
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `yetoafrica`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `academia`
--

CREATE TABLE `academia` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `academia`
--

INSERT INTO `academia` (`id`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, NULL),
(2, 4, NULL, NULL),
(3, 5, NULL, NULL),
(4, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 3, NULL, NULL),
(3, 11, NULL, NULL),
(4, 12, NULL, NULL),
(5, 27, NULL, NULL),
(6, 28, NULL, NULL),
(7, 29, NULL, NULL),
(8, 30, NULL, NULL),
(9, 31, NULL, NULL),
(37, 89, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `aulas`
--

CREATE TABLE `aulas` (
  `id` int(10) UNSIGNED NOT NULL,
  `aula_titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aula_descricao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `aula_duracao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aula_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aula_conteudo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aula_status` tinyint(1) NOT NULL,
  `modulo_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `aulas`
--

INSERT INTO `aulas` (`id`, `aula_titulo`, `aula_descricao`, `aula_duracao`, `aula_link`, `aula_conteudo`, `aula_status`, `modulo_id`, `created_at`, `updated_at`) VALUES
(1, 'introdução', '<p></p>', '3 min', 'https://www.youtube.com/embed/JdSTF0iYYhI', 'aula_conteudo/87ToPbT7TrZDfid6ciNA5U7tOnQw4xAmGhQ0FNqw.pdf', 0, 1, '2020-10-28 18:06:05', '2020-10-28 18:06:05'),
(2, 'Desenvolver', '<p></p>', '3 min', 'https://www.youtube.com/embed/_g-JCYrUj88', 'aula_conteudo/EKK3eOdD3PYI0fYP3zEoTpDnOVR6D2iH7i7PApPs.pdf', 0, 1, '2020-10-28 19:44:01', '2020-10-28 19:44:01'),
(3, 'Conclusão', '<p></p>', '3 min', 'https://www.youtube.com/embed/JdSTF0iYYhI', 'aula_conteudo/ldYDwbGDYJAMEYjCDrrL7XJSbxv1kpGBm5ilvRay.pdf', 0, 2, '2020-11-05 16:33:31', '2020-11-05 16:33:31'),
(4, 'Faça diferença', '<p></p>', '3 min', 'https://www.youtube.com/embed/JdSTF0iYYhI', 'aula_conteudo/WzjUYsRolpmu2MNWNn620adqCZ6sQfLCCCHQCUT4.jpeg', 0, 3, '2020-11-22 12:56:06', '2020-11-22 12:56:06'),
(5, 'Anacleto 1', '<p></p>', '2 min', 'https://www.youtube.com/embed/JdSTF0iYYhI', 'aula_conteudo/KAT1TEBbNWZl4wvgcCrFAw4QVZ8zBT8ILexrJFMF.jpeg', 0, 3, '2020-12-08 13:43:48', '2020-12-08 13:43:48');

-- --------------------------------------------------------

--
-- Estrutura da tabela `banner`
--

CREATE TABLE `banner` (
  `id` int(10) UNSIGNED NOT NULL,
  `banner_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_descricao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_data` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `banner`
--

INSERT INTO `banner` (`id`, `banner_img`, `banner_descricao`, `banner_titulo`, `banner_data`, `created_at`, `updated_at`) VALUES
(1, 'banner/wVHlTJYUAVsaQkftajJfogMqaFkaKbAuPoCVsvaW.PNG', '<p>Os melhores cursos online, encontras aqui na yetoafrica!</p>', 'Novidades 1', '2020-11-13', '2020-11-03 13:28:31', '2020-11-03 13:28:31'),
(2, 'banner/MvyATHW6LC9Ng91imnZjAhHB4pUyStmO5VQlpIhP.PNG', '<p>A yetoafrica &eacute; a sua academia de prefer&ecirc;ncia, vem e fa&ccedil;a a diferen&ccedil;a.</p>', 'Ensino A Distancia', '2020-12-03', '2020-11-03 13:30:22', '2020-11-03 13:30:22');

-- --------------------------------------------------------

--
-- Estrutura da tabela `blog`
--

CREATE TABLE `blog` (
  `id` int(10) UNSIGNED NOT NULL,
  `blog_titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_descricao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_data` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `categ_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `blog`
--

INSERT INTO `blog` (`id`, `blog_titulo`, `blog_foto`, `blog_descricao`, `blog_data`, `created_at`, `updated_at`, `categ_id`) VALUES
(2, 'Marketing', 'blog/WhvMI8Ww7geTyfrKHt3yELUUWFdUk6JQNTSIK39R.png', '<p></p>', '2020-11-13', '2020-11-06 14:02:05', '2020-11-06 14:02:05', 3),
(4, 'Marketing', 'blog/09HOYJFwdJVe5SZZ1GbsfEUXv2ia6yoGlhPVOMLc.png', '<p></p>', '2020-11-16', '2020-11-17 01:59:38', '2020-11-17 01:59:38', 2),
(5, 'Autarquias', 'blog/340raiwFJdvtwCcQLUdXB3QWQxXc9kHNG42W1xem.png', '<p></p></p>', '2020-11-17', '2020-11-17 02:08:33', '2020-11-17 02:08:33', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_icone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat_descricao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_data` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `cat_nome`, `cat_icone`, `cat_descricao`, `cat_data`, `created_at`, `updated_at`) VALUES
(1, 'Animais', NULL, '<p>Tudo sobre o mundo de animais</p>', '2020-10-28', '2020-10-28 17:25:12', '2020-10-28 17:25:12'),
(2, 'Tecnologia', NULL, '<p>Tudo relacionado ao mundo da tecnologia encontras nesta categorias</p>', '2020-10-28', '2020-10-28 17:26:15', '2020-10-28 17:26:15'),
(3, 'Comércio', NULL, '<p>Tudo sobre o com&eacute;rcio</p>', '2020-10-28', '2020-10-28 17:27:00', '2020-10-28 17:27:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cat_blog`
--

CREATE TABLE `cat_blog` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_descricao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_data` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `cat_blog`
--

INSERT INTO `cat_blog` (`id`, `cat_nome`, `cat_descricao`, `cat_data`, `created_at`, `updated_at`) VALUES
(2, 'Tecnologia', '<p>Agora &eacute; contigo!!!</p>', '2020-11-16', '2020-11-17 01:16:34', '2020-11-17 01:16:34'),
(3, 'Educação', '<p></p>', '2020-11-16', '2020-11-17 01:53:21', '2020-11-17 01:53:21'),
(4, 'Comércio', '<p></p>', '2020-11-17', '2020-11-17 02:08:00', '2020-11-17 02:08:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `publicacao_id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conteudo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`id`, `user_id`, `publicacao_id`, `titulo`, `conteudo`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 'Eu também', 'Eu também sou Angolano', '2020-11-13 12:17:34', '2020-11-13 12:17:34'),
(2, 3, 1, 'Anonimous', 'Agora sim podemos fazer acontecer', '2020-11-13 12:24:12', '2020-11-13 12:24:12'),
(3, 3, 1, 'Ainda é possivel', 'Era uma vez', '2020-11-13 12:27:24', '2020-11-13 12:27:24'),
(4, 1, 3, 'Anonimous 1', 'Esses só invadem sem pensar', '2020-11-13 13:41:27', '2020-11-13 13:41:27');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentario_blog`
--

CREATE TABLE `comentario_blog` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `blog_id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contacto`
--

CREATE TABLE `contacto` (
  `id` int(10) UNSIGNED NOT NULL,
  `telefone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_perfil` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contactos`
--

CREATE TABLE `contactos` (
  `id` int(10) UNSIGNED NOT NULL,
  `contacto_nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contacto_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contacto_assunto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contacto_descricao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `contactos`
--

INSERT INTO `contactos` (`id`, `contacto_nome`, `contacto_email`, `contacto_assunto`, `contacto_descricao`, `created_at`, `updated_at`) VALUES
(1, 'Narciso Adriano', 'narcisohadrianus@gmail.com', 'Quero receber', 'Tudo sobre voces', '2020-11-26 14:28:26', '2020-11-26 14:28:26'),
(3, 'Narciso Adriano', 'narcisohadrianus@gmail.com', 'Quero receber', 'sadcovbkgfvocxçldsxzocj mdsçolx', '2020-11-26 19:19:01', '2020-11-26 19:19:01'),
(4, 'Agostinho Xavier', 'agosxaves@gmail.com', 'Quero receber', 'sadxcjfdijnvfguhjew´pfierubv', '2020-11-26 19:19:44', '2020-11-26 19:19:44'),
(5, 'Agostinho Xavier', 'agosxaves@gmail.com', 'Quero receber', 'slcidnxbx b n cxznmiosajzxooas', '2020-12-03 12:22:48', '2020-12-03 12:22:48'),
(6, 'Narciso Adriano', 'agosxaves@gmail.com', 'Arroz', 'julia angola', '2020-12-03 12:25:58', '2020-12-03 12:25:58'),
(7, 'Narciso Adriano', 'narcisohadrianus@gmail.com', 'Estás bom macaco', 'Agora é para ti', '2020-12-03 12:28:43', '2020-12-03 12:28:43'),
(8, 'Narciso Adriano', 'narcisohadrianus@gmail.com', 'Estás bom macaco', 'tdftyuhjiklç~]\r\n:>,m', '2020-12-03 13:05:36', '2020-12-03 13:05:36'),
(9, 'Agostinho Xavier', 'agosxaves@gmail.com', 'Estás bom macaco', '\\sacficerjdfvicubdisoxckl', '2020-12-03 13:15:52', '2020-12-03 13:15:52'),
(10, 'Narciso Adriano', 'narcisohadrianus@gmail.com', 'Estás bom macaco', 'A vida segue o seu caminho!!!!', '2020-12-03 13:21:30', '2020-12-03 13:21:30'),
(11, 'Narciso Adriano', 'narcisohadrianus@gmail.com', 'Ainda sim podemos', 'Estás bom macaco', '2020-12-03 13:23:18', '2020-12-03 13:23:18'),
(12, 'Narciso Adriano', 'narcisohadrianus@gmail.com', 'Ainda sim podemos', 'What is Lorem Ipsum?\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2020-12-03 13:25:38', '2020-12-03 13:25:38'),
(13, 'Narciso Adriano', 'narcisohadrianus@gmail.com', 'Arroz', 'Ainda a esperança para todos nós!!!', '2020-12-03 20:07:45', '2020-12-03 20:07:45'),
(14, 'Narciso Adriano', 'narcisohadrianus@gmail.com', 'Ainda sim podemos', 'Eu creio no poder da tua palavra', '2020-12-03 20:09:00', '2020-12-03 20:09:00'),
(15, 'Narciso Adriano', 'narcisohadrianus@gmail.com', 'Estás bom macaco', 'szxshcbuisdjcskjkjmmsmas', '2020-12-08 12:32:49', '2020-12-08 12:32:49'),
(16, 'Narciso Adriano', 'narcisohadrianus@gmail.com', 'Estás bom macaco', 'Vocês são atoa', '2020-12-08 16:10:27', '2020-12-08 16:10:27'),
(17, 'Narciso Adriano', 'narcisohadrianus@gmail.com', 'Estás bom macaco', 'jbghfdszdxcgvhbjnkml', '2020-12-10 12:12:20', '2020-12-10 12:12:20'),
(18, 'Narciso Adriano', 'narcisohadrianus@gmail.com', 'Agora sim', 'A vida é mesmo assim um dia tudo fica para trás!!!!!!!!!', '2020-12-10 12:14:05', '2020-12-10 12:14:05'),
(19, 'Paulo Hélder', 'pphelder@gmail.com', 'Quero receber aprender', 'Tudo sobre a Yetoafrica!!!!!', '2020-12-11 00:18:03', '2020-12-11 00:18:03');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `id` int(10) UNSIGNED NOT NULL,
  `curso_nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `curso_preco` double(8,2) NOT NULL,
  `curso_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `curso_descricao` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `curso_data` date NOT NULL,
  `curso_status` tinyint(1) NOT NULL,
  `curso_duracao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `curso_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_formador` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_categoria` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id`, `curso_nome`, `curso_preco`, `curso_img`, `curso_descricao`, `curso_data`, `curso_status`, `curso_duracao`, `curso_link`, `id_formador`, `created_at`, `updated_at`, `id_categoria`) VALUES
(1, 'Informática', 20000.00, 'curso/8m3HqjP70UkxRGsBjB1PX4AA5XVwGQyLbzuQdQ1G.png', 'Você vai aprender passo a passo duas técnicas completas, desde a preparação de pele até a finalização da técnica, as técnicas são Smokey Glam e Delineado infinito, sem dúvida nenhuma são as técnicas mais pedidas em meus cursos presenciais, venha comigo, as aulas estão maravilhosas, não perca essa oportunidade, garanta sua vaga.', '2020-11-03', 1, '3 meses', 'https://www.youtube.com/embed/su4Q6Y6H_rY', 1, '2020-10-28 17:54:38', '2020-10-28 17:54:38', 2),
(2, 'Designer', 20000.00, 'curso/HvpCAI20TIEISIZIfjsyn6SoZSw6ssy8LIBbzAfI.jpeg', 'Você vai aprender passo a passo duas técnicas completas, desde a preparação de pele até a finalização da técnica, as técnicas são Smokey Glam e Delineado infinito, sem dúvida nenhuma são as técnicas mais pedidas em meus cursos presenciais, venha comigo, as aulas estão maravilhosas, não perca essa oportunidade, garanta sua vaga.', '2020-11-10', 1, '2 meses', 'https://www.youtube.com/embed/su4Q6Y6H_rY', 1, '2020-11-05 16:32:08', '2020-11-05 16:32:08', 3),
(3, 'Recursos humanos', 20000.00, 'curso/En3xwxcN11YEieDCzge982KETgoXc78pEBhoBKiO.png', 'Você vai aprender passo a passo duas técnicas completas, desde a preparação de pele até a finalização da técnica, as técnicas são Smokey Glam e Delineado infinito, sem dúvida nenhuma são as técnicas mais pedidas em meus cursos presenciais, venha comigo, as aulas estão maravilhosas, não perca essa oportunidade, garanta sua vaga.', '2020-11-06', 1, '2 meses', NULL, 3, '2020-11-06 14:08:07', '2020-11-06 14:08:07', 1),
(4, 'Marketing digital 1', 20000.00, 'curso/hckjZWEiniLMRny4m21AeLIdHOwRrH9tSWBgyUXq.jpeg', 'Você vai aprender passo a passo duas técnicas completas, desde a preparação de pele até a finalização da técnica, as técnicas são Smokey Glam e Delineado infinito, sem dúvida nenhuma são as técnicas mais pedidas em meus cursos presenciais, venha comigo, as aulas estão maravilhosas, não perca essa oportunidade, garanta sua vaga.', '2020-11-13', 1, '3 meses', NULL, 1, '2020-11-09 18:29:23', '2020-11-09 18:29:23', 1),
(5, 'PHP', 200000.00, 'curso/ZKyEOh0bgxO0AQXDQyKM21eTXi9joYeWaeE4cbRe.jpeg', 'Você vai aprender passo a passo duas técnicas completas, desde a preparação de pele até a finalização da técnica, as técnicas são Smokey Glam e Delineado infinito, sem dúvida nenhuma são as técnicas mais pedidas em meus cursos presenciais, venha comigo, as aulas estão maravilhosas, não perca essa oportunidade, garanta sua vaga.', '2020-11-13', 1, '2 meses', NULL, 1, '2020-11-09 19:33:27', '2020-11-09 19:33:27', 1),
(7, 'Ensino Infantil', 30000.00, 'curso/c5aKxAfWtK1XJ5zH0ssxge4QFfytPjGr7q8Z6mAj.png', '<p>dkljkdscvxnjhnfdcvn jdfoclxv, df&ccedil;lcx</p>', '2020-12-10', 0, '3 meses', NULL, 3, '2020-12-10 23:22:49', '2020-12-10 23:22:49', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `faqs`
--

CREATE TABLE `faqs` (
  `id` int(10) UNSIGNED NOT NULL,
  `pergunta` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `resposta` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `faqs`
--

INSERT INTO `faqs` (`id`, `pergunta`, `resposta`, `status`, `created_at`, `updated_at`) VALUES
(1, '<p>Como ser um inforprodutor?</p>', '<p>Para ser um inforprodutor &eacute; preciso fazer o seguinte, fazer o que est&aacute; programado em calteira.</p>', 0, '2020-11-10 13:28:35', '2020-11-10 13:28:35'),
(2, '<p>Como ser um formador na yetoafrica?</p>', '<p>Para ser um formador na yetoafrica &eacute; preciso ter objectividades no conte&uacute;do que se ensina.</p>', 0, '2020-11-10 13:29:48', '2020-11-10 13:29:48');

-- --------------------------------------------------------

--
-- Estrutura da tabela `formador`
--

CREATE TABLE `formador` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `formador`
--

INSERT INTO `formador` (`id`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(2, 26, NULL, NULL),
(3, 33, NULL, NULL),
(4, 26, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `form_acad`
--

CREATE TABLE `form_acad` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_formador` int(10) UNSIGNED NOT NULL,
  `id_academia` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_08_13_082223_create_perfil_table', 1),
(5, '2020_08_13_084022_create_formador_table', 1),
(6, '2020_08_13_084139_create_aluno_table', 1),
(7, '2020_08_17_150345_create_cursos_table', 1),
(8, '2020_08_18_161316_create_modulo_table', 1),
(9, '2020_08_18_201609_create_aulas_table', 1),
(10, '2020_08_18_224320_create_categorias_table', 1),
(11, '2020_08_19_090903_create_sobre_table', 1),
(12, '2020_08_19_101201_create_banner_table', 1),
(13, '2020_08_19_104217_create_blog_table', 1),
(14, '2020_08_21_120524_add_id_categoria_table_cursos', 1),
(15, '2020_08_25_074507_create_academia_table', 1),
(16, '2020_08_25_074823_create_form_acad_table', 1),
(17, '2020_08_31_110412_create_contacto_table', 1),
(18, '2020_09_02_092545_create_pedidos_table', 1),
(19, '2020_09_02_093220_create_pedidos_cursos_table', 1),
(20, '2020_10_12_083658_create_faqs_table', 1),
(21, '2020_10_12_141533_create_contactos_table', 1),
(22, '2020_10_14_092915_create_publicacao_table', 1),
(23, '2020_10_14_094431_create_comentarios_table', 1),
(24, '2020_10_15_121134_create_comentario_blog_table', 1),
(25, '2020_10_20_125455_create_termo_table', 1),
(26, '2020_11_16_162436_create_servicos_table', 2),
(27, '2020_11_16_224218_create_cat_blog_table', 3),
(28, '2020_11_30_142014_create_newslater_table', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `modulo`
--

CREATE TABLE `modulo` (
  `id` int(10) UNSIGNED NOT NULL,
  `modulo_titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modulo_descricao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `modulo_status` int(11) NOT NULL,
  `id_curso` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `modulo`
--

INSERT INTO `modulo` (`id`, `modulo_titulo`, `modulo_descricao`, `modulo_status`, `id_curso`, `created_at`, `updated_at`) VALUES
(1, 'Módulo 1', '<p>A inform&aacute;tica &eacute; a ciencia o tratamento da informa&ccedil;&atilde;o por meios autom&aacute;ticos.</p>', 0, 1, '2020-10-28 18:03:23', '2020-10-28 18:03:23'),
(2, 'Módulo 2', '<p>Aqqudedicdskj</p>', 0, 1, '2020-10-28 19:41:10', '2020-10-28 19:41:10'),
(3, 'Dessenvolvimentpo', 'Neste módulo o estudante será capaz de aprender tudo!!!', 0, 5, '2020-11-18 09:51:30', '2020-11-18 09:51:30'),
(4, 'modulo II', 'Melhor curspo', 0, 5, '2020-11-24 15:04:57', '2020-11-24 15:04:57');

-- --------------------------------------------------------

--
-- Estrutura da tabela `newslater`
--

CREATE TABLE `newslater` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `newslater`
--

INSERT INTO `newslater` (`id`, `email`, `created_at`, `updated_at`) VALUES
(3, 'beallinda45@gmail.com', '2020-11-30 17:01:53', '2020-11-30 17:01:53'),
(4, 'leonildo@gmail.com', '2020-11-30 17:05:13', '2020-11-30 17:05:13'),
(5, 'narcisohadrianus@gmail.com', '2020-11-30 17:06:15', '2020-11-30 17:06:15'),
(6, 'agosxaves@gmail.com', '2020-12-02 16:34:10', '2020-12-02 16:34:10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `status` enum('RE','PA','CA') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`id`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 'PA', '2020-10-28 18:11:24', '2020-10-28 18:25:02'),
(2, 3, 'PA', '2020-10-28 19:46:19', '2020-10-28 19:46:27'),
(3, 3, 'PA', '2020-11-06 15:17:24', '2020-11-08 10:24:12'),
(4, 3, 'PA', '2020-11-10 12:42:53', '2020-11-26 18:52:54'),
(5, 3, 'RE', '2020-12-02 07:15:07', '2020-12-02 07:15:07'),
(6, 1, 'RE', '2020-12-08 09:44:20', '2020-12-08 09:44:20'),
(7, 89, 'PA', '2020-12-08 09:48:24', '2020-12-08 09:48:30'),
(8, 89, 'PA', '2020-12-08 10:12:12', '2020-12-08 10:12:36');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos_cursos`
--

CREATE TABLE `pedidos_cursos` (
  `id` int(10) UNSIGNED NOT NULL,
  `pedido_id` int(10) UNSIGNED NOT NULL,
  `curso_id` int(10) UNSIGNED NOT NULL,
  `status` enum('RE','PA','CA') COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` double NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `pedidos_cursos`
--

INSERT INTO `pedidos_cursos` (`id`, `pedido_id`, `curso_id`, `status`, `valor`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'PA', 20000, '2020-10-28 18:24:32', '2020-10-28 18:25:02'),
(5, 4, 5, 'PA', 20000, '2020-11-10 12:42:53', '2020-11-26 18:52:54'),
(7, 4, 4, 'PA', 20000, '2020-11-19 15:59:58', '2020-11-26 18:52:54'),
(8, 4, 3, 'PA', 20000, '2020-11-26 10:05:20', '2020-11-26 18:52:54'),
(9, 4, 2, 'PA', 20000, '2020-11-26 18:52:37', '2020-11-26 18:52:54'),
(11, 6, 4, 'RE', 20000, '2020-12-08 09:44:20', '2020-12-08 09:44:20'),
(12, 7, 1, 'PA', 20000, '2020-12-08 09:48:24', '2020-12-08 09:48:29'),
(13, 8, 4, 'PA', 20000, '2020-12-08 10:12:12', '2020-12-08 10:12:36');

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE `perfil` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pais` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `bilhete` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profissao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bairro` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_nasc` date DEFAULT NULL,
  `provincia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `municipio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `publicacao`
--

CREATE TABLE `publicacao` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `conteudo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `publicacao`
--

INSERT INTO `publicacao` (`id`, `user_id`, `titulo`, `foto`, `conteudo`, `data`, `created_at`, `updated_at`) VALUES
(1, 1, 'Angola', '', 'Angola é rica em peixe', '2020-11-13', NULL, NULL),
(3, 3, 'Angola pode ser melhor', '', 'Tudo posso naquele que me fortalece', '2020-11-13', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `id` int(10) UNSIGNED NOT NULL,
  `serv_nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv_icone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serv_descricao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv_data` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`id`, `serv_nome`, `serv_icone`, `serv_descricao`, `serv_data`, `created_at`, `updated_at`) VALUES
(2, 'Professional Courses 3', 'fa fa-book', '<p></p>', '2020-11-16', '2020-11-16 21:07:49', '2020-11-16 21:07:49'),
(3, 'Professional Courses 2', 'fa fa-home', '<p>', '2020-11-18', '2020-11-16 21:19:00', '2020-11-16 21:19:00'),
(4, 'Professional Courses', 'fa fa-laptop', '<p></p>', '2020-11-16', '2020-11-16 21:19:52', '2020-11-16 21:19:52'),
(5, 'Professional Courses', 'fa fa-film', '<p></p>', '2020-11-16', '2020-11-16 21:21:00', '2020-11-16 21:21:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sobre`
--

CREATE TABLE `sobre` (
  `id` int(10) UNSIGNED NOT NULL,
  `sobre_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sobre_descricao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sobre_titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sobre_video` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sobre_data` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `sobre`
--

INSERT INTO `sobre` (`id`, `sobre_img`, `sobre_descricao`, `sobre_titulo`, `sobre_video`, `sobre_data`, `created_at`, `updated_at`) VALUES
(1, 'sobre/bHsQaeRseDjWAxXVV0UTd3mDjtlCew8w0QAXGI1E.jpeg', 'Por meio da internet e das tecnologias digitais surge um novo paradigma social denominada “sociedade da informação” (COUTINHO; LISBÔA, 2011).  O aprendizado fora das salas de aula é um ponto muito significativo para o desenvolvimento do aluno, que depois da aula se congrega com os outros para trocar matéria, tirar duvidas, etc.', 'União 1', 'https://www.youtube.com/embed/hF_VMWnsY00', '2020-11-24', '2020-10-28 17:30:14', '2020-10-28 17:30:14');

-- --------------------------------------------------------

--
-- Estrutura da tabela `termo`
--

CREATE TABLE `termo` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `tipo`, `foto`, `telefone`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Agostinho Xavier', 'agosxaves@gmail.com', 'formador', 'utilizadores/2QjntCilQstcrfZZuQzva5PDlbL80LqRVTLXttAX.jpeg', '', NULL, '$2y$10$u0s8UGlbklwSCGCVPlnT3uG3ZXG4ITng73oXm0/F8ipsS6c3.u.gO', 'Vk87CwlKzkUqoGrcexwQHlzUteoNcKN1AUJInwrr0k63698nHNi7yAouKZEc', NULL, '2020-12-10 15:55:29'),
(2, 'Leonildo Bandeira', 'leonildo@gmail.com', 'academia', NULL, '', NULL, '$2y$10$4u4YiN5e9nSrG/iSm4.pJOJg8EN4shkbXHxD1r3J204nO8d997isS', NULL, NULL, NULL),
(3, 'Silvio Santana', 'narcisohadrianus@gmail.com', 'aluno', 'utilizadores/aD0gDZB5irNPKqayE93c2Y8DMCNXr3M11YB0fqnW.png', '', NULL, '$2y$10$4P9KGVKzcbQZtM84c2wlnu/Pi3A7uRHllQCNQ6/xsCM2K5aCnwIru', NULL, NULL, NULL),
(4, 'ITEL', 'itel@mail.com', 'academia', NULL, '', NULL, '$2y$10$vqzMX2S3i6zzgqdnpr0tuuPqr/7goEQ3IWWCKEfpLDycuVux4exQG', NULL, NULL, NULL),
(5, 'Maptess', 'maptess@gmail.com', 'academia', NULL, '', NULL, '$2y$10$hBQORoCGXc9UKa34SXtVzu5e77B0X0/MOf9eXwZdHMw22Wrk3q4ci', NULL, NULL, NULL),
(6, 'Yetoafrica Online', 'yetoafrica@gmail.com', 'admin', 'utilizadores/4u9STXnJRFUNOeh5DBGQ9up5t6dX5Sjey3V4TVDR.ico', '', NULL, '$2y$10$0PvAPD2dpJvKUAweRvMHxe8yppIwWw11iU9K5x4mGPh7yXpIA8BPy', NULL, NULL, NULL),
(11, 'Tenente', 'tenente@gmail.com', 'aluno', NULL, '', NULL, '$2y$10$yY5r3XrQkjFXkVaPEyVp6eekF8CT08PhPzD8OBSrVuQV1RnxT9mEa', NULL, NULL, NULL),
(12, 'Ana Domingos Fortunato', 'ana@gmail.com', 'aluno', NULL, '', NULL, '$2y$10$RbxNFJ1iM9zr2lVj4JHz/uyOEeGrTqRAiV0NLNUx4seXAPU13T7G.', NULL, NULL, NULL),
(26, 'Isabel Kizomba', 'isabel@gmail.com', 'formador', NULL, '', NULL, '$2y$10$oLgHQ/z42xyk2UjYBM7aVO8cMVPBEnae.taD1VMiwU0p3pu58bUdW', NULL, NULL, NULL),
(27, 'António Kimbamba', 'antonio@gmail.com', 'aluno', NULL, '', NULL, '$2y$10$FND1kBdesVJ0aRl9R007.O6ASj9Cb5US6NbnM37xh9oKor5JtfH.G', NULL, NULL, NULL),
(28, 'Luis Angelo', 'luisangelo@gmail.com', 'aluno', NULL, '', NULL, '$2y$10$Jtr4xLgnV06t3GaVocnHOuDho.1vi0KTFToVeMcquEOr8prxK8cjm', NULL, NULL, NULL),
(29, 'Rosita Kimbamba', 'rosita@gmail.com', 'aluno', NULL, '', NULL, '$2y$10$5qN5umIkTemcfSUrbnOuHu1F4rpT.hyPV1.L87peDl1TjNFTtLuJC', NULL, NULL, NULL),
(30, 'Zara Simão', 'zara@gmail.com', 'aluno', NULL, '', NULL, '$2y$10$Y39cgDOMz2NbH7mIM4Kvg.zWlxHpCLy4KzTx6gQbYe3yV8J3K10R2', NULL, NULL, NULL),
(31, 'Fefinha Cajamba', 'fefinha@gmail.com', 'aluno', NULL, '', NULL, '$2y$10$vfAGSbaMAewRw69cLhiSV.4bBcbbzSEIfnlIhHQqlJb7.urEft.r.', NULL, NULL, NULL),
(33, 'Inamoto dos Santos', 'inamoto@gmail.com', 'formador', NULL, '', NULL, '$2y$10$rZAdTclHZl.ElfRmlrCvh.rlcL1wkmAhmseRF/Ku.5g238O5lMtu.', NULL, NULL, NULL),
(89, 'Biatriz Fernandes Miguel', 'beallinda45@gmail.com', 'aluno', NULL, '', NULL, '$2y$10$s2GBiik1fBF4qTjbTXPEwOrK9geyNXaRTWBK2Rjb9y3s4nC79J4om', NULL, NULL, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `academia`
--
ALTER TABLE `academia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `academia_id_user_foreign` (`id_user`);

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aluno_id_user_foreign` (`id_user`);

--
-- Índices para tabela `aulas`
--
ALTER TABLE `aulas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aulas_modulo_id_foreign` (`modulo_id`);

--
-- Índices para tabela `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cat_blog`
--
ALTER TABLE `cat_blog`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comentarios_user_id_foreign` (`user_id`),
  ADD KEY `comentarios_publicacao_id_foreign` (`publicacao_id`);

--
-- Índices para tabela `comentario_blog`
--
ALTER TABLE `comentario_blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comentario_blog_user_id_foreign` (`user_id`),
  ADD KEY `comentario_blog_blog_id_foreign` (`blog_id`);

--
-- Índices para tabela `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contacto_id_perfil_foreign` (`id_perfil`);

--
-- Índices para tabela `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cursos_id_formador_foreign` (`id_formador`),
  ADD KEY `cursos_id_categoria_foreign` (`id_categoria`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `formador`
--
ALTER TABLE `formador`
  ADD PRIMARY KEY (`id`),
  ADD KEY `formador_id_user_foreign` (`id_user`);

--
-- Índices para tabela `form_acad`
--
ALTER TABLE `form_acad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `form_acad_id_formador_foreign` (`id_formador`),
  ADD KEY `form_acad_id_academia_foreign` (`id_academia`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `modulo`
--
ALTER TABLE `modulo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `modulo_id_curso_foreign` (`id_curso`);

--
-- Índices para tabela `newslater`
--
ALTER TABLE `newslater`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `newslater_email_unique` (`email`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pedidos_user_id_foreign` (`user_id`);

--
-- Índices para tabela `pedidos_cursos`
--
ALTER TABLE `pedidos_cursos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pedidos_cursos_pedido_id_foreign` (`pedido_id`),
  ADD KEY `pedidos_cursos_curso_id_foreign` (`curso_id`);

--
-- Índices para tabela `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `perfil_id_user_foreign` (`id_user`);

--
-- Índices para tabela `publicacao`
--
ALTER TABLE `publicacao`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `publicacao_titulo_unique` (`titulo`),
  ADD KEY `publicacao_user_id_foreign` (`user_id`);

--
-- Índices para tabela `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `sobre`
--
ALTER TABLE `sobre`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `termo`
--
ALTER TABLE `termo`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_name_unique` (`name`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `academia`
--
ALTER TABLE `academia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de tabela `aulas`
--
ALTER TABLE `aulas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `cat_blog`
--
ALTER TABLE `cat_blog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `comentario_blog`
--
ALTER TABLE `comentario_blog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `formador`
--
ALTER TABLE `formador`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `form_acad`
--
ALTER TABLE `form_acad`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de tabela `modulo`
--
ALTER TABLE `modulo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `newslater`
--
ALTER TABLE `newslater`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `pedidos_cursos`
--
ALTER TABLE `pedidos_cursos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `publicacao`
--
ALTER TABLE `publicacao`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `sobre`
--
ALTER TABLE `sobre`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `termo`
--
ALTER TABLE `termo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `academia`
--
ALTER TABLE `academia`
  ADD CONSTRAINT `academia_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `aluno`
--
ALTER TABLE `aluno`
  ADD CONSTRAINT `aluno_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `aulas`
--
ALTER TABLE `aulas`
  ADD CONSTRAINT `aulas_modulo_id_foreign` FOREIGN KEY (`modulo_id`) REFERENCES `modulo` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_publicacao_id_foreign` FOREIGN KEY (`publicacao_id`) REFERENCES `publicacao` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comentarios_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `comentario_blog`
--
ALTER TABLE `comentario_blog`
  ADD CONSTRAINT `comentario_blog_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blog` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comentario_blog_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `contacto`
--
ALTER TABLE `contacto`
  ADD CONSTRAINT `contacto_id_perfil_foreign` FOREIGN KEY (`id_perfil`) REFERENCES `perfil` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `cursos`
--
ALTER TABLE `cursos`
  ADD CONSTRAINT `cursos_id_categoria_foreign` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cursos_id_formador_foreign` FOREIGN KEY (`id_formador`) REFERENCES `formador` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `formador`
--
ALTER TABLE `formador`
  ADD CONSTRAINT `formador_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `form_acad`
--
ALTER TABLE `form_acad`
  ADD CONSTRAINT `form_acad_id_academia_foreign` FOREIGN KEY (`id_academia`) REFERENCES `academia` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `form_acad_id_formador_foreign` FOREIGN KEY (`id_formador`) REFERENCES `formador` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `modulo`
--
ALTER TABLE `modulo`
  ADD CONSTRAINT `modulo_id_curso_foreign` FOREIGN KEY (`id_curso`) REFERENCES `cursos` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `pedidos_cursos`
--
ALTER TABLE `pedidos_cursos`
  ADD CONSTRAINT `pedidos_cursos_curso_id_foreign` FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`id`),
  ADD CONSTRAINT `pedidos_cursos_pedido_id_foreign` FOREIGN KEY (`pedido_id`) REFERENCES `pedidos` (`id`);

--
-- Limitadores para a tabela `perfil`
--
ALTER TABLE `perfil`
  ADD CONSTRAINT `perfil_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `publicacao`
--
ALTER TABLE `publicacao`
  ADD CONSTRAINT `publicacao_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
