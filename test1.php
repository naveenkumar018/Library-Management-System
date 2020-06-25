<html>
<head>
<title>Sending SMS</title>
</head>
<body background="library 2.jpg">
<div class="container">
<center><h1>Verify your Mobile Number</h1></center>
<hr>
<div class="row">
<div class="col-md-9 col-md-offset-2">
<?php
if(isset($_POST['sendotp']))
{
require('textlocal.class.php');
require('credentials.php');

$textlocal = new Textlocal(false,false,API_KEY);

$numbers = array(MOBILE);
$sender = 'TXTLCL';
$otp = mt_rand(10000,99999);
$message="Hello" . $_POST ['uname'] ." This is your OTP: " .$otp;

try {
    $result = $textlocal->sendSms($numbers, $message, $sender);
	setcookie('otp' , $otp);
    echo "OTP successfully sent";
} catch (Exception $e) {
    die('Error: ' . $e->getMessage());
}
}
if(isset($_POST['verifyotp']))
{
	$otp=$_POST['otp'];
	if($_COOKIE['otp'] == $otp)
	{
		echo "<script>location.href='http://localhost/naveen/search.php'</script>";
		echo "Congratulations,Your mobile is verified";
	} 
	else
	{
		echo "invalid otp";
	}
}
?>
</div>
<div class="col-md-9 col-md-offset-2">
<center>
<form role="form" method="post" enctype="multipart/form-data">
<div class="row">
<div class="col-sm-9 form-group">
<label for="uname">Name</label>
<input type="text" class="form-control" id="uname" name="uname" value="" maxlength="10" placeholder="Enter your name" required=""><br><br>
</div>
</div>
<div class="row">
<div class="col-sm-9 form-group">
<label for="mobile">Mobile</label>
<input type="text" class="form-control" id="mobile" name="mobile" value="" maxlength="10" placeholder="Enter valid Number" required=""><br><br>
</div>
</div>
<div class="row">
<div class="col-sm-9 form-group">
<button type="submit" name="sendotp" class="btn btn-lg btn-success btn-block">Send OTP</button>
</div>
</div>
</form>
<form method="POST" action="">
<div class="row">
<div class="col-sm-9 form-group">
<label for="otp">OTP</label>
<input type="text" class="form-control" id="otp" name="otp" placeholder="Enter OTP" maxlength="5" required=""><br><br>
</div>
<div class="row">
<div class="col-sm-9 form-group">
<button type="submit" name="verifyotp" class="class="btn btn-lg btn-info btn-block">verify</button>
</center>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</body>
</html>