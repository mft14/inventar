CREATE DATABASE IF NOT EXISTS inventarTest;

USE inventarTest;

CREATE TABLE `itabteilung`( 
    `pk_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(30) NOT NULL,
    `vorname` VARCHAR(30) NOT NULL
);

INSERT INTO itabteilung (name, vorname) VALUES 
('Schumacher', 'Marcel'),
('Truggle', 'Tingle'),
('Kennedy', 'Leon'),
('Graham', 'Ashley'),
('Kiel', 'Karim'),
('Kiel', 'Pegy');

CREATE TABLE `personal`( 
    `personalnummer` INT NOT NULL,
    `name` VARCHAR(30) NOT NULL,
    `vorname` VARCHAR(30) NOT NULL,
    `abteilung` VARCHAR(50) NOT NULL
);

INSERT INTO personal VALUES 
    (362475,'Schmitt','Sophie','Vertrieb'),
	(615027,'Khan','Timo','IT'),
	(932681,'Müller','Anna','Schadenregulierung'),
	(206874,'Schneider','Felix','Finanzen'),
	(548903,'Bauer','Mia','Personal'),
	(471835,'Yilmaz','Jan','Recht'),
	(278316,'Kühn','Jasmin','Vertrieb'),
	(921403,'Krüger','Sofia','IT'),
	(169523,'Schwarz','Lukas','Schadenregulierung'),
	(835172,'Becker','Kadir','Finanzen'),
	(364582,'Wagner','Katharina','Personal'),
	(291408,'Schmidt','Kamila','Recht'),
	(590413,'Böhm','Emre','Vertrieb'),
	(812574,'Mayer','Jasmin','IT'),
	(367241,'Mertens','Leon','Schadenregulierung'),
	(183756,'Schulze','Maria','Finanzen'),
	(502476,'Tran','Simon','Personal'),
	(712398,'Hoffmann','Mila','Recht'),
	(285364,'Bergmann','Max','Vertrieb'),
	(607129,'Krüger','Sara','IT'),
	(917562,'Mehmet','Jasmin','Schadenregulierung'),
	(184935,'Schmitt','Luca','Finanzen'),
	(653918,'Tran','Lena','Personal'),
	(764825,'Schulz','Tobias','Recht'),
	(832106,'Weber','Sara','Vertrieb'),
	(239861,'Vo','Nina','IT'),
	(671895,'Kramer','Samir','Schadenregulierung'),
	(759182,'Schneider','Lara','Finanzen'),
	(415927,'Meyer','Sofia','Personal'),
	(609342,'Pohl','Ben','Recht'),
	(983472,'Nguyen','Linnea','Vertrieb'),
	(152648,'Le','Lucas','IT'),
	(517394,'Ali','Hannah','Schadenregulierung'),
	(427189,'Weber','Lea','Finanzen'),
	(902137,'Bui','Hanna','Personal'),
	(635281,'Fischer','Jonas','Recht'),
	(517293,'Schwarz','Lena','Vertrieb'),
	(195236,'Keller','Paul','IT'),
	(427190,'Hoffmann','Celine','Schadenregulierung'),
	(364902,'Vo','Hans','Finanzen'),
	(318742,'Kramer','Amelie','Personal'),
	(173659,'Köhler','Finn','Recht'),
	(547829,'Bergmann','Jana','Vertrieb'),
	(619347,'Bachmann','Hanna','IT'),
	(928463,'Said','Jasmin','Schadenregulierung'),
	(374651,'Schulz','Luca','Finanzen'),
	(765239,'Schmidt','Lena','Personal'),
	(839672,'Krüger','David','Recht'),
	(471826,'Böhm','Lea','Vertrieb'),
	(982536,'Müller','Nina','IT'),
	(209371,'Khan','Ali','Schadenregulierung'),
	(981746,'Weber','Sophie','Finanzen'),
	(274836,'Schneider','Nico','Personal'),
	(629184,'Fischer','Tim','Recht'),
	(472689,'Schwarz','Sophia','Vertrieb'),
	(915732,'Schulz','Hannah','IT'),
	(986317,'Becker','Jan','Vertrieb'),
	(410954,'Fischer','Lena','Aktuariat'),
	(563820,'Schuster','Tom','Vertrieb'),
	(703221,'Kovács','Krisztina','Schadenregulierung'),
	(715430,'Kumar','Ajay','Kundenservice'),
	(197035,'Weber','Sophie','Finanzen'),
	(226101,'Schreiber','Luisa','Kundenservice'),
	(906312,'Müller','Ina','Personal'),
	(541209,'Keller','Tobias','Aktuariat'),
	(841563,'González','Antonio','Schadenregulierung'),
	(354897,'Sauer','Anna','Vertrieb'),
	(802341,'Öztürk','Can','Kundenservice'),
	(609487,'Hoffmann','Nina','Finanzen'),
	(150763,'Varga','Máté','Aktuariat'),
	(905743,'Le','Thanh','Schadenregulierung'),
	(726540,'Hartmann','Sarah','Vertrieb'),
	(240513,'Schmidt','Maximilian','Kundenservice'),
	(521703,'Nguyen','Thi','Finanzen'),
	(441206,'Schneider','Daniel','Personal'),
	(247915,'Rosenberg','Natalie','Schadenregulierung'),
	(345102,'Mayer','Julia','Vertrieb'),
	(666312,'Kara','Mustafa','Kundenservice'),
	(784213,'Liu','Jing','Finanzen'),
	(445623,'Winkler','Lisa','Aktuariat'),
	(988517,'Sánchez','Luis','Vertrieb'),
	(205613,'Hansen','Lea','Schadenregulierung'),
	(675841,'Erdem','Murat','Kundenservice'),
	(411753,'Schmitt','Jonas','Personal'),
	(841907,'Koç','Emre','Aktuariat'),
	(259146,'Klein','Marie','Vertrieb'),
	(378094,'Hartwig','Kevin','Kundenservice'),
	(913742,'García','Ana','Finanzen'),
	(657309,'Ebert','Lisa','Schadenregulierung'),
	(530417,'Kumar','Pooja','Aktuariat'),
	(449865,'Friedrich','Mia','Vertrieb'),
	(199645,'Mueller','Christoph','Kundenservice'),
	(655741,'Pawlowski','Ania','Finanzen'),
	(334957,'Yildiz','Cem','Schadenregulierung'),
	(825130,'Hassan','Mohammed','Vertrieb'),
	(679514,'Müller','Klaus','Kundenservice'),
	(510372,'Schneider','Sophie','Personal'),
	(284017,'Ivanova','Natalia','Aktuariat'),
	(697210,'Schmitt','Laura','Vertrieb'),
	(198046,'Zhang','Wei','Kundenservice'),
	(766194,'Vogel','Simon','Finanzen'),
	(872165,'Soto','Maria','Schadenregulierung'),
	(331609,'Le','Chi','Aktuariat'),
	(645321,'Jansen','Tom','Vertrieb'),
	(813564,'Kohl','Hannah','Kundenservice'),
	(288125,'Tóth','Márton','Finanzen'),
	(413486,'Weber','Hans-Peter','Aktuariat'),
	(930256,'Schuster','Jasmin','Vertrieb'),
	(740615,'Schmidt','Lena','Schadenregulierung'),
	(391242,'Krause','Matthias','Finanzen'),
	(672510,'Fischer','Nadine','IT'),
	(139872,'Peters','Janine','Personal'),
	(850493,'Gomez','Sofia','Recht'),
	(764135,'Wang','Liu','Kundenservice'),
	(901234,'Kaufmann','Katharina','Aktuariat'),
	(487321,'Jensen','Hans','Vertrieb'),
	(232319,'Huber','Sarah','Schadenregulierung'),
	(128438,'Mayer','Tobias','Finanzen'),
	(238769,'Bauer','Stefanie','IT'),
	(784968,'Albrecht','Michaela','Personal'),
	(919693,'Nguyen','Minh','Recht'),
	(603951,'Hoffmann','Andreas','Kundenservice'),
	(809346,'Vo','Anh','Aktuariat'),
	(514998,'Berger','Melanie','Vertrieb'),
	(745073,'Schneider','Oliver','Schadenregulierung'),
	(126982,'Lorenz','Stephanie','Finanzen'),
	(319498,'Werner','Markus','IT'),
	(378110,'Müller','Anna-Lena','Personal'),
	(967318,'Ali','Mohammed','Recht'),
	(463129,'Wong','Ming','Kundenservice'),
	(622580,'Brandt','Caroline','Aktuariat'),
	(925377,'Perez','Juan','Vertrieb'),
	(249637,'Becker','Sophie','Schadenregulierung'),
	(462186,'Baumann','Julia','Finanzen'),
	(856390,'Klein','Mark','IT'),
	(679580,'Jäger','Sarah','Personal'),
	(325867,'Santos','Rafael','Recht'),
	(574113,'Lee','Min-Jung','Kundenservice'),
	(201547,'Scholz','Andrea','Aktuariat'),
	(561952,'Krüger','Marius','Vertrieb'),
	(473891,'Roth','Christina','Schadenregulierung'),
	(949362,'Köhler','Tina','Finanzen'),
	(524810,'Schneider','Martin','IT'),
	(850167,'Maier','Sabrina','Personal'),
	(142683,'Kumar','Vikram','Recht'),
	(534263,'Chang','Li','Kundenservice'),
	(837609,'Wagner','Lisa','Aktuariat'),
	(546038,'Bach','Johannes','Vertrieb'),
	(374015,'Hartmann','Monika','Schadenregulierung'),
	(635689,'Wolf','Daniel','Finanzen'),
	(889307,'Schwarz','Simone','IT'),
	(151487,'Graf','Marcel','Personal'),
	(493726,'Ahmed','Zainab','Recht'),
	(258743,'Chen','Wei','Kundenservice'),
	(719385,'Hansen','Sabine','Aktuariat'),
	(358243,'Neumann','Jörg','Vertrieb'),
	(764890,'Lange','Tanja','Schadenregulierung'),
	(183927,'Schmitt','Benjamin','Finanzen'),
	(634102,'Richter','Sandra','IT'),
	(968531,'Wagner','Jana','Personal'),
	(413067,'Santos','Leonor','Recht'),
	(752186,'Kim','Sung','Kundenservice'),
	(815436,'Bender','Jasmin','Vertrieb'),
	(914763,'Schmidt','Jan','Personal'),
	(712345,'Ahmed','Sara','Kundenservice'),
	(568971,'Bauer','Jana','IT'),
	(624015,'Khan','Rania','Schadenregulierung'),
	(479106,'Brandt','Maja','Finanzen'),
	(822360,'Schwarz','Julian','Aktuariat'),
	(705482,'Wang','Chen','Recht'),
	(497821,'Jäger','Andreas','IT'),
	(103275,'Kaya','Melisa','Kundenservice'),
	(340901,'Fuchs','Lara','Vertrieb'),
	(907631,'Schreiber','Ina','Personal'),
	(846720,'Hassan','Mohammed','Kundenservice'),
	(681539,'Werner','Steffi','IT'),
	(531947,'Kumar','Arjun','Schadenregulierung'),
	(309027,'Lorenz','Emma','Finanzen'),
	(936527,'Le','Trang','Aktuariat'),
	(756193,'Kohl','Markus','Recht'),
	(217893,'Thiago','Silva','IT'),
	(201935,'Jung','Minji','Kundenservice'),
	(107923,'Mayer','Tina','Vertrieb'),
	(253194,'Nguyen','Ngoc','Personal'),
	(759631,'Abdullah','Aisha','Schadenregulierung'),
	(530216,'Winter','Heidi','Finanzen'),
	(482703,'Krause','Hans','Aktuariat'),
	(698423,'Fischer','Luis','Recht'),
	(391276,'Bülow','Ingrid','IT'),
	(965381,'Das','Arya','Kundenservice'),
	(154830,'Pohl','Kurt','Vertrieb'),
	(480927,'Wagner','Bianca','Personal'),
	(697150,'Chen','Yi','Kundenservice'),
	(299801,'Keller','Thomas','IT'),
	(146085,'Bui','Tuan','Schadenregulierung'),
	(978631,'Müller','Johannes','Finanzen'),
	(309623,'Kühn','Susanne','Aktuariat'),
	(471859,'Jansen','Anne','Recht'),
	(727410,'Tran','My','IT'),
	(174528,'Ko','Yun','Schadenregulierung');
