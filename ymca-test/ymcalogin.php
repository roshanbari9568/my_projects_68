<?php
include './connection.php';

session_start();



 if($_SERVER["REQUEST_METHOD"] == "POST") {
     
     
     $myusername=$_POST['username'];
     $mypassword=$_POST['password'];
     // username and password sent from form 
     
     $myusername = stripslashes($myusername);
     $mypassword = stripslashes($mypassword);

      
      $myusername = mysqli_real_escape_string($cn,$_POST['username']);
      
      $mypassword = mysqli_real_escape_string($cn,$_POST['password']); 

      $s = "SELECT id FROM register WHERE username = '$myusername' and password = '$mypassword'";
      
      
      $result = mysqli_query($cn,$s);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
          
          $_SESSION['login_user']=$myusername;
         
         header("location: userpage.php");
      }else  
       if($myusername == "admin" && $mypassword == "1234")  // username is  set to "Ank"  and Password   
         {                                   // is 1234 by default     
         echo '<script type="text/javascript"> window.open("adminhome.php","_self");</script>';  //Add admin pages inside this file navbars and all          //  On Successful Login redirects to home.php

        }
          else{
              echo "<script>alert('Wrong User Id or password');</script>";
         
      }
      
   }

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Navi Mumbai YMCA </title>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>


<style type="text/css">
	

	body
	{
		font-family: 'Open Sans', sans-serif;
	}

.img-thumbnail
{
margin-top: 25px;
height: 200px;
width: 200px;
 border: 3px solid lightblue;

box-shadow: 5px 5px 5px #aaaaaa;
}

img{
	-webkit-transition:all 0.5s ease;
	
}
#facilities img:hover{
	transform: scale(1.2);
}


.container
{
	background: #f1f1f1;
	width: 100%;
}

.data
{
margin-top: 25px;
}

.info
{
	font-size: 18px;
	line-height: 27px;
	text-align: left;
	  border-top: 1px solid gray;
}






	.form-control {
		box-shadow: none;
		border-radius: 4px;        
        border-color: #dfe3e8;
	}
	.form-control:focus {
		border-color: #29c68c;
		box-shadow: 0 0 8px rgba(0,0,0,0.1);
	}
	.navbar-header.col {
		padding: 0 !important;
	}	



	.container
	{
		
		padding:0px;
	}
	.navbar {
		position: top;

		background:teal;
		margin: 0px;
		border-bottom: 1px solid #dfe3e8;
		border-radius: 0;
		width: 100%;
	}
	.navbar .navbar-brand {
		font-size: 20px;
		padding-left: 0;
		padding-right: 50px;
	}
	
	.navbar ul.nav li a {
		font-weight: bold;
		color: black;
	}
	.navbar ul.nav li a:hover, .navbar ul.nav li a:focus {
		color: white !important;
                
	}
	.navbar ul.nav li.active > a, .navbar ul.nav li.open > a {
		color: #26bb84 !important;
		background: transparent !important;
	}
    .navbar .form-inline .input-group-addon {
		box-shadow: none;
        border-radius: 2px 0 0 2px;
		background: #f5f5f5;
        border-color: #dfe3e8;
        font-size: 16px;
    }
	.navbar .form-inline i {
		font-size: 16px;
	}
	.navbar .form-inline .btn {
		border-radius: 2px;
		color: #fff;
        border-color: #29c68c;
		background: #29c68c;
		outline: none;
	}
	.navbar .form-inline .btn:hover, .navbar .form-inline .btn:focus {
        border-color: #26bb84;
		background: #26bb84;
    }
	.navbar .search-form {
		display: inline-block;
	}
	.navbar .search-form .btn {
		margin-left: 4px;
	}
	.navbar .search-form .form-control {
		border-radius: 2px;
	}
	.navbar .login-form .input-group {
		margin-right: 4px;
		float: left;
	}
	.navbar .login-form .form-control {
		max-width: 158px;
		border-radius: 0 2px 2px 0;
	}    	
	.navbar .navbar-right .dropdown-toggle::after {
		display: none;
	}
	.navbar .dropdown-menu {
		border-radius: 1px;
		border-color: #e5e5e5;
		box-shadow: 0 2px 8px rgba(0,0,0,.05);
	}
	.navbar .dropdown-menu li a {
		padding: 6px 20px;
	}
	.navbar .navbar-right .dropdown-menu {
		width: 505px;
		padding: 20px;
		left: auto;
		right: 0;
        font-size: 14px;
	}

