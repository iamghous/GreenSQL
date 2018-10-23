<!DOCTYPE html>
<?php
require_once "checkDatabase.php";
session_start();

if(!isset($_SESSION['greenSql'])){
    header("Location: account");
  //  echo "<div class ='accountError'> Please login to use this service thanks, Please <a href = 'account.php'>Click here</a> to login ";
}
else{
    
   require_once "header.php";
   


?>

<html>
    <title> Application | GREEN SQL</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="../css/maincss.css">
    
    <script src="../javascript/javascript.js"></script>
<script src="../javascript/jquery-3.2.1.min.js"></script>
<script src="../javascript/myjquerey.js"></script>
<title>Green Sql</title>


<body>
<div class="blended_grid">
  
  <div class="appContent">
    <div class="side">
      <div class="sideTop">
          <div class = "stripe" style="background: #009970;">
        <h1 class= "appPage"style="color: white; text-align: center;"> BLOCKS </h1>
              </div>
   <div id = "blocks"> 
<div style="background:#008080;" class="boxes" id="basic" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)">  <h4> BASIC COMMANDS</h4>  </div>
         
<div  class="boxes" id="select" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" ondragstart="dragLeave(this.id,document.getElementById(this.id).firstElementChild.id);"><div style="background:darkblue;" class ="boxes3"title ="SELECT" id = "select1" draggable="true" ondragstart="start(event);" ondragend="end(event)">
        SELECT 
      <input type="text" name="select" id = "selectinput1" placeholder="name, age" onkeyup="changeTitle(document.getElementById(this.id).parentElement.id,'SELECT')" onfocus="document.getElementById(this.id).parentElement.draggable=false;" onfocusout="document.getElementById(this.id).parentElement.draggable=true;">
      
      </div></div>
<div style="background:orange;" class="boxes" id="from" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"ondragstart="dragLeave(this.id,document.getElementById(this.id).firstChild.id);"><div style="background:#a17f1a;" class ="boxes3"title = "FROM" id = "from1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
        FROM 
      
      
      </div></div>            


<div style="background:darkgreen" class="boxes" id="where" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"ondragstart="dragLeave(this.id,document.getElementById(this.id).firstChild.id);"><div style="background:darkgreen"class ="boxes3"title = "WHERE" id = "where1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
        WHERE 
      <input type="text" name="where" id = "whereinput" placeholder="age > 18" onkeyup="changeTitle(document.getElementById(this.id).parentElement.id,'WHERE')"onfocus="document.getElementById(this.id).parentElement.draggable=false;" onfocusout="document.getElementById(this.id).parentElement.draggable=true;">
      
      </div></div>
          
<div style="background:#008080;" class="boxes" id="select" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)">  <h4>TABLE MODIFIERS</h4>  </div>
          

<div style="background:purple;" class="boxes" id="update" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"ondragstart="dragLeave(this.id,document.getElementById(this.id).firstChild.id);"><div style="background:purple;" class ="boxes3"title = "UPDATE" id = "update1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
        UPDATE 
      
      
      </div></div>

<div class="boxes" id="delete" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"ondragstart="dragLeave(this.id,document.getElementById(this.id).firstChild.id);"><div style="background:#7300e6;" class ="boxes3"title = "DELETE" id = "delete1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
        DELETE 
      
      
      </div></div>


          
<div style="background:#808000;" class="boxes" id="dropTable" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"ondragstart="dragLeave(this.id,document.getElementById(this.id).firstChild.id);"><div style="background:#808000;" class ="boxes3"title = "DROP TABLE" id = "dropTable1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
        DROP TABLE 
      
      
      </div></div>
          

<div style="background:darkred;" class="boxes" id="alterTable" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"ondragstart="dragLeave(this.id,document.getElementById(this.id).firstChild.id);"><div style="background:darkred;" class ="boxes3"title = "ALTER TABLE" id = "alterTable1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
        ALTER TABLE
      
      
      </div></div>
          
<div  style="background:#663300" class="boxes" id="insertInto" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"ondragstart="dragLeave(this.id,document.getElementById(this.id).firstChild.id);"><div style="background:#663300;" class ="boxes3"title = "INSERT INTO" id = "insertInto1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
        INSERT INTO
      
      
      </div></div> 
<div class="boxes" id="set" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"ondragstart="dragLeave(this.id,document.getElementById(this.id).firstChild.id);"><div style="background:#cc0066;"  class ="boxes3"title = "SET" id = "set1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
    SET     
    <input style="width:105px" type="text" name="setinput" id = "setinput1" placeholder= "e.g. name = 'john'"onkeyup="changeTitle(document.getElementById(this.id).parentElement.id,'SET')"onfocus="document.getElementById(this.id).parentElement.draggable=false;" onfocusout="document.getElementById(this.id).parentElement.draggable=true;"  > 
    
     </div></div>
          
