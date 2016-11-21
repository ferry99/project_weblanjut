<head>
    
    <title>GAME OVER</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/mycss.css">
 	<script type="text/javascript" src="<?php echo base_url();?>/js/jquery-1.11.2.js" ></script>
	<script type="text/javascript" src="<?php echo base_url();?>/js/myjs.js" ></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.cycle2.min.js"></script>    
    
</head>
<?php 
?>

<div class = "container2" >
	<div id = "p_header"></div>
 		<div id = "panel2"> 	
 		 			<table width="80%" >
		
	 	 			</br></br></br>
                  <form enctype="multipart/form-data" method="POST" action='<?php echo base_url();?>admin/addGames' >
                  <?php 
                  		echo validation_errors(); 
                  		echo $message;
                  		echo $success;
                  		echo $error;
                  	?>
	              <tr><td><h3 id="text">Add Games</td>	              
     	          </tr>
	              <tr><td><p id="text">Game Name</td>
	                  <td><input type="text" name="name" size="10" maxlength="10" value=""></td>
        	      </tr>
        	      <tr><td><p id="text">Console</td>
	                  <td><SELECT NAME="console">
	                  		<?php foreach ($console as $row) {
								echo "<option value='".$row['Id_console']."'>".$row['Console_name']."</option>";
 							}	                
	                  		?>
                      </SELECT></td>
	              </tr>
	              <tr><td><p id="text">Category</td>
	                  <td><SELECT NAME="category"><?php foreach ($category as $row) {
								echo "<option value='".$row['Id_category']."'>".$row['Category_name']."</option>";
 							}	                
	                  		?>
                         </SELECT></td>
	              </tr>
	              <tr><td><p id="text">Tag</td>
	                  <td><SELECT NAME="tag"><?php foreach ($tag as $row) {
								echo "<option value='".$row['tag_id']."'>".$row['tag_name']."</option>";
 							}	                
	                  		?>
                         </SELECT></td>
	              </tr>
	              <tr><td><p id="text">Description</td>
	              		 <td> <textarea name="desc" rows=8 cols=70 value=""></textarea>
	                  </td>
        	      </tr>
        	      <tr><td><p id="text">Status</td>
	              		 <td> <input type="text" name="status" size="10" maxlength="10"></textarea>
	                  </td>
        	      </tr>
        	      <tr>
        	      	<td><p id="text">Image</td><td>         
				       <input name="picture" type="file"><br />
				       <br />
				       <div style="text-align:center;"><input type="submit" name="tombol" value="Save"></div>
	   			</td></tr>
	        </form>      
	        </table>	
    
	

 		</div> 		

 	<div id="p_closer"></div>
</div>