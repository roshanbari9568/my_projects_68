<%-- 
    Document   : AdminproductPg
    Created on : Dec 30, 2016, 1:48:10 PM
    Author     : abc
--%>

<%@page import="BuyFootwear.Product"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
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
    <body>
        <div class="container-fluid" style="background-color: #009999; ">
            <div class="text-right" style="margin-right:100px; line-height: 45px; " >


                <!---Why we have used anchor tag here!  ---> 
                <a style="color: white; padding: 20px; font-size: large "></a>
                <a href="../Pages/AddToCart.jsp" style="color: white; padding: 20px; font-size: large ">Go to Cart</a>
            </div>

        </div>
        <%
            String type="";
           if(session.getAttribute("UserSession")==null)
           {
               response.sendRedirect("Login.jsp");
           }
           else
           {
              type=request.getParameter("type");
              
           }    
            
        %>
        <form action="../ShippingAddressController" method="post">
        <div class="container">
            <div class="page-header">
                <h1 style="color:#00c4cc; margin-left:460px;">Shipping<small> address</small></h1> 
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon ">
                            First Name:
                        </span>
                        <input type="text" name="fname" placeholder="Enter first name" class="form-control" required onkeypress='lettersOnly(event)'>
                        </div>
                </div>
                
                </div>
                    <div class="row">
                <div class="col-lg-6">
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon">
                            Last Name:
                        </span>
                        <input type="text" name="lname" placeholder="Enter category name" class="form-control" required onkeypress='lettersOnly(event)'>
                        </div>
                </div>
                
                </div>
             <div class="row">
                <div class="col-lg-6">
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon">
                            Contact-No.:
                        </span>
                        <input type="text" name="cno" placeholder="Enter Your Mobile No." class="form-control" required pattern="[0-9]{10}" maxlength="10" onkeypress='validate(event)'>
                        </div>
                </div>
                
                </div>
             
             <div class="row">
                <div class="col-lg-6">
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon">
                            Address:
                        </span>
                        <input type="text" name="address" placeholder="Enter your Address" class="form-control" required>
                        </div>
                </div>
                
                </div>
             <div class="row">
                <div class="col-lg-6">
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon">
                            Pincode:
                        </span>
                        <input type="text" name="pcode" placeholder="Enter your Zipcode" class="form-control" maxlength="6" required onkeypress='validate(event)'>
                        </div>
                </div>
                
                </div>
             <div class="row">
                <div class="col-lg-6">
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon">
                            State:
                        </span>
                        <input type="text" name="state" placeholder="Enter Your State:" class="form-control" required onkeypress='lettersOnly(event)'>
                        </div>
                </div>
                
                </div>
             <div class="row">
                <div class="col-lg-6">
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon">
                            Country:
                        </span>
                         <input type="text" name="cname" placeholder="Enter your country:" class="form-control" required onkeypress='lettersOnly(event)'>
                        </div>
                </div>
                
                </div>
            
            <div class="row">
                <div class="col-lg-2" >
                    <div class="form-inline">
                        <input type="submit" value="Proceed" class="form-control btn-primary"/>
                        <input type="reset" value="clear" class="form-control btn-info"/>
                        
                        </div>
                </div>
                
            </div>
        </div>
            <input type="hidden" name="type" value="<%=type %>"/>
        </form>
        
    </body>
</html>
