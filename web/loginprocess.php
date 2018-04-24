<html>
<head>
<title>Login</title>
</head>
<body>
<?PHP
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
if ($username&&$password)
{
$server='localhost';
$userid2='root';
$password2='123456';
$dbname='web';
$conn=mysql_connect("$server","$userid2","$password2");
mysql_select_db("$dbname",$conn) or die(mysql_error());
$query=mysql_query("select * from loginpengguna where username='$username'");
$numrows=mysql_num_rows($query);
if ($numrows !=0)
{
	while ($row = mysql_fetch_assoc($query))
	{
		$dbusername=$row["username"];
		$dbpassword=$row["password"];
	}
	if ($username==$dbusername&&$password==$dbpassword)
	{
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
		header('Location:face1.php');
	} 
	if ($username="admin"==$dbusername&&$password="123"==$dbpassword)
	{
		$_SESSION['admin']=$username;
	    $_SESSION['123']=$password;
        header('Location:datapelajaradmin.php');
	}		
	else
	{echo "Incorrect Password!!<a href='pensyarah1.php'>Click Here To Login</a>";}
} // if 2
else 
	die ("That User Doesn't Exist");
} // if 1
else
{
	echo "Please enter username and password!! <a href='pensyarah1.php'> Click Here To Login</a>";
}
?>
</body>
</html>