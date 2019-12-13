-- ===================================================================================
-- DoorCrash-DatabaseBuild
-- This script builds the database for DoorCrash (Food Items) and its table.  It also 
-- inserts data into the tables.
-- ===================================================================================

-- -----------------------------------------------------------------------------------
-- Save selected MySQL settings
-- -----------------------------------------------------------------------------------
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------------------------------------
-- Delete and create database
-- -----------------------------------------------------------------------------------
DROP SCHEMA IF EXISTS `dbFoodItems` ;
CREATE SCHEMA IF NOT EXISTS `dbFoodItems` DEFAULT CHARACTER SET utf8;

-- -----------------------------------------------------------------------------------
-- Switch to dbFoodItems database
-- -----------------------------------------------------------------------------------
USE dbFoodItems;

-- -----------------------------------------------------------------------------------
-- Delete and create table `dbFoodItems`.`tbFoodItems`
-- -----------------------------------------------------------------------------------
DROP TABLE IF EXISTS `dbFoodItems`.`tbFoodItems` ;
CREATE TABLE IF NOT EXISTS `dbFoodItems`.`tbFoodItems` (
  `FoodItemID` INT NOT NULL AUTO_INCREMENT,
  `Restaurant` VARCHAR(45) NOT NULL,
  `FoodItem` VARCHAR(45) NOT NULL,
  `Price` DECIMAL(12,2) NOT NULL,
  `QuantitySold` INT NOT NULL,
  `OrdersSold` INT NOT NULL,
  PRIMARY KEY (`FoodItemID`))
ENGINE = InnoDB;

-- -----------------------------------------------------------------------------------
-- Insert data into table `dbFoodItems`.`tbFoodItems`
-- -----------------------------------------------------------------------------------
INSERT INTO tbFoodItems (Restaurant, FoodItem, Price, QuantitySold, OrdersSold) VALUES
  ('Sushi Fan', 'Bowl', 8.09, 2, 1),
  ('Sushi Fan', 'Noodles', 7.99, 5, 3),
  ('Sushi Fan', 'Ramen', 9.49, 14, 11),
  ('Sushi Fan', 'Pastry', 6.99, 15, 14),
  ('Orange Tree', 'Pasta', 9.99, 12, 10),
  ('Orange Tree', 'Fries', 13.29, 13, 11),
  ('Orange Tree', 'Pie', 12.79, 9, 7),
  ('Orange Tree', 'Pizza', 8.19, 8, 6),
  ('Indian Spices', 'Biryani', 17.99, 2, 1),
  ('Indian Spices', 'Naan', 8.99, 6, 5),
  ('Indian Spices', 'Chicken', 11.99, 17, 15),
  ('Indian Spices', 'Paneer', 12.99, 10, 8),
  ('Tulip Tea', 'Chai', 9.99, 7, 5),
  ('Tulip Tea', 'Latte', 7.99, 3, 1),
  ('Tulip Tea', 'Horlicks', 8.99, 20, 17),
  ('Tulip Tea', 'Rusk', 8.50, 12, 9);
  
  SELECT * FROM tbFoodItems;

-- -----------------------------------------------------
-- Restore saved MySQL settings
-- -----------------------------------------------------
SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;