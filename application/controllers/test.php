<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class test extends CI_Controller {

	public function index()
	{
		$this->load->view('test');
	}
	public function family()
	{
		$data = $this->Awd_Model->GetData('families');
		echo json_encode($data);
	}
	public function Recive()
	{
		$username = $this->input->post("username");
		$password = $this->input->post("passsword");
		$phone = $this->input->post("phone");
		foreach ($username as $key => $value) {
			echo "$key = $value <br>";
		}
		foreach ($password as $key => $value) {
			echo "$key = $value <br>";
		}
		foreach ($phone as $key => $value) {
			echo "$key = $value <br>";
		}
	}
	
}