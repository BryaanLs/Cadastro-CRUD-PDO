create database if not exists crudpdo;

create table if not exists usuario(
	id int primary key auto_increment,
    nome varchar(100),
    email varchar(50),
    sexo varchar(30),
    apelido varchar(50)
    )default charset utf8mb4;

