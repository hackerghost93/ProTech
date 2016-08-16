<?php 

class Family_model extends CI_Model
{
	public function select_all_families()
	{
		$query=$this->db->get('families');
		if($query->num_rows()>=1)
		    return $query->result_array();
        else
            return array();
	}
	public function add_family($data)
    {
    	$this->db->insert('families',$data);
    	
    }
    public function edit_family($id,$data)
    {
    	$this->db->where('family_id',$id);
    	$this->db->update('families', $data);
    }
    public function delete_family($id)
    {
    	$this->db->where('family_id',$id);
    	$this->db->delete('families');
    }

    public function search_family($search)
    {
    	$query="SELECT * FROM families 
    	         WHERE family_name LIKE '%$search%'";
    	return $this->db->query($query)->result_array();       
    }

    public function checkFamily($familyname)
    {
        $query = $this->db->query("SELECT * FROM `families` 
                                  WHERE  `family_name`='$familyname' 
                                 ");
        return $query;
        
            
    }
}