<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Controller {

public function index()
{
		$data['results'] = $this->Awd_Model->GetData('partners');
		$this->load->view('CMS/Customers',$data);
}
public function ADD()
{
	if($this->input->post("CutomerTitle") != null && $this->input->post("CutomerLogo") != null)
	{
		$data['partner_name'] = $this->input->post("CutomerTitle");
		$data['partner_image'] = $this->input->post("CutomerLogo");
		$this->Awd_Model->AddToDB('partners',$data);
		redirect('Customers');
	}
	else{redirect('Customers');}
}
public function Delete()
{
	if($this->input->post('RecoredId') != null)
	{
	$Customer_ID=$this->input->post('RecoredId');
	$this->Awd_Model->DelData('partners',$Customer_ID,'partner_id');
	redirect('Customers');
	}
	else{redirect('Customers');}
}
public function edit()
{
	if($this->input->post("EditCutomerID") != null && $this->input->post("EditCutomerTitle") != null)
	{
		$data['partner_id'] = $this->input->post("EditCutomerID");
		$data['partner_name'] = $this->input->post("EditCutomerTitle");
		$data['partner_image'] = $this->input->post("EditCutomerLogo");
		$this->Awd_Model->update('partners',$data,$data['partner_id'],'partner_id');
		redirect('Customers');
	}
	else{redirect('Customers');}
}
public function GetEditedData()
{
	if($this->input->post("ID") != null)
	{
		$ID = $this->input->post("ID");
		$data = $this->Awd_Model->DataWhere('partners','partner_id',$ID,'partner_id','ASC');
		echo json_encode($data);
	}
}
}