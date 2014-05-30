--CREATE DATABASE escola;
--##########################################################
CREATE TABLE alunos (
	codaluno SERIAL PRIMARY KEY,
	aluno VARCHAR (255)
);
CREATE VIEW seleciona_alunos AS
	SELECT codaluno, aluno
	FROM alunos;
--##########################################################	

CREATE TABLE turmas (
	codturma SERIAL PRIMARY KEY,
	turma integer 
);
CREATE VIEW seleciona_turmas AS
	SELECT codturma, turma
	FROM turmas;
--##########################################################	
CREATE TABLE disciplinas (
	coddisciplina SERIAL PRIMARY KEY,
	disciplina VARCHAR(255) 
);
CREATE VIEW seleciona_disciplinas AS
	SELECT coddisciplina, disciplina
	FROM disciplinas;
--##########################################################
CREATE TABLE grades (
	codgrade SERIAL PRIMARY KEY,
	codturma INTEGER REFERENCES turmas (codturma),
	coddisciplina INTEGER REFERENCES disciplinas (coddisciplina)
);
CREATE VIEW seleciona_grades AS
	SELECT codgrade, grade
	FROM grades;
--##########################################################
--##########################################################
CREATE TABLE exercicios (
	codexercicio SERIAL PRIMARY KEY,
	exercicio integer
);
CREATE VIEW seleciona_exercicios AS
	SELECT codexercicio, exercicio
	FROM exercicios;
--##########################################################
CREATE TABLE matriculas (
	codmatricula SERIAL PRIMARY KEY,
	codturma INTEGER REFERENCES turmas (codturma),
	codaluno INTEGER REFERENCES alunos (codaluno),
	codexercicio INTEGER REFERENCES exercicios (codexercicio)	
);
CREATE VIEW seleciona_matriculas AS
	SELECT codmatricula, codturma, codaluno, codexercicio
	FROM matriculas;


--SELECIONANDO UMA VIEW
SELECT
	turmas.turma, alunos.aluno, exercicios.exercicio
FROM
	seleciona_matriculas
LEFT JOIN turmas ON turmas.codturma=seleciona_matriculas.codturma
LEFT JOIN alunos ON alunos.codaluno=seleciona_matriculas.codaluno
LEFT JOIN exercicios ON exercicios.codexercicio=seleciona_matriculas.codexercicio