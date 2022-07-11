CREATE TABLE TIPO_PERIODO (
id_tipo_periodo INT PRIMARY KEY,
descripcion VARCHAR(100)
);

INSERT INTO tipo_periodo VALUES (1,'Cuatrimestral');
INSERT INTO tipo_periodo VALUES (2,'Semestral');



CREATE TABLE PERIODO (
id_periodo INT PRIMARY KEY,
descripcion VARCHAR(50) NOT NULL,
fecha_inicio DATE NOT NULL,
fecha_termino DATE NOT NULL,
fk_tipo_periodo INT NOT NULL,
CONSTRAINT fk_per_tipo FOREIGN KEY (fk_tipo_periodo) REFERENCES TIPO_PERIODO(id_tipo_periodo)
);

INSERT INTO PERIODO VALUES (1,'2019-01','2019-01-01','2019-04-30',1);
INSERT INTO PERIODO VALUES (2,'2019-02','2019-05-01','2019-08-30',1);
INSERT INTO PERIODO VALUES (3,'2019-03','2019-09-01','2019-12-30',1);
INSERT INTO PERIODO VALUES (4,'2020-01','2020-01-01','2020-04-30',1);
INSERT INTO PERIODO VALUES (5,'2020-02','2020-05-01','2020-08-30',1);
INSERT INTO PERIODO VALUES (6,'2020-03','2020-09-01','2020-12-30',1);
INSERT INTO PERIODO VALUES (7,'2021-01','2021-01-01','2021-04-30',1);
INSERT INTO PERIODO VALUES (8,'2021-02','2021-05-01','2021-08-30',1);
INSERT INTO PERIODO VALUES (9,'2021-03','2021-09-01','2021-12-30',1);
INSERT INTO PERIODO VALUES (10,'2022-01','2022-01-01','2022-04-30',1);


CREATE TABLE MATERIA (
id_materia INT PRIMARY KEY NOT NULL,
nombre_materia VARCHAR(75) NOT NULL,
creditos INT NOT NULL
);

