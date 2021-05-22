<?php



$host = "localhost";

$user = "root";

$password = "rooter";

$dbName = "users";



// Connect to the database

$dbh = new PDO("mysql:host=$host;dbname=$dbName", $user, $password);



$sql = "

    create table j(n text)";



foreach ($dbh->query($sql) as $row) {

    echo $row[0] . ": " . $row[1], "\n";

}

$dbh = null; 
