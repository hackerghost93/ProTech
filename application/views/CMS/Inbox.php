<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>AGED CMS : Email</title> 
		 <?php $this->load->view('CMS/Links');  ?>
    </head>
    <body>
        <!-- ---------------------------------sideBarLeft------ -->
        <div class="sideBarLeft">
            <?php $this->load->view('CMS/MainSideBar.php'); ?>
        </div>
        
        <!-- --------------------------------------Header----- -->
        <header>
            <?php $this->load->view('CMS/MainHeader.php'); ?>
        </header>
        <!------------------------------------dataSection------>
        <div class="dataSection">
             <div class="DataDiv">
                <nav class="subSideBar">
                     <?php $this->load->view('CMS/InboxSideBar.php'); ?>
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
        	 <?php $this->load->view('CMS/Scripts');  ?>
    </body>
</html>
