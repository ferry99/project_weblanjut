	<head>
    
    <title>GAME OVER</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/mycss.css">
    <script type="text/javascript" src="<?php echo base_url();?>/js/jquery-1.11.2.js" ></script>
	<script type="text/javascript" src="<?php echo base_url();?>/js/myjs.js" ></script>
		   

</head>



<body onload = "swingBar() , changeArrow()" bgcolor="#000000">
	<div id = "headerbg" >
		<?php 
	           
		 ?>
	</div>
 	<div id = "header">
		<?php 
	           include("menu.php"); 
		 ?>		
	</div>	

	
	
	<div id = "left">			
	</div>

 	<div id = "right">
 	</br>
 	</br>
 	</div>

<div class = "container2" >
 <table width="60%" class="datatable">
 	<?php 
 		echo validation_errors();
 		echo $message;
 	 ?>
    <tr><td>
        <form method="POST" action='<?php echo base_url();?>login/validasi'>          
	          <h2>Login Page</h2>
	          <div class="inset">
			  <p>
			    <label for="username">Username</label>
			    <input type="text" name="name" id="name">
			  </p>
			  <p>
			    <label for="password">Password</label>
			    <input type="password" name="pass" id="password">
			  </p>
			  </div>
			  <p class="p-container">
			    
			    <input type="submit" value="Login">

	         <!--  <table class="borderless" width="100%">
	                 <tr><td class="borderless">username</td>
	                     <td class="borderless"><input type="text" name="name" size="20"></td>
	                 </tr>
	                 <tr><td class="borderless">password</td>
	                     <td class="borderless"><input type="password" name="pass" size="20"></td>
	                 </tr>
	          </table>
	          <br />
	          <div style="text-align:center;"><input type="submit" value="Login" name="sub"></div> -->
	          <br />
  	    </form>
  	    </td>
  	</tr>
  </table>
</div>
 


</body>