INSERT INTO MATERIA VALUES (1,'Comunicacion Oral y Escrita', 50);
INSERT INTO MATERIA VALUES (2,'Matematicas Basicas', 50);
INSERT INTO MATERIA VALUES (3,'Introduccion al Desarrrollo de Videojuegos', 50);
INSERT INTO MATERIA VALUES (4,'Logica Computacional', 50);
INSERT INTO MATERIA VALUES (5,'Dibujo', 50);
INSERT INTO MATERIA VALUES (6,'Psicologia Audiovisual', 50);
INSERT INTO MATERIA VALUES (7,'Metodologia de la Investigacion y Estadistica', 50);
INSERT INTO MATERIA VALUES (8,'Habilidades Gerenciales', 50);
INSERT INTO MATERIA VALUES (9,'Programacion Estructurada', 50);
INSERT INTO MATERIA VALUES (10,'Calculo Diferencial', 50);
INSERT INTO MATERIA VALUES (11,'Dibujo Tecnico', 50);
INSERT INTO MATERIA VALUES (12,'Algebra Lineal Basica', 50);
INSERT INTO MATERIA VALUES (13,'Taller de Diseño de Videojuegos', 50);
INSERT INTO MATERIA VALUES (14,'Usabilidad y Analisis de Juegos', 50);
INSERT INTO MATERIA VALUES (15,'Branding Personal', 50);
INSERT INTO MATERIA VALUES (16,'Estructuras de Datos', 50);
INSERT INTO MATERIA VALUES (17,'Diseño de Videojuegos I', 50);
INSERT INTO MATERIA VALUES (18,'Diseño de Personajes', 50);
INSERT INTO MATERIA VALUES (19,'Introduccion a la Animacion', 50);
INSERT INTO MATERIA VALUES (20,'Modelado en 3D inorganico', 50);
INSERT INTO MATERIA VALUES (21,'Preproduccion de Videojuegos', 50);
INSERT INTO MATERIA VALUES (22,'Sostenibilidad y Ciudadania', 50);
INSERT INTO MATERIA VALUES (23,'Diseño de Videojuegos II', 50);
INSERT INTO MATERIA VALUES (24,'Diseño de Interfaces de Usuario', 50);
INSERT INTO MATERIA VALUES (25,'Animacion 2D I', 50);
INSERT INTO MATERIA VALUES (26,'Modelado 3D Organico', 50);
INSERT INTO MATERIA VALUES (27,'Arte Digital', 50);
INSERT INTO MATERIA VALUES (28,'Produccion de Videojuegos', 50);
INSERT INTO MATERIA VALUES (29,'Etica Profesional', 50);
INSERT INTO MATERIA VALUES (30,'Fotografia Digital', 50);
INSERT INTO MATERIA VALUES (31,'Texturizado I', 50);
INSERT INTO MATERIA VALUES (32,'Animacion 2D II', 50);
INSERT INTO MATERIA VALUES (33,'Esculpido Digital I', 50);
INSERT INTO MATERIA VALUES (34,'Narrativa', 50);
INSERT INTO MATERIA VALUES (35,'Desarrollo de Prototipos', 50);
INSERT INTO MATERIA VALUES (36,'Modelos de Monetizacion en Medios Interactivos', 50);
INSERT INTO MATERIA VALUES (37,'Texturizado II', 50);
INSERT INTO MATERIA VALUES (38,'Guionismo', 50);
INSERT INTO MATERIA VALUES (39,'Esculpido Digital II', 50);
INSERT INTO MATERIA VALUES (40,'Diseño de Marionetas Digitales', 50);
INSERT INTO MATERIA VALUES (41,'Diseño de Niveles', 50);
INSERT INTO MATERIA VALUES (42,'Narrativa no lineal', 50);
INSERT INTO MATERIA VALUES (43,'Desarrollo de Emprendedores', 50);
INSERT INTO MATERIA VALUES (44,'Animacion 3D', 50);
INSERT INTO MATERIA VALUES (45,'Guion Grafico', 50);
INSERT INTO MATERIA VALUES (46,'Graficos Animados', 50);
INSERT INTO MATERIA VALUES (47,'Diseño de Paisajes', 50);
INSERT INTO MATERIA VALUES (48,'Musica y Diseño Sonoro I', 50);
INSERT INTO MATERIA VALUES (49,'Realidad Virtual', 50);
INSERT INTO MATERIA VALUES (50,'Animacion Corporal', 50);
INSERT INTO MATERIA VALUES (51,'Iluminacion Render', 50);
INSERT INTO MATERIA VALUES (52,'Ampliacion al Diseño de Videojuegos', 50);
INSERT INTO MATERIA VALUES (53,'Marco Legal para Industrias Creativas Digitales', 50);
INSERT INTO MATERIA VALUES (54,'Desarrollo de Proyecto', 50);
INSERT INTO MATERIA VALUES (55,'Musica y Diseño Sonoro II', 50);
INSERT INTO MATERIA VALUES (56,'Vanguardia Guerrero', 50);
INSERT INTO MATERIA VALUES (57,'Formacion para el Egreso', 50);
INSERT INTO MATERIA VALUES (58,'Profesionalizacion de la Carrera I', 50);
INSERT INTO MATERIA VALUES (59,'Actuacion de Personajes', 50);
INSERT INTO MATERIA VALUES (60,'Composicion Digital', 50);
INSERT INTO MATERIA VALUES (61,'Vanguardia Cuauhtemoc', 50);
INSERT INTO MATERIA VALUES (62,'Profesionalizacion de la Carrera II', 50);
INSERT INTO MATERIA VALUES (63,'Analisis y Desarrollo de Cinematicas', 50);
INSERT INTO MATERIA VALUES (64,'Estrategia de Venta', 50);
INSERT INTO MATERIA VALUES (65,'Vanguardia de Lider', 50);


CREATE TABLE DET_MATERIA_CUATRIMESTRE(
id_mat_cuatri INT PRIMARY KEY,
descripcion VARCHAR(50),
fk_materia int,
fk_periodo int,
CONSTRAINT fk_materia_llave FOREIGN KEY (fk_materia) REFERENCES MATERIA(id_materia),
CONSTRAINT fk_periodo_cuatri FOREIGN KEY (fk_periodo) REFERENCES PERIODO(id_periodo)
);

