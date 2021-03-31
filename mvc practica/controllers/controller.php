<?php

class MvcController{

	public function plantilla(){
		include "views/template.php";
	}

	public function enlacesPaginasController(){

		$enlacesController = $_GET["action"];


		$respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);

		include $respuesta;



	}
}


?>