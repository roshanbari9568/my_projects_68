<%-- 
    Document   : AdminproductPg
    Created on : Dec 30, 2016, 1:48:10 PM
    Author     : abc
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
         <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/bootstrap.css"/>
        <link rel="stylesheet" href="../css/bootstrap.min.css"/>
        <script src="../js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="../js/Validation.js" type="text/javascript"></script>
        <style> 
            .row{
                margin-bottom: 10px;
                
            }
            .input-group-addon{
                
                width:200px;
            }
            #passwordDialog
            {
                display: none;
            }
           
            
        </style>
    </head>
    <jsp:include page="../Pages/MenuBar.jsp"></jsp:include>
    <body>
        <div class="container">
        <div class="page-header">
        <h1 style="color: #006666; margin-left:100px; " >Login User!</h1>
        </div>
        
            
        
       
             <form action="../LoginServlet" method="post">
            <div class="row">
                <div class="col-lg-4">
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon ">
                        Mobile No.:
                        </span>
                        <input type="text" name="mobileno" placeholder="Enter mobile no." class="form-control" required onkeypress='validate(event)'>
                        </div>
                </div>
                
                </div>
                    
                
                
        <div class="row">
                <div class="col-lg-4">
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon">
                            Password:
                        </span>
                        <input type="password" name="password" placeholder="Enter Security Key" class="form-control" required>
                        </div>
                </div>
                
                </div>
             
             
             
             
             
             
            <div class="col-lg-3" >
            <div class="row">
                
                    <div class="form-inline">
                        <input type="submit" value="Proceed" class="form-control btn-primary"/>
                        <input type="reset" value="clear" class="form-control btn-info"/><br><br>
                      
                       
                        
                        
                        </div>
                </div>
            </div>    
            
                </form>  
            <div class="row">
                 <div >
                     <b><i><a href="../Pages/lostpassword.jsp" onclick="showDialog();" id="lostpassword"  >Have you Lost your password?</a></i></b>
                       
                        </div>
                        <b><i><a href="Registration.jsp">New User! Register Here.</a></i></b>
                
                        </div>
                        
                       
      
       
            
           
            
    

        </div>
    </body>
</html>
