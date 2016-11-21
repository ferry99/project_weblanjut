<html>
	<head>
	    
	    <title>GAME OVER</title>

	   	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/mycss.css">
	 	<script type="text/javascript" src="<?php echo base_url();?>/js/jquery-1.11.2.js" ></script>
		<script type="text/javascript" src="<?php echo base_url();?>/js/myjs.js" ></script>
		<script type="text/javascript" src="<?php echo base_url();?>js/jquery.cycle2.min.js"></script>    

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


	 	<?php 
		       include("loadmain.php"); 
		?>	

	 	<?php 
		       include("footer.php"); 
		?>		

	 	

	</body>



</html>