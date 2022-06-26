<?php
//Create connection credentials
$db_host = 'localhost';
$db_name = 'african_city_quizzer';
$db_user = 'root';
$db_pass = '';

//Create mysli object with procedural way (means with arrow)
$mysqli = new mysqli($db_host,$db_user,$db_pass,$db_name);

//Error Handler
if($mysqli->connect_error){
    printf('Connect failed: %s\n',$mysqli->connect_error);
    exit();
}
