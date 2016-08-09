<?php 
/**
* 
*/
class Subscribe extends CI_Controller
{	
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('subscribe_model');
	}

	function index()
	{
		echo 'here';
	}


	function add()
	{
		$this->subscribe_model->add($this->input->post('email'));
	}

	function delete($mail)
	{
		return $this->subscribe_model->delete($mail);
	}

	function getSubscribers()
	{
		return $this->subscribe_model->getSubscribers();
	}
}
 ?>