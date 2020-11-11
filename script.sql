create database crudPHP;

use crudPHP;

create table estoque (
	id_estoque int auto_increment,
    nroproduto int not null,
    nomeproduto varchar(200) not null,
    categoria varchar(100) not null,
    quantidade int not null,
    fornecedor varchar(100) not null,
    primary key(id_estoque)
)