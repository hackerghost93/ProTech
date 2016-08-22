<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('plan_model','model');
	}

	public function showPlans($type)
	{
		if($type !== '1' && $type !== '2' && $type !== '3')
		  	show_404();
		else
		{
			$data['plans'] = $this->model->getPlans($type);
			// var_dump($data['plans']);
			$this->load->view('service' , $data);
		}
	}
}