INSERT INTO DET_MATERIA_CUATRIMESTRE values(1,'1er Cuatrimestre',1,1);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(2,'1er Cuatrimestre',2,1);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(3,'1er Cuatrimestre',3,1);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(4,'1er Cuatrimestre',4,1);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(5,'1er Cuatrimestre',5,1);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(6,'1er Cuatrimestre',6,1);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(7,'1er Cuatrimestre',7,1);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(8,'2do Cuatrimestre',8,2);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(9,'2do Cuatrimestre',9,2);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(10,'2do Cuatrimestre',10,2);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(11,'2do Cuatrimestre',11,2);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(12,'2do Cuatrimestre',12,2);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(13,'2do Cuatrimestre',13,2);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(14,'2do Cuatrimestre',14,2);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(15,'3er Cuatrimestre',15,3);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(16,'3er Cuatrimestre',16,3);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(17,'3er Cuatrimestre',17,3);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(18,'3er Cuatrimestre',18,3);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(19,'3er Cuatrimestre',19,3);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(20,'3er Cuatrimestre',20,3);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(21,'3er Cuatrimestre',21,3);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(22,'4to Cuatrimestre',22,4);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(23,'4to Cuatrimestre',23,4);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(24,'4to Cuatrimestre',24,4);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(25,'4to Cuatrimestre',25,4);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(26,'4to Cuatrimestre',26,4);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(27,'4to Cuatrimestre',27,4);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(28,'4to Cuatrimestre',28,4);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(29,'5to Cuatrimestre',29,5);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(30,'5to Cuatrimestre',30,5);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(31,'5to Cuatrimestre',31,5);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(32,'5to Cuatrimestre',32,5);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(33,'5to Cuatrimestre',33,5);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(34,'5to Cuatrimestre',34,5);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(35,'5to Cuatrimestre',35,5);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(36,'6to Cuatrimestre',36,6);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(37,'6to Cuatrimestre',37,6);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(38,'6to Cuatrimestre',38,6);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(39,'6to Cuatrimestre',39,6);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(40,'6to Cuatrimestre',40,6);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(41,'6to Cuatrimestre',41,6);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(42,'6to Cuatrimestre',42,6);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(43,'7mo Cuatrimestre',43,7);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(44,'7mo Cuatrimestre',44,7);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(45,'7mo Cuatrimestre',45,7);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(46,'7mo Cuatrimestre',46,7);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(47,'7mo Cuatrimestre',47,7);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(48,'7mo Cuatrimestre',48,7);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(49,'7mo Cuatrimestre',49,7);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(50,'8vo Cuatrimestre',50,5);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(51,'8vo Cuatrimestre',51,8);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(52,'8vo Cuatrimestre',52,8);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(53,'8vo Cuatrimestre',53,8);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(54,'8vo Cuatrimestre',54,8);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(55,'8vo Cuatrimestre',55,8);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(56,'8vo Cuatrimestre',56,8);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(57,'9no Cuatrimestre',57,9);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(58,'9no Cuatrimestre',58,9);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(59,'9no Cuatrimestre',59,9);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(60,'9no Cuatrimestre',60,9);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(61,'9no Cuatrimestre',61,9);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(62,'10mo Cuatrimestre',62,10);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(63,'10mo Cuatrimestre',63,10);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(64,'10mo Cuatrimestre',64,10);
INSERT INTO DET_MATERIA_CUATRIMESTRE values(65,'10mo Cuatrimestre',65,10);

CREATE TABLE INSTITUCION (
id_institucion INT PRIMARY KEY,
instituto VARCHAR(100) NOT NULL UNIQUE
);

INSERT INTO INSTITUCION VALUES (1,'Instituto La Paz A.C');
INSERT INTO INSTITUCION VALUES (2,'Colegio México Nuevo');
INSERT INTO INSTITUCION VALUES (3,'Conalep');
INSERT INTO INSTITUCION VALUES (4,'Colegio Manuel Muñoz Tébar');


CREATE TABLE TIPO_BAJA(
id_baja INT PRIMARY KEY,
descripcion VARCHAR(100)
);

INSERT INTO TIPO_BAJA VALUES (1,'Parcial');
INSERT INTO TIPO_BAJA VALUES (2,'Permanente');

CREATE TABLE ESTATUS_ESTUDIOS (
id_estatus INT PRIMARY KEY,
descripcion VARCHAR(100) NOT NULL
);

INSERT INTO ESTATUS_ESTUDIOS VALUES (1,'EN CURSO');
INSERT INTO ESTATUS_ESTUDIOS VALUES (2,'EGRESADO');
INSERT INTO ESTATUS_ESTUDIOS VALUES (3,'NO ACTIVO');


