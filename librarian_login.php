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
</style>
</head>
<script type="text/javascript">

  function checkForm(form)
  {
    if(form.name.value == "") {
      alert("Error: Username cannot be blank!");
      form.name.focus();
      return false;
    }
    re = /^\w+$/;
    if(!re.test(form.name.value)) {
      alert("Error: Username must contain only letters, numbers and underscores!");
      form.name.focus();
      return false;
    }
	
      if(form.password.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        form.password.focus();
        return false;
      }
      if(form.password.value == form.fn.value) {
        alert("Error: Password must be different from Username!");
        form.password.focus();
        return false;
      }
      re = /[0-9]/;
      if(!re.test(form.password.value)) {
        alert("Error: password must contain at least one number (0-9)!");
        form.password.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(form.password.value)) {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        form.password.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(form.password.value)) {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        form.password.focus();
        return false;
      }
     else {
      alert("Error: Please check that you've entered and confirmed your password!");
      form.password.focus();
      return false;
    }
	 
    alert("Your form is successfully created! ");
	    return true;
  }

</script>
<style>

.a{
background-color:orange;
color:white;
font-size:20px;
border:1;
}

#b{
font-size:70px;
}


</style>


<body background="library 2.jpg">

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
<div id="b"><center><font face="Bookman Old Style" color="#ff471a">LIBRARIAN LOGIN<br/></center></font></div><br/>

<center>
<table border="1" cellspacing="5" cellpadding="7" style="background-color:#7300e6">

<tr>
<td>
<form method="post" action="lln.php" name="frm"><b>username:</b><br/><br/>
<input type="text" placeholder="user name" required="" name="username"/> &nbsp;
</td></tr>

<tr>
<td><b>password</b><br/><br/>
&nbsp;<input type="password" placeholder="enter the correct password" required="" name="password"/>&nbsp;
</td></tr>

<tr>
<td>
<font size="3">

<input type="submit" class="a" name="submit" value="Submit" />

</form>

</table>
</center>

<br><br><br><br><br><br><br><br><br>
<br><br><br>
<center>
<footer>Copyright &copy;IIT,MADRAS</footer>
</center>
</body>
</html>
