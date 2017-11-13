-- Table: public.persona

-- DROP TABLE public.persona;

CREATE TABLE persona(identidad character(13),nombre character(50), apellido character(50), n_telefono character(8), n_celular character(8) );




-- Table: public.tipo_usuario

-- DROP TABLE public.tipo_usuario;

CREATE TABLE tipo_usuario(tipo_usuario integer NOT NULL, descripcion character(30), CONSTRAINT tipo_usuario_pkey PRIMARY KEY (tipo_usuario));



CREATE TABLE usuario(codigo_usuario serial, tipo_usuario integer, nombre_usuario character(20), contrasena character(50),  PRIMARY KEY (codigo_usuario),  FOREIGN KEY (tipo_usuario) REFERENCES tipo_usuario (tipo_usuario) ) INHERITS (persona);







CREATE TABLE  estado_prestamo(estado_prestamo integer NOT NULL, descripcion character(50), PRIMARY KEY (estado_prestamo));

 

CREATE TABLE prestamo(codigo_prestamo serial, codigo_usuario integer, estado_prestamo integer, monto_prestamo double precision, fecha_solicitud date, fecha_aprobacion date, fecha_tentativa date, PRIMARY KEY (codigo_prestamo), FOREIGN KEY (codigo_usuario)REFERENCES usuario (codigo_usuario) MATCH SIMPLE ON UPDATE NO ACTION ON DELETE NO ACTION, FOREIGN KEY (estado_prestamo) REFERENCES estado_prestamo (estado_prestamo) MATCH SIMPLE ON UPDATE NO ACTION ON DELETE NO ACTION);



CREATE TABLE estado_cuota(estado_cuota integer NOT NULL, descripcion character(50), PRIMARY KEY (estado_cuota));


CREATE TABLE cuota(codigo_cuota serial NOT NULL,codigo_prestamo integer, estado_cuota integer, fecha_pago date, monto_cuota double precision, PRIMARY KEY (codigo_cuota), FOREIGN KEY (codigo_prestamo) REFERENCES prestamo (codigo_prestamo) MATCH SIMPLE ON UPDATE NO ACTION ON DELETE NO ACTION, FOREIGN KEY (estado_cuota) REFERENCES estado_cuota (estado_cuota) MATCH SIMPLE ON UPDATE NO ACTION ON DELETE NO ACTION );