CREATE TABLE ESTUDIANTE (
id_matricula INT PRIMARY KEY,
nombre VARCHAR(50),
ap_paterno VARCHAR(50),
ap_materno VARCHAR(50),
sexo VARCHAR(50),
edad INT,
correo VARCHAR(100) NOT NULL,
fk_instituto INT NOT NULL,
CONSTRAINT fk_instituto_procedencia FOREIGN KEY (fk_instituto) REFERENCES INSTITUCION(id_institucion)
);


INSERT INTO estudiante VALUES (100,'Jesus Miguel','Villasana','Rivas','Hombre',20,'jevillasanari@ucq.edu.mx',4);
INSERT INTO estudiante VALUES (101,'Jose Pablo','Ramirez','Trejo','Hombre',19,'joramireztrejo@ucq.edu.mx',2);
INSERT INTO estudiante VALUES(102,'Jose Martinez','Mendoza','Rodriguez','Hombre',19,'jomendozaro@ucq.edu.mx',1);



CREATE TABLE DET_CARRERA_ESTUDIANTE (
id_carrera_estudiante INT PRIMARY KEY,
fecha_registro DATE NOT NULL,
fk_estatus INT NOT NULL,
fk_estudiante INT NOT NULL,
fk_periodo INT NOT NULL,
CONSTRAINT fk_det_estatus FOREIGN KEY (fk_estatus) REFERENCES ESTATUS_ESTUDIOS(id_estatus),
CONSTRAINT fk_det_estudiante FOREIGN KEY (fk_estudiante) REFERENCES ESTUDIANTE(id_matricula),
CONSTRAINT fk_det_periodo FOREIGN KEY (fk_periodo) REFERENCES PERIODO(id_periodo)
);


INSERT INTO det_carrera_estudiante VALUES (1,'2022-04-30',2,100,10);
INSERT INTO det_carrera_estudiante VALUES (2,'2022-04-30',2,101,10);


CREATE TABLE CALIFICACIONES(
id_calificacion INT PRIMARY KEY NOT NULL,
fk_estudiante INT,
CONSTRAINT alumno_cal FOREIGN KEY (fk_estudiante) REFERENCES ESTUDIANTE (id_matricula),
fk_materia INT,
CONSTRAINT materia_cal FOREIGN KEY (fk_materia) REFERENCES MATERIA (id_materia),
primer_parcial INT,
segundo_parcial INT,
tercer_parcial INT,
fk_periodo INT,
CONSTRAINT periodo_cal FOREIGN KEY (fk_PERIODO) REFERENCES PERIODO (id_periodo)
);

INSERT INTO CALIFICACIONES VALUES(1,100,1,7,8,10,1);
INSERT INTO CALIFICACIONES VALUES(2,100,2,9,8.5,6,1);
INSERT INTO CALIFICACIONES VALUES(3,100,3,5,9,9,1);
INSERT INTO CALIFICACIONES VALUES(4,100,4,10,8,8,1);
INSERT INTO CALIFICACIONES VALUES(5,100,5,7.5,6,8,1);
INSERT INTO CALIFICACIONES VALUES(6,100,6,10,10,10,1);
INSERT INTO CALIFICACIONES VALUES(7,100,7,10,6.5,8,1);
INSERT INTO CALIFICACIONES VALUES(8,100,7,1,6.5,8,1);

CREATE TABLE HISTORIAL_BAJAS_ESTUDIANTES(
id_historial INT PRIMARY KEY,
fk_estudiante INT,
CONSTRAINT alumno_baja FOREIGN KEY (fk_estudiante) REFERENCES ESTUDIANTE (id_matricula),
fk_baja INT,
CONSTRAINT tipo_baja FOREIGN KEY (fk_baja) REFERENCES TIPO_BAJA (id_baja),
fecha_captura DATE,
motivo VARCHAR(100)
);

INSERT INTO HISTORIAL_BAJAS_ESTUDIANTES VALUES(1,101,2,'2019-03-14','Faltar a todas las clases');

CREATE TABLE BECAS(
id_becas INT PRIMARY KEY,
nombre_beca VARCHAR(100) UNIQUE,
promedio_min int,
descripcion_beca VARCHAR(500)
);

