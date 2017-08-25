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
		$result = $this->db->query("SELECT * FROM  WHERE id_usuario =''" . $id);
		return $result->row();
	}
}



?>	 