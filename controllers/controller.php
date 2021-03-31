<?php


class MvcContoller{

	public function plantilla(){

		include "views/template.php";

	}

	public function enlacesPaginasControler(){

		if (isset$_GET["action"]){
			$enlacesController = $_GET["action"];
		}else {
			$enlacesController = "index";
		}



		$respuesta = EnlacesModel::enlacesPaginasModel($enlacesController);

		include $respuesta;

	}



		


	}
}


?>