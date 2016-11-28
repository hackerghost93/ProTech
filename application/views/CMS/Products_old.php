<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Protech CMS : Products</title>
    <?php $this->load->view("CMS/Links"); ?>

        <style type="text/css">
        /* #imaginary_container{
      margin-top:20%; /* Don't copy this */
        }
        */ .stylish-input-group .input-group-addon {
            background: white !important;
        }
        .stylish-input-group .form-control {
            border-right: 0;
            box-shadow: 0 0 0;
            border-color: #ccc;
        }
        .stylish-input-group button {
            border: 0;
            background: transparent;
        }
        </style>
</head>

<?php  if($this->session->userdata('loggedIn') != true){redirect('Login');}   ?>

    <body>
        <!-- -sideBarLeft -->
        <div class="sideBarLeft">
            <?php $this->load->view('CMS/MainSideBar'); ?>
        </div>

        <!-- Header -->
        <header>
            <?php $this->load->view('CMS/MainHeader'); ?>
        </header>
        <!--dataSection-->
        <div class="dataSection">
            <div class="DataDiv">
                <?php if($type=="printer"): ?>
                    <nav class="subSideBar">
                        <?php require_once("ProductsSidebar.php"); ?>
                    </nav>
                    <?php else: ?>
                        <style type="text/css">
                            .dataSection .SideBarContent {
                                left: 10% !important;
                                width: 90% !important;
                            }
                        </style>
                        <?php endif; ?>
                            <div class="SideBarContent ">
                                <div class="DataDiv">
                                    <div class="PageHaeder">

                                        <?php if($type == 'printer'): ?>
                                            <h2>Products</h2>
                                            <?php else: ?>
                                                <h2>Parts</h2>
                                                <?php endif; ?>
                                    </div>
                                    <div class="box-wider-text">
                                        <div class="box-header">
                                            <div class="row CustomRow">
                                                <div class="HeaderLeft">
                                                    <form id="hackerSearchForm">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-sm-offset-3">
                                                                <div id="imaginary_container">
                                                                    <div class="input-group stylish-input-group">
                                                                        <input type="text" class="form-control" placeholder="Search" id="hackerSearchBar" value="">
                                                                        <span class="input-group-addon">
                                  <button type="submit">
                                      <span class="glyphicon glyphicon-search"></span>
                                                                        </button>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="HeaderRight">
                                                    <button class="btn btn-sucess" id="AddNewProductShow"> Add New Product</button>
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
                                                            <th>Img</th>
                                                            <th>Family</th>
                                                            <th>Edit</th>
                                                            <th>Delete</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($products as $product ):?>
                                                            <?php if($type == 'printer'): ?>
                                                                <tr data-id="<?=$product['printer_id']?>" class="hackerSearch">
                                                                    <td>
                                                                        <?=$product['printer_id']?>
                                                                    </td>
                                                                    <?php else: ?>
                                                                        <tr data-id="<?=$product['part_id']?>" class="hackerSearch">
                                                                            <td>
                                                                                <?=$product['part_id']?>
                                                                            </td>
                                                                            <?php endif; ?>
                                                                                <?php  $the_id = ($type == 'printer' ?  'printer_id' : 'part_id') ?>;
                                                                                    <td class="hackerSearchAttr">
                                                                                        <?=$product['name']?>
                                                                                    </td>
                                                                                    <?php if(isset($product['images'][0])): ?>
                                                                                        <td><img src="<?=base_url().$product['images'][0]['image_path']?>" class="prodimg"></td>
                                                                                        <?php else: ?>
                                                                                            <td>no photo</td>
                                                                                            <?php endif; ?>
                                                                                                <td>
                                                                                                    <?php if(isset($product['family_name'])): ?>
                                                                                                        <?=$product['family_name']?>
                                                                                                            <?php endif; ?>
                                                                                                </td>
                                                                                                <td class='check-col tableAdmin'><a href='#' class='editeBtn' id="EditProductOverlayFormShow" data-placement='right' data-type="<?=$type;?>" data-id="<?=$product[$the_id]?>"><span class='fa fa-gear'></span></a></td>
                                                                                                <td class='check-col tableAdmin'><a href='#' class='deleteBtn' data-target='#DeleteProductModal' data-toggle='modal' title='delete' data-id="<?=$product[$the_id]?>" data-placement='right'><span class='fa fa-trash'></span></a></td>
                                                                        </tr>
                                                                        <?php endforeach; ?>
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


        <!--sideBarRight-->
        <nav class="sideBarRight"></nav>

        <!---footer-->
        <footer></footer>

        <!---OverLayForms -->

        <!--AddNewOffe- -->
        <div class="OverLayForm closed" id="AddNewProductOverlayForm">
            <div class="container-fluid OverLayFormHeader">
                <div class="row CustomRow">
                    <div class="OverLayFormHeaderLeft">
                        <h2> Add New Product </h2>
                    </div>
                    <div class="OverLayFormHeaderRight">
                        <span class="fa fa-close ExitBtn"></span>
                    </div>
                </div>
            </div>
            <form method="POST" action="<?=base_url()?>index.php/<?=$type?>/create" enctype="multipart/form-data">
                <div class="container-fluid OverLayFormContent">
                    <div class="FormSection">
                        <div class="SectionHeader">
                            <h3>Product Information</h3>
                        </div>
                        <div class="SectionContent row">
                            <div class="col-md-6">
                                <div class="form-group formLayout">
                                    <label for="printer_name" class="control-label ">Product Title : </label>
                                    <input type="text" name="printer_name" class="form-control InputProduct" placeholder="Product Title" />
                                </div>
                                <div class="form-group formLayout">
                                    <label for="Pdf" class="control-label ">Product Pdf: </label>
                                    <input type="file" name="PDF" class="form-control InputProduct" />
                                </div>
                                <?php if($type == 'printer'): ?>
                                    <div class="form-group formLayout">
                                        <label for="ProductFamily" class="control-label ">Product Family: </label>
                                        <select name="family" class="form-control InputProduct">
                                            <option value="0">Choose Family</option>
                                            <?php foreach ($families as $family):?>
                                                <option value="<?=$family['family_id']?>">
                                                    <?=$family['family_name']?>
                                                </option>
                                                <?php endforeach;?>
                                        </select>
                                    </div>
                                    <?php else: ?>
                                        <div class="form-group formLayout">
                                            <label for="ProductFamily" class="control-label ">Product ID: </label>
                                            <select name="family" class="form-control InputProduct">
                                                <option value="0">Choose Product ID</option>
                                                <?php if(isset($results_printer)):?>
                                                    <?php foreach($results_printer as $key_view => $row_view) : ?>
                                                        <option value="<?= $row_view['printer_id'];?>">
                                                            <?= $row_view['name'];?>
                                                        </option>
                                                        <?php endforeach;?>
                                                            <?php endif;?>
                                            </select>
                                        </div>
                                        <?php endif;?>
                                            <button type="button" class="btn btn-md" id="incrementAdd">Add Image</button>
                                            <div class="form-group formLayout" id="hackerAddImages">
                                                <label for="ProductImage" class="control-label ">Product Image: </label>
                                                <input type="file" name="image[]" class="form-control InputProduct" multiple="" />
                                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group formLayout">
                                    <label for="ProductDriverLink" class="control-label ">Product Driver Link: </label>
                                    <input type="text" name="ProductDriverLink" class="form-control InputProduct" />
                                </div>
                                <div class="form-group formLayout">
                                    <label for="description" class="control-label ">Description: </label>
                                    <input name="description" type="text" value="" placeholder="Write description" />
                                </div>
                                <div class="dropdown open" id="hackerTheDrop">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Choose tags
                                    </button>
                                    <div class="dropdown-menu" data-live-search="true" aria-labelledby="dropdownMenuButton">
                                        <style type="text/css">
                                            .hackerCheck {
                                                margin-left: 10px;
                                            }
                                            
                                            #dropdownMenuButton {
                                                width: 50%;
                                            }
                                        </style>
                                        <input class="form-group formLayout" type="text" id="hackerDownSearch" placeholder="Search for tag">
                                        <?php foreach ($tags as $tag):?>
                                            <h5 class="hackerCheck hackerSearchDrop"><span class="hackerTagValue"><?=$tag['tag_name']?></span>
         <input value="<?=$tag['tag_name']?>" name="tags[]" type="checkbox"> 
     </h5>
                                            <div class="dropdown-divider"></div>
                                            <?php endforeach;?>
                                    </div>
                                </div>

