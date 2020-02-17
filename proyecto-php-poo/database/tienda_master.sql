CREATE DATABASE tienda_master;
USE tienda_master;

CREATE TABLE usuarios(
id_usuario 	int(255) auto_increment not null,
nombre	    varchar(255) not null,
apellidos	varchar(255),
email		varchar(255) not null,
password	varchar(255) not null,
role		varchar(20),
imagen		varchar(255),
CONSTRAINT pk_usuarios PRIMARY KEY(id_usuario),
CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDb;

INSERT INTO usuarios VALUES(NULL, 'Admin', 'Admin', 'admin@admin.com', '12345', 'admin', null);

CREATE TABLE categorias(
id_categoria 	int(255) auto_increment not null,
nombre	    	varchar(255) not null,
CONSTRAINT pk_categorias PRIMARY KEY(id_categoria)
)ENGINE=InnoDb;

INSERT INTO categorias VALUES(NULL, 'Manga Corta');
INSERT INTO categorias VALUES(NULL, 'Tirantes');
INSERT INTO categorias VALUES(NULL, 'Manga Larga');
INSERT INTO categorias VALUES(NULL, 'Sudadera');

CREATE TABLE productos(
id_producto 		int(255) auto_increment not null,
descripcion	    	text,
nombre              varchar(255),
precio				float(100,2) not null,
fk_id_categoria		int(255) not null,
stock				int(255) not null,
oferta				varchar(2),
fecha				date not null,
imagen				varchar(255),
CONSTRAINT pk_producto PRIMARY KEY(id_producto),
CONSTRAINT fk_producto_categoria FOREIGN KEY(fk_id_categoria) REFERENCES categorias(id_categoria)
)ENGINE=InnoDb;

CREATE TABLE pedidos(
id_pedido		int(255) auto_increment not null,
fk_id_usuario	int(255) not null,
provincia		varchar(100) not null,
localidad 		varchar(100) not null,
direccion		varchar(255) not null,
coste 			float(250,2) not null,
estado			varchar(255) not null,
fecha			date,
hora 			time,

CONSTRAINT pk_pedidos PRIMARY KEY(id_pedido),
CONSTRAINT fk_pedido_usuario FOREIGN KEY(fk_id_usuario) REFERENCES usuarios(id_usuario)
)ENGINE=InnoDb;

CREATE TABLE lineas_pedidos(
id_lp		int(255) auto_increment not null,
fk_id_pedido		int(255) not null,
fk_id_producto		int(255) not null,

CONSTRAINT pk_lineas_pedidos PRIMARY KEY(id_lp),
CONSTRAINT fk_linea_pedido FOREIGN KEY(fk_id_pedido) REFERENCES pedidos(id_pedido),CONSTRAINT fk_linea_producto FOREIGN KEY(fk_id_producto) REFERENCES productos(id_producto)
)ENGINE=InnoDb;