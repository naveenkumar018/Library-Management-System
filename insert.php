<!DOCTYPE html>
<html>
<head>
<meta name="viewport">
<content="width=device-width,initial-scale=1">
<style>
body,html{
height:100%;
margin:0%;
}
.bg{
background-image: url("lib 2.jpg");
height:100%;
background-position:center;
background-repeat:no-repeat;
background-size:cover;
}
</style>
</head>
<body>
<div class="bg"></div>
<center><h2><font color="#00e673">Insert Books</font></h2></center>
<br>

<?php
$c=mysql_connect("localhost","root",""); 
$isbn=$_POST["isbn"];
$title=$_POST["title"];
$author=$_POST["author"];
$edition=$_POST["edition"];
$publication=$_POST["publication"];
mysql_select_db("naveen",$c);
$query = "insert into addbooks(ISBN,Title,Author,Edition,Publication) values($isbn,'$title','$author',$edition,'$publication')";
$result = mysql_query($query,$c);
if($result)
{
	echo 'Book information is inserted successfully';
}
else
{
	echo 'error';
}
?>
 
 
<a href="SearchBooks.php"> To search for the Book information click here </a>
 
</body>
</html>