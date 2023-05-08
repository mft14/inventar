DROP DATABASE credentials;

CREATE DATABASE IF NOT EXISTS credentials;

USE credentials;

CREATE TABLE `logins`( 
    `pk_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(30) NOT NULL,
    `password` VARCHAR(30) NOT NULL,
    `site` VARCHAR(10) NOT NULL
);

INSERT INTO logins (username, password, site) VALUES 
('admin', '123456', 'abt'),
('admin', '123456', 'it1'),
('admin', '123456', 'it2'),
('admin', '123456', 'pers'),
('karim', '123456', 'pers'),
('jannik', '123456', 'it1'),
('lukas', '123456', 'it3'),
('mark', '123456', 'pers'),
('leon', '123456', 'abt');



