<?php
   $username1=$_POST['username'];
   $password1=md5($_POST['password']);
   $hostname = 'localhost';
   $username = 'root';
   $password = 'borntoowin';
    echo "username='$username1'<br/>      password='$password1'";


try {
    $dbh = new PDO("mysql:host=$hostname;dbname=mydb", $username, $password);
    echo 'Connected to database<br />';
    $dbh->exec("insert into useCredential values('$user_id','$user_name','$user_password')");
    $result=$dbh->query("select * from useCredential where username ='$username1'");
    echo "<br/>All users information<br/>";
    foreach($result as $row)
           {
             
             print $row['user_id'] .' - '. $row['user_name'] . '-'.$row['user_password'].'<br />';
           }

   $dbh=null;
   echo 'Database disconnected<br />';
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
?>

