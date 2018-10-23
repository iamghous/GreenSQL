  function loginValidate()
      {
          document.getElementById("login-username-error").innerHTML = "";
          document.getElementById("login-password-error").innerHTML = "";
          document.getElementById("login-form-error").innerHTML = "";
           var username = document.loginForm.loginUsername.value;
           var password = document.loginForm.loginPassword.value;
         if( document.loginForm.loginUsername.value == "" )
         {
            document.getElementById("login-username-error").innerHTML = "Please Enter Username!";
            document.loginForm.loginUsername.focus() ;
            return false;
         }
         if( document.loginForm.loginPassword.value == "" )
         {
            document.getElementById("login-password-error").innerHTML = "Please Enter Password!";
            document.loginForm.loginPassword.focus() ;
            return false;
         }
          var usernameValue  =  validateLoginUsername(username);
          if (usernameValue == 2){
              return false;
          }
          var passwordValue =   validateLoginPassword(password);
          if (passwordValue == 2){
              return false;
          }
        
         return( true );
      }
  function RegisterValidate()
      {
         
          document.getElementById("register-username-error").innerHTML = "";
          document.getElementById("register-email-error").innerHTML = "";
          document.getElementById("register-password-error").innerHTML = "";
          document.getElementById("register-cPassword-error").innerHTML = "";
            document.getElementById("register-form-error").innerHTML = "";
          var username = document.registerForm.username.value;
           var email = document.registerForm.email.value;
           var password = document.registerForm.password.value;
           var cPassword = document.registerForm.cPassword.value;
     
         if( document.registerForm.username.value == "" )
         {
            document.getElementById("register-username-error").innerHTML = "Please Enter Username!";
            document.registerForm.username.focus() ;
            return false;
         }
          if( document.registerForm.email.value == "" )
         {
            document.getElementById("register-email-error").innerHTML = "Please Enter Email!";
            document.registerForm.email.focus() ;
            return false;
         }
           if( document.registerForm.password.value == "" )
         {
            document.getElementById("register-password-error").innerHTML = "Please Enter Password!";
            document.registerForm.password.focus() ;
            return false;
         }
           if( document.registerForm.cPassword.value == "" )
         {
            document.getElementById("register-cPassword-error").innerHTML = "Please Re-Enter Password!";
            document.registerForm.cPassword.focus() ;
            return false;
         }
         
          
          if( password != cPassword){
              document.getElementById("register-form-error").innerHTML = "Password Do not Match!";
            document.registerForm.password.focus() ;
            return false;
          }
         
          
          
          
          var usernameValue = validateRegisterUsername(username);
          if (usernameValue == 2){
              
              return false;
          }
          var emailValue = validateRegisterEmail(email);
          if (emailValue == 2){
              
              return false;
          }
          var passwordValue = validateRegisterPassword(password);
          if (passwordValue == 2){
              
              return false;
          }
      }
          
        function addDatabaseValidate()
      {
         
          document.getElementById("database-host-error").innerHTML = "";
          document.getElementById("database-username-error").innerHTML = "";
          document.getElementById("database-password-error").innerHTML = "";
          document.getElementById("database-name-error").innerHTML = "";
            document.getElementById("database-form-error").innerHTML = "";
          var host = document.databaseForm.host.value;
           var username = document.databaseForm.username.value;
           var password = document.databaseForm.password.value;
           var name = document.databaseForm.name.value;
     
         if( document.databaseForm.host.value == "" )
         {
            document.getElementById("database-host-error").innerHTML = "Please Enter Database Host name!";
            document.databaseForm.host.focus() ;
            return false;
         }
          if( document.databaseForm.username.value == "" )
         {
            document.getElementById("database-username-error").innerHTML = "Please Enter Database Username!";
            document.databaseForm.username.focus() ;
            return false;
         }
           if( document.databaseForm.password.value == "" )
         {
            document.getElementById("database-password-error").innerHTML = "Please Enter Database Password!";
            document.databaseForm.password.focus() ;
            return false;
         }
           if( document.databaseForm.name.value == "" )
         {
            document.getElementById("database-name-error").innerHTML = "Please Enter Database Name!";
            document.databaseForm.name.focus() ;
            return false;
         }
          
        
          
        
         /*  var hostValue  =  validateAddDatabaseFields(host);
          if (hostValue == 2){
              document.getElementById("database-host-error").innerHTML = "Please Enter Correct Database Host Name!";
              document.databaseForm.host.focus() ;
              
              return false;
          }*/
          var usernameValue = validateAddDatabaseFields(username);
          if (usernameValue == 2){
              document.getElementById("database-username-error").innerHTML = "Please Enter Correct Database Username!";
              document.databaseForm.username.focus() ;
              return false;
          }
          var passwordValue = validateAddDatabaseFields(password);
          if (passwordValue == 2){
              document.getElementById("database-password-error").innerHTML = "Please Enter Correct Database Password!";
              document.databaseForm.password.focus() ;
              return false;
          }
          var nameValue = validateAddDatabaseFields(name);
          if (nameValue == 2){
              document.getElementById("database-name-error").innerHTML = "Please Enter Correct Database Name!";
              document.databaseForm.name.focus() ;
              return false;
          }
/*         
        if(ValidateUsername(username)){}
             else{document.registerForm.username.focus() ; 
              return false;}
          
          console.log("it came here 5");
          return false;
          
           if(ValidateEmail(email)){}
              else{document.registerForm.email.focus() ; 
              return false;}

           if(validatePassword(password)){}
          else{document.registerForm.password.focus() ;
               document.getElementById("register-password-error").innerHTML = "Minimum eight characters, at least one letter and one number";
              return false;}
          */
         return true;
      }
