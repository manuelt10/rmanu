<?php 

if(empty($_POST))
{
	session_start();
	$_SESSION["message"] = "arg!";
	session_write_close();
	header('location: '. $_SERVER["HTTP_REFERER"]);
}
else if($_POST["x"] + $_POST["y"] <> $_POST["xy"])
{
	session_start();
	$_SESSION["message"] = "You are not a human!";
	session_write_close();
	header('location: '. $_SERVER["HTTP_REFERER"]);
}
else
	{
		$to = 'manu.rosarob@gmail.com';
		$subject = 'Message from RMANU! - ' . $_POST["subject"]; 
		$message = '
			<html>
			<head>
			</head>
			<body>
				<div class="container">
					
					<div class="body">
						<span>' . $_POST["message"] . '</span><br>
						<span>' . $_POST["email"] . '</span>
					</div>
				</div>
			</body>
		</html>
			';
			
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'From: Rmanu <message@rmanu.com>' .  "\r\n";
		mail($to,$subject,$message,$headers);
		session_start();
		$_SESSION["message"] = "The message has been sent";
		session_write_close();
		header('location: '. $_SERVER["HTTP_REFERER"]);
	}

?>