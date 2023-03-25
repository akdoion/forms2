<?php

//connecting to the database
$servername = "localhost";
$username = "root";
$password = "";

//create a connection 
$conn = mysqli_connect($servername, $username, $password);

//die if connection was not successful
if(!$conn){
    die("sorry we failed to connect: ".mysqli_connect_error());
}
else{
echo "connection was successful <br>";
}


//create a db
$sql = "CREATE DATABASE dbHarry";
$result = mysqli_query($conn, $sql);

//check for the database creation success
if($result){
    echo "db was created successfully <br>";
}
else{
    echo "db was not created successfully because of this error <br>" . mysqli_error($conn);
}

echo "the result is ";
echo var_dump($result);
echo "<br>";


?>