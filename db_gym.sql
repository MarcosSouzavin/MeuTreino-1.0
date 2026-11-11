CREATE DATABASE IF NO EXIST mt_db 
CHARACTER SET utf8mb4 COLLATE
utf8mb4_unicode_ci;

USE mt_db;

CREATE TABLE planos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR (50),
    preco DECIMAL (10,2),
    cpf CHAR (11),
    is_pro BOOLEAN DEFAULT FALSE,
    ativo BOOLEAN DEFAULT TRUE
);

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR (100) NOT NULL,
    email VARCHAR (100) NOT NULL UNIQUE,
    senha VARCHAR (255) NOT NULL,
    plano_id INT NOT NULL,
    objetivo VARCHAR (50) DEFAULT 'Hipertrofia',
    data_criacao     
);