<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>AGED CMS : Email</title> 
		 <?php $this->load->view('CMS/Links');  ?>
    </head>
    <body>
	 <div class="modal fade CustomModal" id="DeleteInboxMessageModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <form id="ForgotPassForm" method="post">
                  <div class="modal-body">
                        <h1>Delete Inbox Message</h1>
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
				<nav class="subSideBar tt">
                     <?php $this->load->view('CMS/MessageSideBar.php'); ?>
                </nav>
                <div class="SideBarContent Inboxmessages">
                      <div class="DataDiv">
                           <div class="PageHaeder">
                              <h2>Inbox Messages</h2>
                           </div>
                          <?php if(isset($show)):;?>
								<div class="box-wider-text">
								<div class="backread"></div>
                                <div class="box-header">
                                    <div class="row CustomRow">
                                    <div class="HeaderLeft"> 
                                         <div class="SubHeader">
                                                <div class="form-group FromOne">
													<label for="From">From </label><span>:</span>
                                                    <label class="from"><?php echo $show->email; ?></label>
                                                </div><br>
												<div class="form-group ToOne">
													<label for="To">Name </label><span>:</span>
                                                    <label class="To"><?php echo $show->name; ?></label>
                                                </div><br>
												<div class="form-group TitleMessage">
													<label for="Title">Title </label><span>:</span>
                                                    <label class="To"><?php echo $show->subject; ?></label>
                                                </div><br>
												<div class="form-group Time">
													<label for="Time">Time </label><span>:</span>
                                                    <label class="Timeemail"><?php echo $show->created_at; ?></label>
                                                </div>
                                         </div> 
										 <button class="btn btn-sucess reply" onclick="MyFunction();"id="Reply"> <span class="fa fa-reply" aria-hidden="true"></span>Reply </button>
                                    </div>
                                    <div class="HeaderRight"> 
                                        
                                    </div>
                                    </div>
                                </div>
                                <div class="box-body">
									<p class="inboxdetails"> <?php echo $show->message; ?></p>
                                </div>
								<div class="ReplyMessage section--purple wow fadeInDown" data-wow-delay="0.40s" id="ReplyMessage">
									<form>
										<h3>Reply</h3>
										<div class="form-group formLayout">
											<textarea id="Edit_ProductBodyEditor" name="Send_Email" class="form-control textHeight" placeholder="" ></textarea>
										</div>
										<div class="form-group formLayout">
											<button type="button" type="submit" class="btn btn-md OverLayFormBtn submitReply"> Send</button>
										</div>
									</form>
								</div>
              <?php endif; ?>
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
          <?php $this->load->view('CMS/Scripts');  ?>
    </body>
</html>
