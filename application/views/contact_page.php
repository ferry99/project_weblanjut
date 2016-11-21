<head>
    
    <title>GAME OVER</title>


    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/mycss.css">
      <script type="text/javascript" src="<?php echo base_url();?>/js/jquery-1.11.2.js" ></script>
       <script type="text/javascript" src="<?php echo base_url();?>/js/myjs.js" ></script>
    

</head>

<div class = "container" >
  <div id = "p_header"></div>
    <div id = "panel2">       
         <table width="70%" class="datatable">
         <tr>
            <td>               
               <div id ="contact_table">
               <?php echo validation_errors(); ?>
               <h2>Contact Us</h2>
               To contact us via the website, use the form below:<br /><br /><br />

               <form method="POST" action="<?php echo base_url();?>site/sendEmail">
               Your name<br />
               <input type="text" name="name" size="25" maxlength="25" value=""><br />
               Your e-mail address<br />
               <input type="text" name="email" size="45" maxlength="45" value=""><br />
               Your message<br />
               <textarea name="message" rows=15 cols=55 value=""></textarea><br />
                 <input type="hidden" name="action" value="mailform">
                 <input type="submit" value="Send To GameOver">
               </form><br/>
            </td>
        </tr>
          </div>
        </table>
    </div>    

  <div id="p_closer"></div>
</div>








