<?php 

/**
* 
*/
class Plan_model extends CI_Model
{

	protected $table_name ;
	
	function __construct()
	{
		parent::__construct();
		$this->table_name = 'plans' ;
	}

	function getPlans($type)
	{
		$items = array();
		$this->db->where('type = ' , $type);
		// $this->db->limit(3);
		$this->db->order_by('plane_id' ,'desc');
		$items = $this->db->get($this->table_name)->result_array();
		for($i = 0 ; $i < count($items) ; $i++)
		{
			$items[$i]['items'] = $this->getItems($items[$i]['plane_id']);
		}

		return $items ;
	}


	private function getItems($id)
	{
		$this->db->where('plane_id = ' ,$id);
		return $this->db->get('plan_item')->result_array();
	}
}

 ?>