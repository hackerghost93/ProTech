<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Protech CMS : Products</title> 
<?php require_once("Links.php"); ?>


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
<nav class="subTopBar">
  <ul class="subTopBarList">
      <li class="subTopBarItem">
          <h1>Contact Us</h1>
      </li>
      <li>
       
      </li>
   </ul>
</nav>
<div class="DataDiv Wide">
<div class="DataDiv">
<div class="box-wider-text">

<div class="box-body">
	<div class="FormSection">
<form method="post" action="<?=base_url()?>index.php/Contacts/Edit" id="AddContactsform">
		
			<div class="SectionContent">
<div class="form-group formLayout" hidden>
<label for="ID" class="control-label ">ID : </label>
<input type="number" id="ID" name="ID" class="Contact form-control" />
</div>
<div class="form-group formLayout">
<label for="ContactTelephone" class="control-label ">Telephone : </label>
<input type="text" id="Telephone" name="ContactTelephone" class="Contact form-control" placeholder="Telephone" />
</div>	
<div class="form-group formLayout">
<label for="ContactMobile" class="control-label ">Mobile: </label>
<input type="text" id="Mobile" name="ContactMobile" class="form-control Contact" placeholder="Mobile" />
</div>
<div class="form-group formLayout">
<label for="Email" class="control-label ">Email: </label>
<input type="email" id="Email" name="Email" class="form-control Contact" placeholder="Email" />
</div>
<div class="form-group formLayout">
<label for="Email_Password" class="control-label ">Email Password: </label>
<input type="password" id="Email_Password" name="Email_Password" class="form-control Contact" placeholder="" />
</div>
<div class="form-group formLayout">
<label for="ContactWhatsApp" class="control-label ">WhatsApp: </label>
<input type="text" id="WhatsApp" name="ContactWhatsApp" class="form-control Contact" placeholder="WhatsApp" />
</div>	
<div class="form-group formLayout">
<label for="ContactSkypee" class="control-label ">Skypee: </label>
<input type="text" id="Skypee" name="ContactSkypee" class="form-control Contact" placeholder="Skypee" />
</div>		
<div class="form-group formLayout">
<label for="ContactYoutube" class="control-label ">Youtube: </label>
<input type="url" id="Youtube" name="ContactYoutube" class="form-control Contact" placeholder="Youtube" />
</div>	
<div class="form-group formLayout">
<label for="ContactTwitter" class="control-label ">Twitter: </label>
<input type="text" id="Twitter" name="ContactTwitter" class="form-control Contact" placeholder="Twitter" />
</div>
<div class="form-group formLayout">
<label for="ContactFacebook" class="control-label ">Facebook: </label>
<input type="url" id="Facebook" name="ContactFacebook" class="form-control Contact" placeholder="Facebook" />
</div>
<div class="form-group formLayout">
<label for="ContactLinkedin" class="control-label ">Linkedin: </label>
<input type="text" id="Linkedin" name="ContactLinkedin" class="form-control Contact" placeholder="Linkedin" />
</div>	
<div class="form-group formLayout">
<label for="ContactAddress" class="control-label ">Address: </label>
<input type="text" id="Address" name="ContactAddress" class="form-control Contact" placeholder="Address" />
</div>
<div class="form-group formLayout">
<button type="submit" type="submit" class="btn btn-md OverLayFormBtn submitReply"> Update</button>
</div>
</form>
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



<!------------------------------------DeleteModals---- -->
<!----DeleteContact------------------------------>
<div class="modal fade CustomModal" id="DeleteContactModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>
<form id="ForgotPassForm" method="post">
  <div class="modal-body">
        <h1>Delete Contact</h1>
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
<?php $this->load->view('CMS/Scripts');  ?>
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
<script type="text/javascript">
$(document).ready(function(){
var nothing = "nothing";
$.post('Contacts/Get_Contact_Data',{nothing:nothing},function(data)
{
//`adress``telephone``mobile``whatsapp``skybe``youtube``email``Email_Password``facebook``twitter``linkedin`
$('#ID').val(data.id);
$('#Telephone').val(data.telephone);
$('#Mobile').val(data.mobile);
$('#Email').val(data.email);
$('#Email_Password').val(data.Email_Password);
$('#WhatsApp').val(data.whatsapp);
$('#Skypee').val(data.skybe);
$('#Youtube').val(data.youtube);
$('#Twitter').val(data.twitter);
$('#Facebook').val(data.facebook);
$('#Linkedin').val(data.linkedin);
$('#Address').val(data.adress);
},'json');
});
</script>
<script>
    $(document).ready(function () {
	   var validator = $("#AddContactsform").validate({
		errorPlacement: function (error, element)
		{
			// Append error within linked label
			$( element ).closest( "div" ).find( "label[for='" + element.attr( "name" ) + "']" ).append( error );},
		errorElement: "span",
		rules :
		{
			ContactTelephone:{ required: true, number: true},
			ContactWhatsApp:{ required: true, number: true},
			ContactMobile:{ required: true, number: true},
			Email: { required :true,email: true},
			Email_Password: "required",
			ContactSkypee: "required",
			ContactYoutube: {required:true, url:true},
			ContactTwitter: {required:true, url:true},
			ContactFacebook: {required:true, url:true},
			ContactLinkedin: {required:true, url:true},
			ContactAddress: "required"
	
		},
		messages: 
		{
			ContactTelephone:{
				required:"This field is required",
				number:"Please enter number"
			},	
			ContactWhatsApp:{
				required:"This field is required",
				number:"Please enter number"
			},	
			ContactMobile:{
				required:"This field is required",
				number:"Please enter number"
			},
			Email: { required :"This field is required",email: "Please enter valid email"},
			Email_Password:"Please Enter Data",
			ContactSkypee:"This field is required",
			ContactYoutube:{required:"this field is required", url:"Please enter a url"},
			ContactTwitter:{required:"this field is required", url:"Please enter a url"},
			ContactFacebook:{required:"this field is required", url:"Please enter a url"},
			ContactLinkedin:{required:"this field is required", url:"Please enter a url"},
			ContactAddress:"This field is required"

		}
	});
    });
</script>
</body>
</html>
