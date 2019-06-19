<%-- 
    Document   : ShowProduct
    Created on : Jan 5, 2017, 8:28:14 AM
    Author     : abc
--%>

<%@page import="java.util.ArrayList"%>
<%@page import="BuyFootwear.Product"%>
<%@page import="BuyFootwear.BuyFootwearDatabase"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <title>Show Product</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="../css/bootstrap.css"/>
        <link rel="stylesheet" href="../css/bootstrap.min.css"/>
    </head>
     <jsp:include page="../Pages/MenuBar.jsp"></jsp:include>
    <body>
        <div class="container">
            
     <div class="row">
         <% 
              String catname=request.getParameter("category");
              String pretype=request.getParameter("pretype");
             BuyFootwearDatabase pdb=new BuyFootwearDatabase();
          
           ArrayList<Product> list=  pdb.getShowProduct(catname, pretype);
             for(int i=0;i<list.size();i++)
         { %>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <img src="../Pages/ImagePage.jsp?p_id=<%out.println(list.get(i).getId());%>"  class="img img-responsive" style="height:200px;" alt="..."> 
      <div class="caption">
          <p style=" width: 11em ; overflow: auto;word-wrap: break-word;"><% out.println(list.get(i).getP_name());%></p>
        <p><%out.println(list.get(i).getS_price());%></p>
        
        <p><a href="../Pages/ProductDetail.jsp?p_name=<%=list.get(i).getP_name()%>" class="btn btn-primary" role="button">Buy It!</a></p>
      </div>
    </div>
  </div>
  <% } %>
</div>
        </div>
        
    </body>
</html>
