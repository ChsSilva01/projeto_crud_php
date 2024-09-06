-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.32-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para projeto_crud_php_t1
CREATE DATABASE IF NOT EXISTS `projeto_crud_php_t1` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci */;
USE `projeto_crud_php_t1`;

-- Copiando estrutura para tabela projeto_crud_php_t1.alunos
CREATE TABLE IF NOT EXISTS `alunos` (
  `Aluno_Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `Aluno_Foto` varchar(250) NOT NULL DEFAULT '0',
  `Aluno_Nome` varchar(250) DEFAULT NULL,
  `Aluno_Cidade` varchar(250) DEFAULT NULL,
  `Aluno_Curso` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`Aluno_Codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Copiando dados para a tabela projeto_crud_php_t1.alunos: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `alunos` DISABLE KEYS */;
INSERT INTO `alunos` (`Aluno_Codigo`, `Aluno_Foto`, `Aluno_Nome`, `Aluno_Cidade`, `Aluno_Curso`) VALUES
	(8, '43750702876c8c9d3f418464bfecf5e1.png', 'Guilherme', 'Xique-Xique', '456'),
	(9, '65efe416142ba92761124cffc943dabf.png', 'Fred', 'Xique-Xique', 'DS');
/*!40000 ALTER TABLE `alunos` ENABLE KEYS */;

-- Copiando estrutura para tabela projeto_crud_php_t1.login_aluno
CREATE TABLE IF NOT EXISTS `login_aluno` (
  `Login_Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `Login_Aluno_Codigo` int(11) DEFAULT NULL,
  `Login_Email` varchar(50) DEFAULT NULL,
  `Login_Senha` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Login_Codigo`),
  KEY `FK_login_alunos` (`Login_Aluno_Codigo`),
  CONSTRAINT `FK_login_alunos` FOREIGN KEY (`Login_Aluno_Codigo`) REFERENCES `alunos` (`Aluno_Codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Copiando dados para a tabela projeto_crud_php_t1.login_aluno: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `login_aluno` DISABLE KEYS */;
INSERT INTO `login_aluno` (`Login_Codigo`, `Login_Aluno_Codigo`, `Login_Email`, `Login_Senha`) VALUES
	(1, 8, 'guilherme_prq@gmail.com', 'fca0789e7891cbc0583298a238316122'),
	(2, 9, 'fred@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');
/*!40000 ALTER TABLE `login_aluno` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
