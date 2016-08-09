<?php
class Awd_Model extends CI_Model{

    public function AddToDB($Tname,$data)
    {
        $this->db->insert($Tname,$data);
    }
    public function CheckDub($Tname,$var,$col)
    {
        $this->db->where($col,$var);
        $query=$this->db->get($Tname);
        if($query->num_rows()==0){return false;}
        else{return true;}
    }
	//return data arranged
	public function ReturnDataArranged($Tname,$ArBy,$ArMod)
	{
		$this->db->select('*');
		$this->db->from($Tname);
		$this->db->order_by($ArBy,$ArMod);
		$query=$this->db->get();
		$res=$query->result();
		return $res;
	}
	//get all data from table
    public function GetData($Tname)
    {
    	$query=$this->db->get($Tname);
    	$res=$query->result();
    	return $res;
    }
    //get one row from table
    public function ChData($Tname,$var,$col)
    {
    	$this->db->where($col,$var);
    	$query=$this->db->get($Tname);
        if($query->num_rows()==0){return false;}
    	$res=$query->result();
    	return $res[0];
    }
    //get one value from table
    public function GetOneValue($Tname,$var,$col,$attr)
    {
        $this->db->where($col,$var);
        $result=$this->db->get($Tname);
        if($result->num_rows()==0)
        {return false;}
        else{
        $x=$result->row(0)->$attr;
        return $x;}
    }
    //get one coulmn from table where ....
    public function GetCoulmnWhere($Tname,$col,$Bcol,$Val)
    {

        $this->db->select($col);
        $this->db->where($Bcol,$Val);
        $query=$this->db->get($Tname);
        $res=$query->result();
        for ($i=0; $i <sizeof($res) ; $i++) { 
            $Fres[$i]=$res[$i]->$col;
        }
        return $Fres;
    }
    //get all data from table where ....
    public function DataWhere($Tname,$cond,$var,$ArBy,$ArMod)
    {
    	$this->db->where($cond,$var);
    	$this->db->order_by($ArBy,$ArMod);
    	$query=$this->db->get($Tname);
    	$res=$query->result();
    	return $res;
    }
    public function Login($username, $password)
    {       
        $this->db->where('username',$username);
        $this->db->where('password',$password);  
        $result=$this->db->get('admins');
        if($result->num_rows()==1){
            $Res = $result->row(0);
            return $Res;
        }
        else{
            return False;
        }
    }

}

?>