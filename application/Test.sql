USE inacap;
DROP TABLE Usuario;
CREATE TABLE Usuario(
usuario_id INT(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
nombre VARCHAR(25),
apepat VARCHAR(25),
ciudad_id INT(10),
username VARCHAR(25),
password VARCHAR(25));
 
 
DROP TABLE Ciudad;
CREATE TABLE Ciudad(
ciudad_id INT(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
nombre VARCHAR(25));
 
INSERT INTO Usuario(nombre,apepat,ciudad_id,username,password) VALUES('Ricardo','Toledo',1,'rtoledo','1234');
INSERT INTO Usuario(nombre,apepat,ciudad_id,username,password) VALUES('Juan','Torres',2,'jtorres','1234');
INSERT INTO Usuario(nombre,apepat,ciudad_id,username,password) VALUES('Pedro','Contreras',3,'pcontreras','1234');
 
INSERT INTO Ciudad(nombre) VALUES('Punta Arenas');
INSERT INTO Ciudad(nombre) VALUES('Santiago');
INSERT INTO Ciudad(nombre) VALUES('Arica');
