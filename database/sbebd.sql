
drop database if exists sbebd;

create database sbebd;
use sbebd;

CREATE TABLE servicios (
  ser_codigo int(11) NOT NULL,
  ser_titulo varchar(30) NOT NULL,
  ser_descripcion varchar(30) NOT NULL,
  ser_imagen varchar(100) COLLATE utf8_unicode_ci NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE formaciones (
  for_codigo int(11) NOT NULL,
  for_titulo varchar(30) NOT NULL,
  for_descripcion varchar(30) NOT NULL,
  for_imagen varchar(100) COLLATE utf8_unicode_ci NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE contactos (
  con_codigo int(11) NOT NULL,
  con_somos varchar(500) NOT NULL,
  con_mision varchar(500) NOT NULL,
  con_vision varchar(500) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE eventos (
  eve_codigo int(11) NOT NULL,
  eve_titulo varchar(200) NOT NULL,
  eve_fechaini date NOT NULL,
  eve_fechafin date NOT NULL,
  eve_url varchar(200) NOT NULL,
  eve_imagen varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  eve_estado char(1) COLLATE utf8_unicode_ci  NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE socios (
  soc_codigo int(11) NOT NULL,
  soc_titulo varchar(200) NOT NULL,
  soc_descripcion varchar(500) NOT NULL,
  soc_orden int(11)  NULL,  
  soc_imagen varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  soc_estado char(1) COLLATE utf8_unicode_ci  NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE correos (
  cor_codigo int(11) NOT NULL,
  cor_correo varchar(100) NOT NULL,
  cor_asunto varchar(300) NOT NULL,
  cor_mensaje varchar(500) NOT NULL,
  created_at timestamp NULL DEFAULT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE experiencias (
  exp_codigo int(11) NOT NULL,
  exp_nombre varchar(50) NOT NULL,
  exp_profesion varchar(200) NOT NULL,
  exp_resumen varchar(500) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE datos (
  dat_codigo int(11) NOT NULL,
  dat_ubicacion varchar(50) NOT NULL,
  dat_correo varchar(100) NOT NULL,
  dat_telefono varchar(9) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



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
 
-- ------------------------------------------------------

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
 
--
-- Indices de la tabla servicios
--
ALTER TABLE servicios
  ADD PRIMARY KEY (ser_codigo);

--
-- Indices de la tabla formaciones
--
ALTER TABLE formaciones
  ADD PRIMARY KEY (for_codigo);

--
-- Indices de la tabla contactos
--
ALTER TABLE contactos
  ADD PRIMARY KEY (con_codigo);

--
-- Indices de la tabla eventos
--
ALTER TABLE eventos
  ADD PRIMARY KEY (eve_codigo);
--
-- Indices de la tabla socios
--
ALTER TABLE socios
  ADD PRIMARY KEY (soc_codigo);
--
-- Indices de la tabla correos
--
ALTER TABLE correos
  ADD PRIMARY KEY (cor_codigo);
--
-- Indices de la tabla experiencias
--
ALTER TABLE experiencias
  ADD PRIMARY KEY (exp_codigo);
--
-- Indices de la tabla datos
--
ALTER TABLE datos
  ADD PRIMARY KEY (dat_codigo);
 
--
-- Indices de la tabla failed_jobs
--
ALTER TABLE failed_jobs
  ADD PRIMARY KEY (id);

 
--
-- Indices de la tabla migrations
--
ALTER TABLE migrations
  ADD PRIMARY KEY (id);
  
--
-- Indices de la tabla password_resets
--
ALTER TABLE password_resets
  ADD KEY password_resets_email_index (email);
 
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
-- Indices de la tabla users
--
ALTER TABLE users
  ADD PRIMARY KEY (id);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla servicios
--
ALTER TABLE servicios
  MODIFY ser_codigo int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla formaciones
--
ALTER TABLE formaciones
  MODIFY for_codigo int(11) NOT NULL AUTO_INCREMENT;

 --
-- AUTO_INCREMENT de la tabla contactos
--
ALTER TABLE contactos
  MODIFY con_codigo int(11) NOT NULL AUTO_INCREMENT;
 --
-- AUTO_INCREMENT de la tabla eventos
--
ALTER TABLE eventos
  MODIFY eve_codigo int(11) NOT NULL AUTO_INCREMENT;
 --
-- AUTO_INCREMENT de la tabla socios
--
ALTER TABLE socios
  MODIFY soc_codigo int(11) NOT NULL AUTO_INCREMENT;
 --
-- AUTO_INCREMENT de la tabla correos
--
ALTER TABLE correos
  MODIFY cor_codigo int(11) NOT NULL AUTO_INCREMENT;
 --
-- AUTO_INCREMENT de la tabla experiencias
--
ALTER TABLE experiencias
  MODIFY exp_codigo int(11) NOT NULL AUTO_INCREMENT;
 --
-- AUTO_INCREMENT de la tabla datos
--
ALTER TABLE datos
  MODIFY dat_codigo int(11) NOT NULL AUTO_INCREMENT;
  
--
-- AUTO_INCREMENT de la tabla failed_jobs
--
ALTER TABLE failed_jobs
  MODIFY id bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
  
--
-- AUTO_INCREMENT de la tabla migrations
--
ALTER TABLE migrations
  MODIFY id int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
 
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
-- AUTO_INCREMENT de la tabla users
--
ALTER TABLE users
  MODIFY id bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
  