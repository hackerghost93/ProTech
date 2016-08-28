<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>AGED CMS : Product Tags</title> 
		<?php $this->load->view('CMS/Links');  ?>

        
    </head>
    <?php  if($this->session->userdata('loggedIn') != true){redirect('Login');}   ?>
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
                    <div class="SideBarContent" id="SidBarContentDiv">
                          <div class="DataDiv">
                               <div class="PageHaeder">
                                  <h2>All Tags</h2>
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
                                             <button class="btn btn-sucess" id="AddNewTagShow"> Add New Tag</button>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                       <div class="table-responsive" id="UserTable">
                                            <table class='table table-hover table-condensed'>
                                                   <thead>
                                                        <tr>
                                                          <th>Tag Name</th>
                                                  
                                                          <th>Delete</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    if(isset($results))
                                                    {
                                                      foreach ($results as $object) {
  $x="/".$object->tag_name."/";
  echo "<tr><td>$object->tag_name</td><td class='check-col tableAdmin'><a href='#' onclick='SetTagName($x)' class='deleteBtn'  data-target='#DeleteTagsModal' data-toggle='modal' title='delete' data-placement='right'><span class='fa fa-trash'></span></a></td></tr> ";
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
        <div class="OverLayForm closed" id="AddNewTagOverlayForm">
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
          <form method="post" action="<?=base_url()?>index.php/Tags/AddProductTag" id="AddTagForm">
              <div class="container-fluid OverLayFormContent">
                   <div class="FormSection">
                       <div class="SectionHeader">
                            <h3>Tag Details</h3>
                       </div>
                       <div class="SectionContent">
                          <div class="form-group formLayout">
	        	                <label for="ProductTag" class="control-label ">Tag name</label>
		                        <input type="text" name="ProductTag" class="form-control" placeholder="Product Tag" />
	                        </div>
                        </div>
                   </div>
              
              </div>
              <div class="container-fluid OverLayFormFooter">
                   <div class="row CustomRow">
                       <div class="OverLayFormFooterItem right">
                            <button type="submit"class="btn btn-md"> Create</button>
                       </div>
                       <div class="OverLayFormFooterItem left">
                       
                       </div>
                   </div>
              </div>
          </form>
        </div>

        <!------------------------------------DeleteModals---- -->
        <!----DeleteOffer------------------------------>
        <div class="modal fade CustomModal" id="DeleteTagsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <form id="ForgotPassForm" method="post" action="<?=base_url()?>index.php/Tags/DeleteTagProduct">
                  <div class="modal-body">
                        <h1>Delete Product Tags</h1>
                        <p>Are you sure that you need to delete this Data ?</p>
                        <div class="form-group formLayout">
		        			 <input type="text" name="RecoredId" id="RecoredId" class="form-control" readonly />
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
				<script>
    $(document).ready(function () {
	   var validator = $("#AddTagForm").validate({
		errorPlacement: function (error, element)
		{
			// Append error within linked label
			$( element ).closest( "div" ).find( "label[for='" + element.attr( "name" ) + "']" ).append( error );},
		errorElement: "span",
		rules :
		{
	
			ChooseProduct: "required",
			ProductTag: "required"

		
	
		},
		messages: 
		{
		
			ChooseProduct:"Please Choose Product",
			ProductTag:"This field is required"
			
			
		}
	});	 

    });
</script>
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
          $.get('Tags/ProductGetter',{nothing:nothing},function(data)
          {
           $.each($(data.printers), function(key, value) {
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
        <!-- <script src="_/js/bootstrap.min.js"></script>
        <script src="_/js/test.js"></script>
        <script src="_/js/ProjectScripts.js"></script>
        <script src="http://localhost:35729/livereload.js"></script> -->
    </body>
</html>
