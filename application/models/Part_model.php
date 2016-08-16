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
		$condition = 'part_id = ';
		for($i = 0 ; $i < count($arr) ; $i++)
		{
			if(isset($arr[$i]['part_id']))
				$arr[$i]['images'] = $this->images($arr[$i]['part_id'],$condition.$arr[$i]['part_id']);
		}
		return $arr ;
	}

	function get($id)
	{
		$this->db->where('part_id =' , $id );
		$ret = $this->db->get($this->table_name)->row_array();
		$ret['image'] = $this->images($ret['part_id'],'part_id = '.$ret['part_id']);
		return $ret ;
	}

	function selectWithFamilies()
	{
		$this->db->select('*');
		$this->db->from('parts');
		$this->db->join('families','families.family_id = parts.family_id ' , "left");
		return $this->db->get()->result_array();
	}

	function delete($id)
	{
		$this->db->where('part_id = ' , $id);
		$this->db->delete($this->table_name);
	}

	function getPrinting($id)
	{
		$this->db->from('parts_typing_specification');
		$this->db->where('part_id = ' ,$id);
		return $this->db->get()->result_array(); 
	}

	function getGeneral($id)
	{
		$this->db->from('parts_general_specification');
		$this->db->where('part_id = ' ,$id);
		return $this->db->get()->result_array();
	}

	function getGuarantee($id)
	{
		$this->db->from('parts_guarantee');
		$this->db->where('part_id = ' ,$id);
		return $this->db->get()->result_array();
	}
}
 ?>