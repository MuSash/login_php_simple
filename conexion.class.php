<?php 
require "./config/config.php";

class Conexion extends mysqli{

	public function __construct(){
		parent::__construct(HOST,USER_NAME,PASS,DB_NAME);//se inicializa el metodo constructor de la clase padre mysqli
		$this->set_charset('utf8');

		if($this->connect_errno){
			die('Error al conectar');
		}
		/*
		else{
			printf("Conectado ");
		}
		*/


		//$this->connect_error ? die('Error al conectar') : print 'Conectado ';
		//var_dump($this->get_charset());
	}
}
//$db= new conexion();



 ?>