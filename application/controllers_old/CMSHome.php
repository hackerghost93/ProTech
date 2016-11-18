<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CMSHome extends CI_Controller {
public function index()
{
	$this->load->view('CMS/index');
}

}

?>