<div class="boxes" id="values" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"ondragstart="dragLeave(this.id,document.getElementById(this.id).firstChild.id);"><div style="background:#a17f1a;"  class ="boxes3"title = "VALUES" id = "values1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
    VALUES  (   
    <input style="width:95px" type="text" name="valueinput" id = "valueinput1" placeholder= "00"onkeyup="changeTitle(document.getElementById(this.id).parentElement.id,'VALUES')"onfocus="document.getElementById(this.id).parentElement.draggable=false;" onfocusout="document.getElementById(this.id).parentElement.draggable=true;"  > )
    
     </div></div> 
    
   <div style="background:#008080;" class="boxes" id="select" > <h4> TABLE CREATOR</h4>  </div>
          
<div style="background:darkblue;" class="boxes" id="createTable" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"ondragstart="dragLeave(this.id,document.getElementById(this.id).firstChild.id);"><div style="background:darkblue;"  class ="boxes3"title = "CREATE TABLE" id = "createTable1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
        CREATE TABLE 
      <input style="width: 80px" type="text" name="createTable" id = "ctinput" onkeyup="changeTitle(document.getElementById(this.id).parentElement.id,'CREATE TABLE')"onfocus="document.getElementById(this.id).parentElement.draggable=false;" onfocusout="document.getElementById(this.id).parentElement.draggable=true;">
      
      </div></div>
<div style="background:#a17f1a;" class="boxes" id="integer" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"ondragstart="dragLeave(this.id,document.getElementById(this.id).firstChild.id);"><div style="background:#a17f1a;"  class ="boxes3"title = "INTEGER" id = "integer1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
    <input style="width:15px" type="text" name="intinput" id = "intinputs1" placeholder= "00"onkeyup="changeTitle(document.getElementById(this.id).parentElement.id,'INTEGER')"onfocus="document.getElementById(this.id).parentElement.draggable=false;" onfocusout="document.getElementById(this.id).parentElement.draggable=true;"> 
    INTEGER 
      <input style="width:85px" type="text" name="intinput" id = "intinput1" placeholder= "column_name"onkeyup="changeTitle(document.getElementById(this.id).parentElement.id,'INTEGER')"onfocus="document.getElementById(this.id).parentElement.draggable=false;" onfocusout="document.getElementById(this.id).parentElement.draggable=true;"> 
      
      </div></div>
<div style="background:darkgreen;" class="boxes" id="varchar" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"ondragstart="dragLeave(this.id,document.getElementById(this.id).firstChild.id);"><div style="background:darkgreen;"  class ="boxes3"title = "VARCHAR" id = "varchar1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
    <input style="width:15px" type="text" name="vcinput" id = "vcinputs1" placeholder= "00"onkeyup="changeTitle(document.getElementById(this.id).parentElement.id,'VARCHAR')"onfocus="document.getElementById(this.id).parentElement.draggable=false;" onfocusout="document.getElementById(this.id).parentElement.draggable=true;"> 
    VARCHAR 
      <input style="width:85px" type="text" name="vcinput1" id = "vcinput1" placeholder= "column_name"onkeyup="changeTitle(document.getElementById(this.id).parentElement.id,'VARCHAR')"onfocus="document.getElementById(this.id).parentElement.draggable=false;" onfocusout="document.getElementById(this.id).parentElement.draggable=true;"> 
      
      </div></div>
          
<div style="background:purple;" class="boxes" id="date" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"ondragstart="dragLeave(this.id,document.getElementById(this.id).firstChild.id);"><div style="background:purple;"  class ="boxes3"title = "DATE" id = "date1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
    
    DATE 
      <input style="width:85px" type="text" name="dateinput" id = "dateinput1" placeholder= "column_name"onkeyup="changeTitle(document.getElementById(this.id).parentElement.id,'DATE')"onfocus="document.getElementById(this.id).parentElement.draggable=false;" onfocusout="document.getElementById(this.id).parentElement.draggable=true;"> 
      
      </div></div>
          
<div style="background:#7300e6;" class="boxes" id="time" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"ondragstart="dragLeave(this.id,document.getElementById(this.id).firstChild.id);"><div style="background:#7300e6;"  class ="boxes3"title = "TIME" id = "time1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
    
    TIME
      <input style="width:85px" type="text" name="timeinput" id = "timeinput1" placeholder= "column_name"onkeyup="changeTitle(document.getElementById(this.id).parentElement.id,'TIME')"onfocus="document.getElementById(this.id).parentElement.draggable=false;" onfocusout="document.getElementById(this.id).parentElement.draggable=true;"> 
      
      </div></div>
