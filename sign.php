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

  function checkForm(form)
  {
    if(form.fn.value == "") {
      alert("Error: Username cannot be blank!");
      form.fn.focus();
      return false;
    }
    re = /^\w+$/;
    if(!re.test(form.fn.value)) {
      alert("Error: Username must contain only letters, numbers and underscores!");
      form.fn.focus();
      return false;
    }
	if(form.em.value!="")
	{
	re=/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
	if(!re.test(form.em.value)){
	alert("check your mail format !");
	form.em.focus();
	return false;
	}}
	else{
	alert("mail id cannot be blank!");
	form.em.focus();
	return false;
	
	}

	
      if(form.pwd1.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        form.pwd1.focus();
        return false;
      }
      if(form.pwd1.value == form.fn.value) {
        alert("Error: Password must be different from Username!");
        form.pwd1.focus();
        return false;
      }
      re = /[0-9]/;
      if(!re.test(form.pwd1.value)) {
        alert("Error: password must contain at least one number (0-9)!");
        form.pwd1.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(form.pwd1.value)) {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        form.pwd1.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(form.pwd1.value)) {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        form.pwd1.focus();
        return false;
      }
	  if(form.pwd1.value !== form.pwd2.value) {
        alert("Error: Password must be same");
         }
		 else
		 {
			 
	
    alert("Your form is successfully created! ");
	    return true;
  }
      

</script>

</head>

<body background="library 3.jpg">

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
<h3><div id="b"><center><font face="Bookman Old Style" color="#ffbf00"> Create new account<br/></center></font></div><br/></h3>

<center>
<table border="1" cellspacing="5" cellpadding="7" style="background-color:#4d9900">

<tr>
<td><form name="fn" method="post" action="sn.php"><b>USER_NAME:</b><br/><br/>
<input type="text" placeholder="user name" pattern="[a-zA-Z]{8,}" required name="fn"/> &nbsp;
</td></tr>

<tr>
<td><b>MOBILE NUMBER:</b><br/><br/>
<input type="text" placeholder="ex.7598983112" pattern="[0-9]{10}" maxlength="10" name="mb"/>
</td></tr>

<tr>
<td><b>DATE OF BIRTH :</b><br/><br/>
<input type="date" required="" name="dob"></td>
</tr>
<tr>
<td><b>GENDER</b><br/><br/>
<input type="radio" name="rd">MALE<br/>
<input type="radio" name="rd">FEMALE<br/>
</td></tr>

<tr>
<td><b> EMAIL_ID</b><br/><br/>
  <input type="text" placeholder="enter a valid email" required name="em"/><br/><br/
</td></tr>

<tr>
<td><b>PASSWORD</b><br/><br/>
 password&nbsp;<input type="password" placeholder="set a strong password"  required pattern="[a-zA-Z0-9]{8,}" name="pwd1"/>&nbsp;
<br/><br/>
</td></tr>

<tr>
<td><B>FEEDBACK</b><br/><br/>
<textarea rows="5" cols="50" name="fb">feel free to share</textarea>
</td></tr>


<tr>
<td>
<input type="checkbox" name="cb" checked="on"><b>I accept all the terms and conditions*</b>
</td></tr>
<tr><td>
<input type="submit" name="submit" value="submit">
</td></tr>
</form>

</table>
</center>

<br><br><br><br><br>
<center>
<footer>Copyright &copy;IIT,MADRAS</footer>
</center>
</body>
</html>