function validateLoginUsername(username)  
      {
      var letters = /^[a-z0-9_-]{3,15}$/;  
      if(username.match(letters))  
      {  
        
      return 1;  
      }  
      else  
      {  
       document.loginForm.loginUsername.focus() ; 
       document.getElementById("login-username-error").innerHTML = "Username is incorrect!";         
      return 2;  
      }  
      } 
          function validateAddDatabaseFields(username)  
      {
      var letters = /^[a-zA-Z][a-zA-Z0-9]*$/;  
      if(username.match(letters))  
      {  
        
      return 1;  
      }  
      else  
      {  
              
      return 2;  
      }  
      } 
function validateLoginPassword(password)   
{  
var check=   /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,15}$/;
    if(check.test(password))   
{  
 
return 1;  
}  
else  
{   document.loginForm.loginPassword.focus() ;
    document.getElementById("login-password-error").innerHTML = "Password is Incorrect!";
    return 2;
}  
}
function validateRegisterUsername(username)  
      {
      var letters = /^[a-z0-9_-]{3,15}$/;  
      if(username.match(letters))  
      {  
        
      return 1;  
      }  
      else  
      {  
       document.registerForm.username.focus() ; 
       document.getElementById("register-username-error").innerHTML = "At least 3 characters, NO capital letters!";         
      return 2;  
      }  
      } 
function validateRegisterEmail(email)   
{  
    var letters = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
 if (letters.test(email))  
  {  
    return 1; 
  }else{  
      document.registerForm.email.focus() ; 
    document.getElementById("register-email-error").innerHTML = "Please enter a valid email address";  
    return 2;  
}
}
function validateRegisterPassword(password)   
{  
var check=   /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,15}$/;
    if(check.test(password))   
{  
 
return 1;  
}  
else  
{   document.registerForm.password.focus() ;
    document.getElementById("register-password-error").innerHTML = " 6-15 characters , at least one number";
    return 2;
}  
}

    
function databaseErrorForm(str){
    setTimeout(
    function() {
       document.getElementById("database-form-error").innerHTML = str;
    }, 500);
   
    
}

/*
function loginValidateAjax(){ 
    var req = new XMLHttpRequest(); 
    req.onreadystatechange = function() { 
        if(req.readyState == 4 && req.status == 400){
            
          //  document.getElementById('console1').innerHTML += "<p style='color:red;'>Could not connect to Database </p>"; 
            return false;
            
        }
        if(req.readyState == 4 && req.status == 401){
             document.getElementById("login-form-error").innerHTML = "The details, you entered does not match"
          //  document.getElementById('console1').innerHTML += "<p style='color:red;'>Could not connect to Database </p>"; 
            return false;
            
        }
        if(req.readyState == 4 && req.status == 500){
             document.getElementById("login-form-error").innerHTML = "Could not connect to the server"
          //  document.getElementById('console1').innerHTML += "<p style='color:red;'>Could not connect to Database </p>"; 
            return false;
            
        }
        if(req.readyState == 4 && req.status == 200){
            return true;
        } } 
    req.open('GET', 'loginValidate.php', true); req.send(); } 

function login(){ 
    var username = document.loginForm.loginUsername.value;
    var password = document.loginForm.loginPassword.value;
    var req = new XMLHttpRequest(); 
    req.onreadystatechange = function() { 
        if(req.readyState == 4 && req.status == 400){
             displayTextInConsole("<p style='color:red;'><strong>Could not connect to Database</strong> </p>");
          //  document.getElementById('console1').innerHTML += "<p style='color:red;'>Could not connect to Database </p>"; 
            return;
            
        }
        if(req.readyState == 4 && req.status == 401){
            displayTextInConsole('<p style="color:darkred;"><strong>The Query did not work</strong> </p>');
           // document.getElementById('console1').innerHTML += "<p style='color:red;'>The Query did not work </p>"; 
            return;
            
        }
        if(req.readyState == 4 && req.status == 402){
             displayTextInConsole("<p style='color:darkblue;'><strong>The Query worked but there is nothing to show in output</strong> </p>");
            //document.getElementById('console1').innerHTML += "<p style='color:blue;'>The Query worked but there is nothing to show in output </p>"; 
            return;
        }
        if(req.readyState == 4 && req.status == 200){
            displayTextInConsole("<p style='color:darkgreen;'><strong>The Query has successfully worked</strong> </p>");
            //document.getElementById('console1').innerHTML += "<p style='color:green;'>The Query has successfully worked </p>"; 
            document.getElementById('tableOutput1').innerHTML = req.responseText; 
        } } 
    req.open('GET', 'messageoutput.php?username='+username+'&password='+password, true); req.send(); } */
