<head>
    
    <title>GAME OVER</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/mycss.css">
    <script type="text/javascript" src="<?php echo base_url();?>/js/jquery-1.11.2.js" ></script>
    <script type="text/javascript" src="<?php echo base_url();?>/js/myjs.js" ></script>    

</head>

<table id = "table">                   
            <?php 
               foreach ($gameResult as $row) {         
                echo "<tr>";
                echo '<td colspan=\'3\'><img src="'.base_url()."uploads/".$row['Picture'].'" width="160" height="130"></td>';
                echo "<td colspan='3' id=\"text\"><h2 id=\"textD\"><a href=".base_url()."site/games/".urlencode($row['Game_name']).'>'.$row['Game_name'].'</a></h2>';
                        if ($IsAdmin == true) {
                            echo "<a class=delete href=".base_url()."admin/deleteGame/".urlencode($row['Id']).'><img src='.base_url().'img/delete.png width="20" height="15"></a></br></br>';
                          }  
                      echo "<p>".$row['Description']."</p><i></br><a href=".base_url()."site/games/".urlencode($row['Game_name']).'><pre>                                      read more >> </i></pre></a></td>';
                echo "<tr>
                <td  colspan='3' ><img src=\"/mywebsite/img/2.png\" height=\"1\" width = \"150\"></td>
                  <td  colspan='3' > <img src=\"/mywebsite/img/2.png\" height=\"1\" width = \"375\"></td></tr>";
            }
          ?>      
</table>  