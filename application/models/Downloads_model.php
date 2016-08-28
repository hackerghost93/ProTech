<?php 

/**
* 
*/
class Downloads_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function getAll($table_name)
	{
		return $this->db->get($table_name)->result();
	}

	function create($table_name,$data)
	{
		$this->db->insert($table_name,$data);
	}

	function delete($type , $id)
	{
		$this->db->where('id = ' , $id);
		if($type == 'pdf')
		{
			$this->db->delete('other_pdf');
		}
		else
		{
			$this->db->delete('other_drivers');
		}
	}
}

 ?>