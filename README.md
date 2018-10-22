Zadanie
=======

CREATE TABLE `user` 
  ( `idUser` INT NOT NULL AUTO_INCREMENT , 
    `userName` VARCHAR(255) NOT NULL , 
    `userEmail` VARCHAR(255) NOT NULL , 
    `userPhone` BIGINT NOT NULL , 
    PRIMARY KEY (`idUser`), UNIQUE (`userPhone`), UNIQUE (`userEmail`)) ENGINE = InnoDB;
    
INSERT INTO `user` 
  (`idUser`, 
   `userName`, 
   `userEmail`, 
   `userPhone`) 
VALUES (NULL, 'user01', 'user01@u.com', '100100100'), 
       (NULL, 'user02', 'user02@u.com', '200200200'), 
       (NULL, 'user03', 'user03@u.com', '300300300'),
       (NULL, 'user04', 'user04@u.com', '400400400')



