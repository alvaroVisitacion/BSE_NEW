

drop database if exists colegio6;

create database colegio6;
use colegio6;


CREATE TABLE administrativo (
  idadministrativo int(11) NOT NULL,
  nombread varchar(30) NOT NULL,
  apellidos varchar(50) NOT NULL,
  area varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

 

CREATE TABLE alumno (
  idalumno int(11) NOT NULL,
  codalumno char(11) NOT NULL,
  apellidopat varchar(40) NOT NULL,
  nombreal varchar(40) NOT NULL,
  sexo varchar(40) NOT NULL,
  dni char(8) NOT NULL,
  apellidomat varchar(40) NOT NULL,
  añoingreso date NOT NULL,
  fechanacimiento date NOT NULL,
  pais varchar(40) NOT NULL,
  escala char(10) NOT NULL,
  lenguamaterna varchar(40) NOT NULL,
  estadocivil varchar(40) NOT NULL,
  religion varchar(40) NOT NULL,
  colegioprocedencia varchar(40) NOT NULL,
  direccion varchar(60) NOT NULL,
  telefono char(9) NOT NULL,
  departamento varchar(40) NOT NULL,
  provincia varchar(40) NOT NULL,
  distrito varchar(40) NOT NULL,
  mediotransporte varchar(40) NOT NULL,
  demorallegada varchar(40) NOT NULL,
  material varchar(40) NOT NULL,
  energiaelectrica varchar(40) NOT NULL,
  aguapotable varchar(40) NOT NULL,
  desague varchar(40) NOT NULL,
  servicioshigienicos varchar(40) NOT NULL,
  nrohabitaciones int(11) NOT NULL,
  nrohabitante int(11) NOT NULL,
  situacion varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla alumno
--

INSERT INTO alumno VALUES(1, '20200201001', 'LIZARRAGA', 'YERSON', 'Masculino', '70169397', 'CAIPO', '2020-03-01', '2020-12-01', 'PERU', 'C', 'Castellano', 'Soltero', 'Católico', 'SAN MARTIN DE PORRES', 'JOSE ARTIGAS 1605', '254154', 'LA LIBERTAD', 'TRUJILLO', 'LA ESPERANZA', 'Colectivo', '15-30 minutos', 'adobe', 'Si', 'Si', 'Si', 'Si', 6, 6, 'Pobre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla capacidad_cursos
--

CREATE TABLE capacidad_cursos (
  idcapacidad int(11) NOT NULL,
  capacidad char(200) NOT NULL,
  idcurso int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla capacidad_cursos
--

INSERT INTO capacidad_cursos VALUES(1, 'CAP 01: COMPRENSION LOGICO', 1);
INSERT INTO capacidad_cursos VALUES(2, 'CAP 02: RESOLUCION DE PROBLEMAS', 1);
INSERT INTO capacidad_cursos VALUES(3, 'CAP 03: PENSAMIENTO LOGICO', 1);
INSERT INTO capacidad_cursos VALUES(4, 'CAP 04: PRACTICAS LABORATORIOS', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla catedra
--

CREATE TABLE catedra (
  idcatedra int(11) NOT NULL,
  iddocente int(11) NOT NULL,
  idnivel int(11) NOT NULL,
  idgrado int(11) NOT NULL,
  idseccion int(11) NOT NULL,
  idperiodo int(11) NOT NULL,
  idcurso int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla curso
--

CREATE TABLE curso (
  idcurso int(11) NOT NULL,
  nombrecu varchar(40) NOT NULL,
  codigo char(5) NOT NULL,
  horas int(11) NOT NULL,
  idnivel int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla curso
--

INSERT INTO curso VALUES(1, 'MATEMATICA', 'MA', 6, 3);
INSERT INTO curso VALUES(2, 'COMUNICACION', 'CO', 5, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla curso_grados
--

CREATE TABLE curso_grados (
  idcurso int(11) NOT NULL,
  idgrado int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla docente
--

CREATE TABLE docente (
  iddocente int(11) NOT NULL,
  dni char(8) NOT NULL,
  estadocivil varchar(40) NOT NULL,
  nombrecompleto varchar(80) NOT NULL,
  direccion varchar(50) NOT NULL,
  telefonoo char(9) NOT NULL,
  segurosocial varchar(40) NOT NULL,
  fechainicio date NOT NULL,
  fechatermino date NOT NULL,
  idnivel int(11) NOT NULL,
  idgrado int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla docente
--

INSERT INTO docente VALUES(1, '70169397', 'SOLTERO', 'Jose Reyes Garcia', 'JOSE ARTIGAS 1605', '125465', 'NO TIENE', '2020-03-15', '2020-12-25', 1, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla failed_jobs
--

CREATE TABLE failed_jobs (
  id bigint(20) UNSIGNED NOT NULL,
  connection text COLLATE utf8mb4_unicode_ci NOT NULL,
  queue text COLLATE utf8mb4_unicode_ci NOT NULL,
  payload longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  exception longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  failed_at timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla grado
--

CREATE TABLE grado (
  idgrado int(11) NOT NULL,
  idnivel int(11) NOT NULL,
  grado char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla grado
--

INSERT INTO grado VALUES(1, 2, 'PRIMERO');
INSERT INTO grado VALUES(2, 2, 'SEGUNDO');
INSERT INTO grado VALUES(3, 2, 'TERCERO');
INSERT INTO grado VALUES(4, 2, 'CUARTO');
INSERT INTO grado VALUES(5, 2, 'QUINTO');
INSERT INTO grado VALUES(6, 2, 'SEXTO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla libreta
--

CREATE TABLE libreta (
  idlibreta int(11) NOT NULL,
  promedio1 float NOT NULL,
  ordenmerito1 int(11) NOT NULL,
  promanualaño float NOT NULL,
  promedio2 float NOT NULL,
  promedio3 float NOT NULL,
  promedio4 float NOT NULL,
  ordenmerito2 int(11) NOT NULL,
  ordenmerito3 int(11) NOT NULL,
  ordenmerito4 int(11) NOT NULL,
  numorden int(11) NOT NULL,
  fecha date NOT NULL,
  ordenmeritoanual int(11) NOT NULL,
  idalumno int(11) NOT NULL,
  idnivel int(11) NOT NULL,
  idperiodo int(11) NOT NULL,
  idcurso int(11) NOT NULL,
  iddocente int(11) NOT NULL,
  idnotas int(11) NOT NULL,
  idgrado int(11) NOT NULL,
  idcapacidad int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla matricula
--

CREATE TABLE matricula (
  idmatricula int(11) NOT NULL,
  idalumno int(11) NOT NULL,
  idnivel int(11) NOT NULL,
  idperiodo int(11) NOT NULL,
  idseccion int(11) NOT NULL,
  codmatricula char(10) NOT NULL,
  idgrado int(11) NOT NULL,
  fechaactual varchar(40) NOT NULL,
  admin varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla migrations
--

CREATE TABLE migrations (
  id int(10) UNSIGNED NOT NULL,
  migration varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  batch int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla migrations
--

INSERT INTO migrations VALUES(1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO migrations VALUES(2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO migrations VALUES(3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO migrations VALUES(4, '2020_08_29_135239_create_roles_table', 1);
INSERT INTO migrations VALUES(5, '2020_08_29_144216_create_role_user_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla nivel
--

CREATE TABLE nivel (
  idnivel int(11) NOT NULL,
  nombreni varchar(40) NOT NULL,
  idperiodo int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla nivel
--

INSERT INTO nivel VALUES(1, 'INICIAL', 1);
INSERT INTO nivel VALUES(2, 'PRIMARIA', 1);
INSERT INTO nivel VALUES(3, 'SECUNDARIA', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla notas
--

CREATE TABLE notas (
  idnotas int(11) NOT NULL,
  nrobimestre char(10) NOT NULL,
  nota1 float NOT NULL,
  promedionotas float NOT NULL,
  nota2 float NOT NULL,
  nota3 float NOT NULL,
  nota4 float NOT NULL,
  exonerado char(18) DEFAULT NULL,
  idalumno int(11) NOT NULL,
  idnivel int(11) NOT NULL,
  idperiodo int(11) NOT NULL,
  idcurso int(11) NOT NULL,
  iddocente int(11) NOT NULL,
  idgrado int(11) NOT NULL,
  idcapacidad int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla password_resets
--

CREATE TABLE password_resets (
  email varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  token varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  created_at timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla periodo
--

CREATE TABLE periodo (
  idperiodo int(11) NOT NULL,
  año int(11) NOT NULL,
  fechainicio date NOT NULL,
  fechatermino date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla periodo
--

INSERT INTO periodo VALUES(1, 2020, '2020-03-15', '2020-12-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla roles
--

CREATE TABLE roles (
  id bigint(20) UNSIGNED NOT NULL,
  name varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla roles
--

INSERT INTO roles VALUES(1, 'admin', '2020-10-12 23:44:59', '2020-10-12 23:44:59');
INSERT INTO roles VALUES(2, 'teacher', '2020-10-12 23:44:59', '2020-10-12 23:44:59');
INSERT INTO roles VALUES(3, 'user', '2020-10-12 23:44:59', '2020-10-12 23:44:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla role_user
--

CREATE TABLE role_user (
  id bigint(20) UNSIGNED NOT NULL,
  role_id int(10) UNSIGNED NOT NULL,
  user_id int(10) UNSIGNED NOT NULL,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla role_user
--

INSERT INTO role_user VALUES(1, 1, 1, NULL, NULL);
INSERT INTO role_user VALUES(2, 2, 2, NULL, NULL);
INSERT INTO role_user VALUES(3, 3, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla seccion
--

CREATE TABLE seccion (
  idseccion int(11) NOT NULL,
  idcurso int(11) NOT NULL,
  letra char(1) DEFAULT NULL,
  idnivel int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla seccion
--

INSERT INTO seccion VALUES(1, 1, 'A', 2);
INSERT INTO seccion VALUES(2, 1, 'B', 2);
INSERT INTO seccion VALUES(3, 1, 'C', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla users
--

CREATE TABLE users (
  id bigint(20) UNSIGNED NOT NULL,
  name varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  email varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  email_verified_at timestamp NULL DEFAULT NULL,
  password varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  remember_token varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla users
--

INSERT INTO users VALUES(1, 'Elizabeth Castillo Sanchez', 'admin@admin.com', NULL, '$2y$10$ga1Sf3kT3P5OlzXMXwbHBOC8ulZ0SiR7yPWnBuNUeUmDi.NR/5pnO', NULL, '2020-10-12 23:45:01', '2020-10-12 23:45:01');
INSERT INTO users VALUES(2, 'Jose Reyes Garcia', 'profe@profe.com', NULL, '$2y$10$.8Vuv0UUOgbhRZz8kQZA.u0R3u866ZzhgB663A3WkOcbDPcYwJsT.', NULL, '2020-10-12 23:45:02', '2020-10-12 23:45:02');
INSERT INTO users VALUES(3, 'Generic User', 'user@user.com', NULL, '$2y$10$E1TQ6uuRsaOc/3NVZ/ClKO.TkFcj6osl0fznYg3V49YGvJIuvbBt2', NULL, '2020-10-12 23:45:02', '2020-10-12 23:45:02');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla administrativo
--
ALTER TABLE administrativo
  ADD PRIMARY KEY (idadministrativo);

--
-- Indices de la tabla alumno
--
ALTER TABLE alumno
  ADD PRIMARY KEY (idalumno);

--
-- Indices de la tabla capacidad_cursos
--
ALTER TABLE capacidad_cursos
  ADD PRIMARY KEY (idcapacidad),
  ADD KEY idcurso (idcurso);

--
-- Indices de la tabla catedra
--
ALTER TABLE catedra
  ADD PRIMARY KEY (idcatedra),
  ADD KEY iddocente (iddocente),
  ADD KEY idnivel (idnivel),
  ADD KEY idgrado (idgrado),
  ADD KEY idseccion (idseccion),
  ADD KEY idperiodo (idperiodo),
  ADD KEY idcurso (idcurso);

--
-- Indices de la tabla curso
--
ALTER TABLE curso
  ADD PRIMARY KEY (idcurso),
  ADD KEY idnivel (idnivel);

--
-- Indices de la tabla curso_grados
--
ALTER TABLE curso_grados
  ADD PRIMARY KEY (idcurso,idgrado),
  ADD KEY idgrado (idgrado);

--
-- Indices de la tabla docente
--
ALTER TABLE docente
  ADD PRIMARY KEY (iddocente),
  ADD KEY idnivel (idnivel),
  ADD KEY idgrado (idgrado);

--
-- Indices de la tabla failed_jobs
--
ALTER TABLE failed_jobs
  ADD PRIMARY KEY (id);

--
-- Indices de la tabla grado
--
ALTER TABLE grado
  ADD PRIMARY KEY (idgrado),
  ADD KEY idnivel (idnivel);

--
-- Indices de la tabla libreta
--
ALTER TABLE libreta
  ADD PRIMARY KEY (idlibreta,idalumno,idnivel,idperiodo,idcurso,iddocente,idnotas,idgrado,idcapacidad),
  ADD KEY idalumno (idalumno),
  ADD KEY idnivel (idnivel),
  ADD KEY idperiodo (idperiodo),
  ADD KEY idcurso (idcurso),
  ADD KEY iddocente (iddocente),
  ADD KEY idgrado (idgrado),
  ADD KEY idcapacidad (idcapacidad),
  ADD KEY idnotas (idnotas);

--
-- Indices de la tabla matricula
--
ALTER TABLE matricula
  ADD PRIMARY KEY (idmatricula,idalumno,idperiodo),
  ADD KEY idalumno (idalumno),
  ADD KEY idnivel (idnivel),
  ADD KEY idperiodo (idperiodo),
  ADD KEY idgrado (idgrado),
  ADD KEY idseccion (idseccion);

--
-- Indices de la tabla migrations
--
ALTER TABLE migrations
  ADD PRIMARY KEY (id);

--
-- Indices de la tabla nivel
--
ALTER TABLE nivel
  ADD PRIMARY KEY (idnivel),
  ADD KEY idperiodo (idperiodo);

--
-- Indices de la tabla notas
--
ALTER TABLE notas
  ADD PRIMARY KEY (idnotas,idalumno,idnivel,idperiodo,idcurso,iddocente,idgrado,idcapacidad),
  ADD KEY idalumno (idalumno),
  ADD KEY idnivel (idnivel),
  ADD KEY idperiodo (idperiodo),
  ADD KEY idcurso (idcurso),
  ADD KEY idgrado (idgrado),
  ADD KEY idcapacidad (idcapacidad),
  ADD KEY iddocente (iddocente);

--
-- Indices de la tabla password_resets
--
ALTER TABLE password_resets
  ADD KEY password_resets_email_index (email);

--
-- Indices de la tabla periodo
--
ALTER TABLE periodo
  ADD PRIMARY KEY (idperiodo);

--
-- Indices de la tabla roles
--
ALTER TABLE roles
  ADD PRIMARY KEY (id);

--
-- Indices de la tabla role_user
--
ALTER TABLE role_user
  ADD PRIMARY KEY (id);

--
-- Indices de la tabla seccion
--
ALTER TABLE seccion
  ADD PRIMARY KEY (idseccion),
  ADD KEY idcurso (idcurso),
  ADD KEY idnivel (idnivel);

--
-- Indices de la tabla users
--
ALTER TABLE users
  ADD PRIMARY KEY (id);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla administrativo
--
ALTER TABLE administrativo
  MODIFY idadministrativo int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla alumno
--
ALTER TABLE alumno
  MODIFY idalumno int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla capacidad_cursos
--
ALTER TABLE capacidad_cursos
  MODIFY idcapacidad int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla catedra
--
ALTER TABLE catedra
  MODIFY idcatedra int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla curso
--
ALTER TABLE curso
  MODIFY idcurso int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla docente
--
ALTER TABLE docente
  MODIFY iddocente int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla failed_jobs
--
ALTER TABLE failed_jobs
  MODIFY id bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla grado
--
ALTER TABLE grado
  MODIFY idgrado int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla libreta
--
ALTER TABLE libreta
  MODIFY idlibreta int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla matricula
--
ALTER TABLE matricula
  MODIFY idmatricula int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla migrations
--
ALTER TABLE migrations
  MODIFY id int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla nivel
--
ALTER TABLE nivel
  MODIFY idnivel int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla notas
--
ALTER TABLE notas
  MODIFY idnotas int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla periodo
--
ALTER TABLE periodo
  MODIFY idperiodo int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla roles
--
ALTER TABLE roles
  MODIFY id bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla role_user
--
ALTER TABLE role_user
  MODIFY id bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla seccion
--
ALTER TABLE seccion
  MODIFY idseccion int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla users
--
ALTER TABLE users
  MODIFY id bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla capacidad_cursos
--
ALTER TABLE capacidad_cursos
  ADD CONSTRAINT capacidad_cursos_ibfk_1 FOREIGN KEY (idcurso) REFERENCES curso (idcurso);

--
-- Filtros para la tabla catedra
--
ALTER TABLE catedra
  ADD CONSTRAINT catedra_ibfk_1 FOREIGN KEY (iddocente) REFERENCES docente (iddocente),
  ADD CONSTRAINT catedra_ibfk_2 FOREIGN KEY (idnivel) REFERENCES nivel (idnivel),
  ADD CONSTRAINT catedra_ibfk_3 FOREIGN KEY (idgrado) REFERENCES grado (idgrado),
  ADD CONSTRAINT catedra_ibfk_4 FOREIGN KEY (idseccion) REFERENCES seccion (idseccion),
  ADD CONSTRAINT catedra_ibfk_5 FOREIGN KEY (idperiodo) REFERENCES `periodo` (idperiodo),
  ADD CONSTRAINT catedra_ibfk_6 FOREIGN KEY (idcurso) REFERENCES curso (idcurso);

--
-- Filtros para la tabla curso
--
ALTER TABLE curso
  ADD CONSTRAINT curso_ibfk_1 FOREIGN KEY (idnivel) REFERENCES nivel (idnivel);

--
-- Filtros para la tabla curso_grados
--
ALTER TABLE curso_grados
  ADD CONSTRAINT curso_grados_ibfk_1 FOREIGN KEY (idcurso) REFERENCES curso (idcurso),
  ADD CONSTRAINT curso_grados_ibfk_2 FOREIGN KEY (idgrado) REFERENCES grado (idgrado);

--
-- Filtros para la tabla docente
--
ALTER TABLE docente
  ADD CONSTRAINT docente_ibfk_1 FOREIGN KEY (idnivel) REFERENCES nivel (idnivel),
  ADD CONSTRAINT docente_ibfk_2 FOREIGN KEY (idgrado) REFERENCES grado (idgrado);

--
-- Filtros para la tabla grado
--
ALTER TABLE grado
  ADD CONSTRAINT grado_ibfk_1 FOREIGN KEY (idnivel) REFERENCES nivel (idnivel);

--
-- Filtros para la tabla libreta
--
ALTER TABLE libreta
  ADD CONSTRAINT libreta_ibfk_1 FOREIGN KEY (idalumno) REFERENCES alumno (idalumno),
  ADD CONSTRAINT libreta_ibfk_2 FOREIGN KEY (idnivel) REFERENCES nivel (idnivel),
  ADD CONSTRAINT libreta_ibfk_3 FOREIGN KEY (idperiodo) REFERENCES `periodo` (idperiodo),
  ADD CONSTRAINT libreta_ibfk_4 FOREIGN KEY (idcurso) REFERENCES curso (idcurso),
  ADD CONSTRAINT libreta_ibfk_5 FOREIGN KEY (iddocente) REFERENCES docente (iddocente),
  ADD CONSTRAINT libreta_ibfk_6 FOREIGN KEY (idgrado) REFERENCES grado (idgrado),
  ADD CONSTRAINT libreta_ibfk_7 FOREIGN KEY (idcapacidad) REFERENCES capacidad_cursos (idcapacidad),
  ADD CONSTRAINT libreta_ibfk_8 FOREIGN KEY (idnotas) REFERENCES notas (idnotas);

--
-- Filtros para la tabla matricula
--
ALTER TABLE matricula
  ADD CONSTRAINT matricula_ibfk_1 FOREIGN KEY (idalumno) REFERENCES alumno (idalumno),
  ADD CONSTRAINT matricula_ibfk_2 FOREIGN KEY (idnivel) REFERENCES nivel (idnivel),
  ADD CONSTRAINT matricula_ibfk_3 FOREIGN KEY (idperiodo) REFERENCES `periodo` (idperiodo),
  ADD CONSTRAINT matricula_ibfk_4 FOREIGN KEY (idgrado) REFERENCES grado (idgrado),
  ADD CONSTRAINT matricula_ibfk_5 FOREIGN KEY (idseccion) REFERENCES seccion (idseccion);

--
-- Filtros para la tabla nivel
--
ALTER TABLE nivel
  ADD CONSTRAINT nivel_ibfk_1 FOREIGN KEY (idperiodo) REFERENCES `periodo` (idperiodo);

--
-- Filtros para la tabla notas
--
ALTER TABLE notas
  ADD CONSTRAINT notas_ibfk_1 FOREIGN KEY (idalumno) REFERENCES alumno (idalumno),
  ADD CONSTRAINT notas_ibfk_2 FOREIGN KEY (idnivel) REFERENCES nivel (idnivel),
  ADD CONSTRAINT notas_ibfk_3 FOREIGN KEY (idperiodo) REFERENCES `periodo` (idperiodo),
  ADD CONSTRAINT notas_ibfk_4 FOREIGN KEY (idcurso) REFERENCES curso (idcurso),
  ADD CONSTRAINT notas_ibfk_5 FOREIGN KEY (idgrado) REFERENCES grado (idgrado),
  ADD CONSTRAINT notas_ibfk_6 FOREIGN KEY (idcapacidad) REFERENCES capacidad_cursos (idcapacidad),
  ADD CONSTRAINT notas_ibfk_7 FOREIGN KEY (iddocente) REFERENCES docente (iddocente);

--
-- Filtros para la tabla seccion
--
ALTER TABLE seccion
  ADD CONSTRAINT seccion_ibfk_1 FOREIGN KEY (idcurso) REFERENCES curso (idcurso),
  ADD CONSTRAINT seccion_ibfk_2 FOREIGN KEY (idnivel) REFERENCES nivel (idnivel);

INSERT INTO `notas` (`idnotas`, `nrobimestre`, `nota1`, `promedionotas`, `nota2`, `nota3`, `nota4`, `exonerado`, `idalumno`, `idnivel`, `idperiodo`, `idcurso`, `iddocente`, `idgrado`, `idcapacidad`) VALUES
(1, 'I', 13, 13.5, 13, 14, 14, 'NO', 1, 3, 1, 1, 1, 5, 1),
(2, 'I', 14, 14.5, 14, 15, 15, 'NO', 1, 3, 1, 1, 1, 5, 2),
(3, 'I', 15, 15.5, 15, 16, 16, 'NO', 1, 3, 1, 1, 1, 5, 3),
(4, 'I', 16, 16.5, 16, 17, 17, 'NO', 1, 3, 1, 1, 1, 5, 4);
INSERT INTO `matricula` (`idmatricula`, `idalumno`, `idnivel`, `idperiodo`, `idseccion`, `codmatricula`, `idgrado`, `fechaactual`, `admin`) VALUES
(1, 1, 1, 1, 2, '1053301018', 1, '12/10/2020', 'Elizabeth Castillo Sanchez');