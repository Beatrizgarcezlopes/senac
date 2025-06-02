BEGIN TRANSACTION;
CREATE TABLE IF NOT EXISTS "alunos" (
	"id_aluno"	INTEGER,
	"nome"	TEXT NOT NULL,
	"idade"	INTEGER,
	"fone"	TEXT,
	PRIMARY KEY("id_aluno" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "cursos" (
	"id_curso"	INTEGER,
	"nome"	TEXT NOT NULL,
	"cargahoraria"	INTEGER,
	PRIMARY KEY("id_curso" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "professores" (
	"id_prof"	INTEGER,
	"nome"	TEXT NOT NULL,
	"salario"	REAL,
	PRIMARY KEY("id_prof" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "aulas" (
	"id_aulas"	INTEGER,
	"id_curso"	INTEGER,
	"id_aluno"	INTEGER,
	"id_prof"	INTEGER,
	"data"	TEXT NOT NULL,
	"hora"	TEXT NOT NULL,
	PRIMARY KEY("id_aulas" AUTOINCREMENT),
	FOREIGN KEY("id_curso") REFERENCES "cursos"("id_curso"),
	FOREIGN KEY("id_aluno") REFERENCES "alunos"("id_aluno"),
	FOREIGN KEY("id_prof") REFERENCES "professores"("id_prof")
);
INSERT INTO "alunos" ("id_aluno","nome","idade","fone") VALUES (1,'Lucca',16,'54004900669869');
INSERT INTO "alunos" ("id_aluno","nome","idade","fone") VALUES (2,'Rafael',18,'54950950907');
INSERT INTO "alunos" ("id_aluno","nome","idade","fone") VALUES (3,'Rodolfo',16,'43790797966');
INSERT INTO "alunos" ("id_aluno","nome","idade","fone") VALUES (4,'Isabelle',18,'54097979770');
INSERT INTO "alunos" ("id_aluno","nome","idade","fone") VALUES (5,'Yasmim',17,'54689696009');
INSERT INTO "alunos" ("id_aluno","nome","idade","fone") VALUES (6,'Amanda',16,'54995909');
INSERT INTO "cursos" ("id_curso","nome","cargahoraria") VALUES (1,'Guitarra','4h');
INSERT INTO "cursos" ("id_curso","nome","cargahoraria") VALUES (2,'Danca','4h');
INSERT INTO "cursos" ("id_curso","nome","cargahoraria") VALUES (3,'Piano','4h');
INSERT INTO "cursos" ("id_curso","nome","cargahoraria") VALUES (4,'Flauta','4h');
INSERT INTO "cursos" ("id_curso","nome","cargahoraria") VALUES (5,'Bateria','4h');
INSERT INTO "professores" ("id_prof","nome","salario") VALUES (1,'Samanta','500,00');
INSERT INTO "professores" ("id_prof","nome","salario") VALUES (2,'Alexandra','600,00');
INSERT INTO "professores" ("id_prof","nome","salario") VALUES (3,'Thais','700,00');
INSERT INTO "professores" ("id_prof","nome","salario") VALUES (4,'Wallance','800,00');
INSERT INTO "professores" ("id_prof","nome","salario") VALUES (5,'Paula','129,00');
INSERT INTO "aulas" ("id_aulas","id_curso","id_aluno","id_prof","data","hora") VALUES (1,1,1,1,'02/06/2025','11:30');
INSERT INTO "aulas" ("id_aulas","id_curso","id_aluno","id_prof","data","hora") VALUES (2,2,2,2,'03/06/2025','11:45');
INSERT INTO "aulas" ("id_aulas","id_curso","id_aluno","id_prof","data","hora") VALUES (3,3,3,3,'04/06/2025','12:30');
INSERT INTO "aulas" ("id_aulas","id_curso","id_aluno","id_prof","data","hora") VALUES (4,4,4,4,'05/06/2025','13:30');
INSERT INTO "aulas" ("id_aulas","id_curso","id_aluno","id_prof","data","hora") VALUES (5,5,5,5,'06/06/2025','14:30');
COMMIT;
