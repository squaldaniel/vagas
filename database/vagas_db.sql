create database vagas;
use vagas;

create table users(
	id bigint auto_increment primary key,
	email varchar(80),
	snhpwd text,
	active boolean default false,
	create_in datetime DEFAULT CURRENT_TIMESTAMP,
	deleted_in datetime DEFAULT CURRENT_TIMESTAMP
)engine=innodb charset=utf8mb4;

create table skill (
	id bigint auto_increment primary key,
	nome_skill varchar(100),
	categoria enum("backend", "frontend", "cloud",
		"infraestrutura", "redes", "design", "suporte",
		"mobile", "servidores", "hardware", "pentest",
		"machine learning", "big data", "metodologias ageis")
)engine=innodb charset=utf8mb4;

create table user_to_skill(
	id bigint auto_increment primary key,
	useremail bigint references users(id),
	skill bigint references skill(id),
	user_level enum ("estagiario", "junior", "pleno", "senior"),
	unique(useremail, skill, user_level)
)engine=innodb charset=utf8mb4;


insert into users(email) values ("hogans@crazy.com.br");
insert into users(email) values ("daniels@crazy.com.br");

insert into skill (nome_skill, categoria) values ("php", "backend"),
("nodejs", "backend"), ("react", "frontend"), ("Angular", "frontend"),
("AWS", "cloud"), ("python", "backend"), ("python", "big data");

insert into user_to_skill (useremail, skill, user_level) values (1, 2, "junior"),
(1, 4, "junior"), (1, 5, "pleno");

insert into user_to_skill (useremail, skill, user_level) values (2, 1, "junior"),
(2, 2, "pleno"), (2, 3, "pleno"), (2, 4, "senior");

create view user_habil as
	select 
		a.email,
		c.nome_skill,
		b.user_level
	from
		users a
		inner join user_to_skill b on a.id=b.useremail
		inner join skill c on b.skill=c.id;



