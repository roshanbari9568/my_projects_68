<?php   session_start();  ?>

<html>
  <head>
       <title> Home </title>
  </head>
  <body>
<?php
      
          echo "Your Login is Success"."&nbsp&nbsp&nbsp&nbsp&nbsp";
          echo $_SESSION['username']."<br>" ;

          
          echo "Your address is"."&nbsp&nbsp&nbsp&nbsp&nbsp";
          echo $_SESSION['address']."<br>" ;
          
          echo "Your package name is"."&nbsp&nbsp&nbsp&nbsp&nbsp";
          echo $_SESSION['packagen']."<br>" ;
          
          echo "Your package duration is"."&nbsp&nbsp&nbsp&nbsp&nbsp";
          echo $_SESSION['packaged']."<br>" ;
          
          
          echo "Your Package will end on"."&nbsp&nbsp&nbsp&nbsp&nbsp";
          echo $_SESSION['packaget'];
          
          
          
          
          
          
?>
      <br>
      <a href="gettiroughlogout.php">Logout</a>
</body>
</html>