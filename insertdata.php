<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//$sql = "INSERT INTO MyGuests (firstname, lastname, email)
 VALUES ('Sutti', 'jaipong', 'sutti49@hotmail.com')";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
 VALUES ('Sutthipon', 'suthama', 'melody-to@hotmail.com')";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
 VALUES ('aaaaaaa', 'bbbbbb', 'aaaaa@hotmail.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
