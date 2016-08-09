<?php 
/**
* 
*/
class Part extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct('part_model');
	}

	function showAll()
	{
		$data['type'] = 'part';
		$this->load->model('partner_model');
		$data['products'] = $this->getImages($this->getAll());
		$data['partners'] = $this->partner_model->getAll();
		$this->load->view('products.php' , $data);
	}


}
 ?>