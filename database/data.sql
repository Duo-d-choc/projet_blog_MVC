CREATE DATABASE IF NOT EXISTS `my_db`;
USE my_db;

CREATE TABLE IF NOT EXISTS `User` (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    pseudo VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    password VARCHAR(30) NOT NULL,
    status VARCHAR(10) NOT NULL
);

CREATE TABLE IF NOT EXISTS `Article` (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    id_user INT(6) NOT NULL,
    title VARCHAR(60) NOT NULL,
    content VARCHAR(5000) NOT NULL,
    date datetime default CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS `Comment`
(
    id         INT(6) AUTO_INCREMENT PRIMARY KEY,
    id_user    INT(6)        NOT NULL,
    id_article INT(6)        NOT NULL,
    content    VARCHAR(1000) NOT NULL,
    date       DATETIME default CURRENT_TIMESTAMP
);