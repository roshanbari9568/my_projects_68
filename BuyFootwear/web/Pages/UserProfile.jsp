<%-- 
    Document   : UserProfile
    Created on : Mar 7, 2017, 6:09:10 PM
    Author     : abc
--%>
<%@page import="BuyFootwear.ProductReport"%>
<%@page import="BuyFootwear.Product"%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@page import="java.util.ArrayList"%>
<%@page import="BuyFootwear.BuyFootwearDatabase"%>


<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
         <link rel="stylesheet" href="../css/bootstrap.css"/>
        <link rel="stylesheet" href="../css/bootstrap.min.css"/>
    </head>
    <jsp:include page="../Pages/MenuBar.jsp"></jsp:include>
    <body>
        <div class="container">
            <div class="row" style="margin-top: 10px; float:right;">
                <a class="btn btn-danger" href="../UserLogoutSession">
              Logout  
                </a>
            
        </div>
            <div class="row" style="margin-top: 30px;">
                <blockquote>
                    User Order History!
                </blockquote>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Order No.</th>
                            <th>Product Detail</th>
                            <th>Quantity</th>
                            <th>Price </th>
                            <th>Total</th>
                            <th>Net Payable</th>
                        </tr>
                    </thead>
                    <tbody>
                       <%
                           BuyFootwearDatabase bfd=new BuyFootwearDatabase();
                           String u=(String) session.getAttribute("UserSession");
                           ArrayList<ProductReport> list= bfd.getOrderHistoryByUserName(u);
                           for(ProductReport i:  list) {
                               
                           
                       %>
                       <tr>
                           <td><%= i.getOrder() %></td>
                           <td><%= i.getP_name() %></td>
                           <td><%= i.getQuantity() %></td>
                           <td><%= i.getPrice() %></td>
                           <td><%= i.getTotal()%></td>
                           <td><%= i.getN_payable() %></td>
                       </tr>
                   <% }%>
                    </tbody>
                </table>
                
                </div>
        </div>
    </body>
</html>
