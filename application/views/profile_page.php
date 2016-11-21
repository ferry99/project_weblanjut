<head>    
    <title>GAME OVER</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/mycss.css">
    <script type="text/javascript" src="<?php echo base_url();?>/js/jquery-1.11.2.js" ></script>
	<script type="text/javascript" src="<?php echo base_url();?>/js/myjs.js" ></script>
</head>


<div class = "container" >
	<div id="profile_admin">
		<?php echo $sessionName ;
		echo $message;
		?>	
		<div id="photo">
			<?php 
				foreach ($profile as $row) {
				echo '<img src="data:image/jpeg;base64,'.base64_encode($row['Photo']).'" width="300" height="200">';
			?>
		</div>
		
		<div id="data_admin">
			</br></br>
			<?php 
					echo "Username :" .$row['Username']."</br>";
					echo "Password : ***********  <a href=".base_url()."admin/changePass/>Change Password?</a></br>";
					echo "Status :" .$row['Status']."</br>";				
					echo "Email :" .$row['Email']."</br>";
				}		
			?>

		</div>
		
	</div>
</div>

