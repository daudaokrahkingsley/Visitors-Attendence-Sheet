<!DOCTYPE html>
  <html lang="en">
      <head>
       <title>Enter Your Data</title>
      </head>
         <style>
         body{ background-color: green;}
           
       input{
          padding: 10px; 
          margin-top:10px;
          margin-left:20px;
}        

   label{
       color:White;
       font-weight: bold;
       font-size: 20px;
}

 	</style>
          
        <script>
      function verifySpace(){
          var fn = document.getElementById("finame").value;
       if(fn==""){
           document.getElementById("message").innerHTML="No empty space";
              return false;
           
     }else{
         alert(" correct");
   }
}
 </script>


        <body>
          <center>
            <h1>TAKING ATTENDANCE INTO DATABASE</h1>
 		<form action="insert.php" method="post" onsubmit=" return verifySpace()">
                   <p>
                   <label for="fname">First Name:</label>
		   <input type="text" name="fname"   id="finame" style="margin-left:40px;" >
		      <span id="message" style="color:red"></span><br>
                         <br>
                     </p>
                     
                   <p>
		   <label for="lastName">Last Name:</label> 
                   <input type="text" name="lname"   id="lastName" style="margin-left:39px;">
 		     <span id="message" style="color:red"></span><br>
                    </p> 
                  	   
                   
                   <p>
		   <label for="emailAddress">Email Address:</label> 
                   <input type="email" name="email" id="Email" required>
 		   </p> 
                      <input type ="submit" value="Submit">                    
 
</form>
 </center>
 
  
</body>
</html>   