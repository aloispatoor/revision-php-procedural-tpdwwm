DROP DATABASE IF EXISTS cars;
CREATE DATABASE cars CHARACTER SET utf8;
USE cars;

CREATE TABLE vehicules (
    car_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    constructor VARCHAR (255) NOT NULL,
    modele VARCHAR (255) NOT NULL,
    color VARCHAR (255) NOT NULL,
    km FLOAT NOT NULL,
    release_date DATETIME NOT NULL,
    price FLOAT NOT NULL
);