<?php 

/**
* 
*/
class MY_Controller extends CI_Controller
{

	public $model ;
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('security');
		$this->load->library('input');
	}

	function getAll()
	{
		$ret = $model->getAll();
		echo json_encode(array('state' => 'success' , 'products' => $ret));
	}

	function create()
	{
		$data = $this->input->post();
		
	}	

	function update()
	{

	}

	function delete()
	{

	}
}


 ?>