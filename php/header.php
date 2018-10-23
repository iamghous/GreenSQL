<html>
    <head>
        <link rel="shortcut icon" href="../logos/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="../css/greenSQL1.css">
        <script src="../javascript/greenSQLjquerey1.js"> </script>
        <script src="../javascript/jquery-3.2.1.min.js"></script>
        </head>
    
    
     <body>
    
<header class ="mainPage">
  <nav>
    
    
<?php
require_once "credentials.php";

// database connection details:
//require_once "credentials.php";

// our helper functions:
//require_once "helper.php";

// start/restart the session:
session_start();


if (isset($_SESSION['greenSql']))
{
	
?>    

    <ul class="menu">
      <li class="menuLi" ><a class="menuA"href="about">About</a></li>
        <li class="menuLi" ><a class="menuA"href="basicApp">Basic App</a></li>
      <li class="menuLi" ><a class="menuA"href="application">Pro App</a></li>
        <li class="menuLi" ><a class="menuA"href="addDatabase">Add Database</a></li>
	<li class="menuLi" ><a class="menuA"href="guide">Guide</a></li>
      <li class="menuLi" ><a class="menuA"href="logout">Logout(<?php echo $_SESSION['username']; ?>)</a></li>
      
    </ul>
    <div class="show-menu"><img class ="logo"src="../logos/logo3.PNG" href = "about"></div>
<?php
}
    
    else{
      ?> 
      <ul class="menu">
      <li class="menuLi" ><a class="menuA"href="about">About</a></li>
      <li class="menuLi" ><a class="menuA"href="application">Green Sql</a></li>
          
           <li class="menuLi" ><a class="menuA"href="guide">Guide</a></li>
      <li class="menuLi" ><a class="menuA"href="account">My Account</a></li>
      
    </ul>
    <div class="show-menu"><img class ="logo"src="../logos/logo3.PNG"></div>
    
        
        <?php
        
        
    }
    ?>
    
  </nav>
  
  
  
</header>
         
    <section class = "maincontent">
       

      