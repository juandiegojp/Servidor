DROP TABLE IF EXISTS departamentos CASCADE;

CREATE TABLE departamentos (
    id bigserial PRIMARY KEY,
    codigo numeric(2) NOT NULL UNIQUE,
    denominacion varchar(255) NOT NULL
);

-- Fixtures:

INSERT INTO departamentos (codigo, denominacion)
    values (10, 'informática'),
            (20, 'administrativo'),
            (30, 'Prevención'),
            (40, 'Laboratorio'),
            (50, 'Automoción');