

<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Register</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  
                 	<input type="submit" value="submit" id="submit" />
  						
                  <p><a href="login.html">HOME</a></p>
                  
                 
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "mobile";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$sql="INSERT INTO users(user_name,password) VALUES (' $username ' , ' $password ')";

/*$re_password=$_POST['repassword'];*/
if (mysqli_query($conn, $sql)) {
			echo "Workng!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?> 

</html>

