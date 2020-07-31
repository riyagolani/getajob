<?php
    error_reporting(~E_WARNING);
    if(isset($_GET['e'])){
        $con=mysqli_connect("localhost","root","","internship");
        $em=$_GET['e'];
        
        $sql="select * from clientdetails where Email='$em'";
        $x=mysqli_query($con,$sql);
        $y=mysqli_fetch_array($x);
        if($y['Role']==""){
            echo "<div class='deco'>You have not been assigned any role<br> Please check later<br>";
            echo "<a href='index.html'>Logout</a></div>";
        }
        else{
            echo "<div class='deco'>CONGRATULATIONS! ".$y['Name']."<br>You have been given the role of <br>".$y['Role'];
            echo "<br>Admin will contact you!<br>";
            echo "<a href='index.html'>Logout</a></div>";
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