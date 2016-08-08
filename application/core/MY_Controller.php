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
	}

	function getAll()
	{
		return $model->getAll();
	}


}


 ?>