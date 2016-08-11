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
		
                <div class="SideBarContent ">
                      <div class="DataDiv">
                           <div class="PageHaeder">
                              <h2>Send To all Subscribers</h2>
                           </div>
							<form class="form-inline">
								<div class="box-wider-text">
									<div class="box-header">
                                    <div class="row CustomRow">
										   <div class="HeaderLeft"> 
										     <div class="form-group ToOneSubscribe ">
													<label for="ToOneSubscribecompose" >To </label><span>:</span>
													<input type="text" name="To" class="form-control " placeholder="example@domain.com"/>     
												</div><br>
												<div class="form-group SubjectSubscribe ">
													<label for="Subject">Subject </label><span>:</span>
                                                  	<input type="text" name="Subject" class="form-control " placeholder="Subject "/> 
												</div>
                                        </div>
                                        <div class="HeaderRight"> 
                                         		<div class="form-group formLayout ">
													<button type="button" type="submit" class="btn btn-md OverLayFormBtn Sendus"> Send</button>
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
          <?php require_once("Scripts.php"); ?>

    </body>
</html>
