<%-- 
    Document   : ImagePage
    Created on : Jan 16, 2017, 6:32:49 PM
    Author     : abc
--%>

<%@page import="java.sql.Blob"%>
<%@page import="java.io.OutputStream"%>
<%@page import="BuyFootwear.BuyFootwearDatabase"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body>
      <% 
      
          BuyFootwearDatabase db=new BuyFootwearDatabase();
          int i=Integer.parseInt(request.getParameter("p_id"));
          OutputStream os;
          Blob img=db.getProductImageById(i);
          byte barray[]=img.getBytes(1,(int)img.length());
          response.setContentType("image/jpg");
          os=response.getOutputStream();
          os.write(barray);
          os.flush();
          os.close();
          
      
      
      
      %>
    </body>
</html>
