DROP DATABASE IF EXISTS credentials;
CREATE DATABASE credentials;
USE credentials;

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



