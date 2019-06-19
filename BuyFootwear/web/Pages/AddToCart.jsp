<%-- 
    Document   : AddToCart
    Created on : Jan 11, 2017, 6:11:05 PM
    Author     : abc
--%>

<%@page import="java.util.ArrayList"%>
<%@page import="BuyFootwear.Product"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="../css/bootstrap.css"/>
        <link rel="stylesheet" href="../css/bootstrap.min.css"/>

    </head>



    <jsp:include page="../Pages/MenuBar.jsp"></jsp:include>
        <body>
            <div class="container">


                <div class="page-header"> 
                    <%
                    ArrayList<Product> list = null;
                    int size=0;
                    if (getServletContext().getAttribute("cart") != null) {
                    list = (ArrayList<Product>) getServletContext().getAttribute("cart");
                    size=list.size();
                    }
                    
                    
                   
                    %>
                    <div class="row">
                        <div class="col-lg-8">
                            <h1> You have <%=size %> product in your cart<span class="glyphicon glyphicon-shopping-cart" style="color: #006666"></span> </h1>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-inline" style="margin-top: 30px;">
                                <a href="../Pages/Home.jsp" class="btn btn-primary" role="button">Continue Shopping</a>
                                <a href="../Pages/ShippingAddress.jsp?type=AddToCart" class="btn btn-default" role="button"> Proceed to checkout!</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-2"> <span> Image</span></div>
                    <div class="col-lg-2"> <span> Product Name</span></div>
                    <div class="col-lg-1"> <span> Quantity</span></div>
                    <div class="col-lg-1"> <span> Price</span></div>
                    <div class="col-lg-1"> <span>Total</span></div>
                    <div class="col-lg-8">

                    <%

                        double subtotal = 0;
                        double salestax = 0;
                        double shippingtotal = 0;
                        
                        if (getServletContext().getAttribute("cart") != null) {
                            salestax = 20.5;
list = (ArrayList<Product>) getServletContext().getAttribute("cart");
                            

                           
                            for (int i = 0; i < list.size(); i++) {
                                double total = list.get(i).getQuantity() * list.get(i).getS_price();
                                 salestax = salestax * list.get(i).getQuantity();
                                subtotal = subtotal + total;


                    %>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="thumbnail">
                                <img src="../Pages/ImagePage.jsp?p_id=<%=list.get(i).getId()%>" class="img img-responsive" alt=""/>
                            </div>
                        </div>
                        <div class="col-lg-2" style="margin-left:5px;"> <span> <% out.println(list.get(i).getP_name());%></span></div>
                        <div class="col-lg-1" style="margin-left:75px; "> <span> <% out.println(list.get(i).getQuantity());%></span></div>
                        <div class="col-lg-1" style="margin-left:13px; "> <span><% out.println(list.get(i).getS_price());%></span></div>
                        <div class="col-lg-1" style="margin-left:35px; "> <span> <% out.println(list.get(i).getQuantity() * list.get(i).getS_price());%></span></div>
                        <div class="col-lg-1" style="margin-left:10px; ">
                            <a href="../DeleteProductToAddtoCart?pid=<%=i%>" >Delete</a>
                        </div>



                    </div>
                    <%}
                        }
                        else
                        {
                            
                        }
                        shippingtotal = subtotal + salestax;
                    %>
                </div>

                <div class="col-lg-4">
                    <h3 style="color: #122b40"><b>Order Summary</b></h3>
                    <div class="row" >
                        <div class="row">
                            <h3>
                                <span class="text-left" >Subtotal</span>
                                <span class="text-right" style="margin-left: 240px;"><%out.println(subtotal);%></span>
                            </h3>

                        </div>
                        <div class="row">
                            <h3>
                                <span class="text-left">Sales Tax</span>
                                <span class="text-right" style="margin-left: 235px;"><%out.println(salestax);%></span>
                            </h3>

                        </div>
                        <div class="row">
                            <h3>
                                <span class="text-left">Shipping Total</span>
                                <span class="text-right" style="margin-left: 180px;"><%out.println(shippingtotal);%></span>
                            </h3>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
