<?php
session_start();
$msg = "";
$commeNo = "";
$conte = "";
$username = $_SESSION['user'];
$db_username="root";
$db_password="";
$hostname="localhost";
$con = mysqli_connect($hostname,$db_username,$db_password);
mysqli_select_db($con,'ccomment');

$query2="select comment_No,content from comme where username ='$username'";
$result2=mysqli_query($con,$query2);
while

if(isset($_POST['send']))
	{
		$ucmnt=$_POST["ucmnt"];
		
		if($ucmnt == null)
			{
				$msg = "Plese enter your comment";  
			}
		else
			{
				$query="insert into comme(content,username) values('$ucmnt','$username')";
				$result=mysqli_query($con,$query);
			}
	}
	
if(isset($_POST['search']))
	{
		$cmntno = $_POST["cmntno"];
		
		if($cmntno == null)
			{
				$msg = "Plese enter comment number";
			}
		else
			{
				$query1="select comment_No,content from comme where username ='$username' and comment_No ='$cmntno'" ;
				$result1=mysqli_query($con,$query1);
				while($row = mysqli_fetch_array($result1))
					{
						$row[0] = $commeNo;
						$row[1] = $conte;
						echo $commeNo;
						echo $conte;

					}
			}
	}
?>

<html>
<head><title>blaaaa</title>
</head>
<body>
<?php
echo 'Welcome back '. $_SESSION['user'];
?>
<form name = "user" action = "" method = "post">
Enter your comment : <input type="textarea" name="ucmnt"/>
<input type="submit" name="send" value="Send your comment"/>
<h4>Modify comment :</h4>
Select comment no : <input type="text" name="cmntno"/>
<input type="submit" name="search" value="ok"/>
</form>
</body>
</html>