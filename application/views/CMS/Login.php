<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Protech CMS : Login</title> 
		 <?php $this->load->view('CMS/Links');  ?>
	<style>

	</style>
        
    </head>
    <body >
	<div class="bodylogin">
        <!-- ---------------------------------sideBarLeft------ -->

    <div class="container section--purple wow flipInX" data-wow-delay="1s">
		<div class="logologin row">
			<div class="col-md-2 border1"></div>
			<div class="col-md-8"><h3>بـــروتــك</h3><span>لخدمات  زيروكس المتكاملة</span><img src="<?php echo base_url(); ?>imgs/logo.jpg"></div>
		    <div class="col-md-2 border2"></div>

		</div>
		<form method="post" action="<?=base_url()?>index.php/Login/log">
		<div class="login">
			<div class="form-group formLayout">
				<label for="Email" class="control-label loginform">User Name: </label>
				<input type="text" name="user_name" class="form-control" placeholder="user name" style="color:#fff;">
			</div>
			<div class="form-group formLayout">
				<label for="Password" class="control-label loginform">Password : </label>
				<input type="password" name="Password" class="form-control" placeholder="Password" style="color:#fff;">
			</div>
			<div class="form-group formLayout">
				<button type="submit" class="loginsubmit">Submit</button>
			</div>
		 </div>
		 </form>
		 <?php if(isset($state)){ echo "<h3 style='color: #f2cd0d; font-size: 12px;'> $state </h3>"; } ?>
    </div>
	


        <!------------------------------------DeleteModals---- -->

        <!----------------------------------------scripts------>
	 <?php $this->load->view('CMS/Scripts');  ?>

</div>
  <script>
        $.backstretch([
          "<?php echo base_url(); ?>imgs/bg2.jpg",
          "<?php echo base_url(); ?>imgs/sunset.jpg"
         // "_/images/img3.jpg"
        ], {
            fade: 750,
            duration: 3000
        });
    </script>
    </body>
</html>
