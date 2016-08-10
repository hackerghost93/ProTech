<?php 

/**
* 
*/
class MY_Controller extends CI_Controller
{

	public $model ;
	
	function __construct($mod)
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('security');
		$this->load->model($mod , 'model');
	}

	function getAll()
	{
		return $this->model->getAll();
	}

	private function validate($data)
	{
		return TRUE ;
	}

	private function validateID($id)
	{
		if(is_numeric($id) && $id > 0)
			return TRUE;
		else
			return FALSE ;
	}

	function create()
	{
		$data = $this->input->post();
		if(validate($data) == TRUE)
		{
			$this->model->insert($data);
		}		
		else
			return FALSE ;
	}	

	function update($id)
	{
		$data = $this->input->post();
		$data['id'] = $id ;
		if(validate($data)== TRUE)
		{
			$this->model->update($data);
		}
			return FALSE ;
	}

	function delete($id)
	{
		return ($this->validateID($id) == TRUE ? $this->model->delete($id) : FALSE); 
	}

	function show($id)
	{
		if($this->validateID($id))
		{
			$data['product'] =  ($this->validateID($id) == TRUE ? $this->model->get($id) : FALSE );
			$this->load->view('productdetails', $data);
		}
		else
			show_404();
	}

	function getImages($arr)
	{
		return (count($arr) == 0 ?  FALSE : $this->model->getImages($arr) ) ;
	}

}


 ?>