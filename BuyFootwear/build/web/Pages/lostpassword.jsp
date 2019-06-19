<%-- 
    Document   : lostpassword
    Created on : Mar 29, 2017, 5:06:54 PM
    Author     : abc
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
     <jsp:include page="../Pages/MenuBar.jsp"></jsp:include>
    <body>
         <div class="container" id="passwordDialog">
                
             <form class="col-lg-10" action="../ForgetPaas" method="post">
                <div class="row">
                    <input type="text" name="mobileno"  placeholder="Enter register mobi. no." />
                </div>
                <div class="row">
                     <input type="password" name="mpassword"  placeholder="Enter new password"/>
                </div>
                <div class="row">
                    <input type="submit" value="updatepassword" >
                     <input type="reset" value="cancel" >
                </div>
               
            </form>
                
            </div>
    </body>
</html>
