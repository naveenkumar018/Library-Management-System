<?php
$c=mysql_connect("localhost","root","");
$user=$_POST['fn'];
$mail=$_POST['em'];
$pass=$_POST['pwd1'];
mysql_select_db("naveen",$c);
$q="INSERT INTO signin(user,email,pass) VALUES ('$user',$mail','$pass')";
if($q)
{
	echo "<script>location.href='http://localhost/naveen/test1.php'</script>";
	echo 'sucessful';
}
else
{
	echo 'not sucessful';
}
?>
