<?php


if(isset($_REQUEST["isvalid"])){
	
	$youremail = "upodesta@gmail.com"; // Enter your email here!!
	$usersname = $_POST["usersname"];
	$usersemail = $_POST["usersemail"];
	$usersphonenumber = $_POST["usersphone"];
	$mailsubject = "Contact From Your Slickform";
	$subject = $_POST["userssubject"];
	$usersmessage = $_POST["userscomment"];
	$message =
	
	"$usersname has contacted you from your site.
	
	$subject:
	
	Their Message is as follows:
	
	$usersmessage
	
	...............................................
	
	Contact details:
	
	Phone Number: $usersphonenumber
	Email Address: $usersemail"; 
	
	$headers = 'From:' . $usersemail . "\r\n";
	mail($youremail, $mailsubject, $message, $headers);
	
	echo "success";
	
} else {
	
	echo "failed";
	
}