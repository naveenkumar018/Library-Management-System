<?php
$mailto=$_POST['mail_to'];
$mailSub=$_POST['mail_Sub'];
$mailMsg=$_POST['mail_Msg'];
require'PHPMailer-master/PHPMailerAutoload.php';
$mail= new PHPMailer();
$mail->IsSmtp();
$mail->SMTPDebug=1;
$mail->SMTPAuth=true;
$mail->SMTPSecure->'ssl';
$mail->HOST="smtp.gmail.com";
$mail->Port=465;//or 587
$mail->IsHTML(true);
$mail->Username="nk266383@gmail.com";
$mail->Password="VIRATkholi@18";
$mail->SetFrom("nk266383@gmail.com");
$mail->Subject=$mailSub;
$mail->Body=$mailMsg;
$mail->AddAddress($mailto);

if(!$mail->Send())
{
	echo "Mail Not Sent";
}
else
{
	echo "Mail Sent";
}