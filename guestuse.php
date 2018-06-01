<?php
$msg1 = "";
$name = "";
$com = "";
$db_username="root";
$db_password="";
$hostname="localhost";
$con = mysqli_connect($hostname,$db_username,$db_password);
mysqli_select_db($con,'ccomment');

if(isset($_POST['send']))
	{
		$gun=$_POST["gun"];
		$gcmnt=$_POST["gcmnt"];
		
		if($gun == null)
			{
				$msg1 = "Plese enter your name";  
			}
		else
			{
				$query="insert into comme(content,username) values('$gcmnt','$gun')";
				$result=mysqli_query($con,$query);
				
				$name = $gun; 
				$com = $gcmnt;
			}
	}
?>
<html>
<head><title>guest user</title>
</head>
<body>
<form name="guest" action="" method="post">
Enter your name : <input type="text" name="gun"/>
Enter your comment : <input type="textarea" name="gcmnt"/>
<input type="submit" name="send" value="Send your comment"/>
<?php
echo $msg1;
?>
</form>
<?php
echo $name, $com;
?>
</body>
</html>