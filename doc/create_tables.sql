SET foreign_key_checks = 0;
-- DROP TABLE administrador;
DROP TABLE IF EXISTS alumno;
DROP TABLE IF EXISTS apoderado;
DROP TABLE IF EXISTS club;
DROP TABLE IF EXISTS cuota;
DROP TABLE IF EXISTS campeonato;
DROP TABLE IF EXISTS campeonato_rendido;
DROP TABLE IF EXISTS examen;
DROP TABLE IF EXISTS examen_rendido;
DROP TABLE IF EXISTS actividad;
DROP TABLE IF EXISTS actividad_rendida;

-- CREATE TABLE administrador (
-- rut INTEGER NOT NULL,
-- username VARCHAR(100) NOT NULL,
-- password VARCHAR(50) NOT NULL,
-- PRIMARY KEY (rut)
-- );

-- insert into administrador (rut,username,password) values (167593526,'cmaureir','lala');

CREATE TABLE alumno (
rut	INTEGER NOT NULL,
nombres VARCHAR(50),
apellido_paterno VARCHAR(50),
apellido_materno VARCHAR(50),
sexo BOOL,
foto VARCHAR(100),
f_nacimiento DATE,
f_inicio DATE,
f_retiro DATE,
grado INTEGER,
peso INTEGER,
altura INTEGER,
direccion VARCHAR(100),
telefono INTEGER,
celular INTEGER,
actividad VARCHAR(100),
institucion VARCHAR(100),
email VARCHAR(50),
vigente BOOL,
club VARCHAR(100),
PRIMARY KEY (rut)
);

CREATE TABLE apoderado (
rut_apoderado INTEGER NOT NULL,
rut_alumno INTEGER NOT NULL,
nombre VARCHAR(100) NOT NULL,
direccion VARCHAR(100) NOT NULL,
telefono INTEGER NOT NULL,
celular INTEGER NOT NULL,
email VARCHAR(50),
PRIMARY KEY (rut_apoderado),
FOREIGN KEY (rut_alumno) REFERENCES alumno(rut)
);

CREATE TABLE club (
rut_club INTEGER NOT NULL,
razon_social VARCHAR(100),
domicilio VARCHAR(100),
presidente VARCHAR(100),
rut_presidente INTEGER,
domicilio_presidente VARCHAR(100),
telefono INTEGER,
email VARCHAR(100),
PRIMARY KEY (rut_club)
);

CREATE TABLE cuota (
id_cuota INTEGER NOT NULL AUTO_INCREMENT,
rut_alumno INTEGER NOT NULL,
mes INTEGER,
year INTEGER,
monto INTEGER,
pagado BOOL,
f_pago DATE,
comentario VARCHAR(200),
PRIMARY KEY (id_cuota),
FOREIGN KEY (rut_alumno) REFERENCES alumno(rut)
);

CREATE TABLE campeonato (
id_campeonato INTEGER NOT NULL AUTO_INCREMENT,
nombre VARCHAR(100),
f_campeonato DATE,
ciudad VARCHAR(50),
lugar VARCHAR (50),
PRIMARY KEY (id_campeonato)
);

CREATE TABLE campeonato_rendido (
id_camp_rendido INTEGER NOT NULL AUTO_INCREMENT,
camp_id INTEGER NOT NULL,
rut_alumno INTEGER NOT NULL,
participacion VARCHAR(50),
resultado VARCHAR(50),
comentario VARCHAR(200),
estado BOOL,
PRIMARY KEY (id_camp_rendido),
FOREIGN KEY (camp_id) REFERENCES campeonato(id_campeonato),
FOREIGN KEY (rut_alumno) REFERENCES alumno(rut)
);


CREATE TABLE examen (
id_examen INTEGER NOT NULL AUTO_INCREMENT,
descripcion VARCHAR(200) NOT NULL,
f_examen DATE NOT NULL,
ciudad VARCHAR(100),
lugar VARCHAR(100),
PRIMARY KEY (id_examen)
);

CREATE TABLE examen_rendido (
id_examen_rendido INTEGER NOT NULL AUTO_INCREMENT,
examen_id INTEGER NOT NULL,
rut_alumno INTEGER NOT NULL,
resultado VARCHAR(100) NOT NULL,
monto  INTEGER NOT NULL,
pagado BOOL NOT NULL,
f_pago DATE,
comentario VARCHAR(200),
PRIMARY KEY (id_examen_rendido),
FOREIGN KEY (examen_id) REFERENCES examen(id_examen),
FOREIGN KEY (rut_alumno) REFERENCES alumno(rut)
);


CREATE TABLE actividad (
id_actividad INTEGER NOT NULL AUTO_INCREMENT,
f_actividad DATE NOT NULL,
ciudad VARCHAR(100) NOT NULL,
lugar VARCHAR(100),
descripcion VARCHAR(100) NOT NULL,
instructor VARCHAR(100) NOT NULL,
PRIMARY KEY (id_actividad)
);

CREATE TABLE actividad_rendida (
id_act_rendida INTEGER NOT NULL AUTO_INCREMENT,
act_id INTEGER NOT NULL,
rut_alumno INTEGER NOT NULL,
resultado VARCHAR(100) NOT NULL,
PRIMARY KEY (id_act_rendida),
FOREIGN KEY (act_id) REFERENCES actividad(id_actividad),
FOREIGN KEY (rut_alumno) REFERENCES alumno(rut)
);
SET foreign_key_checks = 1;
