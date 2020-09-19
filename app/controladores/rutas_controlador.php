<?php 
	class RutasControlador{

		public function ProcesarRuta($vista){
			$peticion = "app/vistas/".$vista."_vista.php";

			if (file_exists($peticion)) {
				$respuesta = $peticion;
			}else{
				$respuesta = "app/vistas/404_vista.php";
			}
			return $respuesta;
		}
	}
 ?>