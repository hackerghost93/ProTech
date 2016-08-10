<?php 

class Email_model extends CI_Model
{
	public function getmails()
	{
		$query=$this->db->get('subscribes');
    	return $query->result_array() ;
	}
}