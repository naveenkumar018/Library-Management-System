<?php
if(isset($_POST['submit']))
{
$a=0;
$name=$_POST['username'];
$pass=$_POST['password'];
$db="naveen";
$c=mysql_connect("localhost","root","");
$sel=mysql_select_db($db,$c);
$str="SELECT * FROM `librarian_login`";
$qr=mysql_query($str,$c);
while($f=mysql_fetch_array($qr))
{
	if($name==$f[0]and$pass==$f[1])
	{
		$a=1;
	}
}
if($a==1)
{
echo "<script>location.href='http://localhost/naveen/addbooks.php'</script>";
echo "<script>alert('Credentials matched for librarian')</script>";
}
else
{
echo "<script>alert('Credentials mismatched for librarian')</script>";
}
}
error_reporting();
?>