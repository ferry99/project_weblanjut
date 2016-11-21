<head>    
    <title>GAME OVER</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/mycss.css">
    <script type="text/javascript" src="<?php echo base_url();?>/js/jquery-1.11.2.js" ></script>
	<script type="text/javascript" src="<?php echo base_url();?>/js/myjs.js" ></script>
</head>


<div class = "container" >
<?php echo $sessionName ?>	
	<div id="profile_admin">
		<?php echo validation_errors() ?>		
			</br></br>
			<form method="POST" action='<?php echo base_url();?>admin/doUpdate'>          
              <input type="hidden" value="" name="pagetoload">
	          <table class="form_table" width="" >
	                 <tr><td class="borderless">Old Pasword</td>
	                     <td class="borderless"><input type="text" name="old_pass" size="20"></td>
	                 </tr>
	                 <tr><td class="borderless">New Password</td>
	                     <td class="borderless"><input type="password" name="new_pass" size="20"></td>
	                 </tr>
	                 <tr><td class="borderless">Re-type New Password</td>
	                     <td class="borderless"><input type="password" name="repass" size="20"></td>
	                 </tr>
	          </table>
	          <br />
	          <div style="margin-left:155px;"><input type="submit" value="Save" name="sub"></div>
	          <br />
  	    </form>

		
	</div>
</div>

