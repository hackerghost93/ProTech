<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>AGED CMS : Email</title>

    <?php $this->load->view('CMS/Links');  ?>
        <script>
            //search script
            function showHint(str) {
                if (str == "") {
                    document.getElementById("txtHint").innerHTML = "";
                    return;
                } else {
                    if (window.XMLHttpRequest) {
                        // code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp = new XMLHttpRequest();
                    } else {
                        // code for IE6, IE5
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange = function () {
                        if (true) {
                            document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                        }
                    }
                    xmlhttp.open("GET", "<?php echo $this->config->base_url(); ?>index.php/Email/SearchEmail?q=" + str, true);
                    xmlhttp.send();
                }
            }
        </script>
</head>

<body onload="setUnread()">
    <div class="modal fade CustomModal" id="DeleteInboxMessageModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <form id="ForgotPassForm" method="post" action="<?php echo base_url();?>index.php/Email/deleteMessage">
                    <div class="modal-body">
                        <h1>Delete Inbox Message</h1>
                        <p>Are you sure that you need to delete this Data ?</p>
                        <div class="form-group formLayout" hidden>
                            <input type="text" name="RecoredId" id="RecoredId" class="form-control" placeholder="RecoredId" />
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
                    <?php //if(isset($show)):;?>
                        <div class="box-wider-text">
                            <div class="backread"></div>
                            <div class="box-header">
                                <div class="row CustomRow">
                                    <div class="HeaderLeft">
                                        <div class="SubHeader">
                                            <div class="form-group FromOne">
                                                <label for="From">From </label><span>:</span>

                                                <label class="from" id="email">
                                                    <?php //echo $show->email; ?>
                                                </label>
                                            </div>
                                            <br>
                                            <div class="form-group ToOne">
                                                <label for="To">Name </label><span>:</span>
                                                <label class="To" id="name">
                                                    <?php //echo $show->name; ?>
                                                </label>
                                            </div>
                                            <br>
                                            <div class="form-group TitleMessage">
                                                <label for="Title">Title </label><span>:</span>
                                                <label class="To" id="subject">
                                                    <?php //echo $show->subject; ?>
                                                </label>
                                            </div>
                                            <br>
                                            <div class="form-group Time">
                                                <label for="Time">Time </label><span>:</span>
                                                <label class="Timeemail" id="created_at">
                                                    <?php //echo $show->created_at; ?>
                                                </label>
                                            </div>
                                        </div>
                                        <!--										 <button class="btn btn-sucess reply" onclick="MyFunction();"id="Reply"> <span class="fa fa-reply" aria-hidden="true"></span>Reply </button>-->
                                    </div>
                                    <div class="HeaderRight">

                                    </div>
                                </div>
                            </div>
                            <div class="box-body">
                                <p class="inboxdetails" id="message">
                                    <?php //echo $show->message; ?>
                                </p>
                            </div>
                            <div class="ReplyMessage section--purple wow fadeInDown" data-wow-delay="0.40s" id="ReplyMessage">
                                <form>
                                    <h3>Reply</h3>
                                    <div class="form-group formLayout">
                                        <textarea id="Edit_ProductBodyEditor" name="Send_Email" class="form-control textHeight" placeholder=""></textarea>
                                    </div>
                                    <div class="form-group formLayout">
                                        <button type="button" type="submit" class="btn btn-md  submitReply"> Send</button>
                                    </div>
                                </form>
                            </div>
                            <?php //endif; ?>
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

        <script type="text/javascript">
            $(document).ready(function () {
                var validator = $("#AddsubscriberForm").validate({
                    errorPlacement: function (error, element) {
                        // Append error within linked label
                        $(element).closest("div").find("label[for='" + element.attr("name") + "']").append(error);
                    },
                    errorElement: "span",
                    rules: {
                        BCC: {
                            required: true,
                            email: true
                        },
                        Subject: "required",
                        Send_Email: "required"

                    },
                    messages: {
                        BCC: {
                            required: "This field is required",
                            email: "Please enter valid email"
                        },
                        Subject: "This field is required",
                        Send_Email: "Please enter data"

                    }
                });
            });
        </script>
        <script>
            //delete script
            $(document).on("click", ".deleteBtn", function () {
                var Id = $(this).data('id');
                $(".modal-body #RecoredId").val(Id);
            });
        </script>
        <script type="text/javascript">
            function ShowMail(id) {
                var ID = id;
                $.post('<?php echo base_url();?>index.php/Email/show', {
                        ID: ID
                    },
                    function (data) {
                        $("#email").text(data.email);
                        $("#name").text(data.name);
                        $("#subject").text(data.subject);
                        $("#created_at").text(data.created_at);
                        $("#message").text(data.message);
                    }, 'json');
                setUnread();
            }
        </script>

</body>

</html>