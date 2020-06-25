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
  <li><a href="hm.php">HOME</a></li>
  <li><a href="about.php">ABOUT US</a></li>
  <li><a href="login.php">LOGIN</a></li>
  <li><a href="sign.php">REGISTER</a></li>
  <li><a href="add.php">ADD BOOKS</a></li>
  <li><a href="collections.php">COLLECTIONS</a></li>
  <li><a href="services.php">SERVICES</a></li>
</ul>
<br><br><br>
<body>
<div>
<center><h1>CENTRAL LIBRARY</h1></center>
</div>
<div style="float:left;width:45%">
<img src="central.jpg">
</div>
<div style="float:right;width:55%">
<p>Welcome to the Central Library which is one of the central support services of IIT Madras. 
The mission of the Central Library is to provide information services and access to bibliographic and 
full text digital and printed resources to support the scholarly and informational needs of the Institute Community.<br><br><br>
The Central Library is well equipped with modern facilities and resources in the form 
of CD-ROMs, On-line databases, audio video cassettes, books, e-journals, patents, e-standards, 
theses, reports, monographs etc. The library homepage will provide electronic access 
to various full text & bibliographical databases & e-journals.<br><br><br>
The Central Library has 9001:2015 certification by TUV NORD of Germany along with
other units of the Institute for the establishment and maintenance of quality library system, services & procedures.<br><br><br>
We invite you to visit the library in order to enjoy the wealth of 
printed resources available on our shelves.<br></p>
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