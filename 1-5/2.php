<?php

function usernameCheck($username)
{
	if(preg_match('/^[A-Z]{7,7}$/', $username))
	{
		return true;
	}else{
		return false;
	}
}

function passwordCheck($password)
{
	if(preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[#])(?=.*[A-Z])[0-9A-Za-z#]{9,15}$/', $password))
	{
		return true;
	}else{
		return false;
	}
}

$username = "REDIRAM";
$password = "Rediramdan#";


if(usernameCheck($username) && passwordCheck($password))
{
	echo 'Username valid Password valid';
}else{

	if(!usernameCheck($username))
	{
		echo 'Username tidak valid ';
	}
	if(!passwordCheck($password))
	{
		echo 'Password tidak valid';
	}
}
