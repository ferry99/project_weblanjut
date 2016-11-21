<?php 
if($page != "my" && $page != "settinguser"){

?>

<div id="f_header"></div>
	<div class = "footer">
 		<div id="panel">
 			<table>
 				<tr>
 					<td><h2>Other</h2></td>
 				</tr>
 				<tr>
 					<td><a href='<?php echo base_url(); ?>site/about'>About Us</a></td>
 				</tr>
 				<tr>
 					<td><a href="<?php echo base_url(); ?>site/contact">Contact Us</a></td>
 				</tr>
 			</table>
 		</div>
 		
 		<div id="panel1">
 			<table>
 				<tr>
 					<td><h2>Libaries</h2></td>
 				</tr>
 				<tr>
 					<td><a href="libraries_image.html">Image</a></td>
 				</tr>
 				<tr>
 					<td><a href="libraries_videos.html">Video</a></td>
 				</tr>
 				
 			</table>
 		</div>

 		<div id="logo1">
 			<img src="/mywebsite/img/go.png" width="75" height="30">
 			<p>GAME OVER WEBSITE</p>
 			<p></p>
 		</div>


 		<p id="copyr">
			&copy;2015 All Created by Xpath Web Design Team. 
		</p>
 	</div>


	<div class="custom_footer">
		<!-- <div id = "navi_footer"><img id="arrow" src="/mywebsite/img/down_arrow.png" width="20" height="8"></div> -->
		<div id="fb"><img src="/mywebsite/img/facebook.png" width="50" height="50"></div>
		<div id="tw"><img src="/mywebsite/img/twitter.png" width="50" height="50"></div>
		<div id="em"><img src="/mywebsite/img/gmail.png" width="50" height="50"></div>
	</div>

<?php
}
?>