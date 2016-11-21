<?php 
  // the files and strings we use
  $info_file = "assets/aboutus.txt";

  $fp = fopen($info_file, "rb") or die("Sorry. This page encountered an error opening the aboutus page.");
  $info = fread($fp, filesize($info_file));
  fclose($fp);
?>

<div class="container2">
	<div id = "about_content">
		<?php if ($IsAdmin == true) { echo "<h4><a id =\"ablack\" href=\"../admin/editInfo/aboutus/true/show\">Edit</a></h4>"; }  ?>
		<h2>About Us</h2>
		<div id="about_txt">
			<?php echo nl2br($info) ?>
		</div>
	</div>
</div>


		