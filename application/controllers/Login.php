<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('CMS/login');
	}
	public function log()
	{
		if($this->input->post("user_name") == null || $this->input->post("user_name") == "")
		{
				redirect("Login");
		}
		if($this->input->post("Password") == null || $this->input->post("Password") == "")
		{
				redirect("Login");
		}
		$username = $this->input->post("user_name");
		$password = md5($this->input->post("password"));
		$result = $this->Awd_Model->Login($username,$password);
		if($result == false )
		{
			$data["state"] = "wrong username or password";
			$this->load->view('CMS/login',$data);
		}
		else{
			$data["statue"]="success";
			$UserData=array(
               'id' => $result->admin_id,
               'username' => $result->username,
               'Email' =>$result->email,
               'loggedIn' => true );
            $this->session->set_userdata($UserData);
            redirect('')
			}
		}
		public function Add()
		{
		if($this->input->post("username") == null || $this->input->post("username") == "")
		{
			redirect("Register");
		}
		if($this->input->post("password") == null || $this->input->post("username") == "")
		{
			redirect("Register");
		}
		if($this->input->post("email") == null || $this->input->post("username") == "")
		{
			redirect("Register");
		}
		$data["username"] = $this->input->post("username");
		$data["password"] = md5($this->input->post("password"));
		$data["email"] = $this->input->post("email");
		$data["active"] = 0;
		if($this->Awd_Model->CheckDub('admins',$data["username"],'username')){$Final["state"]="username exist";}
		else if($this->Awd_Model->CheckDub('admins',$data["email"],'email')){$Final["state"]="email exist";}
		else{
		$this->Awd_Model->AddToDB('admins',$data);
		$Final["state"]="Add success";
		}
		echo json_encode($Final);
	}
		public function logout()
		{
			$this->session->sess_destroy();
         	redirect('Login');
		}
	}
