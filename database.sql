create database atividade_pratica_2_isabela;
use atividade_pratica_2_isabela;

create table cliente (
	id_cliente int primary key auto_increment not null,
    nome_completo_cliente varchar(70),
    cpf_cliente varchar(11),
    email_cliente varchar(50),
    telefone_cliente varchar(11)
);

create table funcionario (
	id_funcionario int primary key auto_increment not null,
    nome_funcionario varchar(70),
    cpf_funcionario varchar(11),
    email_funcionario varchar(50),
    telefone_funcionario varchar(11)
);

create table solicitacao (
	id_solicitacao int primary key auto_increment not null,
    desc_solicitacao varchar(200),
    urgencia_solicitacao enum('Baixa', 'Média', 'Alta'),
    status_solicitacao enum('Pendente', 'Em andamento', 'Finalizada'),
    data_abertura_solicitacao date,
    fk_cliente int,
    fk_funcionario int,
    foreign key (fk_cliente) references cliente (id_cliente),
    foreign key (fk_funcionario) references funcionario (id_funcionario)
);