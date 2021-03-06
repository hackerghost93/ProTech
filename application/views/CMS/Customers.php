<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Protech CMS : Customers</title> 
	  <?php $this->load->view("CMS/Links.php"); ?>

        
    </head>
    <?php  if($this->session->userdata('loggedIn') != true){redirect('Login');}   ?>
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
                          <h1>Customers</h1>
                      </li>
                      <li>
                 
                      </li>
                   </ul>
             </nav>
              <div class="DataDiv Wide">
                          <div class="DataDiv">
                               <div class="box-wider-text">
                                    <div class="box-header">
                                        <div class="row CustomRow">
                                        <div class="HeaderLeft"> 
										          <form class="TopBarForm">
                                <div class="form-group">
                                     <input type="search" class="form-control" name="Search" placeholder="Search By Customers Name"/>
                                      <a href="#" type="submit" role="button"><span class="fa fa-search"></span></a>
                                </div>
                          </form>   
                                        </div>
                                        <div class="HeaderRight"> 
                                             <button class="btn btn-sucess" id="AddNewcustomerShow"> Add New Customers</button>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                       <div class="table-responsive" id="UserTable">
                                            <table class='table table-hover table-condensed'>
                                                   <thead>
                                                        <tr>
                                                          <th>ID</th>
                                                          <th>Title</th>
                                                          <th>Logo</th>
                                                          <th>Edit</th>
                                                          <th>Delete</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
