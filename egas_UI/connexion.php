<?php
include('config.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="<?php echo $design; ?>/style.css" rel="stylesheet" title="Style" />
        <title>Connexion</title>
    </head>
    <body>
    	
<?php
//If the user is logged, we log him out
if(isset($_SESSION['username']))
{
	//We log him out by deleting the username and userid sessions
	unset($_SESSION['username'], $_SESSION['userid']);
?>
        <div class="message" style="margin-top: 150px;">You have successfuly been loged out.<br />
<a href="<?php echo $url_home; ?>">Home</a></div>
<?php
}
else
{
	$ousername = '';
	//We check if the form has been sent
	if(isset($_POST['username'], $_POST['avatar']))
	{
		//We remove slashes depending on the configuration
		if(get_magic_quotes_gpc())
		{
			$ousername = stripslashes($_POST['username']);
			$username = mysql_real_escape_string(stripslashes($_POST['username']));
			$avatar = stripslashes($_POST['avatar']);
		}
		else
		{
			$username = mysql_real_escape_string($_POST['username']);
			$avatar = $_POST['avatar'];
		}
		//We get the password of the user
		$req = mysql_query('select avatar,id from users where username="'.$username.'"');
		$dn = mysql_fetch_array($req);
		//We compare the submited password and the real one, and we check if the user exists
		if($dn['avatar']==$avatar and mysql_num_rows($req)>0)
		{
			//If the password is good, we dont show the form
			$form = false;
			//We save the user name in the session username and the user Id in the session userid
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['userid'] = $dn['id'];
?>
        <div class="message" style="margin-top: 150px;">You have successfuly been logged. You can access to your member area.<br />
<a href="<?php echo $url_home; ?>">Home</a></div>
<?php
		}
		else
		{
			//Otherwise, we say the password is incorrect.
			$form = true;
			$message = 'The username or avatar is incorrect.';
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
        <div class="content" style="margin-top: 150px;">
    <form action="connexion.php" method="post">
        Please type your IDs to log in:<br />
        <div class="center">
            <label for="username">Username</label><input type="text" name="username" id="username" value="<?php echo htmlentities($ousername, ENT_QUOTES, 'UTF-8'); ?>" /><br />
            <label for="password">Avatar</label><input type="password" name="avatar" id="avatar" /><br />
            <input type="submit" value="Log in" />
		</div>
    </form>
</div>
<?php
	}
}
?>
        <div class="foot"><a href="<?php echo $url_home; ?>">Go Home</a> - <a href="index.php">Roshan Bari Services</a></div>
	</body>
</html>