<?php
if ( !defined('BASEPATH')) exit('No direct script access allowed');
class Family extends CI_Controller
{
	 function __construct() 
       {
         parent::__construct();
         $this->load->model('Family_model');

       } 
     public function index() //Show all branches 
              {
                        $data['Families'] = $this->Family_model->select_all_families();
                        $this->load->view('Family',$data);          
              } 
                                      
    public function AddFamily()
              {
                  $Family_name =  $this->input->post('FamilyTitle');
                  $this->Family_model->add_family( $Family_name);
                  header('location:'.$this->config->base_url().'index.php/Family/');
              } 
    public function DeleteFamily()
              {
                     $id = $this->input->post('RecoredId');
                     $this->Family_model->delete_family($id);
                     header('location:'.$this->config->base_url().'index.php/Family/'); 
                   
              }  
}