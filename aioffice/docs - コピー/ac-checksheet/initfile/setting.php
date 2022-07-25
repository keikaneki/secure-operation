<?php

$fromAddress 	= "secure-info@secureinc.co.jp";
$fromUserName 	= "secure-info@secureinc.co.jp";

	$mail->IsSMTP();
	$mail->Host			= 'smtp.office365.com';
	$mail->Port			= 587;
	$mail->SMTPAuth		= true;
	$mail->SMTPSecure	= "tls";
	$mail->Username		= $fromUserName;
	$mail->Password		= 'Xn4ZWRq3';
	$mail->From			= $fromAddress;

?>