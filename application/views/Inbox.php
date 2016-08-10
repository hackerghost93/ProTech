<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>AGED CMS : Email</title> 
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
                     <?php require_once("InboxSideBar.php"); ?>
                </nav>
                <div class="SideBarContent">
                      <div class="DataDiv">
                           <div class="PageHaeder">
                              <h2>Inbox</h2>
                           </div>
							<form class="form-inline">
								<div class="box-wider-text">
                                <div class="box-header">
                                    <div class="row CustomRow">
                                    <div class="HeaderLeft"> 
                                         <div class="SubHeader">
                                                <div class="form-group">
													<label for="SendTo">SendTo</label>
                                                     <input type="text" class="form-control" name="SendTo" placeholder="email@domain.com"/>
                                                     <a href="#" type="submit" role="button"></a>
                                                </div>
                                         </div>    
                                    </div>
                                    <div class="HeaderRight"> 
                                         <button class="btn btn-sucess" type="submit" id="Reply"> Reply </button>
                                    </div>
                                    </div>
                                </div>
                                <div class="box-body">
									 
                                </div>
                                <!--div class="box-footer">
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
                                </div-->
                           </div>
							</form>
					 </div>
                </div>
            </div>   
        </div>

        <!-----------------------------------sideBarRight------>
        <nav class="sideBarRight"></nav>

        <!-----------------------------------------footer------>
        <footer></footer>

        <!----------------------------------------scripts------>
        <script src="_/js/jquery-1.12.1.min.js"></script>
		<script src="_/js/tinymce/tinymce.min.js"></script>
        <script type="text/javascript">
                tinymce.init({
                  selector: 'textarea',
                  height: 500,
                  plugins: [
                    'advlist autolink lists link image charmap print preview anchor',
                    'searchreplace visualblocks code fullscreen',
                    'insertdatetime media table contextmenu paste code'
                  ],
                  toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image'
                });
        </script>
        <script src="_/js/bootstrap.min.js"></script>
        <script src="_/js/ProjectScripts.js"></script>
        <script src="_/js/test.js"></script>
        <script src="http://localhost:35729/livereload.js"></script>
    </body>
</html>
