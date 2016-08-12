<form class="TopBarForm InboxSearch">
		<div class="form-group searchone">
			 <input type="search" onkeyup="showHint(this.value)" class="form-control searchinbox" name="Search" placeholder="Search"/>
			  <a href="#" type="submit" role="button"><span class="fa fa-search"></span></a>
		</div>
	</form> 
	<div><span id="txtHint"></span></div>
	<br><br>
	     <?php if(isset($mails))
	     foreach ($mails as $row):;?>
			<ul class="subSideBarMenu">
                     
				<li>
				
					<div class="Inboxes">
	
					   <div class="checkbox">
							<label>
								<input type="checkbox"> <?php echo $row['name']; ?>
							</label>
						</div>
						<?php echo"<a href='#' class='deleteBtn'  data-target='#DeleteInboxMessageModal' data-toggle='modal' title='delete' data-placement='right' data-id='".$row['id']."'><span class='fa fa-trash'></span></a>" ?>
						<p><?php echo $row['subject'] ;?></p>
						<h4 class="TimeInbox"> <?php echo $row['created_at'];?></h4>
						<?php echo'<a href="'. base_url().'index.php/Email/show/'.$row['id'].'">show </a>'?>
					</div>
				</li> 
					
			 </ul>
			<?php endforeach; ?>
