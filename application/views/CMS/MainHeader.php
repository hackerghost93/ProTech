<nav class=" clearfix navbar navbar-default navbar-static-top">
                 <div class="container-fluid">
                      <div class="navbar-left">
                          <div class="HeaderLogo">
                            <img src="<?php echo base_url(); ?>imgs/logo.png"></img>
                          </div>
                          <div class="HeaderLinks">
                          <a  class="btn" id="hi"><span class="fa fa-calendar"></span></a>
                          <a href="#" class="btn"><span class="fa fa-bell"></span></a>
                          <a href="#" class="btn"><span class="fa fa-envelope"></span></a>
                          </div>
                   <!--       <form class="HeaderForm">
                                <div class="form-group">
                                    <input type="search" class="form-control" name="Search" placeholder="Search"/>
                                     <a href="#" type="submit" role="button"><span class="fa fa-search"></span></a>
                                </div>
                           </form>  -->
                      </div>
                      <div class="navbar-right">
                          <div class="HeaderLinks">
                             <a href="" class="btn"><span class="fa fa-comments"></span></a>
                          </div>    
                          <div class="dropdown ProfileHeader">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                <div class="ProfileHeaderAnchor">
                                    <h4><?php if($this->session->userdata('loggedIn') == true)
                                    {
                                      echo $this->session->userdata('username');
                                    }     ?></h4>
                                    <img src="<?php echo base_url(); ?>imgs/profile.jpg" alt="user"> 
                                </div>
                              </a>
                              <ul class="dropdown-menu">
                                <li class="dropmenuItem"><a href="#"><div><h4><span class="fa fa-user"></span></h4><h4>Profile</h4></div></a></li>
                                <li class="dropmenuItem"><a href="#"><div><h4><span class="fa fa-gear"></span></h4><h4>Setting</h4></div></a></li>
                                <li role="separator" class="divider"></li>
                                <li class="dropmenuItem"><a href="#"><div><h4><span class="fa fa-sign-out"></span></h4><h4>Sign out</h4></div></a></li>
                              </ul>
                          </div>
                      </div>
                 </div>
            </nav>