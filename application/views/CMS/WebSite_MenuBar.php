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
            
            select.Icon.valid {
                border: 1px solid rgba(230, 230, 230, 0.7) !important;
                border-radius: 0px !important;
                padding: 10px !important;
                min-height: 50px !important;
                box-shadow: none !important;
                background: none !important;
                width: 50% !important;
            }
        </style>

</head>
<?php  if($this->session->userdata('loggedIn') != true){redirect('Login');}   ?>

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
                    <?php require_once("Settings_SideBar.php"); ?>
                </nav>
                <div class="SideBarContent " id="SidBarContentDiv">
                    <div class="DataDiv">
                        <div class="PageHaeder">
                            <h2>NavBar</h2>
                        </div>
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
                                <form class="col-md-7" method="post" action="<?=base_url()?>index.php/AccountSettings/edit" id="ChangeUsername">

                                    <div class="form-group formLayout">
                                        <label for="Username" class="control-label ">NavBar Icon :</label>
                                        <br>
                                        <select class="Icon" style="border: 1px solid rgba(230, 230, 230, 0.7);
     border-radius: 0px;
     padding: 10px ;
     min-height: 50px ;
     box-shadow: none ;
     background: none ;
     width: 50% ;" >
                                            <option>خدماتنا</option>
                                            <option>المنتجات</option>
                                            <option>التحميلات</option>
                                            <option>عملائنا </option>
                                        </select>

                                    </div>
                                    <div class="form-group formLayout">
                                        <label for="Icon Name" class="control-label ">Icon Name :</label>
                                        <input type="text" name="IconName" id="IconName" class="form-control" />
                                    </div>

                                    <div class="form-group formLayout">
                                        <button type="submit" id="Dis_able" class="btn btn-md  changePassword"> Submit</button>
                                    </div>
                                </form>
                            </div>
                            <div class="box-footer">
                                <div class="row CustomRow">
                                    <nav>

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

        <!-----------------------------------OverLayForms---- -->

        <!----------------------------------------scripts------>
        <?php require_once("Scripts.php"); ?>

    </body>

</html>