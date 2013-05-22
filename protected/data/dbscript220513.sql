SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`FM_USER_TYPE_MST`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`FM_USER_TYPE_MST` (
  `USER_TYPE_ID` INT NOT NULL AUTO_INCREMENT ,
  `USER_TYPE` VARCHAR(200) NOT NULL ,
  `USER_TYPE_DESC` VARCHAR(200) NOT NULL ,
  `CREATED_BY` VARCHAR(100) NOT NULL ,
  `CREATED_DATE` TIMESTAMP NOT NULL ,
  PRIMARY KEY (`USER_TYPE_ID`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`FM_USER_LIKES_CATEGORY_MST`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`FM_USER_LIKES_CATEGORY_MST` (
  `USER_LIKE_CATEGORY_ID` INT NOT NULL ,
  `USER_LIKE_CATEGORY_NAME` VARCHAR(200) NOT NULL ,
  `USER_LIKE_CATEGORY_DESC` VARCHAR(200) NOT NULL ,
  `CREATED_BY` VARCHAR(200) NOT NULL ,
  `CREATED_DATE` TIMESTAMP NOT NULL ,
  PRIMARY KEY (`USER_LIKE_CATEGORY_ID`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`FM_USER_LIKE_CATEGORY_ITEMS`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`FM_USER_LIKE_CATEGORY_ITEMS` (
  `LIKE_CATEGORY_ITEMS_ID` INT NOT NULL ,
  `LIKE_CATEGORY_ITEM_NAME` VARCHAR(200) NOT NULL ,
  `LIKE_CATEGORY_ITEM_DESC` VARCHAR(500) NOT NULL ,
  `LIKED_BY_PEOPLE_COUNT` INT NOT NULL ,
  PRIMARY KEY (`LIKE_CATEGORY_ITEMS_ID`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`FM_EDUCATION_MST`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`FM_EDUCATION_MST` (
  `EDU_ID` INT NOT NULL ,
  `EDU_NAME` VARCHAR(200) NOT NULL ,
  `EDU_DESC` VARCHAR(600) NOT NULL ,
  `CREATED_DATE` TIMESTAMP NOT NULL ,
  `CREATED_BY` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`EDU_ID`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`FM_ADDRESS_TYPE_MAST`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`FM_ADDRESS_TYPE_MAST` (
  `ADDRESS_TYPE_ID` INT NOT NULL ,
  `ADDRESS_TYPE_NAME` VARCHAR(200) NOT NULL ,
  `ADDRESS_TYPE_DESC` VARCHAR(200) NOT NULL ,
  `CREATED_BY` VARCHAR(45) NOT NULL ,
  `CREATED_DATE` TIMESTAMP NOT NULL ,
  `UPDATED_BY` VARCHAR(45) NULL ,
  `UPDATED_DATE` TIMESTAMP NULL ,
  `NUMBER_OF_UPDATE` VARCHAR(45) NULL ,
  PRIMARY KEY (`ADDRESS_TYPE_ID`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`FM_ADDRESS`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`FM_ADDRESS` (
  `ADDRESS_ID` INT NOT NULL ,
  `ADDRESS_TYPE_ID` INT NOT NULL ,
  `ADDRESS_LINE_1` VARCHAR(600) NOT NULL ,
  `ADDRESS_LINE_1` VARCHAR(500) NOT NULL ,
  `COUNTRY_ID` INT NOT NULL ,
  `STATE_ID` INT NOT NULL ,
  `PIN_CODE` INT NOT NULL ,
  `FAMILY_ID` INT NOT NULL ,
  `USER_ID` INT NOT NULL ,
  PRIMARY KEY (`ADDRESS_ID`) ,
  CONSTRAINT `FM_FAMILY_MEMBER_ADDRESS_FM_ADDRESS_TYPE_MAST_FK`
    FOREIGN KEY (`ADDRESS_ID` )
    REFERENCES `mydb`.`FM_ADDRESS_TYPE_MAST` (`ADDRESS_TYPE_ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`FM_RELATION_MST`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`FM_RELATION_MST` (
  `FAMILY_REL_ID` INT NOT NULL ,
  `FAMILY_REL_NAME` VARCHAR(200) NOT NULL ,
  `FAMILY_REL_DESC` VARCHAR(200) NOT NULL ,
  `CREATED_BY` VARCHAR(100) NOT NULL ,
  `CREATED_DATE` TIMESTAMP NULL ,
  PRIMARY KEY (`FAMILY_REL_ID`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`FM_USER_BASIC_INF`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`FM_USER_BASIC_INF` (
  `USER_ID` INT NOT NULL AUTO_INCREMENT ,
  `TITLE` VARCHAR(45) NOT NULL ,
  `FIRST_NAME` VARCHAR(45) NOT NULL ,
  `MIDDLE_NAME` VARCHAR(45) NULL ,
  `LAST_NAME` VARCHAR(200) NOT NULL ,
  `PHONE_NUMBER` INT NULL ,
  `MOBILE_NUMBER` INT NULL ,
  `GENDER` TINYINT(1) NOT NULL ,
  `EMAIL_ID` VARCHAR(45) NOT NULL ,
  `DOB` TIMESTAMP NOT NULL ,
  `USER_NAME` VARCHAR(200) NOT NULL ,
  `PASSWORD` VARCHAR(200) NOT NULL ,
  `CREATED_DATE` TIMESTAMP NOT NULL ,
  `USER_TYPE_ID` INT NULL ,
  PRIMARY KEY (`USER_ID`) ,
  INDEX `USER_TYPE_ID_FK_idx` (`USER_TYPE_ID` ASC) ,
  UNIQUE INDEX `USER_NAME_UNIQUE` (`USER_NAME` ASC) ,
  CONSTRAINT ``
    FOREIGN KEY (`USER_TYPE_ID` )
    REFERENCES `mydb`.`FM_USER_TYPE_MST` (`USER_TYPE_ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`FM_FAMILY_REGISTRATION`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`FM_FAMILY_REGISTRATION` (
  `FAMILY_ID` INT NOT NULL AUTO_INCREMENT ,
  `FAMILY_NAME` VARCHAR(200) NOT NULL ,
  `DOR` TIMESTAMP NOT NULL ,
  `FAMILY_EMAIL_ID` VARCHAR(200) NOT NULL ,
  `FAMILY_PHONE_NUMBER` VARCHAR(200) NOT NULL ,
  `FAMILY_DESC` VARCHAR(200) NOT NULL ,
  `CREATED_BY` VARCHAR(200) NOT NULL ,
  `CREATED_DATE` TIMESTAMP NOT NULL ,
  `USER_ID` INT NOT NULL ,
  PRIMARY KEY (`FAMILY_ID`) ,
  INDEX `FM_FAMILY_REGISTRATION_FM_FAMILY_MEMBER_BASIC_INF_FK_idx` (`USER_ID` ASC) ,
  CONSTRAINT `FM_FAMILY_REGISTRATION_FM_FAMILY_MEMBER_BASIC_INF_FK`
    FOREIGN KEY (`USER_ID` )
    REFERENCES `mydb`.`FM_USER_BASIC_INF` (`USER_ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`FM_USER_FAMILY_RELATION_MAP`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`FM_USER_FAMILY_RELATION_MAP` (
  `USER_FAMILY_MAP_ID` INT NOT NULL AUTO_INCREMENT ,
  `FAMILY_ID` INT NOT NULL ,
  `FAMILY_REL_ID` INT NOT NULL ,
  `USER_ID` INT NOT NULL ,
  `CREATED_BY` VARCHAR(45) NOT NULL ,
  `CREATED_DATE` TIMESTAMP NOT NULL ,
  `USER_LEVEL_ID` INT NOT NULL ,
  PRIMARY KEY (`USER_FAMILY_MAP_ID`) ,
  INDEX `FM_USER_FAMILY_RELATION_MAP_FM_FAMILY_MEMBER_BASIC_INF_FK_idx` (`USER_ID` ASC) ,
  INDEX `FM_USER_FAMILY_RELATION_MAP_FM_FAMILY_REGISTRATION_FK_idx` (`FAMILY_ID` ASC) ,
  INDEX `FM_USER_FAMILY_RELATION_MAP_FM_FAMILY_RELATION_MST_FK_idx` (`FAMILY_REL_ID` ASC) ,
  CONSTRAINT `FM_USER_FAMILY_RELATION_MAP_FM_FAMILY_MEMBER_BASIC_INF_FK`
    FOREIGN KEY (`USER_ID` )
    REFERENCES `mydb`.`FM_USER_BASIC_INF` (`USER_ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FM_USER_FAMILY_RELATION_MAP_FM_FAMILY_REGISTRATION_FK`
    FOREIGN KEY (`FAMILY_ID` )
    REFERENCES `mydb`.`FM_FAMILY_REGISTRATION` (`FAMILY_ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FM_USER_FAMILY_RELATION_MAP_FM_FAMILY_RELATION_MST_FK`
    FOREIGN KEY (`FAMILY_REL_ID` )
    REFERENCES `mydb`.`FM_RELATION_MST` (`FAMILY_REL_ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`FM_USER_PRO_INF`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`FM_USER_PRO_INF` (
  `PROFESSIONAL_ID` INT NOT NULL ,
  `USER_ID` INT NOT NULL ,
  `COMPANY_ID` INT NOT NULL ,
  `STARTING_DAY` DATETIME NOT NULL ,
  `ENDING_DAY` DATETIME NULL ,
  `ACTIVE` TINYINT(1) NOT NULL ,
  PRIMARY KEY (`PROFESSIONAL_ID`) ,
  INDEX `FM_USER_PRO_INF_FM_USER_BASIC_INF_FK_idx` (`USER_ID` ASC) ,
  CONSTRAINT `FM_USER_PRO_INF_FM_USER_BASIC_INF_FK`
    FOREIGN KEY (`USER_ID` )
    REFERENCES `mydb`.`FM_USER_BASIC_INF` (`USER_ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`FM_USER_EDU_INF`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`FM_USER_EDU_INF` (
  `USER_ID` INT NOT NULL ,
  `EDUCATION_ID` INT NOT NULL ,
  `STARTING_YEAR` DATE NOT NULL ,
  `ENDING_YEAR` DATE NOT NULL ,
  PRIMARY KEY (`EDUCATION_ID`) ,
  INDEX `FM_USER_EDU_INF_FM_USER_BASIC_INF_FK_idx` (`USER_ID` ASC) ,
  CONSTRAINT `FM_USER_EDU_INF_FM_USER_BASIC_INF_FK`
    FOREIGN KEY (`USER_ID` )
    REFERENCES `mydb`.`FM_USER_BASIC_INF` (`USER_ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`FM_FAMILY_PHOTOS`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`FM_FAMILY_PHOTOS` (
  `FAMILY_PHOTO_ID` INT NOT NULL AUTO_INCREMENT ,
  `FAMILY_ID` INT NOT NULL ,
  `IMAGE` BLOB NOT NULL ,
  `USER_ID` INT NOT NULL ,
  PRIMARY KEY (`FAMILY_PHOTO_ID`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`FM_LOGIN_INF`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`FM_LOGIN_INF` (
  `LOGIN_ID` INT NOT NULL ,
  `LOGIN_DATE` TIMESTAMP NOT NULL ,
  `LOGOUT_DATE` TIMESTAMP NOT NULL ,
  `USER_ID` INT NOT NULL ,
  PRIMARY KEY (`LOGIN_ID`) )
ENGINE = InnoDB;

USE `mydb` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
