<head>    
    <title>GAME OVER</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/mycss.css">
    <script type="text/javascript" src="<?php echo base_url();?>/js/jquery-1.11.2.js" ></script>
	<script type="text/javascript" src="<?php echo base_url();?>/js/myjs.js" ></script>
</head>

<?php 
	if($this->uri->segment(3) == 'PS3'){
        $caption = 'PlayStation 3';
	 }elseif($this->uri->segment(3) == 'PS4') {
        $caption = 'PlayStation 4';
	}else $caption = 'PC';
?>
    
<div class = "container" >
	<div id = "p_header"><h3 id="caption"><?php echo $caption ?></h3></div>
 		<div id = "panel2"> 			
 			<table class = "table">
 				<?php 
	 				 foreach ($query as $row) { 				 
		 				echo "<tr>";
		 				echo '<td colspan=\'3\'><img src="'.base_url()."uploads/".$row['Picture'].'" width="160" height="130"></td>';
						echo "<td colspan='3' id=\"text\"><h2><a href=site/games/".urlencode($row['Game_name']).'>'.$row['Game_name'].'</a></h2><p>'.$row['Description'].'</p><i><a href='.base_url().'site/games/'.urlencode($row['Game_name']).'><pre>					read more >> </i></pre></a></td>';
						echo "</tr>";	
						echo "<tr>
						<td  colspan='3' ><img src=\"/mywebsite/img/2.png\" height=\"1\" width = \"150\"></td>
							<td  colspan='3' > <img src=\"/mywebsite/img/2.png\" height=\"1\" width = \"375\"></td></tr>";
			
					}
				?>
 				
 			</table>
 		</div> 		

 	<div id="p_closer"></div>
</div>