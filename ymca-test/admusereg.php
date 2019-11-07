<!DOCTYPE html>
<html>
    <head>
        <title>Registration Page</title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>


        <style> 
            .row{
                margin-bottom: 10px;

            }
            .input-group-addon{

                width:200px;
            }

        </style>
    </head>


    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top" style="margin-top: 20px; margin-left: 25px; margin-right: 25px; background-color: #269abc">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" style="color: white;">YMCA ADMINISTRATION</a>
                </div>



            </div>
        </nav>




        <form action="registrationymca.php"  method="post" style="margin-top: 100px; margin-left: 25px;">

            <div class="page-header">
                <h4 style="color: #1b6d85; margin-left: 145px;" >YMCA admin registration</h4>


            </div>

            <div align="center">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon ">
                                Your  Name:
                            </span>
                            <input type="text" name="username" placeholder="Enter Your name" class="form-control" area-describedby="sizing-addon1" required>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-4">
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon ">
                                Your Identity:
                            </span>
                            <input type="text" name="aadhar" placeholder="Enter Your ID no." class="form-control" area-describedby="sizing-addon1" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon">
                                Your EmailId:
                            </span>
                            <input type="text" name="email" placeholder="Your Email Id." class="form-control" area-describedby="sizing-addon1" required onkeypress='validate(event)'>
                        </div>
                    </div>
                </div>



          

            <div class="row">
                <div class="col-lg-4">
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon">
                            Your Mobile:
                        </span>
                        <input type="text" name="phone" placeholder="Enter mobile no." class="form-control" area-describedby="sizing-addon1" required onkeypress='validate(event)'>
                    </div>
                </div>
            </div>


        
        <div class="row" st>
            <div class="col-lg-4">
                <div class="input-group input-group-lg">
                    <span class="input-group-addon">
                        ur Password:
                    </span>
                    <input type="password" name="password" placeholder="Enter your password" class="form-control" area-describedby="sizing-addon1" required="">
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
                
                
                
                <div class="row">
            <div class="col-lg-2" >
                
                <a href="ymcalogin.php">Already User! Click here</a>
                
            </div>



        </div>

        <div>
            
        </div>







    </div>
</form>


</body>
</html>