

$(document).ready(function() { 

  


}) 
$(function(){
    $('#psql').click(function previewSQL() {
        var text ="";
        
        if($('#1 :first-child').attr('title')){
        text += " "+$('#1 :first-child').attr('title');
        }
        if($('#2 :first-child').attr('title')){
        text += " "+$('#2 :first-child').attr('title');
        }
        if($('#3 :first-child').attr('title')){
        text += " "+$('#3 :first-child').attr('title');
        }
        if($('#4 :first-child').attr('title')){
        text += " "+$('#4 :first-child').attr('title');
        }
        if($('#5 :first-child').attr('title')){
        text += " "+$('#5 :first-child').attr('title');
        }
        if($('#6 :first-child').attr('title')){
        text += " "+$('#6 :first-child').attr('title');
        }
        if($('#7 :first-child').attr('title')){
        text += " "+$('#7 :first-child').attr('title');
        }
        if($('#8 :first-child').attr('title')){
        text += " "+$('#8 :first-child').attr('title');
        }
        if($('#9 :first-child').attr('title')){
        text += " "+$('#9 :first-child').attr('title');
        }
        if($('#10 :first-child').attr('title')){
        text += " "+$('#10 :first-child').attr('title');
        }
        if($('#11 :first-child').attr('title')){
        text += " "+$('#11 :first-child').attr('title');
        }
        if($('#12 :first-child').attr('title')){
        text += " "+$('#12 :first-child').attr('title');
        }
        if($('#13 :first-child').attr('title')){
        text += " "+$('#13 :first-child').attr('title');
        }
        
        if($('#14 :first-child').attr('title')){
        text += " "+$('#14 :first-child').attr('title');
        }
        if($('#15 :first-child').attr('title')){
        text += " "+$('#15 :first-child').attr('title');
        }
        if($('#16 :first-child').attr('title')){
        text += " "+$('#16 :first-child').attr('title');
        }
        if($('#17 :first-child').attr('title')){
        text += " "+$('#17 :first-child').attr('title');
        }
        if($('#18 :first-child').attr('title')){
        text += " "+$('#18 :first-child').attr('title');
        }
       
        
       
       if(text.indexOf("CREATE TABLE") != -1){
       text = text.replace(/,\s*$/, "");
           text += ");"
       }
        //text += " ;";
        
        
       
    
        $('#console1').prepend("<p>" + text + "</p>");
        
    });
});

$(function(){
    $('#runsql').click(function previewSQL() {
        var text ="";
        
        if($('#1 :first-child').attr('title')){
        text += " "+$('#1 :first-child').attr('title');
        }
        if($('#2 :first-child').attr('title')){
        text += " "+$('#2 :first-child').attr('title');
        }
        if($('#3 :first-child').attr('title')){
        text += " "+$('#3 :first-child').attr('title');
        }
        if($('#4 :first-child').attr('title')){
        text += " "+$('#4 :first-child').attr('title');
        }
        if($('#5 :first-child').attr('title')){
        text += " "+$('#5 :first-child').attr('title');
        }
        if($('#6 :first-child').attr('title')){
        text += " "+$('#6 :first-child').attr('title');
        }
        if($('#7 :first-child').attr('title')){
        text += " "+$('#7 :first-child').attr('title');
        }
        if($('#8 :first-child').attr('title')){
        text += " "+$('#8 :first-child').attr('title');
        }
        if($('#9 :first-child').attr('title')){
        text += " "+$('#9 :first-child').attr('title');
        }
        if($('#10 :first-child').attr('title')){
        text += " "+$('#10 :first-child').attr('title');
        }
        if($('#11 :first-child').attr('title')){
        text += " "+$('#11 :first-child').attr('title');
        }
        if($('#12 :first-child').attr('title')){
        text += " "+$('#12 :first-child').attr('title');
        }
        if($('#13 :first-child').attr('title')){
        text += " "+$('#13 :first-child').attr('title');
        }
        
        if($('#14 :first-child').attr('title')){
        text += " "+$('#14 :first-child').attr('title');
        }
        if($('#15 :first-child').attr('title')){
        text += " "+$('#15 :first-child').attr('title');
        }
        if($('#16 :first-child').attr('title')){
        text += " "+$('#16 :first-child').attr('title');
        }
        if($('#17 :first-child').attr('title')){
        text += " "+$('#17 :first-child').attr('title');
        }
        if($('#18 :first-child').attr('title')){
        text += " "+$('#18 :first-child').attr('title');
        }
       
        
       
       if(text.indexOf("CREATE TABLE") != -1){
       text = text.replace(/,\s*$/, "");
           text += ");"
       }
        //text += " ;";
        
        
        table_output(text);
    
        
        
    });
});
 $(function(){
    $('#clearConsole').click(function previewSQL() {
       
    $('#console1').not('#consoleStripe').empty();
         for (i = 0; i <= 18; i++) { 
          $('#'+i).empty();
     }
    });
});

function displayTextInConsole(text){
    $('#console1').prepend(text);
}