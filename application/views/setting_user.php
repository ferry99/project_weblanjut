<head>
    
    <title>GAME OVER</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/mycss.css">
 	<script type="text/javascript" src="<?php echo base_url();?>/js/jquery-1.11.2.js" ></script>
	<script type="text/javascript" src="<?php echo base_url();?>/js/myjs.js" ></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.cycle2.min.js"></script>    
    
</head>
<?php 
?>

<div class = "container" >
	<div id = "p_header"></div>
 		<div id = "panel2"> 
 			
 			<div id = "t_user">			
 			<?php 
        	$this->table->set_heading(
         		'<p id = "p_user">Username' ,
         		'<p id = "p_user">Password' ,
         		'<p id = "p_user">Action'  );
        	foreach ($users as $row) {
            $this->table->add_row(
            '<p id = "p_user">'.$row->Username,
            '<p id = "p_user">'.$row->Password,           
            anchor('admin/deleting/'.$row->Username,'Delete',array('onclick'=>"return confirm('Do u want to delete it?')"))
	            );
        	};
        	echo $this->table->generate();
        	?>
 			</div>			

 		</div> 		

 	<div id="p_closer"></div>
</div>