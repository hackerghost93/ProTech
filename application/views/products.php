<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Protech CMS : Products</title> 
        <link rel="stylesheet" type="text/css" href="_/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="_/css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="_/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="_/css/BoxComponant.css">
        <link rel="stylesheet" type="text/css" href="_/css/styles.css">
        <link rel="stylesheet" type="text/css" href="_/css/yass.css">

        
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
              <nav class="subTopBar">
                  <ul class="subTopBarList">
                      <li class="subTopBarItem">
                          <h1>Products</h1>
                      </li>
                      <li>
                          <form class="TopBarForm">
                                <div class="form-group">
                                     <input type="search" class="form-control" name="Search" placeholder="Search By Product Name"/>
                                      <a href="#" type="submit" role="button"><span class="fa fa-search"></span></a>
                                </div>
                          </form>    
                      </li>
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
                                                        <tr>
                                                          <td>1</td>
                                                          <td>Cloudy</td>
                                                          <td><img src="_/images/3215.png" class="prodimg"></td>
                                                          <td>زيروكس</td>
                                                          <td class='check-col tableAdmin'><a href='#' class='editeBtn' id="EditProductOverlayFormShow" data-placement='right'><span class='fa fa-gear'></span></a></td>
                                                          <td class='check-col tableAdmin'><a href='#' class='deleteBtn'  data-target='#DeleteProductModal' data-toggle='modal' title='delete' data-placement='right'><span class='fa fa-trash'></span></a></td>
                                                        </tr> 
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

        <!-----------------------------------sideBarRight------>
        <nav class="sideBarRight"></nav>

        <!-----------------------------------------footer------>
        <footer></footer>

        <!-----------------------------------OverLayForms---- -->

        <!----AddNewOffer------------------- -->
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
          <form>
              <div class="container-fluid OverLayFormContent">
                   <div class="FormSection">
                       <div class="SectionHeader">
                            <h3>Product Information</h3>
                       </div>
                       <div class="SectionContent row">
							<div class="col-md-6">
								<div class="form-group formLayout">
									<label for="ProductTitle" class="control-label ">Product Title : </label>
									<input type="text" name="ProductTitle" class="form-control InputProduct" placeholder="Product Title" />
								</div>
								 <div class="form-group formLayout">
									<label for="ProductImage" class="control-label ">Product Image: </label>
									<input type="file" name="ProductImage" class="form-control InputProduct" />
								 </div>
								 <div class="form-group formLayout">
									<label for="ProductPdf" class="control-label ">Product Pdf: </label>
									<input type="file" name="ProductPdf" class="form-control InputProduct" />
								 </div>	
								<div class="form-group formLayout">
									<label for="ProductFamily" class="control-label ">Product Product Family: </label>
									<select name="ProductFamily" class="form-control InputProduct">
										  <option class=""> Choose Product Family</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
							 <div class="form-group formLayout">
									<label for="ProductDriverLink" class="control-label ">Product Driver Link: </label>
									<input type="text" name="ProductDriverLink" class="form-control InputProduct" />
								 </div>
								  <div class="form-group formLayout">
									<label for="name" class="control-label ">Description: </label>
									<textarea></textarea>
								 </div>
								<div class="checkbox-inline">
									<label>
									  <input type="checkbox" id="checkbox1"><label class="offer"> Offer</label>
									</label>
								</div>
								<div class="form-group formLayout Description">
									<label for="Description" class="control-label ">Description : </label>
									<textarea placeholder="Description"></textarea>
								</div>
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
										<label for="ProductSpecifications" class="control-label ">Product Specifications : </label>
										<input type="text" name="ProductSpecifications" class="form-control overlayproduct" placeholder="Product Specifications" />
									</div>
									 <button type="button"class="btn btn-md AddNewSpecificationsbtn" onclick="add_generalspecification();"> 
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
										<input type="text" name="PrintingSpecifications" class="form-control overlayproduct" placeholder="Printing Specifications" />
									</div>
									 <button type="button"class="btn btn-md AddNewSpecificationsbtn" onclick="add_printingspecifications();"> 
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
										<input type="text" name="ProductGuarantee" class="form-control overlayproduct" placeholder="Product Guarantee" />
									</div>
									 <button type="button"class="btn btn-md AddNewSpecificationsbtn" onclick="add_Guarantee();"> 
										<i class="fa fa-plus"></i></button>
								</div>
							</div>
						</div>
				  </div>   
              </div>
              <div class="container-fluid OverLayFormFooter">
                   <div class="row CustomRow">
                       <div class="OverLayFormFooterItem right">
                            <button type="button"class="btn btn-md OverLayFormBtn"> Creat</button>
                       </div>
                       <div class="OverLayFormFooterItem left">
                       
                       </div>
                   </div>
              </div>
          </form>
        </div>

        <!----EditProduct------------------- -->
        <div class="OverLayForm closed" id="EditProductOverlayForm">
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
          <form>
			<div class="container-fluid OverLayFormContent">
                   <div class="FormSection">
                       <div class="SectionHeader">
                            <h3>Product Information</h3>
                       </div>
                       <div class="SectionContent row">
							<div class="col-md-6">
								<div class="form-group formLayout">
									<label for="ProductTitle" class="control-label ">Product Title : </label>
									<input type="text" name="ProductTitle" class="form-control InputProduct" placeholder="Product Title" />
								</div>
								 <div class="form-group formLayout">
									<label for="ProductPdf" class="control-label ">Product Pdf: </label>
									<input type="file" name="ProductPdf" class="form-control InputProduct" />
								 </div> 
							
								<div class="form-group formLayout">
									<label for="ProductFamily" class="control-label ">Product Product Family: </label>
									<select name="ProductFamily" class="form-control InputProduct">
										  <option class=""> Choose Product Family</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								 <div class="form-group formLayout">
									<label for="ProductDriverLink" class="control-label ">Product Driver Link: </label>
									<input type="text" name="ProductDriverLink" class="form-control InputProduct" />
								 </div>
								 <div class="form-group formLayout">
									<label for="name" class="control-label ">Description: </label>
									<textarea></textarea>
								 </div>
								<div class="checkbox-inline">
									<label>
									  <input type="checkbox" id="checkbox2"><label class="offer"> Offer</label>
									</label>
								</div>
								<div class="form-group formLayout EditDescription">
									<label for="Description" class="control-label ">Description : </label>
									<textarea placeholder="Description"></textarea>
								</div>
							</div>
                      </div>
                   </div>
				   <div class="FormSection">
                       <div class="SectionHeader">
                            <h3>Product Images</h3>
                       </div>
                       <div class="SectionContent row">
							<div class="prodImages">
								<div class="mask">
									<i class="fa fa-close"></i>
								</div>
								<img src="_/images/3215.png" class="editimgproduct">
							
							</div>
                      </div>
                   </div>	
                   <div class="FormSection row">
						<div class="col-md-4 ">
							<div class="SectionHeader">
								<h3>General Specifications </h3>
							</div>
							<div class="SectionContent Specifications">
								<div id="RemoveSpecifications">
									<div class="form-group formLayout">
										<p><input type="text" name="PrintingSpecifications" id="p_scents" class="form-control overlayproduct" placeholder="Printing Specifications1" />
										<a href="#" id="remScnt" class="removespecification  CloseBtn" ><i class="fa fa-close"></i></a></p>
										<p><input type="text" name="PrintingSpecifications" id="p_scents" class="form-control overlayproduct" placeholder="Printing Specifications2" />
										<a href="#" id="remScnt" class="removespecification CloseBtn"><i class="fa fa-close"></i></a></p>	
										<p><input type="text" name="PrintingSpecifications" id="p_scents" class="form-control overlayproduct" placeholder="Printing Specifications3" />
										<a href="#" id="remScnt" class="removespecification CloseBtn" ><i class="fa fa-close"></i></a></p>	
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="SectionHeader">
								<h3>Printing Specifications </h3>
							</div>
							<div class="SectionContent Specifications">
								<div id="RemoveSpecifications">
									<div class="form-group formLayout">
										<p><input type="text" name="PrintingSpecifications" id="p_scents" class="form-control overlayproduct" placeholder="Printing Specifications1" />
										<a href="#" id="remScnt" class="removespecification  CloseBtn" ><i class="fa fa-close"></i></a></p>
										<p><input type="text" name="PrintingSpecifications" id="p_scents" class="form-control overlayproduct" placeholder="Printing Specifications2" />
										<a href="#" id="remScnt" class="removespecification CloseBtn"><i class="fa fa-close"></i></a></p>	
										<p><input type="text" name="PrintingSpecifications" id="p_scents" class="form-control overlayproduct" placeholder="Printing Specifications3" />
										<a href="#" id="remScnt" class="removespecification CloseBtn" ><i class="fa fa-close"></i></a></p>	
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 ">
							<div class="SectionHeader">
								<h3>Guarantee</h3>
							</div>
							<div class="SectionContent Specifications">
								<div id="RemoveSpecifications">
									<div class="form-group formLayout">
										<p><input type="text" name="PrintingSpecifications" id="p_scents" class="form-control overlayproduct" placeholder="Printing Specifications1" />
										<a href="#" id="remScnt" class="removespecification  CloseBtn" ><i class="fa fa-close"></i></a></p>
										<p><input type="text" name="PrintingSpecifications" id="p_scents" class="form-control overlayproduct" placeholder="Printing Specifications2" />
										<a href="#" id="remScnt" class="removespecification CloseBtn"><i class="fa fa-close"></i></a></p>	
										<p><input type="text" name="PrintingSpecifications" id="p_scents" class="form-control overlayproduct" placeholder="Printing Specifications3" />
										<a href="#" id="remScnt" class="removespecification CloseBtn" ><i class="fa fa-close"></i></a></p>	
									</div>
								</div>
							</div>
						</div>
				  </div> 
								  
              </div>
              <div class="container-fluid OverLayFormFooter">
                   <div class="row CustomRow">
                       <div class="OverLayFormFooterItem right">
                            <button type="button"class="btn btn-md OverLayFormBtn"> Creat</button>
                       </div>
                       <div class="OverLayFormFooterItem left">
                       
                       </div>
                   </div>
              </div>
          </form>
        </div>

        <!------------------------------------DeleteModals---- -->
        <!----DeleteProduct------------------------------>
        <div class="modal fade CustomModal" id="DeleteProductModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <form id="ForgotPassForm" method="post">
                  <div class="modal-body">
                        <h1>Delete Product</h1>
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
        <!----ProductTags------------------------------>
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
                       <input type="text" id='PostTag_post_id' class="form-control" placeholder="RecoredId"/>
                     </div>  
                      <div class="form-group">
                              <div id='PostTagsModalContent' class="checkbox ModalCheck">
                              </div>
                      </div>  
                  </div>
                  <div class="modal-footer">
                      <button class="btn customBtn" type="button" data-dismiss="modal">Close</button>
                  </div>
              </form>
            </div>
          </div>
        </div>
        <!----------------------------------------scripts------>
        <script src="_/js/jquery-1.12.1.min.js"></script>
        <script src="_/js/tinymce/tinymce.min.js"></script>
		<script src="_/js/bootstrap.min.js"></script>
        <script src="_/js/test.js"></script>
        <script src="_/js/ProjectScripts.js"></script>
        <script src="http://localhost:35729/livereload.js"></script>
		<script>
          $(document).on("click",".CloseBtn",function(){
			  $(this).closest("p").css("display", "none");
			  
		  });
		</script>
		<script>
		$(document).ready(function(){

		//Hide div w/id extra
		$(".Description").css("display","none");

		// Add onclick handler to checkbox w/id checkme
	   $("#checkbox1").click(function(){

		// If checked
		if ($("#checkbox1").is(":checked"))
		{
			//show the hidden div
			$(".Description").show(500);
		}
		else
		{
			//otherwise, hide it
			$(".Description").hide(500);
		}
	  });

	});
	 
		</script>
		<script>
			function add_Guarantee() {
			var newspan = document.createElement('div');
			newspan.innerHTML = '<div class="form-group formLayout"><input type="text" name="ProductGuarantee" class="form-control overlayproduct" placeholder="Product Guarantee" /></div>';
			document.getElementById('AddGuarantee').appendChild(newspan);
		}	
		function add_printingspecifications() {
			var newspan = document.createElement('div');
			newspan.innerHTML = '	<div class="form-group formLayout">	<input type="text" name="PrintingSpecifications" class="form-control overlayproduct" placeholder="Printing Specifications" /></div>';
			document.getElementById('AddPrintingSpecifications').appendChild(newspan);
		}	
		function add_generalspecification(){
			var newspan = document.createElement('div');
			newspan.innerHTML = '	<div class="form-group formLayout"><input type="text" name="ProductSpecifications" class="form-control overlayproduct" placeholder="Product Specifications" /></div>';
			document.getElementById('AddNewSpecifications').appendChild(newspan);
		}
		</script>

    </body>
</html>
