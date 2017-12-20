create database pedidos;
use pedidos;

create table plataforma(
	codigo_pk int auto_increment primary key not null,
	codigo varchar(200),
	descripcion varchar(200),
	plataforma varchar(200)
);

create table cliente(
	codigo int not null auto_increment primary key,
	cliente varchar(200),
	sello varchar(200),
	empaque varchar(200)
);

create table material(
	codigo_pk int not null auto_increment primary key,
	codigo int,
	material varchar(200)	
);

create table color(
	codigo_pk int auto_increment primary key not null,
	codigo varchar(200),
	color varchar(200)
	
);

create table estado_pedido(
	codigo int auto_increment primary key not null,
	descripcion varchar(200)
);



create table pedido(
	codigo int auto_increment primary key not null,
	estado varchar(200),
	cliente varchar(200),
	codigo_plataforma varchar(200), 
	descripcion varchar(200),
	material varchar(200),
	color varchar(200),
	plataforma varchar(200),
	sello varchar(200),
	empaque varchar(200),
	talla_34 int,
	talla_35 int,
	talla_36 int,
	talla_37 int,
	talla_38 int,
	talla_39 int,
	talla_40 int,
	total int,
	fecha_entrega date
);

