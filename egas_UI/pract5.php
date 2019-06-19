
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  
"http://www.w3.org/TR/html4/loose.dtd">  
<!-- doctype on one line, no need for XHTML on an HTML page -->  
<html lang="en">  
<head>  
 <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">  
 <title>Untitled</title>  
 <style type="text/css"> 
 .txtField { border:none; display: none; width: 400px; } 
 </style> 
 <script type="text/javascript">  
 window.onload=function() {  
 if (document.getElementById) {  
  document.getElementById("selection").onchange=function() { switchme(this); }  
  for (i=1;i<=5;i++) { 
  var nm = 'TextField'+i; 
  if (document.getElementById(nm)) {  
  document.getElementById(nm).style.display='none'; 
  } 
  } 
 }  
 }  
 function switchme(SNewSel) {  
 var ind = SNewSel.selectedIndex;  
 pairs = SNewSel.options[ind].value.split(':'); 
 // This creates a "list" of selected options. 
 // If you want ONLY the selected item to display, you'll have to 
 // add a loop here that blanks out the other fields and sets 
 // their display to none, similar to the "else" below. 
 if (pairs[1]) { 
 document.getElementById(pairs[1]).style.display='block'; 
document.getElementById(pairs[1]).value=pairs[0]; 
 }  
 else {  
for (i=1;i<=5;i++) { 
  var nm = 'TextField'+i; 
  document.getElementById(nm).value=''; 
} 
 }  
}  
</script>  
</head>  
<body>  
<form action="" method="get" id="myform">  
<select name="selection" id="selection">  
<option value="Choose One">Choose One/Remove All</option>  
<option value="Bucket Seats and Leather:TextField1">Add Package 1</option>  
<option value="Toneau Top:TextField1">Add Package 2</option>  
<option value="Metalflake Paint:TextField1">Add Package 3</option>  
<option value="Custom Carpet:TextField2">Add Package 4</option>  
<option value="Chrome Wheels:TextField3">Add Package 5</option>  
<option value="Fart Pipe:TextField4">Add Package 6</option>  
<option value="Stupid Airfoil on Trunk:TextField5">Add Package 7</option>  
</select>  
<br>  
<input class="txtField" id="TextField1" name="TextField1" type="text" value="">  
<input class="txtField" id="TextField2" name="TextField2" type="text" value="">  
<input class="txtField" id="TextField3" name="TextField3" type="text" value="">  
<input class="txtField" id="TextField4" name="TextField4" type="text" value="">  
<input class="txtField" id="TextField5" name="TextField5" type="text" value="">  
</form>  
</body>  
</html>