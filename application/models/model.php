<?php
class Model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function insert($table,$data)
	{
		$query = $this->db->insert($table,$data);
		if ($query) 
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function Select($table)
	{
		$query = $this->db->get($table);
		return $query->result();
	}
	public function Dbdelete($table,$whereClause)
	{
		$this->db->where($whereClause);
		$query = $this->db->delete($table);
		return $query;
	}
	public function DBedit($table,$whereClause)
	{
		$this->db->where($whereClause);
		$query = $this->db->get($table);
		return $query->row();
	}
	public function DBupdate($table,$whereClause,$data)
	{
		$this->db->where($whereClause);
		$query = $this->db->update($table,$data);
		return $query;
	}
}

?>