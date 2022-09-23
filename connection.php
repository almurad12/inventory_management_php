<?php
#database connection
$con = new mysqli('localhost','root'.'','','anothertry');

if(!$con){
    die (mysqli_error($con));
}

?>