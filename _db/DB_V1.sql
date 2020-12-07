-- MySQL Script generated by MySQL Workbench
-- Mon Dec  7 10:41:27 2020
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema exerciseLooper
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `exerciseLooper` ;

-- -----------------------------------------------------
-- Schema exerciseLooper
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `exerciseLooper` DEFAULT CHARACTER SET utf8 ;
USE `exerciseLooper` ;

-- -----------------------------------------------------
-- Table `exerciseLooper`.`exercises`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `exerciseLooper`.`exercises` ;

CREATE TABLE IF NOT EXISTS `exerciseLooper`.`exercises` (
  `idExercises` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(100) NOT NULL,
  `state` INT NOT NULL,
  PRIMARY KEY (`idExercises`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `exerciseLooper`.`questions`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `exerciseLooper`.`questions` ;

CREATE TABLE IF NOT EXISTS `exerciseLooper`.`questions` (
  `idQuestions` INT NOT NULL AUTO_INCREMENT,
  `title` TEXT NOT NULL,
  `type` INT NOT NULL,
  `FK_idExercises` INT NOT NULL,
  PRIMARY KEY (`idQuestions`),
  INDEX `fk_Questions_Exercises1_idx` (`FK_idExercises` ASC) VISIBLE,
  CONSTRAINT `fk_Questions_Exercises1`
    FOREIGN KEY (`FK_idExercises`)
    REFERENCES `exerciseLooper`.`exercises` (`idExercises`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `exerciseLooper`.`fullfilments`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `exerciseLooper`.`fullfilments` ;

CREATE TABLE IF NOT EXISTS `exerciseLooper`.`fullfilments` (
  `idFullfilment` INT NOT NULL AUTO_INCREMENT,
  `FK_idExercises` INT NOT NULL,
  `date` TIMESTAMP NOT NULL,
  INDEX `fk_Exercises_has_Responses_Exercises1_idx` (`FK_idExercises` ASC) VISIBLE,
  PRIMARY KEY (`idFullfilment`),
  UNIQUE INDEX `idFullfilment_UNIQUE` (`idFullfilment` ASC) VISIBLE,
  CONSTRAINT `fk_Exercises_has_Responses_Exercises1`
    FOREIGN KEY (`FK_idExercises`)
    REFERENCES `exerciseLooper`.`exercises` (`idExercises`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `exerciseLooper`.`responses`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `exerciseLooper`.`responses` ;

CREATE TABLE IF NOT EXISTS `exerciseLooper`.`responses` (
  `idResponses` INT NOT NULL AUTO_INCREMENT,
  `FK_idQuestions` INT NOT NULL,
  `content` VARCHAR(100) NULL,
  `fullfilments_idFullfilment` VARCHAR(45) NOT NULL,
  INDEX `fk_Questions_has_User_Questions_idx` (`FK_idQuestions` ASC) VISIBLE,
  PRIMARY KEY (`idResponses`),
  INDEX `fk_responses_fullfilments1_idx` (`fullfilments_idFullfilment` ASC) VISIBLE,
  CONSTRAINT `fk_Questions_has_User_Questions`
    FOREIGN KEY (`FK_idQuestions`)
    REFERENCES `exerciseLooper`.`questions` (`idQuestions`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_responses_fullfilments1`
    FOREIGN KEY (`fullfilments_idFullfilment`)
    REFERENCES `exerciseLooper`.`fullfilments` (`idFullfilment`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
