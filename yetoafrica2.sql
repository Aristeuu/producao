-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03-Maio-2021 às 10:31
-- Versão do servidor: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yetoafrica2`
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
(53, 131, NULL, NULL),
(54, 133, NULL, NULL),
(55, 135, NULL, NULL),
(56, 138, NULL, NULL),
(57, 140, NULL, NULL);

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
(38, 'simplificaçao', 'aprenda a simplificar de forma simples', '7min', 'https://www.youtube.com/embed/GzRxUO41noY', NULL, 2, 28, '2021-04-05 21:25:22', '2021-04-05 21:25:22'),
(39, 'Operacoes elementares', 'Operacoes simples', '4min', 'https://www.youtube.com/embed/GzRxUO41noY', 'aula_conteudo/2CfzpIkamoI1RARBtagA2pp8KmLQ8kU1k2dSXJeo.pdf', 2, 29, '2021-04-05 21:28:01', '2021-04-05 21:28:01'),
(40, 'radiciacao', 'rd', '4m', 'https://www.youtube.com/embed/GzRxUO41noY', 'aula_conteudo/euz39jUhQGDvhJ38CDaqbF6Q42g4ZwUUqX1pQNAp.jpeg', 0, 29, '2021-04-05 21:32:43', '2021-04-05 21:32:43'),
(41, 'Potenciação', 'ff', '10 m', 'https://www.youtube.com/embed/u38uKuOctzs', NULL, 0, 29, '2021-04-15 08:18:24', '2021-04-15 08:18:24'),
(42, 'Aula 01-sql', 'Banco de Dados', '6min', 'https://www.youtube.com/embed/ovnliKtbt0M', NULL, 2, 32, '2021-04-21 06:08:57', '2021-04-21 06:08:57'),
(43, 'Aula 02', 'comandos', '10min', 'https://www.youtube.com/embed/', 'aula_conteudo/e2AsAGkUEZltylbMHGqIiN0RwP9onVTgxJcIvcMO.png', 0, 32, '2021-04-22 13:47:59', '2021-04-22 13:47:59'),
(44, 'Aula01', 'descrição', '4 m', 'https://www.youtube.com/watch?v=Zj2L1a-m2h8', NULL, 0, 33, '2021-04-26 08:51:37', '2021-04-26 08:51:37'),
(45, 'Aula 01', 'aula01', '6min', 'https://www.youtube.com/embed/kHZGupoiaBE&list=PLwXQLZ3FdTVEITn849NlfI9BGY-hk1wkq&index=3', NULL, 0, 34, '2021-04-26 13:58:42', '2021-04-26 13:58:42'),
(46, 'Inrodução ao php', 'desc', '4 min', 'https://www.youtube.com/embed/ovnliKtbt0M', 'aula_conteudo/Px5ESKt4ab2r2YWn1UnT95ClKRE3pwgkQCRH20CC.pdf', 2, 35, '2021-04-28 09:03:58', '2021-04-28 09:03:58');

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
(2, 'banner/background.png', '\r\nA diferenccedila Os melhores cursos\r\nA diferenccedila.\r\n\r\n\r\n\r\n\r\n', 'Ensino a distancia', '2020-12-03', '2020-11-03 13:30:22', '2020-11-03 13:30:22'),
(3, 'banner/background.png', 'Os melhores cursos online, encontras aqui na yetoáfrica.\r\n', 'Com os melhores cursos', '', NULL, NULL),
(4, 'banner/background.png', 'Na Yetoáfrica você Ensina, Aprende e Soluciona Ensina.', 'Novidades da yetoafrica', '', NULL, NULL);

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
(2, 'Nossa Plataforma', 'blog/yeto.jpeg', '<p>A maior plataforma de venda e gestão de infoprodutos em Angola </p>\r\n\r\n', '2020-11-13', '2020-11-06 14:02:05', '2020-11-06 14:02:05', 3),
(3, 'Novidades da Yetoáfrica', 'blog/post3.png', 'Novo curso de liderança, esta disponível em breve ', '', NULL, NULL, 4),
(4, 'NOVIDADES', 'blog/angola_com.jpg', '<p>Nossa Empresa é uma empresa jovem, com foco em vendas e gestão de infoprodutos, trazendo uma tecnologia inovadora.</p>', '2020-11-16', '2020-11-17 01:59:38', '2020-11-17 01:59:38', 2);

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
(1, 'Animais', NULL, '<p>Tudo sobre o mundo de animais&nbsp; e Plantas</p>', '2021-03-11', '2020-10-28 17:25:12', '2020-10-28 17:25:12'),
(2, 'Tecnologia', NULL, '<p>Tudo relacionado ao mundo da tecnologia encontras nesta categorias</p>', '2021-02-10', '2020-10-28 17:26:15', '2020-10-28 17:26:15'),
(3, 'Comércio ', NULL, '<p>Tudo sobre o com&eacute;rcio</p>', '2021-02-09', '2020-10-28 17:27:00', '2020-10-28 17:27:00'),
(4, 'Apps e Software', NULL, '<p>Tudo sobre Apps e Software</p>', '2021-03-11', '2021-03-11 13:11:14', '2021-03-11 13:11:14'),
(5, 'Casa e Construção', NULL, '<p>Tudo sobre casa e constru&ccedil;&atilde;o</p>', '2021-03-11', '2021-03-11 13:12:51', '2021-03-11 13:12:51'),
(6, 'Culinária e Gastronomia', NULL, '<p>Tudo sobre o mundo da culinaria e gastronomia&nbsp;</p>', '2021-03-11', '2021-03-11 13:14:49', '2021-03-11 13:14:49'),
(7, 'Desenvolvimento Pessoal', NULL, '<p>Tudo sobre desenvolvimento pessoal</p>', '2021-03-11', '2021-03-11 13:15:40', '2021-03-11 13:15:40'),
(8, 'Design', NULL, '<p>Tudo sobre o vasto mundo de design</p>', '2021-03-11', '2021-03-11 13:16:22', '2021-03-11 13:16:22'),
(9, 'Direito', NULL, '<p>Tudo sobre Direito</p>', '2021-03-11', '2021-03-11 13:19:05', '2021-03-11 13:19:05'),
(10, 'Escola e Meio Ambiente', NULL, '<p>Tudo sobre escolas e meio ambiente</p>', '2021-03-11', '2021-03-11 13:19:53', '2021-03-11 13:19:53'),
(11, 'Educacional', NULL, '<p>Sobre sobre educa&ccedil;&atilde;o</p>', '2021-03-11', '2021-03-11 13:20:33', '2021-03-11 13:20:33'),
(12, 'Espiritualidade', NULL, '<p>Tudo sobre o&nbsp; mundo da espiritualidade</p>', '2021-03-11', '2021-03-11 13:21:29', '2021-03-11 13:21:29'),
(13, 'Finanças e Investimentos', NULL, '<p>Tudo sobre finan&ccedil;as e investimentos</p>', '2021-03-11', '2021-03-11 13:22:22', '2021-03-11 13:22:22'),
(14, 'Geral', NULL, '<p>Tudo sobre servi&ccedil;os gerais&nbsp;</p>', '2021-03-11', '2021-03-11 13:24:49', '2021-03-11 13:24:49'),
(15, 'Literatura', NULL, '<p>Tudo sobre literatura&nbsp;</p>', '2021-03-11', '2021-03-11 13:25:59', '2021-03-11 13:25:59'),
(16, 'Idiomas', NULL, '<p>Tudo sobre linguas</p>', '2021-03-11', '2021-03-11 13:26:59', '2021-03-11 13:26:59'),
(17, 'Internet', NULL, '<p>Tudo sobre o atraente mundo da internet</p>', '2021-03-11', '2021-03-11 13:27:55', '2021-03-11 13:27:55'),
(18, 'Moda e Beleza', NULL, '<p>Tudo sobre moda e beleza</p>', '2021-03-11', '2021-03-11 13:28:23', '2021-03-11 13:28:23'),
(19, 'Música e Arte', NULL, '<p>Tudo sobre m&uacute;sica e arte</p>', '2021-03-11', '2021-03-11 13:29:07', '2021-03-11 13:29:07'),
(20, 'Negócios e Carreira', NULL, '<p>Tudo sobre neg&oacute;cio e carreira</p>', '2021-03-11', '2021-03-11 13:29:43', '2021-03-11 13:29:43'),
(21, 'Saúde e Esporte', NULL, '<p>Tudo sobre sa&uacute;de e esporte</p>', '2021-03-11', '2021-03-11 13:31:34', '2021-03-11 13:31:34');

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
(3, 'Educação', '<p>lcjkvdc okdmlscx,</p>', '2020-11-16', '2020-11-17 01:53:21', '2020-11-17 01:53:21'),
(4, 'Comércio', '<p>sadloflgbkmn ,.b;FDS</p>', '2020-11-17', '2020-11-17 02:08:00', '2020-11-17 02:08:00');

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `coproducao`
--

CREATE TABLE `coproducao` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_curso` int(10) UNSIGNED NOT NULL,
  `id_formador` int(10) UNSIGNED NOT NULL,
  `id_cop` int(10) UNSIGNED DEFAULT NULL,
  `statusYeto` enum('true','false') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percenF` double(8,2) UNSIGNED NOT NULL,
  `percenC` double(8,2) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `coproducao`
--

INSERT INTO `coproducao` (`id`, `id_curso`, `id_formador`, `id_cop`, `statusYeto`, `percenF`, `percenC`, `created_at`, `updated_at`) VALUES
(1, 37, 32, NULL, 'true', 40.00, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `id` int(10) UNSIGNED NOT NULL,
  `curso_nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `curso_preco` double(8,2) NOT NULL,
  `curso_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `curso_descricao` text COLLATE utf8mb4_unicode_ci,
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
(35, 'Atendimento ao Cliente', 10.00, 'curso/DoPnE8pFGHhULbAhEAvhA9z2UjjNuWDTzJPaudXY.jpeg', NULL, '2021-04-01', 3, '7', 'https://youtu.be/s2lwcJqUPDM', 30, '2021-04-01 17:49:34', '2021-04-01 17:49:34', 14),
(37, 'sql', 780.00, 'curso/tbNQyOXa4cPJkdj9S1ULMF3YDpTeddWyHS2VhQFX.jpeg', 'tudo de sql', '2021-04-02', 3, '1 mes', 'https://www.youtube.com/embed/nOCiCKyp_lU', 32, '2021-04-03 04:11:43', '2021-04-03 04:11:43', 2),
(38, 'Estrutura de Dados', 9000.00, 'curso/h8jWR0FDXafAzkKJLc9m3IHqHAtbDhhdQAyw6n7B.jpeg', '<p>Estrutura de dados everything</p>', '2021-04-13', 0, '10 dias', 'https://www.youtube.com/embed/8KsuWERkk7Y', 32, '2021-04-04 04:55:35', '2021-04-04 04:55:35', 2),
(39, 'Atendimento ao cliente', 10.00, 'curso/8cooo2mW3osEHSVCYVHxybIgoXk189YGU8tDpqK0.jpeg', NULL, '2021-04-05', 0, '7 dias', 'https://m.youtube.com/watch?v=uaUkB0o3ANs&list=PLIuUueTf3Knm6p-c_xYGfQrnd6Ysk1NAz&index=1', 30, '2021-04-05 15:08:11', '2021-04-05 15:08:11', 14),
(40, 'informatica', 20000.00, 'curso/ZmNicbI4jgIf0SXpLMBbt0AMnqnpX4oUvFO1YCA9.png', '<p>Estrutura de dados</p>', '2021-04-12', 0, '30 dias', '098765678', 32, '2021-04-05 16:25:41', '2021-04-05 16:25:41', 1),
(44, 'informatica', 20000.00, 'curso/TZMhOvUGtQi9YQ2ykBB8YueCkS0wjswJrERe5eOu.png', NULL, '2021-04-12', 1, '30 dias', 'fff', 32, '2021-04-05 19:20:31', '2021-04-05 19:20:31', 4),
(45, 'Matematica', 15000.00, 'curso/GRoPgVzBtaWdpxqLkk88GtchhQIRsvhROlCuDm0J.jpeg', NULL, '2021-04-05', 3, '7 dias', NULL, 32, '2021-04-05 21:10:05', '2021-04-05 21:10:05', 11),
(46, 'Informática', 20000.00, 'curso/LMdG4RXWrOEKAYqUQ0pdGVi1FgvxsVfFlB2Kx1x7.png', NULL, '2021-04-05', 1, '2 meses', 'https://youtu.be/cwyNk6IZJUA', 34, '2021-04-05 21:12:04', '2021-04-05 21:12:04', 2),
(47, 'Economia', 15000.00, 'curso/fdjQKkpHVJy7L3TqTLxvplvJN5beK3MIcla8rKVB.jpeg', '<p>Tudo sobre economia em 2021</p>', '2021-04-13', 0, '15 Horas', 'https://www.youtube.com/embed/7BJ1YQWwogE', 32, '2021-04-08 10:07:32', '2021-04-08 10:07:32', 3),
(48, 'Marketing Digital', 9887.00, 'curso/fdSbrSLN349kJ7qJgGPOXVytdQFlByeaPBp8bEgm.jpeg', NULL, '2021-04-21', 0, '10 dias', 'https://www.youtube.com/embed/8KsuWERkk7Y', 32, '2021-04-21 11:28:02', '2021-04-21 11:28:02', 8),
(49, 'JAVA', 25000.00, 'curso/PGNVGzfVmJ9qtuHa5JtAENzco2lQVxXsd8LLNPiY.jpeg', 'Curso de java desde o básico ao avançado', '2021-04-26', 0, '36 Horas', NULL, 32, '2021-04-26 08:17:56', '2021-04-26 08:17:56', 2),
(50, 'JAVA', 30000.00, 'curso/fu9PIxofMOe5S1rmGw6MgW538PJvWlyYj9WKqIL6.jpeg', 'Curso de Java', '2021-04-26', 3, '7 dias', NULL, 35, '2021-04-26 13:56:57', '2021-04-26 13:56:57', 2);

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
  `conta_bancaria` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iban` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titular` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `formador`
--

INSERT INTO `formador` (`id`, `id_user`, `conta_bancaria`, `iban`, `titular`, `created_at`, `updated_at`) VALUES
(30, 129, NULL, NULL, NULL, NULL, NULL),
(31, 130, NULL, NULL, NULL, NULL, NULL),
(32, 132, '123456789', '11154879555956697999', 'Etelvina Lopes Pereira', NULL, NULL),
(33, 136, NULL, NULL, NULL, NULL, NULL),
(34, 137, NULL, NULL, NULL, NULL, NULL),
(35, 139, NULL, NULL, NULL, NULL, NULL);

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
(28, '2020_11_30_142014_create_newslater_table', 4),
(29, '2021_03_09_150613_create_pagamentos_table', 5),
(30, '2021_03_25_102059_create_operacoes_table', 6),
(31, '2021_04_28_132212_create_coproducao_table', 7);

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
(28, 'introducao', 'introducao', 0, 45, '2021-04-05 21:21:40', '2021-04-05 21:21:40'),
(29, 'Noçoes Basicas', 'simples operacoes', 0, 45, '2021-04-05 21:22:30', '2021-04-05 21:22:30'),
(30, 'Modulo 01', 'Modulo Introdutorio', 0, 46, '2021-04-05 21:23:04', '2021-04-05 21:23:04'),
(31, 'Modulo 02', 'Conceitos de Designer', 0, 46, '2021-04-05 21:23:45', '2021-04-05 21:23:45'),
(32, 'Introdução', 'Breves considerações', 0, 37, '2021-04-21 06:07:42', '2021-04-21 06:07:42'),
(33, 'Integração', 'descricao', 0, 49, '2021-04-26 08:50:36', '2021-04-26 08:50:36'),
(34, 'Modulo 01', 'primiero modulo', 0, 50, '2021-04-26 13:58:01', '2021-04-26 13:58:01'),
(35, 'Introdução', 'Noções basicas', 0, 38, '2021-04-28 09:03:11', '2021-04-28 09:03:11');

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
(6, 'agosxaves@gmail.com', '2020-12-02 16:34:10', '2020-12-02 16:34:10'),
(8, 'juneidycruz.24@gmail.com', '2020-12-29 16:12:24', '2020-12-29 16:12:24'),
(9, 'juneidy.24@gmail.com', '2021-02-10 03:24:12', '2021-02-10 03:24:12'),
(12, 'aristeuwalker@gmail.com', '2021-02-18 17:55:50', '2021-02-18 17:55:50'),
(14, 'yetoafrica.suporte@gmail.com', '2021-02-18 17:58:14', '2021-02-18 17:58:14');

-- --------------------------------------------------------

--
-- Estrutura da tabela `operacoes`
--

CREATE TABLE `operacoes` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_formador` int(10) UNSIGNED NOT NULL,
  `valor_retirado` double(8,2) UNSIGNED NOT NULL,
  `valor_entrada` double(8,2) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `operacoes`
