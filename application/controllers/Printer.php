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
	}

	function index()
	{
		$this->load->model('partner_model');
		$data['partners'] = array();
		$data['printers'] = $this->getImages($this->getAll());
		$data['partners'] = $this->partner_model->getAll();
		$this->load->view('hackerindex' , $data);	
	}

	function showAll()
	{
		$data['type'] = 'printer';
		$data['products'] = $this->getImages($this->getAll());
		$this->load->model('partner_model');
		$data['partners'] = $this->partner_model->getAll();
		$this->load->view('products.php' , $data);
	}

	function add()
	{
		$data['type'] = 'printer' ;
		$this->load->model('family_model');
		$data['families'] = $this->family_model->select_all_families();
		$data['products'] = $this->getImages($this->getAll());
		$this->load->view('CMS/Products' , $data);
	}


	function create()
	{
		$post = $this->input->post();
		var_dump($post) ;
		var_dump($_FILES);
		/// set common variables 
		$data['name'] = $post['printer_name'];
		$data['family_id'] = $post['family'];
		$data['driver'] = $post['ProductDriverLink']; 
		$data['general_description'] = $post['description'];


		$pdf = $this->upload('PDF');
		
		$id = 0 ;

		$data['pdf'] = $pdf[0];

		var_dump($data) ;

		$id = $this->model->insert($data);	
		
		var_dump($id);	

		if($id != 0 || $id != null)
		{
			// add images 
			$images = $this->upload('image');
			var_dump($images);
			foreach ($images as $image) {
				$this->model->addImage($id , $image);
			}
			// general 	
			foreach ($post['General'] as $key) {
				$this->model->addGeneral($id,$key);
			}
			// add printing 
			foreach ($post['Printing'] as $key) {
				$this->model->addPrinting($id,$key);
			}
			// add guarantee
			foreach ($post['Guarantee'] as $key) {
				$this->model->addGuarantee($id,$key);
			}
		}

		header("Location: ".base_url()."index.php/printer/add");

	}


}
 
 ?>