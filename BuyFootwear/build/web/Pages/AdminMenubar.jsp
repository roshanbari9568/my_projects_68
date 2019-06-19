<%@page import="java.util.ArrayList"%>
<%@page import="BuyFootwear.Product"%>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="../css/bootstrap.css"/>
        <link rel="stylesheet" href="../css/bootstrap.min.css"/>
    </head>
    <body style="margin: 0;padding: 0;">

        <div class="container-fluid" style="background-color: #006666; ">
            <div style="margin-left:1200px; line-height: 45px; " >


                <!---Why we have used anchor tag here!  ---> 
                <a style="color: white; padding: 20px; font-size: large "></a>
                
                            


                <!---Why we have used anchor tag here!  ---> 
                
                <a href="../Pages/Home.jsp" style="color: white; font-size: large ">Go User side</a>
            

            </div>

        </div>
        <div class="container " style=" padding-top: 10px; padding-bottom: 10px;  ">
            <div class="row" style="border-bottom: solid 1px black;" >
                <div  style="margin-top: 20px; margin-bottom: 20px; font-size: large">
                    Administrator Side:
                </div>
                </div>


                <div class="row">
                    <ul class="nav nav-tabs">

                        <li role="presentation" class="active"><a href="../Pages/AdminproductPg.jsp">Add Product</a></li>
                        <li role="presentation"><a href="../Pages/SalesTable.jsp">Sales Detail</a></li>
                        <li role="presentation"><a href="../Pages/OrderStatusReport.jsp">Order Report</a></li>
                        

                    </ul>
                </div>
            </div>
            <script src="../js/bootstrap.min.js"></script>
            <script src="../js/bootstrap.js"></script>
    </body>
</html>
