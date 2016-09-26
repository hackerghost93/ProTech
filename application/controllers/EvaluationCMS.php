<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EvaluationCMS extends CI_Controller {

	public function index()
	{
		$data['results'] = $this->Awd_Model->GetData('evaluations');
		$this->load->view('CMS/Evaluation',$data);
	}
	public function Add()
	{
	 if($this->input->post('EvDate')!=null && $this->input->post('CustName')!=null)
	  {
	//`client_name``evaluation_date``general_care``general_elasticity``general_contact``engineer_behavior``engineer_look``service_parts``service_quality``service_speed``commenter_name``commenter_phone``comment`
 if($this->input->post('OR1')!=null&&$this->input->post('OR2')!=null&&$this->input->post('OR3')!=null&&$this->input->post('OR4')!=null&&$this->input->post('OR5')!=null&&$this->input->post('OR6')!=null&&$this->input->post('OR7')!=null&&$this->input->post('OR8')!=null)
        {
        	if($this->input->post('CommenterName')!=null && $this->input->post('telephone')!=null)
        	{
        		$data['client_name']        = $this->input->post('CustName');
                $data['evaluation_date']    = $this->input->post('EvDate');
                $data['general_contact']    = $this->input->post('OR1');	            
                $data['general_elasticity'] = $this->input->post('OR2');
                $data['general_care']       = $this->input->post('OR3');
                $data['engineer_look']      = $this->input->post('OR4');
                $data['engineer_behavior']  = $this->input->post('OR5');
                $data['service_speed']      = $this->input->post('OR6');
                $data['service_quality']    = $this->input->post('OR7');
                $data['service_parts']      = $this->input->post('OR8');
                $data['commenter_name']     = $this->input->post('CommenterName');
                $data['commenter_phone']    = $this->input->post('telephone');
                $data['comment']            = $this->input->post('Comment');
                $this->Awd_Model->AddToDB('evaluations',$data);
                redirect('EvaluationCMS');
        	}
        }
	  }
	  else{redirect('EvaluationCMS');
	}
	}
}
?>