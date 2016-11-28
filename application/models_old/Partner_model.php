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
	
	
	function get_printer() 
	{
		$SQL = "select * FROM printers ";
		$query = $this->db->query($SQL);
		return $query;
	}
	
	
	
	public function select_all_printers()
	{
		$query=$this->db->get('printers');
		if($query->num_rows()>=1)
		    return $query->result_array();
        else
            return array();
	}
	
	
	
}
 ?>