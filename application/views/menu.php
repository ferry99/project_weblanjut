	<?php 

	echo "<div id = \"menu1\"><a href=\"".base_url()."site\">Home</a></div>";
	
	echo "<div id = \"menu2\"><a href=\"".base_url()."site/console/PS3\">Ps3</a></div>";
	
	echo "<div id=\"logo1\"><img src = \"".base_url()."img/GO.png\" width=70 height=30></div>";
	
	echo "<div id = \"menu3\"><a href=\"".base_url()."site/console/PS4\">Ps4</a></div>";

	echo "<div id = \"menu4\"><a href=\"".base_url()."site/console/PC\">PC</a></div>";



	if (IsAdmin() == true) {
		$mysession = getSession();
		echo "<div id = admin_box>";
		echo "<table class=form_table width=100%>";
			echo "<tr>";
		 	   	echo "<td><p><a href=\"".base_url()."admin\myProfile\">Profile</a><p></td>";
		 	   	echo "<td><p><a href=\"".base_url()."admin\addGames\">Add Games</a><p></td>";
		 	    echo "<td><p><a href=\"".base_url()."admin\settingUser\">Setting User</a><p></td>";
		 	    echo "<td><p><a href=\"".base_url()."login\logout\"> Logout </a></p></td>";
		   	echo "</tr>";

		   	echo "<tr>";
		   		echo "<td><div id=underline><img id=underline1 src=".base_url()."img/2.png height=2px width = 95></div></td>";
		   		echo "<td><div id=underline><img id=underline2 src=".base_url()."img/2.png height=2px width = 95></div></td>";
		   		echo "<td><div id=underline><img id=underline3 src=".base_url()."img/2.png height=2px width = 95></div></td>";
		   		echo "<td><div id=underline><img id=underline4 src=".base_url()."img/2.png height=2px width = 95></div></td>";

		   	echo "</tr>";
 	    echo "</table>";
 	    echo "</div>";
 	 }

       
     if($LoggedIn == false ){
     	echo "<div id =\"login_menu\"><a href=\"".base_url()."login\">login</a></p></div>";

     }

	?>