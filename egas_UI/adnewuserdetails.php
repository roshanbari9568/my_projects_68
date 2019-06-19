<!DOCTYPE html>
<html>
    <head>
        <style>
            
        </style>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
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
        <nav class="navbar navbar-inverse navbar-fixed-top" style="margin-top: 20px; margin-left: 25px; margin-right: 25px; background-color: #136fed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">RB Gas Services</a>
                </div>



        </div>
        </nav>
        
            
        
            
        <ul class="nav nav-tabs" style="margin-top: 100px;">
                <li role="presentation"><a href="adnewuserdetails.php">View New User Detail</a></li>
                    <li role="presentation"><a href="adminmsggenerate.php">Add new User</a></li>
                    <li role="presentation"><a href="adminaddeduserdetaiinfol.php">Added New User Info</a></li>
                    
                    <li role="presentation"><a href="AdminContactUs.php">View Contact List</a></li>
                    <li role="presentation"><a href="adminmsgpg.php">Send CID to user</a></li>
                    
                    <li role="presentation"><a href = "Logout.php" style="color: #00CED1; font-size: medium">Sign Out</a></li>
       
       

  

  
       
       
  
            </ul>
            
            
        
        
        
        
    
    
    
    

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, username,image, password,email,avatar  FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table border='2'>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>username</th>";
                echo "<th>image</th>";
                echo "<th>Password</th>";
                echo "<th>Email</th>";
                echo "<th>Avatar</th>";
                echo "</tr>";

    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['image'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['avatar'] . "</td>";
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