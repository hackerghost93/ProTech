<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Controller {

	public function index()
	{
		$data['results'] = $this->Awd_Model->GetData('partners');
		$this->load->view('CMS/Customers',$data);
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
			    $target_dir = "imgs/";
			    $target_file = $target_dir.$target_name;
			    $uploadok = 1 ;
			    $check = getimagesize($_FILES[$name]["tmp_name"]);
			    if ($_FILES[$name]['size'] > 500000) {
			    	echo "Sorry, your file is too large.";
			    	$uploadok = 0 ;
			    	die();
			    }
			    else
			    {		
			    	if (move_uploaded_file($_FILES[$name]['tmp_name'], $target_file)) {
			    		echo "Upload Complete\n";
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
	public function ADD()
	{
		if($this->input->post("CutomerTitle") != null && count($_FILES) > 0)
		{
			$data['partner_name'] = $this->input->post("CutomerTitle");
			$data['partner_image'] = $this->uploadFile("CutomerLogo");
			$this->Awd_Model->AddToDB('partners',$data);
			redirect('Customers', 'refresh');
		}
		else{redirect('Customers', 'refresh');}
	}
	public function Delete()
	{
		if($this->input->post('RecoredId') != null)
		{
			$Customer_ID=$this->input->post('RecoredId');
			$this->Awd_Model->DelData('partners',$Customer_ID,'partner_id');
			redirect('Customers', 'refresh');
		}
		else{redirect('Customers', 'refresh');}
	}
	public function edit()
	{
		if($this->input->post("EditCutomerID") != null)
		{
			$id = $this->input->post("EditCutomerID");
			//$data['partner_id'] = $this->input->post("EditCutomerID");
			$data['partner_name'] = $this->input->post("EditCutomerTitle");
			if(count($_FILES) > 0)
				$data['partner_image'] = $this->uploadFile("EditCutomerLogo");
			$this->Awd_Model->update('partners',$data,$id,'partner_id');
			redirect('Customers', 'refresh');
		}
		else{redirect('Customers', 'refresh');}
	}


	public function GetEditedData()
	{
		if($this->input->post("ID") != null)
		{
			$ID = $this->input->post("ID");
			$data = $this->Awd_Model->OneDataWhere('partners','partner_id',$ID,'partner_id','ASC');
			echo json_encode($data);
		}
	}
}