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
		return $this->model->selectWithFamilies();
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

	function upload($name)
	{
		$ret = array();
		if(isset($_FILES[$name]))
		{
			for($i = 0  ; $i < count($_FILES[$name]['name']) ; $i++)
			{
				if(is_uploaded_file($_FILES[$name]['tmp_name'][$i]))
				{
					$temp = explode('.', $_FILES[$name]['name'][$i]);
					$imageFileType = end($temp);	
					$target_name ='image_' . date('Y-m-d-H-i-s') . '_' . uniqid().".".$imageFileType;
					if(file_exists(image_url().$target_name)) {
						chmod(image_url().$target_name,0755); //Change the file permissions if allowed
					    	unlink(image_url().$target_name); //remove the file
			    	}
	 				$target_dir = "imgs/";
			    	$target_file = $target_dir.$target_name;
			    	$uploadok = 1 ;
			    	$check = getimagesize($_FILES[$name]["tmp_name"][$i]);
				    if ($_FILES[$name]['size'][$i] > 500000) {
				    	echo "Sorry, your file is too large.";
				    	$uploadok = 0 ;
				    	die();
				 	}
			 		else
			 		{		
				 		if (move_uploaded_file($_FILES[$name]['tmp_name'][$i], $target_file)) {
					 			echo "Upload Complete\n";
					 			array_push($ret , $target_file) ;
				 		}
						else 
			 			{
				 			echo 'something went wrong';
			 			}
		 			}
				}
				
			}
		}
		return $ret ;
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