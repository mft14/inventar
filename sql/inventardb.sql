DROP DATABASE IF EXISTS inventardatenbank;
CREATE DATABASE inventardatenbank;
USE inventardatenbank;

CREATE TABLE IF NOT EXISTS abteilung 
(
     abteilung_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	 bezeichnung VARCHAR(45)
);

INSERT INTO abteilung (bezeichnung) VALUES
('Vertrieb'),
('IT'),
('Schadenregulierung'),
('Finanzen'),
('Personal'),
('Recht'),
('Kundenservice'),
('Aktuariat');

CREATE TABLE IF NOT EXISTS raum
(
	raumnummer INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    raumname VARCHAR(45)
);

INSERT INTO raum (raumname) VALUES
('Küche'),
('Mitarbeiter Ahrens'),
('Mitarbeiter Müller'),
('Mitarbeiter Meier'),
('Mitarbeiter Mustermann'),
('Büro Einkauf'),
('Büro Verkauf'),
('Büro IT'),
('Büro Recht'),
('Büro Kundenservice'),
('Chefraum');

CREATE TABLE IF NOT EXISTS hersteller 
(
	hersteller_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(45)
);

INSERT INTO hersteller (name) VALUES
('Bosch'),
('Shimano'),
('Fender'),
('Fedex'),
('Michelin'),
('Red Bull'),
('Yamaha'),
('Lenovo');


CREATE TABLE IF NOT EXISTS kategorie
(
	kategorie_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    beschreibung VARCHAR(45),
    oberkategorie_id INT,
    FOREIGN KEY (oberkategorie_id)
    	REFERENCES kategorie (kategorie_id)
);

CREATE TABLE IF NOT EXISTS modell
(
	modell_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    bezeichnung VARCHAR(45),
    beschreibung VARCHAR(45),
    kategorie_id INT,
    hersteller_id INT,
    FOREIGN KEY (kategorie_id)
    	REFERENCES kategorie (kategorie_id),
    FOREIGN KEY (hersteller_id)
    	REFERENCES hersteller (hersteller_id)
);

CREATE TABLE IF NOT EXISTS mitarbeiter
(
	personalnummer INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(45),
    vorname VARCHAR(45),
    abteilung_id INT,
    FOREIGN KEY(abteilung_id)
    	REFERENCES abteilung (abteilung_id)
);


CREATE TABLE IF NOT EXISTS inventar
(
	inventarnummer INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    beschaffungsdatum DATE,
    preis DECIMAL(10),
    seriennummer VARCHAR(45),
    anmerkung VARCHAR(45),
    modell_id INT,
    raumnummer INT,
    FOREIGN KEY (modell_id)
    	REFERENCES modell (modell_id),
    FOREIGN KEY (raumnummer)
    	REFERENCES raum (raumnummer)
);


CREATE TABLE IF NOT EXISTS verantwortlichkeit 
(
	verantwortlichkeits_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    inventarnummer INT,
    personalnummer INT,
    von DATE,
    bis DATE,
    FOREIGN KEY(personalnummer)
    	REFERENCES mitarbeiter (personalnummer),
    FOREIGN KEY (inventarnummer)
    	REFERENCES inventar (inventarnummer)
);

