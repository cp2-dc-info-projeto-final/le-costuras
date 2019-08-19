CREATE TABLE usuario (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    email VARCHAR(100)UNIQUE,
    datanasc DATE,
    senha VARCHAR(100),
    confirma VARCHAR (100),
    cpf VARCHAR (14)UNIQUE,
    endereco VARCHAR (100)
);








