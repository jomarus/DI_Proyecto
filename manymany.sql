-- MySQL Script generated by MySQL Workbench
-- 12/04/14 23:48:32
-- Model: New Model    Version: 1.0
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema cursos_photocad
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `cursos_photocad` DEFAULT CHARACTER SET latin1 ;
USE `cursos_photocad` ;

-- -----------------------------------------------------
-- Table `cursos_photocad`.`cursos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cursos_photocad`.`cursos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL DEFAULT NULL,
  `tipo` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `cursos_photocad`.`estudiantes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cursos_photocad`.`estudiantes` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL DEFAULT NULL,
  `apellido` VARCHAR(45) NULL DEFAULT NULL,
  `mail` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `cursos_photocad`.`profesores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cursos_photocad`.`profesores` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL DEFAULT NULL,
  `apellido` VARCHAR(45) NULL DEFAULT NULL,
  `mail` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `cursos_photocad`.`cursos_estudiantes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cursos_photocad`.`cursos_estudiantes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `estudiante_id` INT(11) NOT NULL,
  `curso_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`, `estudiante_id`, `curso_id`),
  INDEX `fk_estudiantes_has_cursos_cursos1_idx` (`curso_id` ASC),
  INDEX `fk_estudiantes_has_cursos_estudiantes_idx` (`estudiante_id` ASC),
  CONSTRAINT `fk_estudiantes_has_cursos_estudiantes`
    FOREIGN KEY (`estudiante_id`)
    REFERENCES `cursos_photocad`.`estudiantes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_estudiantes_has_cursos_cursos1`
    FOREIGN KEY (`curso_id`)
    REFERENCES `cursos_photocad`.`cursos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `cursos_photocad`.`cursos_profesores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cursos_photocad`.`cursos_profesores` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `profesor_id` INT(11) NOT NULL,
  `curso_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`, `profesor_id`, `curso_id`),
  INDEX `fk_profesores_has_cursos_cursos1_idx` (`curso_id` ASC),
  INDEX `fk_profesores_has_cursos_profesores1_idx` (`profesor_id` ASC),
  CONSTRAINT `fk_profesores_has_cursos_profesores1`
    FOREIGN KEY (`profesor_id`)
    REFERENCES `cursos_photocad`.`profesores` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_profesores_has_cursos_cursos1`
    FOREIGN KEY (`curso_id`)
    REFERENCES `cursos_photocad`.`cursos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;