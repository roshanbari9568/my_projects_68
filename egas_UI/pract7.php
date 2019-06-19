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
        <form method="post" action="pract7.php">
	<select name="dropdown" id="st">
        <option value="">Select here</option>
	<option value="AP">Andhra Pradesh</option>
	<option value="AruPra">Arunachal Pradesh</option>
	<option value="Assam">Assam</option>
        <option value="BR">Bihar</option>
        <option value="Chattish">Chattisgarh</option>
        <option value="Goa">Goa</option>
        <option value="Guj">Gujrat</option>
        <option value="Harya">Haryana</option>
	<option value="HP">Himachal Pradesh</option>
	<option value="JK">Jammu and Kashmir</option>
        <option value="Jhar">Jharkhand</option>
        <option value="Karna">Karnataka</option>
        <option value="Kerala">Kerala</option>
        <option value="MP">Madhya Pradesh</option>
        <option value="Maha">Maharashtra</option>
	<option value="Mani">Manipur</option>
	<option value="Meghal">Meghalaya</option>
        <option value="Miz">Mizoram</option>
        <option value="Naga">Nagaland</option>
        <option value="Orissa">Orissa</option>
        <option value="Pun">Punjab</option>
        <option value="Rajas">Rajasthan</option>
	<option value="Sikkim">Sikkim</option>
	<option value="TN">Tamil Nadu</option>
        <option value="Tel">Telangana</option>
        <option value="Tripura">Tripura</option>
        <option value="UP">Uttar Pradesh</option>
        <option value="UK">Uttarakhand</option>
        <option value="WB">West Bengal</option>
	</select>
	<input type="submit" value="submit">
	</form>
    </body>
</html>

<?php
$AP="456 Rs.";
$AruPra="556";
$Assam="576";
$BR="586";
$Chattish="";
$Goa="";
$Guj="";
$Harya="";
$HP="";
$JK="";
$Jhar="";
$Karna="";
$Kerala="";
$MP="";
$Maha="";
$Mani="";
$Meghal="";
$Miz="";
$Naga="";
$Orissa="";
$Pun="";
$Rajas="";
$Sikkim="";
$TN="";
$Tel="";
$Tripura="";
$UP="";
$UK="";
$WB="";
?>

<?php

if(isset($_POST['dropdown']))
{
    
    $dropdown=$_POST['dropdown'];
    
}

switch ($_POST['dropdown'])  { 

case "AP":
 echo "<input type='text' value='$AP'>";
break;

case "$AruPra":
 echo "<input type='text' value='$AruPra'>";
break;

case "$Assam":
 echo "<input type='text' value='$Assam'>";
break;

case "$BR":
 echo "<input type='text' value='$BR'>";
break;

case "$Chattish":
 echo "<input type='text' value='$Chattish'>";
break;

case "$Goa":
 echo "<input type='text' value='$Goa'>";
break;

case "$Guj":
 echo "<input type='text' value='$Guj'>";
break;

case "$HP":
 echo "<input type='text' value='$HP'>";
break;

case "$Harya":
 echo "<input type='text' value='$Harya'>";
break;

case "$JK":
 echo "<input type='text' value='$JK'>";
break;

case "$Jhar":
 echo "<input type='text' value='$Jhar'>";
break;

case "$Karna":
 echo "<input type='text' value='$Karna'>";
break;

case "$Kerala":
 echo "<input type='text' value='$Kerala'>";
break;

case "$MP":
 echo "<input type='text' value='$MP'>";
break;

case "$Maha":
 echo "<input type='text' value='$Maha'>";
break;

case "$Mani":
 echo "<input type='text' value='$Mani'>";
break;

case "$Meghal":
 echo "<input type='text' value='$Meghal'>";
break;

case "$Miz":
 echo "<input type='text' value='$Miz'>";
break;

case "$Naga":
 echo "<input type='text' value='$Naga'>";
break;

case "$Orissa":
 echo "<input type='text' value='$Orissa'>";
break;

case "$Pun":
 echo "<input type='text' value='$Pun'>";
break;

case "$Rajas":
 echo "<input type='text' value='$Rajas'>";
break;

case "$Sikkim":
 echo "<input type='text' value='$Sikkim'>";
break;

case "$TN":
 echo "<input type='text' value='$TN'>";
break;

case "$Tel":
 echo "<input type='text' value='$Tel'>";
break;

case "$Tripura":
 echo "<input type='text' value='$Tripura'>";
break;

case "$UK":
 echo "<input type='text' value='$UK'>";
break;

case "$UP":
 echo "<input type='text' value='$UP'>";
break;

case "$WB":
 echo "<input type='text' value='$WB'>";
break;

default:
  echo "Input did not match with any case";

  }
?>

<!--https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_ref_glyph_envelope&stacked=h's

https://www.w3schools.com/bootstrap/bootstrap_ref_comp_glyphs.asp
-->