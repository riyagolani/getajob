<html>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <style>
            .pointer{
                cursor: pointer;
            }
            .choose{
                float:right;
                background-color:#3d3d29;
                border:1px solid black;
            }
            .choose a{
                color:white;

            }
            .log{
                font-size:20px;
                float:left;
                background-color:black;
                box-sizing:border-box;
                padding: 10px;
                margin-left:5px;
                border-radius: 15px;
            }
            .log a{
                color:white;
            }
            body{
                background-image: url('backimg4.jpg');
            }
            table{
                border: 2px solid black;
                background-color:#d6d6c2;
            }
            
        </style>
</head>
<body >
        <div class="log">
        <a href="index.html">Logout</a>
        </div>
        <h1><center>Client Details</h1>
        <div class="choose">
        <a href="adminhome.php?f=0">All Clients |</a>
        <a href="adminhome.php?f=1">Unassigned Clients</a>
        </div>
</body>
</html>

<?php
    $con=mysqli_connect("localhost","root","","internship");
    if(isset($_GET['f'])){
        $flag=$_GET['f'];
    }
    else{
        $flag=0;
        }
    if($flag==1){
        $sql="select * from clientdetails where Role=''";}
    else{
        $sql="select * from clientdetails";
    }
    $x=mysqli_query($con,$sql);
    $z=mysqli_num_rows($x);
    $name=array();
    $email=array();
    $mob=array();
    $age=array();
    $ex=array();
    $role=array();
    $i=0;
    if($z>0){
        while($y=mysqli_fetch_array($x)){
            $name[$i]=$y['Name'];
            $email[$i]=$y['Email'];
            $mob[$i]=$y['Mobile'];
            $age[$i]=$y['Age'];
            $ex[$i]=$y['Work'];
            $role[$i]=$y['Role'];
            if($role[$i]==""){
                $role[$i]='-';
            }
            $i++;
        }
    }
    if($z<=0){
        echo "No clients registered.";
        echo "<a href='index.html'>Go back to Home Page</a>";
    }
    else{
        echo "
        <table class='table table-hover table-dark'>
        <tr><th>#</th><th>Name</th><th>Email</th><th>Mobile No</th><th>Age</th><th>Experience</th><th>Role</th><tr>";
        for($i=0;$i<$z;$i++){
            echo "<tr class='pointer' onclick="."document.location='assignrole.php?e=".$email[$i]."'>
                <td>".($i+1)."</td>
                <td>".$name[$i]."</td>
                <td>".$email[$i]."</td>
                <td>".$mob[$i]."</td>
                <td>".$age[$i]."</td>
                <td>".$ex[$i]."</td>
                <td>".$role[$i]."</td></a><tr>";
        }
        echo "</thead></table></body></html>";       
    }
?>