<?php
include './connection.php';
?> 
<?php
session_start();
?>
<?php
if(isset($_POST['insert']))   // it checks whether the user clicked login button or not 
{
     $username = $_POST['username'];
     
     $address=$_POST['address']; //setting address variable for session
     $_SESSION['address']=$address;   //setting session as address
     
     $packagename=$_POST['packagen'];   //setting package name variable for session
     $_SESSION['packagen']=$packagename; //setting session for package
     
     $packagetype=$_POST['packaget'];
     $_SESSION['packaget']=$packagetype;
     
     $packageduration=$_POST['packaged'];
     $_SESSION['packaged']=$packageduration;
     
     date_default_timezone_set("Asia/Kolkata");
    $date = date('Y-m-d');

     
      $cn=makeconnection();
	$s="insert into adminregistered(username,phone,address,packagen,packaged,packaget) values('" . $_POST["username"] ."','" . $_POST["phone"] ."','" . $_POST["address"] ."','" . $_POST["packagen"] ."','" . $_POST["packaged"] ."','" . $_POST["packaget"] ."')";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo '<script type="text/javascript"> window.open("lastadminreceipt.php","_self");</script>';
        $username=$_POST['username'];
        $_SESSION['username']=$username;

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
            <form action="adminregistration.php" method="post">
        
        <ul>
            <li>Username<input type="text" name="username"></li>
            <li>Password<input type="text" name="phone"></li>
            <li>Address<input type="text" name="address"></li>
            
            <li>Package Name<select style="margin-left: 50px;" name="packagen">
  <option value="swimming">Swimming</option>
  <option value="Gym">Gym</option>
  <option value="Basketball">Basketball</option>
  <option value="yoga">yoga</option>
                    </select></li>
                    
                    <li>Package duration<select style="margin-left: 50px;" name="packaged">
                            <option value="1Month">1 Month</option>
  <option value="3months">3 Months</option>
  <option value="6months">6 Months</option>
  <option value="One Year">Yearly package</option>
                    </select></li>
                    
                    <li>Package Type<select style="margin-left: 50px;" name="packaget">
                   <option value="<?php $d=strtotime("next Month");echo date("Y-m-Y", $d);?>">1 Month</option>
  <option value="<?php $d=strtotime("+3 Month");echo date("Y-m-d", $d);?>">3 Months</option>
  <option value="<?php $d=strtotime("+6 Month");echo date("Y-m-d", $d);?>">6 Months</option>
  <option value="<?php $d=strtotime("next year");echo date("Y-m-d", $d);?>">Yearly package</option>
                    </select></li>
            
            
        </ul>
                
                
                <input type="submit" name="insert" value="login"  name="login">
            </form>
        </div>
        
    </body>
</html>
<html>
    
</html>
