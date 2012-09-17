<?php
  
       $hostname = 'localhost';
       $username = 'root';
       $password = 'borntoowin';
	 $sql=$_POST['query']; 
    try {
          
          $dbh = new PDO("mysql:host=$hostname;dbname=mydb", $username, $password);      
            echo "</br></br>Connected to database<br/>";

         
          $name = "' ' OR 1=1";                                     
          $sql = "select * from userdata where user_name=$name";
	 $name = mysql_real_escape_string($name);  
          foreach($dbh->query($sql) as $row)
           {
             
             print $row['user_id'] .' - '. $row['user_name'] . '<br />';
           }

	$dbh=null;
	echo "<br/>Connection closed";

        }
    catch(PDOException $e)
       {
         echo $e->getMessage();
       }
?>

