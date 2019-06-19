 <?php
      
       
          
      if(isset($_POST['login']))
         {
            $rphone=$_POST['rphone'];
         $rpassword=$_POST['rpassword'];
        

             $hostname = 'localhost';
              $username = 'root';
              $password = '';
               $dbname='roshan';


               $conn = mysqli_connect($hostname, $username, $password, $dbname)  or die ("unable to connect");





          $query=" select * from register where phone='$rphone' and password='$rpassword'";
           
           $query_run=mysqli_query($conn,$query);
           if(mysqli_num_rows($query_run)>0)
           {
                 $_SESSION['phone']=$rphone;
               header("Location: profile.php");
            }
           else
           {
                                   echo '<script type="text/javascript"> alert("please put correct credentials");location.href = "loginpage.php"; </script>';
              
           }
      }
     // }
      ?>
