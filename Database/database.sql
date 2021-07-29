CREATE DATABASE sample_database;

CREATE TABLE users(
    id int (100) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    firstname varchar(100) NOT NULL,
    middlename varchar(100) NOT NULL,
    lastname varchar(100) NOT NULL,
    username varchar(100) NOT NULL,
    password varchar(100) NOT NULL,
    date TIMESTAMP NOT NULL
);