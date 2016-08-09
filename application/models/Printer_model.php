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

	



}
 ?>