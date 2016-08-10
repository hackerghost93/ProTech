<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>AGED CMS : Categories</title> 
        <link rel="stylesheet" type="text/css" href="_/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="_/css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="_/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="_/css/BoxComponant.css">
        <link rel="stylesheet" type="text/css" href="_/css/styles.css">
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
             <div class="DataDiv">
                <nav class="subSideBar">
                     <?php require_once("SubscribersSideBar.php"); ?>
                </nav>
                <div class="SideBarContent">
                      <div class="DataDiv">
                           <div class="PageHaeder">
                              <h2>Project Planner</h2>
                           </div>
                           <div class="box-wider-text">
                                <div class="box-header">
                                    <div class="row CustomRow">
                                    <div class="HeaderLeft"> 
                                         <form class="SubHeader">
                                                <div class="form-group">
                                                     <input type="search" class="form-control" name="Search" placeholder="Search By Date"/>
                                                     <a href="#" type="submit" role="button"><span class="fa fa-search"></span></a>
                                                </div>
                                         </form>    
                                    </div>
                                    <div class="HeaderRight"> 
                                    </div>
                                    </div>
                                </div>
                                <div class="box-body">
                                   <div class="table-responsive" id="UserTable">
                                        <table class='table table-hover table-condensed'>
                                               <thead>
                                                    <tr>
                                                      <th>id</th>
                                                      <th>Name</th>
                                                      <th>Phone</th>
                                                      <th>Email</th>
                                                      <th>Project Title</th>
                                                      <th>Project Type</th>
                                                      <th class="check-col">Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                      <td>1</td>
                                                      <td>Mohamed Khalifa</td>
                                                      <td>01100000000</td>
                                                      <td>Aged@mail.com</td>
                                                      <td>HR Program</td>
                                                      <td>Web Solution</td>
                                                      <td class='check-col tableAdmin'><a href='#' class='deleteBtn'  data-target='#DeletePPModal' data-toggle='modal' title='delete' data-placement='right'><span class='fa fa-trash'></span></a></td>
                                                    </tr> 
                                                    <tr>
                                                       <td>2</td>
                                                      <td>Mohamed Khalifa</td>
                                                      <td>01100000000</td>
                                                      <td>Aged@mail.com</td>
                                                      <td>Logo</td>
                                                      <td>Art Work</td>
                                                      <td class='check-col tableAdmin'><a href='#' class='deleteBtn'  data-target='#DeletePPModal' data-toggle='modal' title='delete' data-placement='right'><span class='fa fa-trash'></span></a></td>
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

        <!------------------------------------DeleteModals---- -->
        <!----DeleteProject---------------------------- -->
        <div class="modal fade CustomModal" id="DeletePPModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <form id="ForgotPassForm" method="post">
                  <div class="modal-body">
                        <h1>Delete Project</h1>
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
        <script src="_/js/jquery-1.12.1.min.js"></script>
        <script src="_/js/bootstrap.min.js"></script>
        <script src="_/js/ProjectScripts.js"></script>
        <script src="_/js/test.js"></script>
        <script src="http://localhost:35729/livereload.js"></script>
    </body>
</html>
