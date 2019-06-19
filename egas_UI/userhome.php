<?php
include('session.php');
?>

<html>

    <head>
        <style>
            
            
            
            .myCarousel
            {

                width: max-content;

            }



            .imgHolder {
                position: relative;
            }
            .imgHolder span {
                position: absolute;
                right: 10px;
                top: 10px;
            }
            
            
            .selectpicker

            {
                width: 175px;
                background-color: #800000;
                height: 50px;
                
                
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
                    <li><a href="registration.php"><span class="glyphicon glyphicon-user"></span>&nbsp;<?php echo $login_session; ?></a></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout</a></li>
                </ul>

                
            </div>
        </nav>  <!-- 1st Navbar ends here-->

        <div class="container" style="margin-top: 22px">
            <div class="page-header" style="">
                <h1></h1>
            </div>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>


                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">

                    <div class="item active" style="height: 400px; width:1250px; ">
                        <img src="images/Home_0.png" alt="Los Angeles" style="width:100%;">
                        <div class="carousel-caption">
                            
                            <h3>LPG for Home</h3>
                            <p>Getting an LPG Connection is Super Easy</p>
                            
                        </div>
                    </div>







                    <div class="item" style="height: 400px; width:1250px; ">
                        <img src="images/Hotel_revised_0.png" alt="New York" style="width:100%;">
                        <div class="carousel-caption">
                            <h3>LPG For Hotel </h3>
                            <p>Avail More than Just LPG</p>
                        </div>
                    </div>
                    
                    
                                        <div class="item" style="height: 400px; width:1250px; ">
                        <img src="images/Auto-LPG_revised_0.png" alt="New York" style="width:100%;">
                        <div class="carousel-caption">
                            <h3>LPG for Vehicle</h3>
                            <p>Today’s Fuel for a Better Tomorrow</p>
                        </div>
                    </div>

                    <div class="item" style="height: 400px; width:1250px; ">
                        <img src="images/Industrial_revised_0.png" alt="New York" style="width:100%;">
                        <div class="carousel-caption">
                            <h3>LPG for Industry</h3>
                            <p>Your Uninterrupted Production and Peace of Mind</p>
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

        </div> <!-- 2nd Corousal ends here-->



        <!--Here orange navbar style div tag is doned-->
        <div class="container-fluid" style="height: 42px;  margin-top: 30px;  background-color: #cc0000;">
            <div class="col-lg-3" style="border-right: solid 1px #ffffff; text-align: center; color: #ffffff; size: 35px;">
                <h4>Cylinder Installation</h4>
            </div>
            <div class="col-lg-3" style="border-right: solid 1px #ffffff;  text-align: center; color: #ffffff; size: 35px;">
                <h4>Instant Gas Connection</h4>
            </div>
            <div class="col-lg-3" style="border-right: solid 1px #ffffff;  text-align: center; color: #ffffff; size: 35px;">
                <h4>Safety Tips</h4>
            </div>
            <div class="col-lg-3" style="border-left:  solid 1px #ffffff;  text-align: center; color: #ffffff; size: 35px;">
                <h4>Online Enquiry</h4>
            </div>

        </div> <!-- 3rd Menubar ends here-->


        <div>
            <div class="well" style="text-align: center; size: 45px; color:#000;">
                <b style="border-bottom: #000; size: 45px;">Pioneering Efficient Energy Solutions Through LPG</b>
            </div>
        </div>



        <h3 style="border-bottom: #000; size: 45px; text-align: center; size: 45px; color:#000; margin-top: 5px;">LPG For Home</h3>


        <div style="margin-top: 50px;"> <!--Third div start here i.e. three images col 1 col2 col3 with size col 4-->
            <div class="col-lg-4" >
                <a href="twokg.php">
                <div class="imgHolder">
                    <img src="images/2Kgs_revised_0.png" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;" />
                    <span class="carousel-caption" style="margin-top: 160px; height: 10px;width: 170px; background-color: #cc0000;">2 Kg Cylinder</span>
                </div>
                </a>

            </div>
            <div class="col-lg-4" >
                <a href="fourkg.php">
                <div class="imgHolder">
                    <img src="images/4Kgs_revised_0.png" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;" />
                    <span class="carousel-caption" style="margin-top: 160px; height: 10px;width: 170px; background-color: #cc0000;">4 Kg Cylinder</span>
                </div>
                </a>
                

            </div>

            <div class="col-lg-4" >
                <a href="twelvekg.php">
                <div class="imgHolder">
                    <img src="images/12Kgs_revised_0.png" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;"/>
                    <span class="carousel-caption" style="margin-top: 160px; height: 10px;width: 170px; background-color: #cc0000;">12 Kg Cylinder</span>
                </div>
                </a>

            </div>

        </div>



        <!-- images in benefits -->
        <div class="container">
            <div class="col-lg-6">

                <div class="card">

                    <div style="margin-top: 45px; margin-left: 270px;">
                        <img src="images/icon-benefits.png" alt="" style="border: 1px solid #ddd;border-radius: 10px;padding: 55px;" />

                    </div>
                    <div style="margin-top: 10px; margin-left: 278px;">
                        <strong>Benefits of LPG Cooking</strong>
                    </div>
                    <div style="margin-top: 10px; margin-left: 243px;">
                        LPG is a clean and efficient cooking gas<br>
                        <div style="margin-left: 40">with several benefits</div>
                    </div>

                </div>
            </div>
             <!-- drop down cylinder prize -->

            <?php
            include './cylinderkgredirect.php';
            ?>




        </div>
        
        <div style="margin-top: 18px;">
            
            <?php
            include './pract2.php';
            ?>
            
        </div>
        








    </body>


</html>



