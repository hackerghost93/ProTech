<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>AGED CMS</title></title> 
		 <?php require_once("Links.php"); ?>
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
        <div class="dataSection" id="DataSectionID">
            <h1>Welcome in AGED CMS</h1>
        </div>

        <!-----------------------------------sideBarRight------>
        <nav class="sideBarRight"></nav>

        <!-----------------------------------------footer------>
        <footer></footer>

        <!-----------------------------------OverLayForms---- -->
        <!----AddNewCategory--------------------------- -->
        <div class="OverLayForm closed" id="AddNewCategoryOverlayForm">
          <div class="container-fluid OverLayFormHeader">
               <div class="row CustomRow">
                   <div class="OverLayFormHeaderLeft">
                        <h2> Add New Category </h2>
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
                            <h3>Category Information</h3>
                       </div>
                       <div class="SectionContent">
                            <div class="form-group formLayout">
	        	                <label for="CategoryName" class="control-label ">Category Name : </label>
                            <input type="text" name="CategoryName" class="form-control" placeholder="Category Name" />
	                        </div>
                            <div class="form-group formLayout">
	        	                <label for="CategoryParent" class="control-label ">Parent : </label>
		                        <select name="CategoryParent" class="form-control">
                                   <option value="none">None</option>
                            </select>
	                        </div>
                        </div>
                   </div>
              </div>
              <div class="container-fluid OverLayFormFooter">
                   <div class="row CustomRow">
                       <div class="OverLayFormFooterItem right">
                            <button type="button"class="btn btn-md OverLayFormBtn"> Save</button>
                       </div>
                       <div class="OverLayFormFooterItem left">
                       
                       </div>
                   </div>
              </div>
          </form>
        </div>

        <!----EditCategory--------------------------- -->
        <div class="OverLayForm closed" id="EditCategoryOverlayForm">
          <div class="container-fluid OverLayFormHeader">
               <div class="row CustomRow">
                   <div class="OverLayFormHeaderLeft">
                        <h2> Edit Category Payslip </h2>
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
                            <h3>Category Information</h3>
                       </div>
                       <div class="SectionContent">
                            <div class="SectionContent">
                            <div class="form-group formLayout">
                            <label for="Edit_CategoryName" class="control-label ">Category Name : </label>
                            <input type="text" name="Edit_CategoryName" class="form-control" placeholder="Category Name" />
                          </div>
                            <div class="form-group formLayout">
                            <label for="Edit_CategoryParent" class="control-label ">Parent : </label>
                            <select name="Edit_CategoryParent" class="form-control">
                                   <option value="none">None</option>
                            </select>
                          </div>
                        </div>
                        </div>
                   </div>
              </div>
              <div class="container-fluid OverLayFormFooter">
                   <div class="row CustomRow">
                       <div class="OverLayFormFooterItem right">
                            <button type="button"class="btn btn-md OverLayFormBtn"> Save</button>
                       </div>
                       <div class="OverLayFormFooterItem left">
                       
                       </div>
                   </div>
              </div>
          </form>
        </div>

        <!----AddNewTag------------------- -->
        <div class="OverLayForm closed" id="AddNewTagOverlayForm">
          <div class="container-fluid OverLayFormHeader">
               <div class="row CustomRow">
                   <div class="OverLayFormHeaderLeft">
                        <h2> Add Tags </h2>
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
                            <h3>Tag Information</h3>
                       </div>
                       <div class="SectionContent">
                            <div class="form-group formLayout">
	        	                <label for="TagName" class="control-label ">Tag Name : </label>
		                        <input type="text" name="TagName" class="form-control" placeholder="Tag Name" />
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

        <!----EditTag------------------- -->
        <div class="OverLayForm closed" id="EditTagOverlayForm">
          <div class="container-fluid OverLayFormHeader">
               <div class="row CustomRow">
                   <div class="OverLayFormHeaderLeft">
                        <h2> Edit Tags </h2>
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
                            <h3>Tag Information</h3>
                       </div>
                       <div class="SectionContent">
                            <div class="form-group formLayout">
                            <label for="Edit_TagName" class="control-label ">Tag Name : </label>
                            <input type="text" name="Edit_TagName" class="form-control" placeholder="Tag Name" />
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
        <!----DeleteCategory---------------------------- -->
        <div class="modal fade CustomModal" id="DeleteCategoryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <form id="ForgotPassForm" method="post">
                  <div class="modal-body">
                        <h1>Delete Category</h1>
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
        <!----DeleteTag------------------------------>
        <div class="modal fade CustomModal" id="DeleteTagModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <form id="ForgotPassForm" method="post">
                  <div class="modal-body">
                        <h1>Delete Tag</h1>
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
  <?php $this->load->view('CMS/Scripts');  ?>
    </body>
</html>
