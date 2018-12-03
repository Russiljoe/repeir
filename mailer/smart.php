<?php

if (
	mail (
		"russiljoe@mail.ru", 
		"Text Ajax", 
		$_REQUEST["fio"] . " " . $_REQUEST["phone"]
	)
)
	echo "1";
else 
	echo "0";
	
?>