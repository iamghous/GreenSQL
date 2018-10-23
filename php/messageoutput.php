<script src="javascript.js"></script>
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

$query = "";

if (!isset($_GET['query']))
{
	// set the kind of data we're sending back and an error response code:
	header("Content-Type: application/json", NULL, 400);
	// and send:
	
	// and exit this script:
	exit;
}
else
{
	$query = $_GET['query'];
	$connection = @mysqli_connect($dbhost3, $dbuser3, $dbpass3, $dbname3);




if (!$connection)
{
   http_response_code(404);
   echo "<p style='color:red;'><strong>Failed to connect to MySQL: " . @mysqli_connect_error() . "</strong> </p>";
	exit;
}


    
$result = @mysqli_query($connection, $query);


		

if (!$result) {
    if ($query == ""){
        
         http_response_code(404);
    echo "<p style='color:darkblue;'><strong> Hint: Please drag blocks to Playstation to generate and run a query.</strong> </p>";
        exit;
    }
    http_response_code(404);
    echo "<p style='color:darkred;'><strong> Error: " . @mysqli_error($connection) . "</strong> </p>";
        exit;
    }
    else{


// will fetch every single from the result and put it in the div
    
    if(!@mysqli_fetch_assoc($result))
     {
        $n = @mysqli_num_rows($result);
        http_response_code(404);
        
        echo "<p style='color:darkblue;'><strong>Database Updated " . $n .": rows affected </strong> </p>";
        exit;
    }
    else{

   echo" <table >";
     echo" <thead >";
  $result = @mysqli_query($connection, $query);   
        $n = @mysqli_num_rows($result);
        if($n > 0){
 echo "<tr>";
         $row = @mysqli_fetch_assoc($result);
     foreach($row as $key => $val) 
       echo"<th>$key</th> ";
    //}
    
  echo "</tr>";
     echo" </thead >";
    
    

// this query can return data ($result is an identifier):
    
  $result = @mysqli_query($connection, $query);
     echo" <tbody >";
      echo"<tr>";
    while($row = @mysqli_fetch_assoc($result)){   
     foreach($row as $key => $val){  
       echo "<td>$val</td>";
     }
        echo "</tr>";
     }
     

     
    }
        else{
            http_response_code(404);
            echo "<h3 style='color:darkred;'><strong>Unfortunately, there is no output for this request</strong></h3>";
            exit;
        }
    }
  echo" </tbody >";

    echo "</table>";
}

@mysqli_close($connection);
}
}
?>