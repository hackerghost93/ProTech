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
	if($this->input->post("plane_name") != null && $this->input->post("plane_item") != null && $this->input->post("ChooseType") != null)
	{
	$input["plane_name"] = $this->input->post("plane_name");
	$input["type"]       = $this->input->post("ChooseType");
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
public function GetAllData()
 {
 	if($this->input->get("ID") != null)
 	{
 		$ID = $this->input->get("ID");
 		$name = $this->Awd_Model->ChData('plans',$ID,'plane_id');
 		$plan_name = $name->plane_name;
 		$results = $this->Awd_Model->DataWhere('plan_item','plane_id',$ID,'item_id','ASC');
 		foreach ($results as $object)
 		{
 			$items_text[] = $object->plane_text;
 		}
 		$data["state"]="success";
 		$data["name"] = $plan_name;
 		$data["plan_items"] = $items_text;
 		echo json_encode($data);
 	}
 	else
 	{
 		$data["state"]="failed";
 		echo json_encode($data);
 	}
 }
 public function GetServiceData()
 {
 	$plans = $this->Awd_Model->GetData('plans');
 	$i = 0;
 	foreach ($plans as $object) {
 		 $planData[$i]['ID'] = $object->plane_id;
 		 $planData[$i]['name'] = $object->plane_name;
 		 $i++;
 	}
 for ($i=0; $i < sizeof($planData) ; $i++) { 
 $planData[$i]['items'] = $this->Awd_Model->DataWhere('plan_item','plane_id',$planData[$i]['ID'],'plane_id','ASC');
    }
    echo json_encode($planData);
 }
public function EditPlan()
 {
 if($this->input->post('PlaneName') != null && $this->input->post('NewData_items') != null && $this->input->post('PlaneID') != null && $this->input->post('EditedType') != null)
 	{
 		$New_Plan_Data['plane_name'] = $this->input->post('PlaneName');
 		$New_Plan_Data['type']       = $this->input->post('EditedType');
 		$New_Plan_items = $this->input->post('NewData_items');
 		$New_Plan_Data['plane_id'] = $this->input->post('PlaneID');
 		$this->Awd_Model->DelData('plans',$New_Plan_Data['plane_id'],'plane_id');
 		$this->Awd_Model->AddToDB('plans',$New_Plan_Data);
		foreach ($New_Plan_items as $key => $value) {
		$New_items_data[]['plane_text'] = $value;
		}
		for ($i=0; $i <sizeof($New_items_data) ; $i++) {
		$New_items_data[$i]['plane_id'] = $New_Plan_Data['plane_id'];
		$this->Awd_Model->AddToDB('plan_item',$New_items_data[$i]);
		}
		redirect('Plans');
 	}
 	else{redirect('Plans');}
 }
}