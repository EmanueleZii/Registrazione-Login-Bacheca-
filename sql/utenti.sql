CREATE DATABASE `social`;

CREATE TABLE `utenti`(
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    `firstname` VARCHAR(55) NOT NULL,
    `lastname` VARCHAR(55) NOT NULL,
    `email` VARCHAR(55) NOT NULL ,
    `password` VARCHAR(155) NOT NULL
);

CREATE TABLE `commenti`(
    `idcommento` INT NOT NULL,
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY;
    `commento` VARCHAR(255),
    FOREIGN KEY (`id`) REFERENCES `utenti`(`id`)
);