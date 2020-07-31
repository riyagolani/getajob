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
    if($n=="mob"){
        if(!preg_match("/^[0-9]{10}$/",$s)){
            echo "Invalid Number";
        }
        else{
            echo "<span>valid</span>";
        }
    }
?>