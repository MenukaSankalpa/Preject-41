<?php

$host="localhost";
$user="root";
$pass="";
$db="scdb";
$conn=new mysqli($host,$user,$db);
if($conn->connect_error){
    echo "Failed to connect DB".$conn->connect_error;
}

?>