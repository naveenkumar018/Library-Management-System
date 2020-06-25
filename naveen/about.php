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
<center><h1>HISTORY</h1></center>
</div>
<div style="float:left;width:45%">
<img src="central.jpg">
</div>
<div style="float:right;width:55%">
<p>The Indian Institute of Technology Madras (IITM) was established in 1959 by the 
Government of India as an Institute of National Importance. Recently, IIT Madras has 
celebrated 45th Institute day on 15-04-2004. The Central Library also started 
functioning from the year 1959 from the Department of Civil Engineering, in 1965 
the Central Library shifted to Independent Building infront of Institute Main Guest House.<br><br><br>
In view of latest development and future needs, the Institute decided to build 
Millennium Library Building with state-of-the-art facilities infont of Administrative 
Building. The first phase of Millennium Library Building was inaugurated by then 
Director Prof. R. Natarajan on 07th July 2000 and the Second Phase of Millennium 
Library Building was inaugurated by our former Director, Prof. M.S.Ananth on 07th 
January 2004. Digital Knowledge Center - a unique facility with 101 computer 
systems facilitating access to large number of e-resources on Level-II of the Central 
Library was also inaugurated by our Former Director Prof. M.S.Ananth on 30-06-2004. 
Prof. M.S. Ananth, Former Director, inaugrated Children's Library Corner on 10-10-2005.<br><br></p>
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