INSERT INTO BECAS values(1,'Talento COBAQ',9, 
'Aplica para licenciaturas 
cuatrimestrales en el pago de 
colegiatura mensual. No paga estudio 
socioeconómico. Para solicitarla debe 
presentar certificado autorizado de la 
institución de procedencia firmado por 
el director del plantel. ');
INSERT INTO BECAS values(2,'Compromiso con la Excelencia',9,
'Para alumnos de instituciones de nivel 
medio superior con convenio. No paga 
estudio socioeconómico. Para 
solicitarla debe presentar certificado 
autorizado de la institución de 
procedencia firmado por el director 
del plantel.');
INSERT INTO BECAS values(3,'Caballero Aguila',10,
'Es un reconocimiento económico del 100% 
para alumnos con excelencia
académica. Se otorga un reconocimiento 
en programas
cuatrimestrales y uno en semestrales por 
ciclo escolar. No brindan apoyo formativo');
INSERT INTO BECAS values(4,'Deportiva',8,
'Este reconocimiento se otorga a alumnos 
con un destacado desempeño como 
deportistas de alto rendimiento. Realiza 
apoyo formativo en la Coordinación de 
Deportes, y debe participar en las 
competencias asignadas por la Universidad,
cuyo resultado debe demostrar el alto 
rendimiento en su disciplina.');
INSERT INTO BECAS values(5,'CORPAMEX',8,
'Aplica para licenciaturas cuatrimestrales. 
Atienden en inicio de trámite la 
convocatoria de COPARMEX');
INSERT INTO BECAS values(6,'Posgrado',9,
'Si pierde la beca no se recupera el 
beneficio. Los alumnos de posgrado y
especialidades realizan trabajos de 
investigación');
INSERT INTO BECAS values(7,'Bachillerato',8,
'Todo alumno de preparatoria que solicite 
beca, debe alinearse a la convocatoria del 
departamento de Becas de la SEP Estatal.');

CREATE TABLE DET_BECAS_ESTUDIANTES(
id_beca_est INT PRIMARY KEY,
fk_estudiante INT,
CONSTRAINT alumno_beca FOREIGN KEY (fk_estudiante) REFERENCES ESTUDIANTE (id_matricula),
fk_beca INT,
CONSTRAINT beca_descrip FOREIGN KEY (fk_beca) REFERENCES BECAS (id_becas),
porcentaje_beca INT
);

INSERT INTO DET_BECAS_ESTUDIANTES VALUES(1,100,1,50);

CREATE TABLE DET_ALUMNOS_FALTAS(
id_detalle_falta INT PRIMARY KEY,
fk_estudiante INT,
CONSTRAINT alumno_falta FOREIGN KEY (fk_estudiante) REFERENCES ESTUDIANTE (id_matricula),
fk_materia_cuatri INT,
CONSTRAINT materia_falta FOREIGN KEY (fk_materia_cuatri) REFERENCES DET_MATERIA_CUATRIMESTRE (id_mat_cuatri),
num_faltas INT
);

INSERT INTO DET_ALUMNOS_FALTAS VALUES(1,100,1,0);
INSERT INTO DET_ALUMNOS_FALTAS VALUES(2,100,2,0);
INSERT INTO DET_ALUMNOS_FALTAS VALUES(3,100,3,0);
INSERT INTO DET_ALUMNOS_FALTAS VALUES(4,100,4,0);
INSERT INTO DET_ALUMNOS_FALTAS VALUES(5,100,5,0);
INSERT INTO DET_ALUMNOS_FALTAS VALUES(6,100,6,0);
INSERT INTO DET_ALUMNOS_FALTAS VALUES(7,100,7,0);

CREATE TABLE EXAMENES_EXTRAORDINARIOS(
id_examen_extra INT PRIMARY KEY,
fk_estudiante INT,
CONSTRAINT alumno_exam_extra FOREIGN KEY (fk_estudiante) REFERENCES ESTUDIANTE (id_matricula),
fk_materia_cuatri INT,
CONSTRAINT materia_exam_extra FOREIGN KEY (fk_materia_cuatri) REFERENCES DET_MATERIA_CUATRIMESTRE (id_mat_cuatri)
);

INSERT INTO EXAMENES_EXTRAORDINARIOS values(1,101,3);