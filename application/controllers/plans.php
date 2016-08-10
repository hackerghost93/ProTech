<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class plans extends CI_Controller {

public function index()
	{
		$data['results'] = $this->Awd_Model->GetData('plans');
		$this->load->view('cms/Services',$data);
	}
public function AddPlan()
{
	if($this->input->post("plane_name") != null && $this->input->post("plane_item") != null)
	{
	$input["plane_name"] = $this->input->post("plane_name");
	// echo $input["plane_name"];
	$items = $this->input->post("plane_item");
	$plane_id = $this->Awd_Model->AddToDBKey('plans',$input);
	foreach ($items as $key => $value) {
		$items_data[]['plane_text'] = $value;
	}
	for ($i=0; $i <sizeof($items_data) ; $i++) {
		$items_data[$i]['plane_id'] = $plane_id;
		$this->Awd_Model->AddToDB('plan_item',$items_data[$i]);
	}
	$data["state"] = "success";
	}
	else{$data["state"] = "failed";}
	echo json_encode($data);
}
public function DeletePlan()
{
	
}
public function EditPlan()
{

}
public function test()
{
	$data['plane_name']="test";
	$this->Awd_Model->AddToDB('plans',$data);
}
}