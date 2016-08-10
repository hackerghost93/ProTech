<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Protech CMS : SpareParts</title> 
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
              <nav class="subTopBar">
                  <ul class="subTopBarList">
                      <li class="subTopBarItem">
                          <h1>SpareParts</h1>
                      </li>
                      <li>
                          <form class="TopBarForm">
                                <div class="form-group">
                                     <input type="search" class="form-control" name="Search" placeholder="Search By SpareParts Name"/>
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
                                             <button class="btn btn-sucess" id="AddNewSparePartsShow"> Add New SparePart</button>
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
                                              
                                                          <th>Edit</th>
                                                          <th>Delete</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                          <td>1</td>
                                                          <td>Cloudy</td>
                                                          <td><img src="_/images/3215.png" class="prodimg"></td>
                                       
                                                          <td class='check-col tableAdmin'><a href='#' class='editeBtn' id="EditNewSparePartsShow" data-placement='right'><span class='fa fa-gear'></span></a></td>
                                                          <td class='check-col tableAdmin'><a href='#' class='deleteBtn'  data-target='#DeleteSparePartModal' data-toggle='modal' title='delete' data-placement='right'><span class='fa fa-trash'></span></a></td>
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
        <div class="OverLayForm closed" id="AddNewSparePartsOverlayForm">
          <div class="container-fluid OverLayFormHeader">
               <div class="row CustomRow">
                   <div class="OverLayFormHeaderLeft">
                        <h2> Add New SpareParts </h2>
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
                            <h3>SpareParts Information</h3>
                       </div>
                       <div class="SectionContent row">
							<div class="col-md-6">
								<div class="form-group formLayout">
									<label for="ProductTitle" class="control-label ">SpareParts Title : </label>
									<input type="text" name="ProductTitle" class="form-control InputProduct" placeholder="SpareParts Title" />
								</div>
								 <div class="form-group formLayout">
									<label for="ProductImage" class="control-label ">SpareParts Image: </label>
									<input type="file" name="ProductImage" class="form-control InputProduct" />
								 </div>
								 <div class="form-group formLayout">
									<label for="ProductPdf" class="control-label ">SpareParts Pdf: </label>
									<input type="file" name="ProductPdf" class="form-control InputProduct" />
								 </div>
								 	  <div class="form-group formLayout">
									<label for="name" class="control-label ">Description: </label>
									<textarea></textarea>
								 </div>
							</div>
							<div class="col-md-6">
								 <div class="form-group formLayout">
									<label for="SparePartsDriverLink" class="control-label ">SpareParts Driver Link: </label>
									<input type="text" name="SparePartsDriverLink" class="form-control InputProduct" />
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
										<label for="ProductSpecifications" class="control-label ">SpareParts Specifications : </label>
										<input type="text" name="ProductSpecifications" class="form-control overlayproduct" placeholder="SpareParts Specifications" />
									</div>
									 <button type="button"class="btn btn-md AddNewSpecificationsbtn" onclick="add_generalspecification1();"> 
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
									 <button type="button"class="btn btn-md AddNewSpecificationsbtn" onclick="add_printingspecifications1();"> 
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
										<label for="ProductGuarantee" class="control-label ">SpareParts Guarantee : </label>
										<input type="text" name="ProductGuarantee" class="form-control overlayproduct" placeholder="SpareParts Guarantee" />
									</div>
									 <button type="button"class="btn btn-md AddNewSpecificationsbtn" onclick="add_Guarantee1();"> 
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
        <div class="OverLayForm closed" id="EditSparePartsOverlayForm">
          <div class="container-fluid OverLayFormHeader">
               <div class="row CustomRow">
                   <div class="OverLayFormHeaderLeft">
                        <h2> Edit SpareParts </h2>
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
                            <h3>SpareParts Information</h3>
                       </div>
                       <div class="SectionContent row">
							<div class="col-md-6">
								<div class="form-group formLayout">
									<label for="ProductTitle" class="control-label ">SpareParts Title : </label>
									<input type="text" name="ProductTitle" class="form-control InputProduct" placeholder="SpareParts Title" />
								</div>
								 <div class="form-group formLayout">
									<label for="ProductPdf" class="control-label ">SpareParts Pdf: </label>
									<input type="file" name="ProductPdf" class="form-control InputProduct" />
								 </div>
									  <div class="form-group formLayout">
									<label for="name" class="control-label ">Description: </label>
									<textarea></textarea>
								 </div>
							</div>
							<div class="col-md-6">
								 <div class="form-group formLayout">
									<label for="SparePartsDriverLink" class="control-label ">SpareParts Driver Link: </label>
									<input type="text" name="SparePartsDriverLink" class="form-control InputProduct" />
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
                            <h3>SpareParts Images</h3>
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
        <div class="modal fade CustomModal" id="DeleteSparePartModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <form id="ForgotPassForm" method="post">
                  <div class="modal-body">
                        <h1>Delete SpareParts</h1>
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

        <!----------------------------------------scripts------>
	<?php require_once("Scripts.php"); ?>
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
			function add_Guarantee1() {
			var newspan = document.createElement('div');
			newspan.innerHTML = '	<div class="form-group formLayout"><input type="text" name="ProductGuarantee" class="form-control overlayproduct" placeholder="SpareParts Guarantee" /></div>';
			document.getElementById('AddGuarantee').appendChild(newspan);
		}	
		function add_printingspecifications1() {
			var newspan = document.createElement('div');
			newspan.innerHTML = '	<div class="form-group formLayout">	<input type="text" name="PrintingSpecifications" class="form-control overlayproduct" placeholder="Printing Specifications" /></div>';
			document.getElementById('AddPrintingSpecifications').appendChild(newspan);
		}	
		function add_generalspecification1() {
			var newspan = document.createElement('div');
			newspan.innerHTML = '	<div class="form-group formLayout"><input type="text" name="ProductSpecifications" class="form-control overlayproduct" placeholder="SpareParts Specifications" /></div>';
			document.getElementById('AddNewSpecifications').appendChild(newspan);
		}
		</script>

    </body>
</html>
