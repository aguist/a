<?php

class EnlacesPaginas {

	public function enlacesPaginasModel($enlacesModel){
		if ($enlacesModel == "nosotros" || $enlacesModel == "inicio" || $enlacesModel == "contactenos" ) {

			$module = "views/module".$enlacesModel.".php";
			
		}
		return $module;
	}

}

?>