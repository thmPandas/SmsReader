<?php
	//$xml=simplexml_load_file("C:\Users\Tim Garcia\Documents\Web\smsConvo2.xml") or die("Error: Cannot create object");


	//foreach($xml->children() as $sms) { 
    //echo $sms['address'] . ' ' . $sms['time'] . ' ' . $sms['date'] . ' ' . $sms['type'] . ' ' . $sms['body'] . ' ' . $sms['name'];
    //echo "<br>"; 
	
	//}

?>

<!DOCTYPE html> 
<html lang="en">
	<head>
		<title>Sms Reader</title>
		<link rel="stylesheet" href="main.css">


		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	</head>



	<body>
		<div class="panel panel-default">
  			<!-- Default panel contents -->
  			<div class="panel-heading"><h1>SMS Backup Reader</h1></div>
  			<div class="panel-body">
    			<h3><p class="message">Messages</p></h3>
    			<span class="iconSpan">
    				<span class="glyphicon glyphicon-open-file" aria-hidden="true"></span>
    			</span>
  			</div>

  			<!-- List group -->
  			<ul class="list-group">

  				<!-- loop here the data -->
  				<?php
  					echo"<li class='senderName'>Globe";
  					echo"<li class='textMessage'>";
  					echo"Need to send a text? We&apos;ve got you covered! Borrow Globe Emergency SMS with 3 texts to Globe/TM and P1 load for 1 day. On your next reload, P4 will be deducted. To register, text GTSOS to 3733. No advisories? Text STOP to 2682 for free.";
  					echo"</li>";
  					echo"</li>";
				?>
  				<!-- end php here -->
    			
  			</ul>
		</div>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>