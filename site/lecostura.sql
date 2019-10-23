<<<<<<< HEAD
=======
CREATE TABLE produto (
	id int PRIMARY KEY  AUTO_INCREMENT,
	nome	varchar(100),	
    preco	float,	
	descricao	varchar(200)
);

>>>>>>> 5f9c8f074d2abd2e542eee549a5163d79a78e465
CREATE TABLE usuario (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    email VARCHAR(100)UNIQUE,
    senha VARCHAR(100),
    confirma VARCHAR(100),
    endereco VARCHAR (100)
);

CREATE TABLE carrinho_produtos (
    produto_id INT PRIMARY KEY  AUTO_INCREMENT,
    produto_nome VARCHAR(100),  
    produto_preco DECIMAL(3,2), 
    produto_descricao TEXT
);

CREATE TABLE carrinho_pedidos (
    pedido_id INT(10) PRIMARY KEY AUTO_INCREMENT,
    pedido_produto INT(10),
    pedido_qtde INT(10),
    pedido_preco DECIMAL(3,2),
    pedido_cliente VARCHAR (255),
    pedido_data DATETIME,
    pedido_sessao INT(10)
);

CREATE TABLE carrinho_temporario (
    temporario_id INT(10) PRIMARY KEY AUTO_INCREMENT,
    temporario_produto INT(10),
    temporario_qtde INT(10),
    temporario_preco DECIMAL(3,2),
    temporario_cliente VARCHAR (255),
    temporario_data DATETIME,
    temporario_sessao INT(10)
);
