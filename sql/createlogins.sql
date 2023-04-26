CREATE DATABASE IF NOT EXISTS credentials;

USE credentials;

CREATE TABLE `logins`( 
    `pk_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(30) NOT NULL,
    `password` VARCHAR(30) NOT NULL,
    `site` VARCHAR(10) NOT NULL
);

INSERT INTO logins (username, password, site) VALUES 
('karim', '123456', 'site1'),
('jannik', '123456', 'site2'),
('lukas', '123456', 'site3'),
('mark', '123456', 'site4'),
('leon', '123456', 'site4');



