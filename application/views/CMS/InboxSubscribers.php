<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>AGED CMS : Email</title> 
		   <?php $this->load->view('CMS/Links');  ?>
    </head>
    <body onload="setUnread()">
	
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
		
                <div class="SideBarContent ">
                      <div class="DataDiv">
                           <div class="PageHaeder">
                              <h2>Send To all Subscribers</h2>
                           </div>
                           <form class="form-inline" method="post" action="<?php echo base_url();?>index.php/Email/sendToAll">
								<div class="box-wider-text">
									<div class="box-header">
                                    <div class="row CustomRow">
										   <div class="HeaderLeft"> 
										     <div class="form-group ToOneSubscribe ">
													<label for="ToOneSubscribecompose" >BCC </label><span>:</span>
                          <input type="text" name="BCC" class="form-control " placeholder="example@domain.com"/>        
												</div><br>
												<div class="form-group SubjectSubscribe ">
													<label for="Subject">Subject </label><span>:</span>
                                                  	<input type="text" name="Subject" class="form-control " placeholder="Subject "/> 
												</div>
                                        </div>
                                        <div class="HeaderRight"> 
                                         		<div class="form-group formLayout ">
													<button type="submit" class="btn btn-md OverLayFormBtn Sendus"> Send</button> 
												</div>
                                        </div>
                                         <div class="SubHeader ">
										
												
										
										
										
                                         </div> 
									
                                
                                    </div>
                                </div>
									<div class="box-body">
									<h3>Message</h3>
									<div class="form-group formLayout">
										<textarea id="Edit_ProductBodyEditor" name="Send_Email" class="form-control textHeight" placeholder="" ></textarea>
									</div>
									</div>
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
          <?php $this->load->view('CMS/Scripts.php'); ?>

    <script type="text/javascript">
       function setUnread() {
          var nothing = "nothing";
          $.post('Email/UnRead',{nothing:nothing},function(data)
          {
              $("#NewMails").text(data.count);
          },'json');
       }
                         
    </script>
    </body>
</html>
