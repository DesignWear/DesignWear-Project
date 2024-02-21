/*-- -----------------------------------------------------
-- Schema DesignWearDB
-- -----------------------------------------------------
DROP DATABASE IF EXISTS `DesignWearDB`;
CREATE DATABASE IF NOT EXISTS `DesignWearDB`;
USE `DesignWearDB` ;
-- -----------------------------------------------------
-- Table `DesignWearDB`.`professor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DesignWearDB`.`professor` (
  `idprofessor` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `login` VARCHAR(45) NULL,
  `senha` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  PRIMARY KEY (`idprofessor`));


-- -----------------------------------------------------
-- Table `DesignWearDB`.`aluno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DesignWearDB`.`aluno` (
  `matricula` INT NOT NULL,
  `login` VARCHAR(45) NULL,
  `senha` VARCHAR(45) NULL,
  `nome` VARCHAR(45) NULL,
  `pctcursoconcluido` INT NULL,
  `idprofessor` INT NOT NULL,
  PRIMARY KEY (`matricula`),
  CONSTRAINT `fk_aluno_professor`
    FOREIGN KEY (`idprofessor`)
    REFERENCES `DesignWearDB`.`professor` (`idprofessor`));


-- -----------------------------------------------------
-- Table `DesignWearDB`.`atividade`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DesignWearDB`.`atividade` (
  `id_atividade` INT NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(45) NULL,
  `descricao` VARCHAR(200) NULL,
  PRIMARY KEY (`id_atividade`));


-- -----------------------------------------------------
-- Table `DesignWearDB`.`nota`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DesignWearDB`.`nota` (
  `matricula` INT NOT NULL,
  `id_atividade` INT NOT NULL,
  `nota` DECIMAL NULL,
  `idprofessor` INT NOT NULL,
  CONSTRAINT `fk_notas_aluno`
    FOREIGN KEY (`matricula`)
    REFERENCES `DesignWearDB`.`aluno` (`matricula`),
  CONSTRAINT `fk_notas_professor`
    FOREIGN KEY (`idprofessor`)
    REFERENCES `DesignWearDB`.`professor` (`idprofessor`),
  CONSTRAINT `fk_nota_atividade`
    FOREIGN KEY (`id_atividade`)
    REFERENCES `DesignWearDB`.`atividade` (`id_atividade`));
*/
use designweardb;
show tables;
/*select * from professor;
desc professor;
SET @idprofessor = LAST_INSERT_ID();*/
 /*select * from aluno;
 desc aluno;*/