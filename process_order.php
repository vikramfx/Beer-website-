<?php
// Establish connection to MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "beer_shop";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Beer_type = $_POST['Beer_type'];
$Quantity = $_POST['Quantity'];

// SQL query to insert data into database
$sql = "INSERT INTO beer_shop.orders (Name, Email, Beer_type, Quantity)
        VALUES ('$Name', '$Email', '$Beer_type', '$Quantity')";

if ($conn->query($sql) === TRUE) {
    echo "Booking successfully submitted!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