<?php
if(isset($results))
{
   foreach ($results as $object) {
   echo "<tr><td>$object->partner_id</td><td>$object->partner_name</td><td><img src='".base_url().$object->partner_image."' class='prodimg'>
   </td><td class='check-col tableAdmin'><a href='#' onclick='SetEditData($object->partner_id)
'class='editeBtn' id='EditNewCustomersShow' data-placement='right'><span class='fa fa-gear'></span></a></td>
   <td class='check-col tableAdmin'><a href='#' onclick='SetCustomerID($object->partner_id)' class='deleteBtn'  data-target='#DeleteCustomerModal' data-toggle='modal' title='delete' data-placement='right'><span class='fa fa-trash'></span></a></td></tr>";
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

        <!----AddCustomer------------------- -->
        <div class="OverLayForm closed" id="AddNewCutomerOverlayForm">
          <div class="container-fluid OverLayFormHeader">
               <div class="row CustomRow">
                   <div class="OverLayFormHeaderLeft">
                        <h2> Add New Customers </h2>
                   </div>
                   <div class="OverLayFormHeaderRight">
                        <span class="fa fa-close ExitBtn"></span>
                   </div>
               </div>
          </div>
          <form method="POST" action="<?=base_url()?>index.php/Customers/ADD" id="AddCustomerForm" enctype="multipart/form-data">
              <div class="container-fluid OverLayFormContent">
                   <div class="FormSection">
                       <div class="SectionHeader">
                            <h3>Customers Information</h3>
                       </div>
                       <div class="SectionContent ">
							<div class="form-group formLayout">
								<label for="CutomerTitle" class="control-label ">Customers Title : </label>
								<input type="text" name="CutomerTitle" class="form-control" placeholder="Customers Title" />
							</div>
							 <div class="form-group formLayout">
								<label for="CutomerLogo" class="control-label ">Upload Cutomer Logo: </label>
								<input type="file" name="CutomerLogo" class="form-control InputProduct" />
							 </div>	
						</div>
                   </div>
              
		 
              </div>
              <div class="container-fluid OverLayFormFooter">
                   <div class="row CustomRow">
                       <div class="OverLayFormFooterItem right">
                            <button type="submit"class="btn btn-md "> Create</button>
                       </div>
                       <div class="OverLayFormFooterItem left">
                       
                       </div>
                   </div>
              </div>
          </form>
        </div>

        <!----EditCutomers------------------- -->
        <div class="OverLayForm closed" id="EditcutomersOverlayForm">
          <div class="container-fluid OverLayFormHeader">
               <div class="row CustomRow">
                   <div class="OverLayFormHeaderLeft">
                        <h2> Edit Customers </h2>
                   </div>
                   <div class="OverLayFormHeaderRight">
                        <span class="fa fa-close ExitBtn"></span>
                   </div>
               </div>
          </div>
          <form method="post" action="<?=base_url()?>index.php/Customers/edit" id="EditCustomerForm" enctype="multipart/form-data">
			<div class="container-fluid OverLayFormContent">
                   <div class="FormSection">
                       <div class="SectionHeader">
                            <h3>Customers Information</h3>
                       </div>
                        <div class="SectionContent ">
              <div class="form-group formLayout">
                <label for="EditCutomerID" class="control-label ">Customers ID : </label>
                <input type="hidden" name="EditCutomerID" id="EditCutomerID" class="form-control" readonly />
              </div>
							<div class="form-group formLayout">
								<label for="EditCutomerTitle" class="control-label ">Customers Title : </label>
								<input type="text" name="EditCutomerTitle" id="EditCutomerTitle" class="form-control" placeholder="Customers Title" />
							</div>
							 <div class="form-group formLayout">
                <h3>Current Image is</h2>
                <h5 id="hackerImageEdit"></h3>
                <hr/>
								<label for="EditCutomerLogo" class="control-label " >Change Image upload another</label>
								<input type="file" name="EditCutomerLogo" id="EditCutomerLogo" class="form-control " required />
							 </div>	
						</div>
                   </div>
	
								  
              </div>
              <div class="container-fluid OverLayFormFooter">
                   <div class="row CustomRow">
                       <div class="OverLayFormFooterItem right">
                            <button type="submit"class="btn btn-md"> Update </button>
                       </div>
                       <div class="OverLayFormFooterItem left">
                       
                       </div>
                   </div>
              </div>
          </form>
        </div>

        <!------------------------------------DeleteModals---- -->
        <!----DeleteFamily------------------------------>
        <div class="modal fade CustomModal" id="DeleteCustomerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <form id="ForgotPassForm" method="post" action="<?=base_url()?>index.php/Customers/Delete">
                  <div class="modal-body">
                        <h1>Delete Customers</h1>
                        <p>Are you sure that you need to delete this Data ?</p>
                        <div class="form-group formLayout" >
		        			 <input type="text" name="RecoredId" id="RecoredId" class="form-control" placeholder="RecoredId" readonly />
	       				</div>
                  </div>
                  <div class="modal-footer">
                        <button type="submit"class="btn customBtn"> Delete</button>
                  </div>
              </form>
            </div>
          </div>
        </div>

        <!--scripts-->
 	<?php $this->load->view('CMS/Scripts');  ?>
  <script type="text/javascript">
   function SetCustomerID(id)
    {
      var ID=id;
      document.getElementById("RecoredId").value=ID;
    }
    function SetEditData(id)
    {
      var ID=id;
      $.post('Customers/GetEditedData',{ID:ID},function(data)
          {
            console.log(data);
            $("#EditCutomerID").val(data.partner_id);
            $("#EditCutomerTitle").val(data.partner_name);
            $('#hackerImageEdit').html(data.partner_image);
          },'json');
    }
  </script>
<script>
    $(document).ready(function () {
	   var validator = $("#AddCustomerForm").validate({
		errorPlacement: function (error, element)
		{
			// Append error within linked label
			$( element ).closest( "div" ).find( "label[for='" + element.attr( "name" ) + "']" ).append( error );},
		errorElement: "span",
		rules :
		{
	
			CutomerTitle: "required",
		//	CutomerLogo: {required: true,
			accept: "audio/*"}
	
		},
		messages: 
		{
		
			CutomerTitle:"This field is required",
		//	CutomerLogo: {required: "This field is required",
			accept: "audio/*"}
		}
	});	 
//--------------------edit-------------------------	
	var validator = $("#EditCustomerForm").validate({
		errorPlacement: function (error, element)
		{
			// Append error within linked label
			$( element ).closest( "div" ).find( "label[for='" + element.attr( "name" ) + "']" ).append( error );},
		errorElement: "span",
		rules :
		{
	
			EditCutomerTitle: "required",
			//EditCutomerLogo: {required: true,
			accept: "audio/*"}
	
		},
		messages: 
		{
		
			EditCutomerTitle:"This field is required",
			//EditCutomerLogo: {required: "This field is required",
			accept: "audio/*"}
		}
	});
    });
</script>
    </body>
</html>
