<?php

$cylValue=0;
$_SESSION['cylno'] = $cylValue;

?>

<html>
    <head>
        <style>
            .row{
                margin-bottom: 10px;
            }

            .input-group{

                width:200px;

            }



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

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <script>
        function check() {
            document.getElementById("inp").value = document.getElementById("id").value;
        }


    </script>
    <body>
        <div class="container">
            
            <form method="get" action="buyinglpg.php">
            <div class="col-lg-3" >


                <div class="form-group" >


                    <select class="form-control" id="id" onChange="check();" style="width: 200px; margin-left: 25px; margin-top: 15px;">
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
                    <div class="input-group" style="margin-top: 15px; margin-left: 25px;">

                        <input type="text" name="cylno" id="inp" value="" placeholder="Select to get Price" class="form-control" area-describedby="sizing-addon1" required>
                    </div>
                    
                    
                    <div style="margin-left: 28px; margin-top: 15px;">
                        <button type="submit" class="btn btn-danger active">Proceed</button>
                        
                        
                    </div>

                    <div style="margin-top: 25px;">
                        <ul style="font-size: 12px; font-family: sans-serif; color: #101010">
                            <li>2 KG Cylinder Price, Inclusive of All Taxes & Duties.

                            </li>
                            <li>Delivery Charges Extra @ Rs.50/-(Inclusive of GST)

                            </li>
                        </ul>
                    </div>


                </div> 
            </div>
            </form>
            <div class="col-lg-10">

            </div>

        </div>


    </body>
</html>


