<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tags extends CI_Controller {

 public function index()
 {
 	$this->load->view('CMS/Tags');
 }
public function SparepartsTags()
{
	$this->load->view('CMS/SparepartsTags');
}

}