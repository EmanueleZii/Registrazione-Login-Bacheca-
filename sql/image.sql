CREATE TABLE `images` (
`id` INT AUTO_INCREMENT PRIMARY KEY,
`idimage` INT ,
`image` VARCHAR (100),
FOREIGN KEY (`idimage`) REFERENCES `utenti`(`id`)  
);