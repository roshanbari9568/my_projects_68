<%-- 
    Document   : OrderStatusReport
    Created on : Mar 15, 2017, 3:29:26 PM
    Author     : abc
--%>

<%@page import="BuyFootwear.OrdersReport"%>
<%@page import="java.util.ArrayList"%>
<%@page import="BuyFootwear.BuyFootwearDatabase"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
        <style>
            .statusColumn
            {
                height: 300px;
            }
            #created
            {
                background-color: #006666;
                text-align: center;
                color: white;
            }
            #Dispatched
            {
                background-color: #46b8da;
                text-align: center;
                color: white;
            }
            #Delivered
            {
                background-color: #0000ff;
                text-align: center;
                color: white;
            }
            #Cancelled
            {
                background-color: #cc0000;
                text-align: center;
                color: white;
            }




        </style>
    </head>
    <jsp:include page="../Pages/AdminMenubar.jsp"/>
    <body>
        <div class="container">
            <div class="page-header">
                <h1>
                    Order Status Report
                </h1>
            </div>
             <%
                            BuyFootwearDatabase fbd=new BuyFootwearDatabase();
                            ArrayList<OrdersReport> b=fbd.getOrderStatus();
                            
                            %>
            <div class="row">
                <div class="col-lg-3 statusColumn" id="created">
                   <%out.println(b.get(0).getOrderStatus());%> <%out.println(b.get(0).getCount());%>
                </div>
                <div class="col-lg-3 statusColumn"  id="Dispatched">
                   <%out.println(b.get(1).getOrderStatus());%><%out.println(b.get(1).getCount());%>
                </div>
                <div class="col-lg-3 statusColumn" id="Delivered">
                   <%out.println(b.get(2).getOrderStatus());%><%out.println(b.get(2).getCount());%>
                </div>
                <div class="col-lg-3 statusColumn" id="Cancelled">
                     <%out.println(b.get(3).getOrderStatus());%><%out.println(b.get(3).getCount());%>
                </div>
            </div>

            <div class="row">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>
                                ORDER_ID
                            </th>
                            <th>
                                CUSTOMER_NAME
                            </th>
                            <th>
                                TOTAL_PAY
                            </th>
                            <th>
                                ORDER_STATUS
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                            <%
                            BuyFootwearDatabase bfd=new BuyFootwearDatabase();
                            ArrayList<OrdersReport> n=bfd.getOrderStatusDetail();
                            for(OrdersReport o:n)
                            {
                            
                            %>
                            <tr>
                                <td>
                                    <%out.println(o.getO_id());%>
                                </td>
                                <td>
                                      <%out.println(o.getC_id());%>
                                </td>
                                <td>
                                      <%out.println(o.getN_payable());%>
                                </td>
                                <td>
                                      <%out.println(o.getOrderStatus());%>
                                </td>
                            </tr>
                            <%}%>
                        </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
