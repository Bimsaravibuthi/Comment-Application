<?php
session_start();
$msg = "";
$db_username="root";
$db_password="";
$hostname="localhost";
$con = mysqli_connect($hostname,$db_username,$db_password);
mysqli_select_db($con,'ccomment');

if(isset($_POST['log']))
	{
		$username=$_POST["user"];
		$password=$_POST["pass"];
		
		$query="select * from uuser where username = '$username' and password = '$password'";
		$result = mysqli_query($con,$query);
		if(mysqli_num_rows($result) > 0)
		{
			$_SESSION['user'] = $username;
			header( "Location: reguse.php" );
		}
		else
		{
			$msg = "Your username or password incorrect";
		}
	}
?>

<html>
<head><title>Home</title>
</head>
<body>
<h1 align="center">Welcome to comment App !</h1>
<form name="home" action="" method="post">
Username : <input type="text" name="user"/>
Password : <input type="password" name="pass"/>
<input type="submit" name="log" value="Login"/>
<a href="create.html"><input type="button" value="Create account"/></a>
<?php
echo $msg;
?>
</form>
<a href="guestuse.php">I am a guest user<a/>
</body>
</html>