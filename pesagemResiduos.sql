create database pesagemResiduos;
drop database pesagemResiduos;

use pesagemResiduos;

create table funcionario(
	codigo int(8) not null primary key auto_increment,
    cpf int(8) not null,
    nome varchar(120) not null,
    telefone varchar(13) not null,
    endereco varchar(150) not null
    
)engine = InnoDB;

create table residuos(
	codigo int(8) not null primary key auto_increment,
	nomeDoItem varchar(120) not null primary key,
    pessoaQueRegistrou varchar(120) not null,
    peso decimal(10,2) not null,
    categoria varchar(120) not null,
    dataRegistro date not null
)engine = InnoDB;

create table categorias(
	codigoCategoria int(8) not null primary key auto_increment,
	categoria varchar(100) not null

)engine = InnoDB;

show tables;
select * from residuos;
select * from funcionario;
select * from categorias;
