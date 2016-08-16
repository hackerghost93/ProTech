<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Protech CMS : Drivers</title> 
     		 <?php require_once("Links.php"); ?>

        
    </head>
	<style>
	button.btn.btn-md.AddNewDownloadsbtn {
    position: absolute;
    right: 23px;
    top: 36px;
    background: #2D3446;
    color: #fff;
}
	</style>
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
					<div class="DataDiv">
						<nav class="subSideBar">
							<?php require_once("ProductsSidebar.php"); ?>
						</nav>
						 <div class="SideBarContent ">
							<div class="DataDiv">
							   <div class="PageHaeder">
								  <h2>Drivers</h2>
							   </div>
								<div class="box-wider-text">
								<div class="box-header">
									<div class="row CustomRow">
									<div class="HeaderLeft"> 
									</div>
									<div class="HeaderRight"> 
										 <button class="btn btn-sucess" id="AddNewDriversShow"> Add New Drivers</button>
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
													  <th>Delete</th>
													</tr>
												</thead>
												<tbody>
													<tr>
													  <td>1</td>
													  <td>Cloudy</td>
													  <td class='check-col tableAdmin'><a href='#' class='deleteBtn'  data-target='#DeleteDriversModal' data-toggle='modal' title='delete' data-placement='right'><span class='fa fa-trash'></span></a></td>
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
        </div>

        <!-----------------------------------sideBarRight------>
        <nav class="sideBarRight"></nav>

        <!-----------------------------------------footer------>
        <footer></footer>

        <!-----------------------------------OverLayForms---- -->

        <!----AddNewOffer------------------- -->
        <div class="OverLayForm closed" id="AddNewDriversOverlayForm">
          <div class="container-fluid OverLayFormHeader">
               <div class="row CustomRow">
                   <div class="OverLayFormHeaderLeft">
                        <h2> Add New Drivers </h2>
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
                            <h3>Drivers Information</h3>
                       </div>
                       <div class="SectionContent row">
							<div class="col-md-6" id="DriverNew">
								 <div class="form-group formLayout">
									<label for="Title" class="control-label ">Title: </label>
									<input type="text" name="Title" class="form-control" />
								 </div>		
								 <div class="form-group formLayout">
									<label for="LinkDriver" class="control-label ">Link Driver: </label>
									<input type="text" name="LinkDriver" class="form-control" />
								 </div>	
						
							</div>
					
							<div class="col-md-6">
								
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

       
        <!------------------------------------DeleteModals---- -->
        <!----DeleteFamily------------------------------>
        <div class="modal fade CustomModal" id="DeleteDriversModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <form id="ForgotPassForm" method="post">
                  <div class="modal-body">
                        <h1>Delete Drivers</h1>
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


    </body>
</html>
