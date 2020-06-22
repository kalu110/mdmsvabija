<?php

if (isset($_POST['submit'])){
	$name = $_POST['name'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$text = $_POST['text'];

	$mailTo = "novakovicdragan97@gmail.com";
	$headers = "From: ".$email;
	$txt = "You have received an e-mail from ".$name."\n\n".$text;
	mail($mailTo, $lastname, $txt, $headers);
	header("Location: contact.html");

}