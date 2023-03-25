<?php
//connecting to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbharry";

//create a connection 
$conn = mysqli_connect($servername, $username, $password, $database);

//die if connection was not successful
if(!$conn){
    die("sorry we failed to connect: ".mysqli_connect_error());
}
else{
echo "connection was successful <br>";
}


//create a table in the db

$sql = "CREATE TABLE `phptrip` ( `sno` INT(6) NOT NULL AUTO_INCREMENT , `name` VARCHAR(12) NOT NULL , `dest` VARCHAR(6) NOT NULL , PRIMARY KEY (`sno`))";

$result = mysqli_query($conn, $sql);

// Check for the table creation success
if($result){
    echo "The table was created successfully!<br>";
}
else{
    echo "The table was not created successfully because of this error ---> "
    . mysqli_error($conn);
}
?>