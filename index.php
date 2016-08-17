<?php
	$xml=simplexml_load_file("C:\Users\Tim Garcia\Documents\Web\smsConvo2.xml") or die("Error: Cannot create object");
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
  					$senderList = array();
  					$messageList = array();
  					$sender;
  					$name;
  					$number;
  					$message;
  					$trig = 0;
  					$messageCount= 0;

  					foreach($xml->children() as $sms) { 
  						$name = $sms['name'];
    					$number = $sms['address'];
    					$message = $sms['body'];
    					//echo $sender . "<br>";
    					

    					//echo  "Strig first value " . $trig . "<br><br>";

    					foreach($senderList as $x){
							if("$name" != ""){
								if("$name" == "$x"){
    								$trig = 1;
    								//echo "strig to 1" . "<br>";
    								break;

    							}else{
    								$strig = 0;
    							}
							}
							else{
								if("$number" == "$x"){
    								$trig = 1;
    								//echo "strig to 1" . "<br>";
    								break;

    							}else{
    								$strig = 0;
    							}
							}
    					}

    					if("$name" != ""){
    						if($trig == 0){
    							$messageCount++;
    							//echo "<div class='messageCount'>";
    							echo "<li class='senderName'>" . $name;
  								echo "<li class='textMessage'>";
  								echo $message;
  								echo "</li>";
  								echo "</li>";
  								//echo "</div>";

  								$senderList[] = $name;
  							}
    					}
    					else{
    						if($trig==0){
    							$messageCount++;
    							//echo "<div class='messageCount'>";
    							echo "<li class='senderName'>" . $number;
  								echo "<li class='textMessage'>";
  								echo $message;
  								echo "</li>";
  								echo "</li>";
  								//echo "</div>";

  								$senderList[] = $number;
    						}
    					}

    					$trig = 0;
    					

					}
					echo "messageCount is" . $messageCount .  " <br>";
				?>
  				<!-- end php here -->
    			
  			</ul>
		</div>

		<!-- Latest compiled and minified JavaScript -->


		
		<script src="jquery.js"></script>

		<script>
			$(function() {
				$('.senderName').on('click', function(){
					alert('yeah');
				});
				$('.textMessage').on('click', function(){
					alert('yeah');
				});
				
				
			});
		</script>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>