<div style="background:#008080;" class="boxes" id="select" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)">  <h4>ARTHIMETIC </h4> </div>
          
          
  <div style="background:darkred;" class="boxes" id="max" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"ondragstart="dragLeave(this.id,document.getElementById(this.id).firstChild.id);"><div style="background:darkred;"  class ="boxes3"title = "MAX" id = "max1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
    
    MAX 
      <input style="width:85px" type="text" name="maxinput" id = "maxinput1" placeholder= "column_name"onkeyup="changeTitle(document.getElementById(this.id).parentElement.id,'MAX')"onfocus="document.getElementById(this.id).parentElement.draggable=false;" onfocusout="document.getElementById(this.id).parentElement.draggable=true;"> 
      
      </div></div>
          
<div style="background:green;" class="boxes" id="min" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"ondragstart="dragLeave(this.id,document.getElementById(this.id).firstChild.id);"><div style="background:green;"  class ="boxes3"title = "MIN" id = "min1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
    
    MIN 
      <input style="width:85px" type="text" name="mininput" id = "mininput1" placeholder= "column_name"onkeyup="changeTitle(document.getElementById(this.id).parentElement.id,'MIN')"onfocus="document.getElementById(this.id).parentElement.draggable=false;" onfocusout="document.getElementById(this.id).parentElement.draggable=true;"> 
      
      </div></div>
          
<div style="background:#663300;" class="boxes" id="avg" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"ondragstart="dragLeave(this.id,document.getElementById(this.id).firstChild.id);"><div style="background:#663300;"  class ="boxes3"title = "AVG" id = "avg1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
    
    AVG 
      <input style="width:85px" type="text" name="avginput" id = "avginput1" placeholder= "column_name"onkeyup="changeTitle(document.getElementById(this.id).parentElement.id,'AVG')"onfocus="document.getElementById(this.id).parentElement.draggable=false;" onfocusout="document.getElementById(this.id).parentElement.draggable=true;"> 
      
      </div></div>
          
<div style="background:#cc0066;" class="boxes" id="sum" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"ondragstart="dragLeave(this.id,document.getElementById(this.id).firstChild.id);"><div style="background:#cc0066;"  class ="boxes3"title = "SUM" id = "sum1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
    
    SUM 
      <input style="width:85px" type="text" name="suminput" id = "suminput1" placeholder= "column_name"onkeyup="changeTitle(document.getElementById(this.id).parentElement.id,'SUM')"onfocus="document.getElementById(this.id).parentElement.draggable=false;" onfocusout="document.getElementById(this.id).parentElement.draggable=true;"> 
      
      </div></div>
<div style="background:#a17f1a;" class="boxes" id="as" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"ondragstart="dragLeave(this.id,document.getElementById(this.id).firstChild.id);"><div style="background:#a17f1a;"  class ="boxes3"title = "AS" id = "as1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
    
    AS
      <input style="width:85px" type="text" name="asinput" id = "asinput1" placeholder= "column_name"onkeyup="changeTitle(document.getElementById(this.id).parentElement.id,'AS')"onfocus="document.getElementById(this.id).parentElement.draggable=false;" onfocusout="document.getElementById(this.id).parentElement.draggable=true;"> 
      
      </div></div>


<div style="background:#008080;" class="boxes" id="select" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"> <h4> JOINS </h4> </div>
        
<div style="background:darkblue;" class="boxes" id="innerjoin" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"ondragstart="dragLeave(this.id,document.getElementById(this.id).firstChild.id);"><div  style="background:darkblue;"  class ="boxes3"title = "INNER JOIN" id = "innerjoin1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
       INNER JOIN 
      
      
      </div></div>
            
<div style="background:#a17f1a;" class="boxes" id="leftjoin" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"ondragstart="dragLeave(this.id,document.getElementById(this.id).firstChild.id);"><div  style="background:#a17f1a;"  class ="boxes3"title = "LEFT JOIN" id = "leftjoin1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
       LEFT JOIN 
      
      
      </div></div>
<div style="background:purple;" class="boxes" id="rightjoin" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"ondragstart="dragLeave(this.id,document.getElementById(this.id).firstChild.id);"><div  style="background:purple;"  class ="boxes3"title = "RIGHT JOIN" id = "rightjoin1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
      RIGHT JOIN 
      
      
      </div></div>
