<?php

function passwordStrength(string $pass): string
{
	$passLength = strlen($pass);
	switch($passLength){
		case $passLength <=6:
			return 'weak';
		case $passLength >=7 && $passLength<=9:
			return 'medium';
		case $passLength >=10:
			return 'strong';
	};}


echo(passwordStrength('123456'));//weak
echo(passwordStrength('1234567'));//medium
echo(passwordStrength('1234567890'));//strong

?>