.footer {
   position: bottom;
   left: 0;
   bottom: 0;
   height: 50px;
   width: 100%;
   background-color:black;
   color: white;
   text-align: center;
}




	@media (min-width: 1200px){
		.search-form .input-group {
			width: 300px;
			margin-left: 30px;
		}
	}
	@media (max-width: 768px){
		.navbar .navbar-right .dropdown-menu {
			width: 100%;
			background: transparent;
			padding: 10px 20px;
		}
		.navbar .input-group {
			width: 100%;
			margin-bottom: 15px;
		}
		.navbar .input-group .form-control {
			max-width: none;			
		}
		.navbar .login-form .btn {
			width: 100%;
		}
	}
        
        .row{
                margin-bottom: 10px;

            }
            .input-group-addon{

                width:200px;
            }
    
</style>
</head> 


    <body>

<nav class="navbar fixed-top navbar-default navbar-expand-lg navbar-light">
	<div class="navbar-header d-flex col">
		<img src="images/logo.png" style="height: 50px; width: 70px; margin-left:20px;" class="rounded-top" alt="Sample image"> 	

		<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
			<span class="navbar-toggler-icon"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
		<ul class="nav navbar-nav">
                    <li class="nav-item"><a href="index.php" class="nav-link" style="margin-left: 70px;">YMCA Home</a></li>
			<li class="nav-item"><a href="#" class="nav-link">About</a></li>			
			<li class="nav-item dropdown">
				<a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Our Facilities <b class="caret"></b></a>
				<ul class="dropdown-menu">					
                                    
					<li><a href="#basketball" class="dropdown-item">Basketball</a></li>
					<li><a href="#" class="dropdown-item">Swimming</a></li>
					<li><a href="#" class="dropdown-item">Batminton</a></li>
                                        <li><a href="#" class="dropdown-item">Dancing</a></li>
                                        <li><a href="#" class="dropdown-item">Taekwondo</a></li>
                                        <li><a href="#" class="dropdown-item">Table-Tennis</a></li>
                                        <li><a href="#" class="dropdown-item">Gymnasium</a></li>
                                        <li><a href="#" class="dropdown-item">Roller-Skating</a></li>
				</ul>
			</li>
                        
                        <li class="nav-item "><a href="#" class="nav-link">Membership</a></li>
			<li class="nav-item"><a href="#" class="nav-link">Upcoming Event</a></li>
			<li class="nav-item"><a href="#" class="nav-link">Events Gallary</a></li>
			<li class="nav-item dropdown">
				<a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">About Us<b class="caret"></b></a>
				<ul class="dropdown-menu">					
					<li><a href="#" class="dropdown-item">Trustee</a></li>
					<li><a href="#" class="dropdown-item">Vision</a></li>
					<li><a href="#" class="dropdown-item">Committee</a></li>
					<li><a href="#" class="dropdown-item">Sport Heads</a></li>
				</ul>
			</li>
                        
                       
		</ul>
            
            <ul class="nav navbar-nav navbar-right">
                <li><a href="registrationymca.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="ymcalogin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
            
            
		
		
	</div>
</nav>





        <form action="ymcalogin.php"  method="post" style="margin-top: 100px; margin-left: 25px;">

            <div class="page-header">
                <h4 style="color: #1b6d85; margin-left: 145px;" >Insert your Identity</h4>


            </div>

            <div align="center">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon ">
                                Your User ID :
                            </span>
                            <input type="text" name="username" placeholder="Enter Your name" class="form-control" area-describedby="sizing-addon1" required>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-4">
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon ">
                                Password :
                            </span>
                            <input type="text" name="password" placeholder="Enter Your ID no." class="form-control" area-describedby="sizing-addon1" required>
                        </div>
                    </div>
                </div>

                





        <div class="row">
            <div class="col-lg-2" >
                <div class="form-inline">
                    <input type="submit" name="sbmt" value="Proceed" class="form-control btn-danger" >
                    <input type="reset"  value="clear" class="form-control btn-warning" >

                </div>
            </div>



        </div>
                
                
                
              
        <div>
            
        </div>







    </div>
</form>


</body>
</html>