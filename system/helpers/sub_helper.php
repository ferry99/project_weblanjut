 <?php 
    // is the id of an admin? 

if ( ! function_exists('LoggedIn'))
    {             
        Function IsAdmin() {
                 $CI =& get_instance();
                 $my_session = $CI->session->userdata('username');
                 if (empty($my_session)) { return false; }
                 $f_query = "SELECT * FROM user WHERE Username = '$my_session'" ;
                 $f_sql = mysql_query($f_query) or die(mysql_error());
                 while ($f_row = mysql_fetch_row($f_sql)) {
                       if ($f_row[2] == "1") { return true; }
                       else { return false; }
                 }
                 return false;
        }
    }

    // is the visitor logged in?    
    if ( ! function_exists('LoggedIn'))
    {
        Function LoggedIn() {
        $CI =& get_instance();
        $my_session = $CI->session->userdata('username');
        if (empty($my_session)) { return false; }
        return true;
        }
    }      
    

     if ( ! function_exists('getSession'))
    {
        Function getSession() {
        $CI =& get_instance();
        $my_session = $CI->session->userdata('username');
        return $my_session;
        }
    }      
 ?>