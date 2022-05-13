<?php
	include 'includes/phpmailer/class.phpmailer.php';
 
	$mail = new PHPmailer();
	$mail->IsMail();
  	$mail->IsHTML(true);
	$mail->SetLanguage('en','../phpmailer/language/');
  	$mail->FromName=$from;
  	$mail->From=$mailExped;
  	$mail->AddAddress($mailDest);
  	$mail->AddReplyTo($mailExped);    
  	$mail->Subject=$sujet;
	$mail->Body='<html><body><head><style>.entete{background-color:#0000FF;color:#FFFFFF;border:0px;font-size:15px}';
	$mail->Body.='.ligne{color:#0000FF;border:solid 0px;text-align:left;font-size:15px;}</style></head>';
	$mail->Body.='<table><tr><td>Message envoy� par : '.$mailExped.'</td></tr>';
	$mail->Body.='<tr><td class="ligne">&nbsp;</td></tr>';
	$mail->Body.='<tr><td class="ligne">'.nl2br($texte_message).'</td></tr></table></body></html>';

	
  	//$mail->Body=$msg;
	if ($mail->Send()) 
		echo 'OK' ;
	else
		echo $mail->ErrorInfo ;


$to = 'marise.hellard@gmail.com'; // Le destinataire de votre e-mail
$subject = 'test envoi mail';
$message = 'Bonjour,\nCeci est un message de test.\nA bientot !';
$headers = 'From: "Webmaster de Votresite.com" <bts.sio@stadjutor.com>';
$headers .= 'Message-ID: <test1234567890>';
if (mail($to, $subject, $message, $headers)) echo 'OK' ; else echo 'KO' ;

?>
