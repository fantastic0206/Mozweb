<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
  {
        $secret = '6LcoYPEUAAAAAFlP6yQZkH29LJKUofREI6zxPkSE';
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if($responseData->success)
        {
        
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		$date = date("d/m/Y");
		$time = date("H:i:s");
		$ip = getenv("REMOTE_ADDR");
		$navegador = $_SERVER['HTTP_USER_AGENT']; 
        $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip)); 
		
		// Sender Email and Name
		$from="From: $name<$email>\r\nReturn-path: $email";
		//$from = stripslashes($_POST['name'])."<".stripslashes($_POST['email']).">";

		// Recipient Email Address
		$to = 'contacto@mozweb.co.mz';

		// Email Subject
		$subject = "$subject";

		/* Email Header
		$headers = "From: $from\r\n" .
               "MIME-Version: 1.0\r\n" .
		*/

        // Message Body
		$body = " Name: $name \n Email: $email \n Phone: $phone \n Subject: $subject \n\n Message:\n\n $message \n\n\n Visitor Information \n IP: $ip \n Country: ". $ipdat->geoplugin_countryName ." \n City:". $ipdat->geoplugin_city ." \n Continent: ". $ipdat->geoplugin_continentName ." \n Latitude: ". $ipdat->geoplugin_latitude ." \n Longitude: ". $ipdat->geoplugin_longitude ." \n Currency Symbol: ". $ipdat->geoplugin_currencySymbol ." \n Currency Code: ". $ipdat->geoplugin_currencyCode ." \n Timezone: ". $ipdat->geoplugin_timezone ." \n Date: $date Time: $time \n Browser: $navegador";

 		// Check that data was sent to the mailer.
		if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
			echo 'Please fill all the fields and try again.';
			exit;
		}

		// If there are no errors, send the email
		if (mail($to, $subject, $body, $from)) {
			echo 'Thank You '.$name.'! We will be in touch with you very soon.';
		}
	}
  }
  else
  {
	  echo "MOZWEB";
  }
?>
