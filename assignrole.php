<?php
if(isset($_GET['e'])){
    $email=$_GET['e'];
}
else{
    echo "<script>alert('Incorrect Input')</script>";
}
?>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        .form-group{
            width:50%;
            align-items: center;
            margin:auto;
            
        }
        body{
            margin-top:8%;
            background-image: url('backimg4.jpg');
        }
        .back{
            color:white;
            font-size:20px;
        }
    </style>
    </head>
<body>
<a class="back" href='adminhome.php'>Go Back</a>
<form method='post'>
<center>
    <h1>Assign Role</h1></center>
  <div class="form-group">
    <label >Email address</label>
    <input type="email" class="form-control" id="email" placeholder="<?php echo $email;?>" name="ema" readonly>
  </div>
  <div class="form-group">
    <label >Select Role</label>
    <select class="form-control" id="selectRole"name="role">
      <option>Product Designer</option>
      <option>Telecaller</option>
      <option>Manager</option>
      <option>Sales Associate</option>
      <option>Marketing Lead</option>
    </select>
  </div>
        <center>
    <button type="submit" name="sub" value="Submit" class="btn btn-primary">Submit</button> </center>
</form>
</body>
</html>
<?php
    if(isset($_POST['sub'])){
        $con=mysqli_connect("localhost","root","","internship");
        $role=$_POST['role'];
        $sql="UPDATE clientdetails SET Role='$role' WHERE Email='$email'";
        $x=mysqli_query($con,$sql);
        if($x){
            echo "<script>alert('Role assigned successfully')</script>";
        }
        else{
            echo "<script>alert('Error')</script>";
            
        }
    }

?>