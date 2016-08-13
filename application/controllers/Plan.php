<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plan extends CI_Controller {

public function index()
	{
		$data['results'] = $this->Awd_Model->GetData('plans');
		$this->load->view('service.php',$data);
	}
}