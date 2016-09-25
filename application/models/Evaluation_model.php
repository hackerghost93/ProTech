<?php 

/**
* 
*/
class Evaluation_model extends CI_Model
{
	
	protected $table_name ;
	function __construct()
	{
		parent::__construct();
		$this->table_name = "evaluations";
	}


	function get($id)
	{
		$this->db->where("id = ",$id);
		return $this->db->get($this->table_name)->result_array();
	}

	function add($data)
	{
		$this->db->insert($this->table_name,$data);
	}

	function delete($id)
	{
		$this->db->where("id = " , $id);
		$this->db->delete($this->table_name);
	}

	function showAll()
	{
		return $this->db->get($this->table_name)->result_array();
	}	
}
 ?>