--

INSERT INTO `operacoes` (`id`, `id_formador`, `valor_retirado`, `valor_entrada`, `created_at`, `updated_at`) VALUES
(1, 32, 3000.00, NULL, '2021-04-27 11:52:22', NULL),
(2, 32, 5000.00, NULL, '2021-04-27 07:30:35', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamentos`
--

CREATE TABLE `pagamentos` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_aluno` int(10) UNSIGNED NOT NULL,
  `id_pedido` int(10) UNSIGNED NOT NULL,
  `comprovante` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `pagamentos`
--

INSERT INTO `pagamentos` (`id`, `id_aluno`, `id_pedido`, `comprovante`, `created_at`, `updated_at`) VALUES
(1, 56, 89, 'pagamentos/SmSwSJbgpwVziMf7eaq06axcOjNciqmF8QgQuiT3.jpeg', '2021-04-15 12:29:16', NULL),
(2, 56, 90, 'pagamentos/RksoS0KncAooVVViKcUS5YtOPuF0MiMW0dz3jHdC.jpeg', '2021-04-19 08:30:26', NULL),
(3, 56, 89, 'pagamentos/UdNg75TILOCbkJAypjqGrlJBHFxYGCVEeCf6CWTd.png', '2021-04-27 11:34:18', NULL),
(4, 56, 91, 'pagamentos/xBPaHl7ZPC6Bl6zkE0J345APOo35dt3xDFzzFw91.jpeg', '2021-04-27 19:24:21', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('juneidy.24@gmail.com', '$2y$10$wQKWBH3DzzlVJeyw8WNfVuFYNhVGlCbwfuxIrBJ.sFLUsqAuUgXpq', '2021-01-07 13:54:11'),
('yetoafrica@gmail.com', '$2y$10$R6MBpler1JUvZEDCM0/wLeH0vFYeAMYO5vuRVnVW4VwcYXwYNXRta', '2021-02-25 13:46:30'),
('juneidycruz.24@gmail.com', '$2y$10$C2QkUjsoBl9jMbfAW7hv0eVnjj04JqbE/TBHJeec0p9Z/ez6YBIVa', '2021-03-31 15:04:34');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `status` enum('RE','PA','CA','PE') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`id`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(51, 131, 'RE', '2021-04-01 18:02:25', '2021-04-01 18:02:25'),
(53, 132, 'RE', '2021-04-05 14:13:15', '2021-04-05 14:13:15'),
(54, 135, 'PE', '2021-04-05 15:18:30', '2021-04-05 16:04:49'),
(55, 135, 'PE', '2021-04-05 16:09:28', '2021-04-05 21:55:22'),
(57, 137, 'PE', '2021-04-05 20:19:37', '2021-04-05 20:20:13'),
(58, 138, 'PA', '2021-04-14 12:12:48', '2021-04-27 11:34:18'),
(59, 138, 'PE', '2021-04-19 08:28:59', '2021-04-19 08:30:26'),
(60, 138, 'PA', '2021-04-26 12:02:35', '2021-04-27 19:24:21'),
(61, 140, 'PE', '2021-04-26 14:05:31', '2021-04-26 14:06:41');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos_cursos`
--

CREATE TABLE `pedidos_cursos` (
  `id` int(10) UNSIGNED NOT NULL,
  `pedido_id` int(10) UNSIGNED NOT NULL,
  `curso_id` int(10) UNSIGNED NOT NULL,
  `status` enum('RE','PA','CA','PE') COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` double NOT NULL DEFAULT '0',
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `pedidos_cursos`
--

INSERT INTO `pedidos_cursos` (`id`, `pedido_id`, `curso_id`, `status`, `valor`, `created_at`, `updated_at`) VALUES
(74, 51, 35, 'RE', 10, '2021-04-01', '2021-04-01 18:02:25'),
(76, 53, 35, 'RE', 10, '2021-04-05', '2021-04-05 14:13:15'),
(78, 53, 37, 'RE', 780, '2021-04-05', '2021-04-05 14:45:22'),
(82, 54, 35, 'PE', 10, '2021-04-05', '2021-04-05 16:04:48'),
(87, 57, 37, 'PE', 780, '2021-04-05', '2021-04-05 20:20:13'),
(88, 55, 45, 'PE', 15000, '2021-04-05', '2021-04-05 21:55:22'),
(89, 58, 45, 'PA', 15000, '2021-04-14', '2021-04-27 11:34:18'),
(90, 59, 35, 'PE', 10, '2021-04-19', '2021-04-19 08:30:26'),
(91, 60, 37, 'PA', 780, '2021-04-26', '2021-04-27 19:24:21'),
(92, 61, 50, 'PE', 30000, '2021-04-26', '2021-04-26 14:06:41');

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
(2, 'CERTIFICAÇÃO', 'fa fa-book', '<p>Os alunos têm o direito de obtenção de certificado reconhecido a nível nacional, pelo INEFOP no termino do curso.</p>', '2020-11-16', '2020-11-16 21:07:49', '2020-11-16 21:07:49'),
(3, 'TURMAS', 'fa fa-home', '<p>Criamos uma ambiente virtual de aprendizagem, aonde o formador tem espaço para  poder responder atenciosamente às dúvidas de cada aluno do seu curso, e os mesmo poderão interagir entre si na área de comunidade.</p>', '2020-11-18', '2020-11-16 21:19:00', '2020-11-16 21:19:00'),
(4, 'SEGURANÇA', 'fa fa-laptop', '<p>Sigilo profissional no que toca as informações quer do aluno quer do formador. E salvaguardamos os direitos autorais do mesmo, no sentido de não ocorrer plágios em suas obras literárias, nem copypast em seus e-books.</p>', '2020-11-16', '2020-11-16 21:19:52', '2020-11-16 21:19:52'),
(5, 'FORMADORES', 'fa fa-users', '<p>Os formadores são profissionais qualificados e revestido numa autoridade daquilo que lecionam, pois alguns albergam certificações, outros possuem uma bagagem de experiência na área que formam.</p>', '2020-11-16', '2020-11-16 21:21:00', '2020-11-16 21:21:00');

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
(1, 'about-us.jpg', 'Por meio da internet e das tecnologias digitais surge um novo paradigma social denominada “sociedade da informação” .  O aprendizado fora das salas de aula é um ponto muito significativo para o desenvolvimento do aluno, que depois da aula se congrega com os outros para trocar matéria, tirar duvidas, etc. ttttg,bl,,gblg,blgvb,glv', 'União 1', 'https://www.youtube.com/embed/cwyNk6IZJUA', '2020-11-24', '2020-10-28 17:30:14', '2020-10-28 17:30:14');

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
  `telefone` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_status` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `tipo`, `foto`, `telefone`, `users_status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(129, 'Leonildo', 'leonildop62@gmail.com', 'formador', NULL, '938535596', 1, NULL, '$2y$10$7p/FPI.2PqTSOqXbYzV1XucQmgJZ/VlIICOe.HWgjLZpQl1xPZCa6', NULL, '2021-04-01 17:46:37', NULL),
(130, 'Yetoáfrica', 'yetoafrica@gmail.com', 'admin', NULL, '938535602', 1, NULL, '$2y$10$gjAeCIz602gIG90LIDo3iOHCXeIgCMzjWR0xvo4a6BD0rvwnQMr8e', NULL, '2021-04-01 17:53:17', NULL),
(131, 'otavia', 'esperancamiguel02@gmail.com', 'aluno', NULL, '992765435', 1, NULL, '$2y$10$9y2X34gNthcFzJNDgeB5w.YJ8w.NHOQuOspH59i.dK7qVcPjMiXW.', NULL, '2021-04-01 17:59:55', NULL),
(132, 'Etelvina Lopes', 'juneidy.24@gmail.com', 'formador', 'utilizadores/PZIyblXedyaL8uY4psamjHWCvCURfApBII515P04.jpeg', '936948141', 1, NULL, '$2y$10$.3sSxBWE3JcAJCI4G4oJhOHsF78nslK.ZCb.soJyBLHtpcLq6nJ6K', NULL, '2021-04-02 01:11:54', NULL),
(133, 'Juneidy', 'juneidycruz@gmail.com', 'aluno', NULL, '931000802', 0, NULL, '$2y$10$pi5SavdpRizvi.xNU/FYN.Pr6hDEg27cNAIYbmvCgBm93B12ppfPi', NULL, '2021-04-02 01:16:13', NULL),
(135, 'carolinalopes Beteka', 'carollopes.38@hotmail.com', 'aluno', NULL, '931000802', 1, NULL, '$2y$10$nryUntk9pDQYs7Jp3aC6K.luwefFlEUWB7tq4AHJ6N/gWcfLfkVkq', NULL, '2021-04-02 14:23:42', NULL),
(136, 'Daniel Kitanaxi Filipe', 'danielkitanaxifilipe12@gmail.com', 'formador', NULL, '924660115', 1, NULL, '$2y$10$oNMMvUW/29rVJ.L1TJh9euaGW8iL74V6Xu5doIL2IN4aeGItXkSW6', NULL, '2021-04-02 16:34:18', NULL),
(137, 'Paulo Fernandes', 'pphelder@gmail.com', 'formador', NULL, '+244923674122', 1, NULL, '$2y$10$Np6pjxw7jB38oqKPokP5J.2sWRpZqAdx0HJ1jdfQ9WGQS3SkWfDpS', NULL, '2021-04-05 19:32:12', NULL),
(138, 'Otsobi', 'ariisteuu@gmail.com', 'aluno', 'utilizadores/mIQPgUquy0mOxETrQ7CqVC2IwsoZra0CmAgBxjTp.png', '931695006', 1, NULL, '$2y$10$tk5vuDzobe42RR9oUVwUC.jiV0ra.qi2V9F5YgV5CvcXEyNBRHDHu', NULL, '2021-04-14 12:07:35', NULL),
(139, 'Leandro', 'heldermarcolino19@gmail.com', 'formador', NULL, '995368142', 1, NULL, '$2y$10$uoRdlKbIV52fHd50rQn5Bujdtn1kj/gKOzjC5gYLEAMBQ.i0D4jl2', NULL, '2021-04-26 13:52:50', NULL),
(140, 'Bea', 'beallinda45@gmail.com', 'aluno', NULL, '926691025', 1, NULL, '$2y$10$iQZkHW5RqA3cCcAw7efhx.G7t.AkYAPXGIrsv1zlc91hLjXwqsQAy', NULL, '2021-04-26 14:04:23', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academia`
--
ALTER TABLE `academia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `academia_id_user_foreign` (`id_user`);

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aluno_id_user_foreign` (`id_user`);

--
-- Indexes for table `aulas`
--
ALTER TABLE `aulas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aulas_modulo_id_foreign` (`modulo_id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cat_blog`
--
ALTER TABLE `cat_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comentarios_user_id_foreign` (`user_id`),
  ADD KEY `comentarios_publicacao_id_foreign` (`publicacao_id`);

--
-- Indexes for table `comentario_blog`
--
ALTER TABLE `comentario_blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comentario_blog_user_id_foreign` (`user_id`),
  ADD KEY `comentario_blog_blog_id_foreign` (`blog_id`);

--
-- Indexes for table `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contacto_id_perfil_foreign` (`id_perfil`);

--
-- Indexes for table `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coproducao`
--
ALTER TABLE `coproducao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cursos_id_formador_foreign` (`id_formador`),
  ADD KEY `cursos_id_categoria_foreign` (`id_categoria`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formador`
--
ALTER TABLE `formador`
  ADD PRIMARY KEY (`id`),
  ADD KEY `formador_id_user_foreign` (`id_user`);

--
-- Indexes for table `form_acad`
--
ALTER TABLE `form_acad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `form_acad_id_formador_foreign` (`id_formador`),
  ADD KEY `form_acad_id_academia_foreign` (`id_academia`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modulo`
--
ALTER TABLE `modulo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `modulo_id_curso_foreign` (`id_curso`);

--
-- Indexes for table `newslater`
--
ALTER TABLE `newslater`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `newslater_email_unique` (`email`);

--
-- Indexes for table `operacoes`
--
ALTER TABLE `operacoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `operacoes_id_formador_foreign` (`id_formador`);

--
-- Indexes for table `pagamentos`
--
ALTER TABLE `pagamentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pagamentos_id_pedido_foreign` (`id_pedido`),
  ADD KEY `pagamentos_id_aluno_foreign` (`id_aluno`) USING BTREE;

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pedidos_user_id_foreign` (`user_id`);

--
-- Indexes for table `pedidos_cursos`
--
ALTER TABLE `pedidos_cursos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pedidos_cursos_pedido_id_foreign` (`pedido_id`),
  ADD KEY `pedidos_cursos_curso_id_foreign` (`curso_id`);

--
-- Indexes for table `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `perfil_id_user_foreign` (`id_user`);

--
-- Indexes for table `publicacao`
--
ALTER TABLE `publicacao`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `publicacao_titulo_unique` (`titulo`),
  ADD KEY `publicacao_user_id_foreign` (`user_id`);

--
-- Indexes for table `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sobre`
--
ALTER TABLE `sobre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `termo`
--
ALTER TABLE `termo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_name_unique` (`name`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academia`
--
ALTER TABLE `academia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `aulas`
--
ALTER TABLE `aulas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `cat_blog`
--
ALTER TABLE `cat_blog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comentario_blog`
--
ALTER TABLE `comentario_blog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coproducao`
--
ALTER TABLE `coproducao`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `formador`
--
ALTER TABLE `formador`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `form_acad`
--
ALTER TABLE `form_acad`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `modulo`
--
ALTER TABLE `modulo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `newslater`
--
ALTER TABLE `newslater`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `operacoes`
--
ALTER TABLE `operacoes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pagamentos`
--
ALTER TABLE `pagamentos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `pedidos_cursos`
--
ALTER TABLE `pedidos_cursos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `publicacao`
--
ALTER TABLE `publicacao`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sobre`
--
ALTER TABLE `sobre`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `termo`
--
ALTER TABLE `termo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- Constraints for dumped tables
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
-- Limitadores para a tabela `operacoes`
--
ALTER TABLE `operacoes`
  ADD CONSTRAINT `operacoes_id_formador_foreign` FOREIGN KEY (`id_formador`) REFERENCES `formador` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `pagamentos`
--
ALTER TABLE `pagamentos`
  ADD CONSTRAINT `pagamentos_id_aluno_foreign` FOREIGN KEY (`id_aluno`) REFERENCES `aluno` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pagamentos_id_pedido_foreign` FOREIGN KEY (`id_pedido`) REFERENCES `pedidos_cursos` (`id`) ON DELETE CASCADE;

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
