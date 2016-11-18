<?php 

/**
* 
*/
class Subscribe_model extends CI_Model
{
	protected $table_name ;
	
	function __construct()
	{
		parent::__construct();
		$this->table_name = "subscribers";
	}

	private function validateEmail($mail)
	{
		if($mail != null)
			return TRUE ;
		return FALSE ;
	}

	function add($mail)
	{
		if($this->validateEmail($mail))
		{
			$this->db->set('email', $mail);
			$this->db->insert($this->table_name);
			echo json_encode(array('state' => 'success'));
		}
		else
			echo json_encode(array('state' => 'fail'));
	}

	function delete($mail)
	{	
		$this->db->where('email = ' , $mail);
		$this->db->delete();
		return $this->db->affected_rows();
	}

	function getSubscribers()
	{
		return $this->db->get($this->table_name)->result_array();
	}
}
 ?>