<html>
    <head>
        <title>
            
        </title>
        <style>
            
        </style>
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
        <form method="post" action="?">
	<select name="dropdown">
        <option value="">Select</option>
	<option value="Maharashtra">Maharashtra</option>
	<option value="UP">UP</option>
	<option value="Mumbai">Mumbai</option>
	</select>
	<input type="submit" value="submit">
	</form>
    </body>
</html>
<?php
$Maharashtra= "726 Rs.";
$UP="886 Rs";
$Mumbai="900 Rs" ;       
?>

<?php

 
switch ($_POST['dropdown'])  {
    


case "Maharashtra":
 echo "<input type='text' value='$Maharashtra'>";
break;

case "UP":
echo "<input type='text' value='$UP'>";
break;

case "Mumbai":
 echo "<input type='text' value='$Mumbai'>";
break;

default:
  echo "Input did not match with any case";

  }
?>

<!--https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_ref_glyph_envelope&stacked=h's

https://www.w3schools.com/bootstrap/bootstrap_ref_comp_glyphs.asp
-->