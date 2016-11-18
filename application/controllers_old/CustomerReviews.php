<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CustomerReviews extends CI_Controller {

function __construct()
	{
		parent::__construct();
		$this->load->model('Evaluation_model');
	}
public function index()
{
		$data['CustomerReviews']=$this->Evaluation_model->getAllReviews();
		$this->load->view('CustomerReviews',$data);
  

}

}