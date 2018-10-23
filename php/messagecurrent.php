<?php 


include_once "credentials.php";
session_start();
if(!isset($_SESSION['greenSql'])){
    
}
else{


       $dbhost3 = "";
       $dbuser3= "";
       $dbpass3="";
       $dbname3="";
       $dbhost3 = $_SESSION['databaseHost'] ;
     $dbuser3 =  $_SESSION['databaseUsername']; 
     $dbpass3  = $_SESSION['databasePassword'];
     $dbname3  = $_SESSION['databaseName']; 
$table = "";

if (!isset($_GET['table']))
{
	// set the kind of data we're sending back and an error response code:
	header("Content-Type: application/json", NULL, 400);
	// and send:
	
	// and exit this script:
	exit;
}
else
{
	$table = $_GET['table'];
	

$connection = @mysqli_connect($dbhost3, $dbuser3, $dbpass3, $dbname3);

// connection failed, return an internal server error:
if (!$connection)
{
	http_response_code(404);
   echo "<p style='color:red;'><strong>Failed to connect to MySQL: " . mysqli_connect_error() . "</strong> </p>";
	exit;
}

// select from global where messages are only by this particlular user
$query = "SELECT * FROM $table";

// this query can return data ($result is an identifier):
    
$result = @mysqli_query($connection, $query);


		

if (! $result){
    http_response_code(404);
    echo "<p style='color:darkred;'><strong>Error description: " . mysqli_error($conection) . "</strong> </p>";
        exit;
}
 

// will fetch every single from the result and put it in the div
   echo" <table >";
   echo" <thead >";

  
     $row = mysqli_fetch_assoc($result);
     $n = @mysqli_num_rows($result);
        if($n > 0){
 echo "<tr>";
     foreach($row as $key => $val){   
       echo"<th>$key</th> ";

     }
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
    else{
        
        echo "<h3 style='color:darkred;'><strong>Unfortunately, '$table' table is empty</strong></h3>";
    }
}
echo" </tbody >";
    echo "</table>";

mysqli_close($connection);
}
?>

