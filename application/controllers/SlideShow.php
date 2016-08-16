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
	if($this->input->post("Title") != null && $this->input->post("SlideShowImg") != null)
	{
		$data['Slide_Title'] = $this->input->post("Title");
		$data['Slide_image'] = $this->input->post("SlideShowImg");
		$this->Awd_Model->AddToDB('slide_show',$data);
		redirect('SlideShow');
	}
	else{redirect('SlideShow');}
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

}