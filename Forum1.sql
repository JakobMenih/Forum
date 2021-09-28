

CREATE TABLE `uporabniki`
(
  `id` Int NOT NULL AUTO_INCREMENT,
  `username` Varchar(200) NOT NULL,
  `geslo` Varchar(200) NOT NULL,
  `email` Varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
)
;



CREATE TABLE `kategorije`
(
  `id` Int NOT NULL AUTO_INCREMENT,
  `ime` Varchar(200) NOT NULL,
  `opis` Text,
  PRIMARY KEY (`id`)
)
;



CREATE TABLE `objave`
(
  `id` Int NOT NULL AUTO_INCREMENT,
  `ime` Varchar(200) NOT NULL,
  `text` Text NOT NULL,
  `datum` Timestamp NOT NULL,
  `kategorija_id` Int,
  `uporabnik_id` Int,
  PRIMARY KEY (`id`)
)
;

CREATE INDEX `IX_Relationship1` ON `objave` (`kategorija_id`)
;

CREATE INDEX `IX_Relationship3` ON `objave` (`uporabnik_id`)
;



CREATE TABLE `slike`
(
  `id` Int NOT NULL AUTO_INCREMENT,
  `url` Varchar(200),
  `objava _id` Int,
  PRIMARY KEY (`id`)
)
;

CREATE INDEX `IX_Relationship2` ON `slike` (`objava _id`)
;



CREATE TABLE `like-objave`
(
  `id` Int NOT NULL AUTO_INCREMENT,
  `uporabnik_id` Int,
  `objava_id` Int,
  PRIMARY KEY (`id`)
)
;

CREATE INDEX `IX_Relationship4` ON `like-objave` (`uporabnik_id`)
;

CREATE INDEX `IX_Relationship5` ON `like-objave` (`objava_id`)
;



CREATE TABLE `komentarji`
(
  `id` Int NOT NULL AUTO_INCREMENT,
  `text` Text NOT NULL,
  `datum` Timestamp NOT NULL,
  `objava_id` Int,
  PRIMARY KEY (`id`)
)
;

CREATE INDEX `IX_Relationship7` ON `komentarji` (`objava_id`)
;



CREATE TABLE `like-koment`
(
  `id` Int NOT NULL AUTO_INCREMENT,
  `uporabnik_id` Int,
  `komentar_id` Int,
  PRIMARY KEY (`id`)
)
;

CREATE INDEX `IX_Relationship8` ON `like-koment` (`uporabnik_id`)
;

CREATE INDEX `IX_Relationship9` ON `like-koment` (`komentar_id`)
;



ALTER TABLE `objave` ADD CONSTRAINT `Relationship1` FOREIGN KEY (`kategorija_id`) REFERENCES `kategorije` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `slike` ADD CONSTRAINT `Relationship2` FOREIGN KEY (`objava _id`) REFERENCES `objave` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `objave` ADD CONSTRAINT `Relationship3` FOREIGN KEY (`uporabnik_id`) REFERENCES `uporabniki` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `like-objave` ADD CONSTRAINT `Relationship4` FOREIGN KEY (`uporabnik_id`) REFERENCES `uporabniki` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `like-objave` ADD CONSTRAINT `Relationship5` FOREIGN KEY (`objava_id`) REFERENCES `objave` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `komentarji` ADD CONSTRAINT `Relationship7` FOREIGN KEY (`objava_id`) REFERENCES `objave` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `like-koment` ADD CONSTRAINT `Relationship8` FOREIGN KEY (`uporabnik_id`) REFERENCES `uporabniki` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `like-koment` ADD CONSTRAINT `Relationship9` FOREIGN KEY (`komentar_id`) REFERENCES `komentarji` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;


