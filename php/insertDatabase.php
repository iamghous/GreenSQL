
<?php 

session_start();
if(isset($_SESSION['greenSql'])){
    
}
else{
include_once "credentials.php";

$host = "";
$username = "";
$password = "";
 $name = "";
	$connection = mysqli_connect($dbhost1, $dbuser1, $dbpass1, $dbname1);
   

if (!$connection)
{
	http_response_code(400);
  
	exit;
}

if (isset($_POST['host'])){
    
    $host = $_POST['host'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $userName = $_SESSION['username'];
    
    if ($connection2 = mysqli_connect($host, $username, $password, $name)){
     
        mysqli_close($connection2);
        
    $query = "SELECT dbHost, dbUsername, dbPassword, dbName FROM addDatabase WHERE username = '$userName';";
		
    
        $result = mysqli_query($connection, $query);
		// this query can return data ($result is an identifier):
        $n = mysqli_num_rows($result);
        
    if($n > 0){
    
        
        $query = "UPDATE addDatabase SET dbHost='$host', dbUsername = '$username', dbPassword = '$password', dbName='$name' WHERE username='$userName';";
		$result = mysqli_query($connection, $query);
        if($result){
            require_once "checkDatabase.php";
        }
	
        		
    }
			
		
		else
		{
       $query = "INSERT INTO addDatabase (`username`, `dbHost`,`dbUsername` ,`dbPassword`, `dbName`)
VALUES ('$userName', '$host' , '$username', '$password', '$name');";
		$result = mysqli_query($connection, $query);
        if($result){
            require_once "checkDatabase.php";
        }
		} 
}
    else{
          header("Location: http://localhost/greensql/php/addDatabaseError.php");   
    }
    
}


		
mysqli_close($connection);

}


?>