<!DOCTYPE html>
<html>
<head>
<title>LIBRARY</title>
<style type="text/css">

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    position: fixed;
    top: 0;
    width: 100%;
}


li a {
    float: left;
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color:#9933ff;
}
div.absoloute{
   width:1080px;
   padding:10px;
   margin:0;
}
   
footer{
    padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
}
p{text-align:center;
  color:#ff0000;
}
  
h1{text-align:center;
  color:#ff0066;
}
</style>
</head>
<body background="library 9.jpg">
<ul>
  <li><a href="hm.php">HOME</a></li>
  <li><a href="about.php">ABOUT US</a></li>
  <li><a href="login.php">LOGIN</a></li>
  <li><a href="sign.php">REGISTER</a></li>
  <li><a href="librarian_login.php">LIBRARIAN</a></li>
  <li><a href="collections.php">COLLECTIONS</a></li>
  <li><a href="services.php">SERVICES</a></li>
</ul>
<br><br><br>
<center>
<center><h2><font face="Bookman Old Style" color="#009933">Add Booking Details</font></h2></center>
<form action="InsertBooks.php" method="post">
 
<table border="2" align="center" cellpadding="5" cellspacing="5">
<tr>
<td><font color="#ff1a1a"> Enter ISBN :</font></td>
<td> <input type="text" name="isbn" size="48"> </td>
</tr>
<tr>
<td><font color="#ff1a1a"> Enter Title :</font></td>
<td> <input type="text" name="title" size="48"> </td>
</tr>
<tr>
<td><font color="#ff1a1a"> Enter Author :</font></td>
<td> <input type="text" name="author" size="48"> </td>
</tr>
<tr>
<td><font color="#ff1a1a"> Enter Edition :</font></td>
<td> <input type="text" name="edition" size="48"> </td>
</tr>
<tr>
<td> <font color="#ff1a1a">Enter Publication:</font> </td>
<td> <input type="text" name="publication" size="48"> </td>
</tr>
<tr>
<td></td>
<td>
<input type="submit" value="submit">
<input type="reset" value="Reset">
</td>
</tr>
</table>
</center>
<br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<center>
<footer>Copyright &copy;IIT,MADRAS</footer>
</center>
</body>
</html>