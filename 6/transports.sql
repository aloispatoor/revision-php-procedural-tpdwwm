DROP DATABASE IF EXISTS transports;
CREATE DATABASE transports CHARACTER SET utf8;
USE transports;

CREATE TABLE lignes (
    ligne_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    ligne_name VARCHAR (255) NOT NULL,
    terminus_a VARCHAR (255) NOT NULL,
    terminus_b VARCHAR (255) NOT NULL
);