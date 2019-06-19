<?php  

session_start();

$cylValue = $_GET['cylno'];


// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// Selecting Database
$db = mysql_select_db("company", $connection);
// Storing Session

$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select username,address,mobileno from userloginthroughadmin where username='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_person=$row['username'];
$address =$row['address'];
$mobileno=$row['mobileno'];
if(!isset($address)){
mysql_close($connection); // Closing Connection
header('Location: userloginthroughadmin.php');






}
?>




<html>
    <head>
     
            <style> 
            .row{
                margin-bottom: 10px;

            }
            .input-group-addon{

                width:200px;
            }

        </style>
            
        
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
         <nav class="navbar navbar-inverse navbar-fixed-top" style="margin-top: 20px; margin-left: 25px; margin-right: 25px; background-color: #800000">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">RB Gas Services</a>
                </div>
                <ul class="nav navbar-nav">

                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Home LPG<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="twokg.php">2 KG Cylinder</a></li>
                            <li><a href="fourkg.php">4 KG Cylinder</a></li>
                            <li><a href="twelvekg.php">12 KG Cylinder</a></li>
                            <li><a href="lpgleakdetecth.php">LPG Leak Detector</a></li>
                            <li><a href="benefitscook.php">Benefits of LPG for Cooking</a></li>
                            <li><a href="safetytipsh.php">Safety Tips - Home</a></li>
                        </ul>
                    </li>

                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Hotel LPG<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="seventeenkg.php">17 KG Cylinder</a></li>
                            <li><a href="lpgdetecthotel.php">LPG Leak Detector - Hotels </a></li>
                            <li><a href="benefitsoflpghotel.php">Benefits of LPG for Hotels</a></li>
                            <li><a href="saffetyforhotel.php">Safety Tips - Hotel</a></li>
                        </ul>
                    </li>


                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Industrial LPG<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="lpgsupplyforindust.php">LPG Supply</a></li>
                            <li><a href="lpginstallprondsupply.php">LPG installation, products and supply</a></li>
                            <li><a href="industrialapps.php">Industrial Application for LPG</a></li>
                            <li><a href="benefitsoflpgindust.php">Benefits of LPG for Industry</a></li>
                            <li><a href="safetytipsindust.php">Safety Tips - Industry</a></li>
                        </ul>
                    </li>
                    
                    
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Auto LPG<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="autogasstation.php">Autogas Station</a></li>
                            <li><a href="benefitsoflpgforvehicle.php">Benefits of LPG for Vehicle</a></li>
                            
                            
                            
                            <li><a href="safetytipsvehicle.php">Safety Tips - Vehicles</a></li>
                        </ul>
                    </li>


                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">About Us!<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="aboutrbservices.php">About RB Services</a></li>
                            <li><a href="sustain.php">Sustainability</a></li>
                            <li><a href="onlineenquiry.php">Online Enquiry</a></li>
                            <li><a href="media.php">Media</a></li>
                        </ul>
                    </li>

                    <li><a href="blog.php">Blog</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="buyinglpg.php"><span class="glyphicon glyphicon-user"></span>&nbsp;<?php echo $login_person ?></a></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout</a></li>
                </ul>

                
            </div>
        </nav>  <!-- 1st Navbar ends here-->

        <!-- 2nd Corousal ends here-->
        
        <form action="buyinglpg.php" method="post" style="margin-top: 90px;">
        
        



        

            <div class="container">
                
                
                
                <div class="row" style="margin-top: 20px;">
                
                    <div style="margin-bottom: 20px; margin-left: 15px;">
                        <span style="font-family: sans-serif; font-size: 15px; color: #660000;" >You're all done, now Pay and Proceed</span>
                    </div>
                    <div class="col-lg-5">
                    
                    
                    
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon">
                           Your Order ID:
                        </span>
                        <input type="text" name="oid" value="<?php echo (rand()); ?>" class="form-control" area-describedby="sizing-addon1" required="">
                    </div>
                        
                        
                </div>
                    
                    <div class="col-lg-1">
                        
                    </div>
                   
                    
                    <div class="col-lg-3">
                        
                        
                    <div class="input-group input-group-sm">
                        <span class="input-group-sm">
                           Your Card no:
                        </span>
                        <input type="text" placeholder="Enter your Card no." name="crdno" value="" class="form-control" area-describedby="sizing-addon1" required="">
                    </div>
                        
                        
                </div>
                    
                    

            </div>
                
                
                <div class="row" style="margin-top: 10px;">
                <div class="col-lg-5">
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon">
                           Ur User Name
                        </span>
                        <input type="text" name="uname" value="<?php echo $login_person; ?>" class="form-control" area-describedby="sizing-addon1" required="">
                    </div>
                </div>
                    
                    <div class="col-lg-1">
                        
                    </div>
                    
                    <div class="col-lg-3">
                    <div class="input-group input-group-sm">
                        <span class="input-group-sm">
                           Your CVV no:
                        </span>
                        <input type="text" placeholder="Enter 3 digit CVV no." name="cvvno" value="" class="form-control" area-describedby="sizing-addon1" required="">
                    </div>
                    </div>

            </div>
                
                <div class="row" style="margin-top: 10px;">
                <div class="col-lg-5">
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon">
                           Cylinder price:
                        </span>
                        <input type="text" name="cylprice" value="<?php echo $cylValue; ?>" class="form-control" area-describedby="sizing-addon1" required="">
                    </div>
                </div>
                    
                    <div class="col-lg-1">
                        
                    </div>
                    
                    <div class="col-lg-3">
                        
                        
                        <div class="input-group input-group-sm">
                        
                        <div class="form-group" >


                   
                         <select class="form-control" name="ed" style=" margin-top: 15px;">
                        <option value="" disabled selected hidden>Expire Year</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                        <option value="2030">2030</option>
                        <option value="2031">2031</option>
                        <option value="2032">2032</option>
                        
                    </select> 
                     
                        </div>
                    </div>
                        
                        
                        
                    </div>
                    
                    

            </div>

            <div class="row" style="margin-top: 10px;" >
                <div class="col-lg-5">
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon">
                            Contact Detail
                        </span>
                        <input type="text" name="mobno" value="<?php echo $mobileno; ?>"alue class="form-control" area-describedby="sizing-addon1" required onkeypress='validate(event)'>
                    </div>
                </div>
                
                <div class="col-lg-1">
                        
                    </div>
                    
                    <div class="col-lg-3">
                    
                    </div>
            </div>
                
                
                
                <div class="row" style="margin-top: 10px;">
                <div class="col-lg-5">
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon">
                            Your Address:
                        </span>
                        <input type="text" name="ad" value="<?php echo $address; ?>"alue class="form-control" area-describedby="sizing-addon1" required onkeypress='validate(event)'>
                    </div>
                </div>
                    
                    <div class="col-lg-1"> </div>
                    
                    <div class="col-lg-3">
                    
                    <div class="form-inline">
                        <input type="submit" value="Proceed" name="sbmt" class="form-control btn-primary" >
                        <input type="reset" vlaue="Clear" class="form-control btn-info" >
                    </div>
                    
                </div>
                    
                    
            </div>
                
                
                
                
             
            
            <div class="row" >
                <div class="col-lg-2" >
                    
                </div>
                
                
            </div>

</div>
            <?php include('./finalordvalinsert.php'); ?>
            
            <?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
        
	$s="insert into order(orderid,username,cylprice,mobileno,address,cardno,cvv,cardexpdate) values('" . $_POST["oid"] ."','" . $_POST["uname"] ."','" . $_POST["cylprice"] ."','" . $_POST["mobno"] ."','" . $_POST["ad"] ."','" . $_POST["crdno"] ."','" . $_POST["cvvno"] ."','" . $_POST["ed"] ."')";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Thanks! We will reach you shortly!');</script>";
}
?>
            

          





            


        </form>
        
    </body>
</html>