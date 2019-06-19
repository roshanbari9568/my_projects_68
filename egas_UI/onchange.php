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
        
      <form>
<select id="id" onChange="check();">
    <option></option>
    <option value="1">opt1</option>
    <option value="2">opt2</option>
    <option value="3">opt3</option>
    <option value="4">opt4</option>
</select>
<input type="text" name="input" id="inp" />
</form>
        
    </body>
</html>