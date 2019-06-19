<%-- 
    Document   : DeliverProductStatus
    Created on : Mar 23, 2017, 8:41:04 PM
    Author     : abc
--%>

<%@page import="BuyFootwear.Product"%>
<%@page import="BuyFootwear.ShippingAddressModel"%>
<%@page import="BuyFootwear.DeliverProductStatus"%>
<%@page import="BuyFootwear.BuyFootwearDatabase"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="../js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="../css/bootstrap.css"/>
        <link rel="stylesheet" href="../css/bootstrap.min.css"/>
        <title>Deliver Product Status</title>
    </head>
    <body>
        <div class="container">
            <div class="row" style="background-color: #cccccc; line-height:40px; ">

<%
    BuyFootwearDatabase bfd=new BuyFootwearDatabase();
    
   DeliverProductStatus dps= bfd.GetDeliverProductStatus();
   dps= bfd.getDeliverShipping(dps);
    dps=bfd.getProduct(dps);
%>
                <span class="input-lg " style="margin-left: 40px;">
                    BUY FOOTWEAR  <small>Shopping Reciept</small>
                </span>
            </div>
            <div class="row" style="background-color:#ffffff ">
                <div style="line-height: 25px; " >

                    <div  style="  font-size:25px; color:#333333; float: right; "  >
                        <b>Order  no#</b><%out.println(dps.getOrderId());%>

                    </div>
                </div>


                <div class="row" style="border-top: solid 1px #000; margin-top: 20px;">
                    <div class="col-lg-4" style="border-top: solid 1px red; ">

                        Shipping Address:<%
                        ShippingAddressModel sam=dps.getSam();
                        out.println(sam.getFname()+" "+sam.getLname()+""+sam.getCno()+""+sam.getPcode()+""+sam.getState()+""+sam.getAddress());
                        %>
                    </div>
                    <div class="col-lg-8">

                        Payment Through:<%out.println(dps.getPaymentThrough());%>
                    </div>
                </div>




                <div class="row" style="border-bottom: solid 1px grey; margin-top: 20px;">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>quantity</th>
                                <th>Price</th>
                                <th>Total Paid</th>

                            </tr>
                        </thead>
                        <tbody>
                            <%
                        for(Product p:dps.getList())
                        {
                            %>
                            <tr>
                                <th><%out.println(p.getP_name());%></th>
                                <th><%out.println(p.getQuantity()); %></th>
                                <th><%out.println(p.getS_price());%></th>
                                <th><%out.println(p.getTotal());%></th>

                            </tr>
                            <%
                            
                        }
                            %>
                        </tbody>
                    </table>
                        <button class="btn-primary" value="Print" type="submit" onclick="window.print();" >Print</button>
                </div>
            </div>
        </div>
    </body>
</html>
