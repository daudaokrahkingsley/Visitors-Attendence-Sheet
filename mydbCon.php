
 <?php

  $hName = 'localhost';
  $uName = 'root';
  $password ='';
  $dbName= "my_db";


   $dbCon= 
    mysqli_connect ($hName, $uName, $password, $dbName);
      
       if(!$dbCon){
          die('Could not Connect MySql Server: '
           .mysql_error());
          }
?>