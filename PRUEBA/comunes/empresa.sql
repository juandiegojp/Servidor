DROP TABLE IF EXISTS libros CASCADE;

CREATE TABLE libros (
    id bigserial PRIMARY KEY,
    titulo varchar(255) NOT NULL UNIQUE,
    fecha_lanzamiento timestamp NOT NULL,
    autor varchar(255) NOT NULL,
    categoria varchar(255) NOT NULL,
    editorial varchar(255) NOT NULL
);

DROP TABLE IF EXISTS alquileres CASCADE;

CREATE TABLE alquileres (
    id bigserial PRIMARY KEY,
    id_lector bigint NOT NULL REFERENCES lectores (id),
    id_libro bigint NOT NULL REFERENCES libros (id),
    fecha_salida timestamp NOT NULL,
    fecha_entrada timestamp NOT NULL
);

DROP TABLE IF EXISTS lectores CASCADE;

CREATE TABLE lectores (
    id bigserial PRIMARY KEY,
    nombre varchar(255) NOT NULL,
    dni varchar(9) NOT NULL UNIQUE,
    tfl numeric(9) NOT NULL UNIQUE,
    localidad varchar(255) NOT NULL
);


-- Fixtures:
INSERT INTO libros (titulo, fecha_lanzamiento, autor, categoria, editorial)
    VALUES ('Las Crónicas de Narnia', '1997-10-01', 'C. S. Lewis', 'Fantasía', 'Salamandra'),
            ('Dune', '1965-01-06', 'Frank Herbert', 'Ciencia-Ficción', 'DeBolsillo'),
            ('Harry Potter', '1993-08-22', 'JK Rowling', 'Fantasía', 'Salamandra');

INSERT INTO alquileres (id_lector, id_libro, fecha_salida, fecha_entrada)
    VALUES (1, 2, '2017-08-22', '2017-09-10'), 
    (2, 1, '2017-08-22', '2017-09-10'), 
    (1, 1, '2018-01-16', '2018-02-10');

INSERT INTO lectores (nombre, dni, tfl, localidad)
    VALUES ('Juan', '20073238B', 622199719, 'Chipiona'),
    ('Diego', '20073237X', 622199520, 'Sanlúcar'),
    ('Amelia', '20073236C', 627646174, 'Jerez')
