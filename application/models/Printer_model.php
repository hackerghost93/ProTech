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

	function selectWithFamilies()
	{
		$this->db->select('*');
		$this->db->from('printers');
		$this->db->join('families','families.family_id = printers.family_id' , "left");
		return $this->db->get()->result_array();
	}

	function addImage($id , $target)
	{
		$this->db->insert('printer_image' , array('printer_id' => $id , 'image_path' => $target ));
	}

	function addGeneral($id , $desc)
	{
		$this->db->insert('printer_general_specification' , array('printer_id' => $id , 'general_text' => $desc ));
	}

	function addPrinting($id , $desc)
	{
		$this->db->insert('printer_typing_specification' , array('printer_id' => $id , 'typing_text' => $desc ));
	}

	function addGuarantee($id,$desc)
	{	
		$this->db->insert('guarantee' , array('printer_id' => $id , 'guarantee_text' => $desc));
	}

	



}
 ?>