<ul class="subSideBarMenu">
                            <li class="subSideBarMenuHeader">
                                <h1>Inbox</h1>
                            </li>
                            <li class="subSideBarMenuItem BlogMenuItem">
                                <a href="<?php echo base_url();?>index.php/Email/select_all" class="subSideBarPayrollMenuItemAnchor " id="SSMIBLog-Categories">
                                    <h4><span class="fa fa-envelope" aria-hidden="true"></span></h4>
                                    <h4>Inbox Messages</h4>
									<span class="notread" id="NewMails"></span>
                                </a>
                            </li>
                             <li class="subSideBarMenuItem BlogMenuItem">
                                <a href="<?php echo base_url();?>index.php/Email/sendToAll" class="subSideBarPayrollMenuItemAnchor " id="SSMIBLog-Tags">
                                     <h4><span class="fa fa-envelope" aria-hidden="true"></span></h4>
                                    <h4>Send to Subscribers</h4>
                                </a>
                            </li>
                             <li  class="subSideBarMenuItem BlogMenuItem">
                                <a href="<?php echo base_url();?>index.php/Email/send" class="subSideBarPayrollMenuItemAnchor" id="SSMIBlog-Posts">
                                    <h4><span class="fa fa-newspaper-o"></span></h4>
                                    <h4>Compose Email</h4>
                                </a>
                            </li>
                            <!--li  class="subSideBarMenuItem BlogMenuItem">
                                <a href="VideoPosts.php" class="subSideBarPayrollMenuItemAnchor" id="SSMIBlog-VideoPosts">
                                    <h4><span class="fa fa-video-camera"></span></h4>
                                    <h4>Video Posts</h4>
                                </a>
                            </li>
                             <li class="subSideBarMenuItem BlogMenuItem">
                                <a href="Comments.php" class="subSideBarPayrollMenuItemAnchor" id="SSMIBlog-Comments">
                                    <h4><span class="fa fa-comments "></span></h4>
                                    <h4>Comments </h4>
                                </a>
                            </li-->
                         </ul>
                         <script type="text/javascript">
                                 function setUnread() {
                                    console.log("we are here");
                                    var nothing = "nothing";
                                    $.post('<?php echo base_url();?>index.php/Email/UnRead',{nothing:nothing},function(data)
                                    {
                                        console.log(data.count);
                                       $("#NewMails").text(data.count);
                                   },'json');
                                }
                         </script>