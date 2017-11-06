<?php

	class Conexion extends PDO{

		private $username='postgres';
		private $password='';
		private $dbname='cooperativaPOO';
		private $host = 'localhost';
		private $puerto="5432";
		private $link; //nombre del enlace a la  coneccion 

		public function __construct(){
			$this->link= new PDO("pgsql:dbname=$this->dbname;  host=$this->host", $this->username, $this->password );
			if (!$this->link){
				echo "No se pudo conectar con mysql";
				exit;
			}		
		}


		public function cerrarConexion(){
			$this->link==NULL;
		}

		public function ejecutarInstruccion($sql){
			return $this->link->query($sql);
		}

	
	
		public function getUserName(){
			return $this->username;
		}
		public function setUserName($usuario){
			$this->usename = $usuario;
		}
		public function getPassword(){
			return $this->password;
		}
		public function setPassword($pass){
			$this->password= $pass;
		}
		public function getHost(){
			return $this->host;
		}
		public function setHost($host){
			$this->host = $host;
		}
		public function getDbName(){
			return $this->dbname;
		}
		public function setDbName($baseDatos){
			$this->dbname = $baseDatos;
		}
		public function getPuerto(){
			return $this->puerto;
		}
		public function setPuerto($puerto){
			$this->puerto = $puerto;
		}
	

	}
?>