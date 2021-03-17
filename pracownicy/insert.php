<?php

$servername = "remotemysql.com";
$username = "uAryroT03t";
$password = "wviPqvOO86";
$dbname = "uAryroT03t";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Pracownik (null, imie, dzial, zarobki) 
       VALUES (null,'Ksawery', 3, 36,'1995-10-21')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
