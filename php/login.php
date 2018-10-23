<script src="../javascript/from1.js"></script>
<?php 

session_start();
include_once "credentials.php";


$username = "";
$password = "";


if (!isset($_GET['username']))
{
	// set the kind of data we're sending back and an error response code:
	header("Content-Type: application/json", NULL, 400);
	// and send:
	
	// and exit this script:
	exit;
}
else
{
	$username = $_GET['username'];
    $password = $_GET['password'];
	$connection = mysqli_connect($dbhost1, $dbuser1, $dbpass1, $dbname1);

if($connection)
{

}


if (!$connection)
{
	http_response_code(400);
  
	exit;
}


 $query = "SELECT username, password FROM users WHERE username = '$username' AND password = '$password' ;";
		$result = mysqli_query($connection, $query);
		// this query can return data ($result is an identifier):
        $n = mysqli_num_rows($result);
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
            http_response_code(400);
  
	        exit;
        		
    }
			
		
		else
		{
			// no matching credentials found so redisplay the signin form with a failure message:
			$show_signin_form = true;
			// show an unsuccessful signin message:
			$message = "<script> document.getElementById('register-form-error').innerHTML = 'Registration failed, please try again';</script>";
		}


		

if (! $result) {
        http_response_code(401);
        exit;
    }
    else{


// will fetch every single from the result and put it in the div
  
    if(!mysqli_fetch_assoc($result))
     {
        http_response_code(402);
        exit;
    }
    else{

   echo" <table >";
     echo" <thead >";
  $result = mysqli_query($connection, $query);      
 echo "<tr>";
         $row = mysqli_fetch_assoc($result);
     foreach($row as $key => $val) 
       echo"<th>$key</th> ";
    //}
    
  echo "</tr>";
     echo" </thead >";
    
    

// this query can return data ($result is an identifier):
    
  $result = mysqli_query($connection, $query);
     echo" <tbody >";
      echo"<tr>";
    while($row = mysqli_fetch_assoc($result)){   
     foreach($row as $key => $val){  
       echo "<td>$val</td>";
     }
        echo "</tr>";
     }
     

     }
  echo" </tbody >";

    echo "</table>";
}

mysqli_close($connection);
}
?>