<!DOCTYPE html>
<html lang="en">
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
<div>
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
			<li class="nav-item"><a href="#" class="nav-link" style="margin-left: 70px;">YMCA Home</a></li>
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
                        <li class="nav-item"><a href="event.html" class="nav-link">Events Gallary</a></li>
			<li class="nav-item dropdown">
				<a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">About Us<b class="caret"></b></a>
				<ul class="dropdown-menu">
                                    <li><a href="about.html" class="dropdown-item">About YMCA</a></li>
                                    <li><a href="mission.html" class="dropdown-item">Mission</a></li>
                                    <li><a href="structure.html" class="dropdown-item">Structure YMCA</a></li>
                                    
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
    
    <div class="container" style="margin-top: 50px;">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-left: 60px; margin-right: 60px;">
    <!-- Indicators -->
    <ol class="carousel-indicators" style="margin-left: 80px; margin-right: 80px;">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="img2/basketball.jpg" alt="Los Angeles" style="width:100%;height: 400px;
        transition: none 0s ease 0s;
    line-height: 14px;
    border-width: 0px;
    margin: 0px;
    padding: 0px;
    letter-spacing: 0px;
    font-weight: 400;
    font-size: 10px;">
        <div class="carousel-caption">
          <h3>BasketBall</h3>
          <p>The strength of the team is each individual member</p>
        </div>
      </div>

      <div class="item">
        <img src="img2/badminton.jpg" alt="Chicago" style="width:100%;height: 400px;transition: none 0s ease 0s;
    line-height: 14px;
    border-width: 0px;
    margin: 0px;
    padding: 0px;
    letter-spacing: 0px;
    font-weight: 400;
    font-size: 10px;">
        <div class="carousel-caption">
          <h3>Badminton</h3>
          <p>The art of badminton is to deceive</p>
        </div>
      </div>
    
      <div class="item">
        <img src="img2/skating.jpg" alt="New York" style="width:100%;height: 400px;transition: none 0s ease 0s;
    line-height: 14px;
    border-width: 0px;
    margin: 0px;
    padding: 0px;
    letter-spacing: 0px;
    font-weight: 400;
    font-size: 10px;">
        <div class="carousel-caption">
          <h3>Skating</h3>
          <p>“Its Physical and mental, you have something to focus on”</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
    </div>
 <div class="row slideanim" style="margin-top: 20px; margin-left: 5px"">

    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading" style="background:lightblue">
         <h2>Welcome to YMCA</h2>
        </div>
        <div class="panel-body">
         <p style="text-align:left;">
         	The Bombay YMCA was established on April 25, 1875. At the close of a public meeting, held at the Cowasjee Hall,Dhobi Talao, on April 25, 1875, and addressed by Rev. A. N. Somerville of Glasgow, the speaker said that he would like to see a YMCA established before he left India the next day. Those interested were asked to stay on after the meeting.
		</p>
		<button type="button" class="btn btn-primary" style="text">Read More</button>
        </div>
      </div>      
    </div>     
    

 <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading" style="background:lightblue">
         <h2>Upcoming Event</h2>
        </div>
        <div class="panel-body">
         <p style="text-align:left;">
         	The Bombay YMCA was established on April 25, 1875. At the close of a public meeting, held at the Cowasjee Hall,Dhobi Talao, on April 25, 1875, and addressed by Rev. A. N. Somerville of Glasgow, the speaker said that he would like to see a YMCA established before he left India the next day. Those interested were asked to stay on after the meeting.
		</p>
		<button type="button" class="btn btn-primary" style="text">Read More</button>
        </div>
      </div> 
    </div>

 <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading" style="background:lightblue">
         <h2>News</h2>
        </div>
        <div class="panel-body">
         <p style="text-align:left;">
         	The Bombay YMCA was established on April 25, 1875. At the close of a public meeting, held at the Cowasjee Hall,Dhobi Talao, on April 25, 1875, and addressed by Rev. A. N. Somerville of Glasgow, the speaker said that he would like to see a YMCA established before he left India the next day. Those interested were asked to stay on after the meeting.
		</p>
		<button type="button" class="btn btn-primary" style="text">Read More</button>
        </div>
      </div> 
    </div>


    </div>

    <div class="row text-center text-lg-left" style="margin-left: 5px;" id="facilities">
			<h2 class="info">Facilities</h2>

			<div class="col-lg-2 col-md-3 col-xs-5">
				<a href="#" class="d-block mb-5 h-100"></a>

					<img class="img-fluid img-thumbnail" src="img1/table tannis1.png">
					<div class="data">
					<P> table tannis</P>
					</div>
				</div>
				
			
			<div class="col-lg-2 col-md-3 col-xs-5">
				<a href="#" class="d-block mb-5 h-100"></a>

					<img class="img-fluid img-thumbnail" src="img1/basketball.png">
					<div class="data">
					<P> Basketball</P>
					</div>
				</div>
	

			<div class="col-lg-2 col-md-3 col-xs-5">
				<a href="#" class="d-block mb-5 h-100"></a>

					<img class="img-fluid img-thumbnail" src="img1/karate.png">

					<div class="data">
					<P>Karate</P>
					</div>
				</div>


				<div class="col-lg-2 col-md-3 col-xs-5">
				<a href="#" class="d-block mb-5 h-100"></a>

					<img class="img-fluid img-thumbnail" src="img1/swimming.png">
					<div class="data">
					<P> Swimming</P>
					</div>
				</div>


				<div class="col-lg-2 col-md-3 col-xs-5">
				<a href="#" class="d-block mb-5 h-100"></a>

					<img class="img-fluid img-thumbnail" src="img1/sketing.png">
					<div class="data">
					<P> Skating</P>
					</div>
				</div>

					<div class="col-lg-2 col-md-3 col-xs-5">
				<a href="#" class="d-block mb-5 h-100"></a>

					<img class="img-fluid img-thumbnail" src="img1/guitar.png">
					<div class="data">
					<P> Guitar</P>
					</div>
				</div>

					
		</div>



<div class="footer">
  <p>Copyright 2019 belapur YMCA | All Rights Reserved | Powered by Innovative</p>
</div>


		
	</div>





</body>
</html>                                                                                                                