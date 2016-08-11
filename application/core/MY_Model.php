<?php 

/**
* 
*/
class MY_Model extends CI_Model
{
	protected $table_name ;
	protected $table_image ;
	protected $family_table ;
	
	function __construct()
	{
		parent::__construct();
		$this->family_table = 'families';
	}

	function getAll()
	{
		return $this->db->get($this->table_name)->result_array();
	}

	protected function images($product_id)
	{
		$this->db->select('image_path');
		return $this->db->get($this->table_image , $product_id)->result_array();
	}

	function insert($data)
	{
		$this->db->insert($this->table_name , $data);
		return $this->db->insert_id();
	}

}

 ?>