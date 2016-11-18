<?php 

/**
* 
*/
class Evaluation extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("Evaluation_model","model");
	}

    public function index()
	{
		$this->load->view('CMS/Evaluation');
	}

	private function isHere($data,$assoc)
	{
		if(isset($data[$assoc]) && $data[$assoc] != "")
			return TRUE ;
		return FALSE ;
	}

	private function validate($data)
	{
		$errors = [] ;
		if(!$this->isHere($data,"client_name"))
			$errors.push("The client 's name is not specified");

		if(!$this->isHere($data,"evaluation_date"))
			push($errors,"the evaluation date is not specified");

		if(!$this->isHere($data,"general_care"))
			push($errors,"The general care is not specified");

		if(!$this->isHere($data,"general_elasticity"))
			push($errors,"The general elasticity is not specified");

		if(!$this->isHere($data,"general_contact"))
			push($errors,"The general contact is not specified");

		if(!$this->isHere($data,"engineer_behavior"))
			push($errors,"The evaluation date is not specified");

		if(!$this->isHere($data,"engineer_look"))
			push($errors,"The engineer look is not specified");

		if(!$this->isHere($data,"service_parts"))
			push($errors,"The evaluation date is not specified");

		if(!$this->isHere($data,"service_quality"))
			push($errors,"The service quality is not specified");

		if(!$this->isHere($data,"service_speed"))
			push($errors,"The service speed is not specified");


	}

	public function addNew()
	{
		 var_dump($this->input->post());
		$evaluation = $this->input->post();
		$errors = $this->validate($evaluation);
		if(count($errors) > 0)
			foreach ($errors as $error) {
				echo $error."\n";
			}
		else
			$this->model->add($evaluation);
	}

	public function edit()
	{

	}

	public function get()
	{

	}

	public function showAll()
	{

	}
}


 ?>