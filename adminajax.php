<?php
    $s=$_GET['q'];
    $n=$_GET['i'];
    if($n=="ema"){
        if (!filter_var($s, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid Email";
        }
        else{
            echo "<span>valid</span>";
        }
    }
    if($n=="pas"){
        if(strlen($s)<6){
            echo "Password should be 6 characters long";
        }
        else{
            echo "<span>valid</span>";
        }
    }
?>