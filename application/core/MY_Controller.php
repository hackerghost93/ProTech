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
		return TRUE ;
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
		return ( validateID($id) == TRUE ? $this->model->delete($id) : FALSE); 
	}

	function get($id)
	{
		return (validateID($id) == TRUE ? $this->model->get($id) : FALSE );
	}

	function getImages($arr)
	{
		return (count($arr) == 0 ?  FALSE : $this->model->getImages($arr) ) ;
	}
}


 ?>