<?php
  $emerr=$merr=" ";
  
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Sign in</title>
    <style>
    html,body {
      height: 100%;
    }
    body {
      display: -ms-flexbox;
      display: flex;
      -ms-flex-align: center;
      align-items: center;
      padding-top: 10px; 
      padding-bottom: 40px;
      background-image: url('backimg.jpg');
      background-color: black;
    }
    .form-signin {
      background-color: lightblue;
      box-sizing: border-box;
      border: 1px solid black;
      border-radius: 10px;
      width: 100%;
      max-width: 330px;
      padding: 15px;
      margin: auto;
      align-items: center;
    }
    .form-signin .checkbox {
      font-weight: 400;
    }
    .form-signin .form-control {
      position: relative;
      box-sizing: border-box;
      height: auto;
      padding: 10px;
      font-size: 16px;
    }
    .form-signin .form-control:focus {
      z-index: 2;
    }
    .form-signin input[type="email"] {
      margin-bottom: -1px;
      align-items: center;
      margin-left:10%;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }
    .form-signin input[type="text"] {
      margin-bottom: -1px;
      align-items: center;
      margin-left:10%;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
    .form-signin input[type="submit"] {
      height: 40px;
      width:70%;
      font-size: 20px;
      background-color: #00001a;
      color:white;
      margin-bottom: 10px;
      margin-left:10%;
      border-radius: 10px;
    }
    div{
        margin-left:10%;
    }
    </style>
    <script>
      function valid(str,id){
        if(str.length==0){
          document.getElementById(id).innerHTML="";
          return;
        }
        else{
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            document.getElementById(id).innerHTML = this.responseText;
            }
          };
        
          xmlhttp.open("GET", "clientajax.php?q=" + str+"&i="+id, true);
          xmlhttp.send();
        }
      }
      function check(){
        var x=document.getElementById("ema").textContent;
        var y=document.getElementById("mob").textContent;
        var b=document.getElementById("sub");
        if(x=="valid"&& y=="valid"){
            return true;
        }
        else{
            alert("Invalid Input");
            return false;
        }
      }
    </script>
  </head>
  <body class="text-center">
    
    <form class="form-signin" name="myForm" method="post" >
  <h1 style="text-align: center" >Sign in</h1>
  <input type="email" id="inputEmail" name="Email" class="form-control" placeholder="Email address" onchange="valid(this.value,'ema')" required autofocus>
  *<span><div id="ema"></div></span>
  <input type="text" id="inputMobile" name="Mobile" class="form-control" placeholder="Mobile No" onchange="valid(this.value,'mob')" required>
  *<span><div id="mob"></div></span>
  <br><br>
  <input type="submit" id="sub"name="sub" value="Submit" onclick="return check()" formaction="clientdetails.php">
  
</form>
</body>
</html>
