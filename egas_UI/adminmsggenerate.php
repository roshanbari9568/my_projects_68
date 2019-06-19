<?php
include('session.php');
?>

<?php
include './connection.php';
?>
 <?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="insert into userloginthroughadmin(username,password,mobileno,address,dateofreg) values('" . $_POST["un"] ."','" . $_POST["pd"] ."','" . $_POST["mn"] ."','" . $_POST["ad"] ."','" . $_POST["dr"] ."')";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Thanks! We will reach you shortly!');</script>";
}
?>
<!DOCTYPE html>
<html>
    <head>
    <title>
    </title>
   
        
        <style>
            
        </style> 
       <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min_1.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
         
    
    </head>
    
    <body>
        <div class="container">
            
            <nav class="navbar navbar-inverse navbar-fixed-top" style="margin-top: 20px; margin-left: 25px; margin-right: 25px; background-color: #136fed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">RB Gas Services</a>
                </div>



        </div>
        </nav>
        
        <form action="adminmsggenerate.php" method="post">
                  
                      
                      
            <div class="row" style="margin-left: 6px; margin-top: 100px;">
                <div class="col-lg-4">
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon">
                            Username:
                        </span>
                        <input type="text" name="un" placeholder="Enter new User ID" class="form-control" area-describedby="sizing-addon1" required="">
                    </div>
                </div>

            </div>

            <div class="row" style="margin-left: 6px;">
                <div class="col-lg-4">
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon">
                            Password:
                        </span>
                        <input type="text" name="pd" placeholder="Enter New User Key" class="form-control" area-describedby="sizing-addon1" required onkeypress='validate(event)'>
                    </div>
                </div>
            </div>
            
            <div class="row" style="margin-left: 6px;">
                <div class="col-lg-4">
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon">
                            Mobile No:
                        </span>
                        <input type="text" name="mn" placeholder="Enter New User Key" class="form-control" area-describedby="sizing-addon1" required onkeypress='validate(event)'>
                    </div>
                </div>
            </div>
            
            
            <div class="row" style="margin-left: 6px;">
                <div class="col-lg-4">
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon">
                            Address:
                        </span>
                        <input type="text" name="ad" placeholder="Enter Address" class="form-control" area-describedby="sizing-addon1" required onkeypress='validate(event)'>
                    </div>
                </div>
            </div>
            
            
            
            
            <div class="row" style="margin-left: 6px;">
                <div class="col-lg-4">
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon">
                            Date of Registration
                        </span>
                        <input type="date" name="dr" placeholder="Enter New User Key" class="form-control" area-describedby="sizing-addon1" required onkeypress='validate(event)'>
                    </div>
                </div>
            </div>


            
            
            
            <div class="row" style="margin-left: 6px;">
                <div class="col-lg-2" >
                    <div class="form-inline">
                        <input type="submit" value="Proceed" name="sbmt" class="form-control btn-primary" >
                        <input type="reset" vlaue="Clear" class="form-control btn-info" >
                    </div>
                </div>
                
                
            </div>

</div>
            
            
        </form>
    </body>
    
</html>



