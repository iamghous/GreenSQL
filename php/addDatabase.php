<title> Add Database | GREEN SQL</title>
<link rel="stylesheet" type="text/css" href="../css/form.css">
    <script src="../javascript/jquery-3.2.1.min.js"></script>
    <script src="../javascript/from1.js"></script>
<?php

require_once "header.php";
require_once "checkDatabase.php";
if(!isset($_SESSION['greenSql'])){
    
    echo "<div class ='accountError'> Please login to use this service thanks, Please <a href = 'account.php'>Click here</a> to login ";
}
else{
    $host = "";
$username = "";
$password = "";
 $name = "";
    
   
	$connection = mysqli_connect($dbhost1, $dbuser1, $dbpass1, $dbname1);
   

if (!$connection)
{
	http_response_code(400);
   echo "<script> databaseErrorForm('Unfortunately, We could not connect to the database!'); </script>";
	exit;
}

if (isset($_POST['host'])){
   
   /* 
    $host = $_POST['host'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    */
    $user = $_SESSION['username'];
    
    $host = mysqli_real_escape_string($connection, $_POST['host']);
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    
    //$user = "noman";
    
    
    
    

    
    $connection2 = @mysqli_connect($host, $username, $password, $name);

    if ( !$connection2){
        $connection2 = null;
    }
    
  
       
                                  
    if ($connection2 ){
         
 
        
   $query = "SELECT dbHost, dbUsername, dbPassword, dbName FROM addDatabase WHERE username = '$user'";
		
    
     
    
        $result = mysqli_query($connection, $query);
		
        $n = @mysqli_num_rows($result);
        
       
    if($n > 0){
    
        
        $query = "UPDATE addDatabase SET dbHost='$host', dbUsername = '$username', dbPassword = '$password', dbName='$name' WHERE username='$user'";
		
        $result = mysqli_query($connection, $query);
       
        
        if($result){
           
            require_once "checkDatabase.php";
            header("Refresh:0");
        }
	
        		
    }
			
		
		else
		{
          
       $query = "INSERT INTO addDatabase (`username`, `dbHost`,`dbUsername` ,`dbPassword`, `dbName`) VALUES ('$user', '$host' , '$username', '$password', '$name')";
		$result = mysqli_query($connection, $query);
         if(!$result){
             echo mysqli_error($connection);
             echo $user;
             echo $host;
             echo $username;
             echo $password;
             echo $name;
             
           
        }
            if($result){
        require_once "checkDatabase.php";
                header("Refresh:0");
        }
           
		} 
}
    else{
        echo "<script> databaseErrorForm('Unfortunately, There is no such Database Exist, Please enter correct Details'); </script>";   
        mysqli_close($connection);
    }
    
}


	 
    



    
?>
    
    <noscript>Sorry, your browser does not support JavaScript!</noscript>
    
    
<div class="container">
   
    
       <div align= "center" class ="addDatabaseFormContainer">
    <div class="header"><h1 class="form-h1">ADD DATABASE</h1></div>

        <form action="addDatabase.php"method="post"class="database" id ="database-form" name="databaseForm"onsubmit="return(addDatabaseValidate());">
     <input type="text"  name="host" placeholder="Database Host" 
            <?php if (isset($_SESSION['databaseHost'])){ echo "value = ".$_SESSION['databaseHost'];} ?>  />
            <p class="form-error" id ="database-host-error"> </p>
            
            <input type="text" name="username" placeholder="Database Username" <?php if (isset($_SESSION['databaseUsername'])){ echo "value = ".$_SESSION['databaseUsername'];} ?> />
            <p class="form-error" id ="database-username-error"> </p>
            
            <input type="password" name="password" placeholder="Database Password" <?php if (isset($_SESSION['databasePassword'])){ echo "value = ".$_SESSION['databasePassword'];} ?> />
            <p class="form-error" id ="database-password-error"> </p>
            
             <input type="text" name="name" placeholder="Database Name" <?php if (isset($_SESSION['databaseName'])){ echo "value = ".$_SESSION['databaseName'];} ?> />
            <p class="form-error" id ="database-name-error"> </p>
            
            <p class="form-error" id ="database-form-error">  </p>
            <input type="submit" value="ADD DATABASE" />
        </form>
        </div>
        
    </div> 
    
    
<?php   
 }require_once "footer.php";

?>
    
 
    