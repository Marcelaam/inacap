use inacap;
drop table Usuario;
create table Usuario(
usuario_id int(10) primary key not null auto_increment,
nombre varchar(25),
apepat varchar(25),
ciudad_id int(10));

drop table Ciudad;
create table Ciudad(
ciudad_id int(10) primary key not null auto_increment,
nombre varchar(25));

insert into Usuario(nombre,apepat,ciudad_id) values('Ricardo','Toledo',1);
insert into Usuario(nombre,apepat,ciudad_id) values('Juan','Perez',2);
insert into Usuario(nombre,apepat,ciudad_id) values('Pedro','Contreras',3);

insert into Ciudad(nombre) values('Punta Arenas');
insert into Ciudad(nombre) values('Santiago');
insert into Ciudad(nombre) values('Arica');
