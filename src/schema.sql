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
(4, 'Blusa Celeste', 30, 'Blusa azul com alças presas por botões', 'imagemp/4/bazul.jpeg'),
(5, 'Vestido Gabi', 30, 'Vestido infantil sem mangas em listras pretas, brancas e beges.', 'imagemp/5/vesinf.jpg'),
(6, 'Kimono Angel', 40, 'Kimono de magas, em renda branca com detalhes em flores.', 'imagemp/6/krenda.jpg'),
(7, 'Blusa Katy', 30, 'Blusa preta em alças finas e decote em U, com estampa delicada em flores.', 'imagemp/7/bpreta.jpg'),
(8, 'Pantalona Patricia', 40, 'Calça pantalona longa em listras verticais com cinto de tecido incluso.', 'imagemp/8/calca.jpg');

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

CREATE TABLE produtovenda(
    id int,
    id_produto int,
    id_venda int,
    qtd int,
    primary key (id),
    foreign key (id_produto) references produto(id),
    foreign key (id_venda) references venda(id)
);
