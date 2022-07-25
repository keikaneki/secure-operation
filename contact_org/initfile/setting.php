<?php

$fromAddress 	= "send-guarden@secureinc.co.jp";
$fromUserName 	= "send-guarden@secureinc.co.jp";

	$mail->IsSMTP();
	$mail->Host			= 'smtp.office365.com';
	$mail->Port			= 587;
	$mail->SMTPAuth		= true;
	$mail->SMTPSecure	= "tls";
	$mail->Username		= $fromUserName;
	$mail->Password		= 'i3!PSw25$CY%';
	$mail->From			= $fromAddress;

?>