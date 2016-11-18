<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts extends CI_Controller {

public function index()
{
		$this->load->view('CMS/Contact');
}
public function Get_Contact_Data()
{
	$Data = $this->Awd_Model->GetOneRow('contact');
	echo json_encode($Data);
}
public function Edit()
{
	if($this->input->post('ContactTelephone') != null && $this->input->post('ContactMobile') != null &&  $this->input->post('Email') != null && $this->input->post('Email_Password') != null &&  $this->input->post('ContactWhatsApp') != null && $this->input->post('ContactSkypee') != null &&    $this->input->post('ContactYoutube') != null && $this->input->post('ContactTwitter') != null && $this->input->post('ContactFacebook') != null &&    $this->input->post('ContactLinkedin') != null && $this->input->post('ContactAddress') != null && $this->input->post('ID') != null)
	{
	//`adress``telephone``mobile``whatsapp``skybe``youtube``email``Email_Password``facebook``twitter``linkedin`
		$Contact_Data['id']             = $this->input->post('ID');
		$Contact_Data['telephone']      = $this->input->post('ContactTelephone');
		$Contact_Data['mobile']         = $this->input->post('ContactMobile');
		$Contact_Data['email']          = $this->input->post('Email');
		$Contact_Data['Email_Password'] = md5($this->input->post('Email_Password'));
		$Contact_Data['whatsapp']       = $this->input->post('ContactWhatsApp');
		$Contact_Data['skybe']          = $this->input->post('ContactSkypee');
		$Contact_Data['youtube']        = $this->input->post('ContactYoutube');
		$Contact_Data['twitter']        = $this->input->post('ContactTwitter');
		$Contact_Data['facebook']       = $this->input->post('ContactFacebook');
		$Contact_Data['linkedin']       = $this->input->post('ContactLinkedin');
		$Contact_Data['adress']         = $this->input->post('ContactAddress');
		$this->Awd_Model->update('contact',$Contact_Data,$Contact_Data['id'],'id');
		redirect('Contacts');
	}
	else{redirect('Contacts');}
}


}