<!--
  <h3>
    Add as offer
    <input type="checkbox" name="offer">
  </h3>
-->



                            </div>
                        </div>
                    </div>
                    <div class="FormSection row">
                        <div class="col-md-4 ">
                            <div class="SectionHeader">
                                <h3>General Specifications </h3>
                            </div>
                            <div class="SectionContent Specifications">
                                <div id="AddNewSpecifications">
                                    <div class="form-group formLayout">
                                        <label for="General[]" class="control-label ">Product Specifications : </label>
                                        <input type="text" name="General[]" class="form-control overlayproduct" placeholder="Product Specifications" />
                                    </div>
                                    <button type="button" class="btn btn-md AddNewSpecificationsbtn" onclick="add_generalspecification();">
                                        <i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="SectionHeader">
                                <h3>Printing Specifications </h3>
                            </div>
                            <div class="SectionContent Specifications">
                                <div id="AddPrintingSpecifications">
                                    <div class="form-group formLayout">
                                        <label for="PrintingSpecifications" class="control-label ">Printing Specifications : </label>
                                        <input type="text" name="Printing[]" class="form-control overlayproduct" placeholder="Printing Specifications" />
                                    </div>
                                    <button type="button" class="btn btn-md AddNewSpecificationsbtn" onclick="add_printingspecifications();">
                                        <i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="SectionHeader">
                                <h3>Guarantee</h3>
                            </div>
                            <div class="SectionContent Specifications">
                                <div id="AddGuarantee">
                                    <div class="form-group formLayout">
                                        <label for="ProductGuarantee" class="control-label ">Product Guarantee : </label>
                                        <input type="text" name="Guarantee[]" class="form-control overlayproduct" placeholder="Product Guarantee" />
                                    </div>
                                    <button type="button" class="btn btn-md AddNewSpecificationsbtn" onclick="add_Guarantee();">
                                        <i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid OverLayFormFooter">
                    <div class="row CustomRow">
                        <div class="OverLayFormFooterItem right">
                            <button type="submit" class="btn btn-md OverLayFormBtn">ADD PRODUCT</button>
                        </div>
                        <div class="OverLayFormFooterItem left">

                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!--EditProduct -->
        <div class="OverLayForm closed" id="EditProductOverlayForm" data-id="">
            <div class="container-fluid OverLayFormHeader">
                <div class="row CustomRow">
                    <div class="OverLayFormHeaderLeft">
                        <h2> Edit Product </h2>
                    </div>
                    <div class="OverLayFormHeaderRight">
                        <span class="fa fa-close ExitBtn"></span>
                    </div>
                </div>
            </div>
            <form action="<?=base_url().'index.php/'.$type.'/edit'?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="" id="hackerID" />
                <div class="container-fluid OverLayFormContent">
                    <div class="FormSection">
                        <div class="SectionHeader">
                            <h3>Product Information</h3>
                        </div>
                        <div class="SectionContent row">
                            <div class="col-md-6">
                                <div class="form-group formLayout">
                                    <label for="ProductTitle" class="control-label ">Product Title : </label>
                                    <input type="text" name="ProductTitle" class="form-control InputProduct" placeholder="Product Title" id="hackerTitle" />
                                </div>
                                <div class="">
                                    <label for="ProductPdf" class="control-label ">Product Pdf: </label>
                                    <input type="file" name="ProductPdf" class="form-control InputProduct" id="hackerPDF" />
                                    <h4>The existant pdf:
       <h5 id="hackerOldPDF"></h5></h4>
                                </div>


                                <?php if($type == 'printer'): ?>
                                    <label for="ProductFamily" class="control-label ">Product Family: </label>
                                    <div class="form-group formLayout" id="hackerSelectDiv">
                                        <select name="ProductFamily" class="form-control InputProduct" id="hackerSelect">
                                            <option value="0">Choose Family</option>
                                        </select>
                                    </div>
                                    <?php else: ?>
                                        <label for="ProductFamily" class="control-label ">Product ID: </label>
                                        <div class="form-group formLayout" id="hackerSelectDiv">
                                            <select name="ProductFamily" class="form-control InputProduct" id="hackerSelect">
                                                <option value="0">Choose Product ID</option>
                                            </select>
                                        </div>
                                        <?php endif;?>


                                            <button type="button" class="btn btn-md" id="incrementAdd1">Add Image</button>
                                            <div class="form-group formLayout" id="hackerAddImages1">
                                                <label for="ProductImage" class="control-label ">Product Image: </label>
                                                <input type="file" name="image[]" class="form-control InputProduct" multiple="" />
                                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group formLayout">
                                    <label for="product_driver" class="control-label ">Product Driver Link: </label>
                                    <input type="text" name="product_driver" class="form-control InputProduct" id="hackerDRIVER" />
                                </div>
                                <div class="form-group formLayout">
                                    <label for="description" class="control-label ">Description: </label>
                                    <input type="text" name="description" id="hackerDescription" />
                                </div>
                                <!--
  <div class="checkbox-inline">
    <label>
        <input type="checkbox" id="hackerOffer" name="offer">
        <label class="offer">Offer Mark</label>
    </label>
