DROP DATABASE IF EXISTS pessoa;
CREATE DATABASE pessoa;
USE pessoa;

DROP TABLE IF EXISTS `pessoa`;
CREATE TABLE `pessoa` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `cpf` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `pessoa`
  (`name`, `cpf`)
VALUES
  ('luiz', '12345');