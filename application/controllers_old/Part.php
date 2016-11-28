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
		$this->load->model('partner_model');
	}

	function showAll()
	{
		
	$q_printer = $this->partner_model->get_printer();
	foreach($q_printer->result() as $key => $row)
	{
		$data['results_printer'][$row->printer_id]['printer_id'] = $row->printer_id;
		$data['results_printer'][$row->printer_id]['family_id'] = $row->family_id;
		$data['results_printer'][$row->printer_id]['name'] = $row->name;
	}
	
	
		$data['type'] = 'part';
		$data['products'] = $this->getImages($this->getAll());
		$data['partners'] = $this->partner_model->getAll();
		$data['contact'] = $this->model->getContact();
		$this->load->view('products.php' , $data);
	}

	function add()
	{
		$this->load->model('family_model');
		
	$q_printer = $this->partner_model->get_printer();
	foreach($q_printer->result() as $key => $row)
	{
		$data['results_printer'][$row->printer_id]['printer_id'] = $row->printer_id;
		$data['results_printer'][$row->printer_id]['family_id'] = $row->family_id;
		$data['results_printer'][$row->printer_id]['name'] = $row->name;
	}
	
	
		$data['type'] = 'part';
		$data['families'] = $this->family_model->select_all_families();
		$data['products'] = $this->getImages($this->getAll());
		$data['tags'] = $this->model->getTags();
		$data['contact'] = $this->model->getContact();
		$this->load->view('CMS/Products' , $data);
	}

}
 ?>