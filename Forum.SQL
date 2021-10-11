

CREATE TABLE `uporabniki`
(
  `idu` Int NOT NULL AUTO_INCREMENT,
  `username` Varchar(200) NOT NULL,
  `email` Varchar(200) NOT NULL,
  `pass` Varchar(200) NOT NULL,
  `admin` Int NOT NULL DEFAULT 0,
  PRIMARY KEY (`idu`)
)
;



CREATE TABLE `kategorije`
(
  `idk` Int NOT NULL AUTO_INCREMENT,
  `imek` Varchar(200) NOT NULL,
  `opisk` Text,
  PRIMARY KEY (`idk`)
)
;



CREATE TABLE `objave`
(
  `ido` Int NOT NULL AUTO_INCREMENT,
  `imeo` Varchar(200) NOT NULL,
  `texto` Text NOT NULL,
  `datumo` Timestamp NOT NULL,
  `kategorija_ido` Int,
  `uporabnik_ido` Int,
  PRIMARY KEY (`ido`)
)
;

CREATE INDEX `IX_Relationship1` ON `objave` (`kategorija_ido`)
;

CREATE INDEX `IX_Relationship3` ON `objave` (`uporabnik_ido`)
;



CREATE TABLE `slike`
(
  `ids` Int NOT NULL AUTO_INCREMENT,
  `urls` Varchar(200),
  `objava _ids` Int,
  PRIMARY KEY (`ids`)
)
;

CREATE INDEX `IX_Relationship2` ON `slike` (`objava _ids`)
;



CREATE TABLE `like-objave`
(
  `idlo` Int NOT NULL AUTO_INCREMENT,
  `uporabnik_idlo` Int,
  `objava_idlo` Int,
  PRIMARY KEY (`idlo`)
)
;

CREATE INDEX `IX_Relationship4` ON `like-objave` (`uporabnik_idlo`)
;

CREATE INDEX `IX_Relationship5` ON `like-objave` (`objava_idlo`)
;



CREATE TABLE `komentarji`
(
  `idko` Int NOT NULL AUTO_INCREMENT,
  `textko` Text NOT NULL,
  `datumko` Timestamp NOT NULL,
  `objava_idko` Int,
  `uporabnik_idko` Int,
  PRIMARY KEY (`idko`)
)
;

CREATE INDEX `IX_Relationship7` ON `komentarji` (`objava_idko`)
;

CREATE INDEX `IX_Relationship10` ON `komentarji` (`uporabnik_idko`)
;



CREATE TABLE `like-koment`
(
  `idlk` Int NOT NULL AUTO_INCREMENT,
  `uporabnik_idlk` Int,
  `komentar_idlk` Int,
  PRIMARY KEY (`idlk`)
)
;

CREATE INDEX `IX_Relationship8` ON `like-koment` (`uporabnik_idlk`)
;

CREATE INDEX `IX_Relationship9` ON `like-koment` (`komentar_idlk`)
;



ALTER TABLE `objave` ADD CONSTRAINT `Relationship1` FOREIGN KEY (`kategorija_ido`) REFERENCES `kategorije` (`idk`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `slike` ADD CONSTRAINT `Relationship2` FOREIGN KEY (`objava _ids`) REFERENCES `objave` (`ido`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `objave` ADD CONSTRAINT `Relationship3` FOREIGN KEY (`uporabnik_ido`) REFERENCES `uporabniki` (`idu`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `like-objave` ADD CONSTRAINT `Relationship4` FOREIGN KEY (`uporabnik_idlo`) REFERENCES `uporabniki` (`idu`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `like-objave` ADD CONSTRAINT `Relationship5` FOREIGN KEY (`objava_idlo`) REFERENCES `objave` (`ido`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `komentarji` ADD CONSTRAINT `Relationship7` FOREIGN KEY (`objava_idko`) REFERENCES `objave` (`ido`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `like-koment` ADD CONSTRAINT `Relationship8` FOREIGN KEY (`uporabnik_idlk`) REFERENCES `uporabniki` (`idu`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `like-koment` ADD CONSTRAINT `Relationship9` FOREIGN KEY (`komentar_idlk`) REFERENCES `komentarji` (`idko`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `komentarji` ADD CONSTRAINT `Relationship10` FOREIGN KEY (`uporabnik_idko`) REFERENCES `uporabniki` (`idu`) ON DELETE RESTRICT ON UPDATE RESTRICT
;


