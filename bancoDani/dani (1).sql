create database ETEC;
use ETEC;

create table Convidados(
id_convidados int  auto_increment not null primary key,
Nome varchar(255) not null ,
Acompanhantes int not null)

 SELECT *FROM Convidados;
 desc Convidados;
 
 delete from Convidados;
 
 insert into Convidados(Nome,Acompanhantes)values
 ('daniela', '4'),
  ('maria', '14'),
 ('juliana','20');

delete from Convidados where id_convidados;