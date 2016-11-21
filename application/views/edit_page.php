<?php

	if ($IsAdmin == false) {
   	echo "NOT ADMIN!!!";
    exit();
  }

  $filename = $file;
  $thisroot = $root ;


  if (!empty($_POST['text2edit'])) {
    $text2edit=stripslashes($_POST['text2edit']);    
  }

  
  if ($root == true) { 
	  $fullfilename = "assets/".$filename.".txt";  
  }


  if (!empty($action)) {
    if ($action == "write") {
    $fp=fopen($fullfilename,"w") or die("Couldn't open ".$fullfilename.".. Make sure it exists and is writable (chmod 666 or 777).");
      fwrite($fp,$text2edit);
      fclose($fp);   
      echo "Data Has Been Changed"; 
    }
  }  
  // try to open
  $fp = fopen($fullfilename, "rb") or die("Couldn't open ".$fullfilename.".. Make sure it exists and is readable.");
  if (filesize($fullfilename) > 0) { $text2edit = fread($fp, filesize($fullfilename)); }
  fclose($fp);
?>


<div class="container2">

  <div id = "edit_content">
  	<?php
  	  echo "<strong>Edit : ".$fullfilename."</strong>";?>
  	 <form method="post" action='  <?php echo base_url();?>admin/editInfo/aboutus/true/write'>
    	   <textarea rows="30" cols="80" name="text2edit"><?php echo $text2edit ?></textarea><br />
    	   <input type="hidden" name="action" value="write_changes">
    	   <input type="hidden" name="filename" value="<?php echo $filename; ?>">
    	   <input type="hidden" name="root" value="<?php echo $root; ?>">
    	   <input type="submit" value="Save">
  	 </form>
  </div>
  
</div>