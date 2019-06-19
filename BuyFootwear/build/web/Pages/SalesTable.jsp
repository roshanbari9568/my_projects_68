<%-- 
    Document   : SalesTable
    Created on : Mar 9, 2017, 4:54:02 PM
    Author     : abc
--%>

<%@page import="java.util.ArrayList"%>
<%@page import="BuyFootwear.ProductReport"%>
<%@page import="BuyFootwear.BuyFootwearDatabase"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" href="../css/bootstrap.css"/>
        <link rel="stylesheet" href="../css/bootstrap.min.css"/>
        
    </head>
     <jsp:include page="../Pages/AdminMenubar.jsp"/>
    <body>
        <div class="container">
            <div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                      <%
                           BuyFootwearDatabase bfd=new BuyFootwearDatabase();
                           String u=(String) session.getAttribute("UserSession");
                           ArrayList<ProductReport> list= bfd.getProductReport();
                           for(ProductReport i:  list) {
                               
                           
                       %>
                       <tr>
                           <td><%= i.getP_name()%></td>
                           <td><%= i.getQuantity()%></td>
                           <td><%= i.getTotal()%></td>
                           
                       </tr>
                   <% }%>
                        
                        
                        
                        
                        
                    </tbody>
                </table>
                
                
                        
                                                    
                    
                    
                       
                    
                
                
            </div>
            </div>
    </body>
</html>
