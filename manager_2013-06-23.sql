# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.1.44)
# Database: manager
# Generation Time: 2013-06-24 00:30:23 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table clientes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `clientes`;

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cliente` varchar(128) DEFAULT NULL,
  `razao_social` varchar(128) DEFAULT NULL,
  `tipo_comercio` varchar(128) DEFAULT NULL,
  `dominio` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;

INSERT INTO `clientes` (`id`, `nome_cliente`, `razao_social`, `tipo_comercio`, `dominio`)
VALUES
	(13,'Manuela','Manuela','Manuela','Manuela'),
	(14,'Tuco','Tuco','Tuco','Tuco');

/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table colaboradores
# ------------------------------------------------------------

DROP TABLE IF EXISTS `colaboradores`;

CREATE TABLE `colaboradores` (
  `id` int(11) NOT NULL,
  `nome` varchar(128) DEFAULT NULL,
  `funcao` varchar(64) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `permissao_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_colaboradores_permissoes1` (`permissao_id`),
  CONSTRAINT `fk_colaboradores_permissoes1` FOREIGN KEY (`permissao_id`) REFERENCES `permissoes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table permissoes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `permissoes`;

CREATE TABLE `permissoes` (
  `id` int(11) NOT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table projetos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `projetos`;

CREATE TABLE `projetos` (
  `id` int(11) NOT NULL,
  `nome_projeto` varchar(128) DEFAULT NULL,
  `prazo_maximo` int(11) DEFAULT NULL,
  `data_inicio` date DEFAULT NULL,
  `data_fim` date DEFAULT NULL,
  `data_aprovacao` date DEFAULT NULL,
  `dias_uteis` int(11) DEFAULT NULL,
  `cliente_id` int(11) NOT NULL,
  `colaboradore_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_projetos_clientes_idx` (`cliente_id`),
  KEY `fk_projetos_colaboradores1_idx` (`colaboradore_id`),
  CONSTRAINT `fk_projetos_clientes` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_projetos_colaboradores1` FOREIGN KEY (`colaboradore_id`) REFERENCES `colaboradores` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
