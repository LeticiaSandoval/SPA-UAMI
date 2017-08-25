<?php
/**
* 
*/
class Article extends CI_Controller
{
	
	public function usuario($id = '')
	{
		$fila = $this->usuario->getUsuarioByName($id);

		$data  = array('title' => $fila->email);
		$this->load->view("/invitado/head",$data);
		$data = array('mensaje' => 'SPA-UAMI');
		$this->load->view("/invitado/nav",$data);
		$data  = array('mensaje' => $fila->email,
			'descripcion'=> $fila->contraseña);
		$this->load->view("/invitado/header",$data);

		$data = array('contenido' => $fila->contraseña);
		$this->load->view("/invitado/post", $data);

		$this->load->view("/invitado/footer", $data);


	}
}
?>