/**
* 
Function that is executed when dragging the element. 
**/
var parent1 = "";
var child1 ="";
function start(e) {
	e.dataTransfer.effecAllowed = 'move'; // Defines the effect of moving (it is the default)
	e.dataTransfer.setData("Text", e.target.id); // Pick up the item to be moved
	//e.target.style.opacity = '0.4'; 
}

/**
* 
Function that is executed is finished dragging the element.
**/
function end(e){
	e.target.style.opacity = ''; // Restores the opacity of the element
				
}

/**
* 
Function that is executed when a dragging element enters the element from which it is called.
**/
function enter(e) {
	return true;
}

/**
* 
Function that is executed when a dragging element is on the element from which it is called.
* Returns false if the object can be dropped in that element and true otherwise.
**/
function over(e) {
     if ((e.target.className == "trash")) {
          document.getElementById("trashed").style.borderColor = "white";
         document.getElementById("trashed").style.backgroundColor = "darkred";
       document.getElementById("trashed").innerHTML = "DROP";
         
       
        
    }
    if (!(e.target.className == "trash")) {
         document.getElementById("trashed").style.backgroundColor = "#008080";
       document.getElementById("trashed").innerHTML = "DRAG HERE TO DELETE";
      
         
       
        
    }
	if ((e.target.className == "boxes") || (e.target.className == "boxes2") || (e.target.className == "trash"))
		
        return false;
	else
        
	return true;
}
    
/**
* 
Function that is executed when a draggable element is dropped on the element from which it is called.
**/
function drop(e){
	e.preventDefault(); // Prevents the default action of the dropped element from being executed.
	var element = e.dataTransfer.getData("Text");
	e.target.appendChild(document.getElementById(element)); // Place the dropped element on the element from which this function was called
    if (e.target == document.getElementById("trashed")) {
        var trash = document.getElementById(element);
        child1 = trash.id;
        parent1 = child1.substring(0, child1.length - 1);
        console.log(child1+parent1);
        generateNewDiv();
        
        trash.parentNode.removeChild(trash);
         document.getElementById("trashed").style.backgroundColor = "green";
       document.getElementById("trashed").innerHTML = "TRASHED";
        setTimeout(trashDefaultText, 500);
        function trashDefaultText() {
    document.getElementById("trashed").style.backgroundColor = "#008080";
       document.getElementById("trashed").innerHTML = "DRAG HERE TO DELETE";
}
    }
    else{
    generateNewDiv();
    }
	
}
function generateNewDiv(){
    if(child1){
        console.log(child1);
    //var div = document.createElement("div");

    // div  = document.getElementById(child1);
   var parentDiv = document.getElementById(parent1),
    templateDiv = document.getElementById(child1);
    
        var newDiv = templateDiv.cloneNode(true); 
        if (newDiv.children[0]){
        newDiv.children[0].value = "";
        var input = newDiv.children[0];
        }
        if (newDiv.children[1]){
        newDiv.children[1].value = "";
        var input2 = newDiv.children[1];
        }
        newDiv.setAttribute("opacity", null);
        
if (input2){
    
    var id = document.getElementById(child1).id;
        var inputid = input.id;
        var inputid2 = input2.id;
       
    var lastChar = id[id.length -1];
        if(lastChar==1){
          id = id.slice(0, -1);
          id = id + "2"; 
          inputid = inputid.slice(0, -1);
          inputid = inputid + "2";
         inputid2 = inputid2.slice(0, -1);
          inputid2 = inputid2 + "2";
            
        }
        if(lastChar==2){
          id = id.slice(0, -1);
          id = id + "3"; 
          inputid = inputid.slice(0, -1);
          inputid = inputid + "3";
            inputid2 = inputid2.slice(0, -1);
          inputid2 = inputid2 + "3";
        }
        if(lastChar==3){
          id = id.slice(0, -1);
          id = id + "4"; 
          inputid = inputid.slice(0, -1);
          inputid = inputid + "4"; 
            inputid2 = inputid2.slice(0, -1);
          inputid2 = inputid2 + "4";
        }
        if (lastChar == 4 || lastChar > 4){
          id = id.slice(0, -1);
          id = id + "1"; 
          inputid = inputid.slice(0, -1);
          inputid = inputid + "1";
            inputid2 = inputid2.slice(0, -1);
          inputid2 = inputid2 + "1";
        }
        input.id = inputid;
        input2.id = inputid2;
        newDiv.id = id;
      parentDiv.innerHTML = "";
        parentDiv.appendChild(newDiv);
        child1 = "";
        parent1 = "";
}
        
else if (input){
    var id = document.getElementById(child1).id;
        var inputid = input.id;
        var lastInputChar = input[input.length -1];
    var lastChar = id[id.length -1];
        if(lastChar==1){
          id = id.slice(0, -1);
          id = id + "2"; 
          inputid = inputid.slice(0, -1);
          inputid = inputid + "2";
        }
        if(lastChar==2){
          id = id.slice(0, -1);
          id = id + "3"; 
          inputid = inputid.slice(0, -1);
          inputid = inputid + "3";
        }
        if(lastChar==3){
          id = id.slice(0, -1);
          id = id + "4"; 
          inputid = inputid.slice(0, -1);
          inputid = inputid + "4";  
        }
        if (lastChar == 4 || lastChar > 4){
          id = id.slice(0, -1);
          id = id + "1"; 
          inputid = inputid.slice(0, -1);
          inputid = inputid + "1";
        }
        input.id = inputid;
    newDiv.id = id;
     parentDiv.innerHTML = "";
        parentDiv.appendChild(newDiv);
    child1 = "";
        parent1 = "";
}
 else{   
    // var id = div.getAttribute("id");
    var id = document.getElementById(child1).id;
       
    var lastChar = id[id.length -1];
        if(lastChar==1){
          id = id.slice(0, -1);
          id = id + "2"; 
          
        }
        if(lastChar==2){
          id = id.slice(0, -1);
          id = id + "3"; 
         
        }
        if(lastChar==3){
          id = id.slice(0, -1);
          id = id + "4"; 
         
        }
        if (lastChar == 4 || lastChar > 4){
          id = id.slice(0, -1);
          id = id + "1"; 
          
        }
        
        newDiv.id = id;
       parentDiv.innerHTML = "";
        parentDiv.appendChild(newDiv);
   // div.setAttribute("id", id);
    
        //document.getElementById(parent1).appendChild(document.getElementById(id));
  // document.getElementById(parent1).innerHTML = div.outerHTML;
        child1 = "";
        parent1 = "";
 }
    }
    }
    

