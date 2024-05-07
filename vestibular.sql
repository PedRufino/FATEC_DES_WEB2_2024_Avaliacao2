CREATE database vestibular;
use vestibular;

CREATE TABLE candidatos (
  id int auto_increment PRIMARY KEY NOT NULL,
  nome varchar(100) NOT NULL,
  curso int NOT NULL
);

INSERT INTO candidatos (id, nome, curso) VALUES (1, 'José da Silva', 1);

SELECT * FROM candidatos;
