<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AccountSettings extends CI_Controller {

public function index()
{
	$this->load->view('CMS/Settings');
}
    //yassmin
    public function NavBar()
{
	$this->load->view('CMS/WebSite_MenuBar');
}
    //yassmin
public function GetMail()
{
	if($this->input->post('ID') != null)
	{
	  $ID   = $this->input->post('ID');
	  $mail = $this->Awd_Model->GetOneValue('admins',$ID,'admin_id','email');
	  echo json_encode($mail);
	}
}
public function edit()
{
if($this->input->post("ID") != null && $this->input->post("Username") != null && $this->input->post("CurrentPassword") != null && $this->input->post("NewPassword") != null && $this->input->post("Email") != null)
	{
		$data['admin_id']    = $this->input->post("ID");
		$data['username']    = $this->input->post("Username");
		$Old_Password        = md5($this->input->post("CurrentPassword"));
		$data['password']    = md5($this->input->post("NewPassword"));
		$data['email']       = $this->input->post("Email");
		$Checker = $this->Awd_Model->CheckOldPW($data['username'], $Old_Password);
		if($Checker == true){$this->Awd_Model->update('admins',$data,$data['admin_id'],'admin_id');
		redirect('AccountSettings');}
		else{$Ret['state'] = "Invalid password";$this->load->view('CMS/Settings',$Ret);}
	}
	else
	{
			redirect('AccountSettings');
	}
}
//    <-------yassmin--------->
    public function Evaluation()
{
	$this->load->view('CMS/Evaluation');
}


}