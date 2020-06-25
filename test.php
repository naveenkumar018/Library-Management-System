require('textlocal.class.php');
require('credentials.php');
$textlocal=new Textlocal(false,false,API_KEY);
$numbers=array($num);
$sender='TXTLCL';
$message='Please return the book';
try{
$result=$textlocal->sendSms($numbers,$message,$sender);
}catch(Exception $e){
die('Error:'.$e->getMessage());
}