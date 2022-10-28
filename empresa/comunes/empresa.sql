DROP TABLE IF EXISTS departamentos CASCADE;

CREATE TABLE departamentos (
    id bigserial PRIMARY KEY,
    codigo numeric(2) NOT NULL UNIQUE,
    denominacion varchar(255) NOT NULL
);

DROP TABLE IF EXISTS empleados CASCADE;

CREATE TABLE empleados (
    id bigserial PRIMARY KEY,
    numero numeric(4) NOT NULL UNIQUE,
    nombre varchar(255) NOT NULL,
    salario numeric(7, 2) NOT NULL,
    fecha_nac timestamp NOT NULL,
    departamento_id bigint NOT NULL REFERENCES departamentos (id)
);

-- Fixtures:
INSERT INTO departamentos (codigo, denominacion)
    VALUES (10, 'informática'), (20, 'administrativo'), (30, 'Prevención'), (40, 'Laboratorio'), (50, 'Automoción');

INSERT INTO empleados (numero,
    nombre,
    salario,
    fecha_nac,
    departamento_id) (
VALUES (1,
    'Antonio',
    975.85,
    '1993-02-27',
    1),
(2,
    'Lidhia',
    1320,
    '1991-01-06',
    2),
(3,
    'Juan',
    821.62,
    '1996-05-28',
    3),
(4,
    'Joanna',
    1375.50,
    '1997-10-01',
    4),
(5,
    'Cthulu',
    1950.99,
    '1920-11-01',
    5) );