<?php
require_once "../php/credentials.php";
require_once "../php/header.php";


session_start();
// should we show the signin form:

// message to output to user:


if (isset($_SESSION['greenSql']))
{
	$_SESSION = array();
	
	session_destroy();
    
    header("Location: account");

	

}
else{
    
    header("Location: account");
}
