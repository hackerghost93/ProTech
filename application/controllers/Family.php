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
      $this->load->view('CMS/Family',$data);          
    } 

    public function AddFamily()
    {
      $familyname=$this->input->post('FamilyTitle');
       if(($this->Family_model->checkFamily($familyname)->num_rows())==0){
      $data=array('family_name'=>  $this->input->post('FamilyTitle'));
      $this->Family_model->add_family( $data);
      $this->index();
                  header('location:'.$this->config->base_url().'index.php/Family/');
                }
                else{ echo 'added before';}
    } 
    public function DeleteFamily()
    {
     $id = $this->input->post('RecoredId');
     $this->Family_model->delete_family($id);
                     header('location:'.$this->config->base_url().'index.php/Family/'); 

   } 
   public function UpdateFamily()
   {
    $data=array('family_name'=>  $this->input->post('FamilyTitle'));
    $family_id =  $this->input->post('edit_id');
    $this->Family_model->edit_family($family_id,$data);
                      header('location:'.$this->config->base_url().'index.php/Family/'); 
  }   
  public function SearchFamily()
  {
    $familyName = $_GET['q'];
    $Families = $this->Family_model->search_family($familyName);

    echo"<table class='table table-hover table-condensed'>
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>";

      foreach($Families as $row){
       echo "<tr>";
       echo "<td>".$row['family_id']."</td>";
       echo"<td>".$row['family_name']."</td>";
       echo"<td class='check-col tableAdmin'><a href='#' class='editeBtn' id='EditNewFamilyShow' data-placement='right' data-id='".$row['family_id']."' data-editname='".$row['family_name']."'><span class='fa fa-gear'></span></a></td>";
       echo"<td class='check-col tableAdmin'><a href='#' class='deleteBtn'  data-target='#DeleteFamilyModal' data-toggle='modal' title='delete' data-placement='right' data-id='".$row['family_id']."'><span class='fa fa-trash'></span></a></td>";
       echo"</tr>"; 
     } 
     echo"</tbody>";
     echo"</table>";


   }          
 }