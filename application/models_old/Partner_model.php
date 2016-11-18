<?php 
/**
* 
*/
class Partner_model extends CI_Model
{

	protected $table_name = "partners" ;
	
	function __construct()
	{
		parent::__construct();
	}

	function getAll()
	{
		return $this->db->get($this->table_name)->result_array() ;
	}
}
 ?>