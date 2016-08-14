<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>AGED CMS : Users</title> 
        <link rel="stylesheet" type="text/css" href="_/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="_/css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="_/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="_/css/BoxComponant.css">
        <link rel="stylesheet" type="text/css" href="_/css/styles.css">
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
                          <h1>Users</h1>
                      </li>
                      <li>
                          <form class="TopBarForm">
                                <div class="form-group">
                                     <input type="search" class="form-control" name="Search" placeholder="Search By Email"/>
                                      <a href="#" type="submit" role="button"><span class="fa fa-search"></span></a>
                                </div>
                          </form>    
                      </li>
                   </ul>
             </nav>
             <div class="DataDiv Wide">
                   <div class="box-wider-text">
                        <div class="box-header">
                             <div class="row CustomRow">
                                   <div class="HeaderLeft"> 
                                   </div>
                                   <div class="HeaderRight"> 
                                        <button class="btn btn-sucess" id="AddNewUserShow"> Add New User</button>
                                   </div>
                              </div>
                        </div>
                        <div class="box-body">
                              <div class="table-responsive" id="UserTable">
                                   <table class='table table-hover table-condensed'>
                                          <thead>
                                             <tr>
                                                <th>id</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                       
                                                <th class="check-col">Delete</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr>
                                                 <td>1</td>
                                                 <td>sdasd@dfsfsdf.com</td>
                                                 <td>MK89</td>
                                       
                                                 <td class='check-col tableAdmin'><a href='#' class='deleteBtn'  data-target='#DeleteUserModal' data-toggle='modal' title='delete' data-placement='right'><span class='fa fa-trash'></span></a></td>
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
        <!----AddNewUser--------------------------- -->
        <div class="OverLayForm closed" id="AddNewUserOverlayForm">
          <div class="container-fluid OverLayFormHeader">
               <div class="row CustomRow">
                   <div class="OverLayFormHeaderLeft">
                        <h2> Add New User </h2>
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
                            <h3>User Information</h3>
                       </div>
                       <div class="SectionContent">
                            <div class="form-group formLayout">
                                <label for="UserEmail" class="control-label "> Email : </label>
                                <input type="text" name="UserEmail" class="form-control" placeholder="Phone" />
                            </div>
                            <div class="form-group formLayout">
                                <label for="UserPassword" class="control-label "> Password : </label>
                                <input type="password" name="UserPassword" class="form-control" placeholder="Password" />
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

        <!----EditUser--------------------------- -->
       

        <!------------------------------------DeleteModals---- -->
        <!----DeleteUser---------------------------- -->
        <div class="modal fade CustomModal" id="DeleteUserModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <form id="ForgotPassForm" method="post">
                  <div class="modal-body">
                        <h1>Delete User</h1>
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
