CREATE TABLE `ruolli`(
 `id`INT AUTO_INCREMENT PRIMARY KEY,
 `ruolo` VARCHAR(55),
);

CREATE TABLE `ruoloutente`(
 `idRuolo`INT  PRIMARY KEY,
 `idutente` INT PRIMARY KEY,

);

ALTER TABLE `utente_ruolo` 
ADD CONSTRAINT `fk_utente_ruolo1` FOREIGN KEY (`idRuolo`) REFERENCES `ruolli`(`id`)
ON DELETE RESTRICT ON UPDATE RESTRICT; 

ALTER TABLE `utente_ruolo` 
ADD CONSTRAINT `fk_utente_ruolo2` FOREIGN KEY (`idutente`) REFERENCES `utenti`(`id`)
ON DELETE RESTRICT ON UPDATE RESTRICT; 