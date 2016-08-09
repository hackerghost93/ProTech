<?php 

/**
* 
*/
class MY_Model extends CI_Model
{
	protected $table_name ;
	protected $table_image ;

	function __construct()
	{
		parent::__construct();
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

}

 ?>