<?php
   include("./connection.php");
  
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($cn,$_POST['username']);
      
      $mypassword = mysqli_real_escape_string($cn,$_POST['password']); 

      $s = "SELECT id FROM register WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($cn,$s);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         
         header("location: profile.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
      
   }
?>






<html>
    <head>
         <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
            <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
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
    
    <body>
        
        <div class="container">
            <div style="margin-top: auto;margin-bottom: auto;">

            <b style="font-family: inherit; color: #024978">Go</b> For Adminstration page! <a style="margin-left: 15px; margin-top: 5px;" href="index.php"><input type="button" value="Go Back To Home"/></a>
            </div>
        
            
        
       
            <form action="checklogin.php" name="" method="post">
            
            <div class="row">
                <div class="col-lg-4">
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon ">
                        User ID.:
                        </span>
                        <input type="text" name="username" placeholder="Enter Your UserID" class="form-control" required style="margin-top: 5px;">
                        </div>
                </div>
                
                </div>
                    
                
                
                     <div class="row">
                <div class="col-lg-4" >
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon">
                            Password:
                        </span>
                        <input type="password" name="password" placeholder="Enter Security Key" class="form-control" required>
                        </div>
                </div>
                
                </div>
             
             
             
             
             
             
            <div class="col-lg-4" >
            <div class="row">
                
                <div class="form-inline" style="margin-top: 10px;">
                        <input type="submit" value="Proceed" class="form-control btn-primary"/>
                        <input type="reset" value="clear" class="form-control btn-info"/><br><br>
                     </div> 
                    </div>  
                
                     <div class="row">
                 
                <div>
                    <a href="UpdatePassword.php" onclick="showDialog();" id="lostpassword"  ><strong>Have you Lost your password?</strong></a>
                </div>
                    
                       
                  
                 <div>
                     <a href="AdminRegistration.php"><strong>New Admin User! Register Here.</strong></a>
                    </div>  
                        
                        
             
              
                
             </div>
            </div>
                 </form>
                 </div>
            
           
       
              
    </body>
</html>

