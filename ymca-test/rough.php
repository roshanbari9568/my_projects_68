<?php
session_start();
?>
<?php




if(isset($_POST['login']))   // it checks whether the user clicked login button or not 
{
     $username = $_POST['username'];
     $pass = $_POST['pass'];
     
     $address=$_POST['address']; //setting address variable for session
     $_SESSION['address']=$address;   //setting session as address
     
     $packagename=$_POST['packagen'];   //setting package name variable for session
     $_SESSION['packagen']=$packagename; //setting session for package
     
     $packagetype=$_POST['packaget'];
     $_SESSION['packaget']=$packagetype;
     
     $packageduration=$_POST['packaged'];
     $_SESSION['packaged']=$packageduration;



     

      if($username == "roshan" && $pass == "12345")  // username is  set to "Ank"  and Password   
         {                                   // is 1234 by default     

          $_SESSION['username']=$username;
          


         echo '<script type="text/javascript"> window.open("gettingrough.php","_self");</script>';            //  On Successful Login redirects to home.php

        }

        else
        {
            echo "Not redirecting";        
        }
}
 ?>

<html>
    <head>
        <title>
            Here i m taking package post end date YMCA admin side
        </title>
    
        <style>
            
        </style>
    </head>
    <body>
        <div>
            <form action="rough.php" method="post">
        
        <ul>
            <li>Username<input type="text" name="username"></li>
            <li>Password<input type="text" name="pass"></li>
            <li>Address<input type="text" name="address"></li>
            <li>Package Name<select style="margin-left: 50px;" name="packagen">
  <option value="swimming">Swimming</option>
  <option value="Gym">Gym</option>
  <option value="Basketball">Basketball</option>
  <option value="yoga">yoga</option>
                    </select></li>
                    <li>Package Type<select style="margin-left: 50px;" name="packaget">
                            <option value="<?php $d=strtotime("next Month");echo date("d-m-Y", $d);?>">1 Month</option>
  <option value="<?php $d=strtotime("+3 Month");echo date("d-m-Y", $d);?>">3 Months</option>
  <option value="<?php $d=strtotime("+6 Month");echo date("d-m-Y", $d);?>">6 Months</option>
  <option value="<?php $d=strtotime("next year");echo date("d-m-Y", $d);?>">Yearly package</option>
                    </select></li>
                    <li>Package duration<select style="margin-left: 50px;" name="packaged">
                            <option value="1Month">1 Month</option>
  <option value="3months">3 Months</option>
  <option value="6months">6 Months</option>
  <option value="One Year">Yearly package</option>
                    </select></li>
            
            
            <li></li>
            <li></li>
        </ul>
                
                
                <input type="submit" name="login" value="login"  name="login">
            </form>
        </div>
        
    </body>
</html>

