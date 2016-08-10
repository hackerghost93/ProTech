<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>AGED CMS : Email</title> 
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
             <div class="DataDiv">
                <nav class="subSideBar">
                     <?php require_once("InboxSideBar.php"); ?>
                </nav>   
				<nav class="subSideBar2">
                     <?php require_once("InboxSideBar.php"); ?>
                </nav>
                <div class="SideBarContent Inboxmessages">
                      <div class="DataDiv">
                           <div class="PageHaeder">
                              <h2>Inbox Messages</h2>
                           </div>
								<div class="box-wider-text">
                                <div class="box-header">
                                    <div class="row CustomRow">
                                    <div class="HeaderLeft"> 
                                         <div class="SubHeader">
                                                <div class="form-group FromOne">
													<label for="From">From </label><span>:</span>
                                                    <label class="from">yass.aast@gmail.com</label>
                                                </div><br>
												<div class="form-group ToOne">
													<label for="To">To </label><span>:</span>
                                                    <label class="To">Protech@gmail.com</label>
                                                </div><br>
												<div class="form-group Time">
													<label for="Time">Time </label><span>:</span>
                                                    <label class="Timeemail">10:00 AM</label>
                                                </div>
                                         </div> 
										 <button class="btn btn-sucess reply" onclick="MyFunction();"id="Reply"> <span class="fa fa-reply" aria-hidden="true"></span>Reply </button>
                                    </div>
                                    <div class="HeaderRight"> 
                                        
                                    </div>
                                    </div>
                                </div>
                                <div class="box-body">
									<p class="inboxdetails">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div>
								<div class="ReplyMessage" id="ReplyMessage">
									<form>
										<h3>Reply</h3>
										<div class="form-group formLayout">
											<textarea id="Edit_ProductBodyEditor" name="Send_Email" class="form-control" placeholder="" ></textarea>
										</div>
										<div class="form-group formLayout">
											<button type="button" type="submit" class="btn btn-md OverLayFormBtn"> Creat</button>
										</div>
									</form>
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
					 </div>
                </div>
            </div>   
        </div>

        <!-----------------------------------sideBarRight------>
        <nav class="sideBarRight"></nav>

        <!-----------------------------------------footer------>
        <footer></footer>

        <!----------------------------------------scripts------>
          <?php require_once("Scripts.php"); ?>
    </body>
</html>
