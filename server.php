<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
	
	  if(empty($email) || empty($password)) {
        die("You didnt enter your email although there was front-end validation");
    }


}

?>