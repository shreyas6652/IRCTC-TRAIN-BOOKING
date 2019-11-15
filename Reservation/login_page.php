<?PHP
$a=$_POST["user"];
$b=$_POST["password"];
if($a=='Shreyas089' and $b=='Shreyas@321')
{
	echo "login successful";
	header( "refresh:1;url=http://localhost/phpmyadmin/sql.php?server=1&db=railway&table=booking&pos=0" );
}
else
{
	echo "Wrong password or user name";
	header( "refresh:1;url=login.html" );
}
?>