<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Protech CMS : Products</title> 
		 <?php require_once("Links.php"); ?>

        
    </head>
    <body>
        <!-- ---------------------------------sideBarLeft------ -->
        <div class="sideBarLeft">
            <?php require_once("MainSideBar.php"); ?>
        </div>
        
        <!-- --------------------------------------Header----- -->
        <header>
            <?php require_once("MainHeader.php"); ?>
        </header>
        <!------------------------------------dataSection------>
        <div class="dataSection">
              <nav class="subTopBar">
                  <ul class="subTopBarList">
                      <li class="subTopBarItem">
                          <h1>Contact Us</h1>
                      </li>
                      <li>
                          <form class="TopBarForm">
                                <div class="form-group">
                                     <input type="search" class="form-control" name="Search" placeholder="Search By Contact Name"/>
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
                                             <button class="btn btn-sucess" id="AddNewContactShow"> Add New Contact</button>
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
                                                          <th>Data</th>
                                                          <th>Edit</th>
                                                          <th>Delete</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                          <td>1</td>
                                                          <td>WhatsApp</td>
                                                          <td>039349432</td>
                                                          <td class='check-col tableAdmin'><a href='#' class='editeBtn' id="EditContactOverlayFormShow" data-placement='right'><span class='fa fa-gear'></span></a></td>
                                                          <td class='check-col tableAdmin'><a href='#' class='deleteBtn'  data-target='#DeleteContactModal' data-toggle='modal' title='delete' data-placement='right'><span class='fa fa-trash'></span></a></td>
                                                        </tr> 
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

        <!----AddNewcontact------------------- -->
        <div class="OverLayForm closed" id="AddNewContactShowOverLay">
          <div class="container-fluid OverLayFormHeader">
               <div class="row CustomRow">
                   <div class="OverLayFormHeaderLeft">
                        <h2> Add New Contact </h2>
                   </div>
                   <div class="OverLayFormHeaderRight">
                        <span class="fa fa-close ExitBtn"></span>
                   </div>
               </div>
          </div>
          <form>
              <div class="container-fluid OverLayFormContent">
                   <div class="FormSection">
                       <div class="SectionHeader">
                            <h3>Contact Information</h3>
                       </div>
                       <div class="SectionContent">
							<div class="form-group formLayout">
								<label for="ContactTelephone" class="control-label ">Telephone : </label>
								<input type="text" name="ContactTelephone" class="form-control " placeholder="Telephone" />
							</div>	
							<div class="form-group formLayout">
								<label for="ContactMobile" class="control-label ">Mobile: </label>
								<input type="text" name="ContactMobile" class="form-control " placeholder="Mobile" />
							</div>
							<div class="form-group formLayout">
								<label for="ContactWhatsApp" class="control-label ">WhatsApp: </label>
								<input type="text" name="ContactWhatsApp" class="form-control " placeholder="WhatsApp" />
							</div>	
							<div class="form-group formLayout">
								<label for="ContactSkypee" class="control-label ">Skypee: </label>
								<input type="text" name="ContactSkypee" class="form-control " placeholder="Skypee" />
							</div>		
							<div class="form-group formLayout">
								<label for="ContactYoutube" class="control-label ">Youtube: </label>
								<input type="text" name="ContactYoutube" class="form-control " placeholder="Youtube" />
							</div>	
							<div class="form-group formLayout">
								<label for="ContactTwitter" class="control-label ">Twitter: </label>
								<input type="text" name="ContactTwitter" class="form-control " placeholder="Twitter" />
							</div>
							<div class="form-group formLayout">
								<label for="ContactFacebook" class="control-label ">Facebook: </label>
								<input type="text" name="ContactFacebook" class="form-control " placeholder="Facebook" />
							</div>
							<div class="form-group formLayout">
								<label for="ContactLinkedin" class="control-label ">Linkedin: </label>
								<input type="text" name="ContactLinkedin" class="form-control " placeholder="Linkedin" />
							</div>	
							<div class="form-group formLayout">
								<label for="ContactAddress" class="control-label ">Address: </label>
								<input type="text" name="ContactAddress" class="form-control " placeholder="Address" />
							</div>
						
						
                      </div>
                   </div>
                
              </div>
              <div class="container-fluid OverLayFormFooter">
                   <div class="row CustomRow">
                       <div class="OverLayFormFooterItem right">
                            <button type="button"class="btn btn-md OverLayFormBtn"> Creat</button>
                       </div>
                       <div class="OverLayFormFooterItem left">
                       
                       </div>
                   </div>
              </div>
          </form>
        </div>

        <!----EditContact------------------- -->
        <div class="OverLayForm closed" id="EditContactFormShow">
          <div class="container-fluid OverLayFormHeader">
               <div class="row CustomRow">
                   <div class="OverLayFormHeaderLeft">
                        <h2> Edit Contact </h2>
                   </div>
                   <div class="OverLayFormHeaderRight">
                        <span class="fa fa-close ExitBtn"></span>
                   </div>
               </div>
          </div>
          <form>
			<div class="container-fluid OverLayFormContent">
                   <div class="FormSection">
                       <div class="SectionHeader">
                            <h3>Contact Information</h3>
                       </div>
                       <div class="SectionContent">
						<div class="form-group formLayout">
								<label for="ContactTelephone" class="control-label ">Telephone : </label>
								<input type="text" name="ContactTelephone" class="form-control " placeholder="Telephone" />
							</div>	
							<div class="form-group formLayout">
								<label for="ContactMobile" class="control-label ">Mobile: </label>
								<input type="text" name="ContactMobile" class="form-control " placeholder="Mobile" />
							</div>
							<div class="form-group formLayout">
								<label for="ContactWhatsApp" class="control-label ">WhatsApp: </label>
								<input type="text" name="ContactWhatsApp" class="form-control " placeholder="WhatsApp" />
							</div>	
							<div class="form-group formLayout">
								<label for="ContactSkypee" class="control-label ">Skypee: </label>
								<input type="text" name="ContactSkypee" class="form-control " placeholder="Skypee" />
							</div>		
							<div class="form-group formLayout">
								<label for="ContactYoutube" class="control-label ">Youtube: </label>
								<input type="text" name="ContactYoutube" class="form-control " placeholder="Youtube" />
							</div>	
							<div class="form-group formLayout">
								<label for="ContactTwitter" class="control-label ">Twitter: </label>
								<input type="text" name="ContactTwitter" class="form-control " placeholder="Twitter" />
							</div>
							<div class="form-group formLayout">
								<label for="ContactFacebook" class="control-label ">Facebook: </label>
								<input type="text" name="ContactFacebook" class="form-control " placeholder="Facebook" />
							</div>
							<div class="form-group formLayout">
								<label for="ContactLinkedin" class="control-label ">Linkedin: </label>
								<input type="text" name="ContactLinkedin" class="form-control " placeholder="Linkedin" />
							</div>	
							<div class="form-group formLayout">
								<label for="ContactAddress" class="control-label ">Address: </label>
								<input type="text" name="ContactAddress" class="form-control " placeholder="Address" />
							</div>
                      </div>
                   </div>
				   
		    </div> 
		
              <div class="container-fluid OverLayFormFooter">
                   <div class="row CustomRow">
                       <div class="OverLayFormFooterItem right">
                            <button type="button"class="btn btn-md OverLayFormBtn"> Creat</button>
                       </div>
                       <div class="OverLayFormFooterItem left">
                       
                       </div>
                   </div>
              </div>
          </form>
		  </div>
        </div>

        <!------------------------------------DeleteModals---- -->
        <!----DeleteContact------------------------------>
        <div class="modal fade CustomModal" id="DeleteContactModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <form id="ForgotPassForm" method="post">
                  <div class="modal-body">
                        <h1>Delete Contact</h1>
                        <p>Are you sure that you need to delete this Data ?</p>
                        <div class="form-group formLayout" hidden>
		        			 <input type="text" name="RecoredId" class="form-control" placeholder="RecoredId"/>
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
	<?php require_once("Scripts.php"); ?>
		<script>
          $(document).on("click",".CloseBtn",function(){
			  $(this).closest("p").css("display", "none");
			  
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


    </body>
</html>
