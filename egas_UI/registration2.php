<?php
include('config.php');
?>
 
<!DOCTYPE html>
<html>
    <head>
        <title>Registration Page</title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>


        <style> 
            .row{
                margin-bottom: 10px;

            }
            .input-group-addon{

                width:200px;
            }

        </style>
    </head>


    <body>
        <?php
//We check if the form has been sent
if(isset($_POST['username'],$_POST['image'], $_POST['password'], $_POST['passverif'], $_POST['email'], $_POST['avatar']) and $_POST['username']!='')
{
	//We remove slashes depending on the configuration
	if(get_magic_quotes_gpc())
	{
		$_POST['username'] = stripslashes($_POST['username']);
                $_POST['image'] = stripslashes($_POST['image']);
		$_POST['password'] = stripslashes($_POST['password']);
		$_POST['passverif'] = stripslashes($_POST['passverif']);
		$_POST['email'] = stripslashes($_POST['email']);
		$_POST['avatar'] = stripslashes($_POST['avatar']);
	}
	//We check if the two passwords are identical
	if($_POST['password']==$_POST['passverif'])
	{
		//We check if the password has 6 or more characters
		if(strlen($_POST['password'])>=6)
		{
			//We check if the email form is valid
			if(preg_match('#^(([a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+\.?)*[a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+)@(([a-z0-9-_]+\.?)*[a-z0-9-_]+)\.[a-z]{2,}$#i',$_POST['email']))
			{
				//We protect the variables
				$username = mysql_real_escape_string($_POST['username']);
                                $image = mysql_real_escape_string($_POST['image']);
				$password = mysql_real_escape_string($_POST['password']);
				$email = mysql_real_escape_string($_POST['email']);
				$avatar = mysql_real_escape_string($_POST['avatar']);
				//We check if there is no other user using the same username
				$dn = mysql_num_rows(mysql_query('select id from users where username="'.$username.'"'));
				if($dn==0)
				{
					//We count the number of users to give an ID to this one
					$dn2 = mysql_num_rows(mysql_query('select id from users'));
					$id = $dn2+1;
					//We save the informations to the databse
					if(mysql_query('insert into users(id, username,image, password, email, avatar, signup_date) values ('.$id.', "'.$username.'","'.$image.'", "'.$password.'", "'.$email.'", "'.$avatar.'", "'.time().'")'))
					{
						//We dont display the form
						$form = false;
                                                
                                               
?>
        <div>
        <div style="margin-left: 150px; margin-top: 100px;">
            <div class="message"><div>We are in Processing</div>
                <div>Check by signing into admin messengner after 48 hours</div> 
                <div>We will contact you Shortly<div/>
            Click <a href="index.php">here</a> to go back
                
            
        </div>
        </div>
            </div>

<?php
					}
					else
					{
						//Otherwise, we say that an error occured
						$form = true;
						$message = 'An error occurred while signing up.';
					}
				}
				else
				{
					//Otherwise, we say the username is not available
					$form = true;
					$message = 'The username you want to use is not available, please choose another one.';
				}
			}
			else
			{
				//Otherwise, we say the email is not valid
				$form = true;
				$message = 'The email you entered is not valid.';
			}
		}
		else
		{
			//Otherwise, we say the password is too short
			$form = true;
			$message = 'Your password must contain at least 6 characters.';
		}
	}
	else
	{
		//Otherwise, we say the passwords are not identical
		$form = true;
		$message = 'The passwords you entered are not identical.';
	}
}
else
{
	$form = true;
}
if($form)
{
	//We display a message if necessary
	if(isset($message))
	{
		echo '<div class="message">'.$message.'</div>';
	}
	//We display the form
?>


        <nav class="navbar navbar-inverse navbar-fixed-top" style="margin-top: 20px; margin-left: 25px; margin-right: 25px; background-color: #136fed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="index.php" class="navbar-brand">RB Gas Services</a>
                </div>



            </div>
        </nav>




        <form action="registration2.php"  method="post" style="margin-top: 100px; margin-left: 25px;">

            <div class="page-header">
                <h4 style="color: #1b6d85; margin-left: 145px;" >Fill up your Informations </h4>


            </div>

            <div align="center">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon ">
                                Your Name:
                            </span>
                            <input type="text" name="username" value="<?php if(isset($_POST['username'])){echo htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8');} ?>" placeholder="Enter Your name" class="form-control" area-describedby="sizing-addon1" required>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-4">
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon ">
                                Goverment Approved ID:
                            </span>
                            <input type="file" name="image" value="<?php if(isset($_POST['image'])){echo htmlentities($_POST['image'], ENT_QUOTES, 'UTF-8');} ?>" placeholder="Upload Goverment Approved ID" class="form-control" area-describedby="sizing-addon1" required>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-4">
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon ">
                                Password:
                            </span>
                            <input type="password" name="password" placeholder="Enter Your name" class="form-control" area-describedby="sizing-addon1" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon">
                                 Same Password:
                            </span>
                            <input type="text" name="passverif" placeholder="Your Email Id." class="form-control" area-describedby="sizing-addon1" required onkeypress='validate(event)'>
                        </div>
                    </div>
                </div>



            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon">
                            Your Email Address:
                        </span>
                        <input type="text" name="email" value="<?php if(isset($_POST['email'])){echo htmlentities($_POST['email'], ENT_QUOTES, 'UTF-8');} ?>" placeholder="Enter email address" class="form-control" area-describedby="sizing-addon1" required onkeypress='validate(event)'>
                    </div>
                </div>
            </div>


        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="input-group input-group-lg">
                    <span class="input-group-addon">
                       Your Avatar:
                    </span>
                    <input type="password" name="avatar" value="<?php if(isset($_POST['avatar'])){echo htmlentities($_POST['avatar'], ENT_QUOTES, 'UTF-8');} ?>" placeholder="Enter your Private Key" class="form-control" area-describedby="sizing-addon1" required="">
                </div>
            </div>

        </div>






        <div class="row">
            <div class="col-lg-2" >
                <div class="form-inline">
                    <input type="submit"  value="Proceed" class="form-control btn-danger" >
                    <input type="reset"  value="clear" class="form-control btn-warning" >

                </div>
            </div>



        </div>

        <div>
            <!--<a href="loginpage.php">Already User! Click here</a> -->
        </div>







    </div>
</form>
        <?php
}
?>


</body>
</html>

