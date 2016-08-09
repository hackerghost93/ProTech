<?php 

/**
* 
*/
class printer_model extends MY_Model
{
	

	function __construct()
	{
		parent::__construct();
		$this->table_name = "printers" ;
		$this->table_image = "printer_image" ;
	}

	function getImages($arr)
	{
		for($i = 0 ; $i < count($arr) ; $i++)
		{
			if(isset($arr[$i]['printer_id']))
				$arr[$i]['images'] = $this->images($arr[$i]['printer_id']);
		}
		return $arr ;
	}

	function get($id)
	{
		$this->db->where('printer_id =' , $id );
		$ret =  $this->db->get($this->table_name)->row_array();
		$ret['image'] = $this->images($ret['printer_id']);
		return $ret ;
	}

	



}
 ?>