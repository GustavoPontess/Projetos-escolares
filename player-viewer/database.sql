create database jogador;
use jogador;

create table informacoes(
numero_camisa int auto_increment primary key not null,
clube varchar(80) not null,
posicao varchar(80) not null,
nome varchar(80) not null
) engine InnoDB;

insert into informacoes values (null, 'Cruzeiro', 'Meia', 'Arthur');
select * from informacoes;