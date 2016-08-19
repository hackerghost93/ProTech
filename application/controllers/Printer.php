<?php 

/**
* 
*/
class Printer extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct('printer_model');
		$this->condition = "printer_id" ;
		$this->myType = 'printer' ;
	}

	function index()
	{
		$this->load->model('partner_model');
		$data['partners'] = array();
		$data['printers'] = $this->getImages($this->getAll());
		$data['partners'] = $this->partner_model->getAll();
		$data['contact'] = $this->model->getContact();
		$this->load->view('hackerindex' , $data);	
	}

	function showAll()
	{
		$data['type'] = 'printer';
		$data['products'] = $this->getImages($this->getAll());
		$this->load->model('partner_model');
		$data['partners'] = $this->partner_model->getAll();
		$data['contact'] = $this->model->getContact();
		$this->load->view('products.php' , $data);
	}

	function add()
	{
		$data['type'] = 'printer' ;
		$this->load->model('family_model');
		$data['families'] = $this->family_model->select_all_families();
		$data['products'] = $this->getImages($this->getAll());
		$data['tags'] = $this->model->getTags();
		$this->load->view('CMS/Products' , $data);
	}







}
 
 ?>