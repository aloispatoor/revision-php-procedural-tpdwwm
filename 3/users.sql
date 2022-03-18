DROP DATABASE IF EXISTS users;
CREATE DATABASE users CHARACTER SET utf8;
USE users;

CREATE TABLE users (
    user_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR (255) NOT NULL,
    email VARCHAR (255) NOT NULL,
    password VARCHAR (255) NOT NULL
);