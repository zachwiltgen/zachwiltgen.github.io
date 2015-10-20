<?php  
	$name = $_POST {'name'};
	$email = $_POST {'email'};
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  	$emailErr = "Invalid email format"; 
	}
	$affiliation = $_POST {'affiliation'};
	$request = $_POST {'request'};
	$to = "zach.m.wiltgen@gmail.com";
	$subject = "ZW Music Customs";

	mail ($to, $subject, $request, "From:" . $name "at" . $affiliation);
?>