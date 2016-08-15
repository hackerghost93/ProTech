<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Protech CMS : Services</title> 
     <?php require_once("Links.php"); ?>
<style>
.result{
  margin-bottom:15px;
}
.resultadd{
  margin-top:-10px;
}
button.btn.btn-md.AddNewStepserbtn.addnewresult {
    position: absolute;
    left: 164px;
    top: 169px;
}
</style>
<?php  if($this->session->userdata('loggedIn') != true){redirect('Login');}   ?>
    </head>
    <body>
        <!-- ---------------------------------sideBarLeft------ -->
        <div class="sideBarLeft">
            <?php $this->load->view("CMS/MainSideBar.php"); ?>
        </div>
        
        <!-- --------------------------------------Header----- -->
        <header>
            <?php $this->load->view("CMS/MainHeader.php"); ?>
        </header>
        <!------------------------------------dataSection------>
        <div class="dataSection">
              <nav class="subTopBar">
                  <ul class="subTopBarList">
                      <li class="subTopBarItem">
                          <h1>Services</h1>
                      </li>
                      <li>
                          <form class="TopBarForm">
                                <div class="form-group">
                                     <input type="search" class="form-control" name="Search" placeholder="Search by stage"/>
                                      <a href="#" type="submit" role="button"><span class="fa fa-search"></span></a>
                                </div>
                          </form>    
                      </li>
                   </ul>
             </nav>
              <div class="DataDiv Wide">
                          <div class="DataDiv">
                               <div class="box-wider-text">
                                    <div class="box-header">
                                        <div class="row CustomRow">
                                        <div class="HeaderLeft"> 
                                        </div>
                                        <div class="HeaderRight"> 
                                             <button class="btn btn-sucess" id="AddNewServicesShow"> Add New Services</button>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                       <div class="table-responsive" id="UserTable">
                                            <table class='table table-hover table-condensed'>
                                                   <thead>
                                                        <tr>
                                                          <th>ID</th>
                                                          <th>Stage</th>
                                                          <th>Edit</th>
                                                          <th>Delete</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
        <?php  
          if(isset($results))
          {
            foreach ($results as $object) {
              echo "<tr><td>$object->plane_id</td><td>$object->plane_name</td>
              <td class='check-col tableAdmin'>
              <a  class='editeBtn' onclick='GetPlanData($object->plane_id)' id='EditStageOverlayFormShow' data-placement='right'><span class='fa fa-gear'></span></a></td>
            <td class='check-col tableAdmin'><a href='#' onclick='SetPlanID($object->plane_id)' class='deleteBtn'  data-target='#DeleteStageModal' data-toggle='modal' title='delete' data-placement='right'><span class='fa fa-trash'></span></a></td></tr> ";
           }
          }
        ?>
                                                    </tbody>
                                             </table>
                                      </div>
                                    </div>
                                    <div class="box-footer">
                                         <div class="row CustomRow">
                                              <nav>
                                                <ul class="pagination">
                                                  <li>
                                                    <a href="#" aria-label="Previous">
                                                      <span aria-hidden="true">&laquo;</span>
                                                    </a>
                                                  </li>
                                                  <li><a href="#">1</a></li>
                                                  <li><a href="#">2</a></li>
                                                  <li><a href="#">3</a></li>
                                                  <li><a href="#">4</a></li>
                                                  <li><a href="#">5</a></li>
                                                  <li>
                                                    <a href="#" aria-label="Next">
                                                      <span aria-hidden="true">&raquo;</span>
                                                    </a>
                                                  </li>
                                                </ul>
                                              </nav>
                                         </div>
                                    </div>
                               </div>
                          </div>
              </div>
        </div>

        <!-----------------------------------sideBarRight------>
        <nav class="sideBarRight"></nav>

        <!-----------------------------------------footer------>
        <footer></footer>

        <!-----------------------------------OverLayForms---- -->

        <div class="OverLayForm closed" id="AddNewServicesOverlayForm">
          <div class="container-fluid OverLayFormHeader">
               <div class="row CustomRow">
                   <div class="OverLayFormHeaderLeft">
                        <h2> Add Services</h2>
                   </div>
                   <div class="OverLayFormHeaderRight">
                        <span class="fa fa-close ExitBtn"></span>
                   </div>
               </div>
          </div>
          <form method="POST" action="<?=base_url()?>index.php/Plans/AddPlan">
              <div class="container-fluid OverLayFormContent">
        <div class="FormSection row">
            <div class="col-md-4 ">
              <div class="SectionHeader">
                <h3>Plane Name</h3>
              </div>
              <div class="SectionContent Specifications">
                <div id="AddStageOne">
                <div class="form-group formLayout">
                  <label for="PlaneName" class="control-label ">Plane Name : </label>
                  <input type="text" name="plane_name" class="form-control InputProduct" placeholder="Plane Name" />
                </div>
                <h3>Plane Details</h3>
                  <div class="form-group formLayout">
                    <!--<label for="ProductSpecifications" class="control-label ">Contact Specifications : </label>-->
                    <input type="text" name="plane_item[]" class="form-control overlayproduct" placeholder="Plane Details ..." />
                  </div>
                   <button type="button"class="btn btn-md AddNewStepserbtn" onclick="add_StageOne();"> 
                    <i class="fa fa-plus"></i></button>
                </div>
              </div>
            </div>
          </div>   
          
              </div>
              <div class="container-fluid OverLayFormFooter">
                   <div class="row CustomRow">
                       <div class="OverLayFormFooterItem right">
                            <button type="submit" value="submit" class="btn btn-md OverLayFormBtn">ADD</button>
                       </div>
                       <div class="OverLayFormFooterItem left">
                       
                       </div>
                   </div>
              </div>
          </form>
        </div>

        <!----EditServies------------------- -->
        <div class="OverLayForm closed" id="EditServicesOverlayForm">
          <div class="container-fluid OverLayFormHeader">
               <div class="row CustomRow">
                   <div class="OverLayFormHeaderLeft">
                        <h2> Edit Services </h2>
                   </div>
                   <div class="OverLayFormHeaderRight">
                        <span class="fa fa-close ExitBtn"></span>
                   </div>
               </div>
          </div>
          <form method="post" action="<?=base_url()?>index.php/Plans/EditPlan">
      <div class="container-fluid OverLayFormContent">
          <div class="FormSection row">
            <div class="col-md-8">
              <div class="SectionHeader">
                <h3>Plane Name</h3>
              </div>
              <div class="SectionContent Specifications">
                <div id="RemoveSpecifications">
                  <div class="form-group formLayout">
                  <label for="PlaneID" class="control-label ">Plan ID : </label>
                  <input type="text" name="PlaneID" id="SPlan_ID" class="form-control InputProduct" placeholder="Plan ID" readonly />
                </div>
                <div class="form-group formLayout">
                  <label for="PlaneName" class="control-label ">Plan Name : </label>
                  <input type="text" name="PlaneName" id="PlaneName" class="form-control InputProduct" placeholder="Plane Name" />
                </div>

                  <h3>Plan Details</h3>
                  <div class="form-group formLayout" id="SDiv">
                    
                    <!-- <p><input type="text" name="Stage1Specifications[]" id="p_scents" class="form-control overlaystagesservices" placeholder="Plane Details" /> -->
                
                  </div>
                  <button type="button"class="btn btn-md AddNewStepserbtn addnewresult" onclick="Edit_StageOne();"> 
                    <i class="fa fa-plus"></i></button>
                </div>
              </div>
            </div>
          </div>        
              </div>
              <div class="container-fluid OverLayFormFooter">
                   <div class="row CustomRow">
                       <div class="OverLayFormFooterItem right">
                            <button type="submit"class="btn btn-md OverLayFormBtn"> Update</button>
                       </div>
                       <div class="OverLayFormFooterItem left">
                       
                       </div>
                   </div>
              </div>
          </form>
        </div>

        <!----DeleteServices---------------------------->
        <div class="modal fade CustomModal" id="DeleteStageModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <form id="ForgotPassForm" method="post" action="<?=base_url()?>index.php/Plans/DeletePlan">
                  <div class="modal-body">
                        <h1>Delete Product</h1>
                        <p>Are you sure that you need to delete this ID ?</p>
                        <div class="form-group formLayout">
                <input type="text" name="RecoredId" id="RecoredId" class="form-control" value="RecoredId" readonly />
                </div>
                  </div>
                  <div class="modal-footer">
                        <button class="btn customBtn"> Delete</button>
                  </div>
              </form>
            </div>
          </div>
        </div>
      
        <!----------------------------------------scripts------>
   <?php $this->load->view('CMS/Scripts');  ?>
    <script>  
        $(document).on("click",".CloseBtn",function(){
        $(this).closest("p").css("display", "none");
        console.log($(this).parent().find('input').val());
        $(this).parent().find('input').remove();
        // $(this).parent().find('input').val('');
        console.log($(this).parent().find('input').val());
        // $(this).closest("p").find('input').val("");
      });
    </script>
    <script>
    $(document).ready(function(){

    //Hide div w/id extra
    $(".Description").css("display","none");

    // Add onclick handler to checkbox w/id checkme
     $("#checkbox1").click(function(){

    // If checked
    if ($("#checkbox1").is(":checked"))
    {
      //show the hidden div
      $(".Description").show(500);
    }
    else
    {
      //otherwise, hide it
      $(".Description").hide(500);
    }
    });

  });
   
    </script>
        <script>
    //  function add_StageThree() {
    //  var newspan = document.createElement('div');
    //  newspan.innerHTML = '<div class="form-group formLayout"><input type="text" name="StageThree[]" class="form-control overlayproduct" placeholder="" /></div>';
    //  document.getElementById('Addstagethree').appendChild(newspan);
    // }  
    // function add_StageTwo() {
    //  var newspan = document.createElement('div');
    //  newspan.innerHTML = '<div class="form-group formLayout"><input type="text" name="StageTwoSteps[]" class="form-control overlayproduct" placeholder="" /></div>';
    //  document.getElementById('AddStagetwo').appendChild(newspan);
    // }  
    function add_StageOne(){
      var newspan = document.createElement('div');
      newspan.innerHTML = '<div class="form-group formLayout"><input type="text" name="plane_item[]" class="form-control overlayproduct" placeholder="" /></div>';
      document.getElementById('AddStageOne').appendChild(newspan);
    } 
    function Edit_StageOne(){
      var newspan = document.createElement('div');
      newspan.innerHTML = '<div class="form-group formLayout"><p><input type="text" name="NewData_items[]" class="form-control resultadd overlayproduct" placeholder="" /><a href="#" id="remScnt" class="removespecification  CloseBtn" ><i class="fa fa-close"></i></a></p></div>';
      document.getElementById('RemoveSpecifications').appendChild(newspan);
    }
    function SetPlanID(id)
    {
      var ID=id;
      document.getElementById("RecoredId").value=ID;
    }
      function GetPlanData(id)
      {
      var ID=id;
      $('#SPlan_ID').val(ID);
      $.get('Plans/GetAllData',{ID:ID},function(data)
      {
        $('#PlaneName').val(data.name);
        $.each($(data.plan_items), function(key, value) {
         $('#SDiv').append('<p><input type="text" value='+value+' name="NewData_items[]" class="form-control overlayproduct result" /><a href="#" id="remScnt" class="removespecification  CloseBtn" ><i class="fa fa-close"></i></a></p>');
      });
      },'json');
      }
    </script>

    </body>
</html>