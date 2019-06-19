<?php
include './session.php';
?>
<html>
    <head>
        <style>
            .vertical-menu {
                width: 350px;
            }

            .vertical-menu a {
                background-color: #eee;
                color: black;
                display: block;
                padding: 12px;
                text-decoration: none;
            }

            .vertical-menu a:hover {
                background-color: #ccc;
            }

            .vertical-menu a.active {
                background-color: #4CAF50;
                color: white;
            }


        </style>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">


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
            <div id="myCarousel">


                <div class="item active" style="height: 400px; width:1150px; ">
                    <img src="images/Banner---2Kg_0.png" alt="Los Angeles" style="width:100%;">
                    <div class="caption">
                        <h3 style="font-family: initial; color: #800000">2KG Cylinder :<span style="color: #800000; font-size: 20px; font-family: initial"> Super Easy and Super Safe</span></h3>

                    </div> 


                </div>
            </div>

        </div> <!-- 2nd Corousal ends here-->

        <div class="container">
            <div>
                <a href="home.html" class="inlined" style="color: #000; margin-left: 5px; margin-right:5px;  ">Home/</a> 
                <a href="other.html" class="inlined" style="color: #000; margin-left: 5px; margin-right:5px; ">LPG For Home/</a>
                <a href="other.html" class="inlined" style="color: #000; margin-left: 5px; margin-right:5px; ">2KG LPG</a>


            </div>
        </div>

        <div>

            <div class="caption" style="margin-top: 45px;">
                <span style="color: #191919; font-size: 20px; font-family: Arial;  margin-left: 125px;"><strong>LPG Cylinder with Cooktop</strong></span>

            </div>
            <div class="container"   style="margin-top: 15px;">

                <div class="col-lg-8">
                    <div style="font-size:medium; color: #191919; padding-bottom: 4px;padding-top: 4px;padding-left: 4px; padding-right: 4px; ">Not keeping well because of eating outside food daily? Need an LPG cylinder to cook for yourself? Transferred to a new location? Getting a Gas connection -is it a challenge? SUPERGAS offers you a solution - The new 2kg LPG Cylinder with Cooktop(stove).</div>


                    <div class="col-lg-4" style="margin-left: 50px;">
                        <div class="card">
                            <div style="margin-top: 45px;">
                                <img src="images/2KG/Low Refill Price.png" alt="Low Rifill Price" style="border: 1px solid #ddd;border-radius: 10px;padding: 55px;" />

                                <div class="caption" >
                                    <div style="margin-left: 42px;">


                                    Low refill Price
                                    </div>

                                </div>



                            </div>

                        </div>

                        <div class="card">
                            <div style="margin-top: 45px;">
                                <img src="images/2KG/Quantity & Quality Assured.png" alt="Low Rifill Price" style="border: 1px solid #ddd;border-radius: 10px;padding: 55px;" />

                            </div>


                            <div class="caption">

                                <div style="margin-left: 10px;">
                                Assured Quality & Quantity
                                </div>


                            </div>
                        </div>






                    </div>

                    <div class="col-lg-4" style="margin-left: 50px;">

                        <div class="card">
                            <div style="margin-top: 45px;">
                                <img src="images/2KG/Safe.png" alt="Low Rifill Price" style="border: 1px solid #ddd;border-radius: 10px;padding: 55px;" />

                            </div>

                            <div class="caption">

                                <div style="margin-left: 42px;">
                                Safe Connection
                                </div>


                            </div>
                        </div>

                        <div class="card">
                            <div style="margin-top: 45px;">
                                <img src="images/2KG/04.png"  style="border: 1px solid #ddd;border-radius: 10px;padding: 55px;" />

                            </div>

                            <div class="caption">

                                <div style="margin-left: 23px;">
                                Off The Shelf Pick-Up
                                </div>
                                <div style="margin-left: 5px;">
                                (New Connection and Refill)
</div>

                            </div>
                        </div>

                    </div>




                </div>

                <div class="col-lg-4">

                    <div class="vertical-menu">

                        <h4 style="font-family: Arial; color: #191919; font-size: 20px;">
                            Home LPG
                        </h4>
                        <a>12 KG LPG Cylinder for Home</a>
                        <a>4 KG Cylinder</a>
                        <a>2 KG Cylinder</a>
                        <a>LPG Leak Detector</a>
                        <a>Benefits of LPG for Cooking</a>
                        <a>Safety Tips Home</a>

                    </div>


                    <h4 style="font-family: Arial; color: #191919; font-size: 20px; margin-top: 25px;">
                        Select State for 2 KG Refill price
                    </h4>
                    <div style=" background-color: #eee; ">
                        <?php
                        include './dropdown.php';
                        ?>

                    </div>

                </div>


            </div>

            <div class="container" style="margin-top: 25px;">
                <div class="col-lg-8" >

                    <div style="margin-top: 25px; ">
                        <h4 style="font-family: Arial; color: #191919; font-size: 20px;">
                            Safety Features:
                        </h4>

                        <ul>
                            <li>ISI approval for both Cylinder and Cooktop

                            </li>
                            <li>Approved by Government of India’s Explosives department

                            </li>
                            <li>Periodic testing of Cylinders

                            </li>

                            <li>Mention of tare weight on Cylinder

                            </li>

                            <li>Mention of Batch and Serial No
                            </li>
                        </ul> 
                    </div>


                    <div style="margin-top: 25px;">
                        <h4 style="font-family: Arial; color: #191919; font-size: 20px;">
                            Advantages of RB Gas
                        </h4>

                        <ul>
                            <li>Low refill price

                            </li>
                            <li>Safe

                            </li>
                            <li>Assured quality and quantity



                            </li>

                            <li>Refundable Cylinder Deposit



                            </li>

                            <li>Minimal documentation


                            </li>

                            <li>Available off the shelf ( both new and refill connection)




                            </li>
                        </ul> 


                        <span style="font-family: Arial; color:#191919; font-size: 14px; ">
                            <b>Let us know about your requirement for new 2kg LPG cylinder with Cooktop by clicking on the <u><a href="" style="color: #000">Online Enquiry</a></u> or give us a missed call on 9833279568 for our expert team to get in touch with you.</b>


                        </span>
                    </div>



                    <h4 style="font-family: monospace; color: #191919; font-size: 20px; margin-top: 40px; margin-left: 15px;">
                        New Connection Details



                    </h4>
                    <div>
                        <span>
                            <?php
                            include './tabular2kg.php';
                            ?>
                        </span>
                    </div>





                </div>


            </div>
            <div style="margin-top: 18px;">

                <?php
                include './pract2.php';
                ?>

            </div>

        </div>








    </body>
</html>