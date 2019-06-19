<%-- 
    Document   : ShowCategory
    Created on : Jan 3, 2017, 7:02:27 PM
    Author     : abc
---%>
 
<%@page import="BuyFootwear.Product"%>
<%@page import="java.util.ArrayList"%>
<%@page import="BuyFootwear.BuyFootwearDatabase"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
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
               <div class="row">
               <%--  Link-column  --%>
               <div class="col-lg-2" style="border-right: solid 1px #000; " >
                <ul class="nav nav-stacked"> 
          <%
             
             String catname=request.getParameter("category");
             BuyFootwearDatabase pdb=new BuyFootwearDatabase();
          
           ArrayList<Product> list=  pdb.getPreType(catname);
           int i1=0,i2=0,i3=0,i4=0 , i5=0,i6=0;
           for(int i=0;i<list.size();i++)
           {
              i1=list.get(0).getId();
              i2=list.get(1).getId();
             i3=list.get(2).getId();
              i4=list.get(3).getId();
              i5=list.get(4).getId();
              i6=list.get(5).getId();
           
          %>
                 
                       <%out.println("<li role='presentation' class='active'><a href='../Pages/ShowProduct.jsp?pretype="+list.get(i).getPretype()+"&category="+catname+" '>"+list.get(i).getPretype()+"</a></li>");%> 
                         <% }%>
</ul>
                  
               </div>
                   
                    <%--  Content-column  --%>
                    <div class="col-lg-10">
                       
                           <div class="row"> <h1 class="page-header">Category</h1></div>
                           <div class="row">
                               <div class="col-lg-6">
                                   <a href="../Pages/ShowProduct.jsp?pretype=<%=list.get(0).getPretype()%>&category=<%=catname %>"><img src="../Pages/ImagePage.jsp?p_id=<%=i1%>" style="height:250px; width: 800px; " class="img-responsive"  alt=""/>
                                   
                                   </a>
                                   
                               </div>
                               <div class="col-lg-6">
                                   <a  href="../Pages/ShowProduct.jsp?pretype=<%=list.get(1).getPretype()%>&category=<%=catname %>"><img class="img-thumbnail" src="../Pages/ImagePage.jsp?p_id=<%=i2%>" style="height:125px; width: 250px; " alt=""/></a>
                                   <a  href="../Pages/ShowProduct.jsp?pretype=<%=list.get(2).getPretype()%>&category=<%=catname %>"><img class="img-thumbnail" src="../Pages/ImagePage.jsp?p_id=<%=i3%>" style="height:125px; width: 250px; " alt=""/></a>
                               </div>
                           </div>
                           <div class="row" style="margin-top: 25px;">
                               <div class="form-inline">
                                   <a  href="../Pages/ShowProduct.jsp?pretype=<%=list.get(3).getPretype()%>&category=<%=catname %>"><img src="../Pages/ImagePage.jsp?p_id=<%=i4%>" style="height:125px; width:250px; "   alt=""/></a>
                                   <a  href="../Pages/ShowProduct.jsp?pretype=<%=list.get(4).getPretype()%>&category=<%=catname %>"><img src="../Pages/ImagePage.jsp?p_id=<%=i5%>" style="height:125px; width: 250px; " alt=""/></a>
                                   <a  href="../Pages/ShowProduct.jsp?pretype=<%=list.get(5).getPretype()%>&category=<%=catname %>"><img src="../Pages/ImagePage.jsp?p_id=<%=i6%>" style="height:125px; width: 250px; " alt=""/></a>
                               </div>
                           </div>
                      
                    </div>
                   
              </div>         
      </div>
      </body>
</html>
