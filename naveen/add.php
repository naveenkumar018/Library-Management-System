<!DOCTYPE html>
<html>
<head>
<title>ADDING</title>
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

.a{
background-color:black;
color:white;
font-size:20px;
border:1;
}

#b{
font-size:70px;
}
   
footer{
    padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
}
</style>
<script type="text/javascript">

  function checkForm(frm)
  {
    if(form.fn.value == "") {
      alert("Error: ISBN No cannot be blank!");
      form.fn.focus();
      return false;
    }
    re = /^\d{13}$/;
    if(!re.test(form.fn.value)) {
      alert("Error:ISBN no must contain numeric only");
      form.fn.focus();
      return false;
    }
 function ISBNNOvalidation()
{

 var ISBN NO = document.registration.fn;
 var ISBN NO =fn.value;
 if(ISBN NO=="978-72-05540-67-8")
 {
 document.frm.tit.value("Discrete Mathamatics");
 }
}
        </script>

</head>

<body background="library 2.jpg">

<ul>
  <li><a href="hm.php">HOME</a></li>
  <li><a href="about.php">ABOUT US</a></li>
  <li><a href="login.php">LOGIN</a></li>
  <li><a href="sign.php">REGISTER</a></li>
  <li><a href="insertbooks.php">ADD BOOKS</a></li>
  <li><a href="collections.php">COLLECTIONS</a></li>
  <li><a href="services.php">SERVICES</a></li>
</ul>
<br><br><br>
<div id="b"><center><font face="harrington" color="#ff471a">Book Adding Form
<br/></center></font></div><br/>

<center>
<table border="1" cellspacing="5" cellpadding="7" style="background-color: #ff9999">

<tr>
<td><form onsubmit="return checkForm(this);" name="frm"><b>ISBN NO</b>&nbsp;&nbsp;
<input type="text" placeholder="ISBNNO" name="fn"/> &nbsp;
</td></tr>


<tr>
<td><b>TITLE</b>&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;
<input type="text" maxlength="17" name="tit"/>
</td>
</tr>

<tr>
<td><b>AUTHOR</b>&nbsp;&nbsp;
<input type="text" maxlength="15" name="author"/>
</td>
</tr>

<tr>
<td><b>PRICE</b>&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;
<input type="text" maxlength="4" name="price"/>
</td>
</tr>

<tr>
<td><b>NO.OF.COPIES</b><br/><br/>
<select><option>No.of.copies</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
</select>
</td>
</tr>

<tr>
<td>
<font size="3"><input type="submit" class="a" value="submit" onclick="alert('Book added Successfully')"/>
<a href="login.html"><input type="button" value="Go back" class="a"/></a></font></td></tr>
</form>

</table>
</center>

<br><br><br><br><br><br><br><br>

<center>
<footer>Copyright &copy;IIT,MADRAS</footer>
</center>
</body>
</html>