<?php
session_start();

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

                
            </div>
        </nav>  <!-- 1st Navbar ends here-->

        <!-- 2nd Corousal ends here-->
        
        <form action="onlineenquiry.php" method="post" style="margin-top: 90px;">
        
        



        

            <div class="container">
                <div class="form-check-inline">
                    <span style="color: #000000; font-family: initial; margin-left: 20px; font-size: 20px;">Title</span>
                
                
                    <label class="form-check-label" style="margin-left: 25px;">
        <input type="radio" class="form-check-input" id="" name="rad" value="Mr" checked>Mr
      </label>
   
    
      <label class="form-check-label">
        <input type="radio" class="form-check-input" id="" name="rad" value="Miss">Miss
      </label>
                    
                    <label class="form-check-label">
        <input type="radio" class="form-check-input" id="" name="rad" value="Mrs">Mrs
      </label>
    
                    
                </div>
                
            <div class="row" >
                <div class="col-lg-6">
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon">
                           Enter Your Name:
                        </span>
                        <input type="text" name="nm" placeholder="Enter your Name" class="form-control" area-describedby="sizing-addon1" required="">
                    </div>
                </div>

            </div>

            <div class="row" >
                <div class="col-lg-6">
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon">
                            Enter Contact no.
                        </span>
                        <input type="text" name="mn" placeholder="Enter Your Contact No." class="form-control" area-describedby="sizing-addon1" required onkeypress='validate(event)'>
                    </div>
                </div>
            </div>


            <div class="row" >
                <div class="col-lg-6">
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon">
                           Ur Email Address
                        </span>
                        <input type="text" name="eml" placeholder="Enter your Email Id" class="form-control" area-describedby="sizing-addon1" required>
                    </div>

                </div>

            </div>
                
                
                
            
            
            
            
            <div class="row" >
                <div class="col-lg-6">
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon">
                            Select Your State :
                        </span>
                    
    <div class="form-group" >


        <select class="form-control" name="state" onChange="check();" style="width: 200px; margin-left: 25px; margin-top: 15px;">
                        <option value="" disabled selected hidden>Select here</option>
                        <option value="AP">Andhra Pradesh</option>
                        <option value="AruPra">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="BR">Bihar</option>
                    </select>
                        
    </div>
                    </div>
    


                </div>

            </div>
                
                
                
                <div class="row" >
                <div class="col-lg-6">
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon">
                           Enter City Name:
                        </span>
                        <input type="text" name="city" placeholder="Enter your Email Id" class="form-control" area-describedby="sizing-addon1" required>
                    </div>

                </div>

            </div>
                
                
                
                <div class="row" >
                <div class="col-lg-6">
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon">
                           Enter your Mesg:
                        </span>
                        <textarea name="mes" placeholder="Enter your Email Id" class="form-control" area-describedby="sizing-addon1" required></textarea>
                    </div>

                </div>

            </div>
                
                
            
            
            <div class="row" >
                <div class="col-lg-2" >
                    <div class="form-inline">
                        <input type="submit" value="Proceed" name="sbmt" class="form-control btn-primary" >
                        <input type="reset" vlaue="Clear" class="form-control btn-info" >
                    </div>
                </div>
                
                
            </div>

</div>
            <?php include('./connection68.php'); ?>
            
            <?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="insert into onlineq(Person,Name,Phno,Email,state,city,Message) values('" . $_POST["rad"] ."','" . $_POST["nm"] ."','" . $_POST["mn"] ."','" . $_POST["eml"] ."','" . $_POST["state"] ."','" . $_POST["city"] ."','" . $_POST["mes"] ."')";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Thanks! We will reach you shortly!');</script>";
}
?>
            

          





            


        </form>
        
    </body>
</html>