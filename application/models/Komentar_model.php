<?php

class Komentar_model extends CI_Model
{
	private $_table = 'komentar';


	public function insert($komentar)
	{
		return $this->db->insert($this->_table, $komentar);
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