<?php
if ( !defined('BASEPATH')) exit('No direct script access allowed');
class CustomerReviews extends CI_Controller
{
  function __construct() 
  {
   parent::__construct();
  

 } 
     public function CustomerReviews() //Show all branches 
     {
   
      $this->load->view('CustomerReviews');          
    } 


   
 }