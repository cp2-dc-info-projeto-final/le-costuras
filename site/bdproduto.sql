CREATE TABLE feminino (
	id int PRIMARY KEY,
	nome	varchar(100),	
    preco	varchar(100),	
	descricao	longtext
);

CREATE TABLE masculino (
	id int PRIMARY KEY,
	nome	varchar(100),	
    preco	varchar(100),	
	descricao	longtext
);

CREATE TABLE infantil (
	id int PRIMARY KEY,
	nome	varchar(100),	
    preco	varchar(100),	
	descricao	longtext
);


CREATE TABLE promocao (
	id int PRIMARY KEY,
	nome	varchar(100),	
    precoantigo	varchar(100),
	preconovo VARCHAR (100),	
	descricao	longtext
);

INSERT INTO feminino (id, nome, preco, descricao)
VALUES ('01', 'Kimono Com Franja' ,'R$45,00', ''), ('02', 'Saia jeans Com Detalhe Lateral', 'R$40,00', 'Detalhe em Malha' 
),('03','Saia Transpassada',  'R$40,00', 'Cetim');

INSERT INTO masculino (id, nome, preco, descricao)
VALUES ('04', 'Samba-Canção','R$15,00','Cetim'), ('05', 'Samba-Canção','R$20,00','Seda'), ('06','Bermuda','R$25,00','Oxford');

INSERT INTO infantil (id, nome, preco, descricao)
VALUES ('07','Vestido Listrado','R$20,00','Malha');