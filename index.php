<?php
	//$xml = new DomDocument;
	//$xml->Load('C:\xampp\htdocs\SmsReader\SmsConvo.xml');
	$xml=simplexml_load_file("C:\Users\Tim Garcia\Documents\Web\SmsConvo.xml") or die("Error: Cannot create object");


	foreach($xml->children() as $sms) { 
    echo $sms['address'] . ' ' . $sms['time'] . ' ' . $sms['date'] . ' ' . $sms['type'] . ' ' . $sms['body'] . ' ' . $sms['name'];
    echo "<br>"; 
	
	}

?>