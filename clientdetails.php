<?php
    if(isset($_POST['sub'])){
        $em=$_POST['Email'];
        $mob=$_POST['Mobile'];
        $con=mysqli_connect("localhost","root","","internship");
        $sql="select * from clientdetails where Email='$em'";
        $x=mysqli_query($con,$sql);
        if(mysqli_num_rows($x)>0){
          header("Location:existinguser.php?e=$em");
        }
    }
    else{
        header('Location:clientlogin.php');
    }
?> 
<html> 
<head> 
<script> 
function validate()                                   
{ 
    var name = document.forms["RegForm"]["Name"];               
    var age = document.forms["RegForm"]["Age"];    
    var workex = document.forms["RegForm"]["WorkEx"];  
    var password = document.forms["RegForm"]["Password"];  
    var address = document.forms["RegForm"]["Address"];  
   
    if (name.value == "")                                  
    { 
        window.alert("Please enter your name."); 
        name.focus(); 
        return false; 
    } 
   
    if (address.value == "")                               
    { 
        window.alert("Please enter your address."); 
        address.focus(); 
        return false; 
    } 
       
    if (age.value == "")                                   
    { 
        window.alert("Please enter a valid age"); 
        email.focus(); 
        return false; 
    } 
   
    if (workex.value == "")                           
    { 
        window.alert("Please enter your Work Experience"); 
        phone.focus(); 
        return false; 
    } 
   
    if (password.value == "")                        
    { 
        window.alert("Please enter your password"); 
        password.focus(); 
        return false; 
    }  
   
    return true; 
}
</script> 

<style> 
.format{                                         
    margin-left: 70px; 
    font-weight: bold ; 
    /* float: left;  */
    clear: left; 
    width: 70px; 
    text-align: left; 
    margin-right: 10px; 
    font-family:sans-serif,bold, Arial, Helvetica; 
    font-size:14px; 
}
input[type="submit"]{
    width:100%;
    height: 30px;
    margin-bottom:-1px; 
    font-size: 20px;
    border: 2px solid black;
    border-radius: 20px;
    background-color: #00001a;
    color:white;
    margin-left:70px;
} 
input[type="reset"]{
    width:50%;
    height: 30px;
    margin-bottom:-1px;  
    font-size: 20px;
    background-color: #00001a;
    color:white;
    border-radius: 20px;
    margin-right:170px;
    border: 2px solid black;
}
input{
    font-size:15px;
    width:400px;
}
.button{  
    position:relative;
    box-sizing: border-box;
    padding: 10px;  
} 
   
form {     
    box-sizing: border-box; 
    border: 1px solid black;
    border-radius: 10px;
    background-color: lightblue;
    padding: 1px;
    margin-top: 50px;
    margin-left:auto;
    margin-right:auto;
    height:90%;
    width: 40%;
}
body{
    background-image:url('backimg.jpg');
    background-size:cover;
}
</style>
</head> 
<body > 
        
<form name="RegForm" action="clientdb.php" onsubmit="return validate()" method="post">  
<h1 style="text-align: center"> REGISTRATION FORM </h1>   
    <p class="format">Name: <input type="text" size=65 name="Name"> </p>   
    <p class="format">Email:<input type="email" size=65 name="Email" value="<?php echo $em;?>" style="color:grey"readonly>
    <p class="format">Mobile:<input type="text" size=65 name="Mobile" value="<?php echo $mob;?>"style="color:grey" readonly>    
    <p class="format">Address: <input type="text" size=65 name="Address">  </p>
    <p class="format">Password: <input type="password" size=65 name="Password"> </p> 
    <p class="format">Age: <input type="number" size=65 name="Age"> </p>
    <p class="format">Work Experience: <input type="number" size=65 name="WorkEx"> </p>
    <p class="button" style="float:left"><input type="submit" value="Send" name="Submit"></p>
    <p class="button" style="float:right"><input type="reset" value="Reset" name="Reset"></p>     
</form> 
</body> 
</html> 






