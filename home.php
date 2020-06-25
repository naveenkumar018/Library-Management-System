<!DOCTYPE html>
<html>
<head>
<title>HOME</title>
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

h1 {
   color:#ff471a;
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
<script >
function validate()
{

v2=parseInt(document.f1.t1.value);
v3=parseInt(document.f1.t2.value);

document.write("<br>Number of seats selected :" +v2);
sum=v2*150;
document.write("<br>Cost per ticket :150rs");
document.write("<br>Total cost :"+sum);
document.write("<br>Mobile number :"+v3);
if (t2==(/^[0-9]{10}$/))
{
return true;
}
else if(t2=="NaN" || t2=="")
{
document.write("<br>Mobile number cannot be blank or alphabets");
return false;
}

}
</script>
</head>
<body>


<ul>
  <li><a href="home.php">HOME</a></li>
  <li><a href="about.php">ABOUT US</a></li>
  <li><a href="login.php">LOGIN</a></li>
  <li><a href="sign.php">REGISTER</a></li>
  <li><a href="librarian_login.php">LIBRARIAN</a></li>
  <li><a href="collections.php">COLLECTIONS</a></li>
  <li><a href="services.php">SERVICES</a></li>
</ul>
<br><br><br>
<body>
<div>
<center><h1>HOME</h1></center>
</div>
<div style="float:left;width:45%">
<img src="C:\Users\Naveen Kumar\Downloads\BRUNCH.jpg">
</div>
<div style="float:right;width:55%">
<img src="C:\Users\Naveen Kumar\Downloads\COOKING.jpg">
</div>
<br><br>
<br><br><br>
<br><br>
<br><br><br>
<br><br>
<center>
<footer>Copyright &copy;IIT,MADRAS</footer>
</center>
</body>
</html>