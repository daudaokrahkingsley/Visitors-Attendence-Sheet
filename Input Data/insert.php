<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Insert Page page</title>
</head>
<body>
     <center>
         <?php

         $conn = mysqli_connect("localhost", "root", "", "my_db");
          
         if($conn === false){
             die("ERROR: Could not connect."
             .mysqli_connect_error());

         }
	
         $fname = $_REQUEST['fname'];
         $lname = $_REQUEST['lname'];
         $email = $_REQUEST['email'];
         $created = $_REQUEST['created'];

         $sql = "INSERT INTO customers VALUES ('$custId','$fname', '$lname', '$email', '$created')";

         if(mysqli_query($conn, $sql)){
             echo "<h1> Data stored  successfully. </h1>";
             echo n12br("\n $custId\n $fname\n $lname\n"
             . " $email\n $created");

         }else{
             echo "ERROR: Hush!  Sorry $sql."
             . mysqli_error($conn);

         }
           mysqli_close($conn);

       
         ?>
     </center>
    
</body>
</html>