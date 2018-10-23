<?php

require_once "../php/header.php";
if (!isset($_SESSION['greenSql']))
{
?>






<html>
    <head> 

        
        
    </head>
<body>
    <link rel="stylesheet" type="text/css" href="../css/about.css">
    <title> About | GREEN SQL</title>
    
    <section class = "about-main">
      <h1 class = "about-h1">Welcome to <em>GREEN SQL</em></h1>
      <p class ="about-p">GREEN SQL is an Sql blocked based programming language that helps the beginners to learn the language in a fun and creative way.</p>
      <input class= "about-submit" type="submit" id="submit" value="SIGN UP HERE" onclick="location.href = 'account';" />
    </section>
    </body>
    
    <?php
}
    else {
        ?>
        <html>
    <head> 

        
        
    </head>
<body>
    <link rel="stylesheet" type="text/css" href="../css/about.css">
    
    
    <section class = "about-main">
      <h1 class = "about-h1">Welcome to <em>GREEN SQL</em>, <?php echo $_SESSION['username']?></h1>
      <p class ="about-p">GREEN SQL is an Sql blocked based programming language that helps the beginners to learn the language in a fun and creative way.</p>
      <input class= "about-submit" type="submit" id="submit" value="TRY GREEN SQL" onclick="location.href = 'application';" />
    </section>
    </body>
    
       
    
   <?php
    }
   require_once "../php/footer.php";
    ?>
    
    
 
    