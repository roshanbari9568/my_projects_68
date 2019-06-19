<%@page import="java.util.ArrayList"%>
<%@page import="BuyFootwear.Product"%>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="../css/bootstrap.css"/>
        <link rel="stylesheet" href="../css/bootstrap.min.css"/>
        <style>
/* Style The Dropdown Button */
.dropbtn {
    background-color: white;
   
    padding: 10px 15px;
    margin-bottom: -1px;
    font-size:14px;
    line-height: 1.42857143;
    border: none;
    cursor: pointer;
    border: 1px solid transparent;
    border-radius: 4px 4px 0 0;
    color:#265a88 ; 
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

</style>
    </head>
    <body style="margin: 0;padding: 0;">

        <div class="container-fluid" style="background-color: #00c4cc; ">
            <div class="text-right" style="margin-right:100px; line-height: 45px; " >
                <% 
                    
                    String u=(String) session.getAttribute("UserSession"); 
                  if(u!=null)
                  {
                      out.println("  <a href='../Pages/UserProfile.jsp' style='color: white; padding: 20px; font-size: large '>Hello "+u+"</a> ");
                  }
                else
                  {
                  
                       out.println("  <a href='../Pages/Login.jsp' style='color: white; padding: 20px; font-size: large '>Hello Sign in </a> ");
                  }
                
                
                
                %>
                
              
                <a href="HelpLink.jsp" style="color: white; padding: 20px; font-size: large ">Help</a>
            </div>

        </div>
        <div class="container " style=" padding-top: 10px; padding-bottom: 10px;  ">
            <div class="row" style="border-bottom: solid 1px black;" >
                <div class="col-lg-2"> 
                    <a href="../Pages/Home.jsp">
                    <img src="../Images/Roshanlogo.jpg" alt="" class="img-responsive"/></a>
                   </div>

                <div class="col-lg-2" style="padding:20px; text-align: center;">
                    
                    <img src="../Images/Finally.png" alt="" class="img-responsive"/>
                </div>
                <div class="col-lg-4">
                    <div class="row" style="margin-top: 25px;">
                        <form action="../Search" method="get">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for..." name="searchbtn">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">Go!</button>
                            </span>
                        </div>
                        </form>
                    </div></div>
                <div class="col-lg-2">
                </div>
                <div class="col-lg-2">
                    <%
                 ArrayList<Product>list= ( ArrayList<Product>)  getServletContext().getAttribute("cart");
                 int count=0;
                 if(list!=null)
                 {
                     count=list.size();
                 }
                 else
                 {
                     count=0;
                 }
                    %>
                    <i style="line-height: 80px; font-size:x-large;  "> <a href="../Pages/AddToCart.jsp"><span class="glyphicon glyphicon-shopping-cart " style="font-size: xx-large;"><span class="badge"><%=count%></span><span class="badge"></span> Cart </span> </a> </i>                 </div>
            </div>
            <div class="row">
                <ul class="nav nav-tabs">
                    
                    <li role="presentation" class="active"><a href="../Pages/Home.jsp">HOME</a></li>
  <li role="presentation"><a href="../Pages/ShowCategory.jsp?category=Men">MENS</a></li>
  <li role="presentation"><a href="../Pages/ShowCategory.jsp?category=Women">WOMENS</a></li>
   <li role="presentation"> <div class="dropdown">
  <button class="dropbtn">KIDS</button>
  <div class="dropdown-content">
    <a href="../Pages/ShowCategory.jsp?category=Boys">Boys</a>
 <a href="../Pages/ShowCategory.jsp?category=Girls">Girls</a>
  </div>
       </div></li>

  

  
       <li role="presentation"><a href="../Pages/Home.jsp">BRANDS</a></li>
       <li role="presentation"><a href="../Pages/Home.jsp">SALE</a></li>
       <li role="presentation"><a href="../Pages/Home.jsp">MUCH MORE!</a></li>
  
</ul>
            </div>
        </div>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/bootstrap.js"></script>

    </body>
</html>
