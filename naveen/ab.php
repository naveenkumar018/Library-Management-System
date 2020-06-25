<?php
$c=mysql_connect("localhost","root","");
$ISBN=$_POST['in'];
$Title=$_POST['tl'];
$Author=$_POST['a'];
$Edition=$_POST['ed'];
$Publication=$_POST['pub'];
mysql_select_db("naveen",$c);
$q="INSERT INTO add_books(ISBN,Title,Author,Edition,Publication) VALUES ('$ISBN',$Title,$Author,'$Edition','$Publication')";
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