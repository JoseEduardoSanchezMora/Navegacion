drop database if exists iot;
create database if not exists iot;
use iot;
create table if not exists usuario(
usuario varchar(30) not null,
pass varchar(13)not null,
correo varchar(50) not null)
engine=InnoDB;
desc usuario;

insert into usuario value("Jose","12345678","j.eduardosanchezmora4@gmail.com");
insert into usuario value("Fransisco","87654321","franksanchez@gmail.com");
select * from usuario;