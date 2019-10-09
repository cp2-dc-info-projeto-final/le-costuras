CREATE TABLE produto (
	id int PRIMARY KEY  AUTO_INCREMENT,
	nome	varchar(100),	
    preco	float,	
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

CREATE TABLE carrinho (
    id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    cod INT(10),
    nome VARCHAR(150),
    preco float,
    qtd INT(20),
    sessao TEXT
                                                                                                                                         -
);

