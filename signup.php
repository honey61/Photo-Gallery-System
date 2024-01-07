<?php session_start(); ?>
<?php include('dbcon.php'); ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="form-wrapper">
  
  <form action="#" method="post">
    <h3>Registration</h3>
	
    <div class="form-item">
		<input type="text" name="user"  placeholder="Username" ></input>
    </div>
    <div class="form-item">
		<input type="text" name="email"  placeholder="Email" ></input>
    </div>
      <div class="form-item">
		<input type="password" name="pass"  placeholder="Password" ></input>
    </div>
    
    <div class="button-panel">
		<input type="submit" class="button" title="create" name="Create" value="create"></input>
        <div class="reminder">

    
  </div>
    </div>
  </form>
  <?php
	     if (isset($_POST['Create']))
       { 
        $username =  $_POST["user"];
        $email =  $_POST["email"];
       
        $password =  $_POST["pass"];
       
        
        $sql = "INSERT INTO  users (username,password,email) VALUES ('$username','$password','$email')";
        
        

	
			$result		= mysqli_query($con, $sql);
			
			if (!$result) 
				{			
					echo mysqli_error($con);
					
				}
			else
				{
				 echo 'registeration successfully';
         header('location:index.php');     
				}
       }
  ?>
   <div class="reminder">
    <a href="index.php">Go back to Login page </a>
    
  </div>
 
  </div>
  
</div>

</body>
</html>