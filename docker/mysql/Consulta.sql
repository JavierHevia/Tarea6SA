CREATE DATABASE Tarea6;
USE Tarea6;

CREATE TABLE USUARIO(
    idUSUARIO int primary key not null,
    nombre Varchar(30),
    apellido Varchar(30),
    ALTURA INT
);

INSERT INTO USUARIO 
VALUES (
    1,
    'JAVIER',
    'HEVIA',
    182
);

INSERT INTO USUARIO 
VALUES (
    2,
    'MARIA',
    'SAGASTUME',
    172
);

INSERT INTO USUARIO 
VALUES (
    3,
    'JUAN',
    'OLIVA',
    180
);

INSERT INTO USUARIO 
VALUES (
    4,
    'ALEX',
    'GUZMAN',
    180
);

INSERT INTO USUARIO 
VALUES (
    5,
    'JORGE',
    'VELIZ',
    180
);

INSERT INTO USUARIO 
VALUES (
    6,
    'Danna',
    'Paola',
    170
);

INSERT INTO USUARIO 
VALUES (
    7,
    'Paola',
    'Hernandez',
    170
);

INSERT INTO USUARIO 
VALUES (
    8,
    'Ultima2',
    'Prueba2',
    000
);
