<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Protech CMS : Login</title> 
		 <?php require_once("Links.php"); ?>
	<style>

	</style>
        
    </head>
    <body >
	<div class="bodylogin">
        <!-- ---------------------------------sideBarLeft------ -->

    <div class="container section--purple wow flipInX" data-wow-delay="1s">
		<div class="logologin row">
			<div class="col-md-2 border1"></div>
			<div class="col-md-8"><h3>بـــروتــك</h3><span>لخدمات  زيروكس المتكاملة</span><img src="_/images/logo.jpg"></div>
		    <div class="col-md-2 border2"></div>

		</div>
		<div class="login">
			<div class="form-group formLayout">
				<label for="Email" class="control-label loginform">Email: </label>
				<input type="text" name="Email" class="form-control" placeholder="Email">
			</div>
			<div class="form-group formLayout">
				<label for="Password" class="control-label loginform">Password : </label>
				<input type="text" name="Password" class="form-control" placeholder="Password">
			</div>
			<div class="form-group formLayout">
				<button type="submit" class="loginsubmit">Submit</button>
			</div>
		 </div>
    </div>
	


        <!------------------------------------DeleteModals---- -->

        <!----------------------------------------scripts------>
	<?php require_once("Scripts.php"); ?>

</div>
  <script>
        $.backstretch([
          "_/images/bg.jpg",
          "_/images/sunset.jpg"
         // "_/images/img3.jpg"
        ], {
            fade: 750,
            duration: 3000
        });
    </script>
    </body>
</html>
