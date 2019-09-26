CREATE TABLE produto (
	id int PRIMARY KEY,
	nome	varchar(100),	
    preco	varchar(100),	
	descricao	longtext
);

CREATE TABLE usuario (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    email VARCHAR(100)UNIQUE,
    datanasc DATE,
    senha VARCHAR(100),
    endereco VARCHAR (100)
);
