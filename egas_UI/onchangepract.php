<html>
    <head>
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
    
    <script>
         function check() {
    document.getElementById("inp").value = document.getElementById("id").value;
}





        
    </script>
    <body>
        <div class="custom-select" style="width:200px; margin-top: 25px;">
        
         <form>
	<select id="id" onChange="check();">
        <option value="" disabled selected hidden>Select here</option>
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
	<input type="text" name="input" id="inp" />
	</form>
            
        </div>
        
       
        
    </body>
</html>