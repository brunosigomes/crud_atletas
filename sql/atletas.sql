CREATE DATABASE IF NOT EXISTS crud_atletas;
USE crud_atletas;

CREATE TABLE atletas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_completo VARCHAR(100) NOT NULL,
    apelido VARCHAR(50),
    data_nascimento DATE,
    altura DECIMAL(3,2),
    peso DECIMAL(5,2),
    posicao VARCHAR(50),
    numero_camisa INT
);
