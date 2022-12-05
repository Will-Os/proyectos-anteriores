USE [master]
GO

CREATE DATABASE [EvanDB] 
GO

USE [EvanDB]
GO

CREATE TABLE cliente(
	rut_cliente varchar(12) PRIMARY KEY,
	nombre_cliente varchar(60) not null,
	nombre_usuario varchar(60) not null,
	contrasena varchar(60) not null,
	dinero_cuenta numeric(7) not null,
	constraint UN_UNIQUE unique(nombre_usuario)
);

CREATE TABLE comida(
	id_comida numeric(7) identity(1,1) primary key,
	nombre_plato varchar(30) not null,
	descripcion_plato text not null,
	imagen varchar(100) not null,
	precio numeric(7) not null
);

CREATE TABLE pedido(
	id_pedido numeric(7) identity(1,1) primary key,
	rut_cliente varchar(12) not null,
	id_comida numeric(7) not null,
	direccion varchar(60) not null
	CONSTRAINT fk_rut_cli FOREIGN KEY (rut_cliente) REFERENCES cliente(rut_cliente),
	CONSTRAINT fk_nplato FOREIGN KEY (id_comida) REFERENCES comida(id_comida)
);
