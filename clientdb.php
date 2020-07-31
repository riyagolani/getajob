<?php
    if(isset($_POST['Submit'])){
        $email=$_POST['Email'];
        $mobile=$_POST['Mobile'];
        $name=$_POST['Name'];
        $address=$_POST['Address'];
        $age=$_POST['Age'];
        $work=$_POST['WorkEx'];
        $pass=$_POST['Password'];
        $connect=mysqli_connect("localhost","root","","internship");
        $sql="Insert into clientdetails(Email,Name,Password,Address,Mobile,Age,Work) values('$email','$name','$pass','$address','$mobile','$age','$work') ";
        $x=mysqli_query($connect,$sql);
        if($x){
            echo "<div class='deco'>Thank you for Registering<br>You will be assigned a role by the admin soon<br>Login to your account and keep checking<br>";
            echo "<a href='index.html'>Logout</a></div>";
        }
        else{
            echo "<script>alert('Error in inserting data')</script>";
        }
    }
?>
<html>
    <head>
        <style>
            body{
                background-image:url('backimg.jpg');
            }
            .deco{
                font-size:20px;
                align-items:center;
                margin-top:10%;
                margin-left:30%;
                margin-right:30%;
                padding:10px;
                background-color: lightblue;
                box-sizing: border-box;
                border: 4px solid black;
            }
            .deco a{
                color:black;
            }
        </style>
    </head>
    <body>
</html>