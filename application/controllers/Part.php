<?php 
/**
* 
*/
class Part extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct('part_model');
		$this->condition = "part_id";
		$this->myType = 'part' ;
	}

	function showAll()
	{
		$data['type'] = 'part';
		$data['products'] = $this->getImages($this->getAll());
		$this->load->model('partner_model');
		$data['partners'] = $this->partner_model->getAll();
		$this->load->view('products.php' , $data);
	}

	function add()
	{
		$this->load->model('family_model');
		$data['type'] = 'part';
		$data['families'] = $this->family_model->select_all_families();
		$data['products'] = $this->getImages($this->getAll());
		$data['tags'] = $this->model->getTags();
		$this->load->view('CMS/Products' , $data);
	}

}
 ?>