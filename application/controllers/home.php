<?php

/**
* 
*/
class Home extends CI_Controller
{
	public function index()
	{
		$data  = array('title' => 'SPA-UAMI','mensaje'=> 'SPA-UAMI', 'descripcion' => 'Bienvenido a SPA-UAMI');
		$this->load->view("/invitado/head",$data);
		$this->load->view("/invitado/nav",$data);
		$this->load->view("/invitado/header",$data);
		

		$result=$this->usuario->getUsuario();

		$data  = array('consulta' =>  $result);
		$this->load->view("invitado/content",$data);
		$this->load->view("/invitado/footer");

		$this->load->view("home",$data);

	}
}

?>