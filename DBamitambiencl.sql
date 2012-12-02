SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `dbsinco` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `dbsinco` ;

-- -----------------------------------------------------
-- Table `dbsinco`.`Testimonio`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dbsinco`.`Testimonio` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `comuna_id` INT NULL ,
  `relato` VARCHAR(4000) NULL ,
  `edad` INT NULL ,
  `sexo` VARCHAR(5) NULL ,
  `ip_address` VARCHAR(45) NULL ,
  `created_at` DATETIME NULL ,
  `updated_at` DATETIME NULL ,
  `nombres` VARCHAR(255) NULL ,
  `apellido_paterno` VARCHAR(45) NULL ,
  `apellido_materno` VARCHAR(45) NULL ,
  `correo` VARCHAR(45) NULL ,
  `fono` VARCHAR(45) NULL ,
  `agresor_id` INT NULL ,
  `amenaza_id` INT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbsinco`.`Comuna`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dbsinco`.`Comuna` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  `provincia_id` INT NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbsinco`.`Provincia`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dbsinco`.`Provincia` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `region_id` INT NOT NULL ,
  `nombre` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbsinco`.`Region`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dbsinco`.`Region` (
  `id` INT NOT NULL ,
  `nombre` VARCHAR(45) NOT NULL ,
  `sigla` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbsinco`.`Amenaza`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dbsinco`.`Amenaza` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(255) NOT NULL ,
  `descripcion` VARCHAR(4000) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbsinco`.`Agresor`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dbsinco`.`Agresor` (
  `ID` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(255) NOT NULL ,
  `descripcion` VARCHAR(4000) NULL ,
  `cifra` VARCHAR(4000) NULL ,
  `fuente` VARCHAR(255) NULL ,
  PRIMARY KEY (`ID`) )
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
