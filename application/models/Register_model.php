<?php

class Register_model extends CI_Model
{
	private $_table = 'user';


	public function insert($register)
	{
		return $this->db->insert($this->_table, $register);
	}


	public function get_by_id($id)
	{
		$query = $this->db->get_where($this->_table, $id);

		return $query->result();
	}

	public function get()
	{
		$query = $this->db->get($this->_table);
		return $query->result();
	}

}