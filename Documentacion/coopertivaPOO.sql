-- Database: "cooperativaPOO"

-- DROP DATABASE "cooperativaPOO";

CREATE DATABASE "cooperativaPOO"
  WITH OWNER = postgres
       ENCODING = 'UTF8'
       TABLESPACE = pg_default
       LC_COLLATE = 'C.UTF-8'
       LC_CTYPE = 'C.UTF-8'
       CONNECTION LIMIT = -1;


-- Table: public.persona

-- DROP TABLE public.persona;

CREATE TABLE public.persona
(
  identidad character(20),
  nombre character(50),
  apellido character(50),
  "numero-celular" character(8),
  "numero-telefono" character(8)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE public.persona
  OWNER TO postgres;


-- Table: public.prestamo

-- DROP TABLE public.prestamo;

CREATE TABLE public.prestamo
(
  "codigo-usuario" integer,
  "cantidad-cuotas" integer,
  "fecha-tentatitiva-acreditacion" date,
  "fecha-autorizacion" date,
  "estado-prestamo" boolean,
  "codigo-prestamo" character(10) NOT NULL,
  CONSTRAINT prestamo_pkey PRIMARY KEY ("codigo-prestamo")
)
WITH (
  OIDS=FALSE
);
ALTER TABLE public.prestamo
  OWNER TO postgres;


-- Table: public.usuario

-- DROP TABLE public.usuario;

CREATE TABLE public.usuario
(
  "tipo-usuario" integer,
  "codigo-usuario" integer NOT NULL,
-- Inherited from table persona:  identidad character(20),
-- Inherited from table persona:  nombre character(50),
-- Inherited from table persona:  apellido character(50),
-- Inherited from table persona:  "numero-celular" character(8),
-- Inherited from table persona:  "numero-telefono" character(8),
  correo character(50),
  contrasena character(20),
  CONSTRAINT "tbl-usuario_pkey" PRIMARY KEY ("codigo-usuario"),
  CONSTRAINT "tbl-usuario_tipo-usuario_fkey" FOREIGN KEY ("tipo-usuario")
      REFERENCES public.tipo ("tipo-usuario") MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION
)
INHERITS (public.persona)
WITH (
  OIDS=FALSE
);
ALTER TABLE public.usuario
  OWNER TO postgres;

-- Table: public.cuota

-- DROP TABLE public.cuota;

CREATE TABLE public.cuota
(
  "codigo-cuota" integer NOT NULL,
  "monto-pago" double precision,
  "fecha-pago" date,
  "codigo-prestamo" character(10),
  CONSTRAINT "tbls-cuota_pkey" PRIMARY KEY ("codigo-cuota"),
  CONSTRAINT "cuota_codigo-prestamo_fkey" FOREIGN KEY ("codigo-prestamo")
      REFERENCES public.prestamo ("codigo-prestamo") MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION
)
WITH (
  OIDS=FALSE
);
ALTER TABLE public.cuota
  OWNER TO postgres;

-- Table: public.tipo

-- DROP TABLE public.tipo;

CREATE TABLE public.tipo
(
  "tipo-usuario" integer NOT NULL,
  definicion character(20),
  CONSTRAINT "tipo-usuario_pkey" PRIMARY KEY ("tipo-usuario")
)
WITH (
  OIDS=FALSE
);
ALTER TABLE public.tipo
  OWNER TO postgres;



