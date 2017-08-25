<?php 
/**
* 
*/
class Usuario extends CI_Model
{
	public function getUsuario()
	{
		return $this->db->get('usuario');
	}

	public function getUsuarioByName($id = '')
	{
		$result = $this->db->query("SELECT * FROM usuario WHERE id_usuario = '" . $id ."' LIMIT 1");
		return $result->row();
	}
}



?>	 