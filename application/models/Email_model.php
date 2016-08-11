<?php 

class Email_model extends CI_Model
{
	public function getmails()
	{
		$query=$this->db->get('subscribers');
    	return $query->result_array() ;
	}

	public function addRecievedMsg($data)
	{
		$this->db->insert('email_msgs',$data);
	}
}