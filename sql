create database:

CREATE DATABASE `mastermix.in`;
CREATE TABLE `mastermix.in`.`mixins` (
	`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`name` TEXT NOT NULL,
	`author` TEXT NOT NULL,
	`author_link` TEXT NOT NULL,
	`email` TEXT NOT NULL,
	`code` TEXT NOT NULL,
	`preprocessor` TEXT NOT NULL,
	`description` TEXT NOT NULL,
	`example_user` TEXT NOT NULL,
	`example_hash` TEXT NOT NULL,
	`tags` TEXT NOT NULL);