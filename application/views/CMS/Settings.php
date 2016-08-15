<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Protech CMS : Settings</title> 
     		 <?php $this->load->view('CMS/Links');  ?>
<style>
button.btn.btn-md.changePassword {
    background: #272B35;
    color: #fff;
}
button.btn.btn-md.changePassword:hover {
    background: #83D1DB;
    color: #fff;
}
span.confirmpassword {
    position: absolute;
    bottom: 24%;
    color: red;
    left: 194px;
}
span.Invalidpassword {
    position: absolute;
    left: 152px;
    color: red;
}
</style>
  
    </head>
<?php  if($this->session->userdata('loggedIn') != true){redirect('Login');}   ?>
    <body onload="SetMail()">
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
              <nav class="subTopBar">
                  <ul class="subTopBarList">
                      <li class="subTopBarItem">
                          <h1>Change Username</h1>
                      </li>
                      <!--li>
                          <form class="TopBarForm">
                                <div class="form-group">
                                     <input type="search" class="form-control" name="Search" placeholder="Search By Family Name"/>
                                      <a href="#" type="submit" role="button"><span class="fa fa-search"></span></a>
                                </div>
                          </form>    
                      </li-->
                   </ul>
             </nav>
              <div class="DataDiv Wide">
                          <div class="DataDiv">
                               <div class="box-wider-text">
                                    <div class="box-header">
                                        <div class="row CustomRow">
                                        <div class="HeaderLeft"> 
                                         </div>
                                        <div class="HeaderRight"> 
                                            
                                        </div>
                                        </div>
                                    </div>
                                    <div class="box-body row">
										<form class="col-md-7" method="post" action="<?=base_url()?>index.php/AccountSettings/edit">
											 <div class="form-group formLayout" hidden>
												<label for="" class="control-label "> </label>
												<input type="hidden" name="ID" id="Admin_ID" class="form-control" readonly value="<?php  if($this->session->userdata('loggedIn') == true)
                            {echo $this->session->userdata('id');}     ?>" />
											 </div>		
											 <div class="form-group formLayout">
												<label for="Username" class="control-label ">Username :</label>
												<input type="text" name="Username" value="<?php  if($this->session->userdata('loggedIn') == true)
                            {echo $this->session->userdata('username');}     ?>" 
                                class="form-control" readonly />
											 </div>	
                        <div class="form-group formLayout">
                        <label for="Email" class="control-label ">Email :</label>
                        <input type="text" name="Email" id="JSmail"  class="form-control" />
                       </div>
											 <div class="form-group formLayout">
                       <?php if(isset($state))
                       {echo "<span class='Invalidpassword'>$state</span>";}
                        ?>
												<label for="CurrentPassword" class="control-label ">CurrentPassword :</label>
												<input type="password" name="CurrentPassword" class="form-control" />
											 </div>	
											 <div class="form-group formLayout">
												<label for="NewPassword" class="control-label ">New Password :</label>
												<input type="password" name="NewPassword" id="NewPassword" class="form-control" />
											 </div>
                       <div class="form-group formLayout">
                        <label for="ConfirmPassword" class="control-label ">Confirm New Password :</label>
                        <input type="password" onkeyup="CheckPW()" name="ConfirmPassword" id="ConfirmPassword" class="form-control" />
                        <span class="confirmpassword" id="PWC"></span>
                       </div>
											 <div class="form-group formLayout">
												 <button type="submit" id="Dis_able" class="btn btn-md OverLayFormBtn changePassword"> Change</button>
											 </div>
										</form>
                                    </div>
                                    <div class="box-footer">
                                         <div class="row CustomRow">
                                              <nav>
                                                <!--ul class="pagination">
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
                                                </ul-->
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

        <!----------------------------------------scripts------>
 	<?php require_once("Scripts.php"); ?>
<script type="text/javascript">
  function CheckPW()
  {
    if($("#NewPassword").val() == $("#ConfirmPassword").val() )
    {
      $("#PWC").text("");
      $("#Dis_able").prop('disabled', false);
    }
    else
    {
         $("#PWC").text("password doesn't matchs");
         $("#Dis_able").prop('disabled', true);
    }
  }
  function SetMail()
  {
      var ID=$("#Admin_ID").val();
      console.log(ID);
      $.post('AccountSettings/GetMail',{ID:ID},function(data)
          {
            console.log(data);
            $("#JSmail").val(data);
          },'json');
  }
</script>
    </body>
</html>
