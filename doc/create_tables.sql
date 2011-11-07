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
rut INTEGER NOT NULL,
rut_apoderado INTEGER NOT NULL,
nombres VARCHAR(50) NOT NULL,
apellido_paterno VARCHAR(50) NOT NULL,
apellido_materno VARCHAR(50) NOT NULL,
email VARCHAR(50) NOT NULL,
actividad VARCHAR(100) NOT NULL,
institucion VARCHAR(100) NOT NULL,
direccion VARCHAR(100) NOT NULL,
f_nacimiento DATE NOT NULL,
f_inicio DATE NOT NULL,
telefono INTEGER,
celular INTEGER,
grado INTEGER NOT NULL,
sexo BOOL NOT NULL,
peso INTEGER,
altura INTEGER,
foto VARCHAR(100),
club VARCHAR(100) NOT NULL,
f_retiro DATE,
vigente BOOL NOT NULL,
PRIMARY KEY (rut),
FOREIGN KEY (rut_apoderado) REFERENCES apoderado(rut)
);

CREATE TABLE apoderado (
rut INTEGER NOT NULL,
nombre VARCHAR(100) NOT NULL,
direccion VARCHAR(100) NOT NULL,
telefono INTEGER NOT NULL,
email VARCHAR(50),
PRIMARY KEY (rut)
);

CREATE TABLE club (
rut INTEGER NOT NULL,
razon_social VARCHAR(100) NOT NULL,
domicilio VARCHAR(100) NOT NULL,
presidente VARCHAR(100) NOT NULL,
presidente_rut INTEGER NOT NULL,
presidente_domicilio VARCHAR(100) NOT NULL,
presidente_telefono INTEGER NOT NULL,
presidente_email VARCHAR(100),
PRIMARY KEY (rut)
);

insert into club (rut,razon_social,domicilio,presidente,presidente_rut,presidente_domicilio,presidente_telefono,presidente_email) values (123456789,'Mu Ki Do', 'Avenida Siempre Viva 666', 'Perico los palotes', '111111111', 'Pasaje X, numero 2', '5553000','perico@lospalotes.cl');

CREATE TABLE cuota (
id INTEGER NOT NULL AUTO_INCREMENT,
rut_alumno INTEGER NOT NULL,
mes INTEGER NOT NULL,
anio INTEGER NOT NULL,
monto INTEGER NOT NULL,
pagado BOOL NOT NULL,
f_pago DATE,
comentario VARCHAR(200),
PRIMARY KEY (id),
FOREIGN KEY (rut_alumno) REFERENCES alumno(rut)
);

CREATE TABLE campeonato (
id INTEGER NOT NULL AUTO_INCREMENT,
nombre VARCHAR(100) NOT NULL,
fecha DATE NOT NULL,
ciudad VARCHAR(50) NOT NULL,
lugar VARCHAR (50) NOT NULL,
PRIMARY KEY (id)
);

CREATE TABLE campeonato_rendido (
id INTEGER NOT NULL AUTO_INCREMENT,
id_campeonato INTEGER NOT NULL,
rut_alumno INTEGER NOT NULL,
participacion VARCHAR(100),
resultado VARCHAR(100),
comentario VARCHAR(200),
estado BOOL NOT NULL,
PRIMARY KEY (id),
FOREIGN KEY (id_campeonato) REFERENCES campeonato(id),
FOREIGN KEY (rut_alumno) REFERENCES alumno(rut)
);


CREATE TABLE examen (
id INTEGER NOT NULL AUTO_INCREMENT,
descripcion VARCHAR(200) NOT NULL,
fecha DATE NOT NULL,
ciudad VARCHAR(100) NOT NULL,
lugar VARCHAR(100) NOT NULL,
PRIMARY KEY (id)
);

CREATE TABLE examen_rendido (
id INTEGER NOT NULL AUTO_INCREMENT,
id_examen INTEGER NOT NULL,
rut_alumno INTEGER NOT NULL,
resultado VARCHAR(100) NOT NULL,
monto  INTEGER NOT NULL,
pagado BOOL NOT NULL,
f_pago DATE,
comentario VARCHAR(200),
PRIMARY KEY (id),
FOREIGN KEY (id_examen) REFERENCES examen(id),
FOREIGN KEY (rut_alumno) REFERENCES alumno(rut)
);


CREATE TABLE actividad (
id INTEGER NOT NULL AUTO_INCREMENT,
fecha DATE NOT NULL,
ciudad VARCHAR(100) NOT NULL,
lugar VARCHAR(100),
descripcion VARCHAR(100) NOT NULL,
instructor VARCHAR(100) NOT NULL,
PRIMARY KEY (id)
);

CREATE TABLE actividad_rendida (
id INTEGER NOT NULL AUTO_INCREMENT,
id_actividad INTEGER NOT NULL,
rut_alumno INTEGER NOT NULL,
resultado VARCHAR(100) NOT NULL,
PRIMARY KEY (id),
FOREIGN KEY (id_actividad) REFERENCES actividad(id),
FOREIGN KEY (rut_alumno) REFERENCES alumno(rut)
);
SET foreign_key_checks = 1;
