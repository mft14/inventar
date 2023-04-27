CREATE DATABASE IF NOT EXISTS inventurdatenbank;
USE inventurdatenbank;

CREATE TABLE IF NOT EXISTS abteilung 
(
     abteilung_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	 bezeichnung VARCHAR(45)
);

CREATE TABLE IF NOT EXISTS raum
(
	raumnummer INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    raumname VARCHAR(45)
);

CREATE TABLE IF NOT EXISTS hersteller 
(
	hersteller_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(45)
);

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
    preis DECIMAL(2),
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
