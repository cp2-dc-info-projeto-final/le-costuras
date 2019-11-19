USE lecosturas;

CREATE TABLE produto (
	id int PRIMARY KEY  AUTO_INCREMENT,
	nome	varchar(100),	
    preco	float,	
	descricao	varchar(200),
    imagem varchar(400),
);

INSERT INTO produto (id, nome, preco, descricao, imagem) VALUES 
(1, 'Kimono Estampado', 40, 'Kimono branco de mangas curtas estampado com tigres pretos', 'imagemp/1/kestampado.jpeg'),
(2, 'Kimono Franja', 40, 'Kimono preto de mangas curtas com franjas na parte inferior', 'imagemp/2/kfranja.jpeg'),
(3, 'Blusa Amarela', 30, 'Blusa amarela sem mangas com decote em U', 'imagemp/3/bamarela.jpeg'),
(4, 'Blusa Azul', 30, 'Blusa azul com alças presas por botões', 'imagemp/4/bazul.jpeg'); 

CREATE TABLE usuario (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    email VARCHAR(100)UNIQUE,
    senha VARCHAR(100),
    confirma VARCHAR(100),
    endereco VARCHAR (100),
    moderador BOOLEAN NOT NULL
);


CREATE TABLE carrinho_pedidos (
    pedido_id INT(10) PRIMARY KEY AUTO_INCREMENT,
    pedido_qtde INT(10),
    pedido_preco DECIMAL(3,2),
    pedido_cliente VARCHAR (255),
    pedido_data DATETIME,
    pedido_valor_total DECIMAL (10,2),
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


