CREATE DATABASE erp;
CREATE TABLE users (
    id_user INT PRIMARY KEY UNIQUE NOT NULL,
    username VARCHAR(45) UNIQUE NOT NULL,
    password VARCHAR(45) NOT NULL,
    first_name VARCHAR(45) NOT NULL,
    last_name VARCHAR(45) NOT NULL
);

INSERT INTO users(username, password, first_name, last_name) VALUES ("admin", md5("Teste@123"), "José", "Silva");