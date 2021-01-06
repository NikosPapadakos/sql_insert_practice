<?php

$user = 'root';
$password = 'root';
$db = 'project';
$host = 'localhost';
$port = 3306;


$link = mysqli_connect( 
   $host, 
   $user, 
   $password, 
   $db,
   $port
);

if($link === false){
    die("Error". mysqli_connect_error());
}


$email = mysqli_real_escape_string($link, $_POST['email']);
$sql = "INSERT INTO emails (id,email) VALUES (NULL,'$email')";

if(mysqli_query($link, $sql)){
    require_once './sent.php';
} else{
    require_once './error.php';
}
 
// Close connection
mysqli_close($link);