CREATE TABLE `logins`( 
    `pk_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(30) NOT NULL,
    `password` VARCHAR(30) NOT NULL,
    `role` VARCHAR(10) NOT NULL
);

INSERT INTO logins (username, password, role) VALUES 
('admin', '123456', 'abt'),
('admin', '123456', 'it1'),
('admin', '123456', 'it2'),
('admin', '123456', 'pers'),
('karim', '123456', 'pers'),
('jannik', '123456', 'it1'),
('lukas', '123456', 'it1'),
('lukas', '123456', 'it3'),
('mark', '123456', 'pers'),
('mark', '123456', 'it2'),
('leon', '123456', 'abt'),
('leon', '123456', 'pers'),
('leon', '123456', 'it1');


INSERT INTO kategorie (kategorie_id, beschreibung, oberkategorie_id)
VALUES
('1', 'PC', '1'),
('2', 'Monitor', '1'),
('3', 'Drucker', '1'),
('4', 'Tastatur', '1'),
('5', 'Maus', '1'),
('6', 'Laptop', '1'),
('7', 'Schreibtisch', NULL),
('8', 'Stuhl', NULL),
('9', 'Scanner', '3'),
('10', 'Projektor', NULL);

INSERT INTO modell (modell_id, bezeichnung, beschreibung, kategorie_id, hersteller_id)
VALUES
('1', 'Thinkpad T460s', 'Leichtes und leistungsstarkes Business-Laptop', '6', '1'),
('2', 'Dell XPS 15', 'Hochauflösendes Display und leistungsstarker Prozessor', '6', '2'),
('3', 'HP EliteBook 840 G7', 'Robustes und sicheres Business-Notebook', '6', '3'),
('4', 'Apple MacBook Pro', 'Stilvolles und leistungsstarkes Notebook für Kreative', '6', '4'),
('5', 'Samsung QLED Q90T', 'Großer 4K-QLED-Fernseher mit herausragender Bildqualität', '6', '5'),
('6', 'Acer Predator Helios 300', 'Leistungsstarkes Gaming-Notebook mit schnellem Prozessor und Grafikkarte', '6', '6'),
('7', 'Canon EOS 5D Mark IV', 'Professionelle DSLR-Kamera mit hoher Auflösung und erweiterbaren Funktionen', '6', '7'),
('8', 'Sony PlayStation 5', 'Next-Gen-Spielekonsole mit leistungsstarker Hardware und innovativen Features', '6', '8'),
('9', 'Bose QuietComfort 35 II', 'Hochwertiger kabelloser Kopfhörer mit Noise-Cancelling-Technologie', '10', '6'),
('10', 'Samsung Galaxy S21 Ultra', 'Flaggschiff-Smartphone mit großem Display, leistungsstarker Kamera und erweiterter Funktionalität', '6', '8');

INSERT INTO `inventar` (`inventarnummer`, `beschaffungsdatum`, `preis`, `seriennummer`, `anmerkung`, `modell_id`, `raumnummer`)
VALUES 
(NULL, '2023-01-01', '15', '156151616', 'Guter Zustand', '6', '6'),
(NULL, '2023-02-01', '16', '156151617', 'Guter Zustand', '1', '6'),
(NULL, '2023-03-01', '15', '156151618', 'Guter Zustand', '6', '3'),
(NULL, '2023-04-01', '14', '156151619', 'Guter Zustand', '6', '5'),
(NULL, '2023-05-01', '8', '1561516120', 'Guter Zustand', '7', '7'),
(NULL, '2023-06-01', '45', '156151621', 'Guter Zustand', '6', '3'),
(NULL, '2023-07-01', '15', '156151622', 'Guter Zustand', '4', '2'),
(NULL, '2023-08-01', '15', '156151623', 'Guter Zustand', '6', '1'),
(NULL, '2023-09-01', '16', '156151624', 'Guter Zustand', '5', '5'),
(NULL, '2023-10-01', '19', '156151625', 'Guter Zustand', '4', '3');


CREATE TABLE IF NOT EXISTS mitarbeiter
(
	personalnummer INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(45),
    vorname VARCHAR(45),
    abteilung_id INT,
    FOREIGN KEY(abteilung_id)
    	REFERENCES abteilung (abteilung_id)
);

INSERT INTO `mitarbeiter` (`personalnummer`, `name`, `vorname`, `abteilung_id`)
VALUES
(NULL, 'Dipper', 'TjARK', '1'),
(NULL, 'Ahrens', 'Kevin', '2'),
(NULL, 'Holthusen', 'Jannik', '3'),
(NULL, 'Steffens', 'Dominik', '4'),
(NULL, 'Müller', 'Johannes', '5'),
(NULL, 'Möller', 'Adrian', '6'),
(NULL, 'Holst', 'Glenn', '7'),
(NULL, 'Eckhof', 'Marvin', '8');

INSERT INTO `verantwortlichkeit` (`verantwortlichkeits_id`, `inventarnummer`, `personalnummer`, `von`, `bis`)
VALUES
(NULL, '1', '1', '2023-01-01', '2023-02-01'),
(NULL, '2', '2', '2023-01-01', '2023-02-01'),
(NULL, '3', '3', '2023-02-01', '2023-03-01'),
(NULL, '4', '4', '2023-03-01', '2023-04-01');
