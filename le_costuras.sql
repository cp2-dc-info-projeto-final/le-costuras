use le_costuras;

CREATE TABLE cliente (
    id int NOT null PRIMARY KEY AUTO_INCREMENT,
    nome varchar (100) NOT null,
    cpf varchar (14) NOT null UNIQUE,
    datadenascimento date NOT null,
    email varchar (200) NOT null UNIQUE,
    senha varchar (20) not null,
    endereco varchar (100) NOT null
    );
    
CREATE TABLE produto (
    id int NOT null PRIMARY KEY AUTO_INCREMENT,
    nome varchar (50) NOT null,
    descricao varchar (200) NOT null,
    tamanho varchar (10) NOT null,
    preco float NOT null
    );
    
CREATE TABLE catalogo (
    id int NOT null PRIMARY KEY AUTO_INCREMENT,
    produto int,
    FOREIGN key (id) REFERENCES produto (id)
    );
    
CREATE TABLE compra(
    id int NOT null PRIMARY KEY AUTO_INCREMENT,
    valor float NOT null,
    formapagamento varchar (20) not null,
    endereco varchar (100) not null
    );
    
CREATE TABLE carrinho (
    id int NOT null PRIMARY KEY AUTO_INCREMENT,
    produto int,
    quantidade int not null,
    valortotal float NOT null,
    FOREIGN KEY (id) REFERENCES produto (id)
    );
    
 CREATE TABLE encomenda (
     id int NOT null PRIMARY KEY AUTO_INCREMENT,
     medidas varchar (10) NOT null,
     descricao varchar (300) NOT null
     );
   
 CREATE TABLE administrador (
     id int NOT null PRIMARY KEY AUTO_INCREMENT,
     nome varchar (100) NOT null,
    cpf varchar (14) NOT null,
    datadenascimento date NOT null,
    email varchar (200) NOT null UNIQUE,
    senha varchar (20) not null,
    endereco varchar (100) NOT null
    );