</div>
-->
                            </div>
                        </div>
                    </div>
                    <div class="FormSection">
                        <div class="SectionHeader">
                            <h3>Product Images</h3>
                        </div>
                        <div class="SectionContent row myhackerImages">
                            <!-- <div class="prodImages">
</div> -->
                        </div>
                    </div>
                    <div class="FormSection row">
                        <div class="col-md-4 ">
                            <div class="SectionHeader">
                                <h3>General Specifications </h3>
                                <button type="button" class="btn btn-md" id="AddNewSpecificationsbtn1">
                                    <i class="fa fa-plus"></i></button>
                            </div>
                            <div class="SectionContent Specifications">
                                <div id="RemoveSpecifications">
                                    <div class="form-group formLayout" id="hackerGeneral">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="SectionHeader">
                                <h3>Printing Specifications </h3>
                                <button type="button" class="btn btn-md" id="AddNewSpecificationsbtn2">
                                    <i class="fa fa-plus"></i></button>
                            </div>
                            <div class="SectionContent Specifications">
                                <div class="form-group formLayout" id="hackerTyping">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="SectionHeader">
                                <h3>Guarantee</h3>
                                <button type="button" class="btn btn-md" id="AddNewSpecificationsbtn3">
                                    <i class="fa fa-plus"></i></button>
                            </div>
                            <div class="SectionContent Specifications">
                                <div id="RemoveSpecifications">
                                    <div class="form-group formLayout" id="hackerGuarantee">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="container-fluid OverLayFormFooter">
                    <div class="row CustomRow">
                        <div class="OverLayFormFooterItem right">
                            <button type="submit" class="btn btn-md OverLayFormBtn">Edit</button>
                        </div>
                        <div class="OverLayFormFooterItem left">
                            <!--cripts-->
                            <script>
                                function MyFunction() {
                                    var e = document.getElementById("ReplyMessage");
                                    if (e.style.display == 'block')
                                        e.style.display = 'none';
                                    else
                                        e.style.display = 'block';
                                }
                            </script>


                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!--DeleteModals -->
        <!--DeleteProduct-->
        <div class="modal fade CustomModal" id="DeleteProductModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <form id="deleteConfirmed" method="post">
                        <div class="modal-body">
                            <h1>Delete Product</h1>
                            <p>Are you sure that you need to delete this Data ?</p>
                            <div class="form-group formLayout" hidden>
                                <input type="text" id="deleteConfirm" name="RecoredId" class="form-control" placeholder="RecoredId" />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn customBtn" type="submit"> Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--ProductTags-->
        <div class="modal fade CustomModal" id="EditProductTagsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <form id="ForgotPassForm" method="post">
                        <div class="modal-body">
                            <h1>Post Tags</h1>
                            <div class="form-group formLayout" hidden>
                                <input type="text" id='PostTag_post_id' class="form-control" placeholder="RecoredId" />
                            </div>
                            <div class="form-group">
                                <div id='PostTagsModalContent' class="checkbox ModalCheck">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn customBtn" type="submit" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--scripts-->
        <script src="<?=base_url()?>js/cms/js/jquery-1.12.1.min.js"></script>
        <script src="<?=base_url()?>js/cms/js/bootstrap.min.js"></script>
        <script src="<?=base_url()?>js/cms/js/ProjectScripts.js"></script>
        <script src="<?=base_url()?>js/cms/js/test.js"></script>
        <script>
            var MyType = "<?=$type?>";
            var MyUrl = "<?=base_url()?>";
        </script>
        <script type="text/javascript" src="<?=base_url()?>js/hacker.js"></script>
        <script>
            $(document).ready(function () {

                //Hide div w/id extra
                $(".Description").css("display", "none");

                // Add onclick handler to checkbox w/id checkme
                $("#checkbox1").click(function () {

                    // If checked
                    if ($("#checkbox1").is(":checked")) {
                        //show the hidden div
                        $(".Description").show(500);
                    } else {
                        //otherwise, hide it
                        $(".Description").hide(500);
                    }
                });

            });
        </script>
        <script>
            $(document).on("click", ".CloseBtn", function () {
                $(this).closest("p").css("display", "none");

            });
        </script>
        <script>
            function add_Guarantee() {
                var newspan = document.createElement('div');
                newspan.innerHTML = '<div class="form-group formLayout"><input type="text" name="Guarantee[]" class="form-control overlayproduct" placeholder="Product Guarantee" /></div>';
                document.getElementById('AddGuarantee').appendChild(newspan);
            }

            function add_printingspecifications() {
                var newspan = document.createElement('div');
                newspan.innerHTML = '	<div class="form-group formLayout">	<input type="text" name="Printing[]" class="form-control overlayproduct" placeholder="Printing Specifications" /></div>';
                document.getElementById('AddPrintingSpecifications').appendChild(newspan);
            }

            function add_generalspecification() {
                var newspan = document.createElement('div');
                newspan.innerHTML = '	<div class="form-group formLayout"><input type="text" name="General[]" class="form-control overlayproduct" placeholder="Product Specifications" /></div>';
                document.getElementById('AddNewSpecifications').appendChild(newspan);
            }

            $('#AddNewSpecificationsbtn1').click(function (event) {
                console.log('fired');
                $('#hackerGeneral').append('<p><input type="text" value="" name="general[]" id="p_scents" class="form-control overlayproduct" placeholder="Printing Specifications3" /><a href="#" id="remScnt" class="removespecification CloseBtn" ><i class="fa fa-close"></i></a></p>');
            });


            $('#AddNewSpecificationsbtn2').click(function (event) {
                console.log('fired');
                $('#hackerTyping').append('<p><input type="text" value="" name="typing[]" id="p_scents" class="form-control overlayproduct" placeholder="Printing Specifications3" /><a href="#" id="remScnt" class="removespecification CloseBtn" ><i class="fa fa-close"></i></a></p>');
            });


            $('#AddNewSpecificationsbtn3').click(function (event) {
                console.log('fired');
                $('#hackerGuarantee').append('<p><input type="text" value="" name="guarantee[]" id="p_scents" class="form-control overlayproduct" placeholder="Printing Specifications3" /><a href="#" id="remScnt" class="removespecification CloseBtn" ><i class="fa fa-close"></i></a></p>');
            });
        </script>

        <script type="text/javascript" src="<?=base_url()?>js/hackerSearch.js"></script>

        <script type="text/javascript">
            $('#hackerDownSearch').keyup(function () {
                //event.preventDefault();
                $target = $(this);
                $myValue = $('#hackerDownSearch').val();
                $('.hackerSearchDrop').each(function (key, value) {
                    if ($myValue === "") {
                        $(value).show();
                    } else {
                        var str = $(value).find('.hackerTagValue').html();
                        if (str.indexOf($myValue) > -1) {
                            $(value).show();
                        } else
                            $(value).hide();
                    }
                });
            });
        </script>

    </body>

</html>