<%-- 
    Document   : ProductDetail
    Created on : Jan 5, 2017, 9:00:21 AM
    Author     : abc
--%>

<%@page import="BuyFootwear.Product"%>
<%@page import="BuyFootwear.BuyFootwearDatabase"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="../css/bootstrap.css"/>
        <link rel="stylesheet" href="../css/bootstrap.min.css"/>

        <style>
            .sizebox{
                
               height: 20px; width: 40px;
               background-color: gray;
               color: #ffffff;
               margin: 5px;
              
            }
            
            .sizebox1{
                
                height: 30px; width: 65px;
                background-color: gray;
                color: #ffffff;
                margin: 5px;
            }
           
            
            
        </style>
    </head>
    <jsp:include page="../Pages/MenuBar.jsp"></jsp:include>
    <body>
        <%
            BuyFootwear.BuyFootwearDatabase buy=new BuyFootwearDatabase();
            
            String a=request.getParameter("p_name");
            
            Product p=buy.getProductDetailById(a);
            
        %>
        <div class="container">
            <div class=" page-header" >
                <h1 style="color: #28a4c9 "><%out.println(p.getP_name());%></h1>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <img src="../Pages/ImagePage.jsp?p_id=<%=p.getId()%>" alt="" class="img-responsive"/>
                </div>
           <form action="../AddToCartController" method="get">     
                <div class="col-lg-3">
                    
                    <div style="color: #204d74; font-size:  large;  ">size</div>
                    <div class="form-inline form-group">
                      
                      <%
                      
                      for(int size: p.getSizeList())
                      {
                          out.print(" <div class='sizebox'> <input type='radio' name='s1' value='"+size+"' required/><span style='margin-left: 5px;  text-align: center; font-size: medium;'>"+size+"</span></div>");
                      }
                      %>
                       
                        
                    </div>
                   
                    <div class="row"><b>Quantity</b><input type="number" name="quantity" required min="1" max="9"/></div>
                   
                    <input type="hidden" name="pid" value="<%=p.getId() %>"/>
                          <input type="hidden" name="prize" value="<%=p.getS_price()%>"/>
                                <input type="hidden" name="pname" value="<%=p.getP_name()%>"/>
                </div>
                <div class="col-lg-3">
                    
                    <div style="color: #204d74; font-size:30px; "><b>You have to pay :</b></div>
                    
                    <div style="color: #204d74; font-size:45px; "><%out.println(p.getS_price());%></div>
                    <button type="submit" name="BuyFootwear" value="AddToCart" class="btn btn-warning btn-lg" style="background-color: #ff9900; width: 200px;  ">ADD TO CART</button>
                    
                    <div>
                        <span class="glyphicon glyphicon-time " style=" font-size: 20px; color: #28a4c9; line-height: 15px; text-align: center; margin-top: 22px;  margin-bottom: 10px;" ><a href="#"><small style="font-size:15px; color: #1b6d85; text-align:left;">Order by 9 AM Eastern, ships same day!</small></a></span>
                    </div>
                    
                    <div>
                        <ul class="nav nav-stacked" >
                        <li>
                            
                            <span class="glyphicon glyphicon-ok" style="margin-right: 10px; color:#999999; "></span>
                            <span>Free Shipping</span>
                        </li>
                        
                        <li>
                            <span class="glyphicon glyphicon-ok" style="margin-right: 10px; color:#999999; "></span>
                            <span>Free Exchanges</span>
                        </li>
                        
                        <li>
                            <span class="glyphicon glyphicon-ok" style="margin-right: 10px; color:#999999; "></span>
                            <span>Good Quality</span>
                        </li>
                        
                        <li>
                            <span class="glyphicon glyphicon-ok" style="margin-right: 10px; color:#999999; "></span>
                            <span>Free Shipping</span>
                        </li>
                        
                        <li>
                            <span class="glyphicon glyphicon-ok" style="margin-right: 10px; color:#999999; "></span>
                            <span>100% Price</span>
                            
                        </li>
                        
                        <li>
                            <span class="glyphicon glyphicon-ok" style="margin-right: 10px; color:#999999; "></span>
                            <span>Guarantee</span>
                        </li>
                        
                        </ul>
                        <button type="submit" name="BuyFootwear" value="Purchase" class="btn btn-warning btn-lg" style="background-color: #ff9900; width: 200px;  ">PURCHASE</button>
                                    
                    </div>
                </div>
</form>

            </div>
            <div class="row">
                <div class="col-lg-6">
                    <p><b><%out.println(p.getP_desc());%></b></p>
                </div>
                    
                    
            </div>
            
        </div>

    </body>
</html>
