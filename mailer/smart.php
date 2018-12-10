<?php
if (
	mail("russiljoe@gmail.com", "Text Ajax", $_REQUEST["fio"] . " " . $_REQUEST["phone"])
)
	echo "1";
else 
	echo "0";
?>