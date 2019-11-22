USE lecosturas;

CREATE TABLE produto (
	id int PRIMARY KEY  AUTO_INCREMENT,
	nome	varchar(100),	
    preco	float,	
	descricao	varchar(200),
    imagem varchar(400)
);

INSERT INTO produto (id, nome, preco, descricao, imagem) VALUES 
(1, 'Kimono Natasha', 40, 'Kimono branco de mangas curtas estampado com tigres pretos', 'imagemp/1/kestampado.jpeg'),
(2, 'Kimono Mey', 40, 'Kimono preto de mangas curtas com franjas na parte inferior', 'imagemp/2/kfranja.jpeg'),
(3, 'Blusa Aurora', 30, 'Blusa amarela sem mangas com decote em U', 'imagemp/3/bamarela.jpeg'),
(4, 'Blusa Celeste', 30, 'Blusa azul com alças presas por botões', 'imagemp/4/bazul.jpeg'); 

CREATE TABLE usuario (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    email VARCHAR(100)UNIQUE,
    senha VARCHAR(100),
    confirma VARCHAR(100),
    endereco VARCHAR (100),
    moderador BOOLEAN NOT NULL
);

CREATE TABLE venda(
    id INT PRIMARY KEY AUTO_INCREMENT,
    idusuario INT,
    dataa date,
    vtotal float,
    foreign key (idusuario) references usuario(id)
);

CREATE TABLE ProdutoVenda(
    id_produto int,
    id_venda int,
    qtd int,
    primary key (id_produto, id_venda),
    foreign key (id_produto) references produto(id),
    foreign key (id_venda) references venda(id)
);