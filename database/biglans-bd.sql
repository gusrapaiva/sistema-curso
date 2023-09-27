create database biglans;
use biglans;

create table curso(	nome varchar(30) not null, 
					cHora numeric(5) not null, 
					id char(3) primary key);
                    
insert into curso values ('Linux Experts', 75, 123);

create table aluno(	nome varchar(35) not null, 
					cpf char(11) unique not null, 
					email varchar(30) not null, 
                    fk_cursoId char(3) not null,
                    foreign key (fk_cursoId) REFERENCES curso (id),
                    alunoId int auto_increment primary key,
                    presenca numeric(3),
                    av1 numeric(3),
                    av2 numeric(3),
                    av3 numeric(3),
                    av4 numeric(3),
                    media numeric(3));
                    

insert into aluno (nome, cpf, email, fk_cursoId) values ('Gustavo Paiva', 12345678910, 'gustavo@gmail.com', 123);
select * from aluno;
desc aluno;
                    
create table professor(	nome varchar(35) not null,
						email varchar(30) not null,
                        senha char(4) not null);

insert into professor values ('Israel Lucania', 'israel@gmail.com', 1234);
select * from professor;
        
        
        
        /* drop table aluno;
        drop table curso; */
        
        /* SET SQL_SAFE_UPDATES = 0;
        delete from aluno where fk_cursoId = 123;
        SET SQL_SAFE_UPDATES = 1; */
