<?php 

/**
* 
*/
class Printer extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct('printer_model');
	}

	function index()
	{
		$this->load->model('partner_model');
		$data['printers'] = $this->getImages($this->getAll());
		$data['partners'] = $this->partner_model->getAll();
		$this->load->view('index' , $data);	
	}






}
 
 ?>