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
		$this->load->model('partner_model');
	}

	function index()
	{
		$this->load->model('partner_model');
		$data['partners'] = array();
		$data['printers'] = $this->getImages($this->getAll());
		$data['partners'] = $this->partner_model->getAll();
		$data['offers'] = $this->getImages($this->getOffers());
		$data['contact'] = $this->model->getContact();
		$data['slides'] = $this->model->getSlides();
		$this->load->view('hackerindex' , $data);	
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
		
		
		$data['type'] = 'printer';
		$data['products'] = $this->getImages($this->getAll());
		$this->load->model('partner_model');
		$data['partners'] = $this->partner_model->getAll();
//		$data['contact'] = $this->model->getContact();
		$this->load->view('products.php' , $data);
	}

	function add()
	{
		$data['type'] = 'printer' ;
		$this->load->model('family_model');
		
	$q_printer = $this->partner_model->get_printer();
	foreach($q_printer->result() as $key => $row)
	{
		$data['results_printer'][$row->printer_id]['printer_id'] = $row->printer_id;
		$data['results_printer'][$row->printer_id]['family_id'] = $row->family_id;
		$data['results_printer'][$row->printer_id]['name'] = $row->name;
	}
	
		$data['families'] = $this->family_model->select_all_families();
		$data['products'] = $this->getImages($this->getAll());
		$data['tags'] = $this->model->getTags();
		$this->load->view('CMS/Products' , $data);
	}







}
 
 ?>