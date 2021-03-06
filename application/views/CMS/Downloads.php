<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Protech CMS : PDF</title>
    <?php $this->load->view("CMS/Links.php"); ?>


</head>
<?php  if($this->session->userdata('loggedIn') != true){redirect('Login');}   ?>

    <body>
        <!-- ---------------------------------sideBarLeft------ -->
        <div class="sideBarLeft">
            <?php $this->load->view("CMS/MainSideBar.php"); ?>
        </div>

        <!-- --------------------------------------Header----- -->
        <header>
            <?php $this->load->view("CMS/MainHeader.php"); ?>
        </header>
        <!------------------------------------dataSection------>
        <div class="dataSection">
            <div class="DataDiv">
                <nav class="subSideBar">
                    <?php require_once("ProductsSidebar.php"); ?>
                </nav>
                <div class="SideBarContent ">
                    <div class="DataDiv">
                        <div class="PageHaeder">
                            <?php if($type == "pdf"): ?>
                                <h2>PDF</h2>
                                <?php else:?>
                                    <h2>Driver</h2>
                                    <?php endif;?>
                        </div>
                        <div class="box-wider-text">
                            <div class="box-header">
                                <div class="row CustomRow">
                                    <div class="HeaderLeft">
                                        <form class="TopBarForm">
                                            <div class="form-group">
                                                <input type="search" onkeyup="showHint(this.value)" class="form-control" name="Search" placeholder="Search By  Name" />
                                                <a href="#" type="submit" role="button"><span class="fa fa-search"></span></a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="HeaderRight">
                                        <button class="btn btn-sucess" id="AddNewDownloadsShow">
                                            <?php if($type =="pdf"): ?>
                                                Add New PDF
                                                <?php else:?>
                                                    Add New Driver
                                                    <?php endif;?>

                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="table-responsive" id="UserTable">
                                    <table class='table table-hover table-condensed'>
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
if(isset($results))
{
	////`PDF_ID``PDF_Title``PDF_URL`
   foreach ($results as $object) {
       if($this->router->fetch_method() == 'PdfAdd'){
           echo "<tr><td>$object->id</td><td>$object->PDF_Title</td>
            <td class='check-col tableAdmin'><a href='#' onclick='SetPDFID($object->id)' class='deleteBtn'  data-target='#DeleteDownloadsModal' data-toggle='modal' title='delete' data-placement='right'><span class='fa fa-trash'></span></a></td></tr>";
       }else{
           echo "<tr><td>$object->id</td><td>$object->Driver_Title</td>
            <td class='check-col tableAdmin'><a href='#' onclick='SetPDFID($object->id)' class='deleteBtn'  data-target='#DeleteDownloadsModal' data-toggle='modal' title='delete' data-placement='right'><span class='fa fa-trash'></span></a></td></tr>";
       }
    }
}
?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="box-footer">
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

        <!----AddNewOffer------------------- -->
        <div class="OverLayForm closed" id="AddNewDownloadsOverlayForm">
            <div class="container-fluid OverLayFormHeader">
                <div class="row CustomRow">
                    <div class="OverLayFormHeaderLeft">
                        <h2> Add New PDF </h2>
                    </div>
                    <div class="OverLayFormHeaderRight">
                        <span class="fa fa-close ExitBtn"></span>
                    </div>
                </div>
            </div>
            <?php if($type == 'pdf'): ?>
                <form method="post" action="<?=base_url()?>index.php/Downloads/createPDF" id="AddPDFForm">
                    <?php else: ?>
                        <form method="post" action="<?=base_url()?>index.php/Downloads/createDriver" id="AddPDFForm">
                            <?php endif; ?>
                                <div class="container-fluid OverLayFormContent">
                                    <div class="FormSection">
                                        <div class="SectionHeader">
                                            <h3>Product Information</h3>
                                        </div>
                                        <div class="SectionContent row">
                                            <div class="col-md-6" id="DownloadsNew">
                                                <div class="form-group formLayout">
                                                    <label for="Producttitle" class="control-label ">Title : </label>
                                                    <input type="text" name="title" class="form-control" placeholder="Product Title" />
                                                </div>
                                                <div class="form-group formLayout">
                                                    <?php if($type == 'pdf'): ?>
                                                        <label for="DownloadPdf" class="control-label ">Product Pdf: </label>
                                                        <?php else: ?>
                                                            <label for="DownloadDriver" class="control-label ">Product Driver: </label>
                                                            <?php endif; ?>
                                                                <input type="text" name="url" class="form-control InputProduct" placeholder="Enter url" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="container-fluid OverLayFormFooter">
                                    <div class="row CustomRow">
                                        <div class="OverLayFormFooterItem right">
                                            <button type="submit" class="btn btn-md "> upload</button>
                                        </div>
                                        <div class="OverLayFormFooterItem left">

                                        </div>
                                    </div>
                                </div>
                        </form>
        </div>


        <!------------------------------------DeleteModals---- -->
        <!----DeleteFamily------------------------------>
        <div class="modal fade CustomModal" id="DeleteDownloadsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <form id="ForgotPassForm" method="post" action="<?=base_url()?>index.php/Downloads/delete">
                        <div class="modal-body">
                            <h1>Delete PDF</h1>
                            <p>Are you sure that you need to delete this Data ?</p>
                            <div class="form-group formLayout">
                                <input type="hidden" name="id" id="RecoredId" class="form-control" placeholder="RecoredId" readonly />
                                <input type="hidden" name="type" id="RecoredType" class="form-control" value="<?=$type?>" />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn customBtn"> Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!----------------------------------------scripts------>
        <?php $this->load->view('CMS/Scripts');  ?>
            <script type="text/javascript">
                function SetPDFID(id) {
                    var ID = id;
                    document.getElementById("RecoredId").value = ID;
                }
            </script>
            <script>
                $(document).ready(function () {
                    var validator = $("#AddPDFForm").validate({
                        errorPlacement: function (error, element) {
                            // Append error within linked label
                            $(element).closest("div").find("label[for='" + element.attr("name") + "']").append(error);
                        },
                        errorElement: "span",
                        rules: {

                            Producttitle: "required",
                            DownloadPdf: {
                                required: true,
                                accept: "audio/*"
                            }

                        },
                        messages: {

                            Producttitle: "This field is required",
                            DownloadPdf: {
                                required: "This field is required",
                                accept: "audio/*"
                            }
                        }
                    });
                });
            </script>
    </body>

</html>