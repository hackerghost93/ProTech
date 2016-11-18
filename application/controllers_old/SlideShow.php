<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SlideShow extends CI_Controller {

public function index()
{
	$data['results'] = $this->Awd_Model->GetData('slide_show');
	$this->load->view('CMS/SlideShow',$data);
}
public function ADD()
{
	if($this->input->post("Title") != null && count($_FILES) > 0)
	{
		$data['Slide_Title'] = $this->input->post("Title");
		$data['Slide_image'] = $this->uploadFile('SlideShowImg');
		$this->Awd_Model->AddToDB('slide_show',$data);
		redirect('SlideShow');
	}
	else{redirect('SlideShow');}
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
public function Delete()
{
	if($this->input->post('RecoredId') != null)
	{
	$Slide_ID=$this->input->post('RecoredId');
	$this->Awd_Model->DelData('slide_show',$Slide_ID,'Slide_ID');
	redirect('SlideShow');
	}
	else{redirect('SlideShow');}
}
public function edit()
{
	if($this->input->post("edited_ID") != null && $this->input->post("EditTitle") != null)
	{
		$data['Slide_ID'] = $this->input->post("edited_ID");
		$data['Slide_Title'] = $this->input->post("EditTitle");
		$data['Slide_image'] = $this->input->post("EditSlideShowImg");
		$this->Awd_Model->update('slide_show',$data,$data['Slide_ID'],'Slide_ID');
		redirect('SlideShow');
	}
	else{redirect('SlideShow');}
}
public function GetEditedData()
{
	if($this->input->post("ID") != null)
	{
		$ID = $this->input->post("ID");
		$data = $this->Awd_Model->OneDataWhere('slide_show','Slide_ID',$ID,'Slide_ID','ASC');
		echo json_encode($data);
	}
}
public function GetAllSlides()
{
	$data = $this->Awd_Model->GetData('slide_show');
	echo json_encode($data);
}

}