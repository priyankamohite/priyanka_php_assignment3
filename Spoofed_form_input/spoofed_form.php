<?php
    $server_name=$_SERVER['HTTP_REFERER'];
      if(!strcmp($server_name, "http://localhost/php_assignment3/Spoofed_form_input/spoofed_form.html"))
	
     { 
        $name=$_POST['name'];
         echo "Your name is: $name";
    }
   else
  {
        echo "server is wrong";
  }
?>
