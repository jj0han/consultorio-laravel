CREATE TABLE doutores (
    id integer NOT NULL,
    nome character varying(200),
    cpf character varying(11),
    figura character varying(200),
);

CREATE TABLE pacientes (
    id integer NOT NULL,
    nome character varying(200),
    cpf character varying(11),
    data_nascimento date,
    figura character varying(200),
    updated_at date,
    created_at date,
);


CREATE TABLE consultas (
  id SERIAL PRIMARY KEY,
  id_paciente INTEGER,
  id_doutor INTEGER,
  data DATE,
  descricao TEXT,
  updated_at date,
  created_at date,

  FOREIGN KEY (id_paciente) REFERENCES pacientes (id),
  FOREIGN KEY (id_doutor) REFERENCES doutores (id)
);