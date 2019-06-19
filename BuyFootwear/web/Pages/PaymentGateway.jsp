<%-- 
    Document   : PaymentGateway
    Created on : Feb 3, 2017, 5:13:15 PM
    Author     : abc
--%>


<%@page import="java.util.Calendar"%>
<%@page import="java.sql.Date"%>
<%@page import="java.util.ArrayList"%>
<%@page import="BuyFootwear.ShippingAddressModel"%>
<%@page import="BuyFootwear.Product"%>
<%@page import="BuyFootwear.BuyFootwearDatabase"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Payment Gateway</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="../css/bootstrap.css"/>
        <link rel="stylesheet" href="../css/bootstrap.min.css"/>
        <script src="../js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="../js/Validation.js" type="text/javascript"></script>
        <script>
            function ShowDialog() {
                $("#card").show();
            }
        </script>
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
            double subtotal = 0;
            double salestax = 20.5;
            double shippingtotal = 0;

            ShippingAddressModel sam = (ShippingAddressModel) getServletContext().getAttribute("ShippingAddress");
            if (sam.getType().equals("purchase")) {
                Product p = (Product) getServletContext().getAttribute("Purchaser");
                subtotal = p.getS_price() * p.getQuantity();
                salestax = salestax * p.getQuantity();
                 shippingtotal = subtotal + salestax;

            } else {

                ArrayList<Product> list = null;
                if (getServletContext().getAttribute("cart") != null) {
                    salestax = 20.5;

                    list = (ArrayList<Product>) getServletContext().getAttribute("cart");

                    for (int i = 0; i < list.size(); i++) {
                        double total = list.get(i).getQuantity() * list.get(i).getS_price();
                        salestax = salestax * list.get(i).getQuantity();
                        subtotal = subtotal + total;

                    }
                    shippingtotal = subtotal + salestax;
                }
            }
        %> 

        <form action="../PaymentController" method="post">
            <div class="container">
                <div class="page-header"><h1>Select payment method</h1></div>
                <div class="row">
                    <div class="col-lg-3">
                        Credit Card!<input type="radio" name="b1" id="1" value="creditcard"  class="radiobutton" required onclick="ShowDialog();">
                    </div>

                    <div class="col-lg-3">
                        Debit Card!<input type="radio" name="b1" id="2" value="debitcard"  class="radiobutton" required onclick="ShowDialog();">
                    </div>

                    <div class="col-lg-3">
                        Cash ON Delivery!<input type="radio" name="b1" id="3" required value="cashondelivery" onclick="this.form.submit()">
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-4" id="card" style="display:none">                     
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon">
                                Card No :
                            </span>
                            <input type="text" name="acc_no" placeholder="Enter Card No." class="form-control" area-describedby="sizing-addon1" maxlength="16" required onkeypress='validate(event)'>
                        </div>

                        <div class="input-group input-group-lg" style="margin-top: 10px;">
                            <span class="input-group-addon">
                                CVC NO. :
                            </span>
                            <input type="text" name="cvc_no" placeholder="Enter CVC No." class="form-control" area-describedby="sizing-addon1" maxlength="3" required onkeypress='validate(event)'>
                        </div>
                        <div class="input-group input-group-lg" style="margin-top: 10px;">
                            <span class="input-group-addon">
                                Expiry Date:
                            </span>
                            <input type="text" name="expiry_date" pattern="[0-9]{2}.[0-9]{4}" placeholder="02.2017"  class="form-control" area-describedby="sizing-addon1" required onkeypress='validate(event)'>
                        </div>
                        <div class="input-group"style="margin-top: 10px;" ><input type="submit" name="pay" value="Pay!" class="btn btn-success"></div>
                    </div>
                    <div class="col-lg-3 col-lg-offset-5" style="float: right;">
                        <h3 style="color: #122b40"><b>Order Summary</b></h3>
                        <div class="row" >
                            <div class="row">

                                <h3>
                                    <span class="text-left">Subtotal</span>
                                    <span class="text-right" style=" margin-left: 88px;"><%out.println(subtotal);%></span>
                                </h3>

                            </div>
                            <div class="row">
                                <h3>
                                    <span class="text-left">Sales Tax</span>
                                    <span class="text-right" style="margin-left: 88px;"><%=salestax%></span>
                                </h3>

                            </div>
                                <div class="row">
                                <h3>
                                    <span class="text-left">Shipping Total</span>
                                    <span class="text-right" style="margin-left: 28px;"><%out.println(shippingtotal);%></span>
                                </h3>

                                <input type="hidden" name="subtotal" value="<%out.println(subtotal);%>"/>
                                <input type="hidden" name="salestax" value="<%out.println(salestax);%>"/>
                                <input type="hidden" name="netpayable" value="<%out.println(shippingtotal);%>"/>
                            </div>
                         <div class="form-inline">
                             <br>
                        
                        </div>
                        </div>
                    </div>

                </div>

            </div>
        </form>
    </body>
</html>
