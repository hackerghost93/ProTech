<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plans extends CI_Controller {

public function index()
	{
		$data['results'] = $this->Awd_Model->GetData('plans');
		$this->load->view('CMS/Services',$data);
	}
public function DeletePlan()
{
	if($this->input->post('RecoredId') != null)
	{
	$Plan_ID=$this->input->post('RecoredId');
	$this->Awd_Model->DelData('plans',$Plan_ID,'plane_id');
	redirect('Plans');
	}
	else{redirect('Plans');}
}
public function AddPlan()
 {
	if($this->input->post("plane_name") != null && $this->input->post("plane_item") != null)
	{
	$input["plane_name"] = $this->input->post("plane_name");
	$items = $this->input->post("plane_item");
	$plane_id = $this->Awd_Model->AddToDBKey('plans',$input);
	foreach ($items as $key => $value) {
		$items_data[]['plane_text'] = $value;
	}
	for ($i=0; $i <sizeof($items_data) ; $i++) {
		$items_data[$i]['plane_id'] = $plane_id;
		$this->Awd_Model->AddToDB('plan_item',$items_data[$i]);
		}
		redirect('Plans');
	}
	else{redirect('Plans');}
 }
public function EditPlan()
 {

 }
}