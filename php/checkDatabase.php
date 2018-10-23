
<?php 

session_start();
if(!isset($_SESSION['greenSql'])){
    
}
else{
include_once "credentials.php";


	$connection = mysqli_connect($dbhost1, $dbuser1, $dbpass1, $dbname1);
    
$username = $_SESSION['username'] ;
  

if (!$connection)
{
	http_response_code(400);
  
	exit;
}

if (isset($_SESSION['greenSql'])){
   
    $query = "SELECT dbHost, dbUsername, dbPassword, dbName FROM addDatabase WHERE username = '$username';";
		
    
        $result = mysqli_query($connection, $query);
		// this query can return data ($result is an identifier):
        $n = @mysqli_num_rows($result);
    
    
    if($n > 0){
            // how many rows came back? (can only be 1 or 0 because usernames are the primary key in our table):
		
	if ($row = mysqli_fetch_assoc($result)){
      
       
        $_SESSION['databaseHost'] = $row['dbHost'];
        $_SESSION['databaseUsername'] = $row['dbUsername'];
        $_SESSION['databasePassword'] = $row['dbPassword'];
        $_SESSION['databaseName'] = $row['dbName'];
        
        
    }
    
        		
    }
			
		
		else
		{
       
        $_SESSION['databaseHost'] = $dbhost5;
        $_SESSION['databaseUsername'] = $dbuser5;
        $_SESSION['databasePassword'] = $dbpass5;
        $_SESSION['databaseName'] = $dbname5;
            
           
		} 
}
 


		



mysqli_close($connection);
}
?>