<?php

      
                  
         $firstname=$_POST['fname'];
         $aadhar=$_POST['aadhar'];
         $remail=$_POST['remail'];
         $rphone=$_POST['rphone'];
         $rpassword=$_POST['rpassword'];
        



		       $hostname = 'localhost';
               $username = 'root';
               $password = '';
               $dbname='roshan';



      $conn = mysqli_connect($hostname, $username, $password, $dbname)  or die ("unable to connect");


           

	
	
		 $query= "select * from register  WHERE email='$remail'";
		 $query_run = mysqli_query($conn,$query);

		  if(mysqli_num_rows($query_run)>0)
		  {
			  echo '<script type="text/javascript"> alert(" user already exists, try different");  location.href = "registeration.php"; </script>';
		  }
	
			  
else
	{
		$sql = "INSERT INTO register (firstname,aadhar,email,phone,password)VALUES ('$firstname','$aadhar',$remail','$rphone','$rpassword')";
        $query_run= mysqli_query($conn,$sql);
		if($query_run)
		{
            echo '<script type="text/javascript"> alert(" user register "); location.href = "registration.php"; </script>'; 
							 
								
		}
		else
		{
              echo '<script type="text/javascript"> alert("please put correct credentials"); location.href = "registeration.php"; </script>';
      	}
	}

	
                              
        

	
    //mysql_close($link);

?>