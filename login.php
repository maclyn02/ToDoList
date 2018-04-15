<?php 
    $un=$_POST['uname'];
    if($un=="mac")
        echo "<script> window.location.href='UserScreen.php?uname=".$un."';</script>";
    else
        echo "Invalid User";
?>