<?php 

/**
* 
*/
class MY_Model extends CI_Model
{
	protected $table_name ;
	protected $table_image ;
	protected $family_table ;
	
	function __construct()
	{
		parent::__construct();
		$this->family_table = 'families';
	}

	function getContact()
	{
		return $this->db->get('contact')->row_array();
	}

	function getSlides()
	{
		return $this->db->get('slide_show')->result_array();
	}

	function getOffers()
	{
		$this->db->where('offer = 1');
		return $this->db->get($this->table_name)->result_array();
	}

	function getAll()
	{
		return $this->db->get($this->table_name)->result_array();
	}

	function getByTag($tag_name)
	{
		// echo $this->table_name;
		if($this->table_name == 'printers')
			$this->db->join('printer_tags','printers.printer_id = printer_tags.printer_id');
		else
			$this->db->join('part_tag','parts.part_id = part_tag.part_id');
		$this->db->where('tag_name',$tag_name);
		return $this->db->get($this->table_name)->result_array();
	}

	function getProductTags($type,$id)
	{
		if($type == 'printer')
		{
			$this->db->where('printer_id = ' , $id);
			return $this->db->get('printer_tags')->result_array();			
		}
		else
		{
			$this->db->where('part_id = ' , $id);
			return $this->db->get('part_tag')->result_array();
		}
	}

	function addTag($id,$tag,$type)
	{
		if($type == 'printer')
			$this->db->insert('printer_tags', array('printer_id' => $id , 'tag_name' => $tag));
		else
			$this->db->insert('part_tag' , array('part_id' => $id , 'tag_name' => $tag));
	}

	function getTags()
	{
		return $this->db->get('tags')->result_array();
	}

	function images($product_id,$condition)
	{
		$this->db->select('image_path');
		$this->db->where($condition);
		return $this->db->get($this->table_image , $product_id)->result_array();
	}

	function insert($data)
	{
		$this->db->insert($this->table_name ,$data);
		return $this->db->insert_id();
	}

	function deleteImage($path , $type)
	{
		if($type == 'printer')
		{
			$this->db->from('printer_image');
		}
		else
		{
			$this->db->from('part_image');
		}
		$this->db->where('image_path = ' , $path);
		$this->db->delete();
	}

	function update($id,$myType,$arr)
	{
		$this->db->set($arr);
		//var_dump($arr);
		if($myType == 'printer')
			$this->db->where('printer_id = ' , $id);
		else
			$this->db->where('part_id = ' , $id);
		$this->db->update($this->table_name);
	}


}

 ?>