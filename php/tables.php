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
   
       $id = "";
     
$connection = mysqli_connect($dbhost3, $dbuser3, $dbpass3, $dbname3);

// connection failed, return an internal server error:
if (!$connection)
{ 
	// set the kind of data we're sending back and a failure code:
	header("Content-Type: application/json", NULL, 500);
	exit;
}

// select all from global and orders them by id 

$query = "SELECT table_name AS 'table' FROM information_schema.tables where table_schema='$dbname3'";


$result = mysqli_query($connection, $query);


while($row = mysqli_fetch_assoc($result)) : ?> 
  
<?php $title = $row['table']; $title .= '1'; ?>


<div style="background:#008080;" class="boxes" id="<?php echo $row['table']; ?>" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"ondragstart="dragLeave(this.id,document.getElementById(this.id).firstChild.id);"><div style="background:#008080;" class ="boxes3"title = "<?php echo $row['table']; ?>" id = "<?php echo $title; ?>" onclick="table_current(this.title);" draggable="true" ondragstart="start(event)" ondragend="end(event)">
        <?php echo $row['table']; ?> TABLE
      
      
      </div></div>


<?php endwhile; 
mysqli_close($connection);
}
?>

