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
		$this->db->insert('emails',$data);
	}

	public function getAll()
	{
		$query=$this->db->get('emails');
		if($query->num_rows()>=1)
		return $query->result_array();
	}
	public function getById($id)
	{
		$this->db->where('id',$id);
		$query=$this->db->get('emails');
		if($query->num_rows()>=1)
		return $query->row();
	}
	public function delete_message($id)
    {
    	$this->db->where('id',$id);
    	$this->db->delete('emails');
    }

     public function search_message($search)
    {
    	$query="SELECT * FROM emails
    	         WHERE name LIKE '%$search%'";
    	return $this->db->query($query)->result_array();       
    }
}