<div style="background:darkgreen;" class="boxes" id="fulljoin" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"ondragstart="dragLeave(this.id,document.getElementById(this.id).firstChild.id);"><div  style="background:darkgreen;"  class ="boxes3"title = "FULL OUTER JOIN" id = "fulljoin1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
      FULL OUTER JOIN 
      
      
      </div></div>
          <div style="background:#7300e6;" class="boxes" id="on" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"ondragstart="dragLeave(this.id,document.getElementById(this.id).firstElementChild.id);">
    <div style="background:#7300e6;" class ="boxes3"title = "ON" id = "on1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
        ON 
      <input type="text" name="on" id = "oninput1" onkeyup="changeTitle(document.getElementById(this.id).parentElement.id,'ON')"onfocus="document.getElementById(this.id).parentElement.draggable=false;" onfocusout="document.getElementById(this.id).parentElement.draggable=true;">
      
      </div></div>
<div style="background:#008080;" class="boxes" id="select" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"> <h4> CUSTOM </h4> </div>
       <div class="boxes" id="custom" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"ondragstart="dragLeave(this.id,document.getElementById(this.id).firstChild.id);"><div style="background:#cc0066;"  class ="boxes3"title = "" id = "custom1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
         
    <input style="width:80%" type="text" name="custominput" id = "custominput1" placeholder= "e.g. name = 'john'"onkeyup="changeTitle(document.getElementById(this.id).parentElement.id,'CUSTOM')"onfocus="document.getElementById(this.id).parentElement.draggable=false;" onfocusout="document.getElementById(this.id).parentElement.draggable=true;"  > 
    
     </div></div>
       
            </div>
           
          
      </div>
      <div id = "sideBottom" class="sideBottom">
         <div class = "stripe" style="background: #009970;">
        <h1  class= "appPage" style="color: white; text-align: center;"> TABLES </h1>
              </div>
          <div id = "tables" >  </div>
      </div>
    </div>
    <div>
      <div class="main" >
       <div class = "stripe" style="background: #009970;">
        <h1  class= "appPage" style="color: white; text-align: center;"> PLAYSTATION </h1>
              </div>
          <div id = "side" style="background : #009970; height:380px ; width: 30px; float: left;">
          
          </div>
          <div id = "number1" style=" background : #c8d3c6; width: 276px; float: left;">
              <div style="" class="boxes2" id="1" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
              <div style="" class="boxes2" id="3" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
              <div style="" class="boxes2" id="5" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
              <div style="" class="boxes2" id="7" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
              <div style="" class="boxes2" id="9" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
              <div style="" class="boxes2" id="11" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
              <div style="" class="boxes2" id="13" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
              <div style="" class="boxes2" id="15" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
              <div style="" class="boxes2" id="17" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
              
          </div>
          <div id = "number2" style=" background : #c8d3c6;  width: 276px; float: left;">
              <div style="" class="boxes2" id="2" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
              <div style="" class="boxes2" id="4" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
              <div style="" class="boxes2" id="6" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
              <div style="" class="boxes2" id="8" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
              <div style="" class="boxes2" id="10" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
              <div style="" class="boxes2" id="12" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
              <div style="" class="boxes2" id="14" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
              <div style="" class="boxes2" id="16" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
              <div style="" class="boxes2" id="18" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
              
              
          </div>
          
         
          <div class = "trash"id = "trashed" ondragend =" trashLeave()"ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"> DRAG HERE TO DELETE</div>
         
      </div>
     
        <div class="buttonbox">
            


            <button style="background-color:#6666ff;"id = "psql" class="button">PREVIEW SQL</button>
        <button id ="runsql" class="button">RUN QUEREY</button>
             <button style="background-color:darkred;"class="button" id ="clearConsole" >CLEAR</button>
            
      </div>
      <div class="console" id = "console2">
                <div  id= "consoleStripe" class = "stripe" style="background: #009970;">

        <h1 class= "appPage" style="color: white; text-align: center;"> CONSOLE </h1>
          </div>   
          <div  id = "console1">
          </div>
      </div>
         
    </div>
    <div class="table">
      <div class="tableInput">
         <div id = "currentStripe"class = "stripe" style="background: #009970; width:100%;">
        <h1 class= "appPage" style="color: white; text-align: center;"> CURRENT</h1>
              </div>
          <div id ="tableCurrent">  </div>
          
          
          
      </div>
      <div class="tableOutput">
       <div class = "stripe" style="display:block;background: #009970;">
        <h1 class= "appPage" style="color: white; text-align: center;"> OUTPUT</h1>
              </div>
          <div id ="tableOutput1">  </div>
      </div>
    </div>
  </div>
</div>
    

<?php require_once "footer.php"; }?>