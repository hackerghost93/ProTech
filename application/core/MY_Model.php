<?php 

/**
* 
*/
class MY_Model extends CI_Model
{
	protected $table_name ;

	function __construct()
	{
		parent::__construct();
	}

	function getAll()
	{
		return $this->db->get($this->table_name)->result_array();
	}
}

 ?>