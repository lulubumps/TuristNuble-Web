<?php

//These variable values need to be changed by you before deploying
//Variables for connecting to your database.
//These variable values come from your hosting account.
$hostname = "https://10.128.0.2:3306";
$username = "loveran1";
$dbname = "loveran1_turistnuble";
$password = "1uc14n0uh";




//Connecting to your database
mysql_connect($hostname, $username, $password) OR DIE ("Unable to
connect to database! Please try again later.");
mysql_select_db($dbname);




function login(){

}

function register(){

}

function forgot(){

}


$action = $_GET['action'];

if($action == "login"){
	
	
	//Fetching from your database table.
	$query = "SELECT * FROM users where email = '".$_POST['email']."' AND pwd = '".$_POST['pwd']."'";
	$result = mysql_query($query);

	
	$valid = false;
	
	if ($result) {
		while($row = mysql_fetch_array($result)) {
			$valid=true;
		}
	}
	
	
	if($valid){
		echo '{"success":true,"msg":"User Verified Successfully"}';
	}
	else{
		echo '{"success":false,"msg":"Email and/or Password Invalid"}';
	}
	
	exit();
	
	
}
else if($action == "register"){
	//Fetching from your database table.
	$query = "SELECT * FROM users where email = '".$_POST['email']."'";
	$result = mysql_query($query);

	
	$user_exists = false;
	
	if ($result) {
		while($row = mysql_fetch_array($result)) {
			$user_exists = true;
		}
	}
	
	if($user_exists){
		echo '{"success":false,"msg":"Users Exists"}';
	}
	else{
		$query = "INSERT INTO users (email,pwd) VALUES ('".$_POST['email']."', '".$_POST['pwd']."')";
		if(mysql_query($query)){
			echo '{"success":true,"msg":"User registered successfully"}';
		}
		else{
			echo '{"success":false,"msg":"Unable to register user"}';
		}
		
		
	}
	
	exit();

}
else if($action == "forgot"){
	//$email = $_POST['email'];
	echo '{"success":false,"msg":"Feature not yet implemented"}';
	
	
	
}
else{
	exit();
}