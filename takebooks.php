<!DOCTYPE HTML>
<html>
<body background="library 2.jpg">
<center><h2><font face="Bookman Old Style" color="#003366">Display Books</font></h2></center>
<br>

<?php
$c=mysql_connect("localhost","root","");
$search = $_REQUEST["search"];
mysql_select_db("naveen",$c);
$query = "select ISBN,Title,Author,Edition,Publication from addbooks where Title = '$search'";
$results = mysql_query($query,$c);
if($results)
{
	?>
<table border="2" align="center" cellpadding="5" cellspacing="5">
	
	<tr>
	<th><font color="#66ff33"> ISBN </font></th>
	<th><font color="#66ff33"> Title </font></th>
	<th><font color="#66ff33"> Author </font></th>
	<th><font color="#66ff33"> Edition </font></th>
	<th><font color="#66ff33"> Publication </font></th>
	<th><font color="#66ff33">Take Books</font></th>
	</tr>
	
	<?php while($row = mysql_fetch_assoc($results))
	{
	?>
	<tr>
	<td><font color="#e69900"><?php echo $row["ISBN"];?></font></td>
	<td><font color="#e69900"><?php echo $row["Title"];?></font></td>
	<td><font color="#e69900"><?php echo $row["Author"];?></font></td>
	<td><font color="#e69900"><?php echo $row["Edition"];?></font></td>
	<td><font color="#e69900"><?php echo $row["Publication"];?></font></td>
	<td><font color="#e69900"><a href="take.php">withdraw</a></font></td>
	</tr>
	<?php
	}
	}
	else 
	echo "<center>No books found in the library by the name $search </center>";
    ?>
	</table>
	</body>
	</html>
	<br>