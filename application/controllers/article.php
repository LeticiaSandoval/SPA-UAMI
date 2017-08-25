<?php
/**
* 
*/
class Article extends CI_Controller
{
	
	public function usuario($id = '')
	{
		$fila = $this->usuario->getUsuarioByName($id);

		echo $fila->usuario;
	}
}
?>