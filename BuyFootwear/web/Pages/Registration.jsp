<%-- 
    Document   : AdminproductPg
    Created on : Dec 30, 2016, 1:48:10 PM
    Author     : abc
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="../css/bootstrap.css"/>
        <link rel="stylesheet" href="../css/bootstrap.min.css"/>
        <script src="../js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="../js/Validation.js" type="text/javascript"></script>

        <style> 
            .row{
                margin-bottom: 10px;

            }
            .input-group-addon{

                width:200px;
            }

        </style>
    </head>
    <jsp:include page="../Pages/MenuBar.jsp"></jsp:include>
    <body>
        <div class="page-header">
            <h1 style="color:#006666; margin-left:100px;" >Create Your Account!</h1>
        </div>



        <form action="../RegistrationServlet" method="post">


            <div class="row" style="margin-left: 6px;">
                <div class="col-lg-6">
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon ">
                            First Name:
                        </span>
                        <input type="text" name="fname" placeholder="Enter First name" class="form-control" area-describedby="sizing-addon1" required>
                    </div>
                </div>

            </div>
            <div class="row" style="margin-left: 6px;">
                <div class="col-lg-6">
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon">
                            Last Name:
                        </span>
                        <input type="text" name="lname" placeholder="Enter last name" class="form-control" area-describedby="sizing-addon1" required="">
                    </div>
                </div>

            </div>

            <div class="row" style="margin-left: 6px;">
                <div class="col-lg-6">
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon">
                            Mobile No:
                        </span>
                        <input type="text" name="mobileno" placeholder="Enter mobile no." class="form-control" area-describedby="sizing-addon1" required onkeypress='validate(event)'>
                    </div>
                </div>
            </div>


            <div class="row" style="margin-left: 6px;">
                <div class="col-lg-6">
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon">
                            Password:
                        </span>
                        <input type="password" name="password" placeholder="Enter Security Keys." class="form-control" area-describedby="sizing-addon1" required>
                    </div>

                </div>

            </div>
            
            
            <div class="row" style="margin-left: 6px;">
                <div class="col-lg-2" >
                    <div class="form-inline">
                        <input type="submit" vlaue="Proceed" class="form-control btn-primary" >
                        <input type="reset" vlaue="Clear" class="form-control btn-info" >
                    </div>
                </div>
                
            </div>









        </form>
    </body>
</html>