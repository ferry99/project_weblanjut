
<h1>MAINNN</h1>

<head>
    
    <title>GAME OVER</title>

	       <script type="text/javascript" src="<?php echo base_url();?>/js/jquery-1.11.2.js" ></script>
		   <script type="text/javascript" src="<?php echo base_url();?>/js/myjs.js" ></script>
</head>
<div class = "container" >
 		<div id = "slide_show" class = "cycle-slideshow"
 			data-cycle-next = "#next"
 			data-cycle-prev = "#prev"	
 		>
 			<img src="/mywebsite/img/project cars slider.jpg" width="900" height="300">
 			<img src="/mywebsite/img/assasin creed slider.jpg" width="900" height="300">
 			<img src="/mywebsite/img/the witcher 3 slider.jpg" width="900" height="300">
 			<img src="/mywebsite/img/gta 5 slider.jpg" width="900" height="300">
 			<img src="/mywebsite/img/persona 5 slider.jpg" width="900" height="300">
 			<div id = "prev"><img id="prev" src="/mywebsite/img/prev3.png" height="50" width="25" align="center"></div>
 			<div id= "next"><img id="prev" src="/mywebsite/img/next3.png" height="50" width="25" align="center"></div>
 		</div>

 		<div id = "panel"> 		
 			<div id = "p0_header"><h3 id="caption"><a href="site/tag/top_games">TOP GAMES</a></h3></div>
 			<div id = "p0_content">
 				<table class = "table"> 				 			 		
	 				<?php 
		 				 foreach ($query3 as $row) { 				 
			 				echo "<tr>";
			 				echo '<td colspan=\'3\'><img src="'.base_url()."uploads/".$row['Picture'].'" width="160" height="130"></td>';
							echo "<td colspan='3' id=\"text\"><h2><a href=site/games/".urlencode($row['Game_name']).'>'.$row['Game_name'].'</a></h2><p>'.$row['Description'].'</p><i><a href=site/games/'.urlencode($row['Game_name']).'><pre>		read more >> </i></pre></a></td>';
							echo "</tr>";	
							echo "<tr>
							<td  colspan='3' ><img src=\"/mywebsite/img/2.png\" height=\"1\" width = \"130\"></td>
								<td  colspan='3' > <img src=\"/mywebsite/img/2.png\" height=\"1\" width = \"200\"></td></tr>";
					}
					?>			
 				</table>
 			</div>	
 			<div id="p0_closer"></div>		
 		</div>


 		<div id = "p_header"><h3 id="caption"><a href="site/tag/popular">POPULAR</a><h3></div>
 		<div id = "panel1">
 			<a href='<?php echo base_url();?>site\search'><img src="/mywebsite/img/search.png" height="25" width = "25"> Search Here</a>
 			<table class = "table"> 				 			 		
 				<?php 
	 				 foreach ($query1 as $row) { 				 
		 				echo "<tr>";
		 				echo '<td colspan=\'3\'><img src="'.base_url()."uploads/".$row['Picture'].'" width="160" height="130"></td>';
						echo "<td colspan='3' id=\"text\"><h2><a href=site/games/".urlencode($row['Game_name']).'>'.$row['Game_name'].'</a></h2><p>'.$row['Description'].'</p><i><a href=site/games/'.urlencode($row['Game_name']).'><pre>						read more >> </i></pre></a></td>';
						echo "</tr>";	
						echo "<tr>
						<td  colspan='3' ><img src=\"/mywebsite/img/2.png\" height=\"1\" width = \"150\"></td>
							<td  colspan='3' > <img src=\"/mywebsite/img/2.png\" height=\"1\" width = \"375\"></td></tr>";
				}
			?>			
 			</table> 	
	 			 		
 		</div>
 		<div id="p_closer"></div>


 		<div id = "p_header"><h3 id="caption"><a href="site/tag/new_games">NEW GAMES<h3></a></div>
 		<div id = "panel2"> 			
 			<table class = "table">
 				<?php 
	 				 foreach ($query2 as $row) { 				 
		 				echo "<tr>";
		 				echo '<td colspan=\'3\'><img src="'.base_url()."uploads/".$row['Picture'].'" width="160" height="130"></td>';
						echo "<td colspan='3' id=\"text\"><h2><a href=site/games/".urlencode($row['Game_name']).'>'.$row['Game_name'].'</a></h2><p>'.$row['Description'].'</p><i><a href=site/games/'.urlencode($row['Game_name']).'><pre>						read more >> </i></pre></a></td>';
						echo "</tr>";	
						echo "<tr>
						<td  colspan='3' ><img src=\"/mywebsite/img/2.png\" height=\"1\" width = \"150\"></td>
							<td  colspan='3' > <img src=\"/mywebsite/img/2.png\" height=\"1\" width = \"375\"></td></tr>";
					}
			?>			
 			</table>
 		</div> 		
	</div>
 		<div id="p_closer"></div>