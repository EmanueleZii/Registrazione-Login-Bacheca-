CREATE TABLE `utenti`(
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    `firstname` VARCHAR(55) NOT NULL,
    `lastname` VARCHAR(55) NOT NULL,
    `email` VARCHAR(55) NOT NULL ,
    `password` VARCHAR(155) NOT NULL
);

CREATE TABLE `commentiutenti`(
    `id` INT NOT NULL PRIMARY KEY,
    `idcommento` INT NOT NULL AUTO_INCREMENT,
    `Commenti` VARCHAR(55) NOT NULL,
    FOREIGN KEY (`idcommento`) REFERENCES `utenti`(`id`)
);