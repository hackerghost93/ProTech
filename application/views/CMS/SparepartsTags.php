<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>AGED CMS : SpareParts Tags</title> 
		<?php $this->load->view('CMS/Links');  ?>

        
    </head>
    <body onload="GetAllProducts()">
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
                         <?php require_once("TagsSideBar.php"); ?>
                    </nav>
                    <div class="SideBarContent" id="SidBarContentDiv">
                          <div class="DataDiv">
                               <div class="PageHaeder">
                                  <h2>SpareParts Tags</h2>
                               </div>
                               <div class="box-wider-text">
                                    <div class="box-header">
                                        <div class="row CustomRow">
                                        <div class="HeaderLeft"> 
                                             <form class="SubHeader">
                                                    <div class="form-group">
                                                         <input type="search" class="form-control" name="Search" placeholder="Search By Tag"/>
                                                         <a href="#" type="submit" role="button"><span class="fa fa-search"></span></a>
                                                    </div>
                                             </form>    
                                        </div>
                                        <div class="HeaderRight"> 
                                             <button class="btn btn-sucess" id="AddNewSpareTagShow"> Add New Tag</button>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                       <div class="table-responsive" id="UserTable">
                                            <table class='table table-hover table-condensed'>
                                                   <thead>
                                                        <tr>
                                                          <th>Tag Name</th>
                                                          <th>SparePart Name</th>
                                                          <th>Delete</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    if(isset($results))
                                                    {
                                                      foreach ($results as $object) {
          $x="/".$object->tag_name."/";
  echo "<tr><td>$object->tag_name</td><td>$object->name</td><td class='check-col tableAdmin'><a href='#' class='deleteBtn' onclick='SetTagName($x)' data-target='#DeleteSpareTagsModal' data-toggle='modal' title='delete' data-placement='right'><span class='fa fa-trash'></span></a></td></tr> ";
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
        <div class="OverLayForm closed" id="AddNewSpareTagOverlayForm">
          <div class="container-fluid OverLayFormHeader">
               <div class="row CustomRow">
                   <div class="OverLayFormHeaderLeft">
                        <h2> Add New Tags </h2>
                   </div>
                   <div class="OverLayFormHeaderRight">
                        <span class="fa fa-close ExitBtn"></span>
                   </div>
               </div>
          </div>
          <form method="post" action="<?=base_url()?>index.php/Tags/AddPartTag">
              <div class="container-fluid OverLayFormContent">
                   <div class="FormSection">
                       <div class="SectionHeader">
                            <h3>Tag Details</h3>
                       </div>
                       <div class="SectionContent">
					   	<div class="form-group formLayout">
									<label for="ChooseSparePart" class="control-label ">SparePart : </label>
									<select name="ChooseSparePart" id="SelectorP" class="form-control InputProduct">
										  <option class=""> Choose SparePart</option>
									</select>
								</div>
                          <div class="form-group formLayout">
	        	                <label for="SparePartsTag" class="control-label ">SpareParts Tag : </label>
		                        <input type="text" name="SparePartsTag" class="form-control" placeholder="SpareParts Tag" />
	                        </div>
                  
                        </div>
                   </div>
              
              </div>
              <div class="container-fluid OverLayFormFooter">
                   <div class="row CustomRow">
                       <div class="OverLayFormFooterItem right">
                            <button type="submit"class="btn btn-md OverLayFormBtn"> Create</button>
                       </div>
                       <div class="OverLayFormFooterItem left">
                       
                       </div>
                   </div>
              </div>
          </form>
        </div>

        <!------------------------------------DeleteModals---- -->
        <!----DeleteOffer------------------------------>
        <div class="modal fade CustomModal" id="DeleteSpareTagsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <form id="ForgotPassForm" method="post" action="<?=base_url()?>index.php/Tags/DeleteTagParts">
                  <div class="modal-body">
                        <h1>Delete SpareParts Tag</h1>
                        <p>Are you sure that you need to delete this Data ?</p>
                        <div class="form-group formLayout">
		  <input type="text" name="RecoredId" id="RecoredId" class="form-control" placeholder="RecoredId" readonly>
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
       <?php $this->load->view('CMS/Scripts');  ?>
        <script type="text/javascript">
                tinymce.init({
                  selector: 'textarea',
                  height: 500,
                  plugins: [
                    'advlist autolink lists link image charmap print preview anchor',
                    'searchreplace visualblocks code fullscreen',
                    'insertdatetime media table contextmenu paste code'
                  ],
                  toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image'
                });
        </script>
            <script type="text/javascript">
        function GetAllProducts()
        {
          nothing="nothing";
          $.get('PartGetter',{nothing:nothing},function(data)
          {
           $.each($(data.parts), function(key, value) {
            console.log(value.name);
            $('#SelectorP').append($("<option></option>")
                   .attr("value",value.name)
                   .text(value.name));
  });
    },'json');
        }
         function SetTagName(name)
         {
          var ID=name;
          var find = '/';
          var re = new RegExp(find, 'g');
          ID = String(ID);
          ID = ID.replace(re,"");
          console.log(ID);
          document.getElementById("RecoredId").value=ID;
         }
        </script>
    </body>
</html>
