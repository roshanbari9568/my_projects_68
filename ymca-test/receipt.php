<html>
    <head>
        
            <style>
                table {
  border-collapse: collapse;
  width: 65%;
  text-align: center;
  //margin-left: 150px;
  //margin-top: 50px;
 
}

#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 65%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #b2dba1;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #1c6288;
  color: white;
}

</style>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Receipt</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

      
    </head>
    <body>
        <div class="container">
            <div class="table">
            <?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "company";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "select id,username,datetime
from register
order by id desc
limit 1";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    echo "<table id='customers' border='2';>";
    echo "<tr>";
    echo "<th>Your Token no.</th>";
    echo "<th>Your Token ID is</th>";
    echo "<th>Time receipt generated</th>";
    echo "</tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['username'] . "</td>";
        echo "<td>" . $row['datetime'] . "</td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}        
mysqli_close($conn);
?>
        
        </div>
            
        </div>
        
        
            
        
             
        
        
        
    </body>
    
</html>
    <?php

session_start();
$user_check=$_SESSION['username'];
echo "<div style='margin-left:150px; margin-top:80px;';>Your name is &nbsp;&nbsp;&nbsp;&nbsp;".$_SESSION['username']."&nbsp;&nbsp;&nbsp;"."</div>";
?>

<?php

?>
