<?php 

/**
* 
*/
class Printer extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('printer_model' , 'model');
		$this->model->getAll();
	}

	function index()
	{

	}
}
 
 ?>