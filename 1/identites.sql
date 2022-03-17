DROP DATABASE IF EXISTS identites;
CREATE DATABASE identites CHARACTER SET utf8;
USE identites;


CREATE TABLE genders (
    gender_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    gender_name VARCHAR (100) NOT NULL
    
)ENGINE = INNODB;

CREATE TABLE people (
    people_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR (255) NOT NULL,
    surname VARCHAR (255) NOT NULL,
    gender_id INT,
    address VARCHAR (255),
    city VARCHAR (255),
    postal_code INT,
    FOREIGN KEY (gender_id) REFERENCES genders(gender_id)
)ENGINE = INNODB;

INSERT INTO genders (gender_name) VALUES
    ('Femme'),
    ('Homme'),
    ('Autre');