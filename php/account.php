<title> My Account | GREEN SQL</title>
<?php
require_once "../php/credentials.php";
require_once "../php/header.php";
// default values we show in the form:
$username = "";
$password = "";
$email = "";
$cPassword = "";
$loginError = "";
$registerError = "";

session_start();
// should we show the signin form:

// message to output to user:


if (isset($_SESSION['greenSql']))
{
	// user is already logged in, just display a message:
    
    $show_signin_form = false;
    echo "<div class ='accountError'> You have already logged in, Please <a href = 'logout'>Click here</a> if you want to logout ";
	

}
else {
	// user is already logged in, just display a message:
    $show_signin_form = true;
	

}
 if (isset($_POST['email']))
{
	// user has just tried to log in:
	
	// connect directly to our database (notice 4th argument) we need the connection for sanitisation:
	$connection = mysqli_connect($dbhost1, $dbuser1, $dbpass1, $dbname1);
	
	// if the connection fails, we need to know, so allow this exit:
	if (!$connection)
	{
        $registerError = "Could not connect to the Server, Please try again.";
		die("Connection failed: " . $mysqli_connect_error);
	}	
	
	// SANITISATION (see helper.php for the function definition)
	
	// take copies of the credentials the user submitted and sanitise (clean) them:
	$username = mysqli_real_escape_string($connection, $_POST['username']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $cPassword = mysqli_real_escape_string($connection, $_POST['cPassword']);
	
	
	
	// check that all the validation tests passed before going to the database:
	if(true){
		
		// check for a row in our members table with a matching username and password:
		$query = "INSERT INTO users (username, email, password) VALUES ('$username','$email','$password');";
		
		// this query can return data ($result is an identifier):
		if($result = mysqli_query($connection, $query)){
		
		// how many rows came back? (can only be 1 or 0 because usernames are the primary key in our table):
        
		
			// set a session variable to record that this user has successfully logged in:
			$_SESSION['greenSql'] = true;
			// and copy their username into the session data for use by our other scripts:
			$_SESSION['username'] = $username;
			
			// show a successful signin message:
            header("Location: about");
			
		}
        
		else
		{
            $_SESSION['greenSql'] = false;
            $_SESSION['username'] = false;
			// no matching credentials found so redisplay the signin form with a failure message:
			$show_signin_form = true;
			// show an unsuccessful signin message:
			$registerError = "Please enter correct Details, email or username already exist in the database";
		}
     
		
	}
	
	mysqli_close($connection);

}
        

else if(isset($_POST['loginUsername'])) {
    
            $connection = mysqli_connect($dbhost1, $dbuser1, $dbpass1, $dbname1);
	
	// if the connection fails, we need to know, so allow this exit:
	if (!$connection)
	{
        $loginError = "Could not connect to the Server, Please try again.";
		die("Connection failed: " . $mysqli_connect_error);
	}	
	
	// SANITISATION (see helper.php for the function definition)
	
	// take copies of the credentials the user submitted and sanitise (clean) them:
	$username = mysqli_real_escape_string($connection, $_POST['loginUsername']);
    
    $password = mysqli_real_escape_string($connection, $_POST['loginPassword']);
    
	
	
	
	// check that all the validation tests passed before going to the database:
	if(true){
		
		// check for a row in our members table with a matching username and password:
		$query = "SELECT username, password FROM users WHERE username = '$username' AND password = '$password' ;";
		$result = mysqli_query($connection, $query);
		// this query can return data ($result is an identifier):
       
        $n = @mysqli_num_rows($result);
        if($n > 0){
            // how many rows came back? (can only be 1 or 0 because usernames are the primary key in our table):
		
			
		// if there was a match then set the session variables and display a success message:
		
			// set a session variable to record that this user has successfully logged in:
			$_SESSION['greenSql'] = true;
			// and copy their username into the session data for use by our other scripts:
			$_SESSION['username'] = $username;
			echo $username;
            $show_signin_form = false;
			// show a successful signin message:
            header("Location: about");
        		
    }
			
		
		else
		{
            
            $_SESSION = array();
			// no matching credentials found so redisplay the signin form with a failure message:
			$show_signin_form = true;
			// show an unsuccessful signin message:
			$loginError = "Username or Password is incorrect!";
		}
    
    }
		
	
	
	mysqli_close($connection);
        }
?>







<html>
    <head> 

        
        
    </head>
<body>
    <link rel="stylesheet" type="text/css" href="../css/form.css">
    <script src="../javascript/jquery-3.2.1.min.js"></script>
    <script src="../javascript/from1.js"></script>
    <noscript>Sorry, your browser does not support JavaScript!</noscript>
    
 <?php if ($show_signin_form ==  true){  
    ?>
<div class="container">
    <div class="login-container">
          <div class="login-container1">
    <div class="header"><h1 class="form-h1">Login</h1></div>
  
        <form method ="post"class="login" id="login-form"  name="loginForm"onsubmit="return(loginValidate());" >
            <input type="username" placeholder="Username" name="loginUsername"id ="login-username" />
            <p class="form-error" id ="login-username-error"> </p>
            
            <input type="password" placeholder="Password" name="loginPassword"id ="login-password"/>
             <p class="form-error" id ="login-password-error"> </p>
           
            <p class="form-error" id ="login-form-error"> </p>
            <input type="submit" value="Login" />
        </form>
        </div>
        </div>
    
    
    <div class="register-container">
        <div class="register-container1">
    <div class="header"><h1 class="form-h1">Register</h1></div>

        <form action= "account"method="post"class="register" id ="register-form" name="registerForm"onsubmit="return(RegisterValidate());">
            <input type="username"  name="username"placeholder="Username" />
            <p class="form-error" id ="register-username-error"> </p>
            
            <input type="email" name="email" placeholder="Email" />
            <p class="form-error" id ="register-email-error"> </p>
            
            <input type="password" name="password" placeholder="Password - minimum 6 letters, at least one number" />
            <p class="form-error" id ="register-password-error"> </p>
            
             <input type="password" name="cPassword" placeholder="Confirm Password" />
            <p class="form-error" id ="register-cPassword-error"> </p>
            
            <p class="form-error" id ="register-form-error"> </p>
            <input type="submit" value="Register" />
        </form>
        </div>
        </div>
    
    </div>
    <?php 
    
     echo "<script> document.getElementById('register-form-error').innerHTML = '$registerError'</script>";
    echo "<script> document.getElementById('login-form-error').innerHTML = '$loginError'</script>";
}
       
    
   
   require_once "../php/footer.php";
    ?>
    
    
 
    