function dragLeave(parent,child){
    
    child1 = child;
    parent1= parent;

}
function removeDiv(e){
    
   var id =  e.target.id;
    document.getElementById(id).remove();
}




/**
* Displays a warning message if the browser does not support Drag & Drop. (Windows does not support IE or Safari)
**/
function comprobarnavegador() {
	if( 
		(navigator.userAgent.toLowerCase().indexOf('msie ') > -1) || 
		((navigator.userAgent.toLowerCase().indexOf('safari') > -1) && (navigator.userAgent.toLowerCase().indexOf('chrome') == -1)))
	{
		alert("Your browser does not support HTML5's Drag & Drop functions correctly. Try another browser");
	}

}
function changeTitle(id, title){
    
   if(title == "SELECT" || title == "WHERE" || title == "ON" || title == "SET" || title == "AS"){

       var input = document.getElementById(id).children[0].value;
       var text = title + " " + input;
       document.getElementById(id).title = text;
       
      }
//////////////////////////////////////////////////////
   else if(title == "DATE"  || title =="TIME"){
       
       var input = document.getElementById(id).children[0].value;
       var text = input + " " + title +  ",";
       document.getElementById(id).title = text;
   }
//////////////////////////////////////////////////////
   else if(title == "MAX" || title == "MIN" || title == "AVG" || title == "SUM" || title == "VALUES"){
       var input = document.getElementById(id).children[0].value;
       var text = title + " (" + input +")";
       document.getElementById(id).title = text;     
   }
//////////////////////////////////////////////////////
   else if(title == "VARCHAR" || title == "INTEGER"){
     var text;  
    var input1 = document.getElementById(document.getElementById(id).children[1].id).value;
    var input2 = document.getElementById(document.getElementById(id).children[0].id).value;
    
    if(input2 > 0){
     text = input1 + " " + title +  " (" + input2 + "),";
     }
    else{
    text = input1 + " " + title + ",";
    }

    document.getElementById(id).title = text;  
   }
//////////////////////////////////////////////////////
   else if(title == "CREATE TABLE"){

    var input = document.getElementById(id).children[0].value; 
    var text = title + " " + input + "(";
    document.getElementById(id).title = text;
   }
    else if(title == "CUSTOM" ){
       
       var input = document.getElementById(id).children[0].value;
        console.log(input);
       var text = input;
       document.getElementById(id).title = text;
   }
      
}



window.onload= function table_ajax(){ 
    var req = new XMLHttpRequest(); 
    req.onreadystatechange = function() { 
        if(req.readyState == 4 && req.status == 200){
            document.getElementById('tables').innerHTML = req.responseText; 
        } } 
    req.open('GET', 'tables.php', true); req.send(); } 
function table_current(str){
    var title =  " <h1 class = 'appPage' style='color: white; text-align: center;'>" + str + " TABLE</h1>";
    var req = new XMLHttpRequest(); 
    req.onreadystatechange = function() { 
        if(req.readyState == 4 && req.status == 404){
             displayTextInConsole(req.responseText);
          //  document.getElementById('console1').innerHTML += "<p style='color:red;'>Could not connect to Database </p>"; 
            return;
            
        }
        if(req.readyState == 4 && req.status == 200){
            document.getElementById('currentStripe').innerHTML = title;
            document.getElementById('tableCurrent').innerHTML = req.responseText; 
        } } 
    req.open('GET', 'messagecurrent.php?table='+str, true); req.send(); } 
function table_output(str){ 
    var req = new XMLHttpRequest(); 
    req.onreadystatechange = function() { 
        if(req.readyState == 4 && req.status == 404){
             displayTextInConsole(req.responseText);
          //  document.getElementById('console1').innerHTML += "<p style='color:red;'>Could not connect to Database </p>"; 
            return;
            
        }
        if(req.readyState == 4 && req.status == 200){
            displayTextInConsole("<p style='color:darkgreen;'><strong>The Query has successfully worked </strong> </p>");
            //document.getElementById('console1').innerHTML += "<p style='color:green;'>The Query has successfully worked </p>"; 
            document.getElementById('tableOutput1').innerHTML = req.responseText; 
        }
  } 
    req.open('GET', 'messageoutput.php?query='+str, true); req.send(); } 



function trashLeave(){
    document.getElementById("trashed").style.backgroundColor = "#3e8e41";
       document.getElementById("trashed").innerHTML = "DRAG HERE TO DELETE";
    
}
//}