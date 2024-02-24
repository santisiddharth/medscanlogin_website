<?php

$conn = new mysqli('localhost','root','','usersform');
if(!$conn){
    echo "Connection Denied!" . mysqli_connect_error();
}

?>