<?php
$c=mysql_connect("localhost","root","");
$user=$_POST['fn'];
$mobile=$_POST['mb'];
$dob=$_POST['dob'];
$mail=$_POST['em'];
$pass=$_POST['pwd1'];
$fb=$_POST['fb'];
mysql_select_db("naveen",$c);
$q="INSERT INTO signin(name,mobile,DOB,email,password,feedback) VALUES ('$user',$mobile,$dob,'$mail','$pass','$fb')";
$f=mysql_query($q,$c);
if($f)
{
	echo 'entered sucessfully';
}
else
{
	echo 'error';
}
?>