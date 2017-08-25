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
		
<<<<<<< HEAD
		$result=$this->usuario->getUsuario();
=======
		$result=$this->db->get('usuario');
>>>>>>> e45054f7be7ac09fc393c0ac00fa4db8de8bc42d
		$data  = array('consulta' =>  $result);
		$this->load->view("invitado/content",$data);
		$this->load->view("/invitado/footer");

		$this->load->view("home",$data);

	}
}

?>