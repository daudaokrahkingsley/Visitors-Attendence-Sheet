<?php

    include 'mydbCon.php';
       
     $query ="select * from customers limit 50";
         $result = mysqli_query($dbCon, $query);

?>