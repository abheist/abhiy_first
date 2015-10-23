<?php
	if(isset($_POST['submit'])) 
	{
		if(!empty($_POST['email']) && !empty($_POST['message']))
		{
			$to="abhishek291093@gmail.com";
			$text=$_POST['message'];
			$sub="Contact Request from ".$_POST['email'];
			$headers  = 'MIME-Version: 1.0' . "\r\n";
	        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= 'From: Team Cotanz' . "\r\n";
			$headers .= 'Reply-To: '.$_POST['email']."\r\n";
			$fpart="-f".$_POST['email'];
			if(mail($to,$sub,$text, $headers, $fpart))
				echo "Submitted";
			else
				echo "Error";
		}
		else
			echo "Error";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Me</title>
</head>
<body>











	<form method="post" action=".">
		<input type="email" name="email" placeholder="Your Email Address"><br/>
		<textarea name="message" placeholder="Write your message here"></textarea><br/>
		<input type="submit" name="submit" value="Send">
	</form>
</body>
</html>