<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('CMS/login');
	}
	public function Reg_index()
	{
		$data['results'] = $this->Awd_Model->GetData('admins');
		$this->load->view('CMS/Users',$data);
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
		$password = md5($this->input->post("Password"));
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
            redirect('CMSHome');
			}
		}
		public function Add()
		{
		if($this->input->post("username") == null || $this->input->post("username") == "")
		{
			redirect("Login/Reg_index");
		}
		if($this->input->post("Password") == null || $this->input->post("Password") == "")
		{
			redirect("Login/Reg_index");
		}
		if($this->input->post("EMail") == null || $this->input->post("EMail") == "")
		{
			redirect("Login/Reg_index");
		}
		$data["username"] = $this->input->post("username");
		$data["password"] = md5($this->input->post("Password"));
		$data["email"] = $this->input->post("EMail");
		if($this->Awd_Model->CheckDub('admins',$data["username"],'username')){$Final["state"]="username exist";}
		else if($this->Awd_Model->CheckDub('admins',$data["email"],'email')){$Final["state"]="email exist";}
		else{
		$this->Awd_Model->AddToDB('admins',$data);
		$Final["state"]="Add success";
		}
		redirect("Login/Reg_index");
	}
	public function Delete()
  {
	if($this->input->post('RecoredId') != null)
	{
	$Admin_id=$this->input->post('RecoredId');
	$this->Awd_Model->DelData('admins',$Admin_id,'admin_id');
	redirect('Login/Reg_index');
	}
	else{redirect('Login/Reg_index');}
  }
		public function logout()
		{
			$this->session->sess_destroy();
         	redirect('Login');
		}
	}
