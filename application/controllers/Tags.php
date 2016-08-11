<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tags extends CI_Controller {

 public function index()
 {
 	$data['results'] = $this->Awd_Model->PrinterTagsData();
 	$this->load->view('CMS/Tags',$data);
 }
public function SparepartsTags()
{
	$data['results'] = $this->Awd_Model->PartsTagsData();
	$this->load->view('CMS/SparepartsTags',$data);
}
public function ProductGetter()
{
	$Data['printers'] = $this->Awd_Model->GetData('printers');
	echo json_encode($Data);
}
public function PartGetter()
{
	$Data['parts'] = $this->Awd_Model->GetData('parts');
	echo json_encode($Data);
}
public function AddProductTag()
{
	if($this->input->post('ChooseProduct') != null && $this->input->post('ProductTag') != null)
	{
		$ProductName = $this->input->post('ChooseProduct');
		$ProductTag  = $this->input->post('ProductTag');
		$Product_ID  = $this->Awd_Model->GetOneValue('printers',$ProductName,'name','printer_id');
		$Tag_Data['tag_name'] = $ProductTag;
		$this->Awd_Model->AddToDB('tags',$Tag_Data);
		$Product_Tag_Data['printer_id'] = $Product_ID;
		$Product_Tag_Data['tag_name'] = $ProductTag;
		$this->Awd_Model->AddToDB('printer_tags',$Product_Tag_Data);
		redirect('Tags');
	}
	redirect('Tags');
}
public function AddPartTag()
{
	if($this->input->post('ChooseSparePart') != null && $this->input->post('SparePartsTag') != null)
	{
		$PartName = $this->input->post('ChooseSparePart');
		$PartTag  = $this->input->post('SparePartsTag');
		$Part_ID  = $this->Awd_Model->GetOneValue('parts',$PartName,'name','part_id');
		$Tag_Data['tag_name'] = $PartTag;
		$this->Awd_Model->AddToDB('tags',$Tag_Data);
		$Part_Tag_Data['part_id'] = $Part_ID;
		$Part_Tag_Data['tag_name'] = $PartTag;
		$this->Awd_Model->AddToDB('part_tag',$Part_Tag_Data);
		redirect('Tags/SparepartsTags');
	}
	redirect('Tags/SparepartsTags');
}
public function DeleteTagProduct()
{
	if($this->input->post('RecoredId') != null)
	{
		$TagName = $this->input->post('RecoredId');
		$this->Awd_Model->DelData('tags',$TagName,'tag_name');
		redirect('Tags');
	}
	else
	{
		redirect('Tags');
	}
}
public function DeleteTagParts()
{
	if($this->input->post('RecoredId') != null)
	{
		$TagName = $this->input->post('RecoredId');
		$this->Awd_Model->DelData('tags',$TagName,'tag_name');
		redirect('Tags/SparepartsTags');
	}
	else
	{
		redirect('Tags/SparepartsTags');
	}
}

}