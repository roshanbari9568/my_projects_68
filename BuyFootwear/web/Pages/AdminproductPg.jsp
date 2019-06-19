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
        
        <script src="../js/Validation.js" type="text/javascript"></script>
        <style> 
            .row{
                margin-bottom: 10px;
                
            }
            .input-group-addon{
                
                width:400px;
            }
          
        </style>
    </head>
    
    <jsp:include page="../Pages/AdminMenubar.jsp"></jsp:include>   
    <body>
        <form action="../AddProduct" method="post" enctype="multipart/form-data" >
             
        <div class="container">
            <div class="page-header">
                <h1 style="color:#00c4cc; margin-left:460px;">Add Product<small> into stock</small></h1> 
            </div>
            
                <div class="row">
                <div class="col-lg-6">
                    <div class="input-group input-group">
                        <span class="input-group-addon">
                            Category:
                        </span>
                        <input type="text" name="category"  placeholder="Enter category name" onkeypress='lettersOnly(event)' required  class="form-control" >
                        </div>
                </div>
                
                </div>
            
            
            <div class="row">
                  <div class="col-lg-6">
                    <div class="input-group input-group ">
                        <span class="input-group-addon ">
                            Product Name:
                        </span>
                        <input type="text" name="pname" placeholder="Enter product name" required class="form-control">
                        </div>
                </div>
                
                </div>
                
             <div class="row">
                <div class="col-lg-6">
                    <div class="input-group input-group">
                        <span class="input-group-addon">
                            Pre-Type:
                        </span>
                        <input type="text" name="pretype" placeholder="Enter Pre-Type name" required class="form-control" onkeypress='lettersOnly(event)' >
                        </div>
                </div>
                
                </div>
             <div class="row">
                <div class="col-lg-6">
                    <div class="input-group input-group">
                        <span class="input-group-addon">
                            Sub-Type:
                        </span>
                        <input type="text" name="subtype" placeholder="Enter Sub-Type name"  class="form-control">
                        </div>
                </div>
                
                </div>
          
              <form>
                  <div style="font-size: 22px;">
                      <b>Size</b>
                   </div>
    <div class="radio">
      <label><input type="radio" name="size" value="8" checked >Size 8</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="size" value="9">Size 9</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="size" value="10" >Size 10</label>
      
    </div>
     <div class="radio">
      <label><input type="radio" name="size" value="11">Size 11</label>
    </div>
  </form>
             <div class="row">
                <div class="col-lg-6">
                    <div class="input-group input-group">
                        <span class="input-group-addon">
                            Quantity:
                        </span>
                        <input type="text" name="quantity" placeholder="Enter Quantity" required class="form-control" onkeypress='validate(event)' >
                        </div>
                </div>
                
                </div>
             <div class="row">
                <div class="col-lg-6">
                    <div class="input-group input-group">
                        <span class="input-group-addon">
                            Actual-Price:
                        </span>
                        <input type="text" name="aprice" placeholder="Actual Price" required class="form-control" onkeypress='validate(event)'>
                        </div>
                </div>
                
                </div>
             <div class="row">
                <div class="col-lg-6">
                    <div class="input-group input-group">
                        <span class="input-group-addon">
                            Selling-price:
                        </span>
                        <input type="text" name="sprice" placeholder="The selling price is:" required class="form-control" onkeypress='validate(event)'>
                        </div>
                </div>
                
                </div>
             <div class="row">
                <div class="col-lg-6">
                    <div class="input-group input-group">
                        <span class="input-group-addon">
                            Product-Image:
                        </span>
                        <input type="file" name="proimg"  class="form-control" required >
                        </div>
                </div>
                
                </div>
            
            
            <div class="row">
                <div class="col-lg-6">
                    <div class="input-group input-group">
                        <span class="input-group-addon">
                            Description:
                        </span>
                        <input type="text" name="description" placeholder="Add Discription" class="form-control" required >
                        </div>
                </div>
                
                </div>
            
            <div class="row">
                <div class="col-lg-2" >
                    <div class="form-inline">
                        <input type="submit" value="Proceed" class="form-control btn-primary"/>
                        <input type="reset" value="clear" class="form-control btn-info"/>
                        
                        </div>
                </div>
                
            </div>
        </div>
        </form>
    
        
    </body>
</html>
