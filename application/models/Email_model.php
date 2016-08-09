<?php 

class Email_model extends CI_Model
{
	public function getmails()
	{
		$query=$this->db->get('Subscribe');
    	return $query->result_array() ;
	}
}