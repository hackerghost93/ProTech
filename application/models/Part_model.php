<?php 

/**
* 
*/
class Part_model extends MY_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->table_name = "parts" ;
		$this->table_image = "part_image" ;
	}

	function getImages($arr)
	{
		for($i = 0 ; $i < count($arr) ; $i++)
		{
			if(isset($arr[$i]['part_id']))
				$arr[$i]['images'] = $this->images($arr[$i]['part_id']);
		}
		return $arr ;
	}

	function get($id)
	{
		$this->db->where('part_id =' , $id );
		$ret = $this->db->get($this->table_name)->row_array();
		$ret['image'] = $this->images($ret['printer_id']);
		return $ret ;
	}
}
 ?>