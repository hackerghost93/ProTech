<?php 

/**
* 
*/
class MY_Controller extends CI_Controller
{

	public $model ;
	protected $condition ;
	protected $myType ;
	protected $target_dir ;
	
	function __construct($mod)
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('security');
		$this->load->model($mod , 'model');
		$this->target_dir = 'imgs/';
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
	var_dump($_FILES);
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
				    	unlink(image_url().$target_name); //remove the file
				    }
				    // $target_dir = "imgs/";
				    $target_file = $this->target_dir.$target_name;
				    $uploadok = 1 ;
				    // $check = getimagesize($_FILES[$name]["tmp_name"][$i]);
				    if ($_FILES[$name]['size'][$i] > 500000) {
				    	echo "Sorry, your file is too large.";
				    	$uploadok = 0 ;
				    	// die();
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

	function uploadFile($name)
	{
	if(isset($_FILES[$name]) && $_FILES[$name]['tmp_name'] != "")
	{
		if(is_uploaded_file($_FILES[$name]['tmp_name']))
		{
			$temp = explode('.', $_FILES[$name]['name']);
			$imageFileType = end($temp);	
			$target_name ='image_' . date('Y-m-d-H-i-s') . '_' . uniqid().".".$imageFileType;
			if(file_exists(image_url().$target_name)) {
				    	unlink(image_url().$target_name); //remove the file
				    }
				    // $target_dir = "imgs/";
				    $target_file = $this->target_dir.$target_name;
				    $uploadok = 1 ;
		//		    $check = getimagesize($_FILES[$name]["tmp_name"]);
				    if ($_FILES[$name]['size'] > 500000) {
				    	echo "Sorry, your file is too large.";
				    	$uploadok = 0 ;
				    	die();
				    }
				    else
				    {		
				    	if (move_uploaded_file($_FILES[$name]['tmp_name'], $target_file)) {
				    		// echo "Upload Complete\n";
				    		return $target_file ;
				    	}
				    	else 
				    	{
				    		echo 'something went wrong';
				    		return FALSE ;
				    	}
				    }
				}		
			}
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

	function delete()
	{
		$id = $this->input->post('id');
		if($this->validateID($id) ==  TRUE)
		{
			$this->model->delete($id);
			echo json_encode(array('state'=>'success'));
		}
		else
			echo json_encode(array('state' => 'fail'));
	}

	function show($id)
	{
		if($this->validateID($id))
		{
			$response['state'] = 'success';
			$response['type'] = $this->myType;
			$response['product'] = $this->model->get($id);
			$response['images'] = $this->model->images($response['product'][$this->condition]
				,$this->condition."=".$response['product'][$this->condition]);
			$response['generals'] = $this->model->getGeneral($id);
			$response['typing'] = $this->model->getPrinting($id);
			$response['guarantee'] = $this->model->getGuarantee($id);
			$response['tags'] = $this->model->getProductTags($this->myType,$id);
			$response['contact'] = $this->model->getContact();
			$this->load->view('productdetails', $response);
		}
		else
			show_404();
	}

	function getImages($arr)
	{
		return (count($arr) == 0 ?  array() : $this->model->getImages($arr) ) ;
	}

	function deleteImage()
	{
		$path = $this->input->post('image');
		$type = $this->input->post('type');
		$this->model->deleteImage($path , $type);
		echo json_encode('state' , 'success');
	}

	function get($id)
	{
		if($this->validateID($id))
		{
			$response['state'] = 'success';
			$response['type'] = $this->myType;
			$response['data'] = $this->model->get($id);
			$response['images'] = $this->model->images($response['data'][$this->condition]
				,$this->condition."=".$response['data'][$this->condition]);
			$response['general'] = $this->model->getGeneral($id);
			$response['typing'] = $this->model->getPrinting($id);
			$response['guarantee'] = $this->model->getGuarantee($id);
			$response['tags'] = $this->model->getProductTags($this->myType,$id);
			$response['contact'] = $this->model->getContact();
			echo json_encode($response);
		}
		else 
			echo json_encode(array('state' => 'fail'));
	}

	function create()
	{
		$post = $this->input->post();
		// var_dump($post) ;
		// var_dump($_FILES);
		$data['name'] = $post['printer_name'];
		if($data['name'] === "")
		{
			echo 'no product name' ;
			die();
		} 
		if($post['family'] != 0)
			$data['family_id'] = $post['family'];
		$data['driver'] = $post['ProductDriverLink']; 
		$data['general_description'] = $post['description'];


		$pdf = $this->uploadFile('PDF');

		$id = 0 ;

		$data['pdf'] = $pdf;

		// var_dump($data) ;

		$id = $this->model->insert($data);	

		// var_dump($id);	

		if($id != 0 || $id != null)
		{
			// add images
			if(isset($_FILES['image']))
			{
				$images = $this->upload('image');
				// var_dump($images);
				foreach ($images as $image) {
					$this->model->addImage($id , $image);
				}
			}
			// general
			if(isset($post['General']))
				foreach ($post['General'] as $key) {
					$this->model->addGeneral($id,$key);
				}
				// add printing 
			if(isset($post['Printing']))
				foreach ($post['Printing'] as $key) {
					$this->model->addPrinting($id,$key);
				}
					// add guarantee
			if(isset($post['Guarantee']))
				foreach ($post['Guarantee'] as $key) {
					$this->model->addGuarantee($id,$key);
				}
			}
			if(isset($post['tags']))
			{
				foreach($post['tags'] as $tag)
				{
					$this->model->addTag($id,$tag,$this->myType);
				}
			}
		 header("Location: ".base_url()."index.php/".$this->myType."/add");
		// $this->add();
		}

	function edit()
	{
		$post = $this->input->post();
		/// set common variables
		$this->model->deletePrinting($post['id']); 
		$this->model->deleteGeneral($post['id']); 
		$this->model->deleteGuarantee($post['id']); 
		if($this->myType == 'printer')
		{
			$data['printer_id'] = $post['id'];
		}
		else
			$data['part_id'] = $post['id'];
		$data['name'] = $post['ProductTitle'];
		if($post['ProductFamily'] != 0)
			$data['family_id'] = $post['ProductFamily'];
		$data['driver'] = $post['product_driver']; 
		//$data['general_description'] = $post['description'];


		if(isset($_FILES['ProductPdf']) && $_FILES['ProductPdf']['name'] != "")
		{
			$pdf = $this->uploadFile('ProductPdf');
			$id = 0 ;
			// var_dump($pdf);
			$data['pdf'] = $pdf;
		}

		$id = $post['id'];
		$this->model->update($post['id'],$this->myType,$data);	

		if($id != 0 || $id != null)
		{
			// add images 
			if(isset($_FILES['image']))
			{
				$images = $this->upload('image');
				var_dump($images);
				foreach ($images as $image) {
					$this->model->addImage($id , $image);
				}
			}
			// general 	
			if(isset($post['general']))
				foreach ($post['general'] as $key) {
					if($key != "")
						$this->model->addGeneral($id,$key);
				}
			// add printing
			if(isset($post['typing'])) 
				foreach ($post['typing'] as $key) {
					if($key != "")
					$this->model->addPrinting($id,$key);
				}
			// add guarantee
			if(isset($post['guarantee']))
				foreach ($post['guarantee'] as $key) {
					if($key != "")
					$this->model->addGuarantee($id,$key);
				}
			}

				header("Location: ".base_url()."index.php/".$this->myType